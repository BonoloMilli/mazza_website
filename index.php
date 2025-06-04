<?php
// URL to the raw content of site_status.txt in your GitHub repo
$status_url = 'https://raw.githubusercontent.com/BonoloMilli/mazza_website/main/site_status.txt';

// Get the content
$status = @file_get_contents($status_url);

// If the status is offline or the file can't be loaded, show maintenance message
if (!$status || trim($status) === 'offline') {
    echo "<h1 style='text-align:center;margin-top:20%;font-family:sans-serif;'>🚧 Website is currently down for maintenance. Please check back later.</h1>";
    exit;
}
?>
