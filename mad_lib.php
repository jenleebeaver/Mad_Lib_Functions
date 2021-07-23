<?php

function generateStory($singular_noun, $verb, $color, $distance_unit){
  $story = "\nThe " . $singular_noun . "s are lovely, \n" . $color . ", and deep. \n
But I have promises to keep, \n
And ${distance_unit} to go before I " . $verb . ", \n
And ${distance_unit} to go before I " . $verb .".\n\n";
return $story;
};

echo generateStory("Taher", "eats", "blue", "kilometers");
echo generateStory("Jen", "sleeps", "purple", "inches");
echo generateStory("Charlie", "walks", "green", "feet");
