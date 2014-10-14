<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $days
 * @property string $last_check
 * @property string $email
 * @property string $security_code
 * @property string $headpic
 * @property string $nickname
 * @property integer $sex
 * @property string $qq
 * @property string $phone
 * @property string $location
 * @property string $marry
 * @property integer $income
 * @property string $favtype
 * @property string $real_name
 * @property string $card_num
 * @property integer $birth_year
 * @property integer $birth_month
 * @property integer $birth_day
 * @property string $content
 * @property string $web_headpic
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('username, password, real_name, card_num', 'required'),
			array('days, sex, income, birth_year, birth_month, birth_day', 'numerical', 'integerOnly'=>true),
			array('username, password, headpic', 'length', 'max'=>100),
			array('last_check, nickname, real_name', 'length', 'max'=>20),
			array('email', 'length', 'max'=>40),
			array('security_code, location', 'length', 'max'=>50),
			array('qq', 'length', 'max'=>13),
			array('phone', 'length', 'max'=>16),
			array('marry', 'length', 'max'=>5),
			array('favtype', 'length', 'max'=>10),
			array('card_num', 'length', 'max'=>18),
			array('content', 'length', 'max'=>500),
			array('web_headpic', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, days, last_check, email, security_code, headpic, nickname, sex, qq, phone, location, marry, income, favtype, real_name, card_num, birth_year, birth_month, birth_day, content, web_headpic', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'days' => 'Days',
			'last_check' => 'Last Check',
			'email' => 'Email',
			'security_code' => 'Security Code',
			'headpic' => 'Headpic',
			'nickname' => 'Nickname',
			'sex' => 'Sex',
			'qq' => 'Qq',
			'phone' => 'Phone',
			'location' => 'Location',
			'marry' => 'Marry',
			'income' => 'Income',
			'favtype' => 'Favtype',
			'real_name' => 'Real Name',
			'card_num' => 'Card Num',
			'birth_year' => 'Birth Year',
			'birth_month' => 'Birth Month',
			'birth_day' => 'Birth Day',
			'content' => 'Content',
			'web_headpic' => 'Web Headpic',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('days',$this->days);
		$criteria->compare('last_check',$this->last_check,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('security_code',$this->security_code,true);
		$criteria->compare('headpic',$this->headpic,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('marry',$this->marry,true);
		$criteria->compare('income',$this->income);
		$criteria->compare('favtype',$this->favtype,true);
		$criteria->compare('real_name',$this->real_name,true);
		$criteria->compare('card_num',$this->card_num,true);
		$criteria->compare('birth_year',$this->birth_year);
		$criteria->compare('birth_month',$this->birth_month);
		$criteria->compare('birth_day',$this->birth_day);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('web_headpic',$this->web_headpic,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
