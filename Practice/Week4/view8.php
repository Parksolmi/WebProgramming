<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php
            $file_dir = "C:/xampp/htdocs/07/data/";
            $file_path = $file_dir.$_FILES["upload"]["name"];

            if(move_uploaded_file($_FILES["upload"]["tmp_name"].$file_path)) {
                $img_path = "data/".$_FILES["upload"]["name"];
            }
        ?>

        <ul>
            <li><img src="<?=$img_path?>"></li>
            <li><?=$_POST["comment"]?></li>
        </ul>
    <body>
</html>