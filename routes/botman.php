<?php
use BotMan\BotMan\BotMan;

$botman = app('botman');

$botman->hears('สวัสดี|hello', function (BotMan $bot) {
    $bot->reply('สวัสดีครับ! ยินดีต้อนรับสู่ NaHost บอทกำลังรอคำสั่งจากคุณอยู่ครับ');
});

$botman->fallback(function (BotMan $bot) {
    $bot->reply('ขอโทษครับ ผมไม่เข้าใจคำสั่งนี้ ลองพิมพ์ "สวัสดี" ดูนะครับ');
});