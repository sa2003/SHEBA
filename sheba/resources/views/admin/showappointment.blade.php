<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        /* Custom CSS for center-aligning and adding margin */
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container-scroller {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h2>Free Cabin List</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Serial Number</th>
                <th>Number of Free Cabins</th>
            </tr>
        </thead>
        <tbody>
            <!-- Use PHP or your backend framework to dynamically populate the table rows -->
            <tr>
                <td>1</td>
                <td>30</td> <!-- Example data -->
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    
    <h2>Enter Free Cabins</h2>
    <!-- Form for entering the number of free cabins -->
    <form action="submit.php" method="POST">
        <label for="freeCabins">Enter Free Cabins:</label>
        <input type="number" id="freeCabins" name="freeCabins" required>
        <button type="submit">Submit</button>
    </form>
</body>
<body>
<div class="container-scroller">
    <div class="container">
        <table>
            <tr style="background-color:black;">
                <th style="padding:10px">Patient name</th>
                <th style="padding:10px">Email</th>
                <th style="padding:10px">Mobile</th>
                <th style="padding:10px">Doctor Name</th>
                <th style="padding:10px">Date</th>
                <th style="padding:10px">Time</th>
                <th style="padding:10px">Message</th>
                <th style="padding:10px">Status</th>
                <th colspan="2">Actions</th>
            </tr>
            @foreach($data as $appoint)
                <tr>
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->mobile}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->time}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td>
                        <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="#">Cancel</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>
