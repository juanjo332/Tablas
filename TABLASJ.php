<html>
 <head>
 <?php
  
	  $filas = 10;
 	  $columnas = 10;
  	  $texto = 1;
          $grey = true;
          $clase = '';
  
  ?>  
 
  </head>                                                                 
    <body>  
      <style>
    		tr{
  	           background-color: yelow;
                  }
   		   tr:nth-child(2n+1){
                     background-color: orange;
                   }
      </style> 

  <table>    
     <?php
     for($t=0;$t<$filas;$t++){
       echo "<tr>";
        if ($t%2==0){
          $clase='clase=par';
        }else{
          $clase='clase=impar';
        } 
       for($y=0;$y<$columnas;$y++){
         if($grey){
            echo "<td style=padding:3px;
            .$clase;>".$texto."</td>";
             $grey=false;
             $texto++;
          }else{
           echo "<td style=padding:3px;>".$texto."</td>";
           $grey=true;
           $texto++;
    
         }
      }
  
        echo "</tr>";
    }
 ?>

  </table>
    </body>                                                                 
      </html>