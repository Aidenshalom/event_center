<?php
    include "head.php";
?>
<body>
    <!-- NAVBAR -->
    <?php
        include "header.php";
    ?>


    <!-- FLOATING WHATSAPP -->
    <div id="myDiv"></div>

    <!-- SLIDER -->
    <section id="slider">
        <div class="container-fluid swiper mySwiper">
            <div class="content swiper-wrapper">
                <div class="slides swiper-slide">
                   <img src="images/slider2.jpg" alt="">
                   <div class="img_overlay">
                        <?php
                            $query  = "select * from slide";
                            $result = mysqli_query($con, $query);
                            if (! $result) {
                                die("Record not found" . mysqli_error($con));
                            } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $firstline  = $row['firstline'];
                                    $secondline = $row['secondline'];
                                    $thirdline  = $row['thirdline'];
                                ?>
                        <p><?php echo $firstline; ?> </p>
                        <h2><?php echo $secondline; ?> </h2>
                        <h3>                             <?php echo $thirdline; ?> </h3>
                        <button class="open-book">Book Now</button>
                        <?php
                            }
                            }
                        ?>
                   </div>
                </div>
                <div class="slides swiper-slide">
                    <img src="images/slider3.jpg" alt="">
                    <div class="img_overlay">
                        <?php
                            $query  = "select * from slide";
                            $result = mysqli_query($con, $query);
                            if (! $result) {
                                die("Record not found" . mysqli_error($con));
                            } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $firstline  = $row['firstline'];
                                    $secondline = $row['secondline'];
                                    $thirdline  = $row['thirdline'];
                                ?>
                        <p><?php echo $firstline; ?> </p>
                        <h2><?php echo $secondline; ?> </h2>
                        <h3>                             <?php echo $thirdline; ?> </h3>
                        <button class="open-book">Book Now</button>
                        <?php
                            }
                            }
                        ?>
                   </div>
                 </div>
                 <div class="slides swiper-slide">
                    <img src="images/slider4.jpg" alt="">
                    <div class="img_overlay">
                        <?php
                            $query  = "select * from slide";
                            $result = mysqli_query($con, $query);
                            if (! $result) {
                                die("Record not found" . mysqli_error($con));
                            } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $firstline  = $row['firstline'];
                                    $secondline = $row['secondline'];
                                    $thirdline  = $row['thirdline'];
                                ?>
                        <p><?php echo $firstline; ?> </p>
                        <h2><?php echo $secondline; ?> </h2>
                        <h3>                             <?php echo $thirdline; ?> </h3>
                        <button class="open-book">Book Now</button>
                        <?php
                            }
                            }
                        ?>
                   </div>
                 </div>
            </div>
            <div class="swiper-button-next clicker"></div>
            <div class="swiper-button-prev clicker"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- BOOKING -->
    <section id="book-modal" class="book">
        <div class="book-content">
            <div class="book-header">
                <span class="close-book">&times;</span>
                <h2>book now</h2>
            </div>
            <div class="book-body">
                <!-- <h3>book now</h3> -->
                <form action="dashboard/code.php" method="post">
                    <div class="form-group">
                        <input type="text" name="name" id="" required>
                        <label for="">Full name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="" required>
                        <label for="">Email</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" id="" required>
                        <label for="">Phone</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="date" id="date" required>
                        <label for="">Date</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="additionalinformation" id="">
                        <label for="">Additional Information (Optional)</label>
                    </div>
                    <input type="submit" name="submitbooking" class="btn-secondary" value="Send">
                </form>
            </div>
        </div>
    </section>

    <!-- SUCCESS -->
    <section 22id="success-modal" class="success">
        <div class="success-content">
            <img src="images/success.png" alt="">
            <h2>booking successful</h2>
            <a href="index.php"><button class="btn btn-primary"> Home </button> </a>
        </div>
    </section>

    <!-- BROCHURE -->
    <section id="brochure">
        <h2> brochure </h2>
        <div class="container grid col3 col2 col1">
            <div>
                <img src="images/calender.png" alt="">
                <h3> Book Your Event</h3>
                <p>Got something to celebraate?</p>
            </div>
            <div>
                <img src="images/crowd.png" alt="">
                <h3> Two Halls</h3>
                <p> Max-capacity - 450 guests</p>
                <p> Total-capacity - 900 guests</p>
            </div>
            <div>
                <img src="images/location.png" alt="">
                <h3> Accessible Road</h3>
                <p> Easy to locate venue </p>
            </div>
            <div>
                <img src="images/power.png" alt="">
                <h3> Power Supply </h3>
                <p> Stand by Generator </p>
            </div>
            <div>
                <img src="images/security.png" alt="">
                <h3> Security </h3>
                <p> CCTV located in strategic places</p>
            </div>
            <div>
                <img src="images/others.png" alt="">
                <h3> Other Facilities </h3>
                <p> Lounge & Changing room</p>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services">
        <h2> services </h2>
        <div class="container grid col3 col2 col1">
           <div class="col">
            <label class="icon">
                <img src="images/ring.png" alt="">
                <h2>Weddings</h2>
            </label>
            <div class="content">
                <h2>Weddings</h2>
                <p>Make wonderful memories on your special occasion </p>
            </div>
           </div>
           <div class="col">
            <label class="icon">
                <img src="images/cake2.png" alt="">
                <h2>Birthday</h2>
            </label>
            <div class="content">
                <h2>Birthday</h2>
                <p>Whatever the age, mark a new year using our premium venue </p>
            </div>
           </div>
           <div class="col">
            <label class="icon">
                <img src="images/conference.png" alt="">
                <h2>Conference</h2>
            </label>
            <div class="content">
                <h2>Conference</h2>
                <p>These cases are perfectly simple and easy to distinguish in a free hour </p>
            </div>
           </div>
        </div>
        <center> <a href="services.php"> <button class="btn btn-primary">Learn More</button> </a> </center>
    </section>

    <!-- About us -->
    <section id="about">
        <h2>About</h2>
        <div class="container grid acol2 col1">
            <div class="col">
                <b> <span>Plan Your Event at Sakeena Classy Halls.</span> </b>
                <br><br>
                Sakeena Classy Halls provides all the necessary services to ensure a smooth and successful event. Our experienced staff members, skilled professional caterers will take care of everything for you and make sure your guests needs are met.
                <br><br>
                Our event center offers seating, and tables for any occasion. With many options for event services near Abule Egba, we’re hopeful that you choose to bring your dream event to reality at Sakeena Classy Halls.
                <br><br>
                <center> <a href="about.php"> <button class="btn btn-secondary">Learn More</button> </a> </center>
            </div>
            <div class="col">
                <img src="images/Snapchat-547491455.jpg" alt="">
            </div>
        </div>

    </section>

    <!-- GALLERY -->
    <section id="gallery">
        <h2> GALLERY </h2>
        <div class="container">
        <?php
            $query  = "select * from gallery";
            $result = mysqli_query($con, $query);
            if (! $result) {
                die("Record not found" . mysqli_error($con));
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    $image = $row['image'];
                ?>
            <div class="box">
                <img src="dashboard/<?php echo $image; ?>" alt="">
            </div>
        <?php
            }
            }
        ?>
        </div>
    </section>

    <section id="book">
        <div class="container">
            <button class="btn btn-primary open-book"> book now <i class="bi bi-arrow-right"></i> </button>
        </div>
    </section>

    <!-- FOOTER -->

    <?php
        include "footer.php";
    ?>
    <script>
        // date validdation
        $(document).ready(function () {
            var minDate = new Date();
            $("#date").datepicker({
                showAnim : 'drop',
                numberOfMonth: 1,
                minDate: minDate,
                dateFormat: 'yy/mm/dd',
                // onclose: function(selectedDate) {

                // }
            });
        });
    </script>
</body>
</html>