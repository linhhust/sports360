@extends('sportsbet.layout-sport')
@section('sport-title')
	<div class="MediaObject-sc-1gcatrn-0 gztbEC">
		<svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFB319" class="IconSportsAmericanFootBall-yswdx6-0 cobHxe"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.623 14.623c-2.166 2.167-4.662 3.08-6.863 3.41l-2.61-2.612 2.14-2.138.617.617a.402.402 0 00.286.118.403.403 0 00.285-.689l-.618-.618 1.237-1.237.618.618a.399.399 0 00.57.001.402.402 0 000-.57l-.618-.62 1.236-1.236.62.619a.401.401 0 00.57-.002.404.404 0 000-.571l-.618-.618 1.237-1.235.618.618a.402.402 0 00.285.117.403.403 0 00.285-.689l-.618-.617 2.14-2.142 2.615 2.615c-.33 2.2-1.244 4.693-3.413 6.86zM2.665 17.906l1.913-1.914 2.154 2.155a15.16 15.16 0 01-4.067-.241zm-.573-.57a15.13 15.13 0 01-.243-4.073l2.157 2.159-1.914 1.915zm3.284-11.96c2.167-2.167 4.663-3.08 6.864-3.41l2.61 2.61-2.138 2.141-.62-.618a.404.404 0 00-.57.572l.617.618-1.236 1.235-.618-.617a.402.402 0 00-.57 0 .402.402 0 000 .571l.618.617-1.237 1.238-.618-.62a.404.404 0 10-.57.57l.617.62-1.236 1.236-.619-.618a.404.404 0 00-.57.572l.617.618-2.14 2.14-2.614-2.615c.33-2.198 1.245-4.691 3.413-6.86zm11.96-3.284l-1.914 1.914-2.154-2.155a15.17 15.17 0 014.068.241zm.572.57c.167.814.378 2.295.243 4.073l-2.157-2.158 1.914-1.914zm.611-.915a.387.387 0 00-.1-.165V1.58l-.003-.001a.392.392 0 00-.164-.1c-.076-.022-7.804-2.315-13.446 3.326-5.642 5.642-3.349 13.369-3.325 13.447.02.063.054.119.1.164v.002c0 .002.002 0 .003.002.045.045.1.08.164.098.034.011 1.618.482 3.864.48 2.745 0 6.48-.701 9.582-3.804 5.642-5.642 3.349-13.37 3.325-13.447z" fill="currentColor"></path></svg>
		<h1 class="SportTabsWrapper__SportTabsHeader-sc-118kbto-1 kVPPEt">Rugby League: <span class="status">In-play</span></h1>
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
					<span itemprop="name">Rugby League</span>
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
			            									