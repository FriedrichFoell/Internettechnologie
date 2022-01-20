    <?php
	if (isset($_POST['Kommentarfeld'])) {
file_put_contents('Text.txt',$_POST['Kommentarfeld'],FILE_APPEND);
	echo "Data written successfully";}
      ?>