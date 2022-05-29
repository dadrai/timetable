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
    <input list="ShowDataList" class="form-control" placeholder="Выберите преподавателя:">

    <datalist id="ShowDataList">
        <option value="Азимов К.Н.">
        <option value="Громов Н.П.">
        <option value="Иванов В.А.">
        <option value="Ушаков Р.В.">

    </datalist>
@endsection

@section('table')

        <div class="card2">
            <div   class="cardpr">
                <img src="https://cdn1.iconfinder.com/data/icons/professional-avatar-7/140/man__avatar__employee__businessman__professional-512.png" alt="Мария" style="width:100%">
                <h3>Иванова Мария Сергеевна</h3>
                <p class="title">Email: qwerty@mail.ru</p>
                <p>Тел.: 8-991-123-43-23</p>
                <form action="prepod/raspisanie">
                <p><button>Показать Расписание</button></p>
                </form>
            </div>

            <div class="cardpr">
                <img src="https://i.pinimg.com/474x/e8/3c/dc/e83cdc8c031912a22ff15a038b2fd374.jpg" alt="Игорь" style="width:100%">
                <h3>Куертов Игорь Денисович</h3>
                <p class="title">Email: igory@mail.ru</p>
                <p>Тел.: 8-911-323-12-21</p>
                <form action="prepod/raspisanie">
                    <p><button>Показать Расписание</button></p>
                </form>
            </div>

            <div class="cardpr">
                <img src="https://png.pngtree.com/element_our/png/20181124/businessman-vector-icon-png_246587.jpg" alt="Кирилл" style="width:100%">
                <h3>Родиков Кирилл Иванович</h3>
                <p class="title">Email: kirill@mail.ru</p>
                <p>Тел.: 8-945-123-55-26</p>
                <form action="prepod/raspisanie">
                    <p><button>Показать Расписание</button></p>
                </form>
            </div>



        </div>

@endsection
