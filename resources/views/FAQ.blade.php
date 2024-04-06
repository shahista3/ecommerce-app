@extends('layouts.master')
@section('content')
<div class="container mt-5 pt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <div class="faq">
            <h1 class="text-center mt-5">FAQ's</h1>
            <div class="accordion" id="faqAccordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      What are the various modes of payment I can use for shopping?
                    </button>
                  </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faqAccordion">
                  <div class="card-body">
                    You can pay for your order using the following modes of payment:
                    <ul>
                      <li>UPI</li>
                      <li>Credit Card / Debit Card</li>
                      <li>Netbanking</li>
                      <li>e-Wallets</li>
                      <li>Meal Cards</li>
                      <li>Pay Later</li>
                      <li>Cash on Delivery</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Can I pay online during the delivery of the product?
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                  <div class="card-body">
                    You can pay by scanning the QR available on the invoice using any UPI app at the time of delivery. Please check with the delivery executive to assist you.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      I have placed an order with Cash on Delivery option. Can I change the payment method now?
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                  <div class="card-body">
                    Once an order is placed with Cash on Delivery option, you cannot change the payment method.
                  </div>
                </div>
              </div>
              <!-- Add more FAQ items as needed -->
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      How do I look for a particular Product?
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                  <div class="card-body">
                    You can use the search bar on our website to look for a particular product. Alternatively, you can browse through the categories to find products.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFive">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      How will you ensure the freshness of products?
                    </button>
                  </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
                  <div class="card-body">
                    We source our products from trusted suppliers and ensure they undergo strict quality control measures. Additionally, we prioritize fast delivery to maintain product freshness.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingSix">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      How can I check if the product I am ordering is in stock?
                    </button>
                  </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqAccordion">
                  <div class="card-body">
                    The product availability status is displayed on the product page. If a product is out of stock, it will be indicated, and you won't be able to add it to your cart.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingSeven">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      How do I know if I placed my order correctly?
                    </button>
                  </h2>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#faqAccordion">
                  <div class="card-body">
                    Once you've successfully placed your order, you'll receive an order confirmation email or notification. You can also check your order history on our website to verify.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingEight">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      Can I call and place an order?
                    </button>
                  </h2>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#faqAccordion">
                  <div class="card-body">
                    Currently, we only accept orders placed through our website or mobile app. However, you can reach out to our customer support for assistance with placing an order.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingNine">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                      How are the fruits and vegetables weighed?
                    </button>
                  </h2>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#faqAccordion">
                  <div class="card-body">
                    Fruits and vegetables are weighed using calibrated weighing scales to ensure accuracy.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTen">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                      How do I make changes to my order?
                    </button>
                  </h2>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#faqAccordion">
                  <div class="card-body">
                    Once an order is placed, you cannot make changes to it. However, you can cancel the order and place a new one with the desired changes.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

@endsection
