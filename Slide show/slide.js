function next() 
{
    var current = document.getElementById("slideshow").src.slice(-5)
    if(current == "1.jpg")
    {
        document.getElementById("slideshow").src="2.jpg"
    }
    else if(current == "2.jpg")
    {
        document.getElementById("slideshow").src="3.jpg"
    }
    else if(current == "3.jpg")
    {
        document.getElementById("slideshow").src="4.jpg"
    }
    else if(current == "4.jpg")
    {
        document.getElementById("slideshow").src="5.jpg"
    }
    else if(current == "5.jpg")
    {
        document.getElementById("slideshow").src="1.jpg"
    }
}

function previous() 
{
    var current = document.getElementById("slideshow").src.slice(-5)
    if(current == "1.jpg")
    {
        document.getElementById("slideshow").src="5.jpg"
    }
    else if(current == "2.jpg")
    {
        document.getElementById("slideshow").src="1.jpg"
    }
    else if(current == "3.jpg")
    {
        document.getElementById("slideshow").src="2.jpg"
    }
    else if(current == "4.jpg")
    {
        document.getElementById("slideshow").src="3.jpg"
    }
    else if(current == "5.jpg")
    {
        document.getElementById("slideshow").src="4.jpg"
    }
}