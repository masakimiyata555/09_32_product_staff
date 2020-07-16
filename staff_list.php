<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://localhost/07_32_masakimiyata/main.css" rel="stylesheet">
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

$sql='SELECT code,name FROM mst_staff WHERE 1';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print '名前一覧<br/><br/>';

print '<form method="post" action="staff_edit.php">';
while(true)
{
	$rec=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
	}
	print '<input type="radio" name="staffcode" value="'.$rec['code'].'">';
	print $rec['name'];
	print '<br />';
}
print'<input type="submit"name="disp"value="参照">';
print'<input type="submit"name="add"value="追加">';
print '<input type="submit" value="修正">';
print '</form>';

}
catch (Exception $e)
{
	 print 'ただいま障害により大変ご迷惑をお掛けしております。';
	 exit();
}

?>
</body>
</html>