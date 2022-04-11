<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

CJSCore::Init();
?>



<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
    ShowMessage($arResult['ERROR_MESSAGE']);
?>

<? if ($arResult["FORM_TYPE"] !== "login"): ?>
    <form action="<?= $arResult["AUTH_URL"] ?>" class="block-flex">

        <div class="item-block d-md-inline-block d-none "><?= $arResult["USER_NAME"] ?></div>
        <div class="item-block  d-md-inline-block d-none  "> [<?= $arResult["USER_LOGIN"] ?>]</div>
        <div class="item-block  d-md-inline-block d-none "><? //$arResult["PROFILE_URL"]?>
            <a href="<?
            if (CSite::InGroup(array(7)))
                echo "/lichnyy-kabinet-prodavtsa/";
            elseif (CSite::InGroup(array(6))) {
                echo "/lichnyy-kabinet-pokupatelya/";
            } else {
                echo "";
            }
            ?>"
               title="<?= GetMessage("AUTH_PROFILE") ?>"><?= GetMessage("AUTH_PROFILE") ?></a></div>

        <div class="item-block" style="line-height: 20px;">

            <? foreach ($arResult["GET"] as $key => $value): ?>
                <input type="hidden" name="<?= $key ?>" value="<?= $value ?>"/>
            <? endforeach ?>
            <?= bitrix_sessid_post() ?>
            <input type="hidden" name="logout" value="yes"/>
            <input type="submit" name="logout_butt" class="button-header"
                   value="<?= GetMessage("AUTH_LOGOUT_BUTTON") ?>"/>
        </div>
    </form>
<? else: ?>
    <a href="/login" class="mr-3 font-weight-bold">Авторизация</a>
<? endif ?>
