<?php

namespace srag\Plugins\SrCrsMemberGalleryRoleColor\Config;

use ilSrCrsMemberGalleryRoleColorPlugin;
use srag\ActiveRecordConfig\SrCrsMemberGalleryRoleColor\Config\AbstractFactory;
use srag\Plugins\SrCrsMemberGalleryRoleColor\Config\Form\FormBuilder;
use srag\Plugins\SrCrsMemberGalleryRoleColor\Utils\SrCrsMemberGalleryRoleColorTrait;

/**
 * Class Factory
 *
 * @package srag\Plugins\SrCrsMemberGalleryRoleColor\Config
 */
final class Factory extends AbstractFactory
{

    use SrCrsMemberGalleryRoleColorTrait;

    const PLUGIN_CLASS_NAME = ilSrCrsMemberGalleryRoleColorPlugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * Factory constructor
     */
    protected function __construct()
    {
        parent::__construct();
    }


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * @param ConfigCtrl $parent
     *
     * @return FormBuilder
     */
    public function newFormBuilderInstance(ConfigCtrl $parent) : FormBuilder
    {
        $form = new FormBuilder($parent);

        return $form;
    }
}
