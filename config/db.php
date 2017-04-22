<?php
/**
 * Подключение к БД
 * Created by PhpStorm.
 * Date: 18.04.2017
 * Time: 13:15
 */
$dsn = 'mysql:dbname=shop;host=127.0.0.1';
$user = 'root';
$password = '';

require_once '../library/redbean/rb.php';

if (!R::testConnection()) {
    R::setup($dsn, $user, $password, true);
}
