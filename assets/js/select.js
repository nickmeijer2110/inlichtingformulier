var x, i, j, selElmnt, a, b, c;
x = document.getElementsByClassName("custom-select2");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];

  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);

  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {

    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {

        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {

      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
  });
}
function closeAllSelect(elmnt) {

  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

document.addEventListener("click", closeAllSelect);

$(document).ready(function(){
    $('.checkbox-groep input:checkbox').click(function() {
        $('.checkbox-groep input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep2 input:checkbox').click(function() {
        $('.checkbox-groep2 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep3 input:checkbox').click(function() {
        $('.checkbox-groep3 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep4 input:checkbox').click(function() {
        $('.checkbox-groep4 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep5 input:checkbox').click(function() {
        $('.checkbox-groep5 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep6 input:checkbox').click(function() {
        $('.checkbox-groep6 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep7 input:checkbox').click(function() {
        $('.checkbox-groep7 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep8 input:checkbox').click(function() {
        $('.checkbox-groep8 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep9 input:checkbox').click(function() {
        $('.checkbox-groep9 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep10 input:checkbox').click(function() {
        $('.checkbox-groep10 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep11 input:checkbox').click(function() {
        $('.checkbox-groep11 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep12 input:checkbox').click(function() {
        $('.checkbox-groep12 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep13 input:checkbox').click(function() {
        $('.checkbox-groep13 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep14 input:checkbox').click(function() {
        $('.checkbox-groep14 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep15 input:checkbox').click(function() {
        $('.checkbox-groep15 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep16 input:checkbox').click(function() {
        $('.checkbox-groep16 input:checkbox').not(this).prop('checked', false);
    });

    $('.checkbox-groep17 input:checkbox').click(function() {
        $('.checkbox-groep17 input:checkbox').not(this).prop('checked', false);
    });
    $('.checkbox-groep18 input:checkbox').click(function() {
        $('.checkbox-groep18 input:checkbox').not(this).prop('checked', false);
    });
    $('.checkbox-groep19 input:checkbox').click(function() {
        $('.checkbox-groep19 input:checkbox').not(this).prop('checked', false);
    });
    $('.checkbox-groep20 input:checkbox').click(function() {
        $('.checkbox-groep20 input:checkbox').not(this).prop('checked', false);
    });

    $('.geslachten input:checkbox').click(function() {
        $('.geslachten input:checkbox').not(this).prop('checked', false);
    });

    $('.contact-gewenst input:checkbox').click(function() {
        $('.contact-gewenst input:checkbox').not(this).prop('checked', false);
    });

});
