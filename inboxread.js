function inboxr(){
		responsiveVoice.speak("From");
		var text1 = $('#frm').val();
		responsiveVoice.speak(text1);
		responsiveVoice.speak("Subject");
		var text2 = $('#sub').val();
		responsiveVoice.speak(text2);
		responsiveVoice.speak("Message");
		var text3 = $('#msg').val();
		responsiveVoice.speak(text3);
};// JavaScript Document