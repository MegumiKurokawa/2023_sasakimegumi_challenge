@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/management.css') }}">
@endsection

@section('content')
<div class="management-content">
    <div class="management-content__title">
        <h2>管理システム</h2>
    </div>
    <div class="management-content__content">
        <form class="form" action="/managements" method="get">
            @csrf
            <div class="form-item">
                <div class="form-title">お客様</div>
                <input type="text" name="fullname" class="form-item__input">
            </div>
            <div class="form-item">
                <div class="form-title">性別</div>
                <input type="radio" class="form-item__radio" name="all" value="全て" checked>全て
                <input type="radio" class="form-item__radio" name="male" value="男性">男性
                <input type="radio" class="form-item__radio" name="female" value="女性">女性
            </div>
            <div class="form-item">
                <div class="form-title">登録日</div>
                <input type="text" name="created_at" class="form-item__input">-<input type="text" name="created_at" class="form-item__input">
            </div>
            <div class="form-item">
                <div class="form-title">メールアドレス</div>
                <input type="text" name="email" class="form-item__input">
            </div>
        </form>
        <div class="management-button">
            <button class="management__search-button" type="submit">検索</button><br>
            <a href="/managements" class="management__reset-button">リセット</a>
        </div>
    </div>
</div>
<div class="managementr_category">
    <p class="paginate">{{ $managements->links() }}</p>
    <div class="category-table">
        <div class="category-table__table">
            <tr class="category-table__row">
                <th class="category-table__header">
                    <span class="category-table__header-span">ID</span>
                    <span class="category-table__header-span">お名前</span>
                    <span class="category-table__header-span">性別</span>
                    <span class="category-table__header-span">メールアドレス</span>
                    <span class="category-table__header-span">ご意見</span>
                </th>
            </tr>
            @foreach ($managements as $management)
            <tr class="category-table__row">
                <td class="category-table__item">
                    <form class="update-form">
                        <div class="update-form__item">
                            <input class="update-form__item-input" type="text">
                        </div>
                    </form>
                </td>
                <td class="category-table__item">
                    <form class="delete-form">
                        <div class="delete-form__button">
                            <button class="delete-form__button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection