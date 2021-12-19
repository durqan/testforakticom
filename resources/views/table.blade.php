@extends('head')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Код товара</th>
            <th scope="col">Название</th>
            <th scope="col">Уровень 1</th>
            <th scope="col">Уровень 2</th>
            <th scope="col">Уровень 3</th>
            <th scope="col">Цена</th>
            <th scope="col">ЦенаСП</th>
            <th scope="col">Количество</th>
            <th scope="col">Поля свойств</th>
            <th scope="col">Совместные покупки</th>
            <th scope="col">Единица измерения</th>
            <th scope="col">Картинка</th>
            <th scope="col">Выводить на главной</th>
            <th scope="col">Описание</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $strings)
            <tr>
                @foreach($strings as $string)
                    <td>{{$string}}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
