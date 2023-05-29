@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<main>
    <div class="thanks-content">
        <div class="thanks-content__inner">
            <p>ご意見いただきありがとうございました。</p>
            <button class="thanks-back__button">トップページへ</button>
        </div>
    </div>
</main>
@endsection