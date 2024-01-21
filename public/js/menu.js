
document.addEventListener('DOMContentLoaded', function() {
    console.log('estou funcioanndo')
    var btn_exp1 = document.getElementById('btn-expandir');
    var btn_exp2 = document.getElementById('btn-esconder');
    var menu_lat = document.getElementsById('menu-bar');

    btn_exp1.addEventListener('click', function() {
        menu_lat.classList.add('expandir');
    });

    btn_exp2.addEventListener('click', function() {
        menu_lat.classList.remove('expandir');
    });
});