<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="{{ url('/') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="24">
                    </span>
                </a>
                <a href="{{ url('/') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="24">
                    </span>
                </a>
            </div>

<ul id="side-menu">

    <li class="menu-title">Menu</li>

    <li>
        <a href="{{ route('dashboard') }}" class="tp-link">
            <i data-feather="home"></i>
            <span> Dashboard </span>
        </a>
    </li>

        

    <li class="menu-title">Pages</li>

    <li>
        <a href="#sidebarAuth" data-bs-toggle="collapse">
            <i data-feather="users"></i>
            <span> Review Setup </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarAuth">
            <ul class="nav-second-level">
        <li>
            <a href="{{ route('all.review') }}" class="tp-link">All Review</a>
        </li>
        <li>
            <a href="{{ route('add.review') }}" class="tp-link">Add Review</a>
        </li>
                
            </ul>
        </div>
    </li>

    <li>
        <a href="#sidebarError" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span> Slider</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarError">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('slider.view') }}" class="tp-link">Slider view</a>
                </li>
                
            </ul>
        </div>
    </li>
    <li>
        <a href="#feature" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span>Feautes Setup</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="feature">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('features.all') }}" class="tp-link">All Features</a>
                </li>
                
                <li>
                    <a href="{{ route('features.add') }}" class="tp-link">Add Features</a>
                </li>
                
            </ul>
        </div>
    </li>

    <li>
        <a href="#clarifies" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span>Clarifies</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="clarifies">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('clarifies.add') }}" class="tp-link">Clarifie view</a>
                </li>
            </ul>
        </div>
    </li>

    <li>
        <a href="#financial" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span>Financial</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="financial">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('financial.add') }}" class="tp-link">Financial view</a>
                </li>
            </ul>
        </div>
    </li>    
    <li>
        <a href="#usability" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span>Usability Section</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="usability">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('usability.view') }}" class="tp-link">Usability view</a>
                </li>
            </ul>
        </div>
    </li>    
    <li>
        <a href="#faq" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span>FAQ</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="faq">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('faq.view') }}" class="tp-link">FAQ View</a>
                    <a href="{{ route('faq.add') }}" class="tp-link">Add FAQ</a>
                </li>
            </ul>
        </div>
    </li>    
    <li>
        <a href="#ourapp" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span>Our App</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="ourapp">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('ourapp.view') }}" class="tp-link">Our App </a>
                </li>
            </ul>
        </div>
    </li>    

   <li>
        <a href="#member" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span>Teams</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="member">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('members.view') }}" class="tp-link">Members</a>
                    <a href="{{ route('members.add') }}" class="tp-link">Add Member</a>
                </li>
            </ul>
        </div>
    </li>    
   <li>
        <a href="#aboutus" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span>About Us</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="aboutus">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('aboutus.view') }}" class="tp-link">AboutUs view</a>
                </li>
            </ul>
        </div>
    </li>    
   <li>
        <a href="#category" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span>Blog </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="category">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('category.view') }}" class="tp-link">Category</a>
                </li>
                <li>
                    <a href="{{ route('post.view') }}" class="tp-link">Post</a>
                </li>
                <li>
                    <a href="{{ route('post.add') }}" class="">Add Post</a>
                </li>
            </ul>
        </div>
    </li>    
    
   <li>
        <a href="#message" data-bs-toggle="collapse">
            <i data-feather="package"></i>
            <span>Contact</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="message">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('message.view') }}" class="tp-link">Message</a>
                </li>
            </ul>
        </div>
    </li>    
    

    

</ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>