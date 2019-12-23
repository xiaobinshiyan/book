<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')

@section('title', '笔记添加')

@section('content')
    <div class="container">
        <div class="text-center" style="margin:10px 0">
            <h2>读书笔记添加</h2>
        </div>
        <form class="form-horizontal" role="form" action="{{ route('digest.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="col-sm-12">
                    <select class="form-control" name="book_id">
                        @foreach($lists as $v)
                        <option value="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <textarea class="form-control" rows="8" required autofocus name="contenta" placeholder="内容"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 text-center">
                    <input type="button" class="btn btn-info" onclick="javascript:history.go(-1);" value="返回"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" class="btn btn-warning" value="重置"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" class="btn btn-success" value="提交"/>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('footerScripts')
    @parent
@endsection
