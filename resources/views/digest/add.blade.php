<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')

@section('title', '笔记添加')

@section('content')
    <div class="container">
        <div class="text-center" style="margin:10px 0">
            <h2>读书笔记添加</h2>
        </div>
        <form class="form-horizontal" role="form" action="" method="post">
            <div class="form-group">
                <div class="col-sm-12">
                    <select class="form-control">
                        <option>选择书目</option>
                        <option selected="selected">挪威的森林</option>
                        <option>三生三世十里桃花</option>
                        <option>从你的全世界路过</option>
                        <option>解忧杂货铺</option>
                        <option>乖，摸摸头</option>
                        <option>小王子</option>
                        <option>古文观止</option>
                        <option>朦胧诗</option>
                        <option>把时间当做朋友</option>
                        <option>白夜行</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <textarea class="form-control" rows="8" name="content" placeholder="内容"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 text-center">
                    <input type="button" class="btn btn-info" onclick="javascript:history.go(-1);" value="返回"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" class="btn btn-warning" value="重置"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
