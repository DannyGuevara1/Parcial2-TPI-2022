function animals(v){
    if(v.value == 'mamiferos'){
        window.location.href = '?controller=Home&action=showHome';
    }
    if(v.value == 'aves'){
        window.location.href = '?controller=Ave&action=showAves';
    }
    if(v.value == 'reptiles'){
        window.location.href = '?controller=Reptil&action=showReptiles';
    }
    if(v.value == 'peces'){
        window.location.href = '?controller=Pece&action=showPeces';
    }
}