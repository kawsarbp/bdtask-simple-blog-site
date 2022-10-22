<?php
ob_start();
 require 'inc/header.php';
 
 if(isset($_POST['add_blog']))
 {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $file = explode('.',$_FILES['photo']['name']);
    $file_ex = end($file);
    $photo = date('dmyhis.').$file_ex;

    $result = mysqli_query($con,"INSERT INTO `blog`( `title`, `description`, `photo`) VALUES ('$title','$description','$photo') ");
    if($result)
    {
        move_uploaded_file($_FILES['photo']['tmp_name'],'../assets/img/'.$photo);
        // $_SESSION['message'] = 'Blog Added Success.';
        header('location: manage-blog.php');
    }else{
        $_SESSION['message'] = 'something wrong !';
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
                                <?php
                                if(isset($_SESSION['message'])) { ?>
                                    <h5 class="mb-md text-center text-success"><?= $_SESSION['message']; ?></h5>
                                 <?php unset($_SESSION['message']); } ?>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" required="" >
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="10" rows="4" class="form-control" placeholder="Description" required="" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <input type="file" name="photo" id="photo" class="form-control" required="" >
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="add_blog">Submit</button>
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