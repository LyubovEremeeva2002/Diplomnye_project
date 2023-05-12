<?php

$host = "localhost";
$db = "Meditacia";
$user = "root";
$pass = "";
$charset = "utf8";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];


$pdo = new PDO($dsn, $user, $pass, $opt);


function get_Pamyatka() {
    global $pdo;
    $Pamyatka = $pdo->query("SELECT * FROM `Pamyatka`  WHERE `id` = 1");
    return $Pamyatka;
}

function getTotalTracks() {
    global $pdo;
    $result = $pdo->query("SELECT total_tracks FROM `total_tracks`")->fetchColumn();
    return intval($result);
}

function getTotalListening($token) {
    global $pdo;
    $total_listening = (float) $pdo->query("SELECT DISTINCT * FROM `statistics` WHERE `tokenUser` LIKE '$token'")->rowCount();
    return intval($total_listening);
}

function getStatisticsByToken($token, $param = '') {
    global $pdo;

    if ($param == 'percents') {
        $total_listening = (float) getTotalListening($token);
        $total_tracks = (float) getTotalTracks();
        $response = $total_listening / $total_tracks * 100;
    } else {
        //$response = $pdo->query("SELECT * FROM `statistics` WHERE `tokenUser` LIKE '$token'");
        // DISTINCT = удалить дубли
        $response = $pdo->query("SELECT DISTINCT * FROM `statistics` WHERE `tokenUser` LIKE '$token'");
    }

    return $response;
}

function bootTablesStatistics() {
    global $pdo;
    try {
        $createTableStatistics = $pdo->query("CREATE TABLE IF NOT EXISTS `statistics`
        (`id` int AUTO_INCREMENT, `tokenUser` varchar(32), `nameTrack` varchar(256), PRIMARY KEY (`id`))");

        $createTableTotalStatistics = $pdo->query("CREATE TABLE IF NOT EXISTS `total_tracks`
        (`id` int, `total_tracks` int, PRIMARY KEY (`id`))");

        $replaceTotalStat = $pdo->query("INSERT INTO `total_tracks` (`total_tracks`, `id`) VALUES (12, 1)");

    } catch (Exception $e) {
        echo $e->getMessage();
    }

}




?>