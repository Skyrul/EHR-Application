<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/node_modules/@chenfengyuan/datepicker/dist/datepicker.min.css">
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<style>
        body {
            margin: 20px !important;
        }
        .form-control {
            width: 98% !important;
        }
        
        input[type=checkbox], input[type=radio] {
            width: 24px;
            height: 24px;
        }
	</style>
</head>

<body>
	
<div class="container-fluid">
	<div class="row" style="border-bottom: 1px solid #94b3c4;">
		<!-- header -->
        <div id="col-md-12">
        	<div class="col-md-4"><a href="<?php echo $this->programURL(); ?>/eapplication/"><img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/company.png"></a></div>
        	<div class="col-md-8"><h1 class="pull-right head-label">Application For Employment</h1></div>
        </div><!-- header -->
	</div>
	<br>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Developed by <a href="http://www.engagex.com" target="_blank">Engagex.com</a><br/>
		Copyright &copy; <?php echo date('Y'); ?> | All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->


<script src="<?php echo Yii::app()->request->baseUrl; ?>/node_modules/@chenfengyuan/datepicker/dist/datepicker.min.js"></script>
<script>
$(document).ready(function() {
	$('input[type="text"], select, textarea').addClass('form-control');
	$('.dtpicker').datepicker();
});
</script>
</body>
</html>
