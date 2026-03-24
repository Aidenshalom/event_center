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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-book text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Booking</div>
                                <?php
                                    $query = 'select * from booking';
                                    $result = mysqli_query($con, $query);
                                    $count = mysqli_num_rows($result);
                                ?>
                                <div class="stat-digit"><?php echo $count; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-comments text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Feedback</div>
                                <?php
                                    $query = 'select * from feedback';
                                    $result = mysqli_query($con, $query);
                                    $count = mysqli_num_rows($result);
                                ?>
                                <div class="stat-digit"><?php echo $count; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Projects</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Table -->

            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Recent Booking</strong>
                                </div>
                                <div class="table-div card-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Event Date</th>
                                                    <th>Additional Information</th>
                                                    <th> Date Booked </th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                $query = "select * from booking order by id desc limit 3";
                                                $result = mysqli_query($con, $query);
                                                if(!$result){
                                                    die("Record Not Found".mysqli_error($con));
                                                }else{
                                                    $n = 1;
                                                    while($row = mysqli_fetch_assoc($result)){
                                                
                                            ?>
                                            <tbody>
                                            <tr>
                                                <td><?php echo $n; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo $row['additionalinformation']; ?></td>
                                                <td><?php echo $row['dateadded']; ?></td>
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

            <!-- /Table -->

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php
        include 'script.php';
    ?>

</body>

</html>
