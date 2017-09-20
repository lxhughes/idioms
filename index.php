<?
virtual("/navbar.txt");
?>
<h1>Random English Idiom</h1>
<div id=bodytext>
<p>For use in impromptu games of pictionary, charades, etc. <a href="idioms.txt">List of English idioms</a> compiled from a variety of online sources, including ESL websites. 
<p>
<p>Your prompt:
<h2>
<?
echo Randline();

// Randline
// Returns a random complete line from the file
function Randline() {
	$infile = "idioms.txt";
	$fh = fopen($infile, 'r');	// Open file
	$filesize = filesize($infile);  // Find size of file
	$randnumber = rand(1, $filesize);  // Pick a random integer from 1 to filesize
	fseek($fh, $randnumber);	// Go to a random place in the file
	fgets($fh);			// Get to end of current line
	$myline = fgets($fh);		// Get next line
	fclose($fh); 			// Close file
	return strtoupper($myline);			
}

?>
</h2>
</div>
</body>
</html>