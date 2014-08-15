var $j = jQuery.noConflict();

/* Open/close basket
----------------------------*/
$j().ready(function(){
	$j(".module-sidebar-basket").addClass('closed');
	$j(".module-sidebar-basket").click(function(){
		$j(".module-sidebar-basket").toggleClass('closed');
		$j(".module-sidebar-basket").toggleClass('open');
	})
});

/* Get current total
----------------------------*/
$j().ready(function(){
	$j(".grouped-products #product_qty").change(function(){
		var total = 0.00; // reset total variable
		$j(".grouped-products #product_qty").each(function() {      
			var qty = $j(this).val(); // get quantity of each item
			var price = $j(this).parent().parent().children("#item-price").find(".price").html(); // get price of each item
			price = price.replace("£", ""); // get integer only
			var singleTotal = parseFloat(qty) * parseFloat(price); // multiply quantity by price
			total += singleTotal; // sum of singleTotal
		 });
		$j(".total-updater #integer").html(total.toFixed(2)); // update HTML with new total
	});
});

/* Force touch active states
----------------------------*/
document.addEventListener("touchstart", function(){}, true)