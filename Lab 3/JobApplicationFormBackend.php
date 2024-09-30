<?php
session_start();

// step 1 begins here
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['step_number'] == 'step_1') {
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];

    if (!empty($full_name) && !empty($phone)) {
        $_SESSION['full_name'] = $full_name;
        $_SESSION['phone'] = $phone;

        header('Location: JobApplicationForm.php/step_2');
        exit;
    } else {
        echo "Please fill all required fields.";
    }
}
// step 1 ends here

// step 2 begins here
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['step_number'] == 'step_2') {
    $highest_obtained_degree = $_POST['highest_obtained_degree'];
    $field_of_study = $_POST['field_of_study'];
    $name_of_institute = $_POST['name_of_institute'];
    $graduation_year = $_POST['graduation_year'];

    if (!empty($highest_obtained_degree) && !empty($field_of_study) && !empty($name_of_institute) && !empty($graduation_year)) {
        $_SESSION['highest_obtained_degree'] = $highest_obtained_degree;
        $_SESSION['field_of_study'] = $field_of_study;
        $_SESSION['name_of_institute'] = $name_of_institute;
        $_SESSION['graduation_year'] = $graduation_year;

        header('Location: JobApplicationForm.php/step_3');
        exit;
    } else {
        echo "Please fill all fields";
    }
}
// step 2 ends here

// step 3 begins here
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['step_number'] == 'step_3') {
    $prev_job_title = $_POST['prev_job_title'];
    $company_name = $_POST['company_name'];
    $experience = $_POST['experience'];
    $key_responsibilities = $_POST['key_responsibilities'];

    if (!empty($prev_job_title) && !empty($company_name) && !empty($experience) && !empty($key_responsibilities)) {
        $_SESSION['prev_job_title'] = $prev_job_title;
        $_SESSION['company_name'] = $company_name;
        $_SESSION['experience'] = $experience;
        $_SESSION['key_responsibilities'] = $key_responsibilities;

        header('Location: review_application.php');
        exit;
    } else {
        echo "Please fill all fields";
    }
}
// step 3 ends here

?>