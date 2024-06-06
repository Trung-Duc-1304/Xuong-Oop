<?php

namespace Ductong\XuongOop\Controllers\Admin;

use Ductong\XuongOop\Commons\Controller;
use Ductong\XuongOop\Commons\Helper;

class DashboardController extends Controller
{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}