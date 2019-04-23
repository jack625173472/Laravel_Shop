<!-- 指定繼承 layout.master 模板 -->
@extends('layout.master')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')

    <h1>{{$title}}</h1>

    <!-- 載入模板元件 components.socialButtons -->
    @include('components.socialButtons')

    Email:
    <input type="text" name="email" placeholder="Email">

    Password:
    <input type="password" name="password" placeholder="Password">

    Nickname:
    <input type="text" name="nickname" placeholder="Nickname">

@endsection