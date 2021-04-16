<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use DB;
use Hash;
use App\User;
use App\Invoice;
use Stripe\Stripe;
use Laravel\Cashier\Cashier;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index () 
    {
    	// $users = User::all()->get();
        $users = DB::table('users')->get();
        // dd($users[3]->stripe_id);
        $id = $users[4]->stripe_id;

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $cus = $stripe->customers->retrieve($id);
        // dd($cus->amount);

        // $user = Cashier::findBillable($stripeId);
        // dd($user);
    	return view('admin.users')->with(compact('users'));
    }
    public function edituser($id)
    {
    	$user = User::where('id', $id)->get();
    	$user = json_decode($user);
    	// dd($user);
    	return view('admin/edituser')->with(compact('user'));
    }

    public function adduser (Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $brand = $request->input('brand');
        $password = '1234';


        $currency = $request->input('currency');
        $amount = $request->input('amount');
        $project_description = $request->input('project_description');
        // dd($project_description);
        $phone = $request->input('phone');

        $options = array([
            'name'  =>  $name,
            'email' =>  $email,
            'phone' =>  $phone,
        ]
        );

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'brand' =>  $brand,
            'amount'    =>  $amount,
            'project_description' => $project_description,
        ]);

        $stripeCustomer = $user->createAsStripeCustomer();

        // $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        // $charge = $stripe->charges->create([
        //   'amount' => $amount,
        //   'currency' => $currency,
        //   // 'source' => 'tok_visa',
        //   'source'  =>  $email,
        //   'capture' =>  'false',
        //   'description' => $project_description,
        // ]);

        // dd($charge);

        // $user_id = $user->id;

        // $flight = Flight::find(1);

        // $user = $user->update([
        //     'payment_url'   =>  $charge->receipt_url,
        // ]);

        
        // $receipt_url = $charge->receipt_url; 
        // $c_id = $stripeCustomer->id;
        // dd($c_id);
        return redirect('admin/users')->with(compact('receipt_url'));
    }

    public function updateuser(Request $request)
    {
    	$id = $request->input('id');
    	$name = $request->input('webname');
    	$email = $request->input('email');

    	$website = User::where('id', $id)
    	->update([
      		'name' => $name,
	      	'email' => $email,
    	]);
    	return redirect('/admin/users')->with('message2', 'User updated successfully');
    }

    public function Delete($id)
  	{
    	$users = DB::table('users')->where('id', $id)->get();
    	if($users->isEmpty())
    	{
      		return redirect()->back();
    	}
        $user = DB::table('users')->where('id', $id)->delete();
        return redirect('/admin/users')->with('message3', 'User deleted successfully');
  	}

    public function invoices()
    {
        $invoices = Invoice::all();
        return view('admin.invoices')->with(compact('invoices'));
    }

    public function addinvoice()
    {
        $users = User::all();
        $users = json_decode($users);
        $invoices = Invoice::all();
        // dd($users);

        return view('admin.addinvoice')->with(compact('invoices','users'));
    }

    public function invoiced (Request $request)
    {

        $client = $request->client;
        // dd($client);
        $user = DB::table('users')->where('stripe_id',$client)->get();
        $user = json_decode($user);
        // dd($user[0]->email);
        $email = $user[0]->email;
        
        $cardname = $request->input('cardname');
        $cardnumber = $request->input('cardnumber');
        $cvv = $request->input('cvv');
        $currency = $request->input('currency');
        $expyear  = $request->input('expyear');
        $expmonth = $request->input('expmonth');
        $projectamount = $request->input('projectamount');
        $projectdescription = $request->input('projectdescription');
        
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $customer = $stripe->customers->retrieve(
          $client
        );
    
        $product = $stripe->products->create([
          'name' => 'website',
        ]);

        // dd($product);

        $productt = $stripe->products->retrieve(
          $product->id,
          []
        );

        dd($productt);
    }

    public function invoice(Request $request)
    {   
        $client = $request->client;
        // dd($client);
        $user = DB::table('users')->where('stripe_id',$client)->get();
        $user = json_decode($user);
        // dd($user[0]->email);
        $email = $user[0]->email;
        
        $cardname = $request->input('cardname');
        $cardnumber = $request->input('cardnumber');
        $cvv = $request->input('cvv');
        $currency = $request->input('currency');
        $expyear  = $request->input('expyear');
        $expmonth = $request->input('expmonth');
        $projectamount = $request->input('projectamount');
        $projectdescription = $request->input('projectdescription');
        
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $customer = $stripe->customers->retrieve(
          $client
        );

        // $customer = $stripe->paymentMethods();
        // dd($customer);

        $paymentMethod = $stripe->paymentMethods->create([
          'type' => 'card',
          'card' => [
            'number' => $cardnumber,
            'exp_month' => $expmonth,
            'exp_year' => $expyear,
            'cvc' => $cvv,
          ],
        ]);

        // dd($paymentMethod);

        // dd($customer);

        $attach = $stripe->paymentMethods->attach(
        $paymentMethod->id,
          ['customer' => $customer->id]
        );

        // dd($attach);

        // $pm = $customer->addPaymentMethod($paymentMethod);
        // dd($pm);

        // dd($client);

        // dd($paymentMethod);
                
        // $data = array([
        //     'customer'  =>  $client,
        //     // 'amount_remaining'    =>  $projectamount,
        //     'collection_method' =>   'send_invoice',
        //     'days_until_due'    =>  15,
        //     'description'   =>  $projectdescription,

        // ]);

        // $createInvoice = $stripe->invoices->create($data);

        // dd($user[0]->name);
        $name = $user[0]->name;

        $source = $stripe->sources->create([
          "type" => "ideal",
          'amount' => $projectamount,
          "currency" => $currency,
          "owner" => [
            "name"  => $name,
            "email" => $email
          ],
          "redirect" =>  [
            'return_url' =>  env('APP_URL'),
          ],
        ]);

        // dd($customer->id);

        $csource = $stripe->customers->createSource(
          $customer->id,
          [
            'source' => $source->client_secret,
          ]
        );

        // dd($csource);

        // $sourcef = $stripe->customers->createSource(
        //   $client,
        //   ['source' => $source->id,
        //     ''
        //   ]
        // );

        // dd($sourcef);

        // dd($client);

        $charge = $stripe->charges->create([
          'amount' => $projectamount,
          'currency' => $currency,
          // 'source' => 'tok_visa',
          'source'  =>  $attach->id,
          'customer' => $client,
          // 'source'  => env('STRIPE_SECRET'),
          // 'source'  =>  $email,
          // 'capture' =>  'false',
          'description' => $projectdescription,
        ]);

        // dd($charge);

        // dd($client);

        $stripeCharge = $client->charge(
            $projectamount, $request->paymentMethodId
        );

        dd('done');

        // dd($createInvoice);

    }
    
}
