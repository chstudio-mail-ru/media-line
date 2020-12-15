<?php

namespace app\controllers;

use app\models\News;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;
use yii\web\NotFoundHttpException;

class NewsController extends Controller
{
    /**
     * {@inheritdoc}
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

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

    /**
     * @throws NotFoundHttpException
     */
    public function actionIndex(): string
    {
        throw new NotFoundHttpException;
    }

    /**
     * @param int $newsId
     * @return object
     * @throws NotFoundHttpException
     */
    public function actionId(int $newsId): object
    {
        $newsDataById = News::findById($newsId);
        if (is_object($newsDataById)) {
            $categories = $newsDataById->categories;

            return $this->asJson([$newsDataById, $categories]);
        } else {
            throw new NotFoundHttpException;
        }
    }
}
