$(document).ready(function() {
    var modal = document.getElementById("modalWithdraw");
    // Get the button that opens the modal
    var btn = document.getElementsByClassName("open-modal")[0];
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks on the button, open the modal
    if (btn){
        btn.onclick = function() {
            modal.style.display = "block";
            $("input[name='address']").val('');
            $("input[name='amount']").val('');
            $("#check_trx").prop("checked", true);
        }
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    $('#withdraw').on('submit', function(e) {
        e.preventDefault(); // Now nothing will happen
        if ($('input[name="type"]').val() == "TRX"){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/withdraw',
                method: "POST",
                data: {
                    address: $('input[name="address"]').val(),
                    type: $('input[name="type"]').val(),
                    amount: $('input[name="amount"]').val(),
                },
                success: function(data) {
                    if (data.error) {
                        $('#amount').parent().parent().find('.err-msg').remove();
                        $('#amount').parent().after(`<span class="err-msg">${data.error}</span>`)
                    } else {
                        balance = parseFloat($('.balance').text());
                        amount = parseFloat($('input[name="amount"]').val())
                        balance -= amount;
                        $('.balance').text(balance.toFixed(2));
                        notify('Request Withdraw Success', 'Success')
                        $('#modalWithdraw').css('display', 'none');
                        $("input[name='address']").val('');
                        $("input[name='amount']").val('');
                        $("#check_trx").prop("checked", true);
                    }
                },
                error: function(error, b, c) {
                    console.log(error)
                    notify("Error System", 'Error', 'danger')
                }
            });
        }
    });
    $('#amount').on('input', function(){
        amount = parseFloat($(this).val());
        if (amount > parseFloat($('.balance').text())){
            if ($(this).parent().parent().find('.err-msg').length > 0){
                $(this).parent().parent().find('.err-msg').remove();
            }
            $(this).parent().after('<span class="err-msg">Your balance is too low to withdraw</span>');
        }else{
            $(this).parent().parent().find('.err-msg').remove();
        }
    });
});