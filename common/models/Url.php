<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "url".
 *
 * @property integer $urlID
 * @property string $name
 * @property integer $typeID
 * @property integer $urlsortID
 * @property string $url
 * @property string $image
 * @property string $title
 * @property integer $number
 * @property integer $ord
 * @property integer $id
 * @property string $intro
 * @property integer $sar_id
 * @property integer $isdis
 *
 * @property Sar $sar
 * @property Urlsort $urlsort
 * @property Urltype $type
 */
class Url extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'url';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title'], 'required'],
            [['typeID', 'urlsortID', 'number', 'ord', 'id', 'sar_id', 'isdis'], 'integer'],
            [['intro'], 'string'],
            [['name', 'image'], 'string', 'max' => 40],
            [['url'], 'string', 'max' => 100],
            [['title'], 'string', 'max' => 20],
            [['sar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sar::className(), 'targetAttribute' => ['sar_id' => 'sarid']],
            [['urlsortID'], 'exist', 'skipOnError' => true, 'targetClass' => Urlsort::className(), 'targetAttribute' => ['urlsortID' => 'urlsortID']],
            [['typeID'], 'exist', 'skipOnError' => true, 'targetClass' => Urltype::className(), 'targetAttribute' => ['typeID' => 'urltypeID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'urlID' => 'Url ID',
            'name' => 'Name',
            'typeID' => 'Type ID',
            'urlsortID' => 'Urlsort ID',
            'url' => 'Url',
            'image' => 'Image',
            'title' => 'Title',
            'number' => 'Number',
            'ord' => 'Ord',
            'id' => 'ID',
            'intro' => 'Intro',
            'sar_id' => 'Sar ID',
            'isdis' => 'Isdis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSar()
    {
        return $this->hasOne(Sar::className(), ['sarid' => 'sar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUrlsort()
    {
        return $this->hasOne(Urlsort::className(), ['urlsortID' => 'urlsortID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Urltype::className(), ['urltypeID' => 'typeID']);
    }
}
