<?php 
						$emptyemail="";
						$emptypass="";
						if(isset($_POST["Submit"])){
							$emailvalue = $_POST ['emailname'];
							$passvalue = $_POST ['passname'];
							if(empty($emailvalue)){
									$emptyemail = "please enter an email";
							}else if(empty($passvalue)){
									$emptypass = "please enter a password";
									
							}else if(preg_match("/\w+@emsi.ma{1}$/",$emailvalue)==0){
									$emptyemail = "email do not match";
							}
							else{
								session_start();
								$_SESSION["emailuser"] = $emailvalue;
								$_SESSION["passuser"] = $passvalue;
								header("Location:index.php");	
							}
						}
						
						?>