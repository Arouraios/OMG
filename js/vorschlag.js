function addVorschlag()
{
   var vorschlag = document.getElementById("vorschlag").value
    console.log(vorschlag);
	document.getElementById("vorschlag").value='';
}

function clearContent(element){
	if(element.value=='Hast du gute Ideen für Themen in der Zukunft? Würdest du gerne etwas ändern? Dann schreib es einfach hier rein'){
		element.value='';
	}
}