<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa; 
            color: #343a40; 
        }
        .container {
            max-width: 600px; 
            margin: 0 auto; /* Center align the form */
            padding: 30px;
            background-color: #fff; 
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .secondary-caption {
            color:  #027e0c;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
            
        }
        .btn-primary {
            background-color:#027e0c; 
            border-color: #027e0c;
        }
        .btn-primary:hover {
            background-color: #06600d; /* Darker color on hover */
            border-color: #06600d;
        }
        @media (max-width: 768px) {
        .container {
        padding: 20px;}
        }

    </style>
</head>
<body>
    <div class="container mt-3 mb-3">
        <div class="text-center"><h2>Employee Information Form</h2></div>
        <form action="{{route('employee.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="employeeId" class="form-label">Employee ID:</label>
                <input type="text" class="form-control" id="employeeId" name="employee_id">
            </div>

            <div class="secondary-caption text-center"><h3>Personal Information</h3></div>

            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name:</label>
                <input type="text" class="form-control" id="fullName" name="full_name">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Employee Image:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <!-- Personal information fields -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="contactNumber" class="form-label">Contact Number:</label>
                        <input type="number" class="form-control" id="contactNumber" name="contact_number">
                    </div>
                    <div class="mb-3">
                        <label for="nidNumber" class="form-label">NID Number:</label>
                        <input type="number" class="form-control" id="nidNumber" name="nid_number">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth:</label>
                        <input type="date" class="form-control" id="dob" name="date_of_birth">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="maritalStatus" class="form-label">Marital Status:</label>
                        <input type="text" class="form-control" id="maritalStatus" name="marital_status">
                    </div>
                    <div class="mb-3">
                        <label for="spouseName" class="form-label">Name of Spouse:</label>
                        <input type="text" class="form-control" id="spouseName" name="spouse_name">
                    </div>
                    <div class="mb-3">
                        <label for="religion" class="form-label">Religion:</label>
                        <input type="text" class="form-control" id="religion" name="religion">
                    </div>
                </div>
            </div>

            <div class="secondary-caption text-center"><h3>Job Information</h3></div>

            <div class="mb-3">
                <label for="positionTitle" class="form-label">Position Title:</label>
                <input type="text" class="form-control" id="positionTitle" name="position_title">
            </div>

            <!-- Job information fields -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="department" class="form-label">Department:</label>
                        <input type="text" class="form-control" id="department" name="department">
                    </div>
                    <div class="mb-3">
                        <label for="startDate" class="form-label">Start Date:</label>
                        <input type="date" class="form-control" id="startDate" name="start_date">
                    </div>
                    <div class="mb-3">
                        <label for="workLocation" class="form-label">Work Location:</label>
                        <select class="form-control" id="workLocation" name="work_location">
                            <option value="default">Select</option>
                            <option value="Uttara">Uttara</option>
                            <option value="Karwan Bazar">Karwan Bazar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary:</label>
                        <input type="number" class="form-control" id="salary" name="salary">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="employmentStatus" class="form-label">Employment Status:</label>
                        <select class="form-control" id="employmentStatus" name="employment_status">
                            <option value="default">Select</option>
                            <option value="part-time">Part-time</option>
                            <option value="full-time">Full-time</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="siteManagerName" class="form-label">Site Manager's Name:</label>
                        <input type="text" class="form-control" id="siteManagerName" name="site_manager_name">
                    </div>
                    <div class="mb-3">
                        <label for="managerContact" class="form-label">Manager's Contact:</label>
                        <input type="number" class="form-control" id="managerContact" name="manager_contact">
                    </div>
                </div>
            </div>

            

            <button type="submit" class="btn btn-primary">Save and Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
