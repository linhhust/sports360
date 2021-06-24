@extends('sportsbet.layout-sport')
@section('sport-title')
	<div class="MediaObject-sc-1gcatrn-0 gztbEC">
		<svg width="1em" height="1em" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#5C33CF" class="IconSportsESports-sc-1j3mtag-0 bMmSQj"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.59 10.647h.82c1.802 0 3.48.891 4.488 2.385l.098.146a1.63 1.63 0 002.666.054l.053-.07a1.62 1.62 0 00.317-.968v-.934c0-2.862-.64-5.746-1.852-8.34a1.42 1.42 0 00-1.282-.816h-.26c-.4 0-.782.17-1.05.465a2.547 2.547 0 01-1.882.835H8.295a2.545 2.545 0 01-1.883-.835 1.419 1.419 0 00-1.05-.465h-.26c-.547 0-1.05.32-1.282.817a19.838 19.838 0 00-1.851 8.34v.934c0 .35.11.684.318.967l.052.071a1.629 1.629 0 002.665-.056l.098-.145a5.408 5.408 0 014.488-2.385zm6.758 4.374a2.753 2.753 0 01-2.284-1.214l-.099-.146a4.285 4.285 0 00-3.555-1.889h-.82a4.285 4.285 0 00-3.555 1.89l-.098.145a2.752 2.752 0 01-2.285 1.214c-.872 0-1.702-.419-2.22-1.121l-.052-.071a2.74 2.74 0 01-.537-1.635v-.934c0-3.026.677-6.074 1.958-8.816A2.55 2.55 0 015.103.98h.26c.716 0 1.402.304 1.882.834.268.296.651.465 1.05.465h3.41c.4 0 .782-.17 1.05-.465A2.545 2.545 0 0114.638.98h.26A2.55 2.55 0 0117.2 2.444a20.971 20.971 0 011.957 8.816v.934c0 .593-.186 1.158-.537 1.635l-.053.071a2.767 2.767 0 01-2.219 1.121z" fill="currentColor"></path></svg>
		<h1 class="SportTabsWrapper__SportTabsHeader-sc-118kbto-1 kVPPEt">Dota 2: <span class="status">In-play</span></h1>
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
					<span itemprop="name">Dota 2</span>
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
			            									