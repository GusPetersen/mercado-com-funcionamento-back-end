<?php
include_once('config/url.php');
include_once('config/process.php');

if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
};

    foreach ($contacts as $contact) {
    // Check if the 'type' value is 1
    if ($contact['type'] == 1) {
        // Display information for entries with 'type' value 1
        echo 'Name: ' . $contact['name'] . ', Type: ' . $contact['type'] . '<br>';
    }
}
?>