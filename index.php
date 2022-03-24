<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
//$APPLICATION->SetTitle("Мебельная компания");
?><?
global $arrFilter;
$arrFilter = array("PROPERTY_PRIORITY_VALUE" => "yes");
?><?
//баннер с приоритетными объявлениями
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    ".default",
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
        "COMPONENT_TEMPLATE" => ".default",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(0 => "", 1 => "",),
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
        "PROPERTY_CODE" => array(0 => "", 1 => "",),
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
    )
); ?>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                    <div class="feature d-flex align-items-start">
                        <span class="icon mr-3 flaticon-house"></span>
                        <div class="text">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "AREA_FILE_SHOW" => "file",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/block1_main.php"
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                    <div class="feature d-flex align-items-start">
                        <span class="icon mr-3 flaticon-rent"></span>
                        <div class="text">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "AREA_FILE_SHOW" => "file",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/block2_main.php"
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                    <div class="feature d-flex align-items-start">
                        <span class="icon mr-3 flaticon-location"></span>
                        <div class="text">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "AREA_FILE_SHOW" => "file",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/block3_main.php"
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?
//последние объявления 9 шт
$APPLICATION->IncludeComponent(
    "bitrix:news.line",
    ".default",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "COMPONENT_TEMPLATE" => ".default",
        "DETAIL_URL" => "",
        "FIELD_CODE" => array(0 => "XML_ID", 1 => "",),
        "IBLOCKS" => array(),
        "IBLOCK_TYPE" => "ads",
        "NEWS_COUNT" => "9",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC"
    )
); ?>
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center mb-5">
                    <div class="site-section-title">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="#" class="service text-center border rounded"> <span class="icon flaticon-house"></span>
                        <h2 class="service-heading">Research Subburbs</h2>
                        <p>
                            <span class="read-more">Learn More</span>
                        </p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="#" class="service text-center border rounded"> <span class="icon flaticon-sold"></span>
                        <h2 class="service-heading">Sold Houses</h2>
                        <p>
                            <span class="read-more">Learn More</span>
                        </p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="#" class="service text-center border rounded"> <span class="icon flaticon-camera"></span>
                        <h2 class="service-heading">Security Priority</h2>
                        <p>
                            <span class="read-more">Learn More</span>
                        </p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="#" class="service text-center border rounded"> <span class="icon flaticon-house"></span>
                        <h2 class="service-heading">Research Subburbs</h2>
                        <p>
                            <span class="read-more">Learn More</span>
                        </p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="#" class="service text-center border rounded"> <span class="icon flaticon-sold"></span>
                        <h2 class="service-heading">Sold Houses</h2>
                        <p>
                            <span class="read-more">Learn More</span>
                        </p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="#" class="service text-center border rounded"> <span class="icon flaticon-camera"></span>
                        <h2 class="service-heading">Security Priority</h2>
                        <p>
                            <span class="read-more">Learn More</span>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?
//услуги(сервисы)
$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "1209600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
		),
		"IBLOCK_TYPE" => "Services",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
); ?>&nbsp;
    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <div class="site-section-title">
                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="#"><img alt="Image" src=" /local/templates/home/images/img_4.jpg" class="img-fluid"></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
                        <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem
                            veniam quae sunt.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                    <a href="#"><img alt="Image" src="/local/templates/home/images/img_2.jpg" class="img-fluid"></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
                        <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem
                            veniam quae sunt.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
                    <a href="#"><img alt="Image" src="/local/templates/home/images/img_3.jpg" class="img-fluid"></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
                        <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem
                            veniam quae sunt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?
//последние новости
$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "news",
		"IBLOCKS" => array(
			0 => "1",
		),
		"NEWS_COUNT" => "3",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "604800",
		"CACHE_GROUPS" => "N",
		"ACTIVE_DATE_FORMAT" => "d.m.Y"
	),
	false
); ?>
    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7">
                    <div class="site-section-title text-center">
                        <h2>Our Agents</h2>
                    </div>
                </div>
            </div>
            <div class="row block-13">
                <div class="nonloop-block-13 owl-carousel">
                    <div class="slide-item">
                        <div class="team-member text-center">
                            <img alt="Image" src="/local/templates/home/images/person_1.jpg"
                                 class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                            <div class="text p-3">
                                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                                <p class="mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non
                                    quis facere blanditiis praesentium est.
                                </p>
                                <p>
                                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="team-member text-center">
                            <img alt="Image" src="/local/templates/home/images/person_2.jpg"
                                 class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                            <div class="text p-3">
                                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                                <p class="mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non
                                    quis facere blanditiis praesentium est.
                                </p>
                                <p>
                                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="team-member text-center">
                            <img alt="Image" src="/local/templates/home/images/person_3.jpg"
                                 class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                            <div class="text p-3">
                                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                                <p class="mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non
                                    quis facere blanditiis praesentium est.
                                </p>
                                <p>
                                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="team-member text-center">
                            <img alt="Image" src="/local/templates/home/images/person_1.jpg"
                                 class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                            <div class="text p-3">
                                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                                <p class="mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non
                                    quis facere blanditiis praesentium est.
                                </p>
                                <p>
                                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="team-member text-center">
                            <img alt="Image" src="/local/templates/home/images/person_2.jpg"
                                 class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                            <div class="text p-3">
                                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                                <p class="mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non
                                    quis facere blanditiis praesentium est.
                                </p>
                                <p>
                                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="team-member text-center">
                            <img alt="Image" src="/local/templates/home/images/person_3.jpg"
                                 class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                            <div class="text p-3">
                                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                                <p class="mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non
                                    quis facere blanditiis praesentium est.
                                </p>
                                <p>
                                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="team-member text-center">
                            <img alt="Image" src="/local/templates/home/images/person_1.jpg"
                                 class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                            <div class="text p-3">
                                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                                <p class="mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non
                                    quis facere blanditiis praesentium est.
                                </p>
                                <p>
                                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="team-member text-center">
                            <img alt="Image" src="/local/templates/home/images/person_2.jpg"
                                 class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                            <div class="text p-3">
                                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                                <p class="mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non
                                    quis facere blanditiis praesentium est.
                                </p>
                                <p>
                                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="team-member text-center">
                            <img alt="Image" src="/local/templates/home/images/person_3.jpg"
                                 class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                            <div class="text p-3">
                                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                                <p class="mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non
                                    quis facere blanditiis praesentium est.
                                </p>
                                <p>
                                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a
                                            href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "1209600",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
			0 => "7",
		),
		"IBLOCK_TYPE" => "agents",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
); ?><br>

    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>