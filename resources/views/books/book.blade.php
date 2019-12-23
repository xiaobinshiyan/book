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
                @foreach($lists as $list)
                  <a href="{{route('list',['id'=>$list['id']])}}" class="list-group-item">
                      {{ $list->name }}
                      <span class="digest_count">笔记：{{ $list->count }}</span>
                  </a>
                @endforeach
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
