<?php
    $name="박솔미";
    $phone_number= "010-1234-1234";
    $address = '서울시 노원구 화랑로 621 서울여자대학교';
    $email= 'dosm0360@gmail.com';
?>

<!DOCTYPE html>
<html>
    <style type='text/css'>
        table{
            border: 1px solid black; border-collapse: collapse; width: 100%;
        }
        th {
            border: 1px solid black; padding: 3px;
        }
        td {
            border: 1px solid black; padding: 3px;
        }
    </style>
    <table >
        <thead>
            <tr>
                <th><?= "이름"?></th>
                <th><?= "휴대폰 번호"?></th>
                <th><?= "주소"?></th>
                <th><?= "이메일"?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$name?></td>
                <td><?=$phone_number?></td>
                <td><?=$address?></td>
                <td><?=$email?></td>
            </tr>
        </tbody>
    </table>
</html>