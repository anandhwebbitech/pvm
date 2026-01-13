<?php
ob_start();
ob_clean();
session_start();

// Retrieve variables
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$pdf_certificate= $_POST['customFile'] ?? '';
$desctiption = $_POST['message'] ?? '';




$Date = date('Y-m-d H:i:s', time());

if (isset($_POST['Career'])) {


    $pdf_certificate = '';
    if (isset($_FILES['customFile']) && $_FILES['customFile']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['customFile']['tmp_name'];
        $file_name = $_FILES['customFile']['name'];
        $file_size = $_FILES['customFile']['size'];
        $file_type = $_FILES['customFile']['type'];
        $file_content = chunk_split(base64_encode(file_get_contents($file_tmp)));
        $pdf_certificate = $file_name;
    }

    $messages = '
   <table width="683" border="0" align="left" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:12px;border:1px solid #ddd; border-collapse:collapse;">
        <tbody>
        <tr>
            <td width="677">
            <table width="100%" border="0" cellpadding="10" cellspacing="0" style="border:1px solid #ddd; border-collapse:collapse;">
                <tbody>
                <tr style="background-color:#0977BC;">
                    <td height="40" colspan="3" align="left" style="font-size:22px; font-weight:bold; color:#fff; border-bottom:1px solid #ddd;">Structura Fab</td>
                </tr>
                <tr style="background-color:#f7fff5;">
                    <td height="40" colspan="3" align="left" style="color:#000;font-size:16px;font-weight:bold; border-bottom:1px solid #ddd;">
                    Website Enquiry Details From <strong style="color:#0977BC;">'. htmlspecialchars($name, ENT_QUOTES).'</strong>
                    </td>
                </tr>

                 <!-- Email -->
                <tr>
                    <td style="border:1px solid #ddd; font-weight:bold;">Email ID:</td>
                    <td style="border:1px solid #ddd;">'. htmlspecialchars($email, ENT_QUOTES).'</td>
                </tr>

                <!-- Mobile No -->
                <tr>
                    <td style="border:1px solid #ddd; font-weight:bold;">Mobile No:</td>
                    <td style="border:1px solid #ddd;">'. htmlspecialchars($phone, ENT_QUOTES).'</td>
                </tr>

                <!-- Description -->
                <tr>
                    <td style="border:1px solid #ddd; font-weight:bold;">Description:</td>
                    <td style="border:1px solid #ddd;">'. htmlspecialchars($desctiption, ENT_QUOTES).'</td>
                </tr>


                </tbody>
            </table>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="padding:20px; font-size:12px; text-align:left;">
            <p>Warm Regards,</p>
            <p><strong><a href="#" style="color:#0977BC; text-decoration:none;">Structura Fab</a></strong></p>
            </td>
        </tr>
        </tbody>
        </table>';


    $boundary = md5(time());
    $subject = "Website Enquiry Details " . htmlspecialchars($name, ENT_QUOTES);
    $to = "subashwebbitech@gmail.com";

    // Additional headers
    $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-Type: multipart/mixed; boundary="' . $boundary . '"' . "\r\n";
    $headers .= 'Sender: <noreply@webbitech.in>' . "\r\n";
    $headers .= 'From: ' . htmlspecialchars($name, ENT_QUOTES) . ' <noreply@webbitech.in>' . "\r\n";
    $headers .= 'Reply-To: ' . htmlspecialchars($name, ENT_QUOTES) . ' <' . htmlspecialchars($email, ENT_QUOTES) . '>' . "\r\n";
    

       // Email body with MIME boundaries
    $email_message = '--' . $boundary . "\r\n";
    $email_message .= 'Content-Type: text/html; charset=iso-8859-1' . "\r\n";
    $email_message .= 'Content-Transfer-Encoding: 7bit' . "\r\n\r\n";
    $email_message .= $messages . "\r\n";

    // Add attachment if a file is uploaded
    if (!empty($pdf_certificate)) {
        $email_message .= '--' . $boundary . "\r\n";
        $email_message .= 'Content-Type: ' . $file_type . '; name="' . $pdf_certificate . '"' . "\r\n";
        $email_message .= 'Content-Disposition: attachment; filename="' . $pdf_certificate . '"' . "\r\n";
        $email_message .= 'Content-Transfer-Encoding: base64' . "\r\n\r\n";
        $email_message .= $file_content . "\r\n";
    }

    // Closing boundary
    $email_message .= '--' . $boundary . '--';

    // Send email
    $res1 = mail($to, $subject, $email_message, $headers, '-fnoreply@webbitech.in');


 

    if ($res1) {
               $_SESSION['success_msg'] = "Thanks for Applying with us. We will get back to you shortly!";
        header('Location: career.php');
        exit;
    } else {
        $_SESSION['error_msg'] = "Error Occurred. Try Once Again";
        header('Location: career.php');
        exit;
    }    

}
?>

@extends('layouts.app')
@section('content')
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-chevron-up"></i></button>


    <!-- Modal -->
    <div class="modal fade job-modal" id="careerModal" tabindex="-1" aria-labelledby="careerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <button type="button" class="btn-close   opacity" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row gx-0">
                        <div class="col-lg-6 col-md-5 d-lg-block d-none">
                            <div class="img-box">
                                <img src="./assets/images/career.jpg" width="100%" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="career-input-wrapper">
                                <h5 class="career-title">Join Our Talent Community</h5>
                                <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data" class="mt-3">
                                    <div class="row gy-3">
                                        <div class="col-lg-12">
                                            <div class="row gy-3">
                                                <div class="col-lg-12">
                                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="phone" class="form-control" name="phone" placeholder="Phone No">
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                                </div>  
                                                <div class="col-lg-12">                                                   
                                                     <input type="file" id="real-file" name="customFile" hidden="hidden" />
                                                    <button type="button" id="custom-button">Choose a file</button>
                                                    <span id="custom-text">No file chosen</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="message" class="form-control"   rows="4"
                                                placeholder="Description"></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button name="Career" type="submit" class="cssbuttons-io-button-blue">
                                                Send a Message
                                                <div class="icon">
                                                    <svg height="24" width="24" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Careers</h5>
            </div>
        </div>
    </section>


    <section class="career-detail">
        <div class="container">
            <h5 class="main-subtitle">Career</h5>
            <h5 class="main-title">Your <span class="common">next move</span>
            </h5>
             <div class="text-center mt-5">
                            <?php
                            session_start();
                            if (isset($_SESSION['success_msg'])) {
                                echo '<div class="alert alert-success">' . $_SESSION['success_msg'] . '</div>';
                                unset($_SESSION['success_msg']); // Clear the message after displaying
                            }

                            if (isset($_SESSION['error_msg'])) {
                                echo '<div class="alert alert-danger">' . $_SESSION['error_msg'] . '</div>';
                                unset($_SESSION['error_msg']); // Clear the message after displaying
                            }
                            ?>
                        </div>
            <div class="row gy-4 mt-4">
                <div class="col-lg-6 col-md-12">
                    <div class="job-card">

                        <div class="row gx-2">
                            <div class="col-lg-8 col-md-7">
                                <div class="job-card-content">
                                    <h5 class="job-desc">Project Manager</h5>
                                    <p class="job-text"><i class="bi bi-geo-alt-fill"></i>Hosur , Tamilnadu</p>
                                    <ul class="job-role">
                                        <li>Onsite</li>
                                        <li>Full Time</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <div class="job-apply-box">
                                    <div>
                                        <p class="job-text">Experience : 5 - 7 years</p>
                                        <p class="mt-3 text-lg-center"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#careerModal" class="btn apply-btn">Apply Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="job-card">

                        <div class="row gx-2">
                            <div class="col-lg-8 col-md-7">
                                <div class="job-card-content">
                                    <h5 class="job-desc">Maintenance Technician</h5>
                                    <p class="job-text"><i class="bi bi-geo-alt-fill"></i>Bangalore , Tamilnadu</p>
                                    <ul class="job-role">
                                        <li>Onsite</li>
                                        <li>Full Time</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <div class="job-apply-box">
                                    <div>
                                        <p class="job-text">Experience : 2 - 3 years</p>
                                        <p class="mt-3 text-lg-center"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#careerModal" class="btn apply-btn">Apply Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="job-card">

                        <div class="row gx-2">
                            <div class="col-lg-8 col-md-7">
                                <div class="job-card-content">
                                    <h5 class="job-desc">Mechanical Engineer </h5>
                                    <p class="job-text"><i class="bi bi-geo-alt-fill"></i>Coimbatore , Tamilnadu</p>
                                    <ul class="job-role">
                                        <li>Onsite</li>
                                        <li>Full Time</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <div class="job-apply-box">
                                    <div>
                                        <p class="job-text">Experience : 1 - 3 years</p>
                                        <p class="mt-3 text-lg-center"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#careerModal" class="btn apply-btn">Apply Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-6 col-md-12">
                    <div class="job-card">

                        <div class="row gx-2">
                            <div class="col-lg-8 col-md-7">
                                <div class="job-card-content">
                                    <h5 class="job-desc">Structural Fabricator </h5>
                                    <p class="job-text"><i class="bi bi-geo-alt-fill"></i>Chennai , Tamilnadu</p>
                                    <ul class="job-role">
                                        <li>Onsite</li>
                                        <li>Full Time</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <div class="job-apply-box">
                                    <div>
                                        <p class="job-text">Experience : 2 - 4 years</p>
                                        <p class="mt-3 text-lg-center"><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#careerModal" class="btn apply-btn">Apply Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script>
        // Get the button element
        const myButton = document.getElementById("myBtn");

        // Show or hide the button based on scroll position
        window.addEventListener("scroll", () => {
            if (window.scrollY > 20) {
                myButton.style.display = "block";
            } else {
                myButton.style.display = "none";
            }
        });

        // Scroll to the top of the page when the button is clicked
        myButton.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth" // Smooth scroll effect
            });
        });
    </script>



    <script>
        $(document).ready(function () {
            var scroll_pos = 0;
            $(document).scroll(function () {
                scroll_pos = $(this).scrollTop();
                if (scroll_pos >= 50) {
                    $('.main-header').addClass("fixed");
                } else {
                    $('.main-header').removeClass("fixed");
                }
            });
        });
    </script>

    <script>
        $('.mean-menulist').meanmenu({
            meanMenuContainer: '.mobile-menu',  

        });
    </script>


<script>
    const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");

    customBtn.addEventListener("click", function() {
    realFileBtn.click();
    });

    realFileBtn.addEventListener("change", function() {
    if (realFileBtn.value) {
        customTxt.innerHTML = realFileBtn.value.match(
        /[\/\\]([\w\d\s\.\-\(\)]+)$/
        )[1];
    } else {
        customTxt.innerHTML = "No file chosen, yet.";
    }
    });
</script>

@endsection
