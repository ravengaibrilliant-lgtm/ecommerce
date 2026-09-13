 <div class="container-fluid page-body-wrapper">
   <!-- partial:partials/_sidebar.html -->
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
       <li class="nav-item nav-profile">
         <a href="#" class="nav-link">
           <div class="nav-profile-image">
             
             <span class="login-status online"></span>
             <!--change to offline or busy as needed-->
           </div>

             <li class="nav-item">
          <a class="nav-link" href="{{url('/redirect')}}">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
          </li>
              <li class="nav-item">
         <a class="nav-link" href="{{url('view_category')}}">
           <span class="menu-title">Category</span>
           <i class="mdi mdi-home menu-icon"></i>
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
           <span class="menu-title">Products</span>
           <i class="menu-arrow"></i>
           <i class="mdi mdi-crosshairs-gps menu-icon"></i>
         </a>
         <div class="collapse" id="ui-basic">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{url('view_product')}}">Add products</a></li>
             <li class="nav-item"> <a class="nav-link" href="{{url('show_product')}}">show product</a></li>
           </ul>
         </div>

            <li class="nav-item">
             <a class="nav-link" href="{{url('order')}}">
               <span class="menu-title">Order</span>
               <i class="mdi mdi-basket menu-icon"></i>
             </a>
            </li>
       
       </li>
     </ul>
   </nav>
   <!-- partial -->