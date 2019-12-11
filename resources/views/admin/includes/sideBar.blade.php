<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Myanzi admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">hi</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Catalog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.category')}}" class="nav-link small"> 
                <i class="fa fa-angle-double-right"></i>           
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.products')}}" class="nav-link small">
                  <i class="fa fa-angle-double-right"></i> 
                  <p>Products</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.suppliers')}}" class="nav-link small">
                  <i class="fa fa-angle-double-right"></i> 
                  <p>Suppliers</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.reviews')}}" class="nav-link small">
                  <i class="fa fa-angle-double-right"></i> 
                  <p>Reviews</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link small">
                  <i class="fa fa-angle-double-right"></i> 
                  <p>information</p>
                </a>
              </li>
              </li>
             
            </ul>
          </li>
          
 
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Design
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.banners')}}" class="nav-link small"> 
                <i class="fa fa-angle-double-right"></i>                 
                  <p>Banners</p>
                </a>
              </li> 
            </ul> 
          </li>                
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
               Sales
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item small">
                <a href="{{route('admin.orders')}}" class="nav-link "> 
                <i class="fa fa-angle-double-right"></i>                  
                  <p>Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.returns')}}" class="nav-link small"> 
                <i class="fa fa-angle-double-right"></i>                  
                  <p>Returns</p>
                </a>
              </li>        
              <li class="nav-item">
                  <a href="{{route('admin.coupons')}}" class="nav-link small">
                    <i class="fa fa-angle-double-right"></i> 
                    <p>Coupons</p>
                  </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Customers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.customers')}}" class="nav-link small">
                <i class="fa fa-angle-double-right"></i>   
                  <p>Customer</p>
                </a>
              </li> 
            </ul>
          </li> 

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-share-alt"></i>
              <p>
                Marketing
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="#" class="nav-link small">
                  <i class="fa fa-angle-double-right"></i> 
                  <p>Coupons</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="{{route('admin.mail')}}" class="nav-link small">
                  <i class="fa fa-angle-double-right"></i> 
                 <p>Mail</p>
                  </a>
              </li> 

           </ul> 
          </li>     

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-truck"></i>
              <p>
                Shipping
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="#" class="nav-link small">
                  <i class="fa fa-angle-double-right"></i> 
                  <p>Carriers</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="#" class="nav-link small">
                  <i class="fa fa-angle-double-right"></i> 
                 <p>Preferences</p>
                  </a>
              </li>
            </ul> 
          </li>

          <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-credit-card"></i>
                <p>
                  Payments
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link small zoom">
                    <i class="fa fa-angle-double-right"></i> 
                    <p>Payment methods</p>
                  </a>
                </li> 

                <li class="nav-item">
                  <a href="#" class="nav-link small">
                    <i class="fa fa-angle-double-right"></i> 
                   <p>Preferences</p>
                    </a>
                </li>
              </ul> 
          </li>   

          <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  System
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link small">
                  <i class="fa fa-angle-double-right"></i> 
                  <p>Backup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link small">
                  <i class="fa fa-angle-double-right"></i> 
                   <p>Uploads</p>
                </a>
               </li>
             </ul> 
          </li>

          <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-signal"></i>
                <p>
                  Reports
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link small">
                    <i class="fa fa-angle-double-right"></i> 
                    <p>Report</p>
                  </a>
                </li> 
                <li class="nav-item">
                  <a href="#" class="nav-link small">
                    <i class="fa fa-angle-double-right"></i> 
                   <p>Who is online</p>
                  </a>
                </li> 

                <li class="nav-item">
                  <a href="#" class="nav-link small">
                    <i class="fa fa-angle-double-right"></i> 
                       <p>Statistics</p>
                  </a>
                </li> 

              </ul> 
          </li>   

        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>