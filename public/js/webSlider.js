$(document).on('ready', function(){

	function changeImage(){
				var size = $('.slider').find('.sElem').size();
				$('.slider').find('.sElem').each(
					function(index,value){
						if($(value).hasClass('sVisible'))
						{
							$(value).fadeOut();
							$(value).removeClass('sVisible');
							if(index+1<size)
							{
								$($('.slider').find('.sElem').get(index+1)).fadeIn();
								$($('.slider').find('.sElem').get(index+1)).addClass('sVisible');
								return false;
							}
							else
							{
								$($('.slider').find('.sElem').get(0)).fadeIn();
								$($('.slider').find('.sElem').get(0)).addClass('sVisible');
								return false;
							}
						}
					}
				);
			}

			setInterval(changeImage, 6000);
});