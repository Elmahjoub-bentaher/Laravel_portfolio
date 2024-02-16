let bars = document.querySelector("header nav .bars");
let barsI= document.querySelectorAll("header nav .bars i");
let ulLinks = document.querySelector("header nav .links");
let ulLinksLi = document.querySelectorAll("header nav .links li");

bars.onmouseover = () => {
    ulLinks.classList.add("display");
};

bars.onmouseleave = () => {
    ulLinks.classList.remove("display");
};

bars.addEventListener("click", () => {
    ulLinks.classList.toggle("show");
    barsI.forEach(i => {
        i.classList.toggle("show");
    });
});

ulLinksLi.forEach((li) => {
    li.addEventListener("click", () => {
        ulLinks.classList.toggle("show");
        barsI.forEach(i => {
            i.classList.toggle("show");
        });
    });
});

var aboutMargin = document.querySelector("main .about .container");

var computedStyle = window.getComputedStyle(aboutMargin);

var marginValueLeft = computedStyle.marginLeft;
document.documentElement.style.setProperty('--margin-main-left', marginValueLeft);

window.addEventListener("resize", () => {
    marginValueLeft = computedStyle.marginLeft;
    document.documentElement.style.setProperty('--margin-main-left', marginValueLeft);
});


// span fill

const langCerciles = new IntersectionObserver ((entries) => {
    for (let i = 0; i < entries.length; i++) {
        if (entries[i].isIntersecting) {
            setTimeout(() => {
                entries[i].target.className = "active";
            }, 100 * i);
        };
    };
});

const langSpans = document.querySelectorAll("main .about .container .info .languages .links li span.act");
langSpans.forEach((el) => langCerciles.observe(el));

const skillObserver = new IntersectionObserver ((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
            if (entry.target.classList.contains("show")) {
                entry.target.style.width = entry.target.dataset.width;
            };
        };
    });
});

const skillSpans = document.querySelectorAll("main .about .container .skill .progress span");

skillSpans.forEach((el) => skillObserver.observe(el));

const Observertest = new IntersectionObserver ((entries) => {
    for (let i = 0; i < entries.length; i++) {
        if (entries[i].isIntersecting) {
            setTimeout(() => {
                entries[i].target.classList.add("show")
            }, 500 * i)
        };
    }
});

const sideNav = document.querySelectorAll(".side_nav");

sideNav.forEach((el) => Observertest.observe(el));

const sideBox = document.querySelectorAll(".side_box");

sideBox.forEach((el) => Observertest.observe(el));

const header = document.querySelectorAll("header");

header.forEach((el) => Observertest.observe(el));

const main = document.querySelectorAll("main");

main.forEach((el) => Observertest.observe(el));

const timePEdu = document.querySelectorAll("main .education .exp");

timePEdu.forEach((el) => Observertest.observe(el));

const certificateBox = document.querySelectorAll("main .certificate .content .exp");

certificateBox.forEach((el) => Observertest.observe(el));

const academic = document.querySelectorAll("main .academic_projects .exp");

academic.forEach((el) => Observertest.observe(el));

const timePExp = document.querySelectorAll("main .experience .exp");

timePExp.forEach((el) => Observertest.observe(el));

// pop up

const popUp = document.querySelector(".pop_up");

const popUpClose = document.querySelector(".pop_up span");

const viewBtn = document.querySelectorAll("main .portfolio .container .pics .img .txt button");

viewBtn.forEach((btn) => {
    btn.addEventListener("click", e => {
        popUp.classList.add("show");
    })
})

popUpClose.onclick = () => {
    popUp.classList.remove('show');
}

let portfolioViewBtn = document.querySelectorAll("main .portfolio .container .pics .img .txt button");

let popUpImg = document.querySelector(".pop_up .pop_up_wrapper .img img");

portfolioViewBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        let srcImg = btn.parentElement.parentElement.previousElementSibling.getAttribute("src");
        popUpImg.setAttribute("src", srcImg);
    });
});

let imgheight = document.querySelectorAll("main .portfolio .container .pics .img");

imgheight.forEach((img) => {
    let childImg = img.firstElementChild;
    img.addEventListener("mouseover", () => {
        childImg.style.transform = "translateY(calc(-100% + 400px))";
        childImg.style.transition = "5s linear";
    })
    img.addEventListener("mouseout", () => {
        childImg.style.transform = "translateY(0)"
        childImg.style.transition = "0s linear";
    })
});