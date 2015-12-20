<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use creocoder\nestedsets\NestedSetsBehavior;
/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $title
 * @property string $slug
 * @property string $sku
 * @property integer $price
 * @property string $image
 * @property string $summary
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
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'price', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at', 'is_front', 'is_featured', 'is_hot'], 'integer'],
            [['title'], 'required'],
            [['summary', 'content', 'hotline', 'in_stock'], 'string'],
            [['title', 'slug', 'sku', 'image', 'meta_keywords'], 'string', 'max' => 255],
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
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'category_id' => Yii::t('backend', 'Category ID'),
            'title' => Yii::t('backend', 'Title'),
            'slug' => Yii::t('backend', 'Slug'),
            'sku' => Yii::t('backend', 'Sku'),
            'price' => Yii::t('backend', 'Price'),
            'image' => Yii::t('backend', 'Image'),
            'summary' => Yii::t('backend', 'Summary'),
            'content' => Yii::t('backend', 'Content'),
            'meta_title' => Yii::t('backend', 'Meta Title'),
            'meta_keywords' => Yii::t('backend', 'Meta Keywords'),
            'meta_description' => Yii::t('backend', 'Meta Description'),
			'hotline' => Yii::t('backend', 'Hotline'),
			'is_hot' => Yii::t('backend', 'Sản phẩm chạy'),
			'in_stock' => Yii::t('backend', 'Trong kho'),
			'is_front' => Yii::t('backend', 'Đưa ra trang chủ'),
			'is_featured' => Yii::t('backend', 'Sản phẩm nổi bật'),
            'status' => Yii::t('backend', 'Status'),
            'created_by' => Yii::t('backend', 'Created By'),
            'updated_by' => Yii::t('backend', 'Updated By'),
            'created_at' => Yii::t('backend', 'Created At'),
            'updated_at' => Yii::t('backend', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     * @return ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductQuery(get_called_class());
    }
}
