<?php

use Yii;
use yii\helpers\Html;
?>

<?php echo Html::textArea("message", '', array('id' => 'contentForm_message', 'class' => 'form-control autosize contentForm', 'rows' => '1', 'placeholder' => Yii::t("PostModule.widgets_views_postForm", "What's on your mind?"))); ?>
