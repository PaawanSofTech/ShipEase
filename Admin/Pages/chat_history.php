<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Dashboard</title>
    <link rel="icon" href="../img/logo.png" type="image/png">

    <link rel="stylesheet" href="../css/bootstrap1.min.css">

    <link rel="stylesheet" href="../vendors/themefy_icon/themify-icons.css">

    <link rel="stylesheet" href="../vendors/swiper_slider/css/swiper.min.css">

    <link rel="stylesheet" href="../vendors/select2/css/select2.min.css">

    <link rel="stylesheet" href="../vendors/niceselect/css/nice-select.css">

    <link rel="stylesheet" href="../vendors/owl_carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../vendors/gijgo/gijgo.min.css">

    <link rel="stylesheet" href="../vendors/font_awesome/css/all.min.css">
    <link rel="stylesheet" href="../vendors/tagsinput/tagsinput.css">

    <link rel="stylesheet" href="../vendors/datepicker/date-picker.css">

    <link rel="stylesheet" href="../vendors/datatable/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../vendors/datatable/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="../vendors/datatable/css/buttons.dataTables.min.css">

    <link rel="stylesheet" href="../vendors/text_editor/summernote-bs4.css">

    <link rel="stylesheet" href="../vendors/morris/morris.css">

    <link rel="stylesheet" href="../vendors/material_icon/material-icons.css">

    <link rel="stylesheet" href="../css/metisMenu.css">

    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/colors/default.css" id="colorSkinCSS">
    <style>
        .chat-container {
            display: flex;
            width: 100%;
            max-width: 80%;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: auto;
            height: 60%;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .chat-history {
            flex: 1;
            border-right: 1px solid #ddd;
            height: 500px;
            overflow: scroll;
            scroll-behavior: smooth;
            overflow-x: hidden;

        }

        .history-item {
            display: flex;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .chat-window {
            flex: 2;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 500px;
        }

        .chat-header {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .chat-info {
            flex-grow: 1;
        }

        .chat-messages {
            flex-grow: 1;
            overflow-y: auto;
            padding: 15px;
        }

        .message {
            background-color: #F5F7F9;
            color: #fff;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .compose {
            display: flex;
            align-items: center;
            padding: 15px;
            border-top: 1px solid #ddd;
        }

        textarea {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 10px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        .profile-img {
            width: 40px;
            height: 40px;
            background-color: #3498db;
            border-radius: 50%;
            margin-right: 15px;
        }

        .name {
            margin: 0;
        }

        .date {
            margin: 5px 0 0;
            color: #888;
            font-size: 14px;
        }

        .time {
            color: #888;
            font-size: 12px;
        }
        /* For Firefox */
.chat-history::-webkit-scrollbar {
    width: 8px;
}

.chat-history::-webkit-scrollbar-thumb {
    background-color: #3498db;
    border-radius: 4px;
}

.chat-history::-webkit-scrollbar-track {
    background-color: #f5f5f5;
}

/* For other browsers */
.chat-history {
    scrollbar-width: thin;
}

.chat-history::-webkit-scrollbar-thumb {
    background-color: #3498db;
    border-radius: 4px;
}

.chat-history::-webkit-scrollbar-track {
    background-color: #f5f5f5;
}

    </style>
</head>

<body class="crm_body_bg">
    <?php include('../includes/sidebar.php'); ?>
    <section class="main_content dashboard_part">
        <?php include('../includes/navbar.php'); ?>

        <div class="chat-container">
            <div class="chat-history">
                <div class="history-item">
                    <div class="profile-img"></div>
                    <div class="history-info">
                        <h4 class="name">John Doe</h4>
                        <p class="date">Last seen: March 10, 2024</p>
                    </div>
                </div>
                <div class="history-item">
                    <div class="profile-img"></div>
                    <div class="history-info">
                        <h4 class="name">John Doe</h4>
                        <p class="date">Last seen: March 10, 2024</p>
                    </div>
                </div>
                <div class="history-item">
                    <div class="profile-img"></div>
                    <div class="history-info">
                        <h4 class="name">John Doe</h4>
                        <p class="date">Last seen: March 10, 2024</p>
                    </div>
                </div>
                <div class="history-item">
                    <div class="profile-img"></div>
                    <div class="history-info">
                        <h4 class="name">John Doe</h4>
                        <p class="date">Last seen: March 10, 2024</p>
                    </div>
                </div>
                <div class="history-item">
                    <div class="profile-img"></div>
                    <div class="history-info">
                        <h4 class="name">John Doe</h4>
                        <p class="date">Last seen: March 10, 2024</p>
                    </div>
                </div>
                <div class="history-item">
                    <div class="profile-img"></div>
                    <div class="history-info">
                        <h4 class="name">John Doe</h4>
                        <p class="date">Last seen: March 10, 2024</p>
                    </div>
                </div>
                
                <div class="history-item">
                    <div class="profile-img"></div>
                    <div class="history-info">
                        <h4 class="name">John Doe</h4>
                        <p class="date">Last seen: March 10, 2024</p>
                    </div>
                </div>
                <div class="history-item">
                    <div class="profile-img"></div>
                    <div class="history-info">
                        <h4 class="name">John Doe</h4>
                        <p class="date">Last seen: March 10, 2024</p>
                    </div>
                </div>
                <div class="history-item">
                    <div class="profile-img"></div>
                    <div class="history-info">
                        <h4 class="name">John Doe</h4>
                        <p class="date">Last seen: March 10, 2024</p>
                    </div>
                </div>

                <!-- Add more history items as needed -->

            </div>

            <div class="chat-window">
                <div class="chat-header">
                    <div class="profile-img"></div>
                    <div class="chat-info">
                        <h4 class="name">John Doe</h4>
                        <p class="date">Online</p>
                    </div>
                </div>

                <div class="chat-messages">
                    <div class="message">
                        <p>Hello there!</p>
                        <span class="time">12:30 PM</span>
                    </div>

                    <!-- Add more chat messages as needed -->

                </div>

                <div class="compose">
                    <textarea placeholder="Type your message..."></textarea>
                    <button>Send</button>
                </div>
            </div>
        </div>

        <?php include('../includes/footer.php'); ?>
    </section>

</body>

</html>