@extends('layouts.admin')

@section('breadcrumb')
    <li class="active">Почему мы?</li>
@endsection

@section('content')

    <a href="{{ route('admin.why_wes.create') }}" type="button" class="btn bg-primary">
        Добавить
        <i class="icon-stack-plus position-right"></i>
    </a>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr class="border-solid">
                <th>#</th>
                <th>Название</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($whyWes as $whyWe)
                <tr>
                    <td><span class="label label-primary">{{ $loop->iteration }}</span></td>
                    <td>{{ $whyWe->name }}</td>
                    <td>
                        <div>
                            <a href="{{ route('admin.why_wes.edit', $whyWe) }}"><i class="icon-pencil7"></i></a>
                            <form method="POST" action="{{ route('admin.why_wes.destroy', $whyWe) }}" class="form__delete">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="last__btn">
                                    <i class="icon-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection