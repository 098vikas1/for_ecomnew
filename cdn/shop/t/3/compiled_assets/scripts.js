(function() {
    var __sections__ = {};
    (function() {
        for (var i = 0, s = document.getElementById("sections-script").getAttribute("data-sections").split(","); i < s.length; i++) __sections__[s[i]] = !0
    })(),
    function() {
        if (!(!__sections__["brand-tab-block"] && !window.DesignMode)) try {
            class BrandsTab extends HTMLElement {
                constructor() {
                    super(), this.tabTitle = this.querySelector(".tab-title"), this.tabContent = this.querySelector(".tab-panel-content");
                    const ele = this.querySelectorAll("[tab-title-action]"),
                        actionLoadMore = this.querySelectorAll("[data-load-more-block]");
                    this.widthWindow = 0, ele.length && ele.forEach(button => button.addEventListener("click", this.onActive.bind(this))), actionLoadMore.length && actionLoadMore.forEach(button => button.addEventListener("click", this.onLoadMore.bind(this)))
                }
                onActive(e) {
                    this.tabTitle.querySelector(".active").classList.remove("active"), this.tabContent.querySelector(".active").classList.remove("active"), this.querySelector(e.target.dataset.target).classList.add("active"), e.target.parentElement.classList.add("active")
                }
                onLoadMore(e) {
                    if (this.resize(), this.widthWindow > 1024) var eleHide = e.target.parentElement.querySelectorAll(".hidden-lg"),
                        _number = e.target.dataset.rowlg,
                        _class = "hidden-lg";
                    else if (this.widthWindow > 551) var eleHide = e.target.parentElement.querySelectorAll(".hidden-md"),
                        _number = 9,
                        _class = "hidden-md";
                    else var eleHide = e.target.parentElement.querySelectorAll(".hidden-sm"),
                        _number = 6,
                        _class = "hidden-sm";
                    if (eleHide.length)
                        if (e.target.classList.contains("more")) {
                            for (let i = 0; i < eleHide.length; i++) eleHide[i].classList.remove("show");
                            e.target.querySelector("span").textContent = e.target.dataset.buttonmore, e.target.classList.remove("more")
                        } else {
                            for (let i = 0; i < eleHide.length; i++) eleHide[i].classList.add("show");
                            e.target.querySelector("span").textContent = e.target.dataset.buttonless, e.target.classList.add("more")
                        }
                }
                resize() {
                    this.widthWindow = window.innerWidth
                }
            }
            customElements.define("brand-tab", BrandsTab)
        } catch (e) {
            console.error(e)
        }
    }(),
    function() {
        if (__sections__["header-02"]) try {
            class StickyHeader extends HTMLElement {
                constructor() {
                    super()
                }
                connectedCallback() {
                    this.header = document.getElementById("shopify-section-header-02"), this.header_1 = document.querySelector(".enable_parallax"), this.header_1 != null ? this.heightEle = this.header_1.clientHeight : this.heightEle = this.header.clientHeight, this.headerBottom = document.querySelector(".header-bottom").clientHeight, this.headerBounds = {}, this.currentScrollTop = 0, this.check = !1, this.hideOnScroll = this.dataset.hideOnScroll, this.onScrollHandler = this.onScroll.bind(this), window.addEventListener("scroll", this.onScrollHandler, !1), this.createObserver()
                }
                disconnectedCallback() {
                    window.removeEventListener("scroll", this.onScrollHandler)
                }
                createObserver() {
                    let observer = new IntersectionObserver((entries, observer2) => {
                        this.headerBounds = entries[0].intersectionRect, observer2.disconnect()
                    });
                    this.header_1 != null ? observer.observe(this.header_1) : observer.observe(this.header)
                }
                onScroll() {
                    (this.header_1 == null || this.header_1 == "") && (this.style.height = `${this.header.clientHeight}px`);
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    !this.check || scrollTop == 0 ? !document.body.classList.contains("cart-sidebar-show") && !document.body.classList.contains("sticky-search-open") && (scrollTop > this.currentScrollTop && scrollTop > this.heightEle ? (this.header_1 != null && (this.header_1.style.transform = `translateY(-${this.header_1.clientHeight}px)`), this.hideOnScroll == "true" ? requestAnimationFrame(this.hide.bind(this)) : requestAnimationFrame(this.reveal2.bind(this))) : scrollTop < this.currentScrollTop && scrollTop > this.heightEle ? (requestAnimationFrame(this.reveal.bind(this)), this.header_1 != null && (this.header_1.style.transform = "translateY(0)")) : scrollTop - (this.heightEle - this.headerBottom) <= this.headerBounds.top && (requestAnimationFrame(this.reset.bind(this)), this.header_1 != null && (this.header_1.style.transform = "translateY(0)")), this.check = !0, this.currentScrollTop = scrollTop) : this.check = !1
                }
                hide() {
                    this.header.classList.add("shopify-section-header-hidden", "shopify-section-header-sticky"), document.body.classList.add("scroll-down"), document.body.classList.remove("scroll-up"), this.closeMenuDisclosure()
                }
                reveal() {
                    this.header.classList.add("shopify-section-header-sticky", "animate"), this.header.classList.remove("shopify-section-header-hidden"), document.body.classList.add("scroll-up"), document.body.classList.remove("scroll-down")
                }
                reveal2() {
                    this.header.classList.add("shopify-section-header-sticky", "animate", "slide-down")
                }
                reset() {
                    this.header.classList.remove("shopify-section-header-hidden", "shopify-section-header-sticky", "animate"), document.body.classList.remove("scroll-down", "scroll-up")
                }
                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll("details-disclosure"), this.disclosures.forEach(disclosure => disclosure.close())
                }
            }
            customElements.define("sticky-header", StickyHeader)
        } catch (e) {
            console.error(e)
        }
    }(),
    function() {
        if (__sections__["header-03"]) try {
            class StickyHeader extends HTMLElement {
                constructor() {
                    super()
                }
                connectedCallback() {
                    this.header = document.getElementById("shopify-section-header-03"), this.headerBottom = document.querySelector(".header-bottom").clientHeight, this.headerBounds = {}, this.currentScrollTop = 0, this.check = !1, this.hideOnScroll = this.dataset.hideOnScroll, this.onScrollHandler = this.onScroll.bind(this), window.addEventListener("scroll", this.onScrollHandler, !1), this.createObserver()
                }
                disconnectedCallback() {
                    window.removeEventListener("scroll", this.onScrollHandler)
                }
                createObserver() {
                    new IntersectionObserver((entries, observer2) => {
                        this.headerBounds = entries[0].intersectionRect, observer2.disconnect()
                    }).observe(this.header)
                }
                onScroll() {
                    this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    this.check ? this.check = !1 : !document.body.classList.contains("cart-sidebar-show") && !document.body.classList.contains("sticky-search-open") && (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight ? this.hideOnScroll == "true" ? requestAnimationFrame(this.hide.bind(this)) : requestAnimationFrame(this.reveal2.bind(this)) : scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight ? requestAnimationFrame(this.reveal.bind(this)) : scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top && requestAnimationFrame(this.reset.bind(this)), this.check = !0, this.currentScrollTop = scrollTop)
                }
                hide() {
                    this.header.classList.add("shopify-section-header-hidden", "shopify-section-header-sticky"), document.body.classList.add("scroll-down"), document.body.classList.remove("scroll-up"), this.closeMenuDisclosure()
                }
                reveal() {
                    this.header.classList.add("shopify-section-header-sticky", "animate"), this.header.classList.remove("shopify-section-header-hidden"), document.body.classList.add("scroll-up"), document.body.classList.remove("scroll-down")
                }
                reveal2() {
                    this.header.classList.add("shopify-section-header-sticky", "animate", "slide-down")
                }
                reset() {
                    this.header.classList.remove("shopify-section-header-hidden", "shopify-section-header-sticky", "animate"), document.body.classList.remove("scroll-down", "scroll-up")
                }
                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll("details-disclosure"), this.disclosures.forEach(disclosure => disclosure.close())
                }
            }
            customElements.define("sticky-header", StickyHeader)
        } catch (e) {
            console.error(e)
        }
    }(),
    function() {
        if (__sections__["header-04"]) try {
            class StickyHeader extends HTMLElement {
                constructor() {
                    super()
                }
                connectedCallback() {
                    this.header = document.getElementById("shopify-section-header-04"), this.headerBottom = document.querySelector(".header-bottom").clientHeight, this.HeaderAnnouncement = document.getElementById("shopify-section-announcement-bar").clientHeight, this.headerBounds = {}, this.currentScrollTop = 0, this.check = !1, this.hideOnScroll = this.dataset.hideOnScroll, this.onScrollHandler = this.onScroll.bind(this), window.addEventListener("scroll", this.onScrollHandler, !1), this.createObserver()
                }
                disconnectedCallback() {
                    window.removeEventListener("scroll", this.onScrollHandler)
                }
                createObserver() {
                    new IntersectionObserver((entries, observer2) => {
                        this.headerBounds = entries[0].intersectionRect, observer2.disconnect()
                    }).observe(this.header)
                }
                onScroll() {
                    this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (document.getElementById("shopify-section-announcement-bar") && this.HeaderAnnouncement > 0) var headerHeight = this.header.clientHeight + this.HeaderAnnouncement;
                    else var headerHeight = this.header.clientHeight;
                    this.check ? this.check = !1 : !document.body.classList.contains("cart-sidebar-show") && !document.body.classList.contains("sticky-search-open") && (scrollTop > this.currentScrollTop && scrollTop > headerHeight ? this.hideOnScroll == "true" ? requestAnimationFrame(this.hide.bind(this)) : requestAnimationFrame(this.reveal2.bind(this)) : scrollTop < this.currentScrollTop && scrollTop > headerHeight ? requestAnimationFrame(this.reveal.bind(this)) : scrollTop - (headerHeight - this.headerBottom) <= this.headerBounds.top && requestAnimationFrame(this.reset.bind(this)), this.check = !0, this.currentScrollTop = scrollTop)
                }
                hide() {
                    this.header.classList.add("shopify-section-header-hidden", "shopify-section-header-sticky"), document.body.classList.add("scroll-down"), document.body.classList.remove("scroll-up"), this.closeMenuDisclosure(), $(".header-04").hasClass("style_3") || $(".vertical-menu").addClass("hide")
                }
                reveal() {
                    this.header.classList.add("shopify-section-header-sticky", "animate"), this.header.classList.remove("shopify-section-header-hidden"), document.body.classList.add("scroll-up"), document.body.classList.remove("scroll-down")
                }
                reveal2() {
                    this.header.classList.add("shopify-section-header-sticky", "animate", "slide-down")
                }
                reset() {
                    this.header.classList.remove("shopify-section-header-hidden", "shopify-section-header-sticky", "animate"), document.body.classList.remove("scroll-down", "scroll-up"), $(".header-04").hasClass("style_3") || $(".vertical-menu").hasClass("open") && $(".vertical-menu").removeClass("hide")
                }
                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll("details-disclosure"), this.disclosures.forEach(disclosure => disclosure.close())
                }
            }
            customElements.define("sticky-header", StickyHeader)
        } catch (e) {
            console.error(e)
        }
    }(),
    function() {
        if (__sections__["header-05"]) try {
            class StickyHeader extends HTMLElement {
                constructor() {
                    super()
                }
                connectedCallback() {
                    this.header = document.getElementById("shopify-section-header-05"), this.header_1 = document.querySelector(".enable_parallax"), this.header_1 != null ? this.heightEle = this.header_1.clientHeight : this.heightEle = this.header.clientHeight, this.headerBottom = document.querySelector(".header-bottom").clientHeight, this.headerBounds = {}, this.currentScrollTop = 0, this.check = !1, this.hideOnScroll = this.dataset.hideOnScroll, this.onScrollHandler = this.onScroll.bind(this), window.addEventListener("scroll", this.onScrollHandler, !1), this.createObserver()
                }
                disconnectedCallback() {
                    window.removeEventListener("scroll", this.onScrollHandler)
                }
                createObserver() {
                    let observer = new IntersectionObserver((entries, observer2) => {
                        this.headerBounds = entries[0].intersectionRect, observer2.disconnect()
                    });
                    this.header_1 != null ? observer.observe(this.header_1) : observer.observe(this.header)
                }
                onScroll() {
                    (this.header_1 == null || this.header_1 == "") && (this.style.height = `${this.header.clientHeight}px`);
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    !this.check || scrollTop == 0 ? !document.body.classList.contains("cart-sidebar-show") && !document.body.classList.contains("sticky-search-open") && (scrollTop > this.currentScrollTop && scrollTop > this.heightEle ? (this.header_1 != null && (this.header_1.style.transform = `translateY(-${this.header_1.clientHeight}px)`), this.hideOnScroll == "true" ? requestAnimationFrame(this.hide.bind(this)) : requestAnimationFrame(this.reveal2.bind(this))) : scrollTop < this.currentScrollTop && scrollTop > this.heightEle ? (requestAnimationFrame(this.reveal.bind(this)), this.header_1 != null && (this.header_1.style.transform = "translateY(0)")) : scrollTop - (this.heightEle - this.headerBottom) <= this.headerBounds.top && (requestAnimationFrame(this.reset.bind(this)), this.header_1 != null && (this.header_1.style.transform = "translateY(0)")), this.check = !0, this.currentScrollTop = scrollTop) : this.check = !1
                }
                hide() {
                    this.header.classList.add("shopify-section-header-hidden", "shopify-section-header-sticky"), document.body.classList.add("scroll-down"), document.body.classList.remove("scroll-up"), this.closeMenuDisclosure()
                }
                reveal() {
                    this.header.classList.add("shopify-section-header-sticky", "animate"), this.header.classList.remove("shopify-section-header-hidden"), document.body.classList.add("scroll-up"), document.body.classList.remove("scroll-down")
                }
                reveal2() {
                    this.header.classList.add("shopify-section-header-sticky", "animate", "slide-down")
                }
                reset() {
                    this.header.classList.remove("shopify-section-header-hidden", "shopify-section-header-sticky", "animate"), document.body.classList.remove("scroll-down", "scroll-up")
                }
                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll("details-disclosure"), this.disclosures.forEach(disclosure => disclosure.close())
                }
            }
            customElements.define("sticky-header", StickyHeader)
        } catch (e) {
            console.error(e)
        }
    }(),
    function() {
        if (__sections__["header-06"]) try {
            class StickyHeader extends HTMLElement {
                constructor() {
                    super()
                }
                connectedCallback() {
                    this.header = document.getElementById("shopify-section-header-06"), this.headerBottom = document.querySelector(".header-bottom").clientHeight, this.headerBounds = {}, this.currentScrollTop = 0, this.check = !1, this.hideOnScroll = this.dataset.hideOnScroll, this.onScrollHandler = this.onScroll.bind(this), this.onResizeHandler = this.onResize.bind(this), window.addEventListener("scroll", this.onScrollHandler, !1), window.addEventListener("resize", this.onResizeHandler), this.createObserver(), this.onResizeHandler()
                }
                disconnectedCallback() {
                    window.removeEventListener("resize", this.onResizeHandler), window.removeEventListener("scroll", this.onScrollHandler)
                }
                createObserver() {
                    new IntersectionObserver((entries, observer2) => {
                        this.headerBounds = entries[0].intersectionRect, observer2.disconnect()
                    }).observe(this.header)
                }
                onResize() {
                    this.style.height = `${this.querySelector("header.header").clientHeight}px`
                }
                onScroll() {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (this.check) this.check = !1;
                    else {
                        if (window.innerWidth > 1200 && document.querySelector(".layout_search--style2")) {
                            const openDetailsElement = this.querySelector("details[open]");
                            if (openDetailsElement) {
                                const summaryElement = openDetailsElement.querySelector("summary");
                                openDetailsElement.removeAttribute("open"), summaryElement.focus(), document.body.classList.remove("open_search")
                            }
                        }!document.body.classList.contains("cart-sidebar-show") && !document.body.classList.contains("sticky-search-open") && (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight ? this.hideOnScroll == "true" ? requestAnimationFrame(this.hide.bind(this)) : requestAnimationFrame(this.reveal2.bind(this)) : scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight ? requestAnimationFrame(this.reveal.bind(this)) : scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top && requestAnimationFrame(this.reset.bind(this)), this.check = !0, this.currentScrollTop = scrollTop)
                    }
                }
                hide() {
                    this.header.classList.add("shopify-section-header-hidden", "shopify-section-header-sticky"), document.body.classList.add("scroll-down"), document.body.classList.remove("scroll-up"), this.closeMenuDisclosure()
                }
                reveal() {
                    this.header.classList.add("shopify-section-header-sticky", "animate"), this.header.classList.remove("shopify-section-header-hidden"), document.body.classList.add("scroll-up"), document.body.classList.remove("scroll-down")
                }
                reveal2() {
                    this.header.classList.add("shopify-section-header-sticky", "animate", "slide-down")
                }
                reset() {
                    this.header.classList.remove("shopify-section-header-hidden", "shopify-section-header-sticky", "animate"), document.body.classList.remove("scroll-down", "scroll-up")
                }
                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll("details-disclosure"), this.disclosures.forEach(disclosure => disclosure.close())
                }
            }
            customElements.define("sticky-header", StickyHeader)
        } catch (e) {
            console.error(e)
        }
    }(),
    function() {
        if (__sections__["header-07"]) try {
            class StickyHeader extends HTMLElement {
                constructor() {
                    super()
                }
                connectedCallback() {
                    this.header = document.getElementById("shopify-section-header-07"), this.headerBottom = document.querySelector(".header-bottom").clientHeight, this.headerBounds = {}, this.currentScrollTop = 0, this.check = !1, this.hideOnScroll = this.dataset.hideOnScroll, this.onScrollHandler = this.onScroll.bind(this), this.onResizeHandler = this.onResize.bind(this), window.addEventListener("scroll", this.onScrollHandler, !1), window.addEventListener("resize", this.onResizeHandler), this.createObserver(), this.onResizeHandler()
                }
                disconnectedCallback() {
                    window.removeEventListener("scroll", this.onScrollHandler), window.removeEventListener("resize", this.onResizeHandler)
                }
                createObserver() {
                    new IntersectionObserver((entries, observer2) => {
                        this.headerBounds = entries[0].intersectionRect, observer2.disconnect()
                    }).observe(this.header)
                }
                onResize() {
                    this.style.height = `${this.querySelector("header.header").clientHeight}px`
                }
                onScroll() {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    this.check ? this.check = !1 : !document.body.classList.contains("cart-sidebar-show") && !document.body.classList.contains("sticky-search-open") && (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight ? this.hideOnScroll == "true" ? requestAnimationFrame(this.hide.bind(this)) : requestAnimationFrame(this.reveal2.bind(this)) : scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight ? requestAnimationFrame(this.reveal.bind(this)) : scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top && requestAnimationFrame(this.reset.bind(this)), this.check = !0, this.currentScrollTop = scrollTop)
                }
                hide() {
                    this.header.classList.add("shopify-section-header-hidden", "shopify-section-header-sticky"), document.body.classList.add("scroll-down"), document.body.classList.remove("scroll-up"), this.closeMenuDisclosure()
                }
                reveal() {
                    this.header.classList.add("shopify-section-header-sticky", "animate"), this.header.classList.remove("shopify-section-header-hidden"), document.body.classList.add("scroll-up"), document.body.classList.remove("scroll-down")
                }
                reveal2() {
                    this.header.classList.add("shopify-section-header-sticky", "animate", "slide-down")
                }
                reset() {
                    this.header.classList.remove("shopify-section-header-hidden", "shopify-section-header-sticky", "animate"), document.body.classList.remove("scroll-down", "scroll-up")
                }
                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll("details-disclosure"), this.disclosures.forEach(disclosure => disclosure.close())
                }
            }
            customElements.define("sticky-header", StickyHeader)
        } catch (e) {
            console.error(e)
        }
    }(),
    function() {
        if (__sections__["header-08"]) try {
            class StickyHeader extends HTMLElement {
                constructor() {
                    super()
                }
                connectedCallback() {
                    this.header = document.getElementById("shopify-section-header-08"), this.headerBottom = document.querySelector(".header-bottom").clientHeight, this.headerBounds = {}, this.currentScrollTop = 0, this.check = !1, this.hideOnScroll = this.dataset.hideOnScroll, this.onScrollHandler = this.onScroll.bind(this), window.addEventListener("scroll", this.onScrollHandler, !1), this.createObserver()
                }
                disconnectedCallback() {
                    window.removeEventListener("scroll", this.onScrollHandler)
                }
                createObserver() {
                    new IntersectionObserver((entries, observer2) => {
                        this.headerBounds = entries[0].intersectionRect, observer2.disconnect()
                    }).observe(this.header)
                }
                onScroll() {
                    this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    this.check ? this.check = !1 : !document.body.classList.contains("cart-sidebar-show") && !document.body.classList.contains("sticky-search-open") && (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight ? this.hideOnScroll == "true" ? requestAnimationFrame(this.hide.bind(this)) : requestAnimationFrame(this.reveal2.bind(this)) : scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight ? requestAnimationFrame(this.reveal.bind(this)) : scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top && requestAnimationFrame(this.reset.bind(this)), this.check = !0, this.currentScrollTop = scrollTop)
                }
                hide() {
                    this.header.classList.add("shopify-section-header-hidden", "shopify-section-header-sticky"), document.body.classList.add("scroll-down"), document.body.classList.remove("scroll-up"), this.closeMenuDisclosure()
                }
                reveal() {
                    this.header.classList.add("shopify-section-header-sticky", "animate"), this.header.classList.remove("shopify-section-header-hidden"), document.body.classList.add("scroll-up"), document.body.classList.remove("scroll-down")
                }
                reveal2() {
                    this.header.classList.add("shopify-section-header-sticky", "animate", "slide-down")
                }
                reset() {
                    this.header.classList.remove("shopify-section-header-hidden", "shopify-section-header-sticky", "animate"), document.body.classList.remove("scroll-down", "scroll-up")
                }
                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll("details-disclosure"), this.disclosures.forEach(disclosure => disclosure.close())
                }
            }
            customElements.define("sticky-header", StickyHeader)
        } catch (e) {
            console.error(e)
        }
    }(),
    function() {
        if (__sections__["header-09"]) try {
            class StickyHeader extends HTMLElement {
                constructor() {
                    super()
                }
                connectedCallback() {
                    this.header = document.getElementById("shopify-section-header-09"), this.heightEle = this.header.clientHeight, this.headerBottom = document.querySelector(".header-bottom").clientHeight, this.headerBounds = {}, this.currentScrollTop = 0, this.check = !1, this.hideOnScroll = this.dataset.hideOnScroll, this.onScrollHandler = this.onScroll.bind(this), window.addEventListener("scroll", this.onScrollHandler, !1), this.createObserver()
                }
                disconnectedCallback() {
                    window.removeEventListener("scroll", this.onScrollHandler)
                }
                createObserver() {
                    new IntersectionObserver((entries, observer2) => {
                        this.headerBounds = entries[0].intersectionRect, observer2.disconnect()
                    }).observe(this.header)
                }
                onScroll() {
                    this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    this.check ? this.check = !1 : !document.body.classList.contains("cart-sidebar-show") && !document.body.classList.contains("sticky-search-open") && (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight ? this.hideOnScroll == "true" ? requestAnimationFrame(this.hide.bind(this)) : requestAnimationFrame(this.reveal2.bind(this)) : scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight ? requestAnimationFrame(this.reveal.bind(this)) : scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top && requestAnimationFrame(this.reset.bind(this)), this.check = !0, this.currentScrollTop = scrollTop)
                }
                hide() {
                    this.header.classList.add("shopify-section-header-hidden", "shopify-section-header-sticky"), document.body.classList.add("scroll-down"), document.body.classList.remove("scroll-up"), this.closeMenuDisclosure()
                }
                reveal() {
                    this.header.classList.add("shopify-section-header-sticky", "animate"), this.header.classList.remove("shopify-section-header-hidden"), document.body.classList.add("scroll-up"), document.body.classList.remove("scroll-down")
                }
                reveal2() {
                    this.header.classList.add("shopify-section-header-sticky", "animate", "slide-down")
                }
                reset() {
                    this.header.classList.remove("shopify-section-header-hidden", "shopify-section-header-sticky", "animate"), document.body.classList.remove("scroll-down", "scroll-up")
                }
                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll("details-disclosure"), this.disclosures.forEach(disclosure => disclosure.close())
                }
            }
            customElements.define("sticky-header", StickyHeader)
        } catch (e) {
            console.error(e)
        }
    }(),
    function() {
        if (__sections__["header-10"]) try {
            class StickyHeader extends HTMLElement {
                constructor() {
                    super()
                }
                connectedCallback() {
                    this.header = document.getElementById("shopify-section-header-10"), this.headerBottom = document.querySelector(".header-bottom").clientHeight, this.headerBounds = {}, this.currentScrollTop = 0, this.check = !1, this.hideOnScroll = this.dataset.hideOnScroll, this.onScrollHandler = this.onScroll.bind(this), window.addEventListener("scroll", this.onScrollHandler, !1), this.createObserver()
                }
                disconnectedCallback() {
                    window.removeEventListener("scroll", this.onScrollHandler)
                }
                createObserver() {
                    new IntersectionObserver((entries, observer2) => {
                        this.headerBounds = entries[0].intersectionRect, observer2.disconnect()
                    }).observe(this.header)
                }
                onScroll() {
                    this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    this.check ? this.check = !1 : !document.body.classList.contains("cart-sidebar-show") && !document.body.classList.contains("sticky-search-open") && (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight ? this.hideOnScroll == "true" ? requestAnimationFrame(this.hide.bind(this)) : requestAnimationFrame(this.reveal2.bind(this)) : scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight ? requestAnimationFrame(this.reveal.bind(this)) : scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top && requestAnimationFrame(this.reset.bind(this)), this.check = !0, this.currentScrollTop = scrollTop)
                }
                hide() {
                    this.header.classList.add("shopify-section-header-hidden", "shopify-section-header-sticky"), document.body.classList.add("scroll-down"), document.body.classList.remove("scroll-up"), this.closeMenuDisclosure()
                }
                reveal() {
                    this.header.classList.add("shopify-section-header-sticky", "animate"), this.header.classList.remove("shopify-section-header-hidden"), document.body.classList.add("scroll-up"), document.body.classList.remove("scroll-down")
                }
                reveal2() {
                    this.header.classList.add("shopify-section-header-sticky", "animate", "slide-down")
                }
                reset() {
                    this.header.classList.remove("shopify-section-header-hidden", "shopify-section-header-sticky", "animate"), document.body.classList.remove("scroll-down", "scroll-up")
                }
                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll("details-disclosure"), this.disclosures.forEach(disclosure => disclosure.close())
                }
            }
            customElements.define("sticky-header", StickyHeader)
        } catch (e) {
            console.error(e)
        }
    }(),
    function() {
        if (__sections__["header-11"]) try {
            class StickyHeader extends HTMLElement {
                constructor() {
                    super()
                }
                connectedCallback() {
                    this.header = document.getElementById("shopify-section-header-11"), this.heightEle = this.header.clientHeight, this.headerBottom = document.querySelector(".header-bottom").clientHeight, this.headerBounds = {}, this.currentScrollTop = 0, this.check = !1, this.hideOnScroll = this.dataset.hideOnScroll, this.onScrollHandler = this.onScroll.bind(this), window.addEventListener("scroll", this.onScrollHandler, !1), this.createObserver()
                }
                disconnectedCallback() {
                    window.removeEventListener("scroll", this.onScrollHandler)
                }
                createObserver() {
                    new IntersectionObserver((entries, observer2) => {
                        this.headerBounds = entries[0].intersectionRect, observer2.disconnect()
                    }).observe(this.header)
                }
                onScroll() {
                    this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    this.check ? this.check = !1 : !document.body.classList.contains("cart-sidebar-show") && !document.body.classList.contains("sticky-search-open") && (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight ? this.hideOnScroll == "true" ? requestAnimationFrame(this.hide.bind(this)) : requestAnimationFrame(this.reveal2.bind(this)) : scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight ? requestAnimationFrame(this.reveal.bind(this)) : scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top && requestAnimationFrame(this.reset.bind(this)), this.check = !0, this.currentScrollTop = scrollTop)
                }
                hide() {
                    this.header.classList.add("shopify-section-header-hidden", "shopify-section-header-sticky"), document.body.classList.add("scroll-down"), document.body.classList.remove("scroll-up"), this.closeMenuDisclosure()
                }
                reveal() {
                    this.header.classList.add("shopify-section-header-sticky", "animate"), this.header.classList.remove("shopify-section-header-hidden"), document.body.classList.add("scroll-up"), document.body.classList.remove("scroll-down")
                }
                reveal2() {
                    this.header.classList.add("shopify-section-header-sticky", "animate", "slide-down")
                }
                reset() {
                    this.header.classList.remove("shopify-section-header-hidden", "shopify-section-header-sticky", "animate"), document.body.classList.remove("scroll-down", "scroll-up")
                }
                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll("details-disclosure"), this.disclosures.forEach(disclosure => disclosure.close())
                }
            }
            customElements.define("sticky-header", StickyHeader)
        } catch (e) {
            console.error(e)
        }
    }(),
    function() {
        if (__sections__["header-12"]) try {
            class StickyHeader extends HTMLElement {
                constructor() {
                    super()
                }
                connectedCallback() {
                    this.header = document.getElementById("shopify-section-header-12"), this.heightEle = this.header.clientHeight, this.headerBottom = document.querySelector(".header-bottom").clientHeight, this.headerBounds = {}, this.currentScrollTop = 0, this.check = !1, this.hideOnScroll = this.dataset.hideOnScroll, this.onScrollHandler = this.onScroll.bind(this), window.addEventListener("scroll", this.onScrollHandler, !1), this.createObserver()
                }
                disconnectedCallback() {
                    window.removeEventListener("scroll", this.onScrollHandler)
                }
                createObserver() {
                    let observer = new IntersectionObserver((entries, observer2) => {
                        this.headerBounds = entries[0].intersectionRect, observer2.disconnect()
                    });
                    this.header_1 != null ? observer.observe(this.header_1) : observer.observe(this.header)
                }
                onScroll() {
                    (this.header_1 == null || this.header_1 == "") && (this.style.height = `${this.header.clientHeight}px`);
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    !this.check || scrollTop == 0 ? !document.body.classList.contains("cart-sidebar-show") && !document.body.classList.contains("sticky-search-open") && (scrollTop > this.currentScrollTop && scrollTop > this.heightEle ? (this.header_1 != null && (this.header_1.style.transform = `translateY(-${this.header_1.clientHeight}px)`), this.hideOnScroll == "true" ? requestAnimationFrame(this.hide.bind(this)) : requestAnimationFrame(this.reveal2.bind(this))) : scrollTop < this.currentScrollTop && scrollTop > this.heightEle ? (requestAnimationFrame(this.reveal.bind(this)), this.header_1 != null && (this.header_1.style.transform = "translateY(0)")) : scrollTop - (this.heightEle - this.headerBottom) <= this.headerBounds.top && (requestAnimationFrame(this.reset.bind(this)), this.header_1 != null && (this.header_1.style.transform = "translateY(0)")), this.check = !0, this.currentScrollTop = scrollTop) : this.check = !1
                }
                hide() {
                    this.header.classList.add("shopify-section-header-hidden", "shopify-section-header-sticky"), document.body.classList.add("scroll-down"), document.body.classList.remove("scroll-up"), this.closeMenuDisclosure()
                }
                reveal() {
                    this.header.classList.add("shopify-section-header-sticky", "animate"), this.header.classList.remove("shopify-section-header-hidden"), document.body.classList.add("scroll-up"), document.body.classList.remove("scroll-down")
                }
                reveal2() {
                    this.header.classList.add("shopify-section-header-sticky", "animate", "slide-down")
                }
                reset() {
                    this.header.classList.remove("shopify-section-header-hidden", "shopify-section-header-sticky", "animate"), document.body.classList.remove("scroll-down", "scroll-up")
                }
                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll("details-disclosure"), this.disclosures.forEach(disclosure => disclosure.close())
                }
            }
            customElements.define("sticky-header", StickyHeader)
        } catch (e) {
            console.error(e)
        }
    }(),
    function() {
        if (__sections__.header) try {
            class StickyHeader extends HTMLElement {
                constructor() {
                    super()
                }
                connectedCallback() {
                    this.header = document.getElementById("shopify-section-header"), this.headerBottom = document.querySelector(".header-bottom").clientHeight, this.headerBounds = {}, this.currentScrollTop = 0, this.check = !1, this.hideOnScroll = this.dataset.hideOnScroll, this.onScrollHandler = this.onScroll.bind(this), this.onResizeHandler = this.onResize.bind(this), window.addEventListener("scroll", this.onScrollHandler, !1), window.addEventListener("resize", this.onResizeHandler), this.createObserver(), this.onResizeHandler()
                }
                disconnectedCallback() {
                    window.removeEventListener("scroll", this.onScrollHandler), window.removeEventListener("resize", this.onResizeHandler)
                }
                createObserver() {
                    new IntersectionObserver((entries, observer2) => {
                        this.headerBounds = entries[0].intersectionRect, observer2.disconnect()
                    }).observe(this.header)
                }
                onResize() {
                    this.style.height = `${this.querySelector("header.header").clientHeight}px`
                }
                onScroll() {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    this.check ? this.check = !1 : !document.body.classList.contains("cart-sidebar-show") && !document.body.classList.contains("sticky-search-open") && (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight ? this.hideOnScroll == "true" ? requestAnimationFrame(this.hide.bind(this)) : requestAnimationFrame(this.reveal2.bind(this)) : scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight ? requestAnimationFrame(this.reveal.bind(this)) : scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top && requestAnimationFrame(this.reset.bind(this)), this.check = !0, this.currentScrollTop = scrollTop)
                }
                hide() {
                    this.header.classList.add("shopify-section-header-hidden", "shopify-section-header-sticky"), document.body.classList.add("scroll-down"), document.body.classList.remove("scroll-up"), this.closeMenuDisclosure()
                }
                reveal() {
                    this.header.classList.add("shopify-section-header-sticky", "animate"), this.header.classList.remove("shopify-section-header-hidden"), document.body.classList.add("scroll-up"), document.body.classList.remove("scroll-down")
                }
                reveal2() {
                    this.header.classList.add("shopify-section-header-sticky", "animate", "slide-down")
                }
                reset() {
                    this.header.classList.remove("shopify-section-header-hidden", "shopify-section-header-sticky", "animate"), document.body.classList.remove("scroll-down", "scroll-up")
                }
                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll("details-disclosure"), this.disclosures.forEach(disclosure => disclosure.close())
                }
            }
            customElements.define("sticky-header", StickyHeader)
        } catch (e) {
            console.error(e)
        }
    }()
})();
//# sourceMappingURL=/cdn/shop/t/3/compiled_assets/scripts.js.map?1837=