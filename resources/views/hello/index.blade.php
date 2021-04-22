<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th {
            background-color: #999;
            color: #fff;
            padding: 5px 10;
        }

        td {
            border: solid 1px #aaa;
            color: #999;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item -> name}}</td>
                <td>{{$item -> mail}}</td>
                <td>{{$item -> age}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>