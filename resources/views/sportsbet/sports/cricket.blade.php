@if(isset($data) && count($data) > 0)
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
				@if (isset($size) && $size < 600)
					<ul class="grid__EventListHeader-ljbzft-1 jaFLCg">
						<li class="gridHeader__CompetitorGap-ixy1fi-0 bfIAFC"></li>
						<li class="gridHeader__Home-ixy1fi-1 hXokRj">
							<p class="gridHeader__Caption-ixy1fi-4 ioApLE">1</p>
						</li>
						<li class="gridHeader__Away-ixy1fi-2 hzCDbe">
							<p class="gridHeader__Caption-ixy1fi-4 ioApLE">2</p>
						</li>
						<li class="gridHeader__EventCountGap-ixy1fi-3 fOeRbP"></li>
					</ul>
				@else
					<ul class="grid__EventListHeader-ljbzft-1 bXwSvB">
						<li class="gridHeader__CompetitorGap-sc-1pampme-0 koDody"></li>
						<li class="gridHeader__TitleWinner-sc-1pampme-1 eYDWsx">
							<p class="gridHeader__Caption-sc-1pampme-5 doONrY">WINNER</p>
						</li>
						<li class="gridHeader__HCP-sc-1pampme-2 gukBNl">
							<p class="gridHeader__Caption-sc-1pampme-5 doONrY">HCP</p>
						</li>
						<li class="gridHeader__TOT-sc-1pampme-3 gAMcB">
							<p class="gridHeader__Caption-sc-1pampme-5 doONrY">TOT</p>
						</li>
						<li class="gridHeader__EventCountGap-sc-1pampme-4 iNCxHO"></li>
					</ul>
				@endif
				@php
                    foreach($event['data'] as $question)
                    {
                        $option1 = isset($question['options'][0])?$question['options'][0]:'';
				        $option2 = isset($question['options'][1])?$question['options'][1]:'';
	            @endphp
	            	@include('sportsbet.post.form_winner_hcp_tot',[
                                    'question' => $question,
                                    'type' => $type,
                                    'option1' => $option1,
                                    'option2' => $option2
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