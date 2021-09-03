<?php


namespace Turbin\Pse\Resources;


use Illuminate\Support\Facades\DB;

class Database
{
    public static function beginTransaction()
    {
        DB::beginTransaction();
    }

    public static function commit()
    {
        DB::commit();
    }

    public static function rollBack()
    {
        DB::rollBack();
    }
}
