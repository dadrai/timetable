@extends('shablontimetable')

@section('a4')
    class="active"
@endsection

@section('select1')
    <div style="text-align:center">
        <h2>Свяжитесь с нами</h2>
        <p>Вы можете прийти к нам в университет или свзязаться по Email</p>
    </div>
@endsection

@section('table')



        <div class="row">
            <div class="column left">
                <h1>Адреса и телефоны ТГПУ</h1>
                <br></br>
                <p><b>ТОМСКИЙ ГОСУДАРСТВЕННЫЙ ПЕДАГОГИЧЕСКИЙ УНИВЕРСИТЕТ</b></p>
                <p>Адрес: 634061 г. Томск, ул. Киевская, 60. Факс (3822) 311-464</p>
                <p> E-mail: rector@tspu.edu.ru</p>
                <p> <b> Номера телефонов прямого доступа на внутренних абонентов 311-200</b></p>
                <p> Способ дозвона: 311-200 +кнопка (*-tone) +внутренний номер</p>
            </div>
            <div class="column right" >
                <h1>Отправьте нам письмо</h1>


                </form>
                <form action="/action_page.php" class="was-validated">
                    <div class="mb-3 mt-3">
                        <p>Адрес получателя:</p>
                        <p><input type="text" class="form-control" id="email" placeholder="Введите Email" name="email" required>


                        <p><span id="status"></span></p>

                    </div>

                    <div class="mb-3 mt-3">
                        <label for="uname" class="form-label">Ваше ФИО:</label>
                        <input type="text" class="form-control" id="uname" placeholder="Введите ФИО" name="uname" required>
                        <div class="invalid-feedback">Поле ФИО пустое!</div>
                    </div>

                    <label for="sel1" class="form-label">Тема письма:</label>
                    <select class="form-select" id="sel1" name="sellist1">
                        <option >Другое</option>
                        <option >Курсовая работа</option>
                        <option >Задание</option>
                    </select>
                    <p></p>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
                        <label class="form-check-label" for="myCheck">Я согласен на обработку данных</label>

                        <div class="invalid-feedback">Нажмите соглашение</div>
                    </div>

                    <textarea id="subject" name="subject" placeholder="Ваше письмо.." style="height:170px"></textarea>

                    <button type="submit" class="btn btn-primary" input type="button" value="Проверить" onclick="isEmail()">Отправить</button>
                </form>



            </div>
        </div>


@endsection

<script>
    function isEmail() {

        var str = document.getElementById("email").value;
        var status = document.getElementById("status");
        document.getElementById("status").style.color = 'red';
        var re = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
        if (re.test(str)) {status.innerHTML = ""}
        else status.innerHTML = "Адрес неверный";
        if(isEmpty(str)) status.innerHTML = "Поле пустое";
    }
    function isEmpty(str){
        return (str == null) || (str.length == 0);
    }
</script>
