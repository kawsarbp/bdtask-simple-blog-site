<?php
require 'dbcon.php';
require 'inc/header.php' ?>
<!-- header section start -->
<header class="border bg-light py-4">
    <h1 class="text-center">This Is Blog Home Page</h1>
</header>
<!-- header section end -->
<br><br>
<!-- blog content start -->
<div class="container">
    <div class="row">
        <?php
        $result = mysqli_query($con,"SELECT * FROM `blog` ORDER BY `id` DESC");
        while($row = mysqli_fetch_array($result))
        { ?>
        <div class="col-md-4  mb-3">
            <div class="card">
                <div style="height: 250px;">
                <img src="assets/img/<?= $row['photo'] ?>" class="card-img-top w-100 h-100" alt="" >
                </div>
                <div class="card-body">
                    <div><i><?= date('d-M-Y',strtotime($row['datetime'])) ?></i></div>
                    <h4><?= $row['title'] ?></h4>
                    <p>
                        <?= substr($row['description'],0,150) ?>....
                    </p>
                    <a href="post.php?singlepost=<?= base64_encode($row['id']) ?>" class="btn btn-primary">Read more -></a>
                </div>
            </div>
        </div>
        <?php } ?>
        
    </div>
</div>
<br>
<!-- blog content end -->
<?php require 'inc/footer.php'; ?>