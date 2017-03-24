<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Create User';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-create-user">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-create-user']); ?>

            <?= $form->field($model, 'first_name')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'middle_name')->textInput() ?>

            <?= $form->field($model, 'last_name')->textInput() ?>

            <?= $form->field($model, 'dob')->textInput() ?>

            <?= $form->field($model, 'gender')->inline()->radioList(
                ['M' => 'Male', 'F' => 'Female']
            ) ?>

            <?= $form->field($model, 'username')->textInput() ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'password_repeat')->passwordInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'create-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>