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

    <link rel="stylesheet" href="{{ asset('public/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/sport.css') }}">
    <link rel="stylesheet" href="{{asset('public/css/withdraw.css')}}">
    {{-- <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css"> --}}
    <script src="{{asset('public/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/js/pusher.min.js')}}"></script>
</head>
<body>
	<div id="root">
		<div dir="ltr">
			<div dir="ltr">
			    <div class="container__ArenaContainer-z2twri-0 dXVVyO">
			        <div dir="ltr" class="template__Template-sm5no8-4 jKPtrB">
			            <header class="template__TemplateHeader-sm5no8-0 RJJHw">
			                <div class="Header__HeaderContainer-zuvyx3-0 jlgqXl">
			                    <header class="layout__HeaderLayout-sc-1sp98x0-0 eAXKQB">
			                    	@include('sportsbet.partials.header')
			                    </header>
			                </div>
			            </header>
			            <aside class="template__TemplateAside-sm5no8-1 bvtlg">
			            	@include('sportsbet.partials.aside')
						</aside>
			            <main class="template__TemplateMain-sm5no8-2 ldTmbu">
			            	<div class="wrapper1 language--en">
			            		<div class="wrapper2">
			            			<div class="wrapper3">
			            				<div class="wrapper4">
			            					<div class="renderframe layout-default u-bg-goku" style="position: initial;">
			            						<div class="contentarea">
			            							<div class="maincontent">
			            								<div id="g_id_onload" data-client_id="598493280000-nht0bi52o3rv9v7bgcod2rtpgg867cm1.apps.googleusercontent.com" data-callback="handleCredentialResponse" data-prompt_parent_id="g_id_onload" class="GoogleOneTap__GoogleOneTapBaseStyled-sc-794m39-0 cYiUMS"></div>
			            								<div class="renderscreen sublayout-sports1 large">
			            									<div class="SportTabsWrapper__SportsNavigation-sc-118kbto-2 kdktID">
			            										@include('sportsbet.partials.sub_layout')
			            									</div>
			            									<div class="SportTabsWrapper__SportsNavigation-sc-118kbto-2 kdktID">
			            										<div class="SportTabsWrapper__SportsNavigation-sc-118kbto-2 kdktID">
																	<div class="SportTabsWrapper-sc-118kbto-0 bdVOZg">
																		@yield('sport-title')
																		<nav class="Tabs__TabNav-sc-7gvh1d-0 hNrOhI list-option">
																			<a href="#nav-skip-n9qe7afjm" class="Tabs__SkipLink-sc-7gvh1d-1 zETQP">Skip to content</a>
																			<ul dir="ltr" class="Reel-sc-10l7fx7-0-ul Tabs__TabList-sc-7gvh1d-2 izGDou">
																				<li class="Tabs__Tab-sc-7gvh1d-3 iWbzjl">
																					<a aria-current="page" class="TabLink-sc-1p8l4dw-0 TabLanguageLink__StyleLink-edlgzg-0 esuosj active" languagetag="en" href="javascript:void(0)" data-type="1">In-play</a>
																				</li>
																				<li class="Tabs__Tab-sc-7gvh1d-3 iWbzjl">
																					<a class="TabLink-sc-1p8l4dw-0 TabLanguageLink__StyleLink-edlgzg-0 esuosj" languagetag="en" href="javascript:void(0)" data-type="2">Next 24hrs</a>
																				</li>
																				<li class="Tabs__Tab-sc-7gvh1d-3 iWbzjl">
																					<a class="TabLink-sc-1p8l4dw-0 TabLanguageLink__StyleLink-edlgzg-0 esuosj" languagetag="en" href="javascript:void(0)" data-type="3">Future</a>
																				</li>
																				{{-- <li class="Tabs__Tab-sc-7gvh1d-3 iWbzjl">
																					<a class="TabLink-sc-1p8l4dw-0 TabLanguageLink__StyleLink-edlgzg-0 esuosj" languagetag="en" href="/sports/soccer/outrights">Outrights</a>
																				</li>
																				<li class="Tabs__Tab-sc-7gvh1d-3 iWbzjl">
																					<a class="TabLink-sc-1p8l4dw-0 TabLanguageLink__StyleLink-edlgzg-0 esuosj" languagetag="en" href="/sports/soccer/leagues">Leagues</a>
																				</li>
																				<li class="Tabs__Tab-sc-7gvh1d-3 iWbzjl">
																					<a languagetag="en" featureflags="[object Object]" to="/sports/soccer/news" history="[object Object]" location="[object Object]" match="[object Object]" class="TabLink-sc-1p8l4dw-0 TabLanguageLink__StyleLink-edlgzg-0 esuosj" href="/sports/soccer/news">News</a>
																				</li> --}}
																			</ul>
																			<span id="nav-skip-n9qe7afjm"></span>
																		</nav>
																	</div>
																</div>
			            									</div>
			            									@yield('sub-menu')
			            									@yield('sport-panel')

			            								</div>
			            							</div>
			            						</div>
			            					</div>
			            				</div>
			            			</div>
			            		</div>
			            	</div>
			            </main>
			            <footer class="template__TemplateFooter-sm5no8-3 ihVqAG"></footer>
			            {{-- <div direction="left" aria-hidden="true" class="banner__ArenaBanner-yjue7o-0 cGYXbL">
			            	<a class="Banner-sc-1lne2wd-0 hbiwEg"></a>
			            </div>
			            <div direction="right" aria-hidden="true" class="banner__ArenaBanner-yjue7o-0 hzvGjz">
			            	<a href="https://sportsbet.io/about/sportsbet-io-partnerships" class="Banner-sc-1lne2wd-0 eHaLBO"></a>
			            </div> --}}
			        </div>
			    </div>
		    </div>
		    <div class="modal-bet">
		    </div>
		</div>
    </div>
    <input type="hidden" name="is_login" value="{{Auth::check()}}"/>
    @include('sportsbet.partials.withdraw')
</div>
</body>

</html>
<script src="{{asset('public/js/sportsbet/sportsbet.js')}}"></script>
<script src="{{asset('public/admin/js/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('public/js/sportsbet/withdraw.js')}}"></script>
@yield('js')

