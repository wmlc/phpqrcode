<?php 
//输出二维码图片
echo "<img alt='支付二维码' src='qrcode.php?data=<?php echo urlencode($url2);?>' />";
?>
