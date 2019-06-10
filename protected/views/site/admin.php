
<style>
.info {
    background: #58bf00;
    padding: 4px;
    color: white;
    border: 2px solid #173102;
}
</style>
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="info">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

<table class="table table-hover">
<thead>
<tr>
	<th></th>
	<th></th>
	<th>Last Name</th>
	<th>First Name</th>
	<th>Email</th>
	<th>Created Date</th>
</tr>
</thead>
<tbody>
<?php 
$applicants = Applicant::model()->findAll(array('order'=>'id DESC'));
if(!empty($applicants)):
foreach($applicants as $k=>$v):
?>
<tr>
	<td><a href="<?php echo Yii::app()->params['pdfviewer']. $this->programURL() . '/eapplication/index.php/site/view/'. $v->id; ?>" target="_blank">View</a></a></td>
	<td><a href="<?php echo $this->programURL() . '/eapplication/index.php/site/delete/'. $v->id; ?>" onclick="return confirm('Are you sure to delete this item?');">Delete</a></a></td>
	<th><?php echo $v->last_name; ?></td>
	<th><?php echo $v->first_name; ?></td>
	<th><?php echo $v->email; ?></td>
	<th><?php echo $v->created_date; ?></td>
</tr>	
<?php
endforeach;
endif;
?>
</tbody>
</table>