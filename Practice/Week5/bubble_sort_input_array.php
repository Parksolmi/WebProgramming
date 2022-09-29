<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <style>
            input{
                margin-bottom: 5px;
            }
        </style>
        <form name="form1" method="post" action="bubble_sort_result_array.php">
            <?php
                for($i=0; $i<10; $i++){
                    echo "<input type='text' name='num[]'><br>";
                }
            ?>
            <input type="submit" value="확인">
        </form>
    </body>
</html>