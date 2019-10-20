<!-- Authors:
     Rashid Feroz [rashid.2008feroz@gmail.com]
     fb - facebook.com/rashid.feroz1
     website - www.hackwhiz.com

     Kuldeep kumar [kuldeepanditkumar@gmail.com]
     fb - facebook.com/kuldeepanditkumar

     Abhimanyu shrivastava [aabhimanyu13@gmail.com]
     fb - facebook.com/abhimanyu.shrivastava.58
     -->

<?php
if(isset($_REQUEST['submitBtn'])){
    include '_inc/dbconn.php';
    $username=$_REQUEST['uname'];

    //salting of password
    $salt="@g26jQsG&nh*&#8v";
    $password= sha1($_REQUEST['pwd'].$salt);

    $sql="SELECT email,password FROM customer WHERE email='$username' AND password='$password'";
    $result=mysqli_query($con,$sql) or die(mysqli_error($con));
    $rws=  mysqli_fetch_array($result);

    $user=$rws[0];
    $pwd=$rws[1];

    #if($user==$username && $pwd==$password){
        session_start();
        $_SESSION['customer_login']=1;
        $_SESSION['cust_id']=$username;
    header('location:customer_account_summary.php');
  #  }

// else{
//     header('location:index.php');
// }
}
?>
<?php
session_start();

if(isset($_SESSION['customer_login']))
    header('location:customer_account_summary.php');
?>

<!DOCTYPE html>

<html>
    <head>


        <noscript><meta http-equiv="refresh" content="0;url=no-js.php"></noscript>


        <meta charset="UTF-8">
        <title>Online Banking System</title>
        <link rel="stylesheet" href="newcss.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <div class="wrapper">

        <div class="header">
            <img src="header.jpg" height="100%" width="100%"/>
            </div>
            <div class="navbar">

            <ul>
            <li ><a href="index.php">Home </a></li>
            <!-- <li><a href="features.php">Features </a></li> -->
            <li id="last"><a href="contact.php">Contact Us</a></li>
            </ul>
            </div>

        <div class="user_login">
            <form action='' method='POST'>
        <table align="left">
            <tr><td><span class="caption">Secure Login</span></td></tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr><td>Username:</td></tr>
            <tr><td><input type="text" name="uname" required></td> </tr>
            <tr><td>Password:</td></tr>
            <tr><td><input type="password" name="pwd" required></td></tr>

            <tr><td class="button1"><input type="submit" name="submitBtn" value="Log In" class="button"></td></tr>
        </table>
                </form>
            </div>

        <div class="image">
            <img src="home.jpg" height="100%" width="100%"/>
            <div class="text">

                <a href="safeonlinebanking.php"><h3>Click to read safe online banking tips</h3></a>
    <a href="t&c.php"><h3>Terms and conditions</h3></a>
    <a href="faq.php"><h3>FAQ'S</h3></a>


  </div>
            </div>

            <div class="left_panel">
                <p>We never ask for any confidential information such as PIN and OTP from custumers. Any such call can be made only by fraudster. Please do not share any personal information.</p>
                <h3>DOs & DON'Ts</h3>
                <ul>
                    <i ></i>
                    <li class="far fa-smile"> Keep your computer free of malware</li>
                    <li class="far fa-smile"> Change your passwords periodically</li>
                    <li class="far fa-frown"> Respond to any communication seeking your passwords</li>
                    <li class="far fa-frown"> eveal your passwords or card details to anyone</li>
                    <!-- <li class="fas fa-smile">Mini Statement</li>
                    <li class="fas fa-smile">ATM and Cheque Book</li>
                    <li>Staff approval Feature</li>
                    <li>Account Statement by date</li> -->


                </ul>
                </div>

            <div class="right_panel">

                    <h3>PERSONAL BANKING</h3>
                    <ul>
                        <li>The URL in your browser address bar begins with "https".The address or status bar displays the padlock symbol.Click the padlock to view and verify the security certificate.The address bar turns green indicating that the site is secured with an SSL Certificate that meets the Extended Validation Standard.</li>
                        <li>Personal Banking application provides features to administer and manage non personal accounts online.</li>
                        <li>Phishing is a fraudulent attempt, usually made through email, phone calls, SMS etc seeking your personal and confidential information.</li>
                        <li>Online Bank or any of its representative never sends you email/SMS or calls you over phone to get your personal information, password or one time SMS (high security) password.</li>
                        <li>Any such e-mail/SMS or phone call is an attempt to fraudulently withdraw money from your account through Internet Banking. Never respond to such email/SMS or phone call. Please report immediately on reportif you receive any such email/SMS or Phone call. Please lock your user access immediately.
</li>
                    </ul>
                </div>
                    <?php include 'footer.php' ?>
