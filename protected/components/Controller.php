<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 * @property string $assetsUrl
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();


    /**
     * 资源文件发布地址目录
     * 自动生成，只读属性
     * @var string
     */
    private $_assetsUrl;

    public function init()
    {
        parent::init();

        $this->_assetsUrl = Yii::app()->baseUrl;
        if(Yii::app()->theme == null)
        {
            $path = Yii::getPathOfAlias('application.admin.views.resources');
            if(file_exists($path))
            {
                $this->_assetsUrl = Yii::app()->assetManager->publish($path);
            }
        }
        else{
            $path = Yii::app()->theme->basePath.'/views/resources';
            if(file_exists($path))
                $this->_assetsUrl = Yii::app()->assetManager->publish($path);
        }
    }

    /**
     * 获取资源发布目录
     * @return string
     */
    public function getAssetsUrl()
    {
        return $this->_assetsUrl;
    }
}