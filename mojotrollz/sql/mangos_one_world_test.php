<?php
namespace SQL;
class mangos_one_world_test {
    public static function connection(){
        return new \SYSTEM\DB\DBInfoMYS(
            'mangos_one_world_test',
            \SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_USER),
            \SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_PASSWORD),
            \SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_HOST),
            \SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_PORT)
        );
    }
}


