<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Posts_u */

$this->title = 'Create Posts U';
$this->params['breadcrumbs'][] = ['label' => 'Posts Us', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-u-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
