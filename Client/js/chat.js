function chat(channel)
{
	if (channel == null)
		channel = 0;

	this.Messages = new Array();
	this.Users = new Array();

	this.Update = function() {
		$.get('Server/Chat/chat.php?userId='+this.UserId, function(data) {
			alert(data);
		});
	}
}

function chatUser(name, userId)
{
	if (name == null || userId == null)
		return false;

	this.Name = name;
	this.UserId = userId;
	this.NameColor = "000000";
	this.CharacterName = "";

	this.GetInfo = function() {
		$.get('Server/Chat/getUserDetails.php?userId='+this.UserId, function(data) {
			if (data.result != "OK") {
				$("body").html("error: "+data.message);
			}
			alert(data.data);
		});
	}
	return true;
}