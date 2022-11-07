<?php
  	session_start();
		include 'conn.php';
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}
    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
                  <?php
            $parse1 = parse_ini_file('admin/sitetitle.ini', FALSE, INI_SCANNER_RAW);
          $title = $parse1['title'];
          ?>
  	<title><?php echo strtoupper($title); ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo (!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg' ?>">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/iCheck/all.css">
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  	<style>
  		.mt20{
        margin-top: 20px;
      }
      .title{
        font-size: 50px;
      }
      #candidate_list{
        margin-top:20px;
      }
      #candidate_list ul{
        list-style-type:none;
      }
      #candidate_list ul li{ 
        margin:0 30px 30px 0; 
        vertical-align:top
      }
      .clist{
        margin-left: 20px;
      }
      .cname{
        font-size: 25px;
      }
      .votelist{
        font-size: 17px;
      }
  	</style>		
</head>
<body class="hold-transition login-page">

    <div>
  	    	           <center style="padding-top:50px;">   Current Election Result: - <a href="print.php" target="_blank" class="btn btn-success btn-sm btn-flat"><span class="glyphicon glyphicon-print"></span> Current Election Result</a></center>

	<div class="login-box" style="width:fit-content;">
  	<div class="login-logo">
  	                      <?php
            $parse1 = parse_ini_file('admin/sitetitle.ini', FALSE, INI_SCANNER_RAW);
          $title = $parse1['title'];
          ?>





  		<b><?php echo strtoupper($title); ?> CANDIDATE</b>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg">Candidate Register</p>

    	<form action="candidates_add.php" method="POST" enctype="multipart/form-data" >
          <div class="form-group has-feedback">
          <label for="firstname" class="col-sm-3 control-label">First Name</label>
              <input  type="text" class="form-control" name="firstname" id="firstname" placeholder="John" required>
          </div>
          <div class="form-group has-feedback">
          <label for="lastname" class="col-sm-3 control-label">Last Name</label>
              <input  type="text" class="form-control" name="lastname" id="lastname" placeholder="James" required>
          </div>
          <div class="form-group has-feedback">
          <label for="email" class="col-sm-3 control-label">Email</label>
              <input  type="email" class="form-control" name="email" id="email" placeholder="James" required>
          </div>
          <div class="form-group has-feedback">                    
          <label for="photo" class="col-sm-3 control-label">Photo (Only .png/.jpeg/.jpg accepted)</label>
              <input type="file" class="form-control" id="photo" accept="image/*" required name="photo">
          </div>
          <br/>
        <div class="form-group has-feedback">

                      <select  class="form-control" id="position" name="position" required>
                        <option  value="" selected>- Position -</option>
                        <?php
                          $sql = "SELECT * FROM positions";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id']."'>".$row['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                </div>
                                <div class="form-group has-feedback">
                    <label for="platform" class="col-sm-3 control-label">Platform</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="platform" required name="platform" rows="7"></textarea>
                    </div>
                </div>


      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="registercandidate"><i class="fa fa-sign-in"></i> Register</button>
        		</div>
      		</div>
    	</form>
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
	</div>
	<div style="float:right;"><footer class="main-footer" style="padding-left:352px;">
    <div class="container" style="padding-left:38px;">
      <div class="pull-right hidden-xs">
                  <?php
            $parse1 = parse_ini_file('admin/footer1.ini', FALSE, INI_SCANNER_RAW);
            $parse2 = parse_ini_file('admin/footer2.ini', FALSE, INI_SCANNER_RAW);
            $parse3 = parse_ini_file('admin/footer3.ini', FALSE, INI_SCANNER_RAW);
            $parse4 = parse_ini_file('admin/footer4.ini', FALSE, INI_SCANNER_RAW);
          $title1 = $parse1['tag1'];
          $title2 = $parse2['tag2'];
          $title3 = $parse3['link'];
          $title4 = $parse4['name'];
          ?>

        <b><?php echo strtoupper($title1); ?></b>
      </div>
      <strong style="margin-left:-370px;"><?php echo strtoupper($title2); ?><a href="<?php echo strtoupper($title3); ?>" target="_blank"> <?php echo strtoupper($title4); ?></a></strong>
    </div>
    <!-- /.container -->
</footer></div>
<?php include 'includes/scripts.php' ?>
</body>
</html>