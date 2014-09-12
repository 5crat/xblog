<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */
?>
<script type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(){
        if(!confirm("确定删除？")) return false;
        $.post("<?=Yii::app()->request->BaseUrl;?>/index.php/iamadmin/users/delete/id/"+$(this).attr('value'),
            {
                id:$(this).attr('value')
            },
        function(){
            location.reload();
        });
    });
});
</script>
<div class="panel panel-default" id="users-grid">
    <div class="panel-heading">管理用户</div>
    <div class="blogli">
        <a href="<?=Yii::app()->request->BaseUrl.'/index.php/iamadmin/users/create';?>" class="btn btn-block btn-lg btn-inverse">添加用户</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>UserName</th>
            <th>NickName</th>
            <th>E-mail</th>
            <th>Info</th>
            <th>ToDo</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($list as $key=>$value){
            ?>
            <tr>
                <td><?=$value['id'];?></td>
                <td><?=$value['username'];?></td>
                <td><?=$value['nickname'];?></td>
                <td><?=$value['email'];?></td>
                <td><?=$value['info'];?></td>
                <td>
                    <a class="delete" href="#delete" value="<?=$value['id'];?>"><span class="fui-cross"></span></a>
                    <a href="<?=Yii::app()->request->BaseUrl.'/index.php/iamadmin/users/update/id/'.$value['id'];?>"><span class="fui-new"></span></a>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>

    <div class="col-lg-offset-5">
        <?php
        XUtils::linkPage($pages,$this)
        ?>
    </div>
</div>