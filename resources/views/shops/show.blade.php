@extends('layouts.main')

@section('title', '店舗情報登録')

@section('content')
    <h1>店舗情報登録</h1>

    <form action="{{ route('shops.store') }}" method="post">
        @csrf
        <div>
            <label for="name">店舗名:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">

        </div>
        <div>
            <label for="description">詳細:</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
        </div>
        <div>
            <label for="address">住所:</label>
            <input type="text" name="address" id="address" value="{{ old('address') }}">
        </div>
        <div id="map" style="height: 50vh;"></div>
        <div>
            <input type="submit" value="登録">
        </div>
    </form>

    <button type="button" onclick="location.href='{{ route('shops.index') }}'">一覧へ戻る</button>
@endsection

@section('script')
    @include('partial.map')
    <script>
        let clicked;
        map.on('click', function(e) {
            if (clicked !== true) {
                clicked = true;
                L.marker([e.latlng['lat'], e.latlng['lng']]).addTo(map);
            }
        });
    </script>
@endsection 
