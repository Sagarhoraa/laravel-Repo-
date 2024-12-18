<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Child Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 80%;
            max-width: 800px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .success {
            background-color: #e8f5e9;
            color: #2e7d32;
        }
        .error {
            background-color: #ffebee;
            color: #c62828;
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Child Records</h2>
        
        @if(session('success'))
            <div class="message success">{{ session('success') }}</div>
        @endif
        
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
                <th>Parent Username</th>
                <th>Action</th>
            </tr>
            @if($children->isNotEmpty())
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
                            <form action="{{ route('children.destroy', $child->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr><td colspan="10">No records found</td></tr>
            @endif
        </table>
        
        <a href="{{ route('admin.admin_dashboard') }}" class="back-button">Back to Dashboard</a>
    </div>
</body>
</html>