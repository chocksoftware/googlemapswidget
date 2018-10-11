<?php
namespace GoogleMapsWidget\Widgets;
use Ceres\Widgets\Helper\BaseWidget;
class MapsWidget extends BaseWidget
{
    protected $template = "GoogleMapsWidget::Widgets.MapsWidget";
    protected function getTemplateData($widgetSettings, $isPreview)
    {
        $empedetMapUrl = $widgetSettings["empedetMapUrl"]["mobile"];

        if (empty($empedetMapUrl))
        {
            return [
                "iframeurl" => false
            ];
        }

        return [
            "iframeurl" => $empedetMapUrl
          ]
        ];
    }


}
