
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
            height: 100vh; /* 100% viewport height */
        }

        /* CSS for form layout */
        form {
            max-width: 400px; /* Set maximum width for the form */
            margin: 0 auto; /* Center the form horizontally */
            padding: 20px; /* Add some padding for aesthetics */
            border: 1px solid #ccc; /* Add a border for clarity */
            border-radius: 5px; /* Add rounded corners */
            background-color: #f9f9f9; /* Add a light background color */
        }

        form div {
            margin-bottom: 15px; /* Add margin between form elements */
        }

        form label {
            display: block; /* Display labels as blocks for better alignment */
            margin-bottom: 5px; /* Add some space between labels and inputs */
        }

        form input,
        form select {
            width: 100%; /* Make inputs and select fill the entire width */
            padding: 8px; /* Add padding for better appearance */
            border: 1px solid #ccc; /* Add border for clarity */
            border-radius: 3px; /* Add rounded corners */
            box-sizing: border-box; /* Ensure padding and border are included in the width */
        }

        form input[type="submit"] {
            width: auto; /* Allow the submit button to adjust its width */
            padding: 10px 20px; /* Add padding to the submit button */
            background-color: #4caf50; /* Add a background color */
            color: #fff; /* Set text color to white */
            border: none; /* Remove border */
            border-radius: 3px; /* Add rounded corners */
            cursor: pointer; /* Change cursor to pointer on hover */
        }
    </style>
</head>
<body>
<div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">
        <div class="center-container"> <!-- Wrapper div for centering -->
            <div class="container">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button"class="close" data-dismiss="alert">
                            Medicine Added Successfully
                        </button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ url('addmedicine') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label style="color:black;">Medicine Name</label>
                        <input type="text" style="color:black;" name="name" placeholder="Enter medicine name" required="">
                    </div>
                    <div>
                        <label style="color:black;">Price</label>
                        <input type="number" style="color:black;" name="price" placeholder="Enter price" required="">
                    </div>
                    <div>
                        <label style="color:black;">Type</label>
                        <select name="type" style="color:black;">
                            <option value="Tablet">Tablet</option>
                            <option value="Capsule">Capsule</option>
                            <option value="Syrup">Syrup</option>
                            <option value="Injection">Injection</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div>
                        <label style="color:black;">Image</label>
                        <input type="file" style="color:black;" name="image" required="">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.script')
</body>
</html>
