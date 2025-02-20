<?php

namespace xililo\Popups;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use xililo\Popups\FlashPopupAssets;

class FlashPopupWidget extends Widget
{
    public function run()
    {
        // Render session flashes
        $flashes = Yii::$app->session->getAllFlashes();
        foreach ($flashes as $key => $message) {
            $this->registerPopup($message, $key);
        }
    }

    private function registerPopup($message, $type)
    {
        $options = json_encode([
            'message' => $message,
            'duration' => 5000,
            'type' => ($type == 'error') ? 'danger' : $type,
        ]);

        $js = "$.popup($options);";
        //register Assets
        FlashPopupAssets::register($this->view);
        $this->view->registerJs($js);
    }
}
