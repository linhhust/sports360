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
                            <h1 size="32" data-test-id="loginPage-heading" color="bulma.100" class="Heading-sc-1fj2bsx-0 typography__IdHeading-sy3hob-0 hDOeka">Sign in</h1>
                            <form class="Form___StyledForm-sc-11bajar-1 bwvtHp Login__CustomForm-sc-1msby7y-0 eUJYKP" method='POST'>
                                @csrf
                                <fieldset class="Form__Fieldset-sc-11bajar-0 jVBjCW">
                                    <legend class="Form___StyledLegend-sc-11bajar-2 cqsjax">Sign In</legend>
                                    <ul class="Stack-saln32-0 fMcwwO">
                                        <li class="FormItem-sc-5ofmdi-0 btCexx label_username">
                                            <label class="label__LabelFlex-sc-4w9rwl-1">
                                                <span class="label__LabelContent-sc-4w9rwl-0 gfoyzb">Username</span>
                                                <input type="text" placeholder=" " required="" name="username"
                                                    autofocus="" autocorrect="off" autocapitalize="none"
                                                    data-test-id="loginPage-usernameField" value="{{old('username')}}"
                                                    class="Input-bxe8t3-0 TextInput__TextInputElem-xu44xk-0 dfVTHf hMFjBq">
                                            </label>
                                            {{-- {{dd($errors)}} --}}
                                            @if ($errors->has('username'))
                                                <p role="alert" class="FormError-sc-11a4iqy-0 jNvcIW">{{ $errors->first('username') }}</p>
                                            @endif
                                            @if ($errors->has('error'))
                                                <p role="alert" class="FormError-sc-11a4iqy-0 jNvcIW">Wrong username or password</p>
                                            @endif
                                        </li>
                                        <li class="FormItem-sc-5ofmdi-0 form__IdFormItem-sc-1xyj9v7-0 btCexx iMcJYU">
                                            <label class="label__LabelFlex-sc-4w9rwl-1"><span
                                                    class="label__LabelContent-sc-4w9rwl-0 gfoyzb">Password</span><input
                                                    type="password" placeholder=" " required="" autocorrect="off"
                                                    autocapitalize="none" data-test-id="loginPage-PasswordField"
                                                    value="" name="password"
                                                    class="Input-bxe8t3-0 TextInput__TextInputElem-xu44xk-0 dfVTHf hMFjBq"></label><span
                                                class="form__IdFormItemHint-sc-1xyj9v7-1 lgErke"><a
                                                    class="Link-n1sjvn-0-withRouter-MapProps gxpIOt"
                                                    data-test-id="loginPage-forgotPasswordLink"
                                                    staticcontext="[object Object]" href="/password/reset">Forgot
                                                    Password?</a></span></li>
                                        <li class="FormItem-sc-5ofmdi-0 btCexx"><button
                                                class="Button__StyledButton-sc-1xtdszg-0 iWtOZP"
                                                data-test-id="loginPage-submitButton">
                                                <div class="Button__InnerContainer-sc-1xtdszg-1 dAOyev">Sign In</div>
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
<script src="{{asset('public/js/sportsbet/auth.js')}}"></script>
@include('partials.notify')
</html>