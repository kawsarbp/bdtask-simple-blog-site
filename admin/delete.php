<?php
session_start();
require '../dbcon.php';
if(isset($_GET['delete']))
{
    $deleteID = base64_decode($_GET['delete']);
    $result = mysqli_query($con,"DELETE FROM `blog` WHERE `id`='$deleteID'");
    if($result)
    {
        $_SESSION['message'] = 'Data Delete Success !';
        header('location: manage-blog.php');
    }
}

?>