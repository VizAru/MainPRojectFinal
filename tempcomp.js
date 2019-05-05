var count=0;
function comp()
{
	if(count==0)
	{
		count=1;
		document.getElementById("to").focus();
  		responsiveVoice.speak("Enter email ");
  		startDictation();
	}
	else if(count==1)
	{
		count=2;
		document.getElementById("sub").focus();
		responsiveVoice.speak("Enter Subject ");
		startDictation3();
	}
		
	else if(count==2)
	{
		count=3;
		document.getElementById("bdy").focus();
		responsiveVoice.speak("Enter message ");
		startDictation2();
	}
	else
	{
		document.getElementById('comp').submit();
	}

}
// JavaScript Document// JavaScript Document