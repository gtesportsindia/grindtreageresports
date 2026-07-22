<?php

require_once "config.php";

// PhonePe callback data
$data = file_get_contents("php://input");

// Log callback (optional)
file_put_contents("phonepe_callback.log", $data . PHP_EOL, FILE_APPEND);

// Abhi sirf OK return kar rahe hain
http_response_code(200);
echo "OK";

?>