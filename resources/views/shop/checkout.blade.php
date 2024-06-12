<x-shop-layout>
    <style>
        /* Custom styles for the checkout page */
        .section-bg {
            background-color: #f8f9fa;
            /*padding: 100px 0;*/
        }

        .cta-content h2 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        .cta-content p {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
        }

        .contact-form label {
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
            display: block;
        }

        .contact-form input,
        .contact-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .contact-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        .main-button {
            margin-top: 30px;
            text-align: center;
        }

        .main-button a,
        .main-button button {
            padding: 10px 20px;
            margin-right: 10px;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .main-button a:hover,
        .main-button button:hover {
            background-color: #0056b3;
        }

        .list-group {
            margin-bottom: 30px;
        }

        .list-group-item {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .list-group-item h4 {
            margin-bottom: 10px;
            color: #333;
        }

        .list-group-item strong {
            color: #007bff;
        }
    </style>

    <section class="section section-bg" id="call-to-action"
             style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2> <em>Checkout</em></h2>
{{--                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <section class="section">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="{{ route('save-order') }}" method="post">
                            @csrf <!-- Add CSRF token for security -->
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>Title:</label>
                                    <select name="title" required>
                                        <option value="">-- Choose --</option>
                                        <option value="dr">Dr.</option>
                                        <option value="miss">Miss</option>
                                        <option value="mr">Mr.</option>
                                        <option value="mrs">Mrs.</option>
                                        <option value="ms">Ms.</option>
                                        <option value="other">Other</option>
                                        <option value="prof">Prof.</option>
                                        <option value="rev">Rev.</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>Name:</label>
                                    <input type="text" name="name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>Email:</label>
                                    <input type="email" name="email" required>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>Phone:</label>
                                    <input type="text" name="phone" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>Address 1:</label>
                                    <input type="text" name="address1" required>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>Address 2:</label>
                                    <input type="text" name="address2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>City:</label>
                                    <input type="text" name="city" required>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>State:</label>
                                    <input type="text" name="state" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>Zip:</label>
                                    <input type="text" name="zip" required>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>Country:</label>
                                    <input type="text" name="country" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>Payment method:</label>
                                    <select name="payment_method" required>
                                        <option value="">-- Choose --</option>
                                        <option value="bank">Bank account</option>
                                        <option value="cash">Cash</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>Captcha:</label>
                                    <input type="text" name="captcha" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-button">
                                        <div class="float-left">
                                            <a href="#">Back</a>
                                        </div>
                                        <div class="float-right">
                                            <button type="submit">Pay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                </div>

                <div class="col-md-4">
                    <ul class="list-group list-group-no-border">
                        @php
                            $total = 0;
                        @endphp

                        @foreach ($cartItem as $item)
                            @php
                                $total += $item->product->price * $item->quantity;
                            @endphp
                        @endforeach

                        <li class="list-group-item" style="margin:0 0 -1px">
                            <div class="row">
                                <div class="col-6">
                                    <h4><strong>Total Amount:</strong></h4>
                                </div>

                                <div class="col-6">
                                    <h4><strong>{{ $total }}</strong></h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
    </section>

</x-shop-layout>
