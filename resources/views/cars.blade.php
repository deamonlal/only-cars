@extends('layouts.app')

@section('content')
<div class="container">
    <div class="portfolio container">
        <form action="/" target="_self">
            <button>{{ __('Назад') }}</button>
        </form>
        <div class="column">

            @if ($cars)
            @foreach ($cars as $car)
            <div class="work span10">
                <div class="span__row">
                    <div class="car-img center">
                        <img src="{{$car->photo}}" alt="car photo">
                    </div>
                    <div class="row__info center">
                        <h4><u>{{$car->model}}</u></h3>
                            Your driver is  <big><b>{{$car->driver}}</b></big>
                            <p>Comfort level - {{$car->grade}}</p>
                    </div>
                    <form action="/reserve" target="_self" class="center" method="get">
                        <div class="row__info center">
                            <input type="submit"  value="{{ __('Забронировать автомобиль') }}" />
                            <input type="hidden" name="date" value="{{request()->date}}">
                            <input type="hidden" name="car_id" value="{{$car->id}}">
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</div>
@endsection