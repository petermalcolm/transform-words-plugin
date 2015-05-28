<?php
/*
Plugin Name: Transform Words
Plugin URI: http://petermalcolm.me
Description: WordPress Plugin for words that transform using jQuery transitions
Author: Peter Malcolm
Version: 0.1
Author URI: http://petermalcolm.me


Transform Words is free software: you can redistribute it and/or modify
it under the terms of the MIT License (MIT)
Copyright (c) Peter Malcolm
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

defined( 'ABSPATH' ) or die( 'Do not access this file directly.' );

/**
 * A small helper class to build HTML with a unique ID
 * in a <span> around the transform_words
 * @since 0.1
 */
class PMTW_transform_words_html
{
    private $span_id;

    public function __construct($id)
    {
        $this->span_id = $id;
    }
    public function before_span()
    {
        return "<span id=\"pmtw-" . $span_id . "\">";
    }
}

/**
 * A Factory to build the <spans>
 * @since 0.1
 */
class PMTW_transform_words_html_Factory
{

    private static $id = 0;

    /**
     * @return PMTW_transform_words_html
     */
    public static function create()
    {
        return new PMTW_transform_words_html($id++);
    }
}


function pmtw_transform_words_replace( $atts ) {
	$a = shortcode_atts( array(
		'words' => array(),
		'delay' => 5000,
    ), $atts );

    $open_html = PMTW_transform_words_html_Factory::create();

	return $open_html->before_span() . $a['words'] . "</span>";  // TODO: Parse words
}

add_shortcode( 'transform_words_replace', 'pmtw_transform_words_replace' );

?>