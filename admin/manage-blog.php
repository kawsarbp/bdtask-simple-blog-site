<?php require 'inc/header.php'; ?>
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
    <div class="col-sm-12">
        <h4 class="section-subtitle"><b>Manage Blog</b></h4>
        <div class="panel">
            <div class="panel-content">
                <div class="table-responsive">
                    <div id="basic-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <?php if(isset($_SESSION['blog_update'])) { ?>
                                <h3 class="text-center text-success"><?= $_SESSION['blog_update']; ?></h3>
                            <?php unset($_SESSION['blog_update']); } ?>
                            <div class="col-sm-12">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="basic-table_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th>Si No</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        $result = mysqli_query($con,"SELECT * FROM `blog` ORDER BY `id` DESC");
                                        while($row = mysqli_fetch_array($result))
                                        { ?>
                                            
                                            <tr role="row" class="even">
                                                <td><?= $i; ?></td>
                                                <td><?= $row['title'] ?></td>
                                                <td style="width: 100px;">
                                                <div style="width: 150px;overflow:hidden; white-space:nowrap; text-overflow:ellipsis;">
                                                <?= $row['description'] ?>
                                                </div>
                                            </td>
                                                <td>
                                                    <img style="width: 150px; height:100px;" src="../assets/img/<?= $row['photo'] ?>" alt="">
                                                </td>
                                                <td>
                                                    <a href="update.php?update=<?= base64_encode($row['id']) ?>" class="btn btn-info btn-sm">edit</a>
                                                    <a href="delete.php?delete=<?= base64_encode($row['id']) ?>" onclick="return confirm('Are You Sure ?');" class="btn btn-danger btn-sm">delete</a>
                                                </td>
                                            </tr>

                                            <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'inc/footer.php'; ?>