<?php

// Adjust the paths based on your project structure
$laravelPath = '/home/zawpszw2/public_html/toeshwekaung.com';
$appPath = $laravelPath . '/storage/app/public';
$linkPath = $laravelPath . '/storage';

// Check if the symbolic link doesn't exist
if (!is_link($linkPath)) {
    // Create the symbolic link
    symlink($appPath, $linkPath);
    echo 'Symbolic link created successfully.';
} else {
    echo 'Symbolic link already exists.';
}