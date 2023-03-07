<?php
namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;



class BuyController extends Controller
{
    public function buy($id){

        // TODO: move this to a manager class

        SDK::setAccessToken(config('mercadopago.access_token'));
        $service = Service::find($id);
        $preference = new Preference();
        $item = new Item();
        $item->title = $service->name;
        $item->quantity = 1;
        $item->unit_price = $service->price;
        $preference->items = array($item);
        $preference->payment_methods = [
            'installments' => 1,
        ];
        $preference->back_urls = array(
            "success" => route('buy.success') . '?service_id=' . $service->id,
            "failure" => route('buy.failure'),
            "pending" => route('buy.pending')
            );
            $preference->auto_return = "approved";
        $preference->save();



        return view('buy.buy', [
            'title' => 'Comprar ' . $service->name . ' - Organically',
            'service' => $service,
            'preference' => $preference,
            'public_key' => config('mercadopago.public_key'),
        ]);
    }

    public function success(Request $request){
        $user = auth()->user();
        $user->contracted_service_id = $request->query('service_id');
        $user->contracted_service_at = now();
        $user->contracted_service_expires_at = now()->addDays(30);
        if(!$user->first_contracted_service_at){
            $user->first_contracted_service_at = now();
        }
        $user->save();
        return view('buy.buy-success', [
            'title' => 'Compra exitosa - Organically',
        ]);
    }

    public function failure(Request $request){
        return view('buy.buy-failure', [
            'title' => 'Compra fallida - Organically',
        ]);
    }

    public function pending(Request $request){
        return view('buy.buy-pending', [
            'title' => 'Compra pendiente - Organically',
        ]);
    }

}
