@extends('layouts.app')

@section('content')
<div class="container">
    <div class="portfolio container">
        <form action="/" target="_self">
            <button>{{ __('Назад') }}</button>
        </form>
        <div class="column">
        Вы успешно зарезервировали машину!
        </div>
    </div>
</div>
@endsection