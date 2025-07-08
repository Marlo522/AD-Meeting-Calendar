<?php
/**
 * Main Layout Template
 * Includes navbar and defines the basic page structure
 */

// Ensure bootstrap is loaded
if (!defined('COMPONENTS_PATH')) {
    require_once __DIR__ . '/../bootstrap.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Meeting Calendar' ?></title>
    
    <!-- Main Styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
    
    <!-- Navbar Component Styles -->
    <link rel="stylesheet" href="/components/navbar/assets/css/navbar.css">
    
    <!-- Additional page-specific styles -->
    <?php if (isset($additional_css)): ?>
        <?php foreach ($additional_css as $css_file): ?>
            <link rel="stylesheet" href="<?= htmlspecialchars($css_file) ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body class="main-layout">
    <!-- Navigation Bar -->
    <?php include COMPONENTS_PATH . 'navbar/navbar.component.php'; ?>
    
    <!-- Main Content -->
    <main class="main-content">
        <?= $content ?? '' ?>
    </main>
    
</body>
</html>
