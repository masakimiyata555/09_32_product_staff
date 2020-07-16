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

$staff_code=$_GET['staffcode'];

$dsn='mysql:dbname=gsf_d06_db32;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name FROM mst_staff WHERE code=?';
$stmt=$dbh->prepare($sql);
$data[]=$staff_code;
$stmt->execute($data);

$rec=$stmt->fetch(PDO::FETCH_ASSOC);
$staff_name=$rec['name'];

$dbh=null;

}
catch(Exception $e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

名前の情報参照<br />
<br />
名前コード<br />
<?php print $staff_code; ?>
<br />
名前<br />
<?php print $staff_name; ?>
<br />
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