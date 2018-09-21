@extends('layouts.app')
@section('content')
    <div class="reporterCreate">
        <div class="columns is-gapless">
            <div class="column is-one-quarter">
                <div class="reporterCreate_tabs">
                    <a class="panel-block is-active">プロフィール編集</a>
                    <a class="panel-block">アカウント管理</a>
                    <a class="panel-block">オプション</a>
                </div>
            </div>
            <div class="column">
                <div class="reporterCreate_box">
                    <form action="{{ url('/reporters/'.$reporter->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="field">
                            <label class="label">ユーザーネーム</label>
                            <div class="control">
                                <input id="name" name="name" class="input" type="text" value="{{ $reporter->name }}" required>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">SNSソーシャルアカウント</label>
                            <div class="snsform">
                                <p class="help is-info">twitter.com/[UserID]</p>
                                <div class="control has-icons-left">
                                    <input id="twitter" name="twitter" class="input is-info" type="text" value="{{ $reporter->twitter }}" placeholder="UserID">
                                    <span class="icon is-small is-left">@</span>
                                </div>
                            </div>
                            <div class="snsform">
                                <p class="help is-danger">www.instagram.com/[UserID]</p>
                                <div class="control has-icons-left">
                                    <input id="instagram" name="instagram" class="input is-danger" type="text" value="{{ $reporter->instagram }}" placeholder="UserID">
                                    <span class="icon is-small is-left">@</span>
                                </div>
                            </div>
                            <div class="snsform">
                                <p class="help is-success">www.facebook.com/[UserID]</p>
                                <div class="control has-icons-left">
                                    <input id="facebook" name="facebook" class="input is-success" type="text" value="{{ $reporter->facebook }}" placeholder="UserID">
                                    <span class="icon is-small is-left">@</span>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">自己紹介</label>
                            <div class="control">
                                <textarea id="comment" name="comment" class="textarea" placeholder="Message">{{ $reporter->comment }}</textarea>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    {{ __('I agree to the') }}<a href="#">{{ __('terms and conditions') }}</a>
                                </label>
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
        </div>
    </div>
@endsection