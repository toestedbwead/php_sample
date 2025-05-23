<?php
$hrApiUrl = 'http://localhost/eis-integration-test/php_sample/hr_system/employees.php';

$response = file_get_contents($hrApiUrl);

if ($response === FALSE) {
    die("Failed to fetch data from HR system.");
}

$employees = json_decode($response, true);

echo "<h2>Available Employees from HR System</h2>";
echo "<ul>";
foreach ($employees as $emp) {
    echo "<li>ID: {$emp['id']}, Name: {$emp['name']}, Role: {$emp['role']}</li>";
}
echo "</ul>";
?>
