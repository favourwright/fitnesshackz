<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="shortcut icon" href="{{asset('storage/images/resources/logo.png')}}" type="image/.png" /> --}}
    <link href="{{asset('css/boilerplate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/helper.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('icon/style.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/jquery-3.5.1.min.js')}}" type="text/jscript"></script>
    <script src="{{asset('js/formDataAsObject.js')}}" type="text/jscript"></script>
    <script src="{{asset('js/dismiss-form-status.js')}}" type="text/jscript"></script>
    <script> $.ajaxSetup({ headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")} }); </script>
    <title>{{ config('app.name', 'Fitnessfactz') }}</title>
</head>
<body>
    <header class="str-col-12">
        <div class="site-info">
            <div class="logo"><strong>Weight loss</strong> hackz</div>
            {{-- <div class="contact">call us <strong>09000000000</strong></div> --}}
        </div>
    </header>
    <div class="page-wrap str-col-12">
        <div class="landing str-col-12">
            <div class="lead">
                <h1>Weight Loss Guaranteed</h1>
                <ul>
                    <li>Get firmer, flatter tummy</li>
                    <li>Enhance well-being</li>
                    <li>Naturally Boost energy levels</li>
                </ul>
                <button id="openForm">Try it risk free</button>
            </div>
        </div>
        <section class="str-col-12 description green">
            <h1>Get the body you want and the body you deserve with our weight loss guidance hacks</h1>
            <p>
                Belly fat and aging are not entirely problematic only if you are on the right track to finding a solution
                to getting a flat and sexy stomach and looking more younger that your age.
            </p>
        </section>
        <section class="str-col-12 second-section">
            <div class="lg-col-6 md-col-12 sm-col-12 flex">
                <h2>Don't stuggle to loose weight on your own</h2>
                <p>
                    I know many of us in this mordern times are still asking how. Take a leap
                    of faith. Register and get value for your money
                </p>
            </div>
            <div class="lg-col-6 md-col-12 sm-col-12"></div>
        </section>
        <section class="str-col-12 description">
            <h1>Power of multiple weight loss hacks</h1>
            {{-- <div class="icon-group">

            </div> --}}
        </section>
    </div>
    <div class="form-wrap flex">
        <div class="form">
            <div class="dismiss"><i class="icon-cancel"></i> </div>
            <form class="register-form style-2"action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">
                <!-- Name -->
                name: <input type="text" name="name"/><br/>
                <!-- Email field (required) -->
                email: <input type="text" name="email"/><br/>
                <!-- List token -->
                <!-- Get the token at: https://app.getresponse.com/campaign_list.html -->
                <input type="hidden" name="campaign_token" value="z7LX3" />
                <!-- Thank you page (optional) -->
                <input type="hidden" name="thankyou_url" value="https://fitnesshackz.com/thank-you"/>
                <!-- Add subscriber to the follow-up sequence with a specified day (optional) -->
                <input type="hidden" name="start_day" value="0" />
                <!-- Forward form data to your page (optional) -->
                <input type="hidden" name="forward_data" value="" />
                <!-- Subscriber button -->
                <input type="submit" value="Subscribe"/>
            </form>

            {{-- REGISTER FORM --}}
            {{-- {!! Form::open(['id'=>'register', 'class' => 'register-form style-2', 'data-route'=>route("register")]) !!} --}}
                {{-- <h3 class="title flex str-col-12">Register</h3>
                {{Form::token()}}
                {{Form::text('name', '', ['placeholder' => 'Full names ', 'required'])}}
                {{Form::email('email', '', ['placeholder' => 'Your Email', 'required'])}} --}}
                {{-- below to be replaced with icon --}}
                {{-- {{Form::submit('Register')}} --}}

                {{-- <div class="status flex unselectable">
                    <h3 class="message"></h3>
                    <div class="dismiss"> <i class="icon-cancel"></i> </div>
                </div> --}}
            {{-- {!! Form::close() !!} --}}
            {{-- this script also had to be repeated down here for some weird reason, else it won't work --}}
            <script src="{{asset('js/register.js')}}"></script>
        </div>
    </div>


    <footer class="str-col-12">
        <!-- make the copyright dynamic -->
        <?php $creation_date = 20; $current_date = date("y") ?>
        <div class="copyright">
            @if($current_date == $creation_date)
                &copy; 2020 Weight loss hackz
            @else
                &copy; 2020 - {{$current_date}} Weight loss hackz
            @endif
        </div>
    </footer>
</body>
</html>
