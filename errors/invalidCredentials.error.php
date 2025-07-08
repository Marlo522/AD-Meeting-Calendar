<?php
/**
 * Invalid Credentials Error Page
 * Displays when user enters incorrect login credentials
 */

// Set up page variables
$title = 'Invalid Credentials - Meeting Calendar';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/errors/assets/css/error.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="error-page">
    <div class="error-container">
        <div class="error-card">
            <!-- Logo Section -->
            <div class="error-logo">
                <img src="/assets/img/meeting_calendar_logo.png" alt="Meeting Calendar" class="logo-img">
                <h1 class="app-title">Meeting Calendar</h1>
            </div>
            
            <!-- Error Content -->
            <div class="error-content">
                <div class="error-icon">🔒</div>
                <h2 class="error-title">Invalid Credentials</h2>
                <p class="error-message">
                    The username or password you entered is incorrect.
                    Please check your credentials and try again.
                </p>
                
                <!-- Action Buttons -->
                <div class="error-actions">
                    <a href="/index.php" class="btn btn-primary">
                        <span class="btn-icon">🔄</span>
                        Try Again
                    </a>
                </div>
</body>
</html>
