<?php
/**
 * Base class for each metadata types
 *
 */
abstract class phaOpenGraphAbsMetadata {

    /**
     * Define required property
     *
     * @var boolean
     */
    const IS_REQUIRED = true;

    /**
     * Define optional property
     *
     * @var boolean
     */
    const IS_OPTIONAL = false;

    /**
     * Metadata properties name
     *
     * @var array
     */
    protected $_meta = array();

    /**
     * Extended list of metadata properties
     *
     * @param mixed $property If $property is string - this string will added to
     * metatata list. If $property is array - each element of array will added to list.
     * @param mixed $isRequired If $property is string and one is boolean - define
     * optional or required this property.
     *
     * @return array Return extended list of metadata properties
     */
    public function extend( $property, $isRequired = null ){
        if (is_string($property)) {
            $this->_meta[ $property ] = !is_null($isRequired) ? $isRequired : self::IS_OPTIONAL;
        }
        elseif (is_array($property)) {
            foreach ( $property as $name) {
                $this->extend($name);
            }
        }
    }
}