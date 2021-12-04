<?php
$q1= $_POST["q1"];
$q2= $_POST["q2"];
$q3= $_POST["q3"];
$q4= $_POST["q4"];
$q5= $_POST["q5"];

$correct= 0;

echo "Question 1: Who invented the lightbulb? <br> Your Answer: ";
if($q1== "1")
{
    echo "Benjamin Franklin";
}
else if ($q1== "2")
{
    echo "Thomas Edison";
    $correct++;
}
else if($q1== "3")
{
  echo "Nikola Tesla";
}
else if($q1== "4")
{
  echo "Marie Curie";
}

echo "<br>Correct Answer: Thomas Edison<br>";

echo "<br>Question 2: Who made the first computer? <br> Your answer:  ";
if($q2== "1")
{
    echo "Charles Babbage";
    $correct++;
}
else if ($q2== "2")
{
    echo "Alan Turing";
}
else if($q2== "3")
{
  echo "Herman Hollerith";
}
else if($q2== "4")
{
  echo "John von Neumann";

}

echo "<br>Correct Answer: Charles Babbage<br>";

echo "<br>Question 3: What year was the first rocket launched?<br> Your answer:  ";
if($q3== "1")
{
    echo "1952";
}
else if ($q3== "2")
{
    echo "1961";
}
else if($q3== "3")
{
  echo "1926";
  $correct++;
}
else if($q3== "4")
{
  echo "1910";
}

echo "<br>Correct Answer: 1926<br>";

echo "<br>Question 4: Where was the first locomotive manufactured?<br> Your answer:  ";
if($q4== "1")
{
    echo "Belgium";
}
else if ($q4== "2")
{
    echo "United States";
}
else if($q4== "3")
{
  echo "Russia";
}
else if($q4== "4")
{
  echo "Britain";
  $correct++;
}

echo "<br>Correct Answer: Britain<br>";

echo "<br>Question 5: How far back does written history go?<br> Your answer:  ";
if($q5== "1")
{
    echo "2000 years";
}
else if ($q5== "2")
{
    echo "5000 years";
    $correct++;
}
else if($q5== "3")
{
  echo "8000 years";
}
else if($q5== "4")
{
  echo "3000 years";
}

echo "<br>Correct Answer: 5000 years<br>";


echo "<br>Amount correct: " . $correct . "<br>";
echo "Percentage Correct: " . ($correct/5)*100 . "%<br>";
?>
