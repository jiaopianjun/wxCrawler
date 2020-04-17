<?php
include_once 'WxCrawler.php';

$url = $_GET['url'];
$crawler = new WxCrawler();
$content = $crawler->crawByUrl($url);
header('Content-type:application/json');
echo json_encode($content);