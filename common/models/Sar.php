<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sar".
 *
 * @property integer $sarid
 * @property string $name
 * @property string $enquiryjp
 * @property string $sort
 * @property string $level
 *
 * @property Agency[] $agencies
 * @property Group[] $groups
 * @property Judgement[] $judgements
 * @property Lawfirms[] $lawfirms
 * @property Lawyer[] $lawyers
 * @property Orders[] $orders
 * @property Supe[] $supes
 * @property Url[] $urls
 */
class Sar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 40],
            [['enquiryjp', 'level'], 'string', 'max' => 10],
            [['sort'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sarid' => 'Sarid',
            'name' => 'Name',
            'enquiryjp' => 'Enquiryjp',
            'sort' => 'Sort',
            'level' => 'Level',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgencies()
    {
        return $this->hasMany(Agency::className(), ['sar_id' => 'sarid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasMany(Group::className(), ['sar_id' => 'sarid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJudgements()
    {
        return $this->hasMany(Judgement::className(), ['sar_id' => 'sarid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLawfirms()
    {
        return $this->hasMany(Lawfirms::className(), ['sar_id' => 'sarid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLawyers()
    {
        return $this->hasMany(Lawyer::className(), ['sar_id' => 'sarid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['sar_id' => 'sarid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupes()
    {
        return $this->hasMany(Supe::className(), ['sar_id' => 'sarid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUrls()
    {
        return $this->hasMany(Url::className(), ['sar_id' => 'sarid']);
    }
}
