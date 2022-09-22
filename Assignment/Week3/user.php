<html>
<head>
<meta charset="utf-8">
<linke href="style.css" rel="stylesheet">
</head>
<body>
    <?php
        $name = $_POST["name"];
        $id = $_POST["id"];
        $password = $_POST["password"];
    ?>

    <ul>
        <li>이름 : <?= $name?></li>
        <li>아이디 : <?= $id?></li>
        <li>비밀번호 : <?=$password?></li>
    </ul>
</body>
</html>