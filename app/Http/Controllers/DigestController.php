<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Digest;

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
    public function digestList()
    {
        return view('digest.list');
    }

    /**
     * digestAdd 读书笔记添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author zhangxiaobin <zxbin.1990@gmail.com>
     * @date 2019-12-23 9:10
     */
    public function digestAdd()
    {
        return view('digest.add');
    }

    /**
     * digestEdit 读书笔记编辑
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author zhangxiaobin <zxbin.1990@gmail.com>
     * @date 2019-12-23 9:11
     */
    public function digestEdit()
    {
        return view('digest.edit');
    }
}
