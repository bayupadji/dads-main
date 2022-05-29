<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payments;
use Codedge\Fpdf\Fpdf\Fpdf;
// use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->is_admin == 1 || Auth::user()->is_admin == NULL) {
        return view('index');
        }
    }

    public function adminHome()
    {
        if(Auth::user()->is_admin == 1) {
            return view('db', ['data_payment' => Payments::all()]);
        }
    }

    public function user(Payments $payment) {
        if(Auth::user()->is_admin == 1) {
            return view('editpayment', ['data_payment' => $payment]);
        }
    }

    public function update(Payments $payment, Request $request) {
        if(Auth::user()->is_admin == 1) {
            $request->validate([
                'bukti' => 'file|image'
            ]);

            $bukti = $payment->bukti;

            if($request->bukti) {
                $filebukti = $request->file('bukti')->store('public/image');
                $namebukti = explode('/',$filebukti);
                $bukti = $namebukti[2];
            }

            Payments::where('id', $payment->id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'no_hp' => $request->hp,
                'destinasi' => $request->destinasi,
                'tiket' => $request->tiket,
                'tanggal' => $request->tanggal,
                'harga' => $request->harga,
                'bukti' => $bukti
            ]);
            return redirect('/dashboard');
        }
    }

    public function destroy(Payments $payment) {
        if(Auth::user()->is_admin == 1) {
            Payments::destroy($payment->id);
            return back();
        }
    }

    public function pembayaran(Request $request) {
        $request->validate([
            'bukti' => 'file|image'
        ]);

        $filebukti = $request->file('bukti')->store('public/image');

        $namebukti = explode('/',$filebukti);

        Payments::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->hp,
            'destinasi' => $request->destinasi,
            'tiket' => $request->tiket,
            'tanggal' => $request->tanggal,
            'harga' => $request->harga,
            'bukti' => $namebukti[2]
        ]);
        $data = Payments::max('id');
        return redirect('/dashboard/invoice/pdf/'.$data);
        // return back();
    }

    // public function invoice() {
    //     $invoice = Payments::where('id', request('no'))->get();

    //     $pdf = PDF::loadview('invoice', ['invoice' => $invoice]);
    //     $pdf->setPaper('A4','Landscape');
    //     return $pdf->stream();
    // }

    public function invoice(Payments $payment){
        $this->pdf = new FPDF;
        $this->pdf->AddPage('P',[60,57]);

        $this->pdf->SetFont('Arial','',14);
        $this->pdf->Text(5,8,'INVOICE');

        $this->pdf->SetFont('Arial','',6);
        $this->pdf->Text(5,13,'Nama');
        $this->pdf->Text(16.3,13,':');
        $this->pdf->Text(18,13,$payment->nama);

        $this->pdf->Text(5,17,'Tanggal');
        $this->pdf->Text(16.3,17,':');
        $this->pdf->Text(18,17,$payment->tanggal);

        $this->pdf->SetFont('Arial','B',10);
        $this->pdf->SetTextColor(217, 83, 79);
        $this->pdf->Text(30,8,"Travel Buddy");

        $this->pdf->Setfont('Arial','B',6);
        $this->pdf->SetXY(5,19);
        $this->pdf->Cell(20,6,'Destinasi','B',0);
        $this->pdf->Cell(13,6,'Tiket','B',0);
        $this->pdf->Cell(13,6,'Harga','B',1);

        $this->pdf->SetFont('Arial','',6);
        $this->pdf->SetTextColor(41,43,44);
        $this->pdf->SetX(5);
        $this->pdf->Cell(20,6,$payment->destinasi,'B',0);
        $this->pdf->Cell(13,6,$payment->tiket,'B',0);
        $this->pdf->Cell(13,6,$payment->harga,'B',1);

        $this->pdf->SetFont('Arial','B',6);
        $this->pdf->SetX(5);
        $this->pdf->Cell(20,6,'',0,0);
        $this->pdf->Cell(13,6,'',0,0);
        $this->pdf->Cell(13,6,$payment->harga,0,1);

        $this->pdf->SetFont('Arial','',6);
        $this->pdf->Text(18,55,$payment->created_at);

        $this->pdf->Output('I','Invoice.pdf');
        exit;
    }
}
