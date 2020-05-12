<?php
date_default_timezone_set('Asia/Jakarta');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::group(['middleware'=>'kasirAuth'],function(){
Route::get('/','tokoobatController@login')->name('formlogin');
Route::get('/dashboard','tokoobatController@dashboard')->name('dashboard');
Route::get('/kasir','tokoobatController@kasir');
Route::get('/obat','tokoobatController@obat');
Route::get('/jenisobat','tokoobatController@jenisObat');
Route::get('/kategoriobat','tokoobatController@kategoriObat');
Route::get('/alatkesehatan','tokoobatController@alatKesehatan');
Route::get('/pelanggan','tokoobatController@pelanggan');
Route::get('/suplemen','tokoobatController@suplemen');
Route::get('/supplier','tokoobatController@supplier');
Route::put('/ubahpengumuman','featureController@ubahpengumuman');
Route::get('/customstruk','tokoobatController@customstruk');
Route::get('/riwayattransaksi',function(App\transaksi $transaksi){
    // dd($transaksi->all());
    return view('feature.riwayattransaksi',['transaksi'=>$transaksi->select('kode_transaksi','nama_pesanan','jumlah_pesanan','uang_diterima','nama_kasir')->paginate(5)]);
});

Route::post('/transaksi/{id}/{barang}','tokoobatController@transaksi');
Route::post('/cart','tokoobatController@cart');
// });
Route::get('/riwayatpengiriman','tokoobatController@riwayatpengiriman');
Route::delete('/hapusriwayatpengiriman/{id}','featureController@hapusriwayatpengiriman');

Route::prefix('/kasir')->group(function(){
	Route::get('/detailkasir','tokoobatController@getModalDataKasir');
	Route::post('/tambahdatakasir','featureController@tambahdatakasir');
	Route::delete('/{id}','featureController@hapusdatakasir');
	Route::put('/{id}','featureController@ubahdatakasir');
});

Route::prefix('/kategoriobat')->group(function(){
	Route::get('/detailkategoriobat','tokoobatController@getModalKategoriObat');
	Route::post('/tambahkategoriobat','featureController@tambahkategoriobat');
	Route::delete('/{id}','featureController@hapuskategoriobat');
	Route::put('/{id}','featureController@ubahkategoriobat');
});

Route::prefix('/jenisobat')->group(function(){
	Route::get('/detailjenisobat','tokoobatController@getModalJenisObat');
	Route::post('/tambahjenisobat','featureController@tambahjenisobat');
	Route::delete('/{id}','featureController@hapusjenisobat');
	Route::put('/{id}','featureController@ubahjenisobat');
});

Route::prefix('/obat')->group(function(){
	Route::get('/detailobat','tokoobatController@getModalObat');
	Route::post('/tambahobat','featureController@tambahobat');
	Route::delete('/{id}','featureController@hapusobat');
	Route::put('/{id}','featureController@ubahobat');

	Route::get('/detailtambahstokobat','tokoobatController@getModalStokObat');
	Route::put('/tambahstokobat/{id}','featureController@tambahstokobat');
	Route::get('/detailtransaksi','tokoobatController@getModalTransaksiObat');
});

Route::prefix('/supplier')->group(function(){
	Route::get('/detailsupplier','tokoobatController@getModalSupplier');
	Route::post('/tambahsupplier','featureController@tambahsupplier');
	Route::delete('/{id}','featureController@hapussupplier');
	Route::put('/{id}','featureController@ubahsupplier');
});

Route::prefix('/alatkesehatan')->group(function(){
	Route::get('/detailalatkesehatan','tokoobatController@getModalAlatKesehatan');
	Route::post('/tambahalatkesehatan','featureController@tambahalatkesehatan');
	Route::delete('/{id}','featureController@hapusalatkesehatan');
	Route::put('/{id}','featureController@ubahalatkesehatan');

	Route::get('/detailtambahstokalatkesehatan','tokoobatController@getModalStokAlatKesehatan');
	Route::put('/tambahstokalatkesehatan/{id}','featureController@tambahstokalatkesehatan');	
	Route::get('/detailtransaksi','tokoobatController@getModalTransaksiAlatKesehatan');
});

Route::prefix('/suplemen')->group(function(){
	Route::get('/detailsuplemen','tokoobatController@getModalSuplemen');
	Route::post('/tambahsuplemen','featureController@tambahsuplemen');
	Route::delete('/{id}','featureController@hapussuplemen');
	Route::put('/{id}','featureController@ubahsuplemen');

	Route::get('/detailtambahstoksuplemen','tokoobatController@getModalStokSuplemen');
	Route::put('/tambahstoksuplemen/{id}','featureController@tambahstoksuplemen');		
	Route::get('/detailtransaksi','tokoobatController@getModalTransaksiSuplemen');
});

Route::prefix('/laporan')->group(function(){
    Route::get('/kasir','PDFController@laporan_kasir')->name('laporan.kasir');
    Route::get('/kategori','PDFController@laporan_kategori')->name('laporan.kategori');
    Route::get('/jenis','PDFController@laporan_jenis')->name('laporan.jenis');
    Route::get('/obat','PDFController@laporan_obat')->name('laporan.obat');
    Route::get('/alat-kesehatan','PDFController@laporan_alatkesehatan')->name('laporan.alat-kesehatan');
    Route::get('/suplemen','PDFController@laporan_suplemen')->name('laporan.suplemen');
    Route::get('/supplier','PDFController@laporan_supplier')->name('laporan.supplier');
});

Route::post('/login','AuthController@login');
Route::post('/logout','AuthController@logout');

