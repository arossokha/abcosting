<?php

/**
 * This is the model class for table "wareservices".
 *
 * The followings are the available columns in table 'wareservices':
 * @property integer $IDWareservices
 * @property integer $IDWare
 * @property integer $IDService
 * @property double $CountHours
 *
 * The followings are the available model relations:
 * @property Wares $iDWare
 * @property Services $iDService
 */
class Wareservices extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wareservices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDWare, IDService', 'required'),
			array('IDWare, IDService', 'numerical', 'integerOnly'=>true),
			array('CountHours', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDWareservices, IDWare, IDService, CountHours', 'safe', 'on'=>'search'),
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
			'iDWare' => array(self::BELONGS_TO, 'Wares', 'IDWare'),
			'iDService' => array(self::BELONGS_TO, 'Services', 'IDService'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDWareservices' => 'Idwareservices',
			'IDWare' => 'Idware',
			'IDService' => 'Idservice',
			'CountHours' => 'Count Hours',
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

		$criteria->compare('IDWareservices',$this->IDWareservices);
		$criteria->compare('IDWare',$this->IDWare);
		$criteria->compare('IDService',$this->IDService);
		$criteria->compare('CountHours',$this->CountHours);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array(
					'pageSize' => 20
				),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Wareservices the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
