<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Review Application form</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<div class="steps_label">
<span class="step_1_label">Step 1</span> > <span class="step_2_label">Step 2</span> > <span class="step_3_label">Step 3</span> > <span class="review_label active">Review</span> <a href="./logout.php" style="float:right;">Logout</a>
</div>       
<table>
            <tr>
                <th align="start">
                    Full Name  
                </th>
                <td>
                    <?php echo $_SESSION['full_name'] ?? 'N/A';?>
                </td>
            </tr>
            <tr>
                <th align="start">
                   Email 
                </th>
                <td>
                    <?php echo $_SESSION['email'] ?? 'N/A';?>
                </td>
            </tr>
            <tr>
                <th align="start">
                    Phone
                </th>
                <td>
                    <?php echo $_SESSION['phone'] ?? 'N/A';?>
                </td>
            </tr>
            <tr>
                <th align="start">
                    Highest Degree Obtained
                </th>
                <td>
                    <?php echo $_SESSION['highest_obtained_degree'] ?? 'N/A';?>
                </td>
            </tr>
            <tr>
                <th align="start">
                    Field of Study
                </th>
                <td>
                    <?php echo $_SESSION['field_of_study'] ?? 'N/A';?> 
                </td>
            </tr>
            <tr>
                <th align="start">
                    Name of Institute
                </th>
                <td>
                    <?php echo $_SESSION['name_of_institute'] ?? 'N/A';?> 
                </td>
            </tr>
            <tr>
                <th align="start">
                    Year of Graduation 
                </th>
                <td>
                    <?php echo $_SESSION['graduation_year'] ?? 'N/A';?>
                </td>
            </tr>
            <tr>
                <th align="start">
                    Previous Job Title  
                </th>
                <td>
                    <?php echo $_SESSION['prev_job_title'] ?? 'N/A';?>
                </td>
            </tr>
            <tr>
                <th align="start">
                    Company Name  
                </th>
                <td>
                    <?php echo $_SESSION['company_name'] ?? 'N/A';?>
                </td>
            </tr>
            <tr>
                <th align="start">
                    Years of Experience  
                </th>
                <td>
                    <?php echo $_SESSION['experience'] ?? 'N/A';?>
                </td>
            </tr>
            <tr>
                <th align="start">
                    Key Responsibilities  
                </th>
                <td>
                    <?php echo $_SESSION['key_responsibilities'] ?? 'N/A';?>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="./JobApplicationForm.php/step_3">Previous</a>
                </td>
                <td>
                
                    <form method="post" action="./FinalApplication.php">
                        <input type="submit" value="Submit">
                    </form>
                    
                </td>
            </tr>
        </table>
</body>

</html>
