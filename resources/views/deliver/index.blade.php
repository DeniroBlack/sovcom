@php /** @var \App\Models\Deliver[] $items */ @endphp

@extends('app')

@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="/">Стоимость доставки</a>
    </li>
@endsection

@section('content')
    <div class="card">
        <div class="card-block table-border-style">
            <h4 class="sub-title clearfix">
                <div class="pull-left pt-2">Список записей</div>
                <div class="pull-right">
                    <a href="{{ route('deliver.create') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Добавление записи</a>
                </div>
            </h4>
            @if($items->isNotEmpty())
                <div class="table-responsive">
                    <table class="table table-hover border-top-0">
                        <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">Название</th>
                            <th class="border-top-0">Пункт отправления</th>
                            <th class="border-top-0">Пункт назначения</th>
                            <th class="border-top-0">Цена</th>
                            <th class="text-right border-top-0">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->point_start }}</td>
                                <td>{{ $item->point_end }}</td>
                                <td>{{ $item->price }} ₽</td>
                                <td class="text-right">
                                    <a href="{{ route('deliver.edit', $item->id) }}" class="btn btn-primary fa fa-pencil" data-toggle="tooltip" title="Редактировать"></a>
                                    <form action="{{ route('deliver.destroy', $item->id) }}" method="post" class="d-inline-block">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <button type="submit" class="btn btn-danger fa fa-trash" data-toggle="tooltip" title="Удалить" onclick="return confirm('Удалить запись?')"></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $items->links() }}
                </div>
            @else
                <div class="text-center">
                    Нет записей
                </div>
            @endif
        </div>
    </div>
@endsection