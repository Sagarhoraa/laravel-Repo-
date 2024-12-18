<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Child</title>
    <style>
        /* Body Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #007bff, #00aaff);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Form Container */
        .form-container {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            max-width: 900px;
            width: 100%;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            box-sizing: border-box;
        }

        /* Heading Styles */
        h2 {
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
            color: #007bff;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Input Wrapper */
        .input-group {
            display: flex;
            align-items: center;
            width: calc(50% - 15px);
        }

        /* Label Styles */
        label {
            flex: 0 0 35%;
            font-size: 14px;
            font-weight: bold;
            color: #444;
            margin-bottom: 5px;
        }

        /* Input and Select Styles */
        input, select {
            flex: 1;
            padding: 8px 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            transition: all 0.3s;
        }

        input:focus, select:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        /* Button Styles */
        .submit-group {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        input[type="submit"] {
            padding: 12px 20px;
            background-color: #28a745;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            text-transform: uppercase;
            transition: all 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        /* Back Button Styles */
        .back-button {
            text-align: center;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            text-transform: uppercase;
            width: 100%;
            display: block;
            margin-top: 10px;
        }

        .back-button:hover {
            background-color: #0056b3;
            box-shadow: 0 5px 15px rgba(0, 91, 179, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .input-group {
                width: 100%;
            }

            label {
                flex: 0 0 40%;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        @if ($errors->any())
        <div class="notification" style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <h2>Add Child</h2>

        @if(session('success'))
            <div class="notification">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('add.child') }}" style="width: 100%; display: flex; flex-wrap: wrap; gap: 15px;">
            @csrf
            <div class="input-group">
                <label for="c_name">Name:</label>
                <input type="text" id="c_name" name="c_name" required>
            </div>

            <div class="input-group">
                <label for="c_gender">Gender:</label>
                <select id="c_gender" name="c_gender" required>
                    <option value="">Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="input-group">
                <label for="c_city">City:</label>
                <input type="text" id="c_city" name="c_city" required>
            </div>

            <div class="input-group">
                <label for="c_birth">Birth Date:</label>
                <input type="date" id="c_birth" name="c_birth" required>
            </div>

            <div class="input-group">
                <label for="c_age">Age:</label>
                <input type="number" id="c_age" name="c_age" required>
            </div>

            <div class="input-group">
                <label for="c_weight">Weight (kg):</label>
                <input type="number" id="c_weight" name="c_weight" required>
            </div>

            <div class="input-group">
                <label for="c_height">Height (cm):</label>
                <input type="number" id="c_height" name="c_height" required>
            </div>

            <div class="input-group">
                <label for="c_vaccine">Vaccine:</label>
                <select id="c_vaccine" name="c_vaccine" required>
                    <option value="">Select a vaccine</option>
                    <option value="Hepatitis B">Hepatitis B</option>
                    <option value="BCG">BCG</option>
                    <option value="Polio">Polio</option>
                    <option value="DTP">DTP</option>
                </select>
            </div>

            <div class="input-group">
                <label for="p_username">Parent Username:</label>
                <input type="text" id="p_username" name="p_username" required>
            </div>

            <div class="input-group">
                <label for="p_email">Parent Email:</label>
                <input type="email" id="p_email" name="p_email" required>
            </div>

            <div class="submit-group">
                <input type="submit" value="Add Child">
            </div>
        </form>

        <a href="{{ route('parentdashboard') }}" class="back-button">Back to Parent Dashboard</a>
    </div>
</body>
</html>
