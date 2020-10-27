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
        .from(".no3", {
            y:"100%",
            duration:1.5,
        })
        .from(".no5", {
            y:"100%",
        duration:1.5,
        }, '<0.5')
        .from(".no7", {
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

gsap.registerPlugin(ScrollTrigger);

gsap.timeline({
    scrollTrigger:{
    markers: true,
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
        markers: true,
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

