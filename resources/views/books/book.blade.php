<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')

@section('title', '书目列表')

@section('content')
    <div class="container" style="margin-top: 60px;">
        <div class="text-center"><h2 id="triggerc">读书笔记</h2></div>
        <style>
            .digest_count{
                float:right;
                width:70px;
            }
        </style>
        @include('partials.errors')
        @include('partials.success')
        <div class="col-sm-12">
            <div class="list-group">
                @foreach($lists as $list)
                  <a href="{{route('list',['id'=>$list['id']])}}" class="list-group-item">
                      {{ $list->name }}
                      <span class="digest_count">笔记：<?php echo count($list->digest)?></span>
                  </a>
                @endforeach
            </div>
        </div>
        <div class="col-sm-12 text-right">
            <a href="{{route('book.add')}}" class="btn btn-success">添加</a>
        </div>
    </div>
@endsection

@section('footerScripts')
    @parent
    <script>
        $(function () {
            if($('.alert-success')[0]) {
                setTimeout(function () {
                    $('.alert-success').delay(1000).css('display','none');
                },1000)
            }
        })
    </script>
@endsection
