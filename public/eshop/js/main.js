/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
});


function cart(cart){

    $(".modal-body").html(cart);
    $("#card").modal();

}

$(".add-to-cart").click(function(e){

    e.preventDefault();


    var id = $(this).data("id");
    var url = $(this).data("url");
    //alert(id)


    $.ajax({

        url:url,

        data:{id:id},
        type:"GET",
        success:function(res){
 cart(res);
        },
        error:function(){

        }
    });

});




function plus(id)
{
    var url = $(".cart_quantity_up").data("url");
    var qty = $(".cart_quantity_up").data("qty");

    $.ajax({

        url:url,
        data:{id:id,qty:qty},
        type:"GET",
        success:function(res){
            cart(res);
        },
        error:function(){
        }
    });
}



function minus(id)
{
    var url = $(".cart_quantity_down").data("url");
    var qty = $(".cart_quantity_down").data("qty");

    $.ajax({

        url:url,
        data:{id:id,qty:qty},
        type:"GET",
        success:function(res){
            cart(res);
        },
        error:function(){
        }
    });
}



function remove(id)
{
    var url = $(".cart_quantity_delete").data("url");

    $.ajax({

        url:url,
        data:{id:id},
        type:"GET",
        success:function(res){
            cart(res);
        },
        error:function(){
        }
    });
}



function view(view){

    $(".modal-body").html(view);
    $("#view").modal();

}

$(".add-to-view").click(function(e){

    e.preventDefault();


    var id = $(this).data("id");
    var url = $(this).data("url");
    //alert(id)


    $.ajax({

        url:url,

        data:{id:id},
        type:"GET",
        success:function(res){
            view(res);
        },
        error:function(){

        }
    });

});




function cat(id)
{
    var url = $(".panel-title").data("url");

    $.ajax({

        url:url,
        data:{id:id},
        type:"GET",
        success:function(res){

            $("#none").fadeOut(500);
            $("#ok").fadeIn(500);
            // $("#ok").html(res).hide().show(1000);


        },
        error:function(){
        }
    });
}




