<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$basic->sitename}} @isset($page_title) | {{@$page_title}} @endif</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('public/images/logo/favicon.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <link rel="stylesheet" href="{{ asset('public/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/sport.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/login.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @yield('css')
</head>
<body>
    <div id="root">
        <div dir="ltr">
            <div class="layout__IdLayout-h90yrz-0 fgBaNW">
                <div class="layout__IdLayoutBody-h90yrz-2 cxzNhQ">
                    <div class="body__IdBody-sc-1kb3j31-0 iwdBQt">
                        <div class="body__IdBodyItem-sc-1kb3j31-1 dEPATL btn-back">
                            <button
                                class="button__IconButton-sc-1357fco-0 bBovPm">
                                <svg width="1em" height="1em"
                                    viewBox="0 0 20 8" xmlns="http://www.w3.org/2000/svg"
                                    class="IconArrowLeft-ii6pzc-0 fFMeqz">
                                    <path d="M5.08 8V4.8H20V3.2H5.08V0L0 4z" fill="currentColor" fill-rule="evenodd">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="body__IdBodyItem-sc-1kb3j31-1 cjWrGu">
                            <a href="/"
                                class="logo__IdLogoLink-sc-1b2sl50-0 bFkCVt">
                                <img src="{{ asset('/public/images/logo/logo.png') }}" alt="Girl in a jacket" width="120px" height="40px">
                                {{-- <img src="{{ asset('public/images/logo/logo.svg') }}"> --}}
                            </a>
                        </div>
                        @include('auth.partner')
                        <div class="body__IdBodyItem-sc-1kb3j31-1 jBPoYd">
                            <h1 size="32" data-test-id="loginPage-heading" color="bulma.100" class="Heading-sc-1fj2bsx-0 typography__IdHeading-sy3hob-0 hDOeka">Forgot password?</h1>
                            @csrf
                            <form class="Form___StyledForm-sc-11bajar-1 bwvtHp Login__CustomForm-sc-1msby7y-0 eUJYKP" method='POST' action="{{ route('user.password.email') }}">
                                @csrf
                                <fieldset class="Form__Fieldset-sc-11bajar-0 jVBjCW">
                                    <legend class="Form___StyledLegend-sc-11bajar-2 cqsjax">Forgot password?</legend>
                                    <ul class="Stack-saln32-0 fMcwwO">
                                        <li class="FormItem-sc-5ofmdi-0 btCexx label_username">
                                            <label class="label__LabelFlex-sc-4w9rwl-1">
                                                <span class="label__LabelContent-sc-4w9rwl-0 gfoyzb">Enter your E-mail address</span>
                                                <input type="email" placeholder="e.g. you@example.com" required="" data-test-id="signupPage-emailField" value="{{old('email')}}" class="Input-bxe8t3-0 TextInput__TextInputElem-xu44xk-0 dfVTHf hMFjBq" name="email">
                                            </label>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </li>
                                        <li class="FormItem-sc-5ofmdi-0 btCexx"><button
                                                class="Button__StyledButton-sc-1xtdszg-0 iWtOZP"
                                                data-test-id="loginPage-submitButton">
                                                <div class="Button__InnerContainer-sc-1xtdszg-1 dAOyev">Send</div>
                                            </button></li>
                                        <div class="Login__CustomFormErrorWrapper-sc-1msby7y-1 dTXqVM"></div>
                                    </ul>
                                </fieldset>
                            </form>
                        </div>
                        <div class="body__IdBodyItem-sc-1kb3j31-1 hIQBUp">
                            <p class="cta__CtaText-sc-16w8d27-0 dmytFS">Don't have an account?
                                <!-- --> &nbsp;<a class="Link-n1sjvn-0-withRouter-MapProps ePMdHW"
                                    staticcontext="[object Object]" href="/register">Create account</a></p>
                        </div>
                    </div>
                </div>
                <div class="layout__IdLayoutHero-h90yrz-1 eckzt"></div>
            </div>
        </div>
    </div>
</body>
<script src="{{asset('public/admin/js/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script type="text/javascript">
    $('.btn-back').click(function(){
        window.history.back()
    });
</script>
@include('partials.notify')
</html>