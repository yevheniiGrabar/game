<!DOCTYPE html>
<html>
<head>
    <title>History</title>
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
            max-width: 600px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f8f9fa;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            display: inline-block;
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
    <h1>History for: {{ $user->username }}</h1>

    <table>
        <thead>
        <tr>
            <th>Random Number</th>
            <th>Result</th>
            <th>Win Amount</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($history as $entry)
            <tr>
                <td>{{ $entry->random_number }}</td>
                <td>{{ $entry->result }}</td>
                <td>${{ number_format($entry->win_amount, 2) }}</td>
                <td>{{ $entry->created_at->format('Y-m-d H:i:s') }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="/page/{{ $user->link }}">Back to Page A</a>
</div>
</body>
</html>
