<?php

/**
 * This is the model class for table "warematerials".
 *
 * The followings are the available columns in table 'warematerials':
 * @property integer $IDWarematerials
 * @property integer $IDWork
 * @property integer $IDWare
 * @property integer $IDMH
 * @property integer $IDEquip
 * @property double $CountMaterials
 * @property double $HoursWork
 * @property double $HoursEquip
 *
 * The followings are the available model relations:
 * @property Wares $iDWare
 * @property Materialshardwares $iDMH
 * @property Equips $iDEquip
 * @property Work $iDWork
 */
class Warematerials extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'warematerials';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDWork, IDWare, IDMH, IDEquip', 'required'),
			array('IDWork, IDWare, IDMH, IDEquip', 'numerical', 'integerOnly'=>true),
			array('CountMaterials, HoursWork, HoursEquip', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDWarematerials, IDWork, IDWare, IDMH, IDEquip, CountMaterials, HoursWork, HoursEquip', 'safe', 'on'=>'search'),
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
			'iDMH' => array(self::BELONGS_TO, 'Materialshardwares', 'IDMH'),
			'iDEquip' => array(self::BELONGS_TO, 'Equips', 'IDEquip'),
			'iDWork' => array(self::BELONGS_TO, 'Work', 'IDWork'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDWarematerials' => 'Idwarematerials',
			'IDWork' => 'Idwork',
			'IDWare' => 'Idware',
			'IDMH' => 'Idmh',
			'IDEquip' => 'Idequip',
			'CountMaterials' => 'Count Materials',
			'HoursWork' => 'Hours Work',
			'HoursEquip' => 'Hours Equip',
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

		$criteria->compare('IDWarematerials',$this->IDWarematerials);
		$criteria->compare('IDWork',$this->IDWork);
		$criteria->compare('IDWare',$this->IDWare);
		$criteria->compare('IDMH',$this->IDMH);
		$criteria->compare('IDEquip',$this->IDEquip);
		$criteria->compare('CountMaterials',$this->CountMaterials);
		$criteria->compare('HoursWork',$this->HoursWork);
		$criteria->compare('HoursEquip',$this->HoursEquip);

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
	 * @return Warematerials the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
