<?php
// Check if the request is a certain way (e.g. from a specific IP or token)
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "Your secret code is: rtyopiy1458"; // The secret code
} else {
    http_response_code(403);
    echo "Forbidden";
}
?>