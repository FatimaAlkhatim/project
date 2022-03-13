
<!-- Stripe payment code  -->
<?php
// This example sets up an endpoint using the Slim framework.
// Watch this video to get started: https://youtu.be/sGcNPFX1Ph4.


require_once __DIR__.'/../../../vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51KWINlIzOxemdA1MH2X6Ju6QeYHvd1Q6DHwn3e7jTtU8ljs2WqlQJ1vubD1bm1slEP2ejZHtDz61qLCBS4VrvhQO00RoC63koJ');


  $session = \Stripe\Checkout\Session::create([
      'payment_method_types' => ['card'],
    'line_items' => [[
      'price_data' => [
        'currency' => 'usd',
        'product_data' => [
          'name' => 'شراء عملة اجنبية',
        ],
        'unit_amount' => 2000,
      ],
      'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'https://example.com/success',
    'cancel_url' => 'https://example.com/cancel',
    ]);

  

?>



<x-app-layout>
  <br><br><br>

<center>
<div class="py-12 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <!-- value of farmers -->
                 <div>
                   <!DOCTYPE html>
                   <html lang="en">
                   <head>
                     <meta charset="UTF-8">
                     <meta http-equiv="X-UA-Compatible" content="IE=edge">
                     <meta name="viewport" content="width=device-width, initial-scale=1.0">
                     <title>Document</title>
                   </head>
                   <body>
                   

                     @foreach($info as $farmeries)
                
                  {{$farmeries->production_quantity }}
                  {{$farmeries->irrigate_type }}
                  {{$farmeries->crope_type }}
                  @endforeach
                     </form>
                   </body>
                   </html>
                  
                 
                  </div>
                
                 
            <!-- end of value of farmers  -->
            <br><br>

<button id="checkout-button" type="button" class="btn btn-info btn-lg" > اضفط لدفع زكاتك 


</button>

            </div>
            </div>
        </div>
    </div>
    </center>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('pk_test_51KWINlIzOxemdA1M6dSLt2xblfRGoMGAoD38zTDvOyjm0yhbhzWCHrxUpMUVc5DRLkJn4Ke7BCSdUuwbhM7Zg44H00hgNLvZZ9');
        const btn = document.getElementById("checkout-button")
        btn.addEventListener('click', function(e){
            e.preventDefault();
            stripe.redirectToCheckout({
                sessionId:  "<?php  echo $session->id  ?>"
            })
        });
    </script>
    </script>
    </x-app-layout>
