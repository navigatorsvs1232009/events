<?php

use Bitrix\Main\EventManager;
use \EventHandlers\CRM\CrmDeal;

$eventManager = EventManager::getInstance();

$eventManager->addEventHandler('crm', 'OnAfterCrmDealUpdate', [CrmDeal::class, 'onAfterUpdate']);