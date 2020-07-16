<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['login'])==false)
{
    print'ログインされていません。<br/>';
    print'<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
    exit(); //プログラム強制終了
}
else
{
    print$_SESSION['staff_name'];
    print'さんログイン中<br/>';
    print'<br/>';
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> 〇〇運輸</title>
<link href="http://localhost/08_32_masakimiyata/main.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=M PLUS Rounded 1c" rel="stylesheet">

</head>
<body>

管理トップメニュー<br />
<br />
<a href="../staff/staff_list.php">管理</a><br />
<br />
<a href="../product/product_list.php">商品管理</a><br />
<br />
<a href="staff_logout.php">ログアウト</a><br />

</body>
</html>