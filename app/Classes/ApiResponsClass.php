<?php

namespace App\Classes;

use Illuminate\Support\Facades\DB;

class ApiResponsClass
{
    /**
     * Create a new class instance.
     */
   public static function rollback($error, $message="Something went wrong! Process not completed" )
   {
    DB::rollback();
    return response()->json([
       'success' => false,
       'message' => $message,
       'data' => $error,
    ]);

   }
   public static function sendResponse($data, $message="Success")
   {
    return response()->json([
       'success' => true,
       'message' => $message,
       'data' => $data,
    ]);
   }
}
