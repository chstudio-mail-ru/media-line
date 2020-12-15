<?php

namespace app\models;

use yii\base\InvalidConfigException;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $title
 * @property integer $date_add
 *
 */

class Categories extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'categories';
    }

    public function rules(): array
    {
        return [
            [['id', 'parent_id', 'date_add'], 'integer'],
            [['title'], 'string']
        ];
    }

    /**
     * @return array|ActiveRecord[]
     */
    public static function getAll(): array
    {
        return self::find()
            ->orderBy(['date_add' => SORT_ASC])
            ->all();
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
    public function getNews(): ActiveQuery
    {
        return $this->hasMany(News::class, ['id' => 'news_id'])
            ->viaTable(NewsCategories::tableName(), ['category_id' => 'id']);
    }

    /**
     * рекурсия
     *
     * @param int $parentId
     * @param array $result
     * @return array|ActiveRecord[]
     */
    public static function getAllChildrenByParentId(int $parentId, array $result = []): array
    {
        $children = self::find()
            ->where(['parent_id' => $parentId])
            ->orderBy(['id' => SORT_ASC])
            ->all();

        foreach ($children as $child) {
            if (!is_null($child->id)) {
                $result[] = $child;
                $result = self::getAllChildrenByParentId($child->id, $result);
            }
        }

        return $result;
    }
}