<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Informasi Uang Kuliah Tunggal</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #9e8bc7;">
  
  <div class="limiter" >
    <div class="container-login100">
      <div class="wrap-login100" align="center">     
        <form method="POST" action="{{ route('login') }}" class="login100-form validate-form" >
          {{ csrf_field() }}

          <span class="login100-form-title p-b-43">
             <img src="images/logounand.bmp">
          </span>      
             <p>Login dengan <i>"Username"</i> menggunakan <b>Nomor Peserta</b> dan <i>"Password"</i> dengan <b>Tanggal Lahir</b>, format : ddmmyyyy (contoh => Tanggal lahir: 02-12-1999 ditulis: 02121999)</p>
             <br>
          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input id="name" type="text" class="input100" name="name" value="{{ old('name') }}" >    
              <span class="focus-input100"></span>
            <span class="label-input100">Nomor Peserta</span>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>                     
          
          <div class="wrap-input100 validate-input" data-validate="Password is required" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="input100" name="password" required>   
              <span class="focus-input100"></span>        
            <span class="label-input100">Password</span>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div> 
                        <br> 
  

          <div class="container-login100-form-btn form-group" >
            <button class="login100-form-btn">
              Login
            </button>
          </div>
          
          
          <p class="footer-text text-center" style="margin-top: 20px;color: #308ee0">Copyright © {{date('Y')}} - All rights reserved.</p>
        </form>

        <div class="login100-more" style="background-image: url('images/itam.jpg');">
          <img src="/images/ukt2.png" width="100%" class="img-fluid img-thumbnail rounded">
            <br>          
        

      
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>