<section id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
<div >
       
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
</div>
@endauth
  
  </section>