<?php
session_start();
ob_start();
include "pharmacist_header.php";
?>


    

<!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="index.php">Home</a>
                        <i>|</i>
                    </li>
                    <?php
      
   
       if(isset($_POST['btn3']))
       {
       	unset($_SESSION['pid']);
       	session_destroy();
       	header('location:pharmacist_login.php');
       }
       
       if(isset($_SESSION['pid']))
       {
            echo "<li><font color='sky-blue'><i><b> WELCOME &nbsp;".$_SESSION['pname']."&nbsp; to our Website</b></i></font></li>";
            
       }
       else
        echo "Invalid ";
    ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->

    <div class="privacy py-sm-5 py-4">
        <div class="container">
<iframe name="myframe" title="category" id="frames" width="100%" height=900px >
</iframe>
</div>
<?php 
    include "footer.php";
?>