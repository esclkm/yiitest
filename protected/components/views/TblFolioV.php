
<div class="row">
	<div class="col-md-3"><a href="<?php echo $model->foto2; ?>" data-toggle="lightbox" data-type="image" /><img src="<?php echo $model->foto; ?>" class="img-thumbnail" /></a></div>
	<div class="col-md-9">
		<h3><?php echo $model->name; ?></h3>
		<div><?php echo $model->desc; ?></div>
		<h4>Технологии</h4>
		<div><?php echo $model->tech; ?></div>
		<h4>Роль</h4>
		<div><?php echo $model->role; ?></div>
		<?php if(Yii::app()->user->name): ?>

			<div><?php echo CHtml::link('Правка',array('tblFolio/update', 'id'=>$model->id), array('class'=>'')); ?></div>

		<?php endif; ?>
	</div>
</div>
<hr/>