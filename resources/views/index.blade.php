@extends('layouts.app')
<body>

@include ('parts.header')

  <div class="menu">
      <a> プロフィール</a>
      <a> 理念</a>
      <a> 経歴</a>
      <a> 魅力</a>
  </div>

  
<div class="main">
  <div class="start-left">
    <h1 class="top-font-left"></h1>
    <img src ="image/img.png" alt="サンプル画像" class="img-file">
  </div>

  <div class="start-right">
    <h1 class="top-font-right">プロフィール</h1>
    <div>
      <a>初めまして私の自己紹介ポートフォリオにようこそ</a>
      <a></a>
    </div>
  </div>
  <div class="start-right">
    <h1 class="top-font-right">プロフィール</h1>
    <div>
      <table>
      @foreach($user as $user)
      <!-- ユーザーとユーザーのインスタンス変数を合わせる必要があり合わせる事によりテーブルから同じ値を持ってくる事が出来る -->
        <tr>
          <td>{{$user->name}} {{$user->email}} {{$user->email_verified_at}}</td>
        </tr>
      @endforeach
      </table>
    </div>
  </div>
</div>
</body>
