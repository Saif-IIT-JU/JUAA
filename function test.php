<?php

echo "test func";

function writemsg($msg){
	echo "<h2> $msg </h2>";
}

for($i=0; $i<=10; $i++)
{
	$s = readline('enter text: ');
	writemsg($s);
}


?>