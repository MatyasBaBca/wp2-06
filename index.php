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


$users["2C"] = array(
    "jdoe999",
    "MatyasBaBca"
    );
    
    $projects["2C"] = array(
    "wp2-01",
    "wp2-02",
    "wp2-03",
    "wp2-04",
    "wp2-05",

    $users["3C"] = array(
        "kristian33",
        "MatyasBaBca"
    ),
    $projects["3C"] = array(
        "wp3-01",
        "wp3-02",
        "wp3-03",
        "wp3-04",
        "wp3-05",

    $users["4C"] = array(
        "kristian33",
        "MatyasBaBca"
    ),

        $projects["4C"] = array(
        "wp4-01",
        "wp4-02",
        "wp4-03",
        "wp4-04",
        "wp4-05",

        $classes = array(
            "2C" => array(
                "projects" => array(
                    "wp2-01",
                    "wp2-02",
                    "wp2-03",
                    "wp2-04",
                    "wp2-05",
                ),
                "users" => array(
                    "jdoe999",
                    "MatyasBaBca"
                ),
            ),
        
            "3C" => array(
                "projects" => array(
                    "wp3-01",
                    "wp3-02",
                    "wp3-03",
                    "wp3-04",
                    "wp3-05",
                ),
                "users" => array(
                    "kristian33"
                ),
            ),
        );
        
        
            foreach ($classes as $class => $classValues) { ?>
            
               <h1><?= $class ?></h2>
               <?php
               // var_dump($classValues["users"]);
               foreach ($classValues["users"] as $user) { ?>
               
                   
                   <h2><?= $user ?></h2>
                   <?php
                 }
        
            }
            


/*
    $url = "https://github.com";
    for ($j=0; $j < count($users); $j++) {
        echo $url . "/" . $users[j];
    for ($i=0; $i < count($projects); $ii++); {
        // false nebo obsah HTML
    $content = @file_get_contents($url. "/" . $users[$j] . "/" . $projects[$i]);
    echo $projects[0] . ":";
    if($content == false)  {
        echo "ne";
    }   else {
            echo "ano";
        }
          echo "<br>";
        }
    }
        
    
    
   
    
    
    */
    ?>

       
    

    


 </body>
 </html>