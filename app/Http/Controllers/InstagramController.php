<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InstagramController extends Controller {
    /**
     * Insert a new instagram user into the database.
     *
     * @return \Illuminate\Http\Response
     */
    static public function create(array $data) {
        if (!key_exists('user_id', $data) || !key_exists('user', $data))
            return false;

        return DB::table('instagram')->insert($data);
    }
}
