<ul itemscope="" itemtype="https://schema.org/SportsEvent" variant="asian-desktop" class="grid__EventListBodyWrapper-ljbzft-0 bfDTRZ match_{{$question['id']}}">
	<li itemprop="location" itemscope="" itemtype="https://schema.org/Place" style="display: none;">
	</li>
	<li class="grid__HomeCompetitor-jq9sb4-0 eFFTax">
		<a class="CompetitorWithScore__CompetitorWrapper-v0fmv1-0 ifMAfU" itemprop="homeTeam" itemscope="" itemtype="https://schema.org/SportsTeam" href="javascript:void(0)">
			<p itemprop="name" class="CompetitorWithScore__Name-v0fmv1-1 bAXEiS">{{$option1}}</p>
			<p class="CompetitorWithScore__Scores-v0fmv1-2 aBgbT">
				<span class="CompetitorWithScore__Score-v0fmv1-3 qLfpg score1">{{$question['score1']}}</span>
			</p>
		</a>
	</li>
	<li class="grid__AwayCompetitor-jq9sb4-1 eAKYok">
		<a class="CompetitorWithScore__CompetitorWrapper-v0fmv1-0 ifMAfU" itemprop="awayTeam" itemscope="" itemtype="https://schema.org/SportsTeam" href="javascript:void(0)">
			<p itemprop="name" class="CompetitorWithScore__Name-v0fmv1-1 bAXEiS">{{$option2}}</p>
			<p class="CompetitorWithScore__Scores-v0fmv1-2 aBgbT">
				<span class="CompetitorWithScore__Score-v0fmv1-3 qLfpg score2">{{$question['score2']}}</span>
			</p>
		</a>
	</li>
	<li class="grid__EventInfo-jq9sb4-2 isoPst">
		<div class="AsianEventInfo__Time-sc-3u4nbe-0 eTrGsW">
			<p class="AsianEventInfo__Caption-sc-3u4nbe-1 dkGcvN">{{$type == '1' ? '' : $question['time']}}</p>
			<div class="AsianEventInfo__IconsWrapper-sc-3u4nbe-2 OpnS">
				<div class="AsianEventInfo__BetBuilderWrapper-sc-3u4nbe-6 gkUEYp"></div>
				@if ($type == 1)
					<svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconStopwatch-mv697q-0 AsianEventInfo__StreamAvailableIcon-sc-3u4nbe-4 cqYQmZ">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M11.583 2.048l-.978.978A5.715 5.715 0 007.257 1.55l.001-.024v-.26a.26.26 0 00-.26-.261h-.522a.26.26 0 00-.26.26V1.55a5.737 5.737 0 104.758 1.845l.978-.978.598.597c.246.246.615-.122.369-.368L11.354 1.08c-.245-.246-.614.123-.368.369l.597.598zm-4.846 10.43a5.215 5.215 0 110-10.43 5.215 5.215 0 010 10.43zm.26-6.225a1.044 1.044 0 010 2.02v.555c0 .347-.52.347-.52 0v-.555a1.044 1.044 0 010-2.02v-2.64c0-.347.52-.347.52 0v2.64zm.261 1.01a.522.522 0 11-1.043 0 .522.522 0 011.043 0z" fill="currentColor"></path>
						<path d="M10.605 3.026l-.135.148.141.129.135-.135-.141-.142zm.978-.978l.142.141.141-.141-.141-.142-.142.142zM7.257 1.55l-.199-.018-.017.199.198.018.018-.2zm-1.04 0l.017.199.2-.018-.018-.2-.2.019zm4.757 1.845l-.142-.141-.135.135.13.14.147-.134zm.978-.978l.142-.142-.142-.141-.141.141.141.142zm.598.597l.142-.141-.142.141zm.369-.368l.141-.142-.141.142zM11.354 1.08l-.141.141.141-.14zm-.368.369l-.142.141.142-.141zM6.998 6.253h-.2v.155l.15.039.05-.194zm0 2.02l-.05-.193-.15.038v.155h.2zm-.522 0h.2v-.155l-.15-.038-.05.193zm0-2.02l.05.194.15-.04v-.154h-.2zm4.27-3.085l.979-.979-.283-.283-.978.979.282.283zM7.24 1.748a5.515 5.515 0 013.231 1.426l.27-.295A5.915 5.915 0 007.275 1.35l-.036.399zm-.18-.222v.006l.398.035a.463.463 0 00.001-.04h-.4zm0-.26v.26h.4v-.26h-.4zm-.061-.061a.06.06 0 01.06.06h.4a.46.46 0 00-.46-.46v.4zm-.522 0h.522v-.4h-.522v.4zm-.06.06a.06.06 0 01.06-.06v-.4a.46.46 0 00-.46.46h.4zm0 .261v-.26h-.4v.26h.4zm0 .006v-.006h-.4l.001.041.399-.035zM1.2 7.263A5.537 5.537 0 016.234 1.75l-.036-.399A5.937 5.937 0 00.8 7.263h.4zM6.737 12.8A5.536 5.536 0 011.2 7.263H.8A5.936 5.936 0 006.737 13.2v-.4zm5.537-5.537A5.536 5.536 0 016.737 12.8v.4a5.936 5.936 0 005.937-5.937h-.4zM10.826 3.53a5.516 5.516 0 011.448 3.733h.4A5.916 5.916 0 0011.12 3.26l-.295.27zm.985-1.255l-.979.979.283.282.979-.978-.283-.283zm.88.598l-.597-.598-.283.283.598.598.283-.283zm.086-.086c.024.023.023.037.023.043a.07.07 0 01-.023.043.071.071 0 01-.043.022c-.005 0-.02.001-.042-.022l-.283.283a.452.452 0 00.651 0 .452.452 0 000-.652l-.282.283zm-1.564-1.565l1.565 1.565.282-.283L11.496.94l-.283.282zm-.086.086c-.023-.023-.023-.037-.023-.042.001-.01.007-.028.023-.044a.07.07 0 01.043-.022c.006 0 .02 0 .043.022l.283-.282a.452.452 0 00-.652 0 .452.452 0 000 .652l.283-.284zm.598.598l-.598-.598-.283.283.598.598.283-.283zM1.322 7.263a5.415 5.415 0 005.415 5.415v-.4a5.015 5.015 0 01-5.015-5.015h-.4zm5.415-5.415a5.415 5.415 0 00-5.415 5.415h.4a5.015 5.015 0 015.015-5.015v-.4zm5.415 5.415a5.415 5.415 0 00-5.415-5.415v.4a5.015 5.015 0 015.015 5.015h.4zm-5.415 5.415a5.415 5.415 0 005.415-5.415h-.4a5.015 5.015 0 01-5.015 5.015v.4zM7.98 7.263c0-.58-.396-1.066-.932-1.204l-.1.388a.844.844 0 01.632.816h.4zm-.932 1.204c.536-.138.932-.624.932-1.204h-.4a.844.844 0 01-.632.817l.1.387zm.15.36v-.554h-.4v.555h.4zm-.922 0a.452.452 0 00.46.461.452.452 0 00.46-.46H6.8c0 .032-.01.042-.015.046a.071.071 0 01-.046.014.071.071 0 01-.046-.014c-.005-.004-.015-.014-.015-.046h-.4zm0-.554v.555h.4v-.555h-.4zm-.782-1.01c0 .58.396 1.066.932 1.204l.1-.387a.844.844 0 01-.632-.817h-.4zm.932-1.204a1.244 1.244 0 00-.932 1.204h.4c0-.392.268-.723.632-.816l-.1-.388zm-.15-2.445v2.639h.4v-2.64h-.4zm.922 0a.452.452 0 00-.461-.461.452.452 0 00-.46.46h.4c0-.032.01-.042.014-.045a.071.071 0 01.046-.015c.022 0 .039.008.046.015.004.003.015.013.015.046h.4zm0 2.639v-2.64h-.4v2.64h.4zm-.461 1.732a.722.722 0 00.721-.722h-.4a.322.322 0 01-.321.322v.4zm-.722-.722c0 .399.323.722.722.722v-.4a.322.322 0 01-.322-.322h-.4zm.722-.721a.722.722 0 00-.722.721h.4c0-.177.144-.321.322-.321v-.4zm.721.721a.722.722 0 00-.721-.721v.4c.177 0 .321.144.321.321h.4z" fill="currentColor"></path>
					</svg>
				@endif
			</div>
		</div>
	</li>
	<li class="grid__HomeWinner-jq9sb4-6 bIUEeK option_{{$question['data']['winner'][$option1]['question_id']}}_{{$question['data']['winner'][$option1]['id']}}">
		@if(isset($question['data']['winner'][$option1]) && $question['data']['winner'][$option1]['ratio2'] > 0)
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-info="{{$question['name']}}" data-option="{{$option1}}" data-type="Winner (incl. overtime)" data-id="{{$question['data']['winner'][$option1]['id']}}" data-question="{{$question['data']['winner'][$option1]['question_id']}}">
				<p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['winner'][$option1]['ratio2'],2)}}</p>
			</div>
        @else
            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
				<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconPadlock-sc-1wkm386-0 eJrPzX">
					<path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M12 14v3.137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
				</svg>
			</div>
        @endif
	</li>
	<li class="grid__AwayWinner-jq9sb4-7 bxcQYe option_{{$question['data']['winner'][$option2]['question_id']}}_{{$question['data']['winner'][$option2]['id']}}">
		@if(isset($question['data']['winner'][$option2]) && $question['data']['winner'][$option2]['ratio2'] > 0)
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-info="{{$question['name']}}" data-option="{{$option2}}" data-type="Winner (incl. overtime)" data-id="{{$question['data']['winner'][$option2]['id']}}" data-question="{{$question['data']['winner'][$option2]['question_id']}}">
				<p class="Selection__Odds-sc-1tx8nkd-0 ireQWm">{{number_format($question['data']['winner'][$option2]['ratio2'],2)}}</p>
			</div>
		@else
            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
				<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconPadlock-sc-1wkm386-0 eJrPzX">
					<path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M12 14v3.137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
				</svg>
			</div>
        @endif
	</li>
	<li class="grid__HomeHCP-jq9sb4-8 dHMwDp option_{{$question['data']['hcp'][$option1]['question_id']}}_{{$question['data']['hcp'][$option1]['id']}}" data-info="{{$question['name']}}">
		@if(isset($question['data']['hcp'][$option1]) && $question['data']['hcp'][$option1]['ratio2'] > 0)
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-option="{{$option1}}" data-type="Handicap (incl. overtime)" data-id="{{$question['data']['hcp'][$option1]['id']}}" data-question="{{$question['data']['hcp'][$option1]['question_id']}}">
				<p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$question['data']['hcp'][$option1]['ratio1']}}</p>
				<p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['hcp'][$option1]['ratio2'],2)}}</p>
			</div>
		@else
            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
				<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconPadlock-sc-1wkm386-0 eJrPzX">
					<path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M12 14v3.137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
				</svg>
			</div>
        @endif
	</li>
	<li class="grid__AwayHCP-jq9sb4-9 geniht option_{{$question['data']['hcp'][$option2]['question_id']}}_{{$question['data']['hcp'][$option2]['id']}}">
		@if(isset($question['data']['hcp'][$option2]) && $question['data']['hcp'][$option2]['ratio2'] > 0)
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-info="{{$question['name']}}" data-option="{{$option2}}" data-type="Handicap (incl. overtime)" data-id="{{$question['data']['hcp'][$option2]['id']}}" data-question="{{$question['data']['hcp'][$option2]['question_id']}}">
				<p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$question['data']['hcp'][$option2]['ratio1']}}</p>
				<p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['hcp'][$option2]['ratio2'],2)}}</p>
			</div>
		@else
            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
				<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconPadlock-sc-1wkm386-0 eJrPzX">
					<path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M12 14v3.137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
				</svg>
			</div>
        @endif
	</li>
	<li class="grid__HomeTOT-jq9sb4-10 gGHKFY option_{{$question['data']['tot'][$option1]['question_id']}}_{{$question['data']['tot'][$option1]['id']}}">
		@if(isset($question['data']['tot'][$option1]) && $question['data']['tot'][$option1]['ratio2'] > 0)
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-info="{{$question['name']}}" data-option="" data-type="Total (incl. overtime)" data-id="{{$question['data']['tot'][$option1]['id']}}" data-question="{{$question['data']['tot'][$option1]['question_id']}}">
				<p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$question['data']['tot'][$option1]['ratio1']}}</p>
				<p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['tot'][$option1]['ratio2'],2)}}</p>
			</div>
		@else
            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
				<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconPadlock-sc-1wkm386-0 eJrPzX">
					<path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M12 14v3.137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
				</svg>
			</div>
        @endif
	</li>
	<li class="grid__AwayTOT-jq9sb4-11 jByJBO option_{{$question['data']['tot'][$option2]['question_id']}}_{{$question['data']['tot'][$option2]['id']}}">
		@if(isset($match['options'][$option2]['tot']) && $question['data']['tot'][$option2]['ratio2'] > 0)
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-info="{{$question['name']}}" data-option="" data-type="Total (incl. overtime)" data-id="{{$question['data']['tot'][$option2]['id']}}" data-question="{{$question['data']['tot'][$option2]['question_id']}}">
				<p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$match['options'][$option2]['tot']['ratio1']}}</p>
				<p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($match['options'][$option2]['tot']['ratio2'],2)}}</p>
			</div>
		@else
            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
				<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconPadlock-sc-1wkm386-0 eJrPzX">
					<path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M12 14v3.137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
				</svg>
			</div>
        @endif
	</li>
	<li class="grid__FirstHalfHomeWinner-jq9sb4-12 cVQWRz option_{{$question['data']['1st half winner'][$option1]['question_id']}}_{{$question['data']['1st half winner'][$option1]['id']}}">
		@if(isset($match['options'][$option1]['1st half winner']) && $question['data']['1st half winner'][$option1]['ratio2'] > 0)
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-info="{{$question['name']}}" data-option="{{$option1}}" data-type="1st Half - Winner" data-id="{{$question['data']['1st half winner'][$option1]['id']}}" data-question="{{$question['data']['1st half winner'][$option1]['question_id']}}">
				<p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($match['options']['1st half winner'][$option1]['ratio2'],2)}}</p>
			</div>
		@else
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
				<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconPadlock-sc-1wkm386-0 eJrPzX">
					<path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M12 14v3.137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
				</svg>
			</div>
		@endif
	</li>
	<li class="grid__FirstHalfAwayWinner-jq9sb4-13 cnpGOH option_{{$question['data']['1st half winner'][$option2]['question_id']}}_{{$question['data']['1st half winner'][$option2]['id']}}">
		@if(isset($match['options'][$option2]['1st half winner']) && $question['data']['1st half winner'][$option2]['ratio2'] > 0)
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-info="{{$question['name']}}" data-option="{{$option2}}" data-type="1st Half - Winner" data-id="{{$question['data']['1st half winner'][$option2]['id']}}" data-question="{{$question['data']['1st half winner'][$option2]['question_id']}}">
				<p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($match['options'][$option2]['1st half winner']['ratio2'],2)}}</p>
			</div>
		@else
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
				<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconPadlock-sc-1wkm386-0 eJrPzX">
					<path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M12 14v3.137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
				</svg>
			</div> 
		@endif
	</li>
	<li class="grid__FirstHalfHomeHCP-jq9sb4-17 dAcRU option_{{$question['data']['1st half hcp'][$option1]['question_id']}}_{{$question['data']['1st half hcp'][$option1]['id']}}">
		@if(isset($match['options'][$option1]['1st half hcp']) && $question['data']['1st half hcp'][$option1]['ratio2'] > 0)
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-info="{{$question['name']}}" data-option="{{$option1}}" data-type="1st Half - Handicap" data-id="{{$question['data']['1st half hcp'][$option1]['id']}}" data-question="{{$question['data']['1st half hcp'][$option1]['question_id']}}">
				<p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$match['options']['1st half hcp'][$option1]['ratio1']}}</p>
				<p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($match['options']['1st half hcp'][$option1]['ratio2'],2)}}</p>
			</div>
		@else
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
				<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconPadlock-sc-1wkm386-0 eJrPzX">
					<path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M12 14v3.137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
				</svg>
			</div>
		@endif
	</li>
	<li class="grid__FirstHalfAwayHCP-jq9sb4-18 glEDYr option_{{$question['data']['1st half hcp'][$option2]['question_id']}}_{{$question['data']['1st half hcp'][$option2]['id']}}">
		@if(isset($match['options'][$option2]['1st half hcp']) && $question['data']['1st half hcp'][$option2]['ratio2'] > 0)
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-info="{{$question['name']}}" data-option="{{$option2}}" data-type="1st Half - Handicap" data-id="{{$question['data']['1st half hcp'][$option2]['id']}}" data-question="{{$question['data']['1st half hcp'][$option2]['question_id']}}">
				<p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$match['options']['1st half hcp'][$option2]['ratio1']}}</p>
				<p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($match['options']['1st half hcp'][$option2]['ratio2'],2)}}</p>
			</div>
		@else
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
				<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconPadlock-sc-1wkm386-0 eJrPzX">
					<path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M12 14v3.137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
				</svg>
			</div>
		@endif
	</li>
	<li class="grid__FirstHalfHomeTOT-jq9sb4-19 fcEWGd option_{{$question['data']['1st half tot'][$option1]['question_id']}}_{{$question['data']['1st half tot'][$option1]['id']}}">
		@if(isset($match['options'][$option1]['1st half tot']) && $question['data']['1st half tot'][$option1]['ratio2'] > 0)
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-info="{{$question['name']}}" data-option="" data-type="1st Half - Total" data-id="{{$question['data']['1st half tot'][$option1]['id']}}" data-question="{{$question['data']['1st half tot'][$option1]['question_id']}}">
				<p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$match['options'][$option1]['1st half tot']['ratio1']}}</p>
				<p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($match['options'][$option1]['1st half tot']['ratio2'],2)}}</p>
			</div>
		@else
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
				<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconPadlock-sc-1wkm386-0 eJrPzX">
					<path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M12 14v3.137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
				</svg>
			</div>
		@endif
	</li>
	<li class="grid__FirstHalfAwayTOT-jq9sb4-20 DSIxD option_{{$question['data']['1st half tot'][$option2]['question_id']}}_{{$question['data']['1st half tot'][$option2]['id']}}">
		@if(isset($match['options'][$option2]['1st half tot']) && $question['data']['1st half tot'][$option2]['ratio2'] > 0)
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-info="{{$question['name']}}" data-option="" data-type="1st Half - Total" data-id="{{$question['data']['1st half tot'][$option2]['id']}}" data-id="{{$question['data']['1st half winner'][$option2]['id']}}" data-question="{{$question['data']['1st half tot'][$option2]['question_id']}}">
				<p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$match['options']['1st half tot'][$option2]['ratio1']}}</p>
				<p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($match['options']['1st half tot'][$option2]['ratio2'],2)}}</p>
			</div>
		@else
			<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
				<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconPadlock-sc-1wkm386-0 eJrPzX">
					<path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"></path>
					<path d="M12 14v3.137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
				</svg>
			</div>
		@endif
	</li>
	<li class="grid__OtherMarketsLink-jq9sb4-21 fgbAIV">
		<a class="OtherMarkets__OtherMarketsWrapper-rt1p9o-0 vKXIN" href="/sports/event/baseball/usa/mlb/detroit-tigers-seattle-mariners-60c1b56fa2b818e1a744767a">
			<p>0</p>
		</a>
	</li>
</ul>