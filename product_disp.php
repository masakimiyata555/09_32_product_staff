<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="http://localhost/08_32_masakimiyata/main.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=M PLUS Rounded 1c" rel="stylesheet">
<title>○○運輸倉庫</title>
</head>
<body>

<?php

try
{

$product_code=$_GET['staffcode'];

$dsn='mysql:dbname=gsf_d06_db32;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name,price FROM maruyo_product WHERE code=?';
$stmt=$dbh->prepare($sql);
$data[]=$product_code;
$stmt->execute($data);

$rec=$stmt->fetch(PDO::FETCH_ASSOC);
$product_name=$rec['name'];
$product_price=$rec['price'];

$dbh=null;

}
catch(Exception $e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

商品の情報参照<br />
<br />
商品コード<br />
<?php print $product_code; ?>
<br />
商品名<br />
<?php print $product_name; ?>
<br />
価格<br/>
<?php print$product_price;?>円
<br />
削除 <form method="POST"action="staff_edit_check.php">
削除 <input type="hidden" name="name" style = "code" value="<?php print $staff_code?>">
削除 名前<br/>
削除 <input type="password" name="name" style="width:200px"value="<?php print $staff_name?>"><br/>
削除 パスワードを入力してください。
削除 <input type="password" name="pass" style="width:100px"value="<?php print $staff_name?>"><br/>
削除 パスワードをもう１度入力してください。
削除 <input type="password" name="pass2" style="width:100px"value="<?php print $staff_name?>"><br/>
削除 <br/>
削除 <input type="text" name="name" style="width:200px" value="<?php print $staff_name?">
<input type="button" onclick="history.back()" value="戻る">
削除 <input type="submit"value="OK">
</form>

</body>
</html>