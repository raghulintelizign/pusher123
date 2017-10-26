<?php

// This is our new stuff
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
$socket->connect("tcp://localhost:5555");

$entryData = array("name"=> "pusher", "value"=>"you killed me");

$socket->send(json_encode($entryData));