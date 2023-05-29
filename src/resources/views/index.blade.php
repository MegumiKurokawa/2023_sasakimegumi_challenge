@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
@endsection

@section('content')
<main>
    <div class="form-content">
        <div class="form-content__title">
            <h2>お問い合わせ</h2>
        </div>
        <form class="form h-adr" action="/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form-group__title">
                    <span class="form__label">お名前</span>
                    <span class="form__required">※</span>
                </div>
                <div class="form-group__content">
                    <div class="form-group__input">
                        <input type="text" name="lastname" value="{{ old('lastname') }}" />
                        <div class="name__placeholder">
                            例）山田
                        </div>
                        <input type="text" name="firstname" value="{{ old('firstname') }}" />
                        <div class="name__placeholder">
                            例）太郎
                        </div>
                        <div class="form__error">
                            @error('fullname')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form-group__title">
                    <span class="form__label">性別</span>
                    <span class="form__required">※</span>
                </div>
                <div class="form-group__content">
                    <div class="form-group__radio">
                        <input type="radio" name="gender" value="男性" {{ old ('gender') == '男性' ? 'checked' : '' }} checked />男性
                        <input type="radio" name="gender" value="女性" {{ old ('gender') == '女性' ? 'checked' : '' }} />女性
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form-group__title">
                    <span class="form__label">メールアドレス</span>
                    <span class="form__required">※</span>
                </div>
                <div class="form-group__content">
                    <div class="form-group__input">
                        <input type="text" name="email" value="{{ old('email') }}" />
                        <div class="name__placeholder">
                            例）text@example.com
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form-group__title">
                    <span class="form__label">郵便番号</span>
                    <span class="form__required">※</span>
                </div>
                <div class="form-group__content">
                    <div class="form-group__input">
                        <input type="hidden" class="p-country-name" value="Japan">
                        〒<input type="text" class="p-postal-code" name="postcode" value="{{ old('postcode') }}" />
                        <div class="name__placeholder">
                            例）123-4567
                        </div>
                        <div class="form__error">
                            @error('postcode')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form-group__title">
                    <span class="form__label">住所</span>
                    <span class="form__required">※</span>
                </div>
                <div class="form-group__content">
                    <div class="form-group__input">
                        <input type="text" class="p-region p-locality p-street-address" name="address" value="{{ old('address') }}" />
                        <div class="name__placeholder">
                            例）東京都渋谷区千駄ヶ谷1-2-3
                        </div>
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form-group__title">
                    <span class="form__label">建物名</span>
                </div>
                <div class="form-group__content">
                    <div class="form-group__input">
                        <input type="text" name="building" value="{{ old('building') }}" />
                        <div class="name__placeholder">
                            例）千駄ヶ谷マンション101
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form-group__title">
                    <span class="form__label">ご意見</span>
                    <span class="form__required">※</span>
                </div>
                <div class="form-group__content">
                    <div class="form-group__input">
                        <textarea name="opinion" cols="30" rows="10">{{ old('opinion') }}</textarea>
                        <div class="form__error">
                            @error('opinion')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <button class="form__submit-button" type="submit">確認</button>
        </form>
    </div>
</main>
@endsection