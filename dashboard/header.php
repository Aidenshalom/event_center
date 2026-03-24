<header id="header" class="header">
    <?php
        date_default_timezone_set('Africa/Lagos');
        function getDateTimeDiff($date){

            $now_timestamp = strtotime(date('Y-m-d H:i:s'));
            $diff_timestamp = $now_timestamp - strtotime($date);

            if ($diff_timestamp < 60) {
                return  'few seconds ago';
            }
            else if($diff_timestamp >= 60 && $diff_timestamp < 3600) {
                return round($diff_timestamp/60). ' '. 'mins ago';
            }
            else if ( $diff_timestamp >= 3600 && $diff_timestamp < 86400) {
                return round($diff_timestamp/3600). ' '. 'hours ago';
            }
            else if ( $diff_timestamp >= 86400 && $diff_timestamp < (86400*30)) {
                return round($diff_timestamp/86400). ' '. 'days ago';
            }
            else if ( $diff_timestamp >= (86400*30) && $diff_timestamp < (86400*365)) {
                return round($diff_timestamp/(86400*30)). ' '. 'months ago';
            }
            else{
                return round($diff_timestamp/(86400*365)). ' '. 'years ago';
            }
        }
    ?>
    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
                
                <div class="dropdown for-notification">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <?php
                            $query = "select * from booking where active = '1' ";
                            $result = mysqli_query($con, $query);
                            $count = mysqli_num_rows($result);
                        ?>
                        <span class="count bg-success"><?php echo $count; ?></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="notification">
                        <p class="red">You have <?php echo $count; ?> Notification</p>
                        <?php
                                if($count > 0) {
                                $query2 = "select * from booking order by id desc limit 3";
                                $result2 = mysqli_query($con, $query2);
                                while($row = mysqli_fetch_assoc($result2)) {
                        ?>
                        <a class="dropdown-item media bg-flat-color-1" href="booking.php">
                            <span class="message media-body">
                                <!--<i class="fa fa-check"></i>-->
                                <p><?php echo $row['name']; ?></p>
                                <span class="time float-right"><?php echo getdatetimediff($row['dateadded']); ?></span>
                            </span>
                        </a>
                        <?php
                                    }
                                }
                        ?>
                    </div>
                </div>
                <div class="dropdown for-message">
                    
                    <button class="btn btn-secondary dropdown-toggle" type="button"
                        id="message"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ti-email"></i>
                        <?php
                            $query = "select * from feedback where active = '1' ";
                            $result = mysqli_query($con, $query);
                            $count = mysqli_num_rows($result);
                        ?>
                        <span class="count bg-primary"><?php echo $count; ?></span>
                    </button>
                
                    <div class="dropdown-menu" aria-labelledby="message">
                        <p class="red">You have <?php echo $count; ?> new Feedbacks</p>
                        <?php
                                if($count > 0) {
                                $query2 = "select * from feedback order by id desc limit 3";
                                $result2 = mysqli_query($con, $query2);
                                while($row = mysqli_fetch_assoc($result2)) {
                        ?>
                        <a class="dropdown-item media bg-flat-color-1" href="feedback.php">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left"><?php echo $row['name']; ?></span>
                                <span class="time float-right"><?php echo getdatetimediff($row['date']); ?></span>
                                    <p><?php echo $row['subject']; ?></p>
                            </span>
                        </a>
                        <?php 
                                }
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="../images/click.png" alt="User Avatar">
                </a>
                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="adduser.php"><i class="fa fa-user"></i> Add New User</a>

                    <a class="nav-link" href="password.php"><i class="fa fa-key"></i> Change Password</a>

                    <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div>
        
    </div>


        </header>