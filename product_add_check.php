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
// 受け取ったデータを変数に入れる
$product_name=$_POST['name'];
$product_price=$_POST['price'];
$product_gazou=$_FILES['gazou'];

$product_name=htmlspecialchars($product_name,ENT_QUOTES,'UTF-8');
$product_price=htmlspecialchars($product_price,ENT_QUOTES,'UTF-8');

if($product_name=='')
{
	print '商品名が入力されていません。<br />';
}
else
{
	print '商品名:';
	print $product_name;
	print '<br />';
}

if(preg_match('/\A[0-9]+\z/',$product_price)==0)
{
	print '重量をきちんと入力してください。<br />';
}
else
{
	print '重量:';
	print $product_price;
	print 'kg<br />';
}

if($product_gazou['size']>0)
{
	if($product_gazou['size']>1000000)
	{
		print '画像が大き過ぎます';
	}
	else
	{
		move_uploaded_file($product_gazou['tmp_name'],'./gazou/'.$product_gazou['name']);
		print '<img src="./gazou/'.$product_gazou['name'].'">';
		print '<br />';
	}
}

if($product_name=='' || preg_match('/\A[0-9]+\z/',$product_price)==0 || $product_gazou['size']>1000000)
{
	print '<form>';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '</form>';
}
else
{
	print '上記の商品を追加します。<br />';
	print '<form method="post" action="product_add_done.php">';
	print '<input type="hidden" name="name" value="'.$product_name.'">';
	print '<input type="hidden" name="price" value="'.$product_price.'">';
	print '<input type="hidden" name="gazou_name" value="'.$product_gazou['name'] .'">';
	print '<br />';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '<input type="submit" value="ＯＫ">';
	print '</form>';
}

?>
</body>
</html>