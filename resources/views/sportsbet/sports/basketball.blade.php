@if(count($data) > 0)
    @foreach($data as $event)
		<div class="{{$name == 'index' ? '' : 'breakout__LTRArenaBreakout-ojwmgi-0 hhKAHt'}}">
<div class="ListEventContainer__EventsWrapper-sc-2quhzy-4 cxCKIF">
			<div>
				<div class="summary__SummaryWrapper-b40yh6-0 ceRxxX">
					<div class="summary__IconWrapper-b40yh6-3 gDjwJB">
						<svg width="1em" height="1em" viewBox="0 0 12 20" xmlns="http://www.w3.org/2000/svg" class="IconChevronRight-legcjk-0 jgffkD">
							<path d="M0 2.623L7.014 10 0 17.376 2.5 20 12 10 2.498 0z" fill="currentColor" fill-rule="evenodd"></path>
						</svg>
					</div>
					<p class="summary__SummaryCaption-b40yh6-1 llGbUT">{{$event['name']}}</p>
					<div class="summary__EventCount-b40yh6-2 gZeRne">
						<p class="summary__SummaryCaption-b40yh6-1 HMZTp">{{count($event['data'])}}</p>
					</div>
				</div>
					<ul class="grid__EventListHeader-ljbzft-1 bqFIDy">
						<li class="gridHeader__CompetitorGap-sc-1nkp4nt-0 chIOHZ"></li>
						<li class="gridHeader__Title1X2-sc-1nkp4nt-1 iDUEcT">
							<p class="gridHeader__Caption-sc-1nkp4nt-8 kEZQkW">WINNER</p>
						</li>
						<li class="gridHeader__HCP-sc-1nkp4nt-2 gCcUzs">
							<p class="gridHeader__Caption-sc-1nkp4nt-8 kEZQkW">HCP</p>
						</li>
						<li class="gridHeader__TOT-sc-1nkp4nt-3 latHAo">
							<p class="gridHeader__Caption-sc-1nkp4nt-8 kEZQkW">TOT</p>
						</li>
						<li class="gridHeader__FirstHalf1X2-sc-1nkp4nt-4 cYPXjA">
							<p class="gridHeader__Caption-sc-1nkp4nt-8 kEZQkW">1ST HALF WINNER</p>
						</li>
						<li class="gridHeader__FirstHalfHCP-sc-1nkp4nt-5 hhWHNF">
							<p class="gridHeader__Caption-sc-1nkp4nt-8 kEZQkW">1ST HALF HCP</p>
						</li>
						<li class="gridHeader__FirstHalfTOT-sc-1nkp4nt-6 beDdSp">
							<p class="gridHeader__Caption-sc-1nkp4nt-8 kEZQkW">1ST HALF TOT</p>
						</li>
						<li class="gridHeader__EventCountGap-sc-1nkp4nt-7 jGRaUL"></li>
					</ul>
					@php
	                    foreach($event['data'] as $question){
	                    	$option1 = isset($question['options'][0])?$question['options'][0]:'';
	                        $option2 = isset($question['options'][1])?$question['options'][1]:'';
	                @endphp
						@include('sportsbet.post.basketball',[
                                    'question' => $question,
                                    'type' => $type,
                                    'option1' => $option1,
                                    'option2' => $option2,
                                    ])
					@php
                        }
                    @endphp   
			</div>				
		</div>
		</div>
	@endforeach
@else
	<div class="mt20">
		<div class="sports-nomarkets u-bg-goku">
			<span>Events are currently not available</span>
		</div>
	</div>
@endif