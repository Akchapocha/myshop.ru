<?php
/**
 * Модель для таблицы пользователей (users)
 * Created by PhpStorm.
 * Date: 23.04.2017
 * Time: 11:37
 */

/**
 * Регистрация нового пользователя
 *
 * @param string $email почта
 * @param string $pwdMD5 пароль зашифрованный в MD5
 * @param string $name имя пользователя
 * @param string $phone телефон
 * @param string $adress адресс пользователя
 */
function registerNewUser($email, $pwdMD5, $name, $phone, $adress)
{
    $users = R::dispense('users');
    $users->email = $email;
    $users->pwd = $pwdMD5;
    $users->name = $name;
    $users->phone = $phone;
    $users->adress = $adress;
    R::store($users);

    $sql = 'SELECT *
            FROM `users`
            WHERE (`email` = "' . $email . '" and `pwd` = "' . $pwdMD5 . '")
            LIMIT 1';
    $rs = R::getAll($sql);
    if (isset($rs[0])){
        $rs['success'] = 1;
//        $rs['message'] = 1;
    } else {
        $rs['success'] = 1;
//        $rs['message'] = 1;
    }

    return $rs;
}

/**
 * Проверка параметров для регистрации пользователя
 *
 * @param string $email
 * @param string $pwd1
 * @param string $pwd2
 * @return array результат
 */
function checkRegisterParams($email, $pwd1, $pwd2)
{
    $res = null;

    if (!$email){
        $res['success'] = false;
        $res['message'] = 'Введите email';
    }
    if (!$pwd1){
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
    }
    if (!$pwd2){
        $res['success'] = false;
        $res['message'] = 'Введите повторный пароль';
    }
    if ($pwd1 != $pwd2){
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }
    return $res;
}

/**
 * Проверка совпадения email
 * @param string $email из формы регистрации
 * @return array строка из базы данных или пустой массив
 */
function checkUserEmail($email)
{
    $sql = 'SELECT *
            FROM `users`';
    foreach (R::getAll($sql) as $item => $row){

        if ($row['email'] == $email){
            return R::getAll($sql);
        }
    }
    return array();
}

/**
 * Авторизация пользователя
 *
 * @param string $email почта (логин)
 * @param string $pwd пароль
 * @return array массив данных пользователя
 */
function loginUser($email, $pwd)
{
    $pwd = md5($pwd);

    $sql = 'SELECT *
            FROM `users`
            WHERE (`email` = "' . $email . '" and `pwd` = "' . $pwd . '")
            LIMIT 1';
    $rs = R::getAll($sql);

    if (isset($rs['0'])){
        $rs['success'] = 1;
    } else {
        $rs['success'] = 0;
    }

    return $rs;
}

/**
 * Изменение данных пользователя
 *
 * @param string $name имя пользователя
 * @param string $phone телефон
 * @param string $adress адрес
 * @param string $pwd1 новый пароль
 * @param string $pwd2 повтор нового пароля
 * @param string $curPwd текущий пароль
 * @return boolean True в случае успеха
 */
function updateUserData($name, $phone, $adress, $pwd1, $pwd2, $curPwd )
{
    $pwd1 = trim($pwd1);
    $pwd2 = trim($pwd2);

    $newPwd = null;
    if ($pwd1 && ($pwd1 == $pwd2)){
        $newPwd = md5($pwd1);
    }
    $sql = 'UPDATE `users`
            SET';
    if ($newPwd){
        $sql .='`pwd` = "' . $newPwd . '" ';
    }
    $sql .= '`name` = "' . $name . '"
             `phone` = "' . $phone . '"
             `adress` = "' . $adress . '"
            WHERE (`email` = "' . $email . '" and `pwd` = "' . $curPwd . '")
            LIMIT 1';
    R::exec($sql);

//    $rs = mysql_query($sql);
//    return $rs;
}

