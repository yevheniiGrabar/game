<!DOCTYPE html>
<html>
<head>
    <title>Page A</title>
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
            margin-bottom: 20px;
        }
        form {
            margin: 10px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:nth-of-type(1) {
            background-color: #28a745;
        }
        button:nth-of-type(1):hover {
            background-color: #218838;
        }
        button:nth-of-type(2) {
            background-color: #dc3545;
        }
        button:nth-of-type(2):hover {
            background-color: #c82333;
        }
        button:nth-of-type(3) {
            background-color: #007bff;
        }
        button:nth-of-type(3):hover {
            background-color: #0056b3;
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
    <h1>Welcome, {{ $user->username }}</h1>

    <form action="/page/{{ $user->link }}/generate-link" method="POST">
        @csrf
        <button type="submit">Generate New Link</button>
    </form>

    <form action="/page/{{ $user->link }}/deactivate" method="POST">
        @csrf
        <button type="submit">Deactivate Link</button>
    </form>

    <form action="/page/{{ $user->link }}/feeling-lucky" method="POST">
        @csrf
        <button type="submit">I'm Feeling Lucky</button>
    </form>

    <a href="/page/{{ $user->link }}/history">History</a>
</div>
</body>
</html>
