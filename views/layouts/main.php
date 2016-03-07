<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <?php
                NavBar::begin([
                    'brandLabel' => Yii::$app->name,
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => ''
                    ]
                ]);
                NavBar::end();
                ?>

                 <?= Nav::widget([
                    'options' => ['class' => 'nav nav-stacked nav-pills'],
                    'dropDownCaret' => '',
                    'items' => [
                        ['label' => 'Loại hàng hóa', 'url' => ['/site/index']],
                        [
                            'label' => 'Hàng hóa',
                            'items' => [
                                ['label' => 'Danh mục hàng hóa', 'url' => ['hanghoa/index']],
                                ['label' => 'Phiếu nhập kho', 'url' => ['nhapkho/index']],
                                ['label' => 'Phiếu xuất kho', 'url' => ['site/contact']],
                            ],
                        ],
                        [
                            'label' => 'Hàng hóa thực',
                            'items' => [
                                ['label' => 'Danh mục hàng hóa', 'url' => ['hanghoathuc/index']],
                                ['label' => 'Phiếu mua hàng', 'url' => ['/']],
                                ['label' => 'Phiếu bán hàng', 'url' => ['/']],
                            ],
                        ],
                        ['label' => 'Nhà cung cấp', 'url' => ['/site/contact']],
                        ['label' => 'Khách hàng', 'url' => ['/']],
                        ['label' => 'Nhân viên', 'url' => ['/']],
                        ['label' => 'Tài khoản', 'url' => ['/']],
                        Yii::$app->user->isGuest ? (
                        ['label' => 'Login', 'url' => ['/site/login']]
                        ) : (
                            '<li>'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link']
                            )
                            . Html::endForm()
                            . '</li>'
                        )
                    ],
                ]); ?>
            </div>
            <div class="col-sm-9 col-xs-12">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= $content ?>
            </div>
        </div>
    </div>

    <div class="container">

    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
