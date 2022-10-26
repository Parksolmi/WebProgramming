<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <h>회원가입<br>-----------------------------------</h>

        <form name="form1" method="post" action="member_insert.php">
            <table>
                <tr>
                    <td>아이디</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>비밀번호</td>
                    <td><input type="text" name="pass"></td>
                </tr>
                <tr>
                    <td>이름</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>이메일</td>
                    <td><input type="text" name="email1">@<input type="text" name="email2"></td>
                </tr>
            </table>

            <br>
            <input type="submit" value="저장하기">
        </form>
    </body>
</html>