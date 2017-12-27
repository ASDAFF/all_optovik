<?php

\Bitrix\Main\Loader::includeModule('lema.lib');

/**
 * Class LemaISection
 */
class LemaISection extends \Lema\IBlock\Section
{
    /**
     * @param $iblock
     * @param array $params
     * @return array
     */
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

/**
 * Class UserData
 */
class UserData
{
    /**
     * @var null
     */
    private static $_instance = null;
    /**
     * @var null
     */
    protected $userData = null;

    /**
     * UserData constructor.
     * @param null $id
     */
    public function __construct($id = null)
    {
        if(empty($id))
            $id = \Lema\Common\User::get()->GetId();
        $this->loadUserData($id);
    }

    public static function instance($id = null)
    {
        if(null === static::$_instance)
            static::$_instance = new static($id);

        return static::$_instance;
    }

    /**
     * @param $id
     * @throws \Bitrix\Main\ArgumentException
     */
    public function loadUserData($id)
    {
        $res = \Bitrix\Main\UserTable::getByPrimary($id, array('select' => array('*', 'UF_*')));
        if($row = $res->fetch())
            $this->userData = $row;
    }

    /**
     * @param $field
     * @return null|string
     */
    public function get($field)
    {
        return isset($this->userData[$field]) ? htmlspecialcharsbx($this->userData[$field]) : null;
    }
}