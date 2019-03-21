

<?php
function getAlluser(){
    $connec = new PDO("mysql:dbname=user", 'root', 'azerty');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM user;");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
    
    }
    $user=getAlluser();


?>

<!Doctype html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="user_1.php" /> -->
    <
    <script src="user.js"></script>
</head>

<h1>formulaire<h1>

<!--le formulaire-->

Name:
<input id="nom" nom="nom" type="text" style="border:solid 1px black; width:100px; height:20px;" maxlength="100";> 
<br> 
Surname:
<input id="surname" name="surname" type="text" style="border:solid 1px black; width:100px; height:20px;" maxlength="100";>  
<br>
Email:
<input id="email" name="email" type="text" style="border:solid 1px black; width:100px; height:20px;" maxlength="100";>  
<br>
<input onclick="dedans()" type="submit" value="AJOUTER">
<br>
<h2>liste des utilisateur<h2>




<div id="user">

<!--affichée les donnée de la base de donée-->
 <?php foreach ($user as $key => $value): ?>

 <div id=<?php echo $value['id'];?>><?php echo $value['id'] ." --". $value['nom'] ." -- ". $value['prenom'] ." -- ". $value['email'] ?>



 <input  type="submit" value="voir" onclick="read(<?php echo $value['id'];?>)">
 <input  type="submit" value="Update" onclick="update(<?php echo $value['id'];?>)">   
 <input  type="submit" value="delete" onclick="deleteuser (<?php echo $value['id'];?>)">  
 <!--div id="nom1" ?user-->

 <!--<section id="users">

</section>-->




<?php endforeach?>

</div>


</body>
</html>
