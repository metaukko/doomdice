/**
Dice function handlers
**/

function rollDice()
{

	resetDice();

	if (document.getElementById("redcheck").checked)
	{
		rollRed();
	}
	if (document.getElementById("yellowcheck").checked)
	{
		rollYellow();
	}
	
	if (document.getElementById("bluecheck").checked)
	{
		rollBlue();
	}

	if (document.getElementById("bluecheck2").checked)
	{
		rollBlueTwo();
	}

	if (document.getElementById("greencheck").checked)
	{
		rollGreen();
	}

	if (document.getElementById("greencheck2").checked)
	{
		rollGreenTwo();
	}
}

function resetDice()
{
	var images = document.querySelectorAll("img");
	
	jQuery.each(images, function(i, img) {

		img.setAttribute("src", "");
		img.style.display="none";

	});
}

function resetAll()
{

	resetDice();

	var checkboxes = document.getElementsByName("dicepicker");

  	for (var i=0; i<checkboxes.length; i++) {
     
   		checkboxes[i].checked=false;
  	}
}

function rollRed()
{
	var randNum = Math.floor(Math.random()*6)+1;
	var imagePath = "img/red"+randNum+".jpg"

	var image = document.querySelectorAll(".red")[0];
	image.setAttribute("src", imagePath);
	image.style.display="inline-block";

}

function rollBlue()
{
	var randNum = Math.floor(Math.random()*6)+1;
	var imagePath = "img/blue"+randNum+".jpg"

	var image = document.querySelectorAll(".blue")[0];
	image.setAttribute("src", imagePath);
	image.style.display="inline-block";

}

function rollBlueTwo()
{
	var randNum = Math.floor(Math.random()*6)+1;
	var imagePath = "img/blue"+randNum+".jpg"

	var image = document.querySelectorAll(".blue2")[0];
	image.setAttribute("src", imagePath);
	image.style.display="inline-block";

}

function rollYellow()
{
	var randNum = Math.floor(Math.random()*6)+1;
	var imagePath = "img/yellow"+randNum+".jpg"

	var image = document.querySelectorAll(".yellow")[0];
	image.setAttribute("src", imagePath);
	image.style.display="inline-block";

}

function rollGreen()
{
	var randNum = Math.floor(Math.random()*6)+1;
	var imagePath = "img/green"+randNum+".jpg"

	var image = document.querySelectorAll(".green")[0];
	image.setAttribute("src", imagePath);
	image.style.display="inline-block";

}

function rollGreenTwo()
{
	var randNum = Math.floor(Math.random()*6)+1;
	var imagePath = "img/green"+randNum+".jpg"

	var image = document.querySelectorAll(".green2")[0];
	image.setAttribute("src", imagePath);
	image.style.display="inline-block";

}


document.querySelector(".dice-button").addEventListener("click", rollDice);

document.querySelector(".reset-button").addEventListener("click", resetAll);

