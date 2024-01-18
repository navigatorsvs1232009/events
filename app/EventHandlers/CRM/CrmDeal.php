<?php

namespace EventHandlers\CRM;
use \Bitrix\Crm\DealTable;
use Bitrix\Main\Diag\Debug;
abstract class CrmDeal {
    public static function onAfterUpdate(array $deal)
    {
        DealTable::update($deal['ID'], ['TITLE' => 'Обновлено']);
        Debug::writeToFile($deal);
    }
}
