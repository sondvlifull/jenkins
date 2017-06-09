<?php
function writeMsg($&aaa) {
    echo "Hello world!";
	echo $aaa;
}

$abc = "gfgf";
writeMsg(&$abc); // call the function