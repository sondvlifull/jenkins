<?php
function writeMsg($&aaa) {
    echo "Hello world!";
	echo $aaa;
}

$abc = "gfgf";
writeMsg(&$abc333); // call the function