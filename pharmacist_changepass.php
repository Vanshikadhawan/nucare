<?php
session_start();
ob_start();
include "pharmacist_header.php";
?>
     <?php
     include 'connection.php';
    
     $varid="";
    $oldpass="";
    $newpass="";
    $conpass="";

     function encrypt($string)
       {
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'AA74CDCC2BBRT935136HH7B63C27'; 
        $secret_iv = '5fgf5HJ5g27'; // user define secret key
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
       
        $output = openssl_encrypt($string, $encrypt_method, $key, 0,$iv);
        $output = base64_encode($output);
      
       return $output;
       }       


   function decrypt($string)
       {
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'AA74CDCC2BBRT935136HH7B63C27'; 
        $secret_iv = '5fgf5HJ5g27'; // user define secret key
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
       
        $output = openssl_decrypt(base64_decode($string),$encrypt_method, $key, 0, $iv);
      
       return $output;
       }       

    if (isset($_POST['btn1']))
    { 
        $oldpass=$_POST['oldpass'];
                $newpass=$_POST['newpass'];
                $conpass=$_POST['conpass'];
        if(isset($_SESSION['pid']))
        {
       echo   $sql= "SELECT * FROM tab_pharmacist where login_id='".$_SESSION['pid']."'";
        $result = mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);
        if($count!=0)
        {
              if($row = mysqli_fetch_array($result))
                {
                    //echo "$oldpass and ".decrypt($row['password']);

                   if($oldpass==decrypt($row['password']))
                   {
                        if ($newpass==$conpass)
                        {
                            $newpass=encrypt($newpass);
                          $sqpupdate="update tab_pharmacist set password='$newpass' where login_id='".$_SESSION['pid']."'";

                          mysqli_query($con,$sqpupdate);
                            echo "Password Change successfully.";
                        }
                        else
                        {
                            echo "Password does not match.";
                        }
                   }
                   else
                    echo "Wrong Password";
            }
                

        
 
    }
    else
        echo " Wrong User id ";
}
}
    ?>
<body>




<!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="index.php">Home</a>
                        <i>|</i>
                    </li>
                    <li>Pharmacist Login</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    <div class="privacy py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">


    <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="border border-dark p-4 sm-6 style">
                    <form id="f1" name="f1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group row">
                            <input type="hidden" name="txtid" value="<?php echo $varid; ?>">
                            <label for="example-password-input" class="col-sm-12 col-form-label s2">Old Password</label>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input class="form-control s1" name="oldpass" type="password" id="oldpass" required="" placeholder="Enter Old Password" required="required" />
                                <i class="fa fa-lock "></i>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-password-input" class="col-sm-12 col-form-label s2">New Password</label>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input class="form-control s1" name="newpass" type="password" id="newpass" required="" placeholder="Enter New Password"  required="required" value="<?php echo $newpass; ?>" />
                                <i class="fa fa-lock "></i>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-password-input" class="col-sm-12 col-form-label s2">Confirm Password</label>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input class="form-control s1" name="conpass" type="password" id="conpass" required="" placeholder="Confirm Password" value="<?php echo $conpass; ?>" />
                                <i class="fa fa-lock "></i>
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary col-sm-6 s1 s2" name="btn1" style="height: 110%;width:40%; margin-left: 140px;">Save</button>
                            </div>
                        </div>  
                    </form> 
                </div>
            </div>
        </div>
    </div>

</div>

<?php 
    include "footer.php";
?>