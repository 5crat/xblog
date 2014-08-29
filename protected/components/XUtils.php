<?php
/**
 * 自定义工具类
 */
class XUtils
{
    /**
     * 分页view方法
     * @param $pages
     * @param Controller $crtl
     */
    public static function linkPage($pages,Controller $crtl)
    {
        $crtl->widget('CLinkPager',array(
            'header'=>'',
            'firstPageLabel'=>'首页',
            'lastPageLabel'=>'末页',
            'prevPageLabel'=>'上一页',
            'nextPageLabel'=>'下一页',
            'pages'=>$pages,
            'maxButtonCount'=>13,
            'htmlOptions'=>array('class'=>'pagination'),
        ));
    }

    /**
     * 获取客户端IP地址
     * @return mixed
     */
    public static function getClientIP()
    {
        return Yii::app()->request->userHostAddress;
    }
}