<?php
    if(!isset($_SESSION['ID'])){
        header('location:login.php');
        die();
  }
?>

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="../images/logo.PNG" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="booking.php" > <i class="menu-icon fa fa-book"></i>Bookings</a>
                    </li>
                    <li>
                        <a href="gallery.php" > <i class="menu-icon fa fa-image"></i>Gallery</a>
                    </li>
                    <li>
                        <a href="faq.php" > <i class="menu-icon ti ti-help-alt"></i>Faqs</a>
                    </li>
                    <li>
                        <a href="slidecontent.php" > <i class="menu-icon fa fa-edit"></i>Slide content</a>
                    </li>
                    <li>
                        <a href="feedback.php" > <i class="menu-icon fa fa-comment"></i>Feedbacks</a>
                    </li>
                    <li>
                        <a href="newsletter.php" > <i class="menu-icon ti ti-email"></i>Newsletter</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>