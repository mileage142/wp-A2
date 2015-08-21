<?php
  session_start();
  error_reporting(E_ALL);//remove later
  #page not found
  include_once('topPart.php');

  ?>

    <main>
      <?php if($_GET["product"] == 'prod1') { ?>
              <img src="images/pots/blue_leaf_bowl.jpg" style="border:0; width:400px"; alt='Small Bowl' />
        <h2>Anagama Tea bowl</h2>
        <p></p>
        <p>anagama bowl: Woodfired bowl,<br> Clear glazed bowl, blue leaf pattern </p><br>

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


         } ?>

        <?php if($_GET["product"] == 'prod2') { ?>
              <img src="images/pots/blue_black_bowl.jpg" style="border:0; width:400px"; alt='Small Bowl' />
        <h2>Anagama Tea bowl</h2>
        <p></p>
        <p>anagama bowl: Woodfired bowl,<br> Blue copper glaze, speckled finish </p><br>

         <?php
        if(isset($_SESSION['fname']))
        {
          echo "Price: $";
          $price = 50 * $_SESSION['percent2'];
          echo $price;
        }
        else
        {
          echo "Price: $50";
        }
        } ?>

        <?php if($_GET["product"] == 'prod3') { ?>
              <img src="images/pots/anagama_ash_jar.jpg" style="border:0; width:400px"; alt='Small Bowl' />
        <h2>Large Anagama Jar</h2>
        <p></p>
        <p>Large Anagama fired Jar,<br> Distinctive ash melt and wad marks </p><br>

         <?php
        if(isset($_SESSION['fname']))
        {
          echo "Price: $";
          $price = 100 * $_SESSION['percent3'];
          echo $price;
        }
        else 
        {
          echo "Price: $100";
        }
        } 
        ?>
        
    

        <script>
          function formVal()
          {
            if(document.getElementById('qty').value<1)
            {
              document.getElementById('qtyError').style.visibility='visible';
            }
            else
            {
              continue;
            }
          }
        </script>
        <script>
            if(document.getElementById('qty').value != 1)
            {
            var totalPrice = ((document.getElementById("price").value)*(document.getElementById('qty').value));

            document.getElementById('total').innerHtml = this.totalPrice;
            }

          </script>
          <script>
            var increaseAmount = function()
            {
              
              document.getElementById('qty').value = +document.getElementById('qty').value + +1;
            }
            var decreaseAmount = function()
            {
              document.getElementById('qty').value = document.getElementById('qty').value-1;
            }
            </script>
            <script>
            var calculateTotal = function()
            {
              document.getElementById('total') = document.getElementById('qty').value * document.getElementById('price');
            }
          </script>
        

          <table>
        <form action="cart.php" method="post" onsubmit='formVal();'>
          <input type='hidden' id='price' value= <?php echo $price ?> name="price"> 
          <input type='hidden' id='productId' value=<?php echo $_GET['product'] ?> name="productId"> 
          <!--<input type='number' id='qty' name='qty' value=null min=1 max=10 step=1 title='pop-up error message' /> <br>-->
         <tr><td>Total price:</td><td></td><td> <input type='constant' id='total' value= <?php echo $price ?> name='total'></td></tr>
          <div class='spinButton'>
            <tr><td>Quantity:</td><td> <input type='button' value='-' onclick='decreaseAmount();' onclick='calculateTotal();'></td>
            <td><input type='number' id='qty' name='qty' onchange='calculateTotal();' value=null title='pop-up error message' onchange='calculateTotal();' /> 
            <input type='button' value='+' width='20px' onclick='increaseAmount();'></td></tr><br>
            </div>

          <td></td><td></td><td><input  type="submit" value="Add to Cart"></td>
        </form>
          </table>
      
    
    </main>

  <?php
    include_once('bottomPart.php');
  ?>
  </body>

</html>
