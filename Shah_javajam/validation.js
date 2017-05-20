
      function validate()
      {
      
         if( document.myForm.Name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }else if( document.myForm.EMail.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
		 else if( document.myForm.Experience.value == "" )
         {
            alert( "Experience is required for this job!" );
            document.myForm.EMail.focus() ;
            return false;
         }
		 else if( document.myForm.EMail.value != "" ){
			var emailID = document.myForm.EMail.value;
			   atpos = emailID.indexOf("@");
			   dotpos = emailID.lastIndexOf(".");
			   if (atpos < 1 || ( dotpos - atpos < 2 )) 
			   {
				   alert("Please enter correct email ID")
				   document.myForm.EMail.focus() ;
				   return false;
				}
			alert( "Job applied successfully!" );
			return( true );
		 }
         
		 else{
			 alert( "Job applied successfully!" );
			return( true );
		 }
      }
   
