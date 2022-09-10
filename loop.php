<?php

$even=" ";
$odd=" ";
$i=1;

while($i<=100)
{
if($i%2==0)
{
$even = $even . " " .$i ;
}
else
{
$odd = $odd . " " .$i;
}

$i++;
}

echo "The Even No:" . $even . "<br>"; 
echo "The Odd No:" . $odd;

?>