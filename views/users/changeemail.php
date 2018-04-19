 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

 <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'email')->textInput(['maxlength' => true,'placeholder'=>'ex : your@example.com'])->label(false) ?>

<div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-lg btn-block btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>

<?= Html::a('Cancel', ['/users/setting'], ['class'=>'btn btn-lg btn-block btn-default']) ?>


