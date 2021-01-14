 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Krishibazz</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Admin Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu (JAILOR) -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Farmer</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{route('farmer.form')}}">Add Farmer</a>
            <a class="collapse-item" href="{{route('farmer.list')}}">View Farmer List</a>
           
           
            
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu (PRISONER) -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwin"
        aria-expanded="true" aria-controls="collapseTwin">
        <i class="fas fa-fw fa-cog"></i>
        <span>WholeSeller</span>
    </a>
    <div id="collapseTwin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{route('wholeseller.form')}}">Add Wholeseller</a>
            <a class="collapse-item" href="{{route('wholeseller.list')}}">View Wholeseller List</a>
       
          
        </div>
    </div>
     
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{route('all.registered')}}" >
        
        <i class="fas fa-fw fa-cog"></i>
        <span>All Registered</span>
    </a>
   
     
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{route('all.post')}}" >
        
        <i class="fas fa-fw fa-cog"></i>
        <span>View All post Advertise</span>
    </a>
   
     
</li>


<li class="nav-item">
    <a class="nav-link collapsed" href="{{route('manage.transaction')}}" >
        
        <i class="fas fa-fw fa-cog"></i>
        <span>Manage transaction</span>
    </a>
   
     
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="{{route('admin.logout')}}" >
        
        <i class="fas fa-fw fa-cog"></i>
        <span>Logout</span>
    </a>
   
     
</li>





<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">





</ul>

<!-- End of Sidebar -->