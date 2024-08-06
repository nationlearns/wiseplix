<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Categories;
use App\Models\Faqs;
use App\Models\User;
use App\Models\Questions;
use App\Models\QuestionOptions;
use App\Models\Leads;
use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BackendController extends Controller
{
    public function AllCategory()
    {
        $data = DB::table('categories')->get();

        return view('admin.category.index', compact('data'));
    }

    public function AllSubCategory()
    {
        $data = DB::table('sub_categories')->get();
        return view('admin.subcategory.index', compact('data'));
    }

    public function AllBlogs()
    {
        $data = Blogs::latest()->get();
        return view('admin.blogs.index', compact('data'));
    }

    public function AddBlogs()
    {
        $data = DB::table('categories')->get();
        return view('admin.blogs.add_blog', compact('data'));
    }

    public function StoreBlog(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'blogs_image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'place' => 'required',
            'created_by' => 'required',
        ]);
        $cimage = $request->file('blogs_image');
        $c_name_gen = hexdec(uniqid()) . '.' . $cimage->getClientOriginalExtension();
        $save_path = 'uploads/blogs_image/';
        $cimage->move($save_path, $c_name_gen);
        $save_url = $save_path . $c_name_gen;
        Blogs::insert([
            'category_id' => $request->category_id,
            'blogs_image' => $save_url,
            'title' => $request->title,
            'description' => $request->description,
            'place' => $request->place,
            'created_by' => $request->created_by,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('admin.all.blogs')->with('success', 'Blogs Created Successfully');
    }

    public function Faqs()
    {
        $data = Faqs::latest()->get();
        return view('admin.faqs.index', compact('data'));
    }
    public function AddFaqs()
    {
        $data = DB::table('categories')->get();
        return view('admin.faqs.add_faqs', compact('data'));
    }

    public function StoreFaqs(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'question' => 'required',
            'answers' => 'required',
        ]);
        Faqs::insert([
            'category_id' => $request->category_id,
            'question' => $request->question,
            'answers' => $request->answers,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('admin.all.faqs')->with('success', 'Faqs Created Successfully');
    }

    public function AllUsers()
    {
        $data = User::where('role', '!=', 'admin')->latest()->get();
        return view('admin.users.index', compact('data'));
    }

    public function EditBlogs($id)
    {
        $id = Blogs::findOrFail($id);
        // dd($id);
        $data = DB::table('categories')->get();
        return view('admin.blogs.edit_blog', compact('id', 'data'));
    }

    public function UpdateBlog(Request $request)
    {

        $id = $request->id;
        $oldImage = $request->old_image;
        if ($request->file('blogs_image')) {
            $cimage = $request->file('blogs_image');
            $c_name_gen = hexdec(uniqid()) . '.' . $cimage->getClientOriginalExtension();
            $save_path = 'uploads/blogs_image/';
            $cimage->move($save_path, $c_name_gen);
            $save_url = $save_path . $c_name_gen;
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
            Blogs::findOrFail($id)->update([
                'category_id' => $request->category_id,
                'blogs_image' => $save_url,
                'title' => $request->title,
                'description' => $request->description,
                'place' => $request->place,
                'created_by' => $request->created_by,
                'updated_at' => Carbon::now()
            ]);

            return redirect()->route('admin.all.blogs')->with('success', 'Blog Updated With Image Successfully');
        } else {
            Blogs::findOrFail($id)->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'description' => $request->description,
                'place' => $request->place,
                'created_by' => $request->created_by,
                'updated_at' => Carbon::now()
            ]);
            return redirect()->route('admin.all.blogs')->with('success', 'Blog Updated withOut Image Successfully');
        }
    } // End Method

    public function DeleteBlogs($id)
    {
        $oldImg = Blogs::findOrFail($id);
        unlink($oldImg->blogs_image);

        Blogs::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Blogs Deleted Successfully...');
    }

    public function EditFaqs($id)
    {
        $id = Faqs::findOrFail($id);
        $data = DB::table('categories')->get();
        return view('admin.faqs.edit_faqs', compact('id', 'data'));
    }

    public function UpdateFaqs(Request $request)
    {
        $id = $request->id;
        Faqs::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'question' => $request->question,
            'answers' => $request->answers,
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('admin.all.faqs')->with('success', 'Faqs Updated Successfully');
    }
    public function DeleteFaqs($id)
    {
        $id = Faqs::findOrFail($id);
        $id->delete();
        return redirect()->back()->with('success', 'Faqs deleted successfully....');
    }

    public function UserProfile($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.view_profile', compact('user'));
    }

    


    public function Questions()
    {
        $data = Questions::with('category', 'subcategory')->get();
        return view('admin.questions.index', compact('data'));
    }

    public function AddQuestion()
    {
        $cat = Categories::get();
        return view('admin.questions.addquestion', compact('cat'));
    }

    public function StoreQuestion(Request $request)
    {
        $question = Questions::create([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'question_label' => $request->question_label,
            'created_at' => Carbon::now()
        ]);


        return redirect()->route('add.question.option', $question['id'])->with('success', 'Questions Added Sucessfully');
    }







    public function EditQuestion($id){
        $id = Questions::findOrFail($id);
        $cat = Categories::get();
        return view('admin.questions.editquestion', compact('cat', 'id'));
    }

    public function UpdateQuestion(Request $request){
        $id = $request->id;

        Questions::findOrfail($id)->update([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'question_label' => $request->question_label,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('all.questions')->with('success', 'Questions Updated Sucessfully');
    }

    public function DeleteQuestion($id){
        $id = Questions::findOrFail($id)->delete();
        return redirect()->route('all.questions')->with('success', 'Questions Deleted Sucessfully');
    }

    public function getOption($id){
        $data = QuestionOptions::where('id', $id)->first();
        return response()->json($data, 200);
    }

    public function showAddOptionPage(Request $request, $id){

        $cat = Categories::get();

        $question = Questions::where('id', $id)->first();

        return view('admin.questions.option.create', compact('cat', 'question'));

    }

    public function storeOptions(Request $request, $id){

        $question = Questions::where('id', $id)->first();        

        // Loop through the titles and save them to the database
        foreach ($request->title as $title) {

            QuestionOptions::create([
                'question_id' => $question['id'],
                'title' => $title,
                'val' => $title,
            ]);
        }

        // Redirect back with a success message
        return redirect()->route('show.question.options', $question['id'])->with('success', 'Options saved successfully!');




    }

    public function showOption($id){
        $question = Questions::where('id', $id)->first();

        $options = QuestionOptions::where('question_id', $question['id'])->get();
        return view('admin.questions.option', compact('question', 'options')); 

    }


    public function updateOption(Request $request, $id){

        QuestionOptions::findOrfail($id)->update([
            'title' => $request['title'],
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Option Updated successfully!');
    }

    public function deleteOption($id){
        QuestionOptions::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Questions Deleted Sucessfully');

    }

    
}
