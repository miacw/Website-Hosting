<?php 
$result ="";
    if(isset($_POST['submit'])){
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->Host='smtp.live.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
        $mail->Username='miawallace1999@hotmail.co.uk';
        $mail->Password='Christa99!';

        $mail->setFrom($_POST['email'],$_POST['name']);
        $mail->addAddress('miawallace1999@hotmail.co.uk');
        $mail->addReplyTo($_POST['email'], $_POST['name']);

        $mail->isHTML(true);
        $mail->Subject=('Test Form Submission');
        $mail->Body='<h1>Name:' .$_POST['name']. '</h1>' .$_POST['message'];

        if(!$mail->send()){
            echo "Something went wrong";
        }
        else{
            $result = "Success!!";
        }
    }

?>









//  mail('mw3828b@greenwich.ac.uk','Test Subject','Helloooo there!',"From: miawallace1999@hotmail.co.uk");





// VARIABLES

// $from = "miawallace@hotmail.co.uk";
// $sendTo = "miawallace1999@hotmail.co.uk";
// $subject = "New message from contact form";
// $fields = array(
//     'nameText'=>'Name',
//     'emailText'=>'Email',
//     'message'=>'Message'
// );
// $okMessage = "Contact form was successfully submitted!";

// try{
//     if(count($_POST)==0) throw new \Exception('Form is empty');
//     $emailText = "You have a new message from your contact form";

//     foreach($_POST as $key => $value){
//         if(isset($fields[$key])){ //if the field exists in the $fields array, include in the email
//             $emailText .= "$fields[$key]: $value\n";
//         }
//     }

//     // required headers for the email
//     $headers = array(
//         'Content-Type: text/plain;
//         charset="UTF-8;"',
//         'From: '. $from,
//         'Reply-To: '. $_POST['emailText'],
//         'Return-Path: '. $from,

//     );
    
//     // send email
//     mail($sendTo, $subject, $emailText, implode("\n", $headers));
//     $responseArray = array(
//         'type'=>'danger',
//         'message'=>$okMessage
//     );
// }catch(\Exception $e){
//     echo('ERROR');
//     echo $e;
// }