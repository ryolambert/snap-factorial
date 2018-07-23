<?php
/**
 * Write a function that calculates the factorial of n, where:
 * n! = n * (n-1) * (n-2) * ... * 2 * 1
 * 0! = 1
 *
 * throw an exception if n < 0 // don't allow negatives
 * throw an exception if n > 20 // 21! and above overflow the int type
 */

if(isset($_POST['number'])) {
	$fact = $_POST['number'];

	function factorial($n) {
		if($n < 0) {
			throw(new \RangeException("n cannot be a negative number, please try a larger number"));
		}
		if($n > 20) {
			throw(new \RangeException("n cannot be over 20, please try a lower number"))
		}
		if($n == 0) {
			return 1;
		} else {
			return $n * factorial($n - 1);
		}
	}
	$ans = factorial($fact);
}
?>
<html>
	<body>
		<form action="" method="POST">
			<label for="number">Enter a number to factorize (Btn 0 - 170): </label>
			<br /><br />
			<input type="text" name="number" id="number" />
			<br /><br />
			<input type="submit" />
		</form>
		<hr />
		<?php
		if(isset($ans)) {
			echo "Factorial of $fact is: ". $ans;
		}
		?>
	</body>
</html>