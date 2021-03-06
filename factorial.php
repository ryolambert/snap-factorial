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

	/**
	 * @param $n int
	 * @return float|int
	 * @throws \RangeException if $n is < 0 or > 20
	 * @throws \TypeError if n is not an int
	 */
	function factorial(int $n): int {
		if ($n < 0) {
			throw(new \RangeException("n cannot be a negative number, please try a larger number"));
		} elseif ($n > 20) {
			throw(new \RangeException("n cannot be over 20, please try a lower number"));
		} elseif ($n === 0) {
			return 1;
		} else {
			return $n * factorial($n - 1);
		}
	}

	$ans = factorial($fact);

}

/**
 * Variant for loop
 * function factorial(int $n): int {
 * $answer = 1;
 * for($i = 1; $i<= $n; $i++) {
 * $answer = $answer * $i;
 * }
 * return $answer;
 * }
 */
?>
<html>
	<body>
		<form action="" method="POST">
			<label for="number">Enter a number to factorialize (Btn 0 - 20): </label>
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