<?php

class Database extends PDO {

    function __construct($DBTYPE, $DBHOST, $DBNAME, $DBUSER, $DBPASS) {
        parent::__construct("$DBTYPE:host=$DBHOST;dbname=$DBNAME",$DBUSER, $DBPASS);
    }

}
