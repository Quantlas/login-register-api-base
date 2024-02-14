<?php

namespace App\Http\Controllers\API\v1;

use App\Models\Scopes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\v1\BaseController as BaseController;
use App\Http\Controllers\API\OperationServices\OperationServices;

class ScopesController extends BaseController
{
    public function get()
    {
        if (!OperationServices::scope('read-scopes')) {
            return $this->sendError('You do not have permissions to access this resource.', ['error' => 'Unauthorized'], 401);
        }
        $scope = Scopes::all();
        if ($scope) {
            return $this->sendResponse($scope, 'Get Scopes successfully.', 201);
        } else {
            return $this->sendError('Get Scope fail.', "fail");
        }
    }

    public function create(Request $request)
    {
        if (!OperationServices::scope('create-scopes')) {
            return $this->sendError('You do not have permissions to access this resource.', ['error' => 'Unauthorized'], 401);
        }
        $validator = Validator::make($request->all(), [
            'rol' => 'required',
            'scope' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $scope = Scopes::create($request->all());
        if ($scope) {
            return $this->sendResponse($scope, 'Scope created successfully.', 201);
        } else {
            return $this->sendError('Scope created fail.', $validator->errors());
        }
    }

    public function update(Request $request)
    {
        if (!OperationServices::scope('update-scopes')) {
            return $this->sendError('You do not have permissions to access this resource.', ['error' => 'Unauthorized'], 401);
        }
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $scope = Scopes::find($request->id);
        if ($request->rol) {
            $scope->rol = $request->rol;
        }
        if ($request->scope) {
            $scope->scope = $request->scope;
        }
        if ($request->description) {
            $scope->description = $request->description;
        }
        $scope->save();
        if ($scope) {
            return $this->sendResponse($scope, 'Scope updated successfully.', 201);
        } else {
            return $this->sendError('Scope updated fail.', $validator->errors());
        }
    }
}
