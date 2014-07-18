<?php
$this->breadcrumbs=array(
	'Tbl Abouts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblAbout','url'=>array('index')),
	array('label'=>'Create TblAbout','url'=>array('create')),
	array('label'=>'View TblAbout','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TblAbout','url'=>array('admin')),
);
?>

<h1>Update TblAbout <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>