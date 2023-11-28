<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign in - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{asset('assets/dist/css/tabler.min.css?1684106062')}}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/tabler-flags.min.css?1684106062')}}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/tabler-payments.min.css?1684106062')}}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/tabler-vendors.min.css?1684106062')}}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/demo.min.css?1684106062')}}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <h1>ABC BANK</h1>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    @if(Session::has('status'))
                    <div class="alert alert-success">
                        {{ Session::get('status')}}
                    </div>
                    @endif
                    <h2 class="h2 text-center mb-4">Login to your account</h2>
                    <form action="{{route('post_login')}}" method="post" autocomplete="off" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter email" autocomplete="off">
                            @if ($errors->has('email'))
                            <span class="text-danger errbk">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
                            @if ($errors->has('password'))
                            <span class="text-danger errbk">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center text-muted mt-3">
                Don't have account yet? <a href="{{route('register')}}" tabindex="-1">Sign up</a>
            </div>
        </div>
    </div>
</body>

</html>