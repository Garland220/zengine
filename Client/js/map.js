function Map(world)
{
	if (world == null)
		return false;

	this.lightLevel = -1;
	this.lightFilter = 0;

	this.World = world;
	this.level = new Array();
	this.collision = new Array();

	this.getLightLevel = function() {
		if (this.lightLevel < 0 && this.World.lightLevel != null)
			return this.World.lightLevel - lightFilter;
		return lightLevel;
	}

	return true;
}

function TileMap()
{
	this.x = new Array();
	this.y = new Array();
}