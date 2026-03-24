<?php
    include("head.php");
?>
<body>
    <!-- NAVBAR -->
    <?php
        include("header.php");
    ?>
   
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid">
            <div class="banner">
                <div class="container">
                    <h2>our services</h2>
                    <p> <a href="index.php"> <span> Home </span> </a>  >  our services </p> 
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services">
        <h3> <i> What we Offer </i> </h3>
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
                    <p> These cases are perfectly simple and easy to distinguish in a free hour </p>
                </div>
            </div> 
            <div class="col">
                <label class="icon">
                    <img src="images/burial.png" alt="">
                    <h2>Burial</h2>
                </label>
                <div class="content">
                    <h2>Burial</h2>
                    <p>These cases are perfectly simple and easy to distinguish in a free hour</p>
                </div>
            </div> 
            <div class="col">
                <label class="icon">
                    <img src="images/events.png" alt="">
                    <h2>Exhibition</h2>
                </label>
                <div class="content">
                    <h2>Exhibition</h2>
                    <p>Bring your brands, creations, products, and ideas to life at our modern location </p>
                </div>
            </div> 
            <div class="col">
                <label class="icon">
                    <img src="images/other-service.png" alt="">
                    <h2>Other Events</h2>
                </label>
                <div class="content">
                    <h2>Other Events</h2>
                    <p> We give you the best memories on any event </p>
                </div>
            </div> 
        </div>
        <br><br><br><br>
        <h3> <i> Other Facilities </i> </h3>
        <span> <p> we offer adequate parking space at the back. A clean, safe, and comfortable enviroment. CCTV cameras, projectors, and standby generators. </p> </span>
        <div class="container grid acol2 col1 fac">
            <div> 
                <img src="images/basin.jpg" alt="">
            </div>
            <div>
                <img src="images/gen.jpg" alt="">
            </div>
            <div> 
                <img src="images/parking.jpg" alt="">
            </div>
            <div>
                <img src="images/room.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php
        include("footer.php");
    ?>
</body>
</html>