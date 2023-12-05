<!-- views/admin/update_staff.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your CSS stylesheets and other necessary assets here -->
    <!-- Example: -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/admin.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="<?= site_url('index.php/admin/updateStaff/' . $data['staff_id']) ?>"enctype="multipart/form-data">
                    <!-- Use the staff ID directly in the form action -->
                    <input type="hidden" name="staff_id" value="<?= $data['staff_id'] ?>">
    <div class="mb-3">
        <label for="staff_name" class="form-label">Staff Name:</label>
        <input type="text" class="form-control" name="staff_name" value="<?= $data['staff_name'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="staff_image" class="form-label">Staff Image:</label>
        <input type="file" class="form-control" name="staff_image" value="<?= $data['staff_image'] ?>" required>
    </div>
    <!-- Add other form fields as needed -->
    <button type="submit" class="btn btn-success">Update Staff</button>
</form>

            </div>
        </div>
    </div>
</body>
</html>
