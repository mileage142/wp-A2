<html>
  <head>
    <meta charset="UTF-8">
    

    <link rel="Stylesheet" href="a2.css" type="text/css" />
    <link rel="icon" href="images/potterMark.jpg" type="image/x-icon" />

  </head>

  <body>

    <header>
     
      <div>
        <img src="images/Header.png" alt='Geoff Thomas - Woodfired Potter' width='99%'/>
      </div>

      
    </header>

    <nav>

      <a href="home.php">Home</a> |
      <a href="products.php">Purchase Geoff's Work</a> | 
      <a href="exhibitions.php">See upcoming Exhibitions</a> |
      <a href="privacy.php">Read Privacy statement</a>
      <a href="sitemap.php">SITEMAP</a>
      
    

    <div class ="login">

      <?php
      
        if(isset($_SESSION['fname']))
        { 
          echo "Welcome "; 
          echo $_SESSION['fname'];
          ?>
          <br>
          <a href='logout.php'> LOGOUT</a>



        <?php  
        }
        elseif(isset($_SESSION['user']))
        {
        if($_SESSION['user'] == 'guest')
        { ?>
          <form action="login.php" method="POST">
          Sorry, only registered users can login<br>
          <table>
          <tr>
          <td>Username: </td>
          <td><input type="text" name="username"></td>
          </tr>
          <tr>
          <td>Password: </td>
        <td><input type="password" name="password"></td>
          </tr>
        </table>
        <input type="submit" value='Log In'>


        <?php
        }
        }
        elseif(!isset($_SESSION['fname']))    
        { ?>
        <form action="login.php" method="POST">
          Please Login<br>
          <table>
          <tr>
          <td>Username: </td>
          <td><input type="text" name="username"></td>
          </tr>
          <tr>
          <td>Password: </td>
        <td><input type="password" name="password"></td>
          </tr>
        </table>
        <input type="submit" value='Log In'>
        <?php
        }
        ?>


      </div>
    </nav>
    