<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    include("connect.php");
    // require_once("sendmail.php");

    date_default_timezone_set('Africa/Lagos');

    // Login
    if(isset($_POST["email"]) && isset($_POST["login"]) && isset($_POST["password"])){
        $email = mysqli_real_escape_string($con,trim($_POST['email']));
        $password = mysqli_real_escape_string($con,trim($_POST['password']));

        $query = "select * from user where email = '$email' and password = '$password' ";
        $result = mysqli_query($con,$query);
        $count = mysqli_num_rows($result);
        if($count > 0){
            $row = mysqli_fetch_array($result);
            $_SESSION['ID'] = $row['id'];
            header("location:index.php");
            die();
        }else{
            $_SESSION["error"] = "<span style='color:red; '>Wrong Email or Password</span>";
            header("location:login.php");
            die();
        }
    }

    // Add to Gallery
    if (isset( $_POST["submit"] ) ) {

        if(($_FILES['image']['name'] !="")){
            $target_dir = "images/";

            $file = $_FILES['image']['name'];
            $path = pathinfo($file);

            // print_r($path);

            $filename = $path['filename'];
            
            $ext = $path['extension'];

            $temp_name = $_FILES['image']['tmp_name'];
            // echo'<br>';
            // echo $temp_name;

            $path_filename_ext = $target_dir.$filename.".".$ext;

            $today =  date("Y-m-d H:i:s");

            if(file_exists($path_filename_ext)){
                $_SESSION['error'] = "<span>Sorry, Image Already Exists In Gallery</span>";
                header ("location:gallery.php");
                die();
            }
            else{
                move_uploaded_file($temp_name, $path_filename_ext);

                $query = "insert into gallery(image,date) values ('$path_filename_ext','$today') ";
                $result = mysqli_query($con, $query);
                if($result){
                    $_SESSION['success'] = "<span>Image Added To Gallery</span>";
                    header ("Location: gallery.php");
                }
                else{
                    $_SESSION['error'] = "<span>Image Failed To Add</span>";
                    header ("Location: gallery.php");
                    die();
                }
            }   
        }
    }

    // Update Gallery
    if (isset($_GET["id"]) && isset($_POST["updategallery"])){
        $id = mysqli_real_escape_string($con, $_GET["id"]);
        $query = "select * from gallery where id = '$id' ";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $old_image = $row['image'];

        $today =  date("Y-m-d H:i:s");

        if(($_FILES['image']['name'] !="")){
            $target_dir = "images/";

            $file = $_FILES["image"]["name"];

            $update_image = "";

            if ($file !=''){

                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['image']['tmp_name'];

                $path_filename_ext = $target_dir.$filename.".".$ext;

                $update_image = $path_filename_ext;
            }
            else
            {
                $update_image = $old_image;
            }

        }   

            if (file_exists($path_filename_ext)) {
                $_SESSION['error'] = "<span>Sorry, Image Already Exists In Gallery</span>";
                header ("location:gallery.php");
                die();
            }
            else{

                $query = "update gallery set image = '$update_image', date = '$today' where id = '$id' ";
                $result = mysqli_query($con, $query);

                if($result){

                    if($file != NULL){
                        if(file_exists($old_image)){
                            unlink($old_image);
                        }
                        move_uploaded_file($temp_name, $update_image);
                    }
                    $_SESSION['success'] = "<span>Gallery Updated Successfully</span>";
                    header("location:gallery.php");
                    die();
                }else {
                    $_SESSION["error"] = "<span> Gallery Update Failed</span>";
                    header("location:gallery.php");
                    die();
                }
            }
        

    }

    // Delete from Gallery
    if(isset($_POST["deletegallery"])){
        $image_id = mysqli_real_escape_string($con, $_POST["image_id"]);

        $query = "select * from gallery where id = '$image_id' ";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $image = $row["image"];

        $query2 = "delete from gallery where id = '$image_id' ";
        $result2 = mysqli_query($con, $query2);

        if($result2){

            if(file_exists($image)){
                unlink($image);
            }

            echo 200;
        }else{
            echo 500;
        }      
    }

    // Faq
    if(isset($_POST["submitfaq"])){
        $question = $_POST["question"];
        $answer = $_POST["answer"];
        $today =  date("Y-m-d H:i:s");
        $query = "insert into faq(question, answer, date) values ('$question', '$answer', '$today') ";
        $result = mysqli_query($con,$query);
        if($result){
            $_SESSION['success'] = "<span>Faq Added Succesfully</span>";
            header ("location:faq.php");
        }
        else{
            $_SESSION['error'] = "<span>Failed To Add Faq</span>";
            header ("location:faq.php");
            die();
        }
    }

    // Update Faq
    if (isset($_GET["id"]) && isset($_POST["updatefaq"])){
        $id = mysqli_real_escape_string($con, $_GET["id"]);
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $today =  date("Y-m-d H:i:s");

        $query = "update faq set question = '$question', answer = '$answer', date = '$today' where id = '$id' ";
        $result = mysqli_query($con,$query);

        if($result){

            $_SESSION["success"] = "<span>Faq Updated Successfully</span> ";
            header ("location:faq.php");
            die();

        }else{
            $_SESSION["error"] = "<span>Faq Update Failed</span>";
            header ("location:faq.php");
            die();
        }
    }

    // Delete Faq
    if(isset($_POST["deletefaq"])){
        $faqid = mysqli_real_escape_string($con, $_POST["faqid"]);

        $query = "delete from faq where id = '$faqid' ";
        $result = mysqli_query($con,$query);

        if($result){
            echo 200;
        }else{
            echo 500;
        }
    }

    // Add to Slide Content
    if(isset($_POST["submitslide"])){
        $firstline = $_POST["firstline"];
        $secondline = $_POST["secondline"];
        $thirdline = $_POST["thirdline"];

        $today = date("Y-m-d H:i:s");

        $query = "insert into slide(firstline, secondline, thirdline, date) values ('$firstline', '$secondline', '$thirdline', '$today') ";
        $result = mysqli_query($con,$query);
        if($result){
            $_SESSION["success"] = "<span>Slide Content Added</span>";
            header ("location:slidecontent.php");
            die();
        }else{
            $_SESSION["error"] = "<span>Failed To Add Content</span>";
            header ("location:slidecontent.php");
            die();
        }
    }

    // Update Slide Content
    if(isset($_GET["id"]) && isset($_POST["updateslide"]) ){
        $id = mysqli_real_escape_string($con, $_GET["id"]);
        $firstline = $_POST["firstline"];
        $secondline = $_POST["secondline"];
        $thirdline = $_POST["thirdline"];

        $today = date("Y-m-d H:i:s");

        $query = "update slide set firstline = '$firstline', secondline = '$secondline', thirdline = '$thirdline', date = '$today' ";
        $result = mysqli_query($con,$query);
        if($result){
            $_SESSION["success"] = "<span>Slide Content Updated</span>";
            header ("location:slidecontent.php");
            die();
        }else{
            $_SESSION["error"] = "<span>Failed To Update Content</span>";
            header ("location:slidecontent.php");
            die();
        }
    }

    // Feedback
    if(isset($_POST['submitfeedback'])){
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $subject = mysqli_real_escape_string($con, $_POST['subject']);
        $message = mysqli_real_escape_string($con, $_POST['message']);

        $today = date('Y-m-d H:i:s');

        $query = "insert into feedback(name, email, subject, message, date, active) values ('$name', '$email', '$subject', '$message', '$today', '1') ";
        $result = mysqli_query($con,$query);
        if($result){
            $_SESSION['success'] = "Message Sent  <br> You will get a reply on your email as soon as possible. ";
            header ("location:../contact.php");
            die();
        }else{
            $_SESSION["error"] = "Failed";
            header ("location:../contact.php");
            die();
        }
    }

    // Delete Feedback
    if(isset($_POST["deletefeedback"])){
        $feedbackid = mysqli_real_escape_string($con, $_POST["feedbackid"]);

        $query = "delete from feedback where id = '$feedbackid' ";
        $result = mysqli_query($con,$query);

        if($result){
            echo 200;
        }else{
            echo 500;
        }
    }

    // Booking
    if(isset($_POST["submitbooking"])){
        $name = mysqli_real_escape_string($con, $_POST["name"]);
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $phone = mysqli_real_escape_string($con, $_POST["phone"]);
        $date = mysqli_real_escape_string($con, $_POST["date"]);
        $additionalinformation = mysqli_real_escape_string($con, $_POST["additionalinformation"]);

        $today = date("Y-m-d H:i:s");

        $query = "insert into booking(name, email, phone, date, additionalinformation, dateadded, active) values ('$name', '$email', '$phone', '$date', '$additionalinformation', '$today', '1') ";
        $result = mysqli_query($con,$query);
        if($result){
            header ("location:../index.php?openSuccess=true");
            exit();
        }else{
            $_SESSION["error"] = "Booking Failed";
            header ("location:../index.php");
            die();
        }
    }

    // Delete Faq
    if(isset($_POST["deletebooking"])){
        $bookingid = mysqli_real_escape_string($con, $_POST["bookingid"]);

        $query = "delete from booking where id = '$bookingid' ";
        $result = mysqli_query($con,$query);

        if($result){
            echo 200;
        }else{
            echo 500;
        }
    }

    // Add User
    if(isset($_POST["adduser"])){
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $password = mysqli_real_escape_string($con, $_POST["password"]);

        $query = "select email from user where email = '$email' limit 1";
        $result = mysqli_query($con,$query);
        $count = mysqli_num_rows($result);

        if($count > 0){
            $_SESSION["error"] = "Email Already Exist ";
            header ("location:adduser.php");
            die();
        }else{
            $query2 = "insert into user(email, password) values ('$email', '$password') ";
            $result2 = mysqli_query($con,$query2);
    
            if($result2){
    
                sendUserRecord($email, $password);
    
                $_SESSION["success"] = "User Added";
                header ("location:adduser.php");
                die();
            }else{
                $_SESSION["error"] = "Failed to add user";
                header ("location:adduser.php");
                die();
            }
        }
    
    }

    // Change Password
    if(isset($_POST["change"]) && isset($_POST["password"]) && isset($_GET["id"])){
        $id = mysqli_real_escape_string($con, $_GET["id"]);
        $password = mysqli_real_escape_string($con, $_POST["password"]);
        $newpassword = mysqli_real_escape_string($con, $_POST["newpassword"]);
        $cpassword = mysqli_real_escape_string($con, $_POST["cpassword"]);

        $query = "select * from user where password = '$password' and id = '$id' ";
        $result = mysqli_query($con,$query);
        $count = mysqli_num_rows($result);
        if($count > 0){
            if($newpassword == $cpassword){
                $query2 = "update user set password = '$cpassword'";
                $result2 = mysqli_query($con,$query2);
                $_SESSION["success"] = "<span>Password Updated <br> Login with New Password</span>";
                // header ("location:login.php");
                // die();
            }else{
                $_SESSION["error"] = "Password and Confirm Password does not match";
                header("location:password.php");
                die();
            }

        }else{
            $_SESSION["error"] = "<span style='color:red; '>Wrong Password </span>";
            header("location:password.php");
            die();
        }
    }

    // Send Password Reset Link
    if(isset($_POST["reset"]) && isset($_POST["email"])){
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $token = md5(rand());

        $query = "select * from user where email = '$email' limit 1";
        $result = mysqli_query($con,$query);
        $count = mysqli_num_rows($result);

        if($count){

            $row = mysqli_fetch_array($result);
            $email = $row["email"];

            sendPasswordReset($email,$token);
            $_SESSION["success"] = "Password reset link has been sent to your mail";
            header("location:passwordreset.php");
            die();

        }else{
            $_SESSION["error"] = "Email is not registered";
            header("location:passwordreset.php");
            die();
        }
    }

    // Reset Password
    if(isset($_POST["passwordchange"])){
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $newpassword = mysqli_real_escape_string($con, $_POST["newpassword"]);
        $cpassword = mysqli_real_escape_string($con, $_POST["cpassword"]);
        $token = mysqli_real_escape_string($con, $_POST["token"]);

        if(!empty($token)){

            if($newpassword == $cpassword) {

                $query = "update user set password = '$newpassword' where email = '$email' limit 1 ";
                $result = mysqli_query($con,$query);

                if($result){
                    $_SESSION["success"] = "Password reset succesful";
                    header("location:login.php");
                    die();
                }else{
                    $_SESSION["error"] = "Something went wrong <br> Try again";
                    header("location:passwordchange.php?token=$token&email=$email");
                    die();
                }


            }else {
                $_SESSION["error"] = "Password and Confirm Password does not match";
                header("location:passwordchange.php?token=$token&email=$email");
                die(); 
            }

        }else{
            $_SESSION["error"] = "No token Available";
            header("location:passwordchange.php?token=$token&email=$email");
            die();
        }
    }

    // Newsletter
    if(isset($_POST["submitmail"])){
        $email = mysqli_real_escape_string($con, $_POST["email"]);

        $today = date("Y-m-d H:i:s");

        $query = "select email from newsletter where email = '$email' limit 1";
        $result = mysqli_query($con,$query);
        $count = mysqli_num_rows($result);
        if($count > 0){
            $_SESSION["error"] = "Email Already Exist";
            header("location:../index.php");
            die();
        }else{
            $query2 = "insert into newsletter(email, date) values ('$email', '$today')";
            $result2 = mysqli_query($con,$query2);
            if($result2){
                $_SESSION["success"] = "Suscribed";
                header("location:../index.php");
                die();
            }else{
                $_SESSION["error"] = "Failed to Suscribe Try again";
                header("location:../index.php");
                die();
            }
        }
    }

    // Delete Newsletter
    if(isset($_POST["deletenewsletter"])){
        $newsletterid = mysqli_real_escape_string($con, $_POST["newsletterid"]);

        $query = "delete from newsletter where id = '$newsletterid' ";
        $result = mysqli_query($con,$query);

        if($result){
            echo 200;
        }else{
            echo 500;
        }
    }


    mysqli_close($con);
?>