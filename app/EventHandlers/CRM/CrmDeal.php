<?php

namespace EventHandlers\CRM;
use \Bitrix\Crm\DealTable;

function writeToLog($data, $title = '') {
    $log = "\n------------------------\n";
    $log .= date("Y.m.d G:i:s") . "\n";
    $log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
    $log .= print_r($data, 1);
    $log .= "\n------------------------\n";
    file_put_contents(getcwd() . '/hook.log', $log, FILE_APPEND);
    return true;}

abstract class CrmDeal {
    public static function onAfterUpdate(array $deal)
    {
        DealTable::update($deal['ID'], ['TITLE' => 'Обновлено']);
        writeToLog($deal, 'incoming');
    }
}