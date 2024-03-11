<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Đăng kí</title>
    <link rel="stylesheet" href="{{ asset('resources/css/Login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body>
  <div class="bg-img">
    <div class="content">
      <header>Resgisted Form</header>
      <form method="POST" action="{{ route('register') }}" >
        <div class="field">
          <span class="fa fa-user"></span>
          <input type="text" required placeholder="Email or Phone"  name="email" value="{{ old('email') }}">
        </div>
        <div class="field space">
          <span class="fa fa-user"></span>
          <input type="text" required placeholder="User Name" name="name" value="{{ old('name') }}" >
        </div>
        
        <div class="field space">
  <span class="fa fa-user"></span>
  <select required style="width: 100%;" name="role" >
    <option disabled value="">Select Role</option>
    <option value="user">User</option>
    <option value="admin">ADmin</option>
  </select>
</div>

        <div class="field space">
          <span class="fa fa-lock"></span>
          <input type="password" class="pass-key" required placeholder="Password" name="password" >
      
        </div>
        <div class="pass">
          <a href="#">Forgot Password?</a>
        </div>
        <div class="field">
          <input type="submit"  value="SIGNUP">
        </div>
      </form>
      <div class="login">Or login with</div>
      <div class="links">
        <div class="facebook">
          <i class="fab fa-facebook-f"><span>Facebook</span></i>
        </div>
        <div class="instagram">
          <i class="fab fa-instagram"><span>Instagram</span></i>
        </div>
      </div>
      <div class="signup">Don't have account?
        <a href="#" >Login Now</a>
      </div>
    </div>
  </div>

    <script>
    
    </script>


  </body>
</html>
