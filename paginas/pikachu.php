<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/pikachu.css">




    <title>Surfing Pikachu</title>
</head>

<body class="bottom">

    <svg viewBox="0 0 948 948" aria-labelledby="uniqueTitleID uniqueDescID" role="img">
        <title id="uniqueTitleID">Surfing Pikachu</title>
        <desc id="uniqueDescID">Well well well, this Pikachu is not afraid of water.</desc>
        <defs>
            <linearGradient id="boardGradient" x1="380" x2="640" y1="500" y2="770" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#e5bbd8" />
                <stop offset=".34" stop-color="#e5bbd8" />
                <stop offset=".40" stop-color="#ffeea9" />
                <stop offset=".68" stop-color="#ffeea9" />
                <stop offset=".74" stop-color="#cae7f9" />
                <stop offset="1" stop-color="#cae7f9" />
            </linearGradient>
            <linearGradient id="waveGradient" x1="456" x2="456" y1="980" y2="678" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#c6aad1" />
                <stop offset="1" stop-color="#8dd7f2" />
            </linearGradient>
            <filter id="blurry" height="150%" width="150%" x="-25%" y="-25%">
                <feGaussianBlur in="SourceGraphic" stdDeviation="3" result="blur" />
            </filter>
            <g id="wave" stroke="var(--color-stroke-3)" stroke-linecap="round" stroke-miterlimit="10"
                stroke-width="8.5">
                <path fill="url(#waveGradient)"
                    d="M119.37,811.58c-3.92-36.49-57.2-31.31-68.57-.59-8.53,23-.41,45,24.1,63,29.22,21.38,83.58,10.27,108.87-24.81C203.72,821.47,198.27,789,196.7,781c-.94-4.77-2.25-9.34-2.4-9.85,0,0-6.77-22.63-23.05-40.06-24.48-26.2-76.5-39-114.48-19.67C-8.18,744.48-5.29,798.26-20,793.91c-10-3-18.72-4.13-27.07-3.77-23.38,1-41.51,11-49,16-29.13,19.17-38.79,48.2-41,55.54-1,3.41-13.53,47,8.5,80,8.77,13.12,26.12,34.76,117.18,40.09,61.15,3.57,175,0,211.82-6.43,39.37-6.81,72.33-7.66,83.59-74.09,6.69-39.47-7.73-68-22.86-83.3-24.32-24.53-49.54-32.76-64.49-36.9" />
            </g>
        </defs>
        <!--   <rect width="100%" height="100%" fill="red"/>  -->
        <g id="sky">
            <path id="cloud2" fill="var(--color-highlight)"
                d="M220.24,88.87C221,70.88,203.78,47.05,175,47s-45,21.21-48.16,35.4C125,90.59,111.5,80.5,87,94.1c-11.41,6.34-24.28,21-26.59,37.47-2.93,20.93,6.82,30.93,17.32,37.68,31.37,20.17,162.6,17.6,180.92-7.58,16-22,3.66-49-11.34-59C230.25,91.27,220,94.5,220.24,88.87Z" />
            <path id="cloud1" fill="var(--color-highlight)"
                d="M897.9,175.24c-3.11-11.94,1-66.33-69.21-69-72.73-2.76-85.32,55.71-90.79,62-2.48,2.85-17.91-12.9-54,11-25.66,17-19,45.55-22,46-24.66,3.67-34.3,22-37,35-6,29,19.67,35.67,31,36,80.2,2.36,282.34,21,316.67-5.67,26.82-20.82,16.78-67.42-3.67-88.33C939.24,171.91,899.9,182.91,897.9,175.24Z" />
        </g>
        <g id="backwaves" opacity="0.33" transform="scale(0.85)">
            <use xlink:href="#wave" x="900" />
            <use xlink:href="#wave" x="600" />
            <use xlink:href="#wave" x="300" />
            <use xlink:href="#wave" />
        </g>
        <g id="surf" opacity="0">
            <g id="surfboard" stroke="var(--color-stroke-2)" stroke-miterlimit="10" stroke-width="8.5">
                <path id="surfboard-fin" fill="var(--color-board-fin)"
                    d="M393.32,708.18c-6.49,9.25-37.85,52.4-75,52-10.5-.12-14-3.95-15-5.82-3-5.38-6-33.93-3-58.18" />
                <path id="surfboard-bottom" fill="var(--color-board)"
                    d="M221.71,676.69c0-27.25,135.54-49.6,162.85-56.79C578,569,807.69,585.11,808.44,597.86c2.78,47.15-53.72,92-316.5,117.5C264.94,737.36,221.71,723.43,221.71,676.69Z" />
                <path id="surfboard-top" fill="url(#boardGradient)"
                    d="M223.52,679.36c-6.74-24.26,67.6-51.79,161-70.34,84.66-16.82,416.38-39.66,421.38-13.66,5.66,29.43-36.08,80.39-317,103C315,712.36,233.52,715.36,223.52,679.36Z" />
            </g>
            <ellipse filter="url(#blurry)" stroke="0" id="shadow" cx="460" cy="650" fill="var(--color-stroke-2)"
                opacity=".40" rx="158" ry="30" style="mix-blend-mode:multiply" />
        </g>
        <g id="pika" opacity="0">
            <g id="tail">
                <path id="tail-fill" fill="var(--color-main)"
                    d="M333,566.5c-12.5,0-33.75,2.25-36-3-4.07-9.49-.48-18.62-6-30.75-3.75-8.25-21.62-7.45-47.5-9.75-8.57-.76,8.37-48.36,2-67.5-3.67-11-119.18-18.6-125.18,0-9,27.84-1,94.54,12.68,96,50.49,5.38,72.46-15,73.5-2.5,1,12-1,16.46,10.52,17.71C238.33,569,265.25,556,269,560c6.89,7.35,5.25,21,12,30.5,5.34,7.52,22.18,0,58.5-6.5" />
                <path id="trail-bit" fill="var(--color-tail)"
                    d="M333,566.5c-10.65.27-25.39-.9-31.57-.41-2.67.21-3.88-8.83-6.47-11.11-2.88-2.52-3.92,10.35-5.71,10-2-.37-6.19-1.9-7.06-1.81-1.45.14.75,8.82.75,10.62,0,1.21-6.82-2.87-8.56-1.41,0,0,3.95,17.77,8.71,20,5.47,2.56,10.63,1.54,22.48-1.3,7.83-1.87,19.38-4.46,33.93-7.08" />
                <path id="trail-stroke" fill="none" stroke="var(--color-stroke-1)" stroke-miterlimit="10"
                    stroke-width="8.5"
                    d="M333,566.5c-12.5,0-33.75,2.25-36-3-4.07-9.49-.48-18.62-6-30.75-3.75-8.25-21.62-7.45-47.5-9.75-8.57-.76,8.37-48.36,2-67.5-3.67-11-119.18-18.6-125.18,0-9,27.84-1,94.54,12.68,96,50.49,5.38,72.46-15,73.5-2.5,1,12-1,16.46,10.52,17.71C238.33,569,265.25,556,269,560c6.89,7.35,5.25,21,12,30.5,5.34,7.52,22.18,0,58.5-6.5" />
            </g>
            <g id="right-feet">
                <ellipse id="right-feet-path" cx="575.28" cy="632.5" fill="var(--color-main)"
                    stroke="var(--color-stroke-1)" stroke-miterlimit="10" stroke-width="8.5" rx="38.28" ry="13.5" />
            </g>
            <g id="right-arm">
                <path id="right-arm-path" fill="var(--color-main)" stroke="var(--color-stroke-1)" stroke-miterlimit="10"
                    stroke-width="8.5"
                    d="M582.5,463c16-.91,29.38-.83,39.5-.5,15.78.51,22.78,1.61,25.5,6.5s0,10.95-1.5,14.5c-2.56,6-7.8,13.79-23,22.5a117.53,117.53,0,0,1-44.5,14.5" />
            </g>
            <g id="right-ear">
                <path id="right-ear-path" fill="var(--color-main)" stroke="var(--color-stroke-1)" stroke-miterlimit="10"
                    stroke-width="8.5"
                    d="M477.5,332.5A415.43,415.43,0,0,1,452,289c-9.82-19.38-14-31.42-16.5-43.5-3.14-15.08-5.4-25.92-.5-29.5,9.59-7,40.3,18.43,56.5,35,4,4.12,17.24,18,30.77,41a251.1,251.1,0,0,1,26.23,63" />
                <path id="right-ear-tip" fill="var(--color-stroke-1)"
                    d="M511.49,274.71a198.25,198.25,0,0,0-20-23.71c-19.29-19.55-48.45-40.88-56.5-35-4.9,3.58-2.64,14.42.5,29.5a126.69,126.69,0,0,0,5,17.67,64.37,64.37,0,0,1,67.79,7.73" />
            </g>
            <g id="body">
                <path id="body-fill" fill="var(--color-main)"
                    d="M353.5,370c31.56-37.42,77.26-44.64,92.5-47,16.93-2.62,58.19-9,97.3,15.57a123.84,123.84,0,0,1,43.2,46.93c11.78,22.58,13.24,43,14,55,2.27,35.84-10,37.91-8.71,73.54,1.23,32.55,11.87,40.71,6.21,67.46-1.5,7.08-4.91,22.4-16,35.5-9.48,11.19-23.68,19.74-77,27-60.3,8.21-90.44,12.32-123.64-1.71C368.19,636.73,349.48,628.82,335,610c-21.78-28.31-18.68-61.45-12-123C329.72,425.14,333.08,394.21,353.5,370Z" />
                <g id="face">
                    <path id="body-check-right" fill="var(--color-cheek)"
                        d="M597.25,414.84c-6-2.06-12.52-.89-17.23,9.88-4.89,11.19-3.44,22.12,6.05,30.86,1.16,1.07,10.83,6.52,13.95,1.79C602.69,453.32,602.09,416.52,597.25,414.84Z" />
                    <circle id="body-cheek-left" cx="403" cy="457.12" r="26" fill="var(--color-cheek)" />
                    <path id="body-eye-left" fill="var(--color-stroke-1)"
                        d="M448.75,376.08c-11-2.5-24.11,3.78-28.25,15.25-2.55,7.07-1.87,16.59,4.25,22.92,8.23,8.51,22.88,7.71,31.67.33,7.78-6.53,11.48-18.65,6.58-28C458.76,378.5,450.14,376.4,448.75,376.08Z" />
                    <path id="body-eye-right" fill="var(--color-stroke-1)"
                        d="M546.8,366.85c-9.47,6.73-1.12,35.17,9.16,36.9,5.29.89,10.25-4.15,10.62-5,6.92-15.58-2.66-26.08-5.54-28.67C557.69,367.07,550.84,364,546.8,366.85Z" />
                    <circle id="body-eye-left-light" cx="449.17" cy="390.5" r="8.5" fill="var(--color-highlight)" />
                    <path id="body-eye-right-light" fill="var(--color-highlight)"
                        d="M549.14,372c-4.42,5,.09,11.53,4.83,12.25a5.56,5.56,0,0,0,5.5-3.08c.92-2-1.66-7.52-5.08-9C554,372,550.52,370.41,549.14,372Z" />
                    <rect id="body-eyebrow-left" width="62.46" height="15.95" x="424.44" y="366.36"
                        fill="var(--color-main)" transform="rotate(19.2 455.62 374.28)" />
                    <rect id="body-eyebrow-right" width="35.87" height="13.75" x="522.29" y="363.46"
                        fill="var(--color-main)" transform="rotate(125.31 540.23 370.36)" />
                    <g id="mouth">
                        <path id="mouth-fill" fill="var(--color-mouth)"
                            d="M503.5,434s-1.51,27.73,7.13,32.38a10.87,10.87,0,0,0,6.59,1.21,10,10,0,0,0,3.45-1.49c3.33-2.29,7.92-17.09,11.58-37.72h0c-5.78-2.32-10.51-6.82-11.25-6.16-5.87,5.22-17.5,11.78-17.5,11.78Z" />
                        <path id="mouth-tongue" fill="var(--color-tongue)"
                            d="M529.12,444.46c0-1.46-4.71-1.78-11.08-1.87a33.84,33.84,0,0,0-12,1.8c-1,.35-1.83.71-2.53,1h0c-.81,8.08,4.35,19.58,7.15,21a12.49,12.49,0,0,0,6.59,1.21,8.94,8.94,0,0,0,3.45-1.49C525.71,462.67,529.12,446.58,529.12,444.46Z" />
                        <path id="mouth-top-stroke" fill="none" stroke="var(--color-stroke-1)" stroke-miterlimit="10"
                            stroke-width="5.67"
                            d="M487.13,424.5c7.51,8.72,12.82,10.06,16.37,9.5,7.87-1.23,14.54-11.68,17.5-11.78,2.63-.09,6,5.81,11.25,6.16,4.38.29,8.22-3.14,10.88-6.25" />
                        <path id="mouth-bottom-stroke" fill="none" stroke="var(--color-stroke-1)" stroke-miterlimit="10"
                            stroke-width="5.67"
                            d="M532.25,428.38C528.59,449,524,463.81,520.67,466.1a10,10,0,0,1-3.45,1.49,11.23,11.23,0,0,1-6.59-1.21c-4.2-2.13-7.39-15-7.13-32.38" />
                    </g>
                </g>
                <path id="body-body-stroke" fill="none" stroke="var(--color-stroke-1)" stroke-miterlimit="10"
                    stroke-width="8.5"
                    d="M353.5,370c31.56-37.42,77.26-44.64,92.5-47,16.93-2.62,58.19-9,97.3,15.57a123.84,123.84,0,0,1,43.2,46.93A128.33,128.33,0,0,1,598,418.8a146.9,146.9,0,0,1,2.5,21.7,109.48,109.48,0,0,1-.67,22.15c-2.51,17-9,25-8,51.39,1.23,32.55,11.87,40.71,6.21,67.46-1.5,7.08-4.91,22.4-16,35.5-9.48,11.19-23.68,19.74-77,27-60.3,8.21-90.44,12.32-123.64-1.71C368.19,636.73,349.48,628.82,335,610c-21.78-28.31-18.68-61.45-12-123C329.72,425.14,333.08,394.21,353.5,370Z" />
            </g>
            <g id="left-feet">
                <path id="left-feet-path" fill="var(--color-main)" stroke="var(--color-stroke-1)" stroke-miterlimit="10"
                    stroke-width="8.5"
                    d="M347.52,646.88c.84-11.24,19.29-21.2,35.44-21,19,.27,38.64,14.76,37.52,25.76a8.36,8.36,0,0,1-3.6,6.73c-10.17,8-56.43,3.16-67.28-3.83C348.2,653.66,347.26,650.38,347.52,646.88Z" />
            </g>
            <g id="left-ear">
                <path id="left-ear-path" fill="var(--color-main)" stroke="var(--color-stroke-1)" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-width="8.5"
                    d="M360,403a273.78,273.78,0,0,1-55.5-57.5c-26.88-37.66-32.37-66-34-77.5-1.55-10.93-4.59-29.18,3-33.5,7.82-4.45,22.68,8.19,41.5,24.5a376.78,376.78,0,0,1,52,55.5,495.17,495.17,0,0,1,31.5,46" />
                <g id="left-ear-tip">
                    <path fill="var(--color-stroke-1)"
                        d="M302,285a49.23,49.23,0,0,1,25-15.08q-5.71-5.43-12-10.92c-18.82-16.31-33.68-28.95-41.5-24.5-7.59,4.32-4.55,22.57-3,33.5,1.29,9.11,5,28.69,19.74,55.08C289.89,319.71,288.25,300.67,302,285Z" />
                </g>
            </g>
            <g id="left-arm">
                <path id="left-arm-path" fill="var(--color-main)" stroke="var(--color-stroke-1)" stroke-linecap="round"
                    stroke-miterlimit="10" stroke-width="8.5"
                    d="M337,468.5a124.37,124.37,0,0,0-29.47,3.12c-11.6,2.67-35.86,8.23-38,20.88-.27,1.55-.8,6,5,13.5,15,19.38,46,23.82,57.5,25" />
            </g>
        </g>
        <g id="frontwaves">
            <use xlink:href="#wave" x="700" />
            <use xlink:href="#wave" x="400" />
            <use xlink:href="#wave" x="40" />
        </g>
        <g id="sparkles" stroke="var(--color-stroke-3)">
            <g transform="translate(80,10) scale(0.85)">
                <use xlink:href="#sparkle1" />
            </g>
            <g transform="translate(660,425) scale(0.85)">
                <use xlink:href="#sparkle1" />
            </g>
            <g transform="translate(565,575) scale(0.85)">
                <use xlink:href="#sparkle2" />
            </g>
            <g transform="translate(600,160)">
                <use xlink:href="#sparkle1" />
            </g>
            <g transform="translate(680,145) scale(0.85)">
                <use xlink:href="#sparkle2" />
            </g>
            <g id="sparkle2" fill="none" stroke-width="5.67" stroke-linecap="round">
                <line id="line2" x1="49.06" x2="73.06" y1="285.49" y2="285.49" />
                <line id="line1" x1="61.06" x2="61.06" y1="269.12" y2="301.85" />
            </g>
            <path id="sparkle1" transform="translate(0, -30)" stroke-width="5.67" stroke-miterlimit="10" fill="none"
                d="M147.17,331.47c10.56-4.18,11.48-20.81,11.42-27.62-.06-7.87.66,24.37,9.62,26.47,5.33,1.24,9.42,1,7.91,3.18l-4.1.77c1.57-.3,0,0,0,0-14.3,0-10.32,26.92-11.94,32.19-.17.54-.52,2.4-1.14,2.06-.36-.2-.94-.17-1.22-2.27-1.35-10.12,3-32-12.36-32-.68,0-6.28.1-6.36-.63S144.74,332.44,147.17,331.47Z" />
        </g>
        </g>
    </svg>



    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/EasePack3.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CustomEase3.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/35984/ScrubGSAPTimeline.js"></script>
    <script src="https://static.codepen.io/assets/common/browser_support-1963aa6406ae47d3176af996336c5d219acd8913c5af309e72f18933e95201cc.js"></script>
    <script src="https://static.codepen.io/assets/common/everypage-a63f0cbd5f67116206c89108a0a1da6978ab1606d953812d875b800cf8fe823e.js"></script>
    <script src="https://static.codepen.io/assets/common/analytics_and_notifications-538ab2710674d4676fe331ffda620410176f9ac968498eeba639b3f0d1125ff8.js"></script>
    <script>
        LUX = (function() {
            var a = ("undefined" !== typeof(LUX) && "undefined" !== typeof(LUX.gaMarks) ? LUX.gaMarks : []);
            var d = ("undefined" !== typeof(LUX) && "undefined" !== typeof(LUX.gaMeasures) ? LUX.gaMeasures : []);
            var j = "LUX_start";
            var k = window.performance;
            var l = ("undefined" !== typeof(LUX) && LUX.ns ? LUX.ns : (Date.now ? Date.now() : +(new Date())));
            if (k && k.timing && k.timing.navigationStart) {
                l = k.timing.navigationStart
            }

            function f() {
                if (k && k.now) {
                    return k.now()
                }
                var o = Date.now ? Date.now() : +(new Date());
                return o - l
            }

            function b(n) {
                if (k) {
                    if (k.mark) {
                        return k.mark(n)
                    } else {
                        if (k.webkitMark) {
                            return k.webkitMark(n)
                        }
                    }
                }
                a.push({
                    name: n,
                    entryType: "mark",
                    startTime: f(),
                    duration: 0
                });
                return
            }

            function m(p, t, n) {
                if ("undefined" === typeof(t) && h(j)) {
                    t = j
                }
                if (k) {
                    if (k.measure) {
                        if (t) {
                            if (n) {
                                return k.measure(p, t, n)
                            } else {
                                return k.measure(p, t)
                            }
                        } else {
                            return k.measure(p)
                        }
                    } else {
                        if (k.webkitMeasure) {
                            return k.webkitMeasure(p, t, n)
                        }
                    }
                }
                var r = 0,
                    o = f();
                if (t) {
                    var s = h(t);
                    if (s) {
                        r = s.startTime
                    } else {
                        if (k && k.timing && k.timing[t]) {
                            r = k.timing[t] - k.timing.navigationStart
                        } else {
                            return
                        }
                    }
                }
                if (n) {
                    var q = h(n);
                    if (q) {
                        o = q.startTime
                    } else {
                        if (k && k.timing && k.timing[n]) {
                            o = k.timing[n] - k.timing.navigationStart
                        } else {
                            return
                        }
                    }
                }
                d.push({
                    name: p,
                    entryType: "measure",
                    startTime: r,
                    duration: (o - r)
                });
                return
            }

            function h(n) {
                return c(n, g())
            }

            function c(p, o) {
                for (i = o.length - 1; i >= 0; i--) {
                    var n = o[i];
                    if (p === n.name) {
                        return n
                    }
                }
                return undefined
            }

            function g() {
                if (k) {
                    if (k.getEntriesByType) {
                        return k.getEntriesByType("mark")
                    } else {
                        if (k.webkitGetEntriesByType) {
                            return k.webkitGetEntriesByType("mark")
                        }
                    }
                }
                return a
            }
            return {
                mark: b,
                measure: m,
                gaMarks: a,
                gaMeasures: d
            }
        })();
        LUX.ns = (Date.now ? Date.now() : +(new Date()));
        LUX.ac = [];
        LUX.cmd = function(a) {
            LUX.ac.push(a)
        };
        LUX.init = function() {
            LUX.cmd(["init"])
        };
        LUX.send = function() {
            LUX.cmd(["send"])
        };
        LUX.addData = function(a, b) {
            LUX.cmd(["addData", a, b])
        };
        LUX_ae = [];
        window.addEventListener("error", function(a) {
            LUX_ae.push(a)
        });
        LUX_al = [];
        if ("function" === typeof(PerformanceObserver) && "function" === typeof(PerformanceLongTaskTiming)) {
            var LongTaskObserver = new PerformanceObserver(function(c) {
                var b = c.getEntries();
                for (var a = 0; a < b.length; a++) {
                    var d = b[a];
                    LUX_al.push(d)
                }
            });
            try {
                LongTaskObserver.observe({
                    type: ["longtask"]
                })
            } catch (e) {}
        };
    </script>
    <script src="https://cdn.speedcurve.com/js/lux.js?id=410041" async="" defer="" crossorigin="anonymous"></script>
    <script src="https://static.codepen.io/assets/packs/js/vendor-930eadf79ea82e004f7c.chunk.js"></script>
    <script src="https://static.codepen.io/assets/packs/js/2-3db0dbd2b69b82126039.chunk.js"></script>
    <script src="https://static.codepen.io/assets/packs/js/everypage-6173ec2dc159f8fe4730.js"></script>
    <div id="react-popups"></div>
    <script src="https://static.codepen.io/assets/packs/js/vendor-930eadf79ea82e004f7c.chunk.js"></script>
    <script src="https://static.codepen.io/assets/packs/js/firebaseConnectLibs-a6612f687e36334141e5.js"></script>
    <script src="https://static.codepen.io/assets/packs/js/processorRouter-771fa94bd2ed7067334d.js"></script>
    <script src="https://static.filestackapi.com/filestack-js/3.x.x/filestack.min.js"></script>
    <script src="https://static.codepen.io/assets/editor/global/commonLibs-9baf61da2f0b1adbfdbda1a98aa009379eddc23641e45edf6d5c41f98fe361d0.js"></script>
    <script src="https://static.codepen.io/assets/editor/global/codemirror-c4c6f5379377e67f3e79161513066c5c491a47a393cd3e5669c9d3f40cee44fe.js"></script>
    <script src="https://static.codepen.io/assets/libs/emmet-codemirror-plugin-4eb895d546572aaa83c328e8766ad12bff808dc4115466de4baab2f025c13b6a.js"></script>
    <script src="https://static.codepen.io/assets/editor/pen/index-966beba240c7875d430fe38f28fe19145c3bee30e17db6a19f2f16935b41c6cd.js"></script>

</body>

<script src="../public/js/jquery.js"></script>
<script src="../public/css/js/bootstrap.min.js"></script>
<script src="../public/js/pikachu.js"></script>




</html>