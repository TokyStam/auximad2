function elementDettach(element) {
    element.css({
        "width": "auto",
        "height": "auto",
        "top": "50%",
        "left" : "auto",
        "display": "block",
        "opacity": "0.5",
        "position": "fixed",
        "z-index": "1000000",
        "background": "transparent",
        "box-shadow": "0 0 0px"
    });
}

// AJAX load page
///////////////////////////////////////////////////////////////
function loadPage(page, container) {
    $.ajax({
        url: "http://localhost/test/rtvpage/" + page,
        cache: false,
        success: function (html) {
            container.fadeOut(100, function () {
                container.empty();
                container.append(html);
                container.fadeIn(100);
            });
        },
        error: function () {
            alert("error 404 !!!");
        }
    });
}
////////////////////////////////////////////////////////////////////////


// function drag element
///////////////////////////////////////////////////////////////////////////
function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////