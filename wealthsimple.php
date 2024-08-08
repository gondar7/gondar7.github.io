<?php
   // Log the click
   $logFile = 'wealthsimple_clicks.log';
   $timestamp = date('Y-m-d H:i:s');
   $ipAddress = $_SERVER['REMOTE_ADDR'];
   $userAgent = $_SERVER['HTTP_USER_AGENT'];
   $logMessage = "$timestamp | $ipAddress | $userAgent\n";
   file_put_contents($logFile, $logMessage, FILE_APPEND);

   // Redirect to Wealthsimple
   header('Location: https://my.wealthsimple.com/app/public/trade-referral-signup?code=AEXLPA');
   exit;
   ?>
