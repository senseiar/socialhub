<?php
use yii\helpers\Html;

?>

<div class="post-default-index">
    <div class="row">
        <div class="col-md-12">
           <img src="<?php echo $post->getImage(); ?>" />
        </div>
        <div class="col-md-12">
            <?php echo Html::encode($post->description); ?>
        </div>
        <div class="col-md-12">
           <?php if($post->user): ?>
                <?php echo $post->user->username; ?>
           <?php endif; ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            Likes: <span class="likes-count"><?php echo $post->countLikes(); ?></span>
            <a href="#" class="btn btn-primary button-like <?php echo ($currentUser && $post->isLikedBy($currentUser)) ? "display-none" : ""; ?>" data-id="<?php echo $post->id; ?>">
                Like
            </a>
            <a href="#" class="btn btn-primary button-unlike <?php echo ($currentUser && $post->isLikedBy($currentUser)) ? "" : "display-none"; ?>" data-id="<?php echo $post->id; ?>">
                Unlike
            </a>
        </div>
    </div>

</div>

<?php
$this->registerJsFile('@web/js/likes.js', [
'depends' => \yii\web\JqueryAsset::className(),
]);
?>