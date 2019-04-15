<?php       
   $link = mysqli_connect("localhost", "root", "", "fish");
if (isset($_POST["nazev"])) {
    echo "This nazev is set so I will print.";
}    
else 
{
 echo "no  nazev";
}                     
if (isset($_POST["zprava"])) {
    echo "This zprava is set so I will print.";
}    
else 
{
 echo "no zprava";
}

   $nazev= $_POST["nazev"];
   $zprava=$_POST["zprava"];
   $menu_id=$_POST["menu_id"];

   echo $menu_id. "<br>";
    
   echo $_POST["nazev"] . $zprava; 
  
    $query= "INSERT INTO `fish`.`zprava` (`id`, `nazev`, `zprava`, `menu_id`) VALUES (NULL, '$nazev', '$zprava', $menu_id)";
    mysqli_query($link, $query);
?>
