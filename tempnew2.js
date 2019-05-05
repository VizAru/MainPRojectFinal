function valuered()
{
		responsiveVoice.speak("Username");
		var text1 = $('#uname').val();
		responsiveVoice.speak(text1);
		responsiveVoice.speak("Email");
		var text2 = $('#email').val();
		responsiveVoice.speak(text2);
		responsiveVoice.speak("Password");
		var text3 = $('#pas').val();
		responsiveVoice.speak(text3);
}// JavaScript Document