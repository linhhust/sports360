@extends('sportsbet.layout-sport')
@section('sport-title')
	<div class="MediaObject-sc-1gcatrn-0 gztbEC">
		<svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" color="#B3804A" class="IconSportsSnooker-sc-1l8b3li-0 jnQKYs"><path d="M7.153 5.066a1.859 1.859 0 10-3.718.038 1.859 1.859 0 003.718-.038zm2.886 1.774A1.806 1.806 0 1010 3.229a1.806 1.806 0 00.04 3.61zm.028 4.781a1.876 1.876 0 10.04 3.751 1.876 1.876 0 00-.04-3.75zM9.53 9.133A1.866 1.866 0 007.65 7.289a1.866 1.866 0 00-1.844 1.883 1.863 1.863 0 103.727-.04zm2.91-1.844a1.81 1.81 0 00.04 3.617 1.81 1.81 0 00-.04-3.617zm2.286-4.059A1.752 1.752 0 0012.997 5a1.752 1.752 0 001.769 1.73 1.75 1.75 0 10-.04-3.5zm4.945-1.109A2.292 2.292 0 0017.656.988L2.29 1.164a2.281 2.281 0 00-1.988 1.18 2.29 2.29 0 00.027 2.312L8.164 17.88a2.292 2.292 0 002.016 1.133 2.281 2.281 0 001.988-1.18l7.535-13.398a2.299 2.299 0 00-.031-2.313zm-1.047 1.707L11.09 17.227a1.06 1.06 0 01-.926.546 1.062 1.062 0 01-.937-.527L1.39 4.023a1.065 1.065 0 01-.012-1.078c.188-.336.535-.543.926-.547l15.371-.175c.39-.004.738.191.938.527.195.336.199.738.011 1.078z" fill="currentColor"></path></svg>
		<h1 class="SportTabsWrapper__SportTabsHeader-sc-118kbto-1 kVPPEt">Snooker: <span class="status">In-play</span></h1>
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
					<span itemprop="name">Snooker</span>
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
			            									