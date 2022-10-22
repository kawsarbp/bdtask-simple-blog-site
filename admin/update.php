<?php
ob_start();
require 'inc/header.php';
if(isset($_GET['update']))
{
    $id = base64_decode($_GET['update']);
    $result = mysqli_query($con,"SELECT * FROM `blog` WHERE `id`='$id'");
    $row = mysqli_fetch_array($result);
    $old_photo = $row['photo'];

}



if(isset($_POST['update_blog']))
{
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];


    $result = mysqli_query($con,"SELECT * FROM `blog` WHERE `id`='$id'");
    $row = mysqli_fetch_array($result);
    $old_photo = $row['photo'];

    
    
    $file = explode('.',$_FILES['photo']['name']);
    $file_ex = end($file);
    $photo = date('dmyhis.').$file_ex;
    
    if(empty($_FILES['photo']['name']))
        {
            $result = mysqli_query($con, "UPDATE `blog` SET `title`='$title',`description`='$description',`photo`='$old_photo' WHERE `id`='$id';");
        }
        else
        {
            $result = mysqli_query($con, "UPDATE `blog` SET `title`='$title',`description`='$description',`photo`='$photo' WHERE `id`='$id';");
        }
        if($result)
        {
            move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/img/'.$photo);
            $_SESSION['blog_update'] = 'Blog Update Successfully!';
            header('Location: manage-blog.php?id='.base64_encode($id));
        }
        else
        {
            $_SESSION['blog_notupdate'] = 'Blog Not Update!';
            header('Location: manage-blog.php?id='.base64_encode($id));
        }
    


}
 
 ?>
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
            <li><a href="index.php">Blog</a></li>
        </ul> 
    </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <br>
        <div class="col-sm-12 col-md-6">
            <h4 class="section-subtitle"><b>Add Blog </b> Form</h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    <input type="text" class="form-control" id="title" value="<?= $row['title'] ?>" name="title" placeholder="Title" required="" >
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="10" rows="4" class="form-control" placeholder="Description" required="" >
                                    <?= $row['description'] ?>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <input type="file" name="photo" id="photo" value="<?= $row['photo'] ?>" class="form-control" >
                                    <img style="width: 150px; height: 100px; " src="../assets/img/<?= $row['photo'] ?>" class="img-fluid"  alt="">
                                    
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="update_blog">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

             
<?php
require 'inc/footer.php'; ?>