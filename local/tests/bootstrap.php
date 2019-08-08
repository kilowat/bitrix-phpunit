<?php
define("NOT_CHECK_PERMISSIONS", true);
define("NO_AGENT_CHECK", true);
$_SERVER["DOCUMENT_ROOT"] = __DIR__ . '/../../';
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
require_once(__DIR__. "/vendor/autoload.php");

function initBitrixCore()
{
    global $DB;
    $app = \Bitrix\Main\Application::getInstance();
    $con = $app->getConnection();
    $DB->db_Conn = $con->getResource();
    $_SESSION["SESS_AUTH"]["USER_ID"] = 1;
}