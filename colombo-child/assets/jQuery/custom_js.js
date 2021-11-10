
// ODVAJA BODY SAJTA OD NAVBAR-A
$(document).ready(function(e) {
//var h = $('#main_navbar').height()+15;
//alert(h);
//$('#heading').animate({height: '530px', opacity: '0.4', marginTop:'345px'}, "slow");
//$('#heading').animate({height: '330px', opacity: '0.4', marginTop:h}, "slow");
var h = $('#main_navbar').height();
$('#heading-vc').animate({ marginTop:h}, "slow");
});
