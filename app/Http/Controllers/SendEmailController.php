<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Sale;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
 
    // Enviar email
    public function sendEmail()
    {
        


            //Obter a data atual
            $dataAtural = Carbon::now()->toDateString();
        
    
            //Recuperar dados do banco
            $sales = Sale::whereDate('created_at', $dataAtural)->get();


            // Eneviar os dados para email
           $envio = Mail::to(env('MAIL_TO'))->send(new SendMail($sales));

            // Redirecionar de volta à pagina anterior 
            if ($envio) {
                return back()->with('messagemEmail', 'E-mail enviado');
            }
            return redirect()->back()->with('messagemEmailErro', 'Erro ao enviar E-mail');

    }
}
