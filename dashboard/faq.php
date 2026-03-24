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
                        <h1>Faq</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li class="active">Faq</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3" id="faq_content">

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
                <a href="addfaq.php" type="button" class="btn btn-outline-secondary"> Add to Frequently asked questions </a>
            </center>
            <br><br>
            <div class="animated fadeIn">
                <div class="row">
                    <?php
                        $query = "select * from faq";
                        $result = mysqli_query($con, $query);

                        if(!$result){
                            die("Record not found".mysqli_error($con));
                        }
                        else{
                            while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-4">
                        <div class="card border border-secondary">
                            <div class="card-header">
                                <strong class="card-title"><?php echo $row['question'] ?></strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $row['answer'] ?></p>
                                <p> <?php  echo' '. getdatetimediff($row['date']).' '; ?>  </p>
                            </div>
                            <div class="card-footer">
                                <center>
                                    <a href="addfaq.php?id=<?php echo $row['id']?>" type="button" class="btn btn-outline-secondary"><i class="ti ti-new-window"></i>&nbsp; Update</a>
                                    <button type="button" class="btn btn-outline-danger deletefaq" value="<?php echo $row['id'];?>"><i class="fa fa-times"></i>&nbsp; Delete</button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        

    <!-- Right Panel -->
    <?php
        include 'script.php';
    ?>

</body>

</html>
