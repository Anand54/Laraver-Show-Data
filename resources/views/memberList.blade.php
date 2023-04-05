<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
    <table class="table table-hover">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </thead>
        <tbody>
            @foreach ($members as $member) 
            {{-- $members from controller --}}
            <tr>
                <td>{{ $member['name'] }}</td>
                <td>{{ $member['email'] }}</td>
                <td>{{ $member['phone'] }}</td>
                <td>{{ $member['address'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
