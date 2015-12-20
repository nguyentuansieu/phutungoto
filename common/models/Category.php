<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use creocoder\nestedsets\NestedSetsBehavior;

/**
* This is the model class for table "category".
*
* @property integer $id
* @property string $module
* @property string $title
* @property string $slug
* @property string $image
* @property string $content
* @property string $meta_title
* @property string $meta_keywords
* @property string $meta_description
* @property integer $status
* @property integer $created_by
* @property integer $updated_by
* @property integer $created_at
* @property integer $updated_at
*/
class Category extends \yii\db\ActiveRecord
{
    /**
    * @inheritdoc
    */
    public static function tableName()
    {
        return 'category';
    }

    /**
    * @inheritdoc
    */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['status', 'created_by', 'updated_by', 'created_at', 'updated_at', 'parent_id'], 'integer'],
            [['title', 'slug', 'image', 'meta_keywords'], 'string', 'max' => 255],
            [['meta_title'], 'string', 'max' => 70],
            [['meta_description'], 'string', 'max' => 160],
            [['title'], 'unique']
        ];
    }
    /**
    * @inheritdoc
    */
    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'slug',
                'slugAttribute' => 'slug',
                'ensureUnique' => true,
            ],
            [
                'class' => TimestampBehavior::className(),
            ],
            [
                'class' => BlameableBehavior::className(),
            ],
            'tree' => [
                'class' => NestedSetsBehavior::className(),
                'treeAttribute' => 'tree',
                'leftAttribute' => 'lft',
                'rightAttribute' => 'rgt',
                'depthAttribute' => 'depth',
            ],
        ];
    }
    /**
    * @inheritdoc
    */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'module' => Yii::t('backend', 'Module'),
            'parent_id' => Yii::t('backend', 'Parent Id'),
            'title' => Yii::t('backend', 'Title'),
            'slug' => Yii::t('backend', 'Slug'),
            'image' => Yii::t('backend', 'Image'),
            'content' => Yii::t('backend', 'Content'),
            'meta_title' => Yii::t('backend', 'Meta Title'),
            'meta_keywords' => Yii::t('backend', 'Meta Keywords'),
            'meta_description' => Yii::t('backend', 'Meta Description'),
			'is_front' => Yii::t('backend', 'Sản phẩm nổi bật'),
			'is_featured' => Yii::t('backend', 'Sản phẩm hot'),
            'status' => Yii::t('backend', 'Status'),
            'created_by' => Yii::t('backend', 'Created By'),
            'updated_by' => Yii::t('backend', 'Updated By'),
            'created_at' => Yii::t('backend', 'Created At'),
            'updated_at' => Yii::t('backend', 'Updated At'),
        ];
    }
    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_ALL,
        ];
    }
    /**
    * @inheritdoc
    * @return CategoryQuery the active query used by this AR class.
    */
    public static function find()
    {
        return new CategoryQuery(get_called_class());
    }
}
