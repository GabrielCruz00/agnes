window.console = window.console || function (t) {};

if (document.location.search.match(/type=embed/gi)) {
  window.parent.postMessage("resize", "*");
}

function typing() {
  if ($(".text-slider-noloop").length == 1) {
    var typed_strings = $(".text-slider-items-noloop").text();
    var typed = new Typed(".text-slider-noloop", {
      strings: typed_strings.split("."),
      typeSpeed: 50,
      loop: false,
      showCursor: false,
      onComplete: typingloop,
    });
  }
}

function typingloop() {
  if ($(".text-slider").length == 1) {
    var typed_strings = $(".text-slider-items").text();
    var typed = new Typed(".text-slider", {
      strings: typed_strings.split(","),
      typeSpeed: 45,
      loop: true,
      backDelay: 900,
      backSpeed: 40,
    });
  }
}

const getCurrentYear = () => {
  const d = new Date();
  return d.getFullYear();
};

const setYearIdentifierSpan = () => {
  const printYearInDOM = document.getElementById("yearIdentifier");
  printYearInDOM.innerText = getCurrentYear();
};

const SocialNetworks = [
  { name: "Twitter", url: "https://twitter.com/RogooZero" },
  { name: "Github", url: "https://github.com/Rogoo2" },
  {
    name: "Linktr",
    url: "https://linktr.ee/rogoowhat",
  },
  { name: "Discord", url: "https://discord.gg/nMg9uADC" },
  { name: "Correo", url: "mailto:rodrigomorelos54@aragon.unam.mx" },
];

function setSocialNetworksInHTML() {
  const tagSocialNetworks = document.getElementById("socialNetworks");
  var innerHtmlSocialNetworks = "";
  SocialNetworks.forEach((social) => {
    let socialTemp;
    if (social.name === "Twitter") {
      socialTemp = `<a href= "${social.url}" target= "_blank" class="social--burbble" style="background-color: #0EAADC;">${social.name}</a>`;
    } else if (social.name === "Github") {
      socialTemp = `<a href= "${social.url}" target= "_blank" class="social--burbble" style="background-color: rgb(97,81,126);">${social.name}</a>`;
    } else if (social.name === "Linktr") {
      socialTemp = `<a href= "${social.url}" target= "_blank" class="social--burbble" style="background-color: #0B66C3;">${social.name}</a>`;
    } else if (social.name === "Correo") {
      socialTemp = `<a href= "${social.url}" target= "_blank" class="social--burbble" style="background-color: rgb(153,83,130)">${social.name}</a>`;
    } else if (social.name === "Discord") {
      socialTemp = `<a href= "${social.url}" target= "_blank" class="social--burbble" style="background-color: #5764F0;">${social.name}</a>`;
    }
    innerHtmlSocialNetworks = innerHtmlSocialNetworks + socialTemp;
  });
  tagSocialNetworks.innerHTML = innerHtmlSocialNetworks;
}

document.addEventListener("DOMContentLoaded", function (e) {
  setSocialNetworksInHTML();
  setYearIdentifierSpan();
  typing();
});
