<?php
function writeMsg($&aaa) {
    echo "Hello worldhghfhfgfdgdf!";
	echo $aaa;
}

$abc = "gfgf";
writeMsg(&$abc); // call the function