<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if(isset($_POST["send"])){

        $name=$_POST["name"];
        $message=$_POST["message"];
        $body="
                <body>
                <p>New Email From Reda Elbezzaz</p>
                <table>
                    <tr>
                    <td>Name:</td><td>{$name}</td>
                    </tr>
                    <tr>
                    <td>Message:</td><td>{$message}</td>
                    </tr>
    
                </table>
                </body>
                ";


        $mail = new PHPMailer(true);

        $mail-> isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'redasala95@gmail.com';
        $mail->Password= 'ngabzhtmywebxhjo';
        $mail->SMTPSecure= 'ssl';
        $mail->Port= 465;

        $mail->setFrom('redasala95@gmail.com');
        
        $mail->addAddress($_POST["email"]);

        $mail->isHTML(true);

        $mail->Subject = $_POST["subject"];
        
        $mail->Body = $body;

        $mail->send();

        echo
        "
        <script>
            alert('message send Successfully');
            document.location.href='index.php';
        </script>
        ";
    }
    else{
        echo
        "
        <script>
            alert('message send Failed');
            document.location.href='index.php';
        </script>
        ";
    }
?>
