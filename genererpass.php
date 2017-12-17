<?php


if(isset($_POST['creer'])) {
	extract($_POST);
	$login=$_POST['login'];
	$size='6';

	function genere_password($size)
{
    // Initialisation des caractères utilisables
    $characters = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

    for($i=0;$i<$size;$i++)
    {

        $password .= ($i%2)?strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
    }
		
    return $password;

}

$mon_mot_de_passe = genere_password(6);

//echo $mon_mot_de_passe;

//$monfichier=generpass;
//ouvrir le fichier en mode append
$manip = fopen("fichier.txt", "a+");
if($manip==false)
die("La création du fichier a échoué");
else{
	while (($line=fgets($manip)) !== false) {
		$info=explode(";", $line);
		
		//echo "$info[0]<br>";
		if ($info[0]== $login) {
			
			$trouve=true;
		}
	}
	if($trouve){
				echo "Ce login existe deja";
	}
	else{
			   fseek($manip,SEEK_END);

				fputs($manip,$login.";" .$mon_mot_de_passe .";".$choix."\n");
			
	}
	fclose($manip);
}

}


 



//crire dans le fichir login;password


       











?>
<!DOCTYPE html>
<html>
<head>
	<title>fichier</title>
</head>
<body>
	<table border="1" align="center" style="background-color: pink; color:black; text-align: center;">
	<form action="" method="post" >
		<tr>
			<td> Login</td>
			<td><input type="text" name="login" placeholder="Un login"></td>
		</tr>
		<tr>
			<td>Profil</td>
			<td>
			<select name="choix">
				<option value=""></option>
				<option value="user">User</option>
				<option value="admin">Admin</option>
				
			</select>
		    </td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="creer" value="Creer"></td>
		</tr>
	</form>
	</table>

</body>
</html>