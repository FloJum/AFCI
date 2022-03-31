AOS.init();

/* -------------------------------------------------------------------------- */
/*                     navbar qui s'efface quand on scroll vers le bas                    */
/* -------------------------------------------------------------------------- */
let lastScrollTop = 0;
navbar = document.getElementById('navbarre');

window.addEventListener('scroll', function() {
    const scrollTop = window.pageTOffset ||
        this.document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-60px"; //
    } else { navbar.style.top = "0"; }
    lastScrollTop = scrollTop;
});

/* -------------------------------------------------------------------------- */
/*       recup de l'info supp des champs de compétence (overflow hidden)      */
/* -------------------------------------------------------------------------- */

function openText1() {
    const rps = document.getElementById("rp");
    rps.style.overflow = "initial";
}
document.getElementById("btnrp").addEventListener("click", openText1);

function openText2() {
    const evente = document.getElementById("event");
    evente.style.overflow = "initial";
}
document.getElementById("btnevent").addEventListener("click", openText2);

function openText3() {
    const digitale = document.getElementById("digital");
    digitale.style.overflow = "initial";
}
document.getElementById("btndigital").addEventListener("click", openText3);

function openText4() {
    const sponsor = document.getElementById("sponsoring");
    sponsor.style.overflow = "initial";

}
document.getElementById("btnsponsoring").addEventListener("click", openText4);