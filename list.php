<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="generator" content="PSPad editor, www.pspad.com" />
    <title></title>
  </head>
 <body>
  <?php
   $link = mysqli_connect("localhost", "root", "", "fish");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
   $menu_id = $_GET["menu_id"];
   echo $menu_id . "<br>";
   
   $query="SELECT * FROM zprava WHERE menu_id=".$menu_id ;
    $result = mysqli_query($link, $query);
    if($result) // will return true if succefull else it will return false
{
echo "query success<br>";


while ($row = mysqli_fetch_assoc($result)) {  
         echo $row["nazev"] . "<br>";
         echo $row["zprava"] . "<br><hr>";
         
            }
    
}
   
  ?>
  
  <a href="index.php">Zpět na menu</a>
  <a href="form.html">Nový příspěvek</a>
 </body>
</html>