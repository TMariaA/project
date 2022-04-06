<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Обратная связь");
$APPLICATION->SetTitle("Обратная связь");
$APPLICATION->SetPageProperty('hide_menu', 'Y');
?>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">
                <? $APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"feedback", 
	array(
		"COMPONENT_TEMPLATE" => "feedback",
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y"
	),
	false
); ?>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 mb-3 bg-white"><? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "AREA_FILE_SHOW" => "page",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => ""
                            ),
                            false
                        ); ?></div>

                </div>
            </div>
        </div>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>