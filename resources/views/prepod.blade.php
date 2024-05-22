@extends('shablontimetable')

@section('a2')
    class="active"
@endsection

<style>
    /*Карточка профиля*/
    .cardpr {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 250px;
        display: inline-block;
        margin: left;
        width:30%;
        text-align: center;
        font-family: arial;
        margin: 10px;

    }
    .card2 {
        background-color: white;
        display: inline-block;

    }

    .title {
        color: grey;
        font-size: 18px;
    }

    .cardpr button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #0f1226;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;

    }


    .cardpr button:hover, a:hover {
        opacity: 0.7;
        background-color:#171d54;
    }

</style>

@section('select1')
    <div class="form-group">

        <select class="form-control" id ="prepodselect" onchange="window.location.href = this.options[this.selectedIndex].value">
            <option value="">Выберите преподавателя:</option>
            @foreach($sh_pr as $sh_pr)

                <option value="{{route('pr_show', $sh_pr->Преподаватель)}}">{{$sh_pr->Преподаватель}}</option>
            @endforeach
        </select>
    </div>
@endsection

@section('table')

        <div class="card2">

            @foreach($prepods as $prepods)
            <div   class="cardpr">
                <img src="https://us.123rf.com/450wm/feelisgood/feelisgood1709/feelisgood170900745/85757402-flat-user-icon-member-sign-avatar-button-quick-and-easy-recolorable-shape-isolated-from-background-v.jpg?ver=6"
                     alt="Преподаватель" style="width:100%">
                <h3>{{$prepods->Фамилия}} {{$prepods->Имя}} {{$prepods->Отчество}}</h3>
                <p class="title">Email: qwerty@mail.ru</p>
                <p>Тел.: 8-991-123-43-23</p>
                <form action="{{route('rasp_pr', $prepods->Преподаватель)}}">
                <p><button>Показать Расписание</button></p>
                </form>
            </div>
            @endforeach

        </div>

@endsection
