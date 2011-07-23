<?php
/**
 * Basic metadata
 *
 */
class phaOpenGraphBasic extends phaOpenGraphAbsMetadata {

    /**
     * Basic metadata properties name
     *
     * @var array
     */
    protected $_meta = array(
        'title' => parent::IS_REQUIRED,
        'type'  => parent::IS_REQUIRED,
        'image' => parent::IS_REQUIRED,
        'url'   => parent::IS_REQUIRED,
        'description' => parent::IS_REQUIRED,
        'site_name'   => parent::IS_REQUIRED,
    );
}