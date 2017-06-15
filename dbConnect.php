<?php
$DB_PERMISSION_WRITE = 'WRITE';
$DB_PERMISSION_READ = 'READ';
// database functions ************************************************

function fConnectToDatabase($permission)
{
    if ($permission == 'READ'){
        $db = new PDO('mysql:dbname=Test;host=127.0.0.1', 'SamRead', 'rFC9lR63mH3XdD5l');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    if ($permission == 'WRITE')
    {
        $db = new PDO('mysql:dbname=Test;host=127.0.0.1','SamWrite', 'ivg9KpwtvyOmsv0f');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }

}
