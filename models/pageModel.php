<?php
 class pageModel {
     private $connection;
     private $executer;

     public function __construct()
     {
         include_once 'database/connection.php';
         include_once 'database/queryExecuter.php';

         $this->connection = new dbConnection();
         $this->executer = new queryExecuter();
     }

     public function getFilterInfo()
     {
         $con = $this->connection->setDbConnection();

         $sql = 'SELECT * FROM students';

         $data = $this->executer->selectQueryExecuter($con,$sql);

         $this->connection->closeDbConnection();
         return $data;
     }
 }