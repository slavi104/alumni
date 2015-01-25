<?php
require_once 'header.php';
?>
    
    <div id="message">
        
    <?php
    include 'simple_html_dom.php';
    if(isset($_POST))
    {
        include_once 'securimage/securimage.php';
        $securimage = new Securimage();
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        
        $text = $_POST['text'];
        $to = "slavi104@gmail.com";
        $headers = "Content-type: text/html; charset=utf-8" . "\r\n";
        $headers .= "From: user <alumni@mixbg.net>" . "\r\n";
        $message = "";
        $message .= "From  ".$name." ".$last_name."  Message: ".$text;
        if ($securimage->check($_POST['captcha_code']) == false) 
        {
            echo "<div id='result-text'>Entered anti-spam code is incorrect!</div>";
            echo "<input type='button' id='result-button' value='Go Back'  onclick='javascript:history.go(-1)'></input>";
            exit;
        }
        if(mail($to, 'GamesForBrains Mail', $message, $headers))
        {
            echo "<div id='result-text'>Your email was sended!</div>";
        }
        else 
        {
            echo 'There was s problem sending your email. Please try again later';
        }
    }

    ?>
       </div>
</body>
</html>