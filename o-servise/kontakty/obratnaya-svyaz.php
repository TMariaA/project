<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
$APPLICATION->SetPageProperty('hide_menu', 'Y');
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"bootstrap_v4", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
		),
		"USE_CAPTCHA" => "Y",
		"COMPONENT_TEMPLATE" => "bootstrap_v4"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>