<?php

namespace App\SMS;

//use App\SMS\M3Result;

class SendTemplateSMS
{
    //主帐号
    private $accountSid= '8aaf07085dcad420015de0bf8789064c';
    //主帐号Token
    private $accountToken= 'c90a1d2a0de74dd293e3b23bc2b6e8a5';
    //应用Id
    private $appId='8aaf07085dcad420015de0bf87dd0650';
    //请求地址，格式如下，不需要写https://
    private $serverIP='app.cloopen.com';
    //请求端口
    private $serverPort='8883';
    //REST版本号
    private $softVersion='2013-12-26';


  /**
    * 发送模板短信
    * @param to 手机号码集合,用英文逗号分开
    * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
    * @param $tempId 模板Id
    */
  public function sendTemplateSMS($to,$datas,$type)
  {

      $m3_result = new M3Result;

       // 初始化REST SDK
       $rest = new CCPRestSDK($this->serverIP,$this->serverPort,$this->softVersion);
       $rest->setAccount($this->accountSid,$this->accountToken);
       $rest->setAppId($this->appId);

       // 发送模板短信
      //  echo "Sending TemplateSMS to $to <br/>";
       $result = $rest->sendTemplateSMS($to,$datas,$type);
       if($result == NULL ) {
           $m3_result->status = 3;
           $m3_result->message = 'result error!';
       }
       if($result->statusCode != 0) {
           $m3_result->status = $result->statusCode;
           $m3_result->message = $result->statusMsg;
       }else{
           $m3_result->status = 0;
           $m3_result->message = '发送成功';
       }

       return $m3_result;


  }
}
