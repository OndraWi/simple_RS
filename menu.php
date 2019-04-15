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
   
   $query="SELECT * FROM menu";
    $result = mysqli_query($link, $query);
    if($result) // will return true if succefull else it will return false
{
// echo "query success<br>";

while ($row = mysqli_fetch_assoc($result)) {  ?> 
        <a href= "list.php?menu_id=<?php echo $row["id"]?>"><?php echo $row["menu"]?></a> <?php
            }
    
}
    
  ?>  
 </body>
</html>