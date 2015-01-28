<?php

namespace app\controllers;
	use Yii;

	use yii\web\Controller;
	use app\models\ConsoleForm;

	class ConsoleController extends Controller
	{
		public function actionIndex()
		{
			$model = new ConsoleForm();
			if ($model->load(Yii::$app->request->post())) {
				if ($model->validate()) {
					// form inputs are valid, do something here

					$model->ip_list=$model->ip=$model->clearIpList($model->ip);

					$model->ip=$model->getStringFromArray($model->ip);


					$model->except_ip=$model->clearIpList($model->except_ip);
					$model->except_ip=$model->getStringFromArray($model->except_ip);

				}
			}
			//die(var_dump($model->ip_list));

			return $this->render('console', [
				'model' => $model
			]);
		}


	}
