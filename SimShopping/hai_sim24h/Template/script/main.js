function checkNumber(txt,error,message)
{
	var data = txt.val(); 
	var len = data.length;
	if(len < 1) 
	{ 
	    error.show(); 
		error.text(message);
		//alert(message);
		txt.focus().select();
		event.preventDefault();	
		return false;		
	} 
	else 
	{
		var c; 
		for(var i=0;i < len;i++) 
		{ 
			c=data.charAt(i).charCodeAt(0); 
			if(c < 48 || c > 57) 
			{ 
				error.show(); 
				error.text(message);
				//alert(message);
				txt.focus().select();
				event.preventDefault();
				return false;
			} 
			else 
			{ 
				error.hide();	
				return true;
			} 
		}									
	} 
}
function checkTextNull(txt, error, message)
{
	var data = txt.val(); 
	var len = data.length;
	if(len < 1) 
	{
		//alert(message);
		error.show(); 
		error.text(message);
		txt.focus().select();
		event.preventDefault();		
		return false;
	}
	else
	{
		error.hide();
		return true;
	}
}
function checkString(txt, error, message)
{
	var data = txt.val(); 
	var len = data.length;
	if(len < 1) 
	{ 
		//alert(message);
		error.show(); 
		error.text(message);
		txt.focus().select();
		event.preventDefault();	
		return false;		
	} 
	else 
	{
		var c,flag = false; 
		for(var i=0;i < len;i++) 
		{ 
			c=data.charAt(i).charCodeAt(0); 
			if(c > 48 || c < 57) 
			{ 				
				txt.focus().select();				
				event.preventDefault();
				flag = false;
			}
			else
			{
				flag = true;
			}
		}
		if (flag == false)
		{
			error.show(); 
			error.text(message);
		}
		else
		{
			error.hide(); 
		}
		return flag;					
	} 
}
function checkEmail(txt, error, message)
{
			var data = txt.val(); 
			var len = data.length;
			if(len < 1) 
			{ 
				//alert(message);
				error.show(); 
				error.text(message);
				txt.focus().select();
				event.preventDefault();	
				return false;
			} 
			else 
			{				
				if(valid_email(data)) 
				{ 
					error.hide(); 
					return true;
				} 
				else 
				{ 
					//alert(message);
					error.show(); 
					error.text(message);
					txt.focus().select();
					event.preventDefault(); 
					return false;
				} 
			} 		   
}
function valid_email(email) 
{ 
		var pattern= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/); 
		return pattern.test(email); 
} 
function checkPhoneNumber(txt, error, message)
{
			var data = txt.val(); 
			var len = data.length;				
			var age = 0;
			if(len < 1) 
			{			    
				//alert('Số điện thoại không thể là rỗng!');
				error.show(); 
				error.text(message);
				txt.focus().select();
				event.preventDefault();	
				return false;				
			} 
			else 
			{		
				if(len <= 11)
				{
					if(validate_phoneno(data)) 
					{ 
						error.hide(); 
						return true;
					} 
					else 
					{ 
						//alert(message);
						error.show(); 
						error.text(message);
						txt.focus().select();
						event.preventDefault(); 
						return false;
					} 
				}
				else
				{
					//alert(message);
					error.show(); 
					error.text(message);
					txt.focus().select();
					event.preventDefault();
					return false;
				}
			} 		   
}
function validate_phoneno(strphone) 
{ 
	  var pattern=new RegExp(/^[0-9-+]+$/); 
	  return pattern.test(strphone); 
}