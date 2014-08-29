<?php

/**
 * This is the model class for table "Comments".
 *
 * The followings are the available columns in table 'Comments':
 * @property integer $id
 * @property integer $pid
 * @property string $create_user
 * @property string $user_email
 * @property string $content
 * @property integer $read_status
 * @property string $user_ip
 * @property integer $create_time
 */
class Comments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Comments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('create_user, user_email, content', 'required'),
			array('user_ip', 'numerical', 'integerOnly'=>true),
			array('pid, create_time', 'length', 'max'=>11),
			array('create_user, user_email', 'length', 'max'=>50),
			array('content', 'length', 'max'=>200),
			array('read_status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pid, create_user, user_email, content, read_status, user_ip, create_time', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '评论ID',
			'pid' => '评论父ID',
			'create_user' => '评论人',
			'user_email' => '评论人Email',
			'content' => '评论内容',
			'read_status' => '评论是否查看',
			'user_ip' => '评论用户ip',
			'create_time' => '评论时间',
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
		$criteria->compare('pid',$this->pid,true);
		$criteria->compare('create_user',$this->create_user,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('read_status',$this->read_status,true);
		$criteria->compare('user_ip',$this->user_ip);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
            {
                $this->user_ip = XUtils::getClientIP();
                $this->create_time = time();
            }
            return true;
        }
        return false;
    }
}
