<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* General Styling */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            position: relative;
        }

        /* Container */
        .container {
            width: 600px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            padding: 40px;
            text-align: center;
            position: relative; /* Required for positioning the Logout button */
        }

        /* Title */
        .container h1 {
            margin: 0 0 30px;
            color: #0056b3;
            font-size: 28px;
            text-transform: uppercase;
        }

        /* Buttons */
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .button-container a {
            display: block;
            padding: 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .button-container a:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        /* Logout Button Outside Container */
        .logout-button {
            position: absolute;
            bottom: 20px; /* Aligned closer to the bottom of the container */
            left: 20px; /* Aligns with the left side of the container */
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 14px;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .logout-button:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <!-- Main Container -->
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="button-container">
            <a href="{{ route('viewrecords') }}">View Records</a>
            <a href="{{ route('viewschedule') }}">View Schedule</a>
            <a href="{{ route('approve.vaccine.index') }}">Approve Vaccines</a>
        </div>
    </div>

    <!-- Logout Button Outside Container -->
    <a href="{{ route('logout') }}" class="logout-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>
