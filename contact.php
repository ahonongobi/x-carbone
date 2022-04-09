<meta charset="utf-8">

<?php


 if(isset($_POST['submit']))
                  {
  require 'phpmailer/PHPMailerAutoload.php';
    //$salutation = $_POST['salutation'];
    //$fname = $_POST['firstname'];
    $lname = $_POST['name'];
    $email = $_POST['email'];
   // $phone = $_POST['phone'];
    //$title = $_POST['title'];
    $messages = $_POST['message'];
    $message ="";
    
    //$message = 'Title : ' . $title . "\r\n <br>";
    $message .= "My first name is : " . $lname . "\r\n <br>";
    //$message .= 'And my last name us: ' . $lname . "\r\n <br> ";
    $message .= 'This is my Email  : ' . $email . "\r\n <br>";
   // $message .= 'and my phone is : ' . $phone . "\r\n <br>";
    //$message .= 'Titre : ' . $title . "\r\n";
    //$message .= 'Number Of Dependants : ' . $number_of_dependants . "\r\n";
    
   // $message .= 'House Status : ' . $house_status . "\r\n";
    //$message .= 'Employment Industry : ' . $employment_industry . "\r\n";
    //$message .= 'Employer Name : ' . $employer_name . "\r\n";
    //$message .= 'Employer Work Phone : ' . $employer_work_phone . "\r\n";
    $message .= 'Here is my message : ' . $messages . "\r\n <br>";
    // reciever mail address

    $subject = 'Contact de '.$lname.' at';




   $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = "portables9494@gmail.com";

                    $mail->Password = "JE@dois@94@94";


                    $mail->setFrom($email, $lname);

                    $mail->addReplyTo($email, $lname);

                    $mail->addAddress("abyssiniea@gmail.com");
                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       $error = "Erreur : " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                     echo '<script>alert("Message sent successfully!!!");</script>';
                  
                     //echo ($send_email) ? 'success' : 'error';
                     $mail->clearAddresses();
                     $mail->addAddress("abyssiniea@gmail.com");
                     $send_email=$mail->send();
                     echo ($send_email) ? 'success' : 'error';
                     //header("Location: success/");
                     

                    }
                      




  
    }

         if(isset($_POST['contact']))
                  {
                    require 'phpmailer/PHPMailerAutoload.php';
                    $name = $_POST['nom'];
                    $tel = $_POST['tel'];
         
                    $email = $_POST['email'];
                    $messages = $_POST['message']." <hr> E-mail :".$email." <br> Téléphone : ".$tel ;
                    $subject = 'Contacs ';

                   $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = "portables9494@gmail.com";

                    $mail->Password = "JE@dois@94@94";


                    $mail->setFrom($email, $name);

                    $mail->addReplyTo($email, $name);

                    $mail->addAddress("hanscredit@gmail.com");

                    $mail->Subject = $subject;

                    $mail->msgHTML($messages);

                    if (!$mail->send()) {
                       $error = "Erreur : " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("Ihre Anfrage wurde berücksichtigt! Wir werden uns in Kürze bei Ihnen melden!.!");</script>';
                   


                    }
               }
?>