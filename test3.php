<?php

/**
 * @author 
 * @copyright 2015
 */

$postXmlStr = $HTTP_RAW_POST_DATA;
$xmlObj = simplexml_load_string($postXmlStr);

if(false === $xmlObj) {
        echo "parse xml string error! \n";
        exit(0);
}

$toUser = $xmlObj->ToUserName;
echo "to User: " . $toUser . "\n";

$fromUser = $xmlObj->FromUserName;
echo "from User: " . $fromUser . "\n";

$createTime = $xmlObj->CreateTime;
echo "Create Time: " . $createTime . "\n";

$msgType = $xmlObj->MsgType;
echo "msg type: " . $msgType . "\n";

$content = $xmlObj->content;
echo "content: " . $content . "\n";

$msgId = $xmlObj->MsgId;
echo "msg id: " . $msgId . "\n";

?>