
<?php
session_start();
ob_start();
include "customer_header.php";
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
                </ul>
            </div>
        </div>
      </div>
<?php
include'connection.php';

      $varname="";
        $varloginid="";
        $varpass="";
        $vargender="";
        $vardob="";
        $varadd1="";
        $varadd2="";
        $varland="";
        $varcity="";
        $varstate="";
        $varcountry="";
        $varpin="";
        $varmob="";
        $varimg="";
        if(isset($_POST['btnsub']))
      {
      	$varname= $_POST['txtname'];
      	$varloginid=$_POST['txtid'];
      	$varpass= $_POST['txtpass'];
      	$vargender=$_POST['rbg'];
        $vardob=$_POST['txtdob'];
        $varadd1=$_POST['txtadd1'];
        $varadd2=$_POST['txtadd2'];
        $varland=$_POST['txtland'];
        $varcity=$_POST['txtcity'];
        $varstate=$_POST['txtstate'];
        $varcountry=$_POST['txtcountry'];
        $varpin=$_POST['txtpin'];
        $varmob=$_POST['txtmob'];
       move_uploaded_file($_FILES['img1']['tmp_name'], "images/".$_FILES['img1']['name']);
         $img="images/".$_FILES['img1']['name'];
      	

      $dt= date('Y-m-d h:i:s');
      $id= $_POST['txtid'];
      echo $sqllogin="SELECT * FROM tab_customer_profile where login_id='".$id."'";
                  $result=mysqli_query($con,$sqllogin);
                  $rowcount= mysqli_num_rows($result);
          if($rowcount==0)
          {

                  	$sql="INSERT INTO tab_customer_profile(customer_name,login_id,password,gender,dob,address_line_1,address_line_2,landmark,city,state,country,pincode,mobile_number,image,creation_date)	Values('$varname', '$varloginid' ,'$varpass', '$vargender', '$vardob','$varadd1','$varadd2','$varland','$varcity','$varstate',
                        '$varcountry','$varpin', '$varmob','$img', '$dt')";
                  	if(!mysqli_query($con, $sql))
                  	{
                  		die('error:'.mysqli_error($con));
                  	}
                  	echo"1 record added";
          }
          else
          {
            echo "<h3> $id is allready in use try another !!!!";
          }

      	//mysqli_close($con);
      }
      ?>
<div class="container bg">
<div class="row">
      	<div class="col-sm-2">
          </div>
        	<div class="col-sm-8 center">

      <form name="f1" id="f1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
      <div class="row">
      	<div class="col-sm-2"></div>
      	<div class="col-sm- 8 one"> <h2 style="font-family:cursive;">CUSTOMER PROFILE</h2></div>
      	<div class="col-sm-2"></div>
      </div>
      </br></br>
      <div class="form-group">
                 
                 
                 <label for="txtname">CUSTOMER NAME<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtname" name="txtname"
            placeholder="Enter USER Name" pattern="[A-Za-z ]{0,}" required="required" >
            
                 </div>
                  <div class="form-group">
          <label for="txtid">LOGIN ID<span class="required">*</span></label>
          <input type="email" class="form-control" id="txtid" name="txtid"
           aria-describedby="uidhelp" placeholder="Enter email" required="required">
          <small id="uidhelp" class="form-text text-muted">Please Provide Your Valid Email Id, As you password will be send on it Eg : abc@xyz.com </small>
          </div>
           <div class="form-group">
          <label for="txtpass">PASSWORD<span class="required">*</span></label>
          <input type="password" class="form-control" id="txtpass" name="txtpass"
            placeholder="Enter User Password" required="required">
        </div>
        
          <fieldset class="form-group">
             <legend>GENDER</legend>
                 <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="rbg" id="rbg" value="1" checked>
                     MALE
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="rbg" id="rbg" value="0" required="required">
       FEMALE
      </label>
    </div>
   
  </fieldset>
        <div class="form-group">
          <label for="txtdob">DATE OF BIRTH<span class="required">*</span></label>
          <input type="date" class="form-control" id="txtdob" name="txtdob"
            placeholder="Enter date of birth" required="required">
          
          </div>
           <div class="form-group">
          <label for="txtadd1">ADDRESS LINE 1<span class="required">*</span></label>
          <textarea class="form-control" id="txtadd1" name="txtadd1" rows="2"></textarea>
        </div>
         <div class="form-group">
          <label for="txtadd2">ADDRESS LINE 2<span class="required">*</span></label>
          <textarea class="form-control" id="txtadd2" name="txtadd2" rows="2"></textarea>
        </div>
          <div class="form-group">
          <label for="txtland">LANDMARK<span class="required">*</span></label>
          <textarea class="form-control" id="txtland" name="txtland" rows="2"></textarea>
        </div>
         <div class="form-group">
          <label for="txtcity">CITY<span class="required">*</span></label>
          <input type="txtcity" class="form-control" id="txtcity" name="txtcity"
            placeholder="Enter your city ">
        </div>
         <div class="form-group">
          <label for="txtstate">STATE<span class="required">*</span></label>
          <input type="txtstate" class="form-control" id="txtstate" name="txtstate"
            placeholder="Enter your state ">
        </div>
        <div class="form-group">
          <label for="txtcountry">COUNTRY<span class="required">*</span></label>
          <input type="txtcountry" class="form-control" id="txtcountry" name="txtcountry"
            placeholder="Enter your country">
        </div>
        <div class="form-group">
        <label for="txtpin">PINCODE<span class="required">*</span></label>
         <input type="txtpin" class="form-control" id="txtpin" name="txtpin"
            placeholder="Enter pincode ">
        </div>
        <div class="form-group">
          <label for="txtmob">MOBILE NUMBER<span class="required">*</span></label>
          <input type="text" class="form-control" id="txtmob" name="txtmob"
            placeholder="Enter MOBILE NUMBER" required="required" />
        </div>
        <div class="form-group">
          <label for="img1">PROFILE IMAGE<span class="required">*</span></label>
          <input type="file" class="form-control" id="img1" name="img1">
          
          </div>

        <br/><br/><br/>
        <div class="row">
                  	<div class="col-sm-3"></div>
                    <div class="col-sm-6">
             	<button type="submit" name="btnsub" class="btn btn-block btn-primary">Submit</button>    	</div>
              <div class="col-sm-3"></div>
            </div>
        </form>
      </div>
    </div>
  </div>




 
  <br/>
      <?php 
           include "footer.php";
       ?>