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

function pmtw_install() {
}

function pmtw_transform_words_replace( $atts ) {
	$a = shortcode_atts( array(
		'foo' => 'something',
		'bar' => 'something else',
	), $atts );

	return "TRANSFORMED";
}
add_shortcode( 'transform_words_replace', 'pmtw_transform_words_replace' );

?>