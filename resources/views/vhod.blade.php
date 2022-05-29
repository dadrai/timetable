
@extends('shablontimetable')

@section('a5')
    class="active"
@endsection

@section('select1')
    <h3 style="text-align: center"><b>Вход</b></h3>
@endsection

@section('table')
    <div style="padding: 0px 200px;" class="container mt-3">



        <form action="/action_page.php" class="was-validated">
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Логин:</label>
                <input type="text" class="form-control" id="uname" placeholder="Введите ваш логин" name="uname" required>

                <div class="invalid-feedback">Поле пустое!</div>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Пароль:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Введите ваш пароль" name="pswd" required>

                <div class="invalid-feedback">Поле пустое!</div>
            </div>

            <label for="sel1" class="form-label">Войти как:</label>
            <select class="form-select" id="sel1" name="sellist1">
                <option >Студент</option>
                <option >Преподаватель</option>
                <option >Администратор</option>
                <option >Менеджер</option>
            </select>
            <p></p>

            <button type="submit" class="btn btn-primary">Войти</button>
        </form>
    </div>
@endsection
