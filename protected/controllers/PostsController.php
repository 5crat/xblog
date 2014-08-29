<?php

class PostsController extends Controller
{
	public function actionIndex($category)
	{

        $cate = '';
        if ($category != null)
        {
            $cate = Categorys::model()->findByAttributes(array('name'=>$category));
        }

        $criteria = new CDbCriteria();
        $criteria->addCondition('category_id='.$cate->id);
        $count = Posts::model()->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize = Yii::app()->params['pageSize'];
        $pager->applyLimit($criteria);
        $artlist = Posts::model()->findAll($criteria);

        $this->render('index',array('pages'=>$pager,'list'=>$artlist));
	}

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $post = $this->loadModel($id);
        $comment=$this->newComment($post);
        $this->render('view',array(
            'model'=>$post,
            'comment'=>$comment,
        ));
    }

    /**
     * @param Posts $post
     * @return Comments
     */
    protected function newComment($post)
    {
        $comment=new Comments;
        if(isset($_POST['ajax']) && $_POST['ajax']==='comment-form')
        {
            echo CActiveForm::validate($comment);
            Yii::app()->end();
        }

        if(isset($_POST['Comments']))
        {
            $comment->attributes=$_POST['Comments'];
            $post->addCommentCount($comment);
            $comment->save();
            $this->refresh();
        }
        return $comment;
    }
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/


    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Posts the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Posts::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Posts $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='posts-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}