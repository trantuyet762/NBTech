var GUI = (function () {
  var menu = function () {
    var menuList = document.querySelectorAll(".menu__category-list > ul > li[data-menu-type]")
    var menuItem = document.querySelectorAll(".menu__category-list .menu-item")
    if (menuList.length > 0)
    {
      menuList.forEach(item => {
        item.addEventListener("mouseenter", function () {
          if (window.innerWidth > 768)
          {
            handleMenuCategory(item)
          }
        })
        item.addEventListener("click", function () {
          if (window.innerWidth <= 768)
          {
            handleMenuCategory(item)
          }
        })
      })
      function handleMenuCategory(item) {
        [...menuItem, ...menuList].forEach(item => item.classList.remove("active"))
        item.classList.add("active")
        document.querySelector(`.menu__category-list #${item.getAttribute("data-menu-type")}`).classList.add("active")
      }
    }
  }

  var fixedHeader = function () {
    if (document.querySelector("header"))
    {
      var header = document.querySelector("header");
      var scrollWatcher = document.querySelector(".header-scroll-watcher");

      function adjustBodyMargin() {
        var headerHeight = header.offsetHeight;
        var headerTopHeight = header.querySelector(".header__top").offsetHeight;
        var bottomMenuSidebarHeight = document.querySelector(".sidebar-menu-bottom").offsetHeight;
        document.querySelector("body").style.paddingTop = headerHeight + "px";
        document.querySelector("body").style.setProperty("--header-height", headerHeight + "px");
        document.querySelector("body").style.setProperty("--header-top-height", headerTopHeight + "px");
        document.querySelector("body").style.setProperty("--bottom-menu-sidebar-height", bottomMenuSidebarHeight + "px");
        header.classList.add("fixed-head");
      }

      function handleIntersection(entries) {
        entries.forEach(entry => {
          var headerTop = document.querySelector(".header__top");
          if (!entry.isIntersecting && window.innerWidth > 768)
          {
            headerTop.style.marginTop = `-${headerTop.offsetHeight}px`;
            header.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)'
          } else
          {
            headerTop.style.marginTop = '0';
            header.style.boxShadow = 'none'
          }
        });
      }

      adjustBodyMargin();
      var observer = new IntersectionObserver(handleIntersection, {
        root: null, // viewport,
        rootMargin: "10px",
        threshold: 0 // trigger as soon as even one pixel is visible
      });

      observer.observe(scrollWatcher);

      var resizeObserver = new ResizeObserver(() => {
        adjustBodyMargin();
      });
      resizeObserver.observe(header);
    }
  }

  var runWowJS = function () {
    if (document.querySelector(".wow"))
    {
      new WOW().init({
        mobile: true
      })
    }
  }

  var showPassword = function () {
    if (document.querySelector(".show-password"))
    {
      document.querySelectorAll(".show-password").forEach(function (item) {
        item.addEventListener("click", function () {
          if (item.querySelector("i").classList.contains("fa-eye-slash"))
          {
            item.querySelector("i").classList.add("fa-eye")
            item.querySelector("i").classList.remove("fa-eye-slash")
            item.querySelector("input").type = "text"
          } else
          {
            item.querySelector("i").classList.add("fa-eye-slash")
            item.querySelector("i").classList.remove("fa-eye")
            item.querySelector("input").type = "password"
          }
        })
      })
    }
  }

  var clickTab = function () {
    if (document.querySelectorAll(".module-tabs").length > 0)
    {
      document.querySelectorAll(".module-tabs").forEach((module) => {
        var tabLinks = module.querySelectorAll(".tab-link")
        var tabContents = module.querySelectorAll(".tab-content")
        var tabLinksItem = module.querySelectorAll(".tab-link-item")
        var tabContentsItem = module.querySelectorAll(".tab-content-item")
        tabLinks.forEach((el) => {
          el.addEventListener("click", function () {
            openTabContent(el)
            if (tabLinksItem.length)
            {
              // openTabItem(tabLinksItem[0])
            }
          })
        })

        tabLinksItem.forEach((el) => {
          el.addEventListener("click", function () {
            openTabItem(el)
          })
        })

        function openTabContent(btn) {
          tabContents.forEach((el) => {
            tabLinks.forEach((i) => i.classList.remove("active"))
            btn.classList.add("active")
            el.classList.remove("active")
            if (el.id === btn.getAttribute("data-electronic"))
            {
              el.classList.add("active")
            }
          })
        }

        function openTabItem(btn) {
          tabContentsItem.forEach((el) => {
            tabLinksItem.forEach((i) => i.classList.remove("active"))
            btn.classList.add("active")
            el.classList.remove("active")
            if (el.id === btn.getAttribute("data-electronic"))
            {
              el.classList.add("active")
            }
          })
        }

      })
    }
  }

  var backToTop = () => {
    var backToTopButton = document.querySelector(".btn-to-top")
    if (backToTopButton)
    {
      window.addEventListener("scroll", function () {
        if (window.scrollY > 600)
        {
          backToTopButton.style.display = "flex"
        } else
        {
          backToTopButton.style.display = "none"
        }
      })
      backToTopButton.addEventListener("click", function () {
        var scrollOptions = {
          top: 0,
          behavior: "smooth",
        }
        if ("scrollBehavior" in document.documentElement.style)
        {
          window.scrollTo(scrollOptions)
        } else
        {
          var scrollInterval = setInterval(function () {
            if (window.scrollY <= 0)
            {
              clearInterval(scrollInterval)
            } else
            {
              window.scrollBy(0, -20)
            }
          }, 16)
        }
        return false
      })
    }
  }

  var menuCategory = () => {
    var btn = document.querySelectorAll('.btn-menu-category')
    var menu = document.querySelector('.menu__category-list')
    var bgOverlay = document.querySelector('.bg-overlay')
    if (btn && menu)
    {
      [...btn, bgOverlay].forEach(function (item) {
        item.addEventListener('click', function () {
          menu.classList.toggle('active')
          if (item !== bgOverlay)
          {
            item.classList.toggle('active')
          }
          document.body.classList.toggle('disable-scroll')
          bgOverlay.classList.toggle('active')
        })
      })
    }
  }

  var openSearchModal = () => {
    if (document.querySelector(".modal-search"))
    {
      var btns = document.querySelectorAll(".btn-modal-search")
      btns.forEach((btn) => {
        btn.addEventListener("click", function () {
          document.querySelector(".modal-search").classList.toggle("active")
          document.body.classList.toggle("disable-scroll")
        })
      })
    }
  }

  var loadMap = function () {
    var map = document.getElementById("map")
    if (map)
    {
      var data = map.getAttribute("data-map")
      var frame = `<iframe src="${data}"></iframe>`
      setTimeout(function () {
        map.innerHTML = frame
      }, 1000)
    }
  }

  var faq = function () {
    var faqs = document.querySelectorAll(".faq")
    if (faqs)
    {
      faqs.forEach(faq => {
        faq.querySelector('.btn-faq').addEventListener("click", function () {
          faq.classList.toggle("active")
          slideToggle(faq.querySelector('.content-faq'))
        })
      })
    }
  }

  var categoryBlock = function () {
    var categoryBlock = document.querySelector(".category_block")
    var btn = document.querySelector(".btn-menu-category-type")
    if (categoryBlock && btn)
    {
      btn.addEventListener("click", function () {
        categoryBlock.classList.toggle("active")
        document.body.classList.toggle("disable-scroll")
        btn.classList.toggle("active")
      })
    }
  }

  var menuType = function () {
    var btn = document.querySelectorAll(".menu-type > ul > li")
    if (btn)
    {
      btn.forEach(item => {
        item.querySelector("span.btn-toggle-sub-menu").addEventListener("click", function () {
          slideToggle(item.querySelector("ul"))
          item.classList.toggle("active")
        })
      })
    }
  }

  var toggleSidebar = function () {
    var btn = document.querySelector(".btn-toggle-sidebar")
    if (btn)
    {
      [btn, document.querySelector(".bg-layout-sidebar")].forEach(item => {
        item.addEventListener("click", function () {
          document.querySelector(".sidebar-type").classList.toggle("active")
          document.querySelector(".bg-layout-sidebar").classList.toggle("active")
        })
      })
    }
  }

  var tablineCourseProgram = function () {
    var tablineItemsCourseProgram = document.querySelectorAll(
      ".tabline-items-course-program"
    );
    tablineItemsCourseProgram.forEach(function (tablineItemCourseProgram) {
      var subItemsCourseProgram = tablineItemCourseProgram.querySelector("ul");
      var toggleCourse = tablineItemCourseProgram.querySelector(".icon-course-program");
      if (subItemsCourseProgram && toggleCourse)
      {
        toggleCourse.addEventListener("click", function () {
          slideToggle(subItemsCourseProgram, 400);
          toggleCourse.classList.toggle("active");
        });
      }
    });
  };

  var listChapterCourse = function () {
    var listChapterCourse = document.querySelectorAll(".list-chapter-course .item")
    if (listChapterCourse.length > 0)
    {
      listChapterCourse.forEach(item => {
        item.querySelector("button").addEventListener("click", function () {
          slideToggle(item.querySelector(".content"))
        })
      })
    }
  }

  var rateStar = function () {
    var rateStars = document.querySelectorAll(".list-rate-rating .item");
    var inputRate = document.querySelector(".list-rate-rating input")
    if (rateStars)
    {
      rateStars.forEach((item, index) => {
        item.addEventListener("click", function () {
          rateStars.forEach((s) => {
            s.classList.remove("active");
          });
          for (let i = 0; i <= index; i++)
          {
            rateStars[i].classList.add("active");
          }
          inputRate.value = index + 1
        });
      })
    }
  }

  var runFancybox = function () {
    if (document.querySelector("[data-fancybox]"))
    {
      Fancybox.bind('[data-fancybox]', {});
    }
  }

  return {
    _: function () {
      menu()
      fixedHeader()
      runWowJS()
      showPassword()
      clickTab()
      backToTop()
      menuCategory()
      openSearchModal()
      loadMap()
      faq()
      categoryBlock()
      menuType()
      toggleSidebar()
      tablineCourseProgram()
      listChapterCourse()
      rateStar()
      runFancybox()
    },
  }
})()

var SLIDER = (function () {
  var sliderBannerHome = function () {
    var element = document.querySelector(".swiper-banner-home")
    if (element)
    {
      new Swiper(element.querySelector(".swiper"), {
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        speed: 1000,
        pagination: {
          el: ".swiper-pagination-banner",
          type: "fraction",
        },
        navigation: {
          nextEl: element.querySelector(".swiper-button-next-banner"),
          prevEl: element.querySelector(".swiper-button-prev-banner"),
        },
      })
    }
  }

  var sliderSaleBooks = function () {
    var element = document.querySelector(".swiper-sale-books")
    if (element)
    {
      new Swiper(element.querySelector(".swiper"), {
        slidesPerView: 1,
        spaceBetween: 16,
        navigation: {
          nextEl: element.querySelector(".swiper-next-book"),
          prevEl: element.querySelector(".swiper-prev-book"),
        },
        breakpoints: {
          1472: {
            slidesPerView: 4,
          },
          1280: {
            slidesPerView: 3.5,
          },
          1024: {
            slidesPerView: 2.8,
          },
          768: {
            slidesPerView: 2,
          },
        },
      })
    }
  }

  var sliderNewsHome = function () {
    var element = document.querySelector(".swiper-news-home")
    if (element)
    {
      new Swiper(element, {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination-news",
          clickable: true,
        },
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        speed: 1000,
        breakpoints: {
          1280: {
            slidesPerView: 4,
            spaceBetween: 24,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          450: {
            slidesPerView: 2,
            spaceBetween: 16,
          },
        },
      })
    }
  }

  var swiperCourseOutstanding = function () {
    var element = document.querySelectorAll(".swiper-course-outstanding")
    if (element.length > 0)
    {
      element.forEach(item => {
        new Swiper(item.querySelector(".swiper"), {
          spaceBetween: 24,
          navigation: {
            nextEl: item.querySelector(".swiper-course-outstanding-next"),
            prevEl: item.querySelector(".swiper-course-outstanding-prev"),
          },
          pagination: {
            el: item.querySelector(".swiper-pagination-bullets-course"),
            type: "bullets",
          },
          breakpoints: {
            1280: {
              slidesPerView: 3,
              pagination: {
                el: item.querySelector(".swiper-pagination-progressbar-course"),
                type: "progressbar",
              },
            },
            768: {
              slidesPerView: 2,
              pagination: {
                el: item.querySelector(".swiper-pagination-progressbar-course"),
                type: "progressbar",
              },
            },
          },
        })
      })
    }
  }

  var swiperOutstandingNews = function () {
    if (document.querySelector('.swiper-outstanding-news'))
    {
      new Swiper('.swiper-outstanding-news', {
        slidesPerView: 1,
        grid: {
          fill: 'row',
          rows: 1,
        },
        spaceBetween: 16,
        pagination: {
          el: ".swiper-news-outstanding-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-news-outstanding-next",
          prevEl: ".swiper-news-outstanding-prev",
        },
        breakpoints: {
          576: {
            slidesPerView: 2,
            grid: {
              fill: 'row',
              rows: 2,
            },
            pagination: {
              el: ".swiper-news-outstanding-pagination",
              type: "progressbar",
            },
          }
        },
      });
    }
  }

  var swiperDocument = function () {
    var element = document.querySelector('.swiper-document-outstanding')
    if (element)
    {
      new Swiper(element.querySelector(".swiper"), {
        slidesPerView: 1,
        grid: {
          fill: 'row',
          rows: 2,
        },
        spaceBetween: 16,
        pagination: {
          el: element.querySelector(".swiper-pagination-bullets-document"),
          type: "bullets",
        },
        navigation: {
          nextEl: element.querySelector(".swiper-document-outstanding-next"),
          prevEl: element.querySelector(".swiper-document-outstanding-prev"),
        },
        breakpoints: {
          1280: {
            slidesPerView: 3,
            grid: {
              fill: 'row',
              rows: 3,
            },
            pagination: {
              el: element.querySelector(".swiper-pagination-progressbar-document"),
              type: "progressbar",
            },
          },
          768: {
            slidesPerView: 2,
            grid: {
              fill: 'row',
              rows: 3,
            },
            pagination: {
              el: element.querySelector(".swiper-pagination-progressbar-document"),
              type: "progressbar",
            },
          },
          576: {
            slidesPerView: 2,
            grid: {
              fill: 'row',
              rows: 2,
            },
          }
        },
      });
    }
  }

  var swiperDocumentTabline = function () {
    if (document.querySelector('.swiper-document-tabline'))
    {
      new Swiper('.swiper-document-tabline', {
        slidesPerView: 2,
        spaceBetween: 16,
        navigation: {
          nextEl: ".swiper-document-tab-next",
          prevEl: ".swiper-document-tab-prev",
        },
        breakpoints: {
          "450": {
            slidesPerView: 3,
          },
          768: {
            slidesPerView: 4,
          },
          "1024": {
            slidesPerView: 5,
          },
          1280: {
            slidesPerView: 7,
          }
        },
      });
    }
  }

  var swiperHighestRevenue = function () {
    if (document.querySelector('.swiper-highest-revenue'))
    {
      new Swiper('.swiper-highest-revenue', {
        slidesPerView: 1,
        spaceBetween: 16,
        navigation: {
          nextEl: ".swiper-highest-revenue-next",
          prevEl: ".swiper-highest-revenue-prev",
        },
        breakpoints: {
          "576": {
            slidesPerView: 2,
          },
          "1024": {
            slidesPerView: 3,
          },
          1280: {
            slidesPerView: 4,
          }
        },
      });
    }
  }

  var swiperLecturerExpert = function () {
    var element = document.querySelector('.swiper-lecturer-expert')
    if (element)
    {
      new Swiper(element.querySelector(".swiper"), {
        slidesPerView: 1,
        spaceBetween: 16,
        navigation: {
          nextEl: element.querySelector(".swiper-lecturer-expert-next"),
          prevEl: element.querySelector(".swiper-lecturer-expert-prev"),
        },
        breakpoints: {
          "576": {
            slidesPerView: 2,
          },
          "1024": {
            slidesPerView: 3,
          },
          1280: {
            slidesPerView: 4,
          }
        },
      });
    }
  }

  var sidebarSearchDetail = () => {
    var btn = document.querySelector('.btn-toggle-sidebar-search')
    var sidebar = document.querySelector('.sidebar-search-detail')
    var bgOverlay = document.querySelector('.bg-overlay-search')
    if (btn && sidebar)
    {
      [btn, bgOverlay].forEach(function (item) {
        item.addEventListener('click', function () {
          sidebar.classList.toggle('active')
          document.body.classList.toggle('disable-scroll')
          bgOverlay.classList.toggle('active')
        })
      })
    }
  }

  var swiperBooksPage = function () {
    var elements = document.querySelectorAll('.swiper-books-page')
    if (elements.length > 0)
    {
      elements.forEach(element => {
        new Swiper(element.querySelector(".swiper"), {
          slidesPerView: 1,
          grid: {
            fill: 'row',
            rows: 2,
          },
          spaceBetween: 16,
          pagination: {
            el: element.querySelector(".swiper-pagination-bullets-books"),
            type: "bullets",
            clickable: true,
          },
          navigation: {
            nextEl: element.querySelector(".swiper-books-page-next"),
            prevEl: element.querySelector(".swiper-books-page-prev"),
          },
          breakpoints: {
            1280: {
              slidesPerView: 3,
              grid: {
                fill: 'row',
                rows: 2,
              },
              pagination: {
                el: element.querySelector(".swiper-pagination-progressbar-books"),
                type: "progressbar",
              },
            },
            768: {
              slidesPerView: 2,
              grid: {
                fill: 'row',
                rows: 2,
              },
              pagination: {
                el: element.querySelector(".swiper-pagination-progressbar-books"),
                type: "progressbar",
              },
            },
            576: {
              slidesPerView: 2,
              grid: {
                fill: 'row',
                rows: 2,
              },
            }
          },
        });
      })
    }
  }

  return {
    _: function () {
      sliderBannerHome()
      sliderSaleBooks()
      sliderNewsHome()
      swiperCourseOutstanding()
      sidebarSearchDetail()
      swiperOutstandingNews()
      swiperDocument()
      swiperDocumentTabline()
      swiperHighestRevenue()
      swiperLecturerExpert()
      swiperBooksPage()
    },
  }
})()

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    GUI._()
    SLIDER._()
  }, 100)
})

function slideToggle(element, duration = 300) {
  if (window.getComputedStyle(element).display === 'none')
  {
    return slideDown(element, duration);
  } else
  {
    return slideUp(element, duration);
  }
}

function slideUp(element, duration) {
  return new Promise(function (resolve) {
    element.style.height = element.offsetHeight + 'px';
    element.style.transitionProperty = 'height, margin, padding';
    element.style.transitionDuration = duration + 'ms';
    element.offsetHeight;
    element.style.overflow = 'hidden';
    element.style.height = 0;
    element.style.paddingTop = 0;
    element.style.paddingBottom = 0;
    element.style.marginTop = 0;
    element.style.marginBottom = 0;
    window.setTimeout(function () {
      element.style.display = 'none';
      element.style.removeProperty('height');
      element.style.removeProperty('padding-top');
      element.style.removeProperty('padding-bottom');
      element.style.removeProperty('margin-top');
      element.style.removeProperty('margin-bottom');
      element.style.removeProperty('overflow');
      element.style.removeProperty('transition-duration');
      element.style.removeProperty('transition-property');
      resolve(false);
    }, duration);
  });
}

function slideDown(element, duration) {
  return new Promise(function (resolve) {
    element.style.removeProperty('display');
    let display = window.getComputedStyle(element).display;
    if (display === 'none') display = 'block';
    element.style.display = display;
    let height = element.offsetHeight;
    element.style.overflow = 'hidden';
    element.style.height = 0;
    element.style.paddingTop = 0;
    element.style.paddingBottom = 0;
    element.style.marginTop = 0;
    element.style.marginBottom = 0;
    element.offsetHeight;
    element.style.transitionProperty = 'height, margin, padding';
    element.style.transitionDuration = duration + 'ms';
    element.style.height = height + 'px';
    element.style.removeProperty('padding-top');
    element.style.removeProperty('padding-bottom');
    element.style.removeProperty('margin-top');
    element.style.removeProperty('margin-bottom');
    window.setTimeout(function () {
      element.style.removeProperty('height');
      element.style.removeProperty('overflow');
      element.style.removeProperty('transition-duration');
      element.style.removeProperty('transition-property');
      resolve(true);
    }, duration);
  });
}

function showBlock() {
  document.querySelector('.recover-password-email').classList.toggle('hidden');
}

function toggleClassActive(attribute) {
  document.querySelectorAll(`.hidden-effect[data-active="${attribute}"]`).forEach(el => {
    el.classList.toggle('active')
  })
}

function toggleClassScroll() {
  document.body.classList.toggle('disable-scroll')
}

function toggleShowPayDocument() {
  if (document.querySelector('#pay-document').style.display === 'none')
  {
    document.querySelector('#pay-document').style.display = 'flex'
  } else
  {
    document.querySelector('#pay-document').style.display = 'none'
  }
}
