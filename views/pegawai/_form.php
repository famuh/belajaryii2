<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use yii\helpers

/** @var yii\web\View $this */
/** @var app\models\Pegawai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?php // echo $form->field($model, 'alamat')->dropDownList(['PRA'=>'PRIA', 'WNT'=>'WANITA', 'UND'=>'GATAU'])?> -->

    <!-- <?= $form->field($model, 'id_jabatan')->textInput() ?> -->
    <?php
    $dataPost=ArrayHelper::map(\app\models\Jabatan::find()->asArray()->all(),'id_jabatan', 'jabatan');
    echo $form->field($model, 'id_jabatan')
    ->dropDownList(
        $dataPost,
        ['id_jabatan' => 'jabatan']
    )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
