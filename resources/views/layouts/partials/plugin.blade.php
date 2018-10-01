<link rel="stylesheet" href="{{ asset('css/icomoon/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/form_wizard.css') }}">
<form class="steps-basic" action="{{ route('plugin.send') }}">
    <div class="title"></div>
    <fieldset>
        <div class="row">
            <div class="col-md-12">
                <div class="step__name">Укажите в какой тип объекта вы планируете заказать мебель?</div>
                <div class="form-group">
                    <div class="item__type active" data-type="Отель">
                        Отель
                    </div>
                    <div class="item__type" data-type="Гостиница">
                        Гостиница
                    </div>
                    <div class="item__type" data-type="Санаторий">
                        Санаторий
                    </div>
                    <div class="item__type" data-type="Хостел">
                        Хостел
                    </div>
                    <div class="item__type" data-type="Детский лагерь">
                        Детский лагерь
                    </div>
                    <div class="item__type another" data-type="">
                        Другое
                    </div>
                    <input type="hidden" name="type" value="Отель" class="required__field-string" placeholder="Введите тип объекта">
                </div>
            </div>

        </div>
    </fieldset>

    <div class="title"></div>
    <fieldset>
        <div class="row">
            <div class="col-md-12">
                <div class="step__name">Укажите город, в котором находится ваш <span class="type__name"></span>?</div>
                <div class="form-group">
                    <input type="text" name="city" class="required__field-string" placeholder="Введите город">
                </div>
            </div>
        </div>
    </fieldset>

    <div class="title"></div>
    <fieldset>
        <div class="row">
            <div class="col-md-12">
                <div class="step__name">Как можно к вам обращаться?</div>
                <div class="form-group">
                    <input type="text" name="name" class="required__field-string" placeholder="">
                </div>
            </div>
        </div>
    </fieldset>

    <div class="title"></div>
    <fieldset>
        <div class="row">
            <div class="col-md-12">
                <div class="step__name"><span class="name__name"></span>, выберете категории номеров, которые вас интересуют.</div>
                <div class="form-group">
                    <div class="cat__room">
                        <img src="{{ asset('images/cat__rooms/room_hotel_compass-style_1-172x172-16c.png') }}" alt="">
                        <div>Эконом</div>
                        <div class="checkbox"><input type="checkbox" name="cat__rooms[]" value="Эконом"></div>
                    </div>
                    <div class="cat__room">
                        <img src="{{ asset('images/cat__rooms/room_hotel_compass-style_2-172x172-3f7.png') }}" alt="">
                        <div>Стандарт</div>
                        <div class="checkbox"><input type="checkbox" name="cat__rooms[]" value="Стандарт"></div>
                    </div>
                    <div class="cat__room">
                        <img src="{{ asset('images/cat__rooms/room_hotel_compass-style_2-172x172-3f7.png') }}" alt="">
                        <div>Комфорт</div>
                        <div class="checkbox"><input type="checkbox" name="cat__rooms[]" value="Комфорт"></div>
                    </div>
                    <div class="cat__room">
                        <img src="{{ asset('images/cat__rooms/room_hotel_compass-style_4-172x172-3f3.png') }}" alt="">
                        <div>Люкс</div>
                        <div class="checkbox"><input type="checkbox" name="cat__rooms[]" value="Люкс"></div>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>

    <div class="title"></div>
    <fieldset>
        <div class="row">
            <div class="col-md-12">
                <div class="step__name"><span class="name__name"></span>, какое  количество номеров вам необходимо?</div>
                <div class="form-group">
                    <input type="text" name="count" class="required__field" placeholder="" onkeyup="this.value = this.value.replace (/[^0-9+]/, '')" maxlength="3">
                </div>
            </div>
        </div>
    </fieldset>

    <div class="title"></div>
    <fieldset>
        <div class="row">
            <div class="col-md-12">
                <div class="step__name"><span class="name__name"></span>, выберете комплектацию одного номера</div>
                <div class="form-group">
                    <div class="param__box">
                        <label for="param_01">Изголовье к кровати</label>
                        <input type="text" name="param[Изголовье к кровати]" id="param_01">
                    </div>
                    <div class="param__box">
                        <label for="param_02">Кровать  спринг-бокс ‎1600(1800)*2000</label>
                        <input type="text" name="param[Кровать  спринг-бокс ‎1600(1800)*2000]" id="param_02">
                    </div>
                    <div class="param__box">
                        <label for="param_03">Кровать спринг-бокс 900(800)*2000</label>
                        <input type="text" name="param[Кровать спринг-бокс 900(800)*2000]" id="param_03">
                    </div>
                    <div class="param__box">
                        <label for="param_04">Тумба прикроватная</label>
                        <input type="text" name="param[Тумба прикроватная]" id="param_04">
                    </div>
                    <div class="param__box">
                        <label for="param_05">Матрац</label>
                        <input type="text" name="param[Матрац]" id="param_05">
                    </div>
                    <div class="param__box">
                        <label for="param_06">Стол туалетный с местом под минибар</label>
                        <input type="text" name="param[Стол туалетный с местом под минибар]" id="param_06">
                    </div>
                    <div class="param__box">
                        <label for="param_07">Панель к столу туалетному с зеркалом и местом под ТВ</label>
                        <input type="text" name="param[Панель к столу туалетному с зеркалом и местом под ТВ]" id="param_07">
                    </div>
                    <div class="param__box">
                        <label for="param_08">Зеркало к столу туалетному</label>
                        <input type="text" name="param[Зеркало к столу туалетному]" id="param_08">
                    </div>
                    <div class="param__box">
                        <label for="param_09">Зеркало в полный рост</label>
                        <input type="text" name="param[Зеркало в полный рост]" id="param_09">
                    </div>
                    <div class="param__box">
                        <label for="param_10">Шкаф комбинированный для одежды</label>
                        <input type="text" name="param[Шкаф комбинированный для одежды]" id="param_10">
                    </div>
                    <div class="param__box">
                        <label for="param_11">Вешалка(панель с крючками)</label>
                        <input type="text" name="param[Вешалка(панель с крючками)]" id="param_11">
                    </div>
                    <div class="param__box">
                        <label for="param_12">Подчемоданник</label>
                        <input type="text" name="param[Подчемоданник]" id="param_12">
                    </div>
                    <div class="param__box">
                        <label for="param_13">Стул (пуф)</label>
                        <input type="text" name="param[Стул (пуф)]" id="param_13">
                    </div>
                    <div class="param__box">
                        <label for="param_14">Диван (доп место)</label>
                        <input type="text" name="param[Диван (доп место)]" id="param_14">
                    </div>
                    <div class="param__box">
                        <label for="param_15">Кресло (доп место)</label>
                        <input type="text" name="param[Кресло (доп место)]" id="param_15">
                    </div>
                    <div class="param__box">
                        <label for="param_16">Стол журнальный</label>
                        <input type="text" name="param[Стол журнальный]" id="param_16">
                    </div>
                    <div class="param__box">
                        <label for="param_17">Другое</label>
                        <input type="text" name="param[Другое]" id="param_17">
                    </div>
                </div>
            </div>
        </div>
    </fieldset>

    <div class="title"></div>
    <fieldset>
        <div class="row">
            <div class="col-md-12">
                <div class="step__name">Введите Ваш контактный телефон и e-mail</div>
                <div class="form-group">
                    <div class="message"></div>
                    <input type="text" name="phone" class="phone" autocomplete="off" placeholder="Пример: +7 (978) 111-11-11">
                    <input type="email" name="email" class="email" autocomplete="off" placeholder="Пример: info@mebel-compass.com">
                </div>
            </div>
        </div>
    </fieldset>
</form>
<script src="{{ asset('js/steps.min.js') }}" defer></script>
<script src="{{ asset('js/wizard_steps.js') }}" defer></script>