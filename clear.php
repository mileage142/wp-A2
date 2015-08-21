<?php

$fh = @fopen('files/orders.txt', 'w');

@ftruncate($fh, 0);

header("Location:orderlog.php");
?>