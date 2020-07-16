<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>○○運輸</title>
<link href="http://localhost/08_32_masakimiyata/main.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=M PLUS Rounded 1c" rel="stylesheet">
</head>
<body>

<?php

try
{

$product_code=$_GET['procode'];

$dsn='mysql:dbname=gsf_d06_db32;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name FROM maruyo_product WHERE code=?';
$stmt=$dbh->prepare($sql);
$data[]=$product_code;
$stmt->execute($data);

$rec=$stmt->fetch(PDO::FETCH_ASSOC);
$pro_name=$rec['name'];

$dbh=null;

}
catch(Exception $e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

商品スタッフ削除<br />
<br />
商品コード<br />
<?php print $product_code; ?>
<br />
商品名<br />
<?php print $product_name; ?>
<br />
この商品を削除してよろしいですか？<br />
<br />
<form method="post" action="product_delete_done.php">
<input type="hidden" name="code" value="<?php print $product_code; ?>">
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="ＯＫ">
</form>

</body>
</html>