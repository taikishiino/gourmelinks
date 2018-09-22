@extends('layouts.app')
@section('content')
    <div id="reporterCreate">
        <div class="reporterCreateWrapper">
            <form action="{{ url('reporters') }}" method="post" autocomplete="off">
                @csrf
                @method('POST')
                <div class="columns is-mobile">
                    <div class="column is-one-third">
                        {{--<form autocomplete="off">
                            <div class="image is-square">
                                <label>
                                    <div class="originalFileUp">プロフィール写真</div>
                                    <input type="file" id="fileUp">
                                </label>
                            </div>
                        </form>--}}
                    </div>
                </div>
                <!-- /.columns -->

                <div class="field">
                    <label class="label">ユーザーネーム</label>
                    <div class="control">
                        <input id="name" name="name" class="input" type="text" placeholder="UserName" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">SNSソーシャルアカウント</label>
                    <div class="snsform">
                        <p class="help is-info">twitter.com/[UserID]</p>
                        <div class="control has-icons-left">
                            <input id="twitter" name="twitter" class="input is-info" type="text" placeholder="UserID">
                            <span class="icon is-small is-left">@</span>
                        </div>
                    </div>
                    <div class="snsform">
                        <p class="help is-danger">www.instagram.com/[UserID]</p>
                        <div class="control has-icons-left">
                            <input id="instagram" name="instagram" class="input is-danger" type="text" placeholder="UserID">
                            <span class="icon is-small is-left">@</span>
                        </div>
                    </div>
                    <div class="snsform">
                        <p class="help is-success">www.facebook.com/[UserID]</p>
                        <div class="control has-icons-left">
                            <input id="facebook" name="facebook" class="input is-success" type="text" placeholder="UserID">
                            <span class="icon is-small is-left">@</span>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label">自己紹介</label>
                    <div class="control">
                        <textarea id="comment" name="comment" class="textarea" placeholder="Message"></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" name="submit" class="button is-link">登録する</button>
                    </div>
                    <div class="control">
                        <a href="{{ url('/reporters/1') }}" class="button is-text">キャンセル</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection