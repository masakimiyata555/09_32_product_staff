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
// 選択された「名前コード」を受けとる
$staff_code=$_POST['staffcode'];

$dsn='mysql:dbname=gsf_d06_db32;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT name FROM mst_staff WHERE code=?'; 
$stmt = $dbh->prepare($sql);
$data[]= $staff_code;
$stmt->execute($data);

$rec = $stmt->fetch(PDO::FETCH_ASSOC);
$staff_name=$rec['name'];

$dbh = null;
}
catch(Exception$e)
{
    print'ただいま障害により大変ご迷惑をおかけしております。';
    exit();
}
?>

名前修正<br/>
<br/>
名前コード<br/>
<?php print $staff_code;?>
<br/>
<br/>
<form method="post"action="staff_edit_check.php">
<input type = "hidden"name="code"value="<?php print $staff_code;?>">
名前<br/>
<input type="text"name="name" style="width:200px"value="<?php print $staff_name;?>"><br/>
パスワードを入力してください。<br/>
<input type = "password"name="pass"style="width:100px"><br/>
パスワードをもう一度入力してください。<br/>
<input type = "password"name="pass2"style="width:100px"><br/>
<br/>
<input type="button"onclick="history.back()"value="戻る">
<input type="submit"value="OK">
</form>

</body>