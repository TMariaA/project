<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

\Bitrix\Main\UI\Extension::load("ui.bootstrap4");
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>



    <? if (!empty($arResult["ERROR_MESSAGE"])) {
        foreach ($arResult["ERROR_MESSAGE"] as $v)
            ShowError($v);
    }
    if ($arResult["OK_MESSAGE"] <> '') {
        ?>
        <div class="alert alert-success"><?= $arResult["OK_MESSAGE"] ?></div><?
    }
    ?>
    <form action="<?= POST_FORM_ACTION_URI ?>" method="POST" class="p-5 bg-white border">
        <?= bitrix_sessid_post() ?>
        <div class=" row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="mainFeedback_name"><?= GetMessage("MFT_NAME"); ?><?
                    if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span
                            class="mf-control-required">*</span><? endif; ?></label>
                <input
                        placeholder="ФИО"
                        type="text"
                        id="mainFeedback_name"
                        name="user_name"
                        class="form-control"
                        value="<?= $arResult["AUTHOR_NAME"] ?>"
                        <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?>required<? endif ?>
                />
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-12">
                <label for="mainFeedback_email" class="font-weight-bold"><?= GetMessage("MFT_EMAIL") ?><?
                    if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span
                            class="mf-control-required">*</span><? endif ?></label>
                <input
                        placeholder="E-mail"
                        type="text"
                        name="user_email"
                        id="mainFeedback_email"
                        class="form-control"
                        value="<?= $arResult["AUTHOR_EMAIL"] ?>"
                        <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])): ?>required<? endif ?>
                />
            </div>
        </div>


        <div class=" row form-group">
            <div class="col-md-12">
                <label class="font-weight-bold" for="mainFeedback_message"><?= GetMessage("MFT_MESSAGE") ?><?
                    if (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?>
                        <span class="mf-control-required">*</span><? endif ?></label>
                <textarea class="form-control" id="mainFeedback_message" name="MESSAGE" cols="30" rows="5"
                          placeholder="Ваше сообщение"><?= $arResult["MESSAGE"] ?></textarea>
            </div>
        </div>

        <? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
            <div class="row form-group">
                <div class="form-group col">
                    <label for="mainFeedback_captcha"><?= GetMessage("MFT_CAPTCHA") ?></label>
                    <div style="clear:both"></div>
                    <input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180" height="38"
                         alt="CAPTCHA">
                </div>

                <div class="col-md-12">
                    <label><?= GetMessage("MFT_CAPTCHA_CODE") ?><span class="mf-control-required">*</span></label><br/>
                    <input type="text" if="mainFeedback_captcha" class="form-control" name="captcha_word" size="30"
                           maxlength="50" value=""/><br/>
                </div>

            </div>
        <? endif; ?>
        <div class="row form-group">
            <div class="col-md-12">
        <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
        <input type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>" class="btn btn-primary py-2 px-4 rounded-0">
            </div>
        </div>
    </form>


