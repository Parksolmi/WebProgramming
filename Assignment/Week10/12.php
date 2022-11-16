<!-- 12장 연습문제 -->

<?php
    // 1번 - 로그인
    $id = $_POST["id"];
    $pass = $_POST["pass"];

    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select * from members where id = $id";
    $result = mysqli_query($con, $sql);
    $num_match = mysqli_num_rows($result);

    if(!$num_match) {
        echo("<script>
                window.alert('등록되지 않은 아이디입니다!')
                history.go(-1)
            </script>");
    }
    else {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pass"];
        mysqli_close($con);

        if($pass != $db_pass) {
            echo ("
                <script>
                    window.alert('비밀번호가 틀립니다!')
                    history.go(-1)
                </script>
            ");
            exit;
        }
        else {
            session_start();
            $_SESSION["userid"] = $row["id"];
    /*생략*/
            $_SESSION["username"] = $row["name"];
            $_SESSION["userlevel"] = $row["level"];
            $_SESSION["userpoint"] = $row["point"];

            echo ("
                <script>
                    location.href = 'index.php'
                </script>
            ")
        }
    }
?>

<?php
    // 2번 - 로그인 상태 파악
    session_start();
    if(isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if(isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if(isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if(isset($_SESSION["userpoint"])) $userpoint = $_SEESION["userpoint"];
    else $userpoint = "";
?>

<div id="top">
    <h3>
        <a href="index.php">PHP 프로그래밍 입문</a>
    </h3>
    
    <ul id="top_menu">
    <?php
        if(!$userid) {
    ?>
        <li><a href="member_from.php">회원 가입(11장)</a></li>
        <li> | </li>
        <li><a href="login_form.php">로그인(12장)</a></li>
    <?php }
        else {
            $logged = $username."(".$userid.")님[Level:".$userlevel.",Point:".$userpoint."]";
    ?>
        <li><?=$logged?></li>
        <li> | </li>
        <li> <a href = "loggout.php">로그아웃 </a></li>
        <li> | </li>
        <li> <a href = "member_modify_form.php">정보 수정(12장)</a></li>
    <?php 
        }
    ?>
    </ul>
</div>
    
<?php
    // 3번
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];

    $email = $email1."@".$email2;

    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "update members set pass = '$pass', name = '$name', email = '$email'";
    $sql .= " where id = '$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);
?>
    

