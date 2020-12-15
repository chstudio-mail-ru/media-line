<?php

namespace app\controllers;

use app\models\Categories;
use Yii;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;
use yii\web\NotFoundHttpException;

class CategoriesController extends Controller
{
    /**
     * {@inheritdoc}
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex(): object
    {
        $allCategories = Categories::getAll();
        $allCategoryWithNews = [];

        foreach ($allCategories as $category) {
            $allCategoryWithNews = array_merge($allCategoryWithNews, [$category, $category->news]);
        }

        return $this->asJson($allCategoryWithNews);
    }

    /**
    * @throws NotFoundHttpException
    */
    public function actionId(int $categoryId): object
    {
        $categoryDataById = Categories::findById($categoryId);
        if (is_object($categoryDataById)) {
            $newsOfRootCategory = $categoryDataById->news;
            $allCategoriesWithNews = [$categoryDataById, $newsOfRootCategory];
            $childrenCategories = Categories::getAllChildrenByParentId($categoryId);
            foreach ($childrenCategories as $category) {
                $allCategoriesWithNews = array_merge($allCategoriesWithNews, [$category, $category->news]);
            }

            return $this->asJson($allCategoriesWithNews);
        } else {
            throw new NotFoundHttpException;
        }
    }
}
