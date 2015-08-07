<?php
  session_start();
  error_reporting(E_ALL);//remove later
  #page not found
  $page['title'] = 'file-not-found-title.php';
  $page['main'] = 'file-not-found-main.php';
  #valid pages
  $validPages=['home', 'products', 'privacy'];
  if (in_array($_GET['page'], $validPages) )
  {
    $pageTitle = $_GET['page'].'-title.php';
    $pageMain = $_GET['page'].'-main.php';
  }
  ?>
  <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <?php include($page['title']); ?>

    <link rel="Stylesheet" href="a1.css" type="text/css" />
    <link rel="icon" href="images/potterMark.jpg" type="image/x-icon" />

  </head>

  <body>

    <header>
     
      <div>
        <img src="images/header.png" alt='Geoff Thomas - Woodfired Potter' width='99%'/>
      </div>
    </header>

    <nav>
      
      <a href="products.html">Purchase Geoff's Work</a> | 
      <a href="exhibitions.html">See upcoming Exhibitions</a> |
      <a href="privacy.html">Read Privacy statement</a>


      
    </nav>

    <main>
      <?php include($page-content); ?>
      <h2>Background</h2>
    <p>
    <img src="images/firing.jpg" style="height:500px; width:500px; float: left" alt='AnagamaKiln' />
    
      Geoff is a sheep, cattle and wheat farmer from north-western NSW.  In addition to this he produces beautifull woodfired pottery, primarily in his japanese-style anagama tunnel kiln.<br><br>

      While Geoff primarily makes pots as a hobby he is very well respected in the woodfiring community and has held a number of very successfull exhibitions.  Previously it has only been possible to purchase his work at galleries, but with this website we are offering you a chance to purchase unique handmade and woodfired pieces for your home 
    </p>
    
    </main>


    <footer>
      &copy; Miles Thomas
      <script>
        document.write(new Date().getFullYear());
      </script>
      | For more of Geoff's work visit <a href='http://kerrielow.com'>Kerrie Lowe Gallery</a> | <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;height:31px"
      src="http://www.w3.org/html/logo/downloads/HTML5_Logo_32.png" alt="HTML Validator" /></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0; height:31px"
      src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Validator"/></a>

      <?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
    </footer>

  </body>

</html>
