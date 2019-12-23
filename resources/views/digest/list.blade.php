<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')

@section('title', '笔记列表')

@section('content')
    <div class="container" style="margin:20px auto;">
        <div style="text-align: center">
            <p>
            <h3>{{ $book_info->name }}</h3></p>
            <p>{{ $book_info->author }}</p>
            <p><i>阅读量：{{ $book_info->clicks }}&nbsp;&nbsp;&nbsp;&nbsp;创建时间：{{ $book_info->created_at }}</i></p>
        </div>
        @include('partials.success')
        @foreach($lists as $k => $v)
        <div class="well">
            <p>{{ $k+1 }}. &nbsp;{{ $v->content }}</p>
            <p style="text-align: right">
                {{ $v->created_at }} &nbsp;
                <a href="{{route('digest_edit',['id'=>$v['id']])}}"> <span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;
                <a href="javascript:;" data-digest_id="{{ $v['id'] }}" class="soft-delete"><span class="glyphicon glyphicon-trash"></span></a></p>
        </div>
        @endforeach
        <div class="col-sm-12 text-right">
            <a href="{{ route('booklist') }}" class="btn btn-success">返回</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{route('digest_add')}}" class="btn btn-success">添加</a>
        </div>
    </div>
@endsection

@section('footerScripts')
    @parent
    <script>
        $(function () {
            if($('.alert-success')[0]) {
                $('.alert-success').eq(0).delay(1000).fadeIn();
            }
            $('.soft-delete').click(function () {
                var digest_id = $(this).data('digest_id')
                if (confirm('确定要删除吗？')) {
                    return $(this).data('isPost') || ($(this).data('isPost',1),$.ajax({
                        dataType:'json',
                        url:'/digest/delete',
                        data:{id:digest_id},
                        success:function (res) {
                            alert('删除成功');
                            setTimeout(function () {
                                window.location.reload()
                            },500)
                        }
                    }))
                }

            })
        })
    </script>
@endsection
