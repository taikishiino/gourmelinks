@extends('layouts.app')
@section('content')
    <h1>TOP</h1><a href="{{ url('/reporters') }}">ユーザーtopへ</a>｜<a href="{{ url('/gourmets') }}">グルメ一覧へ</a>
    <div id="contentWrapper">
        <section id="sidebar">
            <div class="sidebarWarapper">
                <div class="image is-square">
                    <img src="{{ asset('img/sample.png') }}" alt="" class="adsense">
                </div>
                <div>
                    <h2 class="headerTitle headerSeparator">カテゴリー</h2>
                    @for($i=0; $i<10; $i++)
                        <div class="category_item">
                            <a href="{{ url('/gourmets') }}" class="">{カテゴリー}</a>
                        </div>
                    @endfor
                </div>
                <!-- /# -->
                <div>
                    <h2 class="headerTitle headerSeparator">エリアから探す</h2>
                    @for($i=0; $i<10; $i++)
                        <div class="category_item">
                            <a href="{{ url('/gourmets') }}" class="">都道府県({{ rand(1, 100) }})</a>
                        </div>
                    @endfor
                </div>
                <!-- /. -->
            </div>
            <!-- /.sidebarWarapper -->
        </section>
        <!-- /#sidebar -->
        <section id="main">
            <div class="mainWarapper">
                <div id="idxPopularItem">
                    <h2 class="headerTitle headerSeparator">人気グルメ</h2>
                    @foreach($gourmets as $gourmet)
                        <div class="popularItem">
                            <a href="{{ url('/gourmets') }}">
                                <img src="{{ asset('img/sample.png') }}" alt="">
                                <p>{{ $gourmet->gourmet_name }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- /.idxPopularItem -->
                <div id="areaSearch">
                    <h2 class="headerTitle headerSeparator">人気エリア</h2>
                    @for($i=0; $i<47; $i++)
                        <a href="{{ url('/gourmets') }}" class="areaSearch_item">都道府県 ({{ rand(1, 100) }})</a>
                    @endfor
                </div>
                <!-- .areaSearch -->
                <div id="idxNewItem">
                    <h2 class="headerTitle headerSeparator">新着グルメ</h2>
                    @foreach($gourmets as $gourmet)
                        <div class="newItem">
                            <a href="{{ url('/gourmets/1') }}">
                                <img src="{{ asset('img/sample.png') }}" alt="">
                                <p>{{ $gourmet->gourmet_name }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- .idxNewItem -->
            </div>
            <!-- /.mainWarapper -->
        </section>
    </div>
@endsection