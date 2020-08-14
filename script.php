
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="shstyle.css">
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Teko' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
        <meta name="viewport" content="width=device-width,initial scale=1.0">
    </head>

     <body>
     <?php 
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = '';
$to_email=$_POST["email"];

$subject = 'THANK YOU FOR SUBSCRIBING...!!!';
$message = 'The Name Sherlock Holmes & Address is 221B Baker Street.';
$headers = 'From: noreply @ company. com';
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "Invalid input";
} else { //send email 
    mail($to_email, $subject, $message, $headers);
    echo "This email is sent using PHP Mail";
}
?>
   
        <div class="heading">
            <a class="heading" href="sh.html">
       
                <h1 id="ftxt">
                    SHERLOCK
                </h1>
        
                <h1 id="stxt">
                       HOLMES
                </h1>
            </a>
        </div>

        <div class="nav-bar" role="navigation" >
            <ul>
                <li><a href="sh.html">H O M E</a></li>
            </ul>
        </div>

        <div class="nav-bar1" role="navigation" >
            <ul>
                <li><a href="subscribe.html">S U B S C R I B E</a></li>
            </ul>
        </div>


    <div class="form-bg">
        <form action="script.php" method="POST" >
          M a i l : <input class="input" type="email" name="email"/><br>
                 <input id="submit" type="submit" value="S U B S C R I B E"/>
        </form>
                <h1 id="check">Check Your Mail</h1>
       </div>

     </body>
</html>        
