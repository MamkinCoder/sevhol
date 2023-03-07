var cleave = new Cleave('.formatted-phone', {
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
const myModalEl = document.getElementById('exampleModal')
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

// Create our observer
var observer = new IntersectionObserver(callback, {root: document.querySelector(".parallax_wrapper"), threshold: 0, rootMargin: "0% 0px -70% 0px"});
var navbar_observer = new IntersectionObserver(callback, {root: document.querySelector(".parallax_wrapper"), threshold: 0, rootMargin: "0px 0px -99% 0px"});
var bgblur_observer = new IntersectionObserver(callback, {root: document.querySelector(".parallax_wrapper"), threshold: 0, rootMargin: "0px 0px -100% 0px"});
var we_observer = new IntersectionObserver(callback, {root: document.querySelector(".parallax_wrapper"), threshold: 0, rootMargin: "-40% 0px -20% 0px"});
navbar_observer.observe(document.querySelector("#navbar-aos"))
bgblur_observer.observe(document.querySelector(".bgblur"))
we_observer.observe(document.querySelector("#we"))
targets.forEach(target => {
    observer.observe(target)
})
