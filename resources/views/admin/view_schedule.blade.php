<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Vaccine Schedule</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
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
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            padding: 50px;
            width: 90%;
            max-width: 1100px;
            transition: transform 0.3s;
        }
        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 40px;
            font-size: 32px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        th, td {
            padding: 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: #fff;
            font-size: 18px;
        }
        tr:hover {
            background-color: #f1f1f1;
            transform: scale(1.03);
            transition: transform 0.2s;
        }
        .dashboard-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s, transform 0.3s;
            font-size: 18px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .dashboard-button:hover {
            background-color: #0056b3;
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Vaccine Schedule</h2>
        <table>
            <thead>
                <tr>
                    <th>Child Name</th>
                    <th>Parent Username</th>
                    <th>Vaccine Name</th>
                    <th>Date</th>
                    <th>Timing</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add your dynamic rows here -->
            </tbody>
        </table>
        <a href="{{ route('admindashboard') }}" class="dashboard-button">Back to Admin Dashboard</a>
    </div>
</body>
</html>