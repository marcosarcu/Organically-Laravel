<?php
namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use MercadoPago\SDK;

class BuyController extends Controller
{
    public function buy($id){
        SDK::setAccessToken(config('mercadopago.access_token'));

        $service = Service::find($id);
        return view('buy.buy', [
            'title' => 'Comprar ' . $service->name . ' - Organically',
            'service' => $service,
        ]);
    }

}
