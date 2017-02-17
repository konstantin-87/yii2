<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h2>Show all acticles</h2>

<?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif;?>

<?php if( Yii::$app->session->hasFlash('error') ): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif;?>


<?php $form = ActiveForm::begin(['options' => ['id' => 'test-form']]);?>
<?= $form->field($model, 'name')->label('Имя'); ?>
<?//= $form->field($model, 'login')->label('Логин')->passwordInput(); ?>
<?= $form->field($model, 'email')->input('email'); ?>
<?//= $form->field($model, 'gender')->label('Пол')->radioList(['a' => 'Мужской', 'b' => 'Женский']); ?>
<?//= $form->field($model, 'color')->label('Любимый цвет')->checkboxList(['1' => '0088cc', '2' => 'aaa', '3' => 'eee']); ?>
<?= $form->field($model, 'text')->label('Текст сообщения')->textarea(['rows'=>5]); ?>
<?= Html::submitButton('Send form', ['class'=> 'btn btn-success'])?>
<?php ActiveForm::end(); ?>



