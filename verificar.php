<?php
$Campo1_1 =$_POST('Campo1');
$Campo2_2 =$_POST('Campo2');
$Campo3_3 =$_POST('Campo3');
if(Campo1_1 ==' '){
  echo "El campo Usuario no puede estar vacio";
}
elseif (Campo2_2 ==' ') {
  echo "El campo Password no puede estar vacio";
}
elseif (Campo3_3 ==' ') {
  echo "El campo Confirmacion de Password no puede estar vacio";
}
else {
  if (Campo2_2 == Campo3_3) {
    return false;
  }
  echo "Las contraseñas no coinciden";
}
?>
