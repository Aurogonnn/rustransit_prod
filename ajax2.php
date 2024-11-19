<?php
define("NO_KEEP_STATISTIC", "Y");
define("NO_AGENT_STATISTIC","Y");
define("NOT_CHECK_PERMISSIONS", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use \Bitrix\Main\Application;
use \Bitrix\Main\Context;
use \Bitrix\Main\Loader;

CModule::IncludeModule("crm");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = htmlspecialchars($_POST['productId']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['telnumber']);
    $summ = htmlspecialchars($_POST['summ']);

    $responsible = 1;
    $date = date('d.m.Y H:i'); // Исправлено на H:i для корректного отображения времени

    $oLead = new CCrmLead(false);
    $arFields = array(
        "TITLE" => 'Заявка от ' . $date,
        "STATUS_ID" => 'NEW',
        "UF_CRM_1731429434" => $name, //ФИО
        "UF_CRM_1731429444" => $phone, //Номер телефона
        "UF_CRM_1731429453" => $email, //E-mail
        "UF_CRM_1731429470" => $productId, //ID автомобиля
        "OPPORTUNITY" => $summ,
    );

    // Добавление лида
    $LEAD_ID = $oLead->Add($arFields, true, array(
        'CURRENT_USER' => $responsible
    ));

    // Подготовка ответа
    $response = [];

    if ($LEAD_ID) {
        $response['success'] = true;
        $response['message'] = "Заявка успешно создана с ID: " . $LEAD_ID;

    } else {
        $response['success'] = false;
        $response['error'] = "Ошибка при добавлении заявки: " . $oLead->LAST_ERROR;
    }

    // Возврат JSON-ответа
    header('Content-Type: application/json');
    echo json_encode($response);

} else {
    // Некорректный запрос
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Некорректный запрос.']);
}
?>
