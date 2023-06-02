// PAGE D'ACCUEIL
ScrollReveal({ 
    //reset: true,
    distance: '120px',
    duration: 2000,
    delay: 200 
  });
  
  ScrollReveal().reveal('.biere, .fruit1, .titre_section_biere, .pimage', { origin: 'top' });
  ScrollReveal().reveal('.boutique_accueil, video, .p7', { origin: 'bottom' });
  ScrollReveal().reveal('.fruit2, .fruit3, .p1, .p3, .p5', { origin: 'left' });
  ScrollReveal().reveal('.fruit4, .home-content, .p2, .p4, .p6', { origin: 'right' });
  
  
  const typed = new Typed('.multiple-text', {
    strings: ['Rio de Janeiro', 'Venise', 'Dunkerque', 'Pékin', 'Santa-Cruz', 'Cap-Vert', 'Mexico'],
    typeSpeed: 50,
    backSpeed: 50,
    typeDelay: 500,
    loop: true
  });