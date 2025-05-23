<?php
$employees = [
    ["id" => 1, "name" => "Alice", "role" => "Driver"],
    ["id" => 2, "name" => "Bob", "role" => "Warehouse"],
    ["id" => 3, "name" => "Charlie", "role" => "Delivery"]
];

header('Content-Type: application/json');
echo json_encode($employees);
?>
    