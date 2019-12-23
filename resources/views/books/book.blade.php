<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')

@section('title', '书目列表')

@section('content')
    <div class="container" style="margin-top: 60px;">
        <div class="text-center"><h2>读书笔记</h2></div>
        <style>
            .digest_count{
                float:right;
                width:70px;
            }
        </style>
        <div class="col-sm-12">
            <div class="list-group">
                <a href="{{route('list',['id'=>1])}}" class="list-group-item">挪威的森林<span class="digest_count">笔记：30</span></a>
                <a href="digest_list.html" class="list-group-item">三生三世十里桃花<span class="digest_count">笔记：40</span></a>
                <a href="digest_list.html" class="list-group-item">从你的全世界路过<span class="digest_count">笔记：68</span></a>
                <a href="digest_list.html" class="list-group-item">解忧杂货铺<span class="digest_count">笔记：16</span></a>
                <a href="digest_list.html" class="list-group-item">乖，摸摸头<span class="digest_count">笔记：5</span></a>
                <a href="digest_list.html" class="list-group-item">小王子<span class="digest_count">笔记：9</span></a>
                <a href="digest_list.html" class="list-group-item">古文观止<span class="digest_count">笔记：40</span></a>
                <a href="digest_list.html" class="list-group-item">朦胧诗<span class="digest_count">笔记：21</span></a>
                <a href="digest_list.html" class="list-group-item">把时间当做朋友<span class="digest_count">笔记：10</span></a>
                <a href="digest_list.html" class="list-group-item">白夜行<span class="digest_count">笔记：7</span></a>
            </div>
        </div>
        <div class="col-sm-12 text-right">
            <a href="{{route('addbook')}}" class="btn btn-success">添加</a>
        </div>
    </div>
@endsection

@section('footerScripts')
    @parent
    <!-- <script src="{{ asset('js/dashboard.js') }}"></script>  -->
@endsection
