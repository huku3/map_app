@extends('layouts.main')

@section('title', '店舗情報')

@section('content')
    <h1>店舗情報</h1>

    <form action="{{ route('shops.update', $shop) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="name">店舗名:</label>
            <input type="text" name="name" id="name" value="{{ old("name", $shop->name) }}">
        </div>
        <div>
            <label for="description">詳細:</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ old("description", $shop->description) }}</textarea>
        </div>
        <div>
            <label for="address">住所:</label>
            <input type="text" name="address" id="address" value="{{ old("address", $shop->address) }}">
        </div>
        <div>
            <input type="submit" value="修正">
        </div>
    </form>

    <a href="{{ route('shops.show', $shop) }}">詳細へ戻る</a>
@endsection
