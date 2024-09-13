<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Categories;
use App\Models\User;
use App\Models\Leads;
use App\Models\Location;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\AssociateProfile;
use App\Models\Subcategory;
use App\Models\AssociateReview;

class UserController extends Controller
{
    public function viewCategory()
    {
        $data = DB::table('categories')->select('*')->where('status', 1)->orderBy('position', 'ASC')->paginate(8);

        $categories = Categories::where('status', 1)->orderBy('position', 'ASC')->get();

        return view('all_category',  compact('data', 'categories'));
    }

    public function viewContact()
    {
        return view('contactus');
    }

    public function viewAbout(){
        return view('aboutus');
    }

    public function Blogs(){
        $data = Blogs::latest()->paginate(4);
        return view('blogs', compact('data'));
    }

    public function UserLogout(Request $request): RedirectResponse{
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    
    public function Profile(){

        $user_id = Auth::user();

        $myreq = Leads::where('user_id', $user_id->id)->orderBy('created_at', 'Desc')->get();


        


        // return $myreq;
        // $id = Auth::user()->id;
        // $user_id = User::where('id', $id)->first();
        return view('profile', compact('user_id', 'myreq'));



    }

    public function AllCategory()
    {
        $data = Categories::where('status', 1)->paginate(8);
        return view('all_category',  compact('data'));
    }

    public function CategoryView($slug){

        $locations = Location::take(100)->get();

        // Retrieve the category by slug
        $category = Categories::where('slug', $slug)->first();

        
        $slug = Categories::where('slug', $slug)->first();

        $id = $slug->id;

        $profile = AssociateProfile::where('category_id', $id)->get();

        $subcategories = Subcategory::where('category_id', $slug['id'])->get();


        // return $profile;

        // foreach ($profile as $user_profile) {
        //     // Decode the JSON array of subcategory IDs
        //     $subcategoryIds = json_decode($user_profile->subcategory_id);

        //     // Fetch the subcategory names
        //     $user_profile->subcategories = Subcategory::whereIn('id', $subcategoryIds)->get();
        // }

        foreach ($profile as $user_profile) {
            // Decode the JSON array of subcategory IDs if it's valid
            $subcategoryIds = json_decode($user_profile->subcategory_id, true);

            if (is_array($subcategoryIds)) {
                // Fetch the subcategory names
                $user_profile->subcategories = Subcategory::whereIn('id', $subcategoryIds)->get();
            } else {
                $user_profile->subcategories = collect(); // Return an empty collection if invalid
            }
        }

        
        $count = $profile->count();
        
        $data = DB::table('sub_categories')->select('*')->where('category_id', $id)->where('status', 1)->get();
        
        return view('category_deatil', compact('slug', 'data', 'profile', 'count', 'locations', 'category', 'subcategories'));
    }


    public function profileListing(Request $request, $slug){
        // $category = Categories::where('slug', $slug)->first();

        // $profile = AssociateProfile::where('category_id', $category->id)->get();

        // foreach ($profile as $user_profile) {
        //     // Decode the JSON array of subcategory IDs if it's valid
        //     $subcategoryIds = json_decode($user_profile->subcategory_id, true);

        //     if (is_array($subcategoryIds)) {
        //         // Fetch the subcategory names
        //         $user_profile->subcategories = Subcategory::whereIn('id', $subcategoryIds)->get();
        //     } else {
        //         $user_profile->subcategories = collect(); // Return an empty collection if invalid
        //     }
        // }
        // $count = $profile->count();






        $locations = Location::take(100)->get();

        // Retrieve the category by slug
        $category = Categories::where('slug', $slug)->first();

        if (!$category) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        $subcategories = Subcategory::where('category_id', $category['id'])->get();

        // Initialize the query with the basic condition
        $query = AssociateProfile::with('subCategory')
            ->where('category_id', $category->id);

        // Apply Location filter if provided
        if ($request->has('location_id') && !empty($request->location_id)) {
            $query->where('location_id',(int)$request->location_id);
        }
        

        // Apply Subcategory filter if provided
        if ($request->has('subcategory_id') && !empty($request->subcategory_id)) {
            // Assuming subcategory_id is stored as a JSON array in the database
            $query->whereJsonContains('subcategory_id', (int)$request->subcategory_id);
        }

            // Apply Reviews Filter
        if ($request->filled('min_rating')) {
            $minRating = (int) $request->min_rating;
            // Ensure the minimum rating is between 1 and 5
            if ($minRating >= 1 && $minRating <= 5) {
                $query->whereHas('profileReview', function ($query) use ($minRating) {
                    $query->select('associate_id')
                        ->groupBy('associate_id')
                        ->havingRaw('AVG(star) >= ?', [$minRating]);
                });
            }
        }


        
        // Execute the query and get the profiles
        $profile = $query->get();

        // Process each profile to retrieve subcategories
        foreach ($profile as $user_profile) {
            $subcategoryIds = json_decode($user_profile->subcategory_id, true);

            if (is_array($subcategoryIds)) {
                $user_profile->subcategories = Subcategory::whereIn('id', $subcategoryIds)->get();
            } else {
                $user_profile->subcategories = collect();
            }
        }

        // return $profile;

        $count = $profile->count();



        return view('category-profile-listing', compact('category', 'profile', 'count', 'locations', 'subcategories')) ;



    }


    public function AssProfile($id)
    {
        $avg = 0;

        $id = DB::table('associate_profile')->select('*')->where('id', $id)->first();
        // dd($id);
        $cat_id = $id->category_id;

        $cat_name = Categories::where('id', $cat_id)->value('slug');

        $reviews = AssociateReview::where('associate_id', $id->id)->get();

        if(count($reviews) > 0){
            $avg = floor($reviews->sum('star')/count($reviews));
        }

        // dd($cat_name);
        return view('profile_view', compact('id', 'cat_name', 'reviews', 'avg'));
    }

    public function BlogsDetails($slug)
    {
        $blog = Blogs::where('slug', $slug)->first();
        $data = Blogs::latest()->paginate(3);
        // dd($blog);
        return view('blog_details', compact('blog', 'data'));
    }

    public function Listing($id)
    {
        $id = Categories::where('category_id', $id)->get();
        return view('listing', compact('id'));
    }
}
