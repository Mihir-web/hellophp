<?php
session_start();

// Collect all session data into an array
$application = [
    'full_name' => $_SESSION['full_name'],
    'email' => $_SESSION['email'],
    'phone' => $_SESSION['phone'],
    'highest_obtained_degree' => $_SESSION['highest_obtained_degree'],
    'field_of_study' => $_SESSION['field_of_study'],
    'name_of_institute' => $_SESSION['name_of_institute'],
    'graduation_year' => $_SESSION['graduation_year'],
    'prev_job_title' => $_SESSION['prev_job_title'],
    'company_name' => $_SESSION['company_name'],
    'experience' => $_SESSION['experience'],
    'key_responsibilities' => $_SESSION['key_responsibilities']
];

// Store in applications.json
$filePath = 'JobApplications.json';
if (file_exists($filePath)) {
    $applications = json_decode(file_get_contents($filePath), true);
} else {
    $applications = [];
}

$applications[] = $application;
file_put_contents($filePath, json_encode($applications));

echo "You Job Application has been submitted successfully!";
?>
