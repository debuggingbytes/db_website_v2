$(document) .ready(function() {

    var package = $('input.op_package').val();
    $('#orderTotal').html("$" + package);
	$('#theorder').val(package);

    $("form").change(function(){
        var extra = $('select.op_extra').val();
        var responsive = $('select.op_responsive').val();
        var package = $('input.op_package').val();
        var seo = $('select.op_seo').val();
        var mailer = $('select.op_mailer').val()

        var orderTotal = package;
       
        orderTotal = sum([orderTotal, extra, responsive, seo, mailer])
        $('#orderTotal').html('$ ' + orderTotal +'');
				
		$('#theorder').val(orderTotal);
    });

});
function sum(input){
             
    if (toString.call(input) !== "[object Array]")
    	return false; 
        var total =  0;
        for(var i=0;i<input.length;i++){
            if(isNaN(input[i])){
        		continue;
            }
            total += Number(input[i]);
        }
    	return total;
}
