<section id="footer">
        <div class="container flex">
            <div class="col">
                <h2> Contact us </h2>
                <span>
                    <i class="bi bi-geo-alt"></i> Agbado Oko-Odo LCDA, 168 Ekoro Rd, Ekoro Junction, Abule Egba 102213, Lagos.
                </span>
                <br>
                <br>
                <span class=""> 
                <i class="bi bi-telephone"> (+234)0812 493 7309</i> 
                <br>
                <i class="bi bi-telephone"> (+234)0803 306 3869</i> 
                </span>
                <br>
                <br>
                <span> 
                    <a class="link" href="mailto:titishitta2006@yahoo.com"><i class="bi bi-envelope"></i> titishitta2006@yahoo.com</a>
                    <br>
                    <a class="link" href="mailto:ademolashitta@yahoo.co.uk"><i class="bi bi-envelope"></i> ademolashitta@yahoo.co.uk </a>
                </span>
                <br>
                <br>
                <span class="socialMedia">
                    <a href="https://web.facebook.com/profile.php?id=61554495345788" target="_blank" class="link2"><i class="fa-brands fa-facebook-f"></i> </a>
                    <a href="https://twitter.com/Sakeenahall" target="_blank" class="link2"><i class="fa-brands fa-twitter"></i> </a>
                    <a href="http://www.instagram.com/" target="_blank" class="link2"><i class="fa-brands fa-instagram"></i> </a>
                    <a href="https://www.linkedin.com/in/sakeena-classy-halls-9a94aa2a6/" target="_blank" class="link2"><i class="fa-brands fa-linkedin-in"></i> </a>
                </span>
           </div> 
           <div class="col">
            <h1 class="logo">
                <a href="index.php"> <img src="images/logo.PNG" alt=""> </a>
            </h1>
           </div> 
           <div class="col">
                <h2> Newsletter </h2>
                <br>
                <p> Suscribe to our newsletter to get important updates from us </p>
                <form action="dashboard/code.php" class="news" method="post">
                    <input type="email" name="email" placeholder="Enter mail" required>
                    <button name="submitmail" class="sub" type="submit"> Go </button>
                </form>
           </div> 
        </div>
        <div class="container copyright flex">
            <h2 class="flex"> &copy; Copyright <span id="year"></span> <span> </span> All Right Reserved. </h2>
            <div> <img src="images/realtreademark.PNG" alt=""> </div>
        </div>
    </section>


    

     <!-- SCRIPT -->
     <script src="js/index.js" defer></script>
    <script src="js/function.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="floating-wpp.min.js"></script>
    <link rel="stylesheet" href="floating-wpp.min.css">
    
    <!-- <script src="https://code.jquery.com/jquery-2.2.4.js"></script> -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    
    <!-- Alertify -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <?php
        if(isset($_SESSION["success"])){
        ?>
            <script>
                alertify.set('notifier','position', 'top-center');
                alertify.success('<?php echo $_SESSION["success"]; ?>');
            </script>
        <?php
            unset($_SESSION["success"]);
            }
        ?>
        <?php
        if(isset($_SESSION["error"])){
        ?>
            <script>
                alertify.set('notifier','position', 'top-center');
                alertify.error('<?php echo $_SESSION["error"]; ?>');
            </script>
        <?php
            unset($_SESSION["error"]);
            }
        ?>

    <script>
        // Open Success
        $(document).ready(function() {
            // Check if the 'openModal' flag is set in the URL
        var openSuccess = new URLSearchParams(window.location.search).get('openSuccess');
            if (openSuccess) {
                // Open the modal
                var success = document.getElementById('success-modal');
                success.style.display = 'block';
            }
        });
    </script>

   