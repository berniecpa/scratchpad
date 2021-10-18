<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QboReport;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class QboReportController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('qbo_report_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.qbo-report.index');
    }

    public function create()
    {
        abort_if(Gate::denies('qbo_report_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.qbo-report.create');
    }

    public function edit(QboReport $qboReport)
    {
        abort_if(Gate::denies('qbo_report_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.qbo-report.edit', compact('qboReport'));
    }

    public function show(QboReport $qboReport)
    {
        abort_if(Gate::denies('qbo_report_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.qbo-report.show', compact('qboReport'));
    }
}
