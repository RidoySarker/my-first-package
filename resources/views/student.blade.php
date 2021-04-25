<!DOCTYPE html>
<html>
<head>
    <title>Laravel Package</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        input[type=text], input[type=password] {
            width: 50%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        .center {
            margin: auto;
            width: 50%;


        }
    </style>
</head>
<body>

<h2 class="center">Hello From Package</h2>

<div class="center">



    <form action="{{route('student')}}" method="post">

        @csrf

        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="first_name"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="last_name"><br><br>
        <input type="submit" value="Submit">
    </form>
</div>

<div>
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
        </tr>
        @foreach($student as $value)
            <tr>
                <td>{{$value['first_name']}}</td>
                <td>{{$value['last_name']}}</td>
            </tr>
        @endforeach
    </table>
</div>

</body>
</html>
