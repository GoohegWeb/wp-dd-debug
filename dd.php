<?php
/*
 * Plugin Name: WP DD Debug
 * Plugin URI: https://github.com/GoohegWeb/wp-dd-debug/archive/master.zip
 * Description: The DD debug function for developers out of Laravel
 * Version: 1.0.0
 * Author: Greg Duché
 * Author URI: http://www.gregduche.com
 * License: GPLv2 or later
 */
require 'vendors/Symfony/Component/VarDumper/Dumper/DataDumperInterface.php';
require 'vendors/Symfony/Component/VarDumper/Cloner/DumperInterface.php';

require 'vendors/Symfony/Component/VarDumper/Dumper/AbstractDumper.php';
require 'vendors/Symfony/Component/VarDumper/Dumper/CliDumper.php';

require 'vendors/Symfony/Component/VarDumper/Cloner/ClonerInterface.php';
require 'vendors/Symfony/Component/VarDumper/Cloner/AbstractCloner.php';
require 'vendors/Symfony/Component/VarDumper/Cloner/Stub.php';
require 'vendors/Symfony/Component/VarDumper/Cloner/VarCloner.php';

require 'vendors/Symfony/Component/VarDumper/Caster/Caster.php';
require 'src/Illuminate/Support/Debug/Dumper.php';
require 'vendors/Symfony/Component/VarDumper/Cloner/Cursor.php';
require 'vendors/Symfony/Component/VarDumper/Cloner/Data.php';

require 'vendors/Symfony/Component/VarDumper/Dumper/HtmlDumper.php';
require 'src/Illuminate/Support/Debug/HtmlDumper.php';

use Illuminate\Support\Debug\Dumper;

if (! function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed
     * @return void
     */
    function dd()
    {
        array_map(function ($x) {
            (new Dumper)->dump($x);
        }, func_get_args());

        die(1);
    }
}