<?php

namespace App\Http\Controllers\API\OperationServices;

use App\Models\Scopes;
use Illuminate\Support\Facades\Auth;

class OperationServices
{
    public static function scope($scope)
    {
        $rol = Auth::user()->rol;
        $scopes = Scopes::where('rol', $rol)
            ->where('scope', $scope)
            ->first();
        if ($scopes) {
            return true;
        } else {
            return false;
        }
    }
}
