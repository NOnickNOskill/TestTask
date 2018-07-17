<?php
/*
 * Класс реализующий статические методы для подключения 
 * к БД и вывод ее в таблицу
 *  */

class Db 
{
    public static function getConection()
    {
        $host = 'localhost';
        $dbname = 'testtask';
        $user = 'root';
        $password = '';
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        return $db;
    }
    
    public static function getTableList()
    {
        $db = Db::getConection();
        $categoryList = array();
        
        $result = $db->query('SELECT * FROM products');
        $i = 0;
        while ($row = $result->fetch())
        {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['price'] = $row['price'];
            $categoryList[$i]['rating'] = $row['rating'];
            $i++;
        }
        
        $db = null;
        return $categoryList;
    }
    
}
