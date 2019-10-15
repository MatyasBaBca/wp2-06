<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php

     $students[] = "Martin Kokeš";
     $students[] = "BaBča";
/*
     $students = array(
         "Martin Kokeš",
         "Babča",
     ); 
*/
// wp2-01-05
     $username = "MatyasBaBca";
     $repositories = array(
         "wp2-01",
         "wp2-02",
         "wp2-03",
         "wp2-04",
         "wp2-05",
     );

     $URL = "https://github.com/$username/$repository";

     $page = file_get_contents($URL);

     var_dump($page);
     ?>

     <?php
     if(empty($page)) {
        echo "Ten zmetek to nemá hotový!";
    } else  {
         echo "Je to vzorný člověk";
        }
        Matyáš Babiák
        for ($i=0; $i < count($repositories); $i++) {
        }

        wp2-01 ano
        wp2-02 ano
        wp2-03 ano
        wp2-04 ano 
        wp2-05 ano
        ?>
        
        

    


 </body>
 </html>