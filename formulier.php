<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formulier</title>
</head>

<body>
 
 <?php
 if(isset($_POST['submit'])){
     echo "hoi test"
 }
  
   <form action="verwerk.php" method="POST">
    <p>
        <label for="voornaam">Voornaam:</label>
        <input type="text" name="voornaam" id="voornaam" />
    </p>
    <p>
        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" id="achternaam" />
    </p>
    <p>
        <input type="submit" value="Verzenden" />
    </p>
    </form>

?>
    
    
    

</body>

</html>