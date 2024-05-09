<?php
require_once 'admin_panel/config.php'; // Assuming 'config.php' contains database connection details

// Establish a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = 1;
// Prepare SQL query to fetch data containing slide1, slide2, and slide3 from the database
$sql = "SELECT * FROM home WHERE id = ?";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check if query execution was successful
if ($result && $result->num_rows > 0) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();
    
    // Check if the 'slide1', 'slide2', and 'slide3' keys exist in the $row array
    if (array_key_exists('slide1', $row) && array_key_exists('slide2', $row) && array_key_exists('slide3', $row)) {
        // Retrieve the values of slide1, slide2, and slide3 from the database
        $slide1 = $row['slide1'];
        $slide2 = $row['slide2'];
        $slide3 = $row['slide3'];
    } else {
        // One or more of the keys are missing in the $row array
        echo "Error: One or more columns not found in the result set";
    }
} else {
    // If query execution fails or no rows are returned, display an error message
    echo "No data found in the database";
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>






<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-P29BX59ERS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-P29BX59ERS');
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-P29BX59ERS');
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4611DLSHRR');
    </script>
    <!-- Added by AVADA SEO Suite -->






    <meta name="twitter:image" content="https://ibb.co/ZfCxZkP">
    <script>
        window.FPConfig = {};
        window.FPConfig.ignoreKeywords = ["/cart", "/account"]
    </script>





    <!-- /Added by AVADA SEO Suite -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="">
    <link rel="canonical" href="https://www.fedus.in/">
    <link rel="canonical" href="https://www.fedus.in/" canonical-shop-url="https://www.fedus.in/">
    <link rel="shortcut icon"
        href="//www.fedus.in/cdn/shop/files/web_15324e63-dead-40f2-b4d9-5c9bfb43280f_32x32.gif?v=1674025595"
        type="image/png">
    <link rel="preconnect" href="https://cdn.shopify.com" crossorigin>


    <!-- Air Reviews Script -->

















    <script>
        const AIR_REVIEWS = {};
        AIR_REVIEWS.product = null;
        AIR_REVIEWS.template = "index";
        AIR_REVIEWS.collections = [];
        AIR_REVIEWS.collectionsName = [];
        AIR_REVIEWS.customer = {
            id: null,
            email: null,
            first_name: null,
            last_name: null,
        };

        AIR_REVIEWS.branding = false;
        AIR_REVIEWS.appBlock = true;
        AIR_REVIEWS.shopData = false;
        AIR_REVIEWS.settings = {
            "createdAt": "2023-05-20T03:11:42.552Z",
            "reviewBlock": {
                "twoStarColor": "#E67F22",
                "summaryButton": "Write a review",
                "customPosition": ".shopify-payment-button",
                "primaryColor": "#121212",
                "fiveStarColor": "#16A086",
                "preset": 0,
                "oneStarColor": "#E84C3D",
                "threeStarColor": "#F1C40F",
                "buttonTextColor": "#FFFFFF",
                "inlinePosition": "below-product",
                "customPositionDirection": "after",
                "buttonBorderRadius": 4,
                "summaryHeading": "Review",
                "policy": "By submitting, I acknowledge the Privacy and that my reviews will be publicly posted and shared online",
                "emptyStarColor": "#BFBFBF",
                "customCss": "",
                "backgroundColor": "#EDEDED",
                "requiredName": true,
                "headingColor": "#000000",
                "submitTextColor": "#ffffff",
                "singleStarColor": "#16A086",
                "layout": "list",
                "starColorType": "single-color",
                "buttonBackgroundColor": "#000000",
                "hasPolicy": true,
                "submitButtonColor": "#166CE1",
                "advancedSetting": true,
                "fourStarColor": "#27AE61",
                "requiredEmail": false,
                "secondaryColor": "#383838",
                "font": "Roboto"
            },
            "shopDomain": "fedus-1593.myshopify.com",
            "shopId": "0UFB5C5pUkBzy4q6ojjv",
            "generalSetting": {
                "sortOption": "sortlarest@feedback",
                "amzReviewerOption": "all_reviews",
                "amzPhotoOption": "all_contents",
                "enableAggregateRating": true,
                "amzSortOption": "recent",
                "ratingOption": "All positive",
                "photoOption": "all",
                "amzRatingOption": "positive",
                "autoSubmitPublish": "disabled"
            },
            "reviewPop": {
                "minimumRating": "all-reviews",
                "includedPages": "",
                "emptyImageCustom": "",
                "pageShow": [],
                "excludedPages": "",
                "showOnMobile": false,
                "emptyImage": "https://imgur.com/uw78kAx.png",
                "showOnDesktop": false,
                "desktopPosition": "desktop-bottom-left",
                "enabled": false,
                "mobilePosition": "mobile-bottom-right",
                "customCss": ""
            },
            "reviewCarouselWidget": {
                "customPositionHomeDirection": "after",
                "customPositionCatalog": "",
                "showPreview": false,
                "customPositionProductDirection": "after",
                "carouselHeadingColor": "#000000",
                "carouselMinimumRating": "all-reviews",
                "carouselHeading": "See what our customers said",
                "customPositionProduct": "",
                "customPositionHome": "",
                "enableCarousel": false,
                "customPositionCatalogDirection": "after"
            },
            "reviewWidget": {
                "customPositionCatalog": "",
                "floatBtnIconCustom": "",
                "showPreview": true,
                "enableStarRating": true,
                "showCatalogPage": true,
                "customPositionCatalogDirection": "after",
                "showOnMobile": false,
                "showProductPage": true,
                "desktopPosition": "desktop-right",
                "floatBtnBgColor": "#000000",
                "hideNoStarRating": false,
                "minimumRating": "all-reviews",
                "floatButtonLabel": "Our Reviews",
                "customPositionProductDirection": "after",
                "floatBtnIcon": "https://imgur.com/ttZVtaG.png",
                "customPositionProduct": "",
                "showOnDesktop": false,
                "floatBtnTextColor": "#FFFFFF",
                "mobilePosition": "mobile-left",
                "showOnProductList": true
            },
            "popReviews": [],
            "carouselReviews": []
        };
        AIR_REVIEWS.translations = {
            "review": "review",
            "reviews": "reviews",
            "See more": "See more",
            "See less": "See less",
            "Recent": "Recent",
            "Highest": "Highest",
            "Lowest": "Lowest",
            "Load more": "Load more",
            "No reviews yet": "No reviews yet",
            "How do you like this item?": "How do you like this item?",
            "Excellent": "Excellent",
            "Good": "Good",
            "Medium": "Medium",
            "Poor": "Poor",
            "Very Bad": "Very Bad",
            "Share your thoughts": "Share your thoughts",
            "Write your feedback": "Write your feedback",
            "Your Information": "Your Information",
            "Your Name": "Your Name",
            "Email": "Email",
            "This is a required field": "This is a required field",
            "Send": "Send",
            "You have reached the file upload limit": "You have reached the file upload limit",
            "Email field is invalid": "Email field is invalid",
            "Review with image": "Review with image",
            "Our Reviews": "Our Reviews",
            "5MB Limit": "5MB Limit",
            "Be the first to write a review": "Be the first to write a review",
            "Submit": "Submit",
            "Submitted": "Submitted",
            "Click to review": "Click to review",
            "Tap to review": "Tap to review",
            "Name": "Name",
            "Thank you for your feedback": "Thank you for your feedback",
            "Invalid file type": "Invalid file type",
            "accepted file types: .gif, .jpg, .png.": "accepted file types: .gif, .jpg, .png.",
            "Invalid file size": "Invalid file size",
            "image size should not be more than 5MB.": "image size should not be more than 5MB.",
            "Your Email": "Your Email",
            "Next": "Next"
        };
        AIR_REVIEWS.productReview = false;
    </script>

    <!-- /Air Reviews Script -->

    <title>
        FEDUS - Official Store | FEDUS Online
    </title>

    <meta name="description"
        content="FEDUS is a India&#39;s No-1 D2C brand of Ethernet cable, HDMI Cable, power cable, USB cable, power strip, CCTV cable, power supply and many products">



    <meta property="og:site_name" content="FEDUS">
    <meta property="og:url" content="https://www.fedus.in/">
    <meta property="og:title" content="FEDUS - Official Store | FEDUS Online">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="FEDUS is a India&#39;s No-1 D2C brand of Ethernet cable, HDMI Cable, power cable, USB cable, power strip, CCTV cable, power supply and many products">
    <meta property="og:image" content="http://www.fedus.in/cdn/shop/files/Untitled_design_1.png?v=1693400020">
    <meta property="og:image:secure_url"
        content="https://www.fedus.in/cdn/shop/files/Untitled_design_1.png?v=1693400020">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta name="twitter:site" content="@https://">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FEDUS - Official Store | FEDUS Online">
    <meta name="twitter:description"
        content="FEDUS is a India&#39;s No-1 D2C brand of Ethernet cable, HDMI Cable, power cable, USB cable, power strip, CCTV cable, power supply and many products">

    <script>
        window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');
    </script>
    <meta name="google-site-verification" content="ui0Tz0zLAV7_P1vM7xKLsd_liInRwcypKCQU0r0Etds">
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/69686886700/digital_wallets/dialog">
    <script async="async" src="/checkouts/internal/preloads.js?locale=en-IN"></script>
    <script async="async" src="https://shop.app/checkouts/internal/preloads.js?locale=en-IN&shop_id=69686886700"
        crossorigin="anonymous"></script>
    <script id="shopify-features" type="application/json">
        {
            "accessToken": "ccfdd4212bfa631eaa06cb321f1086e2",
            "betas": ["rich-media-storefront-analytics"],
            "domain": "www.fedus.in",
            "predictiveSearch": true,
            "shopId": 69686886700,
            "smart_payment_buttons_url": "https:\/\/www.fedus.in\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js",
            "dynamic_checkout_cart_url": "https:\/\/www.fedus.in\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js",
            "locale": "en",
            "flg4ff40b22": false
        }
    </script>
    <script>
        var Shopify = Shopify || {};
        Shopify.shop = "fedus-1593.myshopify.com";
        Shopify.locale = "en";
        Shopify.currency = {
            "active": "INR",
            "rate": "1.0"
        };
        Shopify.country = "IN";
        Shopify.theme = {
            "name": "Ella-6.4.1-theme-source",
            "id": 140531466540,
            "theme_store_id": null,
            "role": "main"
        };
        Shopify.theme.handle = "null";
        Shopify.theme.style = {
            "id": null,
            "handle": null
        };
        Shopify.cdnHost = "www.fedus.in/cdn";
        Shopify.routes = Shopify.routes || {};
        Shopify.routes.root = "/";
    </script>
    <script type="module">!function (o) { (o.Shopify = o.Shopify || {}).modules = !0 }(window);</script>
    <script>
        ! function (o) {
            function n() {
                var o = [];

                function n() {
                    o.push(Array.prototype.slice.apply(arguments))
                }
                return n.q = o, n
            }
            var t = o.Shopify = o.Shopify || {};
            t.loadFeatures = n(), t.autoloadFeatures = n()
        }(window);
    </script>
    <script>
        (function () {
            function asyncLoad() {
                var urls = ["https:\/\/seo.apps.avada.io\/scripttag\/avada-seo-installed.js?shop=fedus-1593.myshopify.com", "https:\/\/cdn1.avada.io\/flying-pages\/module.js?shop=fedus-1593.myshopify.com", "\/\/productreviews.shopifycdn.com\/embed\/loader.js?shop=fedus-1593.myshopify.com"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            if (window.attachEvent) {
                window.attachEvent('onload', asyncLoad);
            } else {
                window.addEventListener('load', asyncLoad, false);
            }
        })();
    </script>
    <script id="__st">
        var __st = {
            "a": 69686886700,
            "offset": 19800,
            "reqid": "757048ce-3fbf-49ce-8507-43bd8f2679ee-1714964270",
            "pageurl": "www.fedus.in\/",
            "u": "feaf9dc49bd3",
            "p": "home"
        };
    </script>
    <script>
        window.ShopifyPaypalV4VisibilityTracking = true;
    </script>
    <script>
        ! function () {
            'use strict';
            const e = 'contact',
                t = 'account',
                n = 'new_comment',
                o = e => e.map((([e, t]) => `form[action*='/${e}'] input[name='form_type'][value='${t}']`)).join(',');

            function c(e, t, n) {
                try {
                    for (const [o, c] of Object.entries(JSON.parse(n.getItem(t)))) e.elements[o] && (e.elements[o].value = c);
                    n.removeItem(t)
                } catch { }
            }
            const s = 'form_type',
                r = 'cptcha';
            var a, m, i, u;
            a = window, m = document, u = 'ce_forms', a[i = 'Shopify'] = a[i] || {}, a[i][u] = a[i][u] || {}, a[i][u].q = [],
                function (a, m, i, u, f, d) {
                    const [l, p] = function (c, s) {
                        const r = s ? [
                            [e, e],
                            ['blogs', n],
                            ['comments', n],
                            [e, 'customer']
                        ] : [],
                            a = c ? [
                                [t, 'customer_login'],
                                [t, 'recover_customer_password'],
                                [t, 'create_customer']
                            ] : [],
                            m = o([...r, ...a]),
                            i = o(r.slice(0, 3)),
                            u = e => () => e ? [...document.querySelectorAll(e)].map((e => e.form)) : [];
                        return [u(m), u(i)]
                    }(!0, !0), _ = e => {
                        const t = e.target,
                            n = t instanceof HTMLFormElement ? t : t && t.form;
                        return n && l().find((e => n === e))
                    };
                    a.addEventListener('submit', (e => {
                        _(e) && e.preventDefault()
                    }));
                    for (const e of ['focusin', 'change']) a.addEventListener(e, (e => {
                        const t = _(e);
                        t && !t.dataset[r] && (u(t, p().some((e => e === t))), t.dataset[r] = !0)
                    }));
                    const v = i.get('form_key'),
                        g = i.get(s);
                    v && g && a.addEventListener('DOMContentLoaded', (() => {
                        for (const e of p()) e.elements[s].value === g && c(e, v, m)
                    }))
                }(m, a.sessionStorage, new URLSearchParams(a.location.search), ((e, t) => {
                    const n = a[i][u],
                        o = n.bindForm,
                        c = '6LeHG2ApAAAAAO4rPaDW-qVpPKPOBfjbCpzJB9ey';
                    if (o) return o(e, c, t);
                    n.q.push([e, c, t]), m.body.append(Object.assign(m.createElement('script'), {
                        async: !0,
                        src: 'https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_recaptcha.v1.0.2.iife.js'
                    }))
                }))
        }();
    </script>
    <script integrity="sha256-n5Uet9jVOXPHGd4hH4B9Y6+BxkTluaaucmYaxAjUcvY="
        data-source-attribution="shopify.loadfeatures" defer="defer"
        src="//www.fedus.in/cdn/shopifycloud/shopify/assets/storefront/load_feature-9f951eb7d8d53973c719de211f807d63af81c644e5b9a6ae72661ac408d472f6.js"
        crossorigin="anonymous"></script>
    <script data-source-attribution="shopify.dynamic_checkout.dynamic.init">
        var Shopify = Shopify || {};
        Shopify.PaymentButton = Shopify.PaymentButton || {
            isStorefrontPortableWallets: !0,
            init: function () {
                window.Shopify.PaymentButton.init = function () { };
                var t = document.createElement("script");
                t.src = "https://www.fedus.in/cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js", t.type = "module", document.head.appendChild(t)
            }
        };
    </script>
    <script data-source-attribution="shopify.dynamic_checkout.cart.bootstrap">
        document.addEventListener("DOMContentLoaded", (function () {
            function t() {
                return document.querySelector("#dynamic-checkout-cart")
            }
            if (t()) Shopify.PaymentButton.init();
            else {
                new MutationObserver((function (e, n) {
                    t() && (Shopify.PaymentButton.init(), n.disconnect())
                })).observe(document.body, {
                    childList: !0,
                    subtree: !0
                })
            }
        }));
    </script>
    <script id="sections-script" data-sections="header-02" defer="defer"
        src="//www.fedus.in/cdn/shop/t/3/compiled_assets/scripts.js?1837"></script>

    <script>
        window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Jost:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap');

        :root {
            /* Settings Body */
            --font-body-family: Jost;
            --font-body-size: 20px;
            --font-body-weight: 400;
            --body-line-height: 30px;
            --body-letter-spacing: 0;
            /* Settings Heading */
            --font-heading-family: Jost;
            --font-heading-size: 25px;
            --font-heading-weight: 700;
            --font-heading-style: normal;
            --heading-line-height: 30px;
            --heading-letter-spacing: 0;
            --heading-text-transform: none;
            --heading-border-height: 1px;
            /* Settings Navigation */
            /* Menu Lv1 */
            --font-menu-lv1-family: Jost;
            --font-menu-lv1-size: 20px;
            --font-menu-lv1-weight: 400;
            --menu-lv1-line-height: 15px;
            --menu-lv1-letter-spacing: 0;
            --menu-lv1-text-transform: capitalize;
            /* Menu Lv2 */
            --font-menu-lv2-family: Jost;
            --font-menu-lv2-size: 15px;
            --font-menu-lv2-weight: 400;
            --menu-lv2-line-height: 15px;
            --menu-lv2-letter-spacing: 0;
            --menu-lv2-text-transform: capitalize;
            /* Menu Lv3 */
            --font-menu-lv3-family: Jost;
            --font-menu-lv3-size: 15px;
            --font-menu-lv3-weight: 400;
            --menu-lv3-line-height: 15px;
            --menu-lv3-letter-spacing: 0;
            --menu-lv3-text-transform: capitalize;
            /* Mega Menu Lv2 */
            --font-mega-menu-lv2-family: Jost;
            --font-mega-menu-lv2-size: 15px;
            --font-mega-menu-lv2-weight: 600;
            --font-mega-menu-lv2-style: normal;
            --mega-menu-lv2-line-height: 18px;
            --mega-menu-lv2-letter-spacing: 0;
            --mega-menu-lv2-text-transform: capitalize;
            /* Mega Menu Lv3 */
            --font-mega-menu-lv3-family: Jost;
            --font-mega-menu-lv3-size: 15px;
            --font-mega-menu-lv3-weight: 400;
            --mega-menu-lv3-line-height: 18px;
            --mega-menu-lv3-letter-spacing: 0;
            --mega-menu-lv3-text-transform: capitalize;
            /* Product Card Title */
            --product-title-font: Jost;
            --product-title-font-size: 20px;
            --product-title-font-weight: 400;
            --product-title-line-height: 25px;
            --product-title-letter-spacing: 0;
            --product-title-line-text: full;
            --product-title-text-transform: capitalize;
            --product-title-margin-bottom: 20px;
            /* Product Card Vendor */
            --product-vendor-font: Jost;
            --product-vendor-font-size: 12px;
            --product-vendor-font-weight: 400;
            --product-vendor-font-style: normal;
            --product-vendor-line-height: 20px;
            --product-vendor-letter-spacing: 0;
            --product-vendor-text-transform: capitalize;
            --product-vendor-margin-bottom: 20px;
            /* Product Card Price */
            --product-price-font: Jost;
            --product-price-font-size: 16px;
            --product-price-font-weight: 600;
            --product-price-line-height: 20px;
            --product-price-letter-spacing: 0;
            --product-price-margin-top: 20px;
            --product-price-margin-bottom: 20px;
            /* Product Card Badge */
            --badge-font: Jost;
            --badge-font-size: 15px;
            --badge-font-weight: 500;
            --badge-text-transform: capitalize;
            --badge-letter-spacing: 0;
            --badge-line-height: 20px;
            --badge-border-radius: 5px;
            --badge-padding-top: 5px;
            --badge-padding-bottom: 5px;
            --badge-padding-left-right: 15px;
            --badge-postion-top: 10px;
            --badge-postion-left-right: 10px;
            /* Product Quickview */
            --product-quickview-font-size: 12px;
            --product-quickview-line-height: 20px;
            --product-quickview-border-radius: 1px;
            --product-quickview-padding-top: 0px;
            --product-quickview-padding-bottom: 0px;
            --product-quickview-padding-left-right: 7px;
            --product-quickview-sold-out-product: #e95144;
            --product-quickview-box-shadow: none;
            /* Blog Card Tile */
            --blog-title-font: Jost;
            --blog-title-font-size: 20px;
            --blog-title-font-weight: 700;
            --blog-title-line-height: 20px;
            --blog-title-letter-spacing: .09em;
            --blog-title-text-transform: uppercase;
            /* Blog Card Info (Date, Author) */
            --blog-info-font: Jost;
            --blog-info-font-size: 15px;
            --blog-info-font-weight: 400;
            --blog-info-line-height: 20px;
            --blog-info-letter-spacing: .02em;
            --blog-info-text-transform: uppercase;
            /* Button 1 */
            --btn-1-font-family: Jost;
            --btn-1-font-size: 20px;
            --btn-1-font-weight: 700;
            --btn-1-text-transform: capitalize;
            --btn-1-line-height: 20px;
            --btn-1-letter-spacing: 0;
            --btn-1-text-align: center;
            --btn-1-border-radius: 10px;
            --btn-1-border-width: 1px;
            --btn-1-border-style: solid;
            --btn-1-padding-top: 10px;
            --btn-1-padding-bottom: 10px;
            --btn-1-horizontal-length: 0px;
            --btn-1-vertical-length: 0px;
            --btn-1-blur-radius: 0px;
            --btn-1-spread: 0px;
            --btn-1-all-bg-opacity-hover: rgba(0, 0, 0, 0.5);
            --btn-1-inset: ;
            /* Button 2 */
            --btn-2-font-family: Jost;
            --btn-2-font-size: 14px;
            --btn-2-font-weight: 700;
            --btn-2-text-transform: uppercase;
            --btn-2-line-height: 20px;
            --btn-2-letter-spacing: .05em;
            --btn-2-text-align: center;
            --btn-2-border-radius: 0px;
            --btn-2-border-width: 1px;
            --btn-2-border-style: solid;
            --btn-2-padding-top: 10px;
            --btn-2-padding-bottom: 10px;
            --btn-2-horizontal-length: 0px;
            --btn-2-vertical-length: 0px;
            --btn-2-blur-radius: 0px;
            --btn-2-spread: 0px;
            --btn-2-all-bg-opacity-hover: rgba(0, 0, 0, 0.5);
            --btn-2-inset: ;
            /* Button 3 */
            --btn-3-font-family: Jost;
            --btn-3-font-size: 16px;
            --btn-3-font-weight: 500;
            --btn-3-text-transform: capitalize;
            --btn-3-line-height: 20px;
            --btn-3-letter-spacing: 0;
            --btn-3-text-align: center;
            --btn-3-border-radius: 10px;
            --btn-3-border-width: 1px;
            --btn-3-border-style: solid;
            --btn-3-padding-top: 10px;
            --btn-3-padding-bottom: 11px;
            --btn-3-horizontal-length: 0px;
            --btn-3-vertical-length: 0px;
            --btn-3-blur-radius: 0px;
            --btn-3-spread: 0px;
            --btn-3-all-bg-opacity: rgba(0, 0, 0, 0.1);
            --btn-3-all-bg-opacity-hover: rgba(0, 0, 0, 0.1);
            --btn-3-inset: ;
            /* Footer Heading */
            --footer-heading-font-family: Jost;
            --footer-heading-font-size: 20px;
            --footer-heading-font-weight: 700;
            --footer-heading-line-height: 20px;
            --footer-heading-letter-spacing: 0;
            --footer-heading-text-transform: none;
            /* Footer Link */
            --footer-link-font-family: Jost;
            --footer-link-font-size: 16px;
            --footer-link-font-weight: 400;
            --footer-link-line-height: 20px;
            --footer-link-letter-spacing: 0;
            --footer-link-text-transform: capitalize;
            /* Page Title */
            --font-page-title-family: Jost;
            --font-page-title-size: 20px;
            --font-page-title-weight: 700;
            --font-page-title-style: normal;
            --page-title-line-height: 25px;
            --page-title-letter-spacing: .05em;
            --page-title-text-transform: uppercase;
            /* Font Product Tab Title */
            --font-tab-type-1: Jost;
            --font-tab-type-2: Jost;
            /* Text Size */
            --text-size-font-size: 10px;
            --text-size-font-weight: 400;
            --text-size-line-height: 22px;
            --text-size-letter-spacing: 0;
            --text-size-text-transform: uppercase;
            --text-size-color: #787878;
            /* Font Weight */
            --font-weight-normal: 400;
            --font-weight-medium: 500;
            --font-weight-semibold: 600;
            --font-weight-bold: 700;
            --font-weight-bolder: 800;
            --font-weight-black: 900;
            /* Radio Button */
            --form-label-checkbox-before-bg: #fff;
            --form-label-checkbox-before-border: #cecece;
            --form-label-checkbox-before-bg-checked: #000;
            /* Conatiner */
            --header-custom-width-container: 1400px;
            --body-custom-width-container: 1400px;
            --footer-custom-width-container: 1400px;
            /* Layout Boxed */
            --color-background-layout-boxed: #f8f8f8;
            /* Arrow */
            --position-horizontal-slick-arrow: -60px;
            /* General Color*/
            --color-text: #232323;
            --color-text2: #3c3c3c;
            --color-global: #232323;
            --color-white: #FFFFFF;
            --color-grey: #868686;
            --color-black: #202020;
            --color-base-text-rgb: 35, 35, 35;
            --color-base-text2-rgb: 60, 60, 60;
            --color-background: #ffffff;
            --color-background-rgb: 255, 255, 255;
            --color-background-overylay: rgba(255, 255, 255, 0.9);
            --color-base-accent-text: ;
            --color-base-accent-1: ;
            --color-base-accent-2: ;
            --color-link: #232323;
            --color-link-hover: #232323;
            --color-error: #D93333;
            --color-error-bg: #FCEEEE;
            --color-success: #5A5A5A;
            --color-success-bg: #DFF0D8;
            --color-info: #8b714a;
            --color-info-bg: #fbf8e5;
            --color-link-underline: rgba(35, 35, 35, 0.5);
            --color-breadcrumb: #999999;
            --colors-breadcrumb-hover: #232323;
            --colors-breadcrumb-active: #999999;
            --border-global: #e6e6e6;
            --bg-global: #fafafa;
            --bg-planceholder: #fafafa;
            --color-warning: #fff;
            --bg-warning: #e0b252;
            --color-background-10: #e9e9e9;
            --color-background-20: #d3d3d3;
            --color-background-30: #bdbdbd;
            --color-background-50: #919191;
            --color-background-global: #919191;
            /* Arrow Color */
            --arrow-color: #234bbb;
            --arrow-background-color: #fff;
            --arrow-border-color: #234bbb;
            --arrow-color-hover: #051c42;
            --arrow-background-color-hover: #ffffff;
            --arrow-border-color-hover: #051c42;
            --arrow-width: 36px;
            --arrow-height: 36px;
            --arrow-size: px;
            --arrow-size-icon: 17px;
            --arrow-border-radius: 50%;
            --arrow-border-width: 2px;
            /* Pagination Color */
            --pagination-item-color: #3c3c3c;
            --pagination-item-color-active: #3c3c3c;
            --pagination-item-bg-color: #fff;
            --pagination-item-bg-color-active: #f8f8f8;
            --pagination-item-border-color: #fff;
            --pagination-item-border-color-active: #ffffff;
            --pagination-arrow-color: #3c3c3c;
            --pagination-arrow-color-active: #ffffff;
            --pagination-arrow-bg-color: #fff;
            --pagination-arrow-bg-color-active: #232323;
            --pagination-arrow-border-color: #232323;
            --pagination-arrow-border-color-active: #232323;
            /* Dots Color */
            --dots-color: transparent;
            --dots-border-color: #d0d0d0;
            --dots-color-active: #051c42;
            --dots-border-color-active: #051c42;
            --dots-style2-background-opacity: #00000060;
            --dots-width: 10px;
            --dots-height: 10px;
            /* Button Color */
            --btn-1-color: #051c42;
            --btn-1-bg: #ffffff;
            --btn-1-border: #727272;
            --btn-1-color-hover: #ffffff;
            --btn-1-bg-hover: #e1732c;
            --btn-1-border-hover: #e1732c;
            --btn-2-color: #ffffff;
            --btn-2-bg: #e1732c;
            --btn-2-border: #e1732c;
            --btn-2-color-hover: #051c42;
            --btn-2-bg-hover: #ffffff;
            --btn-2-border-hover: #727272;
            --btn-3-color: #FFFFFF;
            --btn-3-bg: #e9514b;
            --btn-3-border: #e9514b;
            --btn-3-color-hover: #ffffff;
            --btn-3-bg-hover: #e9514b;
            --btn-3-border-hover: #e9514b;
            --anchor-transition: all ease .3s;
            --bg-white: #ffffff;
            --bg-black: #000000;
            --bg-grey: #808080;
            --icon: var(--color-text);
            --text-cart: #3c3c3c;
            --duration-short: 100ms;
            --duration-default: 350ms;
            --duration-long: 500ms;
            --form-input-bg: #ffffff;
            --form-input-border: #c7c7c7;
            --form-input-color: #232323;
            ;
            --form-input-placeholder: #868686;
            --form-label: #232323;
            --new-badge-color: #0a6cdc;
            --new-badge-bg: #d2e7ff;
            --sale-badge-color: #e10600;
            --sale-badge-bg: #ffd8d7;
            --sold-out-badge-color: #505050;
            --sold-out-badge-bg: #f5f5f5;
            --custom-badge-color: #fd9427;
            --custom-badge-bg: #feedbd;
            --bundle-badge-color: #43b200;
            --bundle-badge-bg: #d7ffd2;
            --product-title-color: #051c42;
            --product-title-color-hover: #234bbb;
            --product-vendor-color: #051c42;
            --product-price-color: #051c42;
            --product-sale-price-color: #e10600;
            --product-compare-price-color: #878787;
            --product-review-full-color: #f39c38;
            --product-review-empty-color: #e4e4e4;
            --product-swatch-border: #cbcbcb;
            --product-swatch-border-active: #232323;
            --product-swatch-width: 40px;
            --product-swatch-height: 40px;
            --product-swatch-border-radius: 0px;
            --product-swatch-color-width: 40px;
            --product-swatch-color-height: 40px;
            --product-swatch-color-border-radius: 20px;
            --product-wishlist-color: #051c42;
            --product-wishlist-bg: #f5f5f5;
            --product-wishlist-border: transparent;
            --product-wishlist-color-added: #051c42;
            --product-wishlist-bg-added: #ffe5e5;
            --product-wishlist-border-added: transparent;
            --product-compare-color: #000000;
            --product-compare-bg: #FFFFFF;
            --product-compare-color-added: #e95144;
            --product-compare-bg-added: #FFFFFF;
            --product-hot-stock-text-color: #d62828;
            --product-quick-view-color: #000000;
            --product-cart-image-fit: contain;
            --product-title-variant-font-size: 16px;
            --product-quick-view-bg: #FFFFFF;
            --product-quick-view-bg-above-button: rgba(255, 255, 255, 0.7);
            --product-quick-view-color-hover: #FFFFFF;
            --product-quick-view-bg-hover: #000000;
            --product-action-color: #051c42;
            --product-action-bg: #ffffff;
            --product-action-border: #051c42;
            --product-action-color-hover: #FFFFFF;
            --product-action-bg-hover: #e1732c;
            --product-action-border-hover: #e1732c;
            /* Multilevel Category Filter */
            --color-label-multiLevel-categories: #232323;
            --bg-label-multiLevel-categories: #fff;
            --color-button-multiLevel-categories: #fff;
            --bg-button-multiLevel-categories: #ff8b21;
            --border-button-multiLevel-categories: transparent;
            --hover-color-button-multiLevel-categories: #fff;
            --hover-bg-button-multiLevel-categories: #ff8b21;
            --cart-item-bg: #ffffff;
            --cart-item-border: #e8e8e8;
            --cart-item-border-width: 1px;
            --cart-item-border-style: solid;
            --w-product-swatch-custom: 30px;
            --h-product-swatch-custom: 30px;
            --w-product-swatch-custom-mb: 22px;
            --h-product-swatch-custom-mb: 22px;
            --font-size-product-swatch-more: 14px;
            --swatch-border: #cbcbcb;
            --swatch-border-active: #232323;
            --variant-size: #232323;
            --variant-size-border: #e7e7e7;
            --variant-size-bg: #ffffff;
            --variant-size-hover: #ffffff;
            --variant-size-border-hover: #232323;
            --variant-size-bg-hover: #232323;
            --variant-bg: #ffffff;
            --variant-color: #232323;
            --variant-bg-active: #ffffff;
            --variant-color-active: #232323;
            /* Font Size Text Social */
            --fontsize-text-social: 12px;
            /* Sidebar Animation */
            --page-content-distance: 64px;
            --sidebar-content-distance: 40px;
            --button-transition-ease: cubic-bezier(.25, .46, .45, .94);
            /* Loading Spinner Color */
            --spinner-top-color: #fc0;
            --spinner-right-color: #4dd4c6;
            --spinner-bottom-color: #f00;
            --spinner-left-color: #f6f6f6;
        }
    </style>

    <link href="//www.fedus.in/cdn/shop/t/3/assets/base.css?v=45647627681792439841672341180" rel="stylesheet"
        type="text/css" media="all" />
    <script>
        document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    </script>


    <script type="text/javascript">
        window.Rivo = window.Rivo || {};
        window.Rivo.common = window.Rivo.common || {};
        window.Rivo.common.shop = {
            permanent_domain: 'fedus-1593.myshopify.com',
            currency: "INR",
            money_format: "₹. {{amount}}",
            id: 69686886700
        };


        window.Rivo.common.template = 'index';
        window.Rivo.common.cart = {};
        window.Rivo.common.vapid_public_key = "BJuXCmrtTK335SuczdNVYrGVtP_WXn4jImChm49st7K7z7e8gxSZUKk4DhUpk8j2Xpiw5G4-ylNbMKLlKkUEU98=";
        window.Rivo.global_config = {
            "asset_urls": {
                "loy": {
                    "api_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_rivo_api.js?v=1685740671",
                    "init_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_loy_init.js?v=1685740661",
                    "referrals_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_loy_referrals.js?v=1685740667",
                    "referrals_css": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_loy_referrals.css?v=1678639051",
                    "widget_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_loy_widget.js?v=1685740663",
                    "widget_css": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_loy_widget.css?v=1673976822",
                    "page_init_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_loy_page_init.js?v=1685740664",
                    "page_widget_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_loy_page_widget.js?v=1685740666",
                    "page_widget_css": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_loy_page.css?v=1673976829",
                    "page_preview_js": "\/assets\/msg\/loy_page_preview.js"
                },
                "rev": {
                    "init_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_rev_init.js?v=1685412501",
                    "display_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_rev_display.js?v=1681565823",
                    "modal_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_rev_modal.js?v=1681565821",
                    "widget_css": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_rev_widget.css?v=1680320455",
                    "modal_css": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_rev_modal.css?v=1680295707"
                },
                "pu": {
                    "init_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_pu_init.js?v=1635877170"
                },
                "widgets": {
                    "init_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_widget_init.js?v=1679987682",
                    "modal_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_widget_modal.js?v=1679987684",
                    "modal_css": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_widget_modal.css?v=1654723622"
                },
                "forms": {
                    "init_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_forms_init.js?v=1685740668",
                    "widget_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_forms_widget.js?v=1685740669",
                    "forms_css": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_forms.css?v=1654711758"
                },
                "global": {
                    "helper_js": "https:\/\/cdn.shopify.com\/s\/files\/1\/0194\/1736\/6592\/t\/1\/assets\/ba_tracking.js?v=1680229884"
                }
            },
            "proxy_paths": {
                "rev": "\/apps\/ba-rev",
                "app_metrics": "\/apps\/ba-rev\/app_metrics",
                "push_subscription": "\/apps\/ba-rev\/push"
            },
            "aat": ["rev"],
            "pv": false,
            "sts": false,
            "bam": false,
            "batc": false,
            "base_money_format": "₹. {{amount}}",
            "online_store_version": 2,
            "loy_js_api_enabled": false,
            "shop": {
                "name": "FEDUS",
                "domain": "www.fedus.in"
            }
        };




        window.Rivo.rev_config = {
            "api_endpoint": "\/apps\/ba-rev\/rev\/ratings",
            "widget_enabled": true,
            "review_discount_email_enabled": false,
            "translations": {
                "back": "Back",
                "done": "Done",
                "next": "Next",
                "skip": "Skip",
                "email": "Email Address *",
                "review": "Review",
                "reviews": "Reviews",
                "continue": "Continue",
                "about_you": "Complete your review",
                "last_name": "Last name",
                "thank_you": "Thanks for your review!",
                "first_name": "Last name",
                "reviewed_on": "Reviewed on",
                "show_it_off": "Upload a photo or video",
                "choose_photo": "Click to add photo",
                "choose_video": "Click to add video",
                "modal_header": "How would you rate this product?",
                "review_title": "Add a title for your review",
                "shop_replied": "{{shop_name}} replied:",
                "tell_us_more": "Share your experience",
                "use_discount": "Here's your discount code for {{discount_amount}} off your next order",
                "invalid_email": "Please enter a valid email address",
                "star1_caption": "Hate it",
                "star2_caption": "",
                "star3_caption": "It's ok",
                "star4_caption": "",
                "star5_caption": "Love it!",
                "vote_question": "Was this review helpful?",
                "no_reviews_yet": "No reviews yet",
                "privacy_policy": "Privacy Policy",
                "required_field": "Required",
                "write_a_review": "Write a review",
                "first_person_to": "Be the first person to",
                "get_percent_off": "Get 5% off your next order!",
                "terms_of_service": "Terms of Service",
                "show_more_reviews": "See more reviews",
                "verified_customer": "Verified Customer",
                "verified_review_on": "Verified review of {{product_title}}",
                "is_recommended_text": "I recommended this product",
                "not_recommended_text": "I do not recommend this product",
                "review_was_submitted": "Your review was submitted.",
                "share_your_experience": "How was your overall experience?",
                "discount_sent_by_email": "We also sent it by email.",
                "error_submitting_review": "Error submitting review, please try again later.",
                "email_already_registered": "Email already left a review",
                "by_submitting_i_acknowledge": "By completing, I acknowledge the",
                "review_will_publicly_posted": "and that my review will be posted publicly online",
                "we_love_to_see_it_in_action": "We'd love to showcase it on our website!",
                "review_summary_based_on_reviews": "Based on {{reviews_count}} reviews"
            },
            "widget_css": {
                "theme_link_color": "#999999",
                "theme_star_color": "#F1C645",
                "theme_title_color": "#000000",
                "theme_footer_color": "#999999",
                "theme_subtext_color": "#888888",
                "theme_button_bg_color": "#FFFFFF",
                "theme_star_text_color": "#000000",
                "theme_input_text_color": "#000000",
                "theme_button_text_color": "#000000",
                "theme_launcher_bg_color": "#039be5",
                "theme_button_hover_color": "#000000",
                "theme_global_icons_color": "#000000",
                "theme_input_border_color": "#C1C1C1",
                "theme_button_border_color": "#000000",
                "theme_launcher_text_color": "#FFFFFF",
                "theme_global_primary_color": "#039be5",
                "theme_launcher_border_color": "",
                "theme_global_button_bg_color": "#039be5",
                "theme_global_secondary_color": "#1976d2",
                "theme_first_review_text_color": "#000000",
                "theme_launcher_hover_bg_color": "",
                "theme_global_button_text_color": "#FFFFFF",
                "theme_global_button_corner_type": "regular",
                "theme_launcher_hover_text_color": ""
            },
            "custom_css": "",
            "widget_settings": {
                "display_per_page": 10,
                "display_date_type": "full",
                "display_list_type": "grid",
                "display_summary_type": "small",
                "display_video_enabled": false,
                "display_star_fill_type": "full",
                "display_voting_enabled": false,
                "display_panel_custom_css": "",
                "display_rating_text_type": "words",
                "display_panel_custom_class": "",
                "display_storefront_enabled": true,
                "display_review_date_enabled": true,
                "display_star_rating_enabled": true,
                "display_verified_badge_enabled": false,
                "display_recommendations_enabled": false,
                "display_product_stars_custom_selector": "",
                "display_write_a_review_storefront_enabled": true
            },
            "removed_rivo_branding": false,
            "discount_info": {
                "discount_type": "percentage",
                "discount_amount": 15
            }
        };
    </script>


    <script type="text/javascript">
        //Global snippet for Rivo
        //this is updated automatically - do not edit manually.

        function loadScript(src, defer, done) {
            var js = document.createElement('script');
            js.src = src;
            js.defer = defer;
            js.onload = function () {
                done();
            };
            js.onerror = function () {
                done(new Error('Failed to load script ' + src));
            };
            document.head.appendChild(js);
        }

        function browserSupportsAllFeatures() {
            return window.Promise && window.fetch && window.Symbol;
        }

        if (browserSupportsAllFeatures()) {
            main();
        } else {
            loadScript('https://polyfill.io/v3/polyfill.min.js?features=Promise,fetch', true, main);
        }

        function loadAppScripts() {
            if (window.Rivo.global_config.aat.includes("loy")) {
                loadScript(window.Rivo.global_config.asset_urls.loy.init_js, true, function () { });
            }

            if (window.Rivo.global_config.aat.includes("rev")) {
                loadScript(window.Rivo.global_config.asset_urls.rev.init_js, true, function () { });
            }

            if (window.Rivo.global_config.aat.includes("pu")) {
                loadScript(window.Rivo.global_config.asset_urls.pu.init_js, true, function () { });
            }

            if (window.Rivo.global_config.aat.includes("pop") || window.Rivo.global_config.aat.includes("pu")) {
                loadScript(window.Rivo.global_config.asset_urls.widgets.init_js, true, function () { });
            }
        }

        function main(err) {
            loadScript(window.Rivo.global_config.asset_urls.global.helper_js, false, loadAppScripts);
        }
    </script>

    <!-- BEGIN app block: shopify://apps/adperfect-marketing-platform/blocks/app-embed/8b4a8c56-21b5-437e-95f9-cd5dc65ceb49 -->
    <script
        src="https://cdn.shopify.com/extensions/a0d52be8-d46a-408d-8508-8e67761bd841/adperfect-marketing-platform-1/assets/polyfill.min.js"
        async></script>
    <script
        src="https://cdn.shopify.com/extensions/a0d52be8-d46a-408d-8508-8e67761bd841/adperfect-marketing-platform-1/assets/maska.js"
        async></script>

    <script>
        // Function to make IE9+ support forEach:
        if (window.NodeList && !NodeList.prototype.forEach) {
            NodeList.prototype.forEach = Array.prototype.forEach;
        }
    </script>

    <script>
        window.miYo2v4moj_shop_domain = 'www.fedus.in';
    </script>

    <!-- END app app block -->
    <!-- BEGIN app block: shopify://apps/powerful-contact-form-builder/blocks/app-embed/e4bcb1eb-35b2-42e6-bc37-bfe0e1542c9d -->
    <script></script>

    <script type="text/javascript" hs-ignore>
        var Globo = Globo || {};
        var globoFormbuilderRecaptchaInit = function () { };
        window.Globo.FormBuilder = window.Globo.FormBuilder || {};
        window.Globo.FormBuilder.shop = {
            "configuration": {
                "money_format": "₹. {{amount}}"
            },
            "pricing": {
                "features": {
                    "bulkOrderForm": true,
                    "cartForm": true,
                    "fileUpload": 30,
                    "removeCopyright": true
                }
            },
            "settings": {
                "copyright": "Powered by <a href=\"https://globosoftware.net\" target=\"_blank\">Globo</a> <a href=\"https://apps.shopify.com/form-builder-contact-form\" target=\"_blank\">Form</a>",
                "hideWaterMark": false,
                "reCaptcha": {
                    "recaptchaType": "v2",
                    "siteKey": false,
                    "languageCode": "en"
                },
                "scrollTop": false,
                "additionalColumns": []
            },
            "encryption_form_id": 1,
            "url": "https://form.globosoftware.net/"
        };
        window.Globo.FormBuilder.forms = [];




        window.Globo.FormBuilder.forms[105313] = {
            "105313": {
                "elements": [{
                    "id": "group-1",
                    "type": "group",
                    "label": "Page 1",
                    "description": "",
                    "elements": [{
                        "id": "text",
                        "type": "text",
                        "label": "Your Name",
                        "placeholder": "Your Name",
                        "description": "",
                        "limitCharacters": false,
                        "characters": 100,
                        "hideLabel": false,
                        "keepPositionLabel": false,
                        "required": true,
                        "ifHideLabel": false,
                        "inputIcon": "",
                        "columnWidth": 50
                    }, {
                        "id": "email",
                        "type": "email",
                        "label": "Email",
                        "placeholder": "Email",
                        "description": "",
                        "limitCharacters": false,
                        "characters": 100,
                        "hideLabel": false,
                        "keepPositionLabel": false,
                        "required": true,
                        "ifHideLabel": false,
                        "inputIcon": "\u003csvg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"envelope\" class=\"svg-inline--fa fa-envelope fa-w-16\" role=\"img\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 512 512\"\u003e\u003cpath fill=\"currentColor\" d=\"M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z\"\u003e\u003c\/path\u003e\u003c\/svg\u003e",
                        "columnWidth": 50
                    }, {
                        "id": "phone",
                        "type": "phone",
                        "label": "Phone",
                        "placeholder": "",
                        "description": "",
                        "validatePhone": false,
                        "onlyShowFlag": false,
                        "defaultCountryCode": "us",
                        "limitCharacters": true,
                        "characters": "10",
                        "hideLabel": false,
                        "keepPositionLabel": false,
                        "required": true,
                        "ifHideLabel": false,
                        "inputIcon": "\u003csvg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"phone-alt\" class=\"svg-inline--fa fa-phone-alt fa-w-16\" role=\"img\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 512 512\"\u003e\u003cpath fill=\"currentColor\" d=\"M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z\"\u003e\u003c\/path\u003e\u003c\/svg\u003e",
                        "columnWidth": 50
                    }, {
                        "id": "text-2",
                        "type": "text",
                        "label": "Order id",
                        "placeholder": "",
                        "description": "",
                        "limitCharacters": false,
                        "characters": 100,
                        "hideLabel": false,
                        "keepPositionLabel": false,
                        "required": true,
                        "ifHideLabel": false,
                        "inputIcon": "",
                        "columnWidth": 50
                    }, {
                        "id": "file",
                        "type": "file",
                        "label": "File",
                        "button-text": "Choose file",
                        "placeholder": "",
                        "allowed-multiple": false,
                        "allowed-extensions": ["jpg", "jpeg", "png", "pdf"],
                        "description": "File size 3 MB",
                        "uploadPending": "File is uploading. Please wait a second...",
                        "uploadSuccess": "File uploaded successfully",
                        "hideLabel": false,
                        "keepPositionLabel": false,
                        "required": true,
                        "ifHideLabel": false,
                        "inputIcon": "",
                        "columnWidth": 50
                    }]
                }],
                "errorMessage": {
                    "required": "Please fill in field",
                    "invalid": "Invalid",
                    "invalidName": "Invalid name",
                    "invalidEmail": "Invalid email",
                    "invalidURL": "Invalid URL",
                    "invalidPhone": "Invalid phone",
                    "invalidNumber": "Invalid number",
                    "invalidPassword": "Invalid password",
                    "confirmPasswordNotMatch": "Confirmed password doesn't match",
                    "customerAlreadyExists": "Customer already exists",
                    "fileSizeLimit": "File size limit exceeded",
                    "fileNotAllowed": "File extension not allowed",
                    "requiredCaptcha": "Please, enter the captcha",
                    "requiredProducts": "Please select product",
                    "limitQuantity": "The number of products left in stock has been exceeded",
                    "shopifyInvalidPhone": "phone - Enter a valid phone number to use this delivery method",
                    "shopifyPhoneHasAlready": "phone - Phone has already been taken",
                    "shopifyInvalidProvice": "addresses.province - is not valid",
                    "otherError": "Something went wrong, please try again"
                },
                "appearance": {
                    "layout": "boxed",
                    "width": "900",
                    "style": "classic",
                    "mainColor": "#EB1256",
                    "headingColor": "#000",
                    "labelColor": "#000",
                    "descriptionColor": "#6c757d",
                    "optionColor": "#000",
                    "paragraphColor": "#000",
                    "paragraphBackground": "#fff",
                    "background": "color",
                    "backgroundColor": "#FFF",
                    "backgroundImage": "",
                    "backgroundImageAlignment": "middle",
                    "floatingIcon": "\u003csvg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\" data-icon=\"envelope\" class=\"svg-inline--fa fa-envelope fa-w-16\" role=\"img\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 512 512\"\u003e\u003cpath fill=\"currentColor\" d=\"M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z\"\u003e\u003c\/path\u003e\u003c\/svg\u003e",
                    "floatingText": "",
                    "displayOnAllPage": false,
                    "position": "bottom right",
                    "formType": "normalForm",
                    "newTemplate": true
                },
                "afterSubmit": {
                    "action": "clearForm",
                    "message": "\u003ch2 style=\"text-align: center;\"\u003e\u003cstrong\u003eYour product warranty has been activated \u003c\/strong\u003e\u003c\/h2\u003e\n\u003cp style=\"text-align: center;\"\u003e\u003cstrong\u003eThank you for purchasing FEDUS product We hope that our product will live up to your expectations\u003c\/strong\u003e\u003c\/p\u003e\n\u003cp style=\"text-align: center;\"\u003e\u003cstrong\u003eIf you have any inquiry, please contact our customer care\u003c\/strong\u003e\u003c\/p\u003e\n\u003cp style=\"text-align: center;\"\u003e\u003cstrong\u003eHave a great day!\u003c\/strong\u003e\u003c\/p\u003e",
                    "redirectUrl": "",
                    "enableGa": true,
                    "gaEventCategory": "Form Builder by Globo",
                    "gaEventAction": "Submit",
                    "gaEventLabel": "Contact us form",
                    "enableFpx": true,
                    "fpxTrackerName": ""
                },
                "accountPage": {
                    "showAccountDetail": false,
                    "registrationPage": false,
                    "editAccountPage": false,
                    "header": "Header",
                    "active": false,
                    "title": "Account details",
                    "headerDescription": "Fill out the form to change account information",
                    "afterUpdate": "Message after update",
                    "message": "\u003ch5\u003eAccount edited successfully!\u003c\/h5\u003e",
                    "footer": "Footer",
                    "updateText": "Update",
                    "footerDescription": ""
                },
                "footer": {
                    "description": "\u003cp class=\"ql-align-center\"\u003e\u003cspan style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\"\u003eWe work on activating your device warranty. We might reach out to you if we need to validate few details so please ensure your contact details in the form are accurate. We will keep you informed via phone \u0026amp; email on the progress meanwhile.\u003c\/span\u003e\u003c\/p\u003e",
                    "previousText": "Previous",
                    "nextText": "Next",
                    "submitText": "Submit",
                    "resetButton": false,
                    "resetButtonText": "Reset",
                    "submitFullWidth": true,
                    "submitAlignment": "left"
                },
                "header": {
                    "active": true,
                    "title": "Warranty Activation",
                    "description": "\u003ch4 class=\"ql-align-center\"\u003e\u003cstrong\u003ePlease enter the details below to activate the warranty for your product\u003c\/strong\u003e\u003c\/h4\u003e"
                },
                "isStepByStepForm": true,
                "publish": {
                    "requiredLogin": false,
                    "requiredLoginMessage": "Please \u003ca href='\/account\/login' title='login'\u003elogin\u003c\/a\u003e to continue",
                    "publishType": "embedCode",
                    "embedCode": "\u003cdiv class=\"globo-formbuilder\" data-id=\"MTA1MzEz\"\u003e\u003c\/div\u003e",
                    "shortCode": "{formbuilder:MTA1MzEz}",
                    "popup": "\u003cbutton class=\"globo-formbuilder-open\" data-id=\"MTA1MzEz\"\u003eOpen form\u003c\/button\u003e",
                    "lightbox": "\u003cdiv class=\"globo-form-publish-modal lightbox hidden\" data-id=\"MTA1MzEz\"\u003e\u003cdiv class=\"globo-form-modal-content\"\u003e\u003cdiv class=\"globo-formbuilder\" data-id=\"MTA1MzEz\"\u003e\u003c\/div\u003e\u003c\/div\u003e\u003c\/div\u003e",
                    "enableAddShortCode": true,
                    "selectPage": "111594406188",
                    "selectPositionOnPage": "bottom",
                    "selectTime": "forever",
                    "setCookie": "1",
                    "setCookieHours": "1",
                    "setCookieWeeks": "1"
                },
                "reCaptcha": {
                    "enable": false,
                    "note": "Please make sure that you have set Google reCaptcha v2 Site key and Secret key in \u003ca href=\"\/admin\/settings\"\u003eSettings\u003c\/a\u003e"
                },
                "html": "\n\u003cdiv class=\"globo-form boxed-form globo-form-id-105313\"\u003e\n\u003cstyle\u003e\n.globo-form-id-105313 .globo-form-app{\n    max-width: 900px;\n    width: -webkit-fill-available;\n    \n    background-color: #FFF;\n    \n    \n}\n\n.globo-form-id-105313 .globo-form-app .globo-heading{\n    color: #000\n}\n.globo-form-id-105313 .globo-form-app .globo-description,\n.globo-form-id-105313 .globo-form-app .header .globo-description{\n    color: #6c757d\n}\n.globo-form-id-105313 .globo-form-app .globo-label,\n.globo-form-id-105313 .globo-form-app .globo-form-control label.globo-label,\n.globo-form-id-105313 .globo-form-app .globo-form-control label.globo-label span.label-content{\n    color: #000;\n    text-align: left !important;\n}\n.globo-form-id-105313 .globo-form-app .globo-label.globo-position-label{\n    height: 20px !important;\n}\n.globo-form-id-105313 .globo-form-app .globo-form-control .help-text.globo-description{\n    color: #6c757d\n}\n.globo-form-id-105313 .globo-form-app .globo-form-control .checkbox-wrapper .globo-option,\n.globo-form-id-105313 .globo-form-app .globo-form-control .radio-wrapper .globo-option\n{\n    color: #000\n}\n.globo-form-id-105313 .globo-form-app .footer{\n    text-align:left;\n}\n.globo-form-id-105313 .globo-form-app .footer button{\n    border:1px solid #EB1256;\n    \n        width:100%;\n    \n}\n.globo-form-id-105313 .globo-form-app .footer button.submit,\n.globo-form-id-105313 .globo-form-app .footer button.checkout,\n.globo-form-id-105313 .globo-form-app .footer button.action.loading .spinner{\n    background-color: #EB1256;\n    color : #ffffff;\n}\n.globo-form-id-105313 .globo-form-app .globo-form-control .star-rating\u003efieldset:not(:checked)\u003elabel:before {\n    content: url('data:image\/svg+xml; utf8, \u003csvg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\" data-icon=\"star\" class=\"svg-inline--fa fa-star fa-w-18\" role=\"img\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 576 512\"\u003e\u003cpath fill=\"%23EB1256\" d=\"M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z\"\u003e\u003c\/path\u003e\u003c\/svg\u003e');\n}\n.globo-form-id-105313 .globo-form-app .globo-form-control .star-rating\u003efieldset\u003einput:checked ~ label:before {\n    content: url('data:image\/svg+xml; utf8, \u003csvg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"star\" class=\"svg-inline--fa fa-star fa-w-18\" role=\"img\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 576 512\"\u003e\u003cpath fill=\"%23EB1256\" d=\"M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\"\u003e\u003c\/path\u003e\u003c\/svg\u003e');\n}\n.globo-form-id-105313 .globo-form-app .globo-form-control .star-rating\u003efieldset:not(:checked)\u003elabel:hover:before,\n.globo-form-id-105313 .globo-form-app .globo-form-control .star-rating\u003efieldset:not(:checked)\u003elabel:hover ~ label:before{\n    content : url('data:image\/svg+xml; utf8, \u003csvg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"star\" class=\"svg-inline--fa fa-star fa-w-18\" role=\"img\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 576 512\"\u003e\u003cpath fill=\"%23EB1256\" d=\"M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\"\u003e\u003c\/path\u003e\u003c\/svg\u003e')\n}\n.globo-form-id-105313 .globo-form-app .globo-form-control .radio-wrapper .radio-input:checked ~ .radio-label:after {\n    background: #EB1256;\n    background: radial-gradient(#EB1256 40%, #fff 45%);\n}\n.globo-form-id-105313 .globo-form-app .globo-form-control .checkbox-wrapper .checkbox-input:checked ~ .checkbox-label:before {\n    border-color: #EB1256;\n    box-shadow: 0 4px 6px rgba(50,50,93,0.11), 0 1px 3px rgba(0,0,0,0.08);\n    background-color: #EB1256;\n}\n.globo-form-id-105313 .globo-form-app .step.-completed .step__number,\n.globo-form-id-105313 .globo-form-app .line.-progress,\n.globo-form-id-105313 .globo-form-app .line.-start{\n    background-color: #EB1256;\n}\n.globo-form-id-105313 .globo-form-app .checkmark__check,\n.globo-form-id-105313 .globo-form-app .checkmark__circle{\n    stroke: #EB1256;\n}\n.globo-form-id-105313 .floating-button{\n    background-color: #EB1256;\n}\n.globo-form-id-105313 .globo-form-app .globo-form-control .checkbox-wrapper .checkbox-input ~ .checkbox-label:before,\n.globo-form-app .globo-form-control .radio-wrapper .radio-input ~ .radio-label:after{\n    border-color : #EB1256;\n}\n.globo-form-id-105313 .flatpickr-day.selected, \n.globo-form-id-105313 .flatpickr-day.startRange, \n.globo-form-id-105313 .flatpickr-day.endRange, \n.globo-form-id-105313 .flatpickr-day.selected.inRange, \n.globo-form-id-105313 .flatpickr-day.startRange.inRange, \n.globo-form-id-105313 .flatpickr-day.endRange.inRange, \n.globo-form-id-105313 .flatpickr-day.selected:focus, \n.globo-form-id-105313 .flatpickr-day.startRange:focus, \n.globo-form-id-105313 .flatpickr-day.endRange:focus, \n.globo-form-id-105313 .flatpickr-day.selected:hover, \n.globo-form-id-105313 .flatpickr-day.startRange:hover, \n.globo-form-id-105313 .flatpickr-day.endRange:hover, \n.globo-form-id-105313 .flatpickr-day.selected.prevMonthDay, \n.globo-form-id-105313 .flatpickr-day.startRange.prevMonthDay, \n.globo-form-id-105313 .flatpickr-day.endRange.prevMonthDay, \n.globo-form-id-105313 .flatpickr-day.selected.nextMonthDay, \n.globo-form-id-105313 .flatpickr-day.startRange.nextMonthDay, \n.globo-form-id-105313 .flatpickr-day.endRange.nextMonthDay {\n    background: #EB1256;\n    border-color: #EB1256;\n}\n.globo-form-id-105313 .globo-paragraph,\n.globo-form-id-105313 .globo-paragraph * {\n    background: #fff !important;\n    color: #000 !important;\n    width: 100%!important;\n}\n\u003c\/style\u003e\n\u003cdiv class=\"globo-form-app boxed-layout\"\u003e\n    \u003cdiv class=\"header dismiss hidden\" onclick=\"Globo.FormBuilder.closeModalForm(this)\"\u003e\n        \u003csvg width=20 height=20 viewBox=\"0 0 20 20\" class=\"\" focusable=\"false\" aria-hidden=\"true\"\u003e\u003cpath d=\"M11.414 10l4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z\" fill-rule=\"evenodd\"\u003e\u003c\/path\u003e\u003c\/svg\u003e\n    \u003c\/div\u003e\n    \u003cform class=\"g-container\" novalidate action=\"\/api\/front\/form\/105313\/send\" method=\"POST\" enctype=\"multipart\/form-data\" data-id=105313\u003e\n        \n            \n            \u003cdiv class=\"header\"\u003e\n                \u003ch3 class=\"title globo-heading\"\u003eWarranty Activation\u003c\/h3\u003e\n                \n                \u003cdiv class=\"description globo-description\"\u003e\u003ch4 class=\"ql-align-center\"\u003e\u003cstrong\u003ePlease enter the details below to activate the warranty for your product\u003c\/strong\u003e\u003c\/h4\u003e\u003c\/div\u003e\n                \n            \u003c\/div\u003e\n            \n        \n        \n            \u003cdiv class=\"globo-formbuilder-wizard\" data-id=105313\u003e\n                \u003cdiv class=\"wizard__content\"\u003e\n                    \u003cheader class=\"wizard__header\"\u003e\n                        \u003cdiv class=\"wizard__steps\"\u003e\n                        \u003cnav class=\"steps hidden\"\u003e\n                            \n                                \n                                \n                                \n                                \u003cdiv class=\"step last \"  data-step=\"0\"\u003e\n                                    \u003cdiv class=\"step__content\"\u003e\n                                        \u003cp class=\"step__number\"\u003e\u003c\/p\u003e\n                                        \u003csvg class=\"checkmark\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=52 height=52 viewBox=\"0 0 52 52\"\u003e\n                                            \u003ccircle class=\"checkmark__circle\" cx=\"26\" cy=\"26\" r=\"25\" fill=\"none\"\/\u003e\n                                            \u003cpath class=\"checkmark__check\" fill=\"none\" d=\"M14.1 27.2l7.1 7.2 16.7-16.8\"\/\u003e\n                                        \u003c\/svg\u003e\n                                        \u003cdiv class=\"lines\"\u003e\n                                            \n                                                \u003cdiv class=\"line -start\"\u003e\u003c\/div\u003e\n                                            \n                                            \u003cdiv class=\"line -background\"\u003e\n                                            \u003c\/div\u003e\n                                            \u003cdiv class=\"line -progress\"\u003e\n                                            \u003c\/div\u003e\n                                        \u003c\/div\u003e  \n                                    \u003c\/div\u003e\n                                \u003c\/div\u003e\n                            \n                        \u003c\/nav\u003e\n                        \u003c\/div\u003e\n                    \u003c\/header\u003e\n                    \u003cdiv class=\"panels\"\u003e\n                        \n                        \n                        \n                        \n                        \u003cdiv class=\"panel \" data-id=105313  data-step=\"0\" style=\"padding-top:0\"\u003e\n                            \n                                \n                                    \n\n\n\n\n\n\n\n\n\n\u003cdiv class=\"globo-form-control layout-2-column\" \u003e\n    \u003clabel for=\"105313-text\" class=\"classic-label globo-label \"\u003e\u003cspan class=\"label-content\" data-label=\"Your Name\"\u003eYour Name\u003c\/span\u003e\u003cspan class=\"text-danger text-smaller\"\u003e *\u003c\/span\u003e\u003c\/label\u003e\n    \u003cdiv class=\"globo-form-input\"\u003e\n        \n        \u003cinput type=\"text\"  data-type=\"text\" class=\"classic-input\" id=\"105313-text\" name=\"text\" placeholder=\"Your Name\" presence  \u003e\n    \u003c\/div\u003e\n    \n    \u003csmall class=\"messages\"\u003e\u003c\/small\u003e\n\u003c\/div\u003e\n\n\n                                \n                                    \n\n\n\n\n\n\n\n\n\n\u003cdiv class=\"globo-form-control layout-2-column\" \u003e\n    \u003clabel for=\"105313-email\" class=\"classic-label globo-label \"\u003e\u003cspan class=\"label-content\" data-label=\"Email\"\u003eEmail\u003c\/span\u003e\u003cspan class=\"text-danger text-smaller\"\u003e *\u003c\/span\u003e\u003c\/label\u003e\n    \u003cdiv class=\"globo-form-input\"\u003e\n        \u003cdiv class=\"globo-form-icon\"\u003e\u003csvg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"envelope\" class=\"svg-inline--fa fa-envelope fa-w-16\" role=\"img\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 512 512\"\u003e\u003cpath fill=\"currentColor\" d=\"M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z\"\u003e\u003c\/path\u003e\u003c\/svg\u003e\u003c\/div\u003e\n        \u003cinput type=\"text\"  data-type=\"email\" class=\"classic-input\" id=\"105313-email\" name=\"email\" placeholder=\"Email\" presence  \u003e\n    \u003c\/div\u003e\n    \n    \u003csmall class=\"messages\"\u003e\u003c\/small\u003e\n\u003c\/div\u003e\n\n\n                                \n                                    \n\n\n\n\n\n\n\n\n\n\u003cdiv class=\"globo-form-control layout-2-column\" \u003e\n    \u003clabel for=\"105313-phone\" class=\"classic-label globo-label \"\u003e\u003cspan class=\"label-content\" data-label=\"Phone\"\u003ePhone\u003c\/span\u003e\u003cspan class=\"text-danger text-smaller\"\u003e *\u003c\/span\u003e\u003c\/label\u003e\n    \u003cdiv class=\"globo-form-input\"\u003e\n        \u003cdiv class=\"globo-form-icon\"\u003e\u003csvg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"phone-alt\" class=\"svg-inline--fa fa-phone-alt fa-w-16\" role=\"img\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 512 512\"\u003e\u003cpath fill=\"currentColor\" d=\"M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z\"\u003e\u003c\/path\u003e\u003c\/svg\u003e\u003c\/div\u003e\n        \u003cinput type=\"text\"  data-type=\"phone\" class=\"classic-input\" id=\"105313-phone\" name=\"phone\" placeholder=\"\" presence maxlength=\"10\"   default-country-code=\"us\"\u003e\n    \u003c\/div\u003e\n    \n    \u003csmall class=\"messages\"\u003e\u003c\/small\u003e\n\u003c\/div\u003e\n\n\n                                \n                                    \n\n\n\n\n\n\n\n\n\n\u003cdiv class=\"globo-form-control layout-2-column\" \u003e\n    \u003clabel for=\"105313-text-2\" class=\"classic-label globo-label \"\u003e\u003cspan class=\"label-content\" data-label=\"Order id\"\u003eOrder id\u003c\/span\u003e\u003cspan class=\"text-danger text-smaller\"\u003e *\u003c\/span\u003e\u003c\/label\u003e\n    \u003cdiv class=\"globo-form-input\"\u003e\n        \n        \u003cinput type=\"text\"  data-type=\"text\" class=\"classic-input\" id=\"105313-text-2\" name=\"text-2\" placeholder=\"\" presence  \u003e\n    \u003c\/div\u003e\n    \n    \u003csmall class=\"messages\"\u003e\u003c\/small\u003e\n\u003c\/div\u003e\n\n\n                                \n                                    \n\n\n\n\n\n\n\n\n\n\u003cdiv class=\"globo-form-control layout-2-column\" \u003e\n    \u003clabel for=\"105313-file\" class=\"classic-label globo-label \"\u003e\u003cspan class=\"label-content\" data-label=\"File\"\u003eFile\u003c\/span\u003e\u003cspan class=\"text-danger text-smaller\"\u003e *\u003c\/span\u003e\u003c\/label\u003e\n    \u003cdiv class=\"globo-form-input\"\u003e\n        \n        \u003cinput type=\"file\"  data-type=\"file\" class=\"classic-input\" id=\"105313-file\"  name=\"file\" \n            placeholder=\"\" presence data-allowed-extensions=\"jpg,jpeg,png,pdf\"\u003e\n    \u003c\/div\u003e\n    \n        \u003csmall class=\"help-text globo-description\"\u003eFile size 3 MB\u003c\/small\u003e\n    \n    \u003csmall class=\"messages\"\u003e\u003c\/small\u003e\n\u003c\/div\u003e\n\n\n                                \n                            \n                            \n                                \n                            \n                        \u003c\/div\u003e\n                        \n                    \u003c\/div\u003e\n                    \n                    \u003cdiv class=\"message error\" data-other-error=\"Something went wrong, please try again\"\u003e\n                        \u003cdiv class=\"content\"\u003e\u003c\/div\u003e\n                        \u003cdiv class=\"dismiss\" onclick=\"Globo.FormBuilder.dismiss(this)\"\u003e\n                            \u003csvg width=20 height=20 viewBox=\"0 0 20 20\" class=\"\" focusable=\"false\" aria-hidden=\"true\"\u003e\u003cpath d=\"M11.414 10l4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z\" fill-rule=\"evenodd\"\u003e\u003c\/path\u003e\u003c\/svg\u003e\n                        \u003c\/div\u003e\n                    \u003c\/div\u003e\n                    \n                        \n                        \u003cdiv class=\"message success\"\u003e\n                            \u003cdiv class=\"content\"\u003e\u003ch2 style=\"text-align: center;\"\u003e\u003cstrong\u003eYour product warranty has been activated \u003c\/strong\u003e\u003c\/h2\u003e\n\u003cp style=\"text-align: center;\"\u003e\u003cstrong\u003eThank you for purchasing FEDUS product We hope that our product will live up to your expectations\u003c\/strong\u003e\u003c\/p\u003e\n\u003cp style=\"text-align: center;\"\u003e\u003cstrong\u003eIf you have any inquiry, please contact our customer care\u003c\/strong\u003e\u003c\/p\u003e\n\u003cp style=\"text-align: center;\"\u003e\u003cstrong\u003eHave a great day!\u003c\/strong\u003e\u003c\/p\u003e\u003c\/div\u003e\n                            \u003cdiv class=\"dismiss\" onclick=\"Globo.FormBuilder.dismiss(this)\"\u003e\n                                \u003csvg width=20 height=20 width=20 height=20 viewBox=\"0 0 20 20\" class=\"\" focusable=\"false\" aria-hidden=\"true\"\u003e\u003cpath d=\"M11.414 10l4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z\" fill-rule=\"evenodd\"\u003e\u003c\/path\u003e\u003c\/svg\u003e\n                            \u003c\/div\u003e\n                        \u003c\/div\u003e\n                        \n                    \n                    \u003cdiv class=\"footer wizard__footer\"\u003e\n                        \n                            \n                            \u003cdiv class=\"description globo-description\"\u003e\u003cp class=\"ql-align-center\"\u003e\u003cspan style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\"\u003eWe work on activating your device warranty. We might reach out to you if we need to validate few details so please ensure your contact details in the form are accurate. We will keep you informed via phone \u0026amp; email on the progress meanwhile.\u003c\/span\u003e\u003c\/p\u003e\u003c\/div\u003e\n                            \n                        \n                        \u003cbutton type=\"button\" class=\"action previous hidden classic-button\"\u003ePrevious\u003c\/button\u003e\n                        \u003cbutton type=\"button\" class=\"action next submit classic-button\" data-submitting-text=\"\" data-submit-text='\u003cspan class=\"spinner\"\u003e\u003c\/span\u003eSubmit' data-next-text=\"Next\" \u003e\u003cspan class=\"spinner\"\u003e\u003c\/span\u003eNext\u003c\/button\u003e\n                        \n                        \u003cp class=\"wizard__congrats-message\"\u003e\u003c\/p\u003e\n                    \u003c\/div\u003e\n                \u003c\/div\u003e\n            \u003c\/div\u003e\n        \n        \u003cinput type=\"hidden\" value=\"\" name=\"customer[id]\"\u003e\n        \u003cinput type=\"hidden\" value=\"\" name=\"customer[email]\"\u003e\n        \u003cinput type=\"hidden\" value=\"\" name=\"customer[name]\"\u003e\n        \u003cinput type=\"hidden\" value=\"\" name=\"page[title]\"\u003e\n        \u003cinput type=\"hidden\" value=\"\" name=\"page[href]\"\u003e\n        \u003cinput type=\"hidden\" value=\"\" name=\"_keyLabel\"\u003e\n    \u003c\/form\u003e\n    \n    \u003cdiv class=\"message success\"\u003e\n        \u003cdiv class=\"content\"\u003e\u003ch2 style=\"text-align: center;\"\u003e\u003cstrong\u003eYour product warranty has been activated \u003c\/strong\u003e\u003c\/h2\u003e\n\u003cp style=\"text-align: center;\"\u003e\u003cstrong\u003eThank you for purchasing FEDUS product We hope that our product will live up to your expectations\u003c\/strong\u003e\u003c\/p\u003e\n\u003cp style=\"text-align: center;\"\u003e\u003cstrong\u003eIf you have any inquiry, please contact our customer care\u003c\/strong\u003e\u003c\/p\u003e\n\u003cp style=\"text-align: center;\"\u003e\u003cstrong\u003eHave a great day!\u003c\/strong\u003e\u003c\/p\u003e\u003c\/div\u003e\n        \u003cdiv class=\"dismiss\" onclick=\"Globo.FormBuilder.dismiss(this)\"\u003e\n            \u003csvg width=20 height=20 viewBox=\"0 0 20 20\" class=\"\" focusable=\"false\" aria-hidden=\"true\"\u003e\u003cpath d=\"M11.414 10l4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z\" fill-rule=\"evenodd\"\u003e\u003c\/path\u003e\u003c\/svg\u003e\n        \u003c\/div\u003e\n    \u003c\/div\u003e\n    \n\u003c\/div\u003e\n\n\u003c\/div\u003e\n"
            }
        }[105313];



        window.Globo.FormBuilder.url = window.Globo.FormBuilder.shop.url;
        window.Globo.FormBuilder.themeOs20 = true;
        window.Globo.FormBuilder.searchProductByJson = true;
        Globo.FormBuilder.page = {
            title: `FEDUS - Official Store | FEDUS Online`,
            href: window.location.href,
            type: "index"
        };


        if (window.AVADA_SPEED_WHITELIST) {
            const pfbs_w = new RegExp("powerful-form-builder", 'i')
            if (Array.isArray(window.AVADA_SPEED_WHITELIST)) {
                window.AVADA_SPEED_WHITELIST.push(pfbs_w)
            } else {
                window.AVADA_SPEED_WHITELIST = [pfbs_w]
            }
        }
    </script>
    <script
        src="https://cdn.shopify.com/extensions/b1d8a1b2-cda6-43ec-9248-4489e6e6f721/powerful-form-builder-82/assets/globo.formbuilder.index.js"
        defer="defer"></script>




    <!-- END app app block -->
    <script
        src="https://cdn.shopify.com/extensions/ad1713ae-5743-425a-a52f-db2697f1e9aa/air-product-reviews-30/assets/air-reviews.js"
        type="text/javascript" defer="defer"></script>
    <script
        src="https://cdn.shopify.com/extensions/a0d52be8-d46a-408d-8508-8e67761bd841/adperfect-marketing-platform-1/assets/ab.min.js"
        type="text/javascript" defer="defer"></script>
    <link
        href="https://cdn.shopify.com/extensions/a0d52be8-d46a-408d-8508-8e67761bd841/adperfect-marketing-platform-1/assets/ab.min.css"
        rel="stylesheet" type="text/css" media="all">
    <script
        src="https://cdn.shopify.com/extensions/c3600b78-4575-4821-9418-8b9196e70e68/inbox-290/assets/inbox-chat-loader.js"
        type="text/javascript" defer="defer"></script>
    <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
    <script>
        (function () {
            if ("sendBeacon" in navigator && "performance" in window) {
                var session_token = document.cookie.match(/_shopify_s=([^;]*)/);

                function handle_abandonment_event(e) {
                    var entries = performance.getEntries().filter(function (entry) {
                        return /monorail-edge.shopifysvc.com/.test(entry.name);
                    });
                    if (!window.abandonment_tracked && entries.length === 0) {
                        window.abandonment_tracked = true;
                        var currentMs = Date.now();
                        var navigation_start = performance.timing.navigationStart;
                        var payload = {
                            shop_id: 69686886700,
                            url: window.location.href,
                            navigation_start,
                            duration: currentMs - navigation_start,
                            session_token: session_token && session_token.length === 2 ? session_token[1] : "",
                            page_type: "index"
                        };
                        window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({
                            schema_id: "online_store_buyer_site_abandonment/1.1",
                            payload: payload,
                            metadata: {
                                event_created_at_ms: currentMs,
                                event_sent_at_ms: currentMs
                            }
                        }));
                    }
                }
                window.addEventListener('pagehide', handle_abandonment_event);
            }
        }());
    </script>
    <script id="web-pixels-manager-setup">
        (function e(e, n, a, t, r) {
            var o = "function" == typeof BigInt && -1 !== BigInt.toString().indexOf("[native code]") ? "modern" : "legacy";
            window.Shopify = window.Shopify || {};
            var i = window.Shopify;
            i.analytics = i.analytics || {};
            var s = i.analytics;
            s.replayQueue = [], s.publish = function (e, n, a) {
                return s.replayQueue.push([e, n, a]), !0
            };
            try {
                self.performance.mark("wpm:start")
            } catch (e) { }
            var l = [a, "/wpm", "/b", r, o.substring(0, 1), ".js"].join("");
            ! function (e) {
                var n = e.src,
                    a = e.async,
                    t = void 0 === a || a,
                    r = e.onload,
                    o = e.onerror,
                    i = document.createElement("script"),
                    s = document.head,
                    l = document.body;
                i.async = t, i.src = n, r && i.addEventListener("load", r), o && i.addEventListener("error", o), s ? s.appendChild(i) : l ? l.appendChild(i) : console.error("Did not find a head or body element to append the script")
            }({
                src: l,
                async: !0,
                onload: function () {
                    var a = window.webPixelsManager.init(e);
                    n(a);
                    var t = window.Shopify.analytics;
                    t.replayQueue.forEach((function (e) {
                        var n = e[0],
                            t = e[1],
                            r = e[2];
                        a.publishCustomEvent(n, t, r)
                    })), t.replayQueue = [], t.publish = a.publishCustomEvent, t.visitor = a.visitor
                },
                onerror: function () {
                    var n = e.storefrontBaseUrl.replace(/\/$/, ""),
                        a = "".concat(n, "/.well-known/shopify/monorail/unstable/produce_batch"),
                        r = JSON.stringify({
                            metadata: {
                                event_sent_at_ms: (new Date).getTime()
                            },
                            events: [{
                                schema_id: "web_pixels_manager_load/2.0",
                                payload: {
                                    version: t || "latest",
                                    page_url: self.location.href,
                                    status: "failed",
                                    error_msg: "".concat(l, " has failed to load")
                                },
                                metadata: {
                                    event_created_at_ms: (new Date).getTime()
                                }
                            }]
                        });
                    try {
                        if (self.navigator.sendBeacon.bind(self.navigator)(a, r)) return !0
                    } catch (e) { }
                    var o = new XMLHttpRequest;
                    try {
                        return o.open("POST", a, !0), o.setRequestHeader("Content-Type", "text/plain"), o.send(r), !0
                    } catch (e) {
                        console && console.warn && console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")
                    }
                    return !1
                }
            })
        })({
            shopId: 69686886700,
            storefrontBaseUrl: "https://www.fedus.in",
            cdnBaseUrl: "https://www.fedus.in/cdn",
            surface: "storefront-renderer",
            enabledBetaFlags: ["5de24938", "3b4293f9"],
            webPixelsConfigList: [{
                "id": "shopify-app-pixel",
                "configuration": "{}",
                "eventPayloadVersion": "v1",
                "runtimeContext": "STRICT",
                "scriptVersion": "064",
                "apiClientId": "shopify-pixel",
                "type": "APP",
                "purposes": ["ANALYTICS", "MARKETING"]
            }, {
                "id": "shopify-custom-pixel",
                "eventPayloadVersion": "v1",
                "runtimeContext": "LAX",
                "scriptVersion": "064",
                "apiClientId": "shopify-pixel",
                "type": "CUSTOM",
                "purposes": ["ANALYTICS", "MARKETING"]
            }],
            initData: {
                "cart": null,
                "checkout": null,
                "customer": null,
                "productVariants": []
            },
        }, function pageEvents(webPixelsManagerAPI) {
            webPixelsManagerAPI.publish("page_viewed");
        }, "https://www.fedus.in/cdn", "a37bdf26f8653b8fca454a8b9abaae645af1380a", "bf0a1c21w381382fdp2197aec3mf9663592",);
    </script>
    <script>
        window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = 'INR';
        var meta = {
            "page": {
                "pageType": "home"
            }
        };
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }
    </script>
    <script>
        window.ShopifyAnalytics.merchantGoogleAnalytics = function () {
            UA - 265694365 - 1
        };
    </script>
    <script class="analytics">
        (window.gaDevIds = window.gaDevIds || []).push('BwiEti');


        (function () {
            var customDocumentWrite = function (content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.$) {
                    jquery = window.Checkout.$;
                }

                if (jquery) {
                    jquery('body').append(content);
                }
            };

            var hasLoggedConversion = function (token) {
                if (token) {
                    return document.cookie.indexOf('loggedConversion=' + token) !== -1;
                }
                return false;
            }

            var setCookieIfConversion = function (token) {
                if (token) {
                    var twoMonthsFromNow = new Date(Date.now());
                    twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                    document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
                }
            }

            var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = [
                'identify',
                'page',
                'ready',
                'track',
                'trackForm',
                'trackLink'
            ];
            trekkie.factory = function (method) {
                return function () {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function (config) {
                trekkie.config = config || {};
                trekkie.config.initialDocumentCookie = document.cookie;
                var first = document.getElementsByTagName('script')[0];
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onerror = function (e) {
                    var scriptFallback = document.createElement('script');
                    scriptFallback.type = 'text/javascript';
                    scriptFallback.onerror = function (error) {
                        var Monorail = {
                            produce: function produce(monorailDomain, schemaId, payload) {
                                var currentMs = new Date().getTime();
                                var event = {
                                    schema_id: schemaId,
                                    payload: payload,
                                    metadata: {
                                        event_created_at_ms: currentMs,
                                        event_sent_at_ms: currentMs
                                    }
                                };
                                return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
                            },
                            sendRequest: function sendRequest(endpointUrl, payload) {
                                // Try the sendBeacon API
                                if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
                                    var blobData = new window.Blob([payload], {
                                        type: 'text/plain'
                                    });

                                    if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                                        return true;
                                    } // sendBeacon was not successful

                                } // XHR beacon

                                var xhr = new XMLHttpRequest();

                                try {
                                    xhr.open('POST', endpointUrl);
                                    xhr.setRequestHeader('Content-Type', 'text/plain');
                                    xhr.send(payload);
                                } catch (e) {
                                    console.log(e);
                                }

                                return false;
                            },
                            isIos12: function isIos12() {
                                return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
                            }
                        };
                        Monorail.produce('monorail-edge.shopifysvc.com',
                            'trekkie_storefront_load_errors/1.1', {
                            shop_id: 69686886700,
                            theme_id: 140531466540,
                            app_name: "storefront",
                            context_url: window.location.href,
                            source_url: "//www.fedus.in/cdn/s/trekkie.storefront.dd626a6a6fbdab104f8779acc4331c330134c832.min.js"
                        });

                    };
                    scriptFallback.async = true;
                    scriptFallback.src = '//www.fedus.in/cdn/s/trekkie.storefront.dd626a6a6fbdab104f8779acc4331c330134c832.min.js';
                    first.parentNode.insertBefore(scriptFallback, first);
                };
                script.async = true;
                script.src = '//www.fedus.in/cdn/s/trekkie.storefront.dd626a6a6fbdab104f8779acc4331c330134c832.min.js';
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load({
                "Trekkie": {
                    "appName": "storefront",
                    "development": false,
                    "defaultAttributes": {
                        "shopId": 69686886700,
                        "isMerchantRequest": null,
                        "themeId": 140531466540,
                        "themeCityHash": "3848521631790992706",
                        "contentLanguage": "en",
                        "currency": "INR"
                    },
                    "isServerSideCookieWritingEnabled": true,
                    "monorailRegion": "shop_domain",
                    "enabledBetaFlags": ["bbcf04e6"]
                },
                "Google Analytics": {
                    "trackingId": "UA-265694365-1",
                    "domain": "auto",
                    "siteSpeedSampleRate": "10",
                    "enhancedEcommerce": true,
                    "doubleClick": true,
                    "includeSearch": true
                },
                "Facebook Pixel": {
                    "pixelIds": ["895293378484985"],
                    "agent": "plshopify1.2"
                },
                "Google Gtag Pixel": {
                    "conversionId": "G-P29BX59ERS",
                    "eventLabels": [{
                        "type": "search",
                        "action_label": ["G-P29BX59ERS", "AW-11157212794\/L-CbCNelo50YEPqclsgp"]
                    }, {
                        "type": "begin_checkout",
                        "action_label": ["G-P29BX59ERS", "AW-11157212794\/k2vFCN2lo50YEPqclsgp"]
                    }, {
                        "type": "view_item",
                        "action_label": ["G-P29BX59ERS", "AW-11157212794\/2AmBCNSlo50YEPqclsgp", "MC-QKZ0EF1QGR"]
                    }, {
                        "type": "purchase",
                        "action_label": ["G-P29BX59ERS", "AW-11157212794\/seITCM6lo50YEPqclsgp", "MC-QKZ0EF1QGR"]
                    }, {
                        "type": "page_view",
                        "action_label": ["G-P29BX59ERS", "AW-11157212794\/wsKhCNGlo50YEPqclsgp", "MC-QKZ0EF1QGR"]
                    }, {
                        "type": "add_payment_info",
                        "action_label": ["G-P29BX59ERS", "AW-11157212794\/KU00COClo50YEPqclsgp"]
                    }, {
                        "type": "add_to_cart",
                        "action_label": ["G-P29BX59ERS", "AW-11157212794\/irVICNqlo50YEPqclsgp"]
                    }],
                    "targetCountry": "IN"
                },
                "Session Attribution": {},
                "S2S": {
                    "facebookCapiEnabled": true,
                    "facebookAppPixelId": "895293378484985",
                    "source": "trekkie-storefront-renderer"
                }
            });

            var loaded = false;
            trekkie.ready(function () {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;

                ga('require', 'linker');

                function addListener(element, type, callback) {
                    if (element.addEventListener) {
                        element.addEventListener(type, callback);
                    } else if (element.attachEvent) {
                        element.attachEvent('on' + type, callback);
                    }
                }

                function decorate(event) {
                    event = event || window.event;
                    var target = event.target || event.srcElement;
                    if (target && (target.getAttribute('action') || target.getAttribute('href'))) {
                        ga(function (tracker) {
                            var linkerParam = tracker.get('linkerParam');
                            document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
                        });
                    }
                }
                addListener(window, 'load', function () {
                    for (var i = 0; i < document.forms.length; i++) {
                        var action = document.forms[i].getAttribute('action');
                        if (action && action.indexOf('/cart') >= 0) {
                            addListener(document.forms[i], 'submit', decorate);
                        }
                    }
                    for (var i = 0; i < document.links.length; i++) {
                        var href = document.links[i].getAttribute('href');
                        if (href && href.indexOf('/checkout') >= 0) {
                            addListener(document.links[i], 'click', decorate);
                        }
                    }
                });


                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try {
                    window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
                } catch (error) { };
                document.write = originalDocumentWrite;

                window.ShopifyAnalytics.lib.page(null, {
                    "pageType": "home"
                });

                var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
                var token = match ? match[1] : undefined;
                if (!hasLoggedConversion(token)) {
                    setCookieIfConversion(token);

                }
            });


            var eventsListenerScript = document.createElement('script');
            eventsListenerScript.async = true;
            eventsListenerScript.src = "//www.fedus.in/cdn/shopifycloud/shopify/assets/shop_events_listener-61fa9e0a912c675e178777d2b27f6cbd482f8912a6b0aa31fa3515985a8cd626.js";
            document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

        })();
    </script>
    <script class="boomerang">
        (function () {
            if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
                return;
            }
            window.BOOMR = window.BOOMR || {};
            window.BOOMR.snippetStart = new Date().getTime();
            window.BOOMR.snippetExecuted = true;
            window.BOOMR.snippetVersion = 12;
            window.BOOMR.application = "storefront-renderer";
            window.BOOMR.themeName = "Ella";
            window.BOOMR.themeVersion = "6.4.1";
            window.BOOMR.shopId = 69686886700;
            window.BOOMR.themeId = 140531466540;
            window.BOOMR.renderRegion = "gcp-asia-southeast1";
            window.BOOMR.url =
                "https://www.fedus.in/cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
            var where = document.currentScript || document.getElementsByTagName("script")[0];
            var parentNode = where.parentNode;
            var promoted = false;
            var LOADER_TIMEOUT = 3000;

            function promote() {
                if (promoted) {
                    return;
                }
                var script = document.createElement("script");
                script.id = "boomr-scr-as";
                script.src = window.BOOMR.url;
                script.async = true;
                parentNode.appendChild(script);
                promoted = true;
            }

            function iframeLoader(wasFallback) {
                promoted = true;
                var dom, bootstrap, iframe, iframeStyle;
                var doc = document;
                var win = window;
                window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
                bootstrap = function (parent, scriptId) {
                    var script = doc.createElement("script");
                    script.id = scriptId || "boomr-if-as";
                    script.src = window.BOOMR.url;
                    BOOMR_lstart = new Date().getTime();
                    parent = parent || doc.body;
                    parent.appendChild(script);
                };
                if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
                    window.BOOMR.snippetMethod = "s";
                    bootstrap(parentNode, "boomr-async");
                    return;
                }
                iframe = document.createElement("IFRAME");
                iframe.src = "about:blank";
                iframe.title = "";
                iframe.role = "presentation";
                iframe.loading = "eager";
                iframeStyle = (iframe.frameElement || iframe).style;
                iframeStyle.width = 0;
                iframeStyle.height = 0;
                iframeStyle.border = 0;
                iframeStyle.display = "none";
                parentNode.appendChild(iframe);
                try {
                    win = iframe.contentWindow;
                    doc = win.document.open();
                } catch (e) {
                    dom = document.domain;
                    iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
                    win = iframe.contentWindow;
                    doc = win.document.open();
                }
                if (dom) {
                    doc._boomrl = function () {
                        this.domain = dom;
                        bootstrap();
                    };
                    doc.write("<body onload='document._boomrl();'>");
                } else {
                    win._boomrl = function () {
                        bootstrap();
                    };
                    if (win.addEventListener) {
                        win.addEventListener("load", win._boomrl, false);
                    } else if (win.attachEvent) {
                        win.attachEvent("onload", win._boomrl);
                    }
                }
                doc.close();
            }
            var link = document.createElement("link");
            if (link.relList &&
                typeof link.relList.supports === "function" &&
                link.relList.supports("preload") &&
                ("as" in link)) {
                window.BOOMR.snippetMethod = "p";
                link.href = window.BOOMR.url;
                link.rel = "preload";
                link.as = "script";
                link.addEventListener("load", promote);
                link.addEventListener("error", function () {
                    iframeLoader(true);
                });
                setTimeout(function () {
                    if (!promoted) {
                        iframeLoader(true);
                    }
                }, LOADER_TIMEOUT);
                BOOMR_lstart = new Date().getTime();
                parentNode.appendChild(link);
            } else {
                iframeLoader(false);
            }

            function boomerangSaveLoadTime(e) {
                window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
            }
            if (window.addEventListener) {
                window.addEventListener("load", boomerangSaveLoadTime, false);
            } else if (window.attachEvent) {
                window.attachEvent("onload", boomerangSaveLoadTime);
            }
            if (document.addEventListener) {
                document.addEventListener("onBoomerangLoaded", function (e) {
                    e.detail.BOOMR.init({
                        ResourceTiming: {
                            enabled: true,
                            trackedResourceTypes: ["script", "img", "css"]
                        },
                    });
                    e.detail.BOOMR.t_end = new Date().getTime();
                });
            } else if (document.attachEvent) {
                document.attachEvent("onpropertychange", function (e) {
                    if (!e) e = event;
                    if (e.propertyName === "onBoomerangLoaded") {
                        e.detail.BOOMR.init({
                            ResourceTiming: {
                                enabled: true,
                                trackedResourceTypes: ["script", "img", "css"]
                            },
                        });
                        e.detail.BOOMR.t_end = new Date().getTime();
                    }
                });
            }
        })();
    </script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q9BCVDH9JL"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-Q9BCVDH9JL');
</script>

<body
    class="template-index header-full-width body-custom-width footer-full-width  size_varriant_style_2  product-card-layout-02  enable_button_disable_arrows enable_text_color_title quick_shop_option_2 show_image_loading">
    <div class="body-content-wrapper">
        <link href="//www.fedus.in/cdn/shop/t/3/assets/animated.css?v=125184897263678043851672341180" rel="stylesheet"
            type="text/css" media="all" />
        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-card.css?v=29958916815108789441672341181"
            rel="stylesheet" type="text/css" media="all" />
        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-loading-overlay.css?v=170491267859233445071672341183"
            rel="stylesheet" type="text/css" media="all" />
        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-loading-banner.css?v=149191268642343354681672341183"
            rel="stylesheet" type="text/css" media="all" />
        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-quick-cart.css?v=69937667527110853341672341184"
            rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="//www.fedus.in/cdn/shop/t/3/assets/vendor.css?v=164616260963476715651672341188"
            media="print" onload="this.media='all'">
        <noscript>
            <link href="//www.fedus.in/cdn/shop/t/3/assets/vendor.css?v=164616260963476715651672341188" rel="stylesheet"
                type="text/css" media="all" />
        </noscript>


        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-card-02.css?v=124107397574928198031672341181"
            rel="stylesheet" type="text/css" media="all" />

        <link rel="stylesheet"
            href="//www.fedus.in/cdn/shop/t/3/assets/component-product-form.css?v=78655431092073622881672341184"
            media="print" onload="this.media='all'">
        <link rel="stylesheet"
            href="//www.fedus.in/cdn/shop/t/3/assets/component-review.css?v=100129706126506303331672341184"
            media="print" onload="this.media='all'">
        <link rel="stylesheet"
            href="//www.fedus.in/cdn/shop/t/3/assets/component-price.css?v=139205013722916111901672341184" media="print"
            onload="this.media='all'">
        <link rel="stylesheet"
            href="//www.fedus.in/cdn/shop/t/3/assets/component-badge.css?v=20633729062276667811672341180" media="print"
            onload="this.media='all'">
        <link rel="stylesheet"
            href="//www.fedus.in/cdn/shop/t/3/assets/component-rte.css?v=74468535300400368301672341184" media="print"
            onload="this.media='all'">
        <link rel="stylesheet"
            href="//www.fedus.in/cdn/shop/t/3/assets/component-share.css?v=151802252019812543761672341185" media="print"
            onload="this.media='all'">
        <link rel="stylesheet"
            href="//www.fedus.in/cdn/shop/t/3/assets/component-newsletter.css?v=54058530822278129331672341183"
            media="print" onload="this.media='all'">
        <link rel="stylesheet"
            href="//www.fedus.in/cdn/shop/t/3/assets/component-slider.css?v=19377730659263747931672341185" media="print"
            onload="this.media='all'">
        <link rel="stylesheet"
            href="//www.fedus.in/cdn/shop/t/3/assets/component-list-social.css?v=102044711114163579551672341183"
            media="print" onload="this.media='all'"><noscript>
            <link href="//www.fedus.in/cdn/shop/t/3/assets/component-product-form.css?v=78655431092073622881672341184"
                rel="stylesheet" type="text/css" media="all" />
        </noscript>
        <noscript>
            <link href="//www.fedus.in/cdn/shop/t/3/assets/component-review.css?v=100129706126506303331672341184"
                rel="stylesheet" type="text/css" media="all" />
        </noscript>
        <noscript>
            <link href="//www.fedus.in/cdn/shop/t/3/assets/component-price.css?v=139205013722916111901672341184"
                rel="stylesheet" type="text/css" media="all" />
        </noscript>
        <noscript>
            <link href="//www.fedus.in/cdn/shop/t/3/assets/component-badge.css?v=20633729062276667811672341180"
                rel="stylesheet" type="text/css" media="all" />
        </noscript>
        <noscript>
            <link href="//www.fedus.in/cdn/shop/t/3/assets/component-rte.css?v=74468535300400368301672341184"
                rel="stylesheet" type="text/css" media="all" />
        </noscript>
        <noscript>
            <link href="//www.fedus.in/cdn/shop/t/3/assets/component-share.css?v=151802252019812543761672341185"
                rel="stylesheet" type="text/css" media="all" />
        </noscript>
        <link rel="stylesheet"
            href="//www.fedus.in/cdn/shop/t/3/assets/component-predictive-search.css?v=50559763183045526481672341183"
            media="print" onload="this.media='all'"><noscript>
            <link href="//www.fedus.in/cdn/shop/t/3/assets/component-newsletter.css?v=54058530822278129331672341183"
                rel="stylesheet" type="text/css" media="all" />
        </noscript>
        <noscript>
            <link href="//www.fedus.in/cdn/shop/t/3/assets/component-slider.css?v=19377730659263747931672341185"
                rel="stylesheet" type="text/css" media="all" />
        </noscript>
        <noscript>
            <link href="//www.fedus.in/cdn/shop/t/3/assets/component-list-social.css?v=102044711114163579551672341183"
                rel="stylesheet" type="text/css" media="all" />
        </noscript>
        <script src="//www.fedus.in/cdn/shop/t/3/assets/vendor.js?v=167308307333113337551672341188"
            type="text/javascript"></script>
        <script src="//www.fedus.in/cdn/shop/t/3/assets/global.js?v=148841673858902565121672341186"
            type="text/javascript"></script>
        <script src="//www.fedus.in/cdn/shop/t/3/assets/lazysizes.min.js?v=122719776364282065531672341187"
            type="text/javascript"></script>
        <script src="//www.fedus.in/cdn/shop/t/3/assets/predictive-search.js?v=31478391494289611481672341187"
            defer="defer"></script>

        <script>
            window.lazySizesConfig = window.lazySizesConfig || {};
            lazySizesConfig.loadMode = 1;
            window.lazySizesConfig.init = false;
            lazySizes.init();

            window.rtl_slick = false;
            window.mobile_menu = 'custom';
            window.money_format = '₹. {{amount}}';
            window.shop_currency = 'INR';
            window.show_multiple_currencies = false;
            window.routes = {
                root: '',
                cart: '/cart',
                cart_add_url: '/cart/add',
                cart_change_url: '/cart/change',
                cart_update_url: '/cart/update',
                collection_all: '/collections/all',
                predictive_search_url: '/search/suggest',
                search_url: '/search'
            };
            window.button_load_more = {
                default: `Show more`,
                loading: `Loading...`,
                view_all: `View All Collection`,
                no_more: `No More Product`
            };
            window.after_add_to_cart = {
                type: 'quick_cart',
                message: `is added to your shopping cart.`
            };
            window.quick_shop = {
                show: true,
                see_details: `View Full Details`,
            };
            window.quick_cart = {
                show: true
            };
            window.cartStrings = {
                error: `There was an error while updating your cart. Please try again.`,
                quantityError: `You can only add [quantity] of this item to your cart.`,
                addProductOutQuantity: `You can only add [maxQuantity] of this product to your cart`,
                addProductOutQuantity2: `The quantity of this product is insufficient.`,
                cartErrorMessage: `Translation missing: en.sections.cart.cart_quantity_error_prefix`,
                soldoutText: `sold out`,
                alreadyText: `all`,
            };
            window.variantStrings = {
                addToCart: `Add to cart`,
                addingToCart: `Adding to cart...`,
                addedToCart: `Added to cart`,
                submit: `Submit`,
                soldOut: `Sold out`,
                unavailable: `Unavailable`,
                soldOut_message: `This variant is sold out!`,
                unavailable_message: `This variant is unavailable!`,
                addToCart_message: `You must select at least one products to add!`,
                select: `Select Options`,
                preOrder: `Pre-Order`,
                add: `Add`
            };
            window.inventory_text = {
                hotStock: `Hurry up! only [inventory] left`,
                hotStock2: `Please hurry! Only [inventory] left in stock`,
                warningQuantity: `Maximum quantity: [inventory]`,
                inStock: `In Stock`,
                outOfStock: `Out Of Stock`,
                manyInStock: `Many In Stock`,
                show_options: `Show Variants`,
                hide_options: `Hide Variants`,
                adding: `Adding`,
                thank_you: `Thank You`,
                add_more: `Add More`,
                cart_feedback: `Added`
            };


            window.notify_me = {
                show: true,
                mail: `example@domain.com`,
                subject: `Out Of Stock Notification from Halothemes Store`,
                label: `Shopify`,
                success: `Thanks! We&#39;ve received your request and will respond shortly when this product / variant becomes available!`,
                error: `Please use a valid email address, such as john@example.com.`,
                button: `Notify me`
            };


            window.compare = {
                show: false,
                add: `Add To Compare`,
                added: `Added To Compare`,
                message: `You must select at least two products to compare!`
            };
            window.wishlist = {
                show: true,
                add: `Add to wishlist`,
                added: `Added to wishlist`,
                empty: `No product is added to your wishlist`,
                continue_shopping: `Continue Shopping`
            };
            window.pagination = {
                style: 1,
                next: `Next`,
                prev: `Prev`
            }
            window.review = {
                show: true,
                show_quick_view: true
            };
            window.countdown = {
                text: `Limited-Time Offers, End in:`,
                day: `D`,
                hour: `H`,
                min: `M`,
                sec: `S`,
                day_2: `Days`,
                hour_2: `Hours`,
                min_2: `Mins`,
                sec_2: `Secs`,
                days: `Days`,
                hours: `Hours`,
                mins: `Mins`,
                secs: `Secs`,
                d: `d`,
                h: `h`,
                m: `m`,
                s: `s`
            };
            window.customer_view = {
                text: `[number] customers are viewing this product`
            };


            window.arrows = {
                icon_next: `<button type="button" class="slick-next" aria-label="Next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.293 4.707 14.586 12l-7.293 7.293 1.414 1.414L17.414 12 8.707 3.293 7.293 4.707z"></path></svg></button>`,
                icon_prev: `<button type="button" class="slick-prev" aria-label="Previous"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.293 4.707 14.586 12l-7.293 7.293 1.414 1.414L17.414 12 8.707 3.293 7.293 4.707z"></path></svg></button>`
            }


            window.dynamic_browser_title = {
                show: true,
                text: 'Come back ⚡'
            };

            window.show_more_btn_text = {
                show_more: `Show More`,
                show_less: `Show Less`,
                show_all: `Show All`,
            };

            function getCookie(cname) {
                let name = cname + "=";
                let decodedCookie = decodeURIComponent(document.cookie);
                let ca = decodedCookie.split(';');
                for (let i = 0; i < ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            const cookieAnnouncemenClosed = getCookie('announcement');
            window.announcementClosed = cookieAnnouncemenClosed === 'closed'
        </script>
        <a class="skip-to-content-link button visually-hidden" href="#MainContent">
            Skip to content
        </a>

        <div id="shopify-section-announcement-bar" class="shopify-section">
            <div class="announcement-bar" role="region" aria-label="Announcement"
                style="opacity: 0; visibility: hidden;">
                <script>
                    if (window.announcementClosed) {
                        document.querySelector('.announcement-bar').remove();
                    }
                </script>
                <div class="container layout--slider">
                    <div class="row">
                        <div class="announcement-bar__message text-center" id="b37acd96-19a1-4bd3-b1e8-e47fad2c8aea"
                            style="--button-color-style: #f84248;
                                                    --button-border-style: #ffffff;
                                                    --button-background-style: #ffffff">
                            <p>Get a 5% Discount on your First Order</p> Enter Code -9E955VE905DJ
                        </div>
                    </div>


                </div>
            </div>

            <style type="text/css">
                .announcement-bar {
                    padding-top: 5px;
                    padding-bottom: 5px;
                    background: #ffffff;
                }

                .banner-animation-1 .announcement-bar {
                    transition: opacity 250ms ease-in;
                }

                @keyframes SlideLeft {
                    0% {
                        transform: translate3d(0, 0, 0);
                    }

                    100% {
                        transform: translate3d(-100%, 0, 0);
                    }
                }

                .announcement-bar .layout--scroll {
                    max-width: 100%;
                    padding-left: 0;
                    padding-right: 0;
                    overflow: hidden;
                    text-align: right;
                }

                .header-full-width #shopify-section-announcement-bar .announcement-bar .layout--scroll {
                    padding-left: 0;
                    padding-right: 0;
                }

                .announcement-bar .layout--scroll .row {
                    display: inline-block;
                    text-align: left;
                    white-space: nowrap;
                }

                .announcement-bar__item-scroll {
                    display: inline-block;
                    animation: SlideLeft s infinite linear;
                }

                .announcement-bar .layout--scroll:hover .announcement-bar__item-scroll,
                .announcement-bar .layout--scroll:focus .announcement-bar__item-scroll {
                    animation-play-state: paused;
                }

                .announcement-bar .layout--scroll .announcement-bar__message {
                    width: auto;
                    vertical-align: middle;
                }

                .announcement-bar .layout--scroll .announcement-bar__message .message,
                .announcement-bar .layout--scroll .announcement-bar__message p {
                    padding: 5px 12.5px;
                }

                .announcement-bar .announcement-bar__message svg {
                    display: inline-block;
                    vertical-align: middle;
                    width: 16px;
                    height: 16px;
                }

                .announcement-bar .layout--scroll .announcement-bar__message .underline {
                    text-decoration: underline;
                    text-decoration-thickness: 1px;
                    text-underline-offset: 4px;
                }

                .announcement-bar__message,
                .announcement-bar__message .message,
                .announcement-bar__message a,
                .announcement-bar__message p,
                .top-mesage-countdown {
                    color: #232323;
                    font-size: 15px;
                    font-style: italic;
                    font-weight: 500;
                    letter-spacing: 0;
                }

                .announcement-bar .announcement-close.hasCountDown {
                    width: 21px;
                    height: 21px;
                }

                .announcement-bar .announcement-close svg {
                    fill: #232323;
                }

                .announcement-bar .announcement-countdown .clock-item {
                    color: var(--countdown-text-color);
                    border: 1px solid var(--countdown-text-border);
                    background-color: var(--countdown-text-background);
                }

                .announcement-bar .announcement-countdown .clock-item:before {
                    color: #232323;
                }

                .announcement-bar .layout--slider .announcement-bar__message {
                    display: none;
                }

                .announcement-bar .layout--slider .announcement-bar__message:first-child {
                    display: inline-block;
                }

                .announcement-bar .slick-slider .announcement-bar__message {
                    display: inline-block;
                }

                @media (max-width: 1400px) {}

                @media (max-width: 1199px) {}

                @media (max-width: 1024px) {
                    .announcement-bar .announcement-countdown+.announcement-close {
                        top: 20%;
                    }

                    .announcement-bar__message .message.font-size-mb {
                        font-size: calc(15px - 2px);
                    }
                }

                @media (max-width: 551px) {
                    .announcement-bar__message .message.font-size-mb {
                        font-size: calc(15px - 4px);
                    }
                }
            </style>


        </div>
        <div id="shopify-section-header-02" class="shopify-section">
            <link rel="stylesheet"
                href="//www.fedus.in/cdn/shop/t/3/assets/component-list-menu.css?v=179060022243118608441672341182"
                media="all" onload="this.media='all'">
            <link rel="stylesheet"
                href="//www.fedus.in/cdn/shop/t/3/assets/component-search.css?v=84546637373254493441672341184"
                media="all" onload="this.media='all'">
            <link rel="stylesheet"
                href="//www.fedus.in/cdn/shop/t/3/assets/component-menu-drawer.css?v=129825298568141628341672341183"
                media="all" onload="this.media='all'">
            <link rel="stylesheet"
                href="//www.fedus.in/cdn/shop/t/3/assets/component-megamenu.css?v=135995261329381923121672341183"
                media="all" onload="this.media='all'">
            <link rel="stylesheet"
                href="//www.fedus.in/cdn/shop/t/3/assets/component-menu-mobile.css?v=139389150947625254471672341183"
                media="all" onload="this.media='all'">
            <link rel="stylesheet"
                href="//www.fedus.in/cdn/shop/t/3/assets/component-header-02.css?v=79315805815028982941672341182"
                media="all" onload="this.media='all'">

            <noscript>
                <link href="//www.fedus.in/cdn/shop/t/3/assets/component-list-menu.css?v=179060022243118608441672341182"
                    rel="stylesheet" type="text/css" media="all" />
            </noscript>
            <noscript>
                <link href="//www.fedus.in/cdn/shop/t/3/assets/component-search.css?v=84546637373254493441672341184"
                    rel="stylesheet" type="text/css" media="all" />
            </noscript>
            <noscript>
                <link
                    href="//www.fedus.in/cdn/shop/t/3/assets/component-menu-drawer.css?v=129825298568141628341672341183"
                    rel="stylesheet" type="text/css" media="all" />
            </noscript>
            <noscript>
                <link href="//www.fedus.in/cdn/shop/t/3/assets/component-megamenu.css?v=135995261329381923121672341183"
                    rel="stylesheet" type="text/css" media="all" />
            </noscript>
            <noscript>
                <link
                    href="//www.fedus.in/cdn/shop/t/3/assets/component-menu-mobile.css?v=139389150947625254471672341183"
                    rel="stylesheet" type="text/css" media="all" />
            </noscript>
            <noscript>
                <link href="//www.fedus.in/cdn/shop/t/3/assets/component-header-02.css?v=79315805815028982941672341182"
                    rel="stylesheet" type="text/css" media="all" />
            </noscript>

            <style>
                .search_details .search-modal__form {
                    background-color: #f8f8f8;
                    border-bottom: 1px solid #323232;
                }

                .search_details .search-modal__form .search__input {
                    color: #323232;
                }

                .search_details .search-modal__form ::-webkit-input-placeholder {
                    color: #323232;
                }

                .search_details .search-modal__form ::-moz-placeholder {
                    color: #323232;
                }

                .search_details .search-modal__form :-ms-input-placeholder {
                    color: #323232;
                }

                .search_details .search-modal__form :-moz-placeholder {
                    color: #323232;
                }

                .search_details .search-modal__form .search__button {
                    color: #323232;
                    padding-right: 0;
                }

                .header-top-right-group .customer-service-text {
                    color: #323232;
                }

                .cart-text,
                .customer-links,
                .wishlist-text,
                .customer-links a {
                    color: #323232;
                }

                .header__icon--cart .cart-count-bubble,
                .bottom-bar--list .cart-count-bubble {
                    background-color: #ff8b21;
                    color: #323232;
                }

                .bottom-bar--list .cart-count-bubble .text {
                    color: #323232;
                }

                .wrapper-header-bottom {
                    background: #ffffff;
                }

                .nazbrandsLink .link {
                    color: #000000;
                }

                .header__icon .icon {
                    fill: #323232;
                }

                .icon-hamburger .icon-line,
                .icon-hamburger .icon-line:after,
                .icon-hamburger .icon-line:before {
                    background-color: #323232;
                }

                .header-mobile {
                    background-color: #ffffff;
                }

                .header-mobile .header__icon .icon {
                    fill: #000000;
                }

                .header-mobile .header__heading .h2 {
                    font-size: calc(var(--font-body-size) + 4px);
                    font-weight: var(--font-weight-bold);
                    color: #000000;
                }

                .mobileMenu-toggle__Icon,
                .mobileMenu-toggle__Icon::before,
                .mobileMenu-toggle__Icon::after {
                    background-color: #000000;
                }

                .menu-drawer__close-button {
                    font-size: px;
                    font-weight: ;
                    color: #323232;
                    text-transform: ;
                }

                .menu-lv-1__action {
                    color: #323232;
                }

                .menu-lv-2__action {
                    color: #232323;
                }

                .menu-lv-3__action {
                    color: #232323;
                }

                .menu-lv-item.menu-lv-1:hover>a>.text {
                    border-bottom: 1px solid #227cc5;
                }

                .menu-lv-item.menu-lv-2:hover>a>.text {
                    border-bottom: 1px solid #227cc5;
                }

                .menu-lv-item.menu-lv-3:hover>a>.text,
                .site-nav-link:hover .text {
                    border-bottom: 1px solid #227cc5;
                }

                .site-nav-title,
                .site-nav-title a,
                .menu-dropdown__block--title,
                .azbrandsTable .link {
                    color: #232323;
                }

                .site-nav-link {
                    color: #232323;
                }

                .fixed-right .header__icon .icon {
                    color: #323232;
                    fill: #323232;
                }

                .menu-lv-1 .label.new-label,
                .menu-drawer__menu-item .label.new-label {
                    color: #ffffff;
                    background: #BAE4ED;
                }

                .menu-lv-1 .label.new-label:before {
                    border-bottom-color: #BAE4ED;
                }

                .menu-drawer__menu-item .label.new-label:before {
                    border-right-color: #BAE4ED;
                }

                .menu-lv-1 .label.sale-label,
                .menu-drawer__menu-item .label.sale-label {
                    color: #ffffff;
                    background: #D12442;
                }

                .menu-lv-1 .label.sale-label:before {
                    border-bottom-color: #D12442;
                }

                .menu-drawer__menu-item .label.sale-label:before {
                    border-right-color: #D12442;
                }

                .menu-lv-1 .label.hot-label,
                .menu-drawer__menu-item .label.hot-label {
                    color: #ffffff;
                    background: #FFF993;
                }

                .menu-lv-1 .label.hot-label:before {
                    border-bottom-color: #FFF993;
                }

                .menu-drawer__menu-item .label.hot-label:before {
                    border-right-color: #FFF993;
                }

                .menu--mobile-lv-1__action>.icon {
                    fill: #323232;
                }

                .menu-dropdown__text a.active-sale {
                    color: #d12442;
                }

                .menu-sale>.menu-lv-1__action,
                .menu-sale>details>.menu--mobile-lv-1__action,
                .menu-sale>.menu-lv-2__action,
                .menu-sale>.menu-lv-3__action,
                .menu-sale>details>.menu--mobile-lv-2__action,
                .menu-sale>.menu--mobile-lv-3__action,
                .active-sale>.site-nav-link,
                .active-sale.site-nav-title {
                    color: #d12442 !important;
                }

                .menu-sale:hover>.menu-lv-1__action .text,
                .menu-sale:hover>details>.menu--mobile-lv-1__action .text,
                .menu-sale:hover>.menu-lv-2__action .text,
                .menu-sale:hover>.menu-lv-3__action .text,
                .menu-sale:hover>details>.menu--mobile-lv-2__action .text,
                .menu-sale:hover>.menu--mobile-lv-3__action .text,
                .active-sale:hover>.site-nav-link .text,
                .active-sale.site-nav-title:hover .text {
                    border-bottom: 1px solid #d12442 !important;
                }

                .menu-sale>.menu--mobile-lv-1__action>.icon {
                    fill: #d12442 !important;
                }

                /*.header .menu-lv-item.has-megamenu .menu-dropdown{
        display: none;
    }*/

                .header-02.style_2 .top-language-currency .halo-top-language:before {
                    background-color: #323232;
                }

                @media screen and (max-width: 1024px) {
                    .site-nav-mobile .menu-lv-1__action {
                        color: #000000;
                    }

                    .site-nav-mobile .menu-lv-2__action,
                    .site-nav-mobile .site-nav-title,
                    .site-nav-mobile .site-nav-title a {
                        color: #000000;
                    }

                    .site-nav-mobile .menu-lv-3__action,
                    .site-nav-mobile .site-nav-link {
                        color: #000000;
                    }

                    .menu-lv-item.menu-lv-1:hover>a>.text,
                    .menu-lv-item.menu-lv-2:hover>a>.text,
                    .menu-lv-item.menu-lv-3:hover>a>.text {
                        border-bottom: 0;
                    }

                    .header__icon--cart .cart-count-bubble,
                    .bottom-bar--list .cart-count-bubble,
                    .bottom-bar--list .cart-count-bubble .text {
                        background-color: #ff8b21;
                        color: #232323;
                    }

                    .bottom-bar--list .cart-count-bubble .text {
                        border-radius: 50%;
                    }

                    .cart-text,
                    .customer-links,
                    .wishlist-text,
                    .customer-links a {
                        color: #232323 !important;
                    }
                }

                @media screen and (min-width: 1025px) {

                    .header-top,
                    .header-bottom {
                        display: block;
                    }

                    .header-mobile {
                        display: none;
                    }

                    .header-top--right {
                        width: calc(100% - (140px));
                    }

                    .header-02 .header-bottom .header__logo {
                        width: 140px;
                    }

                    .header__heading .h2 {
                        font-size: 20px;
                        font-weight: 900;
                        color: #f44336;
                    }

                    .halo-top-currency .dropdown-label .text {
                        color: #323232;
                    }

                    .halo-top-currency .text+svg {
                        fill: #323232;
                    }

                    .menu-lv-1:hover .menu-lv-1__action {
                        color: #227cc5;
                    }

                    .menu-lv-2:hover .menu-lv-2__action {
                        color: #227cc5;
                    }

                    .menu-lv-3:hover .menu-lv-3__action {
                        color: #227cc5;
                    }

                    .site-nav-title:hover,
                    .site-nav-title a:hover,
                    .menu-dropdown__block--title:hover {
                        color: #227cc5;
                    }

                    .site-nav-link:hover {
                        color: #227cc5;
                    }

                    .megamenu_style_4 .site-nav-banner,
                    .megamenu_style_4 .site-nav-banner:before,
                    .megamenu_style_4 .site-nav-banner:after,
                    .megamenu_style_5 .site-nav-banner,
                    .megamenu_style_5 .site-nav-banner:before,
                    .megamenu_style_5 .site-nav-banner:after {
                        background-color: #e8e8e8;
                    }

                    .header .has-megamenu .menu-dropdown {
                        background-color: ;
                    }
                }
            </style>

            <script src="//www.fedus.in/cdn/shop/t/3/assets/details-disclosure.js?v=93212506302784624691672341185"
                defer="defer"></script>

            
<?php include('includes/menu_forecom.php'); ?>

		



            <script>
                var appendPrependMenuMobile = function () {
                    var headerLanguageCurrencyPC = $('.wrapper-language-currency'),
                        headerLanguageCurrencyMB = $('.nav-currency-language'),
                        headerSidebarLanguageCurrency = $('.halo-language-currency-sidebar .halo-sidebar-wrapper');

                    if (window.innerWidth < 1025) {
                        headerLanguageCurrencyPC.appendTo(headerLanguageCurrencyMB);
                        if ($('.header-02').hasClass('style_2')) {
                            $('.nav-currency-language .top-language-currency').appendTo('.header-language_currency');
                        }
                    } else {
                        headerLanguageCurrencyPC.appendTo(headerSidebarLanguageCurrency);
                        if ($('.header-02').hasClass('style_2')) {
                            $('#halo-language-currency-sidebar .wrapper-language-currency .halo-top-language').appendTo('.top-language-currency');
                            $('#halo-language-currency-sidebar .wrapper-language-currency .halo-top-currency').appendTo('.top-language-currency');
                        }
                    };
                };

                $(document).ready(function () {
                    appendPrependMenuMobile();
                });

                $(window).on('resize', function () {
                    appendPrependMenuMobile();
                });

                if ($('.header-02').hasClass('style_2')) {
                    $(document).on('click', '.header-language_currency', function (e) {
                        $('.top-language-currency').toggleClass('show');
                    });

                    $(document).on('click', function (event) {
                        if ($('.top-language-currency').hasClass('show') && ($(event.target).closest('.top-language-currency').length === 0)) {
                            $('.top-language-currency').removeClass('show');
                        }
                    });
                }
            </script>

            <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "Organization",
                    "name": "FEDUS",


                    "logo": "https:\/\/www.fedus.in\/cdn\/shop\/files\/Untitled-2-01_3028x.png?v=1678881398",

                    "sameAs": [
                        "https:\/\/twitter.com\/",
                        "https:\/\/www.facebook.com\/fedusindia",
                        "",
                        "https:\/\/www.instagram.com\/fedus_india\/",
                        "",
                        "",
                        "https:\/\/www.youtube.com",
                        ""
                    ],
                    "url": "https:\/\/www.fedus.in"
                }
            </script>
            <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "WebSite",
                    "name": "FEDUS",
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "https:\/\/www.fedus.in\/search?q={search_term_string}",
                        "query-input": "required name=search_term_string"
                    },
                    "url": "https:\/\/www.fedus.in"
                }
            </script>

        </div>
        <div id="shopify-section-halo-navigation-mobile" class="shopify-section">
            <div data-section-id="halo-navigation-mobile" data-section-type="menu"
                id="MenuMobileSection-product-category">
                <style type="text/css" media="screen">
                    :root {
                        --lv-1-product-category-font: var(--font-heading-family);
                        --lv-2-product-category-font: var(--font-heading-family);
                        --lv-title-product-category-font: var(--font-heading-family);
                    }

                    @media (max-width: 1024px) {
                        #MenuMobileListSection-product-category .menu-lv-1__action {
                            font-family: var(--lv-1-product-category-font);
                            font-size: 15px;
                            font-weight: 500;
                            text-transform: capitalize;
                        }

                        #MenuMobileListSection-product-category .menu-lv-2__action,
                        #MenuMobileListSection-product-category .menu-lv-3__action {
                            font-family: var(--lv-2-product-category-font);
                            font-size: 15px;
                            font-weight: 400;
                            text-transform: capitalize;
                        }

                        #MenuMobileListSection-product-category .nav-title-mobile .menu-lv-2__action .text,
                        #MenuMobileListSection-product-category .nav-title-mobile .menu-lv-3__action .text {
                            font-family: var(--lv-title-product-category-font);
                            font-size: 10px;
                            font-weight: 400;
                            text-transform: capitalize;
                        }

                        #MenuMobileListSection-product-category .custom-icon svg {
                            width: 50px;
                            height: 50px;
                        }

                        #MenuMobileListSection-product-category .custom-icon img {
                            width: 100%;
                            height: 100%;
                            max-width: 50px;
                            max-height: 50px;
                        }

                        #MenuMobileListSection-product-category .custom-image img {
                            width: 100%;
                            height: 100%;
                            max-width: 150px;
                            max-height: 100px;
                        }

                        .nav-mobile-menu-tab .menu-tab .link[data-target="MenuMobileListSection-product-category"] {
                            background: #232323;
                            color: #e8e8e8;
                        }

                        .nav-mobile-menu-tab .menu-tab .item.is-active .link[data-target="MenuMobileListSection-product-category"] {
                            background: #e8e8e8;
                            color: #232323;
                        }
                    }
                </style>
                <template>
                    <ul class="list-menu list-menu--inline list-unstyled" role="list"
                        id="MenuMobileListSection-product-category" data-heading="Product Category">
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu"><a role="link" aria-disabled="true"
                                class="menu-lv-1__action list-menu__item list-menu__item--end link focus-inset  menu-lv__flex menu_mobile_link"><span
                                    class="text">Home</span></a></li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                href="/collections/lan-wire"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"
                                style="color: #000000;"><span class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/Ethernet_cable_482e24c1-1a58-46f8-a746-5ed9b91aaadf.jpg?v=1675331893"
                                        alt="Cat6 ethernet cable black">
                                </span><span class="text">Ethernet Cable</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                Ethernet Cable
                                            </span>
                                        </span>
                                    </li>

                                    <a href="javascript:void(0)" class="image-zoom adaptive_height"
                                        style="padding-top: 66.66666666666666%;">
                                        <img srcset="//www.fedus.in/cdn/shop/files/Ethernet_2_165x.jpg?v=1675517704 165w,//www.fedus.in/cdn/shop/files/Ethernet_2_170x.jpg?v=1675517704 170w,//www.fedus.in/cdn/shop/files/Ethernet_2_185x.jpg?v=1675517704 185w,//www.fedus.in/cdn/shop/files/Ethernet_2_198x.jpg?v=1675517704 198w,//www.fedus.in/cdn/shop/files/Ethernet_2_210x.jpg?v=1675517704 210w,//www.fedus.in/cdn/shop/files/Ethernet_2_220x.jpg?v=1675517704 220w,//www.fedus.in/cdn/shop/files/Ethernet_2_245x.jpg?v=1675517704 245w,//www.fedus.in/cdn/shop/files/Ethernet_2_270x.jpg?v=1675517704 270w,//www.fedus.in/cdn/shop/files/Ethernet_2_290x.jpg?v=1675517704 290w,//www.fedus.in/cdn/shop/files/Ethernet_2_320x.jpg?v=1675517704 320w,//www.fedus.in/cdn/shop/files/Ethernet_2_355x.jpg?v=1675517704 355w,//www.fedus.in/cdn/shop/files/Ethernet_2_360x.jpg?v=1675517704 360w,//www.fedus.in/cdn/shop/files/Ethernet_2_370x.jpg?v=1675517704 370w,//www.fedus.in/cdn/shop/files/Ethernet_2_420x.jpg?v=1675517704 420w,//www.fedus.in/cdn/shop/files/Ethernet_2_430x.jpg?v=1675517704 430w,//www.fedus.in/cdn/shop/files/Ethernet_2_460x.jpg?v=1675517704 460w,//www.fedus.in/cdn/shop/files/Ethernet_2_470x.jpg?v=1675517704 470w,//www.fedus.in/cdn/shop/files/Ethernet_2_510x.jpg?v=1675517704 510w,//www.fedus.in/cdn/shop/files/Ethernet_2_523x.jpg?v=1675517704 523w,//www.fedus.in/cdn/shop/files/Ethernet_2_533x.jpg?v=1675517704 533w,//www.fedus.in/cdn/shop/files/Ethernet_2_534x.jpg?v=1675517704 534w,//www.fedus.in/cdn/shop/files/Ethernet_2_570x.jpg?v=1675517704 570w"
                                            src="//www.fedus.in/cdn/shop/files/Ethernet_2_533x.jpg?v=1675517704"
                                            sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                            alt="Cat6 Ethernet cable orange" size="600" loading="lazy" class="" />

                                    </a>


                                    <li class="menu-lv-item menu-lv-2 text-left"><a href="/collections/cat5-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Cat5 Ethernet Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a href="/collections/cat-6-lan-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Cat6 Ethernet Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a href="/collections/cat-6a-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Cat6A Ethernet Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/cat7-ethernet-cable-sftp-copper"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Cat7 Ethernet Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/outdoor-cat6-ethernet-cable-utp-cca"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Outdoor Ethernet Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/male-to-female-ethernet-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Male To Female Ethernet Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/flat-ethernet-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Flat Ethernet Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/products/fedus-cat8-ethernet-cable-braided-lan-cable-heavy-duty-5g"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Cat8 Ethernet Cable
                                            </span>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                href="/collections/power-cable"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"
                                style="color: #000000;"><span class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/power_cable_2.jpg?v=1675331914"
                                        alt="C13 Desktop power Cable">
                                </span><span class="text">Power Cable</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                Power Cable
                                            </span>
                                        </span>
                                    </li>

                                    <a href="javascript:void(0)" class="image-zoom adaptive_height"
                                        style="padding-top: 66.66666666666666%;">
                                        <img srcset="//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_165x.jpg?v=1675517724 165w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_170x.jpg?v=1675517724 170w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_185x.jpg?v=1675517724 185w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_198x.jpg?v=1675517724 198w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_210x.jpg?v=1675517724 210w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_220x.jpg?v=1675517724 220w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_245x.jpg?v=1675517724 245w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_270x.jpg?v=1675517724 270w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_290x.jpg?v=1675517724 290w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_320x.jpg?v=1675517724 320w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_355x.jpg?v=1675517724 355w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_360x.jpg?v=1675517724 360w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_370x.jpg?v=1675517724 370w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_420x.jpg?v=1675517724 420w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_430x.jpg?v=1675517724 430w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_460x.jpg?v=1675517724 460w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_470x.jpg?v=1675517724 470w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_510x.jpg?v=1675517724 510w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_523x.jpg?v=1675517724 523w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_533x.jpg?v=1675517724 533w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_534x.jpg?v=1675517724 534w,//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_570x.jpg?v=1675517724 570w"
                                            src="//www.fedus.in/cdn/shop/files/power_cable_2_a6f352fb-a389-4346-ba34-5c4b20ab1352_533x.jpg?v=1675517724"
                                            sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                            alt="UK pin Desktop power cord cable" size="600" loading="lazy" class="" />

                                    </a>

<!--
                                    <li class="menu-lv-item menu-lv-2 text-left"><a href="/collections/power-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Power Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a href="/collections/pc-power-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Desktop | Printer Power Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/laptop-power-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Laptop Power Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/2-pin-power-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                2 Pin Power Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/c13-to-c14-link-power-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                C13 to C14 Link Power Cable
                                            </span>
                                        </a></li>
                                </ul> -->
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu"><a href="/collections/buy-hdmi-cable"
                                class="menu-lv-1__action list-menu__item list-menu__item--end link focus-inset  menu-lv__flex menu_mobile_link"
                                style="color: #000000;"><span class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/hdmi_038b4e11-0d0c-45e3-88e5-60c8d27b9d80.jpg?v=1675331934"
                                        alt="8k HDMI Cable">
                                </span><span class="text">HDMI Cable</span></a></li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                href="/collections/cctv-camera-cable"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"><span
                                    class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/CCTV_Cable_3242a848-758a-4c75-921b-d1e2720893cb.jpg?v=1675331960"
                                        alt="3+1 cctv cable orange">
                                </span><span class="text">CCTV Cable</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                CCTV Cable
                                            </span>
                                        </span>
                                    </li>

                                    <a href="javascript:void(0)" class="image-zoom adaptive_height"
                                        style="padding-top: 66.66666666666666%;">
                                        <img srcset="//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_165x.jpg?v=1675509953 165w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_170x.jpg?v=1675509953 170w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_185x.jpg?v=1675509953 185w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_198x.jpg?v=1675509953 198w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_210x.jpg?v=1675509953 210w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_220x.jpg?v=1675509953 220w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_245x.jpg?v=1675509953 245w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_270x.jpg?v=1675509953 270w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_290x.jpg?v=1675509953 290w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_320x.jpg?v=1675509953 320w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_355x.jpg?v=1675509953 355w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_360x.jpg?v=1675509953 360w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_370x.jpg?v=1675509953 370w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_420x.jpg?v=1675509953 420w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_430x.jpg?v=1675509953 430w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_460x.jpg?v=1675509953 460w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_470x.jpg?v=1675509953 470w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_510x.jpg?v=1675509953 510w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_523x.jpg?v=1675509953 523w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_533x.jpg?v=1675509953 533w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_534x.jpg?v=1675509953 534w,//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_570x.jpg?v=1675509953 570w"
                                            src="//www.fedus.in/cdn/shop/files/CCTV_8bb9e3a6-b0e9-4406-bd78-c336f45bf641_533x.jpg?v=1675509953"
                                            sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                            alt="3+1 cctv cable orange" size="600" loading="lazy" class="" />

                                    </a>


                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/indoor-cctv-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Indoor CCTV Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/outdoor-cctv-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Outdoor CCTV Cable
                                            </span>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                href="/collections/audio-video-cable"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"><span
                                    class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/Untitled-2_a4b8ae17-4d67-441f-bd48-867b7648632f.jpg?v=1675332018"
                                        alt="3.5mm to 3 rca red, yellow, white audio, vedio cable">
                                </span><span class="text">Audio Cable</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <!--ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                Audio Cable
                                            </span>
                                        </span>
                                    </li>

                                    <a href="javascript:void(0)" class="image-zoom adaptive_height"
                                        style="padding-top: 66.66666666666666%;">
                                        <img srcset="//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_165x.jpg?v=1675517746 165w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_170x.jpg?v=1675517746 170w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_185x.jpg?v=1675517746 185w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_198x.jpg?v=1675517746 198w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_210x.jpg?v=1675517746 210w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_220x.jpg?v=1675517746 220w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_245x.jpg?v=1675517746 245w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_270x.jpg?v=1675517746 270w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_290x.jpg?v=1675517746 290w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_320x.jpg?v=1675517746 320w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_355x.jpg?v=1675517746 355w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_360x.jpg?v=1675517746 360w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_370x.jpg?v=1675517746 370w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_420x.jpg?v=1675517746 420w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_430x.jpg?v=1675517746 430w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_460x.jpg?v=1675517746 460w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_470x.jpg?v=1675517746 470w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_510x.jpg?v=1675517746 510w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_523x.jpg?v=1675517746 523w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_533x.jpg?v=1675517746 533w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_534x.jpg?v=1675517746 534w,//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_570x.jpg?v=1675517746 570w"
                                            src="//www.fedus.in/cdn/shop/files/Audio_cable_2_e623dfa0-cfb4-49a8-9671-049adfc3ff24_533x.jpg?v=1675517746"
                                            sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                            alt="3.5mm to 2rca audio cable black" size="600" loading="lazy" class="" />

                                    </a>


                                    <!--li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/2-rca-to-2-rca-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                2 RCA to 2 RCA Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/3-rca-to-3-rca-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                3 RCA to 3 RCA Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/3-5mm-aux-to-3-rca-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                3RCA Male to 3.5mm Aux Male Cable
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/2rca-male-to-3-5mm-audio-female-cable"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                2RCA Male To 3.5mm Female Audio Cable
                                            </span>
                                        </a></li-->
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                href="/collections/power-strip"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"><span
                                    class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/Extension.jpg?v=1675331959"
                                        alt="power strip 5 socket red">
                                </span><span class="text">Power Strip</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                Power Strip
                                            </span>
                                        </span>
                                    </li>

                                    <a href="javascript:void(0)" class="image-zoom adaptive_height"
                                        style="padding-top: 66.66666666666666%;">
                                        <img srcset="//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_165x.jpg?v=1675509983 165w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_170x.jpg?v=1675509983 170w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_185x.jpg?v=1675509983 185w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_198x.jpg?v=1675509983 198w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_210x.jpg?v=1675509983 210w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_220x.jpg?v=1675509983 220w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_245x.jpg?v=1675509983 245w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_270x.jpg?v=1675509983 270w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_290x.jpg?v=1675509983 290w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_320x.jpg?v=1675509983 320w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_355x.jpg?v=1675509983 355w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_360x.jpg?v=1675509983 360w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_370x.jpg?v=1675509983 370w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_420x.jpg?v=1675509983 420w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_430x.jpg?v=1675509983 430w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_460x.jpg?v=1675509983 460w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_470x.jpg?v=1675509983 470w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_510x.jpg?v=1675509983 510w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_523x.jpg?v=1675509983 523w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_533x.jpg?v=1675509983 533w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_534x.jpg?v=1675509983 534w,//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_570x.jpg?v=1675509983 570w"
                                            src="//www.fedus.in/cdn/shop/files/EXTENSION_BANNER_c0415fed-a5f5-4c09-8dd7-e359f3cd03bc_533x.jpg?v=1675509983"
                                            sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                            alt="Power strip with usb socket white" size="600" loading="lazy"
                                            class="" />

                                    </a>


                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/4-socket-power-strip"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                4 Socket Power Strip
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/6-socket-power-strip-1"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                6 Socket Power Strip
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/6-socket-power-strip"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Power Strip USB Socket
                                            </span>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                href="/collections/ac-dc-power-adaptor"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"><span
                                    class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/power_adapter.jpg?v=1675331959"
                                        alt="6v ac dc power adaptor">
                                </span><span class="text">AC / DC Power Adaptor</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                AC / DC Power Adaptor
                                            </span>
                                        </span>
                                    </li>

                                    <a href="javascript:void(0)" class="image-zoom adaptive_height"
                                        style="padding-top: 66.66666666666666%;">
                                        <img srcset="//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_165x.jpg?v=1675517765 165w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_170x.jpg?v=1675517765 170w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_185x.jpg?v=1675517765 185w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_198x.jpg?v=1675517765 198w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_210x.jpg?v=1675517765 210w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_220x.jpg?v=1675517765 220w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_245x.jpg?v=1675517765 245w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_270x.jpg?v=1675517765 270w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_290x.jpg?v=1675517765 290w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_320x.jpg?v=1675517765 320w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_355x.jpg?v=1675517765 355w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_360x.jpg?v=1675517765 360w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_370x.jpg?v=1675517765 370w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_420x.jpg?v=1675517765 420w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_430x.jpg?v=1675517765 430w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_460x.jpg?v=1675517765 460w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_470x.jpg?v=1675517765 470w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_510x.jpg?v=1675517765 510w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_523x.jpg?v=1675517765 523w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_533x.jpg?v=1675517765 533w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_534x.jpg?v=1675517765 534w,//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_570x.jpg?v=1675517765 570w"
                                            src="//www.fedus.in/cdn/shop/files/Power_Adapter_2994c581-159c-43c0-ada0-f623d62f3484_533x.jpg?v=1675517765"
                                            sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                            alt="12v ac dc power adaptor black" size="600" loading="lazy" class="" />

                                    </a>


                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/12v-1amp-dc-to-ac-adaptor"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                12v-1amp AC To DC Adaptor
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/12v-1-5amp-dc-to-ac-adaptor"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                12v-1.5amp AC To DC Adaptor
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/12v-2amp-dc-to-ac-adaptor"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                12v-2amp AC To DC Adaptor
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/9-5v-1amp-dc-to-ac-adaptor"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                6v-1amp AC To DC Adaptor
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/9-5v-1amp-ac-to-dc-adaptor"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                9.5v-1amp AC To DC Adaptor
                                            </span>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                href="/collections/stylus-pen-3-in-1"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"><span
                                    class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/pen_22f8d916-0ed0-463f-a307-988b785843d8.jpg?v=1675331959"
                                        alt="stylus pen black">
                                </span><span class="text">Stylus Pen</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                Stylus Pen
                                            </span>
                                        </span>
                                    </li>

                                    <a href="javascript:void(0)" class="image-zoom adaptive_height"
                                        style="padding-top: 66.66666666666666%;">
                                        <img srcset="//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_165x.jpg?v=1675510018 165w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_170x.jpg?v=1675510018 170w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_185x.jpg?v=1675510018 185w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_198x.jpg?v=1675510018 198w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_210x.jpg?v=1675510018 210w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_220x.jpg?v=1675510018 220w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_245x.jpg?v=1675510018 245w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_270x.jpg?v=1675510018 270w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_290x.jpg?v=1675510018 290w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_320x.jpg?v=1675510018 320w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_355x.jpg?v=1675510018 355w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_360x.jpg?v=1675510018 360w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_370x.jpg?v=1675510018 370w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_420x.jpg?v=1675510018 420w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_430x.jpg?v=1675510018 430w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_460x.jpg?v=1675510018 460w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_470x.jpg?v=1675510018 470w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_510x.jpg?v=1675510018 510w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_523x.jpg?v=1675510018 523w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_533x.jpg?v=1675510018 533w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_534x.jpg?v=1675510018 534w,//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_570x.jpg?v=1675510018 570w"
                                            src="//www.fedus.in/cdn/shop/files/pen_2_99f19d4d-75fa-4d0e-98d3-592104fd8a27_533x.jpg?v=1675510018"
                                            sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                            alt="stylus pen white" size="600" loading="lazy" class="" />

                                    </a>


                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                href="/collections/cooler-water-pump"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"><span
                                    class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/Cooler_pump_a0f9d6b6-10da-45c7-9242-85d048b78c9a.jpg?v=1675331960"
                                        alt="18 watt cooler pump grey">
                                </span><span class="text">Cooler Water Pump</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                Cooler Water Pump
                                            </span>
                                        </span>
                                    </li>

                                    <a href="javascript:void(0)" class="image-zoom adaptive_height"
                                        style="padding-top: 66.66666666666666%;">
                                        <img srcset="//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_165x.jpg?v=1675517782 165w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_170x.jpg?v=1675517782 170w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_185x.jpg?v=1675517782 185w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_198x.jpg?v=1675517782 198w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_210x.jpg?v=1675517782 210w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_220x.jpg?v=1675517782 220w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_245x.jpg?v=1675517782 245w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_270x.jpg?v=1675517782 270w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_290x.jpg?v=1675517782 290w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_320x.jpg?v=1675517782 320w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_355x.jpg?v=1675517782 355w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_360x.jpg?v=1675517782 360w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_370x.jpg?v=1675517782 370w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_420x.jpg?v=1675517782 420w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_430x.jpg?v=1675517782 430w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_460x.jpg?v=1675517782 460w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_470x.jpg?v=1675517782 470w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_510x.jpg?v=1675517782 510w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_523x.jpg?v=1675517782 523w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_533x.jpg?v=1675517782 533w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_534x.jpg?v=1675517782 534w,//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_570x.jpg?v=1675517782 570w"
                                            src="//www.fedus.in/cdn/shop/files/Cooler_pump_9afe6868-fc01-4d39-badd-81ef66a4c236_533x.jpg?v=1675517782"
                                            sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                            alt="20 watt cooler pump grey white" size="600" loading="lazy" class="" />

                                    </a>


                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/9-watt-water-cooler-pump"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                9 Watt Water Cooler Pump
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/14-watt-water-cooler-pump"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                14 Watt Water Cooler Pump
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/18-watt-water-cooler-pump"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                18 Watt Water Cooler Pump
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/20-watt-water-cooler-pump"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                20 Watt Water Cooler Pump
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/40-watt-water-cooler-pump"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                40 Watt Water Cooler Pump
                                            </span>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                href="collections/rj45-connectors.html"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"><span
                                    class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/Rj_45_connector_667a9f23-2d71-438e-973b-4ed97feb478f.jpg?v=1675335112"
                                        alt="rj45 connectors utp">
                                </span><span class="text">RJ45 Connector | Plug</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                RJ45 Connector | Plug
                                            </span>
                                        </span>
                                    </li>

                                    <a href="javascript:void(0)" class="image-zoom adaptive_height"
                                        style="padding-top: 66.66666666666666%;">
                                        <img srcset="//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_165x.jpg?v=1675517797 165w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_170x.jpg?v=1675517797 170w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_185x.jpg?v=1675517797 185w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_198x.jpg?v=1675517797 198w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_210x.jpg?v=1675517797 210w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_220x.jpg?v=1675517797 220w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_245x.jpg?v=1675517797 245w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_270x.jpg?v=1675517797 270w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_290x.jpg?v=1675517797 290w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_320x.jpg?v=1675517797 320w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_355x.jpg?v=1675517797 355w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_360x.jpg?v=1675517797 360w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_370x.jpg?v=1675517797 370w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_420x.jpg?v=1675517797 420w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_430x.jpg?v=1675517797 430w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_460x.jpg?v=1675517797 460w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_470x.jpg?v=1675517797 470w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_510x.jpg?v=1675517797 510w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_523x.jpg?v=1675517797 523w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_533x.jpg?v=1675517797 533w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_534x.jpg?v=1675517797 534w,//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_570x.jpg?v=1675517797 570w"
                                            src="//www.fedus.in/cdn/shop/files/Rj_45_connector_5f740086-fcba-4d78-b6fe-88d2e6b4c973_533x.jpg?v=1675517797"
                                            sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                            alt="rj45 connector stp connector" size="600" loading="lazy" class="" />

                                    </a>


                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/rj45-utp-connectors"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                RJ45 UTP Connectors
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/rj45-pass-trough-connector"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                RJ45 Pass Trough Connector
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/rj45-shielded-stp-connectors"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                RJ45 Shielded STP Connectors
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/cat7-rj45-connector-plug"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Cat7 RJ45 Connector | Plug
                                            </span>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                href="/collections/cctv-power-supply"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"><span
                                    class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/CCTV_SMPS.jpg?v=1675334908"
                                        alt="cctv power supply 4 channel white">
                                </span><span class="text">CCTV Power supply</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                CCTV Power supply
                                            </span>
                                        </span>
                                    </li>

                                    <a href="javascript:void(0)" class="image-zoom adaptive_height"
                                        style="padding-top: 66.66666666666666%;">
                                        <img srcset="//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_165x.jpg?v=1675510072 165w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_170x.jpg?v=1675510072 170w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_185x.jpg?v=1675510072 185w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_198x.jpg?v=1675510072 198w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_210x.jpg?v=1675510072 210w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_220x.jpg?v=1675510072 220w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_245x.jpg?v=1675510072 245w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_270x.jpg?v=1675510072 270w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_290x.jpg?v=1675510072 290w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_320x.jpg?v=1675510072 320w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_355x.jpg?v=1675510072 355w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_360x.jpg?v=1675510072 360w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_370x.jpg?v=1675510072 370w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_420x.jpg?v=1675510072 420w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_430x.jpg?v=1675510072 430w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_460x.jpg?v=1675510072 460w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_470x.jpg?v=1675510072 470w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_510x.jpg?v=1675510072 510w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_523x.jpg?v=1675510072 523w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_533x.jpg?v=1675510072 533w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_534x.jpg?v=1675510072 534w,//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_570x.jpg?v=1675510072 570w"
                                            src="//www.fedus.in/cdn/shop/files/CCTV_SMPS_bd3fd669-5baa-4f4c-94a7-5c46ecc28147_533x.jpg?v=1675510072"
                                            sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                            alt="cctv power supply 4 channel" size="600" loading="lazy" class="" />

                                    </a>


                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/cctv-power-supply"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                CCTV Power supply
                                            </span>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                href="/collections/network-accessories"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"><span
                                    class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/Networking_Accerories.jpg?v=1675331959"
                                        alt="lan tester and pvc boots blue">
                                </span><span class="text">Network Accessories</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                Network Accessories
                                            </span>
                                        </span>
                                    </li>

                                    <a href="javascript:void(0)" class="image-zoom adaptive_height"
                                        style="padding-top: 66.66666666666666%;">
                                        <img srcset="//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_165x.jpg?v=1675518193 165w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_170x.jpg?v=1675518193 170w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_185x.jpg?v=1675518193 185w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_198x.jpg?v=1675518193 198w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_210x.jpg?v=1675518193 210w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_220x.jpg?v=1675518193 220w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_245x.jpg?v=1675518193 245w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_270x.jpg?v=1675518193 270w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_290x.jpg?v=1675518193 290w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_320x.jpg?v=1675518193 320w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_355x.jpg?v=1675518193 355w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_360x.jpg?v=1675518193 360w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_370x.jpg?v=1675518193 370w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_420x.jpg?v=1675518193 420w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_430x.jpg?v=1675518193 430w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_460x.jpg?v=1675518193 460w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_470x.jpg?v=1675518193 470w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_510x.jpg?v=1675518193 510w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_523x.jpg?v=1675518193 523w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_533x.jpg?v=1675518193 533w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_534x.jpg?v=1675518193 534w,//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_570x.jpg?v=1675518193 570w"
                                            src="//www.fedus.in/cdn/shop/files/Networking_accessoris_e2797ea6-3cb9-4618-a041-30ea8d8fe24a_533x.jpg?v=1675518193"
                                            sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                            alt="lan tester and rj45 pvc boots" size="600" loading="lazy" class="" />

                                    </a>


                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/collections/usb-to-ethernet-adaptor"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                USB to Ethernet Adaptor
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a href="/collections/lan-tester"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Lan Tester
                                            </span>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                href="/collections/laptop-accessories"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"><span
                                    class="custom-icon style-rectangle">
                                    <img src="//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_09e0e9c8-4a62-4e7c-8850-27c05a2d5615.jpg?v=1675331960"
                                        alt="laptop screen guard 15.6 inch">
                                </span><span class="text">Laptop Accessories</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                Laptop Accessories
                                            </span>
                                        </span>
                                    </li>

                                    <a href="javascript:void(0)" class="image-zoom adaptive_height"
                                        style="padding-top: 66.66666666666666%;">
                                        <img srcset="//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_165x.jpg?v=1675510115 165w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_170x.jpg?v=1675510115 170w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_185x.jpg?v=1675510115 185w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_198x.jpg?v=1675510115 198w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_210x.jpg?v=1675510115 210w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_220x.jpg?v=1675510115 220w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_245x.jpg?v=1675510115 245w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_270x.jpg?v=1675510115 270w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_290x.jpg?v=1675510115 290w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_320x.jpg?v=1675510115 320w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_355x.jpg?v=1675510115 355w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_360x.jpg?v=1675510115 360w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_370x.jpg?v=1675510115 370w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_420x.jpg?v=1675510115 420w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_430x.jpg?v=1675510115 430w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_460x.jpg?v=1675510115 460w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_470x.jpg?v=1675510115 470w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_510x.jpg?v=1675510115 510w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_523x.jpg?v=1675510115 523w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_533x.jpg?v=1675510115 533w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_534x.jpg?v=1675510115 534w,//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_570x.jpg?v=1675510115 570w"
                                            src="//www.fedus.in/cdn/shop/files/laptop_66beaa88-78c9-4a02-9821-f416cb5444fa_533x.jpg?v=1675510115"
                                            sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                            alt="laptop screen guard" size="600" loading="lazy" class="" />

                                    </a>


                                    <li class="menu-lv-item menu-lv-2 text-left"><a href="/collections/cleaning-kit"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Cleaning Kit
                                            </span>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </template>
            </div>
        </div>
        <div id="shopify-section-halo-navigation-mobile-2" class="shopify-section">
            <div data-section-id="halo-navigation-mobile-2" data-section-type="menu" id="MenuMobileSection-support">
                <style type="text/css" media="screen">
                    :root {
                        --lv-1-support-font: var(--font-heading-family);
                        --lv-2-support-font: var(--font-heading-family);
                        --lv-title-support-font: var(--font-heading-family);
                    }

                    @media (max-width: 1024px) {
                        #MenuMobileListSection-support .menu-lv-1__action {
                            font-family: var(--lv-1-support-font);
                            font-size: 14px;
                            font-weight: 400;
                            text-transform: capitalize;
                        }

                        #MenuMobileListSection-support .menu-lv-2__action,
                        #MenuMobileListSection-support .menu-lv-3__action {
                            font-family: var(--lv-2-support-font);
                            font-size: 14px;
                            font-weight: 400;
                            text-transform: capitalize;
                        }

                        #MenuMobileListSection-support .nav-title-mobile .menu-lv-2__action .text,
                        #MenuMobileListSection-support .nav-title-mobile .menu-lv-3__action .text {
                            font-family: var(--lv-title-support-font);
                            font-size: 16px;
                            font-weight: 400;
                            text-transform: capitalize;
                        }

                        #MenuMobileListSection-support .custom-icon svg {
                            width: 50px;
                            height: 50px;
                        }

                        #MenuMobileListSection-support .custom-icon img {
                            width: 100%;
                            height: 100%;
                            max-width: 50px;
                            max-height: 50px;
                        }

                        #MenuMobileListSection-support .custom-image img {
                            width: 100%;
                            height: 100%;
                            max-width: 60px;
                            max-height: 60px;
                        }

                        .nav-mobile-menu-tab .menu-tab .link[data-target="MenuMobileListSection-support"] {
                            background: #232323;
                            color: #e8e8e8;
                        }

                        .nav-mobile-menu-tab .menu-tab .item.is-active .link[data-target="MenuMobileListSection-support"] {
                            background: #e8e8e8;
                            color: #232323;
                        }
                    }
                </style>
                <template>
                    <ul class="list-menu list-menu--inline list-unstyled" role="list" id="MenuMobileListSection-support"
                        data-heading="Support">
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a role="link"
                                aria-disabled="true"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"><span
                                    class="text">Support</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                Support
                                            </span>
                                        </span>
                                    </li>


                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href=""
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset">
                                            <span class="text">
                                                Go to Support
                                            </span>
                                        </a>
                                    </li>

                                    <li class="menu-lv-item menu-lv-2 text-left dropdown"><a
                                            href="/pages/business-inquiry"
                                            class="menu-lv-2__action link list-menu__item focus-inset menu-lv__flex menu_mobile_link"><span
                                                class="text">
                                                Business Inquiry
                                            </span>
                                            <span class="icon-dropdown" data-toggle-menu-mb>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    aria-hidden="true" focusable="false" role="presentation"
                                                    class="icon icon-caret">
                                                    <path
                                                        d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                        <div
                                            class="menu-lv__dropdownmenu menu-lv__dropdownmenu-2 menu-dropdown image-lo">
                                            <ul class="menu-lv__list list-menu list-unstyled motion-reduce">
                                                <li class="menu-lv-item menu-lv-3 nav-title-mobile text-center">
                                                    <span class="icon-dropdown">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                            data-icon="long-arrow-left" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                            class="icon-arrow-nav">
                                                            <path fill="currentColor"
                                                                d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                                class=""></path>
                                                        </svg>
                                                    </span>
                                                    <span class="menu-lv-3__action link focus-inset">
                                                        <span class="text">
                                                            Business Inquiry
                                                        </span>
                                                    </span>
                                                </li>


                                                <li class="menu-lv-item menu-lv-3 text-left nav-all-mobile">
                                                    <a href="/pages/business-inquiry"
                                                        class="menu-lv-3__action list-menu__item list-menu__item--end link focus-inset">
                                                        <span class="text">
                                                            Go to Business Inquiry
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-lv-item menu-lv-3 text-left"><a
                                                        href="/pages/bulk-purchase"
                                                        class="menu-lv-3__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                            class="text">
                                                            Bulk Purchase
                                                        </span>
                                                    </a></li>
                                                <li class="menu-lv-item menu-lv-3 text-left"><a
                                                        href="/pages/distribution-enquiry"
                                                        class="menu-lv-3__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                            class="text">
                                                            Distribution Enquiry
                                                        </span>
                                                    </a></li>
                                                <li class="menu-lv-item menu-lv-3 text-left"><a
                                                        href="/pages/product-customization"
                                                        class="menu-lv-3__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                            class="text">
                                                            Product Customization
                                                        </span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a href="/pages/contact"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Contact us
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a
                                            href="/pages/product-drivers-manuals"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Product Drivers &amp; Manuals
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a href="/pages/get-warranty"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Get Warranty
                                            </span>
                                        </a></li>
                                    <li class="menu-lv-item menu-lv-2 text-left"><a href="/pages/warranty-activation"
                                            class="menu-lv-2__action list-menu__item list-menu__item--end link focus-inset menu-lv__flex"><span
                                                class="text">
                                                Activate Your Warranty
                                            </span>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </template>
            </div>
        </div>
        <div id="shopify-section-halo-navigation-mobile-3" class="shopify-section">
            <div data-section-id="halo-navigation-mobile-3" data-section-type="menu" id="MenuMobileSection-">
                <style type="text/css" media="screen">
                    :root {
                        --lv-1--font: var(--font-1-family);
                        --lv-2--font: var(--font-1-family);
                        --lv-title--font: var(--font-1-family);
                    }

                    @media (max-width: 1024px) {
                        #MenuMobileListSection- .menu-lv-1__action {
                            font-family: var(--lv-1--font);
                            font-size: 15px;
                            font-weight: 500;
                            text-transform: capitalize;
                        }

                        #MenuMobileListSection- .menu-lv-2__action,
                        #MenuMobileListSection- .menu-lv-3__action {
                            font-family: var(--lv-2--font);
                            font-size: 15px;
                            font-weight: 400;
                            text-transform: capitalize;
                        }

                        #MenuMobileListSection- .nav-title-mobile .menu-lv-2__action .text,
                        #MenuMobileListSection- .nav-title-mobile .menu-lv-3__action .text {
                            font-family: var(--lv-title--font);
                            font-size: 10px;
                            font-weight: 500;
                            text-transform: capitalize;
                        }

                        #MenuMobileListSection- .custom-icon svg {
                            width: 50px;
                            height: 50px;
                        }

                        #MenuMobileListSection- .custom-icon img {
                            width: 100%;
                            height: 100%;
                            max-width: 50px;
                            max-height: 50px;
                        }

                        #MenuMobileListSection- .custom-image img {
                            width: 100%;
                            height: 100%;
                            max-width: 60px;
                            max-height: 60px;
                        }

                        .nav-mobile-menu-tab .menu-tab .link[data-target="MenuMobileListSection-"] {
                            background: #232323;
                            color: #e8e8e8;
                        }

                        .nav-mobile-menu-tab .menu-tab .item.is-active .link[data-target="MenuMobileListSection-"] {
                            background: #e8e8e8;
                            color: #232323;
                        }
                    }
                </style>
                <template>
                    <ul class="list-menu list-menu--inline list-unstyled" role="list" id="MenuMobileListSection-"
                        data-heading="">
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                            <a href="/pages/business-inquiry"
                                class="menu-lv-1__action list-menu__item link focus-inset menu-lv__flex menu_mobile_link"><span
                                    class="text">Business Inquiry</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        focusable="false" role="presentation" class="icon icon-caret">
                                        <path
                                            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                        </path>
                                    </svg>
                                </span></a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" role="list">
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                data-icon="long-arrow-left" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="icon-arrow-nav">
                                                <path fill="currentColor"
                                                    d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z"
                                                    class=""></path>
                                            </svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">
                                                Business Inquiry
                                            </span>
                                        </span>
                                    </li>










































                                </ul>
                            </div>
                        </li>
                    </ul>
                </template>
            </div>
        </div>

        <script src='//cdn.shopify.com/s/javascripts/currencies.js' defer="defer"></script>
        <script src="//www.fedus.in/cdn/shop/t/3/assets/jquery.currencies.min.js?v=93165953928473677901672341187"
            defer="defer"></script>
        <script type="text/javascript">
            let shopCurrency = "INR"
        </script>








        <main id="MainContent" class="wrapper-body content-for-layout focus-none" role="main" tabindex="-1">
            <div id="shopify-section-template--17373918888236__16321237356a896dad"
                class="shopify-section sections-slide-show">
                <div class="slideshow-wrapper section-block-template--17373918888236__16321237356a896dad"
                    id="slideshow-wrapper-template--17373918888236__16321237356a896dad"
                    data-loader-script="//www.fedus.in/cdn/shop/t/3/assets/halo.slide-show.js?v=98340552716897879821672341187">
                    <div class="container-full">



                        <div class="slideshow" data-auto-video="false" data-init-slideshow data-arrows="true"
                            data-dots="true" data-autoplay="true" data-autoplay-speed="5000" data-fade="true">



                            <div class="item slide-block-ab4d3a13-277d-4aeb-b055-1df7d829e328"
                                id="block-ab4d3a13-277d-4aeb-b055-1df7d829e328" data-index="1" data-style="1"
                                data-dots-enabled="true" data-dots-mobile-enabled="true" data-show-lookbook-info="true"
                                data-show-lookbook-default="false" data-lookbook-background-color="rgba(0,0,0,0.7) "
                                data-lookbook-text-color="#ffffff" data-show-lookbook-container>

                                <div class="images-contain" data-lookbook-item-container>

                                    <div class="adaptive_height slide-pc" style="padding-top: 38.29787234042553%">
                                        <a role="link" aria-disabled="true" class="slide-image">
                                            <img srcset="admin_panel/uploads/<?php echo $slide1; ?>"
                                                sizes="100vw"
                                                src="admin_panel/uploads/<?php echo $slide1; ?>"
                                                alt="Banner of fedus hdmi cable multicolor" width="1880" height="720.0">

                                        </a>
                                    </div>



                                    <div class="adaptive_height slide-mobile" style="padding-top: 136.36363636363637%">
                                        <a role="link" aria-disabled="true" class="slide-image">
                                            <img srcset="//www.fedus.in/cdn/shop/files/ehernet_cable_0f1704db-c142-4405-98b4-4fa53e0a1b90_375x.jpg?v=1674829435 375w,"
                                                sizes="100vw"
                                                src="//www.fedus.in/cdn/shop/files/ehernet_cable_0f1704db-c142-4405-98b4-4fa53e0a1b90.jpg?v=1674829435&width=750"
                                                alt="Banner of ethernet cable multicolor" width="638" height="870.0">

                                        </a>
                                    </div>







                                    <style type="text/css">
                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-1-ab4d3a13-277d-4aeb-b055-1df7d829e328 .glyphicon {
                                            background-color: #232323;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-1-ab4d3a13-277d-4aeb-b055-1df7d829e328 .glyphicon:before,
                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-1-ab4d3a13-277d-4aeb-b055-1df7d829e328 .glyphicon:after {
                                            background-color: #ffffff;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-1-ab4d3a13-277d-4aeb-b055-1df7d829e328:before {
                                            color: rgba(35, 35, 35, 0.3);
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-2-ab4d3a13-277d-4aeb-b055-1df7d829e328 .glyphicon {
                                            background-color: #232323;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-2-ab4d3a13-277d-4aeb-b055-1df7d829e328 .glyphicon:before,
                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-2-ab4d3a13-277d-4aeb-b055-1df7d829e328 .glyphicon:after {
                                            background-color: #ffffff;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-2-ab4d3a13-277d-4aeb-b055-1df7d829e328:before {
                                            color: rgba(35, 35, 35, 0.3);
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-3-ab4d3a13-277d-4aeb-b055-1df7d829e328 .glyphicon {
                                            background-color: #232323;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-3-ab4d3a13-277d-4aeb-b055-1df7d829e328 .glyphicon:before,
                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-3-ab4d3a13-277d-4aeb-b055-1df7d829e328 .glyphicon:after {
                                            background-color: #ffffff;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-3-ab4d3a13-277d-4aeb-b055-1df7d829e328:before {
                                            color: rgba(35, 35, 35, 0.3);
                                        }
                                    </style>
                                </div>


                            </div>




                            <div class="item slide-block-777a171a-a6cb-4e36-9a1f-b0f619fd3d09"
                                id="block-777a171a-a6cb-4e36-9a1f-b0f619fd3d09" data-index="2" data-style="1"
                                data-dots-enabled="true" data-dots-mobile-enabled="true" data-show-lookbook-info="true"
                                data-show-lookbook-default="false" data-lookbook-background-color="rgba(0,0,0,0.7) "
                                data-lookbook-text-color="#ffffff" data-show-lookbook-container>

                                <div class="images-contain" data-lookbook-item-container>

                                    <div class="adaptive_height slide-pc" style="padding-top: 38.29787234042553%">
                                        <a role="link" aria-disabled="true" class="slide-image">
                                            <img srcset="admin_panel/uploads/<?php echo $slide2; ?>"
                                                sizes="100vw"
                                                src="//www.fedus.in/cdn/shop/files/ethernet_cable_banner_black_2_b61e1d77-e110-4e52-9871-c176a66a8ec6.jpg?v=1673851836&width=750"
                                                alt="Ethernet cable banner cat6 cat7 multicolor" width="1880"
                                                height="720.0">

                                        </a>
                                    </div>



                                    <div class="adaptive_height slide-mobile" style="padding-top: 136.36363636363637%">
                                        <a role="link" aria-disabled="true" class="slide-image">
                                            <img srcset="//www.fedus.in/cdn/shop/files/EXTENSION_board_cc_e4953a3b-9e34-456b-ac72-6e936df72247_375x.jpg?v=1674829316 375w,"
                                                sizes="100vw"
                                                src="//www.fedus.in/cdn/shop/files/EXTENSION_board_cc_e4953a3b-9e34-456b-ac72-6e936df72247.jpg?v=1674829316&width=750"
                                                alt="Power strip 4 socket with usb white" width="638" height="870.0">

                                        </a>
                                    </div>







                                    <style type="text/css">
                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-1-777a171a-a6cb-4e36-9a1f-b0f619fd3d09 .glyphicon {
                                            background-color: #232323;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-1-777a171a-a6cb-4e36-9a1f-b0f619fd3d09 .glyphicon:before,
                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-1-777a171a-a6cb-4e36-9a1f-b0f619fd3d09 .glyphicon:after {
                                            background-color: #ffffff;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-1-777a171a-a6cb-4e36-9a1f-b0f619fd3d09:before {
                                            color: rgba(35, 35, 35, 0.3);
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-2-777a171a-a6cb-4e36-9a1f-b0f619fd3d09 .glyphicon {
                                            background-color: #232323;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-2-777a171a-a6cb-4e36-9a1f-b0f619fd3d09 .glyphicon:before,
                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-2-777a171a-a6cb-4e36-9a1f-b0f619fd3d09 .glyphicon:after {
                                            background-color: #ffffff;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-2-777a171a-a6cb-4e36-9a1f-b0f619fd3d09:before {
                                            color: rgba(35, 35, 35, 0.3);
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-3-777a171a-a6cb-4e36-9a1f-b0f619fd3d09 .glyphicon {
                                            background-color: #232323;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-3-777a171a-a6cb-4e36-9a1f-b0f619fd3d09 .glyphicon:before,
                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-3-777a171a-a6cb-4e36-9a1f-b0f619fd3d09 .glyphicon:after {
                                            background-color: #ffffff;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-3-777a171a-a6cb-4e36-9a1f-b0f619fd3d09:before {
                                            color: rgba(35, 35, 35, 0.3);
                                        }
                                    </style>
                                </div>


                            </div>




                            <div class="item slide-block-16321237356a896dad-0" id="block-16321237356a896dad-0"
                                data-index="3" data-style="1" data-dots-enabled="true" data-dots-mobile-enabled="true"
                                data-show-lookbook-info="true" data-show-lookbook-default="false"
                                data-lookbook-background-color="rgba(0,0,0,0.7) " data-lookbook-text-color="#ffffff"
                                data-show-lookbook-container>

                                <div class="images-contain" data-lookbook-item-container>

                                    <div class="adaptive_height slide-pc" style="padding-top: 38.29787234042553%">
                                        <a role="link" aria-disabled="true" class="slide-image">
                                            <img srcset="admin_panel/uploads/<?php echo $slide3; ?>"
                                                sizes="100vw"
                                                src="admin_panel/uploads/<?php echo $slide3; ?>"
                                                alt="Power strip banner multicolor" width="1880" height="720.0">

                                        </a>
                                    </div>



                                    <div class="adaptive_height slide-mobile" style="padding-top: 136.36363636363637%">
                                        <a role="link" aria-disabled="true" class="slide-image">
                                            <img srcset="//www.fedus.in/cdn/shop/files/HDMI_ec9abe8f-15f8-4d54-aae3-e9656c962abc_375x.jpg?v=1676107849 375w,"
                                                sizes="100vw"
                                                src="//www.fedus.in/cdn/shop/files/HDMI_ec9abe8f-15f8-4d54-aae3-e9656c962abc.jpg?v=1676107849&width=750"
                                                alt="FEDUS Hdmi cable banner " width="638" height="870.0">

                                        </a>
                                    </div>







                                    <style type="text/css">
                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-1-16321237356a896dad-0 .glyphicon {
                                            background-color: #232323;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-1-16321237356a896dad-0 .glyphicon:before,
                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-1-16321237356a896dad-0 .glyphicon:after {
                                            background-color: #ffffff;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-1-16321237356a896dad-0:before {
                                            color: rgba(35, 35, 35, 0.3);
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-2-16321237356a896dad-0 .glyphicon {
                                            background-color: #232323;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-2-16321237356a896dad-0 .glyphicon:before,
                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-2-16321237356a896dad-0 .glyphicon:after {
                                            background-color: #ffffff;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-2-16321237356a896dad-0:before {
                                            color: rgba(35, 35, 35, 0.3);
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-3-16321237356a896dad-0 .glyphicon {
                                            background-color: #232323;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-3-16321237356a896dad-0 .glyphicon:before,
                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-3-16321237356a896dad-0 .glyphicon:after {
                                            background-color: #ffffff;
                                        }

                                        #slideshow-wrapper-template--17373918888236__16321237356a896dad .lb-icon-3-16321237356a896dad-0:before {
                                            color: rgba(35, 35, 35, 0.3);
                                        }
                                    </style>
                                </div>


                            </div>


                        </div>




                    </div>


                </div>

                <style>
                    @media (min-width: 1366px) {
                        .section-block-template--17373918888236__16321237356a896dad .slick-arrow.slick-prev {
                            left: 10% !important;
                        }

                        .section-block-template--17373918888236__16321237356a896dad .slick-arrow.slick-next {
                            right: 10% !important;
                        }
                    }

                    @media (min-width: 1200px) {
                        .section-block-template--17373918888236__16321237356a896dad {
                            padding-top: 0px;
                            padding-bottom: 0px;
                        }

                        .section-block-template--17373918888236__16321237356a896dad .slideshow .slick-dots {
                            bottom: 5px;
                        }
                    }

                    @media (min-width: 1025px) {
                        .section-block-template--17373918888236__16321237356a896dad .container-full {
                            padding-left: 0px;
                            padding-right: 0px;
                        }

                        .section-block-template--17373918888236__16321237356a896dad .slick-arrow:hover {
                            color: ;
                            border-color: ;
                            background-color: ;
                        }
                    }

                    @media (min-width: 768px) and (max-width: 1199px) {
                        .section-block-template--17373918888236__16321237356a896dad {
                            padding-top: 0px;
                            padding-bottom: 0px;
                        }
                    }

                    @media (max-width: 767px) {
                        .section-block-template--17373918888236__16321237356a896dad {
                            padding-top: 0px;
                            padding-bottom: 0px;
                        }
                    }

                    .section-block-template--17373918888236__16321237356a896dad {
                        background: ;
                    }

                    .section-block-template--17373918888236__16321237356a896dad .fluid-width-video-wrapper {
                        padding-top: 41.7% !important;
                    }

                    .section-block-template--17373918888236__16321237356a896dad .block-categories-slider li a {
                        color: #202020;
                    }

                    .section-block-template--17373918888236__16321237356a896dad .block-categories-slider .title {
                        color: #ffffff;
                        border-bottom: 2px solid #fd6506;
                    }

                    .section-block-template--17373918888236__16321237356a896dad .block-categories-slider .title span {
                        background-color: #fd6506;
                    }

                    .section-block-template--17373918888236__16321237356a896dad .slick-dots li button {
                        border-color: #707979;
                        background: #707979;
                        position: relative;
                    }

                    .section-block-template--17373918888236__16321237356a896dad .slick-dots li button::after {
                        content: '';
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        width: 100%;
                        min-height: 44px;
                        display: block;
                    }

                    .section-block-template--17373918888236__16321237356a896dad .slick-dots li.slick-active button {
                        background: rgba(0, 0, 0, 0);
                        border-color: #505656;
                    }

                    @media (min-width: 768px) {
                        .section-block-template--17373918888236__16321237356a896dad .slick-dots li:not(.slick-active) button {
                            opacity: 0.8;
                            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=80)";
                            filter: alpha(opacity=80);
                        }
                    }
                </style>



            </div>
            <div id="shopify-section-template--17373918888236__165182271049b99cf5"
                class="shopify-section sections-custom-service-block">
                <link rel="stylesheet"
                    href="//www.fedus.in/cdn/shop/t/3/assets/component-custom-service-block.css?v=53747083695191817061672341181"
                    media="print" onload="this.media='all'">
                <noscript>
                    <link
                        href="//www.fedus.in/cdn/shop/t/3/assets/component-custom-service-block.css?v=53747083695191817061672341181"
                        rel="stylesheet" type="text/css" media="all" />
                </noscript>

                <style>
                    .section-block-template--17373918888236__165182271049b99cf5,
                    .section-block-template--17373918888236__165182271049b99cf5 .halo-block-header .title .text {
                        background: #ffffff;
                    }

                    .section-block-template--17373918888236__165182271049b99cf5 .policies-block-wrapper {
                        position: relative;
                    }

                    .section-block-template--17373918888236__165182271049b99cf5 .slider-button .icon {
                        fill: #212121;
                    }

                    .section-block-template--17373918888236__165182271049b99cf5 .slider-button--prev .icon {
                        margin-top: 2px;
                    }

                    .section-block-template--17373918888236__165182271049b99cf5 {}

                    .section-block-template--17373918888236__165182271049b99cf5 .halo-item+.halo-item {}

                    body.layout_rtl .section-block-template--17373918888236__165182271049b99cf5 .halo-item+.halo-item {}

                    .section-block-template--17373918888236__165182271049b99cf5 .halo-block-header .title:before {
                        background-color: #051c42;
                        display: none;
                    }

                    .section-block-template--17373918888236__165182271049b99cf5 .halo-block-header .title {
                        color: #051c42;
                        font-size: 30px;
                        margin-bottom: 20px;
                    }

                    .section-block-template--17373918888236__165182271049b99cf5 .halo-block-header {
                        margin-bottom: 0;
                    }

                    .section-block-template--17373918888236__165182271049b99cf5 .halo-block-header .rte {
                        color: #051c42;
                        font-size: 15px;
                    }

                    .section-block-template--17373918888236__165182271049b99cf5 .rte {
                        color: #051c42;
                        font-size: 15px;
                        margin-top: 20px;
                        margin-bottom: 20px;
                    }

                    @media (max-width: 1024px) {
                        .section-block-template--17373918888236__165182271049b99cf5 .halo-item+.halo-item:before {
                            content: none;
                        }
                    }

                    @media (max-width: 767px) {
                        .section-block-template--17373918888236__165182271049b99cf5 {
                            padding-top: 20px;
                            padding-bottom: 20px;
                        }

                        .section-block-template--17373918888236__165182271049b99cf5 .halo-block-header .title {
                            font-size: 20px;
                            margin-bottom: 20px;
                        }

                        .section-block-template--17373918888236__165182271049b99cf5 .halo-block-header .title {
                            margin-bottom: 20px;
                        }
                    }

                    @media (min-width: 1200px) {
                        .section-block-template--17373918888236__165182271049b99cf5 {
                            padding-top: 20px;
                            padding-bottom: 20px;
                        }

                        .section-block-template--17373918888236__165182271049b99cf5 .halo-item a:hover {
                            box-shadow: 0 0 14px rgb(33 33 33 / 20%);
                        }

                        .section-block-template--17373918888236__165182271049b99cf5 .halo-item a {
                            position: relative;
                            transform: translate3d(0px, 0px, 0px);
                            transition: all .4s ease;
                        }

                        .section-block-template--17373918888236__165182271049b99cf5 .halo-item a:hover {
                            transform: translate3d(0px, -15px, 0px);
                        }
                    }

                    @media (min-width: 1025px) {
                        .section-block-template--17373918888236__165182271049b99cf5 .halo-block-header .title .text {
                            width: auto;
                        }
                    }

                    @media (min-width: 768px) and (max-width: 1199px) {
                        .section-block-template--17373918888236__165182271049b99cf5 {
                            padding-top: 20px;
                            padding-bottom: 20px;
                        }
                    }
                </style>

                <div class="custom-service-block section-block-template--17373918888236__165182271049b99cf5"
                    style="--grid-gap: 5.0px">
                    <div class="container">

                        <div class="bg-policies-block">


                            <div class="halo-block-header text-center">
                                <h3 class="title">
                                    <span class="text">
                                        Welcome to Setmi India (since 1983)
                                    </span>
                                </h3>


                            </div>


                            <banner-slider-component>
                                <div class="policies-block-wrapper">
                                    <div class="halo-row column-3 items--full_width slider slider--tablet">

                                        <div class="halo-item slider__slide has-des">
                                            <a href="/pages/about-us" title="Best Rated Brand"
                                                style="--item-radius-style: 10px; 
                                                                                                       --item-padding-top-style: 20px; 
                                                                                                       --item-padding-bottom-style: 20px;
                                                                                                       --item-padding-left-right-style: 20px;
                                                                                                       --bg-color-block-style: #ffffff;
                                                                                                       --border-block-style: rgba(0,0,0,0);
                                                                                                       --width-icon-style: 80px;
                                                                                                       --height-icon-style: 80px">


                                                <div class="policies-icon image-zoom"
                                                    style="--mg-bottom-icon-style: 20px; --color-icon-style: #3c3c3c">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Untitled-1.png?v=1675671620
" src="//www.fedus.in/cdn/shop/files/Untitled-1_533x.png?v=1675671620"
                                                        sizes="(min-width: 1100px) 148px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="Best networking accessories brand banner" size="148"
                                                        loading="lazy" class="" />

                                                </div>


                                                <div class="policies-content"><span class="policies-text type--font_1"
                                                        style="--fontsize-title-style: 20px;
                                                --mg-bottom-title-style: 20px;
                                                --mg-bottom-title-mb-style: 20px;
                                                --fontsize-title-style-mb: 15px;
                                                --fontweight-title-style: 700;
                                                --color-block-style: #051c42">
                                                        Best Rated Brand
                                                    </span>
                                                    <p class="policies-des" style="--fontsize-desc-style: 15px;
                                                       --fontsize-desc-mb-style: 15px;
                                                       --lineheight-desc-style: 20px;
                                                       --color-des-block-style: #051c42;
                                                       --mg_bottom_des-style: 20px">
                                                        Best rated and top selling Amazon brand in the network
                                                        accessories category
                                                    </p>
                                                    <p class="policies-button" style="--fontsize-button-style: 15px;
                                            --color-button-style: #051c42;
                                            --fontweight-button-style: 400;
                                            --button-background-style: rgba(0,0,0,0);
                                            --button-border-style: ;
                                            --button-color-hover-style: #234bbb;
                                            --button-background-hover-style: ;
                                            --button-border-hover-style: ;
                                            --button-width-style: 150px;
                                            
                                                text-decoration: underline;
                                                text-underline-offset: 0.2rem;
                                                text-decoration-color: #051c424d;
                                            
                                            ">Know More</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="halo-item slider__slide has-des">
                                            <a href="/pages/about-us" title="98% Customer Satisfaction Rate"
                                                style="--item-radius-style: 10px; 
                                                                                                       --item-padding-top-style: 20px; 
                                                                                                       --item-padding-bottom-style: 20px;
                                                                                                       --item-padding-left-right-style: 20px;
                                                                                                       --bg-color-block-style: rgba(0,0,0,0);
                                                                                                       --border-block-style: rgba(0,0,0,0);
                                                                                                       --width-icon-style: 80px;
                                                                                                       --height-icon-style: 80px">


                                                <div class="policies-icon image-zoom"
                                                    style="--mg-bottom-icon-style: 20px; --color-icon-style: #3c3c3c">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/web_iconhfd_bb806596-c743-4588-b46b-ab359dc2e747.png?v=1675671856
" src="//www.fedus.in/cdn/shop/files/web_iconhfd_bb806596-c743-4588-b46b-ab359dc2e747_533x.png?v=1675671856"
                                                        sizes="(min-width: 1100px) 128px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="98% customer satisfaction rate banner" size="128"
                                                        loading="lazy" class="" />

                                                </div>


                                                <div class="policies-content"><span class="policies-text type--font_1"
                                                        style="--fontsize-title-style: 20px;
                                                --mg-bottom-title-style: 20px;
                                                --mg-bottom-title-mb-style: 20px;
                                                --fontsize-title-style-mb: 15px;
                                                --fontweight-title-style: 700;
                                                --color-block-style: #051c42">
                                                        98% Customer Satisfaction Rate
                                                    </span>
                                                    <p class="policies-des" style="--fontsize-desc-style: 15px;
                                                       --fontsize-desc-mb-style: 15px;
                                                       --lineheight-desc-style: 20px;
                                                       --color-des-block-style: #051c42;
                                                       --mg_bottom_des-style: 20px">
                                                        We have more than 20000 product reviews with 98% positive rate
                                                    </p>
                                                    <p class="policies-button" style="--fontsize-button-style: 15px;
                                            --color-button-style: #051c42;
                                            --fontweight-button-style: 400;
                                            --button-background-style: ;
                                            --button-border-style: ;
                                            --button-color-hover-style: #234bbb;
                                            --button-background-hover-style: ;
                                            --button-border-hover-style: ;
                                            --button-width-style: 150px;
                                            
                                                text-decoration: underline;
                                                text-underline-offset: 0.2rem;
                                                text-decoration-color: #051c424d;
                                            
                                            ">Know More</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="halo-item slider__slide has-des">
                                            <a href="/pages/about-us" title="10 Lakh Plus Product Sold"
                                                style="--item-radius-style: 10px; 
                                                                                                       --item-padding-top-style: 20px; 
                                                                                                       --item-padding-bottom-style: 20px;
                                                                                                       --item-padding-left-right-style: 20px;
                                                                                                       --bg-color-block-style: rgba(0,0,0,0);
                                                                                                       --border-block-style: rgba(0,0,0,0);
                                                                                                       --width-icon-style: 80px;
                                                                                                       --height-icon-style: 80px">


                                                <div class="policies-icon image-zoom"
                                                    style="--mg-bottom-icon-style: 20px; --color-icon-style: #3c3c3c">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/web_icon_2.png?v=1675671637
" src="//www.fedus.in/cdn/shop/files/web_icon_2_533x.png?v=1675671637"
                                                        sizes="(min-width: 1100px) 162px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="10 Lakh plus product sold" size="162" loading="lazy"
                                                        class="" />

                                                </div>


                                                <div class="policies-content"><span class="policies-text type--font_1"
                                                        style="--fontsize-title-style: 20px;
                                                --mg-bottom-title-style: 20px;
                                                --mg-bottom-title-mb-style: 20px;
                                                --fontsize-title-style-mb: 15px;
                                                --fontweight-title-style: 700;
                                                --color-block-style: #051c42">
                                                        10 Lakh Plus Product Sold
                                                    </span>
                                                    <p class="policies-des" style="--fontsize-desc-style: 15px;
                                                       --fontsize-desc-mb-style: 15px;
                                                       --lineheight-desc-style: 20px;
                                                       --color-des-block-style: #051c42;
                                                       --mg_bottom_des-style: 20px">
                                                        More than 10 lakh people are using FEDUS product all over the
                                                        country
                                                    </p>
                                                    <p class="policies-button" style="--fontsize-button-style: 15px;
                                            --color-button-style: #232323;
                                            --fontweight-button-style: 400;
                                            --button-background-style: ;
                                            --button-border-style: ;
                                            --button-color-hover-style: #234bbb;
                                            --button-background-hover-style: ;
                                            --button-border-hover-style: rgba(0,0,0,0);
                                            --button-width-style: 150px;
                                            
                                                text-decoration: underline;
                                                text-underline-offset: 0.2rem;
                                                text-decoration-color: #051c424d;
                                            
                                            ">Know More</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="slider-buttons no-js-hidden slider-arrows">
                                        <div class="slider-action ">
                                            <button type="button" class="slider-button slider-button--prev"
                                                name="previous" aria-label="Slide left">
                                                <svg aria-hidden="true" focusable="false" role="presentation"
                                                    class="icon icon-caret" viewBox="0 0 10 6">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z">
                                                </svg>

                                            </button>
                                            <button type="button" class="slider-button slider-button--next" name="next"
                                                aria-label="Slide right">
                                                <svg aria-hidden="true" focusable="false" role="presentation"
                                                    class="icon icon-caret" viewBox="0 0 10 6">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z">
                                                </svg>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </banner-slider-component>


                        </div>

                    </div>
                </div>
            </div>
            <div id="shopify-section-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2"
                class="shopify-section sections-custom-image-banner-block">
                <link rel="stylesheet"
                    href="//www.fedus.in/cdn/shop/t/3/assets/component-custom-image-banner-block.css?v=59036458610458017141672341181"
                    media="print" onload="this.media='all'">
                <noscript>
                    <link
                        href="//www.fedus.in/cdn/shop/t/3/assets/component-custom-image-banner-block.css?v=59036458610458017141672341181"
                        rel="stylesheet" type="text/css" media="all" />
                </noscript>

                <div class="custom-image-banner-block section-block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2"
                    id="custom-image-banner-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2">
                    <div class="container">

                        <div class="halo-block-header text-center">
                            <h3 class="title">
                                <span class="text">
                                    Shop By Category
                                </span>
                            </h3>

                        </div>

                        <div class="halo-row" style="--row-distance-style: -15px;">



                            <div class="halo-item customImageBanner--smallImg"
                                id="block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2-167508162866f75c5f-0"
                                style="--item-distance-style: 15px; --item-width-style: 50%" data-width="50%">
                                <div class="customImageBanner-row" style="--item-grid-gap-style: -15px">

                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 50px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="50">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="collections/rj45-connectors.html"
                                                    class="image-zoom adaptive_height"
                                                    style="padding-top: 96.29629629629629%; --item-border-radirus-style: 0px">
                                                    <img srcset="cdn/shop/files/1712814722connectors.jpg?v=1673947116 165w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 170w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 185w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 198w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 210w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 220w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 245w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 270w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 290w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 320w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 355w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 360w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 370w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 420w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 430w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 460w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 470w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 510w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 523w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 533w,cdn/shop/files/1712814722connectors.jpg?v=1673947116 534w"
                                                        src="cdn/shop/files/1712814722connectors.jpg?v=1673947116"
                                                        sizes="(min-width: 1100px) 540px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="rj45 connector plug" size="540" loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 50px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="50">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/power-cable" class="image-zoom adaptive_height"
                                                    style="padding-top: 96.29629629629629%; --item-border-radirus-style: 0px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_165x.jpg?v=1673788505 165w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_170x.jpg?v=1673788505 170w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_185x.jpg?v=1673788505 185w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_198x.jpg?v=1673788505 198w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_210x.jpg?v=1673788505 210w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_220x.jpg?v=1673788505 220w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_245x.jpg?v=1673788505 245w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_270x.jpg?v=1673788505 270w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_290x.jpg?v=1673788505 290w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_320x.jpg?v=1673788505 320w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_355x.jpg?v=1673788505 355w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_360x.jpg?v=1673788505 360w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_370x.jpg?v=1673788505 370w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_420x.jpg?v=1673788505 420w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_430x.jpg?v=1673788505 430w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_460x.jpg?v=1673788505 460w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_470x.jpg?v=1673788505 470w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_510x.jpg?v=1673788505 510w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_523x.jpg?v=1673788505 523w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_533x.jpg?v=1673788505 533w,//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_534x.jpg?v=1673788505 534w"
                                                        src="//www.fedus.in/cdn/shop/files/power_cable_270_260_e2871c8d-796d-48cc-9b8f-a5a6e9da0505_533x.jpg?v=1673788505"
                                                        sizes="(min-width: 1100px) 540px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="Desktop power cord c13 black" size="540" loading="lazy"
                                                        class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 0px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="0">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/network-accessories"
                                                    class="image-zoom adaptive_height"
                                                    style="padding-top: 96.29629629629629%; --item-border-radirus-style: 0px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_165x.jpg?v=1675086495 165w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_170x.jpg?v=1675086495 170w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_185x.jpg?v=1675086495 185w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_198x.jpg?v=1675086495 198w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_210x.jpg?v=1675086495 210w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_220x.jpg?v=1675086495 220w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_245x.jpg?v=1675086495 245w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_270x.jpg?v=1675086495 270w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_290x.jpg?v=1675086495 290w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_320x.jpg?v=1675086495 320w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_355x.jpg?v=1675086495 355w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_360x.jpg?v=1675086495 360w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_370x.jpg?v=1675086495 370w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_420x.jpg?v=1675086495 420w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_430x.jpg?v=1675086495 430w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_460x.jpg?v=1675086495 460w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_470x.jpg?v=1675086495 470w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_510x.jpg?v=1675086495 510w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_523x.jpg?v=1675086495 523w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_533x.jpg?v=1675086495 533w,//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_534x.jpg?v=1675086495 534w"
                                                        src="//www.fedus.in/cdn/shop/files/creamping_tool_f8d27899-2ca2-4965-b843-362bf34aa47b_533x.jpg?v=1675086495"
                                                        sizes="(min-width: 1100px) 540px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="rj45 Crimping tool" size="540" loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 10px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="10">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/network-accessories"
                                                    class="image-zoom adaptive_height"
                                                    style="padding-top: 96.29629629629629%; --item-border-radirus-style: 0px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/networking_accerories_2_165x.jpg?v=1675086281 165w,//www.fedus.in/cdn/shop/files/networking_accerories_2_170x.jpg?v=1675086281 170w,//www.fedus.in/cdn/shop/files/networking_accerories_2_185x.jpg?v=1675086281 185w,//www.fedus.in/cdn/shop/files/networking_accerories_2_198x.jpg?v=1675086281 198w,//www.fedus.in/cdn/shop/files/networking_accerories_2_210x.jpg?v=1675086281 210w,//www.fedus.in/cdn/shop/files/networking_accerories_2_220x.jpg?v=1675086281 220w,//www.fedus.in/cdn/shop/files/networking_accerories_2_245x.jpg?v=1675086281 245w,//www.fedus.in/cdn/shop/files/networking_accerories_2_270x.jpg?v=1675086281 270w,//www.fedus.in/cdn/shop/files/networking_accerories_2_290x.jpg?v=1675086281 290w,//www.fedus.in/cdn/shop/files/networking_accerories_2_320x.jpg?v=1675086281 320w,//www.fedus.in/cdn/shop/files/networking_accerories_2_355x.jpg?v=1675086281 355w,//www.fedus.in/cdn/shop/files/networking_accerories_2_360x.jpg?v=1675086281 360w,//www.fedus.in/cdn/shop/files/networking_accerories_2_370x.jpg?v=1675086281 370w,//www.fedus.in/cdn/shop/files/networking_accerories_2_420x.jpg?v=1675086281 420w,//www.fedus.in/cdn/shop/files/networking_accerories_2_430x.jpg?v=1675086281 430w,//www.fedus.in/cdn/shop/files/networking_accerories_2_460x.jpg?v=1675086281 460w,//www.fedus.in/cdn/shop/files/networking_accerories_2_470x.jpg?v=1675086281 470w,//www.fedus.in/cdn/shop/files/networking_accerories_2_510x.jpg?v=1675086281 510w,//www.fedus.in/cdn/shop/files/networking_accerories_2_523x.jpg?v=1675086281 523w,//www.fedus.in/cdn/shop/files/networking_accerories_2_533x.jpg?v=1675086281 533w,//www.fedus.in/cdn/shop/files/networking_accerories_2_534x.jpg?v=1675086281 534w"
                                                        src="//www.fedus.in/cdn/shop/files/networking_accerories_2_533x.jpg?v=1675086281"
                                                        sizes="(min-width: 1100px) 540px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="lan tester" size="540" loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>




                            <div class="halo-item customImageBanner--largeImg"
                                id="block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2-167508162866f75c5f-1"
                                style="--item-distance-style: 15px; --item-spacing-style: 0px; --item-width-style: 50%"
                                data-width="50%">
                                <div class="customImageBanner-item content_absolute">
                                    <div class="img-box">

                                        <a href="/collections/lan-wire" class="image-zoom adaptive_height"
                                            style="padding-top: 100.0%; --item-border-radirus-style: 0px">
                                            <img srcset="//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_165x.jpg?v=1675921665 165w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_170x.jpg?v=1675921665 170w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_185x.jpg?v=1675921665 185w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_198x.jpg?v=1675921665 198w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_210x.jpg?v=1675921665 210w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_220x.jpg?v=1675921665 220w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_245x.jpg?v=1675921665 245w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_270x.jpg?v=1675921665 270w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_290x.jpg?v=1675921665 290w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_320x.jpg?v=1675921665 320w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_355x.jpg?v=1675921665 355w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_360x.jpg?v=1675921665 360w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_370x.jpg?v=1675921665 370w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_420x.jpg?v=1675921665 420w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_430x.jpg?v=1675921665 430w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_460x.jpg?v=1675921665 460w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_470x.jpg?v=1675921665 470w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_510x.jpg?v=1675921665 510w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_523x.jpg?v=1675921665 523w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_533x.jpg?v=1675921665 533w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_534x.jpg?v=1675921665 534w,//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_570x.jpg?v=1675921665 570w"
                                                src="//www.fedus.in/cdn/shop/files/ethernet_570_570_25241fc4-a3d7-49ec-a5fa-df39085b360a_533x.jpg?v=1675921665"
                                                sizes="(min-width: 1100px) 570px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                alt="fedus ethernet cable" size="570" loading="lazy" class="" />

                                        </a>

                                    </div>
                                    <div class="content customImageBanner-inner text-left align-items--bottom"
                                        style="--align-items-spacing-style: 30px; --align-items-spacing-lr-style: 45px">
                                        <a href="/collections/lan-wire"
                                            class="spotlight-button button custom-button-style" style="--color-button-style: #ffffff;
                                               --bg-color-button-style: #232323;
                                               --border-color-button-style: #232323;
                                               --color-button-hover-style: #ffffff;
                                               --bg-color-button-hover-style: #232323;
                                               --border-color-button-hover-style: #232323;
                                               --text-transform-button-style: uppercase;
                                               --font-size-button-style: 16px;
                                               --button-width-style: 190px"><span>Shop Now</span>
                                        </a></div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <style>
                    .section-block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2 {
                        background: #ffffff;
                    }

                    .section-block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2 .halo-block-header .title .text {
                        background: #ffffff;
                    }

                    .section-block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2 .halo-block-header .title:before {
                        background-color: #232323;
                    }

                    .section-block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2 .halo-block-header .title {
                        color: #232323;
                        font-size: 25px;
                        margin-bottom: 45px;
                        display: block;
                    }

                    .section-block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2 .halo-block-header .rte {
                        color: #3c3c3c;
                        font-size: 16px;
                    }

                    @media (min-width: 1200px) {
                        .section-block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2 {
                            padding-top: 0px;
                            padding-bottom: 20px;
                        }
                    }

                    @media (min-width: 1025px) {}

                    @media (min-width: 768px) and (max-width: 1199px) {
                        .section-block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2 {
                            padding-top: 20px;
                            padding-bottom: 20px;
                        }
                    }

                    @media (max-width: 1024px) {
                        .section-block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2 {
                            overflow: hidden;
                        }
                    }

                    @media (max-width: 767px) {
                        .section-block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2 {
                            padding-top: 20px;
                            padding-bottom: 20px;
                        }

                        .section-block-template--17373918888236__ec322e38-d8f2-4ffb-9028-a3804d8300c2 .halo-block-header .title {
                            font-size: 20px;
                        }
                    }
                </style>


            </div>
            <div id="shopify-section-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0"
                class="shopify-section sections-custom-image-banner-block">
                <link rel="stylesheet"
                    href="//www.fedus.in/cdn/shop/t/3/assets/component-custom-image-banner-block.css?v=59036458610458017141672341181"
                    media="print" onload="this.media='all'">
                <noscript>
                    <link
                        href="//www.fedus.in/cdn/shop/t/3/assets/component-custom-image-banner-block.css?v=59036458610458017141672341181"
                        rel="stylesheet" type="text/css" media="all" />
                </noscript>

                <div class="custom-image-banner-block section-block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0"
                    id="custom-image-banner-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0">
                    <div class="container">

                        <div class="halo-row" style="--row-distance-style: -15px;">



                            <div class="halo-item customImageBanner--smallImg"
                                id="block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0-1675086149e906a95e-0"
                                style="--item-distance-style: 15px; --item-width-style: 50%" data-width="50%">
                                <div class="customImageBanner-row" style="--item-grid-gap-style: -15px">

                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 0px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="0">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/rj11-cable" class="image-zoom adaptive_height"
                                                    style="padding-top: 68.96551724137932%; --item-border-radirus-style: 5px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_165x.jpg?v=1674910533 165w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_170x.jpg?v=1674910533 170w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_185x.jpg?v=1674910533 185w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_198x.jpg?v=1674910533 198w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_210x.jpg?v=1674910533 210w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_220x.jpg?v=1674910533 220w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_245x.jpg?v=1674910533 245w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_270x.jpg?v=1674910533 270w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_290x.jpg?v=1674910533 290w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_320x.jpg?v=1674910533 320w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_355x.jpg?v=1674910533 355w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_360x.jpg?v=1674910533 360w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_370x.jpg?v=1674910533 370w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_420x.jpg?v=1674910533 420w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_430x.jpg?v=1674910533 430w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_460x.jpg?v=1674910533 460w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_470x.jpg?v=1674910533 470w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_510x.jpg?v=1674910533 510w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_523x.jpg?v=1674910533 523w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_533x.jpg?v=1674910533 533w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_534x.jpg?v=1674910533 534w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_570x.jpg?v=1674910533 570w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_640x.jpg?v=1674910533 640w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_665x.jpg?v=1674910533 665w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_670x.jpg?v=1674910533 670w,//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_720x.jpg?v=1674910533 720w"
                                                        src="//www.fedus.in/cdn/shop/files/Tele_communicton_wire_aeccfb30-3ee4-4546-b9c3-4e84e4bfc31d_533x.jpg?v=1674910533"
                                                        sizes="(min-width: 1100px) 725px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="" size="725" loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 29px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="29">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/stylus-pen-3-in-1"
                                                    class="image-zoom adaptive_height"
                                                    style="padding-top: 68.96551724137932%; --item-border-radirus-style: 5px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_165x.jpg?v=1674910517 165w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_170x.jpg?v=1674910517 170w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_185x.jpg?v=1674910517 185w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_198x.jpg?v=1674910517 198w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_210x.jpg?v=1674910517 210w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_220x.jpg?v=1674910517 220w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_245x.jpg?v=1674910517 245w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_270x.jpg?v=1674910517 270w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_290x.jpg?v=1674910517 290w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_320x.jpg?v=1674910517 320w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_355x.jpg?v=1674910517 355w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_360x.jpg?v=1674910517 360w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_370x.jpg?v=1674910517 370w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_420x.jpg?v=1674910517 420w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_430x.jpg?v=1674910517 430w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_460x.jpg?v=1674910517 460w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_470x.jpg?v=1674910517 470w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_510x.jpg?v=1674910517 510w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_523x.jpg?v=1674910517 523w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_533x.jpg?v=1674910517 533w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_534x.jpg?v=1674910517 534w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_570x.jpg?v=1674910517 570w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_640x.jpg?v=1674910517 640w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_665x.jpg?v=1674910517 665w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_670x.jpg?v=1674910517 670w,//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_720x.jpg?v=1674910517 720w"
                                                        src="//www.fedus.in/cdn/shop/files/pen_30c8b789-c49c-47d6-af65-09768582710b_533x.jpg?v=1674910517"
                                                        sizes="(min-width: 1100px) 725px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="" size="725" loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 21px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="21">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/power-strip" class="image-zoom adaptive_height"
                                                    style="padding-top: 68.96551724137932%; --item-border-radirus-style: 5px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_165x.jpg?v=1674910463 165w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_170x.jpg?v=1674910463 170w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_185x.jpg?v=1674910463 185w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_198x.jpg?v=1674910463 198w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_210x.jpg?v=1674910463 210w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_220x.jpg?v=1674910463 220w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_245x.jpg?v=1674910463 245w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_270x.jpg?v=1674910463 270w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_290x.jpg?v=1674910463 290w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_320x.jpg?v=1674910463 320w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_355x.jpg?v=1674910463 355w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_360x.jpg?v=1674910463 360w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_370x.jpg?v=1674910463 370w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_420x.jpg?v=1674910463 420w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_430x.jpg?v=1674910463 430w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_460x.jpg?v=1674910463 460w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_470x.jpg?v=1674910463 470w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_510x.jpg?v=1674910463 510w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_523x.jpg?v=1674910463 523w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_533x.jpg?v=1674910463 533w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_534x.jpg?v=1674910463 534w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_570x.jpg?v=1674910463 570w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_640x.jpg?v=1674910463 640w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_665x.jpg?v=1674910463 665w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_670x.jpg?v=1674910463 670w,//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_720x.jpg?v=1674910463 720w"
                                                        src="//www.fedus.in/cdn/shop/files/Power_Stripe_bec642ed-5c77-4a7e-8cd8-085aa9b995ca_533x.jpg?v=1674910463"
                                                        sizes="(min-width: 1100px) 725px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="" size="725" loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 20px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="20">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/cleaning-kit" class="image-zoom adaptive_height"
                                                    style="padding-top: 68.96551724137932%; --item-border-radirus-style: 5px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_165x.jpg?v=1674910388 165w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_170x.jpg?v=1674910388 170w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_185x.jpg?v=1674910388 185w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_198x.jpg?v=1674910388 198w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_210x.jpg?v=1674910388 210w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_220x.jpg?v=1674910388 220w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_245x.jpg?v=1674910388 245w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_270x.jpg?v=1674910388 270w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_290x.jpg?v=1674910388 290w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_320x.jpg?v=1674910388 320w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_355x.jpg?v=1674910388 355w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_360x.jpg?v=1674910388 360w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_370x.jpg?v=1674910388 370w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_420x.jpg?v=1674910388 420w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_430x.jpg?v=1674910388 430w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_460x.jpg?v=1674910388 460w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_470x.jpg?v=1674910388 470w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_510x.jpg?v=1674910388 510w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_523x.jpg?v=1674910388 523w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_533x.jpg?v=1674910388 533w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_534x.jpg?v=1674910388 534w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_570x.jpg?v=1674910388 570w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_640x.jpg?v=1674910388 640w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_665x.jpg?v=1674910388 665w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_670x.jpg?v=1674910388 670w,//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_720x.jpg?v=1674910388 720w"
                                                        src="//www.fedus.in/cdn/shop/files/cleaning_kits_89f55fce-9ad9-4436-ac56-fbf1c95d696b_533x.jpg?v=1674910388"
                                                        sizes="(min-width: 1100px) 725px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="" size="725" loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>





                            <div class="halo-item customImageBanner--smallImg"
                                id="block-30a34236-c135-4f2d-9981-f042c8d1cc69"
                                style="--item-distance-style: 15px; --item-width-style: 50%" data-width="50%">
                                <div class="customImageBanner-row" style="--item-grid-gap-style: -15px">

                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 30px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="30">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/cooler-water-pump"
                                                    class="image-zoom adaptive_height"
                                                    style="padding-top: 68.96551724137932%; --item-border-radirus-style: 5px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_165x.jpg?v=1674910486 165w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_170x.jpg?v=1674910486 170w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_185x.jpg?v=1674910486 185w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_198x.jpg?v=1674910486 198w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_210x.jpg?v=1674910486 210w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_220x.jpg?v=1674910486 220w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_245x.jpg?v=1674910486 245w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_270x.jpg?v=1674910486 270w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_290x.jpg?v=1674910486 290w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_320x.jpg?v=1674910486 320w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_355x.jpg?v=1674910486 355w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_360x.jpg?v=1674910486 360w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_370x.jpg?v=1674910486 370w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_420x.jpg?v=1674910486 420w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_430x.jpg?v=1674910486 430w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_460x.jpg?v=1674910486 460w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_470x.jpg?v=1674910486 470w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_510x.jpg?v=1674910486 510w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_523x.jpg?v=1674910486 523w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_533x.jpg?v=1674910486 533w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_534x.jpg?v=1674910486 534w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_570x.jpg?v=1674910486 570w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_640x.jpg?v=1674910486 640w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_665x.jpg?v=1674910486 665w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_670x.jpg?v=1674910486 670w,//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_720x.jpg?v=1674910486 720w"
                                                        src="//www.fedus.in/cdn/shop/files/Cooler_Pump_5eeba03c-df29-48d7-b3ae-d6693dd1601c_533x.jpg?v=1674910486"
                                                        sizes="(min-width: 1100px) 725px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="" size="725" loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 30px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="30">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a role="link" aria-disabled="true" class="image-zoom adaptive_height"
                                                    style="padding-top: 68.96551724137932%; --item-border-radirus-style: 5px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_165x.jpg?v=1674910419 165w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_170x.jpg?v=1674910419 170w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_185x.jpg?v=1674910419 185w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_198x.jpg?v=1674910419 198w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_210x.jpg?v=1674910419 210w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_220x.jpg?v=1674910419 220w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_245x.jpg?v=1674910419 245w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_270x.jpg?v=1674910419 270w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_290x.jpg?v=1674910419 290w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_320x.jpg?v=1674910419 320w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_355x.jpg?v=1674910419 355w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_360x.jpg?v=1674910419 360w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_370x.jpg?v=1674910419 370w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_420x.jpg?v=1674910419 420w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_430x.jpg?v=1674910419 430w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_460x.jpg?v=1674910419 460w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_470x.jpg?v=1674910419 470w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_510x.jpg?v=1674910419 510w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_523x.jpg?v=1674910419 523w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_533x.jpg?v=1674910419 533w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_534x.jpg?v=1674910419 534w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_570x.jpg?v=1674910419 570w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_640x.jpg?v=1674910419 640w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_665x.jpg?v=1674910419 665w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_670x.jpg?v=1674910419 670w,//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_720x.jpg?v=1674910419 720w"
                                                        src="//www.fedus.in/cdn/shop/files/Laptop_Screen_Guard_0eee5511-7617-4b9c-8f6f-554acd886cef_533x.jpg?v=1674910419"
                                                        sizes="(min-width: 1100px) 725px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="" size="725" loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 20px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="20">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/ac-dc-power-adaptor"
                                                    class="image-zoom adaptive_height"
                                                    style="padding-top: 68.96551724137932%; --item-border-radirus-style: 5px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_165x.jpg?v=1674910314 165w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_170x.jpg?v=1674910314 170w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_185x.jpg?v=1674910314 185w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_198x.jpg?v=1674910314 198w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_210x.jpg?v=1674910314 210w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_220x.jpg?v=1674910314 220w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_245x.jpg?v=1674910314 245w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_270x.jpg?v=1674910314 270w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_290x.jpg?v=1674910314 290w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_320x.jpg?v=1674910314 320w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_355x.jpg?v=1674910314 355w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_360x.jpg?v=1674910314 360w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_370x.jpg?v=1674910314 370w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_420x.jpg?v=1674910314 420w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_430x.jpg?v=1674910314 430w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_460x.jpg?v=1674910314 460w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_470x.jpg?v=1674910314 470w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_510x.jpg?v=1674910314 510w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_523x.jpg?v=1674910314 523w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_533x.jpg?v=1674910314 533w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_534x.jpg?v=1674910314 534w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_570x.jpg?v=1674910314 570w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_640x.jpg?v=1674910314 640w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_665x.jpg?v=1674910314 665w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_670x.jpg?v=1674910314 670w,//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_720x.jpg?v=1674910314 720w"
                                                        src="//www.fedus.in/cdn/shop/files/Power_Adapter_2_a0887799-cfd0-4a7b-bd8b-8a6f36fe070a_533x.jpg?v=1674910314"
                                                        sizes="(min-width: 1100px) 725px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="" size="725" loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 20px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="20">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/cctv-camera-cable"
                                                    class="image-zoom adaptive_height"
                                                    style="padding-top: 68.96551724137932%; --item-border-radirus-style: 5px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_165x.jpg?v=1674910352 165w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_170x.jpg?v=1674910352 170w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_185x.jpg?v=1674910352 185w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_198x.jpg?v=1674910352 198w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_210x.jpg?v=1674910352 210w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_220x.jpg?v=1674910352 220w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_245x.jpg?v=1674910352 245w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_270x.jpg?v=1674910352 270w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_290x.jpg?v=1674910352 290w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_320x.jpg?v=1674910352 320w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_355x.jpg?v=1674910352 355w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_360x.jpg?v=1674910352 360w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_370x.jpg?v=1674910352 370w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_420x.jpg?v=1674910352 420w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_430x.jpg?v=1674910352 430w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_460x.jpg?v=1674910352 460w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_470x.jpg?v=1674910352 470w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_510x.jpg?v=1674910352 510w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_523x.jpg?v=1674910352 523w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_533x.jpg?v=1674910352 533w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_534x.jpg?v=1674910352 534w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_570x.jpg?v=1674910352 570w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_640x.jpg?v=1674910352 640w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_665x.jpg?v=1674910352 665w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_670x.jpg?v=1674910352 670w,//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_720x.jpg?v=1674910352 720w"
                                                        src="//www.fedus.in/cdn/shop/files/CCTV_CABLE_fa6b33da-64b5-4751-8209-adac3f61b980_533x.jpg?v=1674910352"
                                                        sizes="(min-width: 1100px) 725px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="" size="725" loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <style>
                    .section-block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0 {
                        background: #ffffff;
                    }

                    .section-block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0 .halo-block-header .title .text {
                        background: #ffffff;
                    }

                    .section-block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0 .halo-block-header .title:before {
                        background-color: #232323;
                        display: none;
                    }

                    .section-block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0 .halo-block-header .title {
                        color: #232323;
                        font-size: 16px;
                        margin-bottom: 45px;
                    }

                    .section-block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0 .halo-block-header .rte {
                        color: #3c3c3c;
                        font-size: 16px;
                    }

                    @media (min-width: 1200px) {
                        .section-block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0 {
                            padding-top: 20px;
                            padding-bottom: 25px;
                        }
                    }

                    @media (min-width: 1025px) {
                        .section-block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0 .halo-block-header .title .text {
                            width: auto;
                        }
                    }

                    @media (min-width: 768px) and (max-width: 1199px) {
                        .section-block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0 {
                            padding-top: 0px;
                            padding-bottom: 10px;
                        }
                    }

                    @media (max-width: 1024px) {
                        .section-block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0 {
                            overflow: hidden;
                        }
                    }

                    @media (max-width: 767px) {
                        .section-block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0 {
                            padding-top: 0px;
                            padding-bottom: 10px;
                        }

                        .section-block-template--17373918888236__46d7fe54-6b49-42d8-936a-91bd0c7d36b0 .halo-block-header .title {
                            font-size: 16px;
                        }
                    }
                </style>


            </div>
            <div id="shopify-section-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d"
                class="shopify-section sections-image-banner-block">

                <div class="halo-block halo-banner image-banner style_bg--none"
                    id="halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d" style="
            
            --bg-color-style: 
        " data-loader-script="//www.fedus.in/cdn/shop/t/3/assets/halo.image-banner-slide.js?v=123854488726055376771672341186">
                    <div class="container">

                        <div class="halo-block-content">
                            <div class="halo-banner-wrapper slideshow is-slide">
                                <div>
                                    <div
                                        class="item item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 border--none">
                                        <div class="banner-item">
                                            <div class="img-box img-box--mobile"><a
                                                    class="image image-adapt adaptive_height"
                                                    href="/pages/product-customization"
                                                    style="padding-top: 38.29787234042553%">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_165x.jpg?v=1675773658 165w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_170x.jpg?v=1675773658 170w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_185x.jpg?v=1675773658 185w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_198x.jpg?v=1675773658 198w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_210x.jpg?v=1675773658 210w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_220x.jpg?v=1675773658 220w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_245x.jpg?v=1675773658 245w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_270x.jpg?v=1675773658 270w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_290x.jpg?v=1675773658 290w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_320x.jpg?v=1675773658 320w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_355x.jpg?v=1675773658 355w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_360x.jpg?v=1675773658 360w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_370x.jpg?v=1675773658 370w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_420x.jpg?v=1675773658 420w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_430x.jpg?v=1675773658 430w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_460x.jpg?v=1675773658 460w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_470x.jpg?v=1675773658 470w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_510x.jpg?v=1675773658 510w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_523x.jpg?v=1675773658 523w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_533x.jpg?v=1675773658 533w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_534x.jpg?v=1675773658 534w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_570x.jpg?v=1675773658 570w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_640x.jpg?v=1675773658 640w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_665x.jpg?v=1675773658 665w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_670x.jpg?v=1675773658 670w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_720x.jpg?v=1675773658 720w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_775x.jpg?v=1675773658 775w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_785x.jpg?v=1675773658 785w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_870x.jpg?v=1675773658 870w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_930x.jpg?v=1675773658 930w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_935x.jpg?v=1675773658 935w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_940x.jpg?v=1675773658 940w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_1066x.jpg?v=1675773658 1066w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_1160x.jpg?v=1675773658 1160w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_1170x.jpg?v=1675773658 1170w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_1270x.jpg?v=1675773658 1270w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_1370x.jpg?v=1675773658 1370w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_1570x.jpg?v=1675773658 1570w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_1770x.jpg?v=1675773658 1770w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_1850x.jpg?v=1675773658 1850w,//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_1880x.jpg?v=1675773658 1880w"
                                                        src="//www.fedus.in/cdn/shop/files/Untitled-1_5607e174-ce7d-4bdf-8dbd-10243cd4abda_533x.jpg?v=1675773658"
                                                        sizes="(min-width: 1100px) 1880px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="lan cable cat6, cat7, cat8" size="1880" loading="lazy"
                                                        class="" loading="lazy" />

                                                </a><a class="image image-mobile image-adapt adaptive_height"
                                                    href="/pages/product-customization"
                                                    href="/pages/product-customization"
                                                    style="padding-top: 136.36363636363637%">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Ethernet_mobile_truly_consumer_brand_3f779bc6-41d4-4769-a59e-80a018c4f629.jpg?v=1675775389 1x, //www.fedus.in/cdn/shop/files/Ethernet_mobile_truly_consumer_brand_3f779bc6-41d4-4769-a59e-80a018c4f629@2x.jpg?v=1675775389 2x"
                                                        src="//www.fedus.in/cdn/shop/files/Ethernet_mobile_truly_consumer_brand_3f779bc6-41d4-4769-a59e-80a018c4f629.jpg?v=1675775389"
                                                        alt="lan cable cat6, cat7, cat8" loading="lazy">

                                                </a></div>
                                        </div><a href="javascript:void(0)" class="btn-scroll-down" data-scroll-down=""
                                            style="color: #232323;">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                                                zoomAndPan="disable" x="0px" y="0px" viewBox="0 0 36 18"
                                                xml:space="preserve">
                                                <style type="text/css">
                                                    .st0 {
                                                        stroke-width: 1.5;
                                                    }
                                                </style>
                                                <line class="st0" x1="36" y1="0" x2="18" y2="18"></line>
                                                <line class="st0" x1="0" y1="0" x2="18" y2="18"></line>
                                            </svg>
                                        </a>

                                    </div>

                                    <style type="text/css" media="screen">
                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--special .flex-box__banner,
                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom .flex-box__banner,
                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .flex-box__banner {
                                            align-items: stretch;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--special .flex-box__banner .banner-content,
                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom .flex-box__banner .banner-content {
                                            display: flex;
                                            align-items: center;
                                            background: ;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 {
                                            margin-bottom: 0px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .flex-box__banner .banner-content {
                                            display: flex;
                                            align-items: center;
                                            background: ;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom .flex-box__banner .banner-content,
                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .flex-box__banner .banner-content {
                                            border: 1px solid transparent;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner {
                                            margin-left: auto;
                                            margin-right: auto;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .banner-img {
                                            position: relative;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-sub-title {
                                            font-size: 14px;
                                            color: #232323;
                                            margin-top: 0;
                                            font-weight: 700;
                                            margin-bottom: 14px;
                                            font-family: var(--font-tab-type-1);
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .banner-sub-title {
                                            font-size: px;
                                            color: ;
                                            margin-top: 0;
                                            font-weight: ;
                                            margin-bottom: px;
                                            font-family: var(--font-tab-type-2);
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-sub-title.has-border span {
                                            border-bottom: 1px solid #232323;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom.border--border_s1 .banner-heading,
                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2.border--border_s1 .banner-heading {
                                            padding: 0 0 18px;
                                            margin-bottom: 18px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom .banner-heading,
                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .banner-heading {
                                            z-index: 1;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-heading {
                                            font-size: 40px;
                                            color: #232323;
                                            font-weight: ;
                                            line-height: 40px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .banner-heading {
                                            font-size: px;
                                            color: ;
                                            font-weight: ;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--special .banner-heading {
                                            margin-bottom: px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-text {
                                            font-size: 15px;
                                            color: #232323;
                                            line-height: 20px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .banner-text {
                                            font-size: px;
                                            color: ;
                                            line-height: px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-text .description-text-number {
                                            font-size: 15px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button {
                                            color: #ffffff;
                                            background: #232323;
                                            border-color: #232323;
                                            max-width: 235px
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .banner-button {
                                            color: ;
                                            background: ;
                                            border-color: ;
                                            max-width: px
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button.button-style2 {
                                            background: none;
                                            border: none;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button.button-style2 span {
                                            background-image: linear-gradient(transparent 97%, #232323 3%);
                                            background-repeat: repeat-x;
                                            background-position-y: 0;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button.button_2 {
                                            color: ;
                                            background: ;
                                            border-color: ;
                                            width: px;
                                            max-width: px;
                                            margin-top: px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-action.style_4 .banner-button.button_2 {
                                            width: auto;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button.button_2:hover {
                                            color: ;
                                            background: ;
                                            border-color: ;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-action.style_4 .banner-button.button_2 {
                                            margin-left: px;
                                        }

                                        body.layout_rtl #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-action.style_4 .banner-button.button_2 {
                                            margin-right: px;
                                            margin-left: 0;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button svg {
                                            fill: #ffffff;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button-2 {
                                            color: #ffffff;
                                            background: #232323;
                                            border-color: #232323;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button-2 svg {
                                            fill: #ffffff;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .content-box--absolute {
                                            width: 400px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box {
                                            max-width: 400px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .flex-box__banner .content-box {
                                            max-width: px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-1 {
                                            margin-right: px;
                                            margin-bottom: 0;
                                            max-width: 165px;
                                            transform: translateY(px)
                                        }

                                        body.layout_rtl #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-1 {
                                            margin-left: px;
                                            margin-right: auto;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-2 {
                                            margin-left: px;
                                            transform: translateY(px);
                                        }

                                        body.layout_rtl #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-2 {
                                            margin-right: px;
                                            margin-left: auto;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .sub-title-icon img {
                                            margin-right: auto;
                                            margin-left: auto;
                                            margin-bottom: var(--mg-bottom-icon-style);
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__divider {
                                            height: 240px;
                                            width: 1px;
                                            min-width: 1px;
                                            display: block;
                                            transform: translateY(px);
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button {}

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-item.slick-initialized {
                                            z-index: 2;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .video-open-popup a {
                                            position: absolute;
                                            top: 50%;
                                            left: 50%;
                                            transform: translate(-50%, -50%);
                                            z-index: 2;
                                            line-height: 0;
                                            padding: 10px 20px;
                                            border-radius: 5px;
                                            background: var(--bg_color);
                                            color: var(--color);
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .video-open-popup.custom_position a {
                                            top: var(--top);
                                            left: var(--left);
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .video-open-popup.icon_style_2 a {
                                            padding: 0;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .video-open-popup svg {
                                            width: 85px;
                                            height: 85px;
                                            fill: currentColor;
                                            stroke: currentColor;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .video-open-popup.icon_style_2 svg {
                                            width: 96px;
                                            height: 96px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.style-3 .flex-box__banner {
                                            position: relative;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.style-3 .flex-box__banner::after {
                                            content: "";
                                            position: absolute;
                                            top: 0;
                                            right: 0;
                                            width: 57.5%;
                                            height: 116%;
                                            background-color: ;
                                        }

                                        body.layout_rtl #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.style-3 .flex-box__banner::after {
                                            right: auto;
                                            left: 0;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.style-3 .flex-box__banner.row-reverse::after {
                                            left: 0;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.style-3 .flex-box__banner .banner-content {
                                            z-index: 2;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .is-slide .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .slick-dots {
                                            bottom: 30px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .is-slide .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .slick-dots li:not(.slick-active) button {
                                            background: transparent;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .is-slide .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .slick-dots li.slick-active button {
                                            background: white;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .is-slide .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .slick-dots li button {
                                            border: 1px solid white;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .countdown-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-title {
                                            font-size: px;
                                            font-weight: ;
                                            color: ;
                                            margin-top: 0;
                                            margin-bottom: px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .countdown-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .des-countdown {
                                            font-size: px;
                                            font-weight: ;
                                            color: ;
                                            margin-bottom: px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .countdown-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .collection-countdown .clock-item {
                                            border-color: ;
                                            width: px;
                                            height: px;
                                            -moz-border-radius: %;
                                            -webkit-border-radius: %;
                                            -ms-border-radius: %;
                                            -o-border-radius: %;
                                            border-radius: %;
                                            margin-left: px;
                                            margin-right: px;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .countdown-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .collection-countdown .clock-item .num {
                                            font-size: px;
                                            font-weight: ;
                                            color: ;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .countdown-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .collection-countdown .clock-item .text {
                                            font-size: px;
                                            font-weight: ;
                                            color: ;
                                        }

                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom,
                                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 {
                                            margin-top: 0;
                                        }

                                        @media (max-width: 1366px) {
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-1 {
                                                margin-right: 30px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-2 {
                                                margin-left: 30px;
                                            }
                                        }

                                        @media (max-width: 1199px) {

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom,
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 {
                                                width: 100%;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 {
                                                margin-top: 30px;
                                            }
                                        }

                                        @media (max-width: 1024px) {
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .video-open-popup.custom_position a {
                                                top: var(--top-mb);
                                                left: var(--left-mb);
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .video-open-popup svg {
                                                width: 44px;
                                                height: 44px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box {}

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-1 {
                                                margin-right: auto;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-2 {
                                                margin-right: auto;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-2 button {
                                                width: 100%;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.style-3 .flex-box__banner::after {
                                                display: none;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--special .flex-box__banner .banner-content {
                                                border: 1px solid;
                                                margin-top: 30px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.style-4 .banner-action .banner-button {
                                                min-width: 140px;
                                            }
                                        }

                                        @media (max-width: 768px) {

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom .flex-box__banner,
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .flex-box__banner {
                                                display: block;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom .flex-box__banner .banner-item,
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom .flex-box__banner .banner-content,
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .flex-box__banner .banner-item,
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .flex-box__banner .banner-content {
                                                width: 100%;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom .flex-box__banner .banner-content {
                                                margin-top: 0;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .flex-box__banner .banner-content {
                                                margin-top: 0;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-sub-title {
                                                color: #ffffff;
                                                font-size: 14px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .banner-sub-title {
                                                color: ;
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-sub-title.has-border span {
                                                border-bottom: 1px solid #ffffff;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .banner-sub-title.has-border span {
                                                border-bottom: 1px solid #ffffff;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-heading {
                                                color: #232323;
                                                font-size: 24px;
                                                padding-bottom: 0px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .banner-heading {
                                                color: ;
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-text {
                                                color: #232323;
                                                font-size: 15px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .banner-text {
                                                color: ;
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .countdown-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-title {
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .countdown-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .banner-title {
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .countdown-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .des-countdown {
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .countdown-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .collection-countdown .clock-item .num {
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .countdown-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .collection-countdown .clock-item .text {
                                                font-size: px;
                                            }
                                        }

                                        @media (max-width: 550px) {
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box {}

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-1 {
                                                max-width: 100%;
                                                margin-right: 0;
                                                margin-right: auto;
                                            }

                                            body.layout_rtl #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-1 {
                                                margin-right: 0;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-2 {
                                                margin-left: 0px;
                                                margin-right: auto;
                                                transform: translateY(0);
                                            }

                                            body.layout_rtl #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__col-2 {
                                                margin-left: auto;
                                                margin-right: 12px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .flex-box__banner .content-box .content-box__divider {
                                                display: none;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.style-4 .banner-action .banner-button {
                                                min-width: 146px;
                                                max-width: 100%;
                                                display: inline-block;
                                            }
                                        }

                                        @media (min-width: 551px) {
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button:first-child {
                                                margin-right: 0;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button:last-child {
                                                margin-left: ;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--special .flex-box__banner {
                                                display: block;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--special .flex-box__banner .banner-item,
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--special .flex-box__banner .banner-content {
                                                width: 100%;
                                            }
                                        }

                                        @media (min-width: 1025px) {
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button:hover {
                                                color: #ffffff;
                                                background: #232323;
                                                border-color: #232323;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--special .banner-button:hover {
                                                color: ;
                                                background: ;
                                                border-color: ;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button:hover svg {
                                                fill: #ffffff;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button-2:hover {
                                                color: #ffffff;
                                                background: #232323;
                                                border-color: #232323;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-button-2:hover svg {
                                                fill: #ffffff;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-sub-title {
                                                margin-bottom: 14px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .banner-sub-title {
                                                margin-bottom: px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-heading {
                                                margin-bottom: 20px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--special .banner-heading {
                                                margin-bottom: px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0 .banner-text {
                                                margin-bottom: 30px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--custom-2 .banner-text {
                                                margin-bottom: px;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--special .flex-box__banner {
                                                display: flex;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--special .flex-box__banner .banner-item {
                                                width: calc(% - 15px);
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.type-item--special .flex-box__banner .banner-content {
                                                width: calc(100% - % - 15px);
                                                border: 1px solid;
                                            }
                                        }

                                        @media (min-width: 767px) and (max-width: 930px) {}

                                        @media (min-width: 551px) and (max-width: 1024px) {
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.style-2 .flex-box__banner {
                                                flex-direction: column;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.style-2 .flex-box__banner .banner-item,
                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.style-2 .flex-box__banner .banner-content {
                                                width: 100%;
                                            }

                                            #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .item-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d-1675764037ec32d163-0.style-2 .flex-box__banner .content-box {
                                                flex-direction: row;
                                                gap: 25px;
                                            }
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style type="text/css" media="screen">
                    #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .is-slide .slick-dots {
                        bottom: -22px;
                    }

                    #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .halo-block-header .title:before {
                        background-color: #202020;
                        display: none;
                    }

                    #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .halo-block-header .title {
                        color: #202020;
                        font-size: 24px;
                        margin-top: 2px;
                        margin-bottom: 25px;
                    }

                    #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .halo-block-header .rte {
                        color: #202020;
                        font-size: 16px;
                    }

                    @media (min-width: 1200px) {
                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d {
                            padding-top: 0px;
                            padding-bottom: 35px;
                        }
                    }

                    @media (min-width: 1025px) {}

                    @media (min-width: 768px) and (max-width: 1199px) {
                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d {
                            padding-top: 0px;
                            padding-bottom: 10px;
                        }
                    }

                    @media (max-width: 767px) {
                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d {
                            padding-top: 0px;
                            padding-bottom: 10px;
                        }

                        #halo-image-banner-template--17373918888236__3476f7a6-58ed-450e-be58-09c170c1fe5d .halo-block-header .title {
                            font-size: 20px;
                        }
                    }
                </style>
            </div>
            <div id="shopify-section-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526"
                class="shopify-section sections-custom-image-banner-block">
                <link rel="stylesheet"
                    href="//www.fedus.in/cdn/shop/t/3/assets/component-custom-image-banner-block.css?v=59036458610458017141672341181"
                    media="print" onload="this.media='all'">
                <noscript>
                    <link
                        href="//www.fedus.in/cdn/shop/t/3/assets/component-custom-image-banner-block.css?v=59036458610458017141672341181"
                        rel="stylesheet" type="text/css" media="all" />
                </noscript>

                <div class="custom-image-banner-block section-block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526"
                    id="custom-image-banner-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526">
                    <div class="container">

                        <div class="halo-row" style="--row-distance-style: -15px;">



                            <div class="halo-item customImageBanner--smallImg"
                                id="block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526-167508162866f75c5f-0"
                                style="--item-distance-style: 15px; --item-width-style: 50%" data-width="50%">
                                <div class="customImageBanner-row" style="--item-grid-gap-style: -15px">

                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 50px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="50">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/usb-cable" class="image-zoom adaptive_height"
                                                    style="padding-top: 96.29629629629629%; --item-border-radirus-style: 0px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_165x.jpg?v=1673788472 165w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_170x.jpg?v=1673788472 170w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_185x.jpg?v=1673788472 185w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_198x.jpg?v=1673788472 198w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_210x.jpg?v=1673788472 210w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_220x.jpg?v=1673788472 220w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_245x.jpg?v=1673788472 245w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_270x.jpg?v=1673788472 270w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_290x.jpg?v=1673788472 290w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_320x.jpg?v=1673788472 320w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_355x.jpg?v=1673788472 355w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_360x.jpg?v=1673788472 360w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_370x.jpg?v=1673788472 370w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_420x.jpg?v=1673788472 420w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_430x.jpg?v=1673788472 430w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_460x.jpg?v=1673788472 460w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_470x.jpg?v=1673788472 470w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_510x.jpg?v=1673788472 510w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_523x.jpg?v=1673788472 523w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_533x.jpg?v=1673788472 533w,//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_534x.jpg?v=1673788472 534w"
                                                        src="//www.fedus.in/cdn/shop/files/USB_cable_270_260_1ac790df-f825-4d48-b5e4-f24a4fbdf84c_533x.jpg?v=1673788472"
                                                        sizes="(min-width: 1100px) 540px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="usb printer cable, usb a to b cable" size="540"
                                                        loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 50px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="50">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/rca-cable" class="image-zoom adaptive_height"
                                                    style="padding-top: 96.29629629629629%; --item-border-radirus-style: 0px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_165x.jpg?v=1673788019 165w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_170x.jpg?v=1673788019 170w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_185x.jpg?v=1673788019 185w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_198x.jpg?v=1673788019 198w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_210x.jpg?v=1673788019 210w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_220x.jpg?v=1673788019 220w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_245x.jpg?v=1673788019 245w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_270x.jpg?v=1673788019 270w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_290x.jpg?v=1673788019 290w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_320x.jpg?v=1673788019 320w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_355x.jpg?v=1673788019 355w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_360x.jpg?v=1673788019 360w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_370x.jpg?v=1673788019 370w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_420x.jpg?v=1673788019 420w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_430x.jpg?v=1673788019 430w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_460x.jpg?v=1673788019 460w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_470x.jpg?v=1673788019 470w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_510x.jpg?v=1673788019 510w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_523x.jpg?v=1673788019 523w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_533x.jpg?v=1673788019 533w,//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_534x.jpg?v=1673788019 534w"
                                                        src="//www.fedus.in/cdn/shop/files/Audio_cable_270_260_1069b7ed-fc11-4267-99af-299318f6f769_533x.jpg?v=1673788019"
                                                        sizes="(min-width: 1100px) 540px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="3.5mm to 3 rca audio cable" size="540" loading="lazy"
                                                        class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 10px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="10">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a href="/collections/usb-to-ethernet-adaptor"
                                                    class="image-zoom adaptive_height"
                                                    style="padding-top: 96.29629629629629%; --item-border-radirus-style: 0px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_165x.jpg?v=1673789110 165w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_170x.jpg?v=1673789110 170w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_185x.jpg?v=1673789110 185w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_198x.jpg?v=1673789110 198w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_210x.jpg?v=1673789110 210w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_220x.jpg?v=1673789110 220w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_245x.jpg?v=1673789110 245w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_270x.jpg?v=1673789110 270w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_290x.jpg?v=1673789110 290w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_320x.jpg?v=1673789110 320w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_355x.jpg?v=1673789110 355w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_360x.jpg?v=1673789110 360w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_370x.jpg?v=1673789110 370w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_420x.jpg?v=1673789110 420w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_430x.jpg?v=1673789110 430w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_460x.jpg?v=1673789110 460w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_470x.jpg?v=1673789110 470w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_510x.jpg?v=1673789110 510w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_523x.jpg?v=1673789110 523w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_533x.jpg?v=1673789110 533w,//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_534x.jpg?v=1673789110 534w"
                                                        src="//www.fedus.in/cdn/shop/files/USB_to_ethernet_new_post_de9c6492-dbe7-415e-a1d7-4fc4aed99ff6_533x.jpg?v=1673789110"
                                                        sizes="(min-width: 1100px) 540px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="usb to ethernet connector" size="540" loading="lazy"
                                                        class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="customImageBanner-child"
                                        style="--item-grid-gap-style: 15px; --item-spacing-style: 20px; --item-width-style: 50%"
                                        data-width="50%" data-spacing-bottom="20">
                                        <div class="customImageBanner-item content_absolute">
                                            <div class="img-box">

                                                <a role="link" aria-disabled="true" class="image-zoom adaptive_height"
                                                    style="padding-top: 96.29629629629629%; --item-border-radirus-style: 0px">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_165x.jpg?v=1673788536 165w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_170x.jpg?v=1673788536 170w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_185x.jpg?v=1673788536 185w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_198x.jpg?v=1673788536 198w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_210x.jpg?v=1673788536 210w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_220x.jpg?v=1673788536 220w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_245x.jpg?v=1673788536 245w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_270x.jpg?v=1673788536 270w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_290x.jpg?v=1673788536 290w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_320x.jpg?v=1673788536 320w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_355x.jpg?v=1673788536 355w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_360x.jpg?v=1673788536 360w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_370x.jpg?v=1673788536 370w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_420x.jpg?v=1673788536 420w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_430x.jpg?v=1673788536 430w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_460x.jpg?v=1673788536 460w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_470x.jpg?v=1673788536 470w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_510x.jpg?v=1673788536 510w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_523x.jpg?v=1673788536 523w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_533x.jpg?v=1673788536 533w,//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_534x.jpg?v=1673788536 534w"
                                                        src="//www.fedus.in/cdn/shop/files/Speaker_wire_7a2a6692-6b04-447a-9d29-fc54c3450293_533x.jpg?v=1673788536"
                                                        sizes="(min-width: 1100px) 540px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="fedus speaker wire" size="540" loading="lazy" class="" />

                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>




                            <div class="halo-item customImageBanner--largeImg"
                                id="block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526-167508162866f75c5f-1"
                                style="--item-distance-style: 15px; --item-spacing-style: 10px; --item-width-style: 50%"
                                data-width="50%">
                                <div class="customImageBanner-item content_absolute">
                                    <div class="img-box">

                                        <a href="/collections/hdmi-cable" class="image-zoom adaptive_height"
                                            style="padding-top: 100.0%; --item-border-radirus-style: 0px">
                                            <img srcset="//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_165x.jpg?v=1675084860 165w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_170x.jpg?v=1675084860 170w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_185x.jpg?v=1675084860 185w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_198x.jpg?v=1675084860 198w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_210x.jpg?v=1675084860 210w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_220x.jpg?v=1675084860 220w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_245x.jpg?v=1675084860 245w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_270x.jpg?v=1675084860 270w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_290x.jpg?v=1675084860 290w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_320x.jpg?v=1675084860 320w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_355x.jpg?v=1675084860 355w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_360x.jpg?v=1675084860 360w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_370x.jpg?v=1675084860 370w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_420x.jpg?v=1675084860 420w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_430x.jpg?v=1675084860 430w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_460x.jpg?v=1675084860 460w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_470x.jpg?v=1675084860 470w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_510x.jpg?v=1675084860 510w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_523x.jpg?v=1675084860 523w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_533x.jpg?v=1675084860 533w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_534x.jpg?v=1675084860 534w,//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_570x.jpg?v=1675084860 570w"
                                                src="//www.fedus.in/cdn/shop/files/HDMI_570_580_adgfghkhfk_533x.jpg?v=1675084860"
                                                sizes="(min-width: 1100px) 570px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                alt="" size="570" loading="lazy" class="" />

                                        </a>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <style>
                    .section-block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526 {
                        background: #ffffff;
                    }

                    .section-block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526 .halo-block-header .title .text {
                        background: #ffffff;
                    }

                    .section-block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526 .halo-block-header .title:before {
                        background-color: #232323;
                        display: none;
                    }

                    .section-block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526 .halo-block-header .title {
                        color: #232323;
                        font-size: 16px;
                        margin-bottom: 45px;
                    }

                    .section-block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526 .halo-block-header .rte {
                        color: #3c3c3c;
                        font-size: 16px;
                    }

                    @media (min-width: 1200px) {
                        .section-block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526 {
                            padding-top: 10px;
                            padding-bottom: 30px;
                        }
                    }

                    @media (min-width: 1025px) {
                        .section-block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526 .halo-block-header .title .text {
                            width: auto;
                        }
                    }

                    @media (min-width: 768px) and (max-width: 1199px) {
                        .section-block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526 {
                            padding-top: 10px;
                            padding-bottom: 10px;
                        }
                    }

                    @media (max-width: 1024px) {
                        .section-block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526 {
                            overflow: hidden;
                        }
                    }

                    @media (max-width: 767px) {
                        .section-block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526 {
                            padding-top: 10px;
                            padding-bottom: 10px;
                        }

                        .section-block-template--17373918888236__f0eaa7c4-3e1a-4d99-9581-466ed7abb526 .halo-block-header .title {
                            font-size: 16px;
                        }
                    }
                </style>


            </div>
            <div id="shopify-section-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0"
                class="shopify-section sections-image-banner-block">

                <div class="halo-block halo-banner image-banner style_bg--none"
                    id="halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0" style="
            
            --bg-color-style: 
        " data-loader-script="//www.fedus.in/cdn/shop/t/3/assets/halo.image-banner-slide.js?v=123854488726055376771672341186">
                    <div class="container-full">

                        <div class="halo-block-content">
                            <div class="halo-banner-wrapper slideshow is-slide">
                                <div>
                                    <div
                                        class="item item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 border--border_s1">
                                        <div class="banner-item">
                                            <div class="img-box img-box--mobile is-parallax">
                                                <a class="image--parallax" role="link" aria-disabled="true">
                                                    <div class="parallax-image"
                                                        style="background-image: url(//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730.jpg?v=1675844873);">
                                                    </div>
                                                </a><a class="image image-adapt adaptive_height" role="link"
                                                    aria-disabled="true" style="padding-top: 38.29787234042553%">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_165x.jpg?v=1675844873 165w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_170x.jpg?v=1675844873 170w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_185x.jpg?v=1675844873 185w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_198x.jpg?v=1675844873 198w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_210x.jpg?v=1675844873 210w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_220x.jpg?v=1675844873 220w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_245x.jpg?v=1675844873 245w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_270x.jpg?v=1675844873 270w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_290x.jpg?v=1675844873 290w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_320x.jpg?v=1675844873 320w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_355x.jpg?v=1675844873 355w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_360x.jpg?v=1675844873 360w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_370x.jpg?v=1675844873 370w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_420x.jpg?v=1675844873 420w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_430x.jpg?v=1675844873 430w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_460x.jpg?v=1675844873 460w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_470x.jpg?v=1675844873 470w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_510x.jpg?v=1675844873 510w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_523x.jpg?v=1675844873 523w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_533x.jpg?v=1675844873 533w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_534x.jpg?v=1675844873 534w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_570x.jpg?v=1675844873 570w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_640x.jpg?v=1675844873 640w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_665x.jpg?v=1675844873 665w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_670x.jpg?v=1675844873 670w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_720x.jpg?v=1675844873 720w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_775x.jpg?v=1675844873 775w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_785x.jpg?v=1675844873 785w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_870x.jpg?v=1675844873 870w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_930x.jpg?v=1675844873 930w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_935x.jpg?v=1675844873 935w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_940x.jpg?v=1675844873 940w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_1066x.jpg?v=1675844873 1066w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_1160x.jpg?v=1675844873 1160w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_1170x.jpg?v=1675844873 1170w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_1270x.jpg?v=1675844873 1270w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_1370x.jpg?v=1675844873 1370w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_1570x.jpg?v=1675844873 1570w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_1770x.jpg?v=1675844873 1770w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_1850x.jpg?v=1675844873 1850w,//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_1880x.jpg?v=1675844873 1880w"
                                                        src="//www.fedus.in/cdn/shop/files/about_us_3760_x1440_06f54704-460e-4caa-bd73-847ba365e730_533x.jpg?v=1675844873"
                                                        sizes="(min-width: 1100px) 3760px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="fedus about us " size="3760" loading="lazy" class=""
                                                        loading="lazy" />

                                                </a><a class="image image-mobile image-adapt adaptive_height"
                                                    role="link" aria-disabled="true" role="link" aria-disabled="true"
                                                    style="padding-top: 136.36363636363637%">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Mobile_banner_about_us_a898629a-ac60-4e42-8709-fb3c341ebbcc.jpg?v=1675845266 1x, //www.fedus.in/cdn/shop/files/Mobile_banner_about_us_a898629a-ac60-4e42-8709-fb3c341ebbcc@2x.jpg?v=1675845266 2x"
                                                        src="//www.fedus.in/cdn/shop/files/Mobile_banner_about_us_a898629a-ac60-4e42-8709-fb3c341ebbcc.jpg?v=1675845266"
                                                        alt="fedus about us " loading="lazy">

                                                </a>
                                            </div>
                                        </div><a href="javascript:void(0)" class="btn-scroll-down" data-scroll-down=""
                                            style="color: #232323;">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                                                zoomAndPan="disable" x="0px" y="0px" viewBox="0 0 36 18"
                                                xml:space="preserve">
                                                <style type="text/css">
                                                    .st0 {
                                                        stroke-width: 1.5;
                                                    }
                                                </style>
                                                <line class="st0" x1="36" y1="0" x2="18" y2="18"></line>
                                                <line class="st0" x1="0" y1="0" x2="18" y2="18"></line>
                                            </svg>
                                        </a>

                                    </div>

                                    <style type="text/css" media="screen">
                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--special .flex-box__banner,
                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom .flex-box__banner,
                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .flex-box__banner {
                                            align-items: stretch;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--special .flex-box__banner .banner-content,
                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom .flex-box__banner .banner-content {
                                            display: flex;
                                            align-items: center;
                                            background: ;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 {
                                            margin-bottom: 20px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .flex-box__banner .banner-content {
                                            display: flex;
                                            align-items: center;
                                            background: ;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom .flex-box__banner .banner-content,
                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .flex-box__banner .banner-content {
                                            border: 1px solid transparent;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner {
                                            margin-left: auto;
                                            margin-right: auto;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .banner-img {
                                            position: relative;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-sub-title {
                                            font-size: 14px;
                                            color: #232323;
                                            margin-top: 0;
                                            font-weight: 700;
                                            margin-bottom: 14px;
                                            font-family: var(--font-tab-type-1);
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .banner-sub-title {
                                            font-size: px;
                                            color: ;
                                            margin-top: 0;
                                            font-weight: ;
                                            margin-bottom: px;
                                            font-family: var(--font-tab-type-2);
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-sub-title.has-border span {
                                            border-bottom: 1px solid #232323;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom.border--border_s1 .banner-heading,
                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2.border--border_s1 .banner-heading {
                                            padding: 0 0 18px;
                                            margin-bottom: 18px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom .banner-heading,
                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .banner-heading {
                                            z-index: 1;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-heading {
                                            font-size: 40px;
                                            color: #232323;
                                            font-weight: ;
                                            line-height: 40px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .banner-heading {
                                            font-size: px;
                                            color: ;
                                            font-weight: ;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--special .banner-heading {
                                            margin-bottom: px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-text {
                                            font-size: 12px;
                                            color: #232323;
                                            line-height: 26px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .banner-text {
                                            font-size: px;
                                            color: ;
                                            line-height: px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-text .description-text-number {
                                            font-size: 12px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button {
                                            color: #ffffff;
                                            background: #232323;
                                            border-color: #232323;
                                            max-width: 235px
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .banner-button {
                                            color: ;
                                            background: ;
                                            border-color: ;
                                            max-width: px
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button.button-style2 {
                                            background: none;
                                            border: none;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button.button-style2 span {
                                            background-image: linear-gradient(transparent 97%, #232323 3%);
                                            background-repeat: repeat-x;
                                            background-position-y: 0;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button.button_2 {
                                            color: ;
                                            background: ;
                                            border-color: ;
                                            width: px;
                                            max-width: px;
                                            margin-top: px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-action.style_4 .banner-button.button_2 {
                                            width: auto;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button.button_2:hover {
                                            color: ;
                                            background: ;
                                            border-color: ;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-action.style_4 .banner-button.button_2 {
                                            margin-left: px;
                                        }

                                        body.layout_rtl #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-action.style_4 .banner-button.button_2 {
                                            margin-right: px;
                                            margin-left: 0;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button svg {
                                            fill: #ffffff;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button-2 {
                                            color: #ffffff;
                                            background: #232323;
                                            border-color: #232323;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button-2 svg {
                                            fill: #ffffff;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .content-box--absolute {
                                            width: 475px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box {
                                            max-width: 475px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .flex-box__banner .content-box {
                                            max-width: px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-1 {
                                            margin-right: px;
                                            margin-bottom: 0;
                                            max-width: 240px;
                                            transform: translateY(px)
                                        }

                                        body.layout_rtl #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-1 {
                                            margin-left: px;
                                            margin-right: auto;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-2 {
                                            margin-left: px;
                                            transform: translateY(px);
                                        }

                                        body.layout_rtl #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-2 {
                                            margin-right: px;
                                            margin-left: auto;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .sub-title-icon img {
                                            margin-right: auto;
                                            margin-left: auto;
                                            margin-bottom: var(--mg-bottom-icon-style);
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__divider {
                                            height: 240px;
                                            width: 1px;
                                            min-width: 1px;
                                            display: block;
                                            transform: translateY(px);
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button {}

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-item.slick-initialized {
                                            z-index: 2;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .video-open-popup a {
                                            position: absolute;
                                            top: 50%;
                                            left: 50%;
                                            transform: translate(-50%, -50%);
                                            z-index: 2;
                                            line-height: 0;
                                            padding: 10px 20px;
                                            border-radius: 5px;
                                            background: var(--bg_color);
                                            color: var(--color);
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .video-open-popup.custom_position a {
                                            top: var(--top);
                                            left: var(--left);
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .video-open-popup.icon_style_2 a {
                                            padding: 0;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .video-open-popup svg {
                                            width: 85px;
                                            height: 85px;
                                            fill: currentColor;
                                            stroke: currentColor;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .video-open-popup.icon_style_2 svg {
                                            width: 96px;
                                            height: 96px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.style-3 .flex-box__banner {
                                            position: relative;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.style-3 .flex-box__banner::after {
                                            content: "";
                                            position: absolute;
                                            top: 0;
                                            right: 0;
                                            width: 57.5%;
                                            height: 116%;
                                            background-color: ;
                                        }

                                        body.layout_rtl #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.style-3 .flex-box__banner::after {
                                            right: auto;
                                            left: 0;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.style-3 .flex-box__banner.row-reverse::after {
                                            left: 0;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.style-3 .flex-box__banner .banner-content {
                                            z-index: 2;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .is-slide .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .slick-dots {
                                            bottom: 30px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .is-slide .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .slick-dots li:not(.slick-active) button {
                                            background: transparent;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .is-slide .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .slick-dots li.slick-active button {
                                            background: white;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .is-slide .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .slick-dots li button {
                                            border: 1px solid white;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .countdown-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-title {
                                            font-size: px;
                                            font-weight: ;
                                            color: ;
                                            margin-top: 0;
                                            margin-bottom: px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .countdown-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .des-countdown {
                                            font-size: px;
                                            font-weight: ;
                                            color: ;
                                            margin-bottom: px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .countdown-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .collection-countdown .clock-item {
                                            border-color: ;
                                            width: px;
                                            height: px;
                                            -moz-border-radius: %;
                                            -webkit-border-radius: %;
                                            -ms-border-radius: %;
                                            -o-border-radius: %;
                                            border-radius: %;
                                            margin-left: px;
                                            margin-right: px;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .countdown-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .collection-countdown .clock-item .num {
                                            font-size: px;
                                            font-weight: ;
                                            color: ;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .countdown-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .collection-countdown .clock-item .text {
                                            font-size: px;
                                            font-weight: ;
                                            color: ;
                                        }

                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom,
                                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 {
                                            margin-top: 0;
                                        }

                                        @media (max-width: 1366px) {
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-1 {
                                                margin-right: 30px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-2 {
                                                margin-left: 30px;
                                            }
                                        }

                                        @media (max-width: 1199px) {

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom,
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 {
                                                width: 100%;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 {
                                                margin-top: 30px;
                                            }
                                        }

                                        @media (max-width: 1024px) {
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .video-open-popup.custom_position a {
                                                top: var(--top-mb);
                                                left: var(--left-mb);
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .video-open-popup svg {
                                                width: 44px;
                                                height: 44px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box {}

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-1 {
                                                margin-right: auto;
                                                margin-left: auto;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-2 {
                                                margin-right: auto;
                                                margin-left: auto;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-2 button {
                                                width: 100%;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.style-3 .flex-box__banner::after {
                                                display: none;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--special .flex-box__banner .banner-content {
                                                border: 1px solid;
                                                margin-top: 30px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.style-4 .banner-action .banner-button {
                                                min-width: 140px;
                                            }
                                        }

                                        @media (max-width: 768px) {

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom .flex-box__banner,
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .flex-box__banner {
                                                display: block;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom .flex-box__banner .banner-item,
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom .flex-box__banner .banner-content,
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .flex-box__banner .banner-item,
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .flex-box__banner .banner-content {
                                                width: 100%;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom .flex-box__banner .banner-content {
                                                margin-top: 0;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .flex-box__banner .banner-content {
                                                margin-top: 0;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-sub-title {
                                                color: #ffffff;
                                                font-size: 14px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .banner-sub-title {
                                                color: ;
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-sub-title.has-border span {
                                                border-bottom: 1px solid #ffffff;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .banner-sub-title.has-border span {
                                                border-bottom: 1px solid #ffffff;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-heading {
                                                color: #ffffff;
                                                font-size: 24px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .banner-heading {
                                                color: ;
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-text {
                                                color: #ffffff;
                                                font-size: 12px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .banner-text {
                                                color: ;
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .countdown-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-title {
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .countdown-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .banner-title {
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .countdown-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .des-countdown {
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .countdown-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .collection-countdown .clock-item .num {
                                                font-size: px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .countdown-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .collection-countdown .clock-item .text {
                                                font-size: px;
                                            }
                                        }

                                        @media (max-width: 550px) {
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box {}

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-1 {
                                                max-width: 100%;
                                                margin-right: 0;
                                                margin-right: auto;
                                                margin-left: auto;
                                            }

                                            body.layout_rtl #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-1 {
                                                margin-right: 0;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-2 {
                                                margin-left: 0px;
                                                margin-right: auto;
                                                margin-left: auto;
                                                transform: translateY(0);
                                            }

                                            body.layout_rtl #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__col-2 {
                                                margin-left: auto;
                                                margin-right: 12px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .flex-box__banner .content-box .content-box__divider {
                                                display: none;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.style-4 .banner-action .banner-button {
                                                min-width: 146px;
                                                max-width: 100%;
                                                display: inline-block;
                                            }
                                        }

                                        @media (min-width: 551px) {
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button:first-child {
                                                margin-right: 0;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button:last-child {
                                                margin-left: ;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--special .flex-box__banner {
                                                display: block;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--special .flex-box__banner .banner-item,
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--special .flex-box__banner .banner-content {
                                                width: 100%;
                                            }
                                        }

                                        @media (min-width: 1025px) {
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button:hover {
                                                color: #ffffff;
                                                background: #232323;
                                                border-color: #232323;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--special .banner-button:hover {
                                                color: ;
                                                background: ;
                                                border-color: ;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button:hover svg {
                                                fill: #ffffff;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button-2:hover {
                                                color: #ffffff;
                                                background: #232323;
                                                border-color: #232323;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-button-2:hover svg {
                                                fill: #ffffff;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-sub-title {
                                                margin-bottom: 14px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .banner-sub-title {
                                                margin-bottom: px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-heading {
                                                margin-bottom: 20px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--special .banner-heading {
                                                margin-bottom: px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0 .banner-text {
                                                margin-bottom: 35px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--custom-2 .banner-text {
                                                margin-bottom: px;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--special .flex-box__banner {
                                                display: flex;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--special .flex-box__banner .banner-item {
                                                width: calc(% - 15px);
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.type-item--special .flex-box__banner .banner-content {
                                                width: calc(100% - % - 15px);
                                                border: 1px solid;
                                            }
                                        }

                                        @media (min-width: 767px) and (max-width: 930px) {}

                                        @media (min-width: 551px) and (max-width: 1024px) {
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.style-2 .flex-box__banner {
                                                flex-direction: column;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.style-2 .flex-box__banner .banner-item,
                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.style-2 .flex-box__banner .banner-content {
                                                width: 100%;
                                            }

                                            #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .item-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0-1673867731afa9db4a-0.style-2 .flex-box__banner .content-box {
                                                flex-direction: row;
                                                gap: 25px;
                                            }
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style type="text/css" media="screen">
                    #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .is-slide .slick-dots {
                        bottom: -22px;
                    }

                    #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .halo-block-header .title:before {
                        background-color: #202020;
                        display: none;
                    }

                    #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .halo-block-header .title {
                        color: #202020;
                        font-size: 24px;
                        margin-top: 2px;
                        margin-bottom: 25px;
                    }

                    #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .halo-block-header .rte {
                        color: #202020;
                        font-size: 16px;
                    }

                    @media (min-width: 1200px) {
                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 {
                            padding-top: 0px;
                            padding-bottom: 0px;
                        }
                    }

                    @media (min-width: 1025px) {
                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .container-full {
                            padding-left: 0px;
                            padding-right: 0px;
                        }
                    }

                    @media (min-width: 768px) and (max-width: 1199px) {
                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 {
                            padding-top: 0px;
                            padding-bottom: 0px;
                        }
                    }

                    @media (max-width: 767px) {
                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 {
                            padding-top: 0px;
                            padding-bottom: 0px;
                        }

                        #halo-image-banner-template--17373918888236__95cde8b9-b852-4f9d-8d3b-49e9a26dbea0 .halo-block-header .title {
                            font-size: 20px;
                        }
                    }
                </style>
            </div>
            <div id="shopify-section-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d"
                class="shopify-section sections-customer-review-block">
                <link rel="stylesheet"
                    href="//www.fedus.in/cdn/shop/t/3/assets/component-review-block.css?v=165551222762701541321672341184"
                    media="print" onload="this.media='all'">
                <noscript>
                    <link
                        href="//www.fedus.in/cdn/shop/t/3/assets/component-review-block.css?v=165551222762701541321672341184"
                        rel="stylesheet" type="text/css" media="all" />
                </noscript>


                <div class="customer-review-block section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d style_1"
                    id="customer-review-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d"
                    data-loader-script="//www.fedus.in/cdn/shop/t/3/assets/halo.slide-customer-review.js?v=42214469312079139061672341187"
                    data-check="true">


                    <div class="container">


                        <div class="halo-block-header text-center">
                            <h3 class="title" style="--margin-bottom-title: 45px">
                                <span class="text">
                                    WHAT OUR CLIENT SAYS
                                </span>
                            </h3>

                        </div>

                    </div>

                    <div class="container">

                        <div class="customer-review-slide halo-row column-3 " data-review-slider data-row="3"
                            style="--count: 3;">


                            <div class="halo-item customer-review__item text-center">

                                <div class="review__item-content">


                                    <div class="star-reviews">
                                        <span class="star--icon "></span>

                                        <span class="star--icon "></span>

                                        <span class="star--icon "></span>

                                        <span class="star--icon "></span>

                                        <span class="star--icon "></span>

                                    </div>


                                    <span class="heading">Amazing product with good cord length</span>



                                    <div class="customer-review__content">
                                        Cord length suits my requirement. The product is very good till now.(after using
                                        it for around 2 weeks) . Enough space for big adapters like Macbook chargers
                                    </div>


                                    <div class="name">Dhiraj</div>


                                    <div class="date">Wednesday, Jan 5, 2023</div>

                                </div>
                            </div>



                            <div class="halo-item customer-review__item text-center">

                                <div class="review__item-content">


                                    <div class="star-reviews">
                                        <span class="star--icon "></span>

                                        <span class="star--icon "></span>

                                        <span class="star--icon "></span>

                                        <span class="star--icon "></span>

                                        <span class="star--icon "></span>

                                    </div>


                                    <span class="heading">Awesome Product</span>



                                    <div class="customer-review__content">
                                        Quality is really good in this price segment. The speed is really upto the mark.
                                        Service is also appreciable.
                                    </div>


                                    <div class="name">Varun</div>


                                    <div class="date">Wednesday, Dec 26, 2022</div>

                                </div>
                            </div>



                            <div class="halo-item customer-review__item text-center">

                                <div class="review__item-content">


                                    <div class="star-reviews">
                                        <span class="star--icon "></span>

                                        <span class="star--icon "></span>

                                        <span class="star--icon "></span>

                                        <span class="star--icon "></span>

                                        <span class="star--icon "></span>

                                    </div>


                                    <span class="heading">Product is durable, High speed and service is best.</span>



                                    <div class="customer-review__content">
                                        The cable is sturdy, made in India and holds 1 Year’ warranty. Checks all the
                                        boxes. Go for it. My Benq monitor came with a 16Amp socket hence I had to
                                        purchase it.
                                    </div>


                                    <div class="name">Mohit</div>


                                    <div class="date">Wednesday, Jan 15, 2023</div>

                                </div>
                            </div>


                        </div>

                    </div>

                </div>

                <style>
                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .heading {
                        color: #202020;
                        font-size: 20px;
                        line-height: 28px;
                        margin-bottom: 20px;
                        font-weight: 700;
                        display: block;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .sub_heading {
                        color: #808080;
                        font-size: 15px;
                        line-height: 31px;
                        margin-bottom: 20px;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .name {
                        color: #202020;
                        font-size: 14px;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .date {
                        color: #808080;
                        font-size: 13px;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .customer-review__content {
                        color: #202020;
                        font-size: 16px;
                        margin-bottom: 20px;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .review__item-image {
                        margin-bottom: 20px !important;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .star-reviews {
                        margin-bottom: 20px;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .customer-review__icon {
                        color: #ffffff;
                        background-color: #cbcbcb;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .customer-review__icon svg {
                        color: #ffffff;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .halo-block-header .title .text {
                        width: 500px;
                    }

                    .customer-review__item .star-reviews .star--icon {
                        font-size: 30px;
                    }

                    .customer-review-block .customer-review-slide {
                        padding-bottom: 22px;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .customer-review__item .star-reviews .star--icon::before {
                        color: ;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .slick-dots {
                        bottom: -4px;
                    }

                    .banner-animation-1 .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .slick-dots {
                        transform: none;
                    }

                    @media (min-width: 1200px) {
                        .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d {
                            padding-top: 20px;
                            padding-bottom: 20px;
                        }
                    }

                    @media (min-width: 1025px) {
                        .customer-review-block .slick-arrow {
                            top: calc(50% - 105px);
                        }
                    }

                    @media (min-width: 768px) and (max-width: 1199px) {
                        .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d {
                            padding-top: 20px;
                            padding-bottom: 20px;
                        }
                    }

                    @media (max-width: 1024px) {}

                    @media (max-width: 767px) {
                        .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d {
                            padding-top: 20px;
                            padding-bottom: 20px;
                        }

                        .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .halo-block-header .title {
                            font-size: 20px !important;
                        }
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d,
                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .halo-block-header .title .text {
                        background: #fafafa;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .halo-block-header .title {
                        color: #232323;
                        font-size: 25px;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .halo-block-header .title .text {
                        padding: 0;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .halo-block-header .title:before {
                        display: none;
                    }

                    .section-block-template--17373918888236__43f89439-ec1e-4512-b89e-527964b8424d .halo-block-header .subtext-review {
                        color: #3c3c3c;
                        font-size: 15px;
                    }
                </style>



            </div>
            <div id="shopify-section-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988"
                class="shopify-section sections-spotlight-block">
                <link rel="stylesheet"
                    href="//www.fedus.in/cdn/shop/t/3/assets/component-spotlight-block.css?v=61623024471308230371672341185"
                    media="print" onload="this.media='all'">
                <noscript>
                    <link
                        href="//www.fedus.in/cdn/shop/t/3/assets/component-spotlight-block.css?v=61623024471308230371672341185"
                        rel="stylesheet" type="text/css" media="all" />
                </noscript>

                <div class="spotlight-block section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988"
                    id="spotlight-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988">
                    <div class=" container">

                        <div class="halo-block-header text-center">
                            <h3 class="title" style="--margin-bottom-title: 10px">
                                <span class="text">
                                    #Blogs
                                </span>
                            </h3>



                        </div>

                        <banner-slider-component>
                            <div class="halo-row column-3 slider slider--tablet column-mb-2 button-bottom"
                                style="--row-distance-style: -15px; --arrow-side-position: 0;" data-swipe="slider"
                                data-dots="false" data-dots-mb="true">

                                <div class="halo-item slider__slide spotlight--image"
                                    id="block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988-1675514556cde9cd51-0"
                                    style="--item-distance-style: 15px;">
                                    <div class="spotlight-item spotlight-item__image">

                                        <div class="image-container">
                                            <div class="img-box">

                                                <a href="/blogs/news/difference-between-cat5-and-cat6-cables"
                                                    class="image-zoom adaptive_height"
                                                    style="padding-top: 66.66666666666666%">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_165x.jpg?v=1675509896 165w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_170x.jpg?v=1675509896 170w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_185x.jpg?v=1675509896 185w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_198x.jpg?v=1675509896 198w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_210x.jpg?v=1675509896 210w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_220x.jpg?v=1675509896 220w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_245x.jpg?v=1675509896 245w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_270x.jpg?v=1675509896 270w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_290x.jpg?v=1675509896 290w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_320x.jpg?v=1675509896 320w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_355x.jpg?v=1675509896 355w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_360x.jpg?v=1675509896 360w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_370x.jpg?v=1675509896 370w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_420x.jpg?v=1675509896 420w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_430x.jpg?v=1675509896 430w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_460x.jpg?v=1675509896 460w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_470x.jpg?v=1675509896 470w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_510x.jpg?v=1675509896 510w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_523x.jpg?v=1675509896 523w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_533x.jpg?v=1675509896 533w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_534x.jpg?v=1675509896 534w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_570x.jpg?v=1675509896 570w"
                                                        src="//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_533x.jpg?v=1675509896"
                                                        sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="Difference between Cat5 and Cat6 Ethernet cables"
                                                        size="600" loading="lazy" class="" />

                                                </a>


                                            </div>
                                        </div>

                                        <div class="content spotlight-inner text-center align-items--center  " style="--align-items-spacing-top-style: 40px; 
                                --align-items-spacing-bottom-style: 40px; 
                                --align-items-spacing-lr-style: 10px;
                                --align-items-postion-content-style: 0px;
                                --align-items-postion-content-mb-style: 0px;
                                --bg_color_content: ;
                                --content-border-color: #e2e2e2;">
                                            <h3 class="title custom-text-style has--border_hover" style="--color-text-style: #232323;
                                           --fontsize-text-style: 20px;
                                           --fontsize-mobile-text-style: 20px;
                                           --font-text-style:italic;--border-color-title-style: ;">
                                                <a href="/blogs/news/difference-between-cat5-and-cat6-cables" class="link_title 
                                        ">
                                                    <span>Difference between Cat5 and Cat6 Ethernet cables</span>
                                                </a>
                                            </h3>
                                            <div class="des custom-text-style" style="--color-text-style: #3c3c3c;
                                           --fontsize-text-style: 12px;
                                           --margin-top-des-style: 8px">
                                                we will take a look at the differences between the two, and why you
                                                should choose one over the other.
                                            </div><a href="/blogs/news/difference-between-cat5-and-cat6-cables"
                                                class="spotlight-button button custom-button-style" style="--color-button-style: #3c3c3c;
                                           --bg-color-button-style: #ffffff;
                                           --border-color-button-style: #ffffff;
                                           --color-button-hover-style: #ffffff;
                                           --bg-color-button-hover-style: #3c3c3c; 
                                           --border-color-button-hover-style: #3c3c3c;
                                           --text-transform-button-style: uppercase;
                                           --font-size-button-style: 16px;
                                           --margin-top-button-style: 30px;
                                           --button-width-style: 190px"><span>Read More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="halo-item slider__slide spotlight--image"
                                    id="block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988-1675514556cde9cd51-1"
                                    style="--item-distance-style: 15px;">
                                    <div class="spotlight-item spotlight-item__image">

                                        <div class="image-container">
                                            <div class="img-box">

                                                <a href="/blogs/news/5-reasons-why-cat6-ethernet-cables-are-the-best-for-your-network"
                                                    class="image-zoom adaptive_height"
                                                    style="padding-top: 66.66666666666666%">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_165x.jpg?v=1675509896 165w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_170x.jpg?v=1675509896 170w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_185x.jpg?v=1675509896 185w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_198x.jpg?v=1675509896 198w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_210x.jpg?v=1675509896 210w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_220x.jpg?v=1675509896 220w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_245x.jpg?v=1675509896 245w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_270x.jpg?v=1675509896 270w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_290x.jpg?v=1675509896 290w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_320x.jpg?v=1675509896 320w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_355x.jpg?v=1675509896 355w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_360x.jpg?v=1675509896 360w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_370x.jpg?v=1675509896 370w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_420x.jpg?v=1675509896 420w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_430x.jpg?v=1675509896 430w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_460x.jpg?v=1675509896 460w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_470x.jpg?v=1675509896 470w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_510x.jpg?v=1675509896 510w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_523x.jpg?v=1675509896 523w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_533x.jpg?v=1675509896 533w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_534x.jpg?v=1675509896 534w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_570x.jpg?v=1675509896 570w"
                                                        src="//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_533x.jpg?v=1675509896"
                                                        sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="Difference between Cat5 and Cat6 Ethernet cables"
                                                        size="600" loading="lazy" class="" />

                                                </a>


                                            </div>
                                        </div>

                                        <div class="content spotlight-inner text-center align-items--center  " style="--align-items-spacing-top-style: 40px; 
                                --align-items-spacing-bottom-style: 40px; 
                                --align-items-spacing-lr-style: 10px;
                                --align-items-postion-content-style: 0px;
                                --align-items-postion-content-mb-style: 0px;
                                --bg_color_content: ;
                                --content-border-color: #e2e2e2;">
                                            <h3 class="title custom-text-style has--border_hover" style="--color-text-style: #232323;
                                           --fontsize-text-style: 20px;
                                           --fontsize-mobile-text-style: 20px;
                                           --font-text-style:italic;--border-color-title-style: ;">
                                                <a href="/blogs/news/5-reasons-why-cat6-ethernet-cables-are-the-best-for-your-network"
                                                    class="link_title 
                                        ">
                                                    <span>5 Reasons Why Cat6 Ethernet Cables are the Best for Your
                                                        Network</span>
                                                </a>
                                            </h3>
                                            <div class="des custom-text-style" style="--color-text-style: #3c3c3c;
                                           --fontsize-text-style: 12px;
                                           --margin-top-des-style: 8px">
                                                Cat6 Ethernet cables have a higher bandwidth capacity compared to
                                                previous generations
                                            </div><a
                                                href="/blogs/news/5-reasons-why-cat6-ethernet-cables-are-the-best-for-your-network"
                                                class="spotlight-button button custom-button-style" style="--color-button-style: #3c3c3c;
                                           --bg-color-button-style: #ffffff;
                                           --border-color-button-style: #ffffff;
                                           --color-button-hover-style: #ffffff;
                                           --bg-color-button-hover-style: #3c3c3c; 
                                           --border-color-button-hover-style: #3c3c3c;
                                           --text-transform-button-style: uppercase;
                                           --font-size-button-style: 16px;
                                           --margin-top-button-style: 30px;
                                           --button-width-style: 190px"><span>Read More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="halo-item slider__slide spotlight--image"
                                    id="block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988-1675514556cde9cd51-2"
                                    style="--item-distance-style: 15px;">
                                    <div class="spotlight-item spotlight-item__image">

                                        <div class="image-container">
                                            <div class="img-box">

                                                <a href="/blogs/news/5-reasons-why-cat6-ethernet-cables-are-the-best-for-your-network"
                                                    class="image-zoom adaptive_height"
                                                    style="padding-top: 66.66666666666666%">
                                                    <img srcset="//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_165x.jpg?v=1675509896 165w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_170x.jpg?v=1675509896 170w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_185x.jpg?v=1675509896 185w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_198x.jpg?v=1675509896 198w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_210x.jpg?v=1675509896 210w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_220x.jpg?v=1675509896 220w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_245x.jpg?v=1675509896 245w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_270x.jpg?v=1675509896 270w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_290x.jpg?v=1675509896 290w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_320x.jpg?v=1675509896 320w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_355x.jpg?v=1675509896 355w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_360x.jpg?v=1675509896 360w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_370x.jpg?v=1675509896 370w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_420x.jpg?v=1675509896 420w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_430x.jpg?v=1675509896 430w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_460x.jpg?v=1675509896 460w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_470x.jpg?v=1675509896 470w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_510x.jpg?v=1675509896 510w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_523x.jpg?v=1675509896 523w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_533x.jpg?v=1675509896 533w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_534x.jpg?v=1675509896 534w,//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_570x.jpg?v=1675509896 570w"
                                                        src="//www.fedus.in/cdn/shop/files/Ethernet_498eeec7-32fc-4eff-9aaa-a1be2413a3c1_533x.jpg?v=1675509896"
                                                        sizes="(min-width: 1100px) 600px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                        alt="Difference between Cat5 and Cat6 Ethernet cables"
                                                        size="600" loading="lazy" class="" />

                                                </a>


                                            </div>
                                        </div>

                                        <div class="content spotlight-inner text-center align-items--center  " style="--align-items-spacing-top-style: 40px; 
                                --align-items-spacing-bottom-style: 40px; 
                                --align-items-spacing-lr-style: 10px;
                                --align-items-postion-content-style: 0px;
                                --align-items-postion-content-mb-style: 0px;
                                --bg_color_content: ;
                                --content-border-color: #e2e2e2;">
                                            <h3 class="title custom-text-style has--border_hover" style="--color-text-style: #232323;
                                           --fontsize-text-style: 20px;
                                           --fontsize-mobile-text-style: 20px;
                                           --font-text-style:italic;--border-color-title-style: ;">
                                                <a href="/blogs/news/5-reasons-why-cat6-ethernet-cables-are-the-best-for-your-network"
                                                    class="link_title 
                                        ">
                                                    <span>Difference between Cat6 and Cat7 Ethernet Cables</span>
                                                </a>
                                            </h3>
                                            <div class="des custom-text-style" style="--color-text-style: #3c3c3c;
                                           --fontsize-text-style: 12px;
                                           --margin-top-des-style: 8px">
                                                we'll be comparing two of the most popular ethernet cables on the
                                                market: Cat6 and Cat7.
                                            </div><a
                                                href="/blogs/news/5-reasons-why-cat6-ethernet-cables-are-the-best-for-your-network"
                                                class="spotlight-button button custom-button-style" style="--color-button-style: #3c3c3c;
                                           --bg-color-button-style: #ffffff;
                                           --border-color-button-style: #ffffff;
                                           --color-button-hover-style: #ffffff;
                                           --bg-color-button-hover-style: #232323; 
                                           --border-color-button-hover-style: #ffffff;
                                           --text-transform-button-style: uppercase;
                                           --font-size-button-style: 16px;
                                           --margin-top-button-style: 30px;
                                           --button-width-style: 190px"><span>Read More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="slider-buttons no-js-hidden">
                                <ul class="slider-dots ">

                                    <li class="dots-item active">
                                        <button name="dots" data-index="0">1</button>
                                    </li>

                                    <li class="dots-item ">
                                        <button name="dots" data-index="1">2</button>
                                    </li>

                                    <li class="dots-item ">
                                        <button name="dots" data-index="2">3</button>
                                    </li>

                                </ul>
                            </div>
                            <div class="group-btn">

                                <a href="/blogs/news" title="View All" class="btn button">
                                    View All
                                </a>


                            </div>

                        </banner-slider-component>
                    </div>
                </div>

                <style>
                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 {
                        padding-top: 0.0px;
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 .halo-block-header {
                        margin-top: -0px;
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988,
                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 .halo-block-header .title .text {
                        background: #ffffff;
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 .halo-block-header .title:before {
                        background-color: #232323;
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 .halo-block-header .title {
                        color: #232323;
                        font-size: 25px;
                        margin-top: 2px;
                        display: block;
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 .halo-block-header .rte {
                        color: #3c3c3c;
                        font-size: 12px;
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 .view_all {
                        font-weight: var(--font-weight-view-all-style);
                        margin-bottom: var(--mg-bottom-view-style);
                        color: var(--color-view-all-style);
                        font-size: var(--font-size-view-all-style);
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 .view_all:not(.has-border) {
                        border-bottom: none;
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 .view_all.has-border {
                        border-bottom: 1px solid;
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 .group-btn {
                        margin-top: 0px;
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 a.button {
                        max-width: 230px;
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 a.btn,
                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 a.btn-2:hover {
                        background: #3c3c3c;
                        color: #ffffff;
                        border: 2px solid #3c3c3c;
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 a.btn:hover,
                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 a.btn-2 {
                        background-color: #ffffff;
                        color: #0f5ef4;
                        border: 2px solid #ffffff;
                    }

                    .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 .spotlight-item .img-box a {
                        border-radius: 0px;
                    }

                    @media (min-width: 1200px) {
                        .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 {
                            padding-top: 10px;
                            padding-bottom: 10px;
                        }
                    }

                    @media (min-width: 1025px) {}

                    @media (min-width: 768px) and (max-width: 1199px) {
                        .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 {
                            padding-top: 10px;
                            padding-bottom: 10px;
                        }
                    }

                    @media (max-width: 1024px) {}

                    @media (max-width: 767px) {
                        .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 {
                            padding-top: 10px;
                            padding-bottom: 10px;
                        }

                        .section-block-template--17373918888236__ac57f576-43ac-4ee6-ad63-a414089d4988 .halo-block-header .title {
                            font-size: 20px;
                        }
                    }

                    @media (max-width: 551px) {}
                </style>


            </div>
            <div id="shopify-section-template--17373918888236__1651831494d88977f4"
                class="shopify-section sections-custom-service-block">
                <link rel="stylesheet"
                    href="//www.fedus.in/cdn/shop/t/3/assets/component-custom-service-block.css?v=53747083695191817061672341181"
                    media="print" onload="this.media='all'">
                <noscript>
                    <link
                        href="//www.fedus.in/cdn/shop/t/3/assets/component-custom-service-block.css?v=53747083695191817061672341181"
                        rel="stylesheet" type="text/css" media="all" />
                </noscript>

                <style>
                    .section-block-template--17373918888236__1651831494d88977f4,
                    .section-block-template--17373918888236__1651831494d88977f4 .halo-block-header .title .text {
                        background: #d0d0d0;
                    }

                    .section-block-template--17373918888236__1651831494d88977f4 .policies-block-wrapper {
                        position: relative;
                    }

                    .section-block-template--17373918888236__1651831494d88977f4 .slider-button .icon {
                        fill: #212121;
                    }

                    .section-block-template--17373918888236__1651831494d88977f4 .slider-button--prev .icon {
                        margin-top: 2px;
                    }

                    .section-block-template--17373918888236__1651831494d88977f4 {
                        border-bottom: 1px solid #3c3c3c;
                    }

                    .section-block-template--17373918888236__1651831494d88977f4 .halo-item+.halo-item {}

                    body.layout_rtl .section-block-template--17373918888236__1651831494d88977f4 .halo-item+.halo-item {}

                    .section-block-template--17373918888236__1651831494d88977f4 .halo-block-header .title:before {
                        background-color: #051c42;
                        display: none;
                    }

                    .section-block-template--17373918888236__1651831494d88977f4 .halo-block-header .title {
                        color: #051c42;
                        font-size: 20px;
                        margin-bottom: 20px;
                    }

                    .section-block-template--17373918888236__1651831494d88977f4 .halo-block-header {
                        margin-bottom: 0;
                    }

                    .section-block-template--17373918888236__1651831494d88977f4 .halo-block-header .rte {
                        color: #000000;
                        font-size: 16px;
                    }

                    .section-block-template--17373918888236__1651831494d88977f4 .rte {
                        color: #000000;
                        font-size: 16px;
                        margin-top: 20px;
                        margin-bottom: 20px;
                    }

                    @media (max-width: 1024px) {}

                    @media (max-width: 767px) {
                        .section-block-template--17373918888236__1651831494d88977f4 {
                            margin-top: 20px;
                            margin-bottom: 0px;
                        }

                        .section-block-template--17373918888236__1651831494d88977f4 .halo-block-header .title {
                            font-size: 20px;
                            margin-bottom: 20px;
                        }

                        .section-block-template--17373918888236__1651831494d88977f4 .halo-block-header .title {
                            margin-bottom: 20px;
                        }
                    }

                    @media (min-width: 1200px) {
                        .section-block-template--17373918888236__1651831494d88977f4 {
                            margin-top: 20px;
                            margin-bottom: 0px;
                        }

                        .section-block-template--17373918888236__1651831494d88977f4 .halo-item a:hover {
                            box-shadow: 0 0 14px rgb(33 33 33 / 20%);
                        }

                        .section-block-template--17373918888236__1651831494d88977f4 .halo-item a {
                            position: relative;
                            transform: translate3d(0px, 0px, 0px);
                            transition: all .4s ease;
                        }

                        .section-block-template--17373918888236__1651831494d88977f4 .halo-item a:hover {
                            transform: translate3d(0px, -15px, 0px);
                        }
                    }

                    @media (min-width: 1025px) {
                        .section-block-template--17373918888236__1651831494d88977f4 .halo-block-header .title .text {
                            width: auto;
                        }
                    }

                    @media (min-width: 768px) and (max-width: 1199px) {
                        .section-block-template--17373918888236__1651831494d88977f4 {
                            margin-top: 20px;
                            margin-bottom: 0px;
                        }
                    }
                </style>

                <div class="custom-service-block section-block-template--17373918888236__1651831494d88977f4"
                    style="--grid-gap: 10.0px">
                    <div class="container">

                        <div class="bg-policies-block">


                            <div class="halo-block-header text-center">
                                <h3 class="title">
                                    <span class="text">
                                        WORRY FREE PURCHASE
                                    </span>
                                </h3>


                            </div>


                            <div class="halo-row column-3 items--width_auto">

                                <div class="halo-item has-des">
                                    <a role="link" aria-disabled="true" title="1 Year Warranty"
                                        style="--item-radius-style: 0px; 
                                                                                                       --item-padding-top-style: 20px; 
                                                                                                       --item-padding-bottom-style: 20px;
                                                                                                       --item-padding-left-right-style: 20px;
                                                                                                       --bg-color-block-style: rgba(0,0,0,0);
                                                                                                       --border-block-style: rgba(0,0,0,0);
                                                                                                       --width-icon-style: 64px;
                                                                                                       --height-icon-style: 64px">


                                        <div class="policies-icon image-zoom"
                                            style="--mg-bottom-icon-style: 27px; --color-icon-style: #051c42"><img
                                                srcset="//www.fedus.in/cdn/shop/files/icons8-warranty-50_1.png?v=1673613949
" src="//www.fedus.in/cdn/shop/files/icons8-warranty-50_1_533x.png?v=1673613949"
                                                sizes="(min-width: 1100px) 50px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                alt="" size="50" loading="lazy" class="" />

                                        </div>


                                        <div class="policies-content"><span class="policies-text type--font_1" style="--fontsize-title-style: 24px;
                                                --mg-bottom-title-style: 20px;
                                                --mg-bottom-title-mb-style: 20px;
                                                --fontsize-title-style-mb: 24px;
                                                --fontweight-title-style: 700;
                                                --color-block-style: #051c42">
                                                1 Year Warranty
                                            </span>
                                            <p class="policies-des" style="--fontsize-desc-style: 20px;
                                                       --fontsize-desc-mb-style: 15px;
                                                       --lineheight-desc-style: 20px;
                                                       --color-des-block-style: #051c42;
                                                       --mg_bottom_des-style: 20px">
                                                1 Year Warranty on all FEDUS Product*
                                            </p>
                                        </div>
                                    </a>
                                </div>

                                <div class="halo-item has-des">
                                    <a role="link" aria-disabled="true" title="Free Shipping"
                                        style="--item-radius-style: 0px; 
                                                                                                       --item-padding-top-style: 20px; 
                                                                                                       --item-padding-bottom-style: 20px;
                                                                                                       --item-padding-left-right-style: 20px;
                                                                                                       --bg-color-block-style: rgba(0,0,0,0);
                                                                                                       --border-block-style: rgba(0,0,0,0);
                                                                                                       --width-icon-style: 64px;
                                                                                                       --height-icon-style: 64px">


                                        <div class="policies-icon image-zoom"
                                            style="--mg-bottom-icon-style: 27px; --color-icon-style: #051c42"><img
                                                srcset="//www.fedus.in/cdn/shop/files/icons8-free-shipping-50.png?v=1673613949
" src="//www.fedus.in/cdn/shop/files/icons8-free-shipping-50_533x.png?v=1673613949"
                                                sizes="(min-width: 1100px) 50px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                alt="" size="50" loading="lazy" class="" />

                                        </div>


                                        <div class="policies-content"><span class="policies-text type--font_1" style="--fontsize-title-style: 24px;
                                                --mg-bottom-title-style: 20px;
                                                --mg-bottom-title-mb-style: 20px;
                                                --fontsize-title-style-mb: 24px;
                                                --fontweight-title-style: 700;
                                                --color-block-style: #051c42">
                                                Free Shipping
                                            </span>
                                            <p class="policies-des" style="--fontsize-desc-style: 20px;
                                                       --fontsize-desc-mb-style: 15px;
                                                       --lineheight-desc-style: 20px;
                                                       --color-des-block-style: #051c42;
                                                       --mg_bottom_des-style: 20px">
                                                For Minimum order value 499
                                            </p>
                                        </div>
                                    </a>
                                </div>

                                <div class="halo-item has-des">
                                    <a role="link" aria-disabled="true" title="10 Days Moneyback"
                                        style="--item-radius-style: 0px; 
                                                                                                       --item-padding-top-style: 20px; 
                                                                                                       --item-padding-bottom-style: 20px;
                                                                                                       --item-padding-left-right-style: 20px;
                                                                                                       --bg-color-block-style: rgba(0,0,0,0);
                                                                                                       --border-block-style: rgba(0,0,0,0);
                                                                                                       --width-icon-style: 64px;
                                                                                                       --height-icon-style: 64px">


                                        <div class="policies-icon image-zoom"
                                            style="--mg-bottom-icon-style: 27px; --color-icon-style: #051c42"><img
                                                srcset="//www.fedus.in/cdn/shop/files/icons8-money-bag-50.png?v=1673613949
" src="//www.fedus.in/cdn/shop/files/icons8-money-bag-50_533x.png?v=1673613949"
                                                sizes="(min-width: 1100px) 50px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                                                alt="" size="50" loading="lazy" class="" />

                                        </div>


                                        <div class="policies-content"><span class="policies-text type--font_1" style="--fontsize-title-style: 24px;
                                                --mg-bottom-title-style: 20px;
                                                --mg-bottom-title-mb-style: 20px;
                                                --fontsize-title-style-mb: 24px;
                                                --fontweight-title-style: 700;
                                                --color-block-style: #051c42">
                                                10 Days Moneyback
                                            </span>
                                            <p class="policies-des" style="--fontsize-desc-style: 20px;
                                                       --fontsize-desc-mb-style: 15px;
                                                       --lineheight-desc-style: 20px;
                                                       --color-des-block-style: #051c42;
                                                       --mg_bottom_des-style: 20px">
                                                Free returns only for replacements
                                            </p>
                                        </div>
                                    </a>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </main>


        <div class="wrapper-footer">
            <div id="shopify-section-policies-block" class="shopify-section sections-policies-block">
            </div>
            <div id="shopify-section-footer" class="shopify-section">
                <link href="//www.fedus.in/cdn/shop/t/3/assets/section-footer.css?v=67090422944278311601672341187"
                    rel="stylesheet" type="text/css" media="all" />
                <link rel="stylesheet"
                    href="//www.fedus.in/cdn/shop/t/3/assets/component-list-payment.css?v=14796597056156653981672341182"
                    media="all" onload="this.media='all'">
                <noscript>
                    <link
                        href="//www.fedus.in/cdn/shop/t/3/assets/component-list-payment.css?v=14796597056156653981672341182"
                        rel="stylesheet" type="text/css" media="all" />
                </noscript>
                <style>
                    .footer__content-top {
                        padding-top: 0;
                        padding-bottom: 30px;
                    }

                    .footer-02 .footer__content-top {
                        padding-top: 30px;
                        padding-bottom: 30px;
                    }

                    .footer-03 .footer__content-top {}

                    .footer__content-bottom {
                        padding-top: 20px;
                        padding-bottom: 20px;
                    }

                    .footer-03 .footer__content-text {
                        background: ;
                    }

                    .footer-03 .footer__content-text .footer_text-wrapper p {
                        color: ;
                    }

                    .footer-03 .footer__content-text .footer_text-wrapper a.button {
                        color: ;
                        border: 1px solid;
                        background-color: ;
                    }

                    .footer-03 .footer-block__details .rte h3,
                    .footer-03 .footer-block__newsletter .footer-block__subheading .icon {
                        fill: #051c42;
                    }

                    .footer__content-top {
                        background: #d0d0d0;
                    }

                    .footer-block__column .footer-block__heading,
                    .footer-block__newsletter .footer-block__heading,
                    .footer-block__newsletter .footer-block__subheading .text-store {
                        color: #051c42;
                    }

                    .list-menu__item--link,
                    .footer-block__details,
                    .footer-block__details a,
                    .footer-block__newsletter .footer-block__subheading,
                    .footer-block__newsletter .footer-block__subheading a {
                        color: #051c42;
                    }

                    .footer__content-bottom {
                        background: #ffffff;
                    }

                    .copyright__content {
                        color: #808080;
                    }

                    .footer-block__list-social .list-social__item {
                        margin-right: 10px;
                    }

                    .footer-block__list-social .list-social__link {
                        color: #ffffff !important;
                        background: #051c42;
                        border: 0px solid #232323;
                        padding: 5px;
                    }

                    .footer-block__list-social .list-social__link svg {
                        fill: #ffffff !important;
                        width: 20px !important;
                        height: 20px !important;
                    }

                    .footer-block__list-social .list-social__item {
                        margin: 5px 24px 6px 0;
                    }

                    .footer-block__list-social .list-social {
                        margin-left: -6px;
                    }

                    .footer-block__list-social .list-social__link:before {
                        box-shadow: 0 0 0 2px #234bbb;
                    }

                    .footer-block__newsletter .footer-block__newsletter-form {
                        max-width: 505px;
                    }

                    .footer-block__newsletter .footer-block__newsletter-form #NewsletterForm--footer {
                        border-radius: 6px;
                    }

                    .footer-block__newsletter {
                        padding-top: 30px;
                        margin-bottom: 10px;
                        padding-bottom: 20px;
                    }

                    .footer-block__newsletter .footer-block__subheading {
                        margin-bottom: 20px;
                    }

                    .wrapper-top-content {
                        margin-bottom: 10px;
                        border-bottom: 1px solid #030303;
                    }

                    .wrapper-top-content .footer-block__newsletter {
                        margin-bottom: 0;
                    }

                    .footer-block__newsletter .footer-block__newsletter-form .field {
                        margin-right: 10px;
                    }

                    @media (max-width: 1024px) {}

                    @media (max-width: 767px) {
                        .footer-block__mobile .footer-block__heading {
                            border-color: #051c42;
                        }

                        .footer-block__mobile .footer-block__heading:before,
                        .footer-block__mobile .footer-block__heading:after {
                            background-color: #051c42;
                        }
                    }

                    @media (max-width: 550px) {
                        .footer-block__mobile .footer-block__heading {
                            border-color: #051c42;
                        }

                        .footer-block__mobile .footer-block__heading:before,
                        .footer-block__mobile .footer-block__heading:after {
                            background-color: #051c42;
                        }
                    }

                    @media (min-width: 1025px) {
                        .footer-block__list-social .list-social__link:hover {
                            color: #ffffff;
                            border-color: rgba(0, 0, 0, 0);
                            background: #234bbb;
                        }

                        .footer-block__list-social .list-social__link:hover svg {
                            fill: #ffffff !important;
                        }

                        .list-menu__item--link:hover {
                            color: #234bbb;
                        }

                        .footer__content-top.footer__content-bg {
                            background-attachment: fixed;
                        }

                        .footer-03 .footer__content-text .footer_text-wrapper a.button:hover {
                            color: ;
                            border: 1px solid;
                            background-color: ;
                        }
                    }

                    @media (min-width: 1800px) {
                        .footer__payment .list-payment {
                            padding-right: 30px;
                        }
                    }

                    @media (min-width: 767px) {
                        .footer-03 .footer-block__newsletter .footer-block__subheading {
                            margin-top: 50px;
                        }
                    }
                </style>

                <footer class="footer">
                    <div class="footer__content-top">

                        <div class="container">


                            <div class="footer__content-newsletter 
                                    footer-block__newsletter 
                                    text-center 
                                    newsletter__style1" style="--bg_color: transparent">
                                <h2 class="footer-block__heading">Subscribe To Our Newsletter</h2>
                                <div class="footer-block__subheading rte">
                                    <p style="line-height: 24px;">Get the latest updates on new products and upcoming
                                        sales</p>
                                </div>
                                <form-has-check class="footer-block__newsletter-item footer-block__newsletter-form">
                                    <form method="post" action="/contact#ContactFooter" id="ContactFooter"
                                        accept-charset="UTF-8" class="footer__newsletter newsletter-form"><input
                                            type="hidden" name="form_type" value="customer" /><input type="hidden"
                                            name="utf8" value="✓" /><input type="hidden" name="contact[tags]"
                                            value="newsletter">
                                        <div class="newsletter-form__field-wrapper">
                                            <div class="field">
                                                <label class="field__label hiddenLabels" for="NewsletterForm--footer">
                                                    Your email
                                                </label>
                                                <input id="NewsletterForm--footer" type="email" name="contact[email]"
                                                    class="field__input form-input-placeholder" value=""
                                                    aria-required="true" autocorrect="off" autocapitalize="off"
                                                    autocomplete="email" placeholder="enter your email address">
                                            </div>
                                            <button type="submit" class="button newsletter-form__button" name="commit"
                                                id="Subscribe" aria-label="Submit" style="--button-width: 100px">
                                                Submit
                                            </button>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                if (window.location.href.indexOf('newsletter&form_type=customer') > -1) {
                                                    var newsletterSuccessPopup = (function () {
                                                        var popup = $('.newsletter-success-modal');
                                                        var close = popup.find('.close');
                                                        var success = popup.find('.success');
                                                        var error = popup.find('.error');
                                                        var overlay = $('.background-overlay');
                                                        popup.show();
                                                        overlay.show();
                                                        error.show();
                                                        success.hide();
                                                        $.cookie('emailSubcribeModal', 'closed', {
                                                            expires: 1,
                                                            path: '/'
                                                        });
                                                        close.off('click').on('click', function () {
                                                            popup.fadeOut();
                                                            overlay.hide();
                                                        });
                                                        overlay.off('click').on('click', function () {
                                                            popup.fadeOut();
                                                            overlay.hide();
                                                        });
                                                    })();
                                                    var newURL = location.href.split("?")[0];
                                                    window.history.pushState('object', document.title, newURL);
                                                }
                                            })
                                        </script>
                                    </form>
                                </form-has-check>
                                <style>
                                    .footer-block__newsletter .field__input {
                                        color: #232323;
                                        background-color: #ffffff;
                                        border: 1px solid #b4b4b4;
                                        font-size: var(--footer-link-font-size);
                                    }

                                    .footer-block__newsletter .field__input::-webkit-input-placeholder {
                                        /* Edge */
                                        color: #232323;
                                        font-size: var(--footer-link-font-size);
                                    }

                                    .footer-block__newsletter .field__input:-ms-input-placeholder {
                                        /* Internet Explorer 10-11 */
                                        color: #232323;
                                        font-size: var(--footer-link-font-size);
                                    }

                                    .footer-block__newsletter .field__input::placeholder {
                                        color: #232323;
                                        font-size: var(--footer-link-font-size);
                                    }

                                    .footer-block__newsletter .newsletter-form__button {
                                        color: #ffffff;
                                        border: 1px solid #234bbb;
                                        background-color: #234bbb;
                                    }

                                    .footer-03 .footer-block__newsletter .newsletter-form__field-wrapper .button svg {
                                        fill: #ffffff;
                                    }

                                    .footer-03 .footer-block__newsletter .newsletter-form__field-wrapper .button:hover svg {
                                        fill: #ffffff;
                                    }

                                    .footer-block__newsletter .newsletter-form__button:hover {
                                        color: #ffffff;
                                        border: 1px solid #000000;
                                        background-color: #000000;
                                    }

                                    .footer-block__newsletter .form--check p,
                                    .footer-block__newsletter .form--check a {
                                        color: #808080;
                                        font-size: 16px;
                                        cursor: pointer;
                                    }

                                    .footer-block__newsletter .form--check label:before,
                                    .footer-block__newsletter .form--check label:after {
                                        border-color: #ffffff;
                                    }

                                    .newsletter__style2 .newsletter-form__field-wrapper {
                                        border: 1px solid #ffffff;
                                        padding: 10px;
                                    }

                                    @media (max-width: 1024px) {

                                        .footer-block__newsletter .form--check p,
                                        .footer-block__newsletter .form--check a {
                                            font-size: 14px;
                                        }
                                    }

                                    @media (min-width: 1025px) {
                                        .newsletter__style2 .newsletter-form__field-wrapper #NewsletterForm--footer {
                                            padding-top: 21px;
                                            padding-bottom: 21px;
                                        }
                                    }
                                </style>
                            </div>


                            <div class="halo-row column-4">


                                <div class="footer-block__item footer-block__column footer-block__link_list 
                                    
                                     text-left
                                      
                                      
                                     
" style="--block-custom-width: 25%;">
                                    <div class="footer-block__mobile">
                                        <h2 class="footer-block__heading" data-toggle-column-footer>About Us</h2>
                                        <div class="footer-block__list">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="/pages/shipping-policy"
                                                        class="link link-underline list-menu__item--link">
                                                        <span class="text">Shipping Policy</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/pages/terms-of-use"
                                                        class="link link-underline list-menu__item--link">
                                                        <span class="text">Terms and Use</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/pages/privacy-policy"
                                                        class="link link-underline list-menu__item--link">
                                                        <span class="text">Privacy Policy</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/pages/return-exchange-policy"
                                                        class="link link-underline list-menu__item--link">
                                                        <span class="text">Return Refund & Exchange Policy</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/pages/product-drivers-manuals"
                                                        class="link link-underline list-menu__item--link">
                                                        <span class="text">Product Drivers & Manuals</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/blogs/news"
                                                        class="link link-underline list-menu__item--link">
                                                        <span class="text">Blog</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer-block__item footer-block__column footer-block__link_list 
                                    
                                     text-left
                                      
                                      
                                     
" style="--block-custom-width: 18%;">
                                    <div class="footer-block__mobile">
                                        <h2 class="footer-block__heading" data-toggle-column-footer>Products</h2>
                                        <div class="footer-block__list">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="/" class="link link-underline list-menu__item--link">
                                                        <span class="text">Home</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/collections/cables"
                                                        class="link link-underline list-menu__item--link">
                                                        <span class="text">Cables</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/collections/power-strip"
                                                        class="link link-underline list-menu__item--link">
                                                        <span class="text">Power Strip</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/collections/other-products"
                                                        class="link link-underline list-menu__item--link">
                                                        <span class="text">Other Products</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/pages/contact"
                                                        class="link link-underline list-menu__item--link">
                                                        <span class="text">Support</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/pages/bulk-purchase"
                                                        class="link link-underline list-menu__item--link">
                                                        <span class="text">Bulk Purchase</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/blogs/news"
                                                        class="link link-underline list-menu__item--link">
                                                        <span class="text">Blog</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                                <div class="footer-block__item footer-block__column footer-block__text 
                                    
                                     text-left
                                      block_text--style_1 
                                      
                                     
" style="--block-custom-width: 25%;--border-block-style-2-color: #000000;">
                                    <div class="">
                                        <h2 class="footer-block__heading" data-toggle-column-footer>Cheeku Technologies
                                        </h2>
                                        <div class="footer-block__details">
                                            <div class="rte">
                                                <p style="line-height: 24px; margin-top: 42px;">
                                                    <span class="icon">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="map-marker-alt" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewbox="0 0 384 512"
                                                            class="svg-inline--fa fa-map-marker-alt fa-w-12 fa-7x">
                                                            <path fill="currentColor"
                                                                d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"
                                                                class=""></path>
                                                        </svg></span>
                                                    <span>
                                                        232, Deepak Vihar Extn, Hastsaal Uttam Nagar, Delhi, Delhi,
                                                        110059, India New Delhi -110059</span>
                                                </p>
                                                <p style="line-height: 24px">
                                                    <span class="icon">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="phone-alt" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512"
                                                            class="svg-inline--fa fa-phone-alt fa-w-16 fa-7x">
                                                            <path fill="currentColor"
                                                                d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"
                                                                class=""></path>
                                                        </svg>
                                                    </span>
                                                    <span>Call us: <a href="tel:%20(090)%">(091) 8287644586</a></span>
                                                </p>
                                                <p lin-height:="">
                                                    <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            viewbox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                            <path
                                                                d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z">
                                                            </path>
                                                        </svg></span>
                                                    <span>Email: <a href="mailto:info@fedus.in"
                                                            style="text-decoration: underline">info@Fedus.in</a></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer-block__item footer-block__column footer-block__text 
                                    
                                     text-left
                                      block_text--style_1 
                                     column_reverse 
                                     
" style="--block-custom-width: 30%;--border-block-style-2-color: #000000;">
                                    <div class="">
                                        <div class="footer-block__list-social enable_bg_social"
                                            style="--margin-top: 20px">
                                            <h2 class="footer-block__heading">Follow Us</h2>
                                            <div class="item clearfix">
                                                <ul class="list-unstyled list-social clearfix" role="list">
                                                    <li class="list-social__item">
                                                        <a href="https://www.facebook.com/fedusindia"
                                                            class="link link--text list-social__link icon-facebook"><svg
                                                                aria-hidden="true" focusable="false" role="presentation"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                                class="icon icon-facebook">
                                                                <path
                                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                                </path>
                                                            </svg><span class="visually-hidden">Facebook</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-social__item">
                                                        <a href="https://www.instagram.com/fedus_india/"
                                                            class="link link--text list-social__link icon-instagram"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                viewBox="0 0 512 512" xml:space="preserve"
                                                                aria-hidden="true" focusable="false" role="presentation"
                                                                class="icon icon-instagram">
                                                                <g>
                                                                    <path
                                                                        d="M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M256,152   c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M437,0H75C33.6,0,0,33.6,0,75v362   c0,41.4,33.6,75,75,75h362c41.4,0,75-33.6,75-75V75C512,33.6,478.4,0,437,0z M256,392c-74.399,0-135-60.601-135-135   c0-74.401,60.601-135,135-135s135,60.599,135,135C391,331.399,330.399,392,256,392z M421,122c-16.5,0-30-13.5-30-30s13.5-30,30-30   s30,13.5,30,30S437.5,122,421,122z M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z    M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M256,152c-57.9,0-105,47.1-105,105   s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z" />
                                                                </g>
                                                            </svg><span class="visually-hidden">Instagram</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-social__item">
                                                        <a href="https://www.youtube.com"
                                                            class="link link--text list-social__link icon-youtube"><svg
                                                                aria-hidden="true" focusable="false" role="presentation"
                                                                class="icon icon-youtube" viewBox="0 0 100 70">
                                                                <path
                                                                    d="M98 11c2 7.7 2 24 2 24s0 16.3-2 24a12.5 12.5 0 01-9 9c-7.7 2-39 2-39 2s-31.3 0-39-2a12.5 12.5 0 01-9-9c-2-7.7-2-24-2-24s0-16.3 2-24c1.2-4.4 4.6-7.8 9-9 7.7-2 39-2 39-2s31.3 0 39 2c4.4 1.2 7.8 4.6 9 9zM40 50l26-15-26-15v30z">
                                                            </svg>
                                                            <span class="visually-hidden">YouTube</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-social__item">
                                                        <a href="https://twitter.com/"
                                                            class="link link--text list-social__link icon-twitter"><svg
                                                                aria-hidden="true" focusable="false" role="presentation"
                                                                class="icon icon-twitter" viewBox="0 0 18 15">
                                                                <path
                                                                    d="M17.64 2.6a7.33 7.33 0 01-1.75 1.82c0 .05 0 .13.02.23l.02.23a9.97 9.97 0 01-1.69 5.54c-.57.85-1.24 1.62-2.02 2.28a9.09 9.09 0 01-2.82 1.6 10.23 10.23 0 01-8.9-.98c.34.02.61.04.83.04 1.64 0 3.1-.5 4.38-1.5a3.6 3.6 0 01-3.3-2.45A2.91 2.91 0 004 9.35a3.47 3.47 0 01-2.02-1.21 3.37 3.37 0 01-.8-2.22v-.03c.46.24.98.37 1.58.4a3.45 3.45 0 01-1.54-2.9c0-.61.14-1.2.45-1.79a9.68 9.68 0 003.2 2.6 10 10 0 004.08 1.07 3 3 0 01-.13-.8c0-.97.34-1.8 1.03-2.48A3.45 3.45 0 0112.4.96a3.49 3.49 0 012.54 1.1c.8-.15 1.54-.44 2.23-.85a3.4 3.4 0 01-1.54 1.94c.74-.1 1.4-.28 2.01-.54z">
                                                            </svg>
                                                            <span class="visually-hidden">Twitter</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="footer__content-bottom">
                        <div class="container">
                            <div class="footer-block__bottom not_flex ">
                                <div class="footer__column-item footer__copyright">
                                    <small class="copyright__content">
                                        <p style="line-height: 28px;">©2023 Cheeku Technologies. All Rights Reserved.
                                        </p>
                                    </small>
                                </div>
                                <div class="footer__column footer__column--info">
                                    <div class="footer__column-item footer__payment">
                                        <span class="visually-hidden">Payment methods</span>
                                        <ul class="list list-payment clearfix" role="list">


                                            <li class="list-payment__item visa">
                                                <svg class="icon icon--full-color" viewBox="0 0 38 24"
                                                    xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24"
                                                    aria-labelledby="pi-visa">
                                                    <title id="pi-visa">Visa</title>
                                                    <path opacity=".07"
                                                        d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                                    <path fill="#fff"
                                                        d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                                    <path
                                                        d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z"
                                                        fill="#142688" />
                                                </svg>
                                            </li>


                                            <li class="list-payment__item master">
                                                <svg class="icon icon--full-color" viewBox="0 0 38 24"
                                                    xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24"
                                                    aria-labelledby="pi-master">
                                                    <title id="pi-master">Mastercard</title>
                                                    <path opacity=".07"
                                                        d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                                    <path fill="#fff"
                                                        d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                                    <circle fill="#EB001B" cx="15" cy="12" r="7" />
                                                    <circle fill="#F79E1B" cx="23" cy="12" r="7" />
                                                    <path fill="#FF5F00"
                                                        d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z" />
                                                </svg>
                                            </li>


                                            <li class="list-payment__item maestro">
                                                <svg class="icon icon--full-color" viewBox="0 0 38 24"
                                                    xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img"
                                                    aria-labelledby="pi-maestro">
                                                    <title id="pi-maestro">Maestro</title>
                                                    <path opacity=".07"
                                                        d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                                    <path fill="#fff"
                                                        d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                                    <circle fill="#EB001B" cx="15" cy="12" r="7" />
                                                    <circle fill="#00A2E5" cx="23" cy="12" r="7" />
                                                    <path fill="#7375CF"
                                                        d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z" />
                                                </svg>
                                            </li>


                                            <li class="list-payment__item american_express">
                                                <svg class="icon icon--full-color" xmlns="http://www.w3.org/2000/svg"
                                                    role="img" aria-labelledby="pi-american_express" viewBox="0 0 38 24"
                                                    width="38" height="24">
                                                    <title id="pi-american_express">American Express</title>
                                                    <path fill="#000"
                                                        d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3Z"
                                                        opacity=".07" />
                                                    <path fill="#006FCF"
                                                        d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32Z" />
                                                    <path fill="#FFF"
                                                        d="M22.012 19.936v-8.421L37 11.528v2.326l-1.732 1.852L37 17.573v2.375h-2.766l-1.47-1.622-1.46 1.628-9.292-.02Z" />
                                                    <path fill="#006FCF"
                                                        d="M23.013 19.012v-6.57h5.572v1.513h-3.768v1.028h3.678v1.488h-3.678v1.01h3.768v1.531h-5.572Z" />
                                                    <path fill="#006FCF"
                                                        d="m28.557 19.012 3.083-3.289-3.083-3.282h2.386l1.884 2.083 1.89-2.082H37v.051l-3.017 3.23L37 18.92v.093h-2.307l-1.917-2.103-1.898 2.104h-2.321Z" />
                                                    <path fill="#FFF"
                                                        d="M22.71 4.04h3.614l1.269 2.881V4.04h4.46l.77 2.159.771-2.159H37v8.421H19l3.71-8.421Z" />
                                                    <path fill="#006FCF"
                                                        d="m23.395 4.955-2.916 6.566h2l.55-1.315h2.98l.55 1.315h2.05l-2.904-6.566h-2.31Zm.25 3.777.875-2.09.873 2.09h-1.748Z" />
                                                    <path fill="#006FCF"
                                                        d="M28.581 11.52V4.953l2.811.01L32.84 9l1.456-4.046H37v6.565l-1.74.016v-4.51l-1.644 4.494h-1.59L30.35 7.01v4.51h-1.768Z" />
                                                </svg>

                                            </li>






                                            <li class="list-payment__item discover">
                                                <svg class="icon icon--full-color" viewBox="0 0 38 24" width="38"
                                                    height="24" role="img" aria-labelledby="pi-discover" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title id="pi-discover">Discover</title>
                                                    <path fill="#000" opacity=".07"
                                                        d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                                    <path
                                                        d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32z"
                                                        fill="#fff" />
                                                    <path
                                                        d="M3.57 7.16H2v5.5h1.57c.83 0 1.43-.2 1.96-.63.63-.52 1-1.3 1-2.11-.01-1.63-1.22-2.76-2.96-2.76zm1.26 4.14c-.34.3-.77.44-1.47.44h-.29V8.1h.29c.69 0 1.11.12 1.47.44.37.33.59.84.59 1.37 0 .53-.22 1.06-.59 1.39zm2.19-4.14h1.07v5.5H7.02v-5.5zm3.69 2.11c-.64-.24-.83-.4-.83-.69 0-.35.34-.61.8-.61.32 0 .59.13.86.45l.56-.73c-.46-.4-1.01-.61-1.62-.61-.97 0-1.72.68-1.72 1.58 0 .76.35 1.15 1.35 1.51.42.15.63.25.74.31.21.14.32.34.32.57 0 .45-.35.78-.83.78-.51 0-.92-.26-1.17-.73l-.69.67c.49.73 1.09 1.05 1.9 1.05 1.11 0 1.9-.74 1.9-1.81.02-.89-.35-1.29-1.57-1.74zm1.92.65c0 1.62 1.27 2.87 2.9 2.87.46 0 .86-.09 1.34-.32v-1.26c-.43.43-.81.6-1.29.6-1.08 0-1.85-.78-1.85-1.9 0-1.06.79-1.89 1.8-1.89.51 0 .9.18 1.34.62V7.38c-.47-.24-.86-.34-1.32-.34-1.61 0-2.92 1.28-2.92 2.88zm12.76.94l-1.47-3.7h-1.17l2.33 5.64h.58l2.37-5.64h-1.16l-1.48 3.7zm3.13 1.8h3.04v-.93h-1.97v-1.48h1.9v-.93h-1.9V8.1h1.97v-.94h-3.04v5.5zm7.29-3.87c0-1.03-.71-1.62-1.95-1.62h-1.59v5.5h1.07v-2.21h.14l1.48 2.21h1.32l-1.73-2.32c.81-.17 1.26-.72 1.26-1.56zm-2.16.91h-.31V8.03h.33c.67 0 1.03.28 1.03.82 0 .55-.36.85-1.05.85z"
                                                        fill="#231F20" />
                                                    <path
                                                        d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z"
                                                        fill="url(#pi-paint0_linear)" />
                                                    <path opacity=".65"
                                                        d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z"
                                                        fill="url(#pi-paint1_linear)" />
                                                    <path
                                                        d="M36.57 7.506c0-.1-.07-.15-.18-.15h-.16v.48h.12v-.19l.14.19h.14l-.16-.2c.06-.01.1-.06.1-.13zm-.2.07h-.02v-.13h.02c.06 0 .09.02.09.06 0 .05-.03.07-.09.07z"
                                                        fill="#231F20" />
                                                    <path
                                                        d="M36.41 7.176c-.23 0-.42.19-.42.42 0 .23.19.42.42.42.23 0 .42-.19.42-.42 0-.23-.19-.42-.42-.42zm0 .77c-.18 0-.34-.15-.34-.35 0-.19.15-.35.34-.35.18 0 .33.16.33.35 0 .19-.15.35-.33.35z"
                                                        fill="#231F20" />
                                                    <path
                                                        d="M37 12.984S27.09 19.873 8.976 23h26.023a2 2 0 002-1.984l.024-3.02L37 12.985z"
                                                        fill="#F48120" />
                                                    <defs>
                                                        <linearGradient id="pi-paint0_linear" x1="21.657" y1="12.275"
                                                            x2="19.632" y2="9.104" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#F89F20" />
                                                            <stop offset=".25" stop-color="#F79A20" />
                                                            <stop offset=".533" stop-color="#F68D20" />
                                                            <stop offset=".62" stop-color="#F58720" />
                                                            <stop offset=".723" stop-color="#F48120" />
                                                            <stop offset="1" stop-color="#F37521" />
                                                        </linearGradient>
                                                        <linearGradient id="pi-paint1_linear" x1="21.338" y1="12.232"
                                                            x2="18.378" y2="6.446" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#F58720" />
                                                            <stop offset=".359" stop-color="#E16F27" />
                                                            <stop offset=".703" stop-color="#D4602C" />
                                                            <stop offset=".982" stop-color="#D05B2E" />
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </li>


                                            <li class="list-payment__item paypal">
                                                <svg class="icon icon--full-color" viewBox="0 0 38 24"
                                                    xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img"
                                                    aria-labelledby="pi-paypal">
                                                    <title id="pi-paypal">PayPal</title>
                                                    <path opacity=".07"
                                                        d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                                    <path fill="#fff"
                                                        d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                                    <path fill="#003087"
                                                        d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z" />
                                                    <path fill="#3086C8"
                                                        d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z" />
                                                    <path fill="#012169"
                                                        d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z" />
                                                </svg>
                                            </li>








                                            <li class="list-payment__item google_pay">
                                                <svg class="icon icon--full-color" xmlns="http://www.w3.org/2000/svg"
                                                    role="img" viewBox="0 0 38 24" width="38" height="24"
                                                    aria-labelledby="pi-google_pay">
                                                    <title id="pi-google_pay">Google Pay</title>
                                                    <path
                                                        d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                                                        fill="#000" opacity=".07" />
                                                    <path
                                                        d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"
                                                        fill="#FFF" />
                                                    <path
                                                        d="M18.093 11.976v3.2h-1.018v-7.9h2.691a2.447 2.447 0 0 1 1.747.692 2.28 2.28 0 0 1 .11 3.224l-.11.116c-.47.447-1.098.69-1.747.674l-1.673-.006zm0-3.732v2.788h1.698c.377.012.741-.135 1.005-.404a1.391 1.391 0 0 0-1.005-2.354l-1.698-.03zm6.484 1.348c.65-.03 1.286.188 1.778.613.445.43.682 1.03.65 1.649v3.334h-.969v-.766h-.049a1.93 1.93 0 0 1-1.673.931 2.17 2.17 0 0 1-1.496-.533 1.667 1.667 0 0 1-.613-1.324 1.606 1.606 0 0 1 .613-1.336 2.746 2.746 0 0 1 1.698-.515c.517-.02 1.03.093 1.49.331v-.208a1.134 1.134 0 0 0-.417-.901 1.416 1.416 0 0 0-.98-.368 1.545 1.545 0 0 0-1.319.717l-.895-.564a2.488 2.488 0 0 1 2.182-1.06zM23.29 13.52a.79.79 0 0 0 .337.662c.223.176.5.269.785.263.429-.001.84-.17 1.146-.472.305-.286.478-.685.478-1.103a2.047 2.047 0 0 0-1.324-.374 1.716 1.716 0 0 0-1.03.294.883.883 0 0 0-.392.73zm9.286-3.75l-3.39 7.79h-1.048l1.281-2.728-2.224-5.062h1.103l1.612 3.885 1.569-3.885h1.097z"
                                                        fill="#5F6368" />
                                                    <path
                                                        d="M13.986 11.284c0-.308-.024-.616-.073-.92h-4.29v1.747h2.451a2.096 2.096 0 0 1-.9 1.373v1.134h1.464a4.433 4.433 0 0 0 1.348-3.334z"
                                                        fill="#4285F4" />
                                                    <path
                                                        d="M9.629 15.721a4.352 4.352 0 0 0 3.01-1.097l-1.466-1.14a2.752 2.752 0 0 1-4.094-1.44H5.577v1.17a4.53 4.53 0 0 0 4.052 2.507z"
                                                        fill="#34A853" />
                                                    <path
                                                        d="M7.079 12.05a2.709 2.709 0 0 1 0-1.735v-1.17H5.577a4.505 4.505 0 0 0 0 4.075l1.502-1.17z"
                                                        fill="#FBBC04" />
                                                    <path
                                                        d="M9.629 8.44a2.452 2.452 0 0 1 1.74.68l1.3-1.293a4.37 4.37 0 0 0-3.065-1.183 4.53 4.53 0 0 0-4.027 2.5l1.502 1.171a2.715 2.715 0 0 1 2.55-1.875z"
                                                        fill="#EA4335" />
                                                </svg>

                                            </li>






                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <script type="text/javascript">
                    function initDropdownColumnsFooter() {
                        var footerColumnTitle = document.querySelectorAll('[data-toggle-column-footer]');
                        if (footerColumnTitle.length > 0) {
                            for (i = 0; i < footerColumnTitle.length; i++) {
                                (function (i) {
                                    footerColumnTitle[i].addEventListener('click', function (event) {
                                        var $this = event.target;
                                        if ($this.classList.contains('is-clicked')) {
                                            $this.classList.remove('is-clicked');
                                        } else {
                                            $this.classList.add('is-clicked');
                                        }
                                    });
                                })(i);
                            }
                        }
                    }
                    initDropdownColumnsFooter();
                </script>


            </div>

        </div>

        <section id="shopify-section-halo-toolbar-mobile" class="shopify-section">
            <link
                href="//www.fedus.in/cdn/shop/t/3/assets/component-toolbar-mobile.css?v=176060911371727712361672341185"
                rel="stylesheet" type="text/css" media="all" />
            <div class="halo-sticky-toolbar-mobile">
                <div class="bottom-bar">
                    <ul class="bottom-bar--list">

                        <li class="list-item" style="--font-size: 12px; --font-weight: 500; --icon-size: 20px">
                            <a href="/">
                                <span class="icon"><svg aria-hidden="true" focusable="false" data-prefix="fal"
                                        data-icon="home-lg-alt" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 576 512" class="svg-inline--fa fa-home-lg-alt fa-w-18 fa-3x">
                                        <path fill="currentColor"
                                            d="M573.48 219.91L310.6 8a35.85 35.85 0 0 0-45.19 0L2.53 219.91a6.71 6.71 0 0 0-1 9.5l14.2 17.5a6.82 6.82 0 0 0 9.6 1L64 216.72V496a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V216.82l38.8 31.29a6.83 6.83 0 0 0 9.6-1l14.19-17.5a7.14 7.14 0 0 0-1.11-9.7zM240 480V320h96v160zm240 0H368V304a16 16 0 0 0-16-16H224a16 16 0 0 0-16 16v176H96V190.92l187.71-151.4a6.63 6.63 0 0 1 8.4 0L480 191z"
                                            class=""></path>
                                    </svg></span>
                                <span class="text">Home</span>

                            </a>
                        </li>
                        <li class="list-item" style="--font-size: 12px; --font-weight: 500; --icon-size: 20px">
                            <a role="link" aria-disabled="true" data-search-mobile>
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 32 32"
                                        class="icon icon-search">
                                        <path
                                            d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z">
                                        </path>
                                    </svg></span>
                                <span class="text">Search</span>

                            </a>
                        </li>
                        <li class="list-item" style="--font-size: 12px; --font-weight: 500; --icon-size: 20px">
                            <a href="/collections">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 384.97 384.97"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                                        <g>
                                            <g id="Grid">
                                                <path
                                                    d="M144.364,0H24.061C10.767,0,0,10.767,0,24.061v120.303c0,13.281,10.767,24.061,24.061,24.061h120.303    c13.293,0,24.061-10.779,24.061-24.061V24.061C168.424,10.767,157.657,0,144.364,0z M144.364,144.364H24.061V24.061h120.303    V144.364z">
                                                </path>
                                                <path
                                                    d="M360.909,0H240.606c-13.293,0-24.061,10.767-24.061,24.061v120.303c0,13.281,10.767,24.061,24.061,24.061h120.303    c13.281,0,24.061-10.779,24.061-24.061V24.061C384.97,10.767,374.191,0,360.909,0z M360.909,144.364H240.606V24.061h120.303    V144.364z">
                                                </path>
                                                <path
                                                    d="M360.909,216.545H240.606c-13.293,0-24.061,10.779-24.061,24.061v120.303c0,13.293,10.767,24.061,24.061,24.061h120.303    c13.281,0,24.061-10.767,24.061-24.061V240.606C384.97,227.313,374.191,216.545,360.909,216.545z M360.909,360.909H240.606    V240.606h120.303V360.909z">
                                                </path>
                                                <path
                                                    d="M144.364,216.545H24.061C10.767,216.545,0,227.325,0,240.606v120.303c0,13.293,10.767,24.061,24.061,24.061h120.303    c13.293,0,24.061-10.767,24.061-24.061V240.606C168.424,227.313,157.657,216.545,144.364,216.545z M144.364,360.909H24.061    V240.606h120.303V360.909z">
                                                </path>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg></span>
                                <span class="text">Collection</span>

                            </a>
                        </li>
                        <li class="list-item" style="--font-size: 12px; --font-weight: 500; --icon-size: 20px">
                            <a role="link" aria-disabled="true" data-open-auth-sidebar>
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 32 32"
                                        aria-hidden="true" focusable="false" role="presentation"
                                        class="icon icon-account">
                                        <path
                                            d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 16 8 C 13.25 8 11 10.25 11 13 C 11 14.515625 11.707031 15.863281 12.78125 16.78125 C 10.53125 17.949219 9 20.300781 9 23 L 11 23 C 11 20.226563 13.226563 18 16 18 C 18.773438 18 21 20.226563 21 23 L 23 23 C 23 20.300781 21.46875 17.949219 19.21875 16.78125 C 20.292969 15.863281 21 14.515625 21 13 C 21 10.25 18.75 8 16 8 Z M 16 10 C 17.667969 10 19 11.332031 19 13 C 19 14.667969 17.667969 16 16 16 C 14.332031 16 13 14.667969 13 13 C 13 11.332031 14.332031 10 16 10 Z">
                                        </path>
                                    </svg></span>
                                <span class="text">Account</span>

                            </a>
                        </li>
                        <li class="list-item" style="--font-size: 12px; --font-weight: 500; --icon-size: 20px">
                            <a role="link" aria-disabled="true" data-cart-sidebar>
                                <span class="icon"><svg viewbox="0 0 30 30" class="icon icon-cart"
                                        enable-background="new 0 0 30 30">
                                        <g>
                                            <g>
                                                <path
                                                    d="M20,6V5c0-2.761-2.239-5-5-5s-5,2.239-5,5v1H4v24h22V6H20z M12,5c0-1.657,1.343-3,3-3s3,1.343,3,3v1h-6V5z M24,28H6V8h4v3    h2V8h6v3h2V8h4V28z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg></span>
                                <span class="text">Cart</span>

                                <div class="cart-count-bubble"><span class="text" aria-hidden="true"
                                        data-cart-count>0</span><span class="visually-hidden">0 items</span>
                                </div>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <style>
                .halo-sticky-toolbar-mobile {
                    background: #ffffff;
                    border: 1px solid #ffffff;
                }

                .halo-sticky-toolbar-mobile span {
                    color: #232323;
                }

                .halo-sticky-toolbar-mobile span.icon svg {
                    fill: #232323;
                }
            </style>
            <script>
                const buttons = document.querySelectorAll('[data-bar-content]');
                if (buttons.length) {
                    buttons.forEach((button) => {
                        button.addEventListener('click', (event) => {
                            event.preventDefault();
                            if (event.target.nextSibling.classList.contains('show')) {
                                event.target.nextSibling.classList.remove('show');
                                document.querySelector('body').classList.remove('show-sidebar-content');
                            } else {
                                event.target.nextSibling.classList.add('show');
                                document.querySelector('body').classList.add('show-sidebar-content');
                            }
                        })
                    });
                    document.querySelectorAll('[data-close-content-sidebar]').forEach((button) => {
                        button.addEventListener('click', (event) => {
                            event.target.closest('.bottom-bar--content').classList.remove('show');
                        });
                    })
                }
                $('body').addClass('sticky-toolbar-mobile');
            </script>


        </section>

        <ul hidden>
            <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
        </ul>

        <script src="//www.fedus.in/cdn/shop/t/3/assets/slider.js?v=9514034325343619841672341188"
            defer="defer"></script>
        <script src="//www.fedus.in/cdn/shop/t/3/assets/theme.js?v=45349999077096969861677208092"
            defer="defer"></script>
        <!-- <script src="//www.fedus.in/cdn/shop/t/3/assets/halo-quick-search.js?v=46807827920085642751672341186" defer="defer"></script> -->

    </div>
    <div class="halo-popup newsletter-success-modal customPopup-small" data-newsletter-success-modal
        id="newsletter-success-modal">
        <div class="halo-popup-wrapper">
            <button type="button" class="close close-modal" aria-label="Translation missing: en.cart.ajax_cart.close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path
                        d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                </svg>
            </button>
            <div class="halo-modal-body success">
                <p class="form-message form-message--success" tabindex="-1" data-form-status>
                    <svg viewBox="0 0 512 512" class="icon icon-check" id="icon-check">
                        <path
                            d="M435.848 83.466L172.804 346.51l-96.652-96.652c-4.686-4.686-12.284-4.686-16.971 0l-28.284 28.284c-4.686 4.686-4.686 12.284 0 16.971l133.421 133.421c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-28.284-28.284c-4.686-4.686-12.284-4.686-16.97 0z"
                            class=""></path>
                    </svg>
                    <span> Thanks for subscribing!</span>
                </p>
            </div>
            <div class="halo-modal-body error">
                <p class="form-message form-message--error" tabindex="-1" data-form-status>
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error"
                        viewBox="0 0 13 13">
                        <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2" />
                        <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7" />
                        <path
                            d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z"
                            fill="white" />
                        <path
                            d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z"
                            fill="white" stroke="#EB001B" stroke-width="0.7">
                    </svg>

                    <span>This email has been registered!</span>
                </p>
            </div>
        </div>
    </div>

    <div class="halo-lookbook-popup style-1" data-lookbook-popup>
        <div class="halo-popup-wrapper style-1">
            <div class="halo-popup-content lookbook-content custom-scrollbar"></div>
        </div>
    </div>

    <script>
        window.currencySymbol = "₹"
    </script>

    <div class="halo-lookbook-popup-mobile" data-lookbook-popup-mobile>
        <div class="halo-popup-wrapper-mobile" data-lookbook-popup-mobile-wrapper>
            <h2 class="mobile-popup-header">
                <span>Shop the look</span>
                <button type="button" data-close-lookbook-modal class="close close-modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path
                            d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                    </svg>
                </button>
            </h2>
            <div class='items-scroll scroll-snap-mobile disable-srollbar'>
                <div class="halo-popup-container-mobile" data-lookbook-mobile-images-container>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.currencySymbol = "₹"
    </script>



    <div class="halo-popup halo-search-popup" data-search-popup id="halo-search-popup">
        <div class="halo-popup-wrapper">
            <div class="halo-popup-header customPopup-header">
                <div class="container">
                    <button type="button" class="halo-sidebar-popup" data-search-close-popup aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path
                                d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="halo-popup-content custom-scrollbar">

                <predictive-search class="search-modal__form" data-loading-text="Loading..." data-product-to-show="3">
                    <details class="search_details">
                        <summary class="header__search-full" aria-haspopup="dialog" aria-label="Search">
                            <div class="container">
                                <button type="button" class="header-search-close" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                        <path
                                            d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                                    </svg>
                                </button>
                                <form action="/search" method="get" role="search" class="search search-modal__form">
                                    <div class="field">
                                        <input class="search__input field__input form-input-placeholder"
                                            id="Search-In-Modal" type="search" name="q" value=""
                                            placeholder="Search products..." autocomplete="off" role="combobox"
                                            aria-expanded="false" aria-owns="predictive-search-results-list"
                                            aria-controls="predictive-search-results-list" aria-haspopup="listbox"
                                            aria-autocomplete="list" autocorrect="off" autocomplete="off"
                                            autocapitalize="off" spellcheck="false">
                                        <input type="hidden" name="options[prefix]" value="last">
                                        <label class="field__label hiddenLabels" for="Search-In-Modal">
                                            Search
                                        </label>
                                        <button class="button search__button field__button focus-inset"
                                            aria-label="Search">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path
                                                    d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                                <div class="quickSearchResultsBlock quickSearchResultsWidget quickSearchResultsWrap"
                                    data-quick-trending-products>
                                    <div class="quickSearchResults custom-scrollbar">
                                        <div class="container">
                                            <div class="search-block quickSearchTrending">
                                                <h3 class="search-block-title text-left">
                                                    <span class="text">Trending Now</span>

                                                </h3>
                                                <ul class="list-item list-unstyled clearfix">

                                                    <li class="item">
                                                        <a href="/search?q=dempus*&amp;type=product" class="link">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                                <path
                                                                    d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                            </svg>
                                                            <span class="text">dempus</span>
                                                        </a>
                                                    </li>

                                                    <li class="item">
                                                        <a href="/search?q=sample*&amp;type=product" class="link">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                                <path
                                                                    d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                            </svg>
                                                            <span class="text">sample</span>
                                                        </a>
                                                    </li>

                                                    <li class="item">
                                                        <a href="/search?q=magnis*&amp;type=product" class="link">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                                <path
                                                                    d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                            </svg>
                                                            <span class="text">magnis</span>
                                                        </a>
                                                    </li>

                                                    <li class="item">
                                                        <a href="/search?q=loremous-saliduar*&amp;type=product"
                                                            class="link">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                                <path
                                                                    d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                            </svg>
                                                            <span class="text">loremous saliduar</span>
                                                        </a>
                                                    </li>

                                                    <li class="item">
                                                        <a href="/search?q=naminos*&amp;type=product" class="link">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                                <path
                                                                    d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                            </svg>
                                                            <span class="text">naminos</span>
                                                        </a>
                                                    </li>

                                                    <li class="item">
                                                        <a href="/search?q=dinterdum*&amp;type=product" class="link">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                                <path
                                                                    d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                            </svg>
                                                            <span class="text">dinterdum</span>
                                                        </a>
                                                    </li>








                                                </ul>
                                            </div>
                                            <div class="search-block quickSearchProduct">
                                                <h3 class="search-block-title text-left">
                                                    <span class="text">Popular Products</span>
                                                </h3>
                                                <div class="search-block-content">
                                                    <div class="halo-block">

                                                        <div class="products-grid column-3 disable-srollbar">

                                                            <div class="product">


                                                                <div class="product-item">
                                                                    <div class="card">
                                                                        <div
                                                                            class="card-product card--text-only card--soft">
                                                                            <div class="card-product__wrapper">
                                                                                <div
                                                                                    class="card-media card-media--square">
                                                                                    <svg class="placeholder-svg"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 525.5 525.5">
                                                                                        <path
                                                                                            d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                        <path
                                                                                            d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                        <path
                                                                                            d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                        <path
                                                                                            d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-information">
                                                                                <div
                                                                                    class="card-information__wrapper text-center">

                                                                                    <a class="card-title link-underline capitalize text-center"
                                                                                        role="link"
                                                                                        aria-disabled="true">
                                                                                        <span class="text">
                                                                                            Example product title
                                                                                        </span>
                                                                                    </a>
                                                                                    <div
                                                                                        class="card-information__group">
                                                                                        <div class="card-price">

                                                                                            <div
                                                                                                class="price price--sold-out ">
                                                                                                <dl>
                                                                                                    <div
                                                                                                        class="price__regular">
                                                                                                        <dt>
                                                                                                            <span
                                                                                                                class="visually-hidden visually-hidden--inline">Regular
                                                                                                                price</span>
                                                                                                        </dt>
                                                                                                        <dd
                                                                                                            class="price__last">
                                                                                                            <span
                                                                                                                class="price-item price-item--regular">
                                                                                                                ₹. 19.99
                                                                                                            </span>
                                                                                                        </dd>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="price__sale">
                                                                                                        <dt
                                                                                                            class="price__compare">
                                                                                                            <span
                                                                                                                class="visually-hidden visually-hidden--inline">Regular
                                                                                                                price</span>
                                                                                                        </dt>
                                                                                                        <dd
                                                                                                            class="price__compare">
                                                                                                            <s
                                                                                                                class="price-item price-item--regular">

                                                                                                            </s>
                                                                                                        </dd>
                                                                                                        <dt>
                                                                                                            <span
                                                                                                                class="visually-hidden visually-hidden--inline">Sale
                                                                                                                price</span>
                                                                                                        </dt>
                                                                                                        <dd
                                                                                                            class="price__last">
                                                                                                            <span
                                                                                                                class="price-item price-item--sale">
                                                                                                                ₹. 19.99
                                                                                                            </span>
                                                                                                        </dd>
                                                                                                    </div>
                                                                                                    <small
                                                                                                        class="unit-price caption hidden">
                                                                                                        <dt
                                                                                                            class="visually-hidden">
                                                                                                            Unit price
                                                                                                        </dt>
                                                                                                        <dd
                                                                                                            class="price__last">
                                                                                                            <span></span>
                                                                                                            <span
                                                                                                                aria-hidden="true">/</span>
                                                                                                            <span
                                                                                                                class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                                                            <span>
                                                                                                            </span>
                                                                                                        </dd>
                                                                                                    </small>
                                                                                                </dl>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product">


                                                                <div class="product-item">
                                                                    <div class="card">
                                                                        <div
                                                                            class="card-product card--text-only card--soft">
                                                                            <div class="card-product__wrapper">
                                                                                <div
                                                                                    class="card-media card-media--square">
                                                                                    <svg class="placeholder-svg"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 525.5 525.5">
                                                                                        <path
                                                                                            d="M401.7 288.4c-.7-.5-1.6-.5-2.4 0l-.3-.7c-2.6-5.8-7.1-10.1-12.8-12.2l-77.8-31.8-7.1-3.9 1.3-1.7c.2-.3.2-.8-.1-1-.3-.2-.8-.2-1 .1l-1.4 1.9-12-6.6.4-4.5c.1-.8-.5-1.5-1.3-1.5-.8-.1-1.5.5-1.5 1.3l-.1.9-1.4 1.7-13.4-7.4.4-4.3c.1-.8-.5-1.5-1.3-1.6-.8-.1-1.5.5-1.6 1.3l-.1 1-1.2 1.6-13.3-7.3.5-4.4c.1-.8-.5-1.5-1.2-1.6-.8-.1-1.5.5-1.6 1.2l-.4 3.2-17.7-9.8c-5.3-3.1-11.6-3.1-16.5.1-4.6 3-7 8.2-6.3 13.7l1.3 12.6c-8.3 6.5-17.7 10.1-27.2 10.1-8.8 0-17-2.3-24.5-6.7-5.9-3.5-11.1-8.2-15.4-14-2-2.6-5.1-4.9-7.7-4.3-.8.2-2.2.9-2.6 3.2v78l-3.7-.3c-2.5-.2-4.7 1.7-5.3 4.7l-2.3 15.5c-.4 2.2 0 4.4 1.3 6.1.9 1.2 2.2 2 3.7 2.1 19.4 1.2 58.1 2.5 101 2.5 32.5 0 67.4-.8 98.2-3 38.9-2.8 62.8-11.8 73.1-27.4.7-1.1 1.4-2.2 2-3.3.4-1.3.2-2.8-.7-3.5zm-94.5-42.2l.1.1 22 9c-12.2 2.2-24.9.5-36.1-4.9l6.4-8.3 7.6 4.1zm-8.8-4.8l-6.5 8.4-1.5-.7c-.7-.3-1.6-.1-1.9.6-.3.7-.1 1.6.6 1.9l.9.5-2.6 3.3c-.5-.3-1-.5-1.5-.6l1.8-19.2 10.7 5.8zm-12.7 16.3s.1 0 0 0zm-3.2-25.1l-7.2 9-2.7-1.3c-.7-.3-1.6-.1-1.9.6-.3.7-.1 1.6.6 1.9l2.1 1-3.6 4.5c-.5-.3-1-.5-1.5-.7l2.2-21.6 12 6.6zm-14.5 18c.1 0 .1 0 0 0zm-2.6-27.4l-7.4 9.9-2.5-1.2c-.7-.3-1.6-.1-1.9.6-.3.7-.1 1.6.6 1.9l2.1 1-4.3 5.8-1.2-.6 2.8-24 11.8 6.6zm-52-7.4c-.6-4.5 1.3-8.6 5-11 3.7-2.4 8.4-2.6 12.4-.6l-.3.6c-.2.4-.4.9-.6 1.3-.1.3-.3.5-.4.8-2.4 4.8-5.4 9.3-8.8 13.4-2 2.4-4.1 4.5-6.3 6.4l-1-10.9zm-76.1 2.3v-.5c.1-.4.2-.9.5-.9.8-.2 2.9.8 4.7 3.2 4.5 6.1 10 11 16.2 14.7 7.9 4.7 16.7 7.1 26 7.1 14 0 27.6-7 38.3-19.7 3.6-4.3 6.7-8.9 9.2-14 .1-.2.2-.4.3-.7.2-.5.5-1 .7-1.4.1-.1.1-.3.2-.4l17.4 9.6-2.9 25c-4.2.1-7.5 3.5-7.5 7.7 0 .8.1 1.6.4 2.4.2.7 1.1 1.1 1.8.9.7-.2 1.1-1.1.9-1.8-.2-.5-.2-1-.2-1.5 0-2.5 1.9-4.5 4.3-4.8l-.4 3.7c-.1.8.5 1.5 1.2 1.6h.2c.7 0 1.3-.5 1.4-1.3l.1-1 1.3-1.7c.9.9 1.5 2.1 1.5 3.5 0 2.7-2.2 4.8-4.8 4.8-.8 0-1.4.6-1.4 1.4 0 .8.6 1.4 1.4 1.4 4.2 0 7.7-3.4 7.7-7.7 0-2.3-1-4.4-2.7-5.8l4.5-6 5.8 2.9c.2.1.4.1.6.1.5 0 1-.3 1.3-.8.3-.7.1-1.6-.6-1.9l-5.3-2.6 7.4-9.9 1.1.6-2.3 22.8c-4 .2-7.2 3.6-7.2 7.7 0 .6.1 1.2.2 1.7.2.8.9 1.2 1.7 1.1.8-.2 1.2-.9 1.1-1.7-.1-.4-.1-.7-.1-1.1 0-2.4 1.8-4.4 4.1-4.8l-.4 3.7c-.1.8.5 1.5 1.3 1.6h.1c.7 0 1.3-.5 1.4-1.3l.1-.9 1.5-1.9c.9.9 1.5 2.1 1.5 3.5 0 2.7-2.2 4.8-4.8 4.8-.8 0-1.4.6-1.4 1.4s.6 1.4 1.4 1.4c4.2 0 7.7-3.4 7.7-7.7 0-2.3-1-4.3-2.6-5.8l3.7-4.7 5.9 2.9c.2.1.4.1.6.1.5 0 1-.3 1.3-.8.3-.7.1-1.6-.6-1.9l-5.3-2.6 7.1-9 1.4.8-1.9 20.4c-3.9.3-7 3.6-7 7.6 0 .8.1 1.6.4 2.3.2.7 1 1.2 1.8.9.7-.2 1.2-1 .9-1.8-.1-.5-.2-1-.2-1.5 0-2.4 1.7-4.3 3.9-4.7l-.4 3.7c-.1.8.5 1.5 1.3 1.5h.1c.7 0 1.3-.6 1.4-1.3l.1-.9 1.5-2c1 .9 1.7 2.2 1.7 3.6 0 2.7-2.2 4.8-4.8 4.8-.8 0-1.4.6-1.4 1.4s.6 1.4 1.4 1.4c4.2 0 7.7-3.4 7.7-7.7 0-2.4-1.1-4.5-2.8-5.9l2.7-3.5c8.6 4.2 17.9 6.3 27.4 6.3 4.8 0 9.5-.5 14.2-1.6.2-.1.4-.2.6-.4l51.6 21.1c4.2 1.5 7.6 4.5 10 8.4-2.5 2-10.2 7.5-24 11.9-.4.1-.6.5-.5.9.1.3.4.5.7.5h.2c13.8-4.4 21.4-9.8 24.2-12 .2.3.4.7.5 1l.6 1.4c-.6.4-1.2.9-1.8 1.3-30.8 22.3-83 18.6-133.5 14.9l-46.9-4.2c0-1.1-.1-2.2-.1-3.3 10 1.1 66 6.9 103.8 7.3.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7-38.1-.5-94.7-6.4-103.9-7.3-1.4-14.1-7.8-29.6-14-38.7 14.6-3.2 28.2-11.3 38.4-23l5.4-6.2 1.2.6c.7.3 1.6.1 1.9-.6.3-.7.1-1.6-.6-1.9l-2.2-1.1c-.6-.3-1.3-.1-1.7.3l-6.1 7c-12.4 14.2-29.9 22.8-47.9 23.6-1 0-2 .1-3 .1-19.4 0-38.4-7.6-48.7-19.5v-19.8c-.2.7-.2.7-.2.6zm0 24.2c11.1 11.1 29.8 18.1 48.7 18.1 1.1 0 2.1 0 3.1-.1l3.9-.3c2.1 2.9 4.3 6.5 6.2 10.5.1.3.4.4.6.4.1 0 .2 0 .3-.1.4-.2.5-.6.3-.9-1.8-3.7-3.8-7.2-5.9-10.1 1-.1 2-.3 3-.5 0 .1.1.2.1.3 6.8 9.5 13.9 27.4 14.2 42.3l-3-.3v-.2c-.2-7.1-2.1-15.7-5.3-24.3-.1-.4-.6-.5-.9-.4-.4.1-.5.6-.4.9 3.2 8.4 5.1 16.8 5.2 23.8l-70.3-6.4v-52.7zm260.6 51.2c-9.8 14.9-33 23.5-70.9 26.2-71.5 5.1-164.8 2.5-198.8.5-.7 0-1.3-.5-1.6-.9-.7-1-1-2.4-.7-3.8l2.3-15.5c.3-1.4 1.2-2.3 2.2-2.3h.1L258 309.1l3.5.3c2 .1 4 .3 6 .4.6 0 1.2.1 1.8.1 2.2.2 4.3.3 6.5.5h.1c2.1.1 4.2.3 6.3.4.5 0 1.1.1 1.6.1 2.1.1 4.3.3 6.4.4l6.3.3c.5 0 1 0 1.6.1 4.2.2 8.4.3 12.6.4h1.5c2.1 0 4.1.1 6.2.1h6.8c1.2 0 2.4-.1 3.6-.1.6 0 1.2 0 1.8-.1 1.2 0 2.4-.1 3.6-.2.5 0 1.1-.1 1.6-.1 1.7-.1 3.3-.2 4.9-.3h.1c1.7-.1 3.3-.3 4.9-.5.5-.1 1-.1 1.5-.2 1.1-.1 2.3-.3 3.4-.4.6-.1 1.1-.2 1.7-.2 1.1-.2 2.2-.3 3.3-.5.5-.1 1-.2 1.5-.2 1.5-.3 3-.5 4.5-.9h.1c1.5-.3 3-.7 4.5-1 .5-.1.9-.2 1.4-.4 1-.3 2-.5 3-.8.5-.1 1-.3 1.5-.5 1-.3 2-.6 2.9-.9.4-.1.9-.3 1.3-.5 1.4-.5 2.7-1 4-1.5h.1c1.3-.5 2.6-1.1 3.9-1.7l1.2-.6c.9-.4 1.8-.9 2.7-1.3.4-.2.9-.5 1.3-.7.9-.5 1.7-1 2.5-1.5.4-.2.8-.5 1.1-.7 1.2-.8 2.4-1.5 3.5-2.3.4-.3.8-.6 1.3-.9.1-.1.2-.1.2-.2.1 0 0 .3-.2.5z" />
                                                                                        <path
                                                                                            d="M192.5 315.8c-2.7-.1-5.3-.1-7.8-.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7 2.6.1 5.2.1 7.8.2.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7z" />
                                                                                        <path
                                                                                            d="M227.2 312.5c-25.2-2.1-60.2-5.1-83.3-7.7-2.8-.3-5.4 1.7-5.8 4.5-.2 1.5.2 3 1.1 4.2.9 1.2 2.3 1.9 3.8 1.9 6.2.3 19 .9 34.5 1.4.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7-15.5-.5-28.2-1.1-34.5-1.4-1.1-.1-2.1-.6-2.8-1.4-.7-.9-1-2-.8-3.1.3-2.1 2.2-3.5 4.3-3.3 23.2 2.6 58.1 5.6 83.4 7.7.4 0 .7-.3.8-.6 0-.5-.3-.8-.7-.8zm32.5 2.6s-10.3-.8-25.4-2c-.3 0-.7.3-.8.6 0 .4.3.7.6.8 15.1 1.2 25.4 2 25.4 2h.1c.4 0 .7-.3.7-.7.1-.3-.2-.7-.6-.7zm69.1-8.8c10.3-.2 20.1-1.2 29.1-3 .4-.1.6-.5.6-.8-.1-.4-.5-.6-.8-.6-8.9 1.8-18.6 2.8-28.8 3-.4 0-.7.3-.7.7-.1.4.2.7.6.7z" />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-information">
                                                                                <div
                                                                                    class="card-information__wrapper text-center">

                                                                                    <a class="card-title link-underline capitalize text-center"
                                                                                        role="link"
                                                                                        aria-disabled="true">
                                                                                        <span class="text">
                                                                                            Example product title
                                                                                        </span>
                                                                                    </a>
                                                                                    <div
                                                                                        class="card-information__group">
                                                                                        <div class="card-price">

                                                                                            <div
                                                                                                class="price price--sold-out ">
                                                                                                <dl>
                                                                                                    <div
                                                                                                        class="price__regular">
                                                                                                        <dt>
                                                                                                            <span
                                                                                                                class="visually-hidden visually-hidden--inline">Regular
                                                                                                                price</span>
                                                                                                        </dt>
                                                                                                        <dd
                                                                                                            class="price__last">
                                                                                                            <span
                                                                                                                class="price-item price-item--regular">
                                                                                                                ₹. 19.99
                                                                                                            </span>
                                                                                                        </dd>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="price__sale">
                                                                                                        <dt
                                                                                                            class="price__compare">
                                                                                                            <span
                                                                                                                class="visually-hidden visually-hidden--inline">Regular
                                                                                                                price</span>
                                                                                                        </dt>
                                                                                                        <dd
                                                                                                            class="price__compare">
                                                                                                            <s
                                                                                                                class="price-item price-item--regular">

                                                                                                            </s>
                                                                                                        </dd>
                                                                                                        <dt>
                                                                                                            <span
                                                                                                                class="visually-hidden visually-hidden--inline">Sale
                                                                                                                price</span>
                                                                                                        </dt>
                                                                                                        <dd
                                                                                                            class="price__last">
                                                                                                            <span
                                                                                                                class="price-item price-item--sale">
                                                                                                                ₹. 19.99
                                                                                                            </span>
                                                                                                        </dd>
                                                                                                    </div>
                                                                                                    <small
                                                                                                        class="unit-price caption hidden">
                                                                                                        <dt
                                                                                                            class="visually-hidden">
                                                                                                            Unit price
                                                                                                        </dt>
                                                                                                        <dd
                                                                                                            class="price__last">
                                                                                                            <span></span>
                                                                                                            <span
                                                                                                                aria-hidden="true">/</span>
                                                                                                            <span
                                                                                                                class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                                                            <span>
                                                                                                            </span>
                                                                                                        </dd>
                                                                                                    </small>
                                                                                                </dl>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product">


                                                                <div class="product-item">
                                                                    <div class="card">
                                                                        <div
                                                                            class="card-product card--text-only card--soft">
                                                                            <div class="card-product__wrapper">
                                                                                <div
                                                                                    class="card-media card-media--square">
                                                                                    <svg class="placeholder-svg"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 525.5 525.5">
                                                                                        <path
                                                                                            d="M381.3 247.3c.3-1.2 1.2-3.4 3.4-4.2l2.5-.9c.5-.2.8-.5.9-1l3.8-16.2c.1-.4 0-.8-.2-1.1-.2-.3-.6-.5-1-.6-61.1-8.3-93.8-.3-113.3 4.6-6.4 1.6-11.1 2.7-14.6 2.7s-8.2-1.1-14.6-2.7c-19.5-4.8-52.2-12.9-113.3-4.6-.4.1-.8.3-1 .6-.2.3-.3.7-.2 1.1l3.8 16.2c.1.5.5.9.9 1l2.5.9c2.2.8 3.1 3 3.4 4.2.4 1.4.7 3 1.1 4.6 1.8 7.6 4 17 7.9 25.9-7.6 8.2-13.4 15.3-16.2 18.9-.5.7-.8 1.5-.7 2.4.1.8.5 1.5 1 2 .5.7 1.9 2.6 4.6 3.4 2.4.7 4.6 1 6.6 1 7.8 0 13.4-4.7 17.5-9.4 6.7 5.9 15.6 9.7 27.8 9.7 43.9 0 52.1-24.5 57.5-40.7 3.3-9.8 5.4-15.3 11.4-15.3 6.1 0 8.3 5.6 11.6 15.4 5.4 16.1 13.5 40.6 57.4 40.6 12.4 0 21.4-4 28.2-10.1 4.2 4.8 9.8 9.8 17.8 9.8 2 0 4.2-.3 6.6-1.1 2.6-.8 4.1-2.7 4.6-3.4.6-.5.9-1.2 1-2 .1-.9-.1-1.7-.7-2.4-2.9-3.7-8.9-11-16.7-19.4 3.8-8.7 6-18 7.7-25.4.3-1.5.7-3 1-4.5zm-238.6 54.5c-2.1-.6-3.1-2.3-3.1-2.3-.1-.2-.2-.3-.4-.4-.1-.1-.1-.2-.1-.2 0-.1 0-.2.1-.3 2.7-3.4 8.2-10.1 15.3-17.9 2.5 4.9 5.5 9.6 9.4 13.5-6.9 7.9-13.1 10.1-21.2 7.6zm244.3-3.3c.1.1.1.2.1.3 0 .1 0 .2-.1.2l-.4.4s-1 1.7-3.1 2.3c-8.2 2.5-14.5.2-21.6-8 3.9-4 6.9-8.7 9.3-13.7 7.4 8.1 13 15 15.8 18.5zm-9.5-47.2c-4.8 20.6-12.1 51.7-45.8 51.7-41.8 0-49.2-22.3-54.7-38.6-3.1-9.3-5.8-17.4-14.3-17.4-8.3 0-11 8-14.1 17.3-5.5 16.3-12.9 38.7-54.8 38.7-33.7 0-41-31.1-45.8-51.7-.4-1.7-.8-3.2-1.1-4.7-.8-3.1-2.6-5.3-5.2-6.2l-1.7-.6-3.2-14c59.5-7.9 91.5 0 110.7 4.7 6.6 1.6 11.4 2.8 15.3 2.8s8.7-1.2 15.3-2.8c19.2-4.7 51.2-12.6 110.7-4.7l-3.2 14-1.7.6c-2.5.9-4.4 3.2-5.2 6.2-.5 1.5-.8 3.1-1.2 4.7z" />
                                                                                        <path
                                                                                            d="M383.9 232c0-4.1-13.7-4.1-13.7 0 0 2 3.4 3.1 6.8 3.1 3.5 0 6.9-1 6.9-3.1zm-6.8 1.7c-3.4 0-5.4-1.1-5.4-1.7s2.1-1.7 5.4-1.7c3.4 0 5.4 1.1 5.4 1.7s-2.1 1.7-5.4 1.7zM141.8 232c0 2 3.4 3.1 6.8 3.1s6.8-1.1 6.8-3.1c.1-4-13.6-4-13.6 0zm6.8 1.7c-3.4 0-5.4-1.1-5.4-1.7s2.1-1.7 5.4-1.7 5.4 1.1 5.4 1.7-2 1.7-5.4 1.7zM356 227.6c-7.9-2-36.2-7.4-68 5.5-5.7 2.3-9.4 8-9.1 14.1.9 22.6 7 52.6 48.7 52.6 12.9 0 23.1-3.8 30.2-11.4 11.3-12.1 12.7-30.8 11.8-44.5-.6-7.9-6-14.4-13.6-16.3zm-67.5 6.8c15.7-6.4 30.5-8.2 42.4-8.2 11.9 0 20.8 1.8 24.7 2.8 5.3 1.3 9.4 5.1 11.4 10h-.1c-.1 0-14.3 1.7-36.4 3.5-9 .7-20.2 1.6-32.9 2.2h-.8c-.1 0-.2 0-.3.1-5 .3-10.2.5-15.6.7-.2 0-.3.1-.5.1.4-5.1 3.5-9.4 8.1-11.2zm39.1 64c-39.9 0-46.2-28.5-47.2-50.4.2.1.3.1.5.1 5.8-.2 11.4-.4 16.7-.7 28.4.1 40.9 18.3 51.9 34.4 1.6 2.4 3.2 4.7 4.8 6.9.2.2.4.4.7.5-6.8 6.1-15.9 9.2-27.4 9.2zm29.2-11.1c0-.1-.1-.3-.2-.4-1.6-2.2-3.1-4.4-4.7-6.8-8.8-12.9-19.4-28.3-39.2-33.7 6.5-.4 12.4-.9 17.6-1.3 10.4 5.8 21.4 14.7 33.6 27.3.3.3.6.4 1 .4h.1c-1.8 5.4-4.4 10.4-8.2 14.5zm9-17c-11-11.2-21.1-19.6-30.6-25.5 19.5-1.6 31.9-3.1 32-3.1.2 0 .4-.1.5-.2.2.8.3 1.6.3 2.5.5 6.7.5 16.7-2.2 26.3zM238 233c-31.7-12.9-60-7.5-68-5.5-7.6 1.9-13.1 8.5-13.6 16.4-.9 13.6.5 32.4 11.8 44.5 7.1 7.6 17.3 11.4 30.2 11.4 41.7 0 47.8-30 48.7-52.6.3-6.2-3.4-11.8-9.1-14.2zm-67.6-4.1c7.7-1.9 34.9-7.2 65.7 4.9-8 .9-14.7 1.5-22.6 2.2-5.5.5-11.6 2.6-18.3 6.3-21.8-1.7-35.8-3.4-36-3.4h-.3c2.1-4.9 6.2-8.6 11.5-10zM157.9 244c.1-.9.2-1.8.4-2.6.2.2.4.3.7.3.1 0 12.5 1.5 32 3.1-9.6 6-19.7 14.4-30.7 25.7-2.8-9.7-2.8-19.8-2.4-26.5zm40.5 54.4c-11.5 0-20.6-3.1-27.4-9.2.3-.1.6-.2.8-.5 1.5-2.1 3-4.2 4.6-6.5 11.4-16.5 24.3-35.1 55.1-34 5.1.2 8.8.3 13.6.3.2 0 .3 0 .4-.1-.9 21.9-7.3 50-47.1 50zm46.8-52.7c-4.8 0-8.4-.1-13.5-.3-32.4-1.3-46.4 19-57.6 35.2-1.6 2.3-3 4.4-4.5 6.4-.1.2-.2.3-.2.5-3.9-4.2-6.5-9.2-8.3-14.5h.3c.4 0 .7-.1 1-.4 12.3-12.6 23.4-21.6 34-27.5 6.5-3.6 12.4-5.7 17.6-6.2 8.5-.7 15.7-1.5 24.7-2.4.5-.1 1-.4 1.2-.9 3.5 2.3 5.7 6.1 6 10.2-.4-.1-.5-.1-.7-.1z" />
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-information">
                                                                                <div
                                                                                    class="card-information__wrapper text-center">

                                                                                    <a class="card-title link-underline capitalize text-center"
                                                                                        role="link"
                                                                                        aria-disabled="true">
                                                                                        <span class="text">
                                                                                            Example product title
                                                                                        </span>
                                                                                    </a>
                                                                                    <div
                                                                                        class="card-information__group">
                                                                                        <div class="card-price">

                                                                                            <div
                                                                                                class="price price--sold-out ">
                                                                                                <dl>
                                                                                                    <div
                                                                                                        class="price__regular">
                                                                                                        <dt>
                                                                                                            <span
                                                                                                                class="visually-hidden visually-hidden--inline">Regular
                                                                                                                price</span>
                                                                                                        </dt>
                                                                                                        <dd
                                                                                                            class="price__last">
                                                                                                            <span
                                                                                                                class="price-item price-item--regular">
                                                                                                                ₹. 19.99
                                                                                                            </span>
                                                                                                        </dd>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="price__sale">
                                                                                                        <dt
                                                                                                            class="price__compare">
                                                                                                            <span
                                                                                                                class="visually-hidden visually-hidden--inline">Regular
                                                                                                                price</span>
                                                                                                        </dt>
                                                                                                        <dd
                                                                                                            class="price__compare">
                                                                                                            <s
                                                                                                                class="price-item price-item--regular">

                                                                                                            </s>
                                                                                                        </dd>
                                                                                                        <dt>
                                                                                                            <span
                                                                                                                class="visually-hidden visually-hidden--inline">Sale
                                                                                                                price</span>
                                                                                                        </dt>
                                                                                                        <dd
                                                                                                            class="price__last">
                                                                                                            <span
                                                                                                                class="price-item price-item--sale">
                                                                                                                ₹. 19.99
                                                                                                            </span>
                                                                                                        </dd>
                                                                                                    </div>
                                                                                                    <small
                                                                                                        class="unit-price caption hidden">
                                                                                                        <dt
                                                                                                            class="visually-hidden">
                                                                                                            Unit price
                                                                                                        </dt>
                                                                                                        <dd
                                                                                                            class="price__last">
                                                                                                            <span></span>
                                                                                                            <span
                                                                                                                aria-hidden="true">/</span>
                                                                                                            <span
                                                                                                                class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                                                            <span>
                                                                                                            </span>
                                                                                                        </dd>
                                                                                                    </small>
                                                                                                </dl>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="predictive-search predictive-search--header quickSearchResultsWrap"
                                    tabindex="-1" data-predictive-search>
                                    <div class="predictive-search__loading-state">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="spinner"
                                            viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30">
                                            </circle>
                                        </svg>
                                    </div>
                                </div>

                                <span class="predictive-search-status visually-hidden" role="status"
                                    aria-hidden="true"></span>
                            </div>
                        </summary>
                        <div class="search-modal modal__content quickSearch" role="dialog" aria-modal="true"
                            aria-label="Search">
                            <div class="quickSearchResultsWrap" style="display: none;" data-product-to-show="3">
                                <div class="loadingOverlay"></div>
                                <div class="quickSearchResults custom-scrollbar">
                                    <div class="container">
                                        <div class="quickSearchResultsBlock quickSearchResultsWidget quickSearchResultsWrap"
                                            data-quick-trending-products>
                                            <div class="quickSearchResults custom-scrollbar">
                                                <div class="container">
                                                    <div class="search-block quickSearchTrending">
                                                        <h3 class="search-block-title text-left">
                                                            <span class="text">Trending Now</span>

                                                        </h3>
                                                        <ul class="list-item list-unstyled clearfix">

                                                            <li class="item">
                                                                <a href="/search?q=dempus*&amp;type=product"
                                                                    class="link">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 32 32">
                                                                        <path
                                                                            d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                                    </svg>
                                                                    <span class="text">dempus</span>
                                                                </a>
                                                            </li>

                                                            <li class="item">
                                                                <a href="/search?q=sample*&amp;type=product"
                                                                    class="link">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 32 32">
                                                                        <path
                                                                            d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                                    </svg>
                                                                    <span class="text">sample</span>
                                                                </a>
                                                            </li>

                                                            <li class="item">
                                                                <a href="/search?q=magnis*&amp;type=product"
                                                                    class="link">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 32 32">
                                                                        <path
                                                                            d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                                    </svg>
                                                                    <span class="text">magnis</span>
                                                                </a>
                                                            </li>

                                                            <li class="item">
                                                                <a href="/search?q=loremous-saliduar*&amp;type=product"
                                                                    class="link">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 32 32">
                                                                        <path
                                                                            d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                                    </svg>
                                                                    <span class="text">loremous saliduar</span>
                                                                </a>
                                                            </li>

                                                            <li class="item">
                                                                <a href="/search?q=naminos*&amp;type=product"
                                                                    class="link">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 32 32">
                                                                        <path
                                                                            d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                                    </svg>
                                                                    <span class="text">naminos</span>
                                                                </a>
                                                            </li>

                                                            <li class="item">
                                                                <a href="/search?q=dinterdum*&amp;type=product"
                                                                    class="link">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 32 32">
                                                                        <path
                                                                            d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                                    </svg>
                                                                    <span class="text">dinterdum</span>
                                                                </a>
                                                            </li>








                                                        </ul>
                                                    </div>
                                                    <div class="search-block quickSearchProduct">
                                                        <h3 class="search-block-title text-left">
                                                            <span class="text">Popular Products</span>
                                                        </h3>
                                                        <div class="search-block-content">
                                                            <div class="halo-block">

                                                                <div class="products-grid column-3 disable-srollbar">

                                                                    <div class="product">


                                                                        <div class="product-item">
                                                                            <div class="card">
                                                                                <div
                                                                                    class="card-product card--text-only card--soft">
                                                                                    <div class="card-product__wrapper">
                                                                                        <div
                                                                                            class="card-media card-media--square">
                                                                                            <svg class="placeholder-svg"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 525.5 525.5">
                                                                                                <path
                                                                                                    d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                                <path
                                                                                                    d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                                <path
                                                                                                    d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                                <path
                                                                                                    d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="card-information">
                                                                                        <div
                                                                                            class="card-information__wrapper text-center">

                                                                                            <a class="card-title link-underline capitalize text-center"
                                                                                                role="link"
                                                                                                aria-disabled="true">
                                                                                                <span class="text">
                                                                                                    Example product
                                                                                                    title
                                                                                                </span>
                                                                                            </a>
                                                                                            <div
                                                                                                class="card-information__group">
                                                                                                <div class="card-price">

                                                                                                    <div
                                                                                                        class="price price--sold-out ">
                                                                                                        <dl>
                                                                                                            <div
                                                                                                                class="price__regular">
                                                                                                                <dt>
                                                                                                                    <span
                                                                                                                        class="visually-hidden visually-hidden--inline">Regular
                                                                                                                        price</span>
                                                                                                                </dt>
                                                                                                                <dd
                                                                                                                    class="price__last">
                                                                                                                    <span
                                                                                                                        class="price-item price-item--regular">
                                                                                                                        ₹.
                                                                                                                        19.99
                                                                                                                    </span>
                                                                                                                </dd>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="price__sale">
                                                                                                                <dt
                                                                                                                    class="price__compare">
                                                                                                                    <span
                                                                                                                        class="visually-hidden visually-hidden--inline">Regular
                                                                                                                        price</span>
                                                                                                                </dt>
                                                                                                                <dd
                                                                                                                    class="price__compare">
                                                                                                                    <s
                                                                                                                        class="price-item price-item--regular">

                                                                                                                    </s>
                                                                                                                </dd>
                                                                                                                <dt>
                                                                                                                    <span
                                                                                                                        class="visually-hidden visually-hidden--inline">Sale
                                                                                                                        price</span>
                                                                                                                </dt>
                                                                                                                <dd
                                                                                                                    class="price__last">
                                                                                                                    <span
                                                                                                                        class="price-item price-item--sale">
                                                                                                                        ₹.
                                                                                                                        19.99
                                                                                                                    </span>
                                                                                                                </dd>
                                                                                                            </div>
                                                                                                            <small
                                                                                                                class="unit-price caption hidden">
                                                                                                                <dt
                                                                                                                    class="visually-hidden">
                                                                                                                    Unit
                                                                                                                    price
                                                                                                                </dt>
                                                                                                                <dd
                                                                                                                    class="price__last">
                                                                                                                    <span></span>
                                                                                                                    <span
                                                                                                                        aria-hidden="true">/</span>
                                                                                                                    <span
                                                                                                                        class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                                                                    <span>
                                                                                                                    </span>
                                                                                                                </dd>
                                                                                                            </small>
                                                                                                        </dl>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product">


                                                                        <div class="product-item">
                                                                            <div class="card">
                                                                                <div
                                                                                    class="card-product card--text-only card--soft">
                                                                                    <div class="card-product__wrapper">
                                                                                        <div
                                                                                            class="card-media card-media--square">
                                                                                            <svg class="placeholder-svg"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 525.5 525.5">
                                                                                                <path
                                                                                                    d="M401.7 288.4c-.7-.5-1.6-.5-2.4 0l-.3-.7c-2.6-5.8-7.1-10.1-12.8-12.2l-77.8-31.8-7.1-3.9 1.3-1.7c.2-.3.2-.8-.1-1-.3-.2-.8-.2-1 .1l-1.4 1.9-12-6.6.4-4.5c.1-.8-.5-1.5-1.3-1.5-.8-.1-1.5.5-1.5 1.3l-.1.9-1.4 1.7-13.4-7.4.4-4.3c.1-.8-.5-1.5-1.3-1.6-.8-.1-1.5.5-1.6 1.3l-.1 1-1.2 1.6-13.3-7.3.5-4.4c.1-.8-.5-1.5-1.2-1.6-.8-.1-1.5.5-1.6 1.2l-.4 3.2-17.7-9.8c-5.3-3.1-11.6-3.1-16.5.1-4.6 3-7 8.2-6.3 13.7l1.3 12.6c-8.3 6.5-17.7 10.1-27.2 10.1-8.8 0-17-2.3-24.5-6.7-5.9-3.5-11.1-8.2-15.4-14-2-2.6-5.1-4.9-7.7-4.3-.8.2-2.2.9-2.6 3.2v78l-3.7-.3c-2.5-.2-4.7 1.7-5.3 4.7l-2.3 15.5c-.4 2.2 0 4.4 1.3 6.1.9 1.2 2.2 2 3.7 2.1 19.4 1.2 58.1 2.5 101 2.5 32.5 0 67.4-.8 98.2-3 38.9-2.8 62.8-11.8 73.1-27.4.7-1.1 1.4-2.2 2-3.3.4-1.3.2-2.8-.7-3.5zm-94.5-42.2l.1.1 22 9c-12.2 2.2-24.9.5-36.1-4.9l6.4-8.3 7.6 4.1zm-8.8-4.8l-6.5 8.4-1.5-.7c-.7-.3-1.6-.1-1.9.6-.3.7-.1 1.6.6 1.9l.9.5-2.6 3.3c-.5-.3-1-.5-1.5-.6l1.8-19.2 10.7 5.8zm-12.7 16.3s.1 0 0 0zm-3.2-25.1l-7.2 9-2.7-1.3c-.7-.3-1.6-.1-1.9.6-.3.7-.1 1.6.6 1.9l2.1 1-3.6 4.5c-.5-.3-1-.5-1.5-.7l2.2-21.6 12 6.6zm-14.5 18c.1 0 .1 0 0 0zm-2.6-27.4l-7.4 9.9-2.5-1.2c-.7-.3-1.6-.1-1.9.6-.3.7-.1 1.6.6 1.9l2.1 1-4.3 5.8-1.2-.6 2.8-24 11.8 6.6zm-52-7.4c-.6-4.5 1.3-8.6 5-11 3.7-2.4 8.4-2.6 12.4-.6l-.3.6c-.2.4-.4.9-.6 1.3-.1.3-.3.5-.4.8-2.4 4.8-5.4 9.3-8.8 13.4-2 2.4-4.1 4.5-6.3 6.4l-1-10.9zm-76.1 2.3v-.5c.1-.4.2-.9.5-.9.8-.2 2.9.8 4.7 3.2 4.5 6.1 10 11 16.2 14.7 7.9 4.7 16.7 7.1 26 7.1 14 0 27.6-7 38.3-19.7 3.6-4.3 6.7-8.9 9.2-14 .1-.2.2-.4.3-.7.2-.5.5-1 .7-1.4.1-.1.1-.3.2-.4l17.4 9.6-2.9 25c-4.2.1-7.5 3.5-7.5 7.7 0 .8.1 1.6.4 2.4.2.7 1.1 1.1 1.8.9.7-.2 1.1-1.1.9-1.8-.2-.5-.2-1-.2-1.5 0-2.5 1.9-4.5 4.3-4.8l-.4 3.7c-.1.8.5 1.5 1.2 1.6h.2c.7 0 1.3-.5 1.4-1.3l.1-1 1.3-1.7c.9.9 1.5 2.1 1.5 3.5 0 2.7-2.2 4.8-4.8 4.8-.8 0-1.4.6-1.4 1.4 0 .8.6 1.4 1.4 1.4 4.2 0 7.7-3.4 7.7-7.7 0-2.3-1-4.4-2.7-5.8l4.5-6 5.8 2.9c.2.1.4.1.6.1.5 0 1-.3 1.3-.8.3-.7.1-1.6-.6-1.9l-5.3-2.6 7.4-9.9 1.1.6-2.3 22.8c-4 .2-7.2 3.6-7.2 7.7 0 .6.1 1.2.2 1.7.2.8.9 1.2 1.7 1.1.8-.2 1.2-.9 1.1-1.7-.1-.4-.1-.7-.1-1.1 0-2.4 1.8-4.4 4.1-4.8l-.4 3.7c-.1.8.5 1.5 1.3 1.6h.1c.7 0 1.3-.5 1.4-1.3l.1-.9 1.5-1.9c.9.9 1.5 2.1 1.5 3.5 0 2.7-2.2 4.8-4.8 4.8-.8 0-1.4.6-1.4 1.4s.6 1.4 1.4 1.4c4.2 0 7.7-3.4 7.7-7.7 0-2.3-1-4.3-2.6-5.8l3.7-4.7 5.9 2.9c.2.1.4.1.6.1.5 0 1-.3 1.3-.8.3-.7.1-1.6-.6-1.9l-5.3-2.6 7.1-9 1.4.8-1.9 20.4c-3.9.3-7 3.6-7 7.6 0 .8.1 1.6.4 2.3.2.7 1 1.2 1.8.9.7-.2 1.2-1 .9-1.8-.1-.5-.2-1-.2-1.5 0-2.4 1.7-4.3 3.9-4.7l-.4 3.7c-.1.8.5 1.5 1.3 1.5h.1c.7 0 1.3-.6 1.4-1.3l.1-.9 1.5-2c1 .9 1.7 2.2 1.7 3.6 0 2.7-2.2 4.8-4.8 4.8-.8 0-1.4.6-1.4 1.4s.6 1.4 1.4 1.4c4.2 0 7.7-3.4 7.7-7.7 0-2.4-1.1-4.5-2.8-5.9l2.7-3.5c8.6 4.2 17.9 6.3 27.4 6.3 4.8 0 9.5-.5 14.2-1.6.2-.1.4-.2.6-.4l51.6 21.1c4.2 1.5 7.6 4.5 10 8.4-2.5 2-10.2 7.5-24 11.9-.4.1-.6.5-.5.9.1.3.4.5.7.5h.2c13.8-4.4 21.4-9.8 24.2-12 .2.3.4.7.5 1l.6 1.4c-.6.4-1.2.9-1.8 1.3-30.8 22.3-83 18.6-133.5 14.9l-46.9-4.2c0-1.1-.1-2.2-.1-3.3 10 1.1 66 6.9 103.8 7.3.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7-38.1-.5-94.7-6.4-103.9-7.3-1.4-14.1-7.8-29.6-14-38.7 14.6-3.2 28.2-11.3 38.4-23l5.4-6.2 1.2.6c.7.3 1.6.1 1.9-.6.3-.7.1-1.6-.6-1.9l-2.2-1.1c-.6-.3-1.3-.1-1.7.3l-6.1 7c-12.4 14.2-29.9 22.8-47.9 23.6-1 0-2 .1-3 .1-19.4 0-38.4-7.6-48.7-19.5v-19.8c-.2.7-.2.7-.2.6zm0 24.2c11.1 11.1 29.8 18.1 48.7 18.1 1.1 0 2.1 0 3.1-.1l3.9-.3c2.1 2.9 4.3 6.5 6.2 10.5.1.3.4.4.6.4.1 0 .2 0 .3-.1.4-.2.5-.6.3-.9-1.8-3.7-3.8-7.2-5.9-10.1 1-.1 2-.3 3-.5 0 .1.1.2.1.3 6.8 9.5 13.9 27.4 14.2 42.3l-3-.3v-.2c-.2-7.1-2.1-15.7-5.3-24.3-.1-.4-.6-.5-.9-.4-.4.1-.5.6-.4.9 3.2 8.4 5.1 16.8 5.2 23.8l-70.3-6.4v-52.7zm260.6 51.2c-9.8 14.9-33 23.5-70.9 26.2-71.5 5.1-164.8 2.5-198.8.5-.7 0-1.3-.5-1.6-.9-.7-1-1-2.4-.7-3.8l2.3-15.5c.3-1.4 1.2-2.3 2.2-2.3h.1L258 309.1l3.5.3c2 .1 4 .3 6 .4.6 0 1.2.1 1.8.1 2.2.2 4.3.3 6.5.5h.1c2.1.1 4.2.3 6.3.4.5 0 1.1.1 1.6.1 2.1.1 4.3.3 6.4.4l6.3.3c.5 0 1 0 1.6.1 4.2.2 8.4.3 12.6.4h1.5c2.1 0 4.1.1 6.2.1h6.8c1.2 0 2.4-.1 3.6-.1.6 0 1.2 0 1.8-.1 1.2 0 2.4-.1 3.6-.2.5 0 1.1-.1 1.6-.1 1.7-.1 3.3-.2 4.9-.3h.1c1.7-.1 3.3-.3 4.9-.5.5-.1 1-.1 1.5-.2 1.1-.1 2.3-.3 3.4-.4.6-.1 1.1-.2 1.7-.2 1.1-.2 2.2-.3 3.3-.5.5-.1 1-.2 1.5-.2 1.5-.3 3-.5 4.5-.9h.1c1.5-.3 3-.7 4.5-1 .5-.1.9-.2 1.4-.4 1-.3 2-.5 3-.8.5-.1 1-.3 1.5-.5 1-.3 2-.6 2.9-.9.4-.1.9-.3 1.3-.5 1.4-.5 2.7-1 4-1.5h.1c1.3-.5 2.6-1.1 3.9-1.7l1.2-.6c.9-.4 1.8-.9 2.7-1.3.4-.2.9-.5 1.3-.7.9-.5 1.7-1 2.5-1.5.4-.2.8-.5 1.1-.7 1.2-.8 2.4-1.5 3.5-2.3.4-.3.8-.6 1.3-.9.1-.1.2-.1.2-.2.1 0 0 .3-.2.5z" />
                                                                                                <path
                                                                                                    d="M192.5 315.8c-2.7-.1-5.3-.1-7.8-.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7 2.6.1 5.2.1 7.8.2.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7z" />
                                                                                                <path
                                                                                                    d="M227.2 312.5c-25.2-2.1-60.2-5.1-83.3-7.7-2.8-.3-5.4 1.7-5.8 4.5-.2 1.5.2 3 1.1 4.2.9 1.2 2.3 1.9 3.8 1.9 6.2.3 19 .9 34.5 1.4.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7-15.5-.5-28.2-1.1-34.5-1.4-1.1-.1-2.1-.6-2.8-1.4-.7-.9-1-2-.8-3.1.3-2.1 2.2-3.5 4.3-3.3 23.2 2.6 58.1 5.6 83.4 7.7.4 0 .7-.3.8-.6 0-.5-.3-.8-.7-.8zm32.5 2.6s-10.3-.8-25.4-2c-.3 0-.7.3-.8.6 0 .4.3.7.6.8 15.1 1.2 25.4 2 25.4 2h.1c.4 0 .7-.3.7-.7.1-.3-.2-.7-.6-.7zm69.1-8.8c10.3-.2 20.1-1.2 29.1-3 .4-.1.6-.5.6-.8-.1-.4-.5-.6-.8-.6-8.9 1.8-18.6 2.8-28.8 3-.4 0-.7.3-.7.7-.1.4.2.7.6.7z" />
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="card-information">
                                                                                        <div
                                                                                            class="card-information__wrapper text-center">

                                                                                            <a class="card-title link-underline capitalize text-center"
                                                                                                role="link"
                                                                                                aria-disabled="true">
                                                                                                <span class="text">
                                                                                                    Example product
                                                                                                    title
                                                                                                </span>
                                                                                            </a>
                                                                                            <div
                                                                                                class="card-information__group">
                                                                                                <div class="card-price">

                                                                                                    <div
                                                                                                        class="price price--sold-out ">
                                                                                                        <dl>
                                                                                                            <div
                                                                                                                class="price__regular">
                                                                                                                <dt>
                                                                                                                    <span
                                                                                                                        class="visually-hidden visually-hidden--inline">Regular
                                                                                                                        price</span>
                                                                                                                </dt>
                                                                                                                <dd
                                                                                                                    class="price__last">
                                                                                                                    <span
                                                                                                                        class="price-item price-item--regular">
                                                                                                                        ₹.
                                                                                                                        19.99
                                                                                                                    </span>
                                                                                                                </dd>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="price__sale">
                                                                                                                <dt
                                                                                                                    class="price__compare">
                                                                                                                    <span
                                                                                                                        class="visually-hidden visually-hidden--inline">Regular
                                                                                                                        price</span>
                                                                                                                </dt>
                                                                                                                <dd
                                                                                                                    class="price__compare">
                                                                                                                    <s
                                                                                                                        class="price-item price-item--regular">

                                                                                                                    </s>
                                                                                                                </dd>
                                                                                                                <dt>
                                                                                                                    <span
                                                                                                                        class="visually-hidden visually-hidden--inline">Sale
                                                                                                                        price</span>
                                                                                                                </dt>
                                                                                                                <dd
                                                                                                                    class="price__last">
                                                                                                                    <span
                                                                                                                        class="price-item price-item--sale">
                                                                                                                        ₹.
                                                                                                                        19.99
                                                                                                                    </span>
                                                                                                                </dd>
                                                                                                            </div>
                                                                                                            <small
                                                                                                                class="unit-price caption hidden">
                                                                                                                <dt
                                                                                                                    class="visually-hidden">
                                                                                                                    Unit
                                                                                                                    price
                                                                                                                </dt>
                                                                                                                <dd
                                                                                                                    class="price__last">
                                                                                                                    <span></span>
                                                                                                                    <span
                                                                                                                        aria-hidden="true">/</span>
                                                                                                                    <span
                                                                                                                        class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                                                                    <span>
                                                                                                                    </span>
                                                                                                                </dd>
                                                                                                            </small>
                                                                                                        </dl>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product">


                                                                        <div class="product-item">
                                                                            <div class="card">
                                                                                <div
                                                                                    class="card-product card--text-only card--soft">
                                                                                    <div class="card-product__wrapper">
                                                                                        <div
                                                                                            class="card-media card-media--square">
                                                                                            <svg class="placeholder-svg"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 525.5 525.5">
                                                                                                <path
                                                                                                    d="M381.3 247.3c.3-1.2 1.2-3.4 3.4-4.2l2.5-.9c.5-.2.8-.5.9-1l3.8-16.2c.1-.4 0-.8-.2-1.1-.2-.3-.6-.5-1-.6-61.1-8.3-93.8-.3-113.3 4.6-6.4 1.6-11.1 2.7-14.6 2.7s-8.2-1.1-14.6-2.7c-19.5-4.8-52.2-12.9-113.3-4.6-.4.1-.8.3-1 .6-.2.3-.3.7-.2 1.1l3.8 16.2c.1.5.5.9.9 1l2.5.9c2.2.8 3.1 3 3.4 4.2.4 1.4.7 3 1.1 4.6 1.8 7.6 4 17 7.9 25.9-7.6 8.2-13.4 15.3-16.2 18.9-.5.7-.8 1.5-.7 2.4.1.8.5 1.5 1 2 .5.7 1.9 2.6 4.6 3.4 2.4.7 4.6 1 6.6 1 7.8 0 13.4-4.7 17.5-9.4 6.7 5.9 15.6 9.7 27.8 9.7 43.9 0 52.1-24.5 57.5-40.7 3.3-9.8 5.4-15.3 11.4-15.3 6.1 0 8.3 5.6 11.6 15.4 5.4 16.1 13.5 40.6 57.4 40.6 12.4 0 21.4-4 28.2-10.1 4.2 4.8 9.8 9.8 17.8 9.8 2 0 4.2-.3 6.6-1.1 2.6-.8 4.1-2.7 4.6-3.4.6-.5.9-1.2 1-2 .1-.9-.1-1.7-.7-2.4-2.9-3.7-8.9-11-16.7-19.4 3.8-8.7 6-18 7.7-25.4.3-1.5.7-3 1-4.5zm-238.6 54.5c-2.1-.6-3.1-2.3-3.1-2.3-.1-.2-.2-.3-.4-.4-.1-.1-.1-.2-.1-.2 0-.1 0-.2.1-.3 2.7-3.4 8.2-10.1 15.3-17.9 2.5 4.9 5.5 9.6 9.4 13.5-6.9 7.9-13.1 10.1-21.2 7.6zm244.3-3.3c.1.1.1.2.1.3 0 .1 0 .2-.1.2l-.4.4s-1 1.7-3.1 2.3c-8.2 2.5-14.5.2-21.6-8 3.9-4 6.9-8.7 9.3-13.7 7.4 8.1 13 15 15.8 18.5zm-9.5-47.2c-4.8 20.6-12.1 51.7-45.8 51.7-41.8 0-49.2-22.3-54.7-38.6-3.1-9.3-5.8-17.4-14.3-17.4-8.3 0-11 8-14.1 17.3-5.5 16.3-12.9 38.7-54.8 38.7-33.7 0-41-31.1-45.8-51.7-.4-1.7-.8-3.2-1.1-4.7-.8-3.1-2.6-5.3-5.2-6.2l-1.7-.6-3.2-14c59.5-7.9 91.5 0 110.7 4.7 6.6 1.6 11.4 2.8 15.3 2.8s8.7-1.2 15.3-2.8c19.2-4.7 51.2-12.6 110.7-4.7l-3.2 14-1.7.6c-2.5.9-4.4 3.2-5.2 6.2-.5 1.5-.8 3.1-1.2 4.7z" />
                                                                                                <path
                                                                                                    d="M383.9 232c0-4.1-13.7-4.1-13.7 0 0 2 3.4 3.1 6.8 3.1 3.5 0 6.9-1 6.9-3.1zm-6.8 1.7c-3.4 0-5.4-1.1-5.4-1.7s2.1-1.7 5.4-1.7c3.4 0 5.4 1.1 5.4 1.7s-2.1 1.7-5.4 1.7zM141.8 232c0 2 3.4 3.1 6.8 3.1s6.8-1.1 6.8-3.1c.1-4-13.6-4-13.6 0zm6.8 1.7c-3.4 0-5.4-1.1-5.4-1.7s2.1-1.7 5.4-1.7 5.4 1.1 5.4 1.7-2 1.7-5.4 1.7zM356 227.6c-7.9-2-36.2-7.4-68 5.5-5.7 2.3-9.4 8-9.1 14.1.9 22.6 7 52.6 48.7 52.6 12.9 0 23.1-3.8 30.2-11.4 11.3-12.1 12.7-30.8 11.8-44.5-.6-7.9-6-14.4-13.6-16.3zm-67.5 6.8c15.7-6.4 30.5-8.2 42.4-8.2 11.9 0 20.8 1.8 24.7 2.8 5.3 1.3 9.4 5.1 11.4 10h-.1c-.1 0-14.3 1.7-36.4 3.5-9 .7-20.2 1.6-32.9 2.2h-.8c-.1 0-.2 0-.3.1-5 .3-10.2.5-15.6.7-.2 0-.3.1-.5.1.4-5.1 3.5-9.4 8.1-11.2zm39.1 64c-39.9 0-46.2-28.5-47.2-50.4.2.1.3.1.5.1 5.8-.2 11.4-.4 16.7-.7 28.4.1 40.9 18.3 51.9 34.4 1.6 2.4 3.2 4.7 4.8 6.9.2.2.4.4.7.5-6.8 6.1-15.9 9.2-27.4 9.2zm29.2-11.1c0-.1-.1-.3-.2-.4-1.6-2.2-3.1-4.4-4.7-6.8-8.8-12.9-19.4-28.3-39.2-33.7 6.5-.4 12.4-.9 17.6-1.3 10.4 5.8 21.4 14.7 33.6 27.3.3.3.6.4 1 .4h.1c-1.8 5.4-4.4 10.4-8.2 14.5zm9-17c-11-11.2-21.1-19.6-30.6-25.5 19.5-1.6 31.9-3.1 32-3.1.2 0 .4-.1.5-.2.2.8.3 1.6.3 2.5.5 6.7.5 16.7-2.2 26.3zM238 233c-31.7-12.9-60-7.5-68-5.5-7.6 1.9-13.1 8.5-13.6 16.4-.9 13.6.5 32.4 11.8 44.5 7.1 7.6 17.3 11.4 30.2 11.4 41.7 0 47.8-30 48.7-52.6.3-6.2-3.4-11.8-9.1-14.2zm-67.6-4.1c7.7-1.9 34.9-7.2 65.7 4.9-8 .9-14.7 1.5-22.6 2.2-5.5.5-11.6 2.6-18.3 6.3-21.8-1.7-35.8-3.4-36-3.4h-.3c2.1-4.9 6.2-8.6 11.5-10zM157.9 244c.1-.9.2-1.8.4-2.6.2.2.4.3.7.3.1 0 12.5 1.5 32 3.1-9.6 6-19.7 14.4-30.7 25.7-2.8-9.7-2.8-19.8-2.4-26.5zm40.5 54.4c-11.5 0-20.6-3.1-27.4-9.2.3-.1.6-.2.8-.5 1.5-2.1 3-4.2 4.6-6.5 11.4-16.5 24.3-35.1 55.1-34 5.1.2 8.8.3 13.6.3.2 0 .3 0 .4-.1-.9 21.9-7.3 50-47.1 50zm46.8-52.7c-4.8 0-8.4-.1-13.5-.3-32.4-1.3-46.4 19-57.6 35.2-1.6 2.3-3 4.4-4.5 6.4-.1.2-.2.3-.2.5-3.9-4.2-6.5-9.2-8.3-14.5h.3c.4 0 .7-.1 1-.4 12.3-12.6 23.4-21.6 34-27.5 6.5-3.6 12.4-5.7 17.6-6.2 8.5-.7 15.7-1.5 24.7-2.4.5-.1 1-.4 1.2-.9 3.5 2.3 5.7 6.1 6 10.2-.4-.1-.5-.1-.7-.1z" />
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="card-information">
                                                                                        <div
                                                                                            class="card-information__wrapper text-center">

                                                                                            <a class="card-title link-underline capitalize text-center"
                                                                                                role="link"
                                                                                                aria-disabled="true">
                                                                                                <span class="text">
                                                                                                    Example product
                                                                                                    title
                                                                                                </span>
                                                                                            </a>
                                                                                            <div
                                                                                                class="card-information__group">
                                                                                                <div class="card-price">

                                                                                                    <div
                                                                                                        class="price price--sold-out ">
                                                                                                        <dl>
                                                                                                            <div
                                                                                                                class="price__regular">
                                                                                                                <dt>
                                                                                                                    <span
                                                                                                                        class="visually-hidden visually-hidden--inline">Regular
                                                                                                                        price</span>
                                                                                                                </dt>
                                                                                                                <dd
                                                                                                                    class="price__last">
                                                                                                                    <span
                                                                                                                        class="price-item price-item--regular">
                                                                                                                        ₹.
                                                                                                                        19.99
                                                                                                                    </span>
                                                                                                                </dd>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="price__sale">
                                                                                                                <dt
                                                                                                                    class="price__compare">
                                                                                                                    <span
                                                                                                                        class="visually-hidden visually-hidden--inline">Regular
                                                                                                                        price</span>
                                                                                                                </dt>
                                                                                                                <dd
                                                                                                                    class="price__compare">
                                                                                                                    <s
                                                                                                                        class="price-item price-item--regular">

                                                                                                                    </s>
                                                                                                                </dd>
                                                                                                                <dt>
                                                                                                                    <span
                                                                                                                        class="visually-hidden visually-hidden--inline">Sale
                                                                                                                        price</span>
                                                                                                                </dt>
                                                                                                                <dd
                                                                                                                    class="price__last">
                                                                                                                    <span
                                                                                                                        class="price-item price-item--sale">
                                                                                                                        ₹.
                                                                                                                        19.99
                                                                                                                    </span>
                                                                                                                </dd>
                                                                                                            </div>
                                                                                                            <small
                                                                                                                class="unit-price caption hidden">
                                                                                                                <dt
                                                                                                                    class="visually-hidden">
                                                                                                                    Unit
                                                                                                                    price
                                                                                                                </dt>
                                                                                                                <dd
                                                                                                                    class="price__last">
                                                                                                                    <span></span>
                                                                                                                    <span
                                                                                                                        aria-hidden="true">/</span>
                                                                                                                    <span
                                                                                                                        class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                                                                    <span>
                                                                                                                    </span>
                                                                                                                </dd>
                                                                                                            </small>
                                                                                                        </dl>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="predictive-search predictive-search--header quickSearchResultsWrap"
                                            tabindex="-1" data-predictive-search>
                                            <div class="predictive-search__loading-state">
                                                <svg aria-hidden="true" focusable="false" role="presentation"
                                                    class="spinner" viewBox="0 0 66 66"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33"
                                                        r="30"></circle>
                                                </svg>
                                            </div>
                                        </div>

                                        <span class="predictive-search-status visually-hidden" role="status"
                                            aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </details>
                </predictive-search>
            </div>
        </div>
    </div>


    <div class="halo-popup halo-video-popup halo-popup-topDown" data-popup-video id="halo-video-popup">
        <div class="halo-popup-wrapper">
            <div class="halo-popup-header">
                <button type="button" class="halo-popup-close clearfix" data-close-video-popup aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path
                            d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                    </svg>
                    Close
                </button>
            </div>
            <div class="halo-popup-content">
            </div>
        </div>
    </div>

    <link rel="stylesheet"
        href="//www.fedus.in/cdn/shop/t/3/assets/halo-product-list-view-popup.css?v=93406195505027227191672341186"
        media="print" onload="this.media='all'">
    <noscript>
        <link href="//www.fedus.in/cdn/shop/t/3/assets/halo-product-list-view-popup.css?v=93406195505027227191672341186"
            rel="stylesheet" type="text/css" media="all" />
    </noscript>

    <div class="halo-product-list-view-popup product-list" id="list-view-popup" data-product-list-view>
        <h2 class="mobile-popup-header">
            <span>Choose Options</span>
            <button type="button" data-close-product-list-modal class="close close-modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path
                        d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                </svg>
            </button>
        </h2>
        <div class='halo-popup-content product-options-wrapper card-swatch card-action' data-product-options-wrapper
            data-quickshop>
        </div>
    </div>

    <script>
        const closeModalButton = document.querySelector('[data-close-product-list-modal]')
        closeModalButton.addEventListener('click', () => {
            document.body.classList.remove('quickshop-list-view-show')
        })
    </script>

    <div class="halo-popup" id="halo-product-custom-information">
        <div class="halo-popup-wrapper">
            <div class="halo-popup-header">
                <h5 class="halo-popup-title"></h5>
                <button type="button" class="halo-popup-close clearfix" data-close-custom-information
                    aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path
                            d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                    </svg>
                    Close
                </button>
            </div>
            <div class="halo-popup-content">
            </div>
        </div>
    </div>
    <link rel="stylesheet"
        href="//www.fedus.in/cdn/shop/t/3/assets/component-recently-viewed.css?v=7347177497232885181672341184"
        media="print" onload="this.media='all'">

    <noscript>
        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-recently-viewed.css?v=7347177497232885181672341184"
            rel="stylesheet" type="text/css" media="all" />
    </noscript>
    <recently-viewed-popup class="halo-popup halo-recently-viewed-popup is-show" id="halo-recently-viewed-popup"
        data-product-to-show="5" data-expire-day="1">
        <div class="halo-recently-viewed recently-viewed-share recently-viewed-tab" id="halo-recently-viewed-share">
            <div class="recently-viewed-content">
                <div class="recently-header">
                    <h3 class="recently-viewed-title text-center">
                        Social
                    </h3>
                    <button type="button" class="button__close" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path
                                d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="media-grid recently-viewed-media text-center" id="recently-viewed-products-share">
                    <ul class="list-unstyled list-social-2 clearfix">
                        <li class="list-social__item">
                            <a href="https://www.facebook.com/fedusindia" class="link link--text list-social__link"><svg
                                    aria-hidden="true" focusable="false" role="presentation"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="icon icon-facebook">
                                    <path
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                    </path>
                                </svg><span class="visually-hidden">Facebook</span>
                            </a>
                            <div class="info list-social__info text-left">
                                <a class="link link-underline" href="https://www.facebook.com/fedusindia"
                                    target="_blank">
                                    <span class="text">Facebook</span>
                                </a>
                            </div>
                        </li>
                        <li class="list-social__item">
                            <a href="https://www.instagram.com/fedus_india/"
                                class="link link--text list-social__link"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                    xml:space="preserve" aria-hidden="true" focusable="false" role="presentation"
                                    class="icon icon-instagram">
                                    <g>
                                        <path
                                            d="M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M256,152   c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M437,0H75C33.6,0,0,33.6,0,75v362   c0,41.4,33.6,75,75,75h362c41.4,0,75-33.6,75-75V75C512,33.6,478.4,0,437,0z M256,392c-74.399,0-135-60.601-135-135   c0-74.401,60.601-135,135-135s135,60.599,135,135C391,331.399,330.399,392,256,392z M421,122c-16.5,0-30-13.5-30-30s13.5-30,30-30   s30,13.5,30,30S437.5,122,421,122z M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z    M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M256,152c-57.9,0-105,47.1-105,105   s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z" />
                                    </g>
                                </svg><span class="visually-hidden">Instagram</span>
                            </a>
                            <div class="info list-social__info text-left">
                                <a class="link link-underline" href="https://www.instagram.com/fedus_india/"
                                    target="_blank">
                                    <span class="text">Instagram</span>
                                </a>
                            </div>
                        </li>
                        <li class="list-social__item">
                            <a href="https://www.youtube.com" class="link link--text list-social__link"><svg
                                    aria-hidden="true" focusable="false" role="presentation" class="icon icon-youtube"
                                    viewBox="0 0 100 70">
                                    <path
                                        d="M98 11c2 7.7 2 24 2 24s0 16.3-2 24a12.5 12.5 0 01-9 9c-7.7 2-39 2-39 2s-31.3 0-39-2a12.5 12.5 0 01-9-9c-2-7.7-2-24-2-24s0-16.3 2-24c1.2-4.4 4.6-7.8 9-9 7.7-2 39-2 39-2s31.3 0 39 2c4.4 1.2 7.8 4.6 9 9zM40 50l26-15-26-15v30z">
                                </svg>
                                <span class="visually-hidden">YouTube</span>
                            </a>
                            <div class="info list-social__info text-left">
                                <a class="link link-underline" href="https://www.youtube.com" target="_blank">
                                    <span class="text">YouTube</span>
                                </a>
                            </div>
                        </li>
                        <li class="list-social__item">
                            <a href="https://twitter.com/" class="link link--text list-social__link"><svg
                                    aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter"
                                    viewBox="0 0 18 15">
                                    <path
                                        d="M17.64 2.6a7.33 7.33 0 01-1.75 1.82c0 .05 0 .13.02.23l.02.23a9.97 9.97 0 01-1.69 5.54c-.57.85-1.24 1.62-2.02 2.28a9.09 9.09 0 01-2.82 1.6 10.23 10.23 0 01-8.9-.98c.34.02.61.04.83.04 1.64 0 3.1-.5 4.38-1.5a3.6 3.6 0 01-3.3-2.45A2.91 2.91 0 004 9.35a3.47 3.47 0 01-2.02-1.21 3.37 3.37 0 01-.8-2.22v-.03c.46.24.98.37 1.58.4a3.45 3.45 0 01-1.54-2.9c0-.61.14-1.2.45-1.79a9.68 9.68 0 003.2 2.6 10 10 0 004.08 1.07 3 3 0 01-.13-.8c0-.97.34-1.8 1.03-2.48A3.45 3.45 0 0112.4.96a3.49 3.49 0 012.54 1.1c.8-.15 1.54-.44 2.23-.85a3.4 3.4 0 01-1.54 1.94c.74-.1 1.4-.28 2.01-.54z">
                                </svg>
                                <span class="visually-hidden">Twitter</span>
                            </a>
                            <div class="info list-social__info text-left">
                                <a class="link link-underline" href="https://twitter.com/" target="_blank">
                                    <span class="text">Twitter</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="halo-recently-viewed recently-viewed-wrap" id="halo-recently-viewed-wrap">
            <div class="recently-viewed-icon open-popup" data-target="halo-recently-viewed-share">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" aria-hidden="true" focusable="false"
                    role="presentation" class="icon icon-social-media">
                    <path
                        d="M 12.5 1 C 11.125 1 10 2.125 10 3.5 C 10 3.671875 10.019531 3.835938 10.050781 4 L 5.519531 6.039063 C 5.0625 5.414063 4.328125 5 3.5 5 C 2.125 5 1 6.125 1 7.5 C 1 8.875 2.125 10 3.5 10 C 4.332031 10 5.074219 9.582031 5.527344 8.949219 L 10.0625 10.964844 C 10.023438 11.136719 10 11.316406 10 11.5 C 10 12.875 11.125 14 12.5 14 C 13.875 14 15 12.875 15 11.5 C 15 10.125 13.875 9 12.5 9 C 11.667969 9 10.925781 9.417969 10.472656 10.050781 L 5.9375 8.039063 C 5.976563 7.863281 6 7.683594 6 7.5 C 6 7.3125 5.976563 7.128906 5.9375 6.953125 L 10.445313 4.914063 C 10.898438 5.570313 11.652344 6 12.5 6 C 13.875 6 15 4.875 15 3.5 C 15 2.125 13.875 1 12.5 1 Z M 12.5 2 C 13.335938 2 14 2.664063 14 3.5 C 14 4.335938 13.335938 5 12.5 5 C 11.664063 5 11 4.335938 11 3.5 C 11 2.664063 11.664063 2 12.5 2 Z M 3.5 6 C 4.335938 6 5 6.664063 5 7.5 C 5 8.335938 4.335938 9 3.5 9 C 2.664063 9 2 8.335938 2 7.5 C 2 6.664063 2.664063 6 3.5 6 Z M 12.5 10 C 13.335938 10 14 10.664063 14 11.5 C 14 12.335938 13.335938 13 12.5 13 C 11.664063 13 11 12.335938 11 11.5 C 11 10.664063 11.664063 10 12.5 10 Z" />
                </svg>
            </div>
            <back-to-top-button class="recently-viewed-icon" data-scroll-to-top>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" aria-hidden="true" focusable="false"
                    role="presentation" class="icon icon-back-to-top" style="stroke: black;">
                    <path
                        d="M 25 1.015625 L 14.308594 11.28125 C 14.046875 11.527344 13.9375 11.894531 14.023438 12.242188 C 14.109375 12.589844 14.375 12.867188 14.71875 12.964844 C 15.066406 13.066406 15.4375 12.972656 15.691406 12.71875 L 24 4.746094 L 24 48 C 23.996094 48.359375 24.183594 48.695313 24.496094 48.878906 C 24.808594 49.058594 25.191406 49.058594 25.503906 48.878906 C 25.816406 48.695313 26.003906 48.359375 26 48 L 26 4.746094 L 34.308594 12.71875 C 34.5625 12.972656 34.933594 13.066406 35.28125 12.964844 C 35.625 12.867188 35.890625 12.589844 35.976563 12.242188 C 36.0625 11.894531 35.953125 11.527344 35.691406 11.28125 Z" />
                </svg>
            </back-to-top-button>
        </div>
    </recently-viewed-popup>

    <div class="recently-viewed-popup-mb content-align-center"></div>

    <script src="//www.fedus.in/cdn/shop/t/3/assets/recently-viewed-product.js?v=30225671776474942461672341187"
        type="text/javascript"></script>
    <script src="//www.fedus.in/cdn/shop/t/3/assets/halo-recently-viewed.js?v=159830820130340521101672341186"
        defer="defer"></script>
    <link rel="stylesheet"
        href="//www.fedus.in/cdn/shop/t/3/assets/component-quick-edit-cart.css?v=26103802578836788591672341184"
        media="print" onload="this.media='all'">

    <noscript>
        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-quick-edit-cart.css?v=26103802578836788591672341184"
            rel="stylesheet" type="text/css" media="all" />
    </noscript>

    <div class="halo-popup halo-edit-cart-popup customPopup-large" data-edit-cart-popup id="halo-edit-cart-popup">
        <div class="halo-popup-wrapper">
            <div class="halo-popup-edit-header">
                <button type="button" class="halo-popup-close clearfix" data-close-edit-cart aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path
                            d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                    </svg>
                    Close
                </button>
                <h5 class="halo-popup-title text-left">
                    Edit Option
                </h5>
            </div>
            <div class="halo-popup-content halo-popup-scroll custom-scrollbar"></div>
        </div>
    </div>
    <script src="//www.fedus.in/cdn/shop/t/3/assets/variants-edit-cart.js?v=81278797816338580521672341188"
        defer="defer"></script>
    <div class="halo-popup halo-notify-popup customPopup-small halo-popup-LeftRight" data-notify-popup
        id="halo-notify-popup">
        <div class="halo-popup-wrapper">
            <div class="halo-popup-header customPopup-header">
                <button type="button" class="halo-popup-close customPopup-close clearfix" data-close-notify-popup
                    aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path
                            d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                    </svg>
                    Close
                </button>
                <h5 class="halo-popup-title customPopup-title text-center">
                    Back In Stock Notification
                </h5>
            </div>
            <div class="halo-popup-content custom-scrollbar">
                <div class="halo-notifyMe halo-notifyMe--popup">
                    <form class="notifyMe-form" method="post" action="">
                        <input type="hidden" name="halo-notify-product-site" value="FEDUS" />
                        <input type="hidden" name="halo-notify-product-site-url" value="https://www.fedus.in" />
                        <input type="hidden" name="halo-notify-product-title" value="" />
                        <input type="hidden" name="halo-notify-product-link" value="https://www.fedus.in" />
                        <input type="hidden" name="halo-notify-product-variant" value="" />
                        <div class="form-field">
                            <label class="form-label" for="halo-notify-email">Leave your email and we will notify as
                                soon as the product / variant is back in stock</label>
                            <input class="form-input form-input-placeholder" type="email" name="email" required
                                id="halo-notify-email" placeholder="Insert your email">
                            <button type="button" class="button button-1" id="halo-btn-notify" data-form-notify>
                                Subscribe
                            </button>
                        </div>
                    </form>
                    <div class="notifyMe-text"></div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet"
        href="//www.fedus.in/cdn/shop/t/3/assets/component-product.css?v=5836729497508392671672341184" media="print"
        onload="this.media='all'">
    <link rel="stylesheet"
        href="//www.fedus.in/cdn/shop/t/3/assets/component-quick-view.css?v=74478050216777567351672341184" media="print"
        onload="this.media='all'"><noscript>
        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-product.css?v=5836729497508392671672341184"
            rel="stylesheet" type="text/css" media="all" />
    </noscript><noscript>
        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-quick-view.css?v=74478050216777567351672341184"
            rel="stylesheet" type="text/css" media="all" />
    </noscript>

    <div class="halo-popup halo-quick-view-popup customPopup-large" data-quick-view-popup id="halo-quick-view-popup">
        <div class="halo-popup-wrapper">
            <button type="button" class="halo-popup-close clearfix" data-close-quick-view-popup aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path
                        d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                </svg>
            </button>
            <div class="halo-popup-content halo-popup-scroll custom-scrollbar"></div>
        </div>
    </div>

    <script src="//www.fedus.in/cdn/shop/t/3/assets/variants-quick-view.js?v=53664001341531357691672341188"
        defer="defer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script type="text/javascript">
        window.variant_image_group_quick_view = false;
    </script>

    <link rel="stylesheet"
        href="//www.fedus.in/cdn/shop/t/3/assets/component-card-mobile-popup.css?v=32685488149468493341672341181"
        media="print" onload="this.media='all'">
    <noscript>
        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-card-mobile-popup.css?v=32685488149468493341672341181"
            rel="stylesheet" type="text/css" media="all" />
    </noscript>

    <div class="halo-popup halo-card-mobile-popup halo-popup-topDown" data-card-mobile-popup
        id="halo-card-mobile-popup">
        <div class="halo-popup-wrapper">
            <div class="halo-popup-content custom-scrollbar halo-card-mobile-content">
            </div>
        </div>
    </div>




    <link rel="stylesheet"
        href="//www.fedus.in/cdn/shop/t/3/assets/component-warning-popup.css?v=143029987110804031811672341185"
        media="print" onload="this.media='all'">
    <noscript>
        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-warning-popup.css?v=143029987110804031811672341185"
            rel="stylesheet" type="text/css" media="all" />
    </noscript>

    <div class="halo-popup halo-warning-popup bottom-up" data-warning-popup id="halo-warning-popup">
        <button type="button" class="halo-popup-close clearfix" data-close-warning-popup aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path
                    d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
            </svg>
        </button>
        <span class="halo-warning-icon">
            <svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 554.2 554.199"
                class="icon icon-warning">
                <g>
                    <path d="M538.5,386.199L356.5,70.8c-16.4-28.4-46.7-45.9-79.501-45.9c-32.8,0-63.1,17.5-79.5,45.9L12.3,391.6
        c-16.4,28.4-16.4,63.4,0,91.8C28.7,511.8,59,529.3,91.8,529.3H462.2c0.101,0,0.2,0,0.2,0c50.7,0,91.8-41.101,91.8-91.8
        C554.2,418.5,548.4,400.8,538.5,386.199z M316.3,416.899c0,21.7-16.7,38.3-39.2,38.3s-39.2-16.6-39.2-38.3V416
        c0-21.601,16.7-38.301,39.2-38.301S316.3,394.3,316.3,416V416.899z M317.2,158.7L297.8,328.1c-1.3,12.2-9.4,19.8-20.7,19.8
        s-19.4-7.7-20.7-19.8L237,158.6c-1.3-13.1,5.801-23,18-23H299.1C311.3,135.7,318.5,145.6,317.2,158.7z" />
                </g>
            </svg>
        </span>
        <div class="halo-popup-content custom-scrollbar halo-warning-content" data-halo-warning-content>this is just a
            warning</div>
    </div>



    <div class="background-overlay">

    </div>

    <link rel="stylesheet" href="//www.fedus.in/cdn/shop/t/3/assets/component-auth.css?v=127485890362915857051672341180"
        media="print" onload="this.media='all'">

    <noscript>
        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-auth.css?v=127485890362915857051672341180"
            rel="stylesheet" type="text/css" media="all" />
    </noscript>
    <customer-auth class="halo-sidebar halo-sidebar-right halo-auth-sidebar" data-auth-sidebar id="halo-auth-sidebar">

        <div class="halo-sidebar-header text-left">
            <span class="title">Login
            </span>
            <button type="button" class="halo-sidebar-close" data-close-auth-sidebar aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path
                        d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                </svg>
                Close
            </button>
        </div>
        <div class="halo-sidebar-wrapper custom-scrollbar">
            <form accept-charset="UTF-8" action="/account/login" method="post" class="auth-form auth-form-2">
                <input name="form_type" type="hidden" value="customer_login" />
                <input name="utf8" type="hidden" value="✓" />
                <div class="form-field">
                    <label class="form-label" for="customer_email">
                        Email Address
                        <em>*</em>
                    </label>
                    <input id="customer_email" class="form-input form-input-placeholder" type="email" value=""
                        name="customer[email]" required placeholder="Email Address">
                </div>
                <div class="form-field">
                    <label class="form-label" for="customer_password">
                        Password
                        <em>*</em>
                    </label>
                    <input id="customer_password" class="form-input form-input-placeholder" type="password" value=""
                        required placeholder="Password" name="customer[password]">
                </div>
                <div class="form-actions auth-actions text-center">
                    <input type="submit" class="button button-1 button-login" value="Log in">
                    <a class="auth-link link link-underline" href="/account/login#recover">
                        <span class="text">Forgot your password?</span>
                    </a>
                    <a href="/account/register" class="button button-2 button-register">
                        Create account
                    </a>
                </div>
            </form>
        </div>
    </customer-auth>
    <script src="//www.fedus.in/cdn/shop/t/3/assets/halo-customer-login.js?v=168411868604090099341672341186"
        defer="defer"></script>



    <link rel="stylesheet"
        href="//www.fedus.in/cdn/shop/t/3/assets/component-quick-cart.css?v=69937667527110853341672341184" media="print"
        onload="this.media='all'">

    <noscript>
        <link href="//www.fedus.in/cdn/shop/t/3/assets/component-quick-cart.css?v=69937667527110853341672341184"
            rel="stylesheet" type="text/css" media="all" />
    </noscript>

    <div class="halo-sidebar halo-sidebar-right halo-cart-sidebar" id="halo-cart-sidebar">
        <button type="button" class="halo-sidebar-close" data-close-cart-sidebar aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path
                    d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
            </svg>
            Close
        </button>
        <div class="halo-sidebar-header text-left">
            <span class="title">
                Shopping Cart
            </span>
            <div class="wrapper-cartCount">
                <span class="cartCount" data-cart-count>0</span>
                <span>items</span>
            </div>
        </div>
        <div class="halo-sidebar-wrapper custom-scrollbar ">
            <div class="previewCart-wrapper"></div>
        </div>
    </div>
    <script src="//www.fedus.in/cdn/shop/t/3/assets/halo-toolcart.js?v=97316050244563031771672341186"
        defer="defer"></script>





    <div class="halo-sidebar halo-sidebar-left halo-sidebar_search" id="search-form-mobile">
        <a href="#" class="halo-sidebar-close" data-search-close-sidebar alt="Close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path
                    d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
            </svg>
            Close
        </a>
        <div class="halo-sidebar-header text-left">
            <span class="title">
                Search
            </span>
        </div>
        <div class="halo-sidebar-wrapper custom-scrollbar">

            <predictive-search class="search-modal__form" data-loading-text="Loading..." data-product-to-show="3">
                <details class="search_details">
                    <summary class="header__search-full" aria-haspopup="dialog" aria-label="Search">
                        <button type="button" class="header-search-close" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <path
                                    d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                            </svg>
                        </button>
                        <form action="/search" method="get" role="search" class="search search-modal__form">
                            <div class="field">
                                <input class="search__input field__input form-input-placeholder" id="Search-In-Modal"
                                    type="search" name="q" value="" placeholder="Search products..." autocomplete="off"
                                    role="combobox" aria-expanded="false" aria-owns="predictive-search-results-list"
                                    aria-controls="predictive-search-results-list" aria-haspopup="listbox"
                                    aria-autocomplete="list" autocorrect="off" autocomplete="off" autocapitalize="off"
                                    spellcheck="false">
                                <input type="hidden" name="options[prefix]" value="last">
                                <label class="field__label hiddenLabels" for="Search-In-Modal">
                                    Search
                                </label>
                                <button class="button search__button field__button focus-inset" aria-label="Search">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path
                                            d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="quickSearchResultsBlock quickSearchResultsWidget quickSearchResultsWrap"
                                data-quick-trending-products>
                                <div class="quickSearchResults custom-scrollbar">
                                    <div class="container">
                                        <div class="search-block quickSearchTrending">
                                            <h3 class="search-block-title text-left">
                                                <span class="text">Trending Now</span>

                                            </h3>
                                            <ul class="list-item list-unstyled clearfix">

                                                <li class="item">
                                                    <a href="/search?q=dempus*&amp;type=product" class="link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path
                                                                d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                        </svg>
                                                        <span class="text">dempus</span>
                                                    </a>
                                                </li>

                                                <li class="item">
                                                    <a href="/search?q=sample*&amp;type=product" class="link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path
                                                                d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                        </svg>
                                                        <span class="text">sample</span>
                                                    </a>
                                                </li>

                                                <li class="item">
                                                    <a href="/search?q=magnis*&amp;type=product" class="link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path
                                                                d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                        </svg>
                                                        <span class="text">magnis</span>
                                                    </a>
                                                </li>

                                                <li class="item">
                                                    <a href="/search?q=loremous-saliduar*&amp;type=product"
                                                        class="link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path
                                                                d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                        </svg>
                                                        <span class="text">loremous saliduar</span>
                                                    </a>
                                                </li>

                                                <li class="item">
                                                    <a href="/search?q=naminos*&amp;type=product" class="link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path
                                                                d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                        </svg>
                                                        <span class="text">naminos</span>
                                                    </a>
                                                </li>

                                                <li class="item">
                                                    <a href="/search?q=dinterdum*&amp;type=product" class="link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path
                                                                d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                        </svg>
                                                        <span class="text">dinterdum</span>
                                                    </a>
                                                </li>








                                            </ul>
                                        </div>
                                        <div class="search-block quickSearchProduct">
                                            <h3 class="search-block-title text-left">
                                                <span class="text">Popular Products</span>
                                            </h3>
                                            <div class="search-block-content">
                                                <div class="halo-block">

                                                    <div class="products-grid column-3 disable-srollbar">

                                                        <div class="product">


                                                            <div class="product-item">
                                                                <div class="card">
                                                                    <div
                                                                        class="card-product card--text-only card--soft">
                                                                        <div class="card-product__wrapper">
                                                                            <div class="card-media card-media--square">
                                                                                <svg class="placeholder-svg"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                    <path
                                                                                        d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                    <path
                                                                                        d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                    <path
                                                                                        d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-information">
                                                                            <div
                                                                                class="card-information__wrapper text-center">

                                                                                <a class="card-title link-underline capitalize text-center"
                                                                                    role="link" aria-disabled="true">
                                                                                    <span class="text">
                                                                                        Example product title
                                                                                    </span>
                                                                                </a>
                                                                                <div class="card-information__group">
                                                                                    <div class="card-price">

                                                                                        <div
                                                                                            class="price price--sold-out ">
                                                                                            <dl>
                                                                                                <div
                                                                                                    class="price__regular">
                                                                                                    <dt>
                                                                                                        <span
                                                                                                            class="visually-hidden visually-hidden--inline">Regular
                                                                                                            price</span>
                                                                                                    </dt>
                                                                                                    <dd
                                                                                                        class="price__last">
                                                                                                        <span
                                                                                                            class="price-item price-item--regular">
                                                                                                            ₹. 19.99
                                                                                                        </span>
                                                                                                    </dd>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="price__sale">
                                                                                                    <dt
                                                                                                        class="price__compare">
                                                                                                        <span
                                                                                                            class="visually-hidden visually-hidden--inline">Regular
                                                                                                            price</span>
                                                                                                    </dt>
                                                                                                    <dd
                                                                                                        class="price__compare">
                                                                                                        <s
                                                                                                            class="price-item price-item--regular">

                                                                                                        </s>
                                                                                                    </dd>
                                                                                                    <dt>
                                                                                                        <span
                                                                                                            class="visually-hidden visually-hidden--inline">Sale
                                                                                                            price</span>
                                                                                                    </dt>
                                                                                                    <dd
                                                                                                        class="price__last">
                                                                                                        <span
                                                                                                            class="price-item price-item--sale">
                                                                                                            ₹. 19.99
                                                                                                        </span>
                                                                                                    </dd>
                                                                                                </div>
                                                                                                <small
                                                                                                    class="unit-price caption hidden">
                                                                                                    <dt
                                                                                                        class="visually-hidden">
                                                                                                        Unit price</dt>
                                                                                                    <dd
                                                                                                        class="price__last">
                                                                                                        <span></span>
                                                                                                        <span
                                                                                                            aria-hidden="true">/</span>
                                                                                                        <span
                                                                                                            class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                                                        <span>
                                                                                                        </span>
                                                                                                    </dd>
                                                                                                </small>
                                                                                            </dl>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product">


                                                            <div class="product-item">
                                                                <div class="card">
                                                                    <div
                                                                        class="card-product card--text-only card--soft">
                                                                        <div class="card-product__wrapper">
                                                                            <div class="card-media card-media--square">
                                                                                <svg class="placeholder-svg"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M401.7 288.4c-.7-.5-1.6-.5-2.4 0l-.3-.7c-2.6-5.8-7.1-10.1-12.8-12.2l-77.8-31.8-7.1-3.9 1.3-1.7c.2-.3.2-.8-.1-1-.3-.2-.8-.2-1 .1l-1.4 1.9-12-6.6.4-4.5c.1-.8-.5-1.5-1.3-1.5-.8-.1-1.5.5-1.5 1.3l-.1.9-1.4 1.7-13.4-7.4.4-4.3c.1-.8-.5-1.5-1.3-1.6-.8-.1-1.5.5-1.6 1.3l-.1 1-1.2 1.6-13.3-7.3.5-4.4c.1-.8-.5-1.5-1.2-1.6-.8-.1-1.5.5-1.6 1.2l-.4 3.2-17.7-9.8c-5.3-3.1-11.6-3.1-16.5.1-4.6 3-7 8.2-6.3 13.7l1.3 12.6c-8.3 6.5-17.7 10.1-27.2 10.1-8.8 0-17-2.3-24.5-6.7-5.9-3.5-11.1-8.2-15.4-14-2-2.6-5.1-4.9-7.7-4.3-.8.2-2.2.9-2.6 3.2v78l-3.7-.3c-2.5-.2-4.7 1.7-5.3 4.7l-2.3 15.5c-.4 2.2 0 4.4 1.3 6.1.9 1.2 2.2 2 3.7 2.1 19.4 1.2 58.1 2.5 101 2.5 32.5 0 67.4-.8 98.2-3 38.9-2.8 62.8-11.8 73.1-27.4.7-1.1 1.4-2.2 2-3.3.4-1.3.2-2.8-.7-3.5zm-94.5-42.2l.1.1 22 9c-12.2 2.2-24.9.5-36.1-4.9l6.4-8.3 7.6 4.1zm-8.8-4.8l-6.5 8.4-1.5-.7c-.7-.3-1.6-.1-1.9.6-.3.7-.1 1.6.6 1.9l.9.5-2.6 3.3c-.5-.3-1-.5-1.5-.6l1.8-19.2 10.7 5.8zm-12.7 16.3s.1 0 0 0zm-3.2-25.1l-7.2 9-2.7-1.3c-.7-.3-1.6-.1-1.9.6-.3.7-.1 1.6.6 1.9l2.1 1-3.6 4.5c-.5-.3-1-.5-1.5-.7l2.2-21.6 12 6.6zm-14.5 18c.1 0 .1 0 0 0zm-2.6-27.4l-7.4 9.9-2.5-1.2c-.7-.3-1.6-.1-1.9.6-.3.7-.1 1.6.6 1.9l2.1 1-4.3 5.8-1.2-.6 2.8-24 11.8 6.6zm-52-7.4c-.6-4.5 1.3-8.6 5-11 3.7-2.4 8.4-2.6 12.4-.6l-.3.6c-.2.4-.4.9-.6 1.3-.1.3-.3.5-.4.8-2.4 4.8-5.4 9.3-8.8 13.4-2 2.4-4.1 4.5-6.3 6.4l-1-10.9zm-76.1 2.3v-.5c.1-.4.2-.9.5-.9.8-.2 2.9.8 4.7 3.2 4.5 6.1 10 11 16.2 14.7 7.9 4.7 16.7 7.1 26 7.1 14 0 27.6-7 38.3-19.7 3.6-4.3 6.7-8.9 9.2-14 .1-.2.2-.4.3-.7.2-.5.5-1 .7-1.4.1-.1.1-.3.2-.4l17.4 9.6-2.9 25c-4.2.1-7.5 3.5-7.5 7.7 0 .8.1 1.6.4 2.4.2.7 1.1 1.1 1.8.9.7-.2 1.1-1.1.9-1.8-.2-.5-.2-1-.2-1.5 0-2.5 1.9-4.5 4.3-4.8l-.4 3.7c-.1.8.5 1.5 1.2 1.6h.2c.7 0 1.3-.5 1.4-1.3l.1-1 1.3-1.7c.9.9 1.5 2.1 1.5 3.5 0 2.7-2.2 4.8-4.8 4.8-.8 0-1.4.6-1.4 1.4 0 .8.6 1.4 1.4 1.4 4.2 0 7.7-3.4 7.7-7.7 0-2.3-1-4.4-2.7-5.8l4.5-6 5.8 2.9c.2.1.4.1.6.1.5 0 1-.3 1.3-.8.3-.7.1-1.6-.6-1.9l-5.3-2.6 7.4-9.9 1.1.6-2.3 22.8c-4 .2-7.2 3.6-7.2 7.7 0 .6.1 1.2.2 1.7.2.8.9 1.2 1.7 1.1.8-.2 1.2-.9 1.1-1.7-.1-.4-.1-.7-.1-1.1 0-2.4 1.8-4.4 4.1-4.8l-.4 3.7c-.1.8.5 1.5 1.3 1.6h.1c.7 0 1.3-.5 1.4-1.3l.1-.9 1.5-1.9c.9.9 1.5 2.1 1.5 3.5 0 2.7-2.2 4.8-4.8 4.8-.8 0-1.4.6-1.4 1.4s.6 1.4 1.4 1.4c4.2 0 7.7-3.4 7.7-7.7 0-2.3-1-4.3-2.6-5.8l3.7-4.7 5.9 2.9c.2.1.4.1.6.1.5 0 1-.3 1.3-.8.3-.7.1-1.6-.6-1.9l-5.3-2.6 7.1-9 1.4.8-1.9 20.4c-3.9.3-7 3.6-7 7.6 0 .8.1 1.6.4 2.3.2.7 1 1.2 1.8.9.7-.2 1.2-1 .9-1.8-.1-.5-.2-1-.2-1.5 0-2.4 1.7-4.3 3.9-4.7l-.4 3.7c-.1.8.5 1.5 1.3 1.5h.1c.7 0 1.3-.6 1.4-1.3l.1-.9 1.5-2c1 .9 1.7 2.2 1.7 3.6 0 2.7-2.2 4.8-4.8 4.8-.8 0-1.4.6-1.4 1.4s.6 1.4 1.4 1.4c4.2 0 7.7-3.4 7.7-7.7 0-2.4-1.1-4.5-2.8-5.9l2.7-3.5c8.6 4.2 17.9 6.3 27.4 6.3 4.8 0 9.5-.5 14.2-1.6.2-.1.4-.2.6-.4l51.6 21.1c4.2 1.5 7.6 4.5 10 8.4-2.5 2-10.2 7.5-24 11.9-.4.1-.6.5-.5.9.1.3.4.5.7.5h.2c13.8-4.4 21.4-9.8 24.2-12 .2.3.4.7.5 1l.6 1.4c-.6.4-1.2.9-1.8 1.3-30.8 22.3-83 18.6-133.5 14.9l-46.9-4.2c0-1.1-.1-2.2-.1-3.3 10 1.1 66 6.9 103.8 7.3.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7-38.1-.5-94.7-6.4-103.9-7.3-1.4-14.1-7.8-29.6-14-38.7 14.6-3.2 28.2-11.3 38.4-23l5.4-6.2 1.2.6c.7.3 1.6.1 1.9-.6.3-.7.1-1.6-.6-1.9l-2.2-1.1c-.6-.3-1.3-.1-1.7.3l-6.1 7c-12.4 14.2-29.9 22.8-47.9 23.6-1 0-2 .1-3 .1-19.4 0-38.4-7.6-48.7-19.5v-19.8c-.2.7-.2.7-.2.6zm0 24.2c11.1 11.1 29.8 18.1 48.7 18.1 1.1 0 2.1 0 3.1-.1l3.9-.3c2.1 2.9 4.3 6.5 6.2 10.5.1.3.4.4.6.4.1 0 .2 0 .3-.1.4-.2.5-.6.3-.9-1.8-3.7-3.8-7.2-5.9-10.1 1-.1 2-.3 3-.5 0 .1.1.2.1.3 6.8 9.5 13.9 27.4 14.2 42.3l-3-.3v-.2c-.2-7.1-2.1-15.7-5.3-24.3-.1-.4-.6-.5-.9-.4-.4.1-.5.6-.4.9 3.2 8.4 5.1 16.8 5.2 23.8l-70.3-6.4v-52.7zm260.6 51.2c-9.8 14.9-33 23.5-70.9 26.2-71.5 5.1-164.8 2.5-198.8.5-.7 0-1.3-.5-1.6-.9-.7-1-1-2.4-.7-3.8l2.3-15.5c.3-1.4 1.2-2.3 2.2-2.3h.1L258 309.1l3.5.3c2 .1 4 .3 6 .4.6 0 1.2.1 1.8.1 2.2.2 4.3.3 6.5.5h.1c2.1.1 4.2.3 6.3.4.5 0 1.1.1 1.6.1 2.1.1 4.3.3 6.4.4l6.3.3c.5 0 1 0 1.6.1 4.2.2 8.4.3 12.6.4h1.5c2.1 0 4.1.1 6.2.1h6.8c1.2 0 2.4-.1 3.6-.1.6 0 1.2 0 1.8-.1 1.2 0 2.4-.1 3.6-.2.5 0 1.1-.1 1.6-.1 1.7-.1 3.3-.2 4.9-.3h.1c1.7-.1 3.3-.3 4.9-.5.5-.1 1-.1 1.5-.2 1.1-.1 2.3-.3 3.4-.4.6-.1 1.1-.2 1.7-.2 1.1-.2 2.2-.3 3.3-.5.5-.1 1-.2 1.5-.2 1.5-.3 3-.5 4.5-.9h.1c1.5-.3 3-.7 4.5-1 .5-.1.9-.2 1.4-.4 1-.3 2-.5 3-.8.5-.1 1-.3 1.5-.5 1-.3 2-.6 2.9-.9.4-.1.9-.3 1.3-.5 1.4-.5 2.7-1 4-1.5h.1c1.3-.5 2.6-1.1 3.9-1.7l1.2-.6c.9-.4 1.8-.9 2.7-1.3.4-.2.9-.5 1.3-.7.9-.5 1.7-1 2.5-1.5.4-.2.8-.5 1.1-.7 1.2-.8 2.4-1.5 3.5-2.3.4-.3.8-.6 1.3-.9.1-.1.2-.1.2-.2.1 0 0 .3-.2.5z" />
                                                                                    <path
                                                                                        d="M192.5 315.8c-2.7-.1-5.3-.1-7.8-.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7 2.6.1 5.2.1 7.8.2.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7z" />
                                                                                    <path
                                                                                        d="M227.2 312.5c-25.2-2.1-60.2-5.1-83.3-7.7-2.8-.3-5.4 1.7-5.8 4.5-.2 1.5.2 3 1.1 4.2.9 1.2 2.3 1.9 3.8 1.9 6.2.3 19 .9 34.5 1.4.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7-15.5-.5-28.2-1.1-34.5-1.4-1.1-.1-2.1-.6-2.8-1.4-.7-.9-1-2-.8-3.1.3-2.1 2.2-3.5 4.3-3.3 23.2 2.6 58.1 5.6 83.4 7.7.4 0 .7-.3.8-.6 0-.5-.3-.8-.7-.8zm32.5 2.6s-10.3-.8-25.4-2c-.3 0-.7.3-.8.6 0 .4.3.7.6.8 15.1 1.2 25.4 2 25.4 2h.1c.4 0 .7-.3.7-.7.1-.3-.2-.7-.6-.7zm69.1-8.8c10.3-.2 20.1-1.2 29.1-3 .4-.1.6-.5.6-.8-.1-.4-.5-.6-.8-.6-8.9 1.8-18.6 2.8-28.8 3-.4 0-.7.3-.7.7-.1.4.2.7.6.7z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-information">
                                                                            <div
                                                                                class="card-information__wrapper text-center">

                                                                                <a class="card-title link-underline capitalize text-center"
                                                                                    role="link" aria-disabled="true">
                                                                                    <span class="text">
                                                                                        Example product title
                                                                                    </span>
                                                                                </a>
                                                                                <div class="card-information__group">
                                                                                    <div class="card-price">

                                                                                        <div
                                                                                            class="price price--sold-out ">
                                                                                            <dl>
                                                                                                <div
                                                                                                    class="price__regular">
                                                                                                    <dt>
                                                                                                        <span
                                                                                                            class="visually-hidden visually-hidden--inline">Regular
                                                                                                            price</span>
                                                                                                    </dt>
                                                                                                    <dd
                                                                                                        class="price__last">
                                                                                                        <span
                                                                                                            class="price-item price-item--regular">
                                                                                                            ₹. 19.99
                                                                                                        </span>
                                                                                                    </dd>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="price__sale">
                                                                                                    <dt
                                                                                                        class="price__compare">
                                                                                                        <span
                                                                                                            class="visually-hidden visually-hidden--inline">Regular
                                                                                                            price</span>
                                                                                                    </dt>
                                                                                                    <dd
                                                                                                        class="price__compare">
                                                                                                        <s
                                                                                                            class="price-item price-item--regular">

                                                                                                        </s>
                                                                                                    </dd>
                                                                                                    <dt>
                                                                                                        <span
                                                                                                            class="visually-hidden visually-hidden--inline">Sale
                                                                                                            price</span>
                                                                                                    </dt>
                                                                                                    <dd
                                                                                                        class="price__last">
                                                                                                        <span
                                                                                                            class="price-item price-item--sale">
                                                                                                            ₹. 19.99
                                                                                                        </span>
                                                                                                    </dd>
                                                                                                </div>
                                                                                                <small
                                                                                                    class="unit-price caption hidden">
                                                                                                    <dt
                                                                                                        class="visually-hidden">
                                                                                                        Unit price</dt>
                                                                                                    <dd
                                                                                                        class="price__last">
                                                                                                        <span></span>
                                                                                                        <span
                                                                                                            aria-hidden="true">/</span>
                                                                                                        <span
                                                                                                            class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                                                        <span>
                                                                                                        </span>
                                                                                                    </dd>
                                                                                                </small>
                                                                                            </dl>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product">


                                                            <div class="product-item">
                                                                <div class="card">
                                                                    <div
                                                                        class="card-product card--text-only card--soft">
                                                                        <div class="card-product__wrapper">
                                                                            <div class="card-media card-media--square">
                                                                                <svg class="placeholder-svg"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M381.3 247.3c.3-1.2 1.2-3.4 3.4-4.2l2.5-.9c.5-.2.8-.5.9-1l3.8-16.2c.1-.4 0-.8-.2-1.1-.2-.3-.6-.5-1-.6-61.1-8.3-93.8-.3-113.3 4.6-6.4 1.6-11.1 2.7-14.6 2.7s-8.2-1.1-14.6-2.7c-19.5-4.8-52.2-12.9-113.3-4.6-.4.1-.8.3-1 .6-.2.3-.3.7-.2 1.1l3.8 16.2c.1.5.5.9.9 1l2.5.9c2.2.8 3.1 3 3.4 4.2.4 1.4.7 3 1.1 4.6 1.8 7.6 4 17 7.9 25.9-7.6 8.2-13.4 15.3-16.2 18.9-.5.7-.8 1.5-.7 2.4.1.8.5 1.5 1 2 .5.7 1.9 2.6 4.6 3.4 2.4.7 4.6 1 6.6 1 7.8 0 13.4-4.7 17.5-9.4 6.7 5.9 15.6 9.7 27.8 9.7 43.9 0 52.1-24.5 57.5-40.7 3.3-9.8 5.4-15.3 11.4-15.3 6.1 0 8.3 5.6 11.6 15.4 5.4 16.1 13.5 40.6 57.4 40.6 12.4 0 21.4-4 28.2-10.1 4.2 4.8 9.8 9.8 17.8 9.8 2 0 4.2-.3 6.6-1.1 2.6-.8 4.1-2.7 4.6-3.4.6-.5.9-1.2 1-2 .1-.9-.1-1.7-.7-2.4-2.9-3.7-8.9-11-16.7-19.4 3.8-8.7 6-18 7.7-25.4.3-1.5.7-3 1-4.5zm-238.6 54.5c-2.1-.6-3.1-2.3-3.1-2.3-.1-.2-.2-.3-.4-.4-.1-.1-.1-.2-.1-.2 0-.1 0-.2.1-.3 2.7-3.4 8.2-10.1 15.3-17.9 2.5 4.9 5.5 9.6 9.4 13.5-6.9 7.9-13.1 10.1-21.2 7.6zm244.3-3.3c.1.1.1.2.1.3 0 .1 0 .2-.1.2l-.4.4s-1 1.7-3.1 2.3c-8.2 2.5-14.5.2-21.6-8 3.9-4 6.9-8.7 9.3-13.7 7.4 8.1 13 15 15.8 18.5zm-9.5-47.2c-4.8 20.6-12.1 51.7-45.8 51.7-41.8 0-49.2-22.3-54.7-38.6-3.1-9.3-5.8-17.4-14.3-17.4-8.3 0-11 8-14.1 17.3-5.5 16.3-12.9 38.7-54.8 38.7-33.7 0-41-31.1-45.8-51.7-.4-1.7-.8-3.2-1.1-4.7-.8-3.1-2.6-5.3-5.2-6.2l-1.7-.6-3.2-14c59.5-7.9 91.5 0 110.7 4.7 6.6 1.6 11.4 2.8 15.3 2.8s8.7-1.2 15.3-2.8c19.2-4.7 51.2-12.6 110.7-4.7l-3.2 14-1.7.6c-2.5.9-4.4 3.2-5.2 6.2-.5 1.5-.8 3.1-1.2 4.7z" />
                                                                                    <path
                                                                                        d="M383.9 232c0-4.1-13.7-4.1-13.7 0 0 2 3.4 3.1 6.8 3.1 3.5 0 6.9-1 6.9-3.1zm-6.8 1.7c-3.4 0-5.4-1.1-5.4-1.7s2.1-1.7 5.4-1.7c3.4 0 5.4 1.1 5.4 1.7s-2.1 1.7-5.4 1.7zM141.8 232c0 2 3.4 3.1 6.8 3.1s6.8-1.1 6.8-3.1c.1-4-13.6-4-13.6 0zm6.8 1.7c-3.4 0-5.4-1.1-5.4-1.7s2.1-1.7 5.4-1.7 5.4 1.1 5.4 1.7-2 1.7-5.4 1.7zM356 227.6c-7.9-2-36.2-7.4-68 5.5-5.7 2.3-9.4 8-9.1 14.1.9 22.6 7 52.6 48.7 52.6 12.9 0 23.1-3.8 30.2-11.4 11.3-12.1 12.7-30.8 11.8-44.5-.6-7.9-6-14.4-13.6-16.3zm-67.5 6.8c15.7-6.4 30.5-8.2 42.4-8.2 11.9 0 20.8 1.8 24.7 2.8 5.3 1.3 9.4 5.1 11.4 10h-.1c-.1 0-14.3 1.7-36.4 3.5-9 .7-20.2 1.6-32.9 2.2h-.8c-.1 0-.2 0-.3.1-5 .3-10.2.5-15.6.7-.2 0-.3.1-.5.1.4-5.1 3.5-9.4 8.1-11.2zm39.1 64c-39.9 0-46.2-28.5-47.2-50.4.2.1.3.1.5.1 5.8-.2 11.4-.4 16.7-.7 28.4.1 40.9 18.3 51.9 34.4 1.6 2.4 3.2 4.7 4.8 6.9.2.2.4.4.7.5-6.8 6.1-15.9 9.2-27.4 9.2zm29.2-11.1c0-.1-.1-.3-.2-.4-1.6-2.2-3.1-4.4-4.7-6.8-8.8-12.9-19.4-28.3-39.2-33.7 6.5-.4 12.4-.9 17.6-1.3 10.4 5.8 21.4 14.7 33.6 27.3.3.3.6.4 1 .4h.1c-1.8 5.4-4.4 10.4-8.2 14.5zm9-17c-11-11.2-21.1-19.6-30.6-25.5 19.5-1.6 31.9-3.1 32-3.1.2 0 .4-.1.5-.2.2.8.3 1.6.3 2.5.5 6.7.5 16.7-2.2 26.3zM238 233c-31.7-12.9-60-7.5-68-5.5-7.6 1.9-13.1 8.5-13.6 16.4-.9 13.6.5 32.4 11.8 44.5 7.1 7.6 17.3 11.4 30.2 11.4 41.7 0 47.8-30 48.7-52.6.3-6.2-3.4-11.8-9.1-14.2zm-67.6-4.1c7.7-1.9 34.9-7.2 65.7 4.9-8 .9-14.7 1.5-22.6 2.2-5.5.5-11.6 2.6-18.3 6.3-21.8-1.7-35.8-3.4-36-3.4h-.3c2.1-4.9 6.2-8.6 11.5-10zM157.9 244c.1-.9.2-1.8.4-2.6.2.2.4.3.7.3.1 0 12.5 1.5 32 3.1-9.6 6-19.7 14.4-30.7 25.7-2.8-9.7-2.8-19.8-2.4-26.5zm40.5 54.4c-11.5 0-20.6-3.1-27.4-9.2.3-.1.6-.2.8-.5 1.5-2.1 3-4.2 4.6-6.5 11.4-16.5 24.3-35.1 55.1-34 5.1.2 8.8.3 13.6.3.2 0 .3 0 .4-.1-.9 21.9-7.3 50-47.1 50zm46.8-52.7c-4.8 0-8.4-.1-13.5-.3-32.4-1.3-46.4 19-57.6 35.2-1.6 2.3-3 4.4-4.5 6.4-.1.2-.2.3-.2.5-3.9-4.2-6.5-9.2-8.3-14.5h.3c.4 0 .7-.1 1-.4 12.3-12.6 23.4-21.6 34-27.5 6.5-3.6 12.4-5.7 17.6-6.2 8.5-.7 15.7-1.5 24.7-2.4.5-.1 1-.4 1.2-.9 3.5 2.3 5.7 6.1 6 10.2-.4-.1-.5-.1-.7-.1z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-information">
                                                                            <div
                                                                                class="card-information__wrapper text-center">

                                                                                <a class="card-title link-underline capitalize text-center"
                                                                                    role="link" aria-disabled="true">
                                                                                    <span class="text">
                                                                                        Example product title
                                                                                    </span>
                                                                                </a>
                                                                                <div class="card-information__group">
                                                                                    <div class="card-price">

                                                                                        <div
                                                                                            class="price price--sold-out ">
                                                                                            <dl>
                                                                                                <div
                                                                                                    class="price__regular">
                                                                                                    <dt>
                                                                                                        <span
                                                                                                            class="visually-hidden visually-hidden--inline">Regular
                                                                                                            price</span>
                                                                                                    </dt>
                                                                                                    <dd
                                                                                                        class="price__last">
                                                                                                        <span
                                                                                                            class="price-item price-item--regular">
                                                                                                            ₹. 19.99
                                                                                                        </span>
                                                                                                    </dd>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="price__sale">
                                                                                                    <dt
                                                                                                        class="price__compare">
                                                                                                        <span
                                                                                                            class="visually-hidden visually-hidden--inline">Regular
                                                                                                            price</span>
                                                                                                    </dt>
                                                                                                    <dd
                                                                                                        class="price__compare">
                                                                                                        <s
                                                                                                            class="price-item price-item--regular">

                                                                                                        </s>
                                                                                                    </dd>
                                                                                                    <dt>
                                                                                                        <span
                                                                                                            class="visually-hidden visually-hidden--inline">Sale
                                                                                                            price</span>
                                                                                                    </dt>
                                                                                                    <dd
                                                                                                        class="price__last">
                                                                                                        <span
                                                                                                            class="price-item price-item--sale">
                                                                                                            ₹. 19.99
                                                                                                        </span>
                                                                                                    </dd>
                                                                                                </div>
                                                                                                <small
                                                                                                    class="unit-price caption hidden">
                                                                                                    <dt
                                                                                                        class="visually-hidden">
                                                                                                        Unit price</dt>
                                                                                                    <dd
                                                                                                        class="price__last">
                                                                                                        <span></span>
                                                                                                        <span
                                                                                                            aria-hidden="true">/</span>
                                                                                                        <span
                                                                                                            class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                                                        <span>
                                                                                                        </span>
                                                                                                    </dd>
                                                                                                </small>
                                                                                            </dl>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="predictive-search predictive-search--header quickSearchResultsWrap"
                                tabindex="-1" data-predictive-search>
                                <div class="predictive-search__loading-state">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="spinner"
                                        viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30">
                                        </circle>
                                    </svg>
                                </div>
                            </div>

                            <span class="predictive-search-status visually-hidden" role="status"
                                aria-hidden="true"></span>
                        </form>
                    </summary>

                    <div class="search-modal modal__content quickSearch" role="dialog" aria-modal="true"
                        aria-label="Search">
                        <div class="quickSearchResultsWrap" style="display: none;" data-product-to-show="3">
                            <div class="loadingOverlay"></div>
                            <div class="quickSearchResults custom-scrollbar">
                                <div class="container">
                                    <div class="quickSearchResultsBlock quickSearchResultsWidget quickSearchResultsWrap"
                                        data-quick-trending-products>
                                        <div class="quickSearchResults custom-scrollbar">
                                            <div class="container">
                                                <div class="search-block quickSearchTrending">
                                                    <h3 class="search-block-title text-left">
                                                        <span class="text">Trending Now</span>

                                                    </h3>
                                                    <ul class="list-item list-unstyled clearfix">

                                                        <li class="item">
                                                            <a href="/search?q=dempus*&amp;type=product" class="link">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 32 32">
                                                                    <path
                                                                        d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                                </svg>
                                                                <span class="text">dempus</span>
                                                            </a>
                                                        </li>

                                                        <li class="item">
                                                            <a href="/search?q=sample*&amp;type=product" class="link">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 32 32">
                                                                    <path
                                                                        d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                                </svg>
                                                                <span class="text">sample</span>
                                                            </a>
                                                        </li>

                                                        <li class="item">
                                                            <a href="/search?q=magnis*&amp;type=product" class="link">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 32 32">
                                                                    <path
                                                                        d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                                </svg>
                                                                <span class="text">magnis</span>
                                                            </a>
                                                        </li>

                                                        <li class="item">
                                                            <a href="/search?q=loremous-saliduar*&amp;type=product"
                                                                class="link">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 32 32">
                                                                    <path
                                                                        d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                                </svg>
                                                                <span class="text">loremous saliduar</span>
                                                            </a>
                                                        </li>

                                                        <li class="item">
                                                            <a href="/search?q=naminos*&amp;type=product" class="link">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 32 32">
                                                                    <path
                                                                        d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                                </svg>
                                                                <span class="text">naminos</span>
                                                            </a>
                                                        </li>

                                                        <li class="item">
                                                            <a href="/search?q=dinterdum*&amp;type=product"
                                                                class="link">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 32 32">
                                                                    <path
                                                                        d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                                                </svg>
                                                                <span class="text">dinterdum</span>
                                                            </a>
                                                        </li>








                                                    </ul>
                                                </div>
                                                <div class="search-block quickSearchProduct">
                                                    <h3 class="search-block-title text-left">
                                                        <span class="text">Popular Products</span>
                                                    </h3>
                                                    <div class="search-block-content">
                                                        <div class="halo-block">

                                                            <div class="products-grid column-3 disable-srollbar">

                                                                <div class="product">


                                                                    <div class="product-item">
                                                                        <div class="card">
                                                                            <div
                                                                                class="card-product card--text-only card--soft">
                                                                                <div class="card-product__wrapper">
                                                                                    <div
                                                                                        class="card-media card-media--square">
                                                                                        <svg class="placeholder-svg"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 525.5 525.5">
                                                                                            <path
                                                                                                d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                            <path
                                                                                                d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                            <path
                                                                                                d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                            <path
                                                                                                d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-information">
                                                                                    <div
                                                                                        class="card-information__wrapper text-center">

                                                                                        <a class="card-title link-underline capitalize text-center"
                                                                                            role="link"
                                                                                            aria-disabled="true">
                                                                                            <span class="text">
                                                                                                Example product title
                                                                                            </span>
                                                                                        </a>
                                                                                        <div
                                                                                            class="card-information__group">
                                                                                            <div class="card-price">

                                                                                                <div
                                                                                                    class="price price--sold-out ">
                                                                                                    <dl>
                                                                                                        <div
                                                                                                            class="price__regular">
                                                                                                            <dt>
                                                                                                                <span
                                                                                                                    class="visually-hidden visually-hidden--inline">Regular
                                                                                                                    price</span>
                                                                                                            </dt>
                                                                                                            <dd
                                                                                                                class="price__last">
                                                                                                                <span
                                                                                                                    class="price-item price-item--regular">
                                                                                                                    ₹.
                                                                                                                    19.99
                                                                                                                </span>
                                                                                                            </dd>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="price__sale">
                                                                                                            <dt
                                                                                                                class="price__compare">
                                                                                                                <span
                                                                                                                    class="visually-hidden visually-hidden--inline">Regular
                                                                                                                    price</span>
                                                                                                            </dt>
                                                                                                            <dd
                                                                                                                class="price__compare">
                                                                                                                <s
                                                                                                                    class="price-item price-item--regular">

                                                                                                                </s>
                                                                                                            </dd>
                                                                                                            <dt>
                                                                                                                <span
                                                                                                                    class="visually-hidden visually-hidden--inline">Sale
                                                                                                                    price</span>
                                                                                                            </dt>
                                                                                                            <dd
                                                                                                                class="price__last">
                                                                                                                <span
                                                                                                                    class="price-item price-item--sale">
                                                                                                                    ₹.
                                                                                                                    19.99
                                                                                                                </span>
                                                                                                            </dd>
                                                                                                        </div>
                                                                                                        <small
                                                                                                            class="unit-price caption hidden">
                                                                                                            <dt
                                                                                                                class="visually-hidden">
                                                                                                                Unit
                                                                                                                price
                                                                                                            </dt>
                                                                                                            <dd
                                                                                                                class="price__last">
                                                                                                                <span></span>
                                                                                                                <span
                                                                                                                    aria-hidden="true">/</span>
                                                                                                                <span
                                                                                                                    class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                                                                <span>
                                                                                                                </span>
                                                                                                            </dd>
                                                                                                        </small>
                                                                                                    </dl>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product">


                                                                    <div class="product-item">
                                                                        <div class="card">
                                                                            <div
                                                                                class="card-product card--text-only card--soft">
                                                                                <div class="card-product__wrapper">
                                                                                    <div
                                                                                        class="card-media card-media--square">
                                                                                        <svg class="placeholder-svg"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 525.5 525.5">
                                                                                            <path
                                                                                                d="M401.7 288.4c-.7-.5-1.6-.5-2.4 0l-.3-.7c-2.6-5.8-7.1-10.1-12.8-12.2l-77.8-31.8-7.1-3.9 1.3-1.7c.2-.3.2-.8-.1-1-.3-.2-.8-.2-1 .1l-1.4 1.9-12-6.6.4-4.5c.1-.8-.5-1.5-1.3-1.5-.8-.1-1.5.5-1.5 1.3l-.1.9-1.4 1.7-13.4-7.4.4-4.3c.1-.8-.5-1.5-1.3-1.6-.8-.1-1.5.5-1.6 1.3l-.1 1-1.2 1.6-13.3-7.3.5-4.4c.1-.8-.5-1.5-1.2-1.6-.8-.1-1.5.5-1.6 1.2l-.4 3.2-17.7-9.8c-5.3-3.1-11.6-3.1-16.5.1-4.6 3-7 8.2-6.3 13.7l1.3 12.6c-8.3 6.5-17.7 10.1-27.2 10.1-8.8 0-17-2.3-24.5-6.7-5.9-3.5-11.1-8.2-15.4-14-2-2.6-5.1-4.9-7.7-4.3-.8.2-2.2.9-2.6 3.2v78l-3.7-.3c-2.5-.2-4.7 1.7-5.3 4.7l-2.3 15.5c-.4 2.2 0 4.4 1.3 6.1.9 1.2 2.2 2 3.7 2.1 19.4 1.2 58.1 2.5 101 2.5 32.5 0 67.4-.8 98.2-3 38.9-2.8 62.8-11.8 73.1-27.4.7-1.1 1.4-2.2 2-3.3.4-1.3.2-2.8-.7-3.5zm-94.5-42.2l.1.1 22 9c-12.2 2.2-24.9.5-36.1-4.9l6.4-8.3 7.6 4.1zm-8.8-4.8l-6.5 8.4-1.5-.7c-.7-.3-1.6-.1-1.9.6-.3.7-.1 1.6.6 1.9l.9.5-2.6 3.3c-.5-.3-1-.5-1.5-.6l1.8-19.2 10.7 5.8zm-12.7 16.3s.1 0 0 0zm-3.2-25.1l-7.2 9-2.7-1.3c-.7-.3-1.6-.1-1.9.6-.3.7-.1 1.6.6 1.9l2.1 1-3.6 4.5c-.5-.3-1-.5-1.5-.7l2.2-21.6 12 6.6zm-14.5 18c.1 0 .1 0 0 0zm-2.6-27.4l-7.4 9.9-2.5-1.2c-.7-.3-1.6-.1-1.9.6-.3.7-.1 1.6.6 1.9l2.1 1-4.3 5.8-1.2-.6 2.8-24 11.8 6.6zm-52-7.4c-.6-4.5 1.3-8.6 5-11 3.7-2.4 8.4-2.6 12.4-.6l-.3.6c-.2.4-.4.9-.6 1.3-.1.3-.3.5-.4.8-2.4 4.8-5.4 9.3-8.8 13.4-2 2.4-4.1 4.5-6.3 6.4l-1-10.9zm-76.1 2.3v-.5c.1-.4.2-.9.5-.9.8-.2 2.9.8 4.7 3.2 4.5 6.1 10 11 16.2 14.7 7.9 4.7 16.7 7.1 26 7.1 14 0 27.6-7 38.3-19.7 3.6-4.3 6.7-8.9 9.2-14 .1-.2.2-.4.3-.7.2-.5.5-1 .7-1.4.1-.1.1-.3.2-.4l17.4 9.6-2.9 25c-4.2.1-7.5 3.5-7.5 7.7 0 .8.1 1.6.4 2.4.2.7 1.1 1.1 1.8.9.7-.2 1.1-1.1.9-1.8-.2-.5-.2-1-.2-1.5 0-2.5 1.9-4.5 4.3-4.8l-.4 3.7c-.1.8.5 1.5 1.2 1.6h.2c.7 0 1.3-.5 1.4-1.3l.1-1 1.3-1.7c.9.9 1.5 2.1 1.5 3.5 0 2.7-2.2 4.8-4.8 4.8-.8 0-1.4.6-1.4 1.4 0 .8.6 1.4 1.4 1.4 4.2 0 7.7-3.4 7.7-7.7 0-2.3-1-4.4-2.7-5.8l4.5-6 5.8 2.9c.2.1.4.1.6.1.5 0 1-.3 1.3-.8.3-.7.1-1.6-.6-1.9l-5.3-2.6 7.4-9.9 1.1.6-2.3 22.8c-4 .2-7.2 3.6-7.2 7.7 0 .6.1 1.2.2 1.7.2.8.9 1.2 1.7 1.1.8-.2 1.2-.9 1.1-1.7-.1-.4-.1-.7-.1-1.1 0-2.4 1.8-4.4 4.1-4.8l-.4 3.7c-.1.8.5 1.5 1.3 1.6h.1c.7 0 1.3-.5 1.4-1.3l.1-.9 1.5-1.9c.9.9 1.5 2.1 1.5 3.5 0 2.7-2.2 4.8-4.8 4.8-.8 0-1.4.6-1.4 1.4s.6 1.4 1.4 1.4c4.2 0 7.7-3.4 7.7-7.7 0-2.3-1-4.3-2.6-5.8l3.7-4.7 5.9 2.9c.2.1.4.1.6.1.5 0 1-.3 1.3-.8.3-.7.1-1.6-.6-1.9l-5.3-2.6 7.1-9 1.4.8-1.9 20.4c-3.9.3-7 3.6-7 7.6 0 .8.1 1.6.4 2.3.2.7 1 1.2 1.8.9.7-.2 1.2-1 .9-1.8-.1-.5-.2-1-.2-1.5 0-2.4 1.7-4.3 3.9-4.7l-.4 3.7c-.1.8.5 1.5 1.3 1.5h.1c.7 0 1.3-.6 1.4-1.3l.1-.9 1.5-2c1 .9 1.7 2.2 1.7 3.6 0 2.7-2.2 4.8-4.8 4.8-.8 0-1.4.6-1.4 1.4s.6 1.4 1.4 1.4c4.2 0 7.7-3.4 7.7-7.7 0-2.4-1.1-4.5-2.8-5.9l2.7-3.5c8.6 4.2 17.9 6.3 27.4 6.3 4.8 0 9.5-.5 14.2-1.6.2-.1.4-.2.6-.4l51.6 21.1c4.2 1.5 7.6 4.5 10 8.4-2.5 2-10.2 7.5-24 11.9-.4.1-.6.5-.5.9.1.3.4.5.7.5h.2c13.8-4.4 21.4-9.8 24.2-12 .2.3.4.7.5 1l.6 1.4c-.6.4-1.2.9-1.8 1.3-30.8 22.3-83 18.6-133.5 14.9l-46.9-4.2c0-1.1-.1-2.2-.1-3.3 10 1.1 66 6.9 103.8 7.3.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7-38.1-.5-94.7-6.4-103.9-7.3-1.4-14.1-7.8-29.6-14-38.7 14.6-3.2 28.2-11.3 38.4-23l5.4-6.2 1.2.6c.7.3 1.6.1 1.9-.6.3-.7.1-1.6-.6-1.9l-2.2-1.1c-.6-.3-1.3-.1-1.7.3l-6.1 7c-12.4 14.2-29.9 22.8-47.9 23.6-1 0-2 .1-3 .1-19.4 0-38.4-7.6-48.7-19.5v-19.8c-.2.7-.2.7-.2.6zm0 24.2c11.1 11.1 29.8 18.1 48.7 18.1 1.1 0 2.1 0 3.1-.1l3.9-.3c2.1 2.9 4.3 6.5 6.2 10.5.1.3.4.4.6.4.1 0 .2 0 .3-.1.4-.2.5-.6.3-.9-1.8-3.7-3.8-7.2-5.9-10.1 1-.1 2-.3 3-.5 0 .1.1.2.1.3 6.8 9.5 13.9 27.4 14.2 42.3l-3-.3v-.2c-.2-7.1-2.1-15.7-5.3-24.3-.1-.4-.6-.5-.9-.4-.4.1-.5.6-.4.9 3.2 8.4 5.1 16.8 5.2 23.8l-70.3-6.4v-52.7zm260.6 51.2c-9.8 14.9-33 23.5-70.9 26.2-71.5 5.1-164.8 2.5-198.8.5-.7 0-1.3-.5-1.6-.9-.7-1-1-2.4-.7-3.8l2.3-15.5c.3-1.4 1.2-2.3 2.2-2.3h.1L258 309.1l3.5.3c2 .1 4 .3 6 .4.6 0 1.2.1 1.8.1 2.2.2 4.3.3 6.5.5h.1c2.1.1 4.2.3 6.3.4.5 0 1.1.1 1.6.1 2.1.1 4.3.3 6.4.4l6.3.3c.5 0 1 0 1.6.1 4.2.2 8.4.3 12.6.4h1.5c2.1 0 4.1.1 6.2.1h6.8c1.2 0 2.4-.1 3.6-.1.6 0 1.2 0 1.8-.1 1.2 0 2.4-.1 3.6-.2.5 0 1.1-.1 1.6-.1 1.7-.1 3.3-.2 4.9-.3h.1c1.7-.1 3.3-.3 4.9-.5.5-.1 1-.1 1.5-.2 1.1-.1 2.3-.3 3.4-.4.6-.1 1.1-.2 1.7-.2 1.1-.2 2.2-.3 3.3-.5.5-.1 1-.2 1.5-.2 1.5-.3 3-.5 4.5-.9h.1c1.5-.3 3-.7 4.5-1 .5-.1.9-.2 1.4-.4 1-.3 2-.5 3-.8.5-.1 1-.3 1.5-.5 1-.3 2-.6 2.9-.9.4-.1.9-.3 1.3-.5 1.4-.5 2.7-1 4-1.5h.1c1.3-.5 2.6-1.1 3.9-1.7l1.2-.6c.9-.4 1.8-.9 2.7-1.3.4-.2.9-.5 1.3-.7.9-.5 1.7-1 2.5-1.5.4-.2.8-.5 1.1-.7 1.2-.8 2.4-1.5 3.5-2.3.4-.3.8-.6 1.3-.9.1-.1.2-.1.2-.2.1 0 0 .3-.2.5z" />
                                                                                            <path
                                                                                                d="M192.5 315.8c-2.7-.1-5.3-.1-7.8-.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7 2.6.1 5.2.1 7.8.2.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7z" />
                                                                                            <path
                                                                                                d="M227.2 312.5c-25.2-2.1-60.2-5.1-83.3-7.7-2.8-.3-5.4 1.7-5.8 4.5-.2 1.5.2 3 1.1 4.2.9 1.2 2.3 1.9 3.8 1.9 6.2.3 19 .9 34.5 1.4.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7-15.5-.5-28.2-1.1-34.5-1.4-1.1-.1-2.1-.6-2.8-1.4-.7-.9-1-2-.8-3.1.3-2.1 2.2-3.5 4.3-3.3 23.2 2.6 58.1 5.6 83.4 7.7.4 0 .7-.3.8-.6 0-.5-.3-.8-.7-.8zm32.5 2.6s-10.3-.8-25.4-2c-.3 0-.7.3-.8.6 0 .4.3.7.6.8 15.1 1.2 25.4 2 25.4 2h.1c.4 0 .7-.3.7-.7.1-.3-.2-.7-.6-.7zm69.1-8.8c10.3-.2 20.1-1.2 29.1-3 .4-.1.6-.5.6-.8-.1-.4-.5-.6-.8-.6-8.9 1.8-18.6 2.8-28.8 3-.4 0-.7.3-.7.7-.1.4.2.7.6.7z" />
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-information">
                                                                                    <div
                                                                                        class="card-information__wrapper text-center">

                                                                                        <a class="card-title link-underline capitalize text-center"
                                                                                            role="link"
                                                                                            aria-disabled="true">
                                                                                            <span class="text">
                                                                                                Example product title
                                                                                            </span>
                                                                                        </a>
                                                                                        <div
                                                                                            class="card-information__group">
                                                                                            <div class="card-price">

                                                                                                <div
                                                                                                    class="price price--sold-out ">
                                                                                                    <dl>
                                                                                                        <div
                                                                                                            class="price__regular">
                                                                                                            <dt>
                                                                                                                <span
                                                                                                                    class="visually-hidden visually-hidden--inline">Regular
                                                                                                                    price</span>
                                                                                                            </dt>
                                                                                                            <dd
                                                                                                                class="price__last">
                                                                                                                <span
                                                                                                                    class="price-item price-item--regular">
                                                                                                                    ₹.
                                                                                                                    19.99
                                                                                                                </span>
                                                                                                            </dd>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="price__sale">
                                                                                                            <dt
                                                                                                                class="price__compare">
                                                                                                                <span
                                                                                                                    class="visually-hidden visually-hidden--inline">Regular
                                                                                                                    price</span>
                                                                                                            </dt>
                                                                                                            <dd
                                                                                                                class="price__compare">
                                                                                                                <s
                                                                                                                    class="price-item price-item--regular">

                                                                                                                </s>
                                                                                                            </dd>
                                                                                                            <dt>
                                                                                                                <span
                                                                                                                    class="visually-hidden visually-hidden--inline">Sale
                                                                                                                    price</span>
                                                                                                            </dt>
                                                                                                            <dd
                                                                                                                class="price__last">
                                                                                                                <span
                                                                                                                    class="price-item price-item--sale">
                                                                                                                    ₹.
                                                                                                                    19.99
                                                                                                                </span>
                                                                                                            </dd>
                                                                                                        </div>
                                                                                                        <small
                                                                                                            class="unit-price caption hidden">
                                                                                                            <dt
                                                                                                                class="visually-hidden">
                                                                                                                Unit
                                                                                                                price
                                                                                                            </dt>
                                                                                                            <dd
                                                                                                                class="price__last">
                                                                                                                <span></span>
                                                                                                                <span
                                                                                                                    aria-hidden="true">/</span>
                                                                                                                <span
                                                                                                                    class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                                                                <span>
                                                                                                                </span>
                                                                                                            </dd>
                                                                                                        </small>
                                                                                                    </dl>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product">


                                                                    <div class="product-item">
                                                                        <div class="card">
                                                                            <div
                                                                                class="card-product card--text-only card--soft">
                                                                                <div class="card-product__wrapper">
                                                                                    <div
                                                                                        class="card-media card-media--square">
                                                                                        <svg class="placeholder-svg"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 525.5 525.5">
                                                                                            <path
                                                                                                d="M381.3 247.3c.3-1.2 1.2-3.4 3.4-4.2l2.5-.9c.5-.2.8-.5.9-1l3.8-16.2c.1-.4 0-.8-.2-1.1-.2-.3-.6-.5-1-.6-61.1-8.3-93.8-.3-113.3 4.6-6.4 1.6-11.1 2.7-14.6 2.7s-8.2-1.1-14.6-2.7c-19.5-4.8-52.2-12.9-113.3-4.6-.4.1-.8.3-1 .6-.2.3-.3.7-.2 1.1l3.8 16.2c.1.5.5.9.9 1l2.5.9c2.2.8 3.1 3 3.4 4.2.4 1.4.7 3 1.1 4.6 1.8 7.6 4 17 7.9 25.9-7.6 8.2-13.4 15.3-16.2 18.9-.5.7-.8 1.5-.7 2.4.1.8.5 1.5 1 2 .5.7 1.9 2.6 4.6 3.4 2.4.7 4.6 1 6.6 1 7.8 0 13.4-4.7 17.5-9.4 6.7 5.9 15.6 9.7 27.8 9.7 43.9 0 52.1-24.5 57.5-40.7 3.3-9.8 5.4-15.3 11.4-15.3 6.1 0 8.3 5.6 11.6 15.4 5.4 16.1 13.5 40.6 57.4 40.6 12.4 0 21.4-4 28.2-10.1 4.2 4.8 9.8 9.8 17.8 9.8 2 0 4.2-.3 6.6-1.1 2.6-.8 4.1-2.7 4.6-3.4.6-.5.9-1.2 1-2 .1-.9-.1-1.7-.7-2.4-2.9-3.7-8.9-11-16.7-19.4 3.8-8.7 6-18 7.7-25.4.3-1.5.7-3 1-4.5zm-238.6 54.5c-2.1-.6-3.1-2.3-3.1-2.3-.1-.2-.2-.3-.4-.4-.1-.1-.1-.2-.1-.2 0-.1 0-.2.1-.3 2.7-3.4 8.2-10.1 15.3-17.9 2.5 4.9 5.5 9.6 9.4 13.5-6.9 7.9-13.1 10.1-21.2 7.6zm244.3-3.3c.1.1.1.2.1.3 0 .1 0 .2-.1.2l-.4.4s-1 1.7-3.1 2.3c-8.2 2.5-14.5.2-21.6-8 3.9-4 6.9-8.7 9.3-13.7 7.4 8.1 13 15 15.8 18.5zm-9.5-47.2c-4.8 20.6-12.1 51.7-45.8 51.7-41.8 0-49.2-22.3-54.7-38.6-3.1-9.3-5.8-17.4-14.3-17.4-8.3 0-11 8-14.1 17.3-5.5 16.3-12.9 38.7-54.8 38.7-33.7 0-41-31.1-45.8-51.7-.4-1.7-.8-3.2-1.1-4.7-.8-3.1-2.6-5.3-5.2-6.2l-1.7-.6-3.2-14c59.5-7.9 91.5 0 110.7 4.7 6.6 1.6 11.4 2.8 15.3 2.8s8.7-1.2 15.3-2.8c19.2-4.7 51.2-12.6 110.7-4.7l-3.2 14-1.7.6c-2.5.9-4.4 3.2-5.2 6.2-.5 1.5-.8 3.1-1.2 4.7z" />
                                                                                            <path
                                                                                                d="M383.9 232c0-4.1-13.7-4.1-13.7 0 0 2 3.4 3.1 6.8 3.1 3.5 0 6.9-1 6.9-3.1zm-6.8 1.7c-3.4 0-5.4-1.1-5.4-1.7s2.1-1.7 5.4-1.7c3.4 0 5.4 1.1 5.4 1.7s-2.1 1.7-5.4 1.7zM141.8 232c0 2 3.4 3.1 6.8 3.1s6.8-1.1 6.8-3.1c.1-4-13.6-4-13.6 0zm6.8 1.7c-3.4 0-5.4-1.1-5.4-1.7s2.1-1.7 5.4-1.7 5.4 1.1 5.4 1.7-2 1.7-5.4 1.7zM356 227.6c-7.9-2-36.2-7.4-68 5.5-5.7 2.3-9.4 8-9.1 14.1.9 22.6 7 52.6 48.7 52.6 12.9 0 23.1-3.8 30.2-11.4 11.3-12.1 12.7-30.8 11.8-44.5-.6-7.9-6-14.4-13.6-16.3zm-67.5 6.8c15.7-6.4 30.5-8.2 42.4-8.2 11.9 0 20.8 1.8 24.7 2.8 5.3 1.3 9.4 5.1 11.4 10h-.1c-.1 0-14.3 1.7-36.4 3.5-9 .7-20.2 1.6-32.9 2.2h-.8c-.1 0-.2 0-.3.1-5 .3-10.2.5-15.6.7-.2 0-.3.1-.5.1.4-5.1 3.5-9.4 8.1-11.2zm39.1 64c-39.9 0-46.2-28.5-47.2-50.4.2.1.3.1.5.1 5.8-.2 11.4-.4 16.7-.7 28.4.1 40.9 18.3 51.9 34.4 1.6 2.4 3.2 4.7 4.8 6.9.2.2.4.4.7.5-6.8 6.1-15.9 9.2-27.4 9.2zm29.2-11.1c0-.1-.1-.3-.2-.4-1.6-2.2-3.1-4.4-4.7-6.8-8.8-12.9-19.4-28.3-39.2-33.7 6.5-.4 12.4-.9 17.6-1.3 10.4 5.8 21.4 14.7 33.6 27.3.3.3.6.4 1 .4h.1c-1.8 5.4-4.4 10.4-8.2 14.5zm9-17c-11-11.2-21.1-19.6-30.6-25.5 19.5-1.6 31.9-3.1 32-3.1.2 0 .4-.1.5-.2.2.8.3 1.6.3 2.5.5 6.7.5 16.7-2.2 26.3zM238 233c-31.7-12.9-60-7.5-68-5.5-7.6 1.9-13.1 8.5-13.6 16.4-.9 13.6.5 32.4 11.8 44.5 7.1 7.6 17.3 11.4 30.2 11.4 41.7 0 47.8-30 48.7-52.6.3-6.2-3.4-11.8-9.1-14.2zm-67.6-4.1c7.7-1.9 34.9-7.2 65.7 4.9-8 .9-14.7 1.5-22.6 2.2-5.5.5-11.6 2.6-18.3 6.3-21.8-1.7-35.8-3.4-36-3.4h-.3c2.1-4.9 6.2-8.6 11.5-10zM157.9 244c.1-.9.2-1.8.4-2.6.2.2.4.3.7.3.1 0 12.5 1.5 32 3.1-9.6 6-19.7 14.4-30.7 25.7-2.8-9.7-2.8-19.8-2.4-26.5zm40.5 54.4c-11.5 0-20.6-3.1-27.4-9.2.3-.1.6-.2.8-.5 1.5-2.1 3-4.2 4.6-6.5 11.4-16.5 24.3-35.1 55.1-34 5.1.2 8.8.3 13.6.3.2 0 .3 0 .4-.1-.9 21.9-7.3 50-47.1 50zm46.8-52.7c-4.8 0-8.4-.1-13.5-.3-32.4-1.3-46.4 19-57.6 35.2-1.6 2.3-3 4.4-4.5 6.4-.1.2-.2.3-.2.5-3.9-4.2-6.5-9.2-8.3-14.5h.3c.4 0 .7-.1 1-.4 12.3-12.6 23.4-21.6 34-27.5 6.5-3.6 12.4-5.7 17.6-6.2 8.5-.7 15.7-1.5 24.7-2.4.5-.1 1-.4 1.2-.9 3.5 2.3 5.7 6.1 6 10.2-.4-.1-.5-.1-.7-.1z" />
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-information">
                                                                                    <div
                                                                                        class="card-information__wrapper text-center">

                                                                                        <a class="card-title link-underline capitalize text-center"
                                                                                            role="link"
                                                                                            aria-disabled="true">
                                                                                            <span class="text">
                                                                                                Example product title
                                                                                            </span>
                                                                                        </a>
                                                                                        <div
                                                                                            class="card-information__group">
                                                                                            <div class="card-price">

                                                                                                <div
                                                                                                    class="price price--sold-out ">
                                                                                                    <dl>
                                                                                                        <div
                                                                                                            class="price__regular">
                                                                                                            <dt>
                                                                                                                <span
                                                                                                                    class="visually-hidden visually-hidden--inline">Regular
                                                                                                                    price</span>
                                                                                                            </dt>
                                                                                                            <dd
                                                                                                                class="price__last">
                                                                                                                <span
                                                                                                                    class="price-item price-item--regular">
                                                                                                                    ₹.
                                                                                                                    19.99
                                                                                                                </span>
                                                                                                            </dd>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="price__sale">
                                                                                                            <dt
                                                                                                                class="price__compare">
                                                                                                                <span
                                                                                                                    class="visually-hidden visually-hidden--inline">Regular
                                                                                                                    price</span>
                                                                                                            </dt>
                                                                                                            <dd
                                                                                                                class="price__compare">
                                                                                                                <s
                                                                                                                    class="price-item price-item--regular">

                                                                                                                </s>
                                                                                                            </dd>
                                                                                                            <dt>
                                                                                                                <span
                                                                                                                    class="visually-hidden visually-hidden--inline">Sale
                                                                                                                    price</span>
                                                                                                            </dt>
                                                                                                            <dd
                                                                                                                class="price__last">
                                                                                                                <span
                                                                                                                    class="price-item price-item--sale">
                                                                                                                    ₹.
                                                                                                                    19.99
                                                                                                                </span>
                                                                                                            </dd>
                                                                                                        </div>
                                                                                                        <small
                                                                                                            class="unit-price caption hidden">
                                                                                                            <dt
                                                                                                                class="visually-hidden">
                                                                                                                Unit
                                                                                                                price
                                                                                                            </dt>
                                                                                                            <dd
                                                                                                                class="price__last">
                                                                                                                <span></span>
                                                                                                                <span
                                                                                                                    aria-hidden="true">/</span>
                                                                                                                <span
                                                                                                                    class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                                                                <span>
                                                                                                                </span>
                                                                                                            </dd>
                                                                                                        </small>
                                                                                                    </dl>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="predictive-search predictive-search--header quickSearchResultsWrap"
                                        tabindex="-1" data-predictive-search>
                                        <div class="predictive-search__loading-state">
                                            <svg aria-hidden="true" focusable="false" role="presentation"
                                                class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33"
                                                    r="30"></circle>
                                            </svg>
                                        </div>
                                    </div>

                                    <span class="predictive-search-status visually-hidden" role="status"
                                        aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </details>
            </predictive-search>

        </div>
    </div>


    <div class="halo-sidebar halo-sidebar-left halo-sidebar_menu custom-mobile-menu" id="navigation-mobile">
        <div class="halo-sidebar-wrapper custom-scrollbar">
            <div class="site-nav-mobile nav-menu-tab nav-mobile-menu-tab" data-navigation-tab-mobile></div>
            <button type="button" class="halo-sidebar-close halo-sidebar-close-custom" data-menu-close-sidebar
                aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path
                        d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                </svg>
                Close
            </button>
            <div class="site-nav-mobile nav menu-custom-mobile" data-navigation-mobile></div>
            <div class="site-nav-mobile nav-currency-language">
            </div>
        </div>
    </div>

    <script src="//cdn.shopify.com/s/files/1/0194/1736/6592/t/1/assets/booster-page-speed-optimizer.js?23"
        type="text/javascript"></script>
    <script type="text/javascript" src="https://formbuilder.websyms.in/js/function.js"></script>
    <div id="shopify-block-14710238943034738919" class="shopify-block shopify-app-block">




    </div>
    <div id="shopify-block-15683396631634586217" class="shopify-block shopify-app-block">
        <script id="chat-button-container" data-horizontal-position=bottom_right data-vertical-position=lowest
            data-icon=chat_bubble data-text=no_text data-color=#202a36 data-secondary-color=#FFFFFF
            data-ternary-color=#6A6A6A
            data-greeting-message=%F0%9F%91%8B+Hi%2C+message+us+with+any+questions.+We%27re+happy+to+help%21
            data-domain=www.fedus.in data-external-identifier=l3F5g1qdSMM4kgixjKy-kbqh6Qq5sIy6sOe1dnxDGGo>
            </script>


    </div>
</body>

</html>