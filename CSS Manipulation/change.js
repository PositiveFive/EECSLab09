function change() {
    paragraph = document.getElementById("paragraph")
    red = document.getElementById("red").value
    green = document.getElementById("green").value
    blue = document.getElementById("blue").value
    color = "#" + red.toString() + green.toString() + blue.toString() 
    paragraph.style.color = color

    width = document.getElementById("width").value
    paragraph.style.width = width

    red = document.getElementById("redValue").value
    green = document.getElementById("greenValue").value
    blue = document.getElementById("blueValue").value
    color = "#" + red.toString() + green.toString() + blue.toString() 
    paragraph.style.backgroundColor = color
}