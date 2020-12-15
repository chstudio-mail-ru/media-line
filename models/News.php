<?php

namespace app\models;

use yii\base\InvalidConfigException;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $article
 * @property integer $date_add
 *
 */

class News extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'news';
    }

    public function rules(): array
    {
        return [
            [['id', 'date_add'], 'integer'],
            [['title', 'article'], 'string']
        ];
    }

    /**
     * @return array|ActiveRecord[]
     */
    public static function getAll(): array
    {
        return self::find()->all();
    }

    /**
     * @param int $id
     * @return ActiveRecord|null
     */
    public static function findById(int $id): ?ActiveRecord
    {
        return self::find()
            ->where(['id' => $id])
            ->one();
    }

    /**
     * @return ActiveQuery
     * @throws InvalidConfigException
     */
    public function getCategories(): ActiveQuery
    {
        return $this->hasMany(Categories::class, ['id' => 'category_id'])
            ->viaTable(NewsCategories::tableName(), ['news_id' => 'id']);
    }
}