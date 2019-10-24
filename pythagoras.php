<?php
$a=2;
$b=3;
$obdelnikobsah=($a * $b);
$strana=6;
$uhel=60;
$vyska=($strana * sin(deg2rad($uhel)));
$trojuhelnikobsah=round(($strana * $vyska / 2));

echo ('Obsah obdelniku o stranach: '.$a.'cm, '.$b.'cm je '.$obdelnikobsah.'cm2.'); ?>
<br>
<br>

<?php
echo ('Rovnostranný trojúhelník o straně délky '.$strana.'cm a uhlu '.$uhel.'stupnu je '.$trojuhelnikobsah.'cm2.');


?>

