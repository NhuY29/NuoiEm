<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Hệ sinh thái Nuôi Em</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style id="style_ladi" type="text/css">
        a,
        abbr,
        acronym,
        address,
        applet,
        article,
        aside,
        audio,
        b,
        big,
        blockquote,
        body,
        button,
        canvas,
        caption,
        center,
        cite,
        code,
        dd,
        del,
        details,
        dfn,
        div,
        dl,
        dt,
        em,
        embed,
        fieldset,
        figcaption,
        figure,
        footer,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        header,
        hgroup,
        html,
        i,
        iframe,
        img,
        input,
        ins,
        kbd,
        label,
        legend,
        li,
        mark,
        menu,
        nav,
        object,
        ol,
        output,
        p,
        pre,
        q,
        ruby,
        s,
        samp,
        section,
        select,
        small,
        span,
        strike,
        strong,
        sub,
        summary,
        sup,
        table,
        tbody,
        td,
        textarea,
        tfoot,
        th,
        thead,
        time,
        tr,
        tt,
        u,
        ul,
        var,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        body {
            line-height: 1
        }

        a {
            text-decoration: none
        }

        ol,
        ul {
            list-style: none
        }

        blockquote,
        q {
            quotes: none
        }

        blockquote:after,
        blockquote:before,
        q:after,
        q:before {
            content: '';
            content: none
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        .ladi-loading {
            z-index: 900000000000;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .1)
        }

        .ladi-loading .loading {
            width: 80px;
            height: 80px;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            overflow: hidden;
            position: absolute
        }

        .ladi-loading .loading div {
            position: absolute;
            width: 6px;
            height: 6px;
            background: #fff;
            border-radius: 50%;
            animation: ladi-loading 1.2s linear infinite
        }

        .ladi-loading .loading div:nth-child(1) {
            animation-delay: 0s;
            top: 37px;
            left: 66px
        }

        .ladi-loading .loading div:nth-child(2) {
            animation-delay: -.1s;
            top: 22px;
            left: 62px
        }

        .ladi-loading .loading div:nth-child(3) {
            animation-delay: -.2s;
            top: 11px;
            left: 52px
        }

        .ladi-loading .loading div:nth-child(4) {
            animation-delay: -.3s;
            top: 7px;
            left: 37px
        }

        .ladi-loading .loading div:nth-child(5) {
            animation-delay: -.4s;
            top: 11px;
            left: 22px
        }

        .ladi-loading .loading div:nth-child(6) {
            animation-delay: -.5s;
            top: 22px;
            left: 11px
        }

        .ladi-loading .loading div:nth-child(7) {
            animation-delay: -.6s;
            top: 37px;
            left: 7px
        }

        .ladi-loading .loading div:nth-child(8) {
            animation-delay: -.7s;
            top: 52px;
            left: 11px
        }

        .ladi-loading .loading div:nth-child(9) {
            animation-delay: -.8s;
            top: 62px;
            left: 22px
        }

        .ladi-loading .loading div:nth-child(10) {
            animation-delay: -.9s;
            top: 66px;
            left: 37px
        }

        .ladi-loading .loading div:nth-child(11) {
            animation-delay: -1s;
            top: 62px;
            left: 52px
        }

        .ladi-loading .loading div:nth-child(12) {
            animation-delay: -1.1s;
            top: 52px;
            left: 62px
        }

        @keyframes ladi-loading {

            0%,
            100%,
            20%,
            80% {
                transform: scale(1)
            }

            50% {
                transform: scale(1.5)
            }
        }

        .ladipage-message {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 10000000000;
            background: rgba(0, 0, 0, .3)
        }

        .ladipage-message .ladipage-message-box {
            width: 400px;
            max-width: calc(100% - 50px);
            height: 160px;
            border: 1px solid rgba(0, 0, 0, .3);
            background-color: #fff;
            position: fixed;
            top: calc(50% - 155px);
            left: 0;
            right: 0;
            margin: auto;
            border-radius: 10px
        }

        .ladipage-message .ladipage-message-box span {
            display: block;
            background-color: rgba(6, 21, 40, .05);
            color: #000;
            padding: 12px 15px;
            font-weight: 600;
            font-size: 16px;
            line-height: 16px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px
        }

        .ladipage-message .ladipage-message-box .ladipage-message-text {
            display: -webkit-box;
            font-size: 14px;
            padding: 0 20px;
            margin-top: 10px;
            line-height: 18px;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .ladipage-message .ladipage-message-box .ladipage-message-close {
            display: block;
            position: absolute;
            right: 15px;
            bottom: 10px;
            margin: 0 auto;
            padding: 10px 0;
            border: none;
            width: 80px;
            text-transform: uppercase;
            text-align: center;
            color: #000;
            background-color: #e6e6e6;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            line-height: 14px;
            font-weight: 600;
            cursor: pointer
        }

        .lightbox-screen {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            z-index: 9000000080;
            background: rgba(0, 0, 0, .5)
        }

        .lightbox-screen .lightbox-close {
            position: absolute;
            z-index: 9000000090;
            cursor: pointer
        }

        .lightbox-screen .lightbox-hidden {
            display: none
        }

        .lightbox-screen .lightbox-close {
            width: 16px;
            height: 16px;
            margin: 10px;
            background-repeat: no-repeat;
            background-position: center center;
            background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")
        }

        body {
            font-size: 12px;
            -ms-text-size-adjust: none;
            -moz-text-size-adjust: none;
            -o-text-size-adjust: none;
            -webkit-text-size-adjust: none;
            background-color: #fff;
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .ladi-transition {
            transition: all 150ms linear 0s;
        }

        .opacity-0 {
            opacity: 0;
        }

        .height-0 {
            height: 0 !important;
        }

        .pointer-events-none {
            pointer-events: none;
        }

        .transition-parent-collapse-height {
            transition: height 150ms linear 0s;
        }

        .transition-parent-collapse-top {
            transition: top 150ms linear 0s;
        }

        .transition-readmore {
            transition: height 350ms linear 0s;
        }

        .transition-collapse {
            transition: height 150ms linear 0s;
        }

        body.grab {
            cursor: grab;
        }

        .ladi-wraper {
            width: 100%;
            min-height: 100%;
            overflow: hidden;
        }

        .ladi-container {
            position: relative;
            margin: 0 auto;
            height: 100%;
        }

        .ladi-element {
            position: absolute;
        }

        .ladi-overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            pointer-events: none;
        }

        @media (hover: hover) {
            .ladi-check-hover {
                opacity: 0;
            }
        }

        .ladi-section {
            margin: 0 auto;
            position: relative;
        }

        .ladi-section[data-tab-id] {
            display: none;
        }

        .ladi-section.selected[data-tab-id] {
            display: block;
        }

        .ladi-section .ladi-section-background {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .ladi-box {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .ladi-group {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .ladi-shape {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .ladi-cart-number {
            position: absolute;
            top: -2px;
            right: -7px;
            background: #f36e36;
            text-align: center;
            width: 18px;
            height: 18px;
            line-height: 18px;
            font-size: 12px;
            font-weight: bold;
            color: #fff;
            border-radius: 100%;
        }

        .ladi-image {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .ladi-image .ladi-image-background {
            background-repeat: no-repeat;
            background-position: left top;
            background-size: cover;
            background-attachment: scroll;
            background-origin: content-box;
            position: absolute;
            margin: 0 auto;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .ladi-headline {
            width: 100%;
            display: inline-block;
            word-break: break-word;
            background-size: cover;
            background-position: center center;
        }

        .ladi-headline a {
            text-decoration: underline;
        }

        .ladi-paragraph {
            width: 100%;
            display: inline-block;
            word-break: break-word;
        }

        .ladi-paragraph a {
            text-decoration: underline;
        }

        .ladi-line {
            position: relative;
        }

        .ladi-line .ladi-line-container {
            border-bottom: 0 !important;
            border-right: 0 !important;
            width: 100%;
            height: 100%;
        }

        a[data-action] {
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            cursor: pointer
        }

        a:visited {
            color: inherit
        }

        a:link {
            color: inherit
        }

        [data-opacity="0"] {
            opacity: 0
        }

        [data-hidden="true"] {
            display: none
        }

        [data-action="true"] {
            cursor: pointer
        }

        .ladi-hidden {
            display: none
        }

        .ladi-animation-hidden {
            visibility: hidden !important;
            opacity: 0 !important
        }

        .element-click-selected {
            cursor: pointer
        }

        .is-2nd-click {
            cursor: pointer
        }

        .ladi-button-shape.is-2nd-click,
        .ladi-accordion-shape.is-2nd-click {
            z-index: 1
        }

        .backdrop-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 90000060
        }

        .backdrop-dropbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 90000040
        }

        @media (min-width: 768px) {
            .ladi-section .ladi-container {
                width: 960px;
            }
        }

        @media (max-width: 767px) {
            .ladi-section .ladi-container {
                width: 420px;
            }
        }
    </style>

    <style id="style_element" type="text/css">
        #SECTION207>.ladi-section-background {
            background-size: cover;
            background-origin: content-box;
            background-position: 50% 0%;
            background-repeat: repeat;
            background-attachment: scroll;
            filter: contrast(128%) brightness(98%) blur(1px);
            opacity: 0.68;
        }

        #IMAGE228,
        #IMAGE228>.ladi-image>.ladi-image-background,
        #IMAGE234,
        #IMAGE234>.ladi-image>.ladi-image-background,
        #IMAGE243,
        #IMAGE243>.ladi-image>.ladi-image-background,
        #IMAGE269,
        #IMAGE292,
        #IMAGE292>.ladi-image>.ladi-image-background,
        #IMAGE225,
        #IMAGE225>.ladi-image>.ladi-image-background,
        #IMAGE221,
        #IMAGE221>.ladi-image>.ladi-image-background,
        #IMAGE333,
        #IMAGE333>.ladi-image>.ladi-image-background,
        #IMAGE334,
        #IMAGE334>.ladi-image>.ladi-image-background {
            width: 60px;
            height: 60px;
        }

        #IMAGE228,
        #IMAGE234,
        #IMAGE240,
        #IMAGE243,
        #IMAGE269,
        #IMAGE292,
        #IMAGE333,
        #IMAGE334 {
            top: 0px;
            left: 10px;
        }

        #IMAGE228>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/logo-duoc-day-20200527042231.png");
        }

        #IMAGE228:hover>.ladi-image,
        #HEADLINE229>.ladi-headline:hover,
        #IMAGE231:hover>.ladi-image,
        #HEADLINE232>.ladi-headline:hover,
        #IMAGE234:hover>.ladi-image,
        #HEADLINE235>.ladi-headline:hover,
        #IMAGE240:hover>.ladi-image,
        #HEADLINE241>.ladi-headline:hover,
        #IMAGE243:hover>.ladi-image,
        #HEADLINE244>.ladi-headline:hover,
        #HEADLINE254>.ladi-headline:hover,
        #IMAGE255:hover>.ladi-image,
        #HEADLINE266>.ladi-headline:hover,
        #IMAGE267:hover>.ladi-image,
        #IMAGE269:hover>.ladi-image,
        #HEADLINE270>.ladi-headline:hover,
        #IMAGE273:hover>.ladi-image,
        #IMAGE292:hover>.ladi-image,
        #HEADLINE293>.ladi-headline:hover,
        #HEADLINE295>.ladi-headline:hover,
        #IMAGE296:hover>.ladi-image,
        #IMAGE307:hover>.ladi-image,
        #HEADLINE298>.ladi-headline:hover,
        #IMAGE306:hover>.ladi-image,
        #IMAGE310:hover>.ladi-image,
        #HEADLINE312>.ladi-headline:hover,
        #IMAGE315:hover>.ladi-image,
        #IMAGE225:hover>.ladi-image,
        #HEADLINE226>.ladi-headline:hover,
        #HEADLINE222>.ladi-headline:hover,
        #HEADLINE209>.ladi-headline:hover,
        #HEADLINE211>.ladi-headline:hover,
        #IMAGE280:hover>.ladi-image,
        #IMAGE263:hover>.ladi-image,
        #IMAGE246:hover>.ladi-image,
        #HEADLINE247>.ladi-headline:hover,
        #IMAGE249:hover>.ladi-image,
        #HEADLINE250>.ladi-headline:hover,
        #IMAGE261:hover>.ladi-image,
        #HEADLINE262>.ladi-headline:hover,
        #HEADLINE264>.ladi-headline:hover,
        #IMAGE275:hover>.ladi-image,
        #HEADLINE276>.ladi-headline:hover,
        #IMAGE278:hover>.ladi-image,
        #HEADLINE279>.ladi-headline:hover,
        #IMAGE318:hover>.ladi-image,
        #HEADLINE319>.ladi-headline:hover,
        #IMAGE221:hover>.ladi-image,
        #IMAGE333:hover>.ladi-image,
        #HEADLINE333>.ladi-headline:hover,
        #IMAGE334:hover>.ladi-image,
        #HEADLINE334>.ladi-headline:hover,
        #IMAGE331:hover>.ladi-image,
        #PARAGRAPH12>.ladi-paragraph:hover,
        #PARAGRAPH286>.ladi-paragraph:hover,
        #PARAGRAPH285>.ladi-paragraph:hover,
        #HEADLINE69>.ladi-headline:hover,
        #PARAGRAPH287>.ladi-paragraph:hover,
        #BOX52>.ladi-box:hover,
        #BOX76>.ladi-box:hover,
        #BOX288>.ladi-box:hover {
            opacity: 1;
        }

        #HEADLINE229,
        #GROUP227,
        #HEADLINE232,
        #GROUP230,
        #HEADLINE235,
        #GROUP233,
        #HEADLINE241,
        #GROUP239,
        #HEADLINE244,
        #HEADLINE254,
        #GROUP256,
        #HEADLINE266,
        #HEADLINE270,
        #HEADLINE293,
        #GROUP291,
        #HEADLINE222,
        #HEADLINE333,
        #GROUP333,
        #HEADLINE334,
        #GROUP334 {
            width: 80px;
        }

        #HEADLINE229,
        #HEADLINE235,
        #HEADLINE244,
        #HEADLINE270,
        #HEADLINE293,
        #HEADLINE333,
        #HEADLINE334 {
            top: 73px;
            left: 0px;
        }

        #HEADLINE229>.ladi-headline,
        #HEADLINE232>.ladi-headline,
        #HEADLINE235>.ladi-headline,
        #HEADLINE241>.ladi-headline,
        #HEADLINE244>.ladi-headline,
        #HEADLINE254>.ladi-headline,
        #HEADLINE266>.ladi-headline,
        #HEADLINE270>.ladi-headline,
        #HEADLINE293>.ladi-headline,
        #HEADLINE295>.ladi-headline,
        #HEADLINE298>.ladi-headline,
        #HEADLINE312>.ladi-headline,
        #HEADLINE226>.ladi-headline,
        #HEADLINE247>.ladi-headline,
        #HEADLINE250>.ladi-headline,
        #HEADLINE262>.ladi-headline,
        #HEADLINE276>.ladi-headline,
        #HEADLINE279>.ladi-headline,
        #HEADLINE319>.ladi-headline,
        #HEADLINE333>.ladi-headline,
        #HEADLINE334>.ladi-headline {
            font-family: QmFybGLUJvbGQudHRm;
            font-size: 16px;
            line-height: 1.6;
            color: rgb(0, 0, 0);
            text-align: center;
        }

        #IMAGE231>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/logo-duoc-hoc-20221119101658-6-egn.png");
        }

        #HEADLINE232,
        #HEADLINE241,
        #HEADLINE295,
        #HEADLINE247,
        #HEADLINE250,
        #HEADLINE262,
        #HEADLINE276,
        #HEADLINE279 {
            left: 0px;
        }

        #IMAGE234>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/59fb4d0b9bc14c499ef70892/185993-1552989499.svg");
        }

        #IMAGE240>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/binh-20220410212025.png");
        }

        #IMAGE243>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/dsb-20200527043023.png");
        }

        #GROUP242 {
            width: 80px;
            height: 123px;
        }

        #HEADLINE254,
        #HEADLINE266 {
            top: 54.5px;
            left: 0px;
        }

        #IMAGE255,
        #IMAGE255>.ladi-image>.ladi-image-background,
        #IMAGE267,
        #IMAGE267>.ladi-image>.ladi-image-background {
            width: 49.9995px;
            height: 49.9995px;
        }

        #IMAGE255,
        #IMAGE267 {
            top: 0px;
            left: 15px;
        }

        #IMAGE255>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s350x350/59fb4d0b9bc14c499ef70892/ao-1552989938.png");
        }

        #IMAGE267>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/59fb4d0b9bc14c499ef70892/201571-1552989499.svg");
        }

        #GROUP265 {
            width: 80px;
            height: 104.5px;
        }

        #IMAGE269>.ladi-image>.ladi-image-background {
            height: 60px;
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/duoc-hoc-20231006105611-tapba.jpeg");
        }

        #IMAGE269>.ladi-image,
        #IMAGE333>.ladi-image {
            -webkit-mask: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20preserveAspectRatio%3D%22none%22%20viewBox%3D%220%200%2029.77%2029.77%22%20class%3D%22%22%3E%3Ccircle%20cx%3D%2214.89%22%20cy%3D%2214.89%22%20r%3D%2214.89%22%3E%3C%2Fcircle%3E%3C%2Fsvg%3E") 0% 0% / 100% 100%;
        }

        #GROUP268 {
            width: 80px;
            height: 175px;
            display: none !important;
        }

        #IMAGE273,
        #IMAGE273>.ladi-image>.ladi-image-background {
            width: 169.833px;
            height: 153.958px;
        }

        #IMAGE273>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s500x500/59fb4d0b9bc14c499ef70892/3-1541577888.png");
        }

        #IMAGE292>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/bedu-20200818043443.png");
        }

        #HEADLINE295,
        #GROUP294,
        #HEADLINE312 {
            width: 87px;
        }

        #IMAGE307>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/3144737-20210913123421.png");
        }

        #HEADLINE298 {
            width: 98px;
        }

        #IMAGE306>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s350x350/59fb4d0b9bc14c499ef70892/1612672-20210913123420.png");
        }

        #IMAGE310,
        #IMAGE310>.ladi-image>.ladi-image-background {
            width: 64.027px;
            height: 64.027px;
        }

        #IMAGE310>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/trong-cay-20220310210807.png");
        }

        #IMAGE315>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/loc-20220410212025.png");
        }

        #IMAGE225>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/logo-asnr-200-20191125231531.png");
        }

        #HEADLINE222>.ladi-headline {
            font-family: QmFybGLUJvbGQudHRm;
            font-size: 16px;
            line-height: 1.6;
            color: rgb(0, 0, 0);
        }

        #HEADLINE209>.ladi-headline {
            font-family: QmFybGLUJvbGQudHRm;
            font-weight: bold;
            line-height: 1.2;
            color: rgb(13, 132, 67);
            text-align: left;
        }

        #HEADLINE211>.ladi-headline {
            font-family: QmVsbGYSSZWdbGFyLnRZg;
            color: rgb(84, 84, 84);
        }

        #IMAGE246>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/bh-20200527044024.jpg");
        }

        #IMAGE249>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/logo-em-soi-20200527044108.png");
        }

        #IMAGE261>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/suc-manh-2000-logo-slogan-png-20200313091937.png");
        }

        #HEADLINE264>.ladi-headline {
            font-family: Montserrat, sans-serif;
            font-weight: bold;
            line-height: 1.2;
            color: rgb(12, 132, 67);
            text-align: left;
        }

        #SHAPE272>.ladi-shape {
            transform: rotate(486deg);
        }

        #SHAPE272:hover>.ladi-shape {
            transform: rotate(0deg);
            opacity: 1;
        }

        #SHAPE272 svg:last-child {
            fill: rgb(200, 31, 23);
        }

        #IMAGE275>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/sach-nay-la-de-xay-truong-20200527061556.jpg");
        }

        #IMAGE278>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/crownd-20200527062223.png");
        }

        #IMAGE318>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/matuthien-logo-20210604202150.png");
        }

        #IMAGE221>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/59fb4d0b9bc14c499ef70892/1com-20200527040358.svg");
        }

        #IMAGE333>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/logo-phong-tin-hoc-20231006105347-mp5fp.jpg");
        }

        #IMAGE334>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/59fb4d0b9bc14c499ef70892/di-ra-tu-ban-20200527042809.svg");
        }

        #IMAGE331,
        #IMAGE331>.ladi-image>.ladi-image-background {
            width: 69px;
            height: 45.756px;
        }

        #IMAGE331>.ladi-image>.ladi-image-background {
            background-image: url("https://w.ladicdn.com/s400x350/59fb4d0b9bc14c499ef70892/2-suc-manh-2000-20221119104056-tkvof.png");
        }

        #SECTION9>.ladi-section-background,
        #SECTION51>.ladi-section-background {
            background-color: rgb(255, 255, 255);
        }

        #PARAGRAPH12>.ladi-paragraph,
        #PARAGRAPH286>.ladi-paragraph,
        #PARAGRAPH287>.ladi-paragraph {
            font-family: QmFybGLUlZGlbSdGY;
            line-height: 1.4;
            color: rgb(0, 0, 0);
            text-align: left;
        }

        #PARAGRAPH285 {
            width: 366px;
        }

        #PARAGRAPH285>.ladi-paragraph {
            font-family: QmFybGLUlZGlbSdGY;
            font-size: 16px;
            line-height: 1.8;
            color: rgb(0, 0, 0);
        }

        #HEADLINE69>.ladi-headline {
            font-family: Montserrat, sans-serif;
            font-size: 30px;
            line-height: 1;
            color: rgb(66, 66, 66);
        }

        #LINE205>.ladi-line>.ladi-line-container {
            border-top: 1px solid rgb(222, 222, 222);
            border-right: 1px solid rgb(222, 222, 222);
            border-bottom: 1px solid rgb(222, 222, 222);
            border-left: 0px !important;
        }

        #LINE205>.ladi-line {
            width: 100%;
            padding: 8px 0px;
        }

        #BOX52>.ladi-box>.ladi-overlay,
        #BOX76>.ladi-box>.ladi-overlay,
        #BOX288>.ladi-box>.ladi-overlay {
            background-color: rgba(0, 0, 0, 0.48);
        }

        #BOX52>.ladi-box,
        #BOX76>.ladi-box,
        #BOX288>.ladi-box {
            background-size: cover;
            background-origin: content-box;
            background-position: 0% 0%;
            background-repeat: no-repeat;
            background-attachment: scroll;
            box-shadow: rgb(161, 161, 161) 3px 3px 5px 0px;
        }

        @media (min-width: 768px) {
            #SECTION207 {
                height: 758px;
            }

            #SECTION207>.ladi-section-background {
                background-image: url("https://w.ladicdn.com/s1440x758/57b167c9ca57d39c18a1c57c/slider-4.jpg");
            }

            #GROUP227,
            #GROUP230,
            #GROUP233,
            #GROUP239,
            #GROUP334 {
                height: 124px;
            }

            #GROUP227 {
                top: 293.223px;
                left: 512.084px;
            }

            #IMAGE231,
            #IMAGE231>.ladi-image>.ladi-image-background {
                width: 60px;
                height: 60px;
            }

            #IMAGE231 {
                left: 10px;
            }

            #HEADLINE232,
            #HEADLINE241 {
                top: 73px;
            }

            #GROUP230 {
                top: 372.223px;
                left: 362.984px;
            }

            #GROUP233 {
                top: 348.223px;
                left: 89px;
            }

            #IMAGE240,
            #IMAGE240>.ladi-image>.ladi-image-background,
            #IMAGE315,
            #IMAGE315>.ladi-image>.ladi-image-background {
                width: 70px;
                height: 70px;
            }

            #GROUP239 {
                top: 17.165px;
                left: 9px;
            }

            #GROUP242 {
                top: 217.702px;
                left: 707px;
            }

            #GROUP256 {
                height: 105.5px;
                top: 149.723px;
                left: 9px;
            }

            #GROUP265 {
                top: 390.723px;
                left: 271px;
            }

            #IMAGE269>.ladi-image>.ladi-image-background {
                width: 62.16px;
            }

            #GROUP268 {
                top: 217.702px;
                left: 812.984px;
            }

            #IMAGE273 {
                top: 202.223px;
                left: 197px;
            }

            #GROUP291 {
                height: 148px;
                top: 268.223px;
                left: 0px;
            }

            #HEADLINE295 {
                top: 65px;
            }

            #IMAGE296,
            #IMAGE296>.ladi-image>.ladi-image-background {
                width: 65px;
                height: 65px;
            }

            #IMAGE296 {
                left: 7.5px;
            }

            #IMAGE296>.ladi-image>.ladi-image-background {
                background-image: url("https://w.ladicdn.com/s400x400/59fb4d0b9bc14c499ef70892/mortarboard-20210913124803.png");
            }

            #GROUP294 {
                height: 115px;
                top: 0px;
                left: 180.5px;
            }

            #IMAGE307,
            #IMAGE307>.ladi-image>.ladi-image-background {
                width: 57.7768px;
                height: 57.7768px;
            }

            #HEADLINE298 {
                top: 74.558px;
                left: 9px;
            }

            #IMAGE306,
            #IMAGE306>.ladi-image>.ladi-image-background {
                width: 38.5988px;
                height: 38.5988px;
            }

            #IMAGE306 {
                top: 25.178px;
                left: 38.7006px;
            }

            #GROUP308 {
                width: 107px;
                height: 125.558px;
                top: 17.165px;
                left: 89px;
            }

            #IMAGE310 {
                top: 7.363px;
                left: 282.486px;
            }

            #HEADLINE312 {
                top: 72.363px;
                left: 271px;
            }

            #IMAGE315 {
                top: 20.915px;
                left: 9px;
            }

            #IMAGE225 {
                top: 49.165px;
                left: 382.984px;
            }

            #HEADLINE226 {
                width: 134px;
                top: 149.723px;
                left: 415.984px;
            }

            #HEADLINE222 {
                top: 103.944px;
                left: 374.984px;
            }

            #GROUP330 {
                width: 892.984px;
                height: 496.223px;
                top: 236.25px;
                left: 13px;
            }

            #HEADLINE209 {
                width: 326px;
            }

            #HEADLINE209>.ladi-headline {
                font-size: 36px;
            }

            #HEADLINE211 {
                width: 322px;
                top: 95px;
                left: 0px;
            }

            #HEADLINE211>.ladi-headline {
                font-size: 16px;
                line-height: 1.2;
                text-align: left;
            }

            #GROUP213 {
                width: 326px;
                height: 133px;
                top: 100.25px;
                left: 60.3964px;
            }

            #IMAGE280,
            #IMAGE280>.ladi-image>.ladi-image-background {
                width: 123px;
                height: 123px;
            }

            #IMAGE280 {
                top: -16.75px;
                left: 39px;
            }

            #IMAGE280>.ladi-image>.ladi-image-background {
                background-image: url("https://w.ladicdn.com/s450x450/59fb4d0b9bc14c499ef70892/logo-asnr-200-20191125231531.png");
            }

            #IMAGE263,
            #IMAGE263>.ladi-image>.ladi-image-background {
                width: 488.033px;
                height: 406.307px;
            }

            #IMAGE263 {
                top: 0px;
                left: 107.984px;
            }

            #IMAGE263>.ladi-image>.ladi-image-background {
                background-image: url("https://w.ladicdn.com/s800x750/57b167c9ca57d39c18a1c57c/khung-box.png");
            }

            #IMAGE246,
            #IMAGE246>.ladi-image>.ladi-image-background {
                width: 61.9832px;
                height: 61.9834px;
            }

            #IMAGE246,
            #IMAGE249,
            #IMAGE261,
            #IMAGE275,
            #IMAGE278 {
                left: 10.3305px;
            }

            #HEADLINE247,
            #HEADLINE250,
            #HEADLINE262,
            #HEADLINE276,
            #HEADLINE279,
            #HEADLINE319 {
                width: 83px;
            }

            #HEADLINE247 {
                top: 75.4132px;
            }

            #GROUP245 {
                width: 82.6443px;
                height: 127.066px;
                top: 213.555px;
                left: 182.364px;
            }

            #IMAGE249,
            #IMAGE249>.ladi-image>.ladi-image-background,
            #IMAGE261,
            #IMAGE261>.ladi-image>.ladi-image-background,
            #IMAGE318,
            #IMAGE318>.ladi-image>.ladi-image-background {
                width: 61.9832px;
                height: 61.9831px;
            }

            #HEADLINE250,
            #HEADLINE262 {
                top: 75.4127px;
            }

            #GROUP248 {
                width: 83px;
                height: 126.413px;
                top: 213.555px;
                left: 265.008px;
            }

            #GROUP260 {
                width: 82.6443px;
                height: 101.239px;
                top: 213.555px;
                left: 107.984px;
            }

            #HEADLINE264 {
                width: 337px;
                top: 140.468px;
                left: 145.174px;
            }

            #HEADLINE264>.ladi-headline {
                font-size: 23px;
            }

            #SHAPE272 {
                width: 114.167px;
                height: 114.167px;
                top: 182.917px;
                left: 0px;
            }

            #IMAGE275,
            #IMAGE275>.ladi-image>.ladi-image-background,
            #IMAGE278,
            #IMAGE278>.ladi-image>.ladi-image-background {
                width: 61.9832px;
                height: 61.9832px;
            }

            #HEADLINE276,
            #HEADLINE279 {
                top: 75.4129px;
            }

            #GROUP274 {
                width: 83px;
                height: 152.413px;
                top: 213.555px;
                left: 347.652px;
            }

            #GROUP277 {
                width: 82.6443px;
                height: 152.892px;
                top: 213.555px;
                left: 435.462px;
            }

            #IMAGE318 {
                left: 0px;
            }

            #HEADLINE319 {
                top: 11.9831px;
                left: 61.9832px;
            }

            #GROUP317 {
                width: 144.983px;
                height: 61.9831px;
                top: 124.034px;
                left: 357.982px;
            }

            #IMAGE221 {
                top: 352.057px;
                left: 275.984px;
            }

            #GROUP329 {
                width: 596.017px;
                height: 412.057px;
                top: -2.75px;
                left: 449px;
            }

            #GROUP333 {
                height: 150px;
                top: 602.5px;
                left: 197px;
            }

            #GROUP334 {
                top: 602.5px;
                left: 459.992px;
            }

            #IMAGE331 {
                top: 334.187px;
                left: 465.72px;
            }

            #SECTION9 {
                height: 614px;
            }

            #PARAGRAPH12 {
                width: 452px;
                top: 34px;
                left: 467px;
            }

            #PARAGRAPH12>.ladi-paragraph,
            #PARAGRAPH286>.ladi-paragraph,
            #PARAGRAPH287>.ladi-paragraph {
                font-size: 15px;
            }

            #PARAGRAPH286 {
                width: 518px;
                top: 315px;
                left: 467px;
            }

            #PARAGRAPH285 {
                top: 34px;
                left: 26.364px;
            }

            #SECTION51 {
                height: 690px;
            }

            #HEADLINE69 {
                width: 433px;
                top: 33px;
                left: 0px;
            }

            #HEADLINE69>.ladi-headline {
                text-align: left;
            }

            #LINE205 {
                width: 960px;
                top: 114px;
                left: 0px;
            }

            #PARAGRAPH287 {
                width: 953px;
                top: 430px;
                left: 3.5px;
            }

            #BOX52,
            #BOX288 {
                width: 326.462px;
                height: 306px;
            }

            #BOX52 {
                top: 89px;
                left: 0px;
            }

            #BOX52>.ladi-box {
                background-image: url("https://w.ladicdn.com/s650x650/59fb4d0b9bc14c499ef70892/bh-20200527044024.jpg");
            }

            #BOX76>.ladi-box {
                background-image: url("https://w.ladicdn.com/s600x650/59fb4d0b9bc14c499ef70892/sach-nay-la-de-xay-truong-20200527061556.jpg");
            }

            #BOX288 {
                top: 89px;
                left: 336.228px;
            }

            #BOX288>.ladi-box {
                background-image: url("https://w.ladicdn.com/s650x650/59fb4d0b9bc14c499ef70892/logo-em-soi-20200527044108.png");
            }
        }

        @media (max-width: 767px) {
            #SECTION207 {
                height: 1911.85px;
            }

            #SECTION207>.ladi-section-background {
                background-image: url("https://w.ladicdn.com/s768x1911/57b167c9ca57d39c18a1c57c/slider-4.jpg");
            }
           
            #IMAGE296>.ladi-image>.ladi-image-background {
                background-image: url("https://w.ladicdn.com/s350x350/59fb4d0b9bc14c499ef70892/mortarboard-20210913124803.png");
            }
            #IMAGE263>.ladi-image>.ladi-image-background {
                background-image: url("https://w.ladicdn.com/s700x700/57b167c9ca57d39c18a1c57c/khung-box.png");
            }
        }
    </style>
    <script src="https://w.ladicdn.com/ladichat/ladichat.min.js?ver=1716292797366" async=""></script>
</head>

<body>
    <div class="ladi-wraper">
        <div id="SECTION207" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-container">
                <div id="GROUP330" class="ladi-element">
                    <div class="ladi-group"><a target="_blank" id="GROUP227" class="ladi-element">
                            <div class="ladi-group">
                                <div id="IMAGE228" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                                <div id="HEADLINE229" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">4. Được Dạy</h3>
                                </div>
                            </div>
                        </a>
                        <div id="GROUP230" class="ladi-element">
                            <div class="ladi-group">
                                <div id="IMAGE231" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                                <div id="HEADLINE232" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">6. Được Học</h3>
                                </div>
                            </div>
                        </div><a href="http://dochoicu.nuoiem.com/" target="_blank" id="GROUP233" class="ladi-element" data-replace-href="http://dochoicu.nuoiem.com/">
                            <div class="ladi-group">
                                <div id="IMAGE234" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                                <div id="HEADLINE235" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">9. Đồ chơi cũ</h3>
                                </div>
                            </div>
                        </a>
                        <div data-action="true" id="GROUP239" class="ladi-element">
                            <div class="ladi-group"><a href="http://locnuocuonglien.nuoiem.com/" target="_blank" id="IMAGE240" class="ladi-element" data-replace-href="http://locnuocuonglien.nuoiem.com/">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </a><a href="http://locnuocuonglien.nuoiem.com/" target="_blank" id="HEADLINE241" class="ladi-element" data-replace-href="http://locnuocuonglien.nuoiem.com/">
                                    <h3 class="ladi-headline ladi-transition">3. Nước Uống Sạch</h3>
                                </a></div>
                        </div><a href="http://dungsibat.nuoiem.com/" target="_blank" id="GROUP242" class="ladi-element" data-replace-href="http://dungsibat.nuoiem.com/">
                            <div class="ladi-group">
                                <div id="IMAGE243" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                                <div id="HEADLINE244" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">8. Dũng Sĩ Bạt</h3>
                                </div>
                            </div>
                        </a>
                        <div id="GROUP256" class="ladi-element">
                            <div class="ladi-group">
                                <div id="HEADLINE254" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">11. Áo ấm đồng phục<br></h3>
                                </div>
                                <div id="IMAGE255" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="GROUP265" class="ladi-element">
                            <div class="ladi-group"><a href="http://tusach.nuoiem.com/" target="_blank" id="HEADLINE266" class="ladi-element" data-replace-href="http://tusach.nuoiem.com/">
                                    <h3 class="ladi-headline ladi-transition">7. Tủ Sách Vùng Cao<br></h3>
                                </a>
                                <div id="IMAGE267" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-action="true" id="GROUP268" class="ladi-element">
                            <div class="ladi-group"><a href="https://diratuban.nuoiem.com/" target="_blank" id="IMAGE269" class="ladi-element" data-replace-href="https://diratuban.nuoiem.com/">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </a><a href="https://diratuban.nuoiem.com/" target="_blank" id="HEADLINE270" class="ladi-element" data-replace-href="https://diratuban.nuoiem.com/">
                                    <h3 class="ladi-headline ladi-transition">5. Được Học - Đỡ đầu Latop cũ</h3>
                                </a></div>
                        </div>
                        <div id="IMAGE273" class="ladi-element">
                            <div class="ladi-image ladi-transition">
                                <div class="ladi-image-background"></div>
                            </div>
                        </div>
                        <div data-action="true" id="GROUP291" class="ladi-element">
                            <div class="ladi-group"><a href="http://bedutusinuno.nuoiem.com/" target="_blank" id="IMAGE292" class="ladi-element" data-replace-href="http://bedutusinuno.nuoiem.com/">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </a><a href="http://bedutusinuno.nuoiem.com/" target="_blank" id="HEADLINE293" class="ladi-element" data-replace-href="http://bedutusinuno.nuoiem.com/">
                                    <h3 class="ladi-headline ladi-transition">10. Bếp đun tự sinh nước nóng</h3>
                                </a></div>
                        </div>
                        <div id="GROUP294" class="ladi-element">
                            <div class="ladi-group">
                                <div id="HEADLINE295" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">13.Học bổng NE 500<br></h3>
                                </div>
                                <div id="IMAGE296" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                            </div>
                        </div><a href="http://bepgascongnghiep.nuoiem.com/" target="_blank" id="GROUP308" class="ladi-element" data-replace-href="http://bepgascongnghiep.nuoiem.com/">
                            <div class="ladi-group">
                                <div id="IMAGE307" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                                <div id="HEADLINE298" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">12. Bếp gas công nghiệp<br></h3>
                                </div>
                                <div id="IMAGE306" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div id="IMAGE310" class="ladi-element">
                            <div class="ladi-image ladi-transition">
                                <div class="ladi-image-background"></div>
                            </div>
                        </div>
                        <div id="HEADLINE312" class="ladi-element">
                            <h3 class="ladi-headline ladi-transition">14.Mỗi học sinh trồng 2 cây xanh<br></h3>
                        </div><a href="http://locnuocuonglien.nuoiem.com/" target="_blank" id="IMAGE315" class="ladi-element" data-replace-href="http://locnuocuonglien.nuoiem.com/">
                            <div class="ladi-image ladi-transition">
                                <div class="ladi-image-background"></div>
                            </div>
                        </a>
                        <div id="IMAGE225" class="ladi-element">
                            <div class="ladi-image ladi-transition">
                                <div class="ladi-image-background"></div>
                            </div>
                        </div>
                        <div id="HEADLINE226" class="ladi-element">
                            <h3 class="ladi-headline ladi-transition">2. Sức mạnh 2000<br>Xây trường<br>Cầu<br>Khu nội trú<br>Nhà hạnh phúc<br></h3>
                        </div>
                        <div id="HEADLINE222" class="ladi-element">
                            <h3 class="ladi-headline ladi-transition">1. Nuôi Em</h3>
                        </div>
                    </div>
                </div>
                <div id="GROUP213" class="ladi-element">
                    <div class="ladi-group">
                        <div id="HEADLINE209" class="ladi-element">
                            <h1 class="ladi-headline ladi-transition">HỆ SINH THÁI NUÔI EM LÀ ĐÂY</h1>
                        </div>
                        <div id="HEADLINE211" class="ladi-element">
                            <h6 class="ladi-headline ladi-transition">Hỗ trợ cho trẻ bản cao một cách tối ưu và tránh lãng phí nhất</h6>
                        </div>
                    </div>
                </div>
                <div id="GROUP329" class="ladi-element">
                    <div class="ladi-group">
                        <div id="IMAGE263" class="ladi-element">
                            <div class="ladi-image ladi-transition">
                                <div class="ladi-image-background"></div>
                            </div>
                        </div><a href="http://baohiemxemay.nuoiem.com/" target="_blank" id="GROUP245" class="ladi-element" data-replace-href="http://baohiemxemay.nuoiem.com/">
                            <div class="ladi-group">
                                <div id="IMAGE246" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                                <div id="HEADLINE247" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">Bảo Hiểm Xe Máy</h3>
                                </div>
                            </div>
                        </a><a href="http://emsoivatruong.anhsangnuirung.com/" target="_blank" id="GROUP248" class="ladi-element" data-replace-href="http://emsoivatruong.anhsangnuirung.com/">
                            <div class="ladi-group">
                                <div id="IMAGE249" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                                <div id="HEADLINE250" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">Em sỏi và trường<br></h3>
                                </div>
                            </div>
                        </a><a href="http://sucmanh2000.com/" target="_blank" id="GROUP260" class="ladi-element" data-replace-href="http://sucmanh2000.com/">
                            <div class="ladi-group">
                                <div id="IMAGE261" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                                <div id="HEADLINE262" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">SM2000</h3>
                                </div>
                            </div>
                        </a>
                        <div id="HEADLINE264" class="ladi-element">
                            <h1 class="ladi-headline ladi-transition">DỰ ÁN GÂY QUỸ</h1>
                        </div>
                        <div id="SHAPE272" class="ladi-element">
                            <div class="ladi-shape ladi-transition"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 300 300" fill="rgba(200, 31, 23, 1.0)" class=""></svg></div>
                        </div><a href="http://sachnayladexaytruong.nuoiem.com/" target="_blank" id="GROUP274" class="ladi-element" data-replace-href="http://sachnayladexaytruong.nuoiem.com/">
                            <div class="ladi-group">
                                <div id="IMAGE275" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                                <div id="HEADLINE276" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">Sách này là<br>để xây trường<br></h3>
                                </div>
                            </div>
                        </a>
                        <div id="GROUP277" class="ladi-element">
                            <div class="ladi-group">
                                <div id="IMAGE278" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                                <div id="HEADLINE279" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">Nguồn lực khác từ cộng đồng<br></h3>
                                </div>
                            </div>
                        </div><a href="https://www.matuthien.com/" target="_blank" id="GROUP317" class="ladi-element" data-replace-href="https://www.matuthien.com/">
                            <div class="ladi-group">
                                <div id="IMAGE318" class="ladi-element">
                                    <div class="ladi-image ladi-transition">
                                        <div class="ladi-image-background"></div>
                                    </div>
                                </div>
                                <div id="HEADLINE319" class="ladi-element">
                                    <h3 class="ladi-headline ladi-transition">Mã từ thiện</h3>
                                </div>
                            </div>
                        </a>
                        <div id="IMAGE221" class="ladi-element">
                            <div class="ladi-image ladi-transition">
                                <div class="ladi-image-background"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-action="true" id="GROUP333" class="ladi-element">
                    <div class="ladi-group"><a href="https://www.facebook.com/phongtinhocchoem" target="_blank" id="IMAGE333" class="ladi-element" data-replace-href="https://www.facebook.com/phongtinhocchoem">
                            <div class="ladi-image ladi-transition">
                                <div class="ladi-image-background"></div>
                            </div>
                        </a><a href="https://www.facebook.com/phongtinhocchoem" target="_blank" id="HEADLINE333" class="ladi-element" data-replace-href="https://www.facebook.com/phongtinhocchoem">
                            <h3 class="ladi-headline ladi-transition">8. Phòng tin học cho em</h3>
                        </a></div>
                </div>
                <div data-action="true" id="GROUP334" class="ladi-element">
                    <div class="ladi-group"><a href="https://diratuban.nuoiem.com/" target="_blank" id="IMAGE334" class="ladi-element" data-replace-href="https://diratuban.nuoiem.com/">
                            <div class="ladi-image ladi-transition">
                                <div class="ladi-image-background"></div>
                            </div>
                        </a><a href="https://diratuban.nuoiem.com/" target="_blank" id="HEADLINE334" class="ladi-element" data-replace-href="https://diratuban.nuoiem.com/">
                            <h3 class="ladi-headline ladi-transition">5. Đi Ra Từ Bản</h3>
                        </a></div>
                </div>               
            </div>
        </div>
    </div>
</div>