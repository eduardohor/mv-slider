<?php

/**
 * Plugin Name: MV Slider
 * Plugin URI: https://www.wordpress.org/mv-slider
 * Description: My plugin's description
 * Version: 1.0
 * Require at least: 5.6
 * Author: Eduardo Henrique
 * Author URI: 
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.pt-br.html
 * Text Domain: mv-slider
 * Domain Path: /languages
 */


/*
MV Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

MV Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with MV Slider. If not, see https://www.gnu.org/licenses/old-licenses/gpl-2.0.pt-br.html.
*/

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('MV_Slider')) {
    class MV_Slider{
        function __construct()
        {
            
        }


    }
}

if (class_exists('MV_Slider')) {
    $mv_slider = new MV_Slider();
}