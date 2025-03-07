<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "upload".
 *
 * @property integer $upload_id
 * @property integer $scholar_scholar_id
 * @property integer $scholar_school_school_id
 * @property string $upload_form
 * @property string $upload_file_name
 *
 * @property Scholar $scholarScholar
 * @property Scholar $scholarSchoolSchool
 */
class Upload extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $file;
    public static function tableName()
    {
        return 'upload';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholar_scholar_id', 'scholar_school_school_id'], 'required'],
			[['file'], 'file'],
            [['scholar_scholar_id', 'scholar_school_school_id'], 'integer'],
            [['upload_form', 'upload_file_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
/* 			'file' => 'File',
            'upload_id' => 'Upload ID',
            'scholar_scholar_id' => 'Scholar Scholar ID',
            'scholar_school_school_id' => 'Scholar School School ID',
            'upload_form' => 'Upload Form',
            'upload_file_name' => 'Upload File Name', */
			'file' => 'File',
            'upload_id' => 'Upload ID',
            'scholar_scholar_id' => 'Scholar ID',
            'scholar_school_school_id' => 'School ID',
            'upload_form' => 'Upload Form',
            'upload_file_name' => 'Upload File Name',
			
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
}
