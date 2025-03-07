<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "equivalence".
 *
 * @property integer $equivalence_id
 * @property integer $school_school_id
 * @property string $equivalence_numerical_grade
 * @property string $equivalence_letter_grade
 * @property string $equivalence_percentile_lower
 * @property string $equivalence_percentile_upper
 * @property string $equivalence_school_rating
 * @property string $equivalence_foundation_rating
 *
 * @property School $schoolSchool
 */
class Equivalence extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equivalence';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_school_id'], 'required'],
            [['school_school_id'], 'integer'],
            [['equivalence_numerical_grade', 'equivalence_percentile_lower', 'equivalence_percentile_upper'], 'number'],
            [['equivalence_foundation_rating'], 'string'],
            [['equivalence_letter_grade'], 'string', 'max' => 10],
            [['equivalence_school_rating'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'equivalence_id' => 'Equivalence ID',
            //'school_school_id' => 'School School ID',
			'school_school_id' => 'School ID',
            'equivalence_numerical_grade' => 'Numerical Grade',
            'equivalence_letter_grade' => 'Letter Grade',
            'equivalence_percentile_lower' => 'Percentile Lower',
            'equivalence_percentile_upper' => 'Percentile Upper',
            'equivalence_school_rating' => 'School Rating',
            'equivalence_foundation_rating' => 'Foundation Rating',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolSchool()
    {
        return $this->hasOne(School::className(), ['school_id' => 'school_school_id']);
    }
}
