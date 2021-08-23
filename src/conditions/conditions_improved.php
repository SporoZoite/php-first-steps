<html>
  <head><title>conditions</title></head>
  <body>
  <?php

$possible_states = array (
  0 => "health hazard",
  1 => "filthy",
  2 => "dirty",
  3 => "clean",
  4 => "immaculate"
);

$room_is_filthy = $possible_states[4];

function cleanup_room() {
  $image = 'https://media0.giphy.com/media/26gscNQHswYio5RBu/200.gif';
  $imageData = base64_encode(file_get_contents($image));
  echo '<br><img src="data:image/jpeg;base64,'.$imageData.'">';
};

function breeze() {
  $image = 'https://s0.gifyu.com/images/Febreze.gif';
  $imageData = base64_encode(file_get_contents($image));
  echo '<br><img src="data:image/jpeg;base64,'.$imageData.'">';
};

function cleaning_time() {
  $image = 'https://thumbs.gfycat.com/SlightValidAntarcticgiantpetrel-max-1mb.gif';
  $imageData = base64_encode(file_get_contents($image));
  echo '<br><img src="data:image/jpeg;base64,'.$imageData.'">';
};

function love() {
  $image = 'https://thumbs.gfycat.com/RewardingFlatCats-max-1mb.gif';
  $imageData = base64_encode(file_get_contents($image));
  echo '<br><img src="data:image/jpeg;base64,'.$imageData.'">';
};

if( $room_is_filthy == $possible_states[0]){
	echo "Well man, you know what you've got to do...";
	cleaning_time();
	echo "<br>Amazing job!";
  echo "<br>Now Room is super clean!";
	$room_is_filthy = $possible_states[4];
} else if ( $room_is_filthy == $possible_states[1]){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = $possible_states[3];
} else if ( $room_is_filthy == $possible_states[2]){
	echo "Well...";
	breeze();
	echo "<br>That will do the job!";
	$room_is_filthy = false;
 } else if ( $room_is_filthy == $possible_states[4]){
    echo "<br>Celebration time";
    love();
    $room_is_filthy = $possible_states[3];
  } else {
    echo "<br>Nothing to do, room is clean already.";
  };

  if ( $room_is_filthy == $possible_states[4]){
    echo "<br>Celebration time!";
    love();
    $room_is_filthy = $possible_states[3];
  };
  ?>
        
  
    </body>
  </html>