<h6>Нижнее меню</h6>
<ul class="list-xxs">
    @foreach($menu->get('menu_footer') as $item)
    <li><a href="{{ $item->link }}">{{ $item->name }}</a></li>
    @endforeach
</ul>