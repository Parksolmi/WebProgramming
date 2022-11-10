<link rel="stylesheet" type="text/css" href="./common.css">
<link rel="stylesheet" type="text/css" href="./login.css">
<script type="text/javascript" src="./login.js"></script>

<div id="login_box">
    <div id="login_title">
        <span>로그인</span>
    </div>
    <div id="login_form">
        <form name="login_form" method="post" action="login.php">
            <ul>
                <li><input type="text" name="id" placeholder="아이디"></li>
                <li><input type="password" id="pass" name="pass" placeholder="비밀번호"></li>
            </ul>
        <div id="login_btn">
            <a href="#"><img src="./login.png" onClick="check_input()"></a>
        </div>
        </form>
    </div>
</div>

        