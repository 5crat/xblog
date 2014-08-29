<?php

/**
 * This is the model class for table "Posts".
 *
 * The followings are the available columns in table 'Posts':
 * @property string $id
 * @property string $title
 * @property string $category_id
 * @property string $content
 * @property integer $status
 * @property integer $visitor
 * @property integer $comment_count
 * @property string $create_time
 * @property string $update_time
 */
class Posts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Posts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, category_id, content', 'required'),
			array('status, comment_count', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('category_id','length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, category_id, content, status, comment_count, create_time, update_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'category_name'=>array(self::BELONGS_TO,'Categorys','category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '文章ID',
			'title' => '文章标题',
			'category_id' => '文章分类ID',
			'content' => '文章内容',
			'status' => '文章状态',
            'visitor'=>'访客数量',
			'comment_count' => '评论次数',
			'create_time' => '创建时间',
			'update_time' => '更新时间',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('category_id',$this->category_id,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('comment_count',$this->comment_count);
		$criteria->compare('visitor',$this->visitor);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Posts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    /**
     * 获取分类列表
     * @return array
     */
    public function getCategoryList(){
        $data = Categorys::model()->findAll();
        return CHtml::listData($data,'id','name');
    }


    /**
     * @param Comments $comment
     */
    public function addCommentCount($comment)
    {
        $comment->pid = $this->id;
        $this->update($this->comment_count += 1);
    }

    /**
     * 保存前自动填充时间
     * @return bool
     */
    public function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
            {
                $this->create_time = time();
            }
            else
            {
                $this->update_time = time();
            }
            return true;
        }
        return false;
    }

    /**
     * 访客增加，返回当前访客数量
     * @return int
     */
    public function getVisiterCount()
    {
        $this->update($this->visitor+=1);
        return $this->visitor;
    }

}
