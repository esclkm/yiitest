<?php
$this->breadcrumbs=array(
	'Tbl Folios',
);

$this->menu=array(
	array('label'=>'Create TblFolio','url'=>array('create')),
	array('label'=>'Manage TblFolio','url'=>array('admin')),
);
?>

<h1>Tbl Folios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
