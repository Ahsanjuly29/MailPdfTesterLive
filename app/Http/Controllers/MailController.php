<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use App\Mail\MyTestMailWithPdf;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendemail(Request $request)
    {
        if (!empty($request->download_pdf)) {
            try {
                $pdf = $this->generatePdf($request);
                return $pdf->stream(date('d-m-Y-h-i-s') . '.pdf');
            } catch (\Exception $ex) {
                return back()->withError($ex->getMessage());
            }
        } else {
            try {
                $data['emails'] = explode(',', $request->email);
                // Check if empty datas are coming
                foreach ($data['emails'] as $key => $email) {
                    if (!empty($email)) {
                        $data['emails'] = [
                            $email
                        ];
                    }
                }

                $data['cc'] = explode(',', $request->cc);
                // Check if empty datas are coming
                foreach ($data['cc'] as $key => $email) {
                    if (!empty($email)) {
                        $data['cc'] = [
                            $email
                        ];
                    }
                }

                $data['bcc'] = explode(',', $request->bcc);
                // Check if empty datas are coming
                foreach ($data['bcc'] as $key => $email) {
                    if (!empty($email)) {
                        $data['bcc'] = [
                            $email
                        ];
                    }
                }

                $details = $request->details;
                $mail = Mail::to($data['emails']);

                if (!empty($request['cc'])) {
                    $mail = $mail->cc($data['cc']);
                }
                if (!empty($request['bcc'])) {
                    $mail = $mail->cc($data['bcc']);
                }

                // When pdf is not Attached
                if (isset($request->pdf)) {
                    $pdf = $this->generatePdf($request);
                    // When pdf is Attached
                    $mail->send(new MyTestMailWithPdf($details, $pdf));
                } else {
                    $mail->send(new MyTestMail($details));
                }

                return back()->withSuccess('Email Sent Successfully')->withInput($request->all());
            } catch (\Exception $ex) {
                return back()->withError($ex->getMessage());
            }
        }
    }

    public function generatePdf(Request $request)
    {
        $details = $request->details;
        return $pdf = PDF::loadView('pdf.myTestPdf', compact('details'))->setOptions(['defaultFont' => 'Nunito Sans']);
    }
}
