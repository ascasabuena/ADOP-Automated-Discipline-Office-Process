<?PHP 
//phpmailer connect
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    try {
        //getting data from html (all fields have to be filled up)
//$section_student_id = $_POST['dbid'];
$guardian = $_POST['guardiandbid'];
$sub = $_POST['subject'];
$notif = $_POST['notification'];
$staff_id = $_POST['staffdbid'];
$email_add = $_POST['email'];


if(!$guardian){
    echo "<script>
            alert('invalid student id');
            window.location.href='index.php';
            </script>";
}

if(!$sub){
    echo "<script>
            alert('Make sure to add violation');
            window.location.href='index.php';
            </script>";
}

if(!$staff_id){
    echo "<script>
            alert('invalid term');
            window.location.href='index.php';
            </script>";
}

if(!$email_add){
    echo "<script>
            alert('add remarks');
            window.location.href='index.php';
            </script>";
}


require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'apc.disciplineoffice@gmail.com'; // email
$mail->Password = 'adop123password'; // password

$mail->setFrom('apc.disciplineoffice@gmail.com', 'Asia Pacific College discipline department'); // From email and name
//$mail->addAddress('aliah.jez@gmail.com', 'ADOPtesting'); // to email and name
//$mail->addReplyTo('apc.discipline@gmail.com'); // *not sure if needed

   
//Database Connection
  $host = "localhost";
  $username = "id12681546_doapplication";
  $password = "password1";
  $dbname="id12681546_doapplication";
  $con = mysqli_connect($host,$username,$password,$dbname);
  
//inserting data to database using webhost
if($notif){
        
              $sql = "INSERT INTO `notification` (`id`, `subject`, `message`, `guardian_id`, `staff_id`, `notification_status_id`, `created_at`, `updated_at`) 
              
              VALUES (NULL, '$sub', '$notif', '$guardian', '$staff_id', '1', current_timestamp(), current_timestamp());";      

             mysqli_query($con,$sql);

             //send email
              //$mail->setFrom('apc.disciplineoffice@gmail.com', 'Asia Pacific College discipline department'); // From email and name
              $mail->addAddress($email_add, 'ADOPtesting'); // to email and name

              $mail->isHTML(true);
              $mail->Subject = $sub;
              $mail->msgHTML($notif); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
              $mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
              // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
              $mail->SMTPOptions = array(
                                  'ssl' => array(
                                      'verify_peer' => false,
                                      'verify_peer_name' => false,
                                      'allow_self_signed' => true
                                  )
                              );//* not familliar --
            if($email_add)  {               
              if(!$mail->send()){
                  echo "Mailer Error: " . $mail->ErrorInfo;
              }else{
                       echo "<script>
                        alert('Email was succesfully sent to the guardian');
                        window.location.href='v2message.php';
                        </script>";
                  
              }//end send

            /*echo "You have 48 hours to visit the DO Office.";*/
/*            echo '<script>alert("Violation succesfully reported. Inform the student that you have 48 hours to visit the DO Office.")</script>';*/
                }
        
}
    } catch (Exception $e) {
            
        
    }

    
  mysqli_close($con);
?>