@extends('layouts.dashboard-layout')

@section('content')

    @if (auth()->user()->hasRole('student'))

        <div class="account-settings plans-new">
            <div class="container">
                <div class="two-items">
                    <h2 class="heading m-0">Plans</h2>
                    <div class="date">23:14, Thursday, Feb 26, 2018</div>
                </div>

                <div class="inner plans-container">
                    <div class="current-plan active">
                        <div class="heading">Current Plan</div>
                        <div class="data">
                            <div class="head">
                                <div class="plan-name">Basic Plan</div>
                                <div class="text">ACTIVE</div>
                            </div>
                            <div class="update-plan">
                                <div class="body">
                                    <p>Your basic plan is active untill <b class="font-weight-medium">06/23/2019.</b> </p>
                                </div>
                                <a href="/plan-upgrade" class="btn full">Upgrade Plan</a>
                            </div>
                        </div>
                    </div>

                    <div class="current-plan">
                        <div class="heading">Payment Method</div>

                        <form class="data info-container">
                            <div class="card-num-holder">
                                <img src="images/icons/visa@2x.png" alt="">
                                <span class="card-number">**** **** **** 8675</span>
                            </div>
                            <a href="plans-active-1.html" class="btn btn-white">Edit Card</a>
                        </form>
                    </div>

                    <div class="current-plan invoicing-info">
                        <div class="heading">Invoicing</div>

                        <div class="data info-container">
                            <div class="credit-card">
                                <div class="latest-payment">Last payment: 05/23/2019</div>
                            </div>

                            <a href="#" class="btn btn-white" data-toggle="modal" data-target="#billing">Show History</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade table-modal" id="billing" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="d-md-flex align-items-center justify-content-between mb-3">
                            <h2 class="mb-0">Invoices</h2>
                            <div class="modal-alert mb-0">
                                <span>The invoice will be generated about 24 hours after your paymengt have been received</span>
                                <a href="#" data-dismiss="modal" aria-hidden="true"><img src="images/icons/close.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Plan</th>
                                    <th>Reference</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Download</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>09/07/19</td>
                                    <td>Basic</td>
                                    <td>2019-0355705</td>
                                    <td>₦22,500</td>
                                    <td>
                                        <img src="images/icons/tick_ic.svg" alt="">
                                    </td>
                                    <td>
                                        <a href="#" class="download-ic">
                                            <img src="images/icons/download.svg" alt="" width="23" height="23">
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endif

    @if (auth()->user()->hasRole('marker'))

        <div class="user-selection marker-reg">
            <h1>Thank you for your interest in marking!</h1>
            <p>We will contact you by the mail provided on how to complete your registration and provide basic requirements that qualifies you to be a marker.</p>
            <div class="btns-holder">
                <a href="#" class="btn full">Check My Mail</a>
            </div>
        </div>

    @endif
