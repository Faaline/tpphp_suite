<?php
$personne=array(
900=>array("nom"=>"Fatou Gueye","age"=>18),
901=>array("nom"=>"Badara Diagne","age"=>20),
902=>array("nom"=>"Astou Thiam","age"=>25),
903=>array("nom"=>"Coumba Mbow","age"=>30)
);	


?>		 
           <table width="70%" border="1"  align="center"  style="background-color: pink" >
             <tr><th>CODE</th> <th>NOM</th><th>AGE</th><th>ACTION</th></tr>

               <?php 
                foreach ($personne as $key => $value) {
                  foreach ($value as $key1 => $value1) {
                    # code...
                  }
          	      
	echo "<tr> <td>$key</td> <td>$value[nom]</td> <td>$value[age]</td> <td><a href=\"modifier.php?code=$key&nom=$value[nom]&age=$value[age]\">Editer</a></td> </tr>";
          }

           ?>

       
            </table>
             

