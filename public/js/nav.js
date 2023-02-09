const f3_pop = document.querySelector(".f3_pop");
const f1 = document.querySelector(".f1");
const f2 = document.querySelector(".f2");
const f_pop = document.querySelector(".f-pop-up");
const s_pop = document.querySelector(".s-pop-up");
const t_pop = document.querySelector(".t-pop-up");
const bdy = document.querySelector(".body");

f1.addEventListener("click", function () {
    if (f_pop.style.display == "grid") {
        f_pop.style.display = "none";
        s_pop.style.display = "none";
        t_pop.style.display = "none";
    } else {
        f_pop.style.display = "grid";
        s_pop.style.display = "none";
        t_pop.style.display = "none";
    }
});

f2.addEventListener("click", function () {
    if (s_pop.style.display == "grid") {
        s_pop.style.display = "none";
        f_pop.style.display = "none";
        t_pop.style.display = "none";
    } else {
        s_pop.style.display = "grid";
        f_pop.style.display = "none";
        t_pop.style.display = "none";
    }
});

f3_pop.addEventListener("click", function () {
    if (t_pop.style.display == "grid") {
        s_pop.style.display = "none";
        t_pop.style.display = "none";
        f_pop.style.display = "none";
    } else {
        s_pop.style.display = "none";
        f_pop.style.display = "none";
        t_pop.style.display = "grid";
    }
});

bdy.addEventListener("click", function (event) {
    if (
        event.target.className != "f1" &&
        event.target.className != "f2" &&
        event.target.className != "f3_pop"
    ) {
        s_pop.style.display = "none";
        f_pop.style.display = "none";
        t_pop.style.display = "none";
    }
});
