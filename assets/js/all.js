// -----------------------------dropdown menu responsive------------------------
// toggle bouton
$('.toggle_btn').click(function() {
    $('.responsive_menu').toggleClass('responsive_menu_open');
});

// Evenement
document.querySelector('.responsive_btn_sous_menu_portfolio').onclick = function() {
    document.querySelector('.liste_sous_menu_portfolio').classList.toggle('liste_portfolio_show');
}

// -------------------------Scroller navbar------------------------------
$(window).scroll(function() {
    if (document.documentElement.scrollTop > 80) {
        $('body').addClass('body_scroll');
    }
    if (document.documentElement.scrollTop == 0) {
        $('body').removeClass('body_scroll');
    }
});