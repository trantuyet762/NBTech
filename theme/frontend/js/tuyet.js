var GUI_2 = (function () {

  var menuDocument = function () {

    var menuItemsDocument = document.querySelectorAll(

      ".sidebar-document ul li"

    );

    menuItemsDocument.forEach(function (menuItemDocument) {

      var submenudocument = menuItemDocument.querySelector("ul");

      if (submenudocument)
{

        var span = document.createElement("span");

        span.className = "toggle-menu-document";

        span.innerHTML = '<i class="fa-solid fa-angle-down"></i>';

        span.addEventListener("click", function () {

          slideToggle(submenudocument, 400)

          span.classList.toggle("active");

          if (span.classList.contains("active"))
{

            span.innerHTML = '<i class="fa-solid fa-angle-up"></i>';

          } else
{

            span.innerHTML = '<i class="fa-solid fa-angle-down"></i>';

          }

        });

        menuItemDocument.appendChild(span);

      }

    });

  }



  //tabline course program

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

          "576": {

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

    if (document.querySelector('.swiper-document'))
{

      new Swiper('.swiper-document', {

        slidesPerView: 1,

        grid: {

          fill: 'row',

          rows: 1,

        },

        spaceBetween: 16,

        pagination: {

          el: ".swiper-document-pagination",

          dynamicBullets: true,

        },



        navigation: {

          nextEl: ".swiper-document-next",

          prevEl: ".swiper-document-prev",

        },

        breakpoints: {

          768: {

            slidesPerView: 2,

            grid: {

              fill: 'row',

              rows: 3,

            },

            pagination: {

              el: ".swiper-document-pagination",

              type: "progressbar",

            },

          },

          1280: {

            slidesPerView: 3,

            grid: {

              fill: 'row',

              rows: 3,

            },



          }



        },

      });

    }

  }



  //swiper khóa học

  var swiperCourseOutstanding = function () {

    var element = document.querySelector(".swiper-course-outstanding")

    if (element)
{

      new Swiper(element.querySelector(".swiper"), {

        spaceBetween: 24,

        navigation: {

          nextEl: element.querySelector(".swiper-course-outstanding-next"),

          prevEl: element.querySelector(".swiper-course-outstanding-prev"),

        },

        pagination: {

          el: ".swiper-course-outstandings-pagination",

          type: "bullets",

        },



        breakpoints: {

          1280: {

            slidesPerView: 3,

            pagination: {

              el: ".swiper-course-outstanding-pagination",

              type: "progressbar",

            },

          },

          768: {

            slidesPerView: 2,

            pagination: {

              el: ".swiper-course-outstandings-pagination",

              type: "bullets",

            },

          },

        },

      })

    }

  }

  // var swiperCourseOutstanding = function () {

  //   if (document.querySelector('.swiper-course-outstanding'))

  //   {

  //     new Swiper('.swiper-course-outstanding', {

  //       slidesPerView: 1,

  //       grid: {

  //         fill: 'row',

  //         rows: 1,

  //       },

  //       spaceBetween: 24,



  //       navigation: {

  //         nextEl: ".swiper-course-outstanding-next",

  //         prevEl: ".swiper-course-outstanding-prev",

  //       },

  //       pagination: {

  //         el: ".swiper-course-outstanding-pagination",

  //         dynamicBullets: true,

  //       },



  //       breakpoints: {



  //         1280: {

  //           slidesPerView: 3,

  //           pagination: {

  //             el: ".swiper-course-outstanding-pagination",

  //             type: "bullets",

  //           },



  //         },

  //         768:{

  //           slidesPerView: 2,

  //           pagination: {

  //             el: ".swiper-course-outstanding-pagination",

  //             type: "progressbar",

  //           },

  //         },



  //       },

  //     });

  //   }

  // }



  var swiperCourseFree = function () {

    if (document.querySelector('.swiper-course-free'))
{

      new Swiper('.swiper-course-free', {

        slidesPerView: 1,

        grid: {

          fill: 'row',

          rows: 1,

        },

        spaceBetween: 24,



        navigation: {

          nextEl: ".swiper-course-free-next",

          prevEl: ".swiper-course-free-prev",

        },

        pagination: {

          el: ".swiper-course-free-pagination",

          dynamicBullets: true,

        },



        breakpoints: {

          768: {

            slidesPerView: 2,



            pagination: {

              el: ".swiper-course-free-pagination",

              type: "progressbar",

            },

          },

          1280: {

            slidesPerView: 3,





          }



        },

      });

    }

  }



  //swiper document tabline

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



  /// click tab document page

  var clickTabDoc = function () {

    if (document.querySelectorAll(".module-tabs-document").length > 0)
{

      document.querySelectorAll(".module-tabs-document").forEach((module) => {

        var tabLinks = module.querySelectorAll(".tab-document-link")

        var tabContents = module.querySelectorAll(".tab-content-doc")

        var tabLinksItem = module.querySelectorAll(".tab-document-link-item")

        var tabContentsItem = module.querySelectorAll(".tab-content-doc-item")

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



  //click tab documnet detail

  var clickTabDocDetail = function () {

    if (document.querySelectorAll(".module-tabs-document-detail").length > 0)
{

      document.querySelectorAll(".module-tabs-document-detail").forEach((module) => {

        var tabLinks = module.querySelectorAll(".tab-document-detail-items");

        var tabContents = module.querySelectorAll(".document-detail-content-items");

        var underline = module.querySelector(".underline-tab-doc-detail");





        function setUnderline(element) {

          underline.style.width = `${element.offsetWidth}px`;

          underline.style.left = `${element.offsetLeft}px`;

        }

        setUnderline(module.querySelector(".tab-link.active"));

        tabLinks.forEach((tab) => {

          tab.addEventListener("click", function () {

            openTabContent(tab);

          });

        });



        function openTabContent(clickedTab) {

          tabLinks.forEach((tab) => tab.classList.remove("active"));

          tabContents.forEach((content) => content.classList.remove("active"));



          clickedTab.classList.add("active");



          var targetId = clickedTab.getAttribute("data-electronic");

          var targetContent = module.querySelector(`#${targetId}`);

          if (targetContent)
{

            targetContent.classList.add("active");

            setUnderline(clickedTab);

          }

        }

      });

    }

  };

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



  /////

  var swiperLecturerExpert = function () {

    if (document.querySelector('.swiper-lecturer-expert'))
{

      new Swiper('.swiper-lecturer-expert', {

        slidesPerView: 1,

        spaceBetween: 16,

        navigation: {

          nextEl: ".swiper-lecturer-expert-next",

          prevEl: ".swiper-lecturer-expert-prev",

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

  /// toggle ebook content





  //////



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



  var tabBookPaper = () => {

    const tabLinks = document.querySelectorAll(".tab-link-book-item");



    tabLinks.forEach((tab) => {

      tab.addEventListener("click", function () {

        tabLinks.forEach((tab) => tab.classList.remove("active"));

        this.classList.add("active");

      });

    });

  }

  return {

    _: function () {

      menuDocument();

      swiperOutstandingNews();

      swiperDocument();

      swiperDocumentTabline();

      clickTabDoc();

      swiperHighestRevenue();

      clickTabDocDetail();

      swiperCourseOutstanding();

      swiperCourseFree();

      sidebarSearchDetail();

      tabBookPaper();

      swiperLecturerExpert();

      tablineCourseProgram();

    },

  }

})()



document.addEventListener("DOMContentLoaded", function () {

  setTimeout(function () {

    GUI_2._()

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

document.querySelectorAll('.users-star-rate').forEach((star, index) => {

  star.addEventListener('click', () => {

    document.querySelectorAll('.users-star-rate').forEach((s) => {

      s.classList.remove('active');

    });

    for (let i = 0; i <= index; i++)
{

      document.querySelectorAll('.users-star-rate')[i].classList.add('active');

    }

  });

});