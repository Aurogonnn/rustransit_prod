<?
define("B_PROLOG_INCLUDED", true);
define("WIZARD_DEFAULT_SITE_ID", "s2");
define("WIZARD_DEFAULT_TONLY", true);
define("PRE_LANGUAGE_ID","ru");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Русский транзит");
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?><?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"rustransit_slider",
	Array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "rustransit_slider",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(0=>"",1=>"",),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "16",
		"IBLOCK_TYPE" => "photos",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(0=>"",1=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"",1=>"",),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"VARIABLE_ALIASES" => array("SECTION_ID"=>"SECTION_ID","ELEMENT_ID"=>"ELEMENT_ID",)
	)
);?><br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.smart.filter", 
	"rustransit_filter", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"COMPONENT_TEMPLATE" => "rustransit_filter",
		"CONVERT_CURRENCY" => "N",
		"DISPLAY_ELEMENT_COUNT" => "Y",
		"FILTER_NAME" => "arrFilter",
		"FILTER_VIEW_MODE" => "horizontal",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "CRM_PRODUCT_CATALOG",
		"PAGER_PARAMS_NAME" => "arrPager",
		"POPUP_POSITION" => "left",
		"PREFILTER_NAME" => "smartPreFilter",
		"PRICE_CODE" => array(
		),
		"SAVE_IN_SESSION" => "N",
		"SECTION_CODE" => "",
		"SECTION_DESCRIPTION" => "-",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_TITLE" => "-",
		"SEF_MODE" => "N",
		"TEMPLATE_THEME" => "black",
		"XML_EXPORT" => "N"
	),
	false
);?><br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"rustransit_catalog",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"COMPATIBLE_MODE" => "N",
		"COMPONENT_TEMPLATE" => "rustransit_catalog",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "CRM_PRODUCT_CATALOG",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => array(),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "18",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SECTION_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?><br>
<div class="container" style="margin-bottom: 50px; margin-top: 50px;">
	<div class="row">
		<div class="col">
			<h2 style="margin-bottom: 50px; color: #e20003;">Как это работает?</h2>
			<p>
				 Процесс параллельного импорта автомобилей из стран Азии включает несколько ключевых этапов:
			</p>
			<p style="color: black;">
 <strong>Обратитесь к нам!</strong>
			</p>
			<p style="color: black;">
				 - Первоначальная консультация, сбор информации - определяются предпочтения клиента, такие как: модель, год выпуска, комплектация, бюджет и пр.
			</p>
			<p style="color: black;">
 <strong>Поиск автомобиля</strong>
			</p>
			<p style="color: black;">
				 - Исследование рынка стран-импортеров (Япония, Южная Корея, Китай и др.) на наличие запрашиваемого автомобиля.
			</p>
			<p style="color: black;">
				 - Поиск вариантов партнерами Компании Русский Транзит у дилеров, на аукционных площадках или в других источниках, где может быть подходящий автомобиль.
			</p>
			<p style="color: black;">
 <strong>Проверка состояния и истории автомобиля</strong>
			</p>
			<p style="color: black;">
				 - Аудит автомобиля: проверка технического состояния автомобиля, его истории (пробег, аварии и др.) и документы.
			</p>
			<p style="color: black;">
				 - Запрос отчетов: получение отчета о состоянии автомобиля.
			</p>
			<p style="color: black;">
 <strong>Переговоры и покупка</strong>
			</p>
			<p style="color: black;">
				 - Переговоры с продавцом: Обсуждение условий сделки, цена, сроки и другие детали.
			</p>
			<p style="color: black;">
				 - Заключение договора: после согласования всех условий, оформляется договор купли-продажи автомобиля.
			</p>
			<p style="color: black;">
 <strong>Организация доставки</strong>
			</p>
			<p style="color: black;">
				 - Логистика: организация транспортировки автомобиля из страны-отправителя в страну назначения, что может включать морскую, железнодорожную или автоперевозку.
			</p>
			<p style="color: black;">
				 - Таможенные процедуры: подготовка необходимой документации для таможенного оформления, включая экспортные документы из страны-отправителя.
			</p>
			<p style="color: black;">
 <strong>Таможенная очистка</strong>
			</p>
			<p style="color: black;">
				 - Импортная таможенная декларация: Подача документов в таможенные органы для оформления импорта автомобиля.
			</p>
			<p style="color: black;">
				 - Оплата пошлин и налогов: Уплата всех необходимых таможенных пошлин, НДС и других сборов.
			</p>
			<p style="color: black;">
 <strong>Сертификация и регистрация</strong>
			</p>
			<p style="color: black;">
				 - Техническая экспертиза: Получение сертификата соответствия для легализации автомобиля в стране назначения.
			</p>
			<p style="color: black;">
				 - Регистрация автомобиля: Оформление автомобиля в государственных учреждениях, предоставление документов для получения номерных знаков и новых регистрационных документов.
			</p>
			<p style="color: black;">
 <strong>Подготовка к выдаче</strong>
			</p>
			<p style="color: black;">
				 - Предоставление информации клиенту: Информирование клиента о статусе автомобиля и окончательных сроках его получения.
			</p>
			<p style="color: black;">
				 - Финансовые расчеты: Проведение расчетов с клиентом, получение окончательной оплаты.
			</p>
			<p style="color: black;">
 <strong>Выдача автомобиля!</strong>
			</p>
			<p style="color: black;">
				 - Проверка автомобиля: Клиент осматривает автомобиль перед получением, проверяет соответствие ранее согласованным условиям.
			</p>
			<p style="color: black;">
				 - Подписание документов: Оформление передачи права собственности, подписание всех необходимых документов.
			</p>
		</div>
	</div>
</div>
<div class="container" style="margin-bottom: 50px;">
	<div class="row">
		<div class="col">
			<h2 style="margin-bottom: 25px; color: #e20003;">О компании "Русский Транзит"</h2>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<p style="color: black;">
				 Про нас говорят: «Обычный параллельный импорт, <strong>только для людей!</strong>» - мы дорожим подобной оценкой и продолжаем стараться оправдывать доверие людей.
			</p>
			<p style="color: black;">
 <strong>Наши ценности:</strong>
			</p>
			<ul>
				<li>Надежность и добросовестность</li>
				<li>Упорство и стабильность</li>
			</ul>
			<p style="color: black;">
 <strong>Наши приоритеты:</strong>
			</p>
			<ul>
				<li>Высокое качество оказания услуг</li>
				<li>Доступные цены</li>
				<li>Комплексный подход</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<p style="color: black;">
				 Мы всегда готовы помочь найти тот самый автомобиль, который вам подойдет на тот бюджет, которым вы обладаете!
			</p>
			<p style="color: black;">
				 Важнейший плюс нашей компании - это надежные партнеры во всех странах, откуда мы поставляем автомобили, налаженная легальная схема оплаты и оформление всей необходимой документации <strong>в рамках закона</strong>.
			</p>
			<p style="color: black;">
 <strong>Мы гарантируем:</strong>
			</p>
			<ul>
				<li>Полную прозрачность сделки</li>
				<li>Юридическую чистоту всех автомобилей</li>
				<li>Порядочное отношение к запросам наших клиентов</li>
			</ul>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>