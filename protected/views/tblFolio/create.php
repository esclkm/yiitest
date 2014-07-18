<?php
$this->breadcrumbs=array(
	'Tbl Folios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblFolio','url'=>array('index')),
	array('label'=>'Manage TblFolio','url'=>array('admin')),
);
?>

<h1>Create TblFolio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>