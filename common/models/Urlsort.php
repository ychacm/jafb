<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "urlsort".
 *
 * @property integer $urlsortID
 * @property string $name
 * @property string $jc
 *
 * @property Url[] $urls
 */
class Urlsort extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'urlsort';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 10],
            [['jc'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'urlsortID' => 'Urlsort ID',
            'name' => 'Name',
            'jc' => 'Jc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUrls()
    {
        return $this->hasMany(Url::className(), ['urlsortID' => 'urlsortID']);
    }
}
