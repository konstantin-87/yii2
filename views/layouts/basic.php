<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="wrap">
    <div class="container">
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><?= Html::a('Главная', '/web/')?></li>
            <li role="presentation"><?= Html::a('Все статьи', ['/post/index'])?></li>
            <li role="presentation"><?= Html::a('Одна статья', ['/post/show'])?></li>
        </ul>

    <?php
//        debug($this->blocks);
        if(isset($this->blocks['block1']) OR isset($this->blocks['newBlock'])) :
            echo $this->blocks['block1'];
            echo $this->blocks['newBlock'];
         endif;
    ?>

        <?= $content?>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>