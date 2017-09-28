<?php
$rdkafka=new RdKafka\Consumer();
$rdkafka->setLogLevel(LOG_DEBUG);
$rdkafka->addBrokers('127.0.0.1:9092');
$topic=$rdkafka->newTopic('test');
$topic->consumeStart(0,2);//
$i=0;
while ($i<1) {
	# code...
	$msg=$topic->consume(0,1000);
	var_dump($msg);
	//echo $msg->payload.$msg->offset;
	$i++;
}