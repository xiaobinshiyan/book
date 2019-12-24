<?php


namespace App\Http\Controllers;

use App\Http\Requests\DigestRequest;
use Illuminate\Http\Request;
use App\Models\Digest;
use App\Models\Book;

/**
 * Class DigestController
 * @package App\Http\Controllers
 * @author zhangxiaobin <zxbin.1990@gmail.com>
 * @date 2019-12-20 16:31
 */
class DigestController extends Controller
{
    /**
     * digestList 展示读书笔记
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author zhangxiaobin <zxbin.1990@gmail.com>
     * @date 2019-12-23 9:10
     */
    public function digestList(Request $request, $book_id)
    {
        $book_info = Book::where(['id' => $book_id])->firstOrFail();
        $digest_list = Digest::where(['book_id' => $book_id])->where('status', '=', 1)->orderBy('created_at', 'asc')->get();
        return view('digest.list', ['lists' => $digest_list, 'book_info' => $book_info]);
    }

    /**
     * digestAdd 读书笔记添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author zhangxiaobin <zxbin.1990@gmail.com>
     * @date 2019-12-23 9:10
     */
    public function digestAdd()
    {
        $book_list = Book::where(['status' => 1])->get();
        return view('digest.add', ['lists' => $book_list]);
    }

    /**
     * store add new digest
     * @param DigestRequest $digestrequest
     * @author zhangxiaobin <zxbin.1990@gmail.com>
     * @date 2019-12-23 16:22
     */
    public function store(DigestRequest $digestrequest)
    {
//        echo '<pre>';print_r($digestrequest->postFillData());exit();
        Digest::create($digestrequest->postFillData());
        return redirect()
            ->route('list', ['id' => $digestrequest->post('book_id')])
            ->with('success', '笔记创建成功.');
    }

    /**
     * digestEdit DESC
     * @param Request $request
     * @param int $id 笔记ID
     * @author zhangxiaobin <zxbin.1990@gmail.com>
     * @date 2019-12-24 14:11
     */
    public function digestEdit(Request $request, $id)
    {
        $info = Digest::where(['id' => $id])->firstOrFail();
        $book_info = Book::find($info->book_id);
        return view('digest.edit', ['info' => $info, 'book_info' => $book_info]);
    }

    /**
     * edit 编辑
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     * @author zhangxiaobin <zxbin.1990@gmail.com>
     * @date 2019-12-23 17:25
     */
    public function edit(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
            'book_id' => 'required|numeric'
        ], [
            'content.required' => '书名不能为空',
            'book_id.required' => '书目不能为空',
            'book_id.numeric' => '书目必须是数字',
        ]);
        $digest_id = $request->input('id');
        $book_id = $request->input('book_id');
        $content = $request->input('content');

        $post = Digest::find($digest_id);
        $post->content = $content;
        $post->book_id = $book_id;
        $res = $post->save();
        return redirect()
            ->route('list', ['id' => $book_id])
            ->with('success', '笔记修改成功.');
    }

    /**
     * digestDelete soft delete
     * @param Request $request
     * @author zhangxiaobin <zxbin.1990@gmail.com>
     * @date 2019-12-23 16:21
     */
    public function digestDelete(Request $request)
    {
        $id = $request->get('id');
        $post = Digest::find($id);
        $post->status = 2;
        $post->save();
        echo json_encode(array('status' => 1));
        exit();
    }
}
