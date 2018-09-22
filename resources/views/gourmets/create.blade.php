@extends('layouts.app')
@section('content')
    <div id="gourmetCreate">
        <div class="gourmetCreateWrapper">
            <form action="{{ url('gourmets') }}" method="post" autocomplete="off">
                @csrf
                @method('POST')
                <div class="columns is-mobile">
                    <div class="column is-one-third">
                        <div class="image is-square">
                            <label>
                                <div class="originalFileUp">メニューの写真</div>
                                <input type="file" id="fileUp">
                            </label>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="image is-square">
                            <label>
                                <div class="originalFileUp">店内の写真</div>
                                <input type="file" id="fileUp">
                            </label>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="image is-square">
                            <label>
                                <div class="originalFileUp">店外の写真</div>
                                <input type="file" id="fileUp">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label">メニュー・グルメ名</label>
                    <div class="control">
                        <input id="gourmet_name" name="gourmet_name" class="input" type="text" placeholder="MenuName" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">価格帯</label>
                    <div class="control">
                        <input id="price" name="price" class="input" type="text" placeholder="Price" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">飲食店名</label>
                    <div class="control">
                        <input id="restaurant_name" name="restaurant_name" class="input" type="text" placeholder="RestaurantName" required>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" name="submit" class="button is-link">投稿する</button>
                    </div>
                    <div class="control">
                        <a href="{{ url('/gourmets') }}" class="button is-text">キャンセル</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection