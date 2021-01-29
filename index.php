<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SVG Map</title>
  <!--<link rel="stylesheet" href="css/style.css">-->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

</head>

<body>
  <div class="mapa">
    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="297mm" height="210mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 29700 21000" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
      <defs>
        <font id="FontID6" horiz-adv-x="795" font-variant="normal" style="fill-rule:nonzero" font-weight="400">
          <font-face font-family="Gotham Black">
            <font-face-src>
              <font-face-name name="Gotham-Black" />
            </font-face-src>
          </font-face>
          <missing-glyph>
            <path d="M0 0z" />
          </missing-glyph>
          <glyph unicode="A" horiz-adv-x="795" d="M6.0018 0l203.999 0 50.0047 125.012 269.988 0 50.9998 -125.012 208.011 0 -298.007 705.01 -186.989 0 -298.007 -705.01zm311.005 275.99l78.9875 199.024 77.9924 -199.024 -156.98 0z" />
          <glyph unicode="C" horiz-adv-x="730" d="M399.011 -13.9938c154.99,0 243.99,66.9839 309.979,158.006l-146.002 103.99c-41.9815,-50.9998 -84.9893,-84.9893 -157.975,-84.9893 -98.0191,0 -167.024,81.9728 -167.024,186.989l0 1.99024c0,102 69.0052,184.999 167.024,184.999 66.9839,0 112.977,-31.9993 152.999,-82.0039l146.002 113.008c-62.0083,86.0155 -154.026,146.002 -297.012,146.002 -211.991,0 -369.002,-159.996 -369.002,-363.995l0 -1.99024c0,-209.006 160.991,-362.005 361.01,-362.005z" />
          <glyph unicode="F" horiz-adv-x="648" d="M62.0083 0l193.986 0 0 249.992 331.001 0 0 161.022 -331.001 0 0 118.979 366.017 0 0 170.01 -560.002 0 0 -700.003z" />
        </font>
        <font id="FontID1" horiz-adv-x="790" font-variant="normal" style="fill-rule:nonzero" font-style="normal" font-weight="400">
          <font-face font-family="Gotham Bold">
            <font-face-src>
              <font-face-name name="Gotham-Bold" />
            </font-face-src>
          </font-face>
          <missing-glyph>
            <path d="M0 0z" />
          </missing-glyph>
          <glyph unicode="A" horiz-adv-x="790" d="M24.0075 0l157.016 0 63.996 157.016 295.972 0 63.996 -157.016 161.029 0 -299.986 705.031 -142.038 0 -299.986 -705.031zm275.978 293.034l93.0199 226.96 93.0199 -226.96 -186.04 0z" />
          <glyph unicode="C" horiz-adv-x="737" d="M411.997 -11.9679c135.015,0 214.992,47.9432 287.014,124.982l-98.0364 98.968c-54.9663,-49.9498 -103.985,-81.9837 -183.962,-81.9837 -120.037,0 -203.024,99.9713 -203.024,220.009l0 2.00659c0,119.966 84.9936,218.002 203.024,218.002 70.0158,0 124.982,-30.0272 179.017,-79.0454l97.9647 113.014c-64.9993,63.996 -143.973,107.998 -275.978,107.998 -214.992,0 -364.985,-162.964 -364.985,-361.975l0 -2.00659c0,-201.018 153.003,-359.968 358.965,-359.968z" />
          <glyph unicode="D" horiz-adv-x="781" d="M83.9903 0l273.04 0c219.937,0 371.936,153.003 371.936,350.007l0 2.00659c0,197.004 -151.999,348.001 -371.936,348.001l-273.04 0 0 -700.014zm154.006 139.028l0 421.958 119.034 0c125.985,0 210.979,-87.0001 210.979,-210.979l0 -2.00659c0,-123.979 -84.9936,-208.972 -210.979,-208.972l-119.034 0z" />
          <glyph unicode="E" horiz-adv-x="669" d="M83.9903 0l533.037 0 0 137.022 -380.034 0 0 146.983 330.013 0 0 137.022 -330.013 0 0 141.966 375.018 0 0 137.022 -528.021 0 0 -700.014z" />
          <glyph unicode="I" horiz-adv-x="336" d="M91.0133 0l154.006 0 0 700.014 -154.006 0 0 -700.014z" />
          <glyph unicode="L" horiz-adv-x="619" d="M83.9903 0l503.01 0 0 140.032 -349.004 0 0 559.983 -154.006 0 0 -700.014z" />
          <glyph unicode="N" horiz-adv-x="790" d="M83.9903 0l151.999 0 0 445.034 339.043 -445.034 131.002 0 0 700.014 -151.999 0 0 -430.988 -328.006 430.988 -142.038 0 0 -700.014z" />
          <glyph unicode="O" horiz-adv-x="850" d="M423.964 -11.9679c216.067,0 373.011,162.964 373.011,361.975l0 2.00659c0,199.011 -155.009,359.968 -371.005,359.968 -215.995,0 -372.94,-162.964 -372.94,-361.975l0 -2.00659c0,-199.011 154.938,-359.968 370.933,-359.968zm2.00659 141.966c-123.979,0 -211.982,99.9713 -211.982,220.009l0 2.00659c0,119.966 85.9968,218.002 209.976,218.002 124.05,0 212.054,-100.043 212.054,-220.009l0 -2.00659c0,-119.966 -85.9968,-218.002 -210.047,-218.002z" />
          <glyph unicode="P" horiz-adv-x="667" d="M83.9903 0l154.006 0 0 209.976 117.027 0c156.944,0 283.001,83.9903 283.001,246.023l0 2.00659c0,142.97 -101.046,242.009 -268.024,242.009l-286.011 0 0 -700.014zm154.006 346.997l0 213.989 119.034 0c76.9672,0 124.982,-36.9786 124.982,-105.991l0 -2.00659c0,-59.9828 -45.005,-105.991 -122.044,-105.991l-121.972 0z" />
          <glyph unicode="S" horiz-adv-x="640" d="M333.023 -10.033c150.996,0 256.987,78.0421 256.987,216.999l0 2.00659c0,122.044 -79.9771,172.997 -222.015,210.047 -120.969,30.9589 -150.996,46.0083 -150.996,91.945l0 2.00659c0,34.0404 31.0305,61.0578 90.01,61.0578 58.9795,0 119.966,-26.014 182.027,-69.0125l79.9771 115.952c-71.0191,57.0446 -158.019,89.0067 -259.997,89.0067 -143.041,0 -245.019,-83.9903 -245.019,-210.979l0 -2.00659c0,-138.957 91.0133,-178.013 231.976,-213.989 117.027,-30.0272 141.035,-50.0215 141.035,-89.0067l0 -2.00659c0,-40.9918 -37.9819,-66.0026 -100.975,-66.0026 -80.0487,0 -146.051,33.0371 -209.044,84.9936l-91.0133 -109.001c83.9903,-74.9606 191.056,-112.011 297.047,-112.011z" />
          <glyph unicode="T" horiz-adv-x="647" d="M247.026 0l154.006 0 0 557.976 212.986 0 0 142.038 -580.049 0 0 -142.038 213.057 0 0 -557.976z" />
          <glyph unicode="U" horiz-adv-x="755" d="M376.021 -10.9646c187.975,0 307.009,103.985 307.009,315.967l0 395.012 -154.006 0 0 -401.032c0,-111.008 -57.0446,-167.981 -150.996,-167.981 -94.0232,0 -150.996,58.9795 -150.996,172.997l0 396.015 -154.006 0 0 -400.029c0,-205.962 114.949,-310.95 302.996,-310.95z" />
          <glyph unicode="V" horiz-adv-x="749" d="M307.009 -5.01648l136.018 0 283.001 705.031 -166.046 0 -182.958 -493.049 -183.03 493.049 -169.987 0 283.001 -705.031z" />
        </font>
        <font id="FontID0" horiz-adv-x="789" font-variant="normal" style="fill-rule:nonzero" font-style="normal" font-weight="300">
          <font-face font-family="Gotham Medium">
            <font-face-src>
              <font-face-name name="Gotham-Medium" />
            </font-face-src>
          </font-face>
          <missing-glyph>
            <path d="M0 0z" />
          </missing-glyph>
          <glyph unicode="." horiz-adv-x="268" d="M68.0023 0l132.99 0 0 136.992 -132.99 0 0 -136.992z" />
          <glyph unicode="A" horiz-adv-x="789" d="M30.0125 0l126 0 71.978 169.005 331.021 0 70.9905 -169.005 130.002 0 -307.998 704.994 -113.995 0 -307.998 -704.994zm242.984 278.012l119.998 279.986 121.011 -279.986 -241.009 0z" />
          <glyph unicode="B" horiz-adv-x="721" d="M90.0114 0l323.979 0c156.013,0 259.017,66.9889 259.017,192.002l0 2.00083c0,95.0005 -57.0107,142.007 -139.019,169.993 52.0216,26.9982 100.016,72.0039 100.016,156.013l0 2.00083c0,46.9806 -16.0067,84.9964 -47.0065,115.996 -39.9906,39.9906 -103.004,61.9998 -182.985,61.9998l-314.001 0 0 -700.005zm120.985 404.999l0 185.999 177.009 0c78.9939,0 122.986,-33.9882 122.986,-88.998l0 -2.00083c0,-64.0006 -52.9831,-95.0005 -132.003,-95.0005l-167.992 0zm0 -295.993l0 192.002 195.016 0c96.9754,0 143.982,-35.0016 143.982,-94.0131l0 -2.00083c0,-62.9872 -50.9822,-95.9879 -134.991,-95.9879l-204.007 0z" />
          <glyph unicode="C" horiz-adv-x="737" d="M415.004 -12.005c130.99,0 210.997,47.994 283.988,124l-78.9939 80.0073c-59.999,-55.9973 -115.009,-90.9989 -200.993,-90.9989 -134.004,0 -231.005,111.995 -231.005,248.987l0 2.00083c0,137.018 97.0014,247.012 231.005,247.012 80.0073,0 140.006,-35.0016 196.004,-86.9972l78.9939 90.9989c-67.0149,64.0006 -144.995,109.006 -274.01,109.006 -211.984,0 -360.981,-163.003 -360.981,-362.021l0 -2.00083c0,-200.993 151.985,-359.994 355.992,-359.994z" />
          <glyph unicode="D" horiz-adv-x="781" d="M90.0114 0l260.992 0c219.988,0 371.999,152.999 371.999,349.99l0 2.00083c0,197.017 -152.011,348.015 -371.999,348.015l-260.992 0 0 -700.005zm122.986 111.995l0 476.016 138.005 0c146.996,0 242.984,-101.003 242.984,-238.021l0 -2.00083c0,-136.992 -95.9879,-235.994 -242.984,-235.994l-138.005 0z" />
          <glyph unicode="E" horiz-adv-x="669" d="M90.0114 0l523.984 0 0 109.994 -400.998 0 0 188 351.003 0 0 109.994 -351.003 0 0 182.024 396.009 0 0 109.994 -518.995 0 0 -700.005z" />
          <glyph unicode="F" horiz-adv-x="656" d="M90.0114 0l122.986 0 0 285.002 353.004 0 0 111.995 -353.004 0 0 191.014 398.01 0 0 111.995 -520.996 0 0 -700.005z" />
          <glyph unicode="G" horiz-adv-x="783" d="M421.994 -12.005c124,0 223.002,49.9948 292.017,109.006l0 293.992 -298.02 0 0 -107.006 179.009 0 0 -130.99c-43.0049,-31.9873 -103.004,-53.009 -169.005,-53.009 -142.994,0 -237.995,106.018 -237.995,250l0 2.00083c0,134.004 97.9888,247.012 227.003,247.012 88.998,0 142.007,-28.9991 196.004,-74.9922l77.9805 92.9997c-71.978,60.9864 -146.996,95.0005 -268.995,95.0005 -210.997,0 -360.981,-166.017 -360.981,-362.021l0 -2.00083c0,-203.981 143.982,-359.994 362.982,-359.994z" />
          <glyph unicode="H" horiz-adv-x="760" d="M90.0114 0l122.986 0 0 295.006 334.009 0 0 -295.006 122.986 0 0 700.005 -122.986 0 0 -291.004 -334.009 0 0 291.004 -122.986 0 0 -700.005z" />
          <glyph unicode="I" horiz-adv-x="316" d="M97.0014 0l122.986 0 0 700.005 -122.986 0 0 -700.005z" />
          <glyph unicode="K" horiz-adv-x="725" d="M90.0114 0l122.986 0 0 202.993 109.006 111.995 239.008 -314.988 148.997 0 -303.996 398.997 290.978 301.008 -150.998 0 -332.996 -352.016 0 352.016 -122.986 0 0 -700.005z" />
          <glyph unicode="L" horiz-adv-x="619" d="M90.0114 0l490.983 0 0 111.995 -367.997 0 0 588.011 -122.986 0 0 -700.005z" />
          <glyph unicode="M" horiz-adv-x="867" d="M90.0114 0l120.985 0 0 500 219 -328.006 4.00166 0 221.001 330.007 0 -502.001 123.012 0 0 700.005 -131.015 0 -212.998 -330.995 -212.998 330.995 -130.99 0 0 -700.005z" />
          <glyph unicode="N" horiz-adv-x="789" d="M90.0114 0l120.985 0 0 497.999 386.005 -497.999 103.004 0 0 700.005 -121.011 0 0 -483.993 -374.987 483.993 -113.995 0 0 -700.005z" />
          <glyph unicode="O" horiz-adv-x="849" d="M423.994 -12.005c214.998,0 367.01,165.004 367.01,361.995l0 2.00083c0,197.017 -150.01,360.02 -365.009,360.02 -214.998,0 -366.984,-165.004 -366.984,-362.021l0 -2.00083c0,-196.991 149.984,-359.994 364.983,-359.994zm2.00083 113.008c-138.993,0 -237.995,113.008 -237.995,248.987l0 2.00083c0,136.005 97.0014,247.012 235.994,247.012 138.993,0 237.995,-113.008 237.995,-249.013l0 -2.00083c0,-135.979 -97.0014,-246.986 -235.994,-246.986z" />
          <glyph unicode="P" horiz-adv-x="668" d="M90.0028 0l123.013 0 0 224.979 138.964 0c154.029,0 280.033,82.0271 280.033,239.047l0 1.99391c0,140.958 -103.019,233.952 -266.02,233.952l-275.99 0 0 -699.972zm123.013 335.973l0 252.008 143.007 0c91.9967,0 150.983,-42.9798 150.983,-125.007l0 -1.99391c0,-72.9992 -57.9895,-125.007 -150.983,-125.007l-143.007 0z" />
          <glyph unicode="Q" horiz-adv-x="850" d="M721.012 -20.9976l78.9738 88.0034 -79.9771 68.0092c46.0083,60.9861 71.0191,136.018 71.0191,214.992l0 2.00659c0,197.004 -149.993,359.968 -365.057,359.968 -214.992,0 -366.992,-164.971 -366.992,-361.975l0 -2.00659c0,-197.004 149.993,-359.968 364.985,-359.968 82.0553,0 154.006,23.9358 213.057,66.0026l83.9903 -75.0322zm-295.041 121.972c-138.957,0 -237.996,113.014 -237.996,249.033l0 2.00659c0,136.018 97.0331,246.954 235.99,246.954 139.028,0 238.068,-112.943 238.068,-248.961l0 -2.00659c0,-49.0182 -12.0396,-94.0232 -36.047,-131.002l-120.969 110.004 -79.0454 -90.01 120.037 -101.978c-33.0371,-20.9976 -74.029,-34.0404 -120.037,-34.0404z" />
          <glyph unicode="R" horiz-adv-x="723" d="M90.0114 0l122.986 0 0 243.998 154.012 0 171.994 -243.998 144.995 0 -188.988 264.993c97.9888,28.0116 166.978,97.0014 166.978,212.01l0 2.00083c0,60.9864 -20.9957,113.008 -57.9981,150.998 -44.9797,43.9923 -113.995,70.0031 -201.98,70.0031l-312 0 0 -700.005zm122.986 353.004l0 235.007 179.009 0c90.9989,0 144.995,-41.0041 144.995,-116.022l0 -2.00083c0,-70.9905 -55.9973,-116.984 -144.008,-116.984l-179.997 0z" />
          <glyph unicode="S" horiz-adv-x="640" d="M334.996 -10.0042c146.996,0 250,78.0064 250,208.996l0 2.00083c0,115.996 -76.993,169.005 -225.003,205.02 -134.004,31.9873 -165.991,55.9973 -165.991,109.994l0 2.00083c0,45.9931 41.9915,82.9955 113.995,82.9955 64.0006,0 127.014,-24.9974 190.001,-72.0039l66.0015 92.9997c-70.9905,57.0107 -152.011,88.0106 -254.002,88.0106 -138.993,0 -239.008,-83.0215 -239.008,-203.019l0 -2.00083c0,-128.989 84.0089,-172.981 233.006,-208.996 130.002,-29.9865 158.014,-56.9847 158.014,-107.006l0 -1.97485c0,-53.009 -48.02,-88.0106 -124,-88.0106 -87.0232,0 -154.012,33.0007 -221.001,90.9989l-74.0048 -88.0106c83.983,-74.9922 184.986,-111.995 291.991,-111.995z" />
          <glyph unicode="T" horiz-adv-x="648" d="M262.005 0l124 0 0 586.01 221.988 0 0 113.995 -568.002 0 0 -113.995 222.014 0 0 -586.01z" />
          <glyph unicode="U" horiz-adv-x="756" d="M376.988 -10.9916c183.011,0 301.008,104.979 301.008,314.001l0 396.996 -122.986 0 0 -402.999c0,-129.015 -67.0149,-195.016 -176.021,-195.016 -109.994,0 -176.983,70.0031 -176.983,200.005l0 398.01 -123.012 0 0 -402.999c0,-203.019 115.996,-307.998 297.994,-307.998z" />
          <glyph unicode="V" horiz-adv-x="749" d="M320.991 -4.98909l108.019 0 290.978 704.994 -132.99 0 -210.009 -538.016 -210.997 538.016 -135.979 0 290.978 -704.994z" />
          <glyph unicode="Ã" horiz-adv-x="790" d="M30.0272 0l125.985 0 72.0224 168.984 330.945 0 71.0191 -168.984 129.999 0 -308.012 705.031 -114.017 0 -307.94 -705.031zm242.941 277.985l120.037 279.991 120.969 -279.991 -241.006 0zm2.00659 480.006c15.0494,33.0371 27.0173,49.0182 56.0413,49.0182 34.9721,0 92.0166,-38.9852 146.983,-38.9852 59.9828,0 90.01,45.005 112.011,122.975l-68.0092 19.9943c-13.9745,-31.9622 -26.014,-48.0149 -54.9663,-48.0149 -35.0437,0 -92.0166,39.0569 -147.055,39.0569 -60.9861,0 -91.0133,-45.005 -112.011,-123.047l67.0059 -20.9976z" />
          <glyph unicode="Ç" horiz-adv-x="737" d="M371.005 -165.974l66.0026 155.009c117.959,4.94482 192.991,50.9531 262.004,122.975l-79.0454 79.9771c-59.9828,-55.9696 -114.949,-91.0133 -200.946,-91.0133 -134.012,0 -231.045,112.011 -231.045,249.033l0 2.00659c0,137.022 97.0331,246.954 231.045,246.954 79.9771,0 139.96,-34.9721 196.001,-87.0001l78.9738 91.0133c-67.0059,63.996 -144.976,109.001 -273.972,109.001 -212.054,0 -361.043,-162.964 -361.043,-361.975l0 -2.00659c0,-177.01 117.027,-321.987 284.005,-353.017l-77.9705 -115.952 105.991 -45.005z" />
          <glyph unicode="Ô" horiz-adv-x="849" d="M423.994 -12.005c214.998,0 367.01,165.004 367.01,361.995l0 2.00083c0,197.017 -150.01,360.02 -365.009,360.02 -214.998,0 -366.984,-165.004 -366.984,-362.021l0 -2.00083c0,-196.991 149.984,-359.994 364.983,-359.994zm2.00083 113.008c-138.993,0 -237.995,113.008 -237.995,248.987l0 2.00083c0,136.005 97.0014,247.012 235.994,247.012 138.993,0 237.995,-113.008 237.995,-249.013l0 -2.00083c0,-135.979 -97.0014,-246.986 -235.994,-246.986zm-178.983 667.004l99.9896 0 76.993 57.9981 76.993 -57.9981 102.016 0 -121.011 134.991 -113.995 0 -120.985 -134.991z" />
        </font>
        <style type="text/css">
          <![CDATA[
          @font-face {
            font-family: "Gotham Black";
            font-variant: normal;
            font-weight: normal;
            src: url("#FontID6") format(svg)
          }

          @font-face {
            font-family: "Gotham Bold";
            font-variant: normal;
            font-style: normal;
            font-weight: normal;
            src: url("#FontID1") format(svg)
          }

          @font-face {
            font-family: "Gotham Medium";
            font-variant: normal;
            font-style: normal;
            font-weight: 300;
            src: url("#FontID0") format(svg)
          }

          .str43 {
            stroke: #96989A;
            stroke-width: 70.56;
            stroke-miterlimit: 22.9256
          }

          .str57 {
            stroke: #96989A;
            stroke-width: 24.69;
            stroke-miterlimit: 22.9256
          }

          .str53 {
            stroke: #606062;
            stroke-width: 24.69;
            stroke-miterlimit: 22.9256
          }

          .str55 {
            stroke: #FEFEFE;
            stroke-width: 35.28;
            stroke-miterlimit: 22.9256
          }


          .str66 {
            stroke: #FEFEFE;
            stroke-width: 20;
            stroke-miterlimit: 22.9256
          }

          .str67 {
            stroke: #000000;
            stroke-width: 20;
            stroke-miterlimit: 22.9256
          }

          .str34 {
            stroke: #BDBFC1;
            stroke-width: 20;
            stroke-miterlimit: 22.9256
          }

          .str58 {
            stroke: #96989A;
            stroke-width: 20;
            stroke-miterlimit: 22.9256
          }

          .str23 {
            stroke: #727376;
            stroke-width: 20;
            stroke-miterlimit: 22.9256
          }

          .str52 {
            stroke: #606062;
            stroke-width: 20;
            stroke-miterlimit: 22.9256
          }

          .str16 {
            stroke: #373435;
            stroke-width: 20;
            stroke-miterlimit: 22.9256
          }

          .str49 {
            stroke: #96989A;
            stroke-width: 7.62;
            stroke-miterlimit: 22.9256
          }

          .str11 {
            stroke: #B2B2B2;
            stroke-width: 24.69;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str56 {
            stroke: #FEFEFE;
            stroke-width: 52.92;
            stroke-miterlimit: 22.9256
          }

          .str31 {
            stroke: #FEFEFE;
            stroke-width: 63.5;
            stroke-miterlimit: 22.9256
          }

          .str33 {
            stroke: #FEFEFE;
            stroke-width: 63.5;
            stroke-miterlimit: 22.9256
          }

          .str1 {
            stroke: #FEFEFE;
            stroke-width: 63.5;
            stroke-miterlimit: 22.9256
          }

          .str37 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str63 {
            stroke: #857947;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str62 {
            stroke: #857947;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str61 {
            stroke: #857947;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str32 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str3 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str50 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str2 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str35 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str18 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str40 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str4 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str38 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str39 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-miterlimit: 22.9256
          }

          .str64 {
            stroke: #5A3A2C;
            stroke-width: 35.52;
            stroke-miterlimit: 22.9256
          }

          .str65 {
            stroke: #5A3A2C;
            stroke-width: 35.52;
            stroke-miterlimit: 22.9256
          }

          .str10 {
            stroke: #B2B2B2;
            stroke-width: 20.72;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str12 {
            stroke: #B2B2B2;
            stroke-width: 20.72;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str9 {
            stroke: #757575;
            stroke-width: 8.04;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str24 {
            stroke: #727376;
            stroke-width: 21.32;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str22 {
            stroke: #727376;
            stroke-width: 21.32;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str5 {
            stroke: #727376;
            stroke-width: 21.32;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str36 {
            stroke: #727376;
            stroke-width: 21.32;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str28 {
            stroke: #727376;
            stroke-width: 21.32;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str25 {
            stroke: #727376;
            stroke-width: 21.32;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str27 {
            stroke: #727376;
            stroke-width: 21.32;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str26 {
            stroke: #727376;
            stroke-width: 21.32;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str42 {
            stroke: #FEFEFE;
            stroke-width: 52.93;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str48 {
            stroke: #FEFEFE;
            stroke-width: 52.93;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str46 {
            stroke: #FEFEFE;
            stroke-width: 52.93;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str47 {
            stroke: #FEFEFE;
            stroke-width: 52.93;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str45 {
            stroke: #FEFEFE;
            stroke-width: 52.93;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str21 {
            stroke: #FEFEFE;
            stroke-width: 52.93;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str29 {
            stroke: #FEFEFE;
            stroke-width: 52.93;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str13 {
            stroke: lime;
            stroke-width: 9.65;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str14 {
            stroke: #D9D9D9;
            stroke-width: 9.65;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str7 {
            stroke: #B2B2B2;
            stroke-width: 9.65;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str44 {
            stroke: #B9B9B9;
            stroke-width: 9.65;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str15 {
            stroke: #D9D9D9;
            stroke-width: 9.65;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str0 {
            stroke: #727376;
            stroke-width: 9.65;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str6 {
            stroke: #B2B2B2;
            stroke-width: 9.65;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str8 {
            stroke: #D2D3D5;
            stroke-width: 14.8;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
          }

          .str17 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str20 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str51 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str41 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str19 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str59 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str30 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str60 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .str54 {
            stroke: #FEFEFE;
            stroke-width: 53.29;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 22.9256
          }

          .fil3 {
            fill: none
          }

          .fil1 {
            fill: none;
            fill-rule: nonzero
          }

          .fil15 {
            fill: #FEFEFE
          }

          .fil25 {
            fill: #E6E7E8
          }

          .fil20 {
            fill: #D2D3D5
          }

          .fil19 {
            fill: #BDBFC1
          }

          .fil0 {
            fill: #848688
          }

          .fil12 {
            fill: #727376
          }

          .fil18 {
            fill: #4B4B4D
          }

          .fil29 {
            fill: #373435
          }

          .fil28 {
            fill: #EDEDEE
          }

          .fil21 {
            fill: #E5DBAF
          }

          .fil22 {
            fill: #E6D280
          }

          .fil14 {
            fill: #DEB089
          }

          .fil27 {
            fill: #D5BFAB
          }

          .fil23 {
            fill: #D9C46E
          }

          .fil17 {
            fill: #996850
          }

          .fil8 {
            fill: #8A5D46
          }

          .fil16 {
            fill: #80523B
          }

          .fil26 {
            fill: #857947
          }

          .fil2 {
            fill: #79C260
          }

          .fil4 {
            fill: #E8E5DC
          }

          .fil9 {
            fill: #FEFEFE;
            fill-rule: nonzero
          }

          .fil6 {
            fill: #D2D3D5;
            fill-rule: nonzero
          }

          .fil13 {
            fill: #727376;
            fill-rule: nonzero
          }

          .fil24 {
            fill: #373435;
            fill-rule: nonzero
          }

          .fil7 {
            fill: #5A3A2C;
            fill-rule: nonzero
          }

          .fil10 {
            fill: #757575;
            fill-rule: nonzero
          }

          .fil11 {
            fill: #B2B2B2;
            fill-rule: nonzero
          }

          .fil5 {
            fill: #D9D9D9;
            fill-rule: nonzero
          }

          .fnt7 {
            font-weight: bolder;
            font-size: 130px;
            font-family: 'Gotham Medium'
          }

          .fnt2 {
            font-weight: bolder;
            font-size: 160px;
            font-family: 'Gotham Medium'
          }

          .fnt4 {
            font-weight: bolder;
            font-size: 200px;
            font-family: 'Gotham Medium'
          }

          .fnt6 {
            font-weight: bolder;
            font-size: 250px;
            font-family: 'Gotham Medium'
          }

          .fnt3 {
            font-weight: bolder;
            font-size: 155px;
            font-family: 'Gotham Bold'
          }

          .fnt5 {
            font-weight: normal;
            font-size: 200px;
            font-family: 'Gotham Bold'
          }

          .fnt8 {
            font-weight: normal;
            font-size: 200px;
            font-family: 'Gotham Bold'
          }

          .fnt1 {
            font-weight: 300;
            font-size: 180.55px;
            font-family: 'Gotham Medium'
          }

          .fnt9 {
            font-weight: bolder;
            font-size: 321.57px;
            font-family: 'Gotham Black'
          }

          .fnt0 {
            font-weight: 300;
            font-size: 384.84px;
            font-family: 'Gotham Medium'
          }

          .mapa {
            display: flex;
            justify-content: center;
            align-items: center;
          }

          .mapa svg #escolinha polygon:hover {
            stroke: #3e00f6;
            fill: #00aeff;
            cursor: pointer;
          }

          .mapa svg #alasul polygon:hover {
            stroke: #200772;
            fill: #516aa0;
            cursor: pointer;
          }

          .mapa svg #alanorte polygon:hover {
            stroke: #0c73c7;
            fill: #1499c2;
            cursor: pointer;
          }

          .mapa svg #manutencao polygon:hover {
            stroke: #0c73c7;
            fill: #45a15c;
            cursor: pointer;
          }

          .mapa svg #manutencao rect:hover {
            stroke: #0c73c7;
            fill: #1499c2;
            cursor: pointer;
          }

          .mapa svg #caff polygon:hover {
            stroke: #0c73c7;
            fill: #b96085;
            cursor: pointer;
          }

          .mapa svg #rampa polygon:hover {
            stroke: #0c73c7;
            fill: #65c85c;
            cursor: pointer;
          }

          .mapa svg #defesacivil path:hover {
            stroke: #0c73c7;
            fill: #62cccf;
            cursor: pointer;
          }

          .mapa svg #secretariaeducacao polygon:hover {
            stroke: #0c73c7;
            fill: #bebdec;
            cursor: pointer;
          }

          .mapa svg #orquestra polygon:hover {
            stroke: #0c73c7;
            fill: #d18c87;
            cursor: pointer;
          }

          .mapa svg #alasul rect:hover {
            fill: #d18c87;
            cursor: pointer;
          }

          .mapa svg #alanorte rect:hover {
            fill: #a0bda6;
            cursor: pointer;
          }

          .mapa svg #prediocaff polygon:hover {
            fill: #cbcc7e;
            cursor: pointer;
          }

          .modal-container {
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, .5);
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: 2000;
            display: none;
            justify-content: center;
            align-items: center;
          }

          .modal-container.mostrar {
            display: flex;
          }

          .modal {
            background: #E6E7E8;
            width: 20%;
            min-width: 300px;
            padding: 40px;
            border-radius: 5%;
            box-shadow: 0 0 0 10px #dbdd86;
            position: absolute;
          }

          .modal h3,
          h4,
          p {
            text-align: center;
          }

          @keyframes modal {
            from {
              opacity: 0;
              transform: translate3d(0, -60px, 0);
            }

            to {
              opacity: 1;
              transform: translate3d(0, 0, 0);
            }
          }

          .mostrar .modal {
            animation: modal .50s;
          }

          .fechar {
            position: absolute;
            font-size: 1.2em;
            top: -30px;
            right: -30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid rgb(255, 255, 255);
            background: #dbdd86;
            color: white;
            font-family: "Gotham Medium", monospace;
            cursor: pointer;
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, .3);
          }
          ]]>
        </style>
      </defs>
      <g id="Camada_x0020_1">
        <metadata id="CorelCorpID_0Corel-Layer" />
        <path class="fil0" d="M4339.09 2339.39l60.09 2074.08 -0.07 414.56 -229.74 -0.23c-776.19,224.57 -1290.12,755.12 -1354.22,1715.78l-36.01 13246.41 17921.28 47.05 0 -6487.46 6391.28 7.76 -2.65 -2679.72c-99.56,-946.42 -682.79,-1216.93 -1428.38,-1260.54l-1724.16 -3.22 -207.49 -33.89 -6835 -6265.14c-27.1,-23.62 -88.62,-23.89 -88.53,-52.42l2.29 -679.71 -703.34 624.24 -87.9 -93.48 -1183.98 1028.42 -49.07 0.88 -3334.48 -1.33 -22.98 -13.87 -6.28 -1569.82 -7080.66 -18.35z" />
        <g id="_1206979392"> // estacionamento 1: visitantes
          <g id="estacvisit1">
            <line class="fil1 str0" x1="18959.67" y1="8228.39" x2="18711.2" y2="8497.71" />
            <line class="fil1 str0" x1="18850.31" y1="8128.81" x2="18601.85" y2="8398.13" />
            <line class="fil1 str0" x1="19449.02" y1="7280.63" x2="19053.4" y2="7711.39" />
            <line class="fil1 str0" x1="18740.83" y1="8027.62" x2="18492.37" y2="8296.94" />
            <line class="fil1 str0" x1="18522" y1="7826.86" x2="18275.14" y2="8096.05" />
            <line class="fil1 str0" x1="18414.25" y1="7727.15" x2="18165.78" y2="7996.47" />
            <line class="fil1 str0" x1="18631.48" y1="7928.04" x2="18383.01" y2="8197.36" />
            <line class="fil1 str0" x1="19067.42" y1="8328.1" x2="18820.68" y2="8598.9" />
            <line class="fil1 str0" x1="19176.9" y1="8429.28" x2="18928.44" y2="8698.6" />
            <line class="fil1 str0" x1="21561.8" y1="10018.43" x2="19053.4" y2="7711.39" />
            <line class="fil1 str0" x1="22399.26" y1="9108.16" x2="19468.87" y2="6414.5" />
            <line class="fil1 str0" x1="21957.54" y1="9589.28" x2="19449.02" y2="7280.63" />
            <line class="fil1 str0" x1="21756.65" y1="9806.51" x2="19248.25" y2="7499.47" />
            <line class="fil1 str0" x1="21261.33" y1="10345.02" x2="20170.48" y2="9342.54" />
            <line class="fil1 str0" x1="19176.9" y1="8429.28" x2="18330.93" y2="7651.36" />
            <line class="fil1 str0" x1="22490.67" y1="8789.74" x2="22289.9" y2="9008.58" />
            <line class="fil1 str0" x1="21848.06" y1="9488.09" x2="21452.45" y2="9918.85" />
            <line class="fil1 str0" x1="21151.97" y1="10245.44" x2="20951.2" y2="10464.27" />
            <line class="fil1 str0" x1="22381.31" y1="8690.16" x2="22180.42" y2="8907.39" />
            <line class="fil1 str0" x1="21738.71" y1="9388.51" x2="21342.97" y2="9817.66" />
            <line class="fil1 str0" x1="21042.49" y1="10144.25" x2="20841.72" y2="10363.09" />
            <line class="fil1 str0" x1="22271.83" y1="8588.98" x2="22071.07" y2="8807.81" />
            <line class="fil1 str0" x1="21630.83" y1="9287.2" x2="21235.21" y2="9717.96" />
            <line class="fil1 str0" x1="20933.14" y1="10044.67" x2="20732.37" y2="10263.5" />
            <line class="fil1 str0" x1="22162.48" y1="8489.4" x2="21963.19" y2="8706.5" />
            <line class="fil1 str0" x1="21521.48" y1="9187.62" x2="21125.73" y2="9616.77" />
            <line class="fil1 str0" x1="20825.39" y1="9944.96" x2="20624.49" y2="10162.2" />
            <line class="fil1 str0" x1="22054.6" y1="8388.08" x2="21853.84" y2="8606.92" />
            <line class="fil1 str0" x1="21412" y1="9086.43" x2="21016.38" y2="9517.19" />
            <line class="fil1 str0" x1="20715.91" y1="9843.78" x2="20515.14" y2="10062.61" />
            <line class="fil1 str0" x1="21945.25" y1="8288.5" x2="21744.48" y2="8507.34" />
            <line class="fil1 str0" x1="21302.64" y1="8986.85" x2="20906.9" y2="9416.01" />
            <line class="fil1 str0" x1="20606.55" y1="9744.2" x2="20405.66" y2="9961.43" />
            <line class="fil1 str0" x1="21835.89" y1="8188.92" x2="21635" y2="8406.15" />
            <line class="fil1 str0" x1="21193.16" y1="8885.67" x2="20799.15" y2="9316.3" />
            <line class="fil1 str0" x1="20497.07" y1="9643.01" x2="20296.3" y2="9861.84" />
            <line class="fil1 str0" x1="21726.41" y1="8087.74" x2="21525.65" y2="8306.57" />
            <line class="fil1 str0" x1="21085.41" y1="8785.96" x2="20689.67" y2="9215.11" />
            <line class="fil1 str0" x1="20387.72" y1="9543.43" x2="20188.43" y2="9760.54" />
            <line class="fil1 str0" x1="21617.06" y1="7988.15" x2="21417.77" y2="8205.26" />
            <line class="fil1 str0" x1="20976.06" y1="8686.38" x2="20580.31" y2="9115.53" />
            <line class="fil1 str0" x1="20279.84" y1="9442.12" x2="20079.07" y2="9660.95" />
            <line class="fil1 str0" x1="21509.18" y1="7886.85" x2="21308.41" y2="8105.68" />
            <line class="fil1 str0" x1="20866.58" y1="8585.19" x2="20470.96" y2="9015.95" />
            <line class="fil1 str0" x1="20170.48" y1="9342.54" x2="19969.72" y2="9561.37" />
            <line class="fil1 str0" x1="21399.83" y1="7787.26" x2="21198.93" y2="8004.49" />
            <line class="fil1 str0" x1="20757.22" y1="8485.61" x2="20361.48" y2="8914.77" />
            <line class="fil1 str0" x1="21290.35" y1="7686.08" x2="21089.58" y2="7904.91" />
            <line class="fil1 str0" x1="20647.74" y1="8384.43" x2="20253.73" y2="8815.06" />
            <line class="fil1 str0" x1="21180.99" y1="7586.49" x2="20980.1" y2="7803.73" />
            <line class="fil1 str0" x1="20539.99" y1="8284.72" x2="20144.25" y2="8713.87" />
            <line class="fil1 str0" x1="21073.11" y1="7485.19" x2="20872.35" y2="7704.02" />
            <line class="fil1 str0" x1="20430.51" y1="8183.53" x2="20034.89" y2="8614.29" />
            <line class="fil1 str0" x1="20963.76" y1="7385.6" x2="20762.99" y2="7604.44" />
            <line class="fil1 str0" x1="20321.15" y1="8083.95" x2="19925.41" y2="8513.11" />
            <line class="fil1 str0" x1="20854.4" y1="7286.02" x2="20653.51" y2="7503.25" />
            <line class="fil1 str0" x1="20211.67" y1="7982.77" x2="19816.06" y2="8413.52" />
            <line class="fil1 str0" x1="20744.92" y1="7184.83" x2="20544.16" y2="7403.67" />
            <line class="fil1 str0" x1="20103.92" y1="7883.06" x2="19708.18" y2="8312.21" />
            <line class="fil1 str0" x1="20635.57" y1="7085.25" x2="20436.28" y2="7302.36" />
            <line class="fil1 str0" x1="19994.57" y1="7783.48" x2="19598.82" y2="8212.63" />
            <line class="fil1 str0" x1="20527.69" y1="6983.94" x2="20326.93" y2="7202.78" />
            <line class="fil1 str0" x1="19885.09" y1="7682.29" x2="19489.47" y2="8113.05" />
            <line class="fil1 str0" x1="20418.34" y1="6884.36" x2="20217.45" y2="7101.59" />
            <line class="fil1 str0" x1="19775.73" y1="7582.71" x2="19379.99" y2="8011.86" />
            <line class="fil1 str0" x1="20308.86" y1="6783.17" x2="20108.09" y2="7002.01" />
            <line class="fil1 str0" x1="19666.25" y1="7481.52" x2="19272.24" y2="7912.16" />
            <line class="fil1 str0" x1="20199.5" y1="6683.59" x2="19998.61" y2="6900.83" />
            <line class="fil1 str0" x1="19558.5" y1="7381.82" x2="19162.76" y2="7810.97" />
            <line class="fil1 str0" x1="20090.02" y1="6582.41" x2="19890.86" y2="6801.12" />
            <line class="fil1 str0" x1="19872.92" y1="6383.12" x2="19672.02" y2="6600.35" />
            <line class="fil1 str0" x1="19763.44" y1="6281.94" x2="19562.67" y2="6500.77" />
            <line class="fil1 str0" x1="19982.27" y1="6482.7" x2="19781.5" y2="6701.54" />
          </g>
          <polygon class="fil2" points="14079.85,5298.12 14079.61,5565.12 16777.14,5571.78 16780.34,4221.4 16201.85,3688.86 14336.09,5299.8 " />
          <path class="fil2" d="M13219.16 5888.39l3547.98 0 0 995.39 0 43.61 -161.38 959.66 -3089.36 0 0 -504.7 335.66 0 0 -1205.2 -634.05 0 1.15 -288.76zm3547.98 1995.42l0 3.24 -161.38 0 161.38 -3.24z" />
          <g>
            <path class="fil3 str1" d="M25682.89 9579.81l80.3 0c714.24,16.33 1069.41,459.83 1174.73,963.92l0 1696.56c-1.49,39.2 -23.24,55.13 -58.05,56.11l-1140.75 0c-40.44,0.42 -57.75,-19.54 -56.23,-56.11l0 -483.03 -1097.03 0.18 0.26 355.7c-10.97,119.79 -79.44,167.5 -178.19,177.24l-1005.22 -5.31c-1587.44,-141.97 -1751.51,-902.88 -2375.13,-1641.69l3.76 -7.14 1571.04 -1742.25 -2930.51 -2695.28 -1586.18 1724.89 0.16 0.15 -0.17 -0.15 -1137.14 -1111.98 3.22 -997.12 1664.16 1530.6 120.4 -131.95 -1784.01 -1640.64 3.39 -1376.17 -621.68 -624.4 328.13 -281.95c72.72,-65.54 148.15,-72.13 226.92,-5.15l6563.76 6037.33c183.76,159.7 331.17,257.64 576.58,257.64l1653.48 0z" />
            <path id="1" class="fil2" d="M25682.89 9579.81l80.3 0c714.24,16.33 1069.41,459.83 1174.73,963.92l0 1696.56c-1.49,39.2 -23.24,55.13 -58.05,56.11l-1140.75 0c-40.44,0.42 -57.75,-19.54 -56.23,-56.11l0 -483.03 -1097.03 0.18 0.26 355.7c-10.97,119.79 -79.44,167.5 -178.19,177.24l-1005.22 -5.31c-1587.44,-141.97 -1751.51,-902.88 -2375.13,-1641.69l3.76 -7.14 1571.04 -1742.25 -2930.51 -2695.28 -1586.18 1724.89 0.16 0.15 -0.17 -0.15 -1137.14 -1111.98 3.22 -997.12 1664.16 1530.6 120.4 -131.95 -1784.01 -1640.64 3.39 -1376.17 -621.68 -624.4 328.13 -281.95c72.72,-65.54 148.15,-72.13 226.92,-5.15l6563.76 6037.33c183.76,159.7 331.17,257.64 576.58,257.64l1653.48 0z" />
          </g>
          <rect class="fil2" x="8064.05" y="4956.35" width="947.97" height="595.8" />
          <path class="fil2" d="M9161.2 4959.86l925.97 0c557.79,27.74 430.43,273.05 792.2,329.64l1245.04 3.22 -0.17 267.76 -2963.04 0 0 -600.62z" />
          <g>
            <rect class="fil2" x="13286.59" y="9100.49" width="2383.52" height="324.97" />
            <rect class="fil2" x="8950.22" y="5887.89" width="3930.07" height="289.27" />
          </g>
          <g>
            <path class="fil3 str2" d="M17682.11 10287.41l-321.15 0c-252.67,0 -397.28,220.1 -397.28,410.6l0 2655.53c0,106.13 94.94,193.37 201.09,193.37l517.31 0 0.03 -193.37 0 -1144.9 1625.59 0 -2.61 1036.22c-0.9,106.37 -42.22,193.1 -143.35,266.32l-3.99 2224.05 1542.67 0 0 -2385.65 2783.92 0 0 -113.85c11,-159.53 -54.23,-233.15 -176.55,-242.42 -1474.33,-158.36 -2082.47,-821.97 -2576.82,-1551.96 -276.04,-490.77 -649.23,-804.76 -1093.67,-989.12 -382.36,-158.56 -649.81,-163.86 -1084.53,-164.82l-870.66 0zm1629.76 270.93l-3.92 1548.57 0 -105.08 -1625.84 0 0 -1507.64 1170.2 0c143.11,6.1 320.29,33.43 459.56,64.15z" />
            <path id="1" class="fil4" d="M17682.11 10287.41l-321.15 0c-252.67,0 -397.28,220.1 -397.28,410.6l0 2655.53c0,106.13 94.94,193.37 201.09,193.37l517.31 0 0.03 -193.37 0 -1144.9 1625.59 0 -2.61 1036.22c-0.9,106.37 -42.22,193.1 -143.35,266.32l-3.99 2224.05 1542.67 0 0 -2385.65 2783.92 0 0 -113.85c11,-159.53 -54.23,-233.15 -176.55,-242.42 -1474.33,-158.36 -2082.47,-821.97 -2576.82,-1551.96 -276.04,-490.77 -649.23,-804.76 -1093.67,-989.12 -382.36,-158.56 -649.81,-163.86 -1084.53,-164.82l-870.66 0zm1629.76 270.93l-3.92 1548.57 0 -105.08 -1625.84 0 0 -1507.64 1170.2 0c143.11,6.1 320.29,33.43 459.56,64.15z" />
          </g>
          <g>
            <path class="fil3 str3" d="M19157.75 15735.23l1542.67 0 0 4101.81 -1542.67 0 0 -6.41 -896.35 0c490.81,-132.06 784.49,-455.09 896.35,-954.25l0 -3141.15z" />
            <path id="1" class="fil4" d="M19157.75 15735.23l1542.67 0 0 4101.81 -1542.67 0 0 -6.41 -896.35 0c490.81,-132.06 784.49,-455.09 896.35,-954.25l0 -3141.15z" />
          </g>
          <g>
            <path class="fil3 str4" d="M27120.59 12241.74c-12.64,119.9 -72.14,182.07 -166.61,201.16l-1270.59 -1.36c-108.17,-12.65 -166.6,-72.64 -177.76,-177.59l0.78 -505.09 -740.87 -1.15 -1.37 509.93c-17.72,106.84 -72.87,168.56 -177.32,170.88l-910.25 -2.9c-412.93,-1.33 -743.02,-50.84 -1139.66,-186.43 -945.23,-323.17 -1114.82,-894.96 -1581.51,-1467.03 -247.64,-303.57 -578.96,-607.22 -1154.19,-873.85l63.79 -133.97c1742.35,780.66 1376.24,2042.44 2974.24,2422.57 191.66,45.83 475.97,84.27 563.44,88.16l1005.21 5.31c98.76,-9.74 167.23,-57.45 178.19,-177.24l-0.21 -414.77c3.26,-48.99 30.39,-73.29 78.05,-76.41l939.22 -0.15c41.95,-1.77 82.2,23.18 79.72,77.7l0 540.78c-1.52,36.57 15.79,56.53 56.23,56.11l1140.75 0c34.81,-0.98 56.56,-16.91 58.04,-56.11l0 -1696.56c-105.31,-504.09 -460.48,-947.59 -1174.73,-963.92l-80.29 0 -1653.48 0c-245.42,0 -392.82,-97.94 -576.58,-257.64l-3635.58 -3343.99 -2928.18 -2693.34c-78.77,-66.97 -154.21,-60.39 -226.92,5.15l-165.27 142.01 -162.86 139.95 621.68 624.39 -3.4 1376.17 1764.73 1621.35 -120.63 131.73 -1644.64 -1511.09 -3.22 997.12 1137.14 1111.98 0.17 0.15 406.52 373.2 91.48 1114.35 514.87 -69.07 -183.46 548.49 -3245.1 0 -2372.43 0 -0.03 -465.25 2372.41 0 0 -324.97 -2372.42 0 -857.6 0 0.04 790.22 -4313.19 0c-136.57,-16.53 -192.77,-82.65 -191.67,-184.12l-0.02 -333.78 11.08 -4357.61c9.26,-104.75 70.98,-161.64 178.2,-176.99l2150.85 13.36c127.55,19.39 247.33,64.34 349.32,167.69 65.32,69.57 143.96,128.04 265.13,151.11l1953.26 5.69 1398.11 3.88 2294.13 -1974.3 131.46 -114.25c87.74,-62.25 168.72,-57.2 243.63,8.3l6848.54 6280.27 201.79 32.97 1664.31 6.01c913.09,25.01 1430.29,407.89 1491.35,1203.2l4.18 1619.59zm-18194.59 -6064.59l3967.28 0 0 -289.26 -3967.28 0 0 289.26zm235.2 -1217.29l925.97 0c557.79,27.74 430.43,273.05 792.2,329.64l1245.04 3.22 -0.17 267.76 -2963.04 0 0 -600.62zm-1097.14 -3.51l947.96 0 0 595.8 -947.96 0 0 -595.8zm5155.1 932.04l3547.98 0 0 995.39 0 43.61 -161.38 959.66 -3089.36 0 0 -504.7 335.66 0 0 -1205.2 -634.05 0 1.15 -288.76zm3547.98 1995.42l0 3.24 -161.38 0 161.38 -3.24zm-2687.29 -2585.69l-0.24 267 2697.53 6.66 3.07 -1297.09 -578.36 -585.83 -1865.76 1610.94 -256.24 -1.68z" />
            <path id="1" class="fil4" d="M27120.59 12241.74c-12.64,119.9 -72.14,182.07 -166.61,201.16l-1270.59 -1.36c-108.17,-12.65 -166.6,-72.64 -177.76,-177.59l0.78 -505.09 -740.87 -1.15 -1.37 509.93c-17.72,106.84 -72.87,168.56 -177.32,170.88l-910.25 -2.9c-412.93,-1.33 -743.02,-50.84 -1139.66,-186.43 -945.23,-323.17 -1114.82,-894.96 -1581.51,-1467.03 -247.64,-303.57 -578.96,-607.22 -1154.19,-873.85l63.79 -133.97c1742.35,780.66 1376.24,2042.44 2974.24,2422.57 191.66,45.83 475.97,84.27 563.44,88.16l1005.21 5.31c98.76,-9.74 167.23,-57.45 178.19,-177.24l-0.21 -414.77c3.26,-48.99 30.39,-73.29 78.05,-76.41l939.22 -0.15c41.95,-1.77 82.2,23.18 79.72,77.7l0 540.78c-1.52,36.57 15.79,56.53 56.23,56.11l1140.75 0c34.81,-0.98 56.56,-16.91 58.04,-56.11l0 -1696.56c-105.31,-504.09 -460.48,-947.59 -1174.73,-963.92l-80.29 0 -1653.48 0c-245.42,0 -392.82,-97.94 -576.58,-257.64l-3635.58 -3343.99 -2928.18 -2693.34c-78.77,-66.97 -154.21,-60.39 -226.92,5.15l-165.27 142.01 -162.86 139.95 621.68 624.39 -3.4 1376.17 1764.73 1621.35 -120.63 131.73 -1644.64 -1511.09 -3.22 997.12 1137.14 1111.98 0.17 0.15 406.52 373.2 91.48 1114.35 514.87 -69.07 -183.46 548.49 -3245.1 0 -2372.43 0 -0.03 -465.25 2372.41 0 0 -324.97 -2372.42 0 -857.6 0 0.04 790.22 -4313.19 0c-136.57,-16.53 -192.77,-82.65 -191.67,-184.12l-0.02 -333.78 11.08 -4357.61c9.26,-104.75 70.98,-161.64 178.2,-176.99l2150.85 13.36c127.55,19.39 247.33,64.34 349.32,167.69 65.32,69.57 143.96,128.04 265.13,151.11l1953.26 5.69 1398.11 3.88 2294.13 -1974.3 131.46 -114.25c87.74,-62.25 168.72,-57.2 243.63,8.3l6848.54 6280.27 201.79 32.97 1664.31 6.01c913.09,25.01 1430.29,407.89 1491.35,1203.2l4.18 1619.59zm-18194.59 -6064.59l3967.28 0 0 -289.26 -3967.28 0 0 289.26zm235.2 -1217.29l925.97 0c557.79,27.74 430.43,273.05 792.2,329.64l1245.04 3.22 -0.17 267.76 -2963.04 0 0 -600.62zm-1097.14 -3.51l947.96 0 0 595.8 -947.96 0 0 -595.8zm5155.1 932.04l3547.98 0 0 995.39 0 43.61 -161.38 959.66 -3089.36 0 0 -504.7 335.66 0 0 -1205.2 -634.05 0 1.15 -288.76zm3547.98 1995.42l0 3.24 -161.38 0 161.38 -3.24zm-2687.29 -2585.69l-0.24 267 2697.53 6.66 3.07 -1297.09 -578.36 -585.83 -1865.76 1610.94 -256.24 -1.68z" />
          </g>

          //estacionamento de cima
          <g id="estaccima">
            <line class="fil1 str5" x1="5539.7" y1="3586.11" x2="5539.23" y2="3289.35" />
            <line class="fil1 str5" x1="5676.85" y1="3586.75" x2="5677.99" y2="3289.86" />
            <line class="fil1 str5" x1="5815.62" y1="3587.27" x2="5816.76" y2="3290.38" />
            <line class="fil1 str5" x1="5954.38" y1="3587.78" x2="5955.52" y2="3290.9" />
            <line class="fil1 str5" x1="7288.13" y1="3293.87" x2="7286.99" y2="3590.76" />

            <line class="fil1 str5" x1="9165.02" y1="3596.54" x2="8127.57" y2="3593.23" />
            <path class="fil1 str5" d="M9052.17 3597.24l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.19,-4.44 -2.65,0.21 -4.64,2.54 -4.43,5.19 0.2,2.64 2.53,4.64 5.18,4.43 2.65,-0.2 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M8823.62 3603.7l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.19,-4.43 -2.65,0.2 -4.64,2.53 -4.43,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.19l-4.81 0.38z" />
            <line class="fil1 str6" x1="4398" y1="5065.22" x2="4181.77" y2="5064.27" />
            <line class="fil1 str7" x1="7923.33" y1="13758.38" x2="8160.52" y2="13759.32" />
            <path class="fil5" d="M8167.99 14686.24l4.81 -0.37c-0.21,-2.65 -2.54,-4.65 -5.18,-4.44 -2.66,0.2 -4.65,2.53 -4.44,5.18 0.21,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.65,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil5" d="M8204.68 14764.04l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.19,-4.44 -2.65,0.21 -4.64,2.54 -4.43,5.19 0.2,2.65 2.53,4.64 5.18,4.43 2.65,-0.2 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <line class="fil1 str7" x1="8152.89" y1="16485.96" x2="8155.57" y2="15419.53" />
            <line class="fil1 str6" x1="4398" y1="5065.22" x2="4181.77" y2="5064.27" />
            <path class="fil1 str6" d="M4181.92 5063.31c-653.94,194.7 -1101.77,796.53 -1100.44,1478.84" />
            <g>
              <path class="fil6" d="M1078.3 1081.89c0,-4.1 2.37,-7.42 5.27,-7.41 2.9,0.01 5.25,3.35 5.25,7.45l-10.52 -0.04zm-34.53 18438.29l34.53 -18438.29 10.52 0.04 -34.53 18438.29 -10.52 -0.04zm10.52 0.04c0,4.1 -2.37,7.42 -5.27,7.41 -2.9,-0.01 -5.25,-3.35 -5.25,-7.45l10.52 0.04z" />
            </g>
            <path class="fil1 str5" d="M10755.68 2768.12l4.81 -0.38c-0.2,-2.65 -2.54,-4.64 -5.18,-4.43 -2.65,0.2 -4.65,2.53 -4.44,5.18 0.21,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.65,-2.54 4.44,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M5117.37 3589.88l4.81 -0.38c-0.2,-2.65 -2.53,-4.64 -5.18,-4.43 -2.65,0.2 -4.64,2.53 -4.44,5.18 0.21,2.65 2.53,4.64 5.19,4.44 2.64,-0.21 4.64,-2.54 4.43,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M10756.27 2734.2l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.18,-4.43 -2.65,0.2 -4.65,2.53 -4.44,5.18 0.21,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.65,-2.54 4.44,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M6894.15 3600.3l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.19,-4.43 -2.65,0.2 -4.64,2.53 -4.43,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.19l-4.81 0.38z" />
            <line class="fil1 str7" x1="7178.14" y1="4183.14" x2="4882.33" y2="4177.53" />
            <line class="fil1 str7" x1="4443.48" y1="4176.13" x2="4399.94" y2="4176.28" />
            <line class="fil1 str6" x1="4399.94" y1="4176.28" x2="4183.71" y2="4175.33" />
            <line class="fil1 str5" x1="5954.38" y1="3587.78" x2="5955.52" y2="3290.9" />
            <polyline class="fil1 str5" points="5400.93,3585.6 5402.2,3290.31 7288.13,3293.87 " />
            <line class="fil1 str5" x1="7139.74" y1="3294.1" x2="7140.21" y2="3590.87" />
            <line class="fil1 str5" x1="8128.72" y1="3296.34" x2="8127.57" y2="3593.23" />
            <path class="fil1 str5" d="M6102.3 3290.79l4.81 -0.38c-0.2,-2.65 -2.53,-4.64 -5.18,-4.43 -2.65,0.2 -4.64,2.53 -4.44,5.18 0.21,2.65 2.54,4.64 5.19,4.44 2.64,-0.21 4.64,-2.54 4.43,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M6250.81 3292.16l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.19,-4.44 -2.65,0.21 -4.64,2.53 -4.43,5.18 0.2,2.65 2.53,4.65 5.18,4.44 2.65,-0.2 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M6399.19 3291.93l4.81 -0.38c-0.2,-2.65 -2.54,-4.64 -5.18,-4.43 -2.65,0.2 -4.65,2.53 -4.44,5.18 0.21,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.65,-2.54 4.44,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M6547.7 3293.3l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.18,-4.44 -2.66,0.21 -4.65,2.53 -4.44,5.18 0.2,2.65 2.53,4.65 5.18,4.44 2.65,-0.2 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M6696.08 3293.07l4.81 -0.37c-0.21,-2.66 -2.54,-4.65 -5.18,-4.44 -2.66,0.2 -4.65,2.53 -4.44,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M6844.46 3292.84l4.81 -0.38c-0.2,-2.65 -2.53,-4.64 -5.18,-4.43 -2.65,0.2 -4.64,2.53 -4.44,5.18 0.21,2.65 2.53,4.64 5.19,4.44 2.64,-0.21 4.64,-2.54 4.43,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M6992.97 3294.21l4.81 -0.37c-0.21,-2.66 -2.54,-4.65 -5.18,-4.44 -2.65,0.2 -4.65,2.53 -4.44,5.18 0.21,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.65,-2.54 4.44,-5.18l-4.81 0.37z" />
            <line class="fil1 str5" x1="6102.3" y1="3290.79" x2="6102.76" y2="3587.55" />
            <line class="fil1 str5" x1="6250.8" y1="3292.16" x2="6251.27" y2="3588.92" />
            <line class="fil1 str5" x1="6399.19" y1="3291.93" x2="6398.05" y2="3588.82" />
            <line class="fil1 str5" x1="6547.7" y1="3293.3" x2="6546.43" y2="3588.59" />
            <line class="fil1 str5" x1="6696.08" y1="3293.07" x2="6694.93" y2="3589.96" />
            <line class="fil1 str5" x1="6844.46" y1="3292.84" x2="6843.32" y2="3589.73" />
            <line class="fil1 str5" x1="6992.97" y1="3294.21" x2="6991.7" y2="3589.49" />
            <polyline class="fil1 str5" points="5400.93,3585.6 4986.37,3585.53 4985.91,3288.77 5402.2,3290.31 " />
            <path class="fil1 str5" d="M5124.68 3289.28l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.18,-4.44 -2.66,0.21 -4.65,2.53 -4.44,5.18 0.2,2.65 2.53,4.65 5.18,4.44 2.65,-0.2 4.65,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M5263.44 3289.8l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.18,-4.43 -2.66,0.2 -4.65,2.53 -4.44,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.19l-4.81 0.38z" />
            <line class="fil1 str5" x1="5124.68" y1="3289.28" x2="5123.41" y2="3584.57" />
            <line class="fil1 str5" x1="5263.44" y1="3289.8" x2="5262.17" y2="3585.08" />
            <polyline class="fil1 str7" points="4985.91,3288.77 4988.22,2903.07 4987.76,2606.31 10737.93,2622.71 " />
            <polyline class="fil1 str5" points="10737.93,2622.71 10736.67,2917.99 4988.22,2903.07 " />
            <path class="fil1 str5" d="M6610.85 2610.92l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.19,-4.43 -2.65,0.2 -4.64,2.53 -4.43,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.19l-4.81 0.38z" />
            <line class="fil1 str5" x1="5136.26" y1="2607.67" x2="5135" y2="2902.96" />
            <line class="fil1 str5" x1="5283.04" y1="2607.57" x2="5281.9" y2="2904.46" />
            <line class="fil1 str5" x1="5431.43" y1="2607.34" x2="5430.29" y2="2904.22" />
            <line class="fil1 str5" x1="5578.33" y1="2608.83" x2="5577.06" y2="2904.12" />
            <line class="fil1 str5" x1="5725.11" y1="2608.73" x2="5725.57" y2="2905.49" />
            <line class="fil1 str5" x1="5873.49" y1="2608.49" x2="5872.35" y2="2905.39" />
            <line class="fil1 str5" x1="6020.4" y1="2609.99" x2="6019.13" y2="2905.28" />
            <line class="fil1 str5" x1="6167.17" y1="2609.88" x2="6167.64" y2="2906.65" />
            <line class="fil1 str5" x1="6315.56" y1="2609.65" x2="6314.42" y2="2906.54" />
            <line class="fil1 str5" x1="6462.46" y1="2611.15" x2="6461.19" y2="2906.43" />
            <line class="fil1 str5" x1="6610.84" y1="2610.92" x2="6609.7" y2="2907.81" />
            <line class="fil1 str5" x1="6757.62" y1="2610.81" x2="6756.48" y2="2907.7" />
            <line class="fil1 str5" x1="6904.52" y1="2612.31" x2="6904.86" y2="2907.47" />
            <line class="fil1 str5" x1="7052.91" y1="2612.07" x2="7051.77" y2="2908.96" />
            <line class="fil1 str5" x1="7199.68" y1="2611.97" x2="7198.54" y2="2908.86" />
            <line class="fil1 str5" x1="7348.19" y1="2613.34" x2="7346.93" y2="2908.63" />
            <line class="fil1 str5" x1="7494.97" y1="2613.23" x2="7493.83" y2="2910.12" />
            <line class="fil1 str5" x1="7641.75" y1="2613.13" x2="7642.21" y2="2909.89" />
            <line class="fil1 str5" x1="7790.26" y1="2614.5" x2="7789.12" y2="2911.39" />
            <line class="fil1 str5" x1="7937.04" y1="2614.39" x2="7935.9" y2="2911.28" />
            <line class="fil1 str5" x1="8083.81" y1="2614.28" x2="8084.28" y2="2911.05" />
            <line class="fil1 str5" x1="8232.32" y1="2615.66" x2="8231.18" y2="2912.54" />
            <line class="fil1 str5" x1="8379.1" y1="2615.55" x2="8377.96" y2="2912.44" />
            <line class="fil1 str5" x1="8527.61" y1="2616.92" x2="8526.34" y2="2912.21" />
            <line class="fil1 str5" x1="8674.39" y1="2616.81" x2="8673.25" y2="2913.7" />
            <line class="fil1 str5" x1="8821.16" y1="2616.7" x2="8821.63" y2="2913.47" />
            <line class="fil1 str5" x1="8969.67" y1="2618.08" x2="8968.41" y2="2913.36" />
            <line class="fil1 str5" x1="9116.45" y1="2617.97" x2="9115.31" y2="2914.86" />
            <line class="fil1 str5" x1="9263.23" y1="2617.86" x2="9263.69" y2="2914.63" />
            <line class="fil1 str5" x1="9411.74" y1="2619.23" x2="9410.47" y2="2914.52" />
            <line class="fil1 str5" x1="9558.52" y1="2619.13" x2="9557.38" y2="2916.02" />
            <line class="fil1 str5" x1="9706.9" y1="2618.9" x2="9705.76" y2="2915.78" />
            <line class="fil1 str5" x1="9853.8" y1="2620.39" x2="9852.54" y2="2915.68" />
            <line class="fil1 str5" x1="10000.58" y1="2620.29" x2="10001.04" y2="2917.05" />
            <line class="fil1 str5" x1="10148.96" y1="2620.05" x2="10147.82" y2="2916.94" />
            <line class="fil1 str5" x1="10295.87" y1="2621.55" x2="10294.6" y2="2916.84" />
            <line class="fil1 str5" x1="10442.64" y1="2621.44" x2="10443.11" y2="2918.21" />
            <line class="fil1 str5" x1="10591.03" y1="2621.21" x2="10589.89" y2="2918.1" />
            <line class="fil1 str5" x1="8128.72" y1="3296.34" x2="10735.96" y2="3303.57" />
            <line class="fil1 str5" x1="10736.42" y1="3600.33" x2="8127.57" y2="3593.23" />
            <path class="fil1 str5" d="M8273.89 3296.36l4.81 -0.38c-0.2,-2.65 -2.53,-4.64 -5.18,-4.43 -2.65,0.2 -4.64,2.53 -4.44,5.18 0.21,2.65 2.54,4.64 5.19,4.44 2.65,-0.21 4.64,-2.54 4.43,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M8417.59 3298.1l4.81 -0.37c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.19 0.21,2.65 2.53,4.64 5.19,4.43 2.64,-0.2 4.64,-2.53 4.43,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M8562.77 3298.12l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.19,-4.44 -2.65,0.21 -4.64,2.53 -4.43,5.18 0.2,2.65 2.53,4.65 5.18,4.44 2.65,-0.2 4.64,-2.54 4.44,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M8707.94 3298.14l4.81 -0.38c-0.2,-2.65 -2.53,-4.64 -5.18,-4.43 -2.65,0.2 -4.64,2.53 -4.44,5.18 0.21,2.65 2.54,4.64 5.19,4.44 2.64,-0.21 4.64,-2.54 4.43,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M8853.12 3298.16l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.18,-4.43 -2.66,0.2 -4.65,2.53 -4.44,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M8998.42 3299.78l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.18,-4.43 -2.66,0.2 -4.65,2.53 -4.44,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M9141.99 3299.92l4.81 -0.37c-0.2,-2.66 -2.53,-4.65 -5.18,-4.44 -2.65,0.21 -4.64,2.53 -4.44,5.18 0.21,2.65 2.54,4.65 5.19,4.44 2.64,-0.21 4.64,-2.54 4.43,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M9287.17 3299.94l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.19,-4.43 -2.65,0.2 -4.64,2.53 -4.43,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M9432.34 3299.95l4.81 -0.37c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.53 -4.44,5.19 0.21,2.64 2.54,4.64 5.19,4.43 2.64,-0.2 4.64,-2.53 4.43,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M9577.52 3299.97l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.18,-4.44 -2.66,0.21 -4.65,2.53 -4.44,5.19 0.21,2.64 2.53,4.64 5.18,4.43 2.65,-0.2 4.65,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M9722.82 3301.59l4.81 -0.37c-0.21,-2.65 -2.54,-4.65 -5.18,-4.44 -2.66,0.21 -4.65,2.53 -4.44,5.18 0.2,2.65 2.53,4.65 5.18,4.44 2.65,-0.21 4.65,-2.54 4.44,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M9866.39 3301.73l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.18,-4.44 -2.66,0.21 -4.65,2.54 -4.44,5.19 0.2,2.65 2.53,4.64 5.18,4.43 2.65,-0.2 4.65,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M10011.56 3301.75l4.81 -0.37c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.53 -4.44,5.18 0.21,2.65 2.54,4.65 5.19,4.44 2.65,-0.2 4.64,-2.54 4.43,-5.18l-4.81 0.37z" />
            <path class="fil1 str5" d="M10156.74 3301.77l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.18,-4.43 -2.65,0.2 -4.65,2.53 -4.44,5.18 0.21,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.65,-2.54 4.44,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M10301.92 3301.79l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.19,-4.43 -2.65,0.2 -4.64,2.53 -4.43,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M10447.22 3303.41l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.19,-4.43 -2.65,0.2 -4.64,2.53 -4.43,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.19l-4.81 0.38z" />
            <path class="fil1 str5" d="M10590.79 3303.55l4.81 -0.37c-0.21,-2.65 -2.54,-4.65 -5.18,-4.44 -2.66,0.21 -4.65,2.53 -4.44,5.18 0.21,2.65 2.53,4.65 5.18,4.44 2.65,-0.21 4.65,-2.54 4.44,-5.18l-4.81 0.37z" />
            <line class="fil1 str5" x1="8273.89" y1="3296.36" x2="8272.75" y2="3593.25" />
            <line class="fil1 str5" x1="8417.59" y1="3298.1" x2="8417.93" y2="3593.27" />
            <line class="fil1 str5" x1="8562.76" y1="3298.12" x2="8561.62" y2="3595.01" />
            <line class="fil1 str5" x1="8707.94" y1="3298.14" x2="8706.8" y2="3595.03" />
            <line class="fil1 str5" x1="8853.12" y1="3298.16" x2="8851.98" y2="3595.05" />
            <line class="fil1 str5" x1="8998.42" y1="3299.78" x2="8997.15" y2="3595.06" />
            <line class="fil1 str5" x1="9141.99" y1="3299.92" x2="9142.33" y2="3595.08" />
            <line class="fil1 str5" x1="9287.16" y1="3299.94" x2="9286.02" y2="3596.82" />
            <line class="fil1 str5" x1="9432.34" y1="3299.95" x2="9431.2" y2="3596.84" />
            <line class="fil1 str5" x1="9577.52" y1="3299.97" x2="9576.38" y2="3596.86" />
            <line class="fil1 str5" x1="9722.82" y1="3301.59" x2="9721.55" y2="3596.88" />
            <line class="fil1 str5" x1="9866.39" y1="3301.74" x2="9866.85" y2="3598.5" />
            <line class="fil1 str5" x1="10011.56" y1="3301.75" x2="10010.42" y2="3598.64" />
            <line class="fil1 str5" x1="10156.74" y1="3301.77" x2="10155.6" y2="3598.66" />
            <line class="fil1 str5" x1="10301.91" y1="3301.79" x2="10300.77" y2="3598.68" />
            <line class="fil1 str5" x1="10447.21" y1="3303.41" x2="10445.95" y2="3598.69" />
            <line class="fil1 str5" x1="10590.79" y1="3303.55" x2="10591.25" y2="3600.31" />
            <line class="fil1 str6" x1="11771.7" y1="4344.2" x2="14369.2" y2="4350.57" />
            <line class="fil1 str8" x1="27081.95" y1="19850.29" x2="27100.03" y2="13187" />
            <g>
              <path class="fil6" d="M29065.17 19859.34c0,4.08 -0.77,7.39 -1.7,7.38 -0.93,-0.01 -1.7,-3.34 -1.7,-7.42l3.4 0.04zm10.24 -18777.4l-10.24 18777.4 -3.4 -0.04 10.24 -18777.4 3.4 0.04zm-3.4 -0.04c0,-4.08 0.77,-7.39 1.7,-7.38 0.93,0.01 1.7,3.34 1.7,7.42l-3.4 -0.04z" />
            </g>
          </g>

          <g id="estacdireita">
            <rect class="fil12" x="17239.86" y="13961.55" width="119.39" height="4912.27" />
            <rect class="fil12" x="18291.5" y="13961.55" width="119.39" height="4912.27" /> // estacionamento linhas

            <line class="fil1 str5" x1="17600.55" y1="18875.15" x2="17614.23" y2="13962.35" />
            <line class="fil1 str5" x1="17303.66" y1="18874.01" x2="17317.34" y2="13961.21" />
            <line class="fil1 str5" x1="17602.19" y1="18584.67" x2="17305.42" y2="18585.13" />
            <line class="fil1 str5" x1="17614.23" y1="13962.35" x2="17317.34" y2="13961.21" />
            <line class="fil1 str5" x1="17305.44" y1="18439.96" x2="17602.33" y2="18441.1" />
            <line class="fil1 str5" x1="17305.58" y1="18296.39" x2="17602.34" y2="18295.92" />
            <line class="fil1 str5" x1="17305.59" y1="18151.21" x2="17602.49" y2="18152.35" />
            <line class="fil1 str5" x1="17307.34" y1="18007.51" x2="17602.5" y2="18007.18" />
            <line class="fil1 str5" x1="17307.36" y1="17862.34" x2="17604.25" y2="17863.48" />
            <line class="fil1 str5" x1="17307.38" y1="17717.16" x2="17604.27" y2="17718.3" />
            <line class="fil1 str5" x1="17307.52" y1="17573.59" x2="17604.41" y2="17574.73" />
            <line class="fil1 str5" x1="17307.53" y1="17428.41" x2="17604.43" y2="17429.55" />
            <line class="fil1 str5" x1="17309.28" y1="17284.72" x2="17604.44" y2="17284.38" />
            <line class="fil1 str5" x1="17309.3" y1="17139.54" x2="17606.19" y2="17140.68" />
            <line class="fil1 str5" x1="17309.44" y1="16995.97" x2="17606.21" y2="16995.51" />
            <line class="fil1 str5" x1="17309.46" y1="16850.79" x2="17606.35" y2="16851.93" />
            <line class="fil1 str5" x1="17309.6" y1="16707.22" x2="17606.37" y2="16706.76" />
            <line class="fil1 str5" x1="17311.22" y1="16561.92" x2="17606.51" y2="16563.18" />
            <line class="fil1 str5" x1="17311.24" y1="16416.74" x2="17606.52" y2="16418.01" />
            <line class="fil1 str5" x1="17311.38" y1="16273.17" x2="17608.27" y2="16274.32" />
            <line class="fil1 str5" x1="17311.4" y1="16128" x2="17608.29" y2="16129.14" />
            <line class="fil1 str5" x1="17311.54" y1="15984.43" x2="17608.43" y2="15985.57" />
            <line class="fil1 str5" x1="17313.16" y1="15839.13" x2="17608.45" y2="15840.39" />
            <line class="fil1 str5" x1="17313.3" y1="15695.55" x2="17608.46" y2="15695.22" />
            <line class="fil1 str5" x1="17313.32" y1="15550.38" x2="17610.21" y2="15551.52" />
            <line class="fil1 str5" x1="17313.46" y1="15406.81" x2="17610.22" y2="15406.34" />
            <line class="fil1 str5" x1="17313.48" y1="15261.63" x2="17610.37" y2="15262.77" />
            <line class="fil1 str5" x1="17315.1" y1="15116.33" x2="17610.39" y2="15117.6" />
            <line class="fil1 str5" x1="17315.24" y1="14972.76" x2="17610.53" y2="14974.02" />
            <line class="fil1 str5" x1="17315.26" y1="14827.58" x2="17612.15" y2="14828.72" />
            <line class="fil1 str5" x1="17315.4" y1="14684.01" x2="17612.29" y2="14685.15" />
            <line class="fil1 str5" x1="17315.42" y1="14538.83" x2="17612.31" y2="14539.97" />
            <line class="fil1 str5" x1="17315.56" y1="14395.26" x2="17612.33" y2="14394.8" />
            <line class="fil1 str5" x1="17317.18" y1="14249.96" x2="17612.47" y2="14251.23" />
            <line class="fil1 str5" x1="17317.32" y1="14106.39" x2="17614.09" y2="14105.93" />
            <line class="fil1 str5" x1="17305.42" y1="18585.13" x2="17127.93" y2="18584.4" />
            <line class="fil1 str5" x1="17303.66" y1="18874.01" x2="17317.34" y2="13961.21" />
            <line class="fil1 str5" x1="17008.37" y1="18872.74" x2="17020.45" y2="13960.07" />
            <line class="fil1 str5" x1="17305.42" y1="18585.13" x2="17008.53" y2="18583.99" />
            <line class="fil1 str5" x1="17317.34" y1="13961.21" x2="17020.45" y2="13960.07" />
            <line class="fil1 str5" x1="17008.55" y1="18438.82" x2="17305.44" y2="18439.96" />
            <line class="fil1 str5" x1="17010.29" y1="18295.12" x2="17305.58" y2="18296.39" />
            <line class="fil1 str5" x1="17010.31" y1="18149.95" x2="17305.59" y2="18151.21" />
            <line class="fil1 str5" x1="17010.45" y1="18006.37" x2="17307.34" y2="18007.51" />
            <line class="fil1 str5" x1="17010.47" y1="17861.2" x2="17307.36" y2="17862.34" />
            <line class="fil1 str5" x1="17010.61" y1="17717.62" x2="17307.38" y2="17717.16" />
            <line class="fil1 str5" x1="17012.23" y1="17572.32" x2="17307.52" y2="17573.59" />
            <line class="fil1 str5" x1="17012.37" y1="17428.75" x2="17307.53" y2="17428.41" />
            <line class="fil1 str5" x1="17012.39" y1="17283.58" x2="17309.28" y2="17284.72" />
            <line class="fil1 str5" x1="17012.41" y1="17138.4" x2="17309.3" y2="17139.54" />
            <line class="fil1 str5" x1="17012.55" y1="16994.83" x2="17309.44" y2="16995.97" />
            <line class="fil1 str5" x1="17014.17" y1="16849.53" x2="17309.46" y2="16850.79" />
            <line class="fil1 str5" x1="17014.31" y1="16705.96" x2="17309.6" y2="16707.22" />
            <line class="fil1 str5" x1="17014.33" y1="16560.78" x2="17311.22" y2="16561.92" />
            <line class="fil1 str5" x1="17014.47" y1="16417.21" x2="17311.24" y2="16416.74" />
            <line class="fil1 str5" x1="17014.49" y1="16272.03" x2="17311.38" y2="16273.17" />
            <line class="fil1 str5" x1="17014.63" y1="16128.46" x2="17311.4" y2="16128" />
            <line class="fil1 str5" x1="17016.25" y1="15983.16" x2="17311.54" y2="15984.43" />
            <line class="fil1 str5" x1="17016.27" y1="15837.99" x2="17313.16" y2="15839.13" />
            <line class="fil1 str5" x1="17016.43" y1="15549.24" x2="17313.32" y2="15550.38" />
            <line class="fil1 str5" x1="17016.57" y1="15405.67" x2="17313.46" y2="15406.81" />
            <line class="fil1 str5" x1="17018.19" y1="15260.37" x2="17313.48" y2="15261.63" />
            <line class="fil1 str5" x1="17018.34" y1="15116.79" x2="17315.1" y2="15116.33" />
            <line class="fil1 str5" x1="17018.35" y1="14971.62" x2="17315.24" y2="14972.76" />
            <line class="fil1 str5" x1="17018.49" y1="14828.04" x2="17315.26" y2="14827.58" />
            <line class="fil1 str5" x1="17018.51" y1="14682.87" x2="17315.4" y2="14684.01" />
            <line class="fil1 str5" x1="17020.13" y1="14537.57" x2="17315.42" y2="14538.83" />
            <line class="fil1 str5" x1="17020.28" y1="14394" x2="17315.56" y2="14395.26" />
            <line class="fil1 str5" x1="17020.29" y1="14248.82" x2="17317.18" y2="14249.96" />
            <line class="fil1 str5" x1="17020.43" y1="14105.25" x2="17317.32" y2="14106.39" />
            <line class="fil1 str5" x1="17600.56" y1="18729.97" x2="17305.28" y2="18728.71" />
            <line class="fil1 str5" x1="17305.28" y1="18728.71" x2="17126.18" y2="18728.1" />
            <line class="fil1 str5" x1="17305.28" y1="18728.71" x2="17008.51" y2="18729.17" />
            <line class="fil1 str5" x1="17600.55" y1="18875.15" x2="17303.66" y2="18874.01" />
            <line class="fil1 str5" x1="17303.66" y1="18874.01" x2="17126.17" y2="18873.27" />
            <line class="fil1 str5" x1="17303.66" y1="18874.01" x2="17008.37" y2="18872.74" />

            //estacionamento direita

            <line class="fil1 str5" x1="18045.82" y1="18876.05" x2="18057.9" y2="13963.39" />
            <line class="fil1 str5" x1="18637.87" y1="18876.86" x2="18651.55" y2="13964.06" />
            <line class="fil1 str5" x1="18340.98" y1="18875.72" x2="18354.79" y2="13964.53" />
            <line class="fil1 str5" x1="18639.63" y1="18587.98" x2="18342.74" y2="18586.84" />
            <line class="fil1 str5" x1="18651.55" y1="13964.06" x2="18354.79" y2="13964.53" />
            <line class="fil1 str5" x1="18342.88" y1="18443.27" x2="18639.77" y2="18444.41" />
            <line class="fil1 str5" x1="18342.9" y1="18298.1" x2="18639.79" y2="18299.24" />
            <line class="fil1 str5" x1="18343.04" y1="18154.52" x2="18639.81" y2="18154.06" />
            <line class="fil1 str5" x1="18344.66" y1="18009.22" x2="18639.95" y2="18010.49" />
            <line class="fil1 str5" x1="18344.81" y1="17865.65" x2="18641.57" y2="17865.19" />
            <line class="fil1 str5" x1="18344.82" y1="17720.47" x2="18641.71" y2="17721.61" />
            <line class="fil1 str5" x1="18344.84" y1="17575.3" x2="18641.73" y2="17576.44" />
            <line class="fil1 str5" x1="18344.98" y1="17431.73" x2="18641.87" y2="17432.87" />
            <line class="fil1 str5" x1="18346.6" y1="17286.43" x2="18641.89" y2="17287.69" />
            <line class="fil1 str5" x1="18346.75" y1="17142.86" x2="18642.03" y2="17144.12" />
            <line class="fil1 str5" x1="18346.76" y1="16997.68" x2="18643.65" y2="16998.82" />
            <line class="fil1 str5" x1="18346.9" y1="16854.11" x2="18643.67" y2="16853.64" />
            <line class="fil1 str5" x1="18346.92" y1="16708.93" x2="18643.81" y2="16710.07" />
            <line class="fil1 str5" x1="18348.67" y1="16565.24" x2="18643.83" y2="16564.9" />
            <line class="fil1 str5" x1="18348.69" y1="16420.06" x2="18643.97" y2="16421.33" />
            <line class="fil1 str5" x1="18348.83" y1="16276.49" x2="18645.59" y2="16276.03" />
            <line class="fil1 str5" x1="18348.84" y1="16131.31" x2="18645.73" y2="16132.45" />
            <line class="fil1 str5" x1="18348.86" y1="15986.14" x2="18645.75" y2="15987.28" />
            <line class="fil1 str5" x1="18350.61" y1="15842.44" x2="18645.89" y2="15843.7" />
            <line class="fil1 str5" x1="18350.63" y1="15697.26" x2="18645.91" y2="15698.53" />
            <line class="fil1 str5" x1="18350.77" y1="15553.69" x2="18647.65" y2="15554.83" />
            <line class="fil1 str5" x1="18350.78" y1="15408.52" x2="18647.67" y2="15409.66" />
            <line class="fil1 str5" x1="18350.93" y1="15264.94" x2="18647.69" y2="15264.48" />
            <line class="fil1 str5" x1="18350.94" y1="15119.77" x2="18647.83" y2="15120.91" />
            <line class="fil1 str5" x1="18352.69" y1="14976.07" x2="18647.85" y2="14975.73" />
            <line class="fil1 str5" x1="18352.71" y1="14830.89" x2="18649.59" y2="14832.03" />
            <line class="fil1 str5" x1="18352.72" y1="14685.72" x2="18649.61" y2="14686.86" />
            <line class="fil1 str5" x1="18352.87" y1="14542.15" x2="18649.75" y2="14543.29" />
            <line class="fil1 str5" x1="18352.88" y1="14396.97" x2="18649.77" y2="14398.11" />
            <line class="fil1 str5" x1="18354.63" y1="14253.28" x2="18649.91" y2="14254.54" />
            <line class="fil1 str5" x1="18354.65" y1="14108.1" x2="18651.53" y2="14109.24" />
            <line class="fil1 str5" x1="18342.74" y1="18586.84" x2="18165.37" y2="18587.71" />
            <line class="fil1 str5" x1="18340.98" y1="18875.72" x2="18354.79" y2="13964.53" />
            <line class="fil1 str5" x1="18342.74" y1="18586.84" x2="18045.98" y2="18587.31" />
            <line class="fil1 str5" x1="18354.79" y1="13964.53" x2="18057.9" y2="13963.39" />
            <line class="fil1 str5" x1="18046" y1="18442.13" x2="18342.88" y2="18443.27" />
            <line class="fil1 str5" x1="18047.74" y1="18298.43" x2="18342.9" y2="18298.1" />
            <line class="fil1 str5" x1="18047.76" y1="18153.26" x2="18343.04" y2="18154.52" />
            <line class="fil1 str5" x1="18047.77" y1="18008.08" x2="18344.66" y2="18009.22" />
            <line class="fil1 str5" x1="18047.91" y1="17864.51" x2="18344.81" y2="17865.65" />
            <line class="fil1 str5" x1="18047.93" y1="17719.33" x2="18344.82" y2="17720.47" />
            <line class="fil1 str5" x1="18048.08" y1="17575.76" x2="18344.84" y2="17575.3" />
            <line class="fil1 str5" x1="18049.7" y1="17430.46" x2="18344.98" y2="17431.73" />
            <line class="fil1 str5" x1="18049.84" y1="17286.89" x2="18346.6" y2="17286.43" />
            <line class="fil1 str5" x1="18049.85" y1="17141.72" x2="18346.75" y2="17142.86" />
            <line class="fil1 str5" x1="18050" y1="16998.14" x2="18346.76" y2="16997.68" />
            <line class="fil1 str5" x1="18050.02" y1="16852.97" x2="18346.9" y2="16854.11" />
            <line class="fil1 str5" x1="18051.64" y1="16707.67" x2="18346.92" y2="16708.93" />
            <line class="fil1 str5" x1="18051.78" y1="16564.1" x2="18348.67" y2="16565.24" />
            <line class="fil1 str5" x1="18051.79" y1="16418.92" x2="18348.69" y2="16420.06" />
            <line class="fil1 str5" x1="18051.94" y1="16275.35" x2="18348.83" y2="16276.49" />
            <line class="fil1 str5" x1="18051.95" y1="16130.17" x2="18348.84" y2="16131.31" />
            <line class="fil1 str5" x1="18053.7" y1="15986.47" x2="18348.86" y2="15986.14" />
            <line class="fil1 str5" x1="18053.72" y1="15841.3" x2="18350.61" y2="15842.44" />
            <line class="fil1 str5" x1="18053.86" y1="15697.73" x2="18350.63" y2="15697.26" />
            <line class="fil1 str5" x1="18053.88" y1="15552.55" x2="18350.77" y2="15553.69" />
            <line class="fil1 str5" x1="18053.89" y1="15407.38" x2="18350.78" y2="15408.52" />
            <line class="fil1 str5" x1="18055.64" y1="15263.68" x2="18350.93" y2="15264.94" />
            <line class="fil1 str5" x1="18055.66" y1="15118.5" x2="18350.94" y2="15119.77" />
            <line class="fil1 str5" x1="18055.8" y1="14974.93" x2="18352.69" y2="14976.07" />
            <line class="fil1 str5" x1="18055.82" y1="14829.75" x2="18352.71" y2="14830.89" />
            <line class="fil1 str5" x1="18055.96" y1="14686.18" x2="18352.72" y2="14685.72" />
            <line class="fil1 str5" x1="18057.58" y1="14540.88" x2="18352.87" y2="14542.15" />
            <line class="fil1 str5" x1="18057.72" y1="14397.31" x2="18352.88" y2="14396.97" />
            <line class="fil1 str5" x1="18057.74" y1="14252.14" x2="18354.63" y2="14253.28" />
            <line class="fil1 str5" x1="18057.76" y1="14106.96" x2="18354.65" y2="14108.1" />
            <line class="fil1 str5" x1="18638.01" y1="18733.28" x2="18342.72" y2="18732.02" />
            <line class="fil1 str5" x1="18342.72" y1="18732.02" x2="18163.63" y2="18731.41" />
            <line class="fil1 str5" x1="18342.72" y1="18732.02" x2="18045.83" y2="18730.88" />
            <line class="fil1 str5" x1="18637.87" y1="18876.86" x2="18340.98" y2="18875.72" />
            <line class="fil1 str5" x1="18340.98" y1="18875.72" x2="18163.61" y2="18876.58" />
            <line class="fil1 str5" x1="18340.98" y1="18875.72" x2="18045.82" y2="18876.05" />
          </g>

          <!--
        <line class="fil1 str9" x1="19920.74" y1="16167.95" x2="19918.71" y2="16764.94" />
        <line class="fil1 str9" x1="19921.01" y1="15859.84" x2="19920.74" y2="16167.95" />
        linha manutencao
        -->
          <line class="fil1 str6" x1="4399.69" y1="4173.07" x2="4399" y2="4413.47" />
          <line class="fil1 str6" x1="4398.93" y1="4828.03" x2="4398.24" y2="5068.43" />
          <line class="fil1 str6" x1="4395.72" y1="4828.28" x2="4395.04" y2="5068.68" />
          <g>
            <line class="fil1 str10" x1="25776.43" y1="12964.66" x2="25701.57" y2="12748" />
          </g>
          <g>
            <line class="fil1 str11" x1="4498.31" y1="4790.27" x2="4448.79" y2="4646.94" />
          </g>
          <g>
            <line class="fil1 str11" x1="16382.78" y1="3287.02" x2="16254.26" y2="3206.54" />
          </g>
          <g>
            <line class="fil1 str12" x1="25700.51" y1="12707.92" x2="25777.49" y2="12489.14" />
          </g>
          <g>
            <line class="fil1 str11" x1="4448.09" y1="4597.49" x2="4499.01" y2="4452.76" />
          </g>
          <g>
            <line class="fil1 str11" x1="16222.67" y1="3168.48" x2="16171.47" y2="3023.85" />
          </g>
          <line class="fil1 str13" x1="25716.33" y1="12288.81" x2="25719.66" y2="12290.16" />
          <line class="fil1 str14" x1="25719.79" y1="12291.77" x2="25719.66" y2="12290.16" />
          <line class="fil1 str6" x1="4395.72" y1="4828.28" x2="4398.93" y2="4828.03" />
          <line class="fil1 str15" x1="4395.79" y1="4413.72" x2="4399" y2="4413.47" />
          <g>
            <path class="fil6" d="M27074.65 1081.91c0.01,-4.08 3.27,-7.4 7.27,-7.4 4,0 7.24,3.32 7.23,7.4l-14.5 0zm-17.85 6943.13l17.85 -6943.13 14.5 0 -17.85 6943.13 -14.5 0.02 0 -0.02zm14.5 0c-0.01,4.08 -3.27,7.4 -7.27,7.4 -4,0 -7.24,-3.32 -7.23,-7.4l14.5 0zm-305.05 303.24l0.08 -14.8 0.01 0 14.97 -0.31 14.77 -1.05 14.54 -1.79 14.31 -2.49 14.06 -3.17 13.78 -3.85 13.5 -4.5 13.19 -5.13 12.86 -5.76 12.52 -6.34 12.17 -6.94 11.77 -7.48 11.39 -8.04 10.97 -8.55 10.53 -9.06 10.09 -9.56 9.61 -10.01 9.12 -10.49 8.62 -10.9 8.09 -11.33 7.55 -11.72 6.99 -12.09 6.41 -12.46 5.81 -12.8 5.19 -13.13 4.57 -13.43 3.91 -13.71 3.24 -14 2.57 -14.24 1.85 -14.48 1.12 -14.7 0.39 -14.91 14.5 -0.04 -0.41 15.67 -1.18 15.46 -1.95 15.24 -2.69 15 -3.42 14.72 -4.11 14.45 -4.81 14.13 -5.47 13.81 -6.11 13.48 -6.75 13.1 -7.35 12.73 -7.93 12.32 -8.51 11.91 -9.06 11.46 -9.58 11.01 -10.11 10.53 -10.59 10.04 -11.07 9.52 -11.53 8.99 -11.95 8.44 -12.37 7.86 -12.77 7.28 -13.16 6.66 -13.5 6.04 -13.85 5.39 -14.18 4.72 -14.46 4.05 -14.76 3.33 -15.01 2.61 -15.26 1.87 -15.49 1.11 -15.67 0.33 0.01 0zm-0.01 0c-4,-0.01 -7.22,-3.35 -7.2,-7.43 0.02,-4.08 3.3,-7.38 7.3,-7.37l-0.1 14.8zm-1785.68 -19.21l1785.77 4.41 -0.08 14.8 -1785.77 -4.41 -0.01 0 0.09 -14.8zm-0.08 14.8c-4,-0.01 -7.23,-3.34 -7.21,-7.42 0.02,-4.08 3.29,-7.39 7.29,-7.38l-0.08 14.8zm-646.11 -17.04l646.2 2.24 -0.1 14.8 -646.2 -2.24 0.07 -14.8 0.03 0zm-0.1 14.8c-4,-0.01 -7.22,-3.35 -7.2,-7.43 0.02,-4.08 3.3,-7.38 7.3,-7.37l-0.1 14.8zm-332.27 -14.66l332.34 -0.14 -0.04 14.8 -332.34 0.14 0 0 0.04 -14.8zm-0.04 14.8c-4,0 -7.24,-3.32 -7.23,-7.4 0.01,-4.08 3.27,-7.4 7.27,-7.4l-0.04 14.8zm-143.79 -44.69l10.12 -10.62 -0.62 -0.55 5.17 4.03 4.91 3.76 4.66 3.5 4.43 3.24 4.23 2.98 4.02 2.76 3.86 2.51 3.71 2.3 3.56 2.09 3.45 1.89 3.35 1.7 3.27 1.52 3.22 1.36 3.19 1.2 3.2 1.07 3.21 0.94 3.25 0.82 3.33 0.7 3.43 0.6 3.56 0.51 3.69 0.43 3.84 0.34 4.05 0.27 4.25 0.21 4.46 0.16 4.72 0.09 4.96 0.07 5.24 0.03 5.54 0 5.87 0 6.17 -0.01 6.53 -0.01 -0.04 14.8 -6.51 0.01 -6.19 0.01 -5.87 0 -5.58 0 -5.34 -0.03 -5.08 -0.07 -4.86 -0.11 -4.66 -0.16 -4.47 -0.21 -4.33 -0.29 -4.2 -0.38 -4.07 -0.47 -3.96 -0.57 -3.89 -0.68 -3.83 -0.82 -3.79 -0.94 -3.73 -1.1 -3.7 -1.23 -3.71 -1.4 -3.72 -1.56 -3.73 -1.74 -3.77 -1.92 -3.83 -2.09 -3.9 -2.29 -3.99 -2.48 -4.12 -2.69 -4.26 -2.9 -4.41 -3.12 -4.59 -3.36 -4.8 -3.6 -5.01 -3.84 -5.27 -4.11 -0.62 -0.55zm0.62 0.55c-3.16,-2.49 -3.74,-7.14 -1.29,-10.37 2.45,-3.23 7.01,-3.84 10.17,-1.35l-8.88 11.72zm-4897.7 -4875.72l4907.2 4864.55 -10.12 10.62 -4907.2 -4864.55 10.04 -10.7 0.08 0.08zm-10.12 10.62c-2.86,-2.84 -2.92,-7.53 -0.13,-10.46 2.79,-2.93 7.39,-3 10.25,-0.16l-10.12 10.62zm-75.37 -92.79l85.41 82.09 -9.96 10.78 -85.41 -82.09 -0.01 0 9.97 -10.78zm-9.96 10.78c-2.91,-2.79 -3.04,-7.48 -0.29,-10.45 2.75,-2.97 7.34,-3.12 10.25,-0.33l-9.96 10.78zm-31.88 -51.08l41.85 40.3 -9.98 10.78 -41.85 -40.3 9.98 -10.78zm-9.98 10.78c-2.9,-2.8 -3.02,-7.49 -0.27,-10.46 2.75,-2.97 7.35,-3.12 10.25,-0.32l-9.98 10.78zm-31.86 -51.07l41.84 40.29 -9.98 10.78 -41.84 -40.29 -0.09 -0.1 10.07 -10.68zm-9.98 10.78c-2.9,-2.8 -3.02,-7.49 -0.27,-10.46 2.75,-2.97 7.35,-3.12 10.25,-0.32l-9.98 10.78zm-31.89 -52.59l41.96 41.91 -10.16 10.58 -41.96 -41.91 -0.11 -0.1 10.27 -10.48zm-10.16 10.58c-2.85,-2.85 -2.89,-7.54 -0.09,-10.46 2.8,-2.92 7.4,-2.97 10.25,-0.12l-10.16 10.58zm-30.1 -52.51l40.37 42.03 -10.38 10.38 -40.37 -42.03 -0.11 -0.12 10.49 -10.26zm-10.38 10.38c-2.8,-2.91 -2.74,-7.6 0.12,-10.46 2.86,-2.86 7.46,-2.83 10.26,0.08l-10.38 10.38zm-8.89 -31.34l19.38 21.08 -10.6 10.14 -19.38 -21.08 10.38 -10.36 0.22 0.22zm-10.6 10.14c-2.73,-2.97 -2.57,-7.66 0.35,-10.46 2.92,-2.8 7.52,-2.65 10.25,0.32l-10.6 10.14zm-10.6 -31.32l20.98 20.96 -10.16 10.58 -20.98 -20.96 -0.21 -0.22 10.37 -10.36zm-10.16 10.58c-2.85,-2.85 -2.89,-7.54 -0.09,-10.46 2.8,-2.92 7.4,-2.97 10.25,-0.12l-10.16 10.58zm-9.01 -31.43l19.38 21.07 -10.58 10.14 -19.38 -21.07 -0.01 0 10.59 -10.14zm-10.58 10.14c-2.73,-2.97 -2.58,-7.66 0.34,-10.46 2.92,-2.8 7.51,-2.65 10.24,0.32l-10.58 10.14zm-8.79 -31.22l19.38 21.08 -10.6 10.14 -19.38 -21.08 10.59 -10.14 0.01 0zm-10.6 10.14c-2.73,-2.97 -2.57,-7.66 0.35,-10.46 2.92,-2.8 7.52,-2.65 10.25,0.32l-10.6 10.14zm-8.79 -31.21l19.38 21.07 -10.58 10.14 -19.38 -21.07 -0.38 -0.44 10.96 -9.7zm-10.58 10.14c-2.73,-2.97 -2.58,-7.66 0.34,-10.46 2.92,-2.8 7.51,-2.65 10.24,0.32l-10.58 10.14zm-6.94 -32.51l17.9 22.81 -11.34 9.26 -17.9 -22.81 10.97 -9.7 0.37 0.44zm-11.34 9.26c-2.49,-3.18 -1.98,-7.85 1.15,-10.4 3.13,-2.55 7.7,-2.04 10.19,1.14l-11.34 9.26zm-8.42 -30.79l19.39 21.09 -10.6 10.14 -19.39 -21.09 -0.36 -0.44 10.96 -9.7zm-10.6 10.14c-2.73,-2.97 -2.57,-7.66 0.35,-10.46 2.92,-2.8 7.52,-2.65 10.25,0.32l-10.6 10.14zm-6.94 -32.5l17.9 22.8 -11.32 9.26 -17.9 -22.8 11.18 -9.45 0.14 0.19zm-11.32 9.26c-2.5,-3.18 -1.99,-7.84 1.13,-10.39 3.12,-2.55 7.69,-2.05 10.19,1.13l-11.32 9.26zm-6.59 -30.65l17.77 21.2 -11.04 9.64 -17.77 -21.2 -0.15 -0.19 11.19 -9.45zm-11.04 9.64c-2.59,-3.09 -2.22,-7.77 0.82,-10.43 3.04,-2.66 7.63,-2.3 10.22,0.79l-11.04 9.64zm-6.71 -32.26l17.9 22.81 -11.34 9.26 -17.9 -22.81 11.33 -9.26 0.01 0zm-11.34 9.26c-2.49,-3.18 -1.98,-7.85 1.15,-10.4 3.13,-2.55 7.7,-2.04 10.19,1.14l-11.34 9.26zm-6.57 -32.06l17.9 22.8 -11.32 9.26 -17.9 -22.8 -0.21 -0.28 11.53 -8.98zm-11.32 9.26c-2.5,-3.18 -1.99,-7.84 1.13,-10.39 3.12,-2.55 7.69,-2.05 10.19,1.13l-11.32 9.26zm-4.77 -31.91l16.3 22.93 -11.74 8.7 -16.3 -22.93 0 0 11.74 -8.7zm-11.74 8.7c-2.34,-3.3 -1.62,-7.93 1.62,-10.33 3.24,-2.4 7.78,-1.67 10.12,1.63l-11.74 8.7zm-4.56 -31.63l16.3 22.93 -11.74 8.7 -16.3 -22.93 0 0 11.74 -8.7zm-11.74 8.7c-2.34,-3.3 -1.62,-7.93 1.62,-10.33 3.24,-2.4 7.78,-1.67 10.12,1.63l-11.74 8.7zm-4.56 -31.63l16.3 22.93 -11.74 8.7 -16.3 -22.93 0 0 11.74 -8.7zm-11.74 8.7c-2.34,-3.3 -1.62,-7.93 1.62,-10.33 3.24,-2.4 7.78,-1.67 10.12,1.63l-11.74 8.7zm-4.56 -31.63l16.3 22.93 -11.74 8.7 -16.3 -22.93 -0.21 -0.3 11.95 -8.4zm-11.74 8.7c-2.34,-3.3 -1.62,-7.93 1.62,-10.33 3.24,-2.4 7.78,-1.67 10.12,1.63l-11.74 8.7zm-2.75 -31.46l14.7 23.06 -12.16 8.1 -14.7 -23.06 -0.11 -0.17 12.27 -7.93zm-12.16 8.1c-2.18,-3.41 -1.22,-8.01 2.13,-10.24 3.35,-2.23 7.85,-1.27 10.03,2.14l-12.16 8.1zm-2.54 -32.58l14.81 24.65 -12.38 7.76 -14.81 -24.65 12.37 -7.76 0.01 0zm-12.38 7.76c-2.08,-3.47 -1,-8.04 2.41,-10.18 3.41,-2.14 7.89,-1.05 9.97,2.42l-12.38 7.76zm-2.45 -32.42l14.82 24.66 -12.36 7.76 -14.82 -24.66 -0.19 -0.33 12.55 -7.43zm-12.36 7.76c-2.08,-3.47 -1.01,-8.04 2.4,-10.18 3.41,-2.14 7.88,-1.05 9.96,2.42l-12.36 7.76zm-0.67 -32.21l13.22 24.78 -12.74 7.1 -13.22 -24.78 0 0 12.74 -7.1zm-12.74 7.1c-1.91,-3.58 -0.6,-8.08 2.91,-10.04 3.51,-1.96 7.92,-0.64 9.83,2.94l-12.74 7.1zm-0.47 -31.89l13.21 24.79 -12.74 7.1 -13.21 -24.79 12.74 -7.1zm-12.74 7.1c-1.91,-3.58 -0.6,-8.08 2.91,-10.04 3.51,-1.96 7.92,-0.64 9.83,2.94l-12.74 7.1zm-0.48 -31.88l13.22 24.78 -12.74 7.1 -13.22 -24.78 -0.18 -0.36 12.92 -6.74zm-12.74 7.1c-1.91,-3.58 -0.6,-8.08 2.91,-10.04 3.51,-1.96 7.92,-0.64 9.83,2.94l-12.74 7.1zm1.31 -31.64l11.61 24.9 -13.1 6.38 -11.61 -24.9 0 0 13.1 -6.38zm-13.1 6.38c-1.71,-3.68 -0.17,-8.1 3.44,-9.86 3.61,-1.76 7.95,-0.2 9.66,3.48l-13.1 6.38zm1.49 -31.3l11.61 24.92 -13.1 6.38 -11.61 -24.92 -0.06 -0.13 13.16 -6.25zm-13.1 6.38c-1.71,-3.68 -0.17,-8.1 3.44,-9.86 3.61,-1.76 7.95,-0.2 9.66,3.48l-13.1 6.38zm1.42 -32.75l11.74 26.5 -13.22 6.12 -11.74 -26.5 -0.15 -0.37 13.37 -5.75zm-13.22 6.12c-1.64,-3.71 -0.02,-8.11 3.63,-9.79 3.65,-1.68 7.95,-0.04 9.59,3.67l-13.22 6.12zm3.24 -32.39l10.13 26.64 -13.52 5.38 -10.13 -26.64 13.31 -5.89 0.21 0.51zm-13.52 5.38c-1.44,-3.8 0.41,-8.1 4.14,-9.58 3.73,-1.48 7.94,0.4 9.38,4.2l-13.52 5.38zm1.69 -30.79l11.62 24.9 -13.1 6.4 -11.62 -24.9 -0.35 -0.9 13.45 -5.5zm-13.1 6.4c-1.71,-3.68 -0.17,-8.11 3.44,-9.87 3.61,-1.76 7.95,-0.21 9.66,3.47l-13.1 6.4zm4.93 -32.27l8.52 26.77 -13.8 4.6 -8.52 -26.77 13.66 -5 0.14 0.4zm-13.8 4.6c-1.23,-3.88 0.85,-8.06 4.66,-9.33 3.81,-1.27 7.91,0.85 9.14,4.73l-13.8 4.6zm3.52 -31.63l10.14 26.63 -13.52 5.4 -10.14 -26.63 -0.16 -0.48 13.68 -4.92zm-13.52 5.4c-1.44,-3.8 0.41,-8.1 4.14,-9.59 3.73,-1.49 7.94,0.39 9.38,4.19l-13.52 5.4zm5.03 -33.28l8.65 28.36 -13.84 4.44 -8.65 -28.36 13.82 -4.53 0.02 0.09zm-13.84 4.44c-1.18,-3.89 0.95,-8.06 4.77,-9.28 3.82,-1.22 7.89,0.95 9.07,4.84l-13.84 4.44zm5.29 -31.29l8.53 26.76 -13.8 4.62 -8.53 -26.76 13.8 -4.62zm-13.8 4.62c-1.23,-3.88 0.85,-8.07 4.66,-9.34 3.81,-1.27 7.91,0.84 9.14,4.72l-13.8 4.62zm5.26 -31.38l8.54 26.76 -13.8 4.62 -8.54 -26.76 -0.13 -0.48 13.93 -4.14zm-13.8 4.62c-1.23,-3.88 0.85,-8.07 4.66,-9.34 3.81,-1.27 7.91,0.84 9.14,4.72l-13.8 4.62zm6.89 -32.63l7.04 28.49 -14.06 3.66 -7.04 -28.49 14.04 -3.73 0.02 0.07zm-14.06 3.66c-0.97,-3.95 1.38,-7.99 5.26,-9 3.88,-1.01 7.83,1.39 8.8,5.34l-14.06 3.66zm7.1 -30.62l6.94 26.89 -14.02 3.8 -6.94 -26.89 -0.02 -0.07 14.04 -3.73zm-14.02 3.8c-1.01,-3.94 1.3,-8.01 5.17,-9.05 3.87,-1.04 7.84,1.31 8.85,5.25l-14.02 3.8zm6.99 -32.21l7.05 28.48 -14.06 3.66 -7.05 -28.48 0 0 14.06 -3.66zm-14.06 3.66c-0.97,-3.95 1.38,-7.99 5.26,-9 3.88,-1.01 7.83,1.39 8.8,5.34l-14.06 3.66zm7.01 -32.15l7.05 28.49 -14.06 3.66 -7.05 -28.49 -0.09 -0.4 14.15 -3.26zm-14.06 3.66c-0.97,-3.95 1.38,-7.99 5.26,-9 3.88,-1.01 7.83,1.39 8.8,5.34l-14.06 3.66zm8.71 -31.87l5.44 28.61 -14.24 2.86 -5.44 -28.61 14.15 -3.26 0.09 0.4zm-14.24 2.86c-0.76,-4 1.81,-7.91 5.74,-8.69 3.93,-0.78 7.74,1.83 8.5,5.83l-14.24 2.86zm7.1 -31.75l7.05 28.49 -14.06 3.66 -7.05 -28.49 -0.09 -0.39 14.15 -3.27zm-14.06 3.66c-0.97,-3.95 1.38,-7.99 5.26,-9 3.88,-1.01 7.83,1.39 8.8,5.34l-14.06 3.66zm8.69 -31.88l5.46 28.61 -14.24 2.88 -5.46 -28.61 -0.06 -0.42 14.3 -2.46zm-14.24 2.88c-0.76,-4 1.81,-7.91 5.74,-8.7 3.93,-0.79 7.74,1.82 8.5,5.82l-14.24 2.88zm10.46 -31.19l3.84 28.73 -14.36 2.04 -3.84 -28.73 14.3 -2.45 0.06 0.41zm-14.36 2.04c-0.54,-4.04 2.24,-7.79 6.2,-8.35 3.96,-0.56 7.62,2.27 8.16,6.31l-14.36 2.04zm8.85 -31.06l5.45 28.61 -14.24 2.86 -5.45 -28.61 -0.06 -0.41 14.3 -2.45zm-14.24 2.86c-0.76,-4 1.81,-7.91 5.74,-8.69 3.93,-0.78 7.74,1.83 8.5,5.83l-14.24 2.86zm10.46 -31.2l3.84 28.75 -14.36 2.04 -3.84 -28.75 14.36 -2.04zm-14.36 2.04c-0.54,-4.04 2.24,-7.79 6.2,-8.35 3.96,-0.56 7.62,2.27 8.16,6.31l-14.36 2.04zm10.51 -30.77l3.85 28.73 -14.36 2.04 -3.85 -28.73 0 0 14.36 -2.04zm-14.36 2.04c-0.54,-4.04 2.24,-7.79 6.2,-8.35 3.96,-0.56 7.62,2.27 8.16,6.31l-14.36 2.04zm10.52 -30.78l3.84 28.74 -14.36 2.04 -3.84 -28.74 -0.05 -0.41 14.41 -1.63zm-14.36 2.04c-0.54,-4.04 2.24,-7.79 6.2,-8.35 3.96,-0.56 7.62,2.27 8.16,6.31l-14.36 2.04zm12.05 -32.09l2.36 30.46 -14.46 1.22 -2.36 -30.46 14.41 -1.63 0.05 0.41zm-14.46 1.22c-0.31,-4.07 2.67,-7.65 6.66,-7.98 3.99,-0.33 7.49,2.69 7.8,6.76l-14.46 1.22zm10.56 -30.36l3.85 28.73 -14.36 2.04 -3.85 -28.73 -0.05 -0.41 14.41 -1.63zm-14.36 2.04c-0.54,-4.04 2.24,-7.79 6.2,-8.35 3.96,-0.56 7.62,2.27 8.16,6.31l-14.36 2.04zm12.05 -32.1l2.36 30.47 -14.46 1.22 -2.36 -30.47 14.46 -1.22zm-14.46 1.22c-0.31,-4.07 2.67,-7.65 6.66,-7.98 3.99,-0.33 7.49,2.69 7.8,6.76l-14.46 1.22zm12.22 -30.08l2.24 28.86 -14.46 1.22 -2.24 -28.86 14.46 -1.22zm-14.46 1.22c-0.31,-4.07 2.67,-7.65 6.66,-7.98 3.99,-0.33 7.49,2.69 7.8,6.76l-14.46 1.22zm12.09 -31.69l2.37 30.47 -14.46 1.22 -2.37 -30.47 -0.02 -0.42 14.48 -0.8zm-14.46 1.22c-0.31,-4.07 2.67,-7.65 6.66,-7.98 3.99,-0.33 7.49,2.69 7.8,6.76l-14.46 1.22zm13.84 -29.78l0.64 28.98 -14.5 0.38 -0.64 -28.98 14.48 -0.8 0.02 0.42zm-14.5 0.38c-0.08,-4.08 3.09,-7.48 7.09,-7.58 4,-0.1 7.33,3.12 7.41,7.2l-14.5 0.38zm12.11 -31.26l2.37 30.46 -14.46 1.22 -2.37 -30.46 -0.02 -0.42 14.48 -0.8zm-14.46 1.22c-0.31,-4.07 2.67,-7.65 6.66,-7.98 3.99,-0.33 7.49,2.69 7.8,6.76l-14.46 1.22zm13.85 -29.79l0.63 28.99 -14.5 0.38 -0.63 -28.99 14.5 -0.4 0 0.02zm-14.5 0.38c-0.08,-4.08 3.09,-7.48 7.09,-7.58 4,-0.1 7.33,3.12 7.41,7.2l-14.5 0.38zm13.73 -30.99l0.77 30.59 -14.5 0.42 -0.77 -30.59 0 -0.02 14.5 -0.4zm-14.5 0.42c-0.1,-4.08 3.06,-7.49 7.06,-7.6 4,-0.11 7.34,3.1 7.44,7.18l-14.5 0.42zm13.87 -29.38l0.63 28.98 -14.5 0.38 -0.63 -28.98 14.5 -0.4 0 0.02zm-14.5 0.38c-0.08,-4.08 3.09,-7.48 7.09,-7.58 4,-0.1 7.33,3.12 7.41,7.2l-14.5 0.38zm13.73 -30.99l0.77 30.59 -14.5 0.42 -0.77 -30.59 0 -0.02 14.5 -0.4zm-14.5 0.42c-0.1,-4.08 3.06,-7.49 7.06,-7.6 4,-0.11 7.34,3.1 7.44,7.18l-14.5 0.42zm13.86 -29.39l0.64 28.99 -14.5 0.38 -0.64 -28.99 0 -0.37 14.5 -0.01zm-14.5 0.38c-0.08,-4.08 3.09,-7.48 7.09,-7.58 4,-0.1 7.33,3.12 7.41,7.2l-14.5 0.38zm15.34 -30.72l-0.84 30.71 -14.5 -0.36 0.84 -30.71 14.5 -0.03 0 0.39zm-14.5 -0.36c0.11,-4.08 3.45,-7.3 7.45,-7.21 4,0.09 7.16,3.49 7.05,7.57l-14.5 -0.36zm13.75 -30.61l0.75 30.58 -14.5 0.42 -0.75 -30.58 0 -0.43 14.5 0.01zm-14.5 0.42c-0.09,-4.08 3.07,-7.49 7.07,-7.6 4,-0.11 7.34,3.1 7.43,7.18l-14.5 0.42zm15.45 -29.11l-0.95 29.12 -14.5 -0.44 0.95 -29.12 14.5 0.41 0 0.03zm-14.5 -0.44c0.13,-4.08 3.49,-7.29 7.49,-7.17 4,0.12 7.14,3.53 7.01,7.61l-14.5 -0.44zm15.35 -30.3l-0.85 30.71 -14.5 -0.38 0.85 -30.71 0 -0.04 14.5 0.42zm-14.5 -0.38c0.11,-4.08 3.45,-7.3 7.45,-7.2 4,0.1 7.16,3.5 7.05,7.58l-14.5 -0.38zm15.47 -28.69l-0.97 29.11 -14.5 -0.46 0.97 -29.11 14.5 0.41 0 0.05zm-14.5 -0.46c0.13,-4.08 3.5,-7.28 7.5,-7.16 4,0.12 7.13,3.54 7,7.62l-14.5 -0.46zm15.34 -30.3l-0.84 30.71 -14.5 -0.36 0.84 -30.71 0 -0.05 14.5 0.41zm-14.5 -0.36c0.11,-4.08 3.45,-7.3 7.45,-7.21 4,0.09 7.16,3.49 7.05,7.57l-14.5 -0.36zm15.46 -28.7l-0.96 29.11 -14.5 -0.46 0.96 -29.11 0.03 -0.41 14.47 0.87zm-14.5 -0.46c0.13,-4.08 3.49,-7.28 7.49,-7.16 4,0.12 7.14,3.54 7.01,7.62l-14.5 -0.46zm17.04 -28.37l-2.57 29.24 -14.44 -1.28 2.57 -29.24 14.45 1.21 -0.01 0.07zm-14.44 -1.28c0.35,-4.07 3.89,-7.08 7.87,-6.73 3.98,0.35 6.92,3.94 6.57,8.01l-14.44 -1.28zm16.89 -29.62l-2.44 30.83 -14.46 -1.14 2.44 -30.83 14.48 0.8 -0.02 0.34zm-14.46 -1.14c0.32,-4.07 3.82,-7.11 7.81,-6.8 3.99,0.31 6.97,3.87 6.65,7.94l-14.46 -1.14zm15.46 -28.32l-0.98 29.12 -14.5 -0.46 0.98 -29.12 0.07 -0.81 14.43 1.27zm-14.5 -0.46c0.13,-4.08 3.5,-7.28 7.5,-7.16 4,0.12 7.13,3.54 7,7.62l-14.5 -0.46zm18.6 -28.08l-4.17 29.35 -14.36 -2.08 4.17 -29.35 14.4 1.68 -0.04 0.4zm-14.36 -2.08c0.57,-4.04 4.26,-6.85 8.22,-6.28 3.96,0.57 6.71,4.32 6.14,8.36l-14.36 -2.08zm16.96 -27.56l-2.56 29.24 -14.44 -1.28 2.56 -29.24 14.45 1.21 -0.01 0.07zm-14.44 -1.28c0.35,-4.07 3.89,-7.08 7.87,-6.73 3.98,0.35 6.92,3.94 6.57,8.01l-14.44 -1.28zm16.9 -29.63l-2.45 30.84 -14.46 -1.14 2.45 -30.84 0.05 -0.47 14.41 1.61zm-14.46 -1.14c0.32,-4.07 3.83,-7.11 7.82,-6.8 3.99,0.31 6.96,3.87 6.64,7.94l-14.46 -1.14zm18.58 -27.75l-4.17 29.36 -14.36 -2.08 4.17 -29.36 0.02 -0.09 14.34 2.17zm-14.36 -2.08c0.57,-4.04 4.26,-6.85 8.22,-6.28 3.96,0.57 6.71,4.32 6.14,8.36l-14.36 -2.08zm18.63 -25.58l-4.29 27.75 -14.32 -2.26 4.29 -27.75 14.34 2.17 -0.02 0.09zm-14.32 -2.26c0.62,-4.03 4.34,-6.8 8.29,-6.18 3.95,0.62 6.65,4.41 6.03,8.44l-14.32 -2.26zm18.51 -27.19l-4.17 29.36 -14.36 -2.08 4.17 -29.36 0 0 14.36 2.08zm-14.36 -2.08c0.57,-4.04 4.26,-6.85 8.22,-6.28 3.96,0.57 6.71,4.32 6.14,8.36l-14.36 -2.08zm18.54 -27.28l-4.18 29.36 -14.36 -2.08 4.18 -29.36 14.36 2.08zm-14.36 -2.08c0.57,-4.04 4.26,-6.85 8.22,-6.28 3.96,0.57 6.71,4.32 6.14,8.36l-14.36 -2.08zm18.53 -27.27l-4.17 29.35 -14.36 -2.08 4.17 -29.35 0.09 -0.5 14.27 2.58zm-14.36 -2.08c0.57,-4.04 4.26,-6.85 8.22,-6.28 3.96,0.57 6.71,4.32 6.14,8.36l-14.36 -2.08zm20.17 -25.31l-5.9 27.89 -14.18 -3.08 5.9 -27.89 14.2 2.97 -0.02 0.11zm-14.18 -3.08c0.84,-3.99 4.71,-6.54 8.62,-5.69 3.91,0.85 6.4,4.78 5.56,8.77l-14.18 -3.08zm19.98 -26.51l-5.78 29.48 -14.22 -2.86 5.78 -29.48 0.02 -0.11 14.2 2.97zm-14.22 -2.86c0.78,-4 4.61,-6.61 8.53,-5.83 3.92,0.78 6.47,4.69 5.69,8.69l-14.22 -2.86zm20.1 -24.91l-5.9 27.88 -14.18 -3.08 5.9 -27.88 0 0 14.18 3.08zm-14.18 -3.08c0.84,-3.99 4.71,-6.54 8.62,-5.69 3.91,0.85 6.4,4.78 5.56,8.77l-14.18 -3.08zm20.08 -24.8l-5.9 27.88 -14.18 -3.08 5.9 -27.88 14.18 3.08zm-14.18 -3.08c0.84,-3.99 4.71,-6.54 8.62,-5.69 3.91,0.85 6.4,4.78 5.56,8.77l-14.18 -3.08z" />
          </g>
          <path class="fil1 str6" d="M3096.37 2689.65c-4.94,680.82 438.7,1283.71 1090.16,1481.51" />
          <rect class="fil3 str16" x="17136.82" y="12675.12" width="416.31" height="209.62" />

          <path class="fil7" d="M20212.07 15170.87l-1054.32 0 0 -53.28 1054.32 0 26.62 26.64 -26.62 26.64zm26.62 -26.64l0 26.64 -26.62 0 26.62 -26.64zm0 -1794.65l0 1794.65 -53.24 0 0 -1794.65 26.62 -26.64 26.62 26.64zm-53.24 0l0 -26.64 26.62 0 -26.62 26.64zm514.97 26.64l-488.35 0 0 -53.28 488.35 0 26.62 26.64 -26.62 26.64zm0 -53.28l26.62 0 0 26.64 -26.62 -26.64zm-26.62 2412.29l0 -2385.65 53.24 0 0 2385.65 -26.62 26.64 -26.62 -26.64zm53.24 0l0 26.64 -26.62 0 26.62 -26.64zm-426.37 -26.64l399.75 0 0 53.28 -399.75 0 0 0 0 -53.28zm-88.6 0l88.6 0 0 53.28 -88.6 0 0 0 0 -53.28zm-1054.32 0l1054.32 0 0 53.28 -1054.32 0 -26.62 -26.64 26.62 -26.64zm0 53.28l-26.62 0 0 -26.64 26.62 26.64zm26.62 -617.64l0 591 -53.24 0 0 -591 26.62 -26.64 26.62 26.64zm-53.24 0l0 -26.64 26.62 0 -26.62 26.64z" />
          <line class="fil1 str36" x1="6168" y1="10919.1" x2="6463.29" y2="10920.37" />

          //manutencao
          <g id="manutencao" data-name="Manutenção">
            <polygon id="1" class="fil8" points="19157.75,15144.23 20212.07,15144.23 20212.07,13349.58 20700.42,13349.58 20700.42,15735.23 20300.67,15735.23 20212.07,15735.23 19157.75,15735.23 " />
          </g>
          <!--
        <rect class="fil14" x="19157.75" y="15761.67" width="1542.67" height="1413.9" />
        <rect class="fil16" x="19157.74" y="15854.71" width="420.59" height="1320.86" />
        <rect class="fil8" x="20527.92" y="15854.71" width="172.5" height="1320.86" />
        <rect class="fil16" x="20355.42" y="15854.71" width="172.5" height="1320.86" />
        <rect class="fil8" x="19578.33" y="15854.71" width="420.6" height="1320.86" />
        -->
          <line class="fil1 str7" x1="23374.51" y1="11429.36" x2="23372.78" y2="11427.88" />
          <g>
            <path class="fil3 str17" d="M17685.55 9106.4l-0.28 442.4 830.98 2.41 591.35 -208.98c42.22,-245.92 -22.6,-464.99 -191.85,-657.85l-82.69 -80.28 -353.03 -317.54 -794.48 819.84z" />
            <path id="1" class="fil2" d="M17685.55 9106.4l-0.28 442.4 830.98 2.41 591.35 -208.98c42.22,-245.92 -22.6,-464.99 -191.85,-657.85l-82.69 -80.28 -353.03 -317.54 -794.48 819.84z" />
          </g>
          <g>
            <path class="fil3 str18" d="M27121.37 13231.29c-5.45,-135.86 -99.31,-225.17 -209.86,-226.31l-2731.99 0c-116.73,3.12 -192.18,100.42 -178.53,226.31l0 118.29 3120.64 0 0 -106.08 0 -12.21 -0.26 0z" />
            <path id="1" class="fil4" d="M27121.37 13231.29c-5.45,-135.86 -99.31,-225.17 -209.86,-226.31l-2731.99 0c-116.73,3.12 -192.18,100.42 -178.53,226.31l0 118.29 3120.64 0 0 -106.08 0 -12.21 -0.26 0z" />
          </g>
          <g>
            <path class="fil3 str19" d="M6493.91 5074.28l0.01 0 0 -1.71 -0.11 -121.09c-7.02,-80.33 -49.88,-115.75 -118.55,-118.85l-2205.64 -4.88c-1353.2,285.28 -1342.66,1582.94 -1354.73,1715.85l-35.75 13246.39 13604.38 35.7c7.96,-195.2 -85.68,-284.33 -244.24,-281.83l-12430.98 0 0 -12994.83 3.94 0.1 2658.7 1.36c70.48,-10.72 113.37,-46.9 118.52,-117.9l4.45 -1358.31z" />
            <path id="1" class="fil2" d="M6493.91 5074.28l0.01 0 0 -1.71 -0.11 -121.09c-7.02,-80.33 -49.88,-115.75 -118.55,-118.85l-2205.64 -4.88c-1353.2,285.28 -1342.66,1582.94 -1354.73,1715.85l-35.75 13246.39 13604.38 35.7c7.96,-195.2 -85.68,-284.33 -244.24,-281.83l-12430.98 0 0 -12994.83 3.94 0.1 2658.7 1.36c70.48,-10.72 113.37,-46.9 118.52,-117.9l4.45 -1358.31z" />
          </g>
          <g>
            <path class="fil9" d="M7419.85 4861.56l-309.9 0 0 -53.1 309.9 0 0 0 0 53.1zm136.28 83.09l-53.28 0 0 0 -0.11 -4.27 -0.33 -4.2 -0.53 -4.15 -0.73 -4.07 -0.93 -4.01 -1.12 -3.92 -1.31 -3.84 -1.49 -3.77 -1.67 -3.68 -1.83 -3.56 -2.01 -3.49 -2.19 -3.4 -2.32 -3.28 -2.46 -3.11 -2.65 -3.05 -2.75 -2.9 -2.91 -2.76 -3.04 -2.65 -3.12 -2.45 -3.27 -2.32 -3.39 -2.18 -3.49 -2.01 -3.55 -1.83 -3.67 -1.66 -3.76 -1.49 -3.83 -1.31 -3.91 -1.11 -3.99 -0.93 -4.06 -0.73 -4.14 -0.53 -4.18 -0.33 -4.26 -0.1 0 -53.1 6.98 0.18 6.92 0.53 6.8 0.87 6.72 1.21 6.59 1.53 6.47 1.85 6.35 2.15 6.18 2.45 6.05 2.74 5.89 3.03 5.69 3.29 5.51 3.54 5.35 3.8 5.16 4.07 4.92 4.27 4.73 4.5 4.51 4.74 4.27 4.91 4.06 5.17 3.8 5.34 3.53 5.5 3.29 5.69 3.03 5.88 2.73 6.04 2.45 6.17 2.15 6.34 1.84 6.46 1.53 6.57 1.21 6.71 0.87 6.79 0.53 6.9 0.17 6.97 0 0zm-53.28 1500.94l0 -1500.94 53.28 0 0 1500.94 0 0 -53.28 0zm-83 136.19l0 -53.1 0 0 4.26 -0.1 4.18 -0.33 4.14 -0.53 4.06 -0.73 3.99 -0.93 3.91 -1.11 3.83 -1.31 3.76 -1.49 3.67 -1.66 3.55 -1.83 3.49 -2.01 3.39 -2.18 3.27 -2.32 3.12 -2.45 3.04 -2.65 2.91 -2.76 2.75 -2.9 2.65 -3.05 2.46 -3.11 2.32 -3.28 2.19 -3.4 2.01 -3.49 1.83 -3.56 1.67 -3.68 1.49 -3.77 1.31 -3.84 1.12 -3.92 0.93 -4.01 0.73 -4.07 0.53 -4.15 0.33 -4.2 0.11 -4.27 53.28 0 -0.17 6.97 -0.53 6.9 -0.87 6.79 -1.21 6.71 -1.53 6.57 -1.84 6.46 -2.15 6.34 -2.45 6.17 -2.73 6.04 -3.03 5.88 -3.29 5.69 -3.53 5.5 -3.8 5.34 -4.06 5.17 -4.27 4.91 -4.51 4.74 -4.73 4.5 -4.92 4.27 -5.16 4.07 -5.35 3.8 -5.51 3.54 -5.69 3.29 -5.89 3.03 -6.05 2.74 -6.18 2.45 -6.35 2.15 -6.47 1.85 -6.59 1.53 -6.72 1.21 -6.8 0.87 -6.92 0.53 -6.98 0.18 0 0zm-309.9 -53.1l309.9 0 0 53.1 -309.9 0 0 0 0 -53.1zm-136.28 -83.09l53.28 0 0 0 0.11 4.27 0.33 4.2 0.53 4.15 0.73 4.07 0.93 4.01 1.12 3.92 1.31 3.84 1.49 3.77 1.67 3.68 1.83 3.56 2.01 3.49 2.19 3.4 2.32 3.28 2.46 3.11 2.65 3.05 2.75 2.9 2.91 2.76 3.04 2.65 3.12 2.45 3.27 2.32 3.39 2.18 3.49 2.01 3.55 1.83 3.67 1.66 3.76 1.49 3.83 1.31 3.91 1.11 3.99 0.93 4.06 0.73 4.14 0.53 4.18 0.33 4.26 0.1 0 53.1 -6.98 -0.18 -6.92 -0.53 -6.8 -0.87 -6.72 -1.21 -6.59 -1.53 -6.47 -1.85 -6.35 -2.15 -6.18 -2.45 -6.05 -2.74 -5.89 -3.03 -5.69 -3.29 -5.51 -3.54 -5.35 -3.8 -5.16 -4.07 -4.92 -4.27 -4.73 -4.5 -4.51 -4.74 -4.27 -4.91 -4.06 -5.17 -3.8 -5.34 -3.53 -5.5 -3.29 -5.69 -3.03 -5.88 -2.73 -6.04 -2.45 -6.17 -2.15 -6.34 -1.84 -6.46 -1.53 -6.57 -1.21 -6.71 -0.87 -6.79 -0.53 -6.9 -0.17 -6.97 0 0zm53.28 -1500.94l0 1500.94 -53.28 0 0 -1500.94 0 0 53.28 0zm83 -136.19l0 53.1 0 0 -4.26 0.1 -4.18 0.33 -4.14 0.53 -4.06 0.73 -3.99 0.93 -3.91 1.11 -3.83 1.31 -3.76 1.49 -3.67 1.66 -3.55 1.83 -3.49 2.01 -3.39 2.18 -3.27 2.32 -3.12 2.45 -3.04 2.65 -2.91 2.76 -2.75 2.9 -2.65 3.05 -2.46 3.11 -2.32 3.28 -2.19 3.4 -2.01 3.49 -1.83 3.56 -1.67 3.68 -1.49 3.77 -1.31 3.84 -1.12 3.92 -0.93 4.01 -0.73 4.07 -0.53 4.15 -0.33 4.2 -0.11 4.27 -53.28 0 0.17 -6.97 0.53 -6.9 0.87 -6.79 1.21 -6.71 1.53 -6.57 1.84 -6.46 2.15 -6.34 2.45 -6.17 2.73 -6.04 3.03 -5.88 3.29 -5.69 3.53 -5.5 3.8 -5.34 4.06 -5.17 4.27 -4.91 4.51 -4.74 4.73 -4.5 4.92 -4.27 5.16 -4.07 5.35 -3.8 5.51 -3.54 5.69 -3.29 5.89 -3.03 6.05 -2.74 6.18 -2.45 6.35 -2.15 6.47 -1.85 6.59 -1.53 6.72 -1.21 6.8 -0.87 6.92 -0.53 6.98 -0.18 0 0z" />
            <path id="1" class="fil2" d="M7109.95 4835.01l309.9 0c60.31,0 109.64,49.33 109.64,109.64l0 1500.94c0,60.31 -49.33,109.64 -109.64,109.64l-309.9 0c-60.31,0 -109.64,-49.33 -109.64,-109.64l0 -1500.94c0,-60.31 49.33,-109.64 109.64,-109.64z" />
          </g>
          <g>
            <path class="fil3 str20" d="M19311.87 10555l-3.92 1446.83 -1625.84 0 0 -1507.64 1041.57 0c209.79,0 380.74,21.75 588.19,60.81z" />
            <path id="1" class="fil2" d="M19311.87 10555l-3.92 1446.83 -1625.84 0 0 -1507.64 1041.57 0c209.79,0 380.74,21.75 588.19,60.81z" />
          </g>
          <g>
            <path class="fil3 str21" d="M17678.27 13013.92l1618.02 0 0 219.32c-10,184.86 -105,292.22 -295.01,313.66l-1323.01 0 0 -532.98z" />
            <path id="1" class="fil2" d="M17678.27 13013.92l1618.02 0 0 219.32c-10,184.86 -105,292.22 -295.01,313.66l-1323.01 0 0 -532.98z" />
          </g>

          <g id="estacesquerda"> //linha estacionamento

            <rect class="fil12" x="4880.95" y="6966.37" width="119.39" height="12007.99" />
            <path class="fil12" d="M7273.52 6969.76c78.06,18.98 135.7,73.96 132.24,236.85l0 11541.87c3.18,109.77 -44.12,181.33 -132.24,222.04l0 -12000.76z" />
            <rect class="fil12" x="6031.69" y="6966.37" width="119.39" height="12007.99" />

            <line class="fil1 str5" x1="7257.57" y1="18562.12" x2="7269.96" y2="14068.82" />
            <line class="fil1 str5" x1="6992.81" y1="6968.74" x2="6960.74" y2="18977.14" />

            <polyline class="fil1 str5" points="6992.81,6968.74 7288.1,6970.01 7256.03,18978.41 " />

            <line class="fil1 str5" x1="6986.11" y1="9458.2" x2="7281.4" y2="9459.46" />
            <line class="fil1 str5" x1="6986.01" y1="9311.41" x2="7282.9" y2="9312.55" />
            <line class="fil1 str5" x1="6986.02" y1="9166.24" x2="7282.79" y2="9165.78" />
            <line class="fil1 str5" x1="6987.52" y1="9019.34" x2="7282.81" y2="9020.6" />
            <line class="fil1 str5" x1="6987.41" y1="8872.56" x2="7284.3" y2="8873.7" />
            <line class="fil1 str5" x1="6987.31" y1="8725.78" x2="7284.2" y2="8726.92" />
            <line class="fil1 str5" x1="6987.33" y1="8580.6" x2="7284.09" y2="8580.14" />
            <line class="fil1 str5" x1="6988.82" y1="8433.7" x2="7284.11" y2="8434.96" />
            <line class="fil1 str5" x1="6988.72" y1="8286.92" x2="7285.6" y2="8288.06" />
            <line class="fil1 str5" x1="6988.61" y1="8140.14" x2="7285.49" y2="8141.28" />
            <line class="fil1 str5" x1="6990.1" y1="7993.24" x2="7285.39" y2="7994.5" />
            <line class="fil1 str5" x1="6990.12" y1="7848.06" x2="7286.88" y2="7847.6" />
            <line class="fil1 str5" x1="6990.01" y1="7701.28" x2="7286.9" y2="7702.42" />
            <line class="fil1 str5" x1="6991.51" y1="7554.38" x2="7286.8" y2="7555.64" />
            <line class="fil1 str5" x1="6991.4" y1="7407.6" x2="7288.29" y2="7408.74" />
            <line class="fil1 str5" x1="6991.42" y1="7262.42" x2="7288.18" y2="7261.96" />
            <line class="fil1 str5" x1="6991.31" y1="7115.65" x2="7288.2" y2="7116.79" />
            <line class="fil1 str5" x1="6984.62" y1="9605.1" x2="7281.51" y2="9606.24" />
            <line class="fil1 str5" x1="6984.72" y1="9751.88" x2="7281.49" y2="9751.41" />
            <line class="fil1 str5" x1="6984.71" y1="9897.05" x2="7281.6" y2="9898.19" />
            <line class="fil1 str5" x1="6984.82" y1="10043.83" x2="7280.1" y2="10045.1" />
            <line class="fil1 str5" x1="6983.32" y1="10190.73" x2="7280.21" y2="10191.87" />
            <line class="fil1 str5" x1="6983.43" y1="10337.51" x2="7280.31" y2="10338.65" />
            <line class="fil1 str5" x1="6983.53" y1="10484.29" x2="7278.69" y2="10483.95" />
            <line class="fil1 str5" x1="6981.91" y1="10629.59" x2="7278.8" y2="10630.73" />
            <line class="fil1 str5" x1="6982.02" y1="10776.37" x2="7278.91" y2="10777.51" />
            <line class="fil1 str5" x1="6982.13" y1="10923.15" x2="7279.01" y2="10924.29" />
            <line class="fil1 str5" x1="6982.23" y1="11069.93" x2="7277.4" y2="11069.59" />
            <line class="fil1 str5" x1="6980.61" y1="11215.23" x2="7277.5" y2="11216.37" />
            <line class="fil1 str5" x1="6980.72" y1="11362.01" x2="7277.61" y2="11363.15" />
            <line class="fil1 str5" x1="6980.83" y1="11508.79" x2="7276.11" y2="11510.05" />
            <line class="fil1 str5" x1="6979.33" y1="11655.69" x2="7276.09" y2="11655.23" />
            <line class="fil1 str5" x1="6979.31" y1="11800.87" x2="7276.2" y2="11802.01" />
            <line class="fil1 str5" x1="6979.42" y1="11947.65" x2="7274.71" y2="11948.91" />
            <line class="fil1 str5" x1="6977.92" y1="12094.55" x2="7274.81" y2="12095.69" />
            <line class="fil1 str5" x1="6978.03" y1="12241.33" x2="7274.92" y2="12242.47" />
            <line class="fil1 str5" x1="6978.14" y1="12388.11" x2="7274.9" y2="12387.65" />
            <line class="fil1 str5" x1="6978.12" y1="12533.28" x2="7273.4" y2="12534.55" />
            <line class="fil1 str5" x1="6976.63" y1="12680.18" x2="7273.51" y2="12681.32" />
            <line class="fil1 str5" x1="6976.73" y1="12826.97" x2="7273.62" y2="12828.11" />
            <line class="fil1 str5" x1="6976.84" y1="12973.74" x2="7272" y2="12973.41" />
            <line class="fil1 str5" x1="6975.22" y1="13119.04" x2="7272.11" y2="13120.18" />
            <line class="fil1 str5" x1="6975.32" y1="13265.82" x2="7272.21" y2="13266.96" />
            <line class="fil1 str5" x1="6975.43" y1="13412.6" x2="7272.32" y2="13413.74" />
            <line class="fil1 str5" x1="6975.54" y1="13559.38" x2="7270.7" y2="13559.04" />
            <line class="fil1 str5" x1="6973.92" y1="13704.68" x2="7270.81" y2="13705.82" />
            <line class="fil1 str5" x1="6974.02" y1="13851.46" x2="7270.92" y2="13852.6" />
            <line class="fil1 str5" x1="6974.13" y1="13998.24" x2="7269.42" y2="13999.5" />
            <line class="fil1 str5" x1="6972.63" y1="14145.14" x2="7269.53" y2="14146.28" />
            <line class="fil1 str5" x1="6972.74" y1="14291.92" x2="7269.51" y2="14291.46" />
            <line class="fil1 str5" x1="6972.73" y1="14437.1" x2="7269.61" y2="14438.24" />
            <line class="fil1 str5" x1="6972.83" y1="14583.88" x2="7268.12" y2="14585.14" />
            <line class="fil1 str5" x1="6971.34" y1="14730.78" x2="7268.23" y2="14731.92" />
            <line class="fil1 str5" x1="6971.44" y1="14877.56" x2="7268.21" y2="14877.1" />
            <line class="fil1 str5" x1="6971.43" y1="15022.73" x2="7266.71" y2="15024" />
            <line class="fil1 str5" x1="6969.93" y1="15169.64" x2="7266.82" y2="15170.78" />
            <line class="fil1 str5" x1="6970.04" y1="15316.42" x2="7266.92" y2="15317.56" />
            <line class="fil1 str5" x1="6970.14" y1="15463.19" x2="7265.31" y2="15462.86" />
            <line class="fil1 str5" x1="6968.52" y1="15608.49" x2="7265.41" y2="15609.63" />
            <line class="fil1 str5" x1="6968.63" y1="15755.28" x2="7265.52" y2="15756.42" />
            <line class="fil1 str5" x1="6968.74" y1="15902.05" x2="7265.63" y2="15903.19" />
            <line class="fil1 str5" x1="6968.84" y1="16048.83" x2="7264.13" y2="16050.1" />
            <line class="fil1 str5" x1="6967.35" y1="16195.74" x2="7264.11" y2="16195.27" />
            <line class="fil1 str5" x1="6967.33" y1="16340.91" x2="7264.22" y2="16342.05" />
            <line class="fil1 str5" x1="6967.44" y1="16487.69" x2="7262.72" y2="16488.96" />
            <line class="fil1 str5" x1="6965.94" y1="16634.59" x2="7262.83" y2="16635.73" />
            <line class="fil1 str5" x1="6966.05" y1="16781.37" x2="7262.81" y2="16780.91" />
            <line class="fil1 str5" x1="6966.03" y1="16926.55" x2="7262.92" y2="16927.69" />
            <line class="fil1 str5" x1="6966.14" y1="17073.33" x2="7261.42" y2="17074.59" />
            <line class="fil1 str5" x1="6964.64" y1="17220.23" x2="7261.53" y2="17221.37" />
            <line class="fil1 str5" x1="6964.75" y1="17367.01" x2="7261.51" y2="17366.55" />
            <line class="fil1 str5" x1="6964.73" y1="17512.19" x2="7260.02" y2="17513.45" />
            <line class="fil1 str5" x1="6963.23" y1="17659.09" x2="7260.12" y2="17660.23" />
            <line class="fil1 str5" x1="6963.34" y1="17805.87" x2="7260.23" y2="17807.01" />
            <line class="fil1 str5" x1="6963.45" y1="17952.65" x2="7260.34" y2="17953.79" />
            <line class="fil1 str5" x1="6963.56" y1="18099.43" x2="7258.72" y2="18099.09" />
            <line class="fil1 str5" x1="6961.93" y1="18244.73" x2="7258.83" y2="18245.87" />
            <line class="fil1 str5" x1="6962.04" y1="18391.5" x2="7258.93" y2="18392.64" />
            <line class="fil1 str5" x1="6962.15" y1="18538.29" x2="7257.44" y2="18539.55" />
            <line class="fil1 str5" x1="6960.65" y1="18685.19" x2="7257.42" y2="18684.73" />
            <line class="fil1 str5" x1="6960.64" y1="18830.36" x2="7257.52" y2="18831.5" />
            <line class="fil1 str5" x1="6960.74" y1="18977.14" x2="7256.03" y2="18978.41" />

            <line class="fil1 str22" x1="6473.29" y1="6967.63" x2="6442.83" y2="18975.91" />
            <line class="fil1 str22" x1="5763.45" y1="6966.3" x2="5731.38" y2="18974.7" />
            <line class="fil1 str22" x1="4161.6" y1="6985.85" x2="4130.87" y2="18969.95" />
            <line class="fil1 str22" x1="3866.31" y1="6984.58" x2="3834.11" y2="18970.41" />

            <path class="fil10 str23" d="M3864.91 7423.44l4.81 -0.38c-0.2,-2.65 -2.53,-4.64 -5.18,-4.43 -2.65,0.2 -4.64,2.53 -4.44,5.18 0.21,2.65 2.53,4.64 5.19,4.44 2.64,-0.21 4.64,-2.54 4.43,-5.19l-4.81 0.38z" />
            <path class="fil11 str23" d="M3864.9 7568.61l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.19,-4.44 -2.65,0.21 -4.64,2.53 -4.43,5.19 0.2,2.64 2.53,4.64 5.18,4.43 2.65,-0.2 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil11 str23" d="M3863.4 7715.52l4.81 -0.37c-0.21,-2.66 -2.54,-4.65 -5.19,-4.44 -2.65,0.2 -4.64,2.53 -4.43,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.18l-4.81 0.37z" />
            <path class="fil11 str23" d="M3863.38 7860.69l4.81 -0.37c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.19 0.21,2.65 2.53,4.64 5.19,4.43 2.64,-0.2 4.64,-2.53 4.43,-5.18l-4.81 0.37z" />
            <path class="fil11 str23" d="M3863.49 8007.47l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.19,-4.44 -2.65,0.21 -4.64,2.53 -4.43,5.19 0.2,2.64 2.53,4.64 5.18,4.43 2.65,-0.2 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil11 str23" d="M3861.99 8154.37l4.81 -0.37c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.19 0.21,2.64 2.53,4.64 5.19,4.43 2.64,-0.2 4.64,-2.53 4.43,-5.18l-4.81 0.37z" />
            <path class="fil11 str23" d="M3861.97 8299.55l4.81 -0.37c-0.2,-2.66 -2.53,-4.65 -5.18,-4.44 -2.65,0.21 -4.64,2.53 -4.44,5.18 0.21,2.65 2.54,4.65 5.19,4.44 2.64,-0.21 4.64,-2.54 4.43,-5.18l-4.81 0.37z" />
            <path class="fil11 str23" d="M3862.08 8446.33l4.81 -0.37c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.53 -4.44,5.18 0.21,2.65 2.53,4.65 5.18,4.44 2.65,-0.2 4.65,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil11 str23" d="M3862.07 8591.51l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.19,-4.43 -2.65,0.2 -4.64,2.53 -4.44,5.18 0.21,2.65 2.54,4.64 5.19,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.19l-4.81 0.38z" />
            <path class="fil11 str23" d="M3860.57 8738.41l4.81 -0.37c-0.21,-2.66 -2.54,-4.65 -5.19,-4.44 -2.65,0.2 -4.64,2.53 -4.43,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3860.68 8885.19l4.81 -0.38c-0.21,-2.65 -2.54,-4.64 -5.19,-4.43 -2.65,0.2 -4.64,2.53 -4.43,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.19l-4.81 0.38z" />
            <path class="fil10 str23" d="M3857.93 10200.03l4.81 -0.37c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.19 0.21,2.65 2.54,4.64 5.19,4.43 2.64,-0.2 4.64,-2.53 4.43,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3856.31 10345.33l4.81 -0.37c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.19 0.21,2.65 2.53,4.64 5.18,4.43 2.65,-0.2 4.65,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil11 str23" d="M3856.42 10492.11l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.18,-4.44 -2.66,0.21 -4.65,2.53 -4.44,5.19 0.21,2.64 2.53,4.64 5.18,4.43 2.65,-0.2 4.65,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3856.53 10638.89l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.19,-4.44 -2.65,0.21 -4.64,2.54 -4.43,5.19 0.2,2.64 2.53,4.64 5.18,4.43 2.65,-0.2 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3853.7 11661.78l4.81 -0.37c-0.21,-2.65 -2.54,-4.65 -5.19,-4.44 -2.65,0.21 -4.64,2.54 -4.43,5.18 0.2,2.65 2.53,4.65 5.18,4.44 2.65,-0.21 4.64,-2.54 4.44,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3852.07 11807.08l4.81 -0.37c-0.2,-2.65 -2.53,-4.65 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.18 0.21,2.65 2.54,4.65 5.19,4.44 2.65,-0.21 4.64,-2.54 4.43,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3852.18 11953.86l4.81 -0.38c-0.2,-2.64 -2.53,-4.64 -5.18,-4.43 -2.65,0.2 -4.64,2.53 -4.44,5.18 0.21,2.65 2.54,4.64 5.19,4.44 2.64,-0.21 4.64,-2.54 4.43,-5.19l-4.81 0.38z" />
            <path class="fil10 str23" d="M3850.97 12831.45l4.81 -0.37c-0.2,-2.65 -2.54,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.19 0.21,2.65 2.53,4.64 5.18,4.43 2.65,-0.2 4.65,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3849.35 12976.75l4.81 -0.37c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.19 0.21,2.65 2.53,4.64 5.19,4.43 2.64,-0.2 4.64,-2.53 4.43,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3849.46 13123.53l4.81 -0.37c-0.21,-2.65 -2.54,-4.65 -5.19,-4.44 -2.65,0.21 -4.64,2.54 -4.43,5.18 0.2,2.65 2.53,4.65 5.18,4.44 2.65,-0.21 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3849.44 13268.71l4.81 -0.38c-0.2,-2.65 -2.54,-4.64 -5.18,-4.43 -2.65,0.2 -4.64,2.53 -4.44,5.18 0.21,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.65,-2.54 4.44,-5.19l-4.81 0.38z" />
            <path class="fil10 str23" d="M3846.52 13999.64l4.81 -0.37c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.19 0.21,2.65 2.53,4.64 5.19,4.43 2.64,-0.2 4.64,-2.53 4.43,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3846.63 14146.42l4.81 -0.37c-0.21,-2.65 -2.54,-4.65 -5.19,-4.44 -2.65,0.21 -4.64,2.54 -4.43,5.18 0.2,2.66 2.53,4.65 5.18,4.44 2.65,-0.21 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3846.73 14293.2l4.81 -0.37c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.19 0.21,2.65 2.54,4.64 5.19,4.43 2.65,-0.2 4.64,-2.53 4.43,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3845.11 14438.5l4.81 -0.37c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.19 0.21,2.65 2.53,4.64 5.19,4.43 2.64,-0.2 4.64,-2.53 4.43,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3845.22 14585.28l4.81 -0.37c-0.2,-2.65 -2.54,-4.65 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.18 0.21,2.65 2.53,4.65 5.18,4.44 2.65,-0.21 4.65,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3845.2 14730.46l4.81 -0.38c-0.2,-2.65 -2.53,-4.64 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.19 0.21,2.65 2.54,4.64 5.19,4.44 2.65,-0.21 4.64,-2.54 4.43,-5.19l-4.81 0.38z" />
            <path class="fil10 str23" d="M3842.39 15608.17l4.81 -0.37c-0.21,-2.65 -2.54,-4.65 -5.18,-4.44 -2.65,0.21 -4.65,2.54 -4.44,5.18 0.21,2.65 2.53,4.65 5.18,4.44 2.65,-0.21 4.65,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3842.5 15754.95l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.19,-4.44 -2.65,0.21 -4.64,2.54 -4.43,5.18 0.2,2.66 2.53,4.65 5.18,4.44 2.65,-0.2 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil11 str23" d="M3839.56 16631.06l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.18,-4.44 -2.66,0.21 -4.65,2.54 -4.44,5.19 0.21,2.65 2.53,4.64 5.18,4.43 2.65,-0.2 4.65,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil11 str23" d="M3839.67 16777.84l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.19,-4.44 -2.65,0.21 -4.64,2.54 -4.43,5.19 0.2,2.65 2.53,4.64 5.18,4.43 2.65,-0.2 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil11 str23" d="M3839.65 16923.02l4.81 -0.38c-0.21,-2.64 -2.54,-4.64 -5.19,-4.43 -2.65,0.2 -4.64,2.53 -4.43,5.18 0.2,2.65 2.53,4.64 5.18,4.44 2.65,-0.21 4.64,-2.53 4.44,-5.19l-4.81 0.38z" />
            <path class="fil11 str23" d="M3838.15 17069.92l4.81 -0.37c-0.2,-2.65 -2.53,-4.65 -5.18,-4.44 -2.65,0.21 -4.64,2.54 -4.44,5.18 0.21,2.65 2.54,4.65 5.19,4.44 2.64,-0.21 4.64,-2.53 4.43,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3836.93 18092.69l4.81 -0.37c-0.21,-2.65 -2.54,-4.65 -5.19,-4.44 -2.65,0.21 -4.64,2.54 -4.43,5.18 0.2,2.65 2.53,4.65 5.18,4.44 2.65,-0.21 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3835.43 18239.59l4.81 -0.37c-0.21,-2.65 -2.54,-4.64 -5.19,-4.44 -2.65,0.21 -4.64,2.54 -4.43,5.19 0.2,2.65 2.53,4.64 5.18,4.43 2.65,-0.2 4.64,-2.53 4.44,-5.18l-4.81 0.37z" />
            <path class="fil10 str23" d="M3835.41 18384.77l4.81 -0.38c-0.2,-2.64 -2.53,-4.64 -5.18,-4.43 -2.65,0.2 -4.64,2.53 -4.44,5.18 0.21,2.65 2.53,4.64 5.19,4.44 2.64,-0.21 4.64,-2.54 4.43,-5.19l-4.81 0.38z" />

            <line class="fil1 str22" x1="3834.11" y1="18970.41" x2="4130.87" y2="18969.95" />
            <line class="fil1 str22" x1="3834" y1="18823.63" x2="4130.89" y2="18824.77" />
            <line class="fil1 str22" x1="3834.02" y1="18678.45" x2="4130.78" y2="18677.99" />
            <line class="fil1 str22" x1="3835.52" y1="18531.55" x2="4130.8" y2="18532.81" />
            <line class="fil1 str22" x1="3835.41" y1="18384.77" x2="4132.3" y2="18385.91" />
            <line class="fil1 str22" x1="3835.42" y1="18239.6" x2="4132.32" y2="18240.74" />
            <line class="fil1 str22" x1="3836.92" y1="18092.69" x2="4132.21" y2="18093.96" />
            <line class="fil1 str22" x1="3836.94" y1="17947.52" x2="4133.71" y2="17947.05" />
            <line class="fil1 str22" x1="3836.83" y1="17800.74" x2="4133.72" y2="17801.88" />
            <line class="fil1 str22" x1="3836.73" y1="17653.96" x2="4133.61" y2="17655.1" />
            <line class="fil1 str22" x1="3838.35" y1="17508.66" x2="4133.63" y2="17509.92" />
            <line class="fil1 str22" x1="3838.24" y1="17361.88" x2="4135.13" y2="17363.02" />
            <line class="fil1 str22" x1="3838.26" y1="17216.71" x2="4135.02" y2="17216.24" />
            <line class="fil1 str22" x1="3838.15" y1="17069.92" x2="4135.04" y2="17071.06" />
            <line class="fil1 str22" x1="3839.64" y1="16923.02" x2="4134.93" y2="16924.29" />
            <line class="fil1 str22" x1="3839.66" y1="16777.85" x2="4136.55" y2="16778.99" />
            <line class="fil1 str22" x1="3839.56" y1="16631.07" x2="4136.44" y2="16632.21" />
            <line class="fil1 str22" x1="3841.18" y1="16485.77" x2="4136.34" y2="16485.43" />
            <line class="fil1 str22" x1="3841.07" y1="16338.99" x2="4137.96" y2="16340.13" />
            <line class="fil1 str22" x1="3840.96" y1="16192.21" x2="4137.85" y2="16193.35" />
            <line class="fil1 str22" x1="3840.98" y1="16047.03" x2="4137.87" y2="16048.17" />
            <line class="fil1 str22" x1="3842.48" y1="15900.13" x2="4137.76" y2="15901.4" />
            <line class="fil1 str22" x1="3842.49" y1="15754.96" x2="4139.26" y2="15754.49" />
            <line class="fil1 str22" x1="3842.39" y1="15608.17" x2="4139.27" y2="15609.31" />
            <line class="fil1 str22" x1="3843.88" y1="15461.27" x2="4139.17" y2="15462.54" />
            <line class="fil1 str22" x1="3843.9" y1="15316.1" x2="4140.79" y2="15317.24" />
            <line class="fil1 str22" x1="3843.79" y1="15169.32" x2="4140.68" y2="15170.46" />
            <line class="fil1 str22" x1="3843.81" y1="15024.14" x2="4140.58" y2="15023.68" />
            <line class="fil1 str22" x1="3845.31" y1="14877.24" x2="4140.59" y2="14878.5" />
            <line class="fil1 str22" x1="3845.2" y1="14730.46" x2="4142.09" y2="14731.6" />
            <line class="fil1 str22" x1="3845.22" y1="14585.28" x2="4142.11" y2="14586.42" />
            <line class="fil1 str22" x1="3845.11" y1="14438.51" x2="4142" y2="14439.65" />
            <line class="fil1 str22" x1="3846.73" y1="14293.21" x2="4141.89" y2="14292.86" />
            <line class="fil1 str22" x1="3846.62" y1="14146.42" x2="4143.51" y2="14147.56" />
            <line class="fil1 str22" x1="3846.52" y1="13999.65" x2="4143.41" y2="14000.79" />
            <line class="fil1 str22" x1="3848.14" y1="13854.35" x2="4143.42" y2="13855.61" />
            <line class="fil1 str22" x1="3848.03" y1="13707.57" x2="4144.92" y2="13708.71" />
            <line class="fil1 str22" x1="3848.05" y1="13562.39" x2="4144.81" y2="13561.93" />
            <line class="fil1 str22" x1="3847.94" y1="13415.61" x2="4144.83" y2="13416.75" />
            <line class="fil1 str22" x1="3849.44" y1="13268.71" x2="4144.72" y2="13269.97" />
            <line class="fil1 str22" x1="3849.45" y1="13123.53" x2="4146.35" y2="13124.67" />
            <line class="fil1 str22" x1="3849.35" y1="12976.76" x2="4146.24" y2="12977.9" />
            <line class="fil1 str22" x1="3850.97" y1="12831.46" x2="4146.13" y2="12831.11" />
            <line class="fil1 str22" x1="3850.86" y1="12684.67" x2="4147.75" y2="12685.81" />
            <line class="fil1 str22" x1="3850.75" y1="12537.9" x2="4147.64" y2="12539.04" />
            <line class="fil1 str22" x1="3850.77" y1="12392.72" x2="4147.66" y2="12393.86" />
            <line class="fil1 str22" x1="3852.27" y1="12245.82" x2="4147.55" y2="12247.08" />
            <line class="fil1 str22" x1="3852.28" y1="12100.64" x2="4149.05" y2="12100.18" />
            <line class="fil1 str22" x1="3852.18" y1="11953.86" x2="4149.07" y2="11955" />
            <line class="fil1 str22" x1="3852.07" y1="11807.08" x2="4148.96" y2="11808.22" />
            <line class="fil1 str22" x1="3853.69" y1="11661.78" x2="4148.98" y2="11663.05" />
            <line class="fil1 str22" x1="3853.59" y1="11515.01" x2="4150.47" y2="11516.15" />
            <line class="fil1 str22" x1="3853.6" y1="11369.83" x2="4150.37" y2="11369.37" />
            <line class="fil1 str22" x1="3855.1" y1="11222.92" x2="4150.38" y2="11224.19" />
            <line class="fil1 str22" x1="3854.99" y1="11076.15" x2="4151.88" y2="11077.29" />
            <line class="fil1 str22" x1="3855.01" y1="10930.97" x2="4151.9" y2="10932.11" />
            <line class="fil1 str22" x1="3854.9" y1="10784.19" x2="4151.79" y2="10785.33" />
            <line class="fil1 str22" x1="3856.52" y1="10638.89" x2="4151.69" y2="10638.55" />
            <line class="fil1 str22" x1="3856.42" y1="10492.11" x2="4153.3" y2="10493.25" />
            <line class="fil1 str22" x1="3856.31" y1="10345.33" x2="4153.2" y2="10346.47" />
            <line class="fil1 str22" x1="3857.93" y1="10200.03" x2="4153.22" y2="10201.3" />
            <line class="fil1 str22" x1="3857.82" y1="10053.26" x2="4154.71" y2="10054.4" />
            <line class="fil1 str22" x1="3857.84" y1="9908.08" x2="4154.6" y2="9907.62" />
            <line class="fil1 str22" x1="3857.73" y1="9761.3" x2="4154.62" y2="9762.44" />
            <line class="fil1 str22" x1="3859.23" y1="9614.4" x2="4154.52" y2="9615.66" />
            <line class="fil1 str22" x1="3859.25" y1="9469.22" x2="4156.13" y2="9470.36" />
            <line class="fil1 str22" x1="3859.14" y1="9322.44" x2="4156.03" y2="9323.58" />
            <line class="fil1 str22" x1="3859.16" y1="9177.27" x2="4155.92" y2="9176.8" />
            <line class="fil1 str22" x1="3860.65" y1="9030.36" x2="4155.94" y2="9031.63" />
            <line class="fil1 str22" x1="3860.67" y1="8885.19" x2="4157.44" y2="8884.73" />
            <line class="fil1 str22" x1="3860.56" y1="8738.41" x2="4157.45" y2="8739.55" />
            <line class="fil1 str22" x1="3862.06" y1="8591.51" x2="4157.35" y2="8592.77" />
            <line class="fil1 str22" x1="3862.08" y1="8446.33" x2="4158.84" y2="8445.87" />
            <line class="fil1 str22" x1="3861.97" y1="8299.55" x2="4158.86" y2="8300.69" />
            <line class="fil1 str22" x1="3861.99" y1="8154.37" x2="4158.75" y2="8153.91" />
            <line class="fil1 str22" x1="3863.48" y1="8007.47" x2="4158.77" y2="8008.74" />
            <line class="fil1 str22" x1="3863.38" y1="7860.69" x2="4160.27" y2="7861.83" />
            <line class="fil1 str22" x1="3863.39" y1="7715.52" x2="4160.16" y2="7715.05" />
            <line class="fil1 str22" x1="3864.89" y1="7568.61" x2="4160.18" y2="7569.88" />
            <line class="fil1 str22" x1="3864.91" y1="7423.44" x2="4161.67" y2="7422.98" />
            <line class="fil1 str22" x1="3864.8" y1="7276.66" x2="4161.69" y2="7277.8" />
            <line class="fil1 str22" x1="3864.7" y1="7129.88" x2="4161.58" y2="7131.02" />
            <line class="fil1 str22" x1="3866.31" y1="6984.58" x2="4161.6" y2="6985.85" />
            <line class="fil1 str22" x1="6171.32" y1="9455.82" x2="6466.6" y2="9457.08" />
            <line class="fil1 str22" x1="6171.33" y1="9310.64" x2="6468.1" y2="9310.18" />
            <line class="fil1 str22" x1="6171.23" y1="9163.86" x2="6468.11" y2="9165" />
            <line class="fil1 str22" x1="6172.72" y1="9016.96" x2="6468.01" y2="9018.23" />
            <line class="fil1 str22" x1="6172.62" y1="8870.18" x2="6469.5" y2="8871.32" />
            <line class="fil1 str22" x1="6172.51" y1="8723.4" x2="6469.4" y2="8724.54" />
            <line class="fil1 str22" x1="6172.52" y1="8578.23" x2="6469.29" y2="8577.76" />
            <line class="fil1 str22" x1="6174.02" y1="8431.32" x2="6469.31" y2="8432.59" />
            <line class="fil1 str22" x1="6173.91" y1="8284.54" x2="6470.8" y2="8285.68" />
            <line class="fil1 str22" x1="6173.81" y1="8137.76" x2="6470.7" y2="8138.9" />
            <line class="fil1 str22" x1="6175.43" y1="7992.46" x2="6470.59" y2="7992.13" />
            <line class="fil1 str22" x1="6175.32" y1="7845.69" x2="6472.21" y2="7846.83" />
            <line class="fil1 str22" x1="6175.21" y1="7698.91" x2="6472.1" y2="7700.05" />
            <line class="fil1 str22" x1="6176.71" y1="7552" x2="6472" y2="7553.27" />
            <line class="fil1 str22" x1="6176.73" y1="7406.83" x2="6473.49" y2="7406.37" />
            <line class="fil1 str22" x1="6176.62" y1="7260.05" x2="6473.51" y2="7261.19" />
            <line class="fil1 str22" x1="6176.51" y1="7113.27" x2="6473.4" y2="7114.41" />
            <line class="fil1 str22" x1="6169.82" y1="9602.72" x2="6466.71" y2="9603.86" />
            <line class="fil1 str22" x1="6169.93" y1="9749.5" x2="6466.81" y2="9750.64" />
            <line class="fil1 str22" x1="6170.03" y1="9896.28" x2="6466.8" y2="9895.82" />
            <line class="fil1 str22" x1="6170.01" y1="10041.45" x2="6465.3" y2="10042.72" />
            <line class="fil1 str22" x1="6168.52" y1="10188.36" x2="6465.41" y2="10189.5" />
            <line class="fil1 str22" x1="6168.63" y1="10335.14" x2="6465.52" y2="10336.28" />
            <line class="fil1 str22" x1="6168.73" y1="10481.91" x2="6463.89" y2="10481.58" />
            <line class="fil1 str22" x1="6167.11" y1="10627.21" x2="6464" y2="10628.35" />
            <line class="fil1 str22" x1="6167.22" y1="10774" x2="6464.11" y2="10775.14" />
            <line class="fil1 str22" x1="6167.43" y1="11067.55" x2="6462.72" y2="11068.82" />
            <line class="fil1 str22" x1="6165.94" y1="11214.46" x2="6462.7" y2="11213.99" />
            <line class="fil1 str22" x1="6165.92" y1="11359.63" x2="6462.81" y2="11360.77" />
            <line class="fil1 str22" x1="6166.03" y1="11506.41" x2="6461.31" y2="11507.68" />
            <line class="fil1 str22" x1="6164.53" y1="11653.31" x2="6461.42" y2="11654.45" />
            <line class="fil1 str22" x1="6164.64" y1="11800.09" x2="6461.4" y2="11799.63" />
            <line class="fil1 str22" x1="6164.62" y1="11945.27" x2="6459.91" y2="11946.53" />
            <line class="fil1 str22" x1="6163.12" y1="12092.17" x2="6460.01" y2="12093.31" />
            <line class="fil1 str22" x1="6163.23" y1="12238.95" x2="6460.12" y2="12240.09" />
            <line class="fil1 str22" x1="6163.34" y1="12385.73" x2="6460.1" y2="12385.27" />
            <line class="fil1 str22" x1="6163.32" y1="12530.91" x2="6458.61" y2="12532.17" />
            <line class="fil1 str22" x1="6161.82" y1="12677.81" x2="6458.72" y2="12678.95" />
            <line class="fil1 str22" x1="6161.93" y1="12824.59" x2="6458.82" y2="12825.73" />
            <line class="fil1 str22" x1="6162.04" y1="12971.37" x2="6457.33" y2="12972.63" />
            <line class="fil1 str22" x1="6160.54" y1="13118.27" x2="6457.31" y2="13117.81" />
            <line class="fil1 str22" x1="6160.53" y1="13263.45" x2="6457.41" y2="13264.59" />
            <line class="fil1 str22" x1="6160.63" y1="13410.22" x2="6457.52" y2="13411.36" />
            <line class="fil1 str22" x1="6160.74" y1="13557.01" x2="6456.03" y2="13558.27" />
            <line class="fil1 str22" x1="6159.24" y1="13703.91" x2="6456.01" y2="13703.45" />
            <line class="fil1 str22" x1="6159.23" y1="13849.08" x2="6456.11" y2="13850.22" />
            <line class="fil1 str22" x1="6159.33" y1="13995.86" x2="6454.62" y2="13997.13" />
            <line class="fil1 str22" x1="6157.84" y1="14142.77" x2="6454.72" y2="14143.91" />
            <line class="fil1 str22" x1="6157.94" y1="14289.54" x2="6454.71" y2="14289.08" />
            <line class="fil1 str22" x1="6157.92" y1="14434.72" x2="6454.82" y2="14435.86" />
            <line class="fil1 str22" x1="6158.03" y1="14581.5" x2="6453.32" y2="14582.76" />
            <line class="fil1 str22" x1="6156.54" y1="14728.4" x2="6453.43" y2="14729.54" />
            <line class="fil1 str22" x1="6156.64" y1="14875.18" x2="6453.53" y2="14876.32" />
            <line class="fil1 str22" x1="6156.75" y1="15021.96" x2="6451.91" y2="15021.62" />
            <line class="fil1 str22" x1="6155.13" y1="15167.26" x2="6452.02" y2="15168.4" />
            <line class="fil1 str22" x1="6155.24" y1="15314.04" x2="6452.13" y2="15315.18" />
            <line class="fil1 str22" x1="6155.34" y1="15460.82" x2="6450.63" y2="15462.08" />
            <line class="fil1 str22" x1="6155.45" y1="15607.6" x2="6450.61" y2="15607.26" />
            <line class="fil1 str22" x1="6153.83" y1="15752.9" x2="6450.72" y2="15754.04" />
            <line class="fil1 str22" x1="6153.94" y1="15899.68" x2="6450.83" y2="15900.82" />
            <line class="fil1 str22" x1="6154.05" y1="16046.46" x2="6449.33" y2="16047.72" />
            <line class="fil1 str22" x1="6152.55" y1="16193.36" x2="6449.31" y2="16192.9" />
            <line class="fil1 str22" x1="6152.53" y1="16338.53" x2="6449.42" y2="16339.67" />
            <line class="fil1 str22" x1="6152.64" y1="16485.32" x2="6447.92" y2="16486.58" />
            <line class="fil1 str22" x1="6151.14" y1="16632.22" x2="6448.03" y2="16633.36" />
            <line class="fil1 str22" x1="6151.25" y1="16779" x2="6448.14" y2="16780.14" />
            <line class="fil1 str22" x1="6151.36" y1="16925.78" x2="6448.12" y2="16925.31" />
            <line class="fil1 str22" x1="6151.34" y1="17070.95" x2="6446.63" y2="17072.22" />
            <line class="fil1 str22" x1="6149.84" y1="17217.85" x2="6446.73" y2="17218.99" />
            <line class="fil1 str22" x1="6149.95" y1="17364.63" x2="6446.84" y2="17365.77" />
            <line class="fil1 str22" x1="6150.06" y1="17511.41" x2="6445.22" y2="17511.07" />
            <line class="fil1 str22" x1="6148.44" y1="17656.71" x2="6445.32" y2="17657.85" />
            <line class="fil1 str22" x1="6148.54" y1="17803.49" x2="6445.43" y2="17804.63" />
            <line class="fil1 str22" x1="6148.65" y1="17950.27" x2="6445.54" y2="17951.41" />
            <line class="fil1 str22" x1="6148.76" y1="18097.05" x2="6443.92" y2="18096.71" />
            <line class="fil1 str22" x1="6147.14" y1="18242.35" x2="6444.02" y2="18243.49" />
            <line class="fil1 str22" x1="6147.24" y1="18389.13" x2="6444.13" y2="18390.27" />
            <line class="fil1 str22" x1="6147.35" y1="18535.91" x2="6442.63" y2="18537.17" />
            <line class="fil1 str22" x1="6145.85" y1="18682.81" x2="6442.74" y2="18683.95" />
            <line class="fil1 str22" x1="6145.96" y1="18829.59" x2="6442.73" y2="18829.13" />
            <line class="fil1 str22" x1="6145.94" y1="18974.77" x2="6442.83" y2="18975.91" />
            <line class="fil1 str22" x1="6058.61" y1="6965.96" x2="6178.01" y2="6966.37" />
            <line class="fil1 str22" x1="5756.76" y1="9455.75" x2="6051.92" y2="9455.41" />
            <line class="fil1 str22" x1="5756.65" y1="9308.97" x2="6053.54" y2="9310.11" />
            <line class="fil1 str22" x1="5756.54" y1="9162.19" x2="6053.43" y2="9163.33" />
            <line class="fil1 str22" x1="5756.43" y1="9015.41" x2="6053.33" y2="9016.55" />
            <line class="fil1 str22" x1="5758.06" y1="8870.11" x2="6053.22" y2="8869.77" />
            <line class="fil1 str22" x1="5757.95" y1="8723.33" x2="6054.84" y2="8724.47" />
            <line class="fil1 str22" x1="5757.84" y1="8576.55" x2="6054.73" y2="8577.7" />
            <line class="fil1 str22" x1="5759.34" y1="8429.65" x2="6054.62" y2="8430.92" />
            <line class="fil1 str22" x1="5759.23" y1="8282.87" x2="6056.12" y2="8284.01" />
            <line class="fil1 str22" x1="5759.25" y1="8137.7" x2="6056.01" y2="8137.23" />
            <line class="fil1 str22" x1="5759.14" y1="7990.92" x2="6056.03" y2="7992.06" />
            <line class="fil1 str22" x1="5760.64" y1="7844.02" x2="6055.92" y2="7845.28" />
            <line class="fil1 str22" x1="5760.53" y1="7697.23" x2="6057.42" y2="7698.37" />
            <line class="fil1 str22" x1="5760.55" y1="7552.06" x2="6057.31" y2="7551.6" />
            <line class="fil1 str22" x1="5762.04" y1="7405.16" x2="6057.33" y2="7406.42" />
            <line class="fil1 str22" x1="5761.94" y1="7258.38" x2="6058.83" y2="7259.52" />
            <line class="fil1 str22" x1="5761.83" y1="7111.6" x2="6058.72" y2="7112.74" />
            <line class="fil1 str22" x1="5755.14" y1="9601.05" x2="6052.03" y2="9602.19" />
            <line class="fil1 str22" x1="5755.24" y1="9747.83" x2="6052.13" y2="9748.97" />
            <line class="fil1 str22" x1="5755.35" y1="9894.61" x2="6050.64" y2="9895.87" />
            <line class="fil1 str22" x1="5753.85" y1="10041.51" x2="6050.62" y2="10041.05" />
            <line class="fil1 str22" x1="5753.84" y1="10186.69" x2="6050.72" y2="10187.83" />
            <line class="fil1 str22" x1="5753.94" y1="10333.47" x2="6050.83" y2="10334.61" />
            <line class="fil1 str22" x1="5754.05" y1="10480.24" x2="6049.34" y2="10481.51" />
            <line class="fil1 str22" x1="5752.56" y1="10627.15" x2="6049.44" y2="10628.29" />
            <line class="fil1 str22" x1="5752.66" y1="10773.93" x2="6049.43" y2="10773.47" />
            <line class="fil1 str22" x1="5752.64" y1="10919.1" x2="6047.93" y2="10920.37" />
            <line class="fil1 str22" x1="5751.15" y1="11066.01" x2="6048.04" y2="11067.15" />
            <line class="fil1 str22" x1="5751.25" y1="11212.79" x2="6048.14" y2="11213.93" />
            <line class="fil1 str22" x1="5751.36" y1="11359.56" x2="6046.52" y2="11359.23" />
            <line class="fil1 str22" x1="5749.74" y1="11504.86" x2="6046.63" y2="11506" />
            <line class="fil1 str22" x1="5749.85" y1="11651.64" x2="6046.74" y2="11652.78" />
            <line class="fil1 str22" x1="5749.95" y1="11798.42" x2="6046.85" y2="11799.56" />
            <line class="fil1 str22" x1="5750.06" y1="11945.2" x2="6045.22" y2="11944.86" />
            <line class="fil1 str22" x1="5748.44" y1="12090.5" x2="6045.33" y2="12091.64" />
            <line class="fil1 str22" x1="5748.55" y1="12237.28" x2="6045.44" y2="12238.42" />
            <line class="fil1 str22" x1="5748.66" y1="12384.06" x2="6043.94" y2="12385.33" />
            <line class="fil1 str22" x1="5747.16" y1="12530.96" x2="6044.05" y2="12532.1" />
            <line class="fil1 str22" x1="5747.27" y1="12677.74" x2="6044.03" y2="12677.28" />
            <line class="fil1 str22" x1="5747.25" y1="12822.92" x2="6044.14" y2="12824.06" />
            <line class="fil1 str22" x1="5747.36" y1="12969.7" x2="6042.64" y2="12970.96" />
            <line class="fil1 str22" x1="5745.86" y1="13116.6" x2="6042.75" y2="13117.74" />
            <line class="fil1 str22" x1="5745.97" y1="13263.38" x2="6042.73" y2="13262.92" />
            <line class="fil1 str22" x1="5745.95" y1="13408.55" x2="6041.24" y2="13409.82" />
            <line class="fil1 str22" x1="5744.45" y1="13555.46" x2="6041.34" y2="13556.6" />
            <line class="fil1 str22" x1="5744.56" y1="13702.24" x2="6041.45" y2="13703.38" />
            <line class="fil1 str22" x1="5744.67" y1="13849.01" x2="6041.43" y2="13848.55" />
            <line class="fil1 str22" x1="5744.65" y1="13994.19" x2="6039.94" y2="13995.45" />
            <line class="fil1 str22" x1="5743.15" y1="14141.1" x2="6040.04" y2="14142.24" />
            <line class="fil1 str22" x1="5743.26" y1="14287.87" x2="6040.15" y2="14289.01" />
            <line class="fil1 str22" x1="5743.37" y1="14434.65" x2="6038.65" y2="14435.92" />
            <line class="fil1 str22" x1="5741.87" y1="14581.56" x2="6038.63" y2="14581.09" />
            <line class="fil1 str22" x1="5741.86" y1="14726.73" x2="6038.74" y2="14727.87" />
            <line class="fil1 str22" x1="5741.96" y1="14873.51" x2="6037.25" y2="14874.78" />
            <line class="fil1 str22" x1="5740.47" y1="15020.41" x2="6037.35" y2="15021.55" />
            <line class="fil1 str22" x1="5740.57" y1="15167.19" x2="6037.34" y2="15166.73" />
            <line class="fil1 str22" x1="5740.55" y1="15312.37" x2="6037.44" y2="15313.51" />
            <line class="fil1 str22" x1="5740.66" y1="15459.15" x2="6035.95" y2="15460.41" />
            <line class="fil1 str22" x1="5739.16" y1="15606.05" x2="6036.05" y2="15607.19" />
            <line class="fil1 str22" x1="5739.27" y1="15752.83" x2="6036.04" y2="15752.37" />
            <line class="fil1 str22" x1="5739.38" y1="15899.61" x2="6034.54" y2="15899.27" />
            <line class="fil1 str22" x1="5737.76" y1="16044.91" x2="6034.65" y2="16046.05" />
            <line class="fil1 str22" x1="5737.86" y1="16191.69" x2="6034.76" y2="16192.83" />
            <line class="fil1 str22" x1="5737.97" y1="16338.47" x2="6034.86" y2="16339.61" />
            <line class="fil1 str22" x1="5738.08" y1="16485.25" x2="6033.24" y2="16484.91" />
            <line class="fil1 str22" x1="5736.46" y1="16630.55" x2="6033.35" y2="16631.69" />
            <line class="fil1 str22" x1="5736.57" y1="16777.32" x2="6033.45" y2="16778.46" />
            <line class="fil1 str22" x1="5736.67" y1="16924.11" x2="6031.96" y2="16925.37" />
            <line class="fil1 str22" x1="5735.18" y1="17071.01" x2="6031.94" y2="17070.55" />
            <line class="fil1 str22" x1="5735.16" y1="17216.18" x2="6032.05" y2="17217.32" />
            <line class="fil1 str22" x1="5735.27" y1="17362.96" x2="6032.15" y2="17364.1" />
            <line class="fil1 str22" x1="5735.37" y1="17509.74" x2="6030.66" y2="17511.01" />
            <line class="fil1 str22" x1="5733.88" y1="17656.64" x2="6030.64" y2="17656.18" />
            <line class="fil1 str22" x1="5733.99" y1="17803.42" x2="6030.75" y2="17802.96" />
            <line class="fil1 str22" x1="5733.97" y1="17948.6" x2="6029.25" y2="17949.86" />
            <line class="fil1 str22" x1="5732.47" y1="18095.5" x2="6029.36" y2="18096.64" />
            <line class="fil1 str22" x1="5732.58" y1="18242.28" x2="6029.47" y2="18243.42" />
            <line class="fil1 str22" x1="5732.68" y1="18389.06" x2="6027.85" y2="18388.72" />
            <line class="fil1 str22" x1="5731.06" y1="18534.36" x2="6027.95" y2="18535.5" />
            <line class="fil1 str22" x1="5731.17" y1="18681.14" x2="6028.06" y2="18682.28" />
            <line class="fil1 str22" x1="5731.28" y1="18827.92" x2="6028.17" y2="18829.06" />
            <polyline class="fil1 str22" points="5731.38,18974.7 6026.54,18974.36 6145.94,18974.77 " />
            <line class="fil1 str22" x1="5318.06" y1="6963.79" x2="5286.11" y2="18973.79" />
            <line class="fil1 str22" x1="5014.6" y1="9453.7" x2="5311.48" y2="9454.84" />
            <line class="fil1 str22" x1="5016.09" y1="9306.8" x2="5311.38" y2="9308.06" />
            <line class="fil1 str22" x1="5015.99" y1="9160.02" x2="5312.87" y2="9161.16" />
            <line class="fil1 str22" x1="5015.88" y1="9013.24" x2="5312.77" y2="9014.38" />
            <line class="fil1 str22" x1="5015.9" y1="8868.06" x2="5312.66" y2="8867.6" />
            <line class="fil1 str22" x1="5017.39" y1="8721.16" x2="5312.68" y2="8722.43" />
            <line class="fil1 str22" x1="5017.29" y1="8574.38" x2="5314.17" y2="8575.52" />
            <line class="fil1 str22" x1="5017.18" y1="8427.6" x2="5314.07" y2="8428.74" />
            <line class="fil1 str22" x1="5018.8" y1="8282.3" x2="5313.96" y2="8281.96" />
            <line class="fil1 str22" x1="5018.69" y1="8135.52" x2="5315.58" y2="8136.66" />
            <line class="fil1 str22" x1="5018.58" y1="7988.75" x2="5315.48" y2="7989.89" />
            <line class="fil1 str22" x1="5020.08" y1="7841.84" x2="5315.37" y2="7843.1" />
            <line class="fil1 str22" x1="5020.1" y1="7696.66" x2="5316.86" y2="7696.2" />
            <line class="fil1 str22" x1="5019.99" y1="7549.89" x2="5316.88" y2="7551.03" />
            <line class="fil1 str22" x1="5019.88" y1="7403.11" x2="5316.77" y2="7404.25" />
            <line class="fil1 str22" x1="5021.38" y1="7256.2" x2="5316.67" y2="7257.47" />
            <line class="fil1 str22" x1="5021.27" y1="7109.43" x2="5318.16" y2="7110.57" />
            <line class="fil1 str22" x1="5014.7" y1="9600.48" x2="5311.47" y2="9600.02" />
            <line class="fil1 str22" x1="5014.68" y1="9745.66" x2="5309.97" y2="9746.92" />
            <line class="fil1 str22" x1="5013.19" y1="9892.56" x2="5310.08" y2="9893.7" />
            <line class="fil1 str22" x1="5013.3" y1="10039.34" x2="5310.19" y2="10040.48" />
            <line class="fil1 str22" x1="5013.4" y1="10186.12" x2="5310.17" y2="10185.65" />
            <line class="fil1 str22" x1="5013.39" y1="10331.29" x2="5308.67" y2="10332.56" />
            <line class="fil1 str22" x1="5011.89" y1="10478.2" x2="5308.78" y2="10479.34" />
            <line class="fil1 str22" x1="5012" y1="10624.97" x2="5308.89" y2="10626.11" />
            <line class="fil1 str22" x1="5012.1" y1="10771.76" x2="5307.26" y2="10771.41" />
            <line class="fil1 str22" x1="5010.48" y1="10917.06" x2="5307.37" y2="10918.2" />
            <line class="fil1 str22" x1="5010.59" y1="11063.83" x2="5307.48" y2="11064.97" />
            <line class="fil1 str22" x1="5010.7" y1="11210.61" x2="5307.59" y2="11211.75" />
            <line class="fil1 str22" x1="5010.81" y1="11357.39" x2="5306.09" y2="11358.66" />
            <line class="fil1 str22" x1="5009.31" y1="11504.29" x2="5306.07" y2="11503.83" />
            <line class="fil1 str22" x1="5009.29" y1="11649.47" x2="5306.18" y2="11650.61" />
            <line class="fil1 str22" x1="5009.4" y1="11796.25" x2="5304.68" y2="11797.51" />
            <line class="fil1 str22" x1="5007.9" y1="11943.15" x2="5304.79" y2="11944.29" />
            <line class="fil1 str22" x1="5008.01" y1="12089.93" x2="5304.77" y2="12089.47" />
            <line class="fil1 str22" x1="5007.99" y1="12235.11" x2="5303.28" y2="12236.37" />
            <line class="fil1 str22" x1="5006.49" y1="12382.01" x2="5303.39" y2="12383.15" />
            <line class="fil1 str22" x1="5006.6" y1="12528.79" x2="5303.49" y2="12529.93" />
            <line class="fil1 str22" x1="5006.71" y1="12675.57" x2="5303.47" y2="12675.11" />
            <line class="fil1 str22" x1="5006.69" y1="12820.74" x2="5301.98" y2="12822.01" />
            <line class="fil1 str22" x1="5005.2" y1="12967.65" x2="5302.08" y2="12968.79" />
            <line class="fil1 str22" x1="5005.3" y1="13114.43" x2="5302.19" y2="13115.57" />
            <line class="fil1 str22" x1="5005.41" y1="13261.21" x2="5300.7" y2="13262.47" />
            <line class="fil1 str22" x1="5003.91" y1="13408.11" x2="5300.68" y2="13407.65" />
            <line class="fil1 str22" x1="5003.9" y1="13553.28" x2="5300.78" y2="13554.42" />
            <line class="fil1 str22" x1="5004" y1="13700.06" x2="5300.89" y2="13701.21" />
            <line class="fil1 str22" x1="5004.11" y1="13846.84" x2="5299.39" y2="13848.11" />
            <line class="fil1 str22" x1="5002.61" y1="13993.74" x2="5299.38" y2="13993.28" />
            <line class="fil1 str22" x1="5002.59" y1="14138.92" x2="5299.49" y2="14140.06" />
            <line class="fil1 str22" x1="5002.7" y1="14285.7" x2="5297.99" y2="14286.97" />
            <line class="fil1 str22" x1="5001.21" y1="14432.6" x2="5298.1" y2="14433.74" />
            <line class="fil1 str22" x1="5001.31" y1="14579.38" x2="5298.08" y2="14578.92" />
            <line class="fil1 str22" x1="5001.3" y1="14724.56" x2="5298.19" y2="14725.7" />
            <line class="fil1 str22" x1="5001.4" y1="14871.34" x2="5296.69" y2="14872.6" />
            <line class="fil1 str22" x1="4999.91" y1="15018.24" x2="5296.8" y2="15019.38" />
            <line class="fil1 str22" x1="5000.01" y1="15165.02" x2="5296.9" y2="15166.16" />
            <line class="fil1 str22" x1="5000.12" y1="15311.8" x2="5295.28" y2="15311.46" />
            <line class="fil1 str22" x1="4998.5" y1="15457.1" x2="5295.39" y2="15458.24" />
            <line class="fil1 str22" x1="4998.61" y1="15603.88" x2="5295.5" y2="15605.02" />
            <line class="fil1 str22" x1="4998.72" y1="15750.66" x2="5294" y2="15751.92" />
            <line class="fil1 str22" x1="4997.22" y1="15897.56" x2="5293.98" y2="15897.1" />
            <line class="fil1 str22" x1="4997.2" y1="16042.74" x2="5294.09" y2="16043.88" />
            <line class="fil1 str22" x1="4997.31" y1="16189.52" x2="5294.2" y2="16190.66" />
            <line class="fil1 str22" x1="4997.42" y1="16336.29" x2="5292.7" y2="16337.56" />
            <line class="fil1 str22" x1="4995.92" y1="16483.2" x2="5292.68" y2="16482.73" />
            <line class="fil1 str22" x1="4995.9" y1="16628.37" x2="5292.79" y2="16629.51" />
            <line class="fil1 str22" x1="4996.01" y1="16775.15" x2="5291.3" y2="16776.42" />
            <line class="fil1 str22" x1="4994.51" y1="16922.05" x2="5291.4" y2="16923.19" />
            <line class="fil1 str22" x1="4994.62" y1="17068.84" x2="5291.51" y2="17069.98" />
            <line class="fil1 str22" x1="4994.73" y1="17215.61" x2="5291.49" y2="17215.15" />
            <line class="fil1 str22" x1="4994.71" y1="17360.79" x2="5289.99" y2="17362.05" />
            <line class="fil1 str22" x1="4993.21" y1="17507.69" x2="5290.1" y2="17508.83" />
            <line class="fil1 str22" x1="4993.32" y1="17654.47" x2="5290.21" y2="17655.61" />
            <line class="fil1 str22" x1="4993.43" y1="17801.25" x2="5288.59" y2="17800.91" />
            <line class="fil1 str22" x1="4991.81" y1="17946.55" x2="5288.69" y2="17947.69" />
            <line class="fil1 str22" x1="4991.91" y1="18093.33" x2="5288.8" y2="18094.47" />
            <line class="fil1 str22" x1="4992.02" y1="18240.11" x2="5288.91" y2="18241.25" />
            <line class="fil1 str22" x1="4992.13" y1="18386.89" x2="5287.29" y2="18386.55" />
            <line class="fil1 str22" x1="4990.51" y1="18532.19" x2="5287.4" y2="18533.33" />
            <line class="fil1 str22" x1="4990.61" y1="18678.97" x2="5287.5" y2="18680.11" />
            <line class="fil1 str22" x1="4990.72" y1="18825.75" x2="5286.01" y2="18827.01" />
            <line class="fil1 str22" x1="4989.22" y1="18972.65" x2="5286.11" y2="18973.79" />
            <line class="fil1 str22" x1="4606.61" y1="6962.58" x2="4574.54" y2="18970.98" />
            <line class="fil1 str22" x1="4599.91" y1="9452.03" x2="4896.8" y2="9453.17" />
            <line class="fil1 str22" x1="4599.81" y1="9305.25" x2="4896.7" y2="9306.39" />
            <line class="fil1 str22" x1="4601.43" y1="9159.95" x2="4896.59" y2="9159.61" />
            <line class="fil1 str22" x1="4601.32" y1="9013.17" x2="4898.21" y2="9014.31" />
            <line class="fil1 str22" x1="4601.21" y1="8866.39" x2="4898.1" y2="8867.53" />
            <line class="fil1 str22" x1="4602.71" y1="8719.49" x2="4898" y2="8720.75" />
            <line class="fil1 str22" x1="4602.6" y1="8572.71" x2="4899.49" y2="8573.85" />
            <line class="fil1 str22" x1="4602.62" y1="8427.54" x2="4899.39" y2="8427.07" />
            <line class="fil1 str22" x1="4602.51" y1="8280.75" x2="4899.4" y2="8281.9" />
            <line class="fil1 str22" x1="4604.01" y1="8133.85" x2="4899.29" y2="8135.12" />
            <line class="fil1 str22" x1="4603.9" y1="7987.07" x2="4900.79" y2="7988.22" />
            <line class="fil1 str22" x1="4603.92" y1="7841.9" x2="4900.68" y2="7841.43" />
            <line class="fil1 str22" x1="4605.42" y1="7694.99" x2="4900.7" y2="7696.26" />
            <line class="fil1 str22" x1="4605.31" y1="7548.22" x2="4902.2" y2="7549.36" />
            <line class="fil1 str22" x1="4605.2" y1="7401.44" x2="4902.09" y2="7402.58" />
            <line class="fil1 str22" x1="4605.22" y1="7256.26" x2="4901.98" y2="7255.8" />
            <line class="fil1 str22" x1="4606.71" y1="7109.36" x2="4902" y2="7110.62" />
            <line class="fil1 str22" x1="4600.02" y1="9598.81" x2="4896.91" y2="9599.95" />
            <line class="fil1 str22" x1="4600.13" y1="9745.59" x2="4895.29" y2="9745.25" />
            <line class="fil1 str22" x1="4598.51" y1="9890.89" x2="4895.39" y2="9892.03" />
            <line class="fil1 str22" x1="4598.61" y1="10037.67" x2="4895.5" y2="10038.81" />
            <line class="fil1 str22" x1="4598.72" y1="10184.45" x2="4894.01" y2="10185.71" />
            <line class="fil1 str22" x1="4597.23" y1="10331.35" x2="4893.99" y2="10330.89" />
            <line class="fil1 str22" x1="4597.21" y1="10476.53" x2="4894.1" y2="10477.67" />
            <line class="fil1 str22" x1="4597.31" y1="10623.3" x2="4892.6" y2="10624.57" />
            <line class="fil1 str22" x1="4595.82" y1="10770.21" x2="4892.71" y2="10771.35" />
            <line class="fil1 str22" x1="4595.92" y1="10916.99" x2="4892.81" y2="10918.13" />
            <line class="fil1 str22" x1="4596.03" y1="11063.76" x2="4892.8" y2="11063.3" />
            <line class="fil1 str22" x1="4596.01" y1="11208.94" x2="4891.3" y2="11210.2" />
            <line class="fil1 str22" x1="4594.52" y1="11355.85" x2="4891.41" y2="11356.99" />
            <line class="fil1 str22" x1="4594.62" y1="11502.62" x2="4891.52" y2="11503.76" />
            <line class="fil1 str22" x1="4594.73" y1="11649.4" x2="4889.89" y2="11649.06" />
            <line class="fil1 str22" x1="4593.11" y1="11794.7" x2="4890" y2="11795.84" />
            <line class="fil1 str22" x1="4593.22" y1="11941.48" x2="4890.11" y2="11942.62" />
            <line class="fil1 str22" x1="4593.33" y1="12088.26" x2="4890.21" y2="12089.4" />
            <line class="fil1 str22" x1="4593.43" y1="12235.04" x2="4888.59" y2="12234.7" />
            <line class="fil1 str22" x1="4591.81" y1="12380.34" x2="4888.7" y2="12381.48" />
            <line class="fil1 str22" x1="4591.92" y1="12527.12" x2="4888.81" y2="12528.26" />
            <line class="fil1 str22" x1="4592.03" y1="12673.9" x2="4887.31" y2="12675.16" />
            <line class="fil1 str22" x1="4590.53" y1="12820.8" x2="4887.42" y2="12821.94" />
            <line class="fil1 str22" x1="4590.64" y1="12967.58" x2="4887.4" y2="12967.12" />
            <line class="fil1 str22" x1="4590.62" y1="13112.76" x2="4887.51" y2="13113.9" />
            <line class="fil1 str22" x1="4590.73" y1="13259.53" x2="4886.01" y2="13260.8" />
            <line class="fil1 str22" x1="4589.23" y1="13406.44" x2="4886.12" y2="13407.58" />
            <line class="fil1 str22" x1="4589.34" y1="13553.22" x2="4886.1" y2="13552.75" />
            <line class="fil1 str22" x1="4589.32" y1="13698.39" x2="4884.61" y2="13699.66" />
            <line class="fil1 str22" x1="4587.82" y1="13845.3" x2="4884.71" y2="13846.44" />
            <line class="fil1 str22" x1="4587.93" y1="13992.07" x2="4884.82" y2="13993.21" />
            <line class="fil1 str22" x1="4588.04" y1="14138.86" x2="4884.8" y2="14138.39" />
            <line class="fil1 str22" x1="4588.02" y1="14284.03" x2="4883.3" y2="14285.3" />
            <line class="fil1 str22" x1="4586.53" y1="14430.93" x2="4883.41" y2="14432.07" />
            <line class="fil1 str22" x1="4586.63" y1="14577.71" x2="4883.52" y2="14578.85" />
            <line class="fil1 str22" x1="4586.74" y1="14724.49" x2="4882.02" y2="14725.76" />
            <line class="fil1 str22" x1="4585.24" y1="14871.39" x2="4882.01" y2="14870.93" />
            <line class="fil1 str22" x1="4585.22" y1="15016.57" x2="4882.11" y2="15017.71" />
            <line class="fil1 str22" x1="4585.33" y1="15163.35" x2="4880.62" y2="15164.61" />
            <line class="fil1 str22" x1="4583.84" y1="15310.25" x2="4880.72" y2="15311.39" />
            <line class="fil1 str22" x1="4583.94" y1="15457.03" x2="4880.71" y2="15456.57" />
            <line class="fil1 str22" x1="4583.92" y1="15602.21" x2="4880.82" y2="15603.35" />
            <line class="fil1 str22" x1="4584.03" y1="15748.98" x2="4879.32" y2="15750.25" />
            <line class="fil1 str22" x1="4582.53" y1="15895.89" x2="4879.43" y2="15897.03" />
            <line class="fil1 str22" x1="4582.64" y1="16042.67" x2="4879.41" y2="16042.21" />
            <line class="fil1 str22" x1="4582.63" y1="16187.84" x2="4877.91" y2="16189.11" />
            <line class="fil1 str22" x1="4581.13" y1="16334.75" x2="4878.02" y2="16335.89" />
            <line class="fil1 str22" x1="4581.24" y1="16481.53" x2="4878.13" y2="16482.67" />
            <line class="fil1 str22" x1="4581.34" y1="16628.31" x2="4878.23" y2="16629.45" />
            <line class="fil1 str22" x1="4581.45" y1="16775.08" x2="4876.61" y2="16774.75" />
            <line class="fil1 str22" x1="4579.83" y1="16920.38" x2="4876.72" y2="16921.52" />
            <line class="fil1 str22" x1="4579.94" y1="17067.16" x2="4876.82" y2="17068.31" />
            <line class="fil1 str22" x1="4580.04" y1="17213.94" x2="4875.33" y2="17215.21" />
            <line class="fil1 str22" x1="4578.55" y1="17360.84" x2="4875.31" y2="17360.38" />
            <line class="fil1 str22" x1="4578.53" y1="17506.02" x2="4875.42" y2="17507.16" />
            <line class="fil1 str22" x1="4578.64" y1="17652.8" x2="4875.53" y2="17653.94" />
            <line class="fil1 str22" x1="4578.74" y1="17799.58" x2="4874.03" y2="17800.84" />
            <line class="fil1 str22" x1="4577.25" y1="17946.48" x2="4874.01" y2="17946.02" />
            <line class="fil1 str22" x1="4577.23" y1="18091.66" x2="4874.12" y2="18092.8" />
            <line class="fil1 str22" x1="4577.34" y1="18238.44" x2="4872.62" y2="18239.7" />
            <line class="fil1 str22" x1="4575.84" y1="18385.34" x2="4872.73" y2="18386.48" />
            <line class="fil1 str22" x1="4575.95" y1="18532.12" x2="4872.84" y2="18533.26" />
            <line class="fil1 str22" x1="4576.05" y1="18678.9" x2="4871.21" y2="18678.56" />
            <line class="fil1 str22" x1="4574.44" y1="18824.2" x2="4871.32" y2="18825.34" />
            <polyline class="fil1 str22" points="4574.54,18970.98 4871.43,18972.12 4989.22,18972.65 " />

            <line class="fil1 str24" x1="6157.85" y1="6966.3" x2="6473.3" y2="6965.96" />
            <line class="fil1 str25" x1="5763.41" y1="6966.3" x2="6078.86" y2="6965.96" />
            <line class="fil1 str26" x1="4901.82" y1="6965.96" x2="5021.21" y2="6966.37" />
            <line class="fil1 str27" x1="5001.05" y1="6966.3" x2="5316.5" y2="6965.96" />
            <line class="fil1 str28" x1="4606.61" y1="6966.3" x2="4922.06" y2="6965.96" />

          </g>

          <path class="fil3 str29" d="M8156.25 10499.65l822.27 0c499.63,34.22 490.36,513.73 480.8,1004.4 -12.54,643.35 -25.37,1302.23 827.09,1329.53l3.41 -108.86 0 2100.7 -2133.57 0 0 -4325.77z" /> //
          <g id="defesacivil" data-name="Defesa civil do RS">
            <path class="fil2" d="M8156.25 10499.65l822.27 0c499.63,34.22 490.36,513.73 480.8,1004.4 -12.54,643.35 -25.37,1302.23 827.09,1329.53l3.41 -108.86 0 2100.7 -2133.57 0 0 -4325.77z" /> //
          </g>//defesa civil

          <g>
            <path class="fil9" d="M10289.82 15267.84l-2132.11 0 0 -52.92 2132.11 0 26.48 26.46 -26.48 26.46zm0 -52.92c14.62,0 26.48,11.85 26.48,26.46 0,14.61 -11.86,26.46 -26.48,26.46l0 -52.92zm-26.48 1456.46l0 -1430 52.96 0 0 1430 -26.48 26.46 -26.48 -26.46zm52.96 0c0,14.61 -11.86,26.46 -26.48,26.46 -14.62,0 -26.48,-11.85 -26.48,-26.46l52.96 0zm-2158.59 -26.46l2132.11 0 0 52.92 -2132.11 0 -26.48 -26.46 26.48 -26.46zm0 52.92c-14.62,0 -26.48,-11.85 -26.48,-26.46 0,-14.61 11.86,-26.46 26.48,-26.46l0 52.92zm26.48 -1456.46l0 1430 -52.96 0 0 -1430 26.48 -26.46 26.48 26.46zm-52.96 0c0,-14.61 11.86,-26.46 26.48,-26.46 14.62,0 26.48,11.85 26.48,26.46l-52.96 0z" />
            <polygon id="1" class="fil2" points="8157.71,15241.38 10289.82,15241.38 10289.82,16671.38 8157.71,16671.38 " />
          </g>

          <path class="fil2" d="M15737.61 15261.16l658.17 0 -4.4 3417.76c0,91.26 -74.67,165.94 -165.94,165.94l-487.83 0 -165.94 1.37 0 -3585.07 165.94 0z" />
          <polygon class="fil2" points="16404.76,13010.88 15571.67,13010.88 15571.67,14791.38 16404.76,14791.38 " />
          <rect class="fil2" x="15571.67" y="12001.86" width="833.09" height="206.78" />
          <g>
            <path class="fil3 str30" d="M15571.67 10282.25l132.9 0 700.19 0 0 1.29c63.63,15.52 139.26,77.74 141.38,180.16l0 371.63 0 288.65 0 372.13c2.31,84.22 -53.79,140.2 -141.38,180.95l0 -3.02 -700.19 0 -132.9 0 0 -1391.79z" />
            <path id="1" class="fil2" d="M15571.67 10282.25l132.9 0 700.19 0 0 1.29c63.63,15.52 139.26,77.74 141.38,180.16l0 371.63 0 288.65 0 372.13c2.31,84.22 -53.79,140.2 -141.38,180.95l0 -3.02 -700.19 0 -132.9 0 0 -1391.79z" />
          </g>
          <g>
            <path class="fil3 str31" d="M3095.59 2335.46l8354.09 21.53 -4.34 562.53 -708.76 0 1.34 -296.81 -5750.16 -16.41 0.08 979.23 2362.09 8.83c97.63,-1.07 168.87,41.1 184.22,174.56l-1.83 238.18 -206.68 -1.58c-0.07,100.5 -45.31,163 -147.51,177.61l-2994.42 -7.81c-713.22,-261.66 -1066.77,-763.7 -1092.79,-1484.62l4.67 -355.24z" />
            <path id="1" class="fil2" d="M3095.59 2335.46l8354.09 21.53 -4.34 562.53 -708.76 0 1.34 -296.81 -5750.16 -16.41 0.08 979.23 2362.09 8.83c97.63,-1.07 168.87,41.1 184.22,174.56l-1.83 238.18 -206.68 -1.58c-0.07,100.5 -45.31,163 -147.51,177.61l-2994.42 -7.81c-713.22,-261.66 -1066.77,-763.7 -1092.79,-1484.62l4.67 -355.24z" />
          </g>
          <g>
            <path class="fil3 str32" d="M3091.9 2336l-0.98 354.7c54.85,798.77 451.14,1261.69 1095.62,1480.45l2991.59 11.98c112.38,-9.38 146.37,-80.54 147.51,-177.61l208.22 1.6 -0.94 237.19c-13.99,118.32 -78.94,169.99 -178.22,176.75l-3166.39 -7.81c-108.75,-0.27 -365.43,-127.05 -465.18,-183.68 -572.57,-325.08 -816.08,-864.38 -868.02,-1528.39l-0.42 -365.71 237.21 0.53z" />
            <path id="1" class="fil4" d="M3091.9 2336l-0.98 354.7c54.85,798.77 451.14,1261.69 1095.62,1480.45l2991.59 11.98c112.38,-9.38 146.37,-80.54 147.51,-177.61l208.22 1.6 -0.94 237.19c-13.99,118.32 -78.94,169.99 -178.22,176.75l-3166.39 -7.81c-108.75,-0.27 -365.43,-127.05 -465.18,-183.68 -572.57,-325.08 -816.08,-864.38 -868.02,-1528.39l-0.42 -365.71 237.21 0.53z" />
          </g>
          <g>
            <path class="fil3 str33" d="M7948.74 3949.1l3024.4 0 0 -644.6 -237.19 0 0.47 295.83 -2608.85 -7.1c-107.45,6.74 -166.53,69.45 -178.83,186.31l0 169.56z" />
            <path id="1" class="fil2" d="M7948.74 3949.1l3024.4 0 0 -644.6 -237.19 0 0.47 295.83 -2608.85 -7.1c-107.45,6.74 -166.53,69.45 -178.83,186.31l0 169.56z" />
          </g>
          <path class="fil12" d="M10891.14 4844.87l1124.25 0 0 97.46 -1124.25 0 0 -97.46zm1384.03 0l1806.08 0 0 97.46 -1806.08 0 0 -97.46z" />
          <path class="fil3 str34" d="M12124.41 5292.72l1955.2 0m0 272.4l-1955.2 0" />
          <g>
            <path class="fil13" d="M17016.2 15706.21c-5.88,0 -10.67,-4.77 -10.67,-10.65 0,-5.88 4.77,-10.67 10.65,-10.67l0.02 21.32zm295.17 -0.33l-295.17 0.33 -0.02 -21.32 295.17 -0.33 0.02 21.32zm-0.02 -21.32c5.88,0 10.67,4.77 10.67,10.65 0,5.88 -4.77,10.67 -10.65,10.67l-0.02 -21.32z" />
          </g>
          <g>
            <path class="fil3 str35" d="M16404.76 12001.86c63.63,15.51 139.26,77.73 141.38,180.15l0 2284.1c2.31,84.22 -53.79,140.21 -141.38,180.95l-833.09 0 0 144.32 833.09 0 0 -144.32 0 -2438.42 -833.09 0 0 -206.78 833.09 0z" />
            <path id="1" class="fil4" d="M16404.76 12001.86c63.63,15.51 139.26,77.73 141.38,180.15l0 2284.1c2.31,84.22 -53.79,140.21 -141.38,180.95l-833.09 0 0 144.32 833.09 0 0 -144.32 0 -2438.42 -833.09 0 0 -206.78 833.09 0z" />
          </g>

        </g>
        <g id="_0">
          <metadata id="CorelCorpID_1Corel-Layer" />
          <g>
            <path class="fil3 str37" d="M8160.53 10499.65l817.99 0c499.63,34.22 490.36,513.73 480.8,1004.4 -7.89,404.98 -15.82,816.05 191.95,1071.92 -106.02,25.96 -207.88,58.24 -304.81,97.96 -187.7,76.92 -355.9,181.49 -498.86,321.65 -76.57,75.07 -131.77,164.42 -182.49,246.53 -47.55,76.97 -88.87,143.85 -97.23,143.87l-407.35 1.41 0 -2887.74zm418.06 3167.21l0 8.37c38.91,162.72 129.78,283.11 301.62,283.11l244.99 0 0 -852.21c80.43,-77.4 421.82,-345.94 856.53,-318.01 86.72,25.96 187.49,41.71 304.68,45.46l7.4 -235.92c-619.42,-19.84 -608.87,-561.26 -598.58,-1089.91 12.39,-635.54 24.48,-1256.07 -790.05,-1245.96l-748.93 -0.42 0 0.2c-141.98,1.11 -236.41,81.73 -236.41,199.15 0,518.21 0,3669.45 0,4187.67 0,95.61 89.69,177.03 155.87,177.03l0 0 84.82 0 0 -1156.91 407.35 -1.41c3.62,-0.01 7.17,-0.11 10.71,-0.24z" />
            <path id="1" class="fil4" d="M8160.53 10499.65l817.99 0c499.63,34.22 490.36,513.73 480.8,1004.4 -7.89,404.98 -15.82,816.05 191.95,1071.92 -106.02,25.96 -207.88,58.24 -304.81,97.96 -187.7,76.92 -355.9,181.49 -498.86,321.65 -76.57,75.07 -131.77,164.42 -182.49,246.53 -47.55,76.97 -88.87,143.85 -97.23,143.87l-407.35 1.41 0 -2887.74zm418.06 3167.21l0 8.37c38.91,162.72 129.78,283.11 301.62,283.11l244.99 0 0 -852.21c80.43,-77.4 421.82,-345.94 856.53,-318.01 86.72,25.96 187.49,41.71 304.68,45.46l7.4 -235.92c-619.42,-19.84 -608.87,-561.26 -598.58,-1089.91 12.39,-635.54 24.48,-1256.07 -790.05,-1245.96l-748.93 -0.42 0 0.2c-141.98,1.11 -236.41,81.73 -236.41,199.15 0,518.21 0,3669.45 0,4187.67 0,95.61 89.69,177.03 155.87,177.03l0 0 84.82 0 0 -1156.91 407.35 -1.41c3.62,-0.01 7.17,-0.11 10.71,-0.24z" />
          </g>
          <g>
            <path class="fil3 str38" d="M8157.71 15241.38l-75.79 0c-77.62,11.79 -166.92,83.5 -164.68,178.15l0 1067.3c14.47,110.57 71.67,167.91 166.9,177.87l73.57 0 0 -1423.32z" />
            <path id="1" class="fil4" d="M8157.71 15241.38l-75.79 0c-77.62,11.79 -166.92,83.5 -164.68,178.15l0 1067.3c14.47,110.57 71.67,167.91 166.9,177.87l73.57 0 0 -1423.32z" />
          </g>
          <g>
            <path class="fil9" d="M10289.82 17105.53l-2141.59 0 0 -52.92 2141.59 0 26.52 26.46 -26.52 26.46zm0 -52.92c14.64,0 26.52,11.85 26.52,26.46 0,14.61 -11.88,26.46 -26.52,26.46l0 -52.92zm-26.52 1780.15l0 -1753.69 53.04 0 0 1753.69 -26.52 26.46 -26.52 -26.46zm53.04 0c0,14.61 -11.88,26.46 -26.52,26.46 -14.64,0 -26.52,-11.85 -26.52,-26.46l53.04 0zm-2168.11 -26.46l2141.59 0 0 52.92 -2141.59 0 -26.52 -26.46 26.52 -26.46zm0 52.92c-14.64,0 -26.52,-11.85 -26.52,-26.46 0,-14.61 11.88,-26.46 26.52,-26.46l0 52.92zm26.52 -1780.15l0 1753.69 -53.04 0 0 -1753.69 26.52 -26.46 26.52 26.46zm-53.04 0c0,-14.61 11.88,-26.46 26.52,-26.46 14.64,0 26.52,11.85 26.52,26.46l-53.04 0z" />
            <polygon id="1" class="fil2" points="8148.23,17079.07 10289.82,17079.07 10289.82,18832.76 8148.23,18832.76 " />
          </g>
          <g>
            <path class="fil3 str39" d="M8157.71 17079.07l-75.79 0c-77.62,11.79 -166.92,83.51 -164.68,178.16l0 1511.19c14.47,110.56 71.67,167.91 166.9,177.86l73.57 0 8138.94 0c112.39,0 236.21,-61.2 240.44,-175.45l0 -3329.52c-2.13,-102.38 -77.7,-164.59 -141.31,-180.14l0 -0.01 -0.35 272.62 0.28 0 0 3120.94c-1.93,9.89 -4.43,47.12 -7.46,56.24 -12.58,63.62 -61.8,114.46 -124.57,129.41 -3.97,1.78 -8.01,3.51 -12.14,5.17l-596.39 0 -83.48 0.69 0 -0.69 -7413.96 0 0 -1766.47z" />
            <path id="1" class="fil4" d="M8157.71 17079.07l-75.79 0c-77.62,11.79 -166.92,83.51 -164.68,178.16l0 1511.19c14.47,110.56 71.67,167.91 166.9,177.86l73.57 0 8138.94 0c112.39,0 236.21,-61.2 240.44,-175.45l0 -3329.52c-2.13,-102.38 -77.7,-164.59 -141.31,-180.14l0 -0.01 -0.35 272.62 0.28 0 0 3120.94c-1.93,9.89 -4.43,47.12 -7.46,56.24 -12.58,63.62 -61.8,114.46 -124.57,129.41 -3.97,1.78 -8.01,3.51 -12.14,5.17l-596.39 0 -83.48 0.69 0 -0.69 -7413.96 0 0 -1766.47z" />
          </g>
          <g>
            <path class="fil3 str40" d="M5331.06 5070.51l1162.86 3.77 -0.11 -122.8c-7.02,-80.33 -49.88,-115.75 -118.55,-118.85l-1979.53 -4.85 -0.03 5.85 -273.4 0.68c-108.75,0.26 -365.43,127.04 -465.18,183.67 -572.57,325.08 -816.08,864.38 -868.02,1528.39l-0.42 13243.62 237.21 -0.53 -0.98 -13232.6c54.85,-798.77 451.13,-1261.69 1095.61,-1480.46l1210.54 -4.85 0 -1.04z" />
            <path id="1" class="fil4" d="M5331.06 5070.51l1162.86 3.77 -0.11 -122.8c-7.02,-80.33 -49.88,-115.75 -118.55,-118.85l-1979.53 -4.85 -0.03 5.85 -273.4 0.68c-108.75,0.26 -365.43,127.04 -465.18,183.67 -572.57,325.08 -816.08,864.38 -868.02,1528.39l-0.42 13243.62 237.21 -0.53 -0.98 -13232.6c54.85,-798.77 451.13,-1261.69 1095.61,-1480.46l1210.54 -4.85 0 -1.04z" />
          </g>
          <polygon class="fil2" points="14832.56,3941.88 11449.01,3941.43 11448.14,3127.28 11122.27,3126.78 11120.59,3941.43 11771.7,4344.34 14369.2,4344.34 " />
          <rect class="fil3 str34" x="12893.27" y="5292.72" width="325.51" height="272.4" />
          <rect class="fil3 str34" x="12542.72" y="5292.72" width="350.56" height="272.4" />
          <line class="fil3 str34" x1="12862.66" y1="5292.72" x2="12862.66" y2="5565.12" />
          <line class="fil3 str34" x1="12830.47" y1="5292.72" x2="12830.47" y2="5565.12" />
          <line class="fil3 str34" x1="12798.28" y1="5292.72" x2="12798.28" y2="5565.12" />
          <line class="fil3 str34" x1="12766.09" y1="5292.72" x2="12766.09" y2="5565.12" />
          <line class="fil3 str34" x1="12766.09" y1="5292.72" x2="12766.09" y2="5565.12" />
          <line class="fil3 str34" x1="12733.9" y1="5292.72" x2="12733.9" y2="5565.12" />
          <line class="fil3 str34" x1="12701.7" y1="5292.72" x2="12701.7" y2="5565.12" />
          <line class="fil3 str34" x1="12669.51" y1="5292.72" x2="12669.51" y2="5565.12" />
          <line class="fil3 str34" x1="12637.32" y1="5292.72" x2="12637.32" y2="5565.12" />
          <line class="fil3 str34" x1="12605.13" y1="5292.72" x2="12605.13" y2="5565.12" />
          <line class="fil3 str34" x1="12572.93" y1="5292.72" x2="12572.93" y2="5565.12" />
          <rect class="fil3 str34" x="13218.79" y="5292.72" width="350.56" height="272.4" />
          <line class="fil3 str34" x1="13538.73" y1="5292.72" x2="13538.73" y2="5565.12" />
          <line class="fil3 str34" x1="13506.54" y1="5292.72" x2="13506.54" y2="5565.12" />
          <line class="fil3 str34" x1="13474.35" y1="5292.72" x2="13474.35" y2="5565.12" />
          <line class="fil3 str34" x1="13442.16" y1="5292.72" x2="13442.16" y2="5565.12" />
          <line class="fil3 str34" x1="13442.16" y1="5292.72" x2="13442.16" y2="5565.12" />
          <line class="fil3 str34" x1="13409.97" y1="5292.72" x2="13409.97" y2="5565.12" />
          <line class="fil3 str34" x1="13377.77" y1="5292.72" x2="13377.77" y2="5565.12" />
          <line class="fil3 str34" x1="13345.58" y1="5292.72" x2="13345.58" y2="5565.12" />
          <line class="fil3 str34" x1="13313.39" y1="5292.72" x2="13313.39" y2="5565.12" />
          <line class="fil3 str34" x1="13281.2" y1="5292.72" x2="13281.2" y2="5565.12" />
          <line class="fil3 str34" x1="13249" y1="5292.72" x2="13249" y2="5565.12" />
          <g>
            <path class="fil3 str41" d="M16546.14 11198.85c-16.25,-43.61 -58.39,-74.87 -107.48,-74.87l-4.92 0 -5.26 0 -33.36 0 -71.28 0 -549.29 0c-60.63,-1.11 -93.76,27.91 -92.19,94.89l0 455.17 -110.69 0 0 -550.06 0 -288.65 0 -553.08 110.69 0 0 467c2.79,50.24 24.99,83.2 81.08,86.08l560.4 0 71.28 0 16.44 0 1.12 -1.1c5.16,0.72 10.44,1.1 15.8,1.1l10.18 0c49.09,0 91.23,-31.26 107.48,-74.87l0 438.39z" />
            <path id="1" class="fil4" d="M16546.14 11198.85c-16.25,-43.61 -58.39,-74.87 -107.48,-74.87l-4.92 0 -5.26 0 -33.36 0 -71.28 0 -549.29 0c-60.63,-1.11 -93.76,27.91 -92.19,94.89l0 455.17 -110.69 0 0 -550.06 0 -288.65 0 -553.08 110.69 0 0 467c2.79,50.24 24.99,83.2 81.08,86.08l560.4 0 71.28 0 16.44 0 1.12 -1.1c5.16,0.72 10.44,1.1 15.8,1.1l10.18 0c49.09,0 91.23,-31.26 107.48,-74.87l0 438.39z" />
          </g>
          <g>
            <path class="fil3 str42" d="M15737.61 15261.16l658.17 0 -4.4 3417.76c0,91.26 -74.67,165.94 -165.94,165.94l-487.83 0 -165.94 1.37 0 -3585.07 165.94 0z" />
            <path id="1" class="fil2" d="M15737.61 15261.16l658.17 0 -4.4 3417.76c0,91.26 -74.67,165.94 -165.94,165.94l-487.83 0 -165.94 1.37 0 -3585.07 165.94 0z" />
          </g>
          <rect class="fil15 str43" x="15571.66" y="12208.63" width="3733.58" height="805.28" />
          <line class="fil1 str44" x1="19987.74" y1="14989.43" x2="19988.54" y2="14729.67" />

          <g>
            <polygon class="fil3 str45" points="19684.25,13366.09 19682.44,13970.43 19989.02,14220.86 19992.36,13366.35 " />
            <polygon id="1" class="fil2" points="19684.25,13366.09 19682.44,13970.43 19989.02,14220.86 19992.36,13366.35 " />
          </g>
          <g>
            <polygon class="fil3 str46" points="19682.13,14106.12 19988.83,14358.15 19988.59,14563.02 19679.69,14822.51 " />
            <polygon id="1" class="fil2" points="19682.13,14106.12 19988.83,14358.15 19988.59,14563.02 19679.69,14822.51 " />
          </g>
          <g>
            <polygon class="fil3 str47" points="19679.62,14989.17 19988.54,14729.67 19987.74,14989.43 " />
            <polygon id="1" class="fil2" points="19679.62,14989.17 19988.54,14729.67 19987.74,14989.43 " />
          </g>
          <g>
            <polygon class="fil3 str48" points="19151.96,14986.59 19555.42,14989.14 19560.04,13366.04 19160.57,13768.08 " />
            <polygon id="1" class="fil2" points="19151.96,14986.59 19555.42,14989.14 19560.04,13366.04 19160.57,13768.08 " />
          </g>
          <g transform="matrix(2.61656E-14 -0.899748 0.879871 2.61656E-14 18949.5 28198.6)">
            <text x="14850" y="10500" class="fil18 fnt0">AV. BORGES DE MEDEIROS</text>
          </g>
          <g transform="matrix(2.60565E-14 -0.865472 0.879871 2.60565E-14 -7183.9 25717.9)">
            <text x="14850" y="10500" class="fil18 fnt0">AV. AUGUSTO DE CARVALHO</text>
          </g>
          <g transform="matrix(0.648406 0.604648 -0.60007 0.643497 14563.9 -12372.2)">
            <text x="14850" y="10500" class="fil18 fnt0">R. ANTÔNIO KLINGER FILHO</text>
          </g>
          <path class="fil3 str49" d="M15508.77 1079.55c-204.78,905.72 -1014.46,1582.01 -1982.09,1582.01 -967.61,0 -1777.28,-676.27 -1982.08,-1581.96" />
          <g transform="matrix(1 0 0 0.879871 -1849.83 -7678.94)">
            <text x="14850" y="10500" class="fil0 fnt1">PROCERGS</text>
          </g>
          <g>
            <path class="fil3 str50" d="M7948.74 3949.1l-0.33 58.08c-4.03,101.87 53.51,162.2 176.76,178.22l3231.61 8.75 413.75 238.86 2631.42 6.97 116.04 -42.9 2211.56 -1907.17c56.93,-41.68 83.22,-93.57 85.07,-153.59l0.09 -110.89 -2445.51 2118.91 -2597.5 -0.13 -651.11 -402.78 1.68 -814.65 325.87 0.5 -2.8 -207.76 -712.91 0.13 -0.62 384.05 241.34 0.81 -1 651.74 -3023.41 -7.15z" />
            <path id="1" class="fil4" d="M7948.74 3949.1l-0.33 58.08c-4.03,101.87 53.51,162.2 176.76,178.22l3231.61 8.75 413.75 238.86 2631.42 6.97 116.04 -42.9 2211.56 -1907.17c56.93,-41.68 83.22,-93.57 85.07,-153.59l0.09 -110.89 -2445.51 2118.91 -2597.5 -0.13 -651.11 -402.78 1.68 -814.65 325.87 0.5 -2.8 -207.76 -712.91 0.13 -0.62 384.05 241.34 0.81 -1 651.74 -3023.41 -7.15z" />
          </g>
          <rect class="fil2" x="13338.33" y="9748.24" width="2331.78" height="142.48" />
          <g>
            <polygon class="fil3 str51" points="16525.63,9748.24 15930.7,9748.24 15930.7,9890.72 16498.99,9890.72 " />
            <polygon id="1" class="fil2" points="16525.63,9748.24 15930.7,9748.24 15930.7,9890.72 16498.99,9890.72 " />
          </g>
          <rect class="fil2" x="8917.43" y="9748.24" width="3481.66" height="142.48" />
          <g>
            <polygon class="fil19 str52" points="19335.45,9028.88 19882.11,9215.56 19742.23,9630.02 19195.57,9443.33 " />
            <g>
              <line class="fil3 str52" x1="19239.71" y1="9458.4" x2="19379.59" y2="9043.94" />
              <line class="fil3 str52" x1="19404.59" y1="9514.73" x2="19544.48" y2="9100.28" />
              <line class="fil3 str52" x1="19569.47" y1="9571.07" x2="19709.36" y2="9156.61" />
              <line class="fil3 str52" x1="19322.15" y1="9486.57" x2="19462.03" y2="9072.11" />
              <line class="fil3 str52" x1="19487.03" y1="9542.9" x2="19626.92" y2="9128.44" />
              <line class="fil3 str52" x1="19651.91" y1="9599.24" x2="19791.8" y2="9184.78" />
              <line class="fil3 str52" x1="19280.93" y1="9472.48" x2="19420.81" y2="9058.03" />
              <line class="fil3 str52" x1="19445.81" y1="9528.82" x2="19585.7" y2="9114.36" />
              <line class="fil3 str52" x1="19610.69" y1="9585.15" x2="19750.58" y2="9170.69" />
              <line class="fil3 str52" x1="19363.37" y1="9500.65" x2="19503.25" y2="9086.19" />
              <line class="fil3 str52" x1="19528.25" y1="9556.98" x2="19668.14" y2="9142.53" />
              <line class="fil3 str52" x1="19693.13" y1="9613.32" x2="19833.02" y2="9198.86" />
            </g>
          </g>
          <g>
            <polygon class="fil19 str52" points="16201.86,3700.72 16605.53,4113.92 16293.73,4420.73 15890.05,4007.51 " />
            <g>
              <line class="fil3 str52" x1="15922.65" y1="4040.87" x2="16234.45" y2="3734.08" />
              <line class="fil3 str52" x1="16044.39" y1="4165.52" x2="16356.19" y2="3858.73" />
              <line class="fil3 str52" x1="16166.13" y1="4290.18" x2="16477.94" y2="3983.39" />
              <line class="fil3 str52" x1="15983.52" y1="4103.2" x2="16295.32" y2="3796.41" />
              <line class="fil3 str52" x1="16105.26" y1="4227.85" x2="16417.07" y2="3921.06" />
              <line class="fil3 str52" x1="16227" y1="4352.51" x2="16538.81" y2="4045.71" />
              <line class="fil3 str52" x1="15953.08" y1="4072.03" x2="16264.89" y2="3765.24" />
              <line class="fil3 str52" x1="16074.83" y1="4196.69" x2="16386.63" y2="3889.9" />
              <line class="fil3 str52" x1="16196.57" y1="4321.34" x2="16508.37" y2="4014.55" />
              <line class="fil3 str52" x1="16013.95" y1="4134.36" x2="16325.76" y2="3827.57" />
              <line class="fil3 str52" x1="16135.7" y1="4259.02" x2="16447.5" y2="3952.22" />
              <line class="fil3 str52" x1="16257.44" y1="4383.67" x2="16569.24" y2="4076.88" />
            </g>
          </g>
          <g>
            <polygon class="fil19 str53" points="25306.71,12980.47 25793.37,12981.05 25794.25,13349.58 25307.58,13348.99 " />
            <g>
              <line class="fil3 str53" x1="25346.87" y1="13349.03" x2="25346" y2="12980.51" />
              <line class="fil3 str53" x1="25493.67" y1="13349.23" x2="25492.79" y2="12980.71" />
              <line class="fil3 str53" x1="25640.46" y1="13349.43" x2="25639.59" y2="12980.9" />
              <line class="fil3 str53" x1="25420.27" y1="13349.13" x2="25419.4" y2="12980.61" />
              <line class="fil3 str53" x1="25567.06" y1="13349.33" x2="25566.19" y2="12980.81" />
              <line class="fil3 str53" x1="25713.86" y1="13349.53" x2="25712.99" y2="12981" />
              <line class="fil3 str53" x1="25383.57" y1="13349.08" x2="25382.7" y2="12980.56" />
              <line class="fil3 str53" x1="25530.37" y1="13349.28" x2="25529.49" y2="12980.76" />
              <line class="fil3 str53" x1="25677.16" y1="13349.48" x2="25676.29" y2="12980.95" />
              <line class="fil3 str53" x1="25456.97" y1="13349.18" x2="25456.09" y2="12980.66" />
              <line class="fil3 str53" x1="25603.76" y1="13349.38" x2="25602.89" y2="12980.86" />
              <line class="fil3 str53" x1="25750.56" y1="13349.58" x2="25749.69" y2="12981.05" />
            </g>
          </g>
          <g>
            <polygon class="fil19 str52" points="7038.76,6099.52 6461.11,6098.37 6460.41,5660.94 7038.07,5662.09 " />
            <g>
              <line class="fil3 str52" x1="6991.43" y1="5662.01" x2="6992.12" y2="6099.43" />
              <line class="fil3 str52" x1="6817.19" y1="5661.63" x2="6817.88" y2="6099.06" />
              <line class="fil3 str52" x1="6642.95" y1="5661.26" x2="6643.64" y2="6098.69" />
              <line class="fil3 str52" x1="6904.31" y1="5661.82" x2="6905" y2="6099.25" />
              <line class="fil3 str52" x1="6730.07" y1="5661.45" x2="6730.76" y2="6098.87" />
              <line class="fil3 str52" x1="6555.83" y1="5661.07" x2="6556.52" y2="6098.5" />
              <line class="fil3 str52" x1="6947.87" y1="5661.91" x2="6948.56" y2="6099.34" />
              <line class="fil3 str52" x1="6773.63" y1="5661.54" x2="6774.32" y2="6098.97" />
              <line class="fil3 str52" x1="6599.39" y1="5661.17" x2="6600.08" y2="6098.59" />
              <line class="fil3 str52" x1="6860.75" y1="5661.73" x2="6861.44" y2="6099.15" />
              <line class="fil3 str52" x1="6686.51" y1="5661.35" x2="6687.2" y2="6098.78" />
              <line class="fil3 str52" x1="6512.27" y1="5660.98" x2="6512.96" y2="6098.41" />
            </g>
          </g>
          <g>
            <polygon class="fil19 str52" points="8030.47,3981.39 7452.82,3980.24 7452.12,3542.81 8029.78,3543.96 " />
            <g>
              <line class="fil3 str52" x1="7983.15" y1="3543.88" x2="7983.83" y2="3981.3" />
              <line class="fil3 str52" x1="7808.9" y1="3543.5" x2="7809.59" y2="3980.93" />
              <line class="fil3 str52" x1="7634.66" y1="3543.13" x2="7635.35" y2="3980.56" />
              <line class="fil3 str52" x1="7896.02" y1="3543.69" x2="7896.71" y2="3981.12" />
              <line class="fil3 str52" x1="7721.78" y1="3543.32" x2="7722.47" y2="3980.74" />
              <line class="fil3 str52" x1="7547.54" y1="3542.94" x2="7548.23" y2="3980.37" />
              <line class="fil3 str52" x1="7939.59" y1="3543.78" x2="7940.27" y2="3981.21" />
              <line class="fil3 str52" x1="7765.34" y1="3543.41" x2="7766.03" y2="3980.84" />
              <line class="fil3 str52" x1="7591.1" y1="3543.04" x2="7591.79" y2="3980.46" />
              <line class="fil3 str52" x1="7852.46" y1="3543.6" x2="7853.15" y2="3981.02" />
              <line class="fil3 str52" x1="7678.22" y1="3543.22" x2="7678.91" y2="3980.65" />
              <line class="fil3 str52" x1="7503.98" y1="3542.85" x2="7504.67" y2="3980.28" />
            </g>
          </g>
          <g>
            <polygon class="fil3 str54" points="16645.67,9890.72 17121.17,9890.72 17023,9748.24 16672.32,9748.24 " />
            <polygon id="1" class="fil2" points="16645.67,9890.72 17121.17,9890.72 17023,9748.24 16672.32,9748.24 " />
          </g>
          <g>
            <polygon class="fil19 str53" points="17258.03,19636.07 17258.41,19058.41 17695.84,19057.13 17695.45,19634.79 " />
            <g>
              <line class="fil3 str52" x1="17695.48" y1="19588.16" x2="17258.05" y2="19589.43" />
              <line class="fil3 str52" x1="17695.62" y1="19413.91" x2="17258.19" y2="19415.19" />
              <line class="fil3 str52" x1="17695.76" y1="19239.67" x2="17258.33" y2="19240.95" />
              <line class="fil3 str52" x1="17695.55" y1="19501.03" x2="17258.12" y2="19502.31" />
              <line class="fil3 str52" x1="17695.69" y1="19326.79" x2="17258.26" y2="19328.07" />
              <line class="fil3 str52" x1="17695.83" y1="19152.55" x2="17258.4" y2="19153.82" />
              <line class="fil3 str52" x1="17695.51" y1="19544.59" x2="17258.09" y2="19545.87" />
              <line class="fil3 str52" x1="17695.65" y1="19370.35" x2="17258.23" y2="19371.63" />
              <line class="fil3 str52" x1="17695.79" y1="19196.11" x2="17258.37" y2="19197.38" />
              <line class="fil3 str52" x1="17695.58" y1="19457.47" x2="17258.16" y2="19458.75" />
              <line class="fil3 str52" x1="17695.72" y1="19283.23" x2="17258.3" y2="19284.51" />
              <line class="fil3 str52" x1="17695.86" y1="19108.99" x2="17258.44" y2="19110.26" />
            </g>
          </g>
          <g>
            <polygon class="fil19 str52" points="4395.55,4411.96 4395.93,3834.31 4833.36,3833.02 4832.97,4410.69 " />
            <g>
              <line class="fil3 str52" x1="4833" y1="4364.05" x2="4395.57" y2="4365.32" />
              <line class="fil3 str52" x1="4833.14" y1="4189.81" x2="4395.71" y2="4191.08" />
              <line class="fil3 str52" x1="4833.28" y1="4015.57" x2="4395.85" y2="4016.84" />
              <line class="fil3 str52" x1="4833.07" y1="4276.93" x2="4395.64" y2="4278.2" />
              <line class="fil3 str52" x1="4833.21" y1="4102.69" x2="4395.78" y2="4103.96" />
              <line class="fil3 str52" x1="4833.35" y1="3928.45" x2="4395.93" y2="3929.72" />
              <line class="fil3 str52" x1="4833.03" y1="4320.49" x2="4395.61" y2="4321.76" />
              <line class="fil3 str52" x1="4833.18" y1="4146.25" x2="4395.75" y2="4147.52" />
              <line class="fil3 str52" x1="4833.32" y1="3972.01" x2="4395.89" y2="3973.28" />
              <line class="fil3 str52" x1="4833.1" y1="4233.37" x2="4395.68" y2="4234.64" />
              <line class="fil3 str52" x1="4833.25" y1="4059.13" x2="4395.82" y2="4060.4" />
              <line class="fil3 str52" x1="4833.39" y1="3884.89" x2="4395.96" y2="3886.16" />
            </g>
          </g>
          <line class="fil3 str55" x1="8081.88" y1="9748.24" x2="15670.11" y2="9748.24" />
          <polygon class="fil20" points="8886.89,7466.21 11812.83,7466.21 11722.98,7560.39 11722.98,9425.47 8064.06,9425.47 8064.06,8854.84 8886.89,8464.07 " />
          <rect class="fil20" x="8064.06" y="5887.88" width="861.94" height="2336.38" />
          <g>
            <polygon class="fil3 str56" points="8886.89,8224.27 8064.06,8224.27 8064.06,8854.84 8886.89,8464.07 " />
            <polygon id="1" class="fil2" points="8886.89,8224.27 8064.06,8224.27 8064.06,8854.84 8886.89,8464.07 " />
          </g>
          <g>
            <path class="fil9" d="M7939.26 7655.23l510.12 0 0 52.92 -510.12 0 -26.46 -26.46 26.46 -26.46zm-26.46 26.46l0 -26.46 26.46 0 -26.46 26.46zm0 147.97l0 -147.97 52.92 0 0 147.97 -26.46 26.46 -26.46 -26.46zm26.46 26.46l-26.46 0 0 -26.46 26.46 26.46zm510.12 0l-510.12 0 0 -52.92 510.12 0 26.46 26.46 -26.46 26.46zm26.46 -26.46l0 26.46 -26.46 0 26.46 -26.46zm0 -147.97l0 147.97 -52.92 0 0 -147.97 26.46 -26.46 26.46 26.46zm-26.46 -26.46l26.46 0 0 26.46 -26.46 -26.46z" />
            <polygon id="1" class="fil2" points="8449.38,7681.69 7939.26,7681.69 7939.26,7829.66 8449.38,7829.66 " />
          </g>
          <g>
            <polygon class="fil19 str57" points="8449.08,8045.14 8449.46,7467.49 8886.89,7466.21 8886.5,8043.87 " />
            <g>
              <line class="fil3 str58" x1="8886.53" y1="7997.23" x2="8449.1" y2="7998.51" />
              <line class="fil3 str58" x1="8886.67" y1="7822.99" x2="8449.24" y2="7824.27" />
              <line class="fil3 str58" x1="8886.81" y1="7648.75" x2="8449.38" y2="7650.02" />
              <line class="fil3 str58" x1="8886.6" y1="7910.11" x2="8449.17" y2="7911.39" />
              <line class="fil3 str58" x1="8886.74" y1="7735.87" x2="8449.31" y2="7737.14" />
              <line class="fil3 str58" x1="8886.88" y1="7561.63" x2="8449.45" y2="7562.9" />
              <line class="fil3 str58" x1="8886.56" y1="7953.67" x2="8449.14" y2="7954.95" />
              <line class="fil3 str58" x1="8886.7" y1="7779.43" x2="8449.28" y2="7780.7" />
              <line class="fil3 str58" x1="8886.84" y1="7605.19" x2="8449.42" y2="7606.46" />
              <line class="fil3 str58" x1="8886.63" y1="7866.55" x2="8449.21" y2="7867.83" />
              <line class="fil3 str58" x1="8886.77" y1="7692.31" x2="8449.35" y2="7693.58" />
              <line class="fil3 str58" x1="8886.92" y1="7518.07" x2="8449.49" y2="7519.34" />
            </g>
          </g>
          <line class="fil3 str55" x1="8064.06" y1="9425.47" x2="15670.11" y2="9425.47" />
          <g>
            <polygon class="fil3 str59" points="16885.86,9162.27 16831.93,9386.6 17150.13,9387.59 17247.83,9192.19 17529.17,8937.99 18147.92,8290.92 16900.51,7087.78 " />
            <polygon id="1" class="fil2" points="16885.86,9162.27 16831.93,9386.6 17150.13,9387.59 17247.83,9192.19 17529.17,8937.99 18147.92,8290.92 16900.51,7087.78 " />
          </g>

          <g id="oficiais1">
            <!--Estacionamento oficiais 1-->
            <rect class="fil0" x="8880" y="7490" width='2700' height='1840'></rect>

            <rect class="fil12" x="8880" y="7490" width="119.39" height="1900" />
            <path class="fil12" d="M9080 9310.87l1124.25 0 0 97.46 -1324.25 0 0 -97.46zm1450.03 0l1806.08 0 0 97.46 -2106.08 0 0 -97.46z" />


            <line class="fil1 str5" x1="9100" y1="9400" x2="9100" y2="9000" />
            <line class="fil1 str5" x1="9250" y1="9400" x2="9250" y2="9000" />
            <line class="fil1 str5" x1="9400" y1="9400" x2="9400" y2="9000" />
            <line class="fil1 str5" x1="9550" y1="9400" x2="9550" y2="9000" />
            <line class="fil1 str5" x1="9700" y1="9400" x2="9700" y2="9000" />
            <line class="fil1 str5" x1="9850" y1="9400" x2="9850" y2="9000" />
            <line class="fil1 str5" x1="10000" y1="9400" x2="10000" y2="9000" />
            <line class="fil1 str5" x1="10150" y1="9400" x2="10150" y2="9000" />
            <line class="fil1 str5" x1="10300" y1="9400" x2="10300" y2="9000" />
            <line class="fil1 str5" x1="10450" y1="9400" x2="10450" y2="9000" />
            <line class="fil1 str5" x1="10600" y1="9400" x2="10600" y2="9000" />
            <line class="fil1 str5" x1="10750" y1="9400" x2="10750" y2="9000" />
            <line class="fil1 str5" x1="10900" y1="9400" x2="10900" y2="9000" />
            <line class="fil1 str5" x1="11050" y1="9400" x2="11050" y2="9000" />

            <line class="fil1 str5" x1="9000" y1="9000" x2="11050" y2="9000" />

            <line class="fil1 str5" x1="9100" y1="7500" x2="9100" y2="7850" />
            <line class="fil1 str5" x1="9250" y1="7500" x2="9250" y2="7850" />
            <line class="fil1 str5" x1="9400" y1="7500" x2="9400" y2="7850" />
            <line class="fil1 str5" x1="9550" y1="7500" x2="9550" y2="7850" />
            <line class="fil1 str5" x1="9700" y1="7500" x2="9700" y2="7850" />
            <line class="fil1 str5" x1="9850" y1="7500" x2="9850" y2="7850" />
            <line class="fil1 str5" x1="10000" y1="7500" x2="10000" y2="7850" />
            <line class="fil1 str5" x1="10150" y1="7500" x2="10150" y2="7850" />
            <line class="fil1 str5" x1="10300" y1="7500" x2="10300" y2="7850" />
            <line class="fil1 str5" x1="10450" y1="7500" x2="10450" y2="7850" />
            <line class="fil1 str5" x1="10600" y1="7500" x2="10600" y2="7850" />
            <line class="fil1 str5" x1="10750" y1="7500" x2="10750" y2="7850" />
            <line class="fil1 str5" x1="10900" y1="7500" x2="10900" y2="7850" />
            <line class="fil1 str5" x1="11050" y1="7500" x2="11050" y2="7850" />
            <line class="fil1 str5" x1="11200" y1="7500" x2="11200" y2="7850" />
            <line class="fil1 str5" x1="11350" y1="7500" x2="11350" y2="7850" />

            <line class="fil1 str5" x1="9000" y1="7850" x2="11350" y2="7850" />

            <line class="fil1 str5" x1="9400" y1="8250" x2="10900" y2="8250" />
            <line class="fil1 str5" x1="9400" y1="8250" x2="9400" y2="8600" />
            <line class="fil1 str5" x1="9550" y1="8250" x2="9550" y2="8600" />
            <line class="fil1 str5" x1="9700" y1="8250" x2="9700" y2="8600" />

            <line class="fil1 str5" x1="9850" y1="8250" x2="9850" y2="8600" />
            <line class="fil1 str5" x1="10000" y1="8250" x2="10000" y2="8600" />
            <line class="fil1 str5" x1="10150" y1="8250" x2="10150" y2="8600" />
            <line class="fil1 str5" x1="10300" y1="8250" x2="10300" y2="8600" />
            <line class="fil1 str5" x1="10450" y1="8250" x2="10450" y2="8600" />
            <line class="fil1 str5" x1="10600" y1="8250" x2="10600" y2="8600" />
            <line class="fil1 str5" x1="10750" y1="8250" x2="10750" y2="8600" />
            <line class="fil1 str5" x1="10900" y1="8250" x2="10900" y2="8600" />

            <line class="fil1 str5" x1="9400" y1="8600" x2="10900" y2="8600" />





            <!--
            <rect class="fil12" x="9300" y="7500" width="119.39" height="1800" />
            <path class="fil12" d="M7273.52 6969.76c78.06,18.98 135.7,73.96 132.24,236.85l0 11541.87c3.18,109.77 -44.12,181.33 -132.24,222.04l0 -12000.76z" />
            <rect class="fil12" x="6031.69" y="6966.37" width="119.39" height="12007.99" />
            -->


            <!--<line class="fil1 str5" x1="9100.85" y1="9386.11" x2="8950" y2="9100.85" />
            <line class="fil1 str5" x1="8950" y1="9386.11" x2="8950" y2="9000"/>

            <line class="fil1 str5" x1="9000" y1="9386.11" x2="9000" y2="9000" />
            <line class="fil1 str5" x1="9000.38" y1="9386.11" x2="8900" y2="9000" />
            <line class="fil1 str5" x1="7288.13" y1="9386.11" x2="7286.99" y2="9000" />-->
          </g>
          <g id="rampa">
            <polygon class="fil12" data-name="Rampa" points="12102.91,7390.6 11654.99,7390.46 11425.69,7643.94 11425.69,9408.81 11665.91,9408.81 11665.91,7887.05 12102.91,7887.05 " />//rampa
          </g>
          <g>
            <polygon class="fil3 str60" points="18969.66,9748.24 17685.94,9748.24 17685.94,9890.72 18915.26,9890.72 " />
            <polygon id="1" class="fil2" points="18969.66,9748.24 17685.94,9748.24 17685.94,9890.72 18915.26,9890.72 " />
          </g>

          <polygon class="fil3 str61" points="23404.73,10925.35 23821.69,10925.35 23821.69,10322.55 23404.73,10322.55 23404.73,9579.81 25288.75,9579.81 25288.75,10322.55 24469.42,10322.55 24469.42,10925.35 24469.42,11757.26 23404.73,11757.26 23404.73,10925.35 23403.5,11428.72 23285.7,11428.2 23287.12,10657.04 23553.41,10658.95 23553.1,10925.12 " />
          <g id="escolinha">
            <polygon data-name="Escolinha" id="1" class="fil22" points="23404.73,10925.35 23821.69,10925.35 23821.69,10322.55 23404.73,10322.55 23404.73,9579.81 25288.75,9579.81 25288.75,10322.55 24469.42,10322.55 24469.42,10925.35 24469.42,11757.26 23404.73,11757.26 23404.73,10925.35 23403.5,11428.72 23285.7,11428.2 23287.12,10657.04 23553.41,10658.95 23553.1,10925.12 " />
          </g>

          <!---->
          <!--
          //estacgrandao div
          <rect class="fil12" x="4880.95" y="6966.37" width="119.39" height="12007.99" />
          <path class="fil12" d="M7273.52 6969.76c78.06,18.98 135.7,73.96 132.24,236.85l0 11541.87c3.18,109.77 -44.12,181.33 -132.24,222.04l0 -12000.76z" />
          <rect class="fil12" x="6031.69" y="6966.37" width="119.39" height="12007.99" />
          -->
          <polygon class="fil20" points="13790.01,7787.12 11665.91,7787.12 11665.91,9408.81 12333.53,9408.81 12333.51,9100.5 11790.01,9100.5 " />
          <g>
            <path class="fil24" d="M13297.69 9283.1l-857.6 0 0 -181.48 857.6 0 103.62 90.74 -103.62 90.74zm0 -181.48l103.62 0 0 90.74 -103.62 -90.74zm-103.62 811.61l0 -720.87 207.24 0 0 720.87 -103.62 90.74 -103.62 -90.74zm207.24 0l0 90.74 -103.62 0 103.62 -90.74zm-961.22 -90.74l857.6 0 0 181.48 -857.6 0 -103.62 -90.74 103.62 -90.74zm0 181.48l-103.62 0 0 -90.74 103.62 90.74zm103.62 -811.61l0 720.87 -207.24 0 0 -720.87 103.62 -90.74 103.62 90.74zm-207.24 0l0 -90.74 103.62 0 -103.62 90.74z" />
            <polygon id="1" class="fil15" points="12440.09,9192.36 13297.69,9192.36 13297.69,9913.23 12440.09,9913.23 " />
          </g>

          <path class="fil24" d="M16767.14 7989.63l-2510.43 0 0 -205.16 2510.43 0 103.62 102.58 -103.62 102.58zm0 -205.16l103.62 0 0 102.58 -103.62 -102.58zm-103.62 1314.19l0 -1211.61 207.24 0 0 1211.61 -103.62 102.58 -103.62 -102.58zm207.24 0l0 102.58 -103.62 0 103.62 -102.58zm-2614.05 -102.58l2510.43 0 0 205.16 -2510.43 0 -103.62 -102.58 103.62 -102.58zm-103.62 102.58l0 -102.58 103.62 0 -103.62 102.58zm0 1.84l0 -1.84 207.24 0 0 1.84 -103.62 102.58 -103.62 -102.58zm207.24 0l0 102.58 -103.62 0 103.62 -102.58zm-2463.74 -102.58l2360.12 0 0 205.16 -2360.12 0 -103.62 -102.58 103.62 -102.58zm0 205.16l-103.62 0 0 -102.58 103.62 102.58zm103.62 -1316.03l0 1213.45 -207.24 0 0 -1213.45 103.62 -102.58 103.62 102.58zm-207.24 0l0 -102.58 103.62 0 -103.62 102.58zm2463.74 102.58l-2360.12 0 0 -205.16 2360.12 0 0 0 0 205.16z" />
          <g id="alasul2" data-name="Ala Sul">
            <polygon id="1" class="fil25" points="14256.71,7887.05 16767.14,7887.05 16767.14,9098.66 14256.71,9098.66 14256.71,9100.5 11896.59,9100.5 11896.59,7887.05 " />
          </g>

          <path class="fil24" d="M8981.51 6074.57l2510.44 0 0 205.16 -2510.44 0 -103.62 -102.58 103.62 -102.58zm-103.62 102.58l0 -102.58 103.62 0 -103.62 102.58zm0 1211.62l0 -1211.62 207.24 0 0 1211.62 -103.62 102.58 -103.62 -102.58zm103.62 102.58l-103.62 0 0 -102.58 103.62 102.58zm2510.43 0l-2510.43 0 0 -205.16 2510.43 0 103.62 102.58 -103.62 102.58zm0 -205.16l103.62 0 0 102.58 -103.62 -102.58zm-103.62 104.4l0 -1.82 207.24 0 0 1.82 -103.62 102.58 -103.62 -102.58zm103.62 102.58l-103.62 0 0 -102.58 103.62 102.58zm2360.13 0l-2360.13 0 0 -205.16 2360.13 0 103.62 102.58 -103.62 102.58zm103.62 -102.58l0 102.58 -103.62 0 103.62 -102.58zm0 -1213.43l0 1213.43 -207.24 0 0 -1213.43 103.62 -102.58 103.62 102.58zm-103.62 -102.58l103.62 0 0 102.58 -103.62 -102.58zm-2360.12 0l2360.12 0 0 205.16 -2360.12 0 -103.62 -102.58 103.62 -102.58zm0 205.16l-103.62 0 0 -102.58 103.62 102.58zm103.62 -102.59l0 0.01 -207.24 0 0 -0.01 103.62 -102.58 103.62 102.58zm-103.62 -102.58l103.62 0 0 102.58 -103.62 -102.58z" />
          <g id="alanorte2" data-name="Ala Norte">
            <polygon id="1" class="fil25" points="11491.95,6177.15 8981.51,6177.15 8981.51,7388.77 11491.94,7388.77 11491.94,7390.59 13852.07,7390.59 13852.07,6177.16 11491.95,6177.16 " />
          </g>

          <g id="alasul">
            <rect class="fil15" x="14256.71" y="7887.04" width="2510.44" height="1211.61" />
          </g> <!-- Parte Branca Ala Sul-->

          <g id="alanorte">
            <rect class="fil15" x="8981.51" y="6178.05" width="2510.44" height="1211.61" />
          </g> <!-- Parte Branca Ala Norte-->
          <!--<rect class="fil15" x="8981.51" y="6178.05" width="2510.44" height="1211.61" />-->



          <path class="fil24" d="M13516.4 7214.43l-1324.92 0 0 -205.16 1324.92 0 103.62 102.58 -103.62 102.58zm0 -205.16l103.62 0 0 102.58 -103.62 -102.58zm-103.62 1232.05l0 -1129.47 207.24 0 0 1129.47 -103.62 102.58 -103.62 -102.58zm207.24 0l0 102.58 -103.62 0 103.62 -102.58zm-1428.54 -102.58l1324.92 0 0 205.16 -1324.92 0 -103.62 -102.58 103.62 -102.58zm0 205.16l-103.62 0 0 -102.58 103.62 102.58zm103.62 -1232.05l0 1129.47 -207.24 0 0 -1129.47 103.62 -102.58 103.62 102.58zm-207.24 0l0 -102.58 103.62 0 -103.62 102.58z" />
          <g id="prediocaff" data-name="Prédio CAFF">
            <polygon id="1" class="fil15" points="12191.48,7111.85 13516.4,7111.85 13516.4,8241.32 12191.48,8241.32 " />
          </g>//caff
          <!--
        <g>
          <polygon class="fil3 str64" points="19157.75,15854.71 19998.93,15854.71 19998.93,17175.57 19157.75,17175.57 " />
        </g>
        <g>
          <polygon class="fil3 str65" points="20355.42,15854.71 20700.42,15854.71 20700.42,17175.57 20355.42,17175.57 " />
        </g>
        -->
          <!--<text x="12762.19" y="8769.38" class="fnt2">ALA SUL</text>
          <text x="12242.84" y="6700.86" class="fnt2">ALA NORTE</text>-->
          <text x="15200" y="8600" class="fnt4">ALA SUL</text>
          <text x="9600" y="6900" class="fnt4">ALA NORTE</text>

          <g id="est1vistext">
            <text x="19430.92" y="8325.23" class="fil25 fnt3">ESTACIONAMENTO 1:</text>
            <text x="19730.92" y="8492.68" class="fil25 fnt3">VISITANTES</text>
          </g>
          <g id="est2funccad">
            <text x="6900" y="3080.23" class="fil25 fnt3">ESTACIONAMENTO 2:</text>
            <text x="6570.92" y="3240.68" class="fil25 fnt3">FUNCIONÁRIOS CADASTRADOS</text>
          </g>

        </g>
        <g id="est3funccad">
          <text x="5000.92" y="13000.23" class="fil25 fnt3">ESTACIONAMENTO 3:</text>
          <text x="4570.92" y="13167.68" class="fil25 fnt3">FUNCIONÁRIOS CADASTRADOS</text>
        </g>

        <g>
          <text x="9400" y="8400" class="fil25 fnt3">ESTACIONAMENTO 4:</text>
          <text x="9800" y="8600" class="fil25 fnt3">OFICIAIS</text>
        </g>

      </g>
      <g id="est6funccad">
        <text x="17000.92" y="16500.23" class="fil25 fnt3">ESTACIONAMENTO 6:</text>
        <text x="16650.92" y="16667.68" class="fil25 fnt3">FUNCIONÁRIOS CADASTRADOS</text>
      </g>

      <text x="23610.51" y="10000.02" class="fil26 fnt3">ESCOLA</text>
      <text x="24288.73" y="10000.02" class="fil26 fnt3"> DO CAFF</text>
      <g transform="matrix(2.64845E-14 -1 1 2.64845E-14 10041.3 29886.4)">
        <text x="14850" y="10500" class="fil27 fnt4">MANUTENÇÃO</text>
      </g>

      <path class="fil24" d="M15571.67 10079.15l-5281.85 0 0 -205.1 5281.85 0 103.62 102.55 -103.62 102.55zm0 -205.1l103.62 0 0 102.55 -103.62 -102.55zm-103.62 8916.66l0 -8814.11 207.24 0 0 8814.11 -103.62 102.55 -103.62 -102.55zm207.24 0l0 102.55 -103.62 0 103.62 -102.55zm-5385.47 -102.55l5281.85 0 0 205.1 -5281.85 0 -103.62 -102.55 103.62 -102.55zm0 205.1l-103.62 0 0 -102.55 103.62 102.55zm103.62 -8916.66l0 8814.11 -207.24 0 0 -8814.11 103.62 -102.55 103.62 102.55zm-207.24 0l0 -102.55 103.62 0 -103.62 102.55z" />
      <g id="secretariaeducacao" data-name="Secretaria da educação">
        <polygon class="fil15" points="15546.295090390226,15216.295090390226 10323.704909609774,15216.295090390226 10323.704909609773,9983.704909609774 15556.295090390226,9983.704909609773" />
      </g>

      <line class="str67" x1="10310" y1="13523" x2="15560" y2="13523" />

      <g id="orquestra">
        <polygon class="fil15" data-name="Orquestra Sinfônica de Porto alegre" points="15555.295090390226,18766.295090390224 10322.704909609774,18766.295090390227 10322.704909609773,13533.704909609774 15555.295090390226,13533.704909609773" />
        <!--<polygon class="fil15" data-name="Orquesta Sinfônica de Porto Alegre" points="15553.295090390226,18766.295090390224 10320.704909609774,18766.295090390227 10320.704909609773,13533.704909609774 15553.295090390226,13533.704909609773" />-->
      </g>


      <!--
          <g>
          <path class="fil24" d="M15571.67 10079.15l-5281.85 0 0 -205.1 5281.85 0 103.62 102.55 -103.62 102.55zm0 -205.1l103.62 0 0 102.55 -103.62 -102.55zm-103.62 8916.66l0 -8814.11 207.24 0 0 8814.11 -103.62 102.55 -103.62 -102.55zm207.24 0l0 102.55 -103.62 0 103.62 -102.55zm-5385.47 -102.55l5281.85 0 0 205.1 -5281.85 0 -103.62 -102.55 103.62 -102.55zm0 205.1l-103.62 0 0 -102.55 103.62 102.55zm103.62 -8916.66l0 8814.11 -207.24 0 0 -8814.11 103.62 -102.55 103.62 102.55zm-207.24 0l0 -102.55 103.62 0 -103.62 102.55z"/>
          <polygon id="1" class="fil15" points="10289.82,9976.6 15571.67,9976.6 15571.67,18790.71 10289.82,18790.71 "/>
          </g>//Orquestra e Secretaria 
        
          
        Linhas
        <rect class="fil28" x="10727.3" y="9976.6" width="44.41" height="8814.11" />
        <rect class="fil28" x="11597.78" y="9976.6" width="44.41" height="8814.11" />
        <rect class="fil28" x="12468.25" y="9976.6" width="44.41" height="8814.11" />
        <rect class="fil28" x="13338.72" y="9976.6" width="44.41" height="8814.11" />
        <rect class="fil28" x="14209.19" y="9976.6" width="44.41" height="8814.11" />
        <rect class="fil28" x="15079.67" y="9976.6" width="44.41" height="8814.11" />
        -->

      <g>
        <text x="12500" y="10200" class="fnt4">SUBSOLO</text>
        <text x="10400" y="10450" class="fnt3">< ESTACIONAMENTO 5</text>
            <text x="10900" y="10650" class="fnt3"> OFICIAIS</text>
            <text x="13700" y="10450" class="fnt3"> ESTACIONAMENTO 7 > </text>
            <text x="14000" y="10650" class="fnt3">FUNCIONÁRIOS</text>
            <text x="14000" y="10850" class="fnt3">CADASTRADOS</text>

      </g>

      <g id="sectext">
        <text x="11201.64" y="11750.52" class="fnt6">SECRETARIA DA EDUCAÇÃO</text>
        <text x="12501.64" y="12016.97" class="fnt6">SEDUC</text>
      </g>
      <text x="8258.95" y="11294.32" class="fil15 fnt2">DEFESA CIVIL</text>
      <text x="8318.95" y="11461.77" class="fil15 fnt2">DO RS</text>
      <g id="rampa" transform="matrix(2.64845E-14 -1 1 2.64845E-14 1079.58 23905.6)">
        <text x="14700" y="10510" class="fil15 fnt7">RAMPA DE DESCARGA</text>
      </g>
      <text x="11317.47" y="16250.55" class="fnt6">ORQUESTRA SINFÔNICA </text>
      <text x="11717.47" y="16500.55" class="fnt6">DE PORTO ALEGRE</text>
      <text x="12617.47" y="16750.55" class="fnt6">OSPA</text>
      <line class="fil3 str66" x1="8876.22" y1="11414.84" x2="9120.3" y2="11414.84" />
      <polyline class="fil3 str66" points="9057.17,11360.83 9120.3,11414.84 9057.17,11468.84 " />
      <text x="12399.36" y="7789.15" class="fil29 fnt9">CAFF</text>

      <!--
          <rect class="fil12" x="17239.86" y="13961.55" width="119.39" height="4912.27" />
          <rect class="fil12" x="18291.5" y="13961.55" width="119.39" height="4912.27" /> // estacionamento linhas
        -->
    </svg>


    <!-- CRIAÇÃO DO MODAL -->
  </div>
  <div id="modal-alasul" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Ala Sul</h3>
    </div>
  </div>

  <div id="modal-alanorte" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Ala Norte</h3>
    </div>
  </div>

  <div id="modal-defesacivil" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Defesa civil do RS</h3>
    </div>
  </div>

  <div id="modal-manutencao" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Manutenção</h3>
    </div>
  </div>

  <div id="modal-escolinha" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Escola do CAFF</h3>
    </div>
  </div>

  <div id="modal-rampa" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Rampa de descarga</h3>
    </div>
  </div>

  <div id="modal-secretariaeducacao" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Secretaria da educação </br>SEDUC</h3>
    </div>
  </div>

  <div id="modal-orquestra" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Orquestra Sinfônica de Porto alegre </br> OSPA</h3>
    </div>
  </div>

  <div id="modal-prediocaff" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h4>Centro Administrativo Fernando Ferrari</h4>
      <p>O prédio do CAFF concentra diversas Secretarias e outros órgãos da administração pública estadual.</p>
    </div>
  </div>

  <div id="modal-estvist1" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Estacionamento 1: </br> Visitantes</h3>
    </div>
  </div>

  <div id="modal-estaccima" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Estacionamento 2: </br> Funcionários Cadastrados</h3>
    </div>
  </div>

  <div id="modal-estacesquerda" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Estacionamento 3: </br> Funcionários Cadastrados</h3>
    </div>
  </div>


  <div id="modal-estacdireita" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Estacionamento 6: </br> Funcionários Cadastrados</h3>
    </div>
  </div>

  <div id="modal-oficiais1" class="modal-container">
    <div class="modal">
      <button class="fechar">X</button>
      <h3>Estacionamento 1: </br> Oficiais</h3>
    </div>
  </div>


  <script>
    /*
    function iniciaModal(modalID) {

      const modal = document.getElementById(modalID);

      modal.classList.add('mostrar');
      modal.addEventListener('click', (evento) => {
        console.log(evento.target);
      });
    }*/


    function iniciaModal(modalID) {
      if (localStorage.fechaModal !== modalID) {

        const modal = document.getElementById(modalID);

        if (modal) {
          modal.classList.add('mostrar');
          modal.addEventListener('click', (evento) => {
            if (evento.target.id == modalID || evento.target.className == 'fechar') {
              modal.classList.remove('mostrar'); // remove a classe mostrar quando é clicado na classe fechar
              localStorage.fechaModal = modalID; // Se o usuário clicar em fechar o modal, será registrado na máquina do usuário para não abrir novamente
            }
          });
        }
      }
    }

    const alasul = document.querySelector('#alasul');
    const alanorte = document.querySelector('#alanorte');
    const defesacivil = document.querySelector('#defesacivil');
    const manutencao = document.querySelector('#manutencao');
    const escolinha = document.querySelector('#escolinha');
    const rampa = document.querySelector('#rampa');
    const orquestra = document.querySelector('#orquestra');
    const prediocaff = document.querySelector('#prediocaff');
    const estacvisit1 = document.querySelector('#estacvisit1');
    const estvistext = document.querySelector('#estvistext');
    const estacesquerda = document.querySelector('#estacesquerda');
    const estacdireita = document.querySelector('#estacdireita');
    const estaccima = document.querySelector('#estaccima');
    const oficiais1 = document.querySelector('#oficiais1');
    const teste = document.querySelector('#sectext'); // mostrar informações quando passar o mouse no texto da imagem

    alasul.addEventListener('mousemove', () => iniciaModal('modal-alasul')); // adiciona um evento como passar o mouse
    alanorte.addEventListener('mousemove', () => iniciaModal('modal-alanorte'));

    manutencao.addEventListener('mousemove', () => iniciaModal('modal-manutencao'));
    escolinha.addEventListener('mousemove', () => iniciaModal('modal-escolinha'));
    rampa.addEventListener('mousemove', () => iniciaModal('modal-rampa'));

    secretariaeducacao.addEventListener('mousemove', () => iniciaModal('modal-secretariaeducacao'));
    orquestra.addEventListener('mousemove', () => iniciaModal('modal-orquestra'));

    defesacivil.addEventListener('mousemove', () => iniciaModal('modal-defesacivil'));
    prediocaff.addEventListener('mousemove', () => iniciaModal('modal-prediocaff'));

    estacvisit1.addEventListener('mousemove', () => iniciaModal('modal-estvist1'));
    estacesquerda.addEventListener('mousemove', () => iniciaModal("modal-estacesquerda"));
    estacdireita.addEventListener('mousemove', () => iniciaModal("modal-estacdireita"));
    estaccima.addEventListener('mousemove', () => iniciaModal("modal-estaccima"));
    oficiais1.addEventListener('mousemove', () => iniciaModal("modal-oficiais1"));
  </script>
</body>

</html>