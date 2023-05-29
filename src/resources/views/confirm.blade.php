@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<main>
    <div class="confirm-content">
        <div class="confirm-content__inner">
            <h2>内容確認</h2>
        </div>
        <form class="form" action="/contacts" method="post">
            @csrf
            <table class="confirm-table">
                <div class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__title">お名前</th>
                        <td class="confirm-table__item">
                            <input type="text" name="fullname" value="{{ $contact['lastname'] }}" readonly />
                            <input type="text" name="fullname" value="{{ $contact['firstname'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__title">性別</th>
                        <td class="confirm-table__item">
                            <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__title">メールアドレス</th>
                        <td class="confirm-table__item">
                            <input type="text" name="email" value=" {{ $contact['email'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__title">郵便番号</th>
                        <td class="confirm-table__item">
                            <input type="text" name="postcode" value="{{ $contact['postcode'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__title">住所</th>
                        <td class="confirm-table__item">
                            <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__title">建物名</th>
                        <td class="confirm-table__item">
                            <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__title">ご意見</th>
                        <td class="confirm-table__item">
                            <input type="text" name="opinion" value="{{ $contact['opinion'] }}" readonly />
                        </td>
                    </tr>
                </div>
            </table>
            <div class="confirm-button">
                <button class="confirm-submit__button" type="submit">送信</button><br>
                <a href="/" class="confirm-modify__button">修正する</a>
            </div>
        </form>
    </div>
</main>
@endsection