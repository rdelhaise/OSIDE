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

    public function insertQuery($colones, $table, $data){
        $chaine = '';
        foreach ($data as $i => $value) {
            $chaine .= '"'.$value.'",';
            echo $chaine.'<br />';
        }
        $chaine .= ')';
        $chaine = str_replace(",)", '',  $chaine);
        $query = 'INSERT INTO '.$table.'('.$colones.') VALUES ('.$chaine.');';
        $result = null ;
        print_r($query);
        try{
            $insert = $this->db_connect->query($query);
        }catch (mysqli_sql_exception  $exception) {
            error_log($exception->getMessage());
        }
        $result = $insert;
        return $result;
    }
}