<?php

namespace frontend\modules\user\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\User;
use yii\web\NotFoundHttpException;


/**
 * Default controller for the `user` module
 */

class ProfileController extends Controller
{
    public  function actionView($nickname)
    {
        return $this->render('view', [
            'user' => $this->findUser($nickname),
        ]);
    }

    private function findUser($nickname)
    {
        if ($user = User::find()->where(['nickname' => $nickname])->orWhere(['id' => $nickname])->one())
        {
            return $user;
        }
        throw new NotFoundHttpException();
    }

    // public function actionGenerate()
    // {
    //     $faker = \Faker\Factory::create();

    //     for ($i = 0; $i < 100; $i++) {
    //         $user = new User ([
    //             'username' => $faker->name,
    //             'email' => $faker->email,
    //             'about' => $faker->text(150),
    //             'nickname' => $faker->regexify('[A-Za-z0-9_]{5,15}'),
    //             'auth_key' => Yii::$app->security->generateRandomString(),
    //             'password_hash' => Yii::$app->security->generateRandomString(),
    //             'created_at' => $time = time(),
    //             'updated_at' => $time,
    //         ]);
    //         $user->save(false);
    //     }
    // }
}
