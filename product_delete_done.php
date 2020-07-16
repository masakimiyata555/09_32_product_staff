<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> ○○運輸倉庫</title>
<link href="http://localhost/08_32_masakimiyata/main.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=M PLUS Rounded 1c" rel="stylesheet">
</head>
<body>

<?php

try
{

$pro_code=$_POST['code'];

$dsn='mysql:dbname=gsf_d06_db32;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='DELETE FROM maruyo_product WHERE code=?';
$stmt=$dbh->prepare($sql);
$data[]=$product_code;
$stmt->execute($data);

$dbh=null;

}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

削除しました。<br />
<br />
<a href="product_list.php"> 戻る</a>

</body>
</html>