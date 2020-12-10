@extends('layouts.app')

<div class="from_center">
  <div>
    <p> 投稿 </p>
  </div>
</div>

<form method="post" action="/Menu/create" envtype="multipart/form-data">

    @csrf

    <div>
      <input id="image" type="file"  class="">
    </div>

    <div class="from_center">
      <div>
        <a>名前</a>
        <input id="email" type="email" class= "" value="{{ old('email') }}" required autocomplete="email" autofocus>
      </div>
    </div>

    <div class="from_center">
      <div>
        <a>メール</a>
        <input id="email" type="email" class= "" value="{{ old('email') }}" required autocomplete="email" autofocus>
      </div>
    </div>

    <div>
    <button type="submit" class="">
    {{ __('投稿') }}
    </button>
    </div>

</form>