<?php
$this->breadcrumbs=array(
	'Tbl Abouts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblAbout','url'=>array('index')),
	array('label'=>'Manage TblAbout','url'=>array('admin')),
);
?>

<h1>Create TblAbout</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>