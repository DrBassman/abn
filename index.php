<?php
if ($_SERVER["REQUEST_METHOD"] === 'GET') {
    require __DIR__ . '/input.php';
} elseif ($_SERVER["REQUEST_METHOD"] === 'POST') { 
    require __DIR__ . '/abn_form.php';
}
?>
