<?php
/* @var $this ManagerController */
?>
<div class="col-sm-12 col-xs-pull-1">
<div class="panel panel-default">
    <table class="table">
        <thead>
        <tr>
            <th>属性</th>
            <th>值</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>PHP版本</td>
            <td><?=PHP_VERSION;?></td>
        </tr>
        <tr>
            <td>服务器系统</td>
            <td><?=php_uname();?></td>
        </tr>
        <tr>
            <td>DocumentRoot</td>
            <td><?=Yii::app()->BasePath;?></td>
        </tr>
        <tr>
            <td>ServerLanguage</td>
            <td><?=Yii::app()->language;?></td>
        </tr>
        </tbody>
    </table>
</div>
</div>