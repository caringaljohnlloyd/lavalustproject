<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add Staff Form</title>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        form {
            background-color: ;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            margin-top: 10px;
            display: block;
        }

        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-light bg-dark">
            <form method="post" action="<?= site_url('admin/addStaff') ?>" enctype="multipart/form-data">
                    <label for="staff_name">Staff Name:</label>
                    <input type="text" name="staff_name" required>

                    <label for="staff_image">Staff Image:</label>
                    <input type="file" name="staff_image" required>

                    <button type="submit" class="btn btn-success">Add Staff</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js are required for Bootstrap components -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-oCbdKRKE4eUG2hxrDYCe2utgbUnzQV/5Sz3n+ndLclAL/Z6Ll6FiG3J/jQOp6gW5" crossorigin="anonymous"></script>
</body>
</html>
