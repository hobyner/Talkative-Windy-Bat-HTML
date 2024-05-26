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
                            <button class="btn btn-warning mr-2" data-bs-toggle="modal" data-bs-target="#bs-deposit-modal-lg">Deposit</button>
                            <div class="modal fade" id="bs-deposit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="depositFormModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="contactFormModalLabel">Fund your wallet</h4>
                                            <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-widget">
                                                <div class="form-result"></div>
                                                <form class="mb-0" id="deposit-form" name="deposit-form" action="{{route('deposit')}}" method="post">
                                                @csrf
                                                    <div class="row">

                                                        <div class="form-group">
                                                            <label for="cc_number" class="mb-0">Credit Card Number <small>*</small></label>
                                                            <input type="number" id="cc_number" name="number" value="" class="sm-form-control required" maxlength="19" placeholder="XXXX XXXX XXXX XXXX"/>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="cc_name" class="mb-0">Name On Card <small>*</small></label>
                                                            <input type="text" id="cc_name" name="name" value="" class="sm-form-control required" placeholder="JOHN DOE"/>
                                                        </div>

                                                        <div class="w-100"></div>

                                                        <div class="col-6 form-group">
                                                            <label for="cc_expiry" class="mb-0">Expiry</label>
                                                            <input type="text" id="cc_expiry" name="expiry" value="" class="sm-form-control required" placeholder="10/24"/>
                                                        </div>

                                                        <div class="col-6 form-group">
                                                            <label for="cc_cvv" class="mb-0">Cvv <small>*</small></label>
                                                            <input type="number" id="cc_cvv" name="cvv" value="" class="required sm-form-control" placeholder="123"/>
                                                        </div>

{{--                                                        <div class="col-12 form-group d-none">--}}
{{--                                                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />--}}
{{--                                                        </div>--}}

                                                        <div class="col-12">
                                                            <button class="button button-3d m-0" id="cc_submit" name="cc-submit" value="">Fund Wallet</button>
                                                        </div>
                                                    </div>

{{--                                                    <input type="hidden" name="prefix" value="template-contactform-">--}}

                                                </form>

                                            </div>

                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>

                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bs-transfer-modal-lg">Transfer</button>
                            <div class="modal fade" id="bs-transfer-modal-lg" tabindex="-1" role="dialog" aria-labelledby="transferFormModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="contactFormModalLabel">Transfer Funds</h4>
                                            <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-widget">
                                                <div class="form-result"></div>
                                                <form class="mb-0" id="deposit-form" name="deposit-form" action="{{route('transfer')}}" method="post">

{{--                                                    <div class="form-process">--}}
{{--                                                        <div class="css3-spinner">--}}
{{--                                                            <div class="css3-spinner-scaler"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

                                                    <div class="row">

                                                        <div class="col-sm-8 form-group">
                                                            <label for="receiver_email" class="mb-0">Recipient Email <small>*</small></label>
                                                            @if ($errors->has('email'))
                                                                <div class="style-msg errormsg">
                                                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('email') }}.</div>
                                                                </div>
                                                            @endif
                                                            <input type="email" id="receiver_email" name="email" value="{{old('email')}}" class="sm-form-control required" />
                                                        </div>

{{--                                                        <div class="w-100"></div>--}}

                                                        <div class="col-sm-4 form-group">
                                                            <label for="amount" class="mb-0">Amount (Balance: ${{auth()->user()->balance}})<small>*</small></label>
                                                            @if ($errors->has('amount'))
                                                                <div class="style-msg errormsg">
                                                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('amount') }}.</div>
                                                                </div>
                                                            @endif
                                                            <input type="number" id="amount" name="amount" value="" class="required sm-form-control" />
                                                        </div>

                                                        <div class="col-12 form-group d-none">
                                                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                                        </div>

                                                        <div class="col-12 form-group">
                                                            <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Transfer</button>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="prefix" value="template-contactform-">

                                                </form>

                                            </div>

                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
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
                            @foreach($user->transactions()->orderBy('created_at', 'desc')->limit(5)->get() as $transaction)
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
                            <td class="pages-value">{{$user->country}}</td>
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
