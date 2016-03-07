<html>

<body>
<?php
$personas = array(


"0" => array(
"domicilio" => "manuel mdieguez privada #40",
"estado" => "jalisco",
"nombre" => "chuy"
),

"1" => array(
"domicilio" => "niños heroes ",
"estado" => "zacatecas",
"nombre" => "gabriel"
),


"2" => array(
"domicilio" => "16 de septiembre		 ",
"estado" => "nayarit",
"nombre" => "jose"
),

"3" => array(
"domicilio" => "benito juarez",
"estado" => "sinaloa",
"nombre" => "manuel"
),


"4" => array(
"domicilio" => "miguel hidalgo ",
"estado" => "oaxaca",
"nombre" => "enrrique"
),





"5" => array(
"domicilio" => "manzana",
"estado" => "baja california sur",
"nombre" => "abigail"
)
);
?>

<ul>
<?php
  foreach ($personas as $personas){
?>
<li>
<?php
echo $personas["domicilio"].",";
 echo $personas["estado"].", ";
  echo $personas["nombre"].", ";
  }
?>
</li>
</ul>
</body>
</html>