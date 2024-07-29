<?php

namespace Illuminate\Contracts\View;

use Illuminate\Contracts\Support\Renderable;

interface View extends Renderable
{
    /** @return static */
    //! khai báo cái này chỉ để cho cái index nó không bị báo đỏ thôi chứ không có vẫn chạy bình thường
    public function extends();
    public function section();
    public function layout();
}
