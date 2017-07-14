<?php

namespace App\Helper;

use Flash;
use Validator;
use Auth;
use jDate;
use App\Product;
use App\Company;
use App\Importer;
use App\Producer;
use App\Technician;
use DB;

class Web
{
    public static function validationCheck($request ,$rules)
    {
        $validator = Validator::make($request->all(), $rules);

        return $validator->fails();
    }

    public static function validation($request, $rules,  $url = '')
    {
        $messages = [];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $error) {
                Flash::error($error);
            }

            if ($url == '') {
                return $messages;
            }

            return redirect($url);
        }
    }
}
