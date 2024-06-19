<?php
  function tipotriangulo($X,$Y,$Z){
    
  $triangulo = ($X + $Y > $Z && $X + $Z > $Y && $Y + $Z > $X);
   return $triangulo;
  }

  function situacao($triangulo){
  if($triangulo = ($X == $Y && $Y == $Z)){
    echo"Triangulo Equilatero.";

  }else if($triangulo = ($X == $Y || $X == $Z || $Y == $Z)){
    echo"Triangulo Isosceles.";

  }else{
    echo"Triangulo Escaleno";
   }
  }   

  $X = $_POST['X'];
  $Y = $_POST['Y'];
  $Z = $_POST['Z'];
  
 
  $trianguo = tipotriangulo($X,$Y,$Z);
  situacao($triangulo); 


  

  