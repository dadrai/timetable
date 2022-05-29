@extends('shablontimetable')

@section('a1')
    class="active"
@endsection

@section('select1')
    <input list="ShowDataList" class="form-control" placeholder="Выберите номер группы:">

    <datalist id="ShowDataList">
        <option value=491>
        <option value="492">
        <option value="493">
        <option value="3811111">
    </datalist>
@endsection
@section('raspisanie')
    <div  id = "Pon"  class="tabcontent">

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style="width: 10%" scope="col">Время</th>
                <th style= "text-align: center" scope="col">Предмет</th>

            </tr>
            </thead>

            <tbody>
            <tr>
                <th scope="row">8:30 - 10:05</th>
                <td>
                    <p>Ауд. 23</p>
                    <p>Иванов А.Д.</p>
                    <p>Информатика</p>
                </td>


            </tr>
            <tr>
                <th scope="row">10:20 - 11:55</th>
                <td>
                    <p>Ауд. 35</p>
                    <p>Котов Б.А.</p>
                    <p>Информационные системы</p>
                </td>

            </tr>
            <tr>
                <th scope="row">12:25 - 14:00</th>
                <td><p>Ауд. 11</p>
                    <p>Руднов К.А.</p>
                    <p>Программирование</p></td>

            </tr>
            <tr>
                <th scope="row">14:15 - 15:50</th>
                <td> </td>

            </tr>
            <tr>
                <th scope="row">16:05 - 17:40</th>
                <td> </td>

            </tr>
            </tbody>
        </table>

    </div>

    <div id="Vt" class="tabcontent">

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style="width: 10%" scope="col">Время</th>
                <th style= "text-align: center" scope="col">Предмет</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">8:30 - 10:05</th>
                <td>
                </td>


            </tr>
            <tr>
                <th scope="row">10:20 - 11:55</th>
                <td>
                    <p>Ауд. 35</p>
                    <p>Петров Д.Б.</p>
                    <p>Математика</p>
                </td>

            </tr>
            <tr>
                <th scope="row">12:25 - 14:00</th>
                <td><p>Ауд. 11</p>
                    <p>Коломатов О.Д.</p>
                    <p>Программирование</p></td>

            </tr>
            <tr>
                <th scope="row">14:15 - 15:50</th>
                <td> </td>

            </tr>
            <tr>
                <th scope="row">16:05 - 17:40</th>
                <td> </td>

            </tr>

            </tbody>
    </div>

    </table>

    </div>

    <div id="Sr" class="tabcontent">

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style="width: 10%" scope="col">Время</th>
                <th style= "text-align: center" scope="col">Предмет</th>

            </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row">8:30 - 10:05</th>
                <td> </td>
            </tr>
            <tr>
                <th scope="row">10:20 - 11:55</th>
                <td>
                </td>

            </tr>
            <tr>
                <th scope="row">12:25 - 14:00</th>
                <td> </td>

            </tr>
            <tr>
                <th scope="row">14:15 - 15:50</th>
                <td> </td>

            </tr>
            <tr>
                <th scope="row">16:05 - 17:40</th>
                <td> </td>

            </tr>
            </tbody>
    </div>

    </table>

    </div>

    <div id="Cht" class="tabcontent">

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style="width: 10%" scope="col">Время</th>
                <th style= "text-align: center" scope="col">Предмет</th>

            </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row">8:30 - 10:05</th>
                <td> </td>
            </tr>
            <tr>
                <th scope="row">10:20 - 11:55</th>
                <td>
                </td>

            </tr>
            <tr>
                <th scope="row">12:25 - 14:00</th>
                <td> </td>

            </tr>
            <tr>
                <th scope="row">14:15 - 15:50</th>
                <td> </td>

            </tr>
            <tr>
                <th scope="row">16:05 - 17:40</th>
                <td> </td>

            </tr>
            </tbody>
    </div>

    </table>

    </div>

    <div id="Pt" class="tabcontent">

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style="width: 10%" scope="col">Время</th>
                <th style= "text-align: center" scope="col">Предмет</th>

            </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row">8:30 - 10:05</th>
                <td> </td>
            </tr>
            <tr>
                <th scope="row">10:20 - 11:55</th>
                <td>
                </td>

            </tr>
            <tr>
                <th scope="row">12:25 - 14:00</th>
                <td> </td>

            </tr>
            <tr>
                <th scope="row">14:15 - 15:50</th>
                <td> </td>

            </tr>
            <tr>
                <th scope="row">16:05 - 17:40</th>
                <td> </td>

            </tr>
            </tbody>
    </div>

    </table>

    </div>

    <div id="Sb" class="tabcontent">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style="width: 10%" scope="col">Время</th>
                <th style= "text-align: center" scope="col">Предмет</th>

            </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row">8:30 - 10:05</th>
                <td> </td>
            </tr>
            <tr>
                <th scope="row">10:20 - 11:55</th>
                <td>
                </td>

            </tr>
            <tr>
                <th scope="row">12:25 - 14:00</th>
                <td> </td>

            </tr>
            <tr>
                <th scope="row">14:15 - 15:50</th>
                <td> </td>

            </tr>
            <tr>
                <th scope="row">16:05 - 17:40</th>
                <td> </td>

            </tr>
            </tbody>
    </div>

    </table>
    </div>
@endsection
@section('table')

        <div class="tab">


            <button class="tablinks" onclick="openDen(event, 'Pon')"><h3>Понедельник</h3></button>
            <button class="tablinks" onclick="openDen(event, 'Vt')"><h3>Вторник</h3></button>
            <button class="tablinks" onclick="openDen(event, 'Sr')"><h3>Среда</h3></button>
            <button class="tablinks" onclick="openDen(event, 'Cht')"><h3>Четверг</h3></button>
            <button class="tablinks" onclick="openDen(event, 'Pt')"><h3>Пятница</h3></button>
            <button class="tablinks" onclick="openDen(event, 'Sb')"><h3>Суббота</h3></button>
        </div>

        @yield('raspisanie')






    <script>
        function openDen(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
@endsection



