var count=0;
function login()
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
		document.getElementById("pas").focus();
		responsiveVoice.speak("Enter password ");
		startDictation2();
	}
	else
	{
		document.getElementById('labnol').submit();
	}

}
// JavaScript Document// JavaScript Document