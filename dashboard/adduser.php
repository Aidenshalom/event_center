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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li class="active">Add New User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3" id="faq_content">
            <div class="sufee-login d-flex align-content-center flex-wrap">
                <div class="container">
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
                    <div class="login-content">
                        <div class="text-center text-secondary">
                            <h2>Add New User</h2>
                        </div>
                        <br>
                        <div class="login-form">
                            <form action="code.php" method="post">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <button type="submit" name="adduser" class="btn btn-success btn-flat m-b-30 m-t-30">Add User</button>
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
</body>

</html>
