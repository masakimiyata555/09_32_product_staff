<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['member_login'])==false)
{
	print 'ようこそ　';
	print '<a href="member_login.html">ログイン</a><br />';
	print '<br />';
}
else
{
	print 'ようこそ';
	print $_SESSION['member_name'];
	print '様　';
	print '<a href="member_logout.php">ログアウト</a><br />';
	print '<br />';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="http://localhost/08_32_masakimiyata/main.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=M PLUS Rounded 1c" rel="stylesheet">
<title>〇〇運輸</title>
</head>
<body>

<?php

try
{

$cart=$_SESSION['cart'];
$max=count($cart);
// var_dump($cart);
// exit();

$dsn='mysql:dbname=gsf_d06_db32;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name,price,gazou FROM maruyo_product WHERE code=?';
$stmt=$dbh->prepare($sql);
$data[]=$product_code;
$stmt->execute($data);

$rec=$stmt->fetch(PDO::FETCH_ASSOC);
$product_name=$rec['name'];
$product_price=$rec['price'];
$product_gazou_name=$rec['gazou'];

$dbh=null;

if($product_gazou_name=='')
{
	$disp_gazou='';
}
else
{
	$disp_gazou='<img src="../09_32_masakimiyata/gazou/'.$product_gazou_name.'">';
}
print '<a href="shop_cartin.php?procode='.$product_code.'">カートに入れる</a><br /><br />';


$sql='SELECT name,price,gazou FROM maruyo_product WHERE code=?';
$stmt=$dbh->prepare($sql);
$data[]=$pro_code;
$stmt->execute($data);

$rec=$stmt->fetch(PDO::FETCH_ASSOC);
$product_name=$rec['name'];
$product_price=$rec['price'];
$product_gazou_name=$rec['gazou'];

$dbh=null;

if($product_gazou_name=='')
{
	$disp_gazou='';
}
else
{
	$disp_gazou='<img src="../09_32_masakimiyata/gazou/'.$product_gazou_name.'">';
}
print '<a href="shop_cartin.php?procode='.$product_code.'">カートに入れる</a><br /><br />';

}
catch(Exception $e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>
商品を見る<br />
<br />
<?php for($i=0;$i<$max;$i++)
	{
?>
	<?php print $product_name[$i]; ?>
	<?php print $product_gazou[$i]; ?>
	<?php print $product_price[$i]; ?>kg
	<br />
<?php
	}
?>
<form>
<input type="button" onclick="history.back()" value="戻る">
</form>

</body>
</html>