<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php 
            $gender = $_POST['gender'];
            $email_ok = $_POST['email_ok'];
            if ($email_ok == "예") {
                $email = "수산";
            } else {
                $email = "비수신";
            }
        ?>

        <ul>
            <li>성별 : <?=$gender?></li>
            <li>이메일 : <?=$email?></li>
        </ul>
    </body>

</html>