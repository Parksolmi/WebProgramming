<!-- 
    예제 7-1부터 7-13까지 (7-10은 제외)
 -->

<html>
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <style>
            ul{
                list-style:none;
                margin:0px;
                padding:0px;
            }
        </style>
        
        <?php
            $name=$_POST["name1"];
            echo $name."님 반갑습니다~!";

            $id = $_POST["id"];
            $pass = $_POST["pass"];

            $content = $_POST["content"];

            $gender = $_POST["gender"];
            $email = $_POST["email_ok"];

            if ($email == "예") {
                $email = "수신";
            } else {
                $email = "비수신";
            }

            $email1 = $_POST["email_input"];
            $email2 = $_POST["email_select"];

            $manager_id = $_POST["manager_id"];
        ?>

        <ul>
            <li>아 &nbsp; 이 &nbsp; 디 : <?=$id?></li>
            <li>비 밀 번 호 : <?=$pass?></li>
            <li>글 내용 : <?=$content?></li>
            
            <li>성별 : <?=$gender?></li>
            <li>이메일 수신동의: <?=$email?></li>

            <li>이메일 : 
                <?php 
                    echo $email1."@".$email2; 
                ?>
            </li>

            <br>
            <li>관리자 아이디 : <?= $manager_id?></li>
        </ul>

        
    </body>
</html>