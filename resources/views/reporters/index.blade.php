@extends('layouts.app')
@section('content')
    <h1>レポーターTOP</h1>
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
                    <h2 class="headerTitle headerSeparator">新着ユーザー</h2>
                    @for($i=0; $i<14; $i++)
                        <div class="newItem">
                            <a href="{{ url('/reporters/1') }}">
                                <img src="{{ asset('img/sample.png') }}" alt="">
                                <p>ユーザー名</p>
                            </a>
                        </div>
                    @endfor
                </div>
                <!-- .idxNewItem -->
            </div>
            <!-- /.mainWarapper -->
        </section>
    </div>
@endsection