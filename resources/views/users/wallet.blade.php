@include('components.header')

<section id="content" class="bg-color-light">
    <div class="container py-1">
        <div class="row my-6">
            <div class="col-lg-12">
                <!-- Wallet Balance Card -->
                <div class="card text-center wallet-card">
                    <div class="card-body">
                        <h2 class="card-title">Wallet Balance</h2>
                        <p class="card-text" style="font-size: 30px; font-weight: bold;">${{$user->balance}}</p>
                        <div class="mt-3">
{{--                            <button class="btn btn-primary mr-2">Deposit</button>--}}
                            <button class="btn btn-primary mr-2" data-bs-toggle="modal" data-bs-target=".bs-deposit-modal-lg">Deposit</button>
                            <div class="modal fade bs-deposit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <form id="deposit-form" action="{{ route('deposit') }}" method="POST">
                                @csrf
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Deposit</h4>
                                            <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-8 mb-4">
                                                        <label>Credit Card number:</label>
                                                        <input type="number" placeholder="xxxx xxxx xxxx xxxx" name="number" id="credit-card-no" class="sm-form-control border-form-control" value="">
                                                    </div>
                                                    <div class="col-4 mb-4">
                                                        <label>CVV:</label>
                                                        <input type="number" name="cvv" maxlength="3" pattern="\d*" id="credit-card-cvv" class="sm-form-control border-form-control" value="">
                                                    </div>
                                                    <div class="col-8 mb-4">
                                                        <label>Name on Credit Card:</label>
                                                        <input type="text" name="name" id="credit-card-name" class="sm-form-control border-form-control required" value="">
                                                        <small class="text-muted">Full name as displayed on card</small>
                                                    </div>
                                                    <div class="col-4 mb-4">
                                                        <label>Expiry:</label>
                                                        <input type="text" value="" id="credit-card-exp" class="sm-form-control required border-form-control text-start" name="expiry" placeholder="MM/YYYY">
                                                    </div>

                                                    <div class="col-12 d-none">
                                                        <input type="text" id="credit-card-botcheck" name="credit-card-botcheck" value="" />
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" name="booking-registration-submit" class="button button-rounded button-light text-dark">Deposit</button>
                                                    </div>

                                                    <input type="hidden" name="prefix" value="booking-registration-">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target=".bs-transfer-modal-lg">Transfer</button>
                            <div class="modal fade bs-transfer-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <form id="transfer-form" action="{{ route('transfer') }}" method="POST">
                                    @csrf
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Transfer</h4>
                                            <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-8 mb-4">
                                                        <label>Receiver Email:</label>
                                                        <input required type="email" name="receiver_email" id="booking-registration-card-no" class="sm-form-control border-form-control" value="">
                                                    </div>
                                                    <div class="col-4 mb-4">
                                                        <label>Amount:</label>
                                                        <input required type="number" name="trans_amount" id="booking-registration-card-cvv" class="sm-form-control border-form-control" value="">
                                                    </div>

                                                    <div class="col-12 d-none">
                                                        <input type="text" id="booking-registration-botcheck" name="booking-registration-botcheck" value="" />
                                                    </div>
                                                    <div class="col-12">
                                                        <button  onclick="return confirm('Confirm Transfer Action?');"  type="submit" name="booking-registration-submit" class="button button-rounded button-light text-dark">Transfer</button>
                                                    </div>

                                                    <input type="hidden" name="prefix" value="booking-registration-">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 pt-3">
                <!-- Last Transactions Table -->
                <div class="card wallet-card">
                    <div class="card-body">
                        <h3>Last Transactions</h3>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user->transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->created_at->format('d-m-Y') }}</td>
                                    <td>{{ $transaction->desc }}</td>
                                    <td>${{ $transaction->amount }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pt-3">
                <div class="card wallet-card">
                    <div class="card-body">
                        <h3>My Profile</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="w-70">Items:</th>
                            <th class="w-30">Price:</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Minimum Investment:</td>
                            <td class="responsive-value">$1000</td>
                        </tr>
                        <tr>
                            <td>Maximum Investment:</td>
                            <td class="retina-value">$1000000</td>
                        </tr>
                        <tr>
                            <td>Registered as:</td>
                            <td class="website-type-value">{{$user->type}}</td>
                        </tr>
                        <tr>
                            <td>Registration Date:</td>
                            <td class="design-value">{{$user->created_at->format('d-m-Y')}}</td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td class="pages-value">USA</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>




@include('components.footer')
