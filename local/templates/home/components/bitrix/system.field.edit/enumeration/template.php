<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2013 Bitrix
 */

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 */

$bWasSelect = false;

?><input type="hidden" name="<?= $arParams["arUserField"]["FIELD_NAME"] ?>" value=""><?

if ($arParams["arUserField"]["SETTINGS"]["DISPLAY"] == "CHECKBOX") {
    foreach ($arParams["arUserField"]["USER_TYPE"]["FIELDS"] as $key => $val) {
        $bSelected = in_array($key, $arResult["VALUE"]) && (
                (!$bWasSelect) ||
                ($arParams["arUserField"]["MULTIPLE"] == "Y")
            );
        $bWasSelect = $bWasSelect || $bSelected;

        ?>
        <div class="form_radio_btn">
            <input
                    type="radio"
                    value="<? echo $key ?>"
                    id="radio-<? echo $key ?>"
                    name="<? echo $arParams["arUserField"]["FIELD_NAME"] ?>"
                <? echo($bSelected ? "checked" : "") ?>
            >
        <label for="radio-<? echo $key ?>"><?= $val ?></label></div>
        <?
    }
}

