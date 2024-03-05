<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Company Dashboard</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <link rel="stylesheet" href="css/bootstrap1.min.css">

    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css">

    <link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css">

    <link rel="stylesheet" href="vendors/select2/css/select2.min.css">

    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css">

    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css">

    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css">

    <link rel="stylesheet" href="vendors/datepicker/date-picker.css">

    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css">

    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css">

    <link rel="stylesheet" href="vendors/morris/morris.css">

    <link rel="stylesheet" href="vendors/material_icon/material-icons.css">

    <link rel="stylesheet" href="css/metisMenu.css">

    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
    <style>
        .round-card {
            width: 12rem;
            height: 12rem;
            border-radius: 50%;
            text-align: center;
            padding: 2rem;
            overflow: hidden;
        }

        .count-wrapper {
            position: relative;
        }

        .count {
            font-size: 3rem;
            font-weight: bold;
            color: #fff;
        }

        .count-description {
            font-size: 1rem;
            color: #fff;
            margin-top: 1rem;
        }

        @media (max-width: 320px) {
            .round-card {
                width: 8rem;
                height: 8rem;
                padding: 1.5rem;
            }

            .count {
                font-size: 2rem;
            }

            .count-description {
                font-size: 0.875rem;
                margin-top: 0.5rem;
            }
        }

        /* Animation */
        @keyframes count-up {
            from {
                transform: translateY(1rem);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .count {
            animation: count-up 1s ease-out;
        }
    </style>
    <style>
        .ask-doubt-btn-container {
            text-align: right;
        }

        .ask-doubt-btn {
            background-color: #3498db;
            /* Choose your button color */
            color: #fff;
            /* Choose your text color */
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
    </style>


</head>

<body class="crm_body_bg">


    <?php include('includes/sidebar_index.php'); ?>

    <section class="main_content dashboard_part">

        <?php include('includes/navbar_index.php'); ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0 sm_padding_15px">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="dashboard_header mb_50">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="dashboard_header_title">
                                        <h3>Company Dashboard</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="dashboard_breadcam text-end">
                                        <p><a href>Dashboard</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container text-center">
                        <!-- Card 1: No. of Questions Asked -->
                        <div class="col-lg-3 col-md-3 col-sm-6 mb-12 d-inline-block align-top">
                            <div class="round-card box_shadow position-relative mb_30 blue_bg">
                                <div class="count-wrapper">
                                    <div class="count" data-count="75">0</div>
                                    <p class="count-description">Total Customers</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: No. of Answers Received -->
                        <div class="col-lg-3 col-md-3 col-sm-6 mb-12 d-inline-block align-top">
                            <div class="round-card box_shadow position-relative mb_30 orange_bg">
                                <div class="count-wrapper">
                                    <div class="count" data-count="120">0</div>
                                    <p class="count-description">Total Cargo Delivered</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3: No. of Video Calls Attended -->
                        <div class="col-lg-3 col-md-3 col-sm-6 mb-12 d-inline-block align-top">
                            <div class="round-card box_shadow position-relative mb_30 green_bg">
                                <div class="count-wrapper">
                                    <div class="count" data-count="30">0</div>
                                    <p class="count-description">No. of Country</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-8 col-xl-8">
                        <div class="white_box mb_30">
                            <div class="box_header">
                                <div class="main-title">
                                    <h3 class="mb_25">Monthly Income stats for November 2020</h3>
                                </div>
                                <div class="float-end d-none d-md-inline-block">
                                    <div class="btn-group mb-2" role="group">
                                        <button type="button" class="btn btn-sm btn-light">Today</button>
                                        <button type="button" class="btn btn-sm btn-light">Weekly</button>
                                        <button type="button" class="btn btn-sm btn-light">Monthly</button>
                                    </div>
                                </div>
                            </div>
                            <div id="line-column-chart2"></div>
                            <div class="card_footer_white">
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <div class="d-inline-flex">
                                            <h5 class="me-2">$12,253</h5>
                                            <div class="text-success">
                                                <i class="fas fa-caret-up font-size-14 line-height-2 me-2"> </i>2.2 %
                                            </div>
                                        </div>
                                        <p class="text-muted text-truncate mb-0">This month</p>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <div class="mt-4 mt-sm-0">
                                            <p class="mb-2 text-muted text-truncate"><i
                                                    class="fas fa-circle text-primary me-2 font-size-10 me-1"></i> This
                                                Year :</p>
                                            <div class="d-inline-flex align-items-center">
                                                <h5 class="mb-0 me-2">$ 34,254</h5>
                                                <div class="text-success">
                                                    <i class="fas fa-caret-up font-size-14 line-height-2 me-2"> </i>2.1
                                                    %
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <div class="mt-4 mt-sm-0">
                                            <p class="mb-2 text-muted text-truncate"><i
                                                    class="fas fa-circle text-success font-size-10 me-1"></i> Previous
                                                Year :</p>
                                            <div class="d-inline-flex align-items-center">
                                                <h5 class="mb-0">$ 32,695</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4">
                        <div class="list_counter_wrapper white_box mb_30 p-0 card_height_100">
                            <div class="single_list_counter">
                                <h3 class="deep_blue_2"><span class="counter deep_blue_2 ">50</span> + </h3>
                                <p>Total categories</p>
                            </div>
                            <div class="single_list_counter">
                                <h3 class="deep_blue_2"><span class="counter deep_blue_2">100</span> + </h3>
                                <p>Total Listing</p>
                            </div>
                            <div class="single_list_counter">
                                <h3 class="deep_blue_2"><span class="counter deep_blue_2">20</span> + </h3>
                                <p>Claimed Listing</p>
                            </div>
                            <div class="single_list_counter">
                                <h3 class="deep_blue_2"><span class="counter deep_blue_2">10</span> + </h3>
                                <p>Reported Listing </p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-xl-6">
                        <div class="white_box QA_section card_height_100">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Users according to packages</h3>
                                </div>
                            </div>
                            <div class="QA_table ">

                                <table class="table lms_table_active2">
                                    <thead>
                                        <tr>
                                            <th scope="col">Package name</th>
                                            <th scope="col">No. of users</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Free package</td>
                                            <td>2556</td>
                                        </tr>
                                        <tr>
                                            <td>Free package</td>
                                            <td>2556</td>
                                        </tr>
                                        <tr>
                                            <td>Free package</td>
                                            <td>2556</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-6">
                        <div class="white_box mb_30 card_height_100">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb_25">Overview</h3>
                                </div>
                            </div>
                            <div class="activity_progressbar">
                                <div class="single_progressbar d-flex">
                                    <h6>Active Listings</h6>
                                    <div id="bar1" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="95"></span>
                                    </div>
                                </div>
                                <div class="single_progressbar d-flex">
                                    <h6>Claimed Listings</h6>
                                    <div id="bar2" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="75"></span>
                                    </div>
                                </div>
                                <div class="single_progressbar d-flex">
                                    <h6>Reported Listings</h6>
                                    <div id="bar3" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="55"></span>
                                    </div>
                                </div>
                                <div class="single_progressbar d-flex">
                                    <h6>Pending Listings</h6>
                                    <div id="bar4" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="25"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-8">
                        <div class="white_box QA_section card_height_100">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Web Visitor and trafic</h3>
                                </div>
                            </div>
                            <div id="home-chart-03" style="height: 280px; position: relative;"></div>
                        </div>
                    </div> -->
                    <div class="col-lg-4">
                        <div class="white_box QA_section card_height_100 blud_card">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0 text_white" style="font-size:1.5rem;">Subscription Details</h3>
                                </div>
                            </div>
                            <div class="content_user">
                                <p style="font-size:1.5rem;">Remaining Days: 15</p>
                                <p style="font-size:1.5rem;">End Date: 20-04-2024</p>
                                <a href="#" class="btn_2" style="font-size:1rem;">Renew Subscription</a>
                                <img src="img/users_img.png" alt>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="white_box card_height_100">
                            <div class="box_header">
                                <div class="main-title" style="display: inline-flex;">
                                    <h3 class="m-0">Recent Orders</h3>
                                </div>
                                <div class="ask-doubt-btn-container" style="display: inline-flex;">
                                    <button class="ask-doubt-btn">Check Orders</button>
                                </div>
                            </div>
                            <div class="Activity_timeline">
                                <ul>
                                    <li>
                                        <div class="activity_bell"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <h6>5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                    scelerisque
                                                </p>
                                            </div>
                                            <div class="notification_read_btn mb_10">
                                                <a href="#" class="notification_btn">Read</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="activity_bell"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <h6>5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                    scelerisque
                                                </p>
                                            </div>
                                            <div class="notification_read_btn mb_10">
                                                <a href="#" class="notification_btn">Read</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="activity_bell"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <h6>5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                    scelerisque
                                                </p>
                                            </div>
                                            <div class="notification_read_btn mb_10">
                                                <a href="#" class="notification_btn">Read</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="activity_bell"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <h6>5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                    scelerisque
                                                </p>
                                            </div>
                                            <div class="notification_read_btn mb_10">
                                                <a href="#" class="notification_btn">Read</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="white_box QA_section card_height_100">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Listings according to Category</h3>
                                </div>
                            </div>
                            <div class="QA_table ">

                                <table class="table lms_table_active2">
                                    <thead>
                                        <tr>
                                            <th scope="col">Package name</th>
                                            <th scope="col">No. of users</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Restaurant</td>
                                            <td>2556</td>
                                        </tr>
                                        <tr>
                                            <td>Hotel</td>
                                            <td>25506</td>
                                        </tr>
                                        <tr>
                                            <td>Apartment</td>
                                            <td>25536</td>
                                        </tr>
                                        <tr>
                                            <td>Salon</td>
                                            <td>25536</td>
                                        </tr>
                                        <tr>
                                            <td>Automobile</td>
                                            <td>25536</td>
                                        </tr>
                                        <tr>
                                            <td>Spa</td>
                                            <td>25536</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="white_box QA_section card_height_100">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Claimed Listings</h3>
                                </div>
                            </div>
                            <div class="QA_table ">

                                <table class="table lms_table_active2">
                                    <thead>
                                        <tr>
                                            <th scope="col">Package name</th>
                                            <th scope="col">No. of users</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Restaurant</td>
                                            <td>2556</td>
                                        </tr>
                                        <tr>
                                            <td>Hotel</td>
                                            <td>25506</td>
                                        </tr>
                                        <tr>
                                            <td>Apartment</td>
                                            <td>25536</td>
                                        </tr>
                                        <tr>
                                            <td>Salon</td>
                                            <td>25536</td>
                                        </tr>
                                        <tr>
                                            <td>Automobile</td>
                                            <td>25536</td>
                                        </tr>
                                        <tr>
                                            <td>Spa</td>
                                            <td>25536</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="white_box QA_section card_height_100">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Reported Listings</h3>
                                </div>
                            </div>
                            <div class="QA_table ">

                                <table class="table lms_table_active2">
                                    <thead>
                                        <tr>
                                            <th scope="col">Package name</th>
                                            <th scope="col">No. of users</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Restaurant</td>
                                            <td>2556</td>
                                        </tr>
                                        <tr>
                                            <td>Hotel</td>
                                            <td>25506</td>
                                        </tr>
                                        <tr>
                                            <td>Apartment</td>
                                            <td>25536</td>
                                        </tr>
                                        <tr>
                                            <td>Salon</td>
                                            <td>25536</td>
                                        </tr>
                                        <tr>
                                            <td>Automobile</td>
                                            <td>25536</td>
                                        </tr>
                                        <tr>
                                            <td>Spa</td>
                                            <td>25536</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3">
                        <div class="white_box QA_section card_height_100">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Device</h3>
                                </div>
                            </div>
                            <div id="bar-chart-6" class></div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3">
                        <div class="white_box">
                            <div class="box_header">
                                <div class="main-title">
                                    <h3 class="m-0">Browser</h3>
                                </div>
                            </div>
                            <div class="casnvas_box">
                                <canvas height="210" width="210" id="canvasDoughnut"></canvas>
                            </div>
                            <div class="legend_style legend_style_grid mt_10px">
                                <li class="d-block"> <span style="background-color: #525CE5;"></span>Chrome</li>
                                <li class="d-block"> <span style="background-color: #9C52FD;"></span> Mojila</li>
                                <li class="d-block"> <span style="background-color: #3B76EF"></span> Safari</li>
                                <li class="d-block"> <span style="background-color:#00BFBF;"></span> Opera</li>
                                <li class="d-block"> <span style="background-color:#FFA70B;"></span> Microsoft Edg</li>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <?php include('includes/footer.php'); ?>
    </section>


    <div class="CHAT_MESSAGE_POPUPBOX">
        <div class="CHAT_POPUP_HEADER">
            <div class="MSEESAGE_CHATBOX_CLOSE">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z"
                        fill="white" />
                </svg>
            </div>
            <h3>Chat with us</h3>
            <div class="Chat_Listed_member">
                <ul>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/1.png" alt>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/2.png" alt>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/3.png" alt>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/4.png" alt>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/5.png" alt>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <div class="more_member_count">
                                    <span>90+</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="CHAT_POPUP_BODY">
            <p class="mesaged_send_date">
                Sunday, 12 January
            </p>
            <div class="CHATING_SENDER">
                <div class="SMS_thumb">
                    <img src="img/staf/1.png" alt>
                </div>
                <div class="SEND_SMS_VIEW">
                    <p>Hi! Welcome .
                        How can I help you?</p>
                </div>
            </div>
            <div class="CHATING_SENDER CHATING_RECEIVEr">
                <div class="SEND_SMS_VIEW">
                    <p>Hello</p>
                </div>
                <div class="SMS_thumb">
                    <img src="img/staf/1.png" alt>
                </div>
            </div>
        </div>
        <div class="CHAT_POPUP_BOTTOM">
            <div class="chat_input_box d-flex align-items-center">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Write your message"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn " type="button">

                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z"
                                    fill="#707DB7" />
                            </svg>

                        </button>
                        <button class="btn" type="button">

                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z"
                                    fill="#707DB7" />
                            </svg>

                        </button><input type="file">

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/jquery1-3.4.1.min.js"></script>

    <script src="js/popper1.min.js"></script>

    <script src="js/bootstrap1.min.js"></script>

    <script src="js/metisMenu.js"></script>

    <script src="vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="vendors/chartlist/Chart.min.js"></script>

    <script src="vendors/count_up/jquery.counterup.min.js"></script>

    <script src="vendors/swiper_slider/js/swiper.min.js"></script>

    <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="vendors/gijgo/gijgo.min.js"></script>

    <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="vendors/datatable/js/jszip.min.js"></script>
    <script src="vendors/datatable/js/pdfmake.min.js"></script>
    <script src="vendors/datatable/js/vfs_fonts.js"></script>
    <script src="vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="vendors/datatable/js/buttons.print.min.js"></script>

    <script src="vendors/datepicker/datepicker.js"></script>
    <script src="vendors/datepicker/datepicker.en.js"></script>
    <script src="vendors/datepicker/datepicker.custom.js"></script>
    <script src="js/chart.min.js"></script>

    <script src="vendors/progressbar/jquery.barfiller.js"></script>

    <script src="vendors/tagsinput/tagsinput.js"></script>

    <script src="vendors/text_editor/summernote-bs4.js"></script>
    <script src="vendors/am_chart/amcharts.js"></script>
    <script src="vendors/apex_chart/apexcharts.js"></script>
    <script src="vendors/apex_chart/apex_realestate.js"></script>

    <script src="vendors/chart_am/core.js"></script>
    <script src="vendors/chart_am/charts.js"></script>
    <script src="vendors/chart_am/animated.js"></script>
    <script src="vendors/chart_am/kelly.js"></script>
    <script src="vendors/chart_am/chart-custom.js"></script>

    <script src="js/custom.js"></script>
    <script src="vendors/apex_chart/bar_active_1.js"></script>
    <script src="vendors/apex_chart/apex_chart_list.js"></script>
    <script>
        history.pushState(null, null, document.URL);
        window.addEventListener('popstate', function () {
            history.pushState(null, null, document.URL);
        });

        // Optional: Disable the backspace key to prevent accidental navigation
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Backspace') {
                e.preventDefault();
            }
        });
    </script>
    <script>
        // Counter Animation
        document.addEventListener("DOMContentLoaded", function () {
            const counters = document.querySelectorAll('.count');
            const speed = 100; // The lower the slower

            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-count');
                    const count = +counter.innerText;

                    // Lower inc to slow and higher to slow
                    const inc = target / speed;

                    // Check if target is reached
                    if (count < target) {
                        // Add inc to count and output in counter
                        counter.innerText = Math.ceil(count + inc);
                        // Call function every ms
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
            });
        });
    </script>
</body>

</html>