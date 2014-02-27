<?php

/**
 * This is the model class for table "warecontent".
 *
 * The followings are the available columns in table 'warecontent':
 * @property integer $IDWarecontent
 * @property integer $IDWare
 * @property integer $IDMH
 * @property integer $CountHardware
 *
 * The followings are the available model relations:
 * @property Wares $iDWare
 * @property Materialshardwares $iDMH
 */
class Warecontent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'warecontent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDWare, IDMH', 'required'),
			array('IDWare, IDMH, CountHardware', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDWarecontent, IDWare, IDMH, CountHardware', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDWarecontent' => 'Idwarecontent',
			'IDWare' => 'Idware',
			'IDMH' => 'Idmh',
			'CountHardware' => 'Count Hardware',
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

		$criteria->compare('IDWarecontent',$this->IDWarecontent);
		$criteria->compare('IDWare',$this->IDWare);
		$criteria->compare('IDMH',$this->IDMH);
		$criteria->compare('CountHardware',$this->CountHardware);

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
	 * @return Warecontent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
