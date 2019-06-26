 	var table = document.getElementById('tab');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("fname").value = this.cells[0].innerHTML;
                         document.getElementById("lname").value = this.cells[1].innerHTML;
                         document.getElementById("age").value = this.cells[2].innerHTML;
                    };
                }
				function change(){
				responsiveVoice.speak("From");
				var text1 = $('#fname').val();
				responsiveVoice.speak(text1);
				responsiveVoice.speak("Subject");
				var text2 = $('#lname').val();
				responsiveVoice.speak(text2);
				responsiveVoice.speak("Message");
				var text3 = $('#age').val();
				responsiveVoice.speak(text3);		
				}