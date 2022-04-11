<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

CJSCore::Init();
?>



    <?
    if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
        ShowMessage($arResult['ERROR_MESSAGE']);
    ?>

    <? if ($arResult["FORM_TYPE"] !== "login"): ?>
        <form action="<?= $arResult["AUTH_URL"] ?>" class="p-5 bg-white border">
            <div class="row form-group">
                <div class="col-md-12 el-center">
                    <p class="font-weight-bold"><?= $arResult["USER_NAME"] ?></p>
                    <p class="font-weight-bold"> [<?= $arResult["USER_LOGIN"] ?>]</p>
                    <a class="font-weight-bold" href="<?= $arResult["PROFILE_URL"] ?>"
                       title="<?= GetMessage("AUTH_PROFILE") ?>"><?= GetMessage("AUTH_PROFILE") ?></a>
                </div>

                <div class="col-md-12  el-center">
                    <? foreach ($arResult["GET"] as $key => $value):?>
                        <input type="hidden" class="form-control" name="<?= $key ?>" value="<?= $value ?>"/>
                    <? endforeach ?>
                    <?= bitrix_sessid_post() ?>
                    <input type="hidden" class="form-control" name="logout" value="yes"/>
                    <input type="submit" class="btn btn-primary  py-2 px-4 rounded-0" name="logout_butt"
                           value="<?= GetMessage("AUTH_LOGOUT_BUTTON") ?>"/>
                </div>
            </div>
        </form>
    <? endif ?>
