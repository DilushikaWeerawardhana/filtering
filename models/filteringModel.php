<?php
 class filteringModel {
     private $connection;
     private $executer;

     public function __construct()
     {
         include_once 'database/connection.php';
         include_once 'database/queryExecuter.php';

         $this->connection = new connection();
         $this->executer = new queryExecuter();
     }

     public function getFilterInfo($field, $searchKey)
     {
         $con = $this->connection->setDbConnection();

         $sql = 'SELECT * FROM students WHERE ' . $field . '=' + '"' + $searchKey + '"' ;
         print_r($sql);

         $data = $this->executer->selectQueryExecuter($con,$sql);

         $this->connection->closeDbConnection();
         return $data;
     }
 }