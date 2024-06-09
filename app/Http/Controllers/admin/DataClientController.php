<?php

namespace App\Http\Controllers\admin;

use App\Models\Billing;
use Illuminate\Http\Request;
//import model DataKlien
use App\Models\DataKlien;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;


class DataClientController
{
    //untuk membuat fungsi melihat admin_klien.blade.php
    public function index() : View //mengunakan fungsi view
    {
        //Untuk Menampilkan Data Dari Tabel_dataKlien
        $data_kliens = DataKlien::latest()->paginate(10);

        //paginate 10 memuncul kan data maksimal 10 jika lebih akan
        //muncul paginasi

        //melakukan pengembalian ke laman admin klien dengan isi DataKlien
        return view('admin.client', compact('data_kliens'));

        // $data_kliens = DataKlien::all();
        // return view('admin.client', compact('data_kliens'));
    }


    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        $data_kliens = DataKlien::all();
        //controller yang berfungsi untuk menampilkan laman create data
        // return view('admin_klien.create_data',compact('data_kliens'));
        return view('admin.form_client',compact('data_kliens'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama'         => 'required|min:5', // nama yang dimasukan minimal 5 karakter
            'nama_wali'    => 'required|min:5',
            'nik'          => 'required|min:16',
            'alamat'       => 'required|min:15',
            'no_telepon'    => [
                'required',
                'min:10', // Ubah minimal 15 ke 10 karena nomor telepon mungkin lebih pendek
                'regex:/^(\+?62|0)8[1-9]\d{6,}$/' // Format nomor telepon Indonesia, dimulai dengan 08 dan memiliki panjang minimal 10 digit
            ],
            'paket'        => 'required',
            'jenis_kelamin'=> 'required'
        ]);



        //mengambil data dari model data klien
        DataKlien::create([
            'id'           => $request->nik,
            'nama'         => $request->nama,
            'nik'          => $request->nik,
            'nama_wali'    => $request->nama_wali,
            'alamat'       => $request->alamat,
            'no_telepon'   => $request->no_telepon,
            'paket'        => $request->paket,
            'jenis_kelamin'=> $request->jenis_kelamin,
        ]);

        Billing::create([
            'id_client'    => $request->nik,
        ]);

        //redirect to index // menampilkan laman index
        return redirect()->route('admin.client')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
         * edit
         *
         * @param  mixed $id
         * @return View
         */
        public function edit(string $id): View
        {
            //mendapatkan ID dari tabel data klien
            $data_kliens = DataKlien::findOrFail($id);

            //menampilkan laman edit data yang datanya diambil dari data klien
            return view('admin_klien.edit_data', compact('data_kliens'));
        }

        /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama'         => 'required|min:5', // nama yang dimasukan minimal 5 karakter
            'nik'          => 'required|unique:data_kliens,nik|digits:16',
            'nama_wali'    => 'required|min:5',
            'alamat'       => 'required|min:15',
            'no_telepon'    => [
                'required',
                'min:10', // Ubah minimal 15 ke 10 karena nomor telepon mungkin lebih pendek
                'regex:/^(\+?62|0)8[1-9]\d{6,}$/' // Format nomor telepon Indonesia, dimulai dengan 08 dan memiliki panjang minimal 10 digit
            ],
            'paket'        => 'required',
            'jenis_kelamin'=> 'required'
        ]);

        //mendapatkan ID dari tabel
        $data_kliens = DataKlien::findOrFail($id);


            //update product without image
            $data_kliens->update([
                'nama'         => $request->nama,
                'nik'          => $request->nik,
                'nama_wali'    => $request->nama_wali,
                'alamat'       => $request->alamat,
                'no_telepon'   => $request->no_telepon,
                'paket'        => $request->paket,
                'jenis_kelamin'=> $request->jenis_kelamin,
            ]);


        //redirect to index //menampilkan laman index
        return redirect()->route('admin.client')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    //fungsi untuk menghapus
    public function destroy($id): RedirectResponse
    {
        //mendapatkan ID dari tabel
        $data_kliens = DataKlien::findOrFail($id);

        //menghapus data dari tabel yang ID nya sudah ditemukan
        $data_kliens->delete();

        //redirect to index / menampilkan laman index
        return redirect()->route('admin.client')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
