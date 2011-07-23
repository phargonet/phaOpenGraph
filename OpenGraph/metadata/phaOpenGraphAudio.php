<?php
/**
 * Audio metadata
 *
 */
class phaOpenGraphAudio extends phaOpenGraphAbsMetadata {

    /**
     * Audio metadata properties name
     *
     * @var array
     */
    protected $_meta = array(
        'audio' => parent::IS_REQUIRED,
        'title' => parent::IS_OPTIONAL,
        'artist' => parent::IS_OPTIONAL,
        'album' => parent::IS_OPTIONAL,
        'type' => parent::IS_OPTIONAL,
    );
}