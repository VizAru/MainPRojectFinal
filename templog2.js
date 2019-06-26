function logred()
{
		responsiveVoice.speak("Username");
		var text1 = $('#uname').val();
		responsiveVoice.speak(text1);
		responsiveVoice.speak("Password");
		var text3 = $('#pas').val();
		responsiveVoice.speak(text3);
}// JavaScript Document