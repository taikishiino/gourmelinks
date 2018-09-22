@extends('layouts.app')
@section('content')
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
                <div class="gourmetImage image is-5by4">
                    <img src="{{ asset('/img/sample.png') }}" alt="#" class="object-fit">
                </div>
                <div class="box">
                    <div>{{ $gourmet->gourmet_name }}</div>
                    <div>{{ $gourmet->price }}</div>
                    <div>{{ $gourmet->restaurant_name }}</div>
                    <div class="media" style="padding-top: 20px;">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <img src="{{ asset('/img/sample.png') }}" alt="" class="object-fit">
                            </figure>
                        </div>
                        <a href="{{ url('/reporters/'.$gourmet->reporter->id) }}" class="media-content">
                            <p class="title is-4">{{ $gourmet->reporter->name }}</p>
                            <p class="subtitle is-6">@akaunto名</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.mainWarapper -->
        </section>
    </div>
@endsection