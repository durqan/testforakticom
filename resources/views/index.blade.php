@extends('head')

@section('content')
    <div id ="html">
        <div class="input-group mb-3" style="width: 40%; margin: 30px auto">
            <input type="file" class="form-control" id="inputGroupFile02">
            <input class="btn btn-primary" id="download" type="submit" value="Загрузить">
        </div>
        <div id="result" style="width: 40%; margin: 30px auto">

        </div>
    </div>
@endsection
