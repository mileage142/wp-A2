<?php
  session_start();
  
  error_reporting(E_ALL);//remove later
  #page not found
  include_once('topPart.php');

  ?>

    <main>
       <h2> Order Summary </h2>
  <?php
  if(isset($_SESSION['prod1qty']))
  { ?>
  <table>
    <tr><td><?php
    echo $_SESSION['prod1qty']; 
    ?></td><td>x<?php
    echo ' blue leaf pattern bowl';
    ?></td><td><?php
    $_SESSION['prod1total'] = $_SESSION['prod1qty'] * $_SESSION['prod1price'];
    ?></td><td>$<?php
    echo $_SESSION['prod1total'];
    ?></td></tr><br><?php 
  } 
  if(isset($_SESSION['prod2qty']))
  { ?>
    <tr><td><?php
    echo $_SESSION['prod2qty'];
    ?></td><td>x<?php
    echo ' blue speckle temuku bowl';
    ?></td><td><?php
    $_SESSION['prod2total'] = $_SESSION['prod2qty'] * $_SESSION['prod2price'];
    ?></td><td>$<?php
    echo $_SESSION['prod2total'];
    ?></td><td><br><?php
  } 
  if(isset($_SESSION['prod3qty']))
  {  ?>
    <tr><td><?php
    echo $_SESSION['prod3qty'];
    ?></td><td>x<?php
    echo ' large anagama jar';
    ?></td><td><?php
    $_SESSION['prod3total'] = $_SESSION['prod3qty'] * $_SESSION['prod3price'];
    ?></td><td>$<?php
    echo $_SESSION['prod3total'];
    ?></td><td><br><?php
  } 
  echo "<br><br>";
  ?><tr><td></td><td><?php
  echo 'Total: ';
  ?></td><td></td><td>$<?php
  echo $_SESSION['prod1total'] + $_SESSION['prod2total'] + $_SESSION['prod3total'];
  ?></td><td>
  </table>
<?php
  
  $order = array(
    array($_SESSION['prod1qty'], $_SESSION['prod1price'], $_SESSION['prod1total']),
    array($_SESSION['prod2qty'], $_SESSION['prod2price'], $_SESSION['prod2total']),
    array($_SESSION['prod3qty'], $_SESSION['prod3price'], $_SESSION['prod3total']),

  $fp = fopen('files/orders.txt', 'w'));
//echo $session;

//echo($fp);
foreach ($order as $fields)
{
  fputcsv($fp, $order);
}
fclose($fp);


  unset($_SESSION['prod1qty']);
  unset($_SESSION['prod2qty']);
  unset($_SESSION['prod3qty']);
  unset($_SESSION['prod1price']);
  unset($_SESSION['prod2price']);
  unset($_SESSION['prod3price']);
  unset($_SESSION['prod1total']);
  unset($_SESSION['prod2total']);
  unset($_SESSION['prod3total']);
?>
    </main>


    <?php
    include_once('bottomPart.php');
    ?>

  </body>

</html>