<!doctype html>
<html>
 <head>
 </head>
<!--Create a variable called yourName.  Assign it a value of your name.
Display the assignment name in an h1 element on the page. Include the elements in your output. 
Use HTML to put an h2 element on the page. Use PHP to display your name inside the element using the variable.
Create the following variables:  number1, number2 and total.  Assign a value to them.  
Display the value of each variable and the total variable when you add them together. 
Use PHP to create a Javascript array with the following values: PHP,HTML,Javascript.  Output this array using PHP.  Create a script that will display the values of this array on your page.  NOTE:  Remember PHP is building the array not running it.  

When complete please do the following:

Post all necessary files to your website.
Update your WDV341 homework page with a link to the assignment.  If your assignment is not on your website it WILL NOT BE GRADED.
Attach your Git repo address to this assignment
Place a link to your homework page on the Blackboard assignment
-->

 <body>
     <h1> PHP BASICS </h1>
     <br>
 <h2>
<!--Use HTML to put an h2 element on the page. Use PHP to display your name inside the element using the variable.-->
     <?php 
     $yourName = "Jael Colima"; ?>
     <?php echo $yourName?>
  </h2>

 <h2>
<!--Create the following variables:  number1, number2 and total.  Assign a value to them. Display the value of each variable and the total variable when you add them together.-->
The Numbers:

    	<?php 
    	$number1 = 5;
    	$number2 = 2;
    	echo $total = $number1 + $number2;
    	

       <?php $program = array('PHP','HTML','Javascript');
         echo document.write('<p>$program[0]<br/>$program[1]<br/>$program[2]<br/></p>');?>



</h2>
</body>
</html>















