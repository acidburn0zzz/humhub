<?php


namespace humhub\modules\web\pwa\controllers;

use humhub\components\Controller;
use humhub\modules\ui\Module;

/**
 * Class OfflineController is responsible to generate an offline page for PWAs.
 *
 * @since 1.4
 * @property Module $module
 * @package humhub\modules\ui\controllers
 */
class OfflineController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('@humhub/modules/web/pwa/views/offline/index');
    }
}