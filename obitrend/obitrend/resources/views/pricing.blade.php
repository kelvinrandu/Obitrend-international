@extends('layouts.app3')

@section('content')
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">

        <div class="page-sidebar navbar-collapse collapse">

        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">

            <h1 class="page-title"> Pricing
                <!-- <small>pricing table samples</small> -->
            </h1>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ route('welcome') }}">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Pricing</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">

                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Pricing </span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="pricing-content-1">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="price-column-container border-active">
                                    <div class="price-table-head bg-blue">
                                        <h2 class="no-margin">Death announcement</h2>
                                    </div>
                                    <div class="arrow-down border-top-blue"></div>
                                    <div class="price-table-pricing">
                                        <h3>
                                            <sup class="price-sign">$</sup>20</h3>

                                        <div class="price-ribbon">Popular</div>
                                    </div>
                                    <div class="price-table-content">
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-refresh"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding">for 3 days</div>
                                        </div>
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-drawer"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding">50GB Storage</div>
                                        </div>
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-screen-smartphone"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding">Single Device</div>
                                        </div>

                                    </div>
                                    <div class="arrow-down arrow-grey"></div>
                                    <div class="price-table-footer">
                                        <button type="button" class="btn grey-salsa btn-outline sbold uppercase price-button">Make Request</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="price-column-container border-active">
                                    <div class="price-table-head bg-red">
                                        <h2 class="no-margin">Public Notice</h2>
                                    </div>
                                    <div class="arrow-down border-top-red"></div>
                                    <div class="price-table-pricing">
                                        <h3>
                                            <sup class="price-sign">$</sup>40</h3>
                                        <p>for 3 days</p>
                                    </div>
                                    <div class="price-table-content">
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-refresh"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding"> for 3 day</div>
                                        </div>
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-drawer"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding">100GB Storage</div>
                                        </div>
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-screen-smartphone"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding">Single Device</div>
                                        </div>

                                    </div>
                                    <div class="arrow-down arrow-grey"></div>
                                    <div class="price-table-footer">
                                        <button type="button" class="btn grey-salsa btn-outline price-button sbold uppercase">Make Request</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="price-column-container border-active">
                                    <div class="price-table-head bg-green">
                                        <h2 class="no-margin">Anniversaries</h2>
                                    </div>
                                    <div class="arrow-down border-top-green"></div>
                                    <div class="price-table-pricing">
                                        <h3>
                                            <sup class="price-sign">$</sup>40</h3>
                                        <p>for 3 days</p>

                                    </div>
                                    <div class="price-table-content">
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-refresh"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding">  for 3 day</div>
                                        </div>
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-drawer"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding">500GB Storage</div>
                                        </div>
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-cloud-download"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding">Cloud Syncing</div>
                                        </div>

                                    </div>
                                    <div class="arrow-down arrow-grey"></div>
                                    <div class="price-table-footer">
                                        <button type="button" class="btn green price-button sbold uppercase">Make Request</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="price-column-container border-active">
                                    <div class="price-table-head bg-purple">
                                        <h2 class="no-margin">Missing persons</h2>
                                    </div>
                                    <div class="arrow-down border-top-purple"></div>
                                    <div class="price-table-pricing">
                                        <h3>
                                            <sup class="price-sign">$</sup>10</h3>

                                    </div>

                                    <div class="price-table-content">
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-users"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding">6 $ for children</div>
                                        </div>
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-refresh"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding"> for 3 day</div>
                                        </div>
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-cloud-download"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding">Cloud Syncing</div>
                                        </div>
                                        <div class="row mobile-padding">
                                            <div class="col-xs-3 text-right mobile-padding">
                                                <i class="icon-refresh"></i>
                                            </div>
                                            <div class="col-xs-9 text-left mobile-padding">Weekly Backups</div>
                                        </div>
                                    </div>
                                    <div class="arrow-down arrow-grey"></div>
                                    <div class="price-table-footer">
                                        <button type="button" class="btn grey-salsa btn-outline price-button sbold uppercase">Make Request</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-red"></i>
                        <span class="caption-subject font-red bold uppercase">Pricing 2</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="pricing-content-2">
                        <div class="pricing-table-container">
                            <div class="row padding-fix">
                                <div class="col-md-3 no-padding">
                                    <div class="price-column-container border-right border-top border-left">
                                        <div class="price-table-head price-1">
                                            <h2 class="uppercase no-margin">Budget</h2>
                                        </div>
                                        <div class="price-table-pricing">
                                            <h3>
                                                <sup class="price-sign">$</sup>24</h3>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-user"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">3 Members</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-drawer"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">50GB Storage</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-screen-smartphone"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">Single Device</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">Monthly Backups</div>
                                            </div>
                                        </div>
                                        <div class="price-table-footer">
                                            <button type="button" class="btn grey-salsa btn-outline sbold uppercase bold">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 no-padding">
                                    <div class="price-column-container border-top">
                                        <div class="price-table-head price-1">
                                            <h2 class="uppercase no-margin">Solo</h2>
                                        </div>
                                        <div class="price-table-pricing">
                                            <h3>
                                                <sup class="price-sign">$</sup>39</h3>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-user"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">5 Members</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-drawer"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">100GB Storage</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-screen-smartphone"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">Single Device</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">Weekly Backups</div>
                                            </div>
                                        </div>
                                        <div class="price-table-footer">
                                            <button type="button" class="btn grey-salsa btn-outline sbold uppercase bold">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 no-padding">
                                    <div class="price-column-container featured-price border-top">
                                        <div class="price-feature-label uppercase bg-green-jungle">Best Value</div>
                                        <div class="price-table-head price-2">
                                            <h2 class="uppercase no-margin">Start up</h2>
                                        </div>
                                        <div class="price-table-pricing">
                                            <h3>
                                                <sup class="price-sign">$</sup>59</h3>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-user-follow"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">20 Members</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-drawer"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">500GB Storage</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-cloud-download"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase font-green sbold">Cloud Syncing</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase font-green sbold">Daily Backups</div>
                                            </div>
                                        </div>
                                        <div class="price-table-footer">
                                            <button type="button" class="btn green featured-price uppercase">Get it now!</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 no-padding">
                                    <div class="price-column-container border-top border-right">
                                        <div class="price-table-head price-3">
                                            <h2 class="uppercase no-margin">Enterprise</h2>
                                        </div>
                                        <div class="price-table-pricing">
                                            <h3>
                                                <sup class="price-sign">$</sup>128</h3>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-users"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">100 Members</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-drawer"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase font-green sbold">2TB Storage</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-cloud-download"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">Cloud Syncing</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">Weekly Backups</div>
                                            </div>
                                        </div>
                                        <div class="price-table-footer">
                                            <button type="button" class="btn grey-salsa btn-outline sbold uppercase bold">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-blue"></i>
                        <span class="caption-subject font-blue bold uppercase">Pricing 3</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="pricing-content-2">
                        <div class="pricing-table-container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="price-column-container border-left border-top border-right">
                                        <div class="price-table-head price-1">
                                            <h2 class="uppercase bg-blue font-grey-cararra opt-pricing-5">Budget</h2>
                                        </div>
                                        <div class="price-table-pricing">
                                            <h3>
                                                <sup class="price-sign">$</sup>24</h3>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-user"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">3 Members</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-drawer"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">50GB Storage</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-screen-smartphone"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">Single Device</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">Monthly Backups</div>
                                            </div>
                                        </div>
                                        <div class="price-table-footer">
                                            <button type="button" class="btn grey-salsa btn-outline sbold uppercase">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="price-column-container border-left border-top border-right">
                                        <div class="price-table-head price-1">
                                            <h2 class="uppercase bg-blue-steel font-grey-cararra opt-pricing-5">Solo</h2>
                                        </div>
                                        <div class="price-table-pricing">
                                            <h3>
                                                <sup class="price-sign">$</sup>39</h3>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-user"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">5 Members</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-drawer"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">100GB Storage</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-screen-smartphone"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">Single Device</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">Weekly Backups</div>
                                            </div>
                                        </div>
                                        <div class="price-table-footer">
                                            <button type="button" class="btn grey-salsa btn-outline sbold uppercase">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="price-column-container featured-price">
                                        <div class="price-feature-label uppercase bg-red">Best Value</div>
                                        <div class="price-table-head price-2">
                                            <h2 class="uppercase bg-green-jungle font-grey-cararra opt-pricing-5">Start up</h2>
                                        </div>
                                        <div class="price-table-pricing">
                                            <h3>
                                                <sup class="price-sign">$</sup>59</h3>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-user-follow"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">20 Members</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-drawer"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">500GB Storage</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-cloud-download"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase font-green sbold">Cloud Syncing</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase font-green sbold">Daily Backups</div>
                                            </div>
                                        </div>
                                        <div class="price-table-footer">
                                            <button type="button" class="btn green featured-price uppercase">Get it now!</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="price-column-container border-left border-top border-right">
                                        <div class="price-table-head price-3">
                                            <h2 class="uppercase bg-blue-ebonyclay font-grey-cararra opt-pricing-5">enterprise</h2>
                                        </div>
                                        <div class="price-table-pricing">
                                            <h3>
                                                <sup class="price-sign">$</sup>128</h3>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-users"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">100 Members</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-drawer"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase font-green sbold">2TB Storage</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-cloud-download"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">Cloud Syncing</div>
                                            </div>
                                            <div class="row no-margin">
                                                <div class="col-xs-3 text-right">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left uppercase">Weekly Backups</div>
                                            </div>
                                        </div>
                                        <div class="price-table-footer">
                                            <button type="button" class="btn grey-salsa btn-outline sbold uppercase">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>
    <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
        <div class="page-quick-sidebar">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                        <span class="badge badge-danger">2</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                        <span class="badge badge-success">7</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-bell"></i> Alerts </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-info"></i> Notifications </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-speech"></i> Activities </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-settings"></i> Settings </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                    <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                        <h3 class="list-heading">Staff</h3>
                        <ul class="media-list list-items">
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-success">8</span>
                                </div>
                                <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Bob Nilson</h4>
                                    <div class="media-heading-sub"> Project Manager </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Nick Larson</h4>
                                    <div class="media-heading-sub"> Art Director </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-danger">3</span>
                                </div>
                                <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Deon Hubert</h4>
                                    <div class="media-heading-sub"> CTO </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Ella Wong</h4>
                                    <div class="media-heading-sub"> CEO </div>
                                </div>
                            </li>
                        </ul>
                        <h3 class="list-heading">Customers</h3>
                        <ul class="media-list list-items">
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-warning">2</span>
                                </div>
                                <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Lara Kunis</h4>
                                    <div class="media-heading-sub"> CEO, Loop Inc </div>
                                    <div class="media-heading-small"> Last seen 03:10 AM </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="label label-sm label-success">new</span>
                                </div>
                                <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Ernie Kyllonen</h4>
                                    <div class="media-heading-sub"> Project Manager,
                                        <br> SmartBizz PTL </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Lisa Stone</h4>
                                    <div class="media-heading-sub"> CTO, Keort Inc </div>
                                    <div class="media-heading-small"> Last seen 13:10 PM </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-success">7</span>
                                </div>
                                <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Deon Portalatin</h4>
                                    <div class="media-heading-sub"> CFO, HD LTD </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Irina Savikova</h4>
                                    <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-danger">4</span>
                                </div>
                                <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Maria Gomez</h4>
                                    <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                    <div class="media-heading-small"> Last seen 03:10 AM </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="page-quick-sidebar-item">
                        <div class="page-quick-sidebar-chat-user">
                            <div class="page-quick-sidebar-nav">
                                <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                    <i class="icon-arrow-left"></i>Back</a>
                            </div>
                            <div class="page-quick-sidebar-chat-user-messages">
                                <div class="post out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:15</span>
                                        <span class="body"> When could you send me the report ? </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:15</span>
                                        <span class="body"> Its almost done. I will be sending it shortly </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:15</span>
                                        <span class="body"> Alright. Thanks! :) </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:16</span>
                                        <span class="body"> You are most welcome. Sorry for the delay. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:17</span>
                                        <span class="body"> No probs. Just take your time :) </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:40</span>
                                        <span class="body"> Alright. I just emailed it to you. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:17</span>
                                        <span class="body"> Great! Thanks. Will check it right away. </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:40</span>
                                        <span class="body"> Please let me know if you have any comment. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:17</span>
                                        <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="page-quick-sidebar-chat-user-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type a message here...">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn green">
                                            <i class="icon-paper-clip"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                    <div class="page-quick-sidebar-alerts-list">
                        <h3 class="list-heading">General</h3>
                        <ul class="feeds list-items">
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 4 pending tasks.
                                                <span class="label label-sm label-warning "> Take action
                                                    <i class="fa fa-share"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> Just now </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Finance Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-danger">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> New order received with
                                                <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 30 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                <span class="label label-sm label-warning"> Overdue </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 2 hours </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> IPO Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <h3 class="list-heading">System</h3>
                        <ul class="feeds list-items">
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 4 pending tasks.
                                                <span class="label label-sm label-warning "> Take action
                                                    <i class="fa fa-share"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> Just now </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Finance Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-default">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> New order received with
                                                <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 30 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-warning">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                <span class="label label-sm label-default "> Overdue </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 2 hours </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> IPO Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                    <div class="page-quick-sidebar-settings-list">
                        <h3 class="list-heading">General Settings</h3>
                        <ul class="list-items borderless">
                            <li> Enable Notifications
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Allow Tracking
                                <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Log Errors
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Auto Sumbit Issues
                                <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Enable SMS Alerts
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        </ul>
                        <h3 class="list-heading">System Settings</h3>
                        <ul class="list-items borderless">
                            <li> Security Level
                                <select class="form-control input-inline input-sm input-small">
                                    <option value="1">Normal</option>
                                    <option value="2" selected>Medium</option>
                                    <option value="e">High</option>
                                </select>
                            </li>
                            <li> Failed Email Attempts
                                <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                            <li> Secondary SMTP Port
                                <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                            <li> Notify On System Error
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Notify On SMTP Error
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        </ul>
                        <div class="inner-content">
                            <button class="btn btn-success">
                                <i class="icon-settings"></i> Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2017 &copy; Obitrend international


        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
    <!-- BEGIN QUICK NAV -->
    <!-- <nav class="quick-nav">
        <a class="quick-nav-trigger" href="#0">
            <span aria-hidden="true"></span>
        </a>
        <ul>
            <li>
                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">
                    <span>Purchase Metronic</span>
                    <i class="icon-basket"></i>
                </a>
            </li>
            <li>
                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">
                    <span>Customer Reviews</span>
                    <i class="icon-users"></i>
                </a>
            </li>
            <li>
                <a href="http://keenthemes.com/showcast/" target="_blank">
                    <span>Showcase</span>
                    <i class="icon-user"></i>
                </a>
            </li>
            <li>
                <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                    <span>Changelog</span>
                    <i class="icon-graph"></i>
                </a>
            </li>
        </ul>
        <span aria-hidden="true" class="quick-nav-bg"></span>
    </nav> -->
    <div class="quick-nav-overlay"></div>
    <!-- END QUICK NAV -->
    <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->

@endsection
