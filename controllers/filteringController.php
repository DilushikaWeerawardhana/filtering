<?php

    class filteringController
    {
        function filter()
        {
            include_once './models/filteringModel.php';

            $field = $_POST['studentsInfoField'];
            $searchKey = $_POST['searchKey'];

            $filteringModel = new filteringModel();

            $filteringModel->getFilterInfo($field, $searchKey);
        }

    }