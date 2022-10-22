<?php
require 'dbcon.php';

require 'inc/header.php';

$singlePost = base64_decode($_GET['singlepost']);

$result = mysqli_query($con,"SELECT * FROM `blog` WHERE `id`='$singlePost'");
$row = mysqli_fetch_array($result);

?>
<header class="border bg-light py-3">
    <h1 class="text-center">Single Blog Post</h1>
</header>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div style="width: 100%; height: 400px;">
                <img src="assets/img/<?= $row['photo'] ?>" class="w-100 h-100 img-fluid" alt="">
            </div>
            <br>
            <div><i><?= date('d-M-Y',strtotime($row['datetime'])) ?></i></div>
            
            <h4 class="mt-2"><?= $row['title'] ?></h4>
            <p>
                <?= $row['description'] ?>
            </p>
        </div>
    </div>
</div>
<br>
<div class="container">
    <h2 class="text-center">Blog Post are here</h2>
    <br>
    <div class="row">
    <div class="owl-carousel owl-theme">
        <?php
        $result = mysqli_query($con,"SELECT * FROM `blog` ORDER BY `id` DESC");
        while($row1 = mysqli_fetch_array($result)){
            ?>
            <div class="item ">
                <div class="card">
                    <div style="height: 250px;">
                        <img src="assets/img/<?= $row1['photo'] ?>" class="card-img-top w-100 h-100" alt="" >
                    </div>
                <div class="card-body">
                    <div><i><?= date('d-M-y',strtotime($row1['datetime'])) ?></i></div>
                        <h4><?= substr($row1['title'],0,10) ?>....</h4>
                        <p>
                        <?= substr($row1['description'],0,50) ?>....
                        </p>
                    <a href="post.php?singlepost=<?= base64_encode($row1['id']) ?>" class="btn btn-primary btn-sm">Read more -></a>
                </div>
                </div>
            </div>
            <?php } ?>
        

    </div>
    </div>
</div>
<br>
<?php require 'inc/footer.php'  ?>