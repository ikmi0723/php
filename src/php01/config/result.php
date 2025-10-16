<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
$products = htmlspecialchars($_GET['products'], ENT_QUOTES);
$number = htmlspecialchars($_GET['number'], ENT_QUOTES);
print "私の名前は" . $name . "<br />" . "ご希望の商品は、" . $products . "<br />" . "注文数は、" . $number;