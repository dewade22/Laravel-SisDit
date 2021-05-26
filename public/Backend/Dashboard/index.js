$(function () {
    $('li#home_menu').addClass('active')
    //Widgets count
    $('.count-to').countTo();


    //Sales count to
    $('.sales-count-to').countTo({
        formatter: function (value, options) {
            return 'Rp.' + value.toLocaleString('en-US', {minimumFractionDigits:2 , maximumFractionDigits:2}) //toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, ' ').replace('.', ',');
        }
    })
})
