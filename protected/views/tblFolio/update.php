<?php
$this->breadcrumbs=array(
	'Tbl Folios'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblFolio','url'=>array('index')),
	array('label'=>'Create TblFolio','url'=>array('create')),
	array('label'=>'View TblFolio','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TblFolio','url'=>array('admin')),
);
?>

<h1>Update TblFolio <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>