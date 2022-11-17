<?php

namespace App\Util;

use App\Interfaces\Exports;

class ExportExcel implements Exports
{
    public function save($request)
    {
        $excel = Excel::download(new UsersExport, 'users.xlsx');
    }
}
