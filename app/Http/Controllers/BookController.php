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
     * bookList 展示数目列表
     * @author zhangxiaobin <zxbin.1990@gmail.com>
     * @date 2019-12-20 16:20
     */
    public function bookList()
    {
        $book_list = Book::with(['digest'=> function ($q) {
            $q->where('status', '=', '1');
        }])->get();
        return view('books.book', ['lists' => $book_list]);
    }

    /**
     * bookAdd 新书目的添加
     * @return
     * @author zhangxiaobin
     * @date 2019-12-25
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
        Book::create($createRequest->postFillData());
        return redirect()
            ->route('booklist')
            ->with('success', '新书创建成功.');
    }
}
