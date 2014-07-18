<h1><?php echo $model->username; ?></h1>
<div class="row">
  <div class="col-md-3"><img src="<?php echo $model->foto; ?>" class="img-thumbnail" /></div>
  <div class="col-md-9">
  		<div class="row"><div class="col-md-2"><strong>email:</strong></div> <div class="col-md-7 decode"><?php echo base64_encode($model->email); ?></div></div>
  		<div class="row"><div class="col-md-2"><strong>Телефон:</strong></div> <div class="col-md-7 decode"><?php echo base64_encode($model->phone); ?></div></div>
  		<div class="row"><div class="col-md-2"><strong>Навыки:</strong></div> 
  			<div class="col-md-7"><?php echo nl2br(CHtml::encode($model->navyk)); ?></div>
  		</div>
  		<div class="row"><div class="col-md-2"><strong>Обо мне:</strong></div> 
  			<div class="col-md-7"><?php echo nl2br(CHtml::encode($model->about)); ?></div>
  		</div>
<?php if(Yii::app()->user->name): ?>

	<div><?php echo CHtml::link('Правка',array('tblAbout/update', 'id'=>'1'), array('class'=>'btn btn-danger')); ?></div>

<?php endif; ?>

  </div>
</div>