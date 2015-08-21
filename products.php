<?php
  session_start();
  error_reporting(E_ALL);//remove later
  #page not found
  include_once('topPart.php');
?>

    <main>
      <h2>Gallery<br><br></h2>
      <p>Please click on a pot to purchase</p>



      <div class="thumbnail">
        <img src="images/pots/blue_leaf_bowl.jpg" alt= "Small Bowl"></a> 
     
      <div class="desc">Small grey bowl with a blue leaf pattern<br>
        <!-- need to style the button -->
      <form action="product.php" method="get">
          <input type='hidden' id='product' value=1 name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>


      <img src="images/pots/blue_black_bowl.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Temuku bowl with blue speckle<br>
         <!-- need to style the button -->
      <form action="product.php" method="get">
          <input type='hidden' id='product' value=2 name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>

      
      <img src="images/pots/anagama_ash_jar.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Large Anagama fired jar with ash melt<br>
       <!-- need to style the button -->
      <form action="product.php" method="get">
          <input type='hidden' id='product' value=3 name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>


      
      <a href="product.php"><img src="images/pots/covered_jar.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Anagama ash glaze covered jar<br>
         <!-- need to style the button -->
      <form action="product.php" method="get">
          <input type='hidden' id='product' value=4 name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>


      
      <a href="product.php"><img src="images/pots/flame_cylinder.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Small cylindrical jar with wad marks<br>
         <!-- need to style the button -->
      <form action="product.php" method="get">
          <input type='hidden' id='product' value=5 name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>


      
      <a href="product.php"><img src="images/pots/leaf_bowl.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Small grey bowl with a iron leaf pattern<br>
         <!-- need to style the button -->
      <form action="product.php" method="get">
          <input type='hidden' id='product' value=6 name="product"> 
            <input submit type="submit" value ="Buy Now" alt= "Small Bowl"></a> 
      </form>
      </div>


      
      <a href="product.php"><img src="images/pots/small_vase.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Small brown vase<br>
         <!-- need to style the button -->
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
