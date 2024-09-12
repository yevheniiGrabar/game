<!DOCTYPE html>
<html>
<head>
    <title>Lucky Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
            color: #555;
            margin: 10px 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: #007bff;
            background-color: #e9ecef;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #d6d6d6;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Result for: {{$user->username}}</h1>

    <p>Random Number: {{ $randomNumber }}</p>
    <p>Result: {{ $result }}</p>
    <p>Win Amount: {{ $winAmount }}</p>

    <a href="/page/{{ $user->link }}">Back to Page A</a>
</div>
</body>
</html>
