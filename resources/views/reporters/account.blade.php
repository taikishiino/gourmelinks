@extends('layouts.app')
@section('content')
    <h1>レポーターページ</h1>
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
                <div class="columns is-mobile">
                    <div class="column is-one-quarter">
                        <div class="userImg">
                            <img src="{{ asset('/img/sample.png') }}" alt="">
                        </div>
                    </div>
                    <div class="column">
                        <div class="userRight">
                            <div class="columns">
                                {{--<div class="column" style="font-size: 1.5em;">{{ $reporter->name }}</div>
                                <div class="column">
                                    <a href="{{ url('/reporters/'.$reporter->id.'/edit') }}" class="button is-small is-fullwidth">プロフィール編集</a>
                                </div>--}}
                                <div class="column">
                                    <a href="{{ url('/gourmets/create') }}" class="button is-small is-fullwidth">グルメ投稿</a>
                                </div>
                            </div>
                            <div class="box">
                                {{--<div>Twitter: <a href="{{ url("https://twitter.com/{$reporter->twitter}") }}" target="_blank">{{ $reporter->twitter }}</a></div>
                                <div>instagram: <a href="{{ url("https://www.instagram.com/{$reporter->instagram}") }}" target="_blank">{{ $reporter->instagram }}</a></div>
                                <div>facebook: <a href="{{ url("https://www.facebook.com/{$reporter->facebook}") }}" target="_blank">{{ $reporter->facebook }}</a></div>--}}
                            </div>
                        </div>
                        <!-- /.userRight -->
                    </div>
                </div>
                <!-- /.columns -->
                <div class="box">
                    {{--<p>{{ $reporter->comment }}</p>--}}
                </div>
                <div id="idxUserContents">
                    {{--@foreach($gourmets as $gourmet)
                        <div class="userContents">
                            <a href="{{ url('/gourmets/1') }}">
                                <img src="{{ asset('img/sample.png') }}" alt="" class="object-fit">
                                <p>{{ $gourmet->gourmet_name }}</p>
                            </a>
                        </div>
                    @endforeach--}}
                </div>
                <!-- /#idxUserContents -->
            </div>
            <!-- /.mainWarapper -->
        </section>
    </div>
@endsection