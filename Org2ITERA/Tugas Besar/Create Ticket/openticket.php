<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Front Desk Management System</title>
	<link rel="stylesheet" type="text/css" href="createticketstyle.css">
</head>
<body>
	<form>
		<fieldset class="topicissues">
			<legend>Topic Issues</legend>
				<label>Select Topic</label>
				<select name="topic">
				<option value="topic1">fghjkfghsasfdgfhgjfgfgdhdsgfsadhsf</option>
				<option value="topic2">fghjkfghddsafdsgfhgdaghfs</option>
				<option value="topic3">fghjkfghfadhsfjgdfhGD</option>
				<option value="topic4">fghjkfghgdhfjdgjfsg</option>
				<option value="topic5">fghjkfghhsdfjghkjkert</option>
				</select>
		</fieldset>
		<br>
		<fieldset class="contactinformation">
			<legend>Contact Information</legend>
			<p>
			<label>Full Name:</label>
			<input type="text" name="fullname"/>
			</p>
			<p>
			<label>Phone Number:</label>
			<input type="text" name="phonenumber"/>
			</p>
			<p>
			<label>E-mail:</label>
			<input type="text" name="email"/>
			</p>
		</fieldset>
		<br>
		<fieldset class="ticketdetails">
			<legend>Ticket Details</legend>
			<p>
			<label>Issue Summary:</label>
			<input type="text" name="summary"/><br>
			</p>
			<p>
			<div>Issue Details:</div>
			<textarea name="Details" rows="12" cols="60"></textarea>
			</p>
		</fieldset>
		<br>
		<input type="submit" value="submit" class="submit">
		<input type="submit" value="reset">
		<input type="submit" value="cancel">
	</form>
</body>
</html>
