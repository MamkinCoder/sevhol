window.addEventListener('load', function() {
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = 'css/chromium-animation.css';
    document.head.appendChild(link);
  });

var cleave = new Cleave('.formatted-phone', {
    phone: true,
    phoneRegionCode: 'RU'
});

var cleave2 = new Cleave('.formatted-phoneCard', {
    phone: true,
    phoneRegionCode: 'RU'
});

function toastErrorColorChange() {
    document.getElementById('liveToast').className = "toast align-items-center text-bg-info text-light";
}
// const myModal = new bootstrap.Modal('#hookModal', {
//      keyboard: false
// })
// myModal.show()
const myModalEl = document.getElementById('callbackModal')
myModalEl.addEventListener('show.bs.modal', event => {
    var coin = document.getElementById('coin');
    confetti({
        particleCount: 50,
        angle: 60,
        spread: 55,
        origin: { x: 0 },
    });
    confetti({
        particleCount: 50,
        angle: 120,
        spread: 55,
        origin: { x: 1 },
    });
    coin.style.display = 'none'
})
myModalEl.addEventListener('hide.bs.modal', event => {
    var coin = document.getElementById('coin')
    coin.style.display = 'block'
})

function applyClass() {
  document.getElementById("callbackCard").classList.add("d-none");
}

//animate on scroll
var targets = document.querySelectorAll('.aos');
var targetActiveClass = 'target-is-active';

// Call this function when it enters/leaves the viewport
var callback = function(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add(targetActiveClass);
        } else {
            entry.target.classList.remove(targetActiveClass);
        }
    })
};

var blur_bg = function(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            document.querySelector(".parallax_wrapper").classList.add(targetActiveClass);
            document.querySelector(".callme").classList.add(targetActiveClass)
        } else {
            document.querySelector(".parallax_wrapper").classList.remove(targetActiveClass);
            document.querySelector(".callme").classList.remove(targetActiveClass)
        }
    })
};

var blur_bg_easy = function(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            document.querySelector(".callme").classList.add(targetActiveClass)
        } else {
            document.querySelector(".callme").classList.remove(targetActiveClass)
        }
    })
};


// Create our observer
var observer = new IntersectionObserver(callback, {root: document.querySelector(".parallax_wrapper"), threshold: 0, rootMargin: "0% 0px -50% 0px"});
var navbar_observer = new IntersectionObserver(callback, {root: document.querySelector(".parallax_wrapper"), threshold: 0, rootMargin: "0px 0px -100% 0px"});
var bgblur_observer = new IntersectionObserver(blur_bg, {root: document.querySelector(".parallax_wrapper"), threshold: 0, rootMargin: "0px 0px -50% 0px"});
var bgblureasy_observer = new IntersectionObserver(blur_bg_easy, {root: document.querySelector(".parallax_wrapper"), threshold: 0, rootMargin: "0px 0px -50% 0px"});
var we_observer = new IntersectionObserver(callback, {root: document.querySelector(".parallax_wrapper"), threshold: 0, rootMargin: "-30% 0px -20% 0px"});
navbar_observer.observe(document.querySelector("#navbar-aos"))
bgblur_observer.observe(document.querySelector(".bgblur"))
bgblureasy_observer.observe(document.querySelector(".bgblur-easy"))
we_observer.observe(document.querySelector("#we"))
we_observer.observe(document.querySelector("#price"))
targets.forEach(target => {
    observer.observe(target)
})
