<!-- お問い合わせ確認 -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Contfirm</h2>
    </div>
</div>
<form class="form" action="/contacts/thanks" method="post">
    @csrf
    <div class="confirm-table">
        <table class="confirm-table__inner">
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お名前</th>
                <td class="confirm-table__text text__name">
                    <input class="name" type="text" name="last-name" value="{{ $contact['last-name'] }}" readonly />
                    <input class="name" type="text" name="first-name" value="{{ $contact['first-name'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">性別</th>
                <td class="confirm-table__text">
                    <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">メールアドレス</th>
                <td class="confirm-table__text">
                    <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">電話番号</th>
                <td class="confirm-table__text text__tel">
                    <input class="tel" type="tel" name="tel1" value="{{ $contact['tel1'] }}" readonly />
                    <input class="tel" type="tel" name="tel2" value="{{ $contact['tel2'] }}" readonly />
                    <input class="tel" type="tel" name="tel3" value="{{ $contact['tel3'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">住所</th>
                <td class="confirm-table__text">
                    <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">建物名</th>
                <td class="confirm-table__text">
                    <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お問い合わせの種類</th>
                <td class="confirm-table__text">
                    <input type="select" name="content" value="{{ $contact['detail'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お問い合わせ内容</th>
                <td class="confirm-table__text">
                    <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                </td>
            </tr>
        </table>
    </div>
    <div class="form__button">
        <button class="form__button-submit button1" type="submit">送信</button>
        <button class="form__button-submit  button2" type="submit">修正</button>
    </div>
</form>
</main>