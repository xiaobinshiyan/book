<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')

@section('title', '书目添加')

@section('content')
    <div class="container">
        <div class="text-center" style="margin:10px 0">
            <h2>书目添加</h2>
        </div>
        <form class="form-horizontal" role="form" action="" method="post">
            <div class="form-group">
                <div class="col-sm-12">
                    <input class="form-control"  name="contact" placeholder="书名"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input class="form-control"  name="contact" placeholder="作者"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input class="form-control"  name="contact" placeholder="排序"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 text-center">
                    <input type="button" class="btn btn-info" onclick="javascript:history.go(-1);" value="返回"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" class="btn btn-warning" value="重置"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
