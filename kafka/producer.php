<?php
$rdkafka=new RdKafka\Producer();
$rdkafka->setLogLevel(LOG_DEBUG);
$rdkafka->addBrokers('127.0.0.1:9092');
$topic=$rdkafka->newTopic('test');
//$topic->produce(0,0,'fuck you');
for ($i=1; $i <=10; $i++) { 
	$topic->produce(0,0,'Message'.$i);
}