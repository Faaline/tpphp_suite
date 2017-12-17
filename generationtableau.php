<html>

    <body>
        <form method="post"  action="#">
        <fieldset>
         <select name="nbr">
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="9">9</option>
               <option value="10">10</option>
               <option value="11">11</option>
               <option value="12">12</option>
        </select>
               <input type="submit" name="valider" value="valider">
        </fieldset>
        </form>
    </body>
</html>
<?php
extract($_POST); 
if(isset($valider)) 
{
    
 echo "<table border=5 width=300 height=300>";
        $x=0;
        $y=$nbr-1;
        for($i=0;$i<$nbr;$i++)
        {
            echo "<tr>";
        
            for($j=0;$j<$nbr;$j++)
            {
               
                if($j==$x && $j==$y)
                {

                   echo "<td style='background-color:green;'></td>";
                } 
                 elseif($j==$y)
                    {
                        echo "<td style='background-color:red;'></td>";
                    }
                    elseif($j==$i)
                    {
                        
                        echo "<td style='background-color:yellow;'></td>";
                    }
                    else
                    {
                        echo "<td>";
                    }

                }
              $x++; $y--;
              echo "</tr>";

            }
            "</table>";
        
        
      
    }
   


?>