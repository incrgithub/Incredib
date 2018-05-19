<?php
$two=date ('Y-m-d', strtotime ('-2 days' , strtotime ( '2017-12-11' )));
$fifteen=date ('Y-m-d', strtotime ('-15 days' , strtotime ( '2017-12-11' )));
$fortyfive=date ('Y-m-d', strtotime ('-45 days' , strtotime ( '2017-12-11' )));

echo  $two."<br>";
echo  $fifteen."<br>";
echo  $fortyfive."<br>";

?>