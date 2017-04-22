<?php
/**
 * Файл настроек
 * Created by PhpStorm.
 * Date: 17.04.2017
 * Time: 12:43
 */

error_reporting(E_ALL);

/**
 * Константы для обращения к фунциям
 */
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

/**
 * Используемый шаблон
 */
$template = 'default';

/**
 * Пути к файлам шаблонов (*.tpl)
 */
define('TemplatePrefix', '../views/' . $template . '/');
define('TemplatePostfix', '.tpl');

/**
 * Пути к файлам шаблонов в вебпространстве
 */
define('TemplateWebPath','/templates/' .$template. '/');

/**
 * Инициализация шаблонизатора Smarty
 */
require_once ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/template_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);

