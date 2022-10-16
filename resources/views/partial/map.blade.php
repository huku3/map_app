{{-- Leaflet用のCSSとJavaScriptを読み込み --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
    integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
    crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
    integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
    crossorigin=""></script>

<script>
    // 地図描画エリアを作成
    const map = L.map('map');

    // 中心座標とzoomを指定
    map.setView([{{ $latitude }}, {{ $longitude }}], {{ $zoom }});

    // 表示するタイルを指定
    L.tileLayer('http://tile.openstreetmap.jp/{z}/{x}/{y}.png').addTo(map);
</script>
