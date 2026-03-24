<?php
    include 'head.php';
    $id = '';
    $question = '';
    $answer = '';
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($con, $_GET['id']);
        
        $query = "select * from faq where id = '$id' ";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $question = $row['question'];
        $answer = $row['answer'];
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
                                    echo 'Update Faq';
                                }else{
                                    echo 'Add To Faq';
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
                            <li><a href="faq.php">Faq</a></li>
                            <li class="active">
                                <?php
                                    if($id > 0){
                                        echo 'Update Faq';
                                    }else{
                                        echo 'Add To Faq';
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
                                <strong>Update Faq</strong>
                                <?php
                                    }else{
                                ?>
                                <strong>Add To Faq</strong>
                                <?php
                                    }
                                ?>
                            </div>
                            <form action="code.php?id=<?php echo $id; ?>" method="post" class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">
                                        <?php
                                            if($id > 0){
                                        ?>
                                            Update Question
                                        <?php
                                            }else{
                                        ?>
                                            Input Question
                                        <?php
                                            }
                                        ?>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-question"></i></div>
                                        <input type="text" name="question" class="form-control" value="<?php echo $question; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">
                                    <?php
                                            if($id > 0){
                                        ?>
                                            Update Answer
                                        <?php
                                            }else{
                                        ?>
                                            Input Answer
                                        <?php
                                            }
                                        ?>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-check"></i></div>
                                        <textarea name="answer" id="textarea-input" rows="5" class="form-control"   required><?php echo $answer; ?></textarea>
                                    </div>
                                </div>
                                <?php 
                                    if($id > 0){
                                        echo '<center><button type="submit" name="updatefaq" class="btn btn-secondary btn-lg"><i class="fa fa-upload"></i>&nbsp; Update</button></center> ';
                                    }else{
                                ?>
                                <center><button type="submit" name="submitfaq" class="btn btn-secondary btn-lg"><i class="fa fa-upload"></i>&nbsp; Add</button></center>
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

</body>

</html>
