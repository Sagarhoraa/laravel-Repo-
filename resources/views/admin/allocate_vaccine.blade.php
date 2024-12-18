<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allocate Vaccine</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e0f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            transition: transform 0.3s;
        }
        .container:hover {
            transform: translateY(-5px);
        }
        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        .alert {
            color: green;
            margin-bottom: 15px;
            text-align: center;
        }
        form div {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="date"]:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Allocate Vaccine</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('vaccine.allocate') }}" method="POST">
            @csrf
            <div>
                <label for="c_name">Child Name:</label>
                <input type="text" id="c_name" name="c_name" required>
            </div>
            <div>
                <label for="p_username">Parent Username:</label>
                <input type="text" id="p_username" name="p_username" required>
            </div>
            <div>
                <label for="name">Vaccine Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="v_date">Vaccine Date:</label>
                <input type="date" id="v_date" name="v_date" required>
            </div>

            <button type="submit">Allocate Vaccine</button>
        </form>
    </div>
</body>
</html>