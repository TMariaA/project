<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var CBitrixComponentTemplate $this
 * @var CBitrixMenuComponent $component
 * @var array $arParams
 * @var array $arResult
 */
use \Bitrix\Main\Localization\Loc;

Loc::loadLanguageFile(__FILE__);
if (!empty($arResult)) {
    ?>
    <div class="col-md-12">
        <h3 class="footer-heading mb-4"><?= Loc::getMessage("NAVIGATION_FOOTER"); ?></h3>
    </div>
    <div class="col-md-6 col-lg-6">
        <ul class="list-unstyled">
            <?php
            foreach ($arResult as $item) {
                if ($arParams['MAX_LEVEL'] === 1 && $item['DEPTH_LEVEL'] > 1) {
                    continue;
                }

                ?>
                <li <?= ($item['SELECTED'] ? ' selected' : '') ?>>
                    <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
    <?php
}