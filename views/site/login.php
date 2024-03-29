<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

    <center><img width="30%" src="<?= Yii::$app->request->baseUrl ?>/public/img/login.png"></center>

    

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <div class="col-md-12"> <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?></div>

       <div class="col-md-12">  <?= $form->field($model, 'password')->passwordInput() ?></div>

       <div class="col-md-12">  <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?></div>

        <div class="form-group"><div class="col-md-12"> 
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-block btn-warning', 'name' => 'login-button']) ?>
            </div>
        </div>
        </div>

    <?php ActiveForm::end(); ?>

  
