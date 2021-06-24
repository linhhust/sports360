@extends('sportsbet.layout-sport')
@section('sport-title')
	<div class="MediaObject-sc-1gcatrn-0 gztbEC">
		<svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" color="#0F75BD" class="IconSportsIceHockey-yktzxt-0 gFfYWM"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.447 14.28c-4.135 2.727-7.742 3.501-8.396 2.492L2.69 14.668c.134.015.263.033.411.033.532 0 1.156-.094 1.867-.282 1.732-.46 3.785-1.437 5.786-2.754 1.999-1.319 3.712-2.823 4.826-4.24.579-.736.958-1.405 1.146-1.996l1.357 2.096c.652 1.009-1.502 4.032-5.636 6.755zm-9.53-3.5c1.06-1.35 2.707-2.793 4.635-4.063 2.981-1.964 5.687-2.914 7.212-2.914.59 0 1.003.143 1.184.425.316.487-.058 1.494-1 2.693-1.061 1.348-2.707 2.791-4.635 4.062-1.93 1.271-3.9 2.212-5.55 2.65-1.469.386-2.531.326-2.846-.16-.316-.488.058-1.495 1-2.693zm15.84-3.7l-2.134-3.298c-1.182-1.824-5.782-.203-9.51 2.254-2 1.317-3.713 2.823-4.826 4.239-1.222 1.552-1.583 2.81-1.044 3.642l2.133 3.3c.353.545 1.01.783 1.858.783 1.993 0 5.038-1.314 7.653-3.038 3.727-2.456 7.052-6.053 5.87-7.882z" fill="currentColor"></path></svg>
		<h1 class="SportTabsWrapper__SportTabsHeader-sc-118kbto-1 kVPPEt">Ice Hockey: <span class="status">In-play</span></h1>
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
					<span itemprop="name">Ice Hockey</span>
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
			            									