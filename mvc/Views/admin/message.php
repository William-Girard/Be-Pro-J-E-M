<?php 

if($error) {
	echo $this->loadParts('error-message',[$message]);
}
else {
	echo $this->loadParts('success-message',[$message]);
}

?>