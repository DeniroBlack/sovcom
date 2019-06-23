@php
    $isEdit = !empty($isEdit);
    $item = !empty($item) ? $item : new stdClass();
@endphp

@extends('app')

@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('deliver.index') }}">Стоимость доставки</a>
    </li>
    <li class="breadcrumb-item">
        <a href="#">{{ $isEdit ? 'Редактирование' : 'Добавление' }} записи</a>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="sub-title">{{ $isEdit ? 'Редактирование' : 'Добавление' }} записи</h4>
                    <form method="post" action="{{ $isEdit ? route('deliver.update', $item->id) : route('deliver.store') }}">
                        @csrf
                        @if($isEdit)
                            {{ method_field('PUT') }}
                        @endif
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Название</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" placeholder="Введите название доставки" value="{{ $item->name ?? '' }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Пункт отправки</label>
                            <div class="col-sm-10">
                                <input type="text" name="point_start" class="form-control" placeholder="Введите название пункта отправки" value="{{ $item->point_start ?? '' }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Пункт назначение</label>
                            <div class="col-sm-10">
                                <input type="text" name="point_end" class="form-control" placeholder="Введите название пункта назначения" value="{{ $item->point_end ?? '' }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Тип доставки</label>
                            <div class="col-sm-10">
                                <select name="type" id="type" class="form-control">
                                    <option value="0" {{ isset($item->type) && $item->type == 0 ? 'selected' : '' }}>Внутренний</option>
                                    <option value="1" {{ isset($item->type) && $item->type == 1 ? 'selected' : '' }}>Международный</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Расстояние (км)</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="distance" id="distance" placeholder="Количество километров между пунктами" value="{{ $item->distance ?? '0' }}" required type="number" min="0">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Стоимость</label>
                            <div class="col-sm-10">
                                <span id="cost">{{ $item->price ?? '0' }}</span> ₽
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary js-dynamic-disable m-t-10">{{ $isEdit ? 'Сохранить' : 'Добавить' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function cost() {
            $('#cost').html($('#distance').val() * (parseInt($('#type').val()) ? 5 : 3))
        }
        $('#distance,#type').on('input propertychange', cost).change(cost)
    </script>
@endpush