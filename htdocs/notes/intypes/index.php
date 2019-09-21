<form action="process.php" method="post">

<p> Enter a valid email address that belongs to you. </p> <p> <input type="email" name="email" autocomplete="off" placeholder ="Email"></p>

<p> Choose a username. </p><p> <input type="text" name="username" autocomplete="off" placeholder ="Username"> </p>

<p> Enter a password you can easily remember. </p><p> <input type="password" name="password" autocomplete="off" placeholder ="Password"> </p>

<p> Confirm your password. </p><p> <input type="password" name="confirm" autocomplete="off" placeholder ="Confirm Password"> </p>

<p> <input type="checkbox" name="terms" value="yes"> Do you agree to the extensive Terms & Condition?</p>

<p> <input type="checkbox" name="privacy" value="yes"> Have you completely read and do you completely understand and agree with our extremely shifty privacy policy. </p>

<p> Which of the following statements most closely resembles your attitude at the moment? </p>

<p>
<input type="radio" name="attitude" value="hungry">Hungry<br>
<input type="radio" name="attitude" value="angry">Angry<br>
<input type="radio" name="attitude" value="hangry">Hangry<br>
</p>

<p> What is your MBTI (Meyers-Briggs Type indicator)?</p>
<p>
<select name="mbti">

	<option value="esfp">ESFP</option>
	<option value="esfj">ESFJ</option>
	<option value="estp">ESTP</option>
	<option value="estj">ESTJ</option>
	<option value="enfp">ENFP</option>
	<option value="enfj">ENFJ</option>
	<option value="entp">ENTP</option>
	<option value="entj">ENTJ</option>
	<option value="isfp">ISFP</option>
	<option value="isfj">ISFJ</option>
	<option value="istp">ISTP</option>
	<option value="istj">ISTJ</option>
	<option value="infp">INFP</option>
	<option value="infj">INFJ</option>
	<option value="intp">INTP</option>
	<option value="intj">INTJ</option>

</select>
</p>

<input type="submit" value="Register">

</form>