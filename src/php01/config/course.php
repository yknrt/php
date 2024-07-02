<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$set = htmlspecialchars($_POST['set'], ENT_QUOTES);
$num = htmlspecialchars($_POST['number'], ENT_QUOTES);
echo "私の名前は、" . $name . "<br />ご希望の商品は、" . $set . "<br />注文数は、" . $num;


