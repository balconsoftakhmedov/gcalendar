<?php

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'rootss');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'gcalendar');

// Google API configuration
define('GOOGLE_CLIENT_ID', '978187260028-dmk0ibd4d2kr9fttejs3gpifpd4jjbvn.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/calendar');
define('REDIRECT_URI', 'https://gcalendar.com/google_calendar_event_sync.php');

// Start session
if(!session_id()) session_start();

// Google OAuth URL
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online';

?>