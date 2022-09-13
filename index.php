<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="850"/>
    <meta charset="utf-8">
    <title>Experiment</title>
    <meta name="author" content="Natalia Woropay-Hordziejewicz">
    <link rel="stylesheet" href="mystyle.css">

    <style>
        #on, #off { 
	        max-height: 300px;
	        visibility: hidden; 
	        margin: 0 auto;
	        position: absolute;
            top: 30%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
        }
    </style>
    
</head>

<body>	

	<img id="on" src="on.png">
	<img id="off" src="off.png">

    <footer>
        <p>&copy 2022 Natalia Woropay-Hordziejewicz | email: <a href="mailto:nataliaworopay@gmail.com"><font color = "green"> nataliaworopay@gmail.com</font></a></p>
    </footer>

    <div id="1">
        <section>
            <center><font size="5">When you press the NEXT button, the bulb shown above will light up. The bulb will turn off after a while.</center>
            <center>Your task is to turn on and then turn off the light bulb in such a way as to reproduce the time in which it was turned on as accurately as possible.</center> 
            <center>Press NEXT to go to the test trial.</font></center>
            <p><center> <font size="5"><button style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 50%" onclick="bulb_trial()">DALEJ</font></button></center></p>
    </section>
    </div>

    <div id="2">
        <section>
            <center><font size="5">Test trial</center>
            <center>Click and hold the button to restore the time the bulb was on.</font></center>
            <p><center><font size="5"> <button id='button' style=' width: 800px; height: 200px; background-color: #e3fbe3; border-radius: 50%'></font></button></center>
        </section>
    </div>

    <div id="3">
        <section>
            <center><font size="5">Press RESTART to repeat the test trial.</center>
            <center>Press START to start the test. After starting the test, there will be 5 repetitions of the test.</center></font>
            <p><center><button style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 50%" onclick="restart()"><font size="5">RESTART</button> <button style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 50%" onclick="go()"><font size="5">START</button></center></font>
        </section>
    </div>

    <div id="4">
        <section>
            <center><font size="5">Now it's your turn! Click and hold the button to recreate the time.</center>
            <p>  
            <center> <button id="button2" style=" width: 800px; height: 200px; background-color: #e3fbe3; border-radius: 50%"></button></center></font>
        </section>
    </div>
    <center> <p id="time"></p></center>

    <div id="5">
        <section2>
            <center>Next Trial</center>
        </section2>
    </div>

    <div id="6">
        <section2>
            <center><font size="50">The End</font></center>
        </section2>
    </div>

<script>

    document.getElementById('2').style.visibility='hidden';
    document.getElementById('3').style.visibility='hidden';
    document.getElementById('4').style.visibility='hidden';
    document.getElementById('5').style.visibility='hidden';
    document.getElementById('6').style.visibility='hidden';

    var start=0;
    var stop=0;
    var time=0;

    var id;
    var w1=0;
    var w2=0;
    var w3=0;
    var w4=0;
    var w5=0;
    
    document.getElementById("off").style.visibility = "visible";

    function bulb_trial(){

	
	    document.getElementById("1").innerHTML = "";
	
	    setTimeout(
		    function(){ 
		        document.getElementById("off").style.visibility = "hidden";
			    document.getElementById("on").style.visibility = "visible";
			    //test to see timing after each trial
                //start = new Date() / 1000;
			}
	    ,1000);

	
	    setTimeout(
		    function(){ 

			    document.getElementById("on").style.visibility = "hidden";
			    document.getElementById("off").style.visibility = "visible";
                //test to see timing after each trial
			    //stop = new Date() / 1000;
			    //document.getElementById("time").innerHTML = stop - start;
			    setTimeout(
				    function() {document.getElementById('2').style.visibility='visible';},
				1000);
			    }
		,6000);
    }

    document.getElementById("button").addEventListener("mousedown", down_trial);
    document.getElementById("button").addEventListener("mouseup", up_trial);

    document.getElementById("button").addEventListener("touchstart", down_trial);
    document.getElementById("button").addEventListener("touchend", up_trial);

    function down_trial(){
        document.getElementById("off").style.visibility = "hidden";
        document.getElementById("on").style.visibility = "visible";
    }


    function up_trial(){  
  
        document.getElementById("button").innerHTML = "";
  
        document.getElementById("on").style.visibility = "hidden";
        document.getElementById("off").style.visibility = "visible";
        document.getElementById('2').style.visibility='hidden';
  
        setTimeout(function(){ 

	        document.getElementById('3').style.visibility='visible';
        }, 1500);
    } 

    function restart(){
	    document.getElementById('3').style.visibility='hidden';
	    bulb_trial();
    }

    function go(){
        document.getElementById("off").style.visibility = "hidden";
	    document.getElementById('3').style.visibility='hidden';
	
	    setTimeout(function(){ 
	        document.getElementById("5").innerHTML = "<section2><center><font size='40'>Trial 1</font></center></section2>";
	        document.getElementById('5').style.visibility='visible';
	        setTimeout(function(){ 
		        document.getElementById('5').style.visibility='hidden';
		        setTimeout(function(){ 
			        bulb();
		        }, 1500);
	        } , 1500);
	    } , 1500);
    }

    var trialNumber=1;
    var setTime=0;

    //change the setTime variable to extend or shorten the display time of the switched on bulb (time in ms)
    function bulb(){
	    if(trialNumber===1) {setTime=6000}
	    else if (trialNumber===2){setTime=8560}
	    else if (trialNumber===3) {setTime=3240}
	    else if (trialNumber===4) {setTime=13455}
	    else if (trialNumber===5) {setTime=2975}

        document.getElementById("off").style.visibility = "visible";
	
	    setTimeout(function(){ 
			document.getElementById("off").style.visibility = "hidden";
            document.getElementById("on").style.visibility = "visible";
			}
	    ,1000);
  
	    setTimeout(function(){ 
			document.getElementById("off").style.visibility = "visible";
            document.getElementById("on").style.visibility = "hidden";
				setTimeout(function() {
				    document.getElementById('4').style.visibility='visible';},
				1000);
		}
		,setTime);
	
	trialNumber++;

    }

    document.getElementById("button2").addEventListener("mousedown", down);
    document.getElementById("button2").addEventListener("mouseup", up);

    document.getElementById("button2").addEventListener("touchstart", down);
    document.getElementById("button2").addEventListener("touchend", up);

    function down() {
  
        start = new Date() / 1000;
  
		document.getElementById("off").style.visibility = "hidden";
        document.getElementById("on").style.visibility = "visible";
  
    }

    function up() {  

        var stop = new Date() / 1000;
  
        document.getElementById("button2").innerHTML = "";
  
        document.getElementById('4').style.visibility='hidden';

		document.getElementById("on").style.visibility = "hidden";
        document.getElementById("off").style.visibility = "visible";

        //test to see timing after each trial
        //document.getElementById("time").innerHTML = stop - start;
  
        if (trialNumber===2){
            w1 = stop - start;
        }
        else if (trialNumber===3){
            w2 = stop - start;
        }
        else if (trialNumber===4){
            w3 = stop - start;
        }
        else if (trialNumber===5){
            w4 = stop - start;
        }
        else if (trialNumber===6){
            w5 = stop - start;
        }
  
        setTimeout(function(){
	

		document.getElementById("off").style.visibility = "hidden";
	
	        if (trialNumber===6) {
		        document.getElementById('6').style.visibility='visible';
		        id = "<?php $id = $_GET['id']; echo $id; ?>";
		        window.location.href = `index2.php?id=${id}&w1=${w1}&w2=${w2}&w3=${w3}&w4=${w4}&w5=${w5}`;
	        }
	        else {
	            setTimeout(function(){
		            if (trialNumber===2){
		                document.getElementById("5").innerHTML = "<section2><center><font size='40'>Trial 2</font></center></section2>";
		                }
		            else if (trialNumber===3){
		                document.getElementById("5").innerHTML = "<section2><center><font size='40'>Trial 3</font></center></section2>";
		            }
		            else if (trialNumber===4){
		                document.getElementById("5").innerHTML = "<section2><center><font size='40'>Trial 4</font></center></section2>";
		            }
		            else if (trialNumber===5){
		                document.getElementById("5").innerHTML = "<section2><center><font size='40'>Trial 5</font></center></section2>";
		            }
		            document.getElementById('5').style.visibility='visible';
		            setTimeout(function(){
			            document.getElementById('5').style.visibility='hidden';
			            setTimeout(function(){
				            bulb();
			            }, 1500);
		            }, 1500);
	            }, 1500);
	        }
	
        }, 1500);

    } 

</script>

</body>
</html>
  
