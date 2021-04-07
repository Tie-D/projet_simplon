<?php
$c=filter_input(INPUT_GET,"c",FILTER_DEFAULT,FILTER_REQUIRE_ARRAY);
  
  
$cnt = count($c);
  echo "Combien de place voulez-vous acheter ? :".$cnt."<br>";
  
  echo "A quelle rangée voulez-vous aller ? : <br>";  
      
  print "Votre place :".implode(",",$c);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>projet_simplon</title>
    </head>
    <style>
        form {text-align: center;}   
        [name="c[]"]:checked + .cx{background-Color:yellow;}
    </style>
    <body>
           
      <form action="" method="GET">          
           <?php
            foreach(range("0","7") as $r){
              foreach(range(0,8) as $c){
                print "<input type='checkbox' name='c[]' id='c{$r}-{$c}' value='{$r}-{$c}'><input type='button' value='{$r}-{$c}' class='cx'>";
              }
              print "<br>";
            }
           ?>
           <input type="submit" value="OK" />       
      </form>
 
    </body>
</html>

