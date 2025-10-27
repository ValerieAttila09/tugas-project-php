document.addEventListener("DOMContentLoaded", (event) => {
  let sidebarActive = true;
  let profileDropdownActive = false;
  let showModal = false;
  const profileDropdownToggle = document.querySelectorAll("#profileToggle");
  const profileDropdown = document.getElementById("profileDropdown");
  const sidebarMenu = document.querySelectorAll("#sidebarMenu");
  const insertModal = document.getElementById("insertModal");
  const modalOverlay = document.getElementById("overlay");
  const insertModalToggle = document.querySelectorAll("#toggleInsertModal");

  gsap.set("#sidebar", {
    width: "240px",
  });
  gsap.set("#main", {
    width: "calc(100%-240px)",
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
  });
  gsap.set(insertModal, {
    opacity: 0,
    zIndex: -1,
  });
  gsap.set(modalOverlay, {
    opacity: 0,
    zIndex: -1,
  });


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
  });
  
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
        width: "240px",
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to("#main", {
        width: "calc(100% - 240px)",
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