<?php
ob_start();
ob_clean();
session_start();
extract($_REQUEST);
$Date = date('Y-m-d h:m:s', time());
if (isset($_POST['Contact'])) {



    $messages = '<table width="683" border="0" align="left" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:12px;border:1px solid #ddd; border-collapse:collapse;">
        <tbody>
        <tr>
            <td width="677">
            <table width="100%" border="0" cellpadding="10" cellspacing="0" style="border:1px solid #ddd; border-collapse:collapse;">
                <tbody>
                <tr style="background-color:#f9f9f9;">
                    <td height="40" colspan="3" align="left" style="font-size:22px; font-weight:bold; color:#0977BC; border-bottom:1px solid #ddd;">Structura Fab</td>
                </tr>
                <tr style="background-color:#f7fff5;">
                    <td height="40" colspan="3" align="left" style="color:#000;font-size:16px;font-weight:bold; border-bottom:1px solid #ddd;">
                    Website Enquiry Details From <strong style="color:#0977BC;">' . htmlspecialchars($usrname, ENT_QUOTES) . '</strong>
                    </td>
                </tr>

                 <!-- Email -->
                <tr>
                    <td style="border:1px solid #ddd; font-weight:bold;">Email ID:</td>
                    <td style="border:1px solid #ddd;">' . htmlspecialchars($email, ENT_QUOTES) . '</td>
                </tr>

                <!-- Mobile No -->
                <tr>
                    <td style="border:1px solid #ddd; font-weight:bold;">Mobile No:</td>
                    <td style="border:1px solid #ddd;">' . htmlspecialchars($phone_number, ENT_QUOTES) . '</td>
                </tr>

                <!-- Description -->
                <tr>
                    <td style="border:1px solid #ddd; font-weight:bold;">Message:</td>
                    <td style="border:1px solid #ddd;">' . htmlspecialchars($message, ENT_QUOTES) . '</td>
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
    $subject = "Website Enquiry Details " . $usrname;
    $to = "pvmautomation@gmail.com";

    // Additional headers
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'Sender: <noreply@webbitech.in/>' . "\r\n";
    $headers .= 'From: ' . $usrname . ' <noreply@webbitech.in>' . "\r\n";

    $headers .= 'Reply-To: ' . $usrname . ' <' . $email . '>' . "\r\n";

    $res1 = mail($to, $subject, $messages, $headers, '-fnoreply@webbitech.in');

    if ($res1) {
        // Set session message
        $_SESSION['success_msg'] = "Thanks for Applying with us. We will get back to you shortly!";
        header('Location: contact.php');
        exit;
    } else {
        $_SESSION['error_msg'] = "Error Occurred. Try Once Again";
        header('Location: contact.php');
        exit;
    }
}
//  echo $messages;
?>
@extends('layouts.app')
@section('content')

    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">Cantact Us</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-light">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Contact us</li>

                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="contact-section">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-left">
                        <h5 class="contact-title">Contact Info</h5>
                        <p class="contact-text ">Get in touch with us for any questions about our industries or
                            projects.
                        </p>
                        <div class="contact-detail mt-3">
                            <div class="icon">
                                <i class="bi bi-telephone-inbound"></i>
                            </div>
                            <div class="text">
                                <h6 class="reservation-text">Phone Number</h6>
                                <p class="reservation-title"><a href="tel:+919789320532">+91 97893 20532</a></p>
                                <p class="reservation-title"><a href="tel:+919659977955">+91 96599 77955</a></p>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <div class="icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="text">
                                <h6 class="reservation-text">Email Info</h6>
                                <p class="reservation-title"><a href="mailto:pvmautomation@gmail.com">pvmautomation@gmail.com</a></p>
                                <p class="reservation-title"><a href="mailto:sales@pvmaar.com">sales@pvmaar.com</a></p>
                                <p class="reservation-title"><a href="mailto: info@pvmaar.com"> info@pvmaar.com</a></p>

                            </div>
                        </div>
                        <div class="contact-detail">
                            <div class="icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="text">
                                <h6 class="reservation-text">Address</h6>
                                <p class="reservation-title"><a href="https://maps.app.goo.gl/xZsvZmCSA6f2nGNX9"> No.53, 56, SF no.25/1, Thilak Nagar Nadupalayam Pirivu, Peedampalli, Coimbatore, Tamil Nadu 641016</a></p>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="contact-right">
                        <h5 class="main-subtitle">Contact Us</h5>
                        <h5 class="main-title">Send a <span class="common">Message</span>
                        </h5>

                      
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="row gx-lg-3 gy-4 mt-4">
                            <div class="col-md-6">
                                <div class="input-container">
                                    <span class="input-group-text"><i class="fa fa-user icon"></i></span>
                                    <input class="form-control" type="text" placeholder="Username" name="usrname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-container">
                                    <span class="input-group-text"><i class="fa-regular fa-envelope icon"></i></span>
                                    <input class=" form-control" type="email" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-container">
                                    <div class="input-group-text"><i class="fa-solid fa-phone icon"></i></div>
                                    <input class=" form-control" type="phone" placeholder="Phone" name="phone_number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-container product-select">
                                    <span class="select-icon">
                                        <i class="fa-solid fa-box"></i>
                                    </span>

                                    <select class="form-select product-dropdown" name="product">
                                        <option selected disabled>Select Product</option>
                                        <option value="1">Product One</option>
                                        <option value="2">Product Two</option>
                                        <option value="3">Product Three</option>
                                    </select>

                                    <span class="select-arrow">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="input-container">
                                    <div class="input-group-text"><i class="fa-solid fa-pencil icon"></i></div>
                                    <textarea class="form-control" rows="3"
                                        placeholder="How We Can Help You? Feel free to get in touch!" name="message"></textarea>
                                </div>

                            </div>
                            <div class="col-12">
                                <button type="submit" name="Contact" class="cssbuttons-io-button-blue">
                                    Send Message
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
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13076.225599403513!2d77.087687!3d10.982402!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85a3804d05a57%3A0x19fb04fbe6ae27a1!2sPVM%20AUTOMATION%20AND%20ROBOTICS!5e1!3m2!1sen!2sin!4v1767673527520!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
