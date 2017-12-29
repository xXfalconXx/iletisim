<?php

namespace kouosl\iletisim\controllers\backend;

class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    public function actionIndex()
    {
        return $this->render('_index');
    }
	public $enableCsrfValidation = false;
}
