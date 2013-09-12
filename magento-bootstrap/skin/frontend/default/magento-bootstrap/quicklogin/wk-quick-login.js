(function($wk_jq){
	$wk_jq(function(){
		if($wk_jq('.quick-access .links .last a').text()=="Log In")
		{
			$wk_jq('.quick-access .links .last a').attr('href','#wk_quick_login')
												  .attr('data-toggle','lightbox');
		}
		$wk_jq('#fgt-pwd,#login-btn').click(function(){
			$wk_jq('#login-form-box,#fpass').toggle('wk_hide');
			});
		$wk_jq('[title]').tooltip({placement:'bottom'});
		$wk_jq('[for="search"]').remove();
		$wk_jq('.navbar-fixed-top').append($wk_jq('#search_mini_form'));
		
		
		$wk_jq('#nav').children('li').addClass('dropdown')
			.children('a').attr('role','button')
			.attr('data-toggle','dropdown')
			.addClass('dropdown-toggle').children('span').attr('id','12').parent('a')
			.next('ul').addClass('dropdown-menu')
			.attr('role','menu')
			.attr('aria-labelledby',jQuery(this).prev('a span').attr('id')); 
			
			$wk_jq('ul.messages').change(function(){alert('error')});
			
					
		});
	

})(jQuery);
