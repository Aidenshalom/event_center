<?php
    include 'head.php';
?>

<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.php">
                    <img class="align-content" src="../images/logo.png" alt="" width="300px">
                </a>
            </div>
            <div class="login-form">
                <form action="code.php" method="post">
                    <div align="center">
                        <div class="">
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
                        <div class="">
                        <?php 
                            if(isset($_SESSION['error'])){
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
                    <h2 style="color:grey;"> Login </h2>
                    <br>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                        <label class="pull-right">
                            <a style="color:grey;" href="passwordreset.php">Forgotten Password?</a>
                        </label>
                    </div>
                    <?php 
                        if(isset($_SESSION["error"])){
                            echo $_SESSION["error"];
                            echo"<br>";
                            echo"<br>";
                            
                            unset($_SESSION["error"]);
                        }
                     ?>
                    <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>



</body>

</html>
