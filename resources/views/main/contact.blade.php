@extends('layouts.app')
@section('content')
<div class="wrapper">
    <div class="animate-dropdown">
        <!-- ========================================= BREADCRUMB ========================================= -->
        <div id="top-mega-nav">
            <div class="container">
                <nav>
                    <ul class="inline">
                        <li class="dropdown le-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-list"></i> shop by department
                            </a>
                            <ul class="dropdown-menu" id="departmentList">

                            </ul>
                        </li>

                        <li class="breadcrumb-nav-holder">
                            <ul>
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item current gray">
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </li><!-- /.breadcrumb-nav-holder -->
                    </ul>
                </nav>
            </div><!-- /.container -->
        </div><!-- /#top-mega-nav -->
        <!-- ========================================= BREADCRUMB : END ========================================= -->
    </div>
    <!-- ========================================= MAIN ========================================= -->
    <main id="contact-us" class="inner-bottom-md">
        <div class="container">
            <div class="row" style="display: flex;justify-content: center">
                <div class="col-md-8">
                 @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (\Illuminate\Support\Facades\Session::has('success'))
                        <div class="alert alert-success">
                            {!! session('success') !!}
                        </div>
                    @endif
                    <section class="section leave-a-message">
                        <h2 class="bordered">Leave a Message</h2>
                        <form action="{{route('contact.store')}}" id="contact-form" class="contact-form cf-style-1 inner-top-xs" method="post" >
                            @csrf
                            <div class="row field-row">
                                <div class="col-xs-12 col-sm-6">
                                    <label>Your Name*</label>
                                    <input class="le-input" type="text" name="name">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label>Your Email*</label>
                                    <input class="le-input" type="email" name="email">
                                </div>
                            </div><!-- /.field-row -->

                            <div class="field-row">
                                <label>Subject</label>
                                <input type="text" class="le-input" name="subject">
                            </div><!-- /.field-row -->

                            <div class="field-row">
                                <label>Your Message</label>
                                <textarea rows="8" class="le-input" name="message"></textarea>
                            </div><!-- /.field-row -->

                            <div class="buttons-holder">
                                <button type="submit" class="le-button huge">Send Message</button>
                            </div><!-- /.buttons-holder -->
                        </form><!-- /.contact-form -->
                    </section><!-- /.leave-a-message -->
                </div><!-- /.col -->

{{--                <div class="col-md-4">--}}
{{--                    <section class="our-store section inner-left-xs">--}}
{{--                        <h2 class="bordered">Our Store</h2>--}}
{{--                        <address>--}}
{{--                            17 Princess Road <br/>--}}
{{--                            London, Greater London <br/>--}}
{{--                            NW1 8JR, UK--}}
{{--                        </address>--}}
{{--                        <h3>Hours of Operation</h3>--}}
{{--                        <ul class="list-unstyled operation-hours">--}}
{{--                            <li class="clearfix">--}}
{{--                                <span class="day">Monday:</span>--}}
{{--                                <span class="pull-right hours">12-6 PM</span>--}}
{{--                            </li>--}}
{{--                            <li class="clearfix">--}}
{{--                                <span class="day">Tuesday:</span>--}}
{{--                                <span class="pull-right hours">12-6 PM</span>--}}
{{--                            </li>--}}
{{--                            <li class="clearfix">--}}
{{--                                <span class="day">Wednesday:</span>--}}
{{--                                <span class="pull-right hours">12-6 PM</span>--}}
{{--                            </li>--}}
{{--                            <li class="clearfix">--}}
{{--                                <span class="day">Thursday:</span>--}}
{{--                                <span class="pull-right hours">12-6 PM</span>--}}
{{--                            </li>--}}
{{--                            <li class="clearfix">--}}
{{--                                <span class="day">Friday:</span>--}}
{{--                                <span class="pull-right hours">12-6 PM</span>--}}
{{--                            </li>--}}
{{--                            <li class="clearfix">--}}
{{--                                <span class="day">Saturday:</span>--}}
{{--                                <span class="pull-right hours">12-6 PM</span>--}}
{{--                            </li>--}}
{{--                            <li class="clearfix">--}}
{{--                                <span class="day">Sunday</span>--}}
{{--                                <span class="pull-right hours">Closed</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h3>Career</h3>--}}
{{--                        <p>If you're interested in employment opportunities at MediaCenter, please email us: <a href="mailto:contact@yourstore.com">contact@yourstore.com</a></p>--}}
{{--                    </section><!-- /.our-store -->--}}
{{--                </div><!-- /.col -->--}}

            </div><!-- /.row -->
        </div><!-- /.container -->
    </main>
    <!-- ========================================= MAIN : END ========================================= -->

   </div><!-- /.wrapper -->

@endsection
