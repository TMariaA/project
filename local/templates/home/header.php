<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <?

    use Bitrix\Main\Page\Asset;

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");

    ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<!--<div class="site-loader"></div>-->

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-6">
                    <p class="mb-0">
                        <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span
                                    class="d-none d-md-inline-block ml-2"><? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    ".default",
                                    array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/include/tel_header.php",
                                        "EDIT_TEMPLATE" => "",
                                        "COMPONENT_TEMPLATE" => ".default"
                                    ),
                                    false
                                ); ?></span></a>
                        <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
                                    class="d-none d-md-inline-block ml-2"><? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    ".default",
                                    array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/include/mail_header.php",
                                        "EDIT_TEMPLATE" => "",
                                        "COMPONENT_TEMPLATE" => ".default"
                                    ),
                                    false
                                ); ?></span></a>
                    </p>
                </div>
                <div class="col-6 col-md-6 text-right">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/include/sociallinks_header.php",
                            "EDIT_TEMPLATE" => "",
                            "COMPONENT_TEMPLATE" => ".default"
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>

    </div>
    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                    <h1 class=""> <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/include/link_header.php",
                                "EDIT_TEMPLATE" => "",
                                "COMPONENT_TEMPLATE" => ".default"
                            ),
                            false
                        ); ?></h1>
                </div>
                <div class="col-4 col-md-4 col-lg-8">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                                                      class="site-menu-toggle js-menu-toggle text-black"><span
                                        class="icon-menu h3"></span></a></div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "1209600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
); ?>
                            <li class="active">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="has-children">
                                <a href="properties.html">Properties</a>
                                <ul class="dropdown">
                                    <li><a href="#">Buy</a></li>
                                    <li><a href="#">Rent</a></li>
                                    <li><a href="#">Lease</a></li>
                                    <li class="has-children">
                                        <a href="#">Menu</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Menu One</a></li>
                                            <li><a href="#">Menu Two</a></li>
                                            <li><a href="#">Menu Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </div>
</div>