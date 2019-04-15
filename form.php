<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01
<html>
 <head>
  <meta http-equiv="content-type" content="text/html; ">
  <meta name="generator" content="PSPad editor, www.pspad.com">
    
  <title></title>
 </head>
 <body>
    <form method="post" action="add.php">
   <p>
   Název clanku<br>
   <input type="text" name="nazev" size="39">
   </p>
   <p>
   Zpráva:<br>
   <textarea rows="6" name="zprava" cols="33"></textarea>
   </p>

<?php
     $link = mysqli_connect("localhost", "root", "", "fish");
        $query="SELECT * FROM menu";
    $result = mysqli_query($link, $query);
if($result) // will return true if succefull else it will return false
{
echo "query success<br>";  ?>
<select size="5" name="menu_id"><?php
while ($row = mysqli_fetch_assoc($result)) {  ?>

        <option value="<?php echo $row["id"]?>"><?php echo $row["id"] . " " . $row["menu"]?> <?php
            }
    
}
?>
</select>
       <p>
   <input type="submit" value=" Odeslat ">
   <input type="reset" value=" Vymazat formulář ">
   </p>
  </form>
 </body>
</html>