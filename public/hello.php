<?php
echo "hello world!";
if(mysqli_connect('localhost', 'root', ''))
{
	echo 'connect suceess!';
} else {
	echo 'connect fail!';
}
