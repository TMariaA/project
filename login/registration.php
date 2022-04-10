<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Пользователь");
?>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.register",
                    "registration",
                    array(
                        "COMPONENT_TEMPLATE" => "registration",
                        "SHOW_FIELDS" => array(
                            0 => "NAME",
                            1 => "LAST_NAME",
                        ),
                        "REQUIRED_FIELDS" => array(),
                        "AUTH" => "Y",
                        "USE_BACKURL" => "Y",
                        "SUCCESS_PAGE" => "",
                        "SET_TITLE" => "Y",
                        "USER_PROPERTY" => array(
                            0 => "UF_REG_GROUP_USER",
                        ),
                        "USER_PROPERTY_NAME" => ""
                    ),
                    false
                ); ?></div>
        </div>
    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>