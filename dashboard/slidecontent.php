<?php
    include 'head.php';
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
                        <h1>Slide Content</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li class="active">Slide Content</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
        <div align="center">
                <div class="w-50">
                    <?php if(isset($_SESSION['success'])){
                        echo  '<div class="sufee-alert alert with-close alert-secondary alert-dismissible fade show">
                            <span class="badge badge-pill badge-secondary">Success</span>
                            '.$_SESSION["success"].'
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                        unset( $_SESSION['success']);                  
                        }
                    ?>
                </div>
                <div class="w-50">
                    <?php if(isset($_SESSION['error'])){
                        echo  '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <span class="badge badge-pill badge-danger">Error</span>
                            '.$_SESSION["error"].'
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                        unset( $_SESSION['error']);                  
                        }
                    ?>
                </div>
            </div>
            <br><br>
            <center>
                <a href="addslidecontent.php" type="button" class="btn btn-outline-secondary"> Add Slide Content </a>
            </center>
            <br><br>
            <div class="animated fadeIn">
                <?php
                    $query = "select * from slide";
                    $result = mysqli_query($con, $query);
                    if(!$result){
                        die("Record not found".mysqli_error($con));
                    }else{
                        while($row = mysqli_fetch_array($result)){
                ?>
                <div class="row">
                    <div class="col col-lg-12">
                        <section class="card">
                            <div class="card-body text-secondary">
                            <h2 align="center"> <?php echo $row['firstline'] ?> </h2>
                            <h2 align="center"> <?php echo $row['secondline'] ?> </h2>
                            <h3 align="center"> <?php echo $row['thirdline'] ?> </h3>
                            </div>
                            <div class="card-footer">
                                <center>
                                    <a href="addslidecontent.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-outline-secondary"><i class="ti ti-new-window"></i>&nbsp; Update</a>
                                </center>
                            </div>
                        </section>
                    </div>
                </div>
                <?php
                   }
                }
                ?>     
            </div>
        </div>
        

    <!-- Right Panel -->

    <?php
        include 'script.php';
    ?>
</body>

</html>