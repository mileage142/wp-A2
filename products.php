<?php
  session_start();
  error_reporting(E_ALL);//remove later
  #page not found
  include_once('topPart.php');
?>
<?php
        //Here are some ugly switch statements to convert the discount codes into
        //usable percentages and store them in the session as well.
        //discounts were allocated from 50% to 10%
        
        if(isset($_SESSION['disc1']))
        {
          switch($_SESSION['disc1'])
          {
            case 1:
              $_SESSION['percent1'] = 0.5;
              break;
            case 2:
              $_SESSION['percent1']  = 0.55;
              break;
            case 3:
              $_SESSION['percent1']  = 0.6;
              break;
            case 4:
              $_SESSION['percent1']  = 0.65;
              break;
            case 5:
              $_SESSION['percent1']  = 0.7;
              break;
            case 6:
              $_SESSION['percent1']  = 0.75;
              break;
            case 7:
              $_SESSION['percent1']  = 0.8;
              break;
            case 8:
              $_SESSION['percent1']  = 0.85;
              break;
            case 9:
              $_SESSION['percent1']  = 0.9;
          }
          switch($_SESSION['disc2'])
          {
            case 1:
              $_SESSION['percent2'] = 0.5;
              break;
            case 2:
              $_SESSION['percent2']  = 0.55;
              break;
            case 3:
              $_SESSION['percent2']  = 0.6;
              break;
            case 4:
              $_SESSION['percent2']  = 0.65;
              break;
            case 5:
              $_SESSION['percent2']  = 0.7;
              break;
            case 6:
              $_SESSION['percent2']  = 0.75;
              break;
            case 7:
              $_SESSION['percent2']  = 0.8;
              break;
            case 8:
              $_SESSION['percent2']  = 0.85;
              break;
            case 9:
              $_SESSION['percent2']  = 0.9;
          }
          switch($_SESSION['disc3'])
          {
            case 1:
              $_SESSION['percent3'] = 0.5;
              break;
            case 2:
              $_SESSION['percent3']  = 0.55;
              break;
            case 3:
              $_SESSION['percent3']  = 0.6;
              break;
            case 4:
              $_SESSION['percent3']  = 0.65;
              break;
            case 5:
              $_SESSION['percent3']  = 0.7;
              break;
            case 6:
              $_SESSION['percent3']  = 0.75;
              break;
            case 7:
              $_SESSION['percent3']  = 0.8;
              break;
            case 8:
              $_SESSION['percent3']  = 0.85;
              break;
            case 9:
              $_SESSION['percent3']  = 0.9;
          }
        }
          //var_dump($_SESSION);

        


  ?>
    <main>
      <h2>Gallery<br><br></h2>
      <p>Please click on a pot to purchase</p>



      <div class="thumbnail">
        <img src="images/pots/blue_leaf_bowl.JPG" alt= "Small Bowl"></a> 
     
      <div class="desc">Small grey bowl with a blue leaf pattern<br>
        <!-- need to style the button -->
      <?php
        if(isset($_SESSION['fname']))
        {
          echo "Price: $";
          $price = 40 * $_SESSION['percent1'];
          echo $price;
        }
        else
        {
          echo "Price: $40";
        }
      ?>
      <form action="product.php" method="get">
          <input type='hidden' id='product' value='prod1' name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>


      <img src="images/pots/blue_black_bowl.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Temuku bowl with blue speckle<br>
         <!-- need to style the button -->
      <?php
        if(isset($_SESSION['fname']))
        {
          echo "Price: $";
          $price = 50 * $_SESSION['percent2'];
          echo $price;
        }
        else
        {
          echo "Price: $40";
        }
      ?>

      <form action="product.php" method="get">
          <input type='hidden' id='product' value='prod2'name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>

      
      <img src="images/pots/anagama_ash_jar.jpg" alt= "Ash melt Jar"></a> 
      
      <div class="desc">Large Anagama fired jar with ash melt<br>
       <!-- need to style the button -->
      <?php
        if(isset($_SESSION['fname']))
        {
          echo "Price: $";
          $price = 100 * $_SESSION['percent3'];
          echo $price;
        }
        else
        {
          echo "Price: $40";
        }
      ?>

      <form action="product.php" method="get">
          <input type='hidden' id='product' value='prod3' name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>


      
      <img src="images/pots/covered_jar.jpg" alt= "Covered Jar"></a> 
      
      <div class="desc">Anagama ash glaze covered jar<br>
         <!-- need to style the button -->
      <?php
        if(isset($_SESSION['fname']))
        {
          echo "Price: $100 (Sorry, no further discounts apply)";
        }
        else
        {
          echo "Price: $100";
        }
      ?>
      <form action="product.php" method="get">
          <input type='hidden' id='product' value=4 name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>


      
      <img src="images/pots/flame_cylinder.jpg" alt= "Small Cylinder, brown"></a> 
      
      <div class="desc">Small cylindrical jar with wad marks<br>
         <!-- need to style the button -->
      <?php
        if(isset($_SESSION['fname']))
        {
          echo "Price: $40 (Sorry, no further discounts apply)";
        }
        else
        {
          echo "Price: $40";
        }
      ?>
      <form action="product.php" method="get">
          <input type='hidden' id='product' value=5 name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>


      
      <img src="images/pots/leaf_bowl.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Small grey bowl with a iron leaf pattern<br>
         <!-- need to style the button -->
      <?php
        if(isset($_SESSION['fname']))
        {
          echo "Price: $40 (Sorry, no further discounts apply)";
        }
        else
        {
          echo "Price: $40";
        }
      ?>
      <form action="product.php" method="get">
          <input type='hidden' id='product' value=6 name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>


      
      <a href="product.php"><img src="images/pots/small_vase.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Small brown vase<br>
         <!-- need to style the button -->
        <?php
        if(isset($_SESSION['fname']))
        {
          echo "Price: $30 (Sorry, no further discounts apply)";
        }
        else
        {
          echo "Price: $30";
        }
      ?>
      <form action="product.php" method="get">
          <input type='hidden' id='product' value=7 name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>
    </div>

    </main>  

<?php
  include_once('topPart.php');
?>
  </body>

</html>
