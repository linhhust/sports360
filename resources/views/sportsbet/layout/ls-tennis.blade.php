@extends('sportsbet.layout-sport')
@section('sport-title')
	<div class="MediaObject-sc-1gcatrn-0 gztbEC">
		<svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" color="#B3804A" class="IconSportsTennis-sc-1ugcluz-0 cjCKlU">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M4.338 15.91A8.13 8.13 0 0110 13.626a8.11 8.11 0 015.659 2.283A8.159 8.159 0 0110 18.194a8.161 8.161 0 01-5.662-2.285zM3.784 4.673A8.907 8.907 0 0010 7.18a8.933 8.933 0 006.216-2.503 8.151 8.151 0 01-.003 10.65A8.908 8.908 0 0010 12.82c-2.34 0-4.532.892-6.217 2.504a8.154 8.154 0 01.001-10.65zm11.877-.582A8.132 8.132 0 0110 6.373c-2.14 0-4.13-.813-5.661-2.282a8.156 8.156 0 0111.322 0zm.88 12.069A8.95 8.95 0 0019 10c0-4.963-4.037-9-9-9a8.965 8.965 0 00-6.501 2.794c-.006.003-.013.002-.018.005-.006.007-.004.018-.01.024A8.961 8.961 0 001 10c0 4.963 4.036 9 9 9 2.55 0 4.85-1.07 6.49-2.781.008-.008.022-.004.032-.013.013-.012.01-.031.02-.045z" fill="currentColor"></path>
		</svg>
		<h1 class="SportTabsWrapper__SportTabsHeader-sc-118kbto-1 kVPPEt">SetTennis: <span class="status">In-play</span></h1>
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
					<span itemprop="name">SetTennis</span>
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
			            									