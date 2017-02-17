<?php
//$this->title = 'Одна статья';
?>

<?php $this->beginBlock('block1');?>
    <h1>Заголовок страницы</h1>
<?php $this->endBlock()?>


<h1>Show article</h1>

<?php debug($cats)?>

<?php //dforeach;?>foreach($cats as $cat): ?>
<?php //echo $cat->title . '<br />'?>
    <!---->
    <!--    --><?php //en


<button class="btn btn-success" id="btn">Click me...</button>

<?php
//$this->registerJsFile('@web/js/scripts.js',['depends' => 'yii\web\YiiAsset']);
//$this->registerJs("$('.container').append('<p> Paragraph!!!</p>')", \yii\web\View::POS_LOAD)

//$this->registerCss('.container {background: #ccc}');


$script = <<< JS
$('#btn').on('click', function(e) {
    $.ajax({
       url: 'index.php?r=post/index',
       data: {test: '123'},
       type: 'POST',
       success: function(res) {
           console.log(res);
       }, 
       error: function(res) {
         alert('Error');
       }
    });
});
JS;
$this->registerJs($script);

?>