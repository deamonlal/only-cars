@extends('layouts.app')

@section('content')
<div class="container">
    <div class="presentation container">
        <h2>Выбор автомобиля</h2>
        <p>Выберите дату на которую вам необходимо забронировать автомобиль</p>
    </div>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <form action="/validator" target="_self">
        <div class="datapicker">
            <div class="form-group">
                <div class='input-group date' id='datetimepicker'>
                    <input id="date" type='text' class="form-control @error('date') is-invalid @enderror" name="date"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
				<div class="row">
					<p>Фильтрация по уровню комфорта: <input type="number" name="grade" /> </p>
					<p>Фильтрация по названию модели: <input type="text" name="model"/> </p>
				</div>
            </div>
        </div>

        <button type="submit">{{ __('Перейти к доступным машинам') }}</button>
    </form>
    
</div>
@endsection