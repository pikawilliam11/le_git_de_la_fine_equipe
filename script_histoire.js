//Animation d'Émile
        gsap.registerPlugin(ScrollTrigger);

        gsap.timeline({
            scrollTrigger:{
            pin: true,
            scrub: 1,
            start: 'center center',
            end: '300% center',
            toggleActions: 'play complete reverse reset',
            trigger: ".ouverture",
            },
        })
        .to(".texteOuverture", {
            opacity:0,
            y:"-25%",
            stagger:0.2,
        ease: "circ",
        })

        .to(".fleurTotale", {
            rotation: "360deg",
            scale:1,
            y:"-50%",
            ease: "power2",
        }, '<')

        .to(".fno1", {
            rotation: "360deg",
            scale:1.5,
            ease: "none",
        }, '>')
            
        .to(".fno2", {
        rotation: "-360deg",
            scale:2,
        ease: "none",
        }, '<')
            
        .to(".fno3", {
            rotation: "360deg",
            scale:2.5,
        ease: "none",
        }, '<')
            
        .to(".fno4", {
            rotation: "-360deg",
            scale:3,
        ease: "none",
        }, '<')

        gsap.timeline({
            scrollTrigger:{
            scrub:1,
            start: 'top bottom',
            end: 'center center',
            toggleActions: 'play complete reverse reverse',
            trigger: ".section1980",
            },
        })

        .to(".fleurTotale", {
            y:"-140%",
            ease: "none",
        })

        .fromTo(".fno1", {
            rotation: "0deg",
        }, {
            rotation: "360deg",
            ease: "none",
        }, '<')

        .fromTo(".fno2", {
            rotation: "0deg",
        },{
            rotation: "-360deg",
            ease: "none",
        }, '<')

        .fromTo(".fno3", {
            rotation: "0deg",
        }, {
            rotation: "360deg",
            ease: "none",
        }, '<')

        .fromTo(".fno4", {
            rotation: "0deg",
        }, {
            rotation: "360deg",
            ease: "none",
        }, '<')



        gsap.timeline({
            scrollTrigger:{
            pin: true,
            scrub: 1,
            start: 'center center',
            end: 'bottom center',
            toggleActions: 'play complete reverse reset',
            trigger: ".section1980",
            },
        })
        .from("pasCiel.no3", {
            y:"100%",
            duration:1.5,
        })
        .from("pasCiel.no5", {
            y:"100%",
        duration:1.5,
        }, '<0.5')
        .from("pasCiel.no7", {
            y:"100%",
        duration:1.5,
        }, '<0.5')

        gsap.timeline({
            scrollTrigger:{
            pin: true,
            scrub: 1,
            start: '50.1% center',
            end: '200% center',
            toggleActions: 'play complete reverse reset',
            trigger: ".section1980",
            },
        })
        .to(".texte1980", {  
            y:"-122%",
        }, '>') 

//Animation de William

/*gsap.registerPlugin(ScrollTrigger);

gsap.timeline({
    scrollTrigger:{
    pin: true,
    scrub: 1,
    start: 'center center',
    end: 'bottom center',
    toggleActions: 'play complete reverse reset',
    trigger: ".wrapper",
      },
  })

  .from(".eau-1", {
    y:"100%",
    duration: 1.5,
  })

  .from(".terre-1", {
    y:"100%",
    duration: 5.0,
  },'< 2')

  gsap.timeline({       
    scrollTrigger: {
      trigger: '.wrapper',
      scrub: 1,
      pin: true,
      markers: true,
      start: '60% center',
      end: '200% center',
      toggleActions: 'play complete reverse reset',
    },
  })
  .to(".texte1990", {  
      y:"-120%",
    })

    gsap.registerPlugin(ScrollTrigger);

    gsap.timeline({
        scrollTrigger:{
        pin: true,
        scrub: 1,
        start: 'center center',
        end: 'bottom center',
        toggleActions: 'play complete reverse reset',
        trigger: ".wrapper",
          },
      })
    
      .from(".eau-2-wd", {
        y:"100%",
        duration: 1.5,
      })
    
      .from(".montagne-part-1-wd", {
        y:"100%",
        duration: 1.5,
      },'< 2')
    
      .from(".montagne-part-2-wd", {
        y:"100%",
        duration: 1.5,
      },'< 2')
    
      gsap.timeline({       
        scrollTrigger: {
          trigger: '.wrapper',
          scrub: 1,
          pin: true,
          markers: true,
          start: '60% center',
          end: '200% center',
          toggleActions: 'play complete reverse reset',
        },
      })
      .to(".texte2000", {  
          y:"-120%",
        })




//Animation de Jeremy
gsap.registerPlugin(ScrollTrigger);


gsap.timeline({
    scrollTrigger:{
    pin: true,
    pinSpacing: false,
    scrub: 1,
    start: 'center center',
    end: 'bottom center',
    toggleActions: 'play complete reverse reset',
    trigger: ".section2010",
      },
  })
  .from("boite2010.no3", {
    rotateX: "-90deg",
    duration:2,
  })
  .from("boite2010.no2", {
    rotateX: "-90deg",
    duration:2,
  }, '<1')


  gsap.timeline({
    scrollTrigger:{
    markers: true,
    pin: true,
    scrub: 1,
    start: '50.1% center',
    end: '200% center',
    toggleActions: 'play complete reverse reset',
    trigger: ".section2010",
      },
  })
  .to(".texte2010", {  
    y:"-122%",
  }, '>')

    


gsap.timeline({
    scrollTrigger:{
    pin: true,
    scrub: 1,
    start: 'center center',
    end: '300% center',
    toggleActions: 'play complete reverse reset',
    trigger: ".fermeture",
      },
  })

  .to(".texteFermeture", {
    opacity:0,
    y:"-25%",
    stagger:0.2,
  ease: "circ",
  })

  .to(".fleurTotale", {
    rotation: "360deg",
    scale:1,
    y:"-50%",
    ease: "power2",
  }, '<')

  .to(".fs1", {
    rotation: "360deg",
    scale:1.5,
    ease: "none",
  }, '>')
    
  .to(".fs2", {
   rotation: "-360deg",
    scale:2,
  ease: "none",
  }, '<')
    
  .to(".fs3", {
    rotation: "360deg",
    scale:2.5,
  ease: "none",
  }, '<')
    
  .to(".fs4", {
    rotation: "-360deg",
    scale:3,
  ease: "none",
  }, '<')

gsap.timeline({
    scrollTrigger:{
    scrub:1,
    pin:true,
    start: 'start start',
    end: '300% center',
    toggleActions: 'play complete reverse reverse',
    trigger: ".wrapper2010",
      },
  })

 .to(".bigGirl", {
    scale:0.5,
    
  })

.to(".fleurPrincipale", {
    rotation: "0deg",
  }, {
    rotation: "360deg",
    ease: "none",
  }, '<')


.to(".fs1", {
    scale:0.5,
  
  })

.to(".fs4", {
    scale:0.5,
 
  })

  .to(".fs3", {
    scale:0.5,
  
  })

  .to(".fs2", {
    scale:0.5,
  
  })
.to(".fleurSecondaire", {
    rotation: "360deg",
  
  })
.to(".texteFermeture", {
    opacity: 100,
  
  })

  gsap.registerPlugin(ScrollTrigger);

  gsap.timeline({
      scrollTrigger:{
      scrub:1,
      pin:true,
      start: 'start start',
      end: '300% center',
      toggleActions: 'play complete reverse reverse',
      trigger: ".wrapper2010",
        },
    })
  
   .to(".bigGirl", {
      scale:0.5,
      
    })
  
  .to(".fleurPrincipale", {
      rotation: "0deg",
    }, {
      rotation: "360deg",
      ease: "none",
    }, '<')
  
  
  .to(".fs1", {
      scale:0.5,
    
    })
  
  .to(".fs4", {
      scale:0.5,
   
    })
  
    .to(".fs3", {
      scale:0.5,
    
    })
  
    .to(".fs2", {
      scale:0.5,
    
    })
  .to(".fleurSecondaire", {
      rotation: "360deg",
    
    })
  .to(".texteFermeture", {
      opacity: 100,
    
    })*/
  









