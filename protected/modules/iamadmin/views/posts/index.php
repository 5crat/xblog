<?php
/* @var $this PostsController */
/* @var Posts $list */
?>
<script type="text/javascript">
    $(document).ready(function(){
        $("a.delete").click(function(){
            if(!confirm("确定删除？")) return false;
            $.post("<?=Yii::app()->request->BaseUrl;?>/index.php/iamadmin/posts/delete/id/"+$(this).attr('value'),
                {
                    id:$(this).attr('value')
                },
                function(){
                    location.reload();
                });
        });
    });
</script>

<div class="panel panel-default">
    <div class="panel-heading">管理文章</div>
    <div class=" blogli">
        <a href="<?=Yii::app()->request->BaseUrl.'/index.php/iamadmin/posts/create';?>" class="btn btn-block btn-lg btn-inverse">发布文章</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>ToDo</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($list as $key=>$value){
            ?>
            <tr>
                <td><?=$value['id'];?></td>
                <td><?=$value['title'];?></td>
                <!--<td><?=Categorys::model()->find('id=:id',array(':id'=>$value['category_id']))['name'];?></td>-->
                <td><?=$value->category_name->name;?></td>
                <td>
                    <a class="delete" href="#delete" value="<?=$value['id'];?>"><span class="fui-cross"></span></a>
                    <a href="<?=Yii::app()->request->BaseUrl.'/index.php/iamadmin/posts/update/id/'.$value['id'];?>"><span class="fui-new"></span></a>
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