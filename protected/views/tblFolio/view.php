<?php
$this->breadcrumbs=array(
	'Tbl Folios'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TblFolio','url'=>array('index')),
	array('label'=>'Create TblFolio','url'=>array('create')),
	array('label'=>'Update TblFolio','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TblFolio','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblFolio','url'=>array('admin')),
);
?>

<h1>View TblFolio #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'foto',
		'foto2',
		'desc',
		'tech',
		'role',
	),
)); ?>
