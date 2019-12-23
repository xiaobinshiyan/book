<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')

@section('title', '笔记编辑')

@section('content')
    <div class="container">
        <div class="text-center" style="margin:10px 0">
            <h2>读书笔记编辑</h2>
        </div>
        <form class="form-horizontal" role="form" action="{{ route('digest.edit') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="col-sm-12">
                    <input class="form-control" id="disabledInput" type="text" value="{{ $book_info->name }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <textarea class="form-control" rows="8" name="content" placeholder="内容">
                        {{ $info->content }}
                    </textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 text-center">
                    <input type="button" class="btn btn-info" onclick="javascript:history.go(-1);" value="返回"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" class="btn btn-warning" value="重置"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="hidden" name="id" value="{{ $info->id }}">
                    <input type="hidden" name="book_id" value="{{ $info->book_id }}">
                    <input type="submit" class="btn btn-success" value="提交"/>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('footerScripts')
    @parent
    <!-- <script src="{{ asset('js/dashboard.js') }}"></script>  -->
@endsection
