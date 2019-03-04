<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!--Php code-->
<?php

require_once 'Database.php';
require_once 'User.php';

$db = Database :: getDB();
$u = new User();

if(isset($_POST['regiuser']))
{
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    $mobile = $_POST['mobile'];
    $addr = $_POST['addr'];
    $pcode = $_POST['pcode'];
    
    $myuser = $u -> addUser($fname,$email,$pwd,$cpwd,$mobile,$addr,$pcode);
}

?>

<div class="card bg-light">
    <article class="card-body mx-auto">
        <h4 class="card-title mt-3 text-center">Create Account</h4>
        <p class="text-center">Get started with free account</p>
        <form action="" method="post">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input name="fname" class="form-control" placeholder="Full Name" type="text">
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input name="email" class="form-control" placeholder="Email Id" type="text">
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                </div>
                <input name="pwd" class="form-control" placeholder="Password" type="password">
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                </div>
                <input name="cpwd" class="form-control" placeholder="Confirm Password" type="password">
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                </div>
                <select class="custom-select" style="max-width: 80px;">
		            <option selected="">+1</option>
                </select>
                <input name="mobile" maxlength="10" class="form-control" placeholder="Mobile Number" type="text">
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                </div>
                <input name="addr" class="form-control" placeholder="Address" type="text">
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-map"></i></span>
                </div>
                <input name="pcode" class="form-control" placeholder="Postal Code" type="text">
            </div>
            <div class="form-group">
                <button type="submit" name="regiuser" class="btn btn-primary btn-block"> Create Account </button>
            </div>
            <p class="text-center">Already have an account ? <a href=""> Log In Here... </a></p>
        </form>
    </article>
</div>