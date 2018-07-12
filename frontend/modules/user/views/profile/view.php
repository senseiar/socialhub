<?php 
use yii\helpers\Html;
use yii\helpers\HtmlPurifier; 
?>
<h2><?= Html::encode($user->username); ?></h2>
<p><?= HtmlPurifier::process($user->about); ?></p>