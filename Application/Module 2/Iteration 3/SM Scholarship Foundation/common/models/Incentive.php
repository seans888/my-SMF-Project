<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "incentive".
 *
 * @property integer $incentive_id
 * @property integer $scholar_scholar_id
 * @property integer $scholar_school_school_id
 * @property string $scholar_allowance_allowance_area
 * @property string $incentive_amount
 * @property string $incentive_remark
 * @property string $incentive_date
 *
 * @property Scholar $scholarScholar
 * @property Scholar $scholarSchoolSchool
 * @property Scholar $scholarAllowanceAllowanceArea
 */
class Incentive extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $firstName;
	public $middleName;
	public $lastName;
    public static function tableName()
    {
        return 'incentive';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholar_scholar_id', 'scholar_school_school_id', 'scholar_allowance_allowance_area'], 'required'],
            [['scholar_scholar_id', 'scholar_school_school_id'], 'integer'],
            [['scholar_allowance_allowance_area'], 'string'],
            [['incentive_amount'], 'number'],
            [['incentive_date'], 'safe'],
            [['incentive_remark'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
/*             'incentive_id' => 'Incentive ID',
            'scholar_scholar_id' => 'Scholar Scholar ID',
            'scholar_school_school_id' => 'Scholar School School ID',
            'scholar_allowance_allowance_area' => 'Scholar Allowance Allowance Area',
            'incentive_amount' => 'Incentive Amount',
            'incentive_remark' => 'Incentive Remark',
            'incentive_date' => 'Incentive Date', */
			'firstName' => 'First Name',
            'middleName' => 'Middle Name',
			'lastName' => 'Last Name',
			'incentive_id' => 'Incentive ID',
            'scholar_scholar_id' => 'Scholar ID',
            'scholar_school_school_id' => 'School ID',
            'scholar_allowance_allowance_area' => 'Allowance Area',
            'incentive_amount' => 'Incentive Amount',
            'incentive_remark' => 'Incentive Remark',
            'incentive_date' => 'Incentive Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarScholar()
    {
        return $this->hasOne(Scholar::className(), ['scholar_id' => 'scholar_scholar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolSchool()
    {
        return $this->hasOne(School::className(), ['school_id' => 'scholar_school_school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScholarAllowanceAllowanceArea()
    {
        return $this->hasOne(Scholar::className(), ['allowance_allowance_area' => 'scholar_allowance_allowance_area']);
    }
}
