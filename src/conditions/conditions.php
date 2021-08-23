<html>
  <head><title>conditions</title></head>
  <body>
  <?php
$room_is_filthy = true;
function cleanup_room() {
  $image = 'https://media0.giphy.com/media/26gscNQHswYio5RBu/200.gif';
  $imageData = base64_encode(file_get_contents($image));
  echo '<br><img src="data:image/jpeg;base64,'.$imageData.'">';
};

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>
    	

  </body>
</html>