<?php

$even=" ";
// $odd=" ";
$i=15;

while($i<=50)
{
if($i%2==0)
{
$even = $even . " " .$i ;
}
else
{
// $odd = $odd . " " .$i;
}

$i++;
}

echo "The Even No:" . $even . "<br>"; 
// echo "The Odd No:" . $odd;

?>