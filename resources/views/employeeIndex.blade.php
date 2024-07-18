<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employees</h1>
    <ul>
        @foreach ($employees as $employee)
            <li>{{ $employee->name }} - {{ $employee->address }} - {{ $employee->phone }}</li>
        @endforeach
    </ul>
</body>
</html>