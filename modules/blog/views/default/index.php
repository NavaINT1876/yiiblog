<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use \app\modules\blog\models;
use yii\bootstrap\Carousel;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\blog\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="owl-demo" class="owl-carousel owl-theme">
  <div class="item"><h1>1</h1></div>
  <div class="item"><h1>2</h1></div>
  <div class="item"><h1>3</h1></div>
  <div class="item"><h1>4</h1></div>
  <div class="item"><h1>5</h1></div>
  <div class="item"><h1>6</h1></div>
  <div class="item"><h1>7</h1></div>
  <div class="item"><h1>8</h1></div>
  <div class="item"><h1>9</h1></div>
  <div class="item"><h1>10</h1></div>
  <div class="item"><h1>11</h1></div>
  <div class="item"><h1>12</h1></div>
  <div class="item"><h1>13</h1></div>
  <div class="item"><h1>14</h1></div>
  <div class="item"><h1>15</h1></div>
  <div class="item"><h1>16</h1></div>
</div>
<div class="posts-index">


    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Posts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
		
    <div class="row">

    <? foreach ($posts as $arr){ ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?= $arr->img ?>" alt="..." class="img-circle">
                <div class="caption">
                    <h3><?= $arr->title ?></h3>
                    <p><?= $arr->text_preview ?></p>
                    <div class="btn-toolbar">
                        <div class="btn-group btn-group-md">
                            <?= Html::a('', ['view', 'id' => $arr->id],
                                            ['class' => 'btn btn-success glyphicon glyphicon glyphicon-eye-open',
                                            'data-toggle'=>'tooltip',
                                            'title'=>'View']) ?>
                            <?= Html::a('', ['update', 'id' => $arr->id],
                                            ['class' => 'btn btn-primary glyphicon glyphicon-pencil',
                                            'data-toggle'=>'tooltip',
                                            'title'=>'Edit']) ?>
                            <?= Html::a('', ['delete', 'id' => $arr->id], [
                                'class' => 'btn btn-danger glyphicon glyphicon-remove',
                                'data-toggle'=>'tooltip',
                                'title'=>'Delete',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
    <?/*= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'text:ntext',
            'text_preview',
            'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */?>

</div>

<?= \yii\widgets\LinkPager::widget(['pagination' => $pages,])?>
