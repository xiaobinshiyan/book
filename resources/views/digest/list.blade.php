<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')

@section('title', '笔记列表')

@section('content')
    <div class="container" style="margin:20px auto;">
        <div style="text-align: center">
            <p>
            <h3>挪威的森林</h3></p>
            <p>村上春树</p>
            <p><i>阅读量：23&nbsp;&nbsp;&nbsp;&nbsp;创建时间：2017-05-15</i></p>
        </div>
        <div class="well">
            <p>1. &nbsp;很久以前，当我还年轻、记忆还清晰的时候，我就有过几次写一下直子的念头，却连一行也未能写成。虽然我明白只要写出第一行，往下就会文思泉涌，但就是死活写不出那第一行。一切都清晰得历历如昨的时候，反而不知从何处着手，就像一张十分详尽的地图，有时反倒因其过于详尽而派不上用场。但我现在明白了：归根结蒂，我想，文章这种不完整的容器所能容纳的，只能是不完整的记忆和不完整的意念。</p>
            <p style="text-align: right">2017-05-01 07:05:00 &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('digest_edit',['id'=>1])}}"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-trash"></span></a></p>
        </div>
        <div class="well">
            <p>2. &nbsp;她所希求的并非是我的臂，而是某人的臂，她所希求的并非是我的体温，而是某人的体温。而我只能是我，于是我觉得有些愧疚。</p>
            <p style="text-align: right">2017-05-01 07:10:00 &nbsp;&nbsp;&nbsp;&nbsp;<a href="digest_edit.html"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-trash"></span></a></p>
        </div>
        <div class="well">
            <p>3. &nbsp;绿子把万宝路叼在嘴上，“我所害怕的，是这种方式的死。就是说，死的阴影一步一步侵入生命的领地，等察觉到的时候，已经黑乎乎的什么也看不见了。那样子，连周围人都觉得我与其说是生者，倒不如说是死者。我讨厌的就是这个，这是我绝对忍受不了的。”</p>
            <p style="text-align: right">2017-05-01 07:20:00 &nbsp;&nbsp;&nbsp;&nbsp;<a href="digest_edit.html"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-trash"></span></a></p>
        </div>
        <div class="well">
            <p>4. &nbsp;那是一个温柔而安稳的吻，一个不知其归宿的吻。</p>
            <p style="text-align: right">2017-05-01 07:20:05 &nbsp;&nbsp;&nbsp;&nbsp;<a href="digest_edit.html"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-trash"></span></a></p>
        </div>
        <div class="well">
            <p>5. &nbsp;一如往日的校园午休光景。然而在隔了许久后重新观望这光景的时间里，我蓦然注意到一个事实：每个人无不显得很幸福。至于他们是真的幸福还是仅仅表面看上去如此，就无从得知了。但无论如何，在九月间这个令人心神荡漾的下午，每个人看来都自得其乐，而我则因此而感到了平时所没有感到过的孤寂，觉得惟独我自己与这光景格格不入。</p>
            <p style="text-align: right">2017-05-01 07:30:00 &nbsp;&nbsp;&nbsp;&nbsp;<a href="digest_edit.html"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-trash"></span></a></p>
        </div>
        <div class="well">
            <p>6. &nbsp;"不要同情自己！"他说，"同情自己是卑劣懦夫干的勾当。"</p>
            <p style="text-align: right">2017-05-03 19:08:00 &nbsp;&nbsp;&nbsp;&nbsp;<a href="digest_edit.html"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-trash"></span></a></p>
        </div>
        <div class="well">
            <p>7. &nbsp;我在窗帘拉得严严实实的屋子里狠狠地诅咒春天，诅咒春天给我带来的创伤——它使我心灵深处隐隐作痛。</p>
            <p style="text-align: right">2017-05-03 19:12:00 &nbsp;&nbsp;&nbsp;&nbsp;<a href="digest_edit.html"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-trash"></span></a></p>
        </div>
        <div class="well">
            <p>8. &nbsp;对于只身独处的人来说，四月实在是不胜凄寂的时节。四月里，周围的人无不显得满面春风。人们脱去外套，在明媚的阳光下或聊天，或练习棒球，或卿卿我我。我却孑然一身，形影相吊。智子也好，绿子也好，永泽也好，所有人都远远离我而去。现在的我，连问一声“早安”或“你好”的人都没有。</p>
            <p style="text-align: right">2017-05-03 19:47:00 &nbsp;&nbsp;&nbsp;&nbsp;<a href="digest_edit.html"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-trash"></span></a></p>
        </div>
        <div class="well">
            <p>9. &nbsp;我情不自禁的吻她。周围走过的人无不直盯盯地看着我们，但我已不再顾忌，我们是在活着，我们必须考虑的事只能是如何活下去。</p>
            <p style="text-align: right">2017-05-03 20:07:00 &nbsp;&nbsp;&nbsp;&nbsp;<a href="digest_edit.html"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-trash"></span></a></p>
        </div>
        <div class="well">
            <p>10. &nbsp;我现在哪里？我不知道这里是哪里，全然摸不着头脑。这里究竟是哪里？目力所及，无不是不知走去哪里的无数男男女女。</p>
            <p style="text-align: right">2017-05-03 20:09:00 &nbsp;&nbsp;&nbsp;&nbsp;<a href="digest_edit.html"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-trash"></span></a></p>
        </div>
        <div class="col-sm-12 text-right">
            <a href="book_list.html" class="btn btn-success">返回</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{route('digest_add')}}" class="btn btn-success">添加</a>
        </div>
    </div>
@endsection

@section('footerScripts')
    @parent
    <!-- <script src="{{ asset('js/dashboard.js') }}"></script>  -->
@endsection
