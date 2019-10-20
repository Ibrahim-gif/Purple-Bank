
    <body>
        <div class="wrapper">

        <div class="header">
            <img src="header.jpg" height="100%" width="100%"/>
            </div>
            <div class="navbar">

            <ul>
            <li><a href="index.php">Home</a></li>
            <!-- <li><a href="features.php">Features</a></li> -->
            <li id="last"><a href="contact.php">Contact Us</a></li>
            <?php if(!empty($_SESSION['customer_login']))
            echo " <li style='float:right'><a href='customer_logout.php'>Logout</a></li>";
               ?>
               <?php if(!empty($_SESSION['admin_login']))
               echo " <li style='float:right'><a href='customer_logout.php'>Logout</a></li>";
                  ?>
                  <?php if(!empty($_SESSION['staff_login']))
                  echo " <li style='float:right'><a href='customer_logout.php'>Logout</a></li>";
                     ?>

            </ul>
            </div>
