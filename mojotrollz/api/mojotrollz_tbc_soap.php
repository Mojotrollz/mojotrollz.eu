<?php
class mojotrollz_tbc_soap {
    private static function soap($port,$command){
        $client = new SoapClient(NULL, array(
            'location' => "http://127.0.0.1:$port/",
            'uri'      => 'urn:MaNGOS',
            'style'    => SOAP_RPC,
            'login'    => 'soap_gm',
            'password' => 'algdc37avvjd',
        ));
        return $client->executeCommand(new SoapParam($command, 'command'));
    }
    
    private static function soap_test($command){
        return self::soap('7879', $command);}
    private static function soap_live($command){
        return self::soap('7878', $command);}
    
    public static function test_bot_login($account,$character){
        return self::soap_test('bot login '.$account.' '.$character);}
    public static function bot_login($account,$character){
        return self::soap('bot login '.$account.' '.$character);}
        
    public static function test_bot_logout($account){
        return self::soap_test('bot logout '.$account);}
    public static function bot_logout($account){
        return self::soap('bot logout '.$account);}
}