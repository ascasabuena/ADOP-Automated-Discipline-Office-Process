<?PHP 
//phpmailer connect
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    try {
        //getting data from html (all fields have to be filled up)
$section_student_id = $_POST['dbid'];
$vio = $_POST['vio'] ?? null;
$term = $_POST['term'];
$remark = $_POST['details'];
$staff_id = $_POST['staffdbid'];
$email_add = $_POST['email'];

if(!$section_student_id){
    echo "<script>
            alert('invalid student id');
            window.location.href='v2add.php';
            </script>";
}

if(!$vio){
    echo "<script>
            alert('Make sure to add violation');
            window.location.href='v2add.php';
            </script>";
}

if(!$term){
    echo "<script>
            alert('invalid term');
            window.location.href='v2add.php';
            </script>";
}

if(!$remark){
    echo "<script>
            alert('add remarks');
            window.location.href='v2add.php';
            </script>";
}

if(!$staff_id){
   echo "<script>
            alert('invalid staff id');
            window.location.href='v2add.php';
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
if($vio){
        for ($i=0; $i<count($vio); $i++) {

              $sql = "INSERT INTO `violation` (`id`, `section_student_id`, `violation_code_id`, `status_id`, `term_id`, `staff_id`, `remarks`, `created_at`, `updated_at`) 
              
                    VALUES (NULL, '$section_student_id', '$vio[$i]', '1', '$term', '$staff_id', '$remark', current_timestamp(), current_timestamp());";

             mysqli_query($con,$sql);
             
             //send email
              //$mail->setFrom('apc.disciplineoffice@gmail.com', 'Asia Pacific College discipline department'); // From email and name
              $mail->addAddress($email_add, 'ADOPtesting'); // to email and name

              $mail->isHTML(true);
              $mail->Subject = 'New violation reported';
              $mail->msgHTML("test body"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
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
                        alert('Violation reported');
                        window.location.href='v2add.php';
                        </script>";
                  
              }//end send

            /*echo "You have 48 hours to visit the DO Office.";*/
/*            echo '<script>alert("Violation succesfully reported. Inform the student that you have 48 hours to visit the DO Office.")</script>';*/
                }
        }
}
    } catch (Exception $e) {
            
        
    }

    
  mysqli_close($con);
?>