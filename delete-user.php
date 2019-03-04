<?php
require_once 'Database.php';
require_once 'User.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    $u = new User();
    $count = $u->deleteUser($id,$dbcon);
    return $count;
    if($count) {
        header("Location:list-user.php");
    } else {
        echo "problem updating";
    }
    
}

