<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Child Record</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #007bff, #00aaff); /* Blue gradient background */
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            background: #ffffff; /* White background for the container */
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #0056b3; /* Darker blue for headings */
            margin-bottom: 20px;
            font-size: 28px;
        }

        .fetching-message {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #0056b3; /* Darker blue for table header */
            color: white;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f1f1f1; /* Light gray on hover */
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            th, td {
                padding: 8px;
                font-size: 14px;
            }

            h2 {
                font-size: 24px;
            }
        }

        /* Button Styles */
        .back-button {
            display: inline-block;
            background-color: #007bff; /* Bright blue for button */
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s, transform 0.2s;
            margin-top: 20px;
        }

        .back-button:hover {
            background-color: #0056b3; /* Darker blue on hover */
            transform: translateY(-2px); /* Slight lift effect */
        }

        /* Notification Styles */
        .notification {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        /* Additional Styles */
        .table-container {
            overflow-x: auto; /* Allow horizontal scrolling on small screens */
        }

        /* Alternate Row Colors */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Footer Styles */
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        /* Card Styles for Individual Records */
        .record-card {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .record-card h3 {
            margin: 0 0 10px;
            color: #0056b3; /* Darker blue for card titles */
        }

        .record-card p {
            margin: 5px 0;
        }

        /* Responsive Card Styles */
        @media (max-width: 768px) {
            .record-card {
                padding: 10px;
            }

            .record-card h3 {
                font-size: 18px;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Child Records</h2>
        <div class="fetching-message">Fetching records for: {{ htmlspecialchars($p_name) }}</div>
        <div class="table-container">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>City</th>
                    <th>Birth Date</th>
                    <th>Age</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Vaccine</th>
                    <th>Parent Name</th>
                    <th>Status</th>

                  

                </tr>
                @if($children->count() > 0)
                    @foreach($children as $child)
                        <tr>
                            <td>{{ htmlspecialchars($child->c_name) }}</td>
                            <td>{{ htmlspecialchars($child->c_gender) }}</td>
                            <td>{{ htmlspecialchars($child->c_city) }}</td>
                            <td>{{ htmlspecialchars($child->c_birth) }}</td>
                            <td>{{ htmlspecialchars($child->c_age) }}</td>
                            <td>{{ htmlspecialchars($child->c_weight) }}</td>
                            <td>{{ htmlspecialchars($child->c_height) }}</td>
                            <td>{{ htmlspecialchars($child->c_vaccine) }}</td>
                            <td>{{ htmlspecialchars($child->p_username) }}</td>
                           

                            <td>
                                @if($child->status === 'approved')
                                    Approved
                                @elseif($child->status === 'rejected')
                                    Rejected
                                @else
                                    Pending
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="9">No records found</td></tr>
                @endif
            </table>
        </div>
        <a href="{{ route('parentdashboard') }}" class="back-button">Back to Parent Dashboard</a>
    </div>
</body>
</html>
