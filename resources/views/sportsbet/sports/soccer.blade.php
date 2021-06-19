@if(count($data) > 0)
    @foreach($data as $event)
    {{-- {{dd($event)}} --}}
            <div class="breakout__LTRArenaBreakout-ojwmgi-0 hhKAHt">
                <div>
                    <div class="summary__SummaryWrapper-b40yh6-0 ceRxxX">
                        <div class="summary__IconWrapper-b40yh6-3 gDjwJB">
                            <svg class="IconChevronRight-legcjk-0 jgffkD" height="1em" viewbox="0 0 12 20" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.623L7.014 10 0 17.376 2.5 20 12 10 2.498 0z" fill="currentColor" fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="summary__SummaryCaption-b40yh6-1 llGbUT">{{$event['name']}}</p>
                        <div class="summary__EventCount-b40yh6-2 gZeRne">
                            <p class="summary__SummaryCaption-b40yh6-1 HMZTp">{{count($event['data'])}}</p>
                        </div>
                    </div>
                            <ul class="grid__EventListHeader-ljbzft-1 bqFIDy">
                                <li class="gridHeader__CompetitorGap-sc-1nkp4nt-0 chIOHZ">
                                </li>
                                <li class="gridHeader__Title1X2-sc-1nkp4nt-1 iDUEcT">
                                    <p class="gridHeader__Caption-sc-1nkp4nt-8 kEZQkW">1X2</p>
                                </li>
                                <li class="gridHeader__HCP-sc-1nkp4nt-2 gCcUzs">
                                    <p class="gridHeader__Caption-sc-1nkp4nt-8 kEZQkW">HCP</p>
                                </li>
                                <li class="gridHeader__TOT-sc-1nkp4nt-3 latHAo">
                                    <p class="gridHeader__Caption-sc-1nkp4nt-8 kEZQkW">TOT</p>
                                </li>
                                <li class="gridHeader__FirstHalf1X2-sc-1nkp4nt-4 cYPXjA">
                                    <p class="gridHeader__Caption-sc-1nkp4nt-8 kEZQkW">1H 1X2</p>
                                </li>
                                <li class="gridHeader__FirstHalfHCP-sc-1nkp4nt-5 hhWHNF">
                                    <p class="gridHeader__Caption-sc-1nkp4nt-8 kEZQkW">1ST HALF HCP</p>
                                </li>
                                <li class="gridHeader__FirstHalfTOT-sc-1nkp4nt-6 beDdSp">
                                    <p class="gridHeader__Caption-sc-1nkp4nt-8 kEZQkW">1ST HALF TOT</p>
                                </li>
                                <li class="gridHeader__EventCountGap-sc-1nkp4nt-7 jGRaUL">
                                </li>
                            </ul>
                        @php
                            foreach($event['data'] as $question){
                                $option1 = isset($question['options'][0])?$question['options'][0]:'';
                                $option2 = isset($question['options'][1])?$question['options'][1]:'';
                                $option3 = 'Draw';
                        @endphp
                                <ul class="grid__EventListBodyWrapper-ljbzft-0 bfDTRZ" itemscope="" itemtype="https://schema.org/SportsEvent" variant="asian-desktop">
                                    <li itemprop="location" itemscope="" itemtype="https://schema.org/Place" style="display: none;">
                                    </li>
                                    <li class="grid__HomeCompetitor-jq9sb4-0 eFFTax">
                                        <a class="CompetitorWithScore__CompetitorWrapper-v0fmv1-0 ifMAfU" href="javascript:void(0)" itemprop="homeTeam" itemscope="" itemtype="https://schema.org/SportsTeam">
                                            <meta content="Soccer" itemprop="sport" property="">
                                            <p class="CompetitorWithScore__Name-v0fmv1-1 bAXEiS" itemprop="name">{{$option1}}</p>
                                            <p class="CompetitorWithScore__Scores-v0fmv1-2 aBgbT">
                                                <span class="CompetitorWithScore__Score-v0fmv1-3 qLfpg">{{$question['score1']}}</span>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="grid__AwayCompetitor-jq9sb4-1 eAKYok">
                                        <a class="CompetitorWithScore__CompetitorWrapper-v0fmv1-0 ifMAfU" href="javascript:void(0)" itemprop="awayTeam" itemscope="" itemtype="https://schema.org/SportsTeam">
                                            <p class="CompetitorWithScore__Name-v0fmv1-1 bAXEiS" itemprop="name">{{$option2}}</p>
                                            <p class="CompetitorWithScore__Scores-v0fmv1-2 aBgbT">
                                                <span class="CompetitorWithScore__Score-v0fmv1-3 qLfpg">{{$question['score2']}}</span>
                                            </p>
                                        </a>
                                    </li>
                                    {{-- {{dd($question)}} --}}
                                    <li class="grid__EventInfo-jq9sb4-2 isoPst">
                                        <div class="AsianEventInfo__Time-sc-3u4nbe-0 eTrGsW">
                                            <p class="AsianEventInfo__Caption-sc-3u4nbe-1 dkGcvN">{{$type == '1' ? '' : $question['time']}}</p>
                                            <div class="AsianEventInfo__IconsWrapper-sc-3u4nbe-2 OpnS">
                                                <div class="AsianEventInfo__BetBuilderWrapper-sc-3u4nbe-6 gkUEYp">
                                                    @if($type != 1)
                                                        <span class="Badge-gd8hvq-0 SOdlZ" color="goten.100">BB</span>
                                                    @else
                                                        <svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="IconStopwatch-mv697q-0 AsianEventInfo__StreamAvailableIcon-sc-3u4nbe-4 cqYQmZ">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.583 2.048l-.978.978A5.715 5.715 0 007.257 1.55l.001-.024v-.26a.26.26 0 00-.26-.261h-.522a.26.26 0 00-.26.26V1.55a5.737 5.737 0 104.758 1.845l.978-.978.598.597c.246.246.615-.122.369-.368L11.354 1.08c-.245-.246-.614.123-.368.369l.597.598zm-4.846 10.43a5.215 5.215 0 110-10.43 5.215 5.215 0 010 10.43zm.26-6.225a1.044 1.044 0 010 2.02v.555c0 .347-.52.347-.52 0v-.555a1.044 1.044 0 010-2.02v-2.64c0-.347.52-.347.52 0v2.64zm.261 1.01a.522.522 0 11-1.043 0 .522.522 0 011.043 0z" fill="currentColor"></path>
                                                            <path d="M10.605 3.026l-.135.148.141.129.135-.135-.141-.142zm.978-.978l.142.141.141-.141-.141-.142-.142.142zM7.257 1.55l-.199-.018-.017.199.198.018.018-.2zm-1.04 0l.017.199.2-.018-.018-.2-.2.019zm4.757 1.845l-.142-.141-.135.135.13.14.147-.134zm.978-.978l.142-.142-.142-.141-.141.141.141.142zm.598.597l.142-.141-.142.141zm.369-.368l.141-.142-.141.142zM11.354 1.08l-.141.141.141-.14zm-.368.369l-.142.141.142-.141zM6.998 6.253h-.2v.155l.15.039.05-.194zm0 2.02l-.05-.193-.15.038v.155h.2zm-.522 0h.2v-.155l-.15-.038-.05.193zm0-2.02l.05.194.15-.04v-.154h-.2zm4.27-3.085l.979-.979-.283-.283-.978.979.282.283zM7.24 1.748a5.515 5.515 0 013.231 1.426l.27-.295A5.915 5.915 0 007.275 1.35l-.036.399zm-.18-.222v.006l.398.035a.463.463 0 00.001-.04h-.4zm0-.26v.26h.4v-.26h-.4zm-.061-.061a.06.06 0 01.06.06h.4a.46.46 0 00-.46-.46v.4zm-.522 0h.522v-.4h-.522v.4zm-.06.06a.06.06 0 01.06-.06v-.4a.46.46 0 00-.46.46h.4zm0 .261v-.26h-.4v.26h.4zm0 .006v-.006h-.4l.001.041.399-.035zM1.2 7.263A5.537 5.537 0 016.234 1.75l-.036-.399A5.937 5.937 0 00.8 7.263h.4zM6.737 12.8A5.536 5.536 0 011.2 7.263H.8A5.936 5.936 0 006.737 13.2v-.4zm5.537-5.537A5.536 5.536 0 016.737 12.8v.4a5.936 5.936 0 005.937-5.937h-.4zM10.826 3.53a5.516 5.516 0 011.448 3.733h.4A5.916 5.916 0 0011.12 3.26l-.295.27zm.985-1.255l-.979.979.283.282.979-.978-.283-.283zm.88.598l-.597-.598-.283.283.598.598.283-.283zm.086-.086c.024.023.023.037.023.043a.07.07 0 01-.023.043.071.071 0 01-.043.022c-.005 0-.02.001-.042-.022l-.283.283a.452.452 0 00.651 0 .452.452 0 000-.652l-.282.283zm-1.564-1.565l1.565 1.565.282-.283L11.496.94l-.283.282zm-.086.086c-.023-.023-.023-.037-.023-.042.001-.01.007-.028.023-.044a.07.07 0 01.043-.022c.006 0 .02 0 .043.022l.283-.282a.452.452 0 00-.652 0 .452.452 0 000 .652l.283-.284zm.598.598l-.598-.598-.283.283.598.598.283-.283zM1.322 7.263a5.415 5.415 0 005.415 5.415v-.4a5.015 5.015 0 01-5.015-5.015h-.4zm5.415-5.415a5.415 5.415 0 00-5.415 5.415h.4a5.015 5.015 0 015.015-5.015v-.4zm5.415 5.415a5.415 5.415 0 00-5.415-5.415v.4a5.015 5.015 0 015.015 5.015h.4zm-5.415 5.415a5.415 5.415 0 005.415-5.415h-.4a5.015 5.015 0 01-5.015 5.015v.4zM7.98 7.263c0-.58-.396-1.066-.932-1.204l-.1.388a.844.844 0 01.632.816h.4zm-.932 1.204c.536-.138.932-.624.932-1.204h-.4a.844.844 0 01-.632.817l.1.387zm.15.36v-.554h-.4v.555h.4zm-.922 0a.452.452 0 00.46.461.452.452 0 00.46-.46H6.8c0 .032-.01.042-.015.046a.071.071 0 01-.046.014.071.071 0 01-.046-.014c-.005-.004-.015-.014-.015-.046h-.4zm0-.554v.555h.4v-.555h-.4zm-.782-1.01c0 .58.396 1.066.932 1.204l.1-.387a.844.844 0 01-.632-.817h-.4zm.932-1.204a1.244 1.244 0 00-.932 1.204h.4c0-.392.268-.723.632-.816l-.1-.388zm-.15-2.445v2.639h.4v-2.64h-.4zm.922 0a.452.452 0 00-.461-.461.452.452 0 00-.46.46h.4c0-.032.01-.042.014-.045a.071.071 0 01.046-.015c.022 0 .039.008.046.015.004.003.015.013.015.046h.4zm0 2.639v-2.64h-.4v2.64h.4zm-.461 1.732a.722.722 0 00.721-.722h-.4a.322.322 0 01-.321.322v.4zm-.722-.722c0 .399.323.722.722.722v-.4a.322.322 0 01-.322-.322h-.4zm.722-.721a.722.722 0 00-.722.721h.4c0-.177.144-.321.322-.321v-.4zm.721.721a.722.722 0 00-.721-.721v.4c.177 0 .321.144.321.321h.4z" fill="currentColor"></path>
                                                        </svg>
                                                    @endif
                                                </div>
                                            </div>
                                            <p class="AsianEventInfo__DrawCaption-sc-3u4nbe-5 eJstFh">X</p>
                                        </div>
                                    </li>
                                    <li class="grid__Home1X2-jq9sb4-3 iKPMp">
                                        @if(isset($question['data']['1x2'][$option1]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['1x2'][$option1]['question_id']}}_{{$question['data']['1x2'][$option1]['id']}}" data-info="{{$question['name']}}" data-option="{{$option1}}" data-type="1x2" data-id="{{$question['data']['1x2'][$option1]['id']}}" data-question="{{$question['data']['1x2'][$option1]['question_id']}}">
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{$question['data']['1x2'][$option1]['ratio2']}}</p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__Away1X2-jq9sb4-4 vzgLe">
                                        @if(isset($question['data']['1x2'][$option2]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['1x2'][$option2]['question_id']}}_{{$question['data']['1x2'][$option2]['id']}}" data-info="{{$question['name']}}" data-option="{{$option2}}" data-type="1x2" data-id="{{$question['data']['1x2'][$option2]['id']}}" data-question="{{$question['data']['1x2'][$option2]['question_id']}}">
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['1x2'][$option2]['ratio2'],2)}}</p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__Draw1X2-jq9sb4-5 btXGYI">
                                        @if(isset($question['data']['1x2'][$option3]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['1x2'][$option3]['question_id']}}_{{$question['data']['1x2'][$option3]['id']}}" data-info="{{$question['name']}}" data-option="Draw" data-type="1x2" data-id="{{$question['data']['1x2'][$option3]['id']}}" data-question="{{$question['data']['1x2'][$option3]['question_id']}}">
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['1x2'][$option3]['ratio2'],2)}}</p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__HomeHCP-jq9sb4-8 dHMwDp">
                                        @if(isset($question['data']['hcp'][$option1]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['hcp'][$option1]['question_id']}}_{{$question['data']['hcp'][$option1]['id']}}" data-info="{{$question['name']}}" data-option="{{$option1}}" data-type="Asian Handicap" data-id="{{$question['data']['hcp'][$option1]['id']}}" data-question="{{$question['data']['hcp'][$option1]['question_id']}}">
                                                <p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$question['data']['hcp'][$option1]['ratio1']}}</p>
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['hcp'][$option1]['ratio2'],2)}}</p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__AwayHCP-jq9sb4-9 geniht">
                                        @if(isset($question['data']['hcp'][$option2]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['hcp'][$option2]['question_id']}}_{{$question['data']['hcp'][$option2]['id']}}" data-info="{{$question['name']}}" data-option="{{$option2}}" data-type="Asian Handicap" data-id="{{$question['data']['hcp'][$option2]['id']}}" data-question="{{$question['data']['hcp'][$option2]['question_id']}}">
                                                <p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$question['data']['hcp'][$option2]['ratio1']}}</p>
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['hcp'][$option2]['ratio2'],2)}}</p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX" >
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__HomeTOT-jq9sb4-10 gGHKFY">
                                        @if(isset($question['data']['tot'][$option1]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['tot'][$option1]['question_id']}}_{{$question['data']['tot'][$option1]['id']}}" data-info="{{$question['name']}}" data-option="" data-type="Asian Total" data-id="{{$question['data']['tot'][$option1]['id']}}" data-question="{{$question['data']['tot'][$option1]['question_id']}}">
                                                <p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$question['data']['tot'][$option1]['ratio1']}}</p>
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['tot'][$option1]['ratio2'],2)}}</p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__AwayTOT-jq9sb4-11 jByJBO">
                                        @if(isset($question['data']['tot'][$option2]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['tot'][$option2]['question_id']}}_{{$question['data']['tot'][$option2]['id']}}" data-info="{{$question['name']}}" data-option="" data-type="Asian Total" data-id="{{$question['data']['tot'][$option2]['id']}}" data-question="{{$question['data']['tot'][$option2]['question_id']}}">
                                                <p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$question['data']['tot'][$option2]['ratio1']}}</p>
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['tot'][$option2]['ratio2'],2)}}</p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__FirstHalfHome1X2-jq9sb4-14 ijNPnK">
                                        @if(isset($question['data']['1h 1x2'][$option1]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['1h 1x2'][$option1]['question_id']}}_{{$question['data']['1h 1x2'][$option1]['id']}}" data-info="{{$question['name']}}" data-option="{{$option1}}" data-type="1st Half - 1x2" data-id="{{$question['data']['1h 1x2'][$option1]['id']}}" data-question="{{$question['data']['1h 1x2'][$option1]['question_id']}}">
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['1h 1x2'][$option1]['ratio2'],2)}}</p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__FirstHalfAway1X2-jq9sb4-15 ckgoaB">
                                        @if(isset($question['data']['1h 1x2'][$option2]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['1h 1x2'][$option2]['question_id']}}_{{$question['data']['1h 1x2'][$option2]['id']}}" data-info="{{$question['name']}}" data-option="{{$option2}}" data-type="1st Half - 1x2" data-id="{{$question['data']['1h 1x2'][$option2]['id']}}" data-question="{{$question['data']['1h 1x2'][$option2]['question_id']}}">
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['1h 1x2'][$option2]['ratio2'],2)}}</p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__FirstHalfDraw1X2-jq9sb4-16 kHupyM">
                                        @if(isset($question['data']['1h 1x2'][$option3]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['1h 1x2'][$option3]['question_id']}}_{{$question['data']['1h 1x2'][$option3]['id']}}" data-info="{{$question['name']}}" data-option="Draw" data-type="1st Half - 1x2" data-id="{{$question['data']['1h 1x2'][$option3]['id']}}" data-question="{{$question['data']['1h 1x2'][$option3]['question_id']}}">
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['1h 1x2'][$option3]['ratio2'],2)}}</p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__FirstHalfHomeHCP-jq9sb4-17 dAcRU">
                                        @if(isset($question['data']['1st half hcp'][$option1]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['1st half hcp'][$option1]['question_id']}}_{{$question['data']['1st half hcp'][$option1]['id']}}" data-info="{{$question['name']}}" data-option="{{$option1}}" data-type="1st Half - Asian Handicap" data-id="{{$question['data']['1st half hcp'][$option1]['id']}}" data-question="{{$question['data']['1st half hcp'][$option1]['question_id']}}">
                                                <p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$question['data']['1st half hcp'][$option1]['ratio1']}}</p>
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['1st half hcp'][$option1]['ratio2'],2)}}</p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__FirstHalfAwayHCP-jq9sb4-18 glEDYr">
                                        @if(isset($question['data']['1st half hcp'][$option2]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['1st half hcp'][$option2]['question_id']}}_{{$question['data']['1st half hcp'][$option2]['id']}}" data-info="{{$question['name']}}" data-option="{{$option2}}" data-type="1st Half - Asian Handicap" data-id="{{$question['data']['1st half hcp'][$option2]['id']}}" data-question="{{$question['data']['1st half hcp'][$option2]['question_id']}}">
                                                <p class="Selection__Name-sc-1tx8nkd-1 eieSeJ"><p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$question['data']['1st half hcp'][$option2]['ratio1']}}</p>
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['1st half hcp'][$option2]['ratio2'],2)}}</p></p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__FirstHalfHomeTOT-jq9sb4-19 fcEWGd">
                                        @if(isset($question['data']['1st half tot'][$option1]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['1st half tot'][$option1]['question_id']}}_{{$question['data']['1st half tot'][$option1]['id']}}" data-info="{{$question['name']}}" data-option="" data-type="1st Half - Asian Handicap" data-id="{{$question['data']['1st half tot'][$option1]['id']}}" data-question="{{$question['data']['1st half tot'][$option1]['question_id']}}">
                                                <p class="Selection__Name-sc-1tx8nkd-1 eieSeJ"><p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$question['data']['1st half tot'][$option1]['ratio1']}}</p>
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['1st half tot'][$option1]['ratio2'],2)}}</p></p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX" >
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__FirstHalfAwayTOT-jq9sb4-20 DSIxD">
                                        @if(isset($question['data']['1st half tot'][$option2]))
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS option_{{$question['data']['1st half tot'][$option2]['question_id']}}_{{$question['data']['1st half tot'][$option2]['id']}}" data-info="{{$question['name']}}" data-option="}}" data-type="1st Half - Asian Handicap" data-id="{{$question['data']['1st half tot'][$option2]['id']}}" data-question="{{$question['data']['1st half tot'][$option2]['question_id']}}">
                                                <p class="Selection__Name-sc-1tx8nkd-1 eieSeJ"><p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">{{$question['data']['1st half tot'][$option2]['ratio1']}}</p>
                                                <p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">{{number_format($question['data']['1st half tot'][$option2]['ratio2'],2)}}</p></p>
                                            </div>
                                        @else
                                            <div class="Selection__SelectionWrapper-sc-1tx8nkd-2 gjAamX">
                                                <svg class="IconPadlock-sc-1wkm386-0 eJrPzX" fill="none" height="1em" viewbox="0 0 24 24" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.107 12.536L4 18.256c0 1.166.853 2.12 2.027 2.332 2.56.318 7.253.741 11.946 0C19.147 20.376 20 19.422 20 18.257l-.213-5.721c0-1.166-.96-2.013-2.134-2.225-2.56-.106-7.04-.424-11.413.106-1.173.106-2.027 1.06-2.133 2.119z" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M16.267 10.31V7.345C16.267 5.014 14.24 3 11.893 3 9.547 3 7.52 4.907 7.52 7.344v2.967" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.2">
                                                    </path>
                                                    <path d="M12 14v3.137" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                    </path>
                                                </svg>
                                            </div>
                                        @endif
                                    </li>
                                    <li class="grid__OtherMarketsLink-jq9sb4-21 fgbAIV">
                                        <a class="OtherMarkets__OtherMarketsWrapper-rt1p9o-0 vKXIN" href="javascript:void(0)">
                                            <p>0</p>
                                        </a>
                                    </li>
                                </ul>
                        {{-- @php
                            }
                        @endphp  --}}
                    @php
                        }
                    @endphp    
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