 <?
 session_start();
   require_once 'verif.php';
    ?>    

   <!DOCTYPE html>
   <html lang="en">
   <head>
  
   <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
         
       <title>page admin</title>
   </head>
   <body style="background-color: blue">
   
 <h1> <?php echo "Bonjour admin" ?>  </h1>
       <table border="1" bgcolor="pink" style="width: 500px ">
         <tr>
           <td colspan="2" style="size: 30px; text-align: center;" > Espace admin</td></tr>
           <tr>
            <ul id='admin' >
              <td> <li style="list-style: none; text-align: center;"><a href="Calculatrice.php" style="text-decoration: none; size: 20px;">function</a></td>
               <td><li  style="list-style: none; text-align: center;"><a href="generationtableau.php" style="text-decoration: none; size: 20px;">atelier de travail</a></li></td>
              
           </ul>
           </tr>
         </table>
      <a style="text-align: center; color: white" href="sd.php"> <div class='at'>Déconnexion</div></a>
       
   </body>
   </html>