<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

//delayed function must return a string
if(empty($arResult))
	return '';

$strReturn = '';

$strReturn .= '<div class="breadcrumbs"><div class="container"><ul itemscope="" itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]['TITLE']);

	if(!empty($arResult[$index]['LINK']) && $index != $itemSize-1)
	{
		$strReturn .= '
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="'.$arResult[$index]['LINK'].'" title="'.$title.'" itemprop="item">
					<span itemprop="name">'.$title.'</span>
				</a>
			</li>';
	}
	else
	{
		$strReturn .= '
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<span itemprop="name">'.$title.'</span>
			</li>';
	}
}

$strReturn .= '</ul></div></div>';

return $strReturn;