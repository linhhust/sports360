@extends('sportsbet.layout')

@section('content')
{{-- {{dd($sports)}} --}}
<div class="withFeaturedEvents__Wrapper-sc-1hwqevl-0 cwVMaU">
	<h1 size="24" class="Heading-sc-1fj2bsx-0 ggJTHf withFeaturedEvents__StyledHeading-sc-1hwqevl-1 bsyJuc" color="bulma.100">Featured events</h1>
	@foreach($sports as $sport)
		<div class="breakout__LTRArenaBreakout-ojwmgi-0 hhKAHt">
			<div class="ListEventContainer__ListEventWrapper-sc-2quhzy-0 dIlBK">
				<div class="ListEventContainer__SportsHeader-sc-2quhzy-2 kaihIT">
					@if ($sport['name'] == 'Soccer')
						<div class="MediaObject-sc-1gcatrn-0 hoZYoy">
							<svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" color="#D33030" class="IconSportsFootBall-sc-73qou0-0 dsDiRz">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16.887 10l1.082-1.873c.142.602.225 1.227.225 1.873a8.16 8.16 0 01-.225 1.874L16.887 10zm-3.431 5.987h2.12a8.166 8.166 0 01-3.187 1.85l1.067-1.85zm-6.912 0l1.067 1.85a8.17 8.17 0 01-3.187-1.85h2.12zm0-11.974h-2.12a8.186 8.186 0 013.187-1.85l-1.067 1.85zm6.912 0l-1.068-1.85a8.178 8.178 0 013.187 1.85h-2.119zm2.734 5.584h-2.734l-1.379-2.389 1.379-2.389h2.734l1.379 2.39-1.38 2.388zm-7.57 3.599h2.734l1.392 2.41-1.366 2.368H8.62l-1.379-2.39 1.38-2.388zm-4.864-2.793h2.759l1.379 2.39-1.379 2.388H3.756l-1.378-2.388 1.378-2.39zm2.759-5.584l1.379 2.39-1.379 2.388H3.756L2.378 7.208 3.756 4.82h2.759zm4.839 1.986H8.62L7.241 4.416l1.38-2.389h2.759l1.366 2.367-1.392 2.411zM8.62 12.39L7.241 10l1.38-2.389h2.733L12.733 10l-1.379 2.39H8.62zm4.836 2.79l-1.379-2.387 1.379-2.39h2.734l1.379 2.39-1.38 2.388h-2.733zM1.806 10c0-.622.076-1.226.207-1.81L3.058 10l-1.044 1.81A8.167 8.167 0 011.806 10zM10 1c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" fill="currentColor"></path>
							</svg>
							<span class="ListEventContainer__SportsLabel-sc-2quhzy-1 bCCTpw">Soccer</span>
						</div>
					@elseif ($sport['name'] == 'Basketball')
						<div class="MediaObject-sc-1gcatrn-0 hoZYoy">
							<svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" color="#B3804A" class="IconSportsBasketBall-sc-1x1y548-0 jQnRrO">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10.403 12.841v-2.438h7.77a8.143 8.143 0 01-1.96 4.924 8.89 8.89 0 00-5.81-2.486zm0 .806a8.1 8.1 0 015.257 2.263 8.157 8.157 0 01-5.257 2.265v-4.528zm-.806 0v4.528a8.16 8.16 0 01-5.26-2.266 8.115 8.115 0 015.26-2.262zm0-7.293A8.094 8.094 0 014.339 4.09a8.165 8.165 0 015.258-2.265v4.528zm.806 0V1.826a8.166 8.166 0 015.26 2.266 8.115 8.115 0 01-5.26 2.262zm7.77 3.243h-7.77V7.16a8.912 8.912 0 005.813-2.484 8.141 8.141 0 011.958 4.921zM3.786 4.674A8.887 8.887 0 009.597 7.16v2.437h-7.77a8.145 8.145 0 011.958-4.923zm-1.959 5.729h7.771v2.438a8.904 8.904 0 00-5.813 2.485 8.15 8.15 0 01-1.958-4.923zm14.716 5.759A8.962 8.962 0 0019 10c0-4.963-4.037-9-9-9a8.967 8.967 0 00-6.501 2.794c-.006.004-.012.002-.017.006-.007.007-.004.018-.01.023A8.96 8.96 0 001 10c0 4.964 4.037 9 9 9 2.55 0 4.85-1.07 6.49-2.78.01-.008.023-.004.032-.013.013-.013.01-.031.02-.045z" fill="currentColor"></path>
							</svg>
							<span class="ListEventContainer__SportsLabel-sc-2quhzy-1 bCCTpw">Basketball</span>
						</div>
					@elseif ($sport['name'] == 'Baseball')
						<div class="MediaObject-sc-1gcatrn-0 hoZYoy">
							<svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" color="#725550" class="IconSportsBaseBall-zd7f6y-0 bbrwZv">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.798 7.39a9.64 9.64 0 00-.393-1.051.403.403 0 00-.737.328c.139.31.257.631.36.961a.402.402 0 10.77-.237zm.352 3.339c.03-.37.034-.752.022-1.123a.404.404 0 00-.42-.387c-.223.01-.403.219-.386.42.014.337.007.684-.02 1.025v.032a.404.404 0 00.804.033zM1.806 10c0 2.194.873 4.186 2.282 5.658.11-.113.224-.223.327-.342a.403.403 0 01.614.522c-.112.132-.237.25-.357.374a8.157 8.157 0 0010.655.002 8.97 8.97 0 01-.582-.654.404.404 0 01.067-.566.402.402 0 01.565.069c.164.207.349.404.533.596a8.155 8.155 0 000-11.32c-.103.11-.212.212-.31.327a.403.403 0 01-.613-.525c.107-.125.226-.237.34-.356a8.155 8.155 0 00-10.654.002c.196.205.392.41.567.631a.404.404 0 01-.631.5c-.162-.203-.341-.39-.52-.578A8.161 8.161 0 001.805 10zm1.987 6.52c-.009-.009-.005-.02-.013-.031A8.968 8.968 0 011 10c0-4.963 4.037-9 9-9 2.393 0 4.565.945 6.178 2.473.006.005.017.003.024.01.004.004.002.011.006.016A8.97 8.97 0 0119 10c0 4.963-4.036 9-9 9-2.385 0-4.55-.94-6.162-2.459-.014-.01-.032-.007-.045-.02zm2.467-2.557c.165-.33.31-.681.433-1.039a.403.403 0 00-.762-.262 7.887 7.887 0 01-.393.944.4.4 0 00.183.54c.2.099.44.017.54-.183zm6.936-1.382c.107.356.239.71.39 1.056a.403.403 0 00.737-.326 8.332 8.332 0 01-.354-.96.405.405 0 00-.79.115c0 .038.005.078.017.115zM12.82 10c0 .125.002.248.007.37.011.222.2.395.422.386a.402.402 0 00.384-.422 8.082 8.082 0 01.023-1.022.393.393 0 00-.369-.435.404.404 0 00-.435.369c-.021.249-.032.5-.032.754zm.494-2.95c.123-.353.269-.704.435-1.038a.402.402 0 11.723.357 8.15 8.15 0 00-.396.943.401.401 0 01-.511.25.404.404 0 01-.25-.512z" fill="currentColor"></path>
							</svg>
							<span class="ListEventContainer__SportsLabel-sc-2quhzy-1 bCCTpw">Baseball</span>
						</div>
					@elseif ($sport['name'] == 'Tennis')
						<div class="MediaObject-sc-1gcatrn-0 hoZYoy">
							<svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" color="#B3804A" class="IconSportsTennis-sc-1ugcluz-0 cjCKlU">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M4.338 15.91A8.13 8.13 0 0110 13.626a8.11 8.11 0 015.659 2.283A8.159 8.159 0 0110 18.194a8.161 8.161 0 01-5.662-2.285zM3.784 4.673A8.907 8.907 0 0010 7.18a8.933 8.933 0 006.216-2.503 8.151 8.151 0 01-.003 10.65A8.908 8.908 0 0010 12.82c-2.34 0-4.532.892-6.217 2.504a8.154 8.154 0 01.001-10.65zm11.877-.582A8.132 8.132 0 0110 6.373c-2.14 0-4.13-.813-5.661-2.282a8.156 8.156 0 0111.322 0zm.88 12.069A8.95 8.95 0 0019 10c0-4.963-4.037-9-9-9a8.965 8.965 0 00-6.501 2.794c-.006.003-.013.002-.018.005-.006.007-.004.018-.01.024A8.961 8.961 0 001 10c0 4.963 4.036 9 9 9 2.55 0 4.85-1.07 6.49-2.781.008-.008.022-.004.032-.013.013-.012.01-.031.02-.045z" fill="currentColor"></path>
							</svg>
							<span class="ListEventContainer__SportsLabel-sc-2quhzy-1 bCCTpw">Tennis</span>
						</div>
					@endif
					<a class="ListEventContainer__SportsSeeAllWrapper-sc-2quhzy-3 XYCkf" href="/sports/{{strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $sport['name'])))}}">See all</a>
				</div>
				<div class="ListEventContainer__EventsWrapper-sc-2quhzy-4 cxCKIF">
					@if ($sport['name'] == 'Soccer')
						@include('sportsbet.sports.soccer', ['data' =>$sport['data'], 'type' => 1])
					@elseif ($sport['name'] == 'Basketball')
						@include('sportsbet.sports.basketball', ['data' =>$sport['data'], 'type' => 1])
					@elseif ($sport['name'] == 'Baseball')
						@include('sportsbet.sports.baseball', ['data' =>$sport['data'], 'type' => 1])
					@elseif ($sport['name'] == 'Tennis')
						@include('sportsbet.sports.tennis', ['data' =>$sport['data'], 'type' => 1])
					@endif
				</div>
			</div>
		</div>
	@endforeach
</div>
@stop
