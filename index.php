<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
//$APPLICATION->SetTitle("Биржа недвижимости");
?>
<?$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");?>
<? use \Bitrix\Main\Localization\Loc;

Loc::loadLanguageFile(__FILE__); ?>
<?
global $arrFilter;
$arrFilter = array("PROPERTY_PREFERRED_DEAL_VALUE" => "yes");
?><?
//баннер с приоритетными объявлениями
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "banner_main",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "1209600",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPONENT_TEMPLATE" => "banner_main",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "arrFilter",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "ads",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "5",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "PRICE",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "NAME",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    ),
    false
); ?>
<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => SITE_TEMPLATE_PATH."/include/block1_main.php"
	)
);?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => SITE_TEMPLATE_PATH."/include/block2_main.php"
	)
);?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => SITE_TEMPLATE_PATH."/include/block3_main.php"
	)
);?>
				</div>
			</div>
		</div>
	</div>
</div>
 <?
//последние объявления 9 шт
$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"last_ads", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "last_ads",
		"DETAIL_URL" => "#SITE_DIR#/obyavleniya/#ELEMENT_CODE#.html",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "NAME",
			3 => "PREVIEW_TEXT",
			4 => "PREVIEW_PICTURE",
			5 => "DETAIL_TEXT",
			6 => "DETAIL_PICTURE",
			7 => "DATE_ACTIVE_FROM",
			8 => "ACTIVE_FROM",
			9 => "SHOW_COUNTER",
			10 => "IBLOCK_ID",
			11 => "CREATED_USER_NAME",
			12 => "PROPERTY_PRICE",
			13 => "PROPERTY_FLOORS",
			14 => "PROPERTY_AREA",
			15 => "PROPERTY_BATHROOMS",
			16 => "PROPERTY_GARAGE_VALUE",
			17 => "",
		),
		"IBLOCKS" => array(
		),
		"IBLOCK_TYPE" => "ads",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
); ?> <?
//услуги(сервисы)
$APPLICATION->IncludeComponent(
    "bitrix:news.line",
    "services_main",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "1209600",
        "CACHE_TYPE" => "A",
        "COMPONENT_TEMPLATE" => "services_main",
        "DETAIL_URL" => "",
        "FIELD_CODE" => array(
            0 => "",
            1 => "NAME",
            2 => "PROPERTY_LINKS_SERVICES",
            3 => "PROPERTY_ICON_SERVICES",
        ),
        "IBLOCKS" => array(),
        "IBLOCK_TYPE" => "Services",
        "NEWS_COUNT" => "6",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC"
    ),
    false
); ?>&nbsp; <?
//последние новости
$APPLICATION->IncludeComponent(
    "bitrix:news.line",
    "news_main",
    array(
        "COMPONENT_TEMPLATE" => "news_main",
        "IBLOCK_TYPE" => "news",
        "IBLOCKS" => array(
            0 => "1",
        ),
        "NEWS_COUNT" => "3",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "PREVIEW_PICTURE",
            3 => "DATE_ACTIVE_FROM",
            4 => "",
        ),
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "DETAIL_URL" => "#SITE_DIR#/o-servise/novosti/#SECTION_CODE#/#ELEMENT_CODE#.html",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "604800",
        "CACHE_GROUPS" => "N",
        "ACTIVE_DATE_FORMAT" => "d.m.Y"
    ),
    false
); ?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"agents_main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "1209600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "agents_main",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"PROPERTY_POSITION",4=>"PROPERTY_LINK_LINKEDIN",5=>"PROPERTY_LINK_FACEBOOK",6=>"PROPERTY_LINK_TWITTER",7=>"",),
		"IBLOCKS" => array(0=>"7",),
		"IBLOCK_TYPE" => "agents",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?><br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>