<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Vaccine Schedule</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('{{ asset('images/schedule.jpeg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 90%;
            max-width: 1000px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #4a90e2;
            color: white;
            font-weight: bold;
            position: sticky;
            top: 0;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        .back-button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Vaccine Schedule</h2>
        <table>
            <tr>
                <th>Child Name</th>
                <th>Parent Username</th>
                <th>Vaccine Name</th>
                <th>Date</th>
                <th>Timing</th>
                <th>Status</th>
            </tr>
            @if($schedules->count() > 0)
                @foreach($schedules as $schedule)
                    <tr>
                        <td>{{ htmlspecialchars($schedule->c_name) }}</td>
                        <td>{{ htmlspecialchars($schedule->p_username) }}</td>
                        <td>{{ htmlspecialchars($schedule->name) }}</td>
                        <td>{{ htmlspecialchars($schedule->v_date) }}</td>
                        <td>{{ htmlspecialchars($schedule->timing) }}</td>
                        <td>{{ htmlspecialchars($schedule->status) }}</td>
                    </tr>
                @endforeach
            @else
                <tr><td colspan="6">No schedules found</td></tr>
            @endif
        </table>
        <a href="{{ route('parentdashboard') }}" class="back-button">Back to Dashboard</a>
    </div>
</body>
</html>
