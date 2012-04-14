function DisplayContents(container, target) {
	if (target == null)
		target = "#inventory";
	if (container == null)
		return;
	$(target).empty();
	for (i=0;i<container.Contents.length;i++) {
		var item = container.Contents[i];
		$(target).append('<li id="'+$(item).serialize()+'"><a href="#" onClick="Equip(this); return false;" title="'+item.Name+'"><img src="Client/images/icons/items/'+item.Graphic+'" alt="'+item.Name+'" /></a></li>');
	}
}

function DisplayWeight(item,target) {
	if (target == null)
		target = "#currentTotalWeight";
	if (item == null)
		return;
	$(target).html(item.GetWeight());
}

function AddItem(container, item) {
	container.AddItem(item);
	DisplayContents(container);
}

function UpdateInventory() {
	$.get('Server/Items/update.php?userId='+this.UserId, function(data) {
		
	});

	DisplayContents(container);
	DisplayWeight(container);
}

function Equip(item) {
	if ($(item).parent().hasClass("ui-sortable-helper"))
		return;
	if ($(item).parent().hasClass("equipped"))
		$(item).parent().removeClass("equipped");
	else
		$(item).parent().removeClass("equipped").addClass("equipped");
}

$(document).ready(function() {
	var user = new chatUser("Gar", 1);
	//user.GetInfo();
	debugItems();

	var old_position;
	var new_position;
	$("#inventory").sortable({
		//connectWith: '.connectedSortable',
		forcePlaceholderSize: true,
		cursor: "move",
		start: function(e, ui) {
			// puts the old positions into array before sorting
			old_position = $(this).sortable('toArray');
		},
		update: function(event, ui) {
			// grabs the new positions now that we've finished sorting
			new_position = $(this).sortable('toArray');
			//alert(new_position);
		}
	}).disableSelection();
});

function debugItems()
{
	var container = new Container();

	var item = new Shield();
	item.Weight = 10;
	var item2 = new Armor();
	item2.Weight = 11;
	container.AddItem(item);
	container.AddItem(item2);
	container.AddItem(new Potion());
	container.AddItem(new Wand());
	container.AddItem(new Scroll());
	container.AddItem(new Food());

	DisplayContents(container);
	DisplayWeight(container);
}