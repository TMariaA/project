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
<? use \Bitrix\Main\Localization\Loc;

Loc::loadLanguageFile(__FILE__); ?>

<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="site-section-title text-center">
                    <h2><?= Loc::getMessage("AGENTS_MAIN"); ?> </h2>
                </div>
            </div>
        </div>
        <div class="row block-13">

            <div class="nonloop-block-13 owl-carousel">
                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <? if (is_array($arItem["PREVIEW_PICTURE"])): ?>
                        <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <div class="slide-item">
                                <div class="team-member text-center">
                                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="Image"
                                         class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                                    <div class="text p-3">
                                        <h2 class="mb-2 font-weight-light text-black h4"><?= $arItem["NAME"] ?></h2>
                                        <span class="d-block mb-3 text-white-opacity-05"><?= $arItem["PROPERTY_POSITION_VALUE"] ?></span>
                                        <p class="mb-5"><?= $arItem["PREVIEW_TEXT"] ?> </p>
                                        <p>
                                            <a href="<?= $arItem["PROPERTY_LINK_FACEBOOK_VALUE"] ?>"
                                               class="text-black p-2"><span class="icon-facebook"></span></a>
                                            <a href="<?= $arItem["PROPERTY_LINK_TWITTER_VALUE"] ?>"
                                               class="text-black p-2"><span
                                                        class="icon-twitter"></span></a>
                                            <a href="<?= $arItem["PROPERTY_LINK_LINKEDIN_VALUE"] ?>"
                                               class="text-black p-2"><span class="icon-linkedin"></span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endif; ?>
                <? endforeach; ?>
            </div>

        </div>
    </div>
</div>

