<?php 	include 'includes/conn.php'; ?>
<?php 	include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">

                  <?php
            $parse1 = parse_ini_file('admin/sitetitle.ini', FALSE, INI_SCANNER_RAW);
          $title = $parse1['title'];
          ?>



        <a href="#" class="navbar-brand"><b><?php echo strtoupper($title); ?></b></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="user user-menu">
          </li>
          <li><a href="../"><i class="fa fa-sign-out"></i>BACK</a></li>  
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>	 

	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	      	<?php
	      		$parse = parse_ini_file('admin/sitetitle.ini', FALSE, INI_SCANNER_RAW);
    			$title = $parse['title'];
	      	?>
	      	<h1 class="page-header text-center title"><b><?php echo strtoupper($title); ?> DEVELOPERS TEAM</b></h1>
	        
	        <div class="row">
	        	<div class="col-sm-10 col-sm-offset-1">

				    		<!-- Voting Ballot -->
						    <form method="POST" id="ballotForm" action="submit_ballot.php">
				        		<?php
				        			include 'includes/slugify.php';

										$sql = "SELECT * FROM team";
										$cquery = $conn->query($sql);
										while($crow = $cquery->fetch_assoc()){
											$slug = slugify($row['about']);
											$checked = '';
											if(isset($_SESSION['post'][$slug])){
												$value = $_SESSION['post'][$slug];

												if(is_array($value)){
													foreach($value as $val){
														if($val == $crow['id']){
															$checked = 'checked';
														}
													}
												}
												else{
													if($value == $crow['id']){
														$checked = 'checked';
													}
												}
											}
											$image = (!empty($crow['photo'])) ? 'images/'.$crow['photo'] : 'images/profile.jpg';
											$candidate .= '
												<li>
													'.$input.'<img src="'.$image.'" height="100px" width="100px" class="clist"><span class="cname clist">'.$crow['firstname'].' '.$crow['lastname'].'</span>
													<span class="cname clist">'.$crow['email'].' '.$crow['about'].'</span><span class="cname clist"><a href="'.$crow['profilelink'].'">'.$crow['profilelink'].'</a></span>
												</li>
											';
										}


										echo '
											<div class="row">
												<div class="col-xs-12">
													<div class="box box-solid" style="width:fit-content;" id="'.$row['id'].'">
														<div class="box-header with-border">
															<h3 class="box-title"><b>'.$row['description'].'</b></h3>
														</div>
														<div class="box-body">
															<div id="candidate_list">
																<ul style="width:max-content;">
																	'.$candidate.'
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										';

										$candidate = '';


				        		?>
				        	</form>
				        	<!-- End Voting Ballot -->

	        	</div>
	        </div>
	        
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>

<?php include 'includes/scripts.php'; ?>
</body>
</html>