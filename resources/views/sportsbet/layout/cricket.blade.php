@extends('sportsbet.layout-sport')
@section('sport-title')
	<div class="MediaObject-sc-1gcatrn-0 gztbEC">
		<svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFB319" class="IconSportsCricket-sc-1pwhtoc-0 cWXaia"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.716 5.832a.382.382 0 01.255-.475l.485-.146a.38.38 0 11.22.728l-.485.148a.382.382 0 01-.475-.255zm-.398-.725c.145-.268.385-.464.677-.551a1.12 1.12 0 01.868.087c.17.091.298.23.399.386a.375.375 0 00-.088.363c.04.131.148.208.27.241a1.127 1.127 0 01-1.662 1.022 1.112 1.112 0 01-.397-.388.38.38 0 00.09-.364.38.38 0 00-.276-.253 1.125 1.125 0 01.119-.543zm-.694 1.433l.019-.003a1.896 1.896 0 002.229.933 1.907 1.907 0 001.342-2.011.376.376 0 00.174-.43.374.374 0 00-.38-.264 1.895 1.895 0 00-2.23-.938 1.892 1.892 0 00-1.13.921 1.892 1.892 0 00-.216 1.091.378.378 0 00-.173.431c.051.165.202.27.365.27zm4.314 9.994l-1.403 1.404c-.292.294-.756.363-1.132.212l.466-.467a.385.385 0 000-.54.383.383 0 00-.539 0l-.523.525-9.297-9.3a1.032 1.032 0 010-1.46l1.403-1.405c.2-.202.466-.302.728-.302.265 0 .53.1.73.302l9.567 9.57a1.034 1.034 0 010 1.46zM1.79 2.463l.68-.681.016-.001h.124l3.474 3.474-.823.822L1.79 2.604a.1.1 0 010-.142zm16.687 12.072L8.91 4.965c-.591-.591-1.572-.664-2.262-.222L3.15 1.244a.883.883 0 00-1.218-.001l-.68.68a.86.86 0 00-.252.61c0 .23.09.447.251.61l3.496 3.498c-.194.292-.3.636-.3.996 0 .48.187.931.524 1.269l9.565 9.568a.003.003 0 01.001.003h.002a1.78 1.78 0 001.266.523c.48 0 .93-.187 1.268-.523l1.404-1.405c.336-.337.523-.788.523-1.269 0-.48-.187-.93-.523-1.268z" fill="currentColor"></path></svg>
		<h1 class="SportTabsWrapper__SportTabsHeader-sc-118kbto-1 kVPPEt">Cricket: <span class="status">In-play</span></h1>
	</div>
@stop
@section('sub-menu')
	<div class="BreadCrumbsContainer__Wrapper-sc-12hczw4-0 hFqjqD">
		<ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__BreadCrumbsContainer-sc-15jbfj7-1 ccmSiI">
			<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
				<a aria-current="page" class="active" itemprop="item" href="/sports">
					<span itemprop="name">Home</span>
					<meta itemprop="position" content="1">
				</a>
				<span class="breadcrumbs__BreadcrumbIcon-sc-15jbfj7-0 hoMxbl">
					<svg width="1em" height="1em" viewBox="0 0 12 20" xmlns="http://www.w3.org/2000/svg" font-size="0.5rem" class="IconChevronRight-legcjk-0 jgffkD">
						<path d="M0 2.623L7.014 10 0 17.376 2.5 20 12 10 2.498 0z" fill="currentColor" fill-rule="evenodd"></path>
					</svg>
				</span>
			</li>
			<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="javascript:void(0)" class="link-sub-menu" data-type="3">
					<span itemprop="name">Cricket</span>
					<meta itemprop="position" content="2">
				</a>
			</li>
		</ol>
	</div>
@stop
@section('sport-panel')
	<div id="content"></div>
@stop
@section('js')
	<script src="{{asset('public/js/sportsbet/search.js')}}"></script>
@stop
			            									