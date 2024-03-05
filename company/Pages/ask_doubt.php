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
        .form-container {
            width: 100%;
            max-width: 80%;
            margin: 0 auto;
            /* Center the form horizontally */
        }


        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .card-header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 15px;
        }

        .card-body {
            padding: 20px;
            font-size: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        textarea,
        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 5px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }

        button:hover {
            background-color: #2980b9;
        }

        #filePreview {
            margin-top: 10px;
            max-width: 100%;
            overflow: hidden;
        }

        #filePreview img {
            width: 100%;
            border-radius: 5px;
            margin-top: 5px;
        }

        #filePreview a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>

<body class="crm_body_bg">
    <?php include('../includes/sidebar.php'); ?>
    <section class="main_content dashboard_part">
        <?php include('../includes/navbar.php'); ?>

        <div class="form-container">
            <div class="card">
                <div class="card-header">
                    <h3>Ask Doubt</h3>
                </div>
                <div class="card-body">
                    <form id="doubtForm">
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="fileInput">Upload File:</label>
                            <input type="file" id="fileInput" name="fileInput"
                                accept=".pdf, .doc, .docx, .jpg, .jpeg, .png" required>
                            <div id="filePreview"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit-btn">Ask Doubt</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include('../includes/footer.php'); ?>
    </section>
    <script>
        document.getElementById('fileInput').addEventListener('change', function (event) {
            const fileInput = event.target;
            const filePreview = document.getElementById('filePreview');

            while (filePreview.firstChild) {
                filePreview.removeChild(filePreview.firstChild);
            }

            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];

                if (file.type.startsWith('image/')) {
                    const img = document.createElement('img');
                    img.src = URL.createObjectURL(file);
                    filePreview.appendChild(img);
                } else {
                    const link = document.createElement('a');
                    link.href = URL.createObjectURL(file);
                    link.textContent = file.name;
                    link.target = '_blank';
                    filePreview.appendChild(link);
                }
            }
        });

        document.getElementById('doubtForm').addEventListener('submit', function (event) {
            event.preventDefault();
            alert('Doubt submitted!'); // Replace with your form submission logic
        });

    </script>
</body>

</html>