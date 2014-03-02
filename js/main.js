$(document).ready(function(){
    $('.mainSelect').change(function(e) {
        var val = $(this).val() - 0;
        if(val > 0) {
            $('.calc .processor').removeClass('invisible');
        } else {
            $('.calc .processor').addClass('invisible');
        }
        
        $.post('/?r=site/ajax','wareId='+val,function(data){
            if(data) {
                if('status' in data){
                    if(data.status) {
                        $('#materials-price').text(data.results.materialsCost);
                        $('#equip-price').text(data.results.equipCost);
                        $('#work-price').text(data.results.workCost);
                        $('#other-price').text(data.results.otherCost);
                        $('#summary-price').text(data.results.summary);
                    } else {
                        alert('Server error'+data.msg);
                    }
                } else {
                    alert('Server incorrect answer!');
                }
            } else {
                alert('Server fail!');
            }
        },'json')
    });

    $('.mainSelect').change();
});