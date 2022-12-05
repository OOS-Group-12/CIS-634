<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
            $parse1 = parse_ini_file('sitetitle.ini', FALSE, INI_SCANNER_RAW);
          $title = $parse1['title'];
          ?>
    <title><?php echo strtoupper($title); ?></title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<link rel="stylesheet" href="../css/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../cssextenstion/iCheck/all.css">
  	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" href="../cssextenstion1/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../css/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../cssextenstion/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../cssextenstion1/css/skins/_all-skins.min.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  	<style type="text/css">
      .bold{
        font-weight:bold;
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
  	</style>
</head>