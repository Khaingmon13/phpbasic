<?php
class Connection{
    public static function make($config)
    {
        try{
            return  $pdo =new PDO(              
                 "{$config['host']}; dbname={$config['dbname']};port=3306",$config['username'],
                  $config['password']);

                //  "mysql:host=localhost; dbname=todo;port = 3306","root", "mysql");
         }catch (PDOExcetpion $e)
         {
             $e->getMessage();
         }
    }
}