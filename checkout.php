<?php
  session_start();
  error_reporting(E_ALL);//remove later
  var_dump($_SESSION);
?>
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
    if(isset($_POST['submit']))
    {
      if ($_POST["fname"] =="")
      {
        $errorMsg = "Sorry, you must enter your name.";
        $code = "1";
      }
    }
?>

    <h2>
      Please enter your name, address and credit card details.
    </h2>
      <table>
        <form action="cart.php" method="post" onsubmit='formVal();'>
          <input type='hidden' id='price' value=40.00 name="price"> 
          <input type='hidden' id='productId' value=B1 name="productId"> 
          <!--<input type='number' id='qty' name='qty' value=null min=1 max=10 step=1 title='pop-up error message' /> <br>-->
        <tr><td>First name: </td><td></td><td> <input type='text' id='fname'  name='fname' value=<?php echo $_SESSION['fname']; ?>
         > <?php if(isset$code) && ($code == 1) {echo "class=errorMsg" ;} ?></td></tr>

        <tr><td>Last name: </td><td></td><td> <input type='text' id='lname' name='lname' value=<?php echo $_SESSION['lname']; ?>
          required='required'></td></tr>

    <tr><td>Address: </td><td></td><td>  <textarea type='text' id='address' name='address' required='required' rows='3' col='10 '> </textarea></td></tr>

    <tr><td>Email: </td><td></td><td> <input type='email' id='email'  name='email' value=<?php echo $_SESSION['email']; ?>
      required='required'></td></tr>
    //needs regex
    <tr><td>Mobile Phone: </td><td></td><td> <input type='text' id='phone'  name='phone' value="<?php echo $_SESSION['phone']; ?>"
      required='required' pattern='\(?\+?[0-9]{0,3}\)?([0-9 ]{9,12})' title='Please enter your mobile phone number, no letters please.'></td></tr>
    
    <tr><td>Delivery Method: </td><td></td><td> 
      <input type='radio' id='delivery' name='delivery' value='regular' checked>Regular post<br>            
      <input type='radio' id='delivery' name='delivery' value='Courier'>Courier<br>
      <input type='radio' id='delivery' name='delivery' value='express'>Express post<br>
    </td></tr>

    <tr><td>Credit Card: </td><td></td><td> <input type='text' id='credit'  name='credit' required='required' 
      pattern='[0-9 ]{15,21}' title='Must be a valid credit card number'></td></tr>
    
    <tr><td>Expiry: </td><td></td><td> 
      <select name='ccdate' id='ccdate'>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        <option value=6>6</option>
        <option value=7>7</option>
        <option value=8>8</option>
        <option value=9>9</option>
        <option value=10>10</option>
        <option value=11>11</option>
        <option value=12>12</option>
      <select>
    
      <select name='ccyear' id='ccyear'>
        <option value=2015>2015</option>
        <option value=2016>2016</option>
        <option value=2017>2017</option>
        <option value=2018>2018</option>
        <option value=2019>2019</option>
        <option value=2020>2020</option>
        <option value=2021>2021</option>
        <option value=2022>2022</option>
      </select>

    </td></tr>
    
  </table>

    Please Sign me up for our newsletter: <input type='checkbox' id='nletter' name='nletter'><br><br>

         <input  type="submit" value="submit">
        </form>
     
    
    </main>


    <?php
    include_once('bottomPart.php');
    ?>

  </body>

</html>
