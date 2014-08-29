<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/backend'); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#showmenu").click(function(){
                $("#menu_controller").toggle();
            })
        });
    </script>
<div class="container-fluid" id="blogcon">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a id="showmenu" class="navbar-brand" href="#"><?=Yii::app()->name;?></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <ul class="nav nav-pills navbar-right">
                <li>
                    <?php $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                            array('label'=>'Login', 'url'=>array('/iamadmin/auth/login'), 'visible'=>Yii::app()->user->isGuest,'itemOptions'=>array('class'=>'"btn-sm navbar-brand')),
                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/iamadmin/auth/logout'), 'visible'=>!Yii::app()->user->isGuest,'itemOptions'=>array('class'=>"navbar-text")),
                        ),));
                    ?>
                </li>
            </ul>
        </div>
    </nav>
    <div class="blogpal"></div>
        <nav id="menu_controller" class="navbar navbar-inverse navbar-embossed navbar-left affix" role="navigation">
            <div class="collapse navbar-collapse" style="padding-top: 10px;padding-bottom: 10px;">

                <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'首页', 'url'=>array('/iamadmin/manager/index')),
                        array('label'=>'用户', 'url'=>array('/iamadmin/users/index')),
                        array('label'=>'文章', 'url'=>array('/iamadmin/posts/index')),
                        array('label'=>'分类', 'url'=>array('/iamadmin/categorys/index')),
                        array('label'=>'评论', 'url'=>array('/iamadmin/comments/index')),
                        array('label'=>'Blog', 'url'=>array('/')),
                    ),
                    'htmlOptions'=>array('class'=>'nav nav-pills nav-stacked'),
                )); ?>

            </div>
        </nav>
        <div class=" ptl col-lg-offset-2 col-sm-9" id="content">
            <?php echo $content;?>
        </div>
</div>
<?php $this->endContent(); ?>