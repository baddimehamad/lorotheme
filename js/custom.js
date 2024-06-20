document.addEventListener('DOMContentLoaded', function() {
// let modalForm =
//   document.querySelector(".modal-form-booking") ||
//   document.querySelector(".form-booking");

// function showForm() {
//   window.onresize = () => {

//       if (window.innerWidth > 1000) {
//         modalForm.classList.add("form-booking");
//         modalForm.classList.remove("modal-form-booking");
//         modalForm.classList.remove("hideModalForm");
//       }

//       if (window.innerWidth < 1000) {
//         modalForm.classList.remove("form-booking");
//         modalForm.classList.add("modal-form-booking");
//         modalForm.classList.add("hideModalForm");
//       }

//   };

//   window.onload = () => {
//     if (modalForm.className == "modal-form-booking") {
//       if (window.innerWidth > 1000) {
//         modalForm.classList.add("form-booking");
//         modalForm.classList.remove("modal-form-booking");
//         modalForm.classList.remove("hideModalForm");
//       }
//     } else if (modalForm.className == "form-booking") {
//       if (window.innerWidth < 1000) {
//         modalForm.classList.remove("form-booking");
//         modalForm.classList.add("modal-form-booking");
//         modalForm.classList.add("hideModalForm");
//       }
//     } else if (modalForm.className == "form-booking showModalForm") {
//         if (window.innerWidth < 1000) {
//           modalForm.classList.remove("form-booking");
//           modalForm.classList.add("modal-form-booking");
//         }
//       }
//   };
// }
// showForm()

function openForm() {
  // console.log(modalForm.className)
  // if (modalForm.className == "modal-form-booking hideModalForm") {
  //     modalForm.classList.remove("hideModalForm");
  //     modalForm.classList.add("showModalForm");
  //   }

  window.location.href = "#bookingForm";
}

document.getElementById("pricing").querySelectorAll("button").forEach(btn =>{
  btn.onclick = () => openForm();
})
document.querySelector(".cta button").onclick = () => openForm();

// function closeForm() {
//     if (modalForm.classList.contains("showModalForm")) {
//         modalForm.classList.add("hideModalForm");
//         modalForm.classList.remove("showModalForm");
//       }

// }

window.onresize = () => {
  let nav = document.querySelector(".navigation");
  let navlist = document.querySelector(".list");

  if (window.innerWidth > 650) {
    navlist.classList.add("nav");
    navlist.classList.remove("list");
    nav.classList.remove("showmenu");
    nav.classList.add("hidemenu");
  }
};

function clickEvent() {
  let listm = document.querySelectorAll(".navigation a");
  let listn = document.querySelector(".navigation");

  listm.forEach((ele) => {
    ele.onclick = () => {
      listn.classList.add("hidemenu");
    };
  });
}

function openmenu() {
  let nav = document.querySelector(".navigation");
  let navbar = document.querySelector(".nav");
  let navlist = document.querySelector(".list");

  if (nav) {
    nav.classList.add("showmenu");
    nav.classList.remove("hidemenu");
  }

  if (navbar) {
    navbar.classList.add("list");
    navbar.classList.remove("nav");
  }

  if (navlist) {
    navlist.classList.add("nav");
    navlist.classList.remove("list");
    nav.classList.remove("showmenu");
    nav.classList.add("hidemenu");
  }
}

document.querySelector(".header .menu").onclick = () => openmenu();

function navbarSwitcher() {
  let navbar = document.querySelector(".header .nav");
  let header = document.querySelector(".header");
  let menu = document.querySelector(".menu");
  var previousPosition =
    window.pageYOffset || document.documentElement.scrollTop;

  window.onload = () => {
    menu.style.top = (navbar.getBoundingClientRect().height - 10) / 2 + "px";
    if (document.querySelector(".navigation").classList.contains("hidemenu")) {
      menu.style.top = (navbar.getBoundingClientRect().height - 10) / 2 + "px";
    } else {
      menu.style.top = (navbar.getBoundingClientRect().height - 270) / 2 + "px";
    }
  };

  window.onscroll = () => {
    if (window.scrollY > window.innerHeight - 100) {
      if (
        document.querySelector(".navigation").classList.contains("hidemenu")
      ) {
        navbar.classList.add("nav-event");
        menu.style.top =
          (navbar.getBoundingClientRect().height - 10) / 2 + "px";
      } else {
        menu.style.top =
          (navbar.getBoundingClientRect().height - 270) / 2 + "px";
      }

      var currentPosition =
        window.pageYOffset || document.documentElement.scrollTop;

      if (previousPosition > currentPosition) {
        header.classList.remove("nav-hide");
        if (
          document.querySelector(".navigation").classList.contains("hidemenu")
        ) {
          if (navbar.classList.contains("nav-event")) {
            setTimeout(() => {
              if (navbar.classList.contains("nav-event")) {
                header.classList.add("nav-hide");
              } else {
                header.classList.remove("nav-hide");
              }

              if (
                document
                  .querySelector(".navigation")
                  .classList.contains("hidemenu")
              ) {
                header.classList.add("nav-hide");
              } else {
                header.classList.remove("nav-hide");
              }
            }, 2000);
          } else {
            header.classList.remove("nav-hide");
          }
        } else {
          navbar.classList.remove("nav-hide");
        }
      } else {
        if (
          document.querySelector(".navigation").classList.contains("hidemenu")
        ) {
          if (navbar.classList.contains("nav-event")) {
            header.classList.add("nav-hide");
          } else {
            header.classList.remove("nav-hide");
          }
        } else {
          navbar.classList.remove("nav-hide");
        }
      }

      previousPosition = currentPosition;
    } else {
      navbar.classList.remove("nav-event");
      header.classList.remove("nav-hide");
      menu.style.top = (navbar.getBoundingClientRect().height - 10) / 2 + "px";
    }
  };
}
navbarSwitcher();

window.onload = () => {
  let menu = document.querySelector(".menu");
  clickEvent();
  menu.style.top = (navbar.getBoundingClientRect().height - 10) / 2 + "px";
};



var source = "+212655885107";
// send message to whatsapp api
document
  .querySelector(".messageForm form")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    var firstname = document.querySelector(
      '.usernameinput input[name="firstname"]'
    ).value;

    var lastname = document.querySelector(
      '.usernameinput input[name="lastname"]'
    ).value;

    var mail = document.querySelector(
      ".messageForm .emailinput input[name='email']"
    ).value;

    var message = document.querySelector(
      '.message textarea[name="message"]'
    ).value;
    var phone = document.querySelector('.phone input[name="phone"]').value;

    var messagecontent = `
      *New message*
      ---------------------
      *Firstname:* ${firstname}
      *Lastname:* ${lastname}
      *Email:* ${mail}
      *Phone:* ${phone}
      *Message:* ${message}
    `;

    var whatsappUrl =
      "https://api.whatsapp.com/send?phone=" +
      source +
      "&text=" +
      encodeURIComponent(
        messagecontent
      );

    window.open(whatsappUrl, "_blank");
  });


// send booking request to whatsapp api
document
  .querySelector(".bookingForm .form form")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission

    // Get the form field values
    var name = document.querySelector(".username input").value;
    var email = document.querySelector(".email input").value;
    var date = document.querySelector(".dateTime input").value;
    var phone = document.querySelector(".phone input").value;

    // Construct the WhatsApp message
    var messagecontent = `
      *New Booking Request*
      ---------------------
      *Name:* ${name}
      *Email:* ${email}
      *Date:* ${date}
      *Phone:* ${phone}
    `;

    // Construct the WhatsApp API URL
    var whatsappUrl = `https://api.whatsapp.com/send?phone=${source}&text=${encodeURIComponent(
      messagecontent
    )}`;

    // Open the WhatsApp URL in a new window
    window.open(whatsappUrl, "_blank");
  });

})