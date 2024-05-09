(function() {
    var __sections__ = {};
    (function() {
        for (var i = 0, s = document.getElementById('sections-script').getAttribute('data-sections').split(','); i < s.length; i++)
            __sections__[s[i]] = true;
    })();
    (function() {
        if (!__sections__["brand-tab-block"] && !window.DesignMode) return;
        try {

            class BrandsTab extends HTMLElement {
                constructor() {
                    super();
                    this.tabTitle = this.querySelector('.tab-title');
                    this.tabContent = this.querySelector('.tab-panel-content');
                    const ele = this.querySelectorAll('[tab-title-action]');
                    const actionLoadMore = this.querySelectorAll('[data-load-more-block]');
                    this.widthWindow = 0;
                    if (ele.length) {
                        ele.forEach((button) => button.addEventListener('click', this.onActive.bind(this)));
                    }
                    if (actionLoadMore.length) {
                        actionLoadMore.forEach((button) => button.addEventListener('click', this.onLoadMore.bind(this)));
                    }
                }

                onActive(e) {
                    this.tabTitle.querySelector('.active').classList.remove('active');
                    this.tabContent.querySelector('.active').classList.remove('active');
                    this.querySelector(e.target.dataset.target).classList.add('active');
                    e.target.parentElement.classList.add('active');
                }
                onLoadMore(e) {
                    this.resize();
                    if (this.widthWindow > 1024) {
                        var eleHide = (e.target.parentElement).querySelectorAll('.hidden-lg');
                        var _number = e.target.dataset.rowlg;
                        var _class = 'hidden-lg';

                    } else if (this.widthWindow > 551) {
                        var eleHide = (e.target.parentElement).querySelectorAll('.hidden-md');
                        var _number = 9;
                        var _class = 'hidden-md';
                    } else {
                        var eleHide = (e.target.parentElement).querySelectorAll('.hidden-sm');
                        var _number = 6;
                        var _class = 'hidden-sm';
                    }
                    if (eleHide.length) {
                        // let number_show = (eleHide.length > number ? number : eleHide.length);
                        if (e.target.classList.contains('more')) {
                            for (let i = 0; i < eleHide.length; i++) {
                                eleHide[i].classList.remove('show');
                            }
                            e.target.querySelector('span').textContent = e.target.dataset.buttonmore;
                            e.target.classList.remove('more');
                        } else {
                            for (let i = 0; i < eleHide.length; i++) {
                                eleHide[i].classList.add('show');
                            }
                            e.target.querySelector('span').textContent = e.target.dataset.buttonless;
                            e.target.classList.add('more');
                        }

                        // (eleHide.length > _number ? '' : e.target.classList.add('hidden'));
                    }
                }
                resize() {
                    this.widthWindow = window.innerWidth;
                }
            }
            customElements.define('brand-tab', BrandsTab);

        } catch (e) {
            console.error(e);
        }
    })();

    (function() {
        if (!__sections__["header-02"]) return;
        try {

            class StickyHeader extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.header = document.getElementById('shopify-section-header-02');
                    this.header_1 = document.querySelector('.enable_parallax');
                    if (this.header_1 != null) {
                        this.heightEle = this.header_1.clientHeight;
                    } else {
                        this.heightEle = this.header.clientHeight;
                    }
                    this.headerBottom = document.querySelector('.header-bottom').clientHeight;
                    this.headerBounds = {};
                    this.currentScrollTop = 0;
                    this.check = false;
                    this.hideOnScroll = this.dataset.hideOnScroll

                    this.onScrollHandler = this.onScroll.bind(this);

                    window.addEventListener('scroll', this.onScrollHandler, false);

                    this.createObserver();
                }

                disconnectedCallback() {
                    window.removeEventListener('scroll', this.onScrollHandler);
                }

                createObserver() {
                    let observer = new IntersectionObserver((entries, observer) => {
                        this.headerBounds = entries[0].intersectionRect;
                        observer.disconnect();
                    });
                    if (this.header_1 != null) {
                        observer.observe(this.header_1);
                    } else {
                        observer.observe(this.header);
                    }
                }

                onScroll() {
                    if (this.header_1 == null || this.header_1 == '')
                        this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (!this.check || scrollTop == 0) {
                        if (!document.body.classList.contains('cart-sidebar-show') &&
                            !document.body.classList.contains('sticky-search-open')) {
                            if (scrollTop > this.currentScrollTop && scrollTop > this.heightEle) {
                                if (this.header_1 != null)
                                    this.header_1.style.transform = `translateY(-${this.header_1.clientHeight}px)`;
                                if (this.hideOnScroll == 'true') {
                                    requestAnimationFrame(this.hide.bind(this));
                                } else {
                                    requestAnimationFrame(this.reveal2.bind(this));
                                }
                            } else if (scrollTop < this.currentScrollTop && scrollTop > this.heightEle) {
                                requestAnimationFrame(this.reveal.bind(this));
                                if (this.header_1 != null)
                                    this.header_1.style.transform = `translateY(0)`;
                            } else if (scrollTop - (this.heightEle - this.headerBottom) <= this.headerBounds.top) {
                                requestAnimationFrame(this.reset.bind(this));
                                if (this.header_1 != null)
                                    this.header_1.style.transform = `translateY(0)`;
                            }
                            this.check = true;
                            this.currentScrollTop = scrollTop;
                        }
                    } else {
                        this.check = false;
                    }
                }

                hide() {
                    this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
                    document.body.classList.add('scroll-down');
                    document.body.classList.remove('scroll-up');
                    this.closeMenuDisclosure();
                }

                reveal() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate');
                    this.header.classList.remove('shopify-section-header-hidden');
                    document.body.classList.add('scroll-up');
                    document.body.classList.remove('scroll-down');
                }

                reveal2() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate', 'slide-down');
                }

                reset() {
                    this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
                    document.body.classList.remove('scroll-down', 'scroll-up');
                }

                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
                    this.disclosures.forEach(disclosure => disclosure.close());
                }

            }

            customElements.define('sticky-header', StickyHeader);

        } catch (e) {
            console.error(e);
        }
    })();

    (function() {
        if (!__sections__["header-03"]) return;
        try {

            class StickyHeader extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.header = document.getElementById('shopify-section-header-03');
                    this.headerBottom = document.querySelector('.header-bottom').clientHeight;
                    this.headerBounds = {};
                    this.currentScrollTop = 0;
                    this.check = false;
                    this.hideOnScroll = this.dataset.hideOnScroll

                    this.onScrollHandler = this.onScroll.bind(this);

                    window.addEventListener('scroll', this.onScrollHandler, false);

                    this.createObserver();
                }

                disconnectedCallback() {
                    window.removeEventListener('scroll', this.onScrollHandler);
                }

                createObserver() {
                    let observer = new IntersectionObserver((entries, observer) => {
                        this.headerBounds = entries[0].intersectionRect;
                        observer.disconnect();
                    });

                    observer.observe(this.header);
                }

                onScroll() {
                    this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (!this.check) {
                        if (!document.body.classList.contains('cart-sidebar-show') &&
                            !document.body.classList.contains('sticky-search-open')) {
                            if (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                if (this.hideOnScroll == 'true') {
                                    requestAnimationFrame(this.hide.bind(this));
                                } else {
                                    requestAnimationFrame(this.reveal2.bind(this));
                                }
                            } else if (scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                requestAnimationFrame(this.reveal.bind(this));
                            } else if (scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top) {
                                requestAnimationFrame(this.reset.bind(this));
                            }
                            this.check = true;
                            this.currentScrollTop = scrollTop;
                        }
                    } else {
                        this.check = false;
                    }
                }

                hide() {
                    this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
                    document.body.classList.add('scroll-down');
                    document.body.classList.remove('scroll-up');
                    this.closeMenuDisclosure();
                }

                reveal() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate');
                    this.header.classList.remove('shopify-section-header-hidden');
                    document.body.classList.add('scroll-up');
                    document.body.classList.remove('scroll-down');
                }

                reveal2() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate', 'slide-down');
                }

                reset() {
                    this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
                    document.body.classList.remove('scroll-down', 'scroll-up');
                }

                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
                    this.disclosures.forEach(disclosure => disclosure.close());
                }

            }

            customElements.define('sticky-header', StickyHeader);

        } catch (e) {
            console.error(e);
        }
    })();

    (function() {
        if (!__sections__["header-04"]) return;
        try {

            class StickyHeader extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.header = document.getElementById('shopify-section-header-04');
                    this.headerBottom = document.querySelector('.header-bottom').clientHeight;
                    this.HeaderAnnouncement = document.getElementById('shopify-section-announcement-bar').clientHeight;
                    this.headerBounds = {};
                    this.currentScrollTop = 0;
                    this.check = false;
                    this.hideOnScroll = this.dataset.hideOnScroll

                    this.onScrollHandler = this.onScroll.bind(this);

                    window.addEventListener('scroll', this.onScrollHandler, false);

                    this.createObserver();
                }

                disconnectedCallback() {
                    window.removeEventListener('scroll', this.onScrollHandler);
                }

                createObserver() {
                    let observer = new IntersectionObserver((entries, observer) => {
                        this.headerBounds = entries[0].intersectionRect;
                        observer.disconnect();
                    });

                    observer.observe(this.header);
                }

                onScroll() {
                    this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (document.getElementById('shopify-section-announcement-bar') && this.HeaderAnnouncement > 0) {
                        var headerHeight = this.header.clientHeight + this.HeaderAnnouncement
                    } else {
                        var headerHeight = this.header.clientHeight
                    }
                    if (!this.check) {
                        if (!document.body.classList.contains('cart-sidebar-show') &&
                            !document.body.classList.contains('sticky-search-open')) {
                            if (scrollTop > this.currentScrollTop && scrollTop > headerHeight) {
                                if (this.hideOnScroll == 'true') {
                                    requestAnimationFrame(this.hide.bind(this));
                                } else {
                                    requestAnimationFrame(this.reveal2.bind(this));
                                }
                            } else if (scrollTop < this.currentScrollTop && scrollTop > headerHeight) {
                                requestAnimationFrame(this.reveal.bind(this));
                            } else if (scrollTop - (headerHeight - this.headerBottom) <= this.headerBounds.top) {
                                requestAnimationFrame(this.reset.bind(this));
                            }
                            this.check = true;
                            this.currentScrollTop = scrollTop;
                        }
                    } else {
                        this.check = false;
                    }
                }

                hide() {
                    this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
                    document.body.classList.add('scroll-down');
                    document.body.classList.remove('scroll-up');
                    this.closeMenuDisclosure();
                    if (!$('.header-04').hasClass('style_3')) {
                        $('.vertical-menu').addClass('hide');
                    }
                }

                reveal() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate');
                    this.header.classList.remove('shopify-section-header-hidden');
                    document.body.classList.add('scroll-up');
                    document.body.classList.remove('scroll-down');
                }

                reveal2() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate', 'slide-down');
                }

                reset() {
                    this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
                    document.body.classList.remove('scroll-down', 'scroll-up');
                    if (!$('.header-04').hasClass('style_3')) {
                        if ($('.vertical-menu').hasClass('open')) {
                            $('.vertical-menu').removeClass('hide');
                        }
                    }
                }

                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
                    this.disclosures.forEach(disclosure => disclosure.close());
                }

            }

            customElements.define('sticky-header', StickyHeader);

        } catch (e) {
            console.error(e);
        }
    })();

    (function() {
        if (!__sections__["header-05"]) return;
        try {

            class StickyHeader extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.header = document.getElementById('shopify-section-header-05');
                    this.header_1 = document.querySelector('.enable_parallax');
                    if (this.header_1 != null) {
                        this.heightEle = this.header_1.clientHeight;
                    } else {
                        this.heightEle = this.header.clientHeight;
                    }
                    this.headerBottom = document.querySelector('.header-bottom').clientHeight;
                    this.headerBounds = {};
                    this.currentScrollTop = 0;
                    this.check = false;
                    this.hideOnScroll = this.dataset.hideOnScroll

                    this.onScrollHandler = this.onScroll.bind(this);

                    window.addEventListener('scroll', this.onScrollHandler, false);

                    this.createObserver();
                }

                disconnectedCallback() {
                    window.removeEventListener('scroll', this.onScrollHandler);
                }

                createObserver() {
                    let observer = new IntersectionObserver((entries, observer) => {
                        this.headerBounds = entries[0].intersectionRect;
                        observer.disconnect();
                    });
                    if (this.header_1 != null) {
                        observer.observe(this.header_1);
                    } else {
                        observer.observe(this.header);
                    }
                }

                onScroll() {
                    if (this.header_1 == null || this.header_1 == '')
                        this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (!this.check || scrollTop == 0) {
                        if (!document.body.classList.contains('cart-sidebar-show') &&
                            !document.body.classList.contains('sticky-search-open')) {
                            if (scrollTop > this.currentScrollTop && scrollTop > this.heightEle) {
                                if (this.header_1 != null)
                                    this.header_1.style.transform = `translateY(-${this.header_1.clientHeight}px)`;
                                if (this.hideOnScroll == 'true') {
                                    requestAnimationFrame(this.hide.bind(this));
                                } else {
                                    requestAnimationFrame(this.reveal2.bind(this));
                                }

                            } else if (scrollTop < this.currentScrollTop && scrollTop > this.heightEle) {
                                requestAnimationFrame(this.reveal.bind(this));
                                if (this.header_1 != null)
                                    this.header_1.style.transform = `translateY(0)`;
                            } else if (scrollTop - (this.heightEle - this.headerBottom) <= this.headerBounds.top) {
                                requestAnimationFrame(this.reset.bind(this));
                                if (this.header_1 != null)
                                    this.header_1.style.transform = `translateY(0)`;
                            }
                            this.check = true;
                            this.currentScrollTop = scrollTop;
                        }
                    } else {
                        this.check = false;
                    }
                }

                hide() {
                    this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
                    document.body.classList.add('scroll-down');
                    document.body.classList.remove('scroll-up');
                    this.closeMenuDisclosure();
                }

                reveal() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate');
                    this.header.classList.remove('shopify-section-header-hidden');
                    document.body.classList.add('scroll-up');
                    document.body.classList.remove('scroll-down');
                }

                reveal2() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate', 'slide-down');
                }

                reset() {
                    this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
                    document.body.classList.remove('scroll-down', 'scroll-up');
                }

                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
                    this.disclosures.forEach(disclosure => disclosure.close());
                }

            }

            customElements.define('sticky-header', StickyHeader);

        } catch (e) {
            console.error(e);
        }
    })();

    (function() {
        if (!__sections__["header-06"]) return;
        try {

            class StickyHeader extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.header = document.getElementById('shopify-section-header-06');
                    this.headerBottom = document.querySelector('.header-bottom').clientHeight;
                    this.headerBounds = {};
                    this.currentScrollTop = 0;
                    this.check = false;
                    this.hideOnScroll = this.dataset.hideOnScroll

                    this.onScrollHandler = this.onScroll.bind(this);
                    this.onResizeHandler = this.onResize.bind(this);

                    window.addEventListener('scroll', this.onScrollHandler, false);
                    window.addEventListener('resize', this.onResizeHandler);

                    this.createObserver();
                    this.onResizeHandler();
                }

                disconnectedCallback() {
                    window.removeEventListener('resize', this.onResizeHandler);
                    window.removeEventListener('scroll', this.onScrollHandler);
                }

                createObserver() {
                    let observer = new IntersectionObserver((entries, observer) => {
                        this.headerBounds = entries[0].intersectionRect;
                        observer.disconnect();
                    });

                    observer.observe(this.header);
                }

                onResize() {
                    this.style.height = `${this.querySelector('header.header').clientHeight}px`;
                }

                onScroll() {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (!this.check) {
                        if (window.innerWidth > 1200 && document.querySelector('.layout_search--style2')) {
                            const openDetailsElement = this.querySelector('details[open]');
                            if (openDetailsElement) {
                                const summaryElement = openDetailsElement.querySelector('summary');
                                openDetailsElement.removeAttribute('open');
                                summaryElement.focus();
                                document.body.classList.remove('open_search');
                            }
                        }
                        if (!document.body.classList.contains('cart-sidebar-show') &&
                            !document.body.classList.contains('sticky-search-open')) {
                            if (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                if (this.hideOnScroll == 'true') {
                                    requestAnimationFrame(this.hide.bind(this));
                                } else {
                                    requestAnimationFrame(this.reveal2.bind(this));
                                }
                            } else if (scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                requestAnimationFrame(this.reveal.bind(this));
                            } else if (scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top) {
                                requestAnimationFrame(this.reset.bind(this));
                            }
                            this.check = true;
                            this.currentScrollTop = scrollTop;
                        }
                    } else {
                        this.check = false;
                    }
                }

                hide() {
                    this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
                    document.body.classList.add('scroll-down');
                    document.body.classList.remove('scroll-up');
                    this.closeMenuDisclosure();
                }

                reveal() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate');
                    this.header.classList.remove('shopify-section-header-hidden');
                    document.body.classList.add('scroll-up');
                    document.body.classList.remove('scroll-down');
                }

                reveal2() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate', 'slide-down');
                }

                reset() {
                    this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
                    document.body.classList.remove('scroll-down', 'scroll-up');
                }

                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
                    this.disclosures.forEach(disclosure => disclosure.close());
                }

            }

            customElements.define('sticky-header', StickyHeader);

        } catch (e) {
            console.error(e);
        }
    })();

    (function() {
        if (!__sections__["header-07"]) return;
        try {

            class StickyHeader extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.header = document.getElementById('shopify-section-header-07');
                    this.headerBottom = document.querySelector('.header-bottom').clientHeight;
                    this.headerBounds = {};
                    this.currentScrollTop = 0;
                    this.check = false;
                    this.hideOnScroll = this.dataset.hideOnScroll

                    this.onScrollHandler = this.onScroll.bind(this);
                    this.onResizeHandler = this.onResize.bind(this);

                    window.addEventListener('scroll', this.onScrollHandler, false);
                    window.addEventListener('resize', this.onResizeHandler);

                    this.createObserver();
                    this.onResizeHandler();
                }

                disconnectedCallback() {
                    window.removeEventListener('scroll', this.onScrollHandler);
                    window.removeEventListener('resize', this.onResizeHandler);
                }

                createObserver() {
                    let observer = new IntersectionObserver((entries, observer) => {
                        this.headerBounds = entries[0].intersectionRect;
                        observer.disconnect();
                    });

                    observer.observe(this.header);
                }

                onResize() {
                    this.style.height = `${this.querySelector('header.header').clientHeight}px`;
                }

                onScroll() {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (!this.check) {
                        if (!document.body.classList.contains('cart-sidebar-show') &&
                            !document.body.classList.contains('sticky-search-open')) {
                            if (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                if (this.hideOnScroll == 'true') {
                                    requestAnimationFrame(this.hide.bind(this));
                                } else {
                                    requestAnimationFrame(this.reveal2.bind(this));
                                }
                            } else if (scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                requestAnimationFrame(this.reveal.bind(this));
                            } else if (scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top) {
                                requestAnimationFrame(this.reset.bind(this));
                            }
                            this.check = true;
                            this.currentScrollTop = scrollTop;
                        }
                    } else {
                        this.check = false;
                    }
                }

                hide() {
                    this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
                    document.body.classList.add('scroll-down');
                    document.body.classList.remove('scroll-up');
                    this.closeMenuDisclosure();
                }

                reveal() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate');
                    this.header.classList.remove('shopify-section-header-hidden');
                    document.body.classList.add('scroll-up');
                    document.body.classList.remove('scroll-down');
                }

                reveal2() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate', 'slide-down');
                }

                reset() {
                    this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
                    document.body.classList.remove('scroll-down', 'scroll-up');
                }

                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
                    this.disclosures.forEach(disclosure => disclosure.close());
                }

            }

            customElements.define('sticky-header', StickyHeader);

        } catch (e) {
            console.error(e);
        }
    })();

    (function() {
        if (!__sections__["header-08"]) return;
        try {

            class StickyHeader extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.header = document.getElementById('shopify-section-header-08');
                    this.headerBottom = document.querySelector('.header-bottom').clientHeight;
                    this.headerBounds = {};
                    this.currentScrollTop = 0;
                    this.check = false;
                    this.hideOnScroll = this.dataset.hideOnScroll

                    this.onScrollHandler = this.onScroll.bind(this);

                    window.addEventListener('scroll', this.onScrollHandler, false);

                    this.createObserver();
                }

                disconnectedCallback() {
                    window.removeEventListener('scroll', this.onScrollHandler);
                }

                createObserver() {
                    let observer = new IntersectionObserver((entries, observer) => {
                        this.headerBounds = entries[0].intersectionRect;
                        observer.disconnect();
                    });

                    observer.observe(this.header);
                }

                onScroll() {
                    this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (!this.check) {
                        if (!document.body.classList.contains('cart-sidebar-show') &&
                            !document.body.classList.contains('sticky-search-open')) {
                            if (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                if (this.hideOnScroll == 'true') {
                                    requestAnimationFrame(this.hide.bind(this));
                                } else {
                                    requestAnimationFrame(this.reveal2.bind(this));
                                }
                            } else if (scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                requestAnimationFrame(this.reveal.bind(this));
                            } else if (scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top) {
                                requestAnimationFrame(this.reset.bind(this));
                            }
                            this.check = true;
                            this.currentScrollTop = scrollTop;
                        }
                    } else {
                        this.check = false;
                    }
                }

                hide() {
                    this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
                    document.body.classList.add('scroll-down');
                    document.body.classList.remove('scroll-up');
                    this.closeMenuDisclosure();
                }

                reveal() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate');
                    this.header.classList.remove('shopify-section-header-hidden');
                    document.body.classList.add('scroll-up');
                    document.body.classList.remove('scroll-down');
                }

                reveal2() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate', 'slide-down');
                }

                reset() {
                    this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
                    document.body.classList.remove('scroll-down', 'scroll-up');
                }

                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
                    this.disclosures.forEach(disclosure => disclosure.close());
                }

            }

            customElements.define('sticky-header', StickyHeader);

        } catch (e) {
            console.error(e);
        }
    })();

    (function() {
        if (!__sections__["header-09"]) return;
        try {

            class StickyHeader extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.header = document.getElementById('shopify-section-header-09');
                    this.heightEle = this.header.clientHeight;
                    this.headerBottom = document.querySelector('.header-bottom').clientHeight;
                    this.headerBounds = {};
                    this.currentScrollTop = 0;
                    this.check = false;
                    this.hideOnScroll = this.dataset.hideOnScroll

                    this.onScrollHandler = this.onScroll.bind(this);

                    window.addEventListener('scroll', this.onScrollHandler, false);

                    this.createObserver();
                }

                disconnectedCallback() {
                    window.removeEventListener('scroll', this.onScrollHandler);
                }

                createObserver() {
                    let observer = new IntersectionObserver((entries, observer) => {
                        this.headerBounds = entries[0].intersectionRect;
                        observer.disconnect();
                    });
                    observer.observe(this.header);
                }

                onScroll() {
                    this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (!this.check) {
                        if (!document.body.classList.contains('cart-sidebar-show') &&
                            !document.body.classList.contains('sticky-search-open')) {
                            if (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                if (this.hideOnScroll == 'true') {
                                    requestAnimationFrame(this.hide.bind(this));
                                } else {
                                    requestAnimationFrame(this.reveal2.bind(this));
                                }
                            } else if (scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                requestAnimationFrame(this.reveal.bind(this));
                            } else if (scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top) {
                                requestAnimationFrame(this.reset.bind(this));
                            }
                            this.check = true;
                            this.currentScrollTop = scrollTop;
                        }
                    } else {
                        this.check = false;
                    }
                }

                hide() {
                    this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
                    document.body.classList.add('scroll-down');
                    document.body.classList.remove('scroll-up');
                    this.closeMenuDisclosure();
                }

                reveal() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate');
                    this.header.classList.remove('shopify-section-header-hidden');
                    document.body.classList.add('scroll-up');
                    document.body.classList.remove('scroll-down');
                }

                reveal2() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate', 'slide-down');
                }

                reset() {
                    this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
                    document.body.classList.remove('scroll-down', 'scroll-up');
                }

                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
                    this.disclosures.forEach(disclosure => disclosure.close());
                }

            }

            customElements.define('sticky-header', StickyHeader);

        } catch (e) {
            console.error(e);
        }
    })();

    (function() {
        if (!__sections__["header-10"]) return;
        try {

            class StickyHeader extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.header = document.getElementById('shopify-section-header-10');
                    this.headerBottom = document.querySelector('.header-bottom').clientHeight;
                    this.headerBounds = {};
                    this.currentScrollTop = 0;
                    this.check = false;
                    this.hideOnScroll = this.dataset.hideOnScroll

                    this.onScrollHandler = this.onScroll.bind(this);

                    window.addEventListener('scroll', this.onScrollHandler, false);

                    this.createObserver();
                }

                disconnectedCallback() {
                    window.removeEventListener('scroll', this.onScrollHandler);
                }

                createObserver() {
                    let observer = new IntersectionObserver((entries, observer) => {
                        this.headerBounds = entries[0].intersectionRect;
                        observer.disconnect();
                    });

                    observer.observe(this.header);
                }

                onScroll() {
                    this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (!this.check) {
                        if (!document.body.classList.contains('cart-sidebar-show') &&
                            !document.body.classList.contains('sticky-search-open')) {
                            if (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                if (this.hideOnScroll == 'true') {
                                    requestAnimationFrame(this.hide.bind(this));
                                } else {
                                    requestAnimationFrame(this.reveal2.bind(this));
                                }
                            } else if (scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                requestAnimationFrame(this.reveal.bind(this));
                            } else if (scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top) {
                                requestAnimationFrame(this.reset.bind(this));
                            }
                            this.check = true;
                            this.currentScrollTop = scrollTop;
                        }
                    } else {
                        this.check = false;
                    }
                }

                hide() {
                    this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
                    document.body.classList.add('scroll-down');
                    document.body.classList.remove('scroll-up');
                    this.closeMenuDisclosure();
                }

                reveal() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate');
                    this.header.classList.remove('shopify-section-header-hidden');
                    document.body.classList.add('scroll-up');
                    document.body.classList.remove('scroll-down');
                }

                reveal2() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate', 'slide-down');
                }

                reset() {
                    this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
                    document.body.classList.remove('scroll-down', 'scroll-up');
                }

                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
                    this.disclosures.forEach(disclosure => disclosure.close());
                }

            }

            customElements.define('sticky-header', StickyHeader);

        } catch (e) {
            console.error(e);
        }
    })();

    (function() {
        if (!__sections__["header-11"]) return;
        try {

            class StickyHeader extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.header = document.getElementById('shopify-section-header-11');
                    this.heightEle = this.header.clientHeight;
                    this.headerBottom = document.querySelector('.header-bottom').clientHeight;
                    this.headerBounds = {};
                    this.currentScrollTop = 0;
                    this.check = false;
                    this.hideOnScroll = this.dataset.hideOnScroll

                    this.onScrollHandler = this.onScroll.bind(this);

                    window.addEventListener('scroll', this.onScrollHandler, false);

                    this.createObserver();
                }

                disconnectedCallback() {
                    window.removeEventListener('scroll', this.onScrollHandler);
                }

                createObserver() {
                    let observer = new IntersectionObserver((entries, observer) => {
                        this.headerBounds = entries[0].intersectionRect;
                        observer.disconnect();
                    });
                    observer.observe(this.header);
                }

                onScroll() {
                    this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (!this.check) {
                        if (!document.body.classList.contains('cart-sidebar-show') &&
                            !document.body.classList.contains('sticky-search-open')) {
                            if (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                if (this.hideOnScroll == 'true') {
                                    requestAnimationFrame(this.hide.bind(this));
                                } else {
                                    requestAnimationFrame(this.reveal2.bind(this));
                                }
                            } else if (scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                requestAnimationFrame(this.reveal.bind(this));
                            } else if (scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top) {
                                requestAnimationFrame(this.reset.bind(this));
                            }
                            this.check = true;
                            this.currentScrollTop = scrollTop;
                        }
                    } else {
                        this.check = false;
                    }
                }

                hide() {
                    this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
                    document.body.classList.add('scroll-down');
                    document.body.classList.remove('scroll-up');
                    this.closeMenuDisclosure();
                }

                reveal() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate');
                    this.header.classList.remove('shopify-section-header-hidden');
                    document.body.classList.add('scroll-up');
                    document.body.classList.remove('scroll-down');
                }

                reveal2() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate', 'slide-down');
                }

                reset() {
                    this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
                    document.body.classList.remove('scroll-down', 'scroll-up');
                }

                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
                    this.disclosures.forEach(disclosure => disclosure.close());
                }

            }

            customElements.define('sticky-header', StickyHeader);

        } catch (e) {
            console.error(e);
        }
    })();

    (function() {
        if (!__sections__["header-12"]) return;
        try {

            class StickyHeader extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.header = document.getElementById('shopify-section-header-12');
                    this.heightEle = this.header.clientHeight;
                    this.headerBottom = document.querySelector('.header-bottom').clientHeight;
                    this.headerBounds = {};
                    this.currentScrollTop = 0;
                    this.check = false;
                    this.hideOnScroll = this.dataset.hideOnScroll

                    this.onScrollHandler = this.onScroll.bind(this);

                    window.addEventListener('scroll', this.onScrollHandler, false);

                    this.createObserver();
                }

                disconnectedCallback() {
                    window.removeEventListener('scroll', this.onScrollHandler);
                }

                createObserver() {
                    let observer = new IntersectionObserver((entries, observer) => {
                        this.headerBounds = entries[0].intersectionRect;
                        observer.disconnect();
                    });
                    if (this.header_1 != null) {
                        observer.observe(this.header_1);
                    } else {
                        observer.observe(this.header);
                    }
                }

                onScroll() {
                    if (this.header_1 == null || this.header_1 == '')
                        this.style.height = `${this.header.clientHeight}px`;
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (!this.check || scrollTop == 0) {
                        if (!document.body.classList.contains('cart-sidebar-show') &&
                            !document.body.classList.contains('sticky-search-open')) {
                            if (scrollTop > this.currentScrollTop && scrollTop > this.heightEle) {
                                if (this.header_1 != null)
                                    this.header_1.style.transform = `translateY(-${this.header_1.clientHeight}px)`;
                                if (this.hideOnScroll == 'true') {
                                    requestAnimationFrame(this.hide.bind(this));
                                } else {
                                    requestAnimationFrame(this.reveal2.bind(this));
                                }
                            } else if (scrollTop < this.currentScrollTop && scrollTop > this.heightEle) {
                                requestAnimationFrame(this.reveal.bind(this));
                                if (this.header_1 != null)
                                    this.header_1.style.transform = `translateY(0)`;
                            } else if (scrollTop - (this.heightEle - this.headerBottom) <= this.headerBounds.top) {
                                requestAnimationFrame(this.reset.bind(this));
                                if (this.header_1 != null)
                                    this.header_1.style.transform = `translateY(0)`;
                            }
                            this.check = true;
                            this.currentScrollTop = scrollTop;
                        }
                    } else {
                        this.check = false;
                    }
                }

                hide() {
                    this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
                    document.body.classList.add('scroll-down');
                    document.body.classList.remove('scroll-up');
                    this.closeMenuDisclosure();
                }

                reveal() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate');
                    this.header.classList.remove('shopify-section-header-hidden');
                    document.body.classList.add('scroll-up');
                    document.body.classList.remove('scroll-down');
                }

                reveal2() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate', 'slide-down');
                }

                reset() {
                    this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
                    document.body.classList.remove('scroll-down', 'scroll-up');
                }

                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
                    this.disclosures.forEach(disclosure => disclosure.close());
                }

            }

            customElements.define('sticky-header', StickyHeader);

        } catch (e) {
            console.error(e);
        }
    })();

    (function() {
        if (!__sections__["header"]) return;
        try {

            class StickyHeader extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.header = document.getElementById('shopify-section-header');
                    this.headerBottom = document.querySelector('.header-bottom').clientHeight;
                    this.headerBounds = {};
                    this.currentScrollTop = 0;
                    this.check = false;
                    this.hideOnScroll = this.dataset.hideOnScroll

                    this.onScrollHandler = this.onScroll.bind(this);
                    this.onResizeHandler = this.onResize.bind(this);

                    window.addEventListener('scroll', this.onScrollHandler, false);
                    window.addEventListener('resize', this.onResizeHandler);

                    this.createObserver();
                    this.onResizeHandler();
                }

                disconnectedCallback() {
                    window.removeEventListener('scroll', this.onScrollHandler);
                    window.removeEventListener('resize', this.onResizeHandler);
                }

                createObserver() {
                    let observer = new IntersectionObserver((entries, observer) => {
                        this.headerBounds = entries[0].intersectionRect;
                        observer.disconnect();
                    });

                    observer.observe(this.header);
                }

                onResize() {
                    this.style.height = `${this.querySelector('header.header').clientHeight}px`;
                }

                onScroll() {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (!this.check) {
                        if (!document.body.classList.contains('cart-sidebar-show') &&
                            !document.body.classList.contains('sticky-search-open')) {
                            if (scrollTop > this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                if (this.hideOnScroll == 'true') {
                                    requestAnimationFrame(this.hide.bind(this));
                                } else {
                                    requestAnimationFrame(this.reveal2.bind(this));
                                }
                            } else if (scrollTop < this.currentScrollTop && scrollTop > this.header.clientHeight) {
                                requestAnimationFrame(this.reveal.bind(this));
                            } else if (scrollTop - (this.header.clientHeight - this.headerBottom) <= this.headerBounds.top) {
                                requestAnimationFrame(this.reset.bind(this));
                            }
                            this.check = true;
                            this.currentScrollTop = scrollTop;
                        }
                    } else {
                        this.check = false;
                    }
                }

                hide() {
                    this.header.classList.add('shopify-section-header-hidden', 'shopify-section-header-sticky');
                    document.body.classList.add('scroll-down');
                    document.body.classList.remove('scroll-up');
                    this.closeMenuDisclosure();
                }

                reveal() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate');
                    this.header.classList.remove('shopify-section-header-hidden');
                    document.body.classList.add('scroll-up');
                    document.body.classList.remove('scroll-down');
                }

                reveal2() {
                    this.header.classList.add('shopify-section-header-sticky', 'animate', 'slide-down');
                }

                reset() {
                    this.header.classList.remove('shopify-section-header-hidden', 'shopify-section-header-sticky', 'animate');
                    document.body.classList.remove('scroll-down', 'scroll-up');
                }

                closeMenuDisclosure() {
                    this.disclosures = this.disclosures || this.header.querySelectorAll('details-disclosure');
                    this.disclosures.forEach(disclosure => disclosure.close());
                }

            }

            customElements.define('sticky-header', StickyHeader);

        } catch (e) {
            console.error(e);
        }
    })();

})();