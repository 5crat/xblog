<?php
/* @var $this CategorysController */
/* @var $dataProvider CActiveDataProvider */
?>

<script type="text/javascript">
    $(document).ready(function(){
        $("a.delete").click(function(){
            if(!confirm("Are you sure delete it?")) return false;
            $.post("<?=Yii::app()->request->BaseUrl;?>/index.php/iamadmin/categorys/delete/id/"+$(this).attr('value'),
                {
                    id:$(this).attr('value')
                },
                location.reload());
        });

        $("a#create").click(function(){$('#showcreate').toggle();});
        $("button#no").click(function(){$('#showcreate').hide();});
        $("button#yes").click(function(){
            var category = $('input#value').attr('value');
            if(category != null && category !="")
            {
                $.post("<?=Yii::app()->request->BaseUrl;?>/index.php/iamadmin/categorys/create",
                    {
                        'Categorys[name]':category
                    },
                    function(){
                        location.reload();
                    });
            }
            });
    });
</script>

<div class="panel panel-default">
    <div class="panel-heading">Manage Categorys</div>
    <div class="blogli">
        <a id="create" href="#create" class="btn btn-block btn-lg btn-inverse">Create Category</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>ToDo</th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach($dataProvider->getData() as $key=>$value){
            ?>
            <tr>
                <td><?=$value['id'];?></td>
                <td><?=$value['name'];?></td>
                <td>
                    <a class="delete" href="#delete" value="<?=$value['id'];?>"><span class="fui-cross"></span></a>
                    <a href="<?=Yii::app()->request->BaseUrl.'/index.php/iamadmin/categorys/update/id/'.$value['id'];?>"><span class="fui-new"></span></a>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>

</div>
<div style="margin-top: 50px;">
<div id="showcreate" class="tooltip fade bottom in" style="display: none">
    <div class="tooltip-arrow"></div>
    <div class="tooltip-inner">
        <input id="value" class="form-control" type="text" size="16" maxlength="16" placeholder="Category Name">
        <button id="yes" class="btn btn-info">OK</button>
        <button id="no" class="btn btn-danger">Cancel</button>
    </div>
</div>
</div>