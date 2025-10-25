document.addEventListener("DOMContentLoaded", (event) => {
  let sidebarActive = true;
  let profileDropdownActive = false;
  const profileDropdownToggle = document.querySelectorAll("#profileToggle");
  const profileDropdown = document.getElementById("profileDropdown");
  const sidebarMenu = document.querySelectorAll("#sidebarMenu");

  gsap.set("#sidebar", {
    width: "20%",
  });
  gsap.set("#main", {
    width: "80%",
  });
  gsap.set(sidebarMenu, {
    width: "auto",
    opacity: 1,
    marginLeft: "6px",
  });
  gsap.set(profileDropdown, {
    opacity: 0,
    zIndex: -1,
    y: -20,
  })

  profileDropdownToggle.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      if (profileDropdownActive) {
        gsap.to(profileDropdown, {
          opacity: 0,
          onComplete: () => {
            profileDropdown.classList.add("hidden");
            gsap.to(profileDropdown, {
              zIndex: -1,
            })
          },
          y: -20,
          duration: 0.35,
          ease: "power2.out",
        })
        profileDropdownActive = !profileDropdownActive;
      } else {
        gsap.to(profileDropdown, {
          opacity: 1,
          onStart: () => {
            profileDropdown.classList.remove("hidden");
            gsap.to(profileDropdown, {
              zIndex: 1,
            })
          },
          y: 0,
          duration: 0.35,
          ease: "power2.out",
        })
        profileDropdownActive = !profileDropdownActive;
      }
    })
  })
  document.getElementById("sidebar-toggle").addEventListener("click", () => {
    if (sidebarActive) {
      gsap.to("#sidebar", {
        width: "5%",
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to("#main", {
        width: "95%",
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to(sidebarMenu, {
        width: "0%",
        opacity: 0,
        marginLeft: "0px",
        duration: 0.35,
        ease: "power2.out",
      });
      sidebarActive = !sidebarActive;
    } else {
      gsap.to("#sidebar", {
        width: "20%",
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to("#main", {
        width: "80%",
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to(sidebarMenu, {
        width: "auto",
        opacity: 1,
        marginLeft: "6px",
        duration: 0.35,
        ease: "power2.out",
      });
      sidebarActive = !sidebarActive;
    }
  });
});