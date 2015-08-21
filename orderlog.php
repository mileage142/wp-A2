<?php
  session_start();
  
  
  #page not found
  include_once('topPart.php');

  ?>

    <main>
      <?php
        $firstLine=true;
        $row = 1;
        $fp=fopen("files/orders.txt", "r");
      

        //echo($fp);
        flock($fp, LOCK_EX);
        while(($data = fgetcsv($fp, "\t", '"')) !== FALSE)

        
        {
        
        $num  = count($data);
  //echo "<p> $num fields in line $row: <br /></p>\n";
  //echo $num;
        $row++;

  //look through array  
          for ($c=0; $c < $num; $c++)
          {
    //match username input to array
          echo($data);
          }
        }
        flock($fp, LOCK_UN); 
        fclose($fp);
      ?> 
    <form action='clear.php' method='POST'>
      <h2>Clear all Orders!</h2><br>

      <input type="submit" value='Clear!'>


    </main>


    <?php
    include_once('bottomPart.php');
    ?>

  </body>

</html>
