<p>Тип объекта: {{ $data['type'] }}</p>
<p>Город: {{ $data['city'] }}</p>
<p>Имя: {{ $data['name'] }}</p>
@if (count($data['cat__rooms']))
    <p>Категории номеров:</p>
    <ol>
    @foreach ($data['cat__rooms'] as $room)
        <li>{{ $room }}</li>
    @endforeach
    </ol>
@endif
<p>Количество номеров: {{ $data['count'] }}</p>
@if (count($data['param']))
    <p>Комплектация одного номера:</p>
    <ul>
        @foreach ($data['param'] as $key => $value)
            @if ($value)
                <li>{{ $key }}:{{ $value }}</li>
            @endif
        @endforeach
    </ul>
@endif
<p>Телефон: {{ $data['phone'] }}</p>
<p>E-mail: {{ $data['email'] }}</p>