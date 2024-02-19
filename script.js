let sections = gsap.utils.toArray(".window");

sections.forEach((section, index) => {
  let targets = gsap.utils.toArray(".sload", section);
  let dur = 1;

  targets.forEach((target, index) => {
      item = target;
      dur += 0.5
  
      gsap.to(item, {
          opacity: 1,
          y: 0,
          duration: dur,
          scrollTrigger: item,
      })
  })  
})

// Arrow up and down animation
const arrow = document.querySelectorAll("#arrowDown");

const tl = gsap.timeline({
  repeat: -1, // repeat infinitely
  repeatDelay: 1,
  yoyo: true,
});

tl.fromTo(arrow, { y: 0 }, { y: 40, duration: 1, ease: "circ.inOut",});

