@extends('sportsbet.layout-sport')
@section('sport-title')
	<div class="MediaObject-sc-1gcatrn-0 gztbEC">
		<svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" color="#0F75BD" class="IconSportsTableTennis-sc-1wm6lg5-0 AEFpB"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.021 17.86c-.17.175-.463.263-.663.3l-1.938-1.993-.002-.004h-.002l-2.212-2.276.974-.988 4.145 4.265c-.04.212-.13.52-.302.696zm-6.272-2.499l.889-.9.88.906a7.12 7.12 0 00-1.769-.006zm-6.194-1.563c-2.348-2.417-2.348-6.349 0-8.765a5.9 5.9 0 018.517 0 6.258 6.258 0 011.727 5.075l-5.4 5.477a5.908 5.908 0 01-4.844-1.787zm10.044-.594l-.855-.879.84-.851a7.777 7.777 0 00.015 1.73zm1.292 1.329c-.874-1.225-.5-3.397-.334-4.152.002-.01.013-.018.014-.027l.004-.054.001-.005c.002-.007 0-.012.002-.019.257-2.162-.445-4.28-1.943-5.821a6.69 6.69 0 00-9.642 0c-2.657 2.735-2.657 7.186 0 9.922 1.292 1.327 3.01 2.053 4.811 2.053.272 0 .546-.015.82-.049.006 0 .008-.005.012-.006.012-.001.023.002.033-.001.69-.17 3.024-.63 4.223.406l2.041 2.101a.394.394 0 00.281.119l.023-.001c.086-.004.86-.063 1.345-.561.48-.495.552-1.298.558-1.388a.423.423 0 00-.115-.32l-2.134-2.197zm2.123-10.264c-.656 0-1.191-.55-1.191-1.226 0-.675.535-1.226 1.191-1.226.658 0 1.192.55 1.192 1.226 0 .676-.534 1.226-1.192 1.226zm0-3.269c-1.095 0-1.985.917-1.985 2.043 0 1.127.89 2.044 1.985 2.044C18.11 5.087 19 4.17 19 3.043 19 1.917 18.11 1 17.014 1z" fill="currentColor"></path></svg>
		<h1 class="SportTabsWrapper__SportTabsHeader-sc-118kbto-1 kVPPEt">Table Tennis: <span class="status">In-play</span></h1>
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
					<span itemprop="name">Table Tennis</span>
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
			            									