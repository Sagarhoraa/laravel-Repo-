<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #4a90e2, #9013fe);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            position: relative;
        }
        h1 {
            margin-bottom: 30px;
            color: #333;
        }
        .link-container {
            margin-bottom: 20px;
        }
        .link-container a {
            display: inline-block;
            padding: 15px 25px; /* Regular size for buttons */
            border-radius: 10px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .link-container a:hover {
            transform: translateY(-3px);
        }
        #add {
            background-color: #5cb85c; /* Green */
        }
        #add:hover {
            background-color: #4cae4c;
        }
        #view-report {
            background-color: #f0ad4e; /* Yellow */
        }
        #view-report:hover {
            background-color: #ec971f;
        }
        #schedule {
            background-color: #d9534f; /* Red */
        }
        #schedule:hover {
            background-color: #c9302c;
        }
        .logout-button {
            background-color: #5bc0de; /* Light Blue */
            color: #ffffff;
            padding: 8px 15px; /* Smaller size for logout button */
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border: none;
            font-size: 14px; /* Smaller font size */
            font-weight: bold;
            position: absolute; /* Positioning it at the bottom left */
            bottom: 20px;
            left: 20px;
        }
        .logout-button:hover {
            background-color: #31b0d5;
        }
        @media (max-width: 480px) {
            .container {
                width: 90%;
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Parent Dashboard</h1>
        <div class="link-container">
            <a href="{{ route('addchild') }}" id="add">Enter Child Details</a>
        </div>
        <div class="link-container">
            <a href="{{ route('viewrecord') }}" id="view-report">View Your Child Report</a>
        </div>
        <div class="link-container">
            <a href="{{ route('viewschedule') }}" id="schedule">View Your Schedule</a>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>
</body>
</html>