<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PlaidTransaction;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlaidTransactionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('plaid_transaction_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.plaid-transaction.index');
    }

    public function create()
    {
        abort_if(Gate::denies('plaid_transaction_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.plaid-transaction.create');
    }

    public function edit(PlaidTransaction $plaidTransaction)
    {
        abort_if(Gate::denies('plaid_transaction_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.plaid-transaction.edit', compact('plaidTransaction'));
    }

    public function show(PlaidTransaction $plaidTransaction)
    {
        abort_if(Gate::denies('plaid_transaction_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.plaid-transaction.show', compact('plaidTransaction'));
    }
}
