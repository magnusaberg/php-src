--TEST--
zend multibyte (11)
--SKIPIF--
--XFAIL--
https://bugs.php.net/bug.php?id=66582
--FILE--
<?php
declare(encoding="ISO-8859-15") {
	declare(encoding="ISO-8859-1");
	echo "ok\n";
}
?>
--EXPECTF--
ok
