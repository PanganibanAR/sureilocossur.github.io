		function validateName() {
			let x=document.forms["myForm"]["username"].value;
			if(x==""){
				alert("Username must be filled");
				return false;
			}
		}
	
	function myFunction() {
		let password=document.getElementById("numb").value;
		if (password==null || password==""){  
  		alert("Password must be filled");  
 		 return false;  
		}

		if(password.length<3){  
  		alert("Password is at least 3 characters.");  
  		return false;  
  		}  
	} 