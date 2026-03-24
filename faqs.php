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
                    <h2>Faqs</h2>
                    <p> <a href="index.php"> <span> Home </span> </a>  >  Faqs </p> 
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq">
        <h3> <i> frequently asked questions </i> </h3>
        <div class="container">
        <?php 
            $query = "select * from faq";
            $result = mysqli_query($con, $query);
            if(!$result){
                die("Record not found".mysqli_error($con));
            }else{
                while($row = mysqli_fetch_assoc($result)){
                    $question = $row['question'];
                    $answer = $row['answer'];
        ?>
            <div class="faq-content">
                <button class="accordion">
                    <?php echo $question; ?>?
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="panel">
                    <p>
                        <?php echo $answer; ?>.
                    </p>
                </div>
            </div>

        <?php
                }
            }
        ?>
        </div>
    </section>
    

    <!-- FOOTER -->
    <?php
        include("footer.php");
    ?>
</body>
</html>