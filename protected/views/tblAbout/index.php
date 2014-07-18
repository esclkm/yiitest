<?php
$this->breadcrumbs=array(
	'Tbl Abouts',
);

$this->menu=array(
	array('label'=>'Create TblAbout','url'=>array('create')),
	array('label'=>'Manage TblAbout','url'=>array('admin')),
);
?>

<h1>Tbl Abouts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
