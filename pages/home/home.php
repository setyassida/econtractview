<!DOCTYPE html>
<html>
<head>
    <title>eContract Badak NGL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap style -->
    <!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap-themes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap-themes.min.css"> -->
    <link rel="stylesheet" href="../../resources/css/style.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12" style="min-height: 100%; max-height: auto;">
        <img src="../../resources/images/header.png" class="image-header" alt="">
      </div>
    </div>

    <div class="row">
      <div class="col-md-2 col-xs-4">
        <img src="../../resources/images/left.png" class="image-left">
      </div>
      <div class="col-md-6 col-xs-4">
        <div class="col-md-12">
          <h2 class="dark-grey" >Welcome to eContract PT Badak NGL</h2>
          <h4 class="dark-grey" >Please fill the form to access this website</h4>
        </div>
        <div class="col-md-6">
          <form method="get" id="formid" name="myform">
            <div class="form-group col-md-12">
              <label>Username</label>
              <input type="" name="id" class="form-control" id="username" value="" required="">
            </div>
            <div class="form-group col-md-12">
              <label>Password</label>
              <input type="password" name="pass" class="form-control" id="password" value="" required="">
            </div>

            <div class="form-group col-md-3">
              <input type="button" class="btn btn-primary" id="submit" onClick="validate()" value="Login">
              <!-- <button type="submit" class="btn btn-primary btn-lg" onClick="validate()" return false;>Login</button> -->
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4 col-xs-4"> 
        <img src="../../resources/images/right.png" class="image-right">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <img src="../../resources/images/footer2.png" class="image-footer">
      </div>
      <strong><p class="text-footer text-footer-w">Head Office - Jakarta: Wisma Nusantara 9th Floor, Jl. MH Thamrin No. 59 ,Jakarta 10350, Indonesia</p></strong>
      <p class="text-footer-w" style="margin-left: 435px;">Telp: 021 31930243(3lines), 319 36317(4 lines), Fax: 021 314 2974, Telex: 61417 BDKLNG IA</p>
      <strong><p class="text-footer-w" style="margin-left: 480px;">Plant Site - Bontang: Bontang 75324, East Kalimantan, Indonesia</p></strong>
      <p class="text-footer-w" style="margin-left: 395px;">Telp: 0548 42100, 21133(10 liens), Fax: 0548 27500, 21605, 22388, Telex: 38283 BDKLNG IA, 37211 BDKBPP IA</p>
    </div>

</div>

</body>

<script language="javascript">
var attempt = 3; 
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "admin" && password == "admin"){
alert ("Login successfully");
document.location.href = 'dashboard.php'; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}
</script>

</html>
