<?php
define("NO_KEEP_STATISTIC", "Y");
define("NO_AGENT_STATISTIC","Y");
define("NOT_CHECK_PERMISSIONS", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use \Bitrix\Main\Application;
use \Bitrix\Main\Context;
use \Bitrix\Main\Loader;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = htmlspecialchars($_POST['productId']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['telnumber']);

    if (!\Bitrix\Main\Loader::includeModule("catalog") || !\Bitrix\Main\Loader::includeModule("sale")) {
        die("Не удалось подключить модули.");
    }
    
    $products = array(
        array(
            'PRODUCT_ID' => $productId,
        )
    );
    
    $basket = Bitrix\Sale\Basket::create(SITE_ID);
    foreach ($products as $product) {
        $item = $basket->createItem("catalog", $product["PRODUCT_ID"]);
        unset($product["PRODUCT_ID"]);
        $item->setFields(array(
            'QUANTITY' => $product['QUANTITY'],
            'PRICE' => $product['PRICE'],
            'CURRENCY' => $product['CURRENCY']
        ));
    }
    
    $order = Bitrix\Sale\Order::create(SITE_ID, 1);
    
    $propertyCollection = $order->getPropertyCollection();
            $propertyCodeToId = array();
            foreach($propertyCollection as $propertyValue) {
                $propertyCodeToId[$propertyValue->getField('CODE')] = $propertyValue->getField('ORDER_PROPS_ID');
            }
            $propertyValue=$propertyCollection->getItemByOrderPropertyId($propertyCodeToId['FIO']);
            $propertyValue->setValue($name);
            $propertyValue=$propertyCollection->getItemByOrderPropertyId($propertyCodeToId['PHONE']);
            $propertyValue->setValue($phone);
            $propertyValue=$propertyCollection->getItemByOrderPropertyId($propertyCodeToId['EMAIL']);
            $propertyValue->setValue($email);
    
    
    $order->setPersonTypeId(1);
    $order->setBasket($basket);
    
    $result = $order->save();
    if (!$result->isSuccess()) {
        foreach ($result->getErrors() as $error) {
            echo $error->getMessage() . "<br>";
        }
    } else {
        echo "Заказ успешно создан!";
    }
} else {
    echo "Некорректный запрос.";
}

$APPLICATION->RestartBuffer();
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");