<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Approval - Vaccine Requests</title>
    <style>
       body {
            font-family: 'Arial', sans-serif;
            background-color: #f4faff;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }

        .notification.success {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #007BFF;
            color: white;
        }

        table td {
            background-color: #fff;
        }

        .approve, .reject {
            background-color: #007BFF;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        .approve:hover {
            background-color: #0056b3;
        }

        .reject {
            background-color: #e74c3c;
        }

        .reject:hover {
            background-color: #c0392b;
        }

        .dashboard-button {
            display: inline-block;
            background-color: #007BFF;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .dashboard-button:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .container {
                width: 95%;
            }

            table th, table td {
                padding: 8px;
            }

            .approve, .reject, .dashboard-button {
                font-size: 14px;
                padding: 6px 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pending Vaccine Requests</h2>
        @if(session('success'))
            <div class="notification success">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Child Name</th>
                    <th>Vaccine</th>
                    <th>Parent Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($children as $child)
                    <tr>
                        <td>{{ $child->id }}</td>
                        <td>{{ $child->c_name }}</td>
                        <td>{{ $child->c_vaccine }}</td>
                        <td>{{ $child->p_email }}</td>
                        <td>
                            <form method="POST" action="{{ route('approve.vaccine') }}" style="display:inline;">
                                @csrf
                                <input type="hidden" name="child_name" value="{{ $child->c_name }}">
                                <button type="submit" class="approve">Approve</button>
                            </form>
                            <form method="POST" action="{{ route('reject.vaccine') }}" style="display:inline;">
                                @csrf
                                <input type="hidden" name="child_name" value="{{ $child->c_name }}">
                                <button type="submit" class="reject">Reject</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('admindashboard') }}" class="dashboard-button">Back to Admin Dashboard</a>
    </div>
</body>
</html>