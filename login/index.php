<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

if (is_string($_REQUEST["backurl"]) && mb_strpos($_REQUEST["backurl"], "/") === 0) {
    LocalRedirect($_REQUEST["backurl"]);
}

$APPLICATION->SetTitle("Вход на сайт");
?>
    <div class="site-section">
        <div class="container">
            <div class="row" style="display: flex;
    justify-content: center;">
                <div class="col-md-12 col-lg-8 mb-5"><p>Вы зарегистрированы и успешно авторизовались.</p></div>
                <div class="col-md-12 col-lg-8 mb-5">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:system.auth.form",
                        "auth",
                        array(
                            "FORGOT_PASSWORD_URL" => "/login/index.php?forgot_password=yes",
                            "PROFILE_URL" => "",
                            "REGISTER_URL" => "/login/registration.php",
                            "SHOW_ERRORS" => "Y",
                            "COMPONENT_TEMPLATE" => "auth"
                        ),
                        false
                    ); ?></div>
                <div class="col-md-12 col-lg-8 mb-5">
                    <p>
                        <a href="<?= SITE_DIR ?>">Вернуться на главную страницу</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>