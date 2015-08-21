<?php
  session_start();
  error_reporting(E_ALL);//remove later
  #page not found
  include_once('topPart.php');

  ?>

    <main>
      <?php if($_get["product"] == 1) { ?>
              <img src="images/pots/blue_leaf_bowl.jpg" style="border:0; width:400px"; alt='Small Bowl' />
        <h2>Anagama Tea bowl</h2>
        <p></p>
        <p>anagama bowl: Woodfired bowl,<br> various styles, good to hold in your hand </p><br>

        <p> Price : $40.00 each<br></p>

        <?php } ?>

        <?php if($_get["product"] == 2) { ?>
              <img src="images/pots/blue_leaf_bowl.jpg" style="border:0; width:400px"; alt='Small Bowl' />
        <h2>Anagama Tea bowl</h2>
        <p></p>
        <p>anagama bowl: Woodfired bowl,<br> various styles, good to hold in your hand </p><br>

        <p> Price : $40.00 each<br></p>

        <?php } ?>

    

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
              document.getElementById('qty').value = document.getElementById('qty').value+1;
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
          <input type='hidden' id='price' value=40.00 name="price"> 
          <input type='hidden' id='productId' value=B1 name="productId"> 
          <!--<input type='number' id='qty' name='qty' value=null min=1 max=10 step=1 title='pop-up error message' /> <br>-->
         <tr><td>Total price:</td><td></td><td> <input type='constant' id='total' value=40.00 name='total'></td></tr>
          <div class='spinButton'>
            <tr><td>Quantity:</td><td> <input type='button' value='-' onclick='decreaseAmount();'></td>
            <td><input type='number' id='qty' name='qty' onchange='calculateTotal();' value=null title='pop-up error message' onchange='calculateTotal();' /> 
            <input type='button' value='+' width='20px' onclick='increaseAmount();'></td></tr><br>
            </div>

          <td></td><td></td><td><input  type="submit" value="submit"></td>
        </form>
          </table>
      
    
    </main>

  <?php
    include_once('bottom_part.php');
  ?>
  </body>

</html>
