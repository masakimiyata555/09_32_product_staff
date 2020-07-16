<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>○○運輸倉庫</title>
</head>
<body>

<?php

try
{

$product_code=$_POST['code'];
$product_name=$_POST['name'];
$product_price=$_POST['price'];

$product_code=htmlspecialchars($pro_code,ENT_QUOTES,'UTF-8');
$product_name=htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
$product_price=htmlspecialchars($pro_price,ENT_QUOTES,'UTF-8');

$dsn='mysql:dbname=gsf_d06_db32;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='UPDATE maruyo_product SET name=?,price=? WHERE code=?';
$stmt=$dbh->prepare($sql);
$data[]=$product_name;
$data[]=$product_price;
$data[]=$product_code;
$stmt->execute($data);

$dbh=null;

print '修正しました。<br />';

}
catch(Exception$e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

<a href="product_list.php">戻る</a>

</body>
</html>