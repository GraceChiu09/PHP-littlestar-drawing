
<h1>畫星星</h1>
<h2>小三角形</h2>

<?php

$n=8;

for($i=0;$i<=$n;$i++){
for($j=0; $j<=$i;$j++){
echo "*";
}
echo "<br/>";
}


?>

<h3>直角三角形</h3>
<?php
$n=11;

for($i=0;$i<=$n;$i++){


for($k=0;$k<=$n;$k++){

echo"&nbsp";
}
for($j=0;$j<=$i;$j++){
echo "*";

}
echo "<br>";
}

?>

<h3>正三角形</h3>
<?php

$n=12;

for($i=1;$i<=$n;$i++){

for($k=1;$k<=$n-$i;$k++){
echo "&nbsp";}

for($j=1;$j<=($i-1)*2+1;$j++){

echo "*";}



echo "<br>";}




?>
<h3>倒三角形</h3>
<?php

$n=5;
for($i=1;$i<=$n;$i++){
for($k=$n;$k>=$i;$k--){
echo "*";
}
echo "<br/>";
}

?>

<h3>正方形</h3>
<?php

$n=6;
for($i=1;$i<=$n;$i++){
for($k=$n;$k>=0;$k--){
echo "*&nbsp";
}
echo "<br/>";
}

?>




