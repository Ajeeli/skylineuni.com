<?php 
    // Create a cURL handle
    $curlcmd = curl_init('https://ipapi.co/' . $_SERVER['REMOTE_ADDR'] .'/country_calling_code');

    // Execute
    curl_exec($curlcmd);
    // Close handle
    curl_close($curlcmd);
?>
