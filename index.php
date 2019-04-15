<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="generator" content="PSPad editor, www.pspad.com" />
    <title></title>
  </head>
 <body>
  <?php
require 'menu.php';

echo "<hr>";

   $query_all="SELECT * FROM zprava";
    $result = mysqli_query($link, $query_all);
    if($result) // will return true if succefull else it will return false
{
echo "query success<br>";


while ($row = mysqli_fetch_assoc($result)) {  
         echo $row["nazev"] . "<br>";
         echo $row["zprava"] . "<br><hr>";
         
            }
    
}
  ?>
 </body>
</html>