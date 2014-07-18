<?php
$this->breadcrumbs=array(
	'Tbl Abouts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblAbout','url'=>array('index')),
	array('label'=>'Create TblAbout','url'=>array('create')),
	array('label'=>'Update TblAbout','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TblAbout','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblAbout','url'=>array('admin')),
);
?>

<h1>View TblAbout #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'foto',
		'email',
		'phone',
		'navyk',
		'about',
		'folio',
	),
)); ?>
