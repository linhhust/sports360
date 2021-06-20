$(document).ready(function(){
  if ($(window).width() < 600) {
    $('.vzgLe').remove();
  }
});

var elementSelect = `
  <li class="">
      <div class="event" data-id="{id}">
          <div class="title">
              <a class="hover:u-color-piccolo" href="{url}">
                  <span class="team">
                      {title}
                  </span>
              </a>
          </div>
          <div class="type">{type}</div>
          <div class="target">
              <div class="team">{team}</div>
              <span class="odds animate">
                  <span class="icon">
                      <span class="icon-inner positive">
                          <svg fill="#000" height="32" viewbox="0 0 512 512" width="32" xmlns="http://www.w3.org/2000/svg">
                          </svg>
                      </span>
                  </span>
                  <span class="odds u-color-piccolo option_{question_id}_{option_id}">{odds}</span>
              </span>
          </div>
          <div class="BetInput__InputContainer-sc-1fmcki4-0 jZDdQz">
              <div class="Stake__StakeWrapper-uuut72-0 fwNLBi">
                  <span class="Stake__FreeBetIconWrapper-uuut72-1 hKxNvU">
                  </span>
                  <div class="bet-amount-overlay" style="width: 100%;">
                  </div>
                  <input class="Input-bxe8t3-0 TextInput__TextInputElem-xu44xk-0 iGAupL u-largest-border-radius" data-test-id="betslip-moneyInputField" placeholder="Enter your stake" style="text-align: right;" tabindex="1100" type="text" value="0"/>
              </div>
          </div>
          <div class="event-footer">
              <button class="remove u-color-piccolo">
                  Remove
                  <span class="icon">
                      <svg fill="#000" height="32" viewbox="0 0 17 18" width="32" xmlns="http://www.w3.org/2000/svg">
                          <title>
                              closeSign
                          </title>
                          <g fill="none">
                              <g fill="#888">
                                  <path d="M14.51.868l2.122 2.122L2.49 17.132.368 15.01z">
                                  </path>
                                  <path d="M2.49.868L.368 2.99 14.51 17.132l2.122-2.122z">
                                  </path>
                              </g>
                              <g fill="#FFF">
                                  <path d="M14.51.868l2.122 2.122L2.49 17.132.368 15.01z">
                                  </path>
                                  <path d="M2.49.868L.368 2.99 14.51 17.132l2.122-2.122z">
                                  </path>
                              </g>
                          </g>
                      </svg>
                  </span>
              </button>
              <div class="potentialwin">
                  Potential win:
                  <span class="sum u-color-bulma">
                      USD
                      <span class="numbers">0.00</span>
                  </span>
              </div>
          </div>
      </div>
  </li>
`;
var betWrapper = `
    <div class="betslip maximized">
        <div class="wrapper active u-bordercolor-piccolo">
            <ul class="betslip-tabs">
                <li class="tab">
                    <button class="active">Single<span class="amount">0</span></button>
                </li>
                <li class="button">
                    <button>
                        <svg fill="#000" height="32" viewbox="0 0 512 512" width="32" xmlns="http://www.w3.org/2000/svg">
                            <path d="M507 205.8H5v100.4h502z"></path>
                        </svg>
                    </button>
                </li>
            </ul>
            <div class="scrolllock">
                <div class="inner" style="outline: none;" tabindex="0">
                    <div class="button-group center">
                    </div>
                    <ul class="bets"></ul>
                    <div class="lower">
                        <div class="total">
                            <span class="label u-color-trunks">
                                Total stake:
                            </span>
                            USD  <span class="numbers">0.00</span>
                        </div>
                    </div>
                    <div class="betslip-footer">
                        <ul class="buttons pt-large">
                            <li class="wide"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
`;

var buttonClear = `
  <button class="Button__StyledButton-sc-1xtdszg-0 clear-stake mLCby ClearStakeButton__CustomButton-sc-1izbh5r-0 esovfM">
      <div class="Button__InnerContainer-sc-1xtdszg-1 fbXsbf">
          <svg width="1em" height="1em" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="IconClose-kfcmi0-0 dnuRDY">
              <path d="M12.609 10L20 17.391 17.391 20 10 12.609 2.609 20 0 17.391 7.391 10 0 2.609 2.609 0 10 7.391 17.391 0 20 2.609z" fill="currentColor" fill-rule="evenodd"></path>
          </svg>
      </div>
  </button>
`;
$('.bGovrs').click(function(){
    if ($('.jKPtrB').length > 0){
      // expand
      $('.template__Template-sm5no8-4').removeClass('jKPtrB');
      $('.template__Template-sm5no8-4').addClass('jeWLPA');
      $(this).find('svg').html(`<path d="M12.609 10L20 17.391 17.391 20 10 12.609 2.609 20 0 17.391 7.391 10 0 2.609 2.609 0 10 7.391 17.391 0 20 2.609z" fill="currentColor" fill-rule="evenodd"></path>`);
      $(this).find('svg').attr('viewBox','0 0 20 20');
    }else{
      // collapse
      $('.template__Template-sm5no8-4').removeClass('jeWLPA');
      $('.template__Template-sm5no8-4').addClass('jKPtrB');
      $(this).find('svg').html(`
          <rect width="16" height="2" rx="1" fill="currentColor"></rect>
          <rect y="6" width="16" height="2" rx="1" fill="currentColor"></rect>
          <rect y="12" width="16" height="2" rx="1" fill="currentColor"></rect>
        `);
      $(this).find('svg').attr('viewBox','0 0 16 16');
    }
});
var total;
var pusher = new Pusher('c6551a3f0e4ab646ff51', {
  encrypted: true,
  cluster: 'us3',
});
// var pusher = new Pusher('9d19381a054db6805cf1', {
//   encrypted: true,
//   cluster: 'ap1',
// });
var channel_update_option = pusher.subscribe('update-option');
channel_update_option.bind('App\\Events\\UpdateOption', function(data) {
    if ($(`.option_${data.option.question_id}_${data.option.id}`).find('.eieSeJ').length > 0){
        $(`.option_${data.option.question_id}_${data.option.id}`).find('.eieSeJ').text(data.option.text);
    }
    if ($(`.option_${data.option.question_id}_${data.option.id}`).find('.ilfAV').length > 0){
        ratio = parseFloat(data.option.ratio2)
        ratio_old = parseFloat($(`.option_${data.option.question_id}_${data.option.id}`).find('.ilfAV').text());
        if (ratio != ratio_old){
            $(`.option_${data.option.question_id}_${data.option.id}`).find('.ilfAV').text(ratio.toFixed(2));
            if ($('.bets').find(`.option_${data.option.question_id}_${data.option.id}`).length > 0 ) {
                if ($('.message').length == 0){
                  $('.bets').find(`.option_${data.option.question_id}_${data.option.id}`).text(ratio.toFixed(2));
                  $('.buttons').before('<p class="message danger">Odds have changed. To place a bet you need to review and approve changes first.</p>')  
                }
                $('.btn-select').removeClass('pt-disabled');
                $('.btn-select').text('Accept new odds');
            }
        }
    }
});
var channel_update_match = pusher.subscribe('update-match');
channel_update_match.bind('App\\Events\\UpdateMatch', function(data) {
    if ($(`.match_${data.id}`).length > 0){
        number = parseFloat($(`.match_${data.id}`).parent().find('.HMZTp').text());
        if (number == 1){
            $(`.match_${data.id}`).parent().parent().remove();
        }else{
          $(`.match_${data.id}`).parent().find('.HMZTp').text(number - 1); 
          $(`.match_${data.id}`).remove();
        }
    }
});
var channel_update_score = pusher.subscribe('update-score');
channel_update_score.bind('App\\Events\\UpdateScore', function(data) {
    if ($(`.match_${data.match.id}`).length > 0){
        $(`.match_${data.match.id}`).find('.score1').text(data.match.score1);
        $(`.match_${data.match.id}`).find('.score2').text(data.match.score2);
    }
});
function calculateTotal(){
  total = 0;
  $('.event .numbers').each(function(item){
    total += parseFloat($(this).text());
  });
  $('.lower').find('.numbers').text(total.toFixed(2));
  balance = parseFloat($('.balance').text());
  if (total > balance){
    $('.event').each(function(){
      if ($(this).find('.error').length == 0){
        $(this).append(errorWrapper);
      }
    });
    $('.btn-select').addClass('pt-disabled');
    $('.btn-select').attr('data-type', '');
    return false;
  }else{
    $('.event .error').remove();
    $('.btn-select').removeClass('pt-disabled')
    return true;
  }
}
addEvent();
// select item
var stake = '';
// add event 
function addEvent(){
  $('.ceRxxX').click(function(){
    if ($(this).find('.eRaPtn').length > 0){
      $(this).find('.summary__IconWrapper-b40yh6-3').removeClass('eRaPtn');
      $(this).find('.summary__IconWrapper-b40yh6-3').addClass('gDjwJB');
      $(this).parent().find('p').removeClass('laEXxZ');
      $(this).parent().find('p').addClass('llGbUT');
      $(this).parent().find('ul').css('display','grid');
    }else{
      $(this).find('.summary__IconWrapper-b40yh6-3').removeClass('gDjwJB');
      $(this).find('.summary__IconWrapper-b40yh6-3').addClass('eRaPtn');
      $(this).parent().find('p').removeClass('llGbUT');
      $(this).parent().find('p').addClass('laEXxZ');
      $(this).parent().find('ul').css('display','none');
    }
  });
  $('.bGbaJS, .CbMtg').click(function(){
    type = $(this).attr('data-type');
    option = $(this).attr('data-option') + ($(this).find('.eieSeJ').length > 0 ? " " + $(this).find('.eieSeJ').text() : '')
    if ($(this).hasClass('selected')){
      $('.event').each(function(){
        if (($(this).find('.type').text() == type) && ($(this).find('.target').find('.team').text() == option)){
          $(this).remove();
          number = parseInt($('.betslip-tabs').find('.amount').text())
          $('.betslip-tabs').find('.amount').text(number - 1);
        }
      });
      $(this).removeClass('selected');
      if ($('.event').length > 0){
        calculateTotal();
      }else{
        $('.betslip').remove();
      }
    }else{
      $(this).addClass('selected');
      metaTags = $(this).parent().parent().find('meta');
      element = elementSelect.replace('{title}', $(this).attr('data-info'))
            .replace('{id}', $(this).attr('data-id'))
            .replace('{url}','url')
            .replace('{type}', type)
            .replace('{team}', option)
            .replace('{question_id}', $(this).attr('data-question'))
            .replace('{option_id}', $(this).attr('data-id'))
            .replace('{odds}', $(this).find('.ilfAV').length > 0 ? $(this).find('.ilfAV').text() : $(this).find('.iAtQcF').text());
      if ($('.betslip').length == 0){
        $('.modal-bet').html(betWrapper);
        if ($('input[name="is_login"]').val() == 1){
          $('.betslip').find('.wide').html(`<button class="pt-button pt-fill pt-intent-primary pt-disabled btn-select" type="button" data-type="1">Place bet</button>`)
        }else{
          $('.betslip').find('.wide').html(`<button class="pt-button pt-fill pt-intent-primary btn-select" type="button" data-type="2">Sign In</button>`);
        }
        $('.btn-select').click(function(){
          clickButtonBet();
        });
        // hide modal bet
        $('.button').click(function(){
          if ($('.minimized').length > 0){
            // expand
            $('.betslip').removeClass('minimized');
            $('.betslip').addClass('maximized');
            $(this).find('svg').html(`<path d="M507 205.8H5v100.4h502z">
                            </path>`);
          }else{
            // collapse
            $('.betslip').removeClass('maximized');
            $('.betslip').addClass('minimized');
            $(this).find('svg').html(`<path class="st0" d="M506.997 205.799H306.201V5H205.799v200.799H5.003v100.399h200.796V507h100.402V306.198h200.796z"></path>`);
          }
        })
      }
      $('.bets').append(element);
      number = parseInt($('.betslip-tabs').find('.amount').text())
      $('.betslip-tabs').find('.amount').text(number + 1);
      // remove item bet
      $('.remove').last().click(function(){
        $(this).parent().parent().parent().remove();
        number = parseInt($('.betslip-tabs').find('.amount').text())
        if (number == 1){
          $('.betslip').remove();
        }else{
          $('.betslip-tabs').find('.amount').text(number - 1);
          calculateTotal();
        }
        type = $(this).parent().parent().find('.type').text();
        option = $(this).parent().parent().find('.target').find('.team').text()
        $('.selected').each(function(){
          option_in = $(this).attr('data-option') + ($(this).find('.eieSeJ').length > 0 ? " " + $(this).find('.eieSeJ').text() : '')
          if (($(this).attr('data-type') == type) && (option_in == option)){
            $(this).removeClass('selected');
          }
        });
      })
      // click into cell input stake
      $('.iGAupL').last().focus(function(){
        stake = $(this).val();
        if ($(this).val() == '0'){
          $(this).val('');
        }else if($(this).val() == ''){
          $(this).parent().removeClass('selected');
        }else{
          $(this).parent().addClass('selected');
        }
      });
      $('.iGAupL').last().blur(function(){
        if ($(this).val() == '0' || $(this).val() == ''){
          $(this).parent().removeClass('selected');
        }
      });
      $('.iGAupL').last().on('input', function() {
        try{
          if (!isNaN($(this).val()) || $(this).val() == ''){
            stake = $(this).val();
            value = parseFloat(stake);
            if (stake == '0' || stake == ''){
              $(this).parent().find('.clear-stake').remove();
              $(this).parent().parent().parent().find('.numbers').text('0.00');
            }else{
              odds = $(this).parent().parent().parent().find('.odds .u-color-piccolo').text();
              value = value * odds;
              $(this).parent().parent().parent().find('.numbers').text(value.toFixed(2));
              if ($(this).parent().parent().find('.clear-stake').length == 0){
                $(this).parent().find('.hKxNvU').after(buttonClear);
              }
              $('.clear-stake').click(function(){
                $(this).parent().find('input').val('');
                $(this).parent().parent().parent().find('.numbers').text('0.00');
                $(this).remove();
                calculateTotal();
              });
            }
          }else{
            $(this).val(stake);
          }

          calculateTotal();
        }catch(err){
          
        }
          
      });
    }
  });
}

var errorWrapper = `
  <div class="error">
      <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#000" height="32" width="32" viewBox="0 0 16 14">
              <path class="st0" d="M15.7 12.1L9.1.9c-.6-1-1.5-1-2.1 0L.3 12.1c-.6 1-.1 1.8 1 1.8h13.2c1.3 0 1.7-.8 1.2-1.8zM7.2 4.9c0-.4.4-.8.8-.8s.8.4.8.8v2.4c0 .3 0 .7-.1 1 0 .3-.1.4-.1.7H7.5c-.1-.3-.2-.4-.2-.7 0-.3-.1-.7-.1-1V4.9zm1.7 6.8c0 .1-.1.2-.2.3s-.2.2-.3.2c-.1 0-.2.1-.4.1-.1 0-.3 0-.4-.1-.1 0-.2-.1-.3-.2s-.2-.2-.2-.3-.1-.2-.1-.4c0-.1 0-.3.1-.4 0-.1.1-.2.2-.3.1-.1.2-.2.3-.2.1 0 .2-.1.4-.1.1 0 .3 0 .4.1.1 0 .2.1.3.2.1.1.2.2.2.3.1.1.1.3.1.4 0 .1 0 .3-.1.4z"></path>
          </svg>
      </span>
      <span>Your balance is too low to place this bet</span>
  </div>  
`;

function clickButtonBet(){
  if ($('.btn-select').text() == 'Sign In'){
    window.location.href = "/login"
  }else if ($('.btn-select').text() == 'Accept new odds'){
    if (!calculateTotal()){
      $('.btn-select').addClass('pt-disabled');
    } 
    if ($('input[name="is_login"]') == '1') {
      $('.btn-select').text('Place bet');
    }else{
      $('.btn-select').text('Login');
    }
    $('.message').remove();
  }else{
    if ($('.pt-disabled').length == 0){
      if (calculateTotal()){
        data = [];
        $('.event').each(function(){
          data.push({
            id: $(this).attr('data-id'),
            amount: $(this).find('input').val(),
            odds: $(this).find('.target').find('.u-color-piccolo').text(),
          });
        });
        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $.ajax({
              url: '/sports/bet',
              method: "POST",
              data: {
                bets: data
              },
              success: function(data) {
                  if (data.error){
                    notify(data.error, 'Error', 'danger')
                  }else{
                    $('.selected').each(function(){
                      $(this).removeClass('selected');
                    })
                    balance = parseFloat($('.balance').text());
                    totalBet = 0;
                    $('.iGAupL').each(function(){
                      totalBet += parseFloat($(this).val());
                    });
                    balance -= totalBet;
                    $('.balance').text(balance.toFixed(2));
                    notify('Bet Success', 'Success')
                    $('.betslip').remove();
                  }
              },
              error: function(error, b, c) {
                  console.log(error)
                  notify("Error System", 'Error', 'danger')
              }
          });
      }
    }else{

    }
  }
}

function notify(message = 'Success', title = 'Success', type = 'success') {
    var content = {};
    content.message = message;
    content.title = title;
    content.icon = 'fa fa-bell';
    $.notify(content, {
        type: type,
        placement: {
            from: 'top',
            align: 'center'
        },
        showProgressbar: true,
        time: 1000,
        delay: 4000,
    });
}

$('.btn-deposit').click(function(){
  window.location.href = '/payment';
});
$('.my-bet').click(function(){
  window.location.href = '/mybet';
});

