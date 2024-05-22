<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"  type="text/javascript"></script>



<link href='fcln/lib/main.css' rel='stylesheet' />
<script src='fcln/lib/main.js'></script>


<style>


    body {
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        padding: 0px;
        background:white;
    }


    .header {
        padding: 30px;
        font-size: 40px;
        text-align: center;
        background: white;
    }





    .card {
        background-color: white;
        padding: 50px 200px;

    }





    .icon-bar {
        width: 100%;
        background-color: #0f1226;
        overflow: auto;
    }


    .icon-bar a {
        float: right;
        width: 15%;
        text-align: center;
        padding: 20px 0;
        transition: all 0.3s ease;
        color: white;
        font-size: 20px;
        text-decoration: none;
    }


    .icon-bar a:hover {
        background-color: #171d54;
    }

    .active {
        background-color: #171d54;
    }

    .tab {

        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;

        border: none;
        outline: none;
        cursor: pointer;
        padding: 20px 14px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #171d54;
        color: white;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #171d54;
        color: white;
    }

    .tab button:disabled{
        padding: 25px 15px;
        background-color: white;
        color: black;
    }
  .tab button:disabled:hover{
      background-color: white;
      color: black;
  }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }

    /* TABLE */

    table {
        border-spacing: 0 10px;
        font-family: 'Open Sans', sans-serif;
        font-weight: bold;
    }

    th {

        vertical-align: middle;

        text-align: center;
        border-top: 2px solid #56433D;
        border-bottom: 2px solid #56433D;
        border-right: 2px solid #56433D;
        border-left: 2px solid #56433D;
    }
    td {
        vertical-align: middle;
        padding: 10px;

        text-align: left;
        border-top: 2px solid #56433D;
        border-bottom: 2px solid #56433D;
        border-right: 2px solid #56433D;
    }
    tr{
        width: 10% ;text-align: center;
    }


    /* TABLE */

    .column {
        float: left;
        padding: 30px;
        height: auto; /* Should be removed. Only for demonstration */
    }

    .left {
        width: 45%;
    }

    .right {
        width: 55%;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }


    /* Style inputs */
    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* Style the container/contact section */
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
    }


    #calendar {
        max-width: 700px;
        margin: 0 auto;
    }


</style>
<head>

    <div class="icon-bar">

        <a @yield('a5') href="{{ route('vhod') }}">Вход</a>
        <a @yield('a4') href="{{ route('kon') }}">Контакты</a>
        <a @yield('a3') href="{{ route('ay') }}">Расписание Аудиторий</a>
        <a @yield('a2') href="{{ route('pr') }}">Расписание Преподователей</a>
        <a @yield('a1') href="{{ route('gr') }}">Расписание Групп</a>
        <a style=" float: left" href="https://www.tspu.edu.ru/"><img src="https://eios.tspu.edu.ru/static/img/logos/logo.png" width="50"
                                                                     height="30"  alt=""></a>

    </div>

</head>
<body>


<div class="card">

@yield('select1')

</div>

<div class="card">

@yield('table')


</div>



</body>
</html>
