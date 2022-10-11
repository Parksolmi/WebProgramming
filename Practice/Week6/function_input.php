<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <style>
            ul{
                list-style: none;
                margin: 0px;
                padding: 0px;
            }
            li{
                margin-bottom: 5px;
            }
        </style>

        <form name="input" method="POST" action="function_result.php">
            <ul>
                <!-- 예제 6-2 -->
                <li>[예제 6-2] 두 수를 매개변수로 받아 합하는 함수</li>
                <table>
                    <tr>
                        <td>num1 : </td>
                        <td><input type="text" name="num1-1"></td>
                    </tr>
                    <tr>
                        <td>num2 : </td>
                        <td><input type="text" name="num1-2"></td>
                    </tr>
                </table>
                <br>

                <!-- 예제 6-3 -->
                <li>[예제 6-3] 반환 값을 가지는 함수</li>
                <table>
                    <tr>
                        <td>num1 : </td>
                        <td><input type="text" name="num2-1"></td>
                    </tr>
                    <tr>
                        <td>num2 : </td>
                        <td><input type="text" name="num2-2"></td>
                    </tr>
                </table>
                <br>

                <!-- 예제 6-4 -->
                <li>[예제 6-4] a부터 b까지 숫자의 합을 구하는 함수</li>
                <table>
                    <tr>
                        <td>from : </td>
                        <td><input type="text" name="from"></td>
                    </tr>
                    <tr>
                        <td>to : </td>
                        <td><input type="text" name="to"></td>
                    </tr>
                </table>
                <br>

                <!-- 예제 6-5 -->
                <li>[예제 6-5] 만 나이 계산하는 함수</li>
                <table>
                    <li>>>>>오늘 날짜 입력</li>
                    <tr>
                        <td>년 : </td>
                        <td><input type="text" name="t_year"></td>
                    </tr>
                    <tr>
                        <td>월 : </td>
                        <td><input type="text" name="t_month"></td>
                    </tr>
                    <tr>
                        <td>일 : </td>
                        <td><input type="text" name="t_day"></td>
                    </tr>
                </table>
                <li>>>>생년월일 입력</li>
                <table>
                    <tr>
                        <td>년 : </td>
                        <td><input type="text" name="b_year"></td>
                    </tr>
                    <tr>
                        <td>월 : </td>
                        <td><input type="text" name="b_month"></td>
                    </tr>
                    <tr>
                        <td>일 : </td>
                        <td><input type="text" name="b_day"></td>
                    </tr>
                </table>
                <br>

                <!-- 예제 6-6 -->
                <li>[예제 6-6] 입장료 계산하는 함수</li>
                <li>
                    일반 입장권 <input type="radio" name="category" value="일반 입장권" checked>
                    &nbsp 자유 이용권 <input type="radio" name="category" value="자유 이용권">
                    &nbsp 2일 자유 이용권 <input type="radio" name="category" value="2일 자유 이용권">
                    &nbsp 콤비권 <input type="radio" name="category" value="콤비권">
                </li>

                <li>주간 <input type="radio" name="day" value="주간" checked>
                    &nbsp 야간 <input type="radio" name="day" value="야간"> </li>
                <li>나이 : <input type="text" name="age"></li>
                <br>

                <li><input type="submit" value="확인"></li>
            </ul>
            

        </form>
    </body>
</html>