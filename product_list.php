<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['staff_login'])==false)
{
	print 'ようこそ　';
	print '<a href="staff_login.html">ログイン</a><br />';
	print '<br />';
}
else
{
	print 'ようこそ';
	print $_SESSION['member_name'];
	print ' 様　';
	print '<a href="member_logout.php">ログアウト</a><br />';
	print '<br />';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://localhost/08_32_masakimiyata/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M PLUS Rounded 1c" rel="stylesheet">
    <title>○○運輸倉庫</title>
</head>
<body>
<?php
try
{

$dsn='mysql:dbname=gsf_d06_db32;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT code,name,price FROM maruyo_product WHERE 1';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print '商品一覧<br/><br/>';

print '<form method="post" action="product_branch.php">';
while(true)
{
	$rec=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
	}
	print '<input type="radio" name="productcode" value="'.$rec['code'].'">';
	print $rec['name'].'---';
	print $rec['price'].'kg';
	print '<br />';
}
print'<input type="submit"name="disp"value="参照">';
print'<input type="submit"name="add"value="追加">';
print '<input type="submit" name="edit" value="修正">';
print '<input type="submit" name="delete" value="削除">';
print '</form>';

}
catch (Exception $e)
{
	 print 'ただいま障害により大変ご迷惑をお掛けしております。';
	 exit();
}

?>

<br />
<a href="product_add.php">トップメニューへ</a><br />

</body>
</html>