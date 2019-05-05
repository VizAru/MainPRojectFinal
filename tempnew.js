var count=0;
function sign()
{
	if(count==0)
	{
		count=1;
		document.getElementById("uname").focus();
  		responsiveVoice.speak("Enter Username ");
  		startDictation();
	}
	else if(count==1)
	{
		count=2;
		document.getElementById("email").focus();
		responsiveVoice.speak("Enter email ");
		startDictation3();
	}
		
	else if(count==2)
	{
		count=3;
		document.getElementById("pas").focus();
		responsiveVoice.speak("Enter Password ");
		startDictation2();
	}
	else
	{
		document.getElementById('sibnol').submit();
	}

}
// JavaScript Document