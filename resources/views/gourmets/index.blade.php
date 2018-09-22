@extends('layouts.app')
@section('content')
    <h1>TOP</h1><a href="/reporters">ユーザーtopへ</a>
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
                <div id="idxNewItem">
                    <h2 class="headerTitle headerSeparator">新着グルメ</h2>
                    @foreach($gourmets as $gourmet)
                        <div class="newItem">
                            <a href="{{ url('/gourmets/'.$gourmet->id) }}">
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