<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        img {
            width: auto;
            height: 90px;
            background: #222222 !important;
            padding: 10px 20px !important;
            border-radius: 10px !important;
        }
    </style>
</head>
<body>
<img src="https://sokacademy.themetafounders.com/images/Logo.png">
<h2>New Mail Come From Your Site:</h2>
<table>
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Name:</td>
        <td>{{$data['first_name']}}</td>
    </tr>
    <tr>
        <td>Phone No:</td>
        <td>{{$data['phone']}}</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>{{$data['email']}}</td>
    </tr>
    <tr>
        <td>Message:</td>
        <td>{{$data['message']}}</td>
    </tr>
</table>
</body>
</html>
