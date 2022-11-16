<!-- 11장 연습문제 -->

<?php
    // 1번
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];

    $email = $eamil."@".$eamil2;
    $regist_day = date("Y-m-d(H:i)");

    $con = mysqli_connect("localhost","user1","12345","sample");

    $sql = "insert into members(id, pass, name, email, regist_day, level, point) ";
    $sql .= "values('$id','$pass','$name','$email','$regist_day',9,0)";

    mysqli_connect($con, $sql);
    mysqli_close($con);

    // 2번
    $id = $_GET["id"];
    if(!$id) {
        echo("<li>아이디를 입력해 주세요!</li>");
    }
    else {
        $con = mysqli_connect("localhost", "user1", "12345", "sample");
        $sql = "select * from members where id='$id'";
        $result = mysqli_query($con, $sql);
        $num_record = mysqli_num_rows($result);

        if($num_record) {
            echo "<li>".$id." 아이디는 중복됩니다.</li>";
            echo "<li>다른 아이디를 사용해 주세요!</li>";
        }
        else {
            echo "<li>".$id."아이디는 사용 가능합니다.</li>";
        }
        mysqli_close();
    }
?>