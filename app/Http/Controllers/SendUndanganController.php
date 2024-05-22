<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SendUndanganController extends Controller
{
    //
    public function undangan($nama,  $alamat)
    {
        $url = url('add-tamu/' . $nama . '/' . $alamat);
        $qrcode = QrCode::size(100)->generate($url);
        return view('undanganku', ['qrcode' => $qrcode, 'nama'=>$nama, 'alamat'=>$alamat]);
    }
}
