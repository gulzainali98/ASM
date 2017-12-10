<?php


if (isset($_POST['signup'])) 
{
$suemail=$_POST['suemail'];
$suname=$_POST['suname'];

$con=mysqli_connect('localhost','root','','getupstartup')
 or die('Error connecting to MySQL server.');
 
 if(!$con)
 {
	 echo "error";
 }

mysqli_query($con, "INSERT into getupstartup.user(suname,suemail) VALUES('$suname','$suemail')");

if(mysqli_affected_rows($con) > 0){
	echo "<p>Record Added</p>";
} else {
	echo "Record NOT Added<br />";
	echo mysqli_error ($con);
}

//print '<script type = "text/javascript">';
//print 'alert("Startup Created!")';

mysqli_close($con);
}
else
{
	echo "not set";
}
	


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ASM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src= "script.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css"></link>
</head>
<body>

<div class="jumbotron page-header">
  <h1>ASM</h1>      
</div>
<div class="container">

<div class="container">

<div class="col-md-12 col-lg-offset-2">
    <div class="login-signup">
      <div class="row">
        <div class="col-md-8 nav-tab-holder">
     
      </div>

      </div>

      
	  
	  

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
          <div class="row">

            <div class="col-md-8 mobile-pull">
              <article role="login">
                <h3 class="text-center"><i class="fa fa-lock"></i>USER</h3>
				
               	<form role="form" action="boards.php" method="post" name="loginform" class="login-form">
				<fieldset>
					<legend>Login</legend>
					
					
					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="Your Email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
                      <button type="button" class="btn btn-info btn-lg" id="myBtn">signup here</button>
				</fieldset>
			</form>
                

              </article>
            </div>

     

          </div>
          <!-- end of row -->
        </div>
        <!-- end of home -->


  
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content col-md-12">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4 class="modal-title">Signup</h4>
        </div>
        <div class="modal-body">
        <div class="row">

        
            <article role="login">
              <h3 class="text-center"><i class="fa fa-lock"></i> Create User Account</h3>
    		  
             <form role="form" action="" method="post" name="signupform">
			 <!-- Text input-->
			 

<div class="form-group">
<label class="col-md-5 control-label">Company Name</label>
<div class="col-md-7">
<input type="text" name="suname" placeholder="Enter Full Name" value="" class="form-control" />
</div>          	
</div>
<br>
<br>
<br>
<!-- Text input-->
<div class="form-group">
 <label class="col-md-5 control-label">Company Logo <small>(optional)</small></label>
 <div class="col-md-7">
 <input type="file"  name="inputFile" id="inputFile" class="form-control" placeholder="" >
</div>
</div>
<br>
<br>

  <!-- Text input-->
<div class="form-group">
<label class="col-md-5 control-label">Company Email</label>
<div class="col-md-7">
<input type="email" name="suemail" placeholder="Email"  value="" class="form-control" />       
</div>              
</div>
<br>
<br>
      <!-- Text input-->
<div class="form-group">
<label class="col-md-5 control-label">Password <small>(optional)</small></label>
<div class="col-md-7">
<input type="password" name="password" placeholder="Password"  class="form-control" />
</div>
</div>         

  <br><br>    <!-- Text input-->
<div class="form-group">
<label class="col-md-5 control-label">Confirm Password <small>(optional)</small></label>
<div class="col-md-7">
<input type="password" name="cpassword" placeholder="Confirm Password"  class="form-control" />
</div>
</div>         

	<br><br>			
<div class="form-group">
<label class="col-md-5 control-label">Company Telephone</label>
<div class="col-md-7">
<input type="text" class="form-control" id="telephone"  name ="telephone"placeholder=""  />
</div>
</div>  		
    <br> <br>                  
 <div class="form-group">
<label class="col-md-5 control-label">Company Address</label>
<div class="col-md-7">
<input type="text" class="form-control" id="com_add"  name ="com_add"placeholder=""  />
</div>
</div> 
    <br>                       
<br>
 <div class="form-group">
 <label class="col-md-5 control-label">Country</label>
 <div class="col-md-7">
<input type="text" class="form-control" id="contry"  name ="country"placeholder=""  />
</div>
</div> 
     <br> <br>                     
  	<div class="form-group">
 <label class="col-md-5 control-label">Website <small>(optional)</small></label>
 <div class="col-md-7">
<input type="url" class="form-control" id="inputwebsite"  name ="web"placeholder="">
</div>
</div> <br>
       <br>                      
<div class="form-group">
<label class="col-md-5 control-label">Website <small>(optional)</small></label>
<div class="col-md-7">
<input type="url" class="form-control" id="inputwebsite"  name ="web"placeholder="">
</div>
</div>
 <br><br>
 
<div class="form-group">
<label class="col-md-5 control-label">Video <small>(optional)</small></label>
<div class="col-md-7">
<input type="url" class="form-control" id="inputvideo" name="video" placeholder="A link to a video about your company" />
 </div>
</div> 
<br><br>

 <div class="form-group">
 <label class="col-md-5 control-label">Facebook Username <small>(optional)</small></label>
 <div class="col-md-7">
<input type="url" class="form-control" id="inputfbUser" name="fbuser" placeholder="web.facebook.com/?"   />
 </div>
</div>
  <!--
                <div class="form-group">
                  <input type="submit" class="btn btn-success btn-block"  value="SUBMIT">
                </div>
-->
				
		    <div class="form-group">
						<input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
					</div>		  

              </form>
          
         

            </article>
        

 
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>





</body>
</html>

