/* -------------------------------------------------------------------------------- /
	
	Magentech jQuery
	Created by Magentech
	v1.0 - 20.9.2016
	All rights reserved.
	
/ -------------------------------------------------------------------------------- */


	// Cart add remove functions
	var cart = {
		'add': function(product_id, quantity) {
			addProductNotice('已添加到购物车', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3><a href="#">Apple Cinema 30"</a> 已成功添加到<a href="#">购物车</a>!</h3>', 'success');
		}
	}

	var wishlist = {
		'add': function(product_id) {
			addProductNotice('已添加到我的收藏', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>您必须 <a href="#">登录</a>  <a href="#">Apple Cinema 30"</a>才能保存到 <a href="#">收藏清单</a>!</h3>', 'success');
		}
	}
	var compare = {
		'add': function(product_id) {
			addProductNotice('已添加到产品对比', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>您已成功添加<a href="#">Apple Cinema 30"</a> 到 <a href="#">产品对比</a>!</h3>', 'success');
		}
	}

	/* ---------------------------------------------------
		jGrowl – jQuery alerts and message box
	-------------------------------------------------- */
	function addProductNotice(title, thumb, text, type) {
		$.jGrowl.defaults.closer = false;
		//Stop jGrowl
		//$.jGrowl.defaults.sticky = true;
		var tpl = thumb + '<h3>'+text+'</h3>';
		$.jGrowl(tpl, {		
			life: 4000,
			header: title,
			speed: 'slow',
			theme: type
		});
	}

