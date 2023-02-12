  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name; }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('menu.create') }}" class="nav-link {{ (request()->is('menu/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Settings<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('contact.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contact.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('menu.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Menue</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="{{ route('headerlogo.create') }}" class="nav-link {{ (request()->is('headerlogo/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Header<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('headerlogo.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Header Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('headerlogo.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Header Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('headeraddress.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Header Address</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('headeraddress.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Header Address</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('menu.create') }}" class="nav-link {{ (request()->is('menu/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Menu<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('menu.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('menu.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Menu</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('headericon.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Social Icon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('headericon.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Social Icon</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('footermenu.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Footer Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('footermenu.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Footer Menu</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="{{ route('slider.create') }}" class="nav-link {{ (request()->is('slider/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Slider<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('slider.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('slider.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Slider</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('portfolio.create') }}" class="nav-link {{ (request()->is('portfolio/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Portfolio<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('portfolio.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Portfolio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('portfolio.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Portfolio</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('post.create') }}" class="nav-link {{ (request()->is('post/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Posts<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('post.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Posts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Posts</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('category.create') }}" class="nav-link {{ (request()->is('category/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Categorys<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('category.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Category</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('tag.create') }}" class="nav-link {{ (request()->is('tag/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Tags<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('tag.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Tags</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tag.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Tags</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('feature.create') }}" class="nav-link {{ (request()->is('feature/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Feature<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('feature.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Feature</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('feature.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Feature</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('about.create') }}" class="nav-link {{ (request()->is('about/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>About<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('about.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('about.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('aboutsub.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add About Sub</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('aboutsub.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All About Sub</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('service.create') }}" class="nav-link {{ (request()->is('service/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Service<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('service.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('service.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Service</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item">
            <a href="{{ route('testimonial.create') }}" class="nav-link {{ (request()->is('testimonial/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Testimonial<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('testimonial.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('testimonial.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Testimonial</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('ourteam.create') }}" class="nav-link {{ (request()->is('ourteam/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Our Team<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('ourteam.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('ourteam.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Team</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('counter.create') }}" class="nav-link {{ (request()->is('counter/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Counter<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('counter.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Counter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('counter.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Counter</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('partner.create') }}" class="nav-link {{ (request()->is('partner/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Our Partner<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('partner.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Partner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('partner.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Partner</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('consulation.create') }}" class="nav-link {{ (request()->is('consulation/create')) ? 'active': '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>FREE CONSULTATION<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('consulation.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New CONSULTATION</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('consulation.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All CONSULTATION</p>
                </a>
              </li>
            </ul>
          </li>





          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Log Out</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Password Change</p>
            </a>
          </li>


          



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>