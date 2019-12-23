<?php

namespace App\Http\Controllers;

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
        return view('books.book');
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
}
