<?php

/**
 * This is the model class for table "materialshardwares".
 *
 * The followings are the available columns in table 'materialshardwares':
 * @property integer $IDMH
 * @property integer $IDType
 * @property string $Name
 * @property double $UnitCost
 *
 * The followings are the available model relations:
 * @property Hardwaretypes $iDType
 * @property Warecontent[] $warecontents
 * @property Warematerials[] $warematerials
 */
class Materialshardwares extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'materialshardwares';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDType', 'required'),
			array('IDType', 'numerical', 'integerOnly'=>true),
			array('UnitCost', 'numerical'),
			array('Name', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDMH, IDType, Name, UnitCost', 'safe', 'on'=>'search'),
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
			'iDType' => array(self::BELONGS_TO, 'Hardwaretypes', 'IDType'),
			'warecontents' => array(self::HAS_MANY, 'Warecontent', 'IDMH'),
			'warematerials' => array(self::HAS_MANY, 'Warematerials', 'IDMH'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDMH' => 'Idmh',
			'IDType' => 'Idtype',
			'Name' => 'Name',
			'UnitCost' => 'Unit Cost',
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

		$criteria->compare('IDMH',$this->IDMH);
		$criteria->compare('IDType',$this->IDType);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('UnitCost',$this->UnitCost);

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
	 * @return Materialshardwares the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
