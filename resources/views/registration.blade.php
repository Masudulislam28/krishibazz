
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">

<link rel="stylesheet" href="{{asset('assets')}}/css/registration.css" />
</head>
<body class="form-v5">
<div class="page-content">
<div class="form-v5-content">
<form class="form-detail" action="{{route('reg.store')}}" method="post">
@csrf

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif
@if(Session::has('message'))
    <div style="color:green" class="alert alert-success"> {{ Session::get('message') }}</div>
  @endif

<h2>Register Account Form</h2>


<div class="form-row">
<label for="user_type">User type</label>
<select  type="text" name="user_type" id="username" class="input-text" placeholder="Fill user name" required pattern="">
    <option value="">Choose user type.</option>
    <option value="Farmer">Farmer</option>
    <option value="Wholeseller">Wholeseller</option>
    
    </select>

</div>
<div class="form-row">
<label for="username">User Name</label>
<input data-type="text" name="username" id="username" class="input-text" placeholder="Fill user name" >
<i class="fas fa-envelope"></i>
</div>
<div class="form-row">
<label for="password">Password</label>
<input type="password" name="password" id="password" class="input-text" placeholder="Fill your password" required>
<i class="fas fa-lock"></i>
</div>
<div class="form-row">
<label for="email">Email</label>
<input type="email" name="email" id="email" class="input-text" placeholder="Your Email" >
<i class="fas fa-envelope"></i>
</div>
<div class="form-row">
<label for="mobile_num">Mobile_Num</label>
<input type="number" name="mobile_num" id="mobile_num" class="input-text" placeholder="Your Mobile Number" >
<i class="fas fa-envelope"></i>
</div>
<div class="form-row">
<label for="address">Address</label>
<input type="text" name="address" id="address" class="input-text" placeholder="Your Address" >
<i class="fas fa-envelope"></i>
</div>
<div class="form-row-last">
<input type="submit" name="register" class="register" value="Register">
</div>
<div id="register-link" class="text-right">
                                <a href="{{route('login.form')}}" class="text-info">Go Back to Login</a>
                            </div>
</form>
</div>
</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>