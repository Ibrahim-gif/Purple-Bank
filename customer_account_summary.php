<?php
session_start();

if(!isset($_SESSION['customer_login']))
    header('location:index.php');
?>
<?php
                $cust_id=$_SESSION['cust_id'];
                include '_inc/dbconn.php';
                $sql="SELECT * FROM customer WHERE email='$cust_id'";
                $result=  mysqli_query($con,$sql) or die(mysqli_error($con));
                $rws=  mysqli_fetch_array($result);


                $name= $rws[1];
                $account_no= $rws[0];
                $branch=$rws[10];
                $branch_code= $rws[11];
                $last_login= $rws[12];
                $acc_status=$rws[13];
                $address=$rws[6];
                $acc_type=$rws[5];

                $gender=$rws[2];
                $mobile=$rws[7];
                $email=$rws[8];

                $_SESSION['login_id']=$account_no;
                $_SESSION['name']=$name;
                ?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <title>Home - Online Banking</title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content_customer'>

           <?php include 'customer_navbar.php'?>
            <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>


            <?php

                $sql="SELECT * FROM passbook".$_SESSION['login_id'] ;
                $result=  mysqli_query($con,$sql) or die(mysqli_error($con));
                while($rws=  mysqli_fetch_array($result))
                {
                $balance=$rws[7];
                }
?>
            <div class="customer_body">
                <div class="content1">
            <p><span class="heading1 ">Account No: </span><?php echo $account_no;?></p>
            <p><span class="heading1">Branch: </span><?php echo $branch;?></p>
            <p><span class="heading1">Branch Code: </span><?php echo $branch_code;?></p>
            <!-- </div>

            <div class="content2"> -->
            <p><span class="heading1">Balance: </span><?php echo "₹ ". $balance;?></p>
            <p><span class="heading1">Account status: </span><?php echo $acc_status;?></p>
            <p><span class="heading1">Last Login: </span><?php echo $last_login;?></p>
           </div>

           <?php
               $cust_id=$_SESSION['cust_id'];
               include '_inc/dbconn.php';
               $sql="SELECT * FROM customer WHERE email='$cust_id'";
               $result=  mysqli_query($con,$sql) or die(mysqli_error($con));
               $rws=  mysqli_fetch_array($result);


               $name= $rws[1];
               $account_no= $rws[0];
               $dob=$rws[3];
               $nominee=$rws[4];
               $branch=$rws[10];
               $branch_code= $rws[11];

               $gender=$rws[2];
               $mobile=$rws[7];
               $email=$rws[8];
               $address=$rws[6];

               $last_login= $rws[12];

               $acc_status=$rws[13];
               $acc_type=$rws[5];




           ?>          <div class="customer_body">
           <div class="content3">
           <p><span class="heading1">Name: </span><?php echo $name;?></p>
           <p><span class="heading1">Gender: </span><?php if($gender=='M') echo "Male"; else echo "Female";?></p>
           <p><span class="heading1">Mobile: </span><?php echo $mobile;?></p>
           <p><span class="heading1">Email: </span><?php echo $email;?></p>
           <p><span class="heading1">Address: </span><?php echo $address;?></p>
           </div>
           <!-- <div class="content4">
           <p><span class="heading1">Account No: </span><?php echo $account_no;?></p>
           <p><span class="heading1">Nominee: </span><?php echo $nominee;?></p>
           <p><span class="heading1">Branch: </span><?php echo $branch;?></p>
           <p><span class="heading1">Branch Code: </span><?php echo $branch_code;?></p>

           <p><span class="heading1">Account Type: </span><?php echo $acc_type;?></p>
           </div> -->
           </div>
           </div>


        </div>

               <?php include 'footer.php';?>

    </body>
</html>
