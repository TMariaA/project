<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?><?

ShowMessage($arParams["~AUTH_RESULT"]);

?>
<div class="col-md-12 col-lg-12 mb-5 block-center">
    <div class="row form-group">
        <form name="bform" method="post" class="p-5 bg-white border" target="_top"
              action="<?= $arResult["AUTH_URL"] ?>">
            <?
            if ($arResult["BACKURL"] <> '') {
                ?>
                <input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>"/>
                <?
            }
            ?>
            <input type="hidden" name="AUTH_FORM" value="Y">
            <input type="hidden" name="TYPE" value="SEND_PWD">
            <div class="col-md-12">
                <label class="font-weight-bold  block-center"><? echo GetMessage("sys_forgot_pass_label") ?></label>
            </div>
            <div class="col-md-12">
                <label class="font-weight-bold"><?= GetMessage("sys_forgot_pass_login1") ?></label>

                <input type="text" name="USER_LOGIN" class="form-control"
                       value="<?= $arResult["USER_LOGIN"] ?>"/>
                <input type="hidden" name="USER_EMAIL"/>

                <div><? echo GetMessage("sys_forgot_pass_note_email") ?></div>
            </div>

            <? if ($arResult["PHONE_REGISTRATION"]): ?>

                <div class="col-md-12">
                    <label class="font-weight-bold"> <?= GetMessage("sys_forgot_pass_phone") ?></label>
                    <input type="text" class="form-control" name="USER_PHONE_NUMBER"
                                                  value="<?= $arResult["USER_PHONE_NUMBER"] ?>"/>
                    <? echo GetMessage("sys_forgot_pass_note_phone") ?>
                </div>
            <? endif; ?>

            <? if ($arResult["USE_CAPTCHA"]): ?>
                <br>
                <div class="col-md-12">

                    <input type="hidden" name="captcha_sid" value="<?= $arResult["CAPTCHA_CODE"] ?>"/>
                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["CAPTCHA_CODE"] ?>"
                         width="180" height="40" alt="CAPTCHA"/>

                    <br>
                    <label class="font-weight-bold"><? echo GetMessage("system_auth_captcha") ?></label>
                    <input type="text" class="form-control" name="captcha_word" maxlength="50"
                           value=""/>
                </div>
            <? endif ?>
            <br>
            <div class="col-md-12">

                <input type="submit" class="btn btn-primary  py-2 px-4 rounded-0" name="send_account_info"
                       value="<?= GetMessage("AUTH_SEND") ?>"/>
                
            </div>
        </form>
    </div>
    <div class="col-md-12 block-center">
        <p><a href="<?= $arResult["AUTH_AUTH_URL"] ?>"><b><?= GetMessage("AUTH_AUTH") ?></b></a></p>
    </div>
</div>
</div>
</div>
<script type="text/javascript">
    document.bform.onsubmit = function () {
        document.bform.USER_EMAIL.value = document.bform.USER_LOGIN.value;
    };
    document.bform.USER_LOGIN.focus();
</script>
