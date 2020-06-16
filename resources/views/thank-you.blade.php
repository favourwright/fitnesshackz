<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="thank-you">
            <h1>
                <span>Wow! {{Str::of(auth()->user()->name)->title()}}</span> You made it, thank you for requesting for my free report
                Your report will be in your inbox any minute from now <br /><br />

                Hey But befor you go, will you like to checkout this <span>28 days</span>
                weight loss program 100% designed for both men and women.
                <span>RESURGE</span> is a complete weight loss solution
                that's focussed on both fast and long-term results.
            </h1>
            <p>
                <a href="https://hop.clickbank.net/?affiliate=yourid&vendor=resurge&lid=3">
                    If yes, then click here to check it out
                </a>
            </p>
        </div>
    </div>
    <footer class="str-col-12">
        <!-- make the copyright dynamic -->
        <?php $creation_date = 20; $current_date = date("y"); ?>
        <div class="copyright">
            <?php if($current_date == $creation_date) { ?>
            &copy; 2020 Weight loss hackz
            <?php } else { ?>
            &copy; 2020 - {{$current_date}} Weight loss hackz
            <?php } ?>
        </div>
    </footer>
</body>
</html>
