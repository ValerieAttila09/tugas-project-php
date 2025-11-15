<?php
// Common helper functions

/**
 * Redirect to a specific URL
 */
function redirect($url) {
    header("Location: $url");
    exit();
}

/**
 * Check if user is logged in
 */
function isLoggedIn() {
    session_start();
    return isset($_SESSION['nama']);
}

/**
 * Get user name from session
 */
function getUserName() {
    return isset($_SESSION['nama']) ? $_SESSION['nama'] : '';
}

/**
 * Sanitize input data
 */
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Format date for display
 */
function formatDate($date) {
    return date('F j, Y', strtotime($date));
}
?>