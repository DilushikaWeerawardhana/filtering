<?php
    class queryExecuter
    {
        private $result;
        private $dataArray = array();

        public function selectQueryExecuter($connection, $sql)
        {
            $this->result = mysqli_query($connection, $sql);

            if ($this->result->num_rows > 0) {
                while ($row = mysqli_fetch_array($this->result, MYSQLI_NUM)) {
                    array_push($this->dataArray,$row);
                }
                return $this->dataArray;
            } else {
                echo "0 results";
            }
        }
    }