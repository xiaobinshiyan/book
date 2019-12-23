<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Models\Book;

/**
 * Class BookController
 * @package App\Http\Controllers
 * @author zhangxiaobin <zxbin.1990@gmail.com>
 * @date 2019-12-20 16:14
 */
class BookController extends Controller
{
    /**
     * bookList DESC
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author zhangxiaobin <zxbin.1990@gmail.com>
     * @date 2019-12-20 16:20
     */
    public function bookList()
    {
        $book_list = Book::where('status','=','1')->orderBy('sort','asc')->get();
        if (! empty($book_list)) {
            foreach ($book_list as $k => $v) {
                $book_list[$k]['count'] = count(Book::findOrFail($v['id'])->digest);
            }
        }
        return view('books.book',['lists'=>$book_list]);
    }

    /**
     * bookAdd DESC
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author zhangxiaobin <zxbin.1990@gmail.com>
     * @date 2019-12-20 17:05
     */
    public function bookAdd()
    {
        return view('books.add');
    }

    /**
     * bookAdd Store a newly created Book
     * @param BookRequest $createRequest
     * @author zhangxiaobin <zxbin.1990@gmail.com>
     * @date 2019-12-23 15:06
     */
    public function store(BookRequest $createRequest)
    {
        $post = Book::create($createRequest->postFillData());
        return redirect()
            ->route('booklist')
            ->with('success', '新书创建成功.');
    }
}
