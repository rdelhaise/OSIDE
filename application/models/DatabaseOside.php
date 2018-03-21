<?php
/**
 * Created by PhpStorm.
 * User: remy
 * Date: 23/02/2018
 * Time: 17:59
 */

class DatabaseOside{
    public $db_connect = NULL;
    /**
     * DatabaseOside constructor.
     */

    public function __construct()
    {
        $this->db_connect =  mysqli_connect('192.168.1.21', 'oside', 'plokij', 'OSIDE', '3306');
    }

    public function selectQuery($colonnes, $table, $where){
            $query = 'SELECT '.$colonnes.' FROM '.$table;
            $result =  NULL;
            if($where != ''){
                $query = $query.' WHERE '.$where;
            }
            $select = $this->db_connect->query($query);
            if ($select != FALSE){
                $result = $select->fetch_all();
            }
            return $result;
    }
}