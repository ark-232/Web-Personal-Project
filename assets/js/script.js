// This code was taken from a tutorial, please look at references page.
//If needed, this will be changed for the final project.
let TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

var cursor = true;
var speed = 220;

setInterval(() => {
   if(cursor) {
     document.getElementById('cursor').style.opacity = 0;
     cursor = false;
   }else {
     document.getElementById('cursor').style.opacity = 1;
     cursor = true;
   }
}, speed);

function validateContact() {
  const errorContainer = document.querySelector("#errorContainer");
  errorContainer.innerHTML = "";

  const form = document.forms["contact-form"];

  const name = form["name"];
  const email = form["email"];
  const subject = form["subject"];
  const message = form["message"];
  

  //const usernameValue = usernameInput.value;
  //const messageValue = messageInput.value;
  const nameValue = name.value;
  const emailValue = email.value;
  const subjectValue = subject.value;
  const messageValue = message.value;
  



  if (nameValue.trim().length == 0) {
      errorContainer.innerHTML += getError("Name Cannot be Empty");
      return false;
  }
  if (emailValue.trim().length == 0) {
      errorContainer.innerHTML += getError("Email Cannot be Empty");
      return false;
  }
  if (subjectValue.trim().length == 0) {
    errorContainer.innerHTML += getError("Subject Cannot be Empty");
    return false;
}
if (messageValue.trim().length == 0) {
  errorContainer.innerHTML += getError("Message Cannot be Empty");
  return false;
}
  
 
 



  return true;
}

function getError(errorMessage) {
  return `
  <div class="my-3 mx-3 p-2 bg-danger text-white card">${errorMessage}</div>
  `;
}