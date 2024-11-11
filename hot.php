<?
define("B_PROLOG_INCLUDED", true);
define("WIZARD_DEFAULT_SITE_ID", "s2");
define("WIZARD_DEFAULT_TONLY", true);
define("PRE_LANGUAGE_ID","ru");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Русский транзит | Горячие предложения");
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>