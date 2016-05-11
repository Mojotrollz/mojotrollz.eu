<?php
class page_mojotrollz extends \SYSTEM\API\api_default {
    public static function get_apigroup(){
        return 1;}
    public static function get_class($params = null){
        return self::class;}
    public static function get_default_state(){
        return 'start';}
        
    public static function default_page($_escaped_fragment_ = NULL){
        return (new default_page())->html($_escaped_fragment_);}
    
    public static function page_impressum(){
        return (new default_impressum())->html();}
        
    public static function page_start(){
        return (new default_start())->html();}
    
    public static function page_login(){
        return (new default_login())->html();}
    
    public static function page_serverlist(){
        return (new default_serverlist())->html();}
    
    public static function page_beta($key=null){
        return (new default_beta($key))->html();}
        
    public static function page_article($id){
        return (new default_article($id))->html();}
    
    public static function page_donate(){
        return (new default_donate())->html();}
}