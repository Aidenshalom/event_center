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
                <form name="myform" action="code.php" method="post">
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
                    <h2 style="color:grey;"> Enter New Password </h2>
                    <br>
                    <input type="hidden" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email']; } ?>" class="form-control" placeholder="New Password">
                    <input type="hidden" name="token" value="<?php if(isset($_GET['token'])){echo $_GET['token']; } ?>" class="form-control" placeholder="New Password">
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="newpassword" class="form-control" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" onkeyup="validate()" required>
                    </div>
                    <span class="msg" id="msg" style="color:red;font: size 2em;"></span>
                    <button type="submit" name="passwordchange" class="btn btn-success btn-flat m-b-30 m-t-30">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    include 'script.php';
?>

</body>

</html>
