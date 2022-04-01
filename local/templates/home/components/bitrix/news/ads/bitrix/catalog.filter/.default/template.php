<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="pt-5">
    <div class="container">
        <form class="row" name="<? echo $arResult["FILTER_NAME"] . "_form" ?>"
              action="<? echo $arResult["FORM_ACTION"] ?>" method="get" style="display: flex; justify-content: center;">
            <? foreach ($arResult["ITEMS"] as $arItem):
                if (array_key_exists("HIDDEN", $arItem)):
                    echo $arItem["INPUT"];
                endif;
            endforeach;

            ?>

            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <? if (!array_key_exists("HIDDEN", $arItem)): ?>
                    <? foreach ($arResult["arrProp"] as $val) {

                        if (($val["NAME"] == $arItem["NAME"]) and (($val["NAME"] == 'Количество этажей') or ($val["NAME"] == 'Количество санузлов') or ($val["NAME"] == 'Наличие гаража'))) {
                            ?>
                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <div class="select-wrap">
                                    <span class="icon icon-arrow_drop_down"></span><?
                                    echo '<select  class="form-control d-block rounded-0" id="offer-types" onChange="' . $arResult["FILTER_NAME"] . "_form" . '" name="arrFilter_pf[' . $val["CODE"] . ']">';
                                    echo '<option  value="">' . $arItem["NAME"] . ' </option>';
                                    foreach ($arItem['LIST'] as $key => $value) {
                                        if ($key != 0) {
                                            echo ' <option value="' . $key . '">' . $value . '</option>';
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                        <? } elseif (($val["NAME"] == $arItem["NAME"]) and (($val["NAME"] == 'Цена') or ($val["NAME"] == 'Общая площадь'))) { ?>
                            <div class="col-sm-6 col-md-6 col-lg-6 mb-4">
                                <div class="select-wrap">
                                    <p name="offer-types" id="offer-types" class="form-control d-block rounded-0"
                                       style="text-align: center; line-height: 32px;">
                                        <?= $arItem["NAME"] ?>:
                                    </p>
                                    <p name="offer-types" id="offer-types" class="form-control d-block rounded-0"
                                       style="text-align: center;"><?= $arItem["INPUT"] ?> </p>
                                </div>
                            </div>
                            <?
                        }

                    } ?>


                <? endif ?>
            <? endforeach; ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <input type="submit" name="set_filter"
                       class="btn btn-primary btn-block form-control-same-height rounded-0"
                       value="<?= GetMessage("IBLOCK_SET_FILTER") ?>"/><input type="hidden" name="set_filter"
                                                                              value="Y"/>&nbsp;&nbsp;
                <input
                        type="submit" name="del_filter"
                        class="btn btn-primary btn-block form-control-same-height rounded-0"
                        value="<?= GetMessage("IBLOCK_DEL_FILTER") ?>"/>
            </div>
        </form>
    </div>
</div>
