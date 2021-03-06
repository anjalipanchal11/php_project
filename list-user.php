<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<div class="card-body mx-auto">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th hidden>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once 'Database.php';
            require_once 'User.php';
            $db = Database :: getDB();
            $u = new User();
            $myuser = $u -> getAllUser(Database :: getDB());
            
            foreach($myuser as $user)
            {
                echo "<tr>
                <td hidden>  $user->id  </td>
                <td> <a href='user-detail.php?id=$user->id'>  $user->full_name </a> </td>
                <td>  $user->email_id  </td>
                <td>  $user->mobile_no  </td>
                <td>  $user->address  </td>
                <td> <a href='edit-user.php?id=$user->id' name='edituser' class='btn btn-primary btn-block'> Edit </a> </td>
                
                <td> <a href='delete-user.php?id=$user->id' name='deleteuser' class='btn btn-primary btn-block'> Delete </a> </td>
                </tr>
                ";   
            }

            ?>
        </tbody>
    </table>
</div>
<!--<td> <button type='submit' name='regiuser' class='btn btn-primary btn-block'> Edit </button> </td>-->