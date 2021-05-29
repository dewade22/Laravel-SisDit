$(function(){
    $('li#master_Data').addClass('active')
    $('li#master_Data').find('.ml-menu').css('display', 'block')
    $('li#master_Data').find('a').addClass('toggled')
    $('#jaminan').addClass('active')

    //Validasi Form
    $('#form-add').validate({
        onkeyup: function(element) {$(element).valid()},
        rules:{
            Jaminan: {
                Jaminan : true
            },
            Besar_Pinjaman_Maksimal :{
                numbers: true
            },
            Besar_Pinjaman_Minimal :{
                numbers: true
            },
        }
    })

    //Value regex
    let character = new RegExp(/[\w,.!?]+$/) //RegExp(/^[a-zA-Z0-9 -]+$/)
    let space = new RegExp(/^[^ -]/)

    let validateJaminan = function(value) {
        return character.test(value) && space.test(value) && value.indexOf('  ') == -1 && value.indexOf('--') == -1 && value.indexOf(' -') == -1 && value.indexOf('- ') == -1
    }

    $.validator.addMethod("Jaminan", function(value, element) {
        return validateJaminan(value)
    }, 'Please enter only character and number and not start or end with space')

    let onlynumber = new  RegExp(/^(?!0\.00)\d{1,3}(,\d{3})*(\.\d{1,10})?$/)  //RegExp(/^[0-9]*$/)

    let ValidateNumber = function(value){
        return onlynumber.test(value) && value.indexOf('--') == -1 && value.indexOf(' -') == -1 && value.indexOf('- ') == -1
    }

    $.validator.addMethod('numbers', function(value, element){
        return ValidateNumber(value)
    }, 'Please enter a valid number')

    $('#Besar_Pinjaman_Maksimal').keyup(function(){
        $(this).val(formatRupiah(this.value))
    })

    $('#Besar_Pinjaman_Minimal').keyup(function(){
        $(this).val(formatRupiah(this.value))
    })

    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^.\d]/g, '').toString(),
            split   = number_string.split('.'),
            sisa    = split[0].length % 3,
            rupiah  = split[0].substr(0, sisa),
            ribuan  = split[0].substr(sisa).match(/\d{3}/gi)

        if (ribuan) {
            separator = sisa ? ',' : '';
            rupiah += separator + ribuan.join(',')
        }

        rupiah = split[1] != undefined ? rupiah + '.' + split[1] : rupiah
        return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '')
    }
})
