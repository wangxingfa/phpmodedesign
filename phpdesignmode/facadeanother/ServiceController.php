<?php



namespace phpdesignmode\facadeanother;


class ServiceController {
    
    private $aliyunService;
    private $jiguangService;
    private $messageinfo;
    private $pushinfo;
    public function __construct(){
        $this->aliyunService=new AliYunService();
        $this->jiguangService=new JiGuangService();
        $this->messageinfo=new MessageInfo();
        $this->pushinfo=new PushInfo();
        
    }
    
   public function pushAndSendAliyun(){
       $this->messageinfo->Send($this->aliyunService);
       $this->pushinfo->Push($this->aliyunService);
   }
   public function pushAndSendJiguang(){
       $this->messageinfo->Send($this->jiguangService);
       $this->pushinfo->Push($this->jiguangService);
   }
    
}
