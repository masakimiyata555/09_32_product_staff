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

$product_code=$_POST['code'];
$product_name=$_POST['name'];
$product_price=$_POST['price'];

$product_code=htmlspecialchars($product_code,ENT_QUOTES,'UTF-8');
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
	print '価格をきちんと入力してください。<br />';
}
else
{
	print '価格:';
	print $product_price;
	print 'kg<br />';
}

if($product_name=='' || preg_match('/\A[0-9]+\z/',$product_price)==0)
{
	print '<form>';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '</form>';
}
else
{
	print '上記のように変更します。<br />';
	print '<form method="post" action="product_edit_done.php">';
	print '<input type="hidden" name="code" value="'.$product_code.'">';
	print '<input type="hidden" name="name" value="'.$product_name.'">';
	print '<input type="hidden" name="price" value="'.$product_price.'">';
	print '<br />';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '<input type="submit" value="ＯＫ">';
	print '</form>';
}

?>
</body>
</html>