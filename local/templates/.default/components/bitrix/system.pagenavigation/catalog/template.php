<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");

if($arResult["NavPageCount"] > 1)
{
    ?>
    <div class="pagination">
        <ul>
            <?
            if($arResult["bDescPageNumbering"] === true):
                $bFirst = true;
                if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):
                    if($arResult["bSavePage"]):
                        ?>

                        <li><a class="pagination__button"
                               href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]
                                   + 1)?>"><</a>
                        </li>
                    <?
                    else:
                        if($arResult["NavPageCount"] == ($arResult["NavPageNomer"] + 1)):
                            ?>
                            <li><a class="pagination__button" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_prev")
                                    ?></a></li>
                        <?
                        else:
                            ?>
                            <li><a class="pagination__button"
                                   href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"] + 1)?>"><</a>
                            </li>
                        <?
                        endif;
                    endif;
                    ?>

                    <?

                    if($arResult["nStartPage"] < $arResult["NavPageCount"]):
                        $bFirst = false;
                        if($arResult["bSavePage"]):
                            ?>
                            <li><a class="pagination__button"
                                   href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount
                               "]?>">1</a></li>
                        <?
                        else:
                            ?>
                            <li><a class="pagination__button" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a></li>
                        <?
                        endif;
                        ?>

                        <?
                        if($arResult["nStartPage"] < ($arResult["NavPageCount"] - 1)):
                            ?>
                            <li><span class="blog-page-dots">...</span></li>

                        <?
                        endif;
                    endif;
                endif;
                do
                {
                    $NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;

                    if($arResult["nStartPage"] == $arResult["NavPageNomer"]):
                        ?>
                        <li><span class="<?=($bFirst ? "pagination__button " : "")?>active"><?=$NavRecordGroupPrint?></span></li>
                    <?
                    elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):
                        ?>
                        <li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"
                               class="<?=($bFirst ? "pagination__button" : "")?>"><?=$NavRecordGroupPrint?></a></li>
                    <?
                    else:
                        ?>
                        <li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"<?
                            ?> class="<?=($bFirst ? "pagination__button" : "")?>"><?=$NavRecordGroupPrint?></a></li>

                    <?
                    endif;
                    ?>

                    <?

                    $arResult["nStartPage"]--;
                    $bFirst = false;
                } while($arResult["nStartPage"] >= $arResult["nEndPage"]);

                if($arResult["NavPageNomer"] > 1):
                    if($arResult["nEndPage"] > 1):
                        if($arResult["nEndPage"] > 2):
                            ?>
                            <li><span class="blog-page-dots">...</span></li>

                        <?
                        endif;
                        ?>
                        <li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=$arResult["NavPageCount
                        "]?></a></li>

                    <?
                    endif;

                    ?>
                    <li><a class="pagination__button"
                           href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"] - 1)?>">></a>
                    </li>
                <?
                endif;

            else:
            $bFirst = true;

            if($arResult["NavPageNomer"] > 1):
                if($arResult["bSavePage"]):
                    ?>
                    <li><a class="pagination__button"
                           href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"] - 1)?>"><</a>
                    </li>
                <?
                else:
                    if($arResult["NavPageNomer"] > 2):
                        ?>
                        <li><a class="pagination__button"
                               href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"] - 1)?>"><</a>
                        </li>
                    <?
                    else:
                        ?>
                        <li><a class="pagination__button" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><</a></li>
                    <?
                    endif;

                endif;
                ?>

                <?

                if($arResult["nStartPage"] > 1):
                    $bFirst = false;
                    if($arResult["bSavePage"]):
                        ?>
                        <li><a class="pagination__button"
                               href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1">1
                            </a></li>
                    <?
                    else:
                        ?>
                        <li><a class="pagination__button" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a></li>
                    <?
                    endif;
                    ?>

                    <?
                    if($arResult["nStartPage"] > 2):
                        ?>
                        <li><span class="blog-page-dots">...</span></li>

                    <?
                    endif;
                endif;
            endif;

            do
            {
                if($arResult["nStartPage"] == $arResult["NavPageNomer"]):
                    ?>
                    <li><span class="<?=($bFirst ? "pagination__button " : "")?>active"><?=$arResult["nStartPage"]?></span></li>
                <?
                elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
                    ?>
                    <li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"
                           class="<?=($bFirst ? "pagination__button" : "")?>"><?=$arResult["nStartPage"]?></a></li>
                <?
                else:
                    ?>
                    <li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"<?
                        ?> class="<?=($bFirst ? "pagination__button" : "")?>"><?=$arResult["nStartPage"]?></a></li>
                <?
                endif;
                ?>

                <?
                $arResult["nStartPage"]++;
                $bFirst = false;
            } while($arResult["nStartPage"] <= $arResult["nEndPage"]);

            if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):
            if($arResult["nEndPage"] < $arResult["NavPageCount"]):
                if($arResult["nEndPage"] < ($arResult["NavPageCount"] - 1)):
                    ?>
                    <li><span class="blog-page-dots">...</span></li>

                <?
                endif;
                ?>
                <li>
                    <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>">
                        <?=$arResult["NavPageCount"]?>
                    </a>
                </li>

            <?
            endif;
            ?>
            <li><a class="pagination__button"
                   href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"] + 1)?>">></a>
            </li>
            <?
            endif;
            endif;

            /*if($arResult["bShowAll"]):
                if($arResult["NavShowAll"]):
                    */
            ?><!--
                    <li><a class="blog-page-pagen"
                           href="<?/*=$arResult["sUrlPath"]*/
            ?>?<?/*=$strNavQueryString*/
            ?>SHOWALL_<?/*=$arResult["NavNum"]*/
            ?>=0"><?/*=GetMessage("nav_paged")*/
            ?></a>
                    </li>
                <?/*
                else:
                    */
            ?>
                    <li><a class="blog-page-all"
                           href="<?/*=$arResult["sUrlPath"]*/
            ?>?<?/*=$strNavQueryString*/
            ?>SHOWALL_<?/*=$arResult["NavNum"]*/
            ?>=1"><?/*=GetMessage("nav_all")*/
            ?></a>
                    </li>
                --><?/*
                endif;
            endif*/
            ?>
        </ul>
        <a href="<?=SITE_DIR;?>" class="core__btn" title="вернуться на главную страницу"><?=GetMessage('LEMA_BACK_TO_MAIN');?></a>
    </div>
    <?
}
?>