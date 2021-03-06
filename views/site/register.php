<?php
/* @var $msg string that has message from controller */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registro';
$this->params['breadcrumbs'][] = $this->title;

?>
    <h1>Registro</h1>
    <p>Complete los siguientes campos para registrarse:</p>
    <h4><?= $msg; ?></h4>

<?php $form = ActiveForm::begin([
    'method' => 'post',
    'id' => 'formulario',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
    'enableClientValidation' => false,
    'enableAjaxValidation' => true,
]);
?>
    <div class="form-group">
        <?= $form->field($model, "username")->input("text") ?>
    </div>

    <div class="form-group">
        <?= $form->field($model, "email")->input("email") ?>
    </div>

    <div class="form-group">
        <?= $form->field($model, "password")->input("password") ?>
    </div>

    <div class="form-group">
        <?= $form->field($model, "password_repeat")->input("password") ?>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-13">
            <?= Html::submitButton("Registrarse", ["class" => "btn btn-primary"]) ?>
        </div>
    </div>
<?php $form->end() ?>