<?php

\Bitrix\Main\Loader::includeModule('lema.lib');

class LemaISection extends \Lema\IBlock\Section
{
    public static function getSectionsByLevelD7($iblock, array $params = array())
    {
        $return = array();

        //get all sections
        $params['order'] = array('LEFT_MARGIN' => 'asc');
        $params['select'] = array('ID', 'NAME', 'IBLOCK_SECTION_ID');
        $sections = static::getAllD7($iblock, $params);

        if(empty($sections))
            return $return;

        foreach($sections as $sectionId => $section)
        {
            $parentId = $section['IBLOCK_SECTION_ID'];
            if(empty($parentId))
            {
                $section['SECTIONS'] = array();
                $return[$sectionId] = $section;
            }
            else
            {
                if(isset($return[$parentId]))
                {
                    $return[$parentId]['SECTIONS'][$sectionId] = $section;
                }
                else
                {
                    $return[$parentId] = array('SECTIONS' => array($section));
                }
            }
        }

        return $return;
    }
}