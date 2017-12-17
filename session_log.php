<?php
 session_start();

     $login = isset($_POST['nom']) ? $_POST['nom'] : '';
     $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
     $pro = isset($_POST['pro']) ? $_POST['pro'] : '';
     if ($login == '') {
         header('location:log.php?error=1');
     } elseif ($pass != 'admin' && $pass != 'user') {
         header('location:log.php?error=2&amppass='.$pass);
     } elseif ($pass == 'admin' && $pro == 'admin') {
         session_start();
         $_SESSION['nom'] = $login;
         $_SESSION['passs'] = $pass;
         $_SESSION['logged'] = true;
         header('location: ma_session1.php');
     } elseif ($pass == 'user' && $pro == 'visit') {
         session_start();
         $_SESSION['nom'] = $login;
         $_SESSION['pass'] = $pass;
         $_SESSION['logged'] = true;
         header('location: ma_session2.php');
     } elseif ($pass == 'user' && $pro == 'admin') {
         header('location: log.php?error=4');
     } elseif ($pass == 'admin' && $pro == 'user') {
         header('location: log.php?error=5');
     }


        
        $login = isset($_POST['nom']) ? $_POST['nom'] : '';
        $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
        $pro = isset($_POST['pro']) ? $_POST['pro'] : '';
           $t='fichier.txt';
           $x=fopen($t,'r+');
           while($y=fgets($x)!==false){
            $z=explode(';',$y);
            if($z[0]==$login && $z[1]==$pro && $z[2]==$pass  ){
               
                $_SESSION['nom']=$login;
                $_SESSION['pro']=$pro;
                $_SESSION['logged']=true;
                if($_SESSION['pro']=='admin'){
                    header('location: ma_session1.php');
                }
                else
                {
                    header('location: ma_session2.php');
                }
            }
            break;
           }
            fclose($x);?>