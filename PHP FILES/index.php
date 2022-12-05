<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
    
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	    	           <center style="padding-top:50px;"><a href="aboutus.php" target="_blank" class="btn btn-success btn-sm btn-flat">Our Team</a></center>
  	<div class="login-logo">
  	                      <?php
            $parse1 = parse_ini_file('admin/sitetitle.ini', FALSE, INI_SCANNER_RAW);
          $title = $parse1['title'];
          ?>





  		<b><?php echo strtoupper($title); ?> VOTERS</b>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg">Login to Vote</p>
            <script>
         
function myFunction() {
  var x = document.getElementById("myDIV");
    x.style.display = "block";
  var x1 = document.getElementById("myDIV1");
    x1.style.display = "none";
  var x4 = document.getElementById("myDIV2");
    x4.style.display = "none";
  var x2 = document.getElementById("resend");
    x2.style.display = "block";
  var x5 = document.getElementById("register");
    x5.style.display = "block";
  var x3 = document.getElementById("verify");
    x3.style.display = "none";
}
function myFunction1() {
  var x = document.getElementById("myDIV1");
    x.style.display = "block";
    var x1 = document.getElementById("myDIV");
    x1.style.display = "none";
    var x4 = document.getElementById("myDIV2");
    x4.style.display = "none";
  var x3 = document.getElementById("resend");
    x3.style.display = "none";
    var x2 = document.getElementById("verify");
    x2.style.display = "block";
    var x5 = document.getElementById("register");
    x5.style.display = "block";
}
function myFunction2() {
  var x = document.getElementById("myDIV2");
    x.style.display = "block";
    var x1 = document.getElementById("myDIV");
    x1.style.display = "none";
    var x4 = document.getElementById("myDIV1");
    x4.style.display = "none";
  var x3 = document.getElementById("register");
    x3.style.display = "none";
    var x2 = document.getElementById("verify");
    x2.style.display = "block";
    var x5 = document.getElementById("resend");
    x5.style.display = "block";
}
</script>
    	<form action="login.php" id="myDIV" style="display:block" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
    	<form id="myDIV1" action="forgot.php" method="POST" style="display:none">
          <div class="form-group has-feedback">
              <input  type="email" class="form-control" name="email" placeholder="Email ID" required>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="voterid"><i class="fa fa-sign-in"></i> Forgot</button>
        		</div>
      		</div>
    	</form>
    	   <form id="myDIV2" action="admin/voters_add1.php" method="POST" style="display:none" enctype="multipart/form-data">
          <div class="form-group has-feedback">
              <input  type="text" class="form-control" name="firstname" placeholder="John" required>
          </div>
          <div class="form-group has-feedback">
              <input  type="text" class="form-control" name="lastname" placeholder="James" required>
          </div>
          <div class="form-group has-feedback">
              <input  type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
          <div class="form-group has-feedback">
              <input  type="email" class="form-control" name="email" placeholder="Email ID" required>
          </div>
          <div class="form-group has-feedback">Photo (Only .png/.jpeg/.jpg accepted)
              <input type="file" class="form-control" id="photo" accept="image/*" name="photo">
          </div>
          <div class="form-group has-feedback">Govt. Proof (Only .pdf accepted)
              <input type="file" class="form-control" id="proof" accept=".pdf" name="proof">
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="registervoter"><i class="fa fa-sign-in"></i> Register</button>
        		</div>
      		</div>
    	</form>

            <button onclick="myFunction1()" id="resend" class='btn btn-primary btn-block mt-4 mb-4 customBtn' style="display:block;" > Forgot Password/Voter Id</button>
            <button onclick="myFunction()" id="verify" class='btn btn-primary btn-block mt-4 mb-4 customBtn' style="display:block;"> Login</button>
            <button onclick="myFunction2()" id="register" class='btn btn-primary btn-block mt-4 mb-4 customBtn' style="display:block;"> Register</button>

  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
  	
</div>
<?php include 'includes/scripts.php' ?>
</body>
</html>