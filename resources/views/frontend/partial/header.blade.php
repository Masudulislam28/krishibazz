<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center">

      <div class="logo mr-auto" style="padding-left: 50px;">

        <h1 class="text-light">
        <a href="#"><img  src="#" alt="" class="img-fluid"></a>
        <a style="" href="{{route('home')}}" ><span>KRISHIBAZZ</span></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->

      </div>
        

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="{{ Route::currentRouteName() ==  'home' ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>
          <li class="{{ Route::currentRouteName() ==  'about.us' ? 'active' : '' }}">@guest<a href="#">About Us</a>@endguest</li>
          
          <li><a href="#">Training</a></li>
          
          <li>@guest<a href="#">Contact Us</a>@endguest</li>
        
          
          <li class="book-a-table text-center"> @auth <a href="{{route('my.post')}}">My Posts</a>@endauth</li>

          <li class="book-a-table text-center"> @auth <a href="{{route('farmer.post')}}">Create Post</a>@endauth</li>
          
          <li class="book-a-table text-center">@auth<a href="{{route('advertise.view')}}">View All Post</a>@endauth</li>

          <li class="book-a-table text-center">@auth<a href="{{route('view.sellrequest')}}">View sell request</a>@endauth</li>
         
        
        <li >
       
       <i class="book-a-table text-center">@guest<a href="{{route('login.form')}}"><b>Login</b></a>@endguest</i>
       </div>

       @auth
       
     <div class="drop-down">
 <a class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img src="https://images.unsplash.com/reserve/bOvf94dPRxWu0u3QsPjF_tree.jpg?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MXwxMjA3fDB8MXxzZWFyY2h8Nnx8bmF0dXJhbHx8MHx8fA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080" alt="Avatar" 
style="
   width: 35px;
   height: 35px;
   border-radius: 50%;
   margin: 0px 10px 0 0;">
</a>
 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
   <a class="dropdown-item" href="{{route('view.profile')}}">Profile</a>

    <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a> 
   
 </div>
</li>
@endauth
</div>
        </ul>
      </nav><!-- .nav-menu -->
      

    </div>
  </header><!-- End Header -->