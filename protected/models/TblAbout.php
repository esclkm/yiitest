<?php

/**
 * This is the model class for table "tbl_about".
 *
 * The followings are the available columns in table 'tbl_about':
 * @property integer $id
 * @property string $username
 * @property string $foto
 * @property string $email
 * @property string $phone
 * @property string $navyk
 * @property string $about
 * @property string $folio
 */
class TblAbout extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_about';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, foto, email, phone, navyk, about, folio', 'required'),
			array('username, foto, email, phone', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, foto, email, phone, navyk, about, folio', 'safe', 'on'=>'search'),
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
			'username' => 'Имя',
			'foto' => 'Фото',
			'email' => 'Емеил',
			'phone' => 'Телефон',
			'navyk' => 'Навыки',
			'about' => 'Обо мне',
			'folio' => 'Портфолио',
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
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('navyk',$this->navyk,true);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('folio',$this->folio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblAbout the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
