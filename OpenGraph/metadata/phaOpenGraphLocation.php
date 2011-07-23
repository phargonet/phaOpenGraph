<?php
/**
 * Specifying location metadata properties
 *
 */
class phaOpenGraphLocation extends phaOpenGraphAbsMetadata {

    /**
     * Location metadata properties name
     *
     * @var array
     */
    protected $_meta = array(
        'latitude' => parent::IS_REQUIRED,
        'longitude' => parent::IS_REQUIRED,
        'street-address' => parent::IS_OPTIONAL,
        'locality' => parent::IS_OPTIONAL,
        'region' => parent::IS_OPTIONAL,
        'postal-code' => parent::IS_OPTIONAL,
        'country-name' => parent::IS_OPTIONAL,
    );
}