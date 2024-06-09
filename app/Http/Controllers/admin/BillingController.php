<?php

namespace App\Http\Controllers\admin;

use App\Models\Billing;
use App\Models\DataKlien;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BillingController
{
    public function index(): View
    {
        $billings = Billing::with('dataKlien')->get();
        return view('admin.billings.billing', compact('billings'));
    }

    public function create(): View
    {
        $clients = DataKlien::all();
        return view('admin.billings.form_billing', compact('clients'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'bill_status' => 'required',
            'is_active' => 'required',
        ]);

        Billing::create($request->all());

        return redirect()->route('admin.billings.index')->with('success', 'Billing berhasil ditambahkan');
    }

    public function edit(string $id): View
    {
        $billing = Billing::findOrFail($id);
        return view('admin.billings.edit_billing', compact('billing'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            'bill_status' => 'required',
            'is_active' => 'required',
        ]);
        $billing = Billing::findOrFail($id);

        $billing->update($request->all());
        return redirect()->route('admin.billings')->with('success', 'Billing berhasil diperbarui');
    }

    public function destroy(Billing $billing): RedirectResponse
    {
        $billing->delete();
        return redirect()->route('admin.billings.index')->with('success', 'Billing berhasil dihapus');
    }

    public function setActive(Billing $billing, $status): RedirectResponse
    {
        $billing->is_active = $status;
        $billing->save();

        return redirect()->route('admin.billings.index')->with('success', 'Status client berhasil diubah');
    }

    public function setBillStatus(Billing $billing, $status): RedirectResponse
    {
        $billing->bill_status = $status;
        $billing->save();

        return redirect()->route('admin.billings.index')->with('success', 'Status billing berhasil diubah');
    }

}
