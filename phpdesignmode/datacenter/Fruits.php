<?php

namespace phpdesignmode\datacenter;

class Fruits implements Iproduct {

    public function getDescription() {
        return "欢饮光临水果产品";
    }

    public function getList() {

        return [
            ["id" => 1, "name" => "苹果", "price" => 16.00, "discount" => 1],
            ["id" => 2, "name" => "梨子", "price" => 8.00, "discount" => 1],
            ["id" => 3, "name" => "草莓", "price" => 45.00, "discount" => 1]
        ];
    }

    public function getName() {
        return "fruits";
    }

}
