<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет покупателя");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(
		),
		"SEND_INFO" => "N",
		"CHECK_RIGHTS" => "N",
		"USER_PROPERTY_NAME" => ""
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.form", 
	".default", 
	array(
		"CACHE_TIME" => "2592000",
		"CACHE_TYPE" => "A",
		"PAGE" => "#SITE_DIR#/lichnyy-kabinet-pokupatelya/",
		"SHOW_HIDDEN" => "N",
		"USE_PERSONALIZATION" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>