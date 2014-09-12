<?php
/* @var $this ManagerController */
?>

<div class="panel panel-default">
    <div class="panel-heading"><strong>System</strong></div>
    <table class="table">
        <thead>
        <tr>
            <th>Attribute</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>PHP_Versiom</td>
            <td><?=PHP_VERSION;?></td>
        </tr>
        <tr>
            <td>Server_Version</td>
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