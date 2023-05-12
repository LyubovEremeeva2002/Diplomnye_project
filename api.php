<?php

class Api {

    public $get;

    public function __construct($GET) {
        $this->get = $GET;
    }

    public function addStatistics() {
        global $pdo;

        $nameTrack = $this->get['nameTrack'];
        $token = $this->get['token'];

        $result = $pdo->exec("INSERT INTO `statistics` (`tokenUser`, `nameTrack`) VALUES ('$token', '$nameTrack')");
        $answer['result'] = $result;
        return json_encode($answer);
    }
}
