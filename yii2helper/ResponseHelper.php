<?php

namespace cooldaniel\D\yii2;

use cooldaniel\D\common\TimeHelper;

class ResponseHelper
{
    public static function response_success($data=null, $message='操作成功', $code=200) {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        return [
            'code' => $code,
            'message' => $message,
            'data' => $data,
            'datetime' => TimeHelper::format_datetime(),
        ];
    }

    public static function response_failed($data=null, $message='操作失败', $code=500) {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        return [
            'code' => $code,
            'message' => $message,
            'data' => $data,
            'datetime' => TimeHelper::format_datetime(),
        ];
    }
}