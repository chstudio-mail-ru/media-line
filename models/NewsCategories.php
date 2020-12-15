<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "news_categories".
 *
 * @property integer $id
 * @property integer $news_id
 * @property integer $category_id
 *
 */
class NewsCategories extends ActiveRecord
{

    public static function tableName()
    {
        return 'news_categories';
    }

    public function rules()
    {
        return [
            [['news_id', 'category_id'], 'integer'],
        ];
    }

    public static function findByBond($news_id, $category_id)
    {
        return self::find()
            ->where(['news_id' => $news_id])
            ->andWhere(['category_id' => $category_id])
            ->one();
    }
}