<?php

use yii\helpers\Html;
?>
<?= '<h1>View Mails</h1>';?>
<?=Html::a('Edit', ['edit', 'id' => $model->id], ['class' => 'btn btn-primary'])?>
<h2>Email: <strong><?=$model->email?></strong></h2>

<h2>Created: <strong><?=$model->create_at;?></strong></h2>
<?=Html::a('Go Back', ['index'], ['class' => 'btn btn-info text-white'])?>
