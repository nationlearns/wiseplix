<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Menu</li>

        <li>
            <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.all.category') }}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>All Category</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.all.subcategory') }}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>All SubCategory</span>
            </a>
        </li>
        <li>
            <a href="{{ route('all.price') }}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Add Price</span>
            </a>
        </li>
        <li>
            <a href="{{ route('all.questions') }}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>All Questions</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.all.blogs') }}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>All Blogs</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.all.faqs') }}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Faq's</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.contact.us') }}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Contact Us</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.all.users') }}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Customers</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.associate.index') }}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Associate Profile</span>
            </a>
        </li>
        <li>
            <a href="{{route('all.leads')}}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Leads</span>
            </a>
        </li>

        <li>
            <a href="{{route('admin.lead-purchase.index')}}" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Lead Purchased</span>
            </a>
        </li>


        <li>
            <a href="/admin/employee/leads" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>All Leads</span>
            </a>
        </li>


    </ul>
</div>
