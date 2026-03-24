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
                        <h1>Feedbacks</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li class="active">Feedbacks</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3" id="feedback_content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Feedbacks</strong>
                            </div>
                            <div class="table-div card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <?php
                                            $query = "select * from feedback order by id desc";
                                            $result = mysqli_query($con, $query);
                                            if(!$result){
                                                die("Record Not Found".mysqli_error($con));
                                            }else{
                                                $n = 1;
                                                while($row = mysqli_fetch_assoc($result)){    
                                                    $query2 = "update feedback set active = '0' ";
                                                    $result2 = mysqli_query($con, $query2);       
                                        ?>
                                        <tbody>
                                        <tr>
                                            <td><?php echo $n ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['subject'] ?></td>
                                            <td><?php echo $row['message'] ?></td>
                                            <td><?php echo $row['date'] ?></td>
                                            <td> 
                                                <button type="button" class="btn btn-outline-danger deletefeedback" value="<?php echo $row['id'];?>"><i class="fa fa-times"></i>&nbsp; Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                        $n++;
                                            }
                                        }    
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>
        

    <!-- Right Panel -->
    <?php
        include 'script.php';
    ?>
</body>

</html>
