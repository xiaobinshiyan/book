<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')

@section('title', '笔记编辑')

@section('content')
    <div class="container">
        <div class="text-center" style="margin:10px 0">
            <h2>读书笔记编辑</h2>
        </div>
        <form class="form-horizontal" role="form" action="" method="post">
            <div class="form-group">
                <div class="col-sm-12">
                    <input class="form-control" id="disabledInput" type="text" value="挪威的森林" disabled>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <textarea class="form-control" rows="8" name="content" placeholder="内容">    很久以前，当我还年轻、记忆还清晰的时候，我就有过几次写一下直子的念头，却连一行也未能写成。虽然我明白只要写出第一行，往下就会文思泉涌，但就是死活写不出那第一行。一切都清晰得历历如昨的时候，反而不知从何处着手，就像一张十分详尽的地图，有时反倒因其过于详尽而派不上用场。但我现在明白了：归根结蒂，我想，文章这种不完整的容器所能容纳的，只能是不完整的记忆和不完整的意念。</textarea>
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
