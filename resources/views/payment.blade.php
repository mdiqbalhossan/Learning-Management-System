<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Payment and Order Now</title>
</head>

<body>


    <div class="container my-5">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Payment Information</h5>
                        <div class="my-2">
                            <button type="button" class="btn btn-success">
                                Payable Amount <span class="badge badge-light">{{ setting('currency_symbol') }}{{
                                    Session::get('total_amount');
                                    }}</span>
                                <span class="sr-only">unread messages</span>
                            </button>
                            <button type="button" class="btn btn-info">
                                Reference Number <span class="badge badge-light">{{ Session::get('reference_number');
                                    }}</span>
                                <span class="sr-only">unread messages</span>
                            </button>
                        </div>
                        <form action="{{ route('payment.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="reference_number" value="{{ Session::get('reference_number');
                                    }}">
                            <span>Payment Method</span><br>
                            <div class="my-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio1"
                                        value="bkash">
                                    <label class="form-check-label" for="inlineRadio1">Bkash</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2"
                                        value="nagad">
                                    <label class="form-check-label" for="inlineRadio2">Nagad</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="payment_number">Payment Number</label>
                                <input type="text" class="form-control" id="payment_number"
                                    aria-describedby="payment_number" name="payment_number">
                                <small id="payment_number" class="form-text text-muted">Payment Number which number you
                                    use
                                    in payment</small>
                            </div>
                            <div class="form-group">
                                <label for="transaction_id">Transaction ID</label>
                                <input type="text" class="form-control" id="transaction_id" name="transaction_id">
                            </div>
                            <button type="submit" class="btn btn-success float-right">Pay Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Payment Instruction</h5>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Bkash</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Nagad</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <ol class="my-2">
                                    <li>Dial *247# from your bKash registered mobile number.</li>
                                    <li>Select "Send Money" by entering '1'.</li>
                                    <li>Enter the recipient's bKash number. (016********)</li>
                                    <li>Enter the amount you want to send.</li>
                                    <li>Add a reference if you want to (optional).</li>
                                    <li>Enter your bKash PIN.</li>
                                    <li>Check the transaction summary and press '1' to confirm the transaction.</li>
                                </ol>
                                <p>Alternatively, you can also send money using the bKash app:</p>
                                <ol class="my-2">
                                    <li>Open the bKash app and log in.</li>
                                    <li>Tap on the 'Send Money' option on the home screen.</li>
                                    <li>Enter the recipient's bKash number. (016********)</li>
                                    <li>Enter the amount you want to send.</li>
                                    <li>Add a reference if you want to (optional).</li>
                                    <li>Tap on 'Next'.</li>
                                    <li>Check the transaction summary and tap on 'Send' to confirm the transaction.</li>
                                </ol>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <ol class="my-2">
                                    <li>Dial *167# from your Nagad registered mobile number.</li>
                                    <li>Select "Send Money" by entering '2'.</li>
                                    <li>Enter the recipient's Nagad account number or mobile number. (016********)</li>
                                    <li>Enter the amount you want to send.</li>
                                    <li>Add a reference if you want to (optional).</li>
                                    <li>Enter your Nagad PIN.</li>
                                    <li>Check the transaction summary and press '1' to confirm the transaction.</li>
                                </ol>
                                <p>Alternatively, you can also send money using the bKash app:</p>
                                <ol class="my-2">
                                    <li>Open the Nagad app and log in.</li>
                                    <li>Tap on the 'Send Money' option on the home screen.</li>
                                    <li>Enter the recipient's Nagad account number or mobile number. (016********)</li>
                                    <li>Enter the amount you want to send.</li>
                                    <li>Add a reference if you want to (optional).</li>
                                    <li>Tap on 'Next'.</li>
                                    <li>Check the transaction summary and tap on 'Confirm' to confirm the transaction.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>