<?php
/**
 * Base class for each metadata types
 *
 */
abstract class phaOpenGraphAbsMetadata extends CModel {

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
    protected $_meta = array ();

    /**
     * Model Data
     *
     * @var array
     */
    protected $_data = array ();

    /**
     * Returns the validation rules for attributes.
     *
     * @return array
     */
    public function rules() {
        $required = array();
        $rules = array();
        foreach ( $this->_meta as $key => $value ) {
            if ( $value == self::IS_REQUIRED ) {
                $required[] = $key;
            }
        }
        if ( !empty( $required ) ) {
            $rules = array(
                array(
                    implode(',', $required),
                    'required',
                    'Is Required Field'
                )
            );
        }

        return $rules;
    }

    /**
     * Returns the list of attribute names of the model.
     *
     * @return array list of attribute names.
     */
    public function attributeNames() {
        return array_keys( $this->_meta );
    }

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
    public function extend( $property, $isRequired = null ) {
        if ( is_string( $property ) ) {
            $this->_meta[ $property ] = !is_null( $isRequired ) ? $isRequired : self::IS_OPTIONAL;
        }
        elseif ( is_array( $property ) ) {
            foreach ( $property as $name ) {
                $this->extend( $name );
            }
        }
    }
}