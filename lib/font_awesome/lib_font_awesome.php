<?php
namespace LIB;
class lib_font_awesome extends \LIB\lib_css{
    public static function get_class(){
        return self::class;}
    public static function css_path(){
        return \SYSTEM\WEBPATH(new \PLIB(),'font_awesome/lib/css/font-awesome.min.css');}
    public static function version(){
        return '<a href="https://github.com/FortAwesome/Font-Awesome/commit/5ad6a98a54873dfdbadb0639405cdb0660bc6092">github commit</a>';}
}
