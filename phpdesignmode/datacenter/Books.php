<?php

namespace phpdesignmode\datacenter;

class Books implements Iproduct {

    public function getDescription() {
        return "欢饮光临图书类产品";
    }

    public function getList() {
        return [
            ["id" => 1, "name" => "PHP从入门到跑路", "price" => 500.00, "discount" => 1],
            ["id" => 2, "name" => "MYSQL从入门到删库跑路", "price" => 800.00, "discount" => 1],
            ["id" => 3, "name" => "JAVASCRIPT入门到打死产品经理", "price" => 700.00, "discount" => 1]
        ];
    }

    public function getName() {
        return "books";
    }

//put your code here
}
