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
//else
//{
//	echo "not set";
//}
	


?><!DOCTYPE html>
<head>
<title> Home </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="userHomePageStyle.js"></script>
  <link rel="stylesheet" href="userHomePageStyle.css"></link>
 
  <body>
  
	<nav class="navbar navbar-default my-nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="nav-el"><span class="nav-el">ASM</span></span></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a class="nav-el" href="#"><span class="nav-el">News Feed</span></a></li>
       <li class="dropdown">
        <a class="dropdown-toggle nav-el" data-toggle="dropdown" href="#"><span class="nav-el">Projects</span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a  href="#">Project 1</a></li>
          <li><a   href="#">Project 2</a></li>
          <li><a   href="#">Project 3</a></li>
        </ul>
      </li>
      <li><a href="boards.php"><span class="nav-el">Boards</span></a></li>
    
    </ul>
	 <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <span class="nav-el">Profile</span></a></li>
        <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> <span class="nav-el">Sign Out</span></a></li>
      </ul>
	<button class="btn navbar-btn create-project" href="#">Create</button>
  </div>
</nav>
<h2> Project 1</h2>

<br>
<br>
<br>
<div class="my-container">
	<h3> Assigned to me</h3>
	<img class="task-progress" src="Buzz Outline star.ico" alt="Mountain View" style="width:20px;height:20px;"><span class="task-item">Please Complete Web Project</span></img>
</div>
<div class="my-container">
	<h3> Task Activities</h3>
	<img class="task-progress" src="Buzz Outline star.ico" alt="Mountain View" style="width:20px;height:20px;"><span class="task-item">Rohma Making Report</span></img>
</div>
</body>


<!-- MODAL -->
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
              <h3 class="text-center"><i class="fa fa-lock"></i> Create Your Startup</h3>
    		  
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
 <label class="col-md-5 control-label">Facebook Page <small>(optional)</small></label>
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
						<input type="submit" name="signup" value="Create" class="btn btn-primary" />
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