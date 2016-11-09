<?php
class DB{
    private static $_instance = null;

    private $_pdo;
    private $_query;
    private $_error = false;
    private $_results;
    private $_count = 0;
    private $_lastinsertid = 0;

    private function __construct()
    {
        try {
            $this->_pdo = new PDO(
                DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME,
                DB_USER,
                DB_PASS
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new DB;
        }

        return self::$_instance;
    }

    public function query($sql, $params = array())
    {
        $this->_error = false;
        if ($this->_query = $this->_pdo->prepare($sql)) {
            if (count($params)) {
                $position = 1;
                foreach ($params as $pos => $param) {
                    $this->_query->bindValue($position,$param);
                    $position++;
                }
            }
        }

        if ($this->_query->execute()) {
            $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
            $this->_count = $this->_query->rowCount();
        }else{
            $this->_error = true;
        }

        return $this;
    }

    private function action($action, $table, $where)
    {
        if (count($where)===3) {
            $operators  = ['=','>','<','>=','<='];
            $field      = $where[0];
            $operator   = $where[1];
            $value      = $where[2];
        }

        if (in_array($operator, $operators)) {
            $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
            if (!$this->query($sql, [$value])->error()) {
                return $this;
            }
        }
    }

    public function get($table,$where)
    {
        return $this->action('SELECT *', $table, $where);
    }

    public function delete($table,$where)
    {
        return $this->action('DELETE ', $table, $where);
    }

    public function insert($table,$fields)
    {

        $keys = array_keys($fields);
        $values = '';
        $ctr = 1;
        foreach ($fields as $key => $field) {
            $values .= '?';
            if ($ctr < count($fields)) {
                $values .= ', ';
            }
            $ctr++;
        }

        $sql = "INSERT INTO {$table} (". implode(',',$keys) . ") VALUES ({$values})";
        // ECHO $sql;
        if (!$this->query($sql,$fields)->error()) {
            $this->_lastinsertid = $this->_pdo->lastInsertId();
            return true;
        }

        return false;
    }
    public function lastInsertedId(){
      return $this->_lastinsertid;
    }

    public function update($table, $col, $id, $fields)
    {
        $set = '';
        $ctr = 1;

        foreach ($fields as $name => $value) {
            $set .= "{$name} = ?";

            if ($ctr < count($fields)) {
                $set .= ', ';
            }
            $ctr++;
        }

        $sql = "UPDATE {$table} SET {$set} WHERE {$col} = {$id}";

        if (!$this->query($sql,$fields)->error()) {
            return true;
        }

        return false;
    }

    public function error()
    {
        return $this->_error;
    }

    public function results()
    {
        return $this->_results;
    }

    public function count()
    {
        return $this->_count;
    }
}
