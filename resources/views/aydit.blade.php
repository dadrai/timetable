
@extends('shablontimetable')
@section('a3')
    class="active"
@endsection

@section('select1')
    <div class="form-group">

        <select class="form-control" id ="auditselect" onchange="window.location.href = this.options[this.selectedIndex].value">
            <option value="">Выберите аудиторию:</option>
            @foreach($audits as $audits)

                <option value="{{route('ay_show',$audits->Аудитория )}}">{{$audits->Аудитория}}</option>
            @endforeach
        </select>
    </div>
@endsection

@section('raspisanie')
    <div  id = "Pon"  class="tabcontent">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 10% ;text-align: center" scope="col">Время</th>
                <th style= "text-align: center" scope="col">Предмет</th>


            </tr>
            </thead>
            @foreach($pon as $time)


                <tbody>

                <tr>
                    <th scope="row"> <p>{{$time->ВремяС}} - {{$time->ВремяПо}}</p>

                    </th>

                    <td>
                        <p>Гр. {{$time->Группа}}</p>
                        <p>{{$time->Преподаватель}}</p>
                        <p>{{$time->Дисциплина}}</p>
                        <p>{{$time->Аудитория}}</p>
                    </td>
                </tr>

                </tbody>

            @endforeach
        </table>
    </div>


    <div  id = "Vt"  class="tabcontent">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 10%" scope="col">Время</th>
                <th style= "text-align: center" scope="col">Предмет</th>


            </tr>
            </thead>
            @foreach($vt as $time)


                <tbody>

                <tr>
                    <th scope="row"> <p>{{$time->ВремяС}} - {{$time->ВремяПо}}</p>

                    </th>

                    <td>
                        <p>Гр. {{$time->Группа}}</p>
                        <p>{{$time->Преподаватель}}</p>
                        <p>{{$time->Дисциплина}}</p>
                        <p>{{$time->Аудитория}}</p>
                    </td>
                </tr>

                </tbody>

            @endforeach
        </table>
    </div>


    <div  id = "Sr"  class="tabcontent">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 10%" scope="col">Время</th>
                <th style= "text-align: center" scope="col">Предмет</th>


            </tr>
            </thead>
            @foreach($sr as $time)


                <tbody>

                <tr>
                    <th scope="row"> <p>{{$time->ВремяС}} - {{$time->ВремяПо}}</p>

                    </th>

                    <td>
                        <p>Гр. {{$time->Группа}}</p>
                        <p>{{$time->Преподаватель}}</p>
                        <p>{{$time->Дисциплина}}</p>
                        <p>{{$time->Аудитория}}</p>
                    </td>
                </tr>

                </tbody>

            @endforeach
        </table>
    </div>


    <div  id = "Cht"  class="tabcontent">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 10%" scope="col">Время</th>
                <th style= "text-align: center" scope="col">Предмет</th>


            </tr>
            </thead>
            @foreach($cht as $time)


                <tbody>

                <tr>
                    <th scope="row"> <p>{{$time->ВремяС}} - {{$time->ВремяПо}}</p>

                    </th>

                    <td>
                        <p>Гр. {{$time->Группа}}</p>
                        <p>{{$time->Преподаватель}}</p>
                        <p>{{$time->Дисциплина}}</p>
                        <p>{{$time->Аудитория}}</p>
                    </td>
                </tr>

                </tbody>

            @endforeach
        </table>
    </div>


    <div  id = "Pt"  class="tabcontent">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 10%" scope="col">Время</th>
                <th style= "text-align: center" scope="col">Предмет</th>


            </tr>
            </thead>
            @foreach($pt as $time)


                <tbody>

                <tr>
                    <th scope="row"> <p>{{$time->ВремяС}} - {{$time->ВремяПо}}</p>

                    </th>

                    <td>
                        <p>Гр. {{$time->Группа}}</p>
                        <p>{{$time->Преподаватель}}</p>
                        <p>{{$time->Дисциплина}}</p>
                        <p>{{$time->Аудитория}}</p>
                    </td>
                </tr>

                </tbody>

            @endforeach
        </table>
    </div>


    <div  id = "Sb"  class="tabcontent">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 10%" scope="col">Время</th>
                <th style= "text-align: center" scope="col">Предмет</th>


            </tr>
            </thead>
            @foreach($sb as $time)


                <tbody>

                <tr>
                    <th scope="row"> <p>{{$time->ВремяС}} - {{$time->ВремяПо}}</p>

                    </th>

                    <td>
                        <p>Гр. {{$time->Группа}}</p>
                        <p>{{$time->Преподаватель}}</p>
                        <p>{{$time->Дисциплина}}</p>
                        <p>{{$time->Аудитория}}</p>
                    </td>
                </tr>

                </tbody>

            @endforeach
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

        <button style=" float: right" disabled>Неделя №: {{$week}}</button>
        <button style="float: right; width: 5%" ><h3>></h3> </button>
        <button style=" float: right; width: 5%" href="{{route('show',$week)}}" method="timetable"><h3><</h3></button>

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
