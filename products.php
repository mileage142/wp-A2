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
      <a href="product.php"><img src="images/pots/blue_leaf_bowl.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Small grey bowl with a blue leaf pattern</div>
            
      <a href="product.php"><img src="images/pots/blue_black_bowl.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Temuku bowl with blue speckle</div>

      
      <a href="product.php"><img src="images/pots/anagama_ash_jar.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Large Anagama fired jar with ash melt</div>


      
      <a href="product.php"><img src="images/pots/covered_jar.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Anagama ash glaze covered jar</div>


      
      <a href="product.php"><img src="images/pots/flame_cylinder.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Small cylindrical jar with wad marks</div>


      
      <a href="product.php"><img src="images/pots/leaf_bowl.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Small grey bowl with a iron leaf pattern</div>


      
      <a href="product.php"><img src="images/pots/small_vase.jpg" alt= "Small Bowl"></a> 
      
      <div class="desc">Small brown vase</div>
    </div>

    </main>  

<?php
  include_once('topPart.php');
?>
  </body>

</html>
