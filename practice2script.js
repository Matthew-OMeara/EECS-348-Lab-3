function update(event) {
    event.preventDefault();
    const newParaColor = "rgb(" + document.getElementById("pColor").value + ")";
    const newBordColor = "rgb(" + document.getElementById("bColor").value + ")";
    const newBordWidth = document.getElementById("bWidth").value + "px";
    const paragraph = document.getElementById("paragraph");
    paragraph.style.color = newParaColor;
    paragraph.style.borderColor = newBordColor;
    paragraph.style.borderWidth = newBordWidth;
}


