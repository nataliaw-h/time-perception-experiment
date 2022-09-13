<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="850"/>
    <meta charset="utf-8">
    <title>Experiment</title>
    <meta name="author" content="Natalia Woropay-Hordziejewicz">
    <link rel="stylesheet" href="mystyle.css">
    
    <style>
        #apple, #banana, #lemon, #cherry, #strawberry, #coconut, #pear, #pineapple, #kiwi, #watermelon, #chair, #cupboard, #horse, #lamp, #sink, #sofa, #table, #tv, #wash, #window { 
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

	<img id="apple" src="apple.png">
	<img id="banana" src="banana.png">
	<img id="lemon" src="lemon.png">
	<img id="cherry" src="cherry.png">
	<img id="strawberry" src="strawberry.png">
	<img id="coconut" src="coconut.png">
	<img id="pear" src="pear.png">
	<img id="pineapple" src="pineapple.png">
	<img id="kiwi" src="kiwi.png">
	<img id="watermelon" src="watermelon.png">
	
	<img id="chair" src="chair.png">
	<img id="cupboard" src="cupboard.png">
	<img id="horse" src="horse.png">
	<img id="lamp" src="lamp.png">
	<img id="sink" src="sink.png">
	<img id="sofa" src="sofa.png">
	<img id="table" src="table.png">
	<img id="tv" src="tv.png">
	<img id="wash" src="wash.png">
	<img id="window" src="window.png">
	
    <footer>
        <p>&copy 2022 Natalia Woropay-Hordziejewicz | email: <a href="mailto:nataliaworopay@gmail.com"><font color = "green"> nataliaworopay@gmail.com</font></a></p>
    </footer>

    <div id="1">
        <section>
            <center><font size="5">After pressing the NEXT button you will see two pictures.</center>
            <center>Your task is to determine which of them was displayed longer on the screen.</center> 
            <center>Press NEXT to go to the test trial.</font></center>
            <p><center> <font size="5"><button style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 40%" onclick="test()">DALEJ</font></button></center></p>
    </section>
    </div>

    <div id="2">
        <section>
            <center><font size="5">TEST TRIAL</center>
            <center>Choose which picture was displayed LONGER.</font></center>
            <p><center> <font size="5"><button id='button1' style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 40%" onclick="test2()">1</font><font size="5"><button id='button2' style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 40%" onclick="test2()">2</font></button></center></p>
        </section>
    </div>

    <div id="3">
        <section>
            <center><font size="5">Press RESTART to repeat the test attempt.</center>
            <center>Press START to start the test. After starting the test, there will be 8 repetitions of the test.</center></font>
            <p><center><button style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 50%" onclick="restart()"><font size="5">RESTART</button> <button style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 50%" onclick="go()"><font size="5">START</button></center></font>
        </section>
    </div>

    <div id="4">
        <section>
            <center><font size="5">Choose which picture was displayed LONGER.</center>
            <p>  
            <p><center> <font size="5"><button id='button1' style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 40%" onclick="save1()">1</font><font size="5"><button id='button2' style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 40%" onclick="save2()">2</font></button></center></p>
        </section>
    </div>
    <center> <p id="time"></p></center>

    <div id="5">
        <section2>
            <center>Next trial</center>
        </section2>
    </div>

    <div id="6">
        <section2>
            <center><font size="50">The end</font></center>
        </section2>
    </div>

<script>

    document.getElementById('2').style.visibility='hidden';
    document.getElementById('3').style.visibility='hidden';
    document.getElementById('4').style.visibility='hidden';
    document.getElementById('5').style.visibility='hidden';
    document.getElementById('6').style.visibility='hidden';


    var id;
    var w1=0;
    var w2=0;
    var w3=0;
    var w4=0;
    var w5=0;
    var w6=0;
    var w7=0;
    var w8=0;
    


    function test(){

	
	    document.getElementById("1").innerHTML = "";
	
	    setTimeout(
		    function(){ 
			    document.getElementById("apple").style.visibility = "visible";
			}
	    ,1000);

	
	    setTimeout(
		    function(){ 
				document.getElementById("apple").style.visibility = "hidden";
			    }
		,6000);
		
		setTimeout(
		    function(){ 
			    document.getElementById("chair").style.visibility = "visible";
			}
	    ,7000);
		
		setTimeout(
		    function(){ 
				document.getElementById("chair").style.visibility = "hidden";
			    setTimeout(
				    function() {
						document.getElementById('2').style.visibility='visible';},
				1000);
			    }
		,13000);
    }
	
	function test2(){
		document.getElementById('2').style.visibility='hidden';
	    document.getElementById('3').style.visibility='visible';
    }
	
	function restart(){
	    document.getElementById('3').style.visibility='hidden';
	    test();
    }

    function go(){
	    document.getElementById('3').style.visibility='hidden';
	
	    setTimeout(function(){ 
	        document.getElementById("5").innerHTML = "<section2><center><font size='40'>Trial 1</font></center></section2>";
	        document.getElementById('5').style.visibility='visible';
	        setTimeout(function(){ 
		        document.getElementById('5').style.visibility='hidden';
		        setTimeout(function(){ 
			        trials();
		        }, 1500);
	        } , 1500);
	    } , 1500);
    }
	
	
	var trialNumber=1;
    var timeImage1=0;
	var timeImage2=0;
	var imageName1='';
	var imageName2='';
	
	//change the timeImage values to to extend or shorten the display time of the pictures
    function trials(){
	    if(trialNumber===1) {timeImage1=6000; timeImage2=10000; imageName1 = 'banana'; imageName2 = 'cupboard';}
	    else if (trialNumber===2){timeImage1=8560; timeImage2=10000; imageName1 = 'lemon'; imageName2 = 'horse';}
	    else if (trialNumber===3) {timeImage1=3240; timeImage2=10000; imageName1 = 'cherry'; imageName2 = 'lamp';}
	    else if (trialNumber===4) {timeImage1=13455; timeImage2=10000; imageName1 = 'strawberry'; imageName2 = 'sink';}
	    else if (trialNumber===5) {timeImage1=2975; timeImage2=10000; imageName1 = 'coconut'; imageName2 = 'sofa';}
		else if (trialNumber===6) {timeImage1=3240; timeImage2=10000; imageName1 = 'pear'; imageName2 = 'table';}
	    else if (trialNumber===7) {timeImage1=13455; timeImage2b=10000; imageName1 = 'pineapple'; imageName2 = 'tv';}
	    else if (trialNumber===8) {timeImage1=2975; timeImage2=10000; imageName1 = 'kiwi'; imageName2 = 'window';}


	
	    setTimeout(function(){ 
			document.getElementById(imageName1).style.visibility = "visible";
			}
	    ,1000);
  
	    setTimeout(function(){ 
		    document.getElementById(imageName1).style.visibility = "hidden";
		}
		,timeImage1);
		
		setTimeout(function(){ 
			document.getElementById(imageName2).style.visibility = "visible";
			}
	    ,1000+timeImage1);
  
	    setTimeout(function(){ 
		    document.getElementById(imageName2).style.visibility = "hidden";
				setTimeout(function() {
				    document.getElementById('4').style.visibility='visible';},
				1000);
		}
		,1000+timeImage1+timeImage2);

    }
	
	function save1(){
	
		document.getElementById('4').style.visibility='hidden';
	
	    if (trialNumber===1){
            w1 = 1;
        }
        else if (trialNumber===2){
            w2 = 1;
        }
        else if (trialNumber===3){
            w3 = 1;
        }
        else if (trialNumber===4){
            w4 = 1;
        }
        else if (trialNumber===5){
            w5 = 1;
        }
		else if (trialNumber===6){
            w6 = 1;
        }
        else if (trialNumber===7){
            w7 = 1;
        }
        else if (trialNumber===8){
            w8 = 1;
        }
        
        trialNumber++;
		sequence();
		
	}
	
	function save2(){
		
		document.getElementById('4').style.visibility='hidden';
	
		if (trialNumber===1){
            w1 = 2;
        }
        else if (trialNumber===2){
            w2 = 2;
        }
        else if (trialNumber===3){
            w3 = 2;
        }
        else if (trialNumber===4){
            w4 = 2;
        }
        else if (trialNumber===5){
            w5 = 2;
        }
		else if (trialNumber===6){
            w6 = 2;
        }
        else if (trialNumber===7){
            w7 = 2;
        }
        else if (trialNumber===8){
            w8 = 2;
        }
		
		trialNumber++;
		sequence();
		
	}
	
	function sequence(){
	
			setTimeout(function(){
	
	        if (trialNumber===9) {
		        document.getElementById('6').style.visibility='visible';
		        id = "<?php $id = $_GET['id']; echo $id; ?>";
		        window.location.href = `index4.php?id=${id}&w1=${w1}&w2=${w2}&w3=${w3}&w4=${w4}&w5=${w5}&w6=${w6}&w7=${w7}&w8=${w8}`;
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
					else if (trialNumber===6){
		                document.getElementById("5").innerHTML = "<section2><center><font size='40'>Trial 6</font></center></section2>";
		            }
		            else if (trialNumber===7){
		                document.getElementById("5").innerHTML = "<section2><center><font size='40'>Trial 7</font></center></section2>";
		            }
		            else if (trialNumber===8){
		                document.getElementById("5").innerHTML = "<section2><center><font size='40'>Trial 8</font></center></section2>";
		            }
		            document.getElementById('5').style.visibility='visible';
		            setTimeout(function(){
			            document.getElementById('5').style.visibility='hidden';
			            setTimeout(function(){
				            trials();
			            }, 1500);
		            }, 1500);
	            }, 1500);
	        }
	
        }, 1500);
		
	}



</script>

</body>
</html>
  
