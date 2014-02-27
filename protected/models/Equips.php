<?php

/**
 * This is the model class for table "equips".
 *
 * The followings are the available columns in table 'equips':
 * @property integer $IDEquip
 * @property string $Name
 * @property double $CostHour
 *
 * The followings are the available model relations:
 * @property Warematerials[] $warematerials
 */
class Equips extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'equips';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CostHour', 'numerical'),
			array('Name', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDEquip, Name, CostHour', 'safe', 'on'=>'search'),
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
			'warematerials' => array(self::HAS_MANY, 'Warematerials', 'IDEquip'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDEquip' => 'Idequip',
			'Name' => 'Name',
			'CostHour' => 'Cost Hour',
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

		$criteria->compare('IDEquip',$this->IDEquip);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('CostHour',$this->CostHour);

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
	 * @return Equips the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
