(() => {
  const body = document.body;
  const hamburger = document.querySelector(".hamburger");
  const mobileNav = document.querySelector(".mobile-nav");
  const backdrop = document.querySelector(".mobile-nav-backdrop");

  if (!hamburger || !mobileNav) {
    return;
  }

  const focusableSelector = "a, button, input, select, textarea, [tabindex]:not([tabindex='-1'])";

  const setMenuState = (isOpen) => {
    hamburger.setAttribute("aria-expanded", String(isOpen));
    hamburger.setAttribute("aria-label", isOpen ? "メニューを閉じる" : "メニューを開く");
    mobileNav.classList.toggle("is-open", isOpen);
    backdrop?.classList.toggle("is-open", isOpen);
    body.classList.toggle("is-menu-open", isOpen);

    if (isOpen) {
      const firstFocusable = mobileNav.querySelector(focusableSelector);
      firstFocusable?.focus();
    }
  };

  hamburger.addEventListener("click", () => {
    const isOpen = hamburger.getAttribute("aria-expanded") === "true";
    setMenuState(!isOpen);
  });

  backdrop?.addEventListener("click", () => {
    setMenuState(false);
  });

  mobileNav.addEventListener("click", (event) => {
    const link = event.target.closest("a");
    if (link) {
      setMenuState(false);
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      setMenuState(false);
      hamburger.focus();
    }
  });
})();

(() => {
  const tabs = document.querySelectorAll("[data-faq-tab]");
  const panels = document.querySelectorAll("[data-faq-panel]");

  if (!tabs.length || !panels.length) {
    return;
  }

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      const target = tab.dataset.faqTab;

      tabs.forEach((item) => {
        const isActive = item === tab;
        item.classList.toggle("is-active", isActive);
        item.setAttribute("aria-selected", String(isActive));
      });

      panels.forEach((panel) => {
        const isActive = panel.dataset.faqPanel === target;
        panel.classList.toggle("is-active", isActive);
        panel.hidden = !isActive;
      });
    });
  });
})();

(() => {
  const form = document.querySelector("[data-contact-form]");

  if (!form) {
    return;
  }

  form.addEventListener("submit", (event) => {
    event.preventDefault();
    console.log("Contact form submitted", Object.fromEntries(new FormData(form)));
    alert("送信しました。（テスト環境のため実際には送信されません）");
    form.reset();
  });
})();

(() => {
  const tabs = document.querySelectorAll("[data-contact-tab]");
  const panels = document.querySelectorAll("[data-contact-panel]");

  if (!tabs.length || !panels.length) {
    return;
  }

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      const target = tab.dataset.contactTab;

      tabs.forEach((item) => {
        const isActive = item === tab;
        item.classList.toggle("is-active", isActive);
        item.setAttribute("aria-selected", String(isActive));
      });

      panels.forEach((panel) => {
        const isActive = panel.dataset.contactPanel === target;
        panel.classList.toggle("is-active", isActive);
        panel.hidden = !isActive;
      });
    });
  });
})();

(() => {
  const startYear = 2025;
  const currentYear = new Date().getFullYear();

  document.querySelectorAll("[data-copyright-range]").forEach((element) => {
    const elementStart = Number.parseInt(element.dataset.copyrightStart, 10);
    const fromYear = Number.isNaN(elementStart) ? startYear : elementStart;
    element.textContent =
      currentYear <= fromYear ? String(fromYear) : `${fromYear}〜${currentYear}`;
  });
})();

(() => {
  const animatedElements = document.querySelectorAll("[data-animate]");

  if (!animatedElements.length) {
    return;
  }

  const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (prefersReducedMotion) {
    animatedElements.forEach((element) => {
      element.classList.add("is-visible");
    });
    return;
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return;
        }

        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target);
      });
    },
    {
      root: null,
      rootMargin: "0px 0px -10% 0px",
      threshold: 0.12,
    },
  );

  animatedElements.forEach((element) => {
    observer.observe(element);
  });
})();

(() => {
  const nav = document.querySelector("[data-shop-nav]");

  if (!nav) {
    return;
  }

  const links = nav.querySelectorAll("[data-shop-link]");
  const header = document.querySelector(".site-header");

  const getScrollOffset = () => (header?.offsetHeight ?? 64) + 16;

  const setActiveLink = (targetId) => {
    links.forEach((link) => {
      const isActive = link.dataset.shopLink === targetId;
      link.classList.toggle("is-active", isActive);

      if (isActive) {
        link.setAttribute("aria-current", "true");
      } else {
        link.removeAttribute("aria-current");
      }
    });
  };

  const scrollToShop = (targetId) => {
    const target = document.getElementById(targetId);

    if (!target) {
      return;
    }

    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    const top = target.getBoundingClientRect().top + window.scrollY - getScrollOffset();

    window.scrollTo({
      top,
      behavior: prefersReducedMotion ? "auto" : "smooth",
    });

    setActiveLink(targetId);
    history.replaceState(null, "", `#${targetId}`);
  };

  links.forEach((link) => {
    link.addEventListener("click", (event) => {
      event.preventDefault();
      scrollToShop(link.dataset.shopLink);
    });
  });

  const hashTarget = window.location.hash.slice(1);

  if (hashTarget && nav.querySelector(`[data-shop-link="${hashTarget}"]`)) {
    window.requestAnimationFrame(() => {
      scrollToShop(hashTarget);
    });
  }
})();
