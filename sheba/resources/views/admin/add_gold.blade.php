<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        /* CSS for centering the form */
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* CSS for form layout */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        form div {
            margin-bottom: 15px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input,
        form select,
        form textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            width: auto;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
    <!-- Additional CSS styles can be added here -->
</head>
<body>
    <div class="container-scroller">
        <!-- Include sidebar and navbar -->
        @include('admin.sidebar')
        @include('admin.navbar')

        <!-- Main content -->
        <div class="container-fluid page-body-wrapper">
            <div class="center-container">
                <div class="container">
                    <!-- Form for adding gold membership type -->
                    <form action="{{ url('upload_gold') }}" method="POST">
                        @csrf
                        <div>
                            <label>Membership Type</label>
                            <input type="Membership" name="Membership" placeholder="Enter membership type" required>
                        </div>
                        <div>
                            <label>Description</label>
                            <input type="text" name="description" placeholder="Enter membership description" required></textarea>
                        </div>
                        <div>
                            <label>Price</label>
                            <input type="text" name="Price" placeholder="Enter membership price" required>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-success" value="Add Membership">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Include scripts -->
    @include('admin.script')
</body>
</html>
