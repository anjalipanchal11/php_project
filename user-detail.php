<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<?php
require_once 'Database.php';
require_once 'User.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    
    $u = new User();
    $user = $u->getUserById($id,$dbcon);
}
if(isset($_POST['backtolist']))
{
    //$id = $_POST['id'];
    //$fname = $_POST['fname'];
    //$email = $_POST['email'];
    //$pwd = $_POST['pwd'];
    //$cpwd = $_POST['cpwd'];
    //$mobile = $_POST['mobile'];
    //$addr = $_POST['addr'];
    //$pcode = $_POST['pcode'];
    
    //$count = $u -> updateUser($id,$fname,$email,$mobile,$addr,$pcode,$dbcon);

    //if($count) {
        header("Location: list-user.php");
    //} else {
      //  echo "problem updating";
    //}
    
}

?>
<div class="card bg-light">
    <article class="card-body mx-auto">
        <form action="" method="post">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input name="id" class="form-control" value="<?= $user->id; ?>" type="hidden" />
                <input name="fname" class="form-control" placeholder="Full Name" value="<?= $user->full_name?>" />
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input name="email" class="form-control" placeholder="Email Id" value="<?= $user->email_id; ?>" type="text" />
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                </div>
                <select class="custom-select" style="max-width: 80px;">
		            <option selected="">+1</option>
                </select>
                <input name="mobile" maxlength="10" class="form-control" placeholder="Mobile Number" value="<?= $user->mobile_no; ?>" type="text" />
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                </div>
                <input name="addr" class="form-control" placeholder="Address" value="<?= $user->address; ?>" type="text" />
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-map"></i></span>
                </div>
                <input name="pcode" class="form-control" placeholder="Postal Code" value="<?= $user->postal_code; ?>" type="text" />
            </div>
            <div class="form-group">
                <button type="submit" name="backtolist" class="btn btn-primary btn-block"> Back to List </button>
            </div>
            
        </form>
    </article>
</div>


