<?php
    include 'head.php';

    $id = '';
    $firstline = '';
    $secondline = '';
    $thirdline = '';

    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($con, $_GET['id']);
        $query = 'select * from slide';
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $firstline =  $row['firstline'];
        $secondline =  $row['secondline'];
        $thirdline =  $row['thirdline'];
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
                                if($id > 0){
                                    echo 'Update Slide Content';
                                }else{
                                    echo 'Add Slide Content';
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
                            <li><a href="slidecontent.php">Slide Content</a></li>
                            <li class="active">
                                <?php
                                    if($id > 0){
                                        echo 'Update Slide Content';
                                    }else{
                                        echo 'Add Slide Content';
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
                                    if($id > 0){
                                ?>
                                <strong>Update Slide Content</strong>
                                <?php
                                    }else{
                                ?>
                                <strong>Add To Slide Content</strong>
                                <?php
                                    }
                                ?>
                            </div>
                            <form action="code.php?id=<?php echo $id?>" method="post" class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">First line</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti ti-pencil"></i></div>
                                        <input type="text" name="firstline" class="form-control" value="<?php echo $firstline; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Second line</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti ti-pencil"></i></div>
                                        <input type="text" name="secondline" value="<?php echo $secondline; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Third line</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti ti-pencil"></i></div>
                                        <input type="text" name="thirdline" value="<?php echo $thirdline; ?>" class="form-control">
                                    </div>
                                </div>
                                <?php  
                                    if($id > 0){
                                        echo'<center><button type="submit" name="updateslide" class="btn btn-secondary btn-lg"><i class="fa fa-upload"></i>&nbsp; Update</button></center>';
                                    }else{
                                ?>
                                <center><button type="submit" name="submitslide" class="btn btn-secondary btn-lg"><i class="fa fa-upload"></i>&nbsp; Add</button></center>
                                <?php 
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    <!-- Right Panel -->
    <?php
        include 'script.php';
    ?>
    </script>

</body>

</html>
