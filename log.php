<?php 
$error = isset($_GET['error']) ? $_GET['error'] : '';
$pass = isset($_GET['pass']) ? $_GET['pass'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body bgcolor="pink">
  <h1 align="center">Bienvenue dans mon espace</h1>
  <table border="1" align="center">
    <tr>
     <td colspan="2" align="center" style="font-size: 20px; color: red;" > <?php
    switch ($error) {
    case 1:
    echo 'Champs obligatoires';
    break;
    case 2:
    echo 'le mot de passe  est invalide';
    break;
    case 3:
    echo 'impossible';
    break;
    case 4: echo 'erreur profil';
    break;
    case 5: echo 'erreur profil';
    break;
    }
    ?>
  </td>
    </tr>
    <form action="session_log.php" method="post">
    
    <tr>    
      <td>Nom</td>
     <td><input type="text" name="nom" id=""nom class="inputb">  </td>
   </tr>
    <tr> 
      <td>Password</td>
      <td><input type="password" name="pass" id="pass" class="inputb"></td>
      </tr>
     <tr>
      <td>Profil</td>
     <td>
        <select name="pro" id="pro">
       <option value="admin">admin</option>
        <option value="visit">visiteur</option>
      </select> 
    </td>
      </tr>  
    <tr>
    <td colspan="2"><input type="submit" value="connection" class="bou"></td>
       </tr>  
    
    </form>
    </table>

    
</body>
</html>
