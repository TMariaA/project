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
<? use \Bitrix\Main\Localization\Loc; ?>
<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
<div class="site-blocks-cover overlay" style="background-image: url(<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>);"
     data-aos="fade" data-stellar-background-ratio="0.5">
    <? endif ?>
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?= Loc::getMessage("DETAIL_NEWS_TITLE"); ?></span>
                <h1 class="mb-2"><?= $arResult["NAME"] ?></h1>
                <p class="mb-5"><strong
                            class="h2 text-success font-weight-bold">$<?= $arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"] ?></strong>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="margin-top: -150px;">
                <div class="mb-5">
                    <div class="slide-one-item home-slider owl-carousel">

                        <? if (count($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]) == 1): ?>
                            <div><img src="<?= $arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"] ?>"
                                      class="img-fluid"></div>
                        <? else: ?>
                            <? foreach ($arResult["DISPLAY_PROPERTIES"]['IMAGE_GALLERY']['FILE_VALUE'] as $pid => $arProperty): ?>
                                <div><img src=" <?= $arProperty['SRC']; ?>" class="img-fluid"></div>
                            <? endforeach ?>
                        <? endif ?>

                    </div>
                </div>
                <div class="bg-white">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <strong class="text-success h1 mb-3">$<?= $arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"] ?></strong>
                        </div>
                        <div class="col-md-6">
                            <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                <li>
                                    <span class="property-specs"><?= Loc::getMessage("DETAIL_NEWS_DATA"); ?></span>
                                    <span class="property-specs-number"><? print (new \Bitrix\Main\Type\DateTime($arResult['TIMESTAMP_X']))->format('d.m.Y'); ?></span>

                                </li>
                                <li>
                                    <span class="property-specs"><?= Loc::getMessage("DETAIL_NEWS_FLOORS"); ?></span>
                                    <span class="property-specs-number"><?= $arResult["DISPLAY_PROPERTIES"]["FLOORS"]["VALUE"] ?></span>

                                </li>
                                <li>
                                    <span class="property-specs"><?= Loc::getMessage("DETAIL_NEWS_AREA"); ?></span>
                                    <span class="property-specs-number"><?= $arResult["DISPLAY_PROPERTIES"]["AREA"]["VALUE"] ?>m <sup>2</sup></span>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-6 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text"><?= Loc::getMessage("DETAIL_NEWS_BATHROOMS"); ?></span>
                            <strong class="d-block"><?= $arResult["DISPLAY_PROPERTIES"]["BATHROOMS"]["VALUE"] ?></strong>
                        </div>
                        <div class="col-md-6 col-lg-6 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text"><?= Loc::getMessage("DETAIL_NEWS_GARAGE"); ?></span>
                            <strong class="d-block"><?= $arResult["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"] ?></strong>
                        </div>
                    </div>
                    <h2 class="h4 text-black"><?= Loc::getMessage("DETAIL_NEWS_MOREINFO"); ?></h2>
                    <p><?= $arResult["DETAIL_TEXT"]; ?></p>

                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="h4 text-black mb-3"><?= Loc::getMessage("DETAIL_NEWS_PHOTOGALLERY"); ?></h2>
                        </div>
                        <? if (count($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]) == 1): ?>

                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <a href="<?= $arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"] ?>"
                                   class="image-popup gal-item"><img
                                            src="<?= $arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"] ?>"
                                            alt="<?= $arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["ORIGINAL_NAME"]; ?>"
                                            class="img-fluid"></a>
                            </div>

                        <? else: ?>
                            <? foreach ($arResult["DISPLAY_PROPERTIES"]['IMAGE_GALLERY']['FILE_VALUE'] as $pid => $arProperty): ?>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <a href=" <?= $arProperty['SRC']; ?>" class="image-popup gal-item"><img
                                                src="<?= $arProperty['SRC']; ?>"
                                                alt="<?= $arProperty['ORIGINAL_NAME']; ?>"
                                                class="img-fluid"></a>
                                </div>
                            <? endforeach ?>
                        <? endif; ?>

                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-6 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text"><?= Loc::getMessage("DETAIL_NEWS_LINKS"); ?></span>

                            <? foreach ($arResult["DISPLAY_PROPERTIES"]['LINKS']["VALUE"] as $val): ?>

                                <a href=" <?= $val ?>"><strong class="d-block"> <?= $val; ?></strong></a>

                            <? endforeach ?>
                        </div>
                        <div class="col-md-6 col-lg-6 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text"><?= Loc::getMessage("DETAIL_NEWS_ADDITIONAL_MATERIALS"); ?></span>

                            <? if (count($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["FILE_VALUE"]["SRC"]) == 1): ?>
                                <a href="<?= $arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["FILE_VALUE"]["SRC"] ?>"" download="">
                                <strong
                                        class="d-block"><?= $arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["FILE_VALUE"]["ORIGINAL_NAME"]; ?></strong></a>
                            <? else: ?>
                                <? foreach ($arResult["DISPLAY_PROPERTIES"]['ADDITIONAL_MATERIALS']['FILE_VALUE'] as $pid => $arProperty): ?>

                                    <a href=" <?= $arProperty['SRC']; ?>" download=""><strong
                                                class="d-block"><?= $arProperty['ORIGINAL_NAME']; ?></strong></a>

                                <? endforeach ?>
                            <? endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <? if (CSite::InDir('/lichnyy-kabinet-prodavtsa/moi-obyavleniya/') !=1): ?>
            <div class="col-lg-4 pl-md-5">

                <div class="bg-white widget border rounded">

                    <h3 class="h4 text-black widget-title mb-3"><?= Loc::getMessage("DETAIL_NEWS_AGENT"); ?></h3>
                    <form action="" class="form-contact-agent">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                        </div>
                    </form>
                </div>

                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe
                        eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis
                        ducimus quis. Illo, quisquam, veritatis.</p>
                </div>

            </div>
            <? endif; ?>

        </div>
    </div>
</div>

