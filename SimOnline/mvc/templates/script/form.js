$(document).ready(function()
	{
		$('#check').click(validate);
		function validate()
		{
			var dataValid=true;
			$('#info').html('');
			$('.required').each(function()
				{
					var cur=$(this);
					cur.next('span').remove();
					if($.trim(cur.val())=='')
					{
						cur.after('<span class="error">Không được để trống</span>');
						dataValid=false;
					}
				});
				if(dataValid)
				{
					$('#info').html('Thành công');
				}
		}
	});
	
	$(document).ready(function()
	{
		
		$('input:text').bind('focus keyup',validate);
		function validate()
		{
			var cur = $(this);
			cur.next().remove();
			if(cur.hasClass('required'))
			{
				if($.trim(cur.val())=='')
				{
					cur.after('<span class="error">Không được  để trống !</span>');
					cur.data('valid',false);
				}
				else
				{
					cur.data('valid',true);
				}
			}
			if(cur.hasClass('number'))
			{
				if(isNaN(cur.val()))
				{
					cur.after('<span class="error">Bạn phải nhập số !</span>');
					cur.data('valid',false);
				}
				else
				{
					dataValid=true;
					cur.data('valid',true);
				}
			}
		}
		$('#save').click(function()
			{
				var dataValid=true;
				$('.required').each(function()
				{
					var current=$(this);
					if(current.data('valid')!=true)
					{
						dataValid=false;
					}
				});
				$('.number').each(function()
				{
					var current=$(this);
					if(current.data('valid')!=true)
					{
						dataValid=false;
					}
				});
				
				if(dataValid)
					$('#info').html('Validation OK');
				else
					$('#info').html('Please fill correct values in fields.');
			});
	});