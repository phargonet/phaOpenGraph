<?php
/**
 * Specifying video metadata properties
 * If you want to attach a video to your Open Graph page you can simply specify video data
 *
 */
class phaOpenGraphVideo extends phaOpenGraphAbsMetadata {

    /**
     * Video metadata properties name
     * If you don't specify a og:video:type, parsers will try to infer the type.
     * A sensible default would be to assume "application/x-shockwave-flash" until
     * HTML5 video becomes more prevalent.
     *
     * @var array
     */
    protected $_meta = array(
        'video'  => parent::IS_REQUIRED,
        'height' => parent::IS_OPTIONAL,
        'width'  => parent::IS_OPTIONAL,
        'type'   => parent::IS_OPTIONAL,
    );
}