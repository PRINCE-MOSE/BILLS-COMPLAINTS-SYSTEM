<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
	$result = doChangePassword();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<html>
<head>
<title>NAWASCO Reset Password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--<link href="include/admin.css" rel="stylesheet" type="text/css">-->

<link href="<?php echo WEB_ROOT;?>include/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/main.css" rel="stylesheet" type="text/css">
<!-- Bootstrap core CSS-->
  <link href="include/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="include/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><b>Reset Account Password </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<a href="../index.php">Back Home</a></p></div>
      <div class="card-body">

<form method="post" name="frmLogin" id="frmLogin">
  <h6>Enter Details below to Reset Your Password</h6>
  <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
      <div class="form-group">
            <label for="exampleInputEmail1">Enter NAWASCO User Name: </label>
            <input name="txtUserName" type="text" class="form-control" 
            id="exampleInputEmail1"  required 
            placeholder="###">
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Enter Registred E-mail: </label>
            <input name="txtEmail" type="email" class="form-control" 
            id="exampleInputEmail1"  required 
            placeholder="###">
          </div>
        <div class="col-md-6">
                <label for="exampleInputLastName">Select User Type:</label>
                <select name="utype" class="form-control">
        <option >&nbsp;&nbsp;--User Type-- &nbsp;</option>
        <option value="employee">&nbsp;&nbsp;-Employee/Attendant &nbsp;</option>
        <option value="customer">&nbsp;&nbsp;-Customer &nbsp;</option>
        </select>
          </div><br>
          <input class="btn btn-primary btn-block" type="submit" name="btnLogin" type="submit" id="btnLogin" value=" Reset Password ">
      </form>
     
</div>
<div style="padding-left:20px;">
  <hr>
<p>Go back to homepage: <a href="../index.php">NAWASCO|</a></p>
</div>
    </div>
  </div>
</body>

</html>
