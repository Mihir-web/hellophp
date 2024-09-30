<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Job Application Form</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <?php
    if(isset($_SESSION['email'])){
        
    $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/', $link);
    $segment = end($link_array);
    switch ($segment) {
        case 'step_1':
            ?>
            <!-- Job Application Step 1 starts -->
            <div id="step_1">
                <?php
                $full_name = '';
                $email = '';
                $phone = '';

                if (isset($_SESSION['full_name']) && !empty($_SESSION['full_name'])) {
                    $full_name = $_SESSION['full_name'];
                }

                if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                }

                if (isset($_SESSION['phone']) && !empty($_SESSION['phone'])) {
                    $phone = $_SESSION['phone'];
                }
                ?>

                <div class="steps_label">
                <span class="step_1_label active">Step 1</span> > <span class="step_2_label">Step 2</span> > <span class="step_3_label">Step 3</span> > <span class="review_label">Review</span> <a href="../logout.php" style="float:right;">Logout</a>
                </div>
                <form method="POST" action="../JobApplicationFormBackend.php">
                    <table>
                        <tr>
                            <td>
                                <label for="full_name">Full Name:</label>
                            </td>
                            <td>
                                <input type="text" id="full_name" name="full_name" value="<?php echo $full_name; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email:</label>
                            </td>
                            <td>
                                <input type="email" id="email" name="email" value="<?php echo $email; ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="phone">Phone:</label>
                            </td>
                            <td>
                                <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="end">
                                <input type="hidden" name="step_number" value="step_1">
                                <input type="submit" value="Next">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- Job Application Step 1 ends -->
            <?php
            break;
        case 'step_2':
            ?>
            <!-- Job Application Step 2 starts -->
            <div id="step_2">
                <?php
                $highest_obtained_degree = '';
                $field_of_study = '';
                $name_of_institute = '';
                $graduation_year = '';

                if (isset($_SESSION['highest_obtained_degree']) && !empty($_SESSION['highest_obtained_degree'])) {
                    $highest_obtained_degree = $_SESSION['highest_obtained_degree'];
                }

                if (isset($_SESSION['field_of_study']) && !empty($_SESSION['field_of_study'])) {
                    $field_of_study = $_SESSION['field_of_study'];
                }

                if (isset($_SESSION['name_of_institute']) && !empty($_SESSION['name_of_institute'])) {
                    $name_of_institute = $_SESSION['name_of_institute'];
                }

                if (isset($_SESSION['graduation_year']) && !empty($_SESSION['graduation_year'])) {
                    $graduation_year = $_SESSION['graduation_year'];
                }
                ?>
                <div class="steps_label">
                <span class="step_1_label">Step 1</span> > <span class="step_2_label active">Step 2</span> > <span class="step_3_label">Step 3</span> > <span class="review_label">Review</span> <a href="./logout.php" style="float:right;">Logout</a>
                </div>
                <form method="POST" action="../JobApplicationFormBackend.php">
                    <table>
                        <tr>
                            <td>
                                <label for="highest_obtained_degree">Highest Degree Obtained:</label>
                            </td>
                            <td>
                                <input type="text" id="highest_obtained_degree" name="highest_obtained_degree"
                                    value="<?php echo $highest_obtained_degree; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="field_of_study">Field of Study:</label>
                            </td>
                            <td>
                                <input type="text" id="field_of_study" name="field_of_study"
                                    value="<?php echo $field_of_study; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="name_of_institute">Name of Institute:</label>
                            </td>
                            <td>
                                <input type="text" id="name_of_institute" name="name_of_institute"
                                    value="<?php echo $name_of_institute; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="graduation_year">Year of Graduation:</label>
                            </td>
                            <td>
                                <input type="number" id="graduation_year" name="graduation_year"
                                    value="<?php echo $graduation_year; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="./step_1">Previous</a>
                            </td>
                            <td colspan="2" align="end">
                                <input type="hidden" name="step_number" value="step_2">
                                <input type="submit" value="Next">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- Job Application Step 2 ends -->
            <?php
            break;
        case 'step_3':
            ?>
            <!-- Job Application Step 3 starts -->
            <div id="step_3">
                <?php
                $prev_job_title = '';
                $company_name = '';
                $experience = '';
                $key_responsibilities = '';

                if (isset($_SESSION['prev_job_title']) && !empty($_SESSION['prev_job_title'])) {
                    $prev_job_title = $_SESSION['prev_job_title'];
                }

                if (isset($_SESSION['company_name']) && !empty($_SESSION['company_name'])) {
                    $company_name = $_SESSION['company_name'];
                }

                if (isset($_SESSION['experience']) && !empty($_SESSION['experience'])) {
                    $experience = $_SESSION['experience'];
                }

                if (isset($_SESSION['key_responsibilities']) && !empty($_SESSION['key_responsibilities'])) {
                    $key_responsibilities = $_SESSION['key_responsibilities'];
                }
                ?>
                <div class="steps_label">
                <span class="step_1_label">Step 1</span> > <span class="step_2_label">Step 2</span> > <span class="step_3_label active">Step 3</span> > <span class="review_label">Review</span> <a href="./logout.php" style="float:right;">Logout</a>
                </div>
                <form method="POST" action="../JobApplicationFormBackend.php">
                    <table>
                        <tr>
                            <td>
                                <label for="prev_job_title">Previous Job Title:</label>
                            </td>
                            <td>
                                <input type="text" id="prev_job_title" name="prev_job_title"
                                    value="<?php echo $prev_job_title; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="company_name">Company Name:</label>
                            </td>
                            <td>
                                <input type="text" id="company_name" name="company_name" value="<?php echo $company_name; ?>"
                                    required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="experience">Years of Experience:</label>
                            </td>
                            <td>
                                <input type="number" id="experience" name="experience" value="<?php echo $experience; ?>"
                                    required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="key_responsibilities">Key Responsibilities:</label>
                            </td>
                            <td>
                                <textarea id="key_responsibilities" name="key_responsibilities"
                                    value="<?php echo $key_responsibilities; ?>"
                                    required><?php echo $key_responsibilities; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="./step_2">Previous</a>
                            </td>
                            <td>
                                <input type="hidden" name="step_number" value="step_3">
                                <input type="submit" value="Next">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- Job Application Step 3 ends -->
            <?php
            break;
        default:
            echo "404 Page Not found!";
            break;
    }
}else{
    echo "Invalid session!";
}
    ?>
</body>

</html>