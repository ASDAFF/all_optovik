<?php

\Bitrix\Main\Loader::includeModule('lema.lib');

class LemaISection extends \Lema\IBlock\Section
{
    public static function getSectionsByLevelD7($iblock, array $params = array())
    {
        $sections = static::getAllD7($iblock, $params);
        \Lema\Common\Dumper::dump($sections);
    }
}