<?php

$boy_array = array();
$boy_tamil_array = array();
$boy_reli_array = array();

$girl_array = array();
$girl_tamil_array = array();
$girl_reli_array = array();

$class_A = array();
$class_B = array();
$class_C = array();
$class_D = array();
$class_E = array();
$class_F = array();
$class_G = array();

function class_count($total_stu , $total_classes){
    
    $val = $total_stu / $total_classes;
    //if(($val*$total_classes) < $total_stu){
        //$val = $val +1;
    //}else if(($val*$total_classes) == $total_stu){
        //$val = $val;
    //}
    echo "Devided Value"."===".$val;
    echo "<br>";
    $val = round($val,0,PHP_ROUND_HALF_UP);
    echo "Rounded Value"."===".$val;
    echo "<br>";
    return $val;
}

function shuffling(){
    $total_stu;
    $total_classes;
    $stu_class_count = 0;
    $con=mysqli_connect("localhost","apollolk_testing","85891720@testing","apollolk_testing")or die("Unable to connect");
					  if (!$con)
					  {
					  die('Could not connect: ' . mysql_error());
					  }
					  
					if($rt = mysqli_query($con,"SELECT count(*) as index_no from shuffle")){
					    $count=mysqli_fetch_assoc($rt);
                        $total_stu = $count['index_no'];
                            echo "Total Students"."===".$total_stu;
                            echo "<br>";
					}
					if($rt = mysqli_query($con,"SELECT no_of_classes FROM shuffle")){
				                $num;
								if(mysqli_num_rows($rt) > 0){
									while($rowt = mysqli_fetch_assoc($rt)){
									    $num = $rowt['no_of_classes'];
									}
								}
								$total_classes = $num;
								echo "Total Classes"."===".$num;
                                echo "<br>";
					}
					$stu_class_count = class_count($total_stu , $total_classes);
					echo "Students per class ===".$stu_class_count;
					echo "<br>";
                    if($rt = mysqli_query($con,"SELECT * FROM `shuffle` WHERE gender='MALE' ORDER BY marks DESC")){

				                $b = 0;
				                $bt = 0;
				                $br = 0;
								if(mysqli_num_rows($rt) > 0){
									while($rowt = mysqli_fetch_assoc($rt)){
									    if($rowt['language'] == "TAMIL"){
									        $boy_tamil_array[$bt] = $rowt['index_no'];
									        $bt++;
									    }else if(($rowt['religeon'] != "BUDDHISM")){
									        $boy_reli_array[$br] = $rowt['index_no'];
									        $br++;
									    }else{
									        $boy_array[$b] = $rowt['index_no'];
									        $b++;
									    }
									    //$b++;
									}
								}
					}
					if($rt = mysqli_query($con,"SELECT * FROM `shuffle` WHERE gender='FEMALE' ORDER BY marks DESC")){

				                $g = 0;
				                $gt = 0;
				                $gr = 0;
								if(mysqli_num_rows($rt) > 0){
									while($rowt = mysqli_fetch_assoc($rt)){
									    if($rowt['language'] == "TAMIL"){
									        $girl_tamil_array[$gt] = $rowt['index_no'];
									        $gt++;
									    }else if(($rowt['religeon'] != "BUDDHISM")){
									        $girl_reli_array[$gr] = $rowt['index_no'];
									        $gr++;
									    }else{
									        $girl_array[$g] = $rowt['index_no'];
									        $g++;
									    }
									    //$g++;
									}
								}
					}
					
	echo "<br>";
	echo "<br>";
	echo "Boys array filling....";
	echo "<br>";
    echo $boy_array[0]."===".sizeof($boy_array)."===".$boy_array[sizeof($boy_array)-1];
    echo "<br>";
    echo "Boys tamil array filling....";
	echo "<br>";
    echo $boy_tamil_array[0]."===".sizeof($boy_tamil_array)."===".$boy_tamil_array[sizeof($boy_tamil_array)-1];
    echo "<br>";
    echo "Boys religion array filling....";
	echo "<br>";
    echo $boy_reli_array[0]."===".sizeof($boy_reli_array)."===".$boy_reli_array[sizeof($boy_reli_array)-1];
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Girls array filling....";
    echo "<br>";
    echo $girl_array[0]."===".sizeof($girl_array)."===".$girl_array[sizeof($girl_array)-1];
    echo "<br>";
    echo "Girls tamil array filling....";
    echo "<br>";
    echo $girl_tamil_array[0]."===".sizeof($girl_tamil_array)."===".$girl_tamil_array[sizeof($girl_tamil_array)-1];
    echo "<br>";
    echo "Girls religion array filling....";
    echo "<br>";
    echo $girl_reli_array[0]."===".sizeof($girl_reli_array)."===".$girl_reli_array[sizeof($girl_reli_array)-1];
    echo "<br>";
    echo "<br>";
    
    echo "<b>"."Shuffling........................"."</b>";
	echo "<br>";
	echo "<br>";
	if($stu_class_count > 0){
	    if($total_classes == 6){ // A to F
	        $arr_count = 0;
	        
	        // add tamil MALE students to Class A
	        if((sizeof($boy_tamil_array) <= $stu_class_count) && sizeof($boy_tamil_array) <= $stu_class_count-5){
	            if(sizeof($boy_tamil_array) > 0){
	                while($arr_count < sizeof($boy_tamil_array)){
	                    $class_A[$arr_count] = $boy_tamil_array[$arr_count];
	                    $arr_count++;
	                }
	                $arr_count = 0;
	                echo "Filled All Tamil Male Students. Filled ".sizeof($boy_tamil_array)." students to Class A";
	                echo "<br>";
	            }
	           
	        }else{
	            echo "ERROR...........Cannot fill classes, Because Tamil Male Students grater than Class A student count";
	            echo "<br>";
	        }
	        // add tamil FEMALE students to Class A
	        if((sizeof($class_A) <= $stu_class_count) && sizeof($class_A) <= $stu_class_count-5){
	            $classA_count = sizeof($class_A);
	            if(sizeof($girl_tamil_array) > 0){
	                while($arr_count < sizeof($girl_tamil_array)){
	                    $class_A[$classA_count] = $girl_tamil_array[$arr_count];
	                    $arr_count++;
	                    $classA_count++;
	                }
	                $arr_count = 0;
	                echo "Filled All Tamil FeMale Students. Filled ".sizeof($girl_tamil_array)." students to Class A";
	                echo "<br>";
	            }
	           
	        }else{
	            echo "ERROR...........Cannot fill classes, Because Tamil FeMale Students grater than Class A student count";
	            echo "<br>";
	        }
	        
	        echo "<br>";
	        echo "Filled All Tamil Students. Filled ".sizeof($class_A)." students to Class A";
	        echo "<br>";
	        echo "<br>";
	        
	        
	        // add NON Buddhish MALE students to Class A and Class F
	        if(((sizeof($boy_reli_array) <= $stu_class_count) && sizeof($boy_reli_array) <= $stu_class_count-5) && ((sizeof($boy_reli_array) <= $stu_class_count-sizeof($class_A)) && sizeof($boy_reli_array) <= ($stu_class_count-sizeof($class_A))-5)){
	            if(sizeof($class_A) > 0){
	                $classA_count = sizeof($class_A);
	                while($arr_count < sizeof($boy_reli_array)){
	                    if(sizeof($class_A) <= $stu_class_count  && sizeof($class_A) <= $stu_class_count-5){
	                        if($arr_count%2 == 0){
    	                        $class_A[$classA_count] = $boy_reli_array[$arr_count];
    	                        //$arr_count++;
    	                        $classA_count++;
	                        }else{
	                            if(sizeof($class_F) <= $stu_class_count  && sizeof($class_F) <= $stu_class_count-5){
        	                        $class_F[$arr_count] = $boy_reli_array[$arr_count];
        	                        //$arr_count++;
        	                    }else{
        	                        echo "ERROR...........Cannot fill classes, Because Class F count exeed total count, when fill boys[1]";
        	                        echo "<br>";
        	                    }
	                        }
	                    }else{
	                        echo "ERROR...........Cannot fill classes, Because Class A count exeed total count, when fill boys[0]";
	                        echo "<br>";
	                    }
	                    $arr_count++;
	                }
	                $arr_count = 0;
	            }else{
	                while($arr_count < sizeof($boy_reli_array)){
	                    if(sizeof($class_A) <= $stu_class_count  && sizeof($class_A) <= $stu_class_count-5){
	                        if($arr_count%2 == 0){
	                            $class_A[$arr_count] = $boy_reli_array[$arr_count];
	                        }else{
	                            if(sizeof($class_F) <= $stu_class_count  && sizeof($class_F) <= $stu_class_count-5){
        	                        $class_F[$arr_count] = $boy_reli_array[$arr_count];
        	                        //$arr_count++;
        	                    }else{
        	                        echo "ERROR...........Cannot fill classes, Because Class F count exeed total count, when fill boys[3]";
        	                        echo "<br>";
        	                    }
	                        }
	                        //$arr_count++;
	                    }else{
	                        echo "ERROR...........Cannot fill classes, Because Class A count exeed total count, when fill boys[2]";
	                        echo "<br>";
	                    }
	                    $arr_count++;
	                }
	                $arr_count = 0; 
	            }
	            echo "Filled All Non Buddhist Male Students. Filled ".sizeof($boy_reli_array)." students to Class A and Class F";
	            echo "<br>";
	        }else{
	            echo "ERROR...........Cannot fill classes, Because Non Buddhist Male Students grater than Class A and Class F student count";
	            echo "<br>";
	        }
	        
	        // add NON Buddhish FEMALE students to Class A and Class F
	        if(((sizeof($girl_reli_array) <= $stu_class_count) && sizeof($girl_reli_array) <= $stu_class_count-5) && ((sizeof($girl_reli_array) <= $stu_class_count-sizeof($class_A)) && sizeof($girl_reli_array) <= ($stu_class_count-sizeof($class_A))-5)){
	            if(sizeof($class_A) > 0){
	                $classA_count = sizeof($class_A);
	                while($arr_count < sizeof($girl_reli_array)){
	                    if(sizeof($class_A) <= $stu_class_count  && sizeof($class_A) <= $stu_class_count-5){
	                        if($arr_count%2 == 0){
    	                        $class_A[$classA_count] = $girl_reli_array[$arr_count];
    	                        //$arr_count++;
    	                        $classA_count++;
	                        }else{
	                            if(sizeof($class_F) <= $stu_class_count  && sizeof($class_F) <= $stu_class_count-5){
        	                        $class_F[$arr_count] = $girl_reli_array[$arr_count];
        	                        //$arr_count++;
        	                    }else{
        	                        echo "ERROR...........Cannot fill classes, Because Class F count exeed total count, when fill girls[1]";
        	                        echo "<br>";
        	                    }
	                        }
	                    }else{
	                        echo "ERROR...........Cannot fill classes, Because Class A count exeed total count, when fill girls[0]";
	                        echo "<br>";
	                    }
	                    $arr_count++;
	                }
	                $arr_count = 0;
	            }else{
	                while($arr_count < sizeof($girl_reli_array)){
	                    if(sizeof($class_A) <= $stu_class_count  && sizeof($class_A) <= $stu_class_count-5){
	                        if($arr_count%2 == 0){
	                            $class_A[$arr_count] = $girl_reli_array[$arr_count];
	                        }else{
	                            if(sizeof($class_F) <= $stu_class_count  && sizeof($class_F) <= $stu_class_count-5){
        	                        $class_F[$arr_count] = $girl_reli_array[$arr_count];
        	                        //$arr_count++;
        	                    }else{
        	                        echo "ERROR...........Cannot fill classes, Because Class F count exeed total count, when fill girls[3]";
        	                        echo "<br>";
        	                    }
	                        }
	                        //$arr_count++;
	                    }else{
	                        echo "ERROR...........Cannot fill classes, Because Class A count exeed total count, when fill girls[2]";
	                        echo "<br>";
	                    }
	                    $arr_count++;
	                }
	                $arr_count = 0; 
	            }
	            echo "Filled All Non Buddhist Female Students. Filled ".sizeof($girl_reli_array)." students to Class A and Class F";
	            echo "<br>";
	        }else{
	            echo "ERROR...........Cannot fill classes, Because Non Buddhist Female Students grater than Class A and Class F student count";
	            echo "<br>";
	        }
	        
	        // add Buddhist boys
	        if(sizeof($boy_array) > 0){
	            $arr_count = 0; 
	            $classA_count = sizeof($class_A);
	            $classB_count = sizeof($class_B);
	            $classC_count = sizeof($class_C);
	            $classD_count = sizeof($class_D);
	            $classE_count = sizeof($class_E);
	            $classF_count = sizeof($class_F);
	            while($arr_count < sizeof($boy_array)){
	              if(sizeof($class_A) >= 0 && (sizeof($class_A) <= $stu_class_count  && sizeof($class_A) < $stu_class_count-5)){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_A[$classA_count] = $boy_array[$arr_count];
    	            $classA_count++;
    	            $arr_count++;
	              }
	              if(sizeof($class_B) < $stu_class_count+5){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_B[$classB_count] = $boy_array[$arr_count];
    	            $classB_count++;
    	            $arr_count++;
	              }
	              if(sizeof($class_C) < $stu_class_count+5){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_C[$classC_count] = $boy_array[$arr_count];
    	            $classC_count++;
    	            $arr_count++;
	              }
	              if(sizeof($class_D) < $stu_class_count+5){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_D[$classD_count] = $boy_array[$arr_count];
    	            $classD_count++;
    	            $arr_count++;
	              }
	              if(sizeof($class_E) <= $stu_class_count+5){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_E[$classE_count] = $boy_array[$arr_count];
    	            $classE_count++;
    	            $arr_count++;
	              }
	              if(sizeof($class_F) < $stu_class_count-5){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_F[$classF_count] = $boy_array[$arr_count];
    	            $classF_count++;
    	            $arr_count++;
	              }else{
	                  echo "<br>";
	                  echo "Class Full.. When Buddhist BOYS filling.";
	                  echo "<br>";
	              }
	              
	            }
	            
	            $arr_count = 0; 
	        }
	        
	        // add Buddhist girls
	        if(sizeof($girl_array) > 0){
	            $Temp = 0;
	            $arr_count = sizeof($girl_array)-1; 
	            $classA_count = sizeof($class_A);
	            $classB_count = sizeof($class_B);
	            $classC_count = sizeof($class_C);
	            $classD_count = sizeof($class_D);
	            $classE_count = sizeof($class_E);
	            $classF_count = sizeof($class_F);
	            while(($arr_count < sizeof($girl_array)) && $arr_count >= 0){
	              if(sizeof($class_A) >= 0 && (sizeof($class_A) < $stu_class_count  && sizeof($class_A) < $stu_class_count-5)){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_A[$classA_count] = $girl_array[$arr_count];
    	            $classA_count++;
    	            $arr_count--;
	              }
	              if(sizeof($class_B) < $stu_class_count+5){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_B[$classB_count] = $girl_array[$arr_count];
    	            $classB_count++;
    	            $arr_count--;
	              }
	              if(sizeof($class_C) < $stu_class_count+5){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_C[$classC_count] = $girl_array[$arr_count];
    	            $classC_count++;
    	            $arr_count--;
	              }
	              if(sizeof($class_D) < $stu_class_count+5){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_D[$classD_count] = $girl_array[$arr_count];
    	            $classD_count++;
    	            $arr_count--;
	              }
	              if(sizeof($class_E) < $stu_class_count+5){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_E[$classE_count] = $girl_array[$arr_count];
    	            $classE_count++;
    	            $arr_count--;
	              }
	              if(sizeof($class_F) < $stu_class_count-5){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_F[$classF_count] = $girl_array[$arr_count];
    	            $classF_count++;
    	            $arr_count--;
	              }
	              
	              
	              
	            }
	            
	            
	        }
	        
	        
	        if(sizeof($class_A) > 0 && sizeof($class_B) > 0 && sizeof($class_C) > 0 && sizeof($class_D) > 0 && sizeof($class_E) > 0 && sizeof($class_F) > 0){
	            echo "<br>";
                echo "DONE  === Class A Students Total : ".sizeof($class_A);
                echo "<br>"; 
                echo "<br>";
                echo "DONE  === Class B Students Total : ".sizeof($class_B);
                echo "<br>";  
                echo "<br>";
                echo "DONE  === Class C Students Total : ".sizeof($class_C);
                echo "<br>";  
                echo "<br>";
                echo "DONE  === Class D Students Total : ".sizeof($class_D);
                echo "<br>";  
                echo "<br>";
                echo "DONE  === Class E Students Total : ".sizeof($class_E);
                echo "<br>";  
                echo "<br>";
                echo "DONE  === Class F Students Total : ".sizeof($class_F);
                echo "<br>"; 
                echo "<br>";
                echo "Shuffled Total Students : ".(sizeof($class_A)+sizeof($class_B)+sizeof($class_C)+sizeof($class_D)+sizeof($class_E)+sizeof($class_F));
                echo "<br>";
                echo "<br>";
                echo "Shuffling SUCCESS .....";
                echo "<br>";
                echo "<br>";
	        }
	            
	            
	        
	        
	        
	    }else if($total_classes == 7){ // A to G
	        $arr_count = 0;
	        
	        // add tamil MALE students to Class A
	        if((sizeof($boy_tamil_array) <= $stu_class_count) && sizeof($boy_tamil_array) <= $stu_class_count-5){
	            if(sizeof($boy_tamil_array) > 0){
	                while($arr_count < sizeof($boy_tamil_array)){
	                    $class_A[$arr_count] = $boy_tamil_array[$arr_count];
	                    $arr_count++;
	                }
	                $arr_count = 0;
	                echo "Filled All Tamil Male Students. Filled ".sizeof($boy_tamil_array)." students to Class A";
	                echo "<br>";
	            }
	           
	        }else{
	            echo "ERROR...........Cannot fill classes, Because Tamil Male Students grater than Class A student count";
	            echo "<br>";
	        }
	        // add tamil FEMALE students to Class A
	        if((sizeof($class_A) <= $stu_class_count) && sizeof($class_A) <= $stu_class_count-5){
	            $classA_count = sizeof($class_A);
	            if(sizeof($girl_tamil_array) > 0){
	                while($arr_count < sizeof($girl_tamil_array)){
	                    $class_A[$classA_count] = $girl_tamil_array[$arr_count];
	                    $arr_count++;
	                    $classA_count++;
	                }
	                $arr_count = 0;
	                echo "Filled All Tamil FeMale Students. Filled ".sizeof($girl_tamil_array)." students to Class A";
	                echo "<br>";
	            }
	           
	        }else{
	            echo "ERROR...........Cannot fill classes, Because Tamil FeMale Students grater than Class A student count";
	            echo "<br>";
	        }
	        
	        echo "<br>";
	        echo "Filled All Tamil Students. Filled ".sizeof($class_A)." students to Class A";
	        echo "<br>";
	        echo "<br>";
	        
	        
	        // add NON Buddhish MALE students to Class A and Class G
	        if(((sizeof($boy_reli_array) <= $stu_class_count) && sizeof($boy_reli_array) <= $stu_class_count-5) && ((sizeof($boy_reli_array) <= $stu_class_count-sizeof($class_A)) && sizeof($boy_reli_array) <= ($stu_class_count-sizeof($class_A))-5)){
	            if(sizeof($class_A) > 0){
	                $classA_count = sizeof($class_A);
	                while($arr_count < sizeof($boy_reli_array)){
	                    if(sizeof($class_A) <= $stu_class_count  && sizeof($class_A) <= $stu_class_count-5){
	                        if($arr_count%2 == 0){
    	                        $class_A[$classA_count] = $boy_reli_array[$arr_count];
    	                        //$arr_count++;
    	                        $classA_count++;
	                        }else{
	                            if(sizeof($class_G) <= $stu_class_count  && sizeof($class_G) <= $stu_class_count-5){
        	                        $class_G[$arr_count] = $boy_reli_array[$arr_count];
        	                        //$arr_count++;
        	                    }else{
        	                        echo "ERROR...........Cannot fill classes, Because Class G count exeed total count, when fill boys[1]";
        	                        echo "<br>";
        	                    }
	                        }
	                    }else{
	                        echo "ERROR...........Cannot fill classes, Because Class A count exeed total count, when fill boys[0]";
	                        echo "<br>";
	                    }
	                    $arr_count++;
	                }
	                $arr_count = 0;
	            }else{
	                while($arr_count < sizeof($boy_reli_array)){
	                    if(sizeof($class_A) <= $stu_class_count  && sizeof($class_A) <= $stu_class_count-5){
	                        if($arr_count%2 == 0){
	                            $class_A[$arr_count] = $boy_reli_array[$arr_count];
	                        }else{
	                            if(sizeof($class_G) <= $stu_class_count  && sizeof($class_G) <= $stu_class_count-5){
        	                        $class_G[$arr_count] = $boy_reli_array[$arr_count];
        	                        //$arr_count++;
        	                    }else{
        	                        echo "ERROR...........Cannot fill classes, Because Class G count exeed total count, when fill boys[3]";
        	                        echo "<br>";
        	                    }
	                        }
	                        //$arr_count++;
	                    }else{
	                        echo "ERROR...........Cannot fill classes, Because Class A count exeed total count, when fill boys[2]";
	                        echo "<br>";
	                    }
	                    $arr_count++;
	                }
	                $arr_count = 0; 
	            }
	            echo "Filled All Non Buddhist Male Students. Filled ".sizeof($boy_reli_array)." students to Class A and Class G";
	            echo "<br>";
	        }else{
	            echo "ERROR...........Cannot fill classes, Because Non Buddhist Male Students grater than Class A and Class G student count";
	            echo "<br>";
	        }
	        
	        // add NON Buddhish FEMALE students to Class A and Class G
	        if(((sizeof($girl_reli_array) <= $stu_class_count) && sizeof($girl_reli_array) <= $stu_class_count-5) && ((sizeof($girl_reli_array) <= $stu_class_count-sizeof($class_A)) && sizeof($girl_reli_array) <= ($stu_class_count-sizeof($class_A))-5)){
	            if(sizeof($class_A) > 0){
	                $classA_count = sizeof($class_A);
	                while($arr_count < sizeof($girl_reli_array)){
	                    if(sizeof($class_A) <= $stu_class_count  && sizeof($class_A) <= $stu_class_count-5){
	                        if($arr_count%2 == 0){
    	                        $class_A[$classA_count] = $girl_reli_array[$arr_count];
    	                        //$arr_count++;
    	                        $classA_count++;
	                        }else{
	                            if(sizeof($class_G) <= $stu_class_count  && sizeof($class_G) <= $stu_class_count-5){
        	                        $class_G[$arr_count] = $girl_reli_array[$arr_count];
        	                        //$arr_count++;
        	                    }else{
        	                        echo "ERROR...........Cannot fill classes, Because Class G count exeed total count, when fill girls[1]";
        	                        echo "<br>";
        	                    }
	                        }
	                    }else{
	                        echo "ERROR...........Cannot fill classes, Because Class A count exeed total count, when fill girls[0]";
	                        echo "<br>";
	                    }
	                    $arr_count++;
	                }
	                $arr_count = 0;
	            }else{
	                while($arr_count < sizeof($girl_reli_array)){
	                    if(sizeof($class_A) <= $stu_class_count  && sizeof($class_A) <= $stu_class_count-5){
	                        if($arr_count%2 == 0){
	                            $class_A[$arr_count] = $girl_reli_array[$arr_count];
	                        }else{
	                            if(sizeof($class_G) <= $stu_class_count  && sizeof($class_G) <= $stu_class_count-5){
        	                        $class_G[$arr_count] = $girl_reli_array[$arr_count];
        	                        //$arr_count++;
        	                    }else{
        	                        echo "ERROR...........Cannot fill classes, Because Class G count exeed total count, when fill girls[3]";
        	                        echo "<br>";
        	                    }
	                        }
	                        //$arr_count++;
	                    }else{
	                        echo "ERROR...........Cannot fill classes, Because Class A count exeed total count, when fill girls[2]";
	                        echo "<br>";
	                    }
	                    $arr_count++;
	                }
	                $arr_count = 0; 
	            }
	            echo "Filled All Non Buddhist Female Students. Filled ".sizeof($girl_reli_array)." students to Class A and Class G";
	            echo "<br>";
	        }else{
	            echo "ERROR...........Cannot fill classes, Because Non Buddhist Female Students grater than Class A and Class G student count";
	            echo "<br>";
	        }
	        
	        // add Buddhist boys
	        if(sizeof($boy_array) > 0){
	            $arr_count = 0; 
	            $classA_count = sizeof($class_A);
	            $classB_count = sizeof($class_B);
	            $classC_count = sizeof($class_C);
	            $classD_count = sizeof($class_D);
	            $classE_count = sizeof($class_E);
	            $classF_count = sizeof($class_F);
	            $classG_count = sizeof($class_G);
	            while($arr_count < sizeof($boy_array)){
	              if(sizeof($class_A) >= 0 && (sizeof($class_A) <= $stu_class_count  && sizeof($class_A) < $stu_class_count-5)){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_A[$classA_count] = $boy_array[$arr_count];
    	            $classA_count++;
    	            $arr_count++;
	              }
	              if(sizeof($class_B) < $stu_class_count+5){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_B[$classB_count] = $boy_array[$arr_count];
    	            $classB_count++;
    	            $arr_count++;
	              }
	              if(sizeof($class_C) < $stu_class_count+5){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_C[$classC_count] = $boy_array[$arr_count];
    	            $classC_count++;
    	            $arr_count++;
	              }
	              if(sizeof($class_D) < $stu_class_count+5){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_D[$classD_count] = $boy_array[$arr_count];
    	            $classD_count++;
    	            $arr_count++;
	              }
	              if(sizeof($class_E) <= $stu_class_count+5){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_E[$classE_count] = $boy_array[$arr_count];
    	            $classE_count++;
    	            $arr_count++;
	              }
	              if(sizeof($class_F) <= $stu_class_count+5){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_F[$classF_count] = $boy_array[$arr_count];
    	            $classF_count++;
    	            $arr_count++;
	              }
	              if(sizeof($class_G) < $stu_class_count-5){
	                if(sizeof($boy_array) > $arr_count)
	                    $class_G[$classG_count] = $boy_array[$arr_count];
    	            $classG_count++;
    	            $arr_count++;
	              }else{
	                  echo "<br>";
	                  echo "Class Full.. When Buddhist BOYS filling.";
	                  echo "<br>";
	              }
	              
	            }
	            
	            $arr_count = 0; 
	        }
	        
	        // add Buddhist girls
	        if(sizeof($girl_array) > 0){
	            $Temp = 0;
	            $arr_count = sizeof($girl_array)-1; 
	            $classA_count = sizeof($class_A);
	            $classB_count = sizeof($class_B);
	            $classC_count = sizeof($class_C);
	            $classD_count = sizeof($class_D);
	            $classE_count = sizeof($class_E);
	            $classF_count = sizeof($class_F);
	            $classG_count = sizeof($class_G);
	            while(($arr_count < sizeof($girl_array)) && $arr_count >= 0){
	              if(sizeof($class_A) >= 0 && (sizeof($class_A) < $stu_class_count  && sizeof($class_A) < $stu_class_count-5)){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_A[$classA_count] = $girl_array[$arr_count];
    	            $classA_count++;
    	            $arr_count--;
	              }
	              if(sizeof($class_B) < $stu_class_count+5){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_B[$classB_count] = $girl_array[$arr_count];
    	            $classB_count++;
    	            $arr_count--;
	              }
	              if(sizeof($class_C) < $stu_class_count+5){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_C[$classC_count] = $girl_array[$arr_count];
    	            $classC_count++;
    	            $arr_count--;
	              }
	              if(sizeof($class_D) < $stu_class_count+5){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_D[$classD_count] = $girl_array[$arr_count];
    	            $classD_count++;
    	            $arr_count--;
	              }
	              if(sizeof($class_E) < $stu_class_count+5){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_E[$classE_count] = $girl_array[$arr_count];
    	            $classE_count++;
    	            $arr_count--;
	              }
	              if(sizeof($class_F) < $stu_class_count+5){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_F[$classF_count] = $girl_array[$arr_count];
    	            $classF_count++;
    	            $arr_count--;
	              }
	              if(sizeof($class_G) < $stu_class_count-5){
	                if(sizeof($girl_array) > $arr_count)
	                    $class_G[$classG_count] = $girl_array[$arr_count];
    	            $classG_count++;
    	            $arr_count--;
	              }
	              
	              
	              
	            }
	            
	            
	        }
	        
	        
	        if(sizeof($class_A) > 0 && sizeof($class_B) > 0 && sizeof($class_C) > 0 && sizeof($class_D) > 0 && sizeof($class_E) > 0 && sizeof($class_F) > 0 && sizeof($class_G) > 0){
	            echo "<br>";
                echo "DONE  === Class A Students Total : ".sizeof($class_A);
                echo "<br>"; 
                echo "<br>";
                echo "DONE  === Class B Students Total : ".sizeof($class_B);
                echo "<br>";  
                echo "<br>";
                echo "DONE  === Class C Students Total : ".sizeof($class_C);
                echo "<br>";  
                echo "<br>";
                echo "DONE  === Class D Students Total : ".sizeof($class_D);
                echo "<br>";  
                echo "<br>";
                echo "DONE  === Class E Students Total : ".sizeof($class_E);
                echo "<br>";  
                echo "<br>";
                echo "DONE  === Class F Students Total : ".sizeof($class_F);
                echo "<br>"; 
                echo "<br>";
                echo "DONE  === Class F Students Total : ".sizeof($class_G);
                echo "<br>"; 
                echo "<br>";
                echo "Shuffled Total Students : ".(sizeof($class_A)+sizeof($class_B)+sizeof($class_C)+sizeof($class_D)+sizeof($class_E)+sizeof($class_F)+sizeof($class_G));
                echo "<br>";
                echo "<br>";
                echo "Shuffling SUCCESS .....";
                echo "<br>";
                echo "<br>";
	        }
	            
	            
	    }// Close A to G section
	}
	
	/*
	echo "<br>";
    echo "Class A Details ===".$class_A[0]."===".sizeof($class_A)."===".$class_A[sizeof($class_A)-1];
    echo "<br>";
    echo "Class F Details ===".$class_F[0]."===".sizeof($class_F)."===".$class_F[sizeof($class_F)-1];
    */
    
    echo "<br>";
    echo "Updating DATABASE .....";
    echo "<br>";
    
    // Set new grade
    $grade;
    if($rt = mysqli_query($con,"SELECT new_class FROM shuffle")){
				                
								if(mysqli_num_rows($rt) > 0){
									while($rowt = mysqli_fetch_assoc($rt)){
									    $grade = $rowt['new_class'];
									}
								}
								echo "<br>";
								echo "New Grade"."===".$grade;
                                echo "<br>";
	}
    
    
    if($grade != ''){
	
	$num_count = 0;
	// Update Class A
	$grade_t = $grade." - A";
	while($num_count < sizeof($class_A)){
	    
	    $id = $class_A[$num_count];
	    $sql = "UPDATE shuffle SET new_class='$grade_t' where index_no = '$id'";
		if(mysqli_query($con, $sql)){
		    echo "<br>";
			echo "Class A Records added successfully.";
			echo "<br>";
											
		}else{
		    echo "<br>";
			echo "ERROR Class A : Could not able to execute $sql. " . mysqli_error($con);
			echo "<br>";
		}
		$num_count++;
	}
	
	$num_count = 0;
	// Update Class B
	$grade_t = $grade." - B";
	while($num_count < sizeof($class_B)){
	    
	    $id = $class_B[$num_count];
	    $sql = "UPDATE shuffle SET new_class='$grade_t' where index_no = '$id'";
		if(mysqli_query($con, $sql)){
		    echo "<br>";
			echo "Class B Records added successfully.";
			echo "<br>";
											
		}else{
		    echo "<br>";
			echo "ERROR Class B : Could not able to execute $sql. " . mysqli_error($con);
			echo "<br>";
		}
		$num_count++;
	}
	
	$num_count = 0;
	// Update Class C
	$grade_t = $grade." - C";
	while($num_count < sizeof($class_C)){
	    
	    $id = $class_C[$num_count];
	    $sql = "UPDATE shuffle SET new_class='$grade_t' where index_no = '$id'";
		if(mysqli_query($con, $sql)){
		    echo "<br>";
			echo "Class C Records added successfully.";
			echo "<br>";
											
		}else{
		    echo "<br>";
			echo "ERROR Class C : Could not able to execute $sql. " . mysqli_error($con);
			echo "<br>";
		}
		$num_count++;
	}
	
	$num_count = 0;
	// Update Class D
	$grade_t = $grade." - D";
	while($num_count < sizeof($class_D)){
	    
	    $id = $class_D[$num_count];
	    $sql = "UPDATE shuffle SET new_class='$grade_t' where index_no = '$id'";
		if(mysqli_query($con, $sql)){
		    echo "<br>";
			echo "Class D Records added successfully.";
			echo "<br>";
											
		}else{
		    echo "<br>";
			echo "ERROR Class D : Could not able to execute $sql. " . mysqli_error($con);
			echo "<br>";
		}
		$num_count++;
	}
	
	$num_count = 0;
	// Update Class E
	$grade_t = $grade." - E";
	while($num_count < sizeof($class_E)){
	    
	    $id = $class_E[$num_count];
	    $sql = "UPDATE shuffle SET new_class='$grade_t' where index_no = '$id'";
		if(mysqli_query($con, $sql)){
		    echo "<br>";
			echo "Class E Records added successfully.";
			echo "<br>";
											
		}else{
		    echo "<br>";
			echo "ERROR Class E : Could not able to execute $sql. " . mysqli_error($con);
			echo "<br>";
		}
		$num_count++;
	}
	
	$num_count = 0;
	// Update Class F
	$grade_t = $grade." - F";
	while($num_count < sizeof($class_F)){
	    
	    $id = $class_F[$num_count];
	    $sql = "UPDATE shuffle SET new_class='$grade_t' where index_no = '$id'";
		if(mysqli_query($con, $sql)){
		    echo "<br>";
			echo "Class F Records added successfully.";
			echo "<br>";
											
		}else{
		    echo "<br>";
			echo "ERROR Class F : Could not able to execute $sql. " . mysqli_error($con);
			echo "<br>";
		}
		$num_count++;
	}
	
	if(sizeof($class_G) > 0){
	    $num_count = 0;
    	// Update Class G
    	$grade_t = $grade." - G";
    	while($num_count < sizeof($class_G)){
    	    
    	    $id = $class_G[$num_count];
    	    $sql = "UPDATE shuffle SET new_class='$grade_t' where index_no = '$id'";
    		if(mysqli_query($con, $sql)){
    		    echo "<br>";
    			echo "Class G Records added successfully.";
    			echo "<br>";
    											
    		}else{
    		    echo "<br>";
    			echo "ERROR Class G : Could not able to execute $sql. " . mysqli_error($con);
    			echo "<br>";
    		}
    		$num_count++;
    	}
	}
	
	
	$noClass = "No Class";
	if($rt = mysqli_query($con,"SELECT * FROM shuffle where new_class = '$grade'")){
				                
								if(mysqli_num_rows($rt) > 0){
									while($rowt = mysqli_fetch_assoc($rt)){
									    $id = $rowt['index_no'];
                                	    $sql = "UPDATE shuffle SET new_class='$noClass' where index_no = '$id'";
                                		if(mysqli_query($con, $sql)){
                                		    echo "<br>";
                                			echo "Set No Classes successfully.";
                                			echo "<br>";
                                											
                                		}else{
                                		    echo "<br>";
                                			echo "ERROR Set No Classes.. $sql. " . mysqli_error($con);
                                			echo "<br>";
                                		}
									}
								}
								
	}
	
								
	$grade = '';
	
	}
    
    
    
}

				
shuffling();

				

				
?>