<?php
/**
 * Specifying contact information
 *
 */
class phaOpenGraphContact extends phaOpenGraphAbsMetadata {

    /**
     * Contact metadata properties name
     *
     * @var array
     */
    protected $_meta = array(
        'email' => parent::IS_OPTIONAL,
        'phone_number' => parent::IS_OPTIONAL,
        'fax_number' => parent::IS_OPTIONAL,
    );
}