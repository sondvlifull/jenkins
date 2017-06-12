<?php
function writeMsg($&aagga) {
    echo "Hello world!";
	echo $aagga;
}

$abc = "gfgf";
writeMsg(&$abc); // call the function