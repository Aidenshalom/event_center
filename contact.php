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
                    <h2>Contact us</h2>
                    <p> <a href="index.php"> <span> Home </span> </a>  >   contact us</p> 
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT -->
    <section id="contact">
        <div class="container row flex">
           <div class="col left">
                <div class="contactTitle">
                    <h2>Get in touch</h2>
                    <p>Use the form to let us know how we can connect.</p>
                </div>
                <div class="contactInfo">
                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="details">
                            <span>Phone</span> 
                            <span>(+234)0803 306 3869</span>
                            <span>(+234)0812 493 7309</span>
                            <span>(+234)0814 077 7877</span>
                            <span>(+234)0806 784 7698</span>
                            <span>(+234)0805 641 7910</span>
                            <span>(+234)0809 300 0047</span>
                        </div>
                    </div>

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="details">
                            <span>Email</span>
                            <span>tashiita3009 <p>@gmail.com</p> </span>
                            <span>titishitta2006<p> @yahoo.com </p></span>
                            <span>ademolashitta <p>@yahoo.co.uk</p> </span>
                            <span>yinkashitta <p> @yahoo.com</p> </span>
                        </div>
                    </div>

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="details">
                            <span>Location</span>
                            <span>Agbado Oko-Odo LCDA, 168 Ekoro Rd, <br> Ekoro Junction, Abule Egba 102213, Lagos, Nigeria.</span>
                        </div>
                    </div>
                </div>
                <div class="socialMedia">
                    <a href="https://web.facebook.com/profile.php?id=61554495345788" target="_blank" > <i class="fa-brands fa-facebook-f"> </i> </a>
                    <a href="https://twitter.com/Sakeenahall" target="_blank"> <i class="fa-brands fa-twitter"> </i> </a>
                    <a href=""> <i class="fa-brands fa-instagram"> </i> </a>
                    <a href="https://www.linkedin.com/in/sakeena-classy-halls-9a94aa2a6/" target="_blank" > <i class="fa-brands fa-linkedin-in"> </i> </a>
                </div>
           </div>
           <div class="col right">
            <h2>Send Message</h2>
                <form action="dashboard/code.php" method="post" class="messageForm">
                    <div class="inputGroup halfWidth">
                        <input type="text" name="name" required>
                        <label for="">Your Name</label>
                    </div>
                    <div class="inputGroup halfWidth">
                        <input type="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputGroup fullWidth">
                        <input type="text" name="subject" required>
                        <label for="">Suject</label>
                    </div>
                    <div class="inputGroup fullWidth">
                        <textarea name="message" required></textarea>
                        <label for="">Message</label>
                    </div>
                    <div class="inputGroup fullWidth">
                        <button type="submit" name="submitfeedback">Send Message</button>
                    </div>
                    
                </form>
           </div>
        </div>

        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.019442009018!2d3.284036077439259!3d6.644507076203728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b91bc997da263%3A0x53c003f0a9fc0941!2sSakeena%20Classy%20Halls%20(%20Multi-Purpose%20Event%20Center)!5e0!3m2!1sen!2sng!4v1700312199947!5m2!1sen!2sng" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- FOOTER -->
    <?php
        include("footer.php");
    ?>
</body>
</html>