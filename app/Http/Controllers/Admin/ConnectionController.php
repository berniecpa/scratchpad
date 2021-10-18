<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Connection;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ConnectionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('connection_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.connection.index');
    }

    public function create()
    {
        abort_if(Gate::denies('connection_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.connection.create');
    }

    public function edit(Connection $connection)
    {
        abort_if(Gate::denies('connection_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.connection.edit', compact('connection'));
    }

    public function show(Connection $connection)
    {
        abort_if(Gate::denies('connection_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.connection.show', compact('connection'));
    }
}
