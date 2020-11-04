gsap.registerPlugin(ScrollTrigger);

gsap.timeline({
    scrollTrigger:{
    pin: true,
    scrub: 1,
    start: 'top top',
    end: '300% center',
    toggleActions: 'play complete reverse reset',
    trigger: ".fondListe",
      },
})
   .to(".listeOrganismes", {  
    y:"-100%",
  })
