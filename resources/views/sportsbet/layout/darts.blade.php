@extends('sportsbet.layout-sport')
@section('sport-title')
	<div class="MediaObject-sc-1gcatrn-0 gztbEC">
		<svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" color="#D33030" class="IconSportsDarts-j86sks-0 iAYrWx"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.75 8.609l-1.073-.322a.439.439 0 00.266-.116l2.682-2.682a.43.43 0 00.115-.265l.322 1.074-2.311 2.31zm-7.036 3.716l-2.91 2.908-1.038-1.038 2.91-2.909a.591.591 0 01.815 0l.223.222a.576.576 0 010 .817zm-4.36 3.544l-.223-.223a.58.58 0 010-.817l.012-.011 1.038 1.039-.011.012a.58.58 0 01-.817 0zm9.349-13.932l1.072.323a.433.433 0 00-.264.114l-2.683 2.683a.44.44 0 00-.115.266l-.322-1.073 2.312-2.313zm.738 5.49l-1.293.047.527-.527a.44.44 0 00-.622-.622l-.527.526.047-1.293 2.439-2.438 1.94-.072-.072 1.94-2.439 2.438zm4.54-1.13l-1.15-3.834c0-.006-.006-.01-.009-.015a.43.43 0 00-.1-.169.455.455 0 00-.178-.106l-.007-.004-3.833-1.15a.437.437 0 00-.438.11l-2.684 2.684a.437.437 0 00-.11.438l1.074 3.58-2.672 2.672c-.565-.372-1.324-.336-1.82.16l-3.545 3.544c-.497.497-.532 1.255-.16 1.82l-2.22 2.221a.44.44 0 00.623.622l2.22-2.22c.242.16.51.267.79.267.372 0 .746-.142 1.031-.426l3.543-3.544c.497-.497.533-1.255.16-1.82l2.673-2.673 3.58 1.074a.436.436 0 00.438-.112l2.684-2.681a.441.441 0 00.11-.439z" fill="currentColor"></path></svg>
		<h1 class="SportTabsWrapper__SportTabsHeader-sc-118kbto-1 kVPPEt">Darts: <span class="status">In-play</span></h1>
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
					<span itemprop="name">Darts</span>
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
			            									