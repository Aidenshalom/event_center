<?php
    include 'head.php';
    $id = '';
    $image = '';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "select image from gallery where id = '$id' ";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $image = $row["image"];
    }
?>
<body>


    <!-- Left Panel -->
    <?php
        include 'leftpanel.php';
    ?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php
            include 'header.php';
        ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>
                            <?php
                                if($id > 0) {
                                    echo'Update Gallery';
                                } else {
                                    echo 'Add To Gallery';
                                }
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li class="active">
                                <?php
                                    if($id > 0) {
                                        echo'Update Gallery';
                                    } else {
                                        echo 'Add To Gallery';
                                    }
                                ?>
                                
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <?php
                                    if($id > 0) {
                                ?>
                                <strong>Update Image</strong>
                                <?php
                                    }else{
                                ?>
                                <strong>Add Image To Gallery</strong>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="card-body card-block">
                                <form action="code.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-group">
                                    <?php 
                                        if($id > 0) {
                                    ?>
                                        <label class=" form-control-label">Old Image name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti ti-image"></i></div>
                                            <input type="text" value=" <?php echo $image; ?>" name="old_image" class="form-control" readonly>
                                        </div>
                                        <label class=" form-control-label">Input New Image</label>
                                    <?php
                                        }else{ 
                                    ?>
                                    <label class=" form-control-label">Input Image</label>
                                    <?php
                                        }
                                    ?>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti ti-image"></i></div>
                                        <input type="file" name="image" id="image" class="form-control" required>
                                    </div>
                                    <small class="form-text text-muted">Choose From Gallery</small>
                                    <?php 
                                        if($id > 0) {
                                            echo'<center><button type="submit" name="updategallery" class="btn btn-secondary btn-lg"><i class="fa fa-upload"></i>&nbsp; Update</button></center>';
                                        }else{ 
                                    ?>
                                    <center><button type="submit" name="submit" class="btn btn-secondary btn-lg"><i class="fa fa-upload"></i>&nbsp; Upload</button></center>
                                    <?php
                                        }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    <!-- Right Panel -->

    <?php
        include 'script.php';
    ?>
</body>

</html>
