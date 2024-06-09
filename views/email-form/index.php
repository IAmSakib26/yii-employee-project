<?php
/** @var yii\web\View $this */

use yii\helpers\Html;
?>

<h1>email-form/List</h1>
<p>Create: <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?></p>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Create_at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($models) && $models != null):
        $i = 1;
        foreach ($models as $model): ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $model->email ?></td>
                <td><?= date('d/m/Y h:i', strtotime($model->create_at)) ?></td>
                <td>
                    <?= Html::a('View', ['view', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </td>
            </tr>
        <?php $i++; endforeach; 
        else:
        echo '<tr><td colspan="4">No data</td></tr>'; endif;?>
    </tbody>
</table>

