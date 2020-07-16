<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="http://localhost/07_32_masakimiyata/main.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=M PLUS Rounded 1c" rel="stylesheet">
<title> ○○運輸倉庫</title>
</head>
<body>

<?php

try
{

$staff_code=$_POST['code'];
削除 $staff_name = $_POST['name'];
削除 $staff_pass = $_POST['pass'];
削除
削除 $staff_name = htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
削除 $staff_name = htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');
$dsn='mysql:dbname=gsf_d06_db32;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='DELETE FROM mst_staff WHERE code=?';
$stmt=$dbh->prepare($sql);
削除 $data[] = $staff_name;
削除 $data[] = $staff_pass;
$data[]=$staff_code;
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
<a href="staff_list.php"> 戻る</a>

</body>
</html>