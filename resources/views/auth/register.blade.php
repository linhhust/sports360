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
    <link rel="stylesheet" href="{{ asset('public/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/sport.css') }}">
    <script src="{{asset('public/js/jquery.min.js')}}"></script>
    @yield('css')
</head>
<body>
    <div id="root">
        <div dir="ltr">
            <div class="layout__IdLayout-h90yrz-0 fgBaNW">
                <div class="layout__IdLayoutBody-h90yrz-2 cxzNhQ">
                    <div class="body__IdBody-sc-1kb3j31-0 iwdBQt">
                        <div class="body__IdBodyItem-sc-1kb3j31-1 dEPATL btn-back">
                            <button class="button__IconButton-sc-1357fco-0 bBovPm">
                                <svg width="1em" height="1em" viewBox="0 0 20 8" xmlns="http://www.w3.org/2000/svg" class="IconArrowLeft-ii6pzc-0 fFMeqz">
                                    <path d="M5.08 8V4.8H20V3.2H5.08V0L0 4z" fill="currentColor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="body__IdBodyItem-sc-1kb3j31-1 cjWrGu">
                            <a href="/" class="logo__IdLogoLink-sc-1b2sl50-0 bFkCVt">
                                <img src="{{ asset('/public/images/logo/logo.png') }}" alt="Girl in a jacket" width="120px" height="40px">
                            </a>
                        </div>
                        @include('auth.partner')
                        <div class="body__IdBodyItem-sc-1kb3j31-1 jBPoYd">
                            <h1 size="32" data-test-id="signupPage-heading" color="bulma.100" class="Heading-sc-1fj2bsx-0 typography__IdHeading-sy3hob-0 hDOeka">Create account</h1>
                            <form class="Form___StyledForm-sc-11bajar-1 bwvtHp SignupForm__CustomForm-yqg9ct-0 glbjYe" method="POST">
                                @csrf
                                <fieldset class="Form__Fieldset-sc-11bajar-0 jVBjCW">
                                    <legend class="Form___StyledLegend-sc-11bajar-2 cqsjax">Sign up</legend>
                                    <ul class="Stack-saln32-0 fMcwwO">
                                        <li class="FormItem-sc-5ofmdi-0 btCexx">
                                            <label class="label__LabelFlex-sc-4w9rwl-1">
                                                <span class="label__LabelContent-sc-4w9rwl-0 gfoyzb">Username</span>
                                                <input type="text" placeholder="Name your account" autocorrect="off" autocapitalize="none" required="" data-test-id="signupPage-usernameField" value="{{old('username')}}" class="Input-bxe8t3-0 TextInput__TextInputElem-xu44xk-0 dfVTHf hMFjBq" name="username">
                                            </label>
                                            @if ($errors->has('username'))
                                                <p role="alert" class="FormError-sc-11a4iqy-0 jNvcIW">{{ $errors->first('username') }}</p>
                                            @endif
                                        </li>
                                            <li class="FormItem-sc-5ofmdi-0 btCexx">
                                                <label class="label__LabelFlex-sc-4w9rwl-1">
                                                    <span class="label__LabelContent-sc-4w9rwl-0 gfoyzb">Email</span>
                                                    <input type="email" placeholder="e.g. you@example.com" required="" data-test-id="signupPage-emailField" value="{{old('email')}}" class="Input-bxe8t3-0 TextInput__TextInputElem-xu44xk-0 dfVTHf hMFjBq" name="email">
                                                </label>
                                                @if ($errors->has('email'))
                                                <p role="alert" class="FormError-sc-11a4iqy-0 jNvcIW">{{ $errors->first('email') }}</p>
                                            @endif
                                            {{-- {{dd($errors)}} --}}
                                            </li>
                                            <li class="FormItem-sc-5ofmdi-0 btCexx">
                                                <div class="SignupForm__Label-yqg9ct-3 hnwyZi">Date of birth</div>
                                                <div class="SignupForm__DOBWrapper-yqg9ct-4 bcDWLH">
                                                    <input type="number" placeholder="Day" min="1" max="31" required="" data-test-id="signupPage-dayOfBirthField" value="{{old('day')}}" class="Input-bxe8t3-0 TextInput__TextInputElem-xu44xk-0 hMFjBq" name="day">
                                                    <input type="number" placeholder="Month" min="01" max="12" required="" data-test-id="signupPage-monthOfBirthField" value="{{old('month')}}" class="Input-bxe8t3-0 TextInput__TextInputElem-xu44xk-0 hMFjBq" name="month">
                                                    <input type="number" placeholder="Year" min="1900" max="2003" required="" data-test-id="signupPage-yearOfBirthField" value="{{old('year')}}" class="Input-bxe8t3-0 TextInput__TextInputElem-xu44xk-0 hMFjBq" name="year">
                                                </div>
                                                {{-- @if ($errors->has('username'))
                                                    <p role="alert" class="FormError-sc-11a4iqy-0 jNvcIW">{{ $errors->first('username') }}</p>
                                                @endif --}}
                                            </li>
                                                <li class="FormItem-sc-5ofmdi-0 SignupForm__FormItemSpaced-yqg9ct-2 btCexx fCzvsf">
                                                    <label class="label__LabelFlex-sc-4w9rwl-1">
                                                        <span class="label__LabelContent-sc-4w9rwl-0 gfoyzb">Password</span>
                                                        <input type="password" placeholder=" " required="" data-test-id="signupPage-passwordField" value="" class="Input-bxe8t3-0 TextInput__TextInputElem-xu44xk-0 dfVTHf hMFjBq" name="password">
                                                    </label>
                                                    @if ($errors->has('password'))
                                                        <p role="alert" class="FormError-sc-11a4iqy-0 jNvcIW">{{ $errors->first('password') }}</p>
                                                    @endif
                                                </li>
                                                <li class="FormItem-sc-5ofmdi-0 btCexx">
                                                    <label for="Checkbox-xee853uqw" class="Checkbox__CheckboxLabel-sc-1ig52xa-0 jiZCdt">
                                                        <input type="checkbox" id="Checkbox-xee853uqw" name="agreedTerms" required="" data-test-id="signupPage-tosCheckbox" class="Checkbox__CheckboxInput-sc-1ig52xa-2 fkwCQb">
                                                        <span class="Checkbox__CheckboxCaption-sc-1ig52xa-1 cFwIvG">I confirm that I am at least 18 years of age, and accept the<!-- -->&nbsp;
                                                            <span class="gXSVQx">Terms and Conditions</span>.
                                                        </span>
                                                    </label>
                                                </li>
                                                <li class="FormItem-sc-5ofmdi-0 SignupForm__FormItemSpaced-yqg9ct-2 btCexx fCzvsf">
                                                    <label for="Checkbox-h4wggtkt6" class="Checkbox__CheckboxLabel-sc-1ig52xa-0 jiZCdt">
                                                        <input type="checkbox" id="Checkbox-h4wggtkt6" name="agreedMarketingEmails" data-test-id="signupPage-marketingAgreementCheckbox" class="Checkbox__CheckboxInput-sc-1ig52xa-2 fkwCQb" checked="">
                                                        <span class="Checkbox__CheckboxCaption-sc-1ig52xa-1 cFwIvG">I agree to receive bonus &amp; marketing emails</span>
                                                    </label>
                                                </li>
                                                <li class="FormItem-sc-5ofmdi-0 btCexx">
                                                    <button class="Button__StyledButton-sc-1xtdszg-0 iWtOZP" data-test-id="signupPage-formSubmitButton">
                                                        <div class="Button__InnerContainer-sc-1xtdszg-1 dAOyev">Create account</div>
                                                    </button>
                                                </li>
                                                <div class="SignupForm__CustomFormErrorWrapper-yqg9ct-1 fDOCRB"></div>
                                            </ul>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="body__IdBodyItem-sc-1kb3j31-1 hIQBUp">
                                    <p class="cta__CtaText-sc-16w8d27-0 dmytFS">Have an account?<!-- -->&nbsp;<a class="Link-n1sjvn-0-withRouter-MapProps ePMdHW" staticcontext="[object Object]" href="/login">Sign In</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="layout__IdLayoutHero-h90yrz-1 eckzt"></div>
                    </div>
                </div>
            </div>
</body>

<script src="{{asset('public/js/sportsbet/auth.js')}}"></script>
</html>
{{-- <script src="{{asset('public/js/sportsbet/sportsbet.js')}}"></script> --}}
@yield('js')