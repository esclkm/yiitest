<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<?php $this->widget('application.components.TblAboutW'); ?>
<h2>Портфолио</h2>
<?php $this->widget('application.components.TblFolioW'); ?>
<?php if(Yii::app()->user->name): ?>

	<div><?php echo CHtml::link('Добавить',array('tblFolio/create'), array('class'=>'btn btn-danger')); ?></div>

<?php endif; ?>