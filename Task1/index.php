<?php
$units = 506;

if($units <= 50 ){
echo 'your electricty bill is : ';
echo $units*3.50;
echo   ' EGP';
}
elseif(($units > 50 ) && ($units <= 150)){
echo 'your electricty bill is : ';
echo $units*4.00;
echo   ' EGP';
}
else{
echo 'your electricty bill is : ';
echo $units*6.50;
echo   ' EGP';


}

?>