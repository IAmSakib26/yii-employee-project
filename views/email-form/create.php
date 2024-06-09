<?php
/** @var yii\web\View $this */

use yii\widgets\ActiveForm;
// use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
?>

<h1>email-form/index</h1>
<?php $form = ActiveForm::begin();?>
<?= $form->field($model, 'email')->textInput();?>
<?= Html::submitButton('Submit', ['class' => 'btn btn-lg btn-success'])?>
<?php ActiveForm::end();