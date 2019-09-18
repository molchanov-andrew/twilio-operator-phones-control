<?php

namespace app\controllers;

use app\models\Operators;
use Twilio\Rest\Client;
use app\models\Twilio;
use yii\helpers\ArrayHelper;

class TwilioController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionSendMessage() {
        $model = new Twilio();

        $sid = \Yii::$app->params['twilioSid'];
        $token = \Yii::$app->params['twiliotoken'];
        if ($model->load(\Yii::$app->request->post())) {

            $client = new Client($sid, $token);

            // Use the client to do fun stuff like send text messages!
            $client->messages->create(
                    // the number you'd like to send the message to
                    ['+380503309721'],
                    array(
                        // A Twilio phone number you purchased at twilio.com/console
                        'from' => \Yii::$app->params['twilioNumber'],
                        // the body of the text message you'd like to send
                        'body' => 'Hey Alex! Good luck for looking job! Your Dad is Andrew? is itn?'
                    )
            );
        }
        return $this->render('send-message',
                        ['model' => $model]);
    }

    public function actionSearchLocalNumbers() {
        // поиск доступных стран для покупки номеров
        $country = '';
        $sid = \Yii::$app->params['twilioSid'];
        $token = \Yii::$app->params['twiliotoken'];

        $twilio = new Client($sid, $token);

        $availablePhoneNumbers = $twilio->availablePhoneNumbers
                ->read(array(), 20);

        $countryList = ArrayHelper::map($availablePhoneNumbers, 'countryCode', 'country');


        $model = new Operators();

        if ($model->load(\Yii::$app->request->post())) {

            $country = $model->country;

            $local = $twilio->availablePhoneNumbers($country)
                    ->local
                    ->read();

            return $this->render('available-phones',
                            ['local' => $local,
                                'model' => $model,
                                'countryList' => $countryList]);
        }
        return $this->render('available-phones',
                        ['model' => $model,
                            'country' => $country,
                            'countryList' => $countryList]);
    }

    public function actionBuyNumber($phone, $confirm = false) {
        if ($confirm) {
            $sid = \Yii::$app->params['twilioSid'];
            $token = \Yii::$app->params['twiliotoken'];
            $twilio = new Client($sid, $token);
            $incoming_phone_number = $twilio->incomingPhoneNumbers
                    ->create(array("phoneNumber" => $phone)
            );

            print($incoming_phone_number->sid);
            die;
        }
        return $this->render('buy-number',
                        ['phone' => $phone]);
    }

}
