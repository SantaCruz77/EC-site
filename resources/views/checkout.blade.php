@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="">
      <div class="mx-auto" style="max-width:1200px">
        <h1 class="text-center font-weight-bold" style="color: #555555; font-size: 1.2rem; padding: 24px 0px;">
          {{ Auth::user()->name }}さんご購入ありがとうございました
        </h1>
        <div class="text-center">
          <p>ご購入頂いたメールアドレスへ決済情報をお送りしております。お手続き完了次第発送いたします。</p>
          <a href="/">商品一覧へ</a>
          <div class="space"></div>
        </div>
      </div>
    </div>
  </div>
@endsection