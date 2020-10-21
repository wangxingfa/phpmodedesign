<?php
namespace phpdesignmode\datacenter;
class Cake implements Iproduct {
    public function getDescription() {
        return "欢饮光临蛋糕产品";
    }

    public function getList() {
        
        return [
            ["id"=>1,"name"=>"奶油蛋糕","price"=>22.00,"discount"=>1],
            ["id"=>2,"name"=>"慕斯蛋糕","price"=>32.00,"discount"=>1],
            ["id"=>3,"name"=>"水果蛋糕","price"=>25.00,"discount"=>1]
            
        ];
        
    }

    public function getName() {
        return "cake";
    }

//put your code here
}
