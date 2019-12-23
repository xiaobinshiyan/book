<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')

@section('title', '书目添加')

@section('content')
    <div class="container">
        <div class="text-center" style="margin:10px 0">
            <h2>书目添加</h2>
        </div>
        @include('partials.errors')
        <form class="form-horizontal" role="form" action="{{ route('book.store') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="col-sm-12">
                    <input class="form-control" type="text" name="name" placeholder="书名" maxlength="15" autofocus="autofocus" required="required"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input class="form-control" type="text" name="author" placeholder="作者" maxlength="15" required="required"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input class="form-control" type="number" name="sort" required='required' placeholder="排序"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 text-center">
                    <input type="button" class="btn btn-info" id="go-back-index" value="返回"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" class="btn btn-warning" value="重置"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" class="btn btn-success" value="提交"/>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('footerScripts')
    @parent
    <script>
        $(function () {
            $("#go-back-index").click(function () {
                window.location.href = '/'
            })
        })
    </script>
    <!-- <script src="{{ asset('js/dashboard.js') }}"></script>  -->
@endsection
