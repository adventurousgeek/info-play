<!-- Landing Section-->
<section class="landing-section">
    <canvas id="markets"></canvas>
    <canvas id="beam"></canvas>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-container">
                    <div class="content-block text-center">
                        <h1>Think Like Markets</h1>
                        <h2>Blockchain. Intelligent. Finance.</h2>
                        <h2>Mastering Markets with Artificial Intelligence.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="maze-container">
        <svg id="top-maze"
             x="0px" y="0px"
             viewBox="0 0 600 600"
             style="enable-background:new 0 0 600 600;"
             xml:space="preserve">

           <path class="st0"
                 d="M555,352.4l42,8.5c-11.9,57.6-40.4,110.1-82.5,151.9c-42.1,41.8-95,70.2-153,82.1l-8.7-41.7 c49.8-10.2,95.2-34.6,131.3-70.5S544.8,401.8,555,352.4z"/>
            <path class="st0"
                  d="M322.7,125.1l5.6-42.2c53.9,7.1,102.2,33.2,137.2,73.3l31.5-24.5c-4.1-4.7-8.4-9.3-12.9-13.8 C447,81,400.2,56.4,348.9,46.7l8-41.8c59.8,11.3,114.3,40,157.5,82.9c43.3,43,72.1,97,83.4,156.4l-29.5,5.5l-51.9,13.1 c2.1,12.1,3.1,24.4,3.1,36.8c0,74.7-37.9,143.5-101.3,183.9l-23.2-35.8c51.1-32.6,81.6-88,81.6-148.2c0-19.9-3.3-39.5-9.9-58.1 l35.4-12.3l42.7-16.4c-6-16.5-13.6-32.3-22.9-47.3l-59.6,35.9c0-0.1,0-0.2-0.1-0.4l-11.5,6.9C422.8,162.4,376.1,132.1,322.7,125.1z"/>
            <path class="st0"
                  d="M184.2,113.1l22.4,36.3c-29.5,17.9-52.9,43.7-67.8,74.6l-38.7-18.3C118.6,167.3,147.7,135.2,184.2,113.1z"/>
            <path class="st0"
                  d="M375,505c-24.3,8.8-49.8,13.3-75.8,13.3c-44.2,0-86.8-12.9-123.3-37.4l15.6-23l15.8-25.1l11.2-18.4 c-36.6-25.7-59.5-68-59.5-114c0-77,63.2-139.6,140.8-139.6c77.6,0,140.8,62.6,140.8,139.6c0,71.1-53.7,130.7-124.8,138.7l-4.8-42.3 c49.4-5.6,86.7-47,86.7-96.5c0-53.5-43.9-97.1-97.9-97.1c-54,0-97.9,43.6-97.9,97.1c0,41.2,26.3,78,65.5,91.7l-4.9,13.9l-0.1,0.4 l-19.9,60.3c18.1,6,37.2,9.1,56.6,9.1c21,0,41.5-3.6,61.1-10.7L375,505z"/>
            <path class="st0"
                  d="M247.4,553.3l-8.6,41.7C121.1,571.1,28.7,480.5,3.4,364l41.9-9c7.2,33.2,20.8,64,39.5,91l26.5-24.2l3.1-3 c-23.2-35.3-35.7-76.6-35.7-119.3c0-16.6,1.9-33.2,5.6-49.3l41.8,9.6c-3,12.9-4.5,26.3-4.5,39.7c0,44.4,16.7,86.7,47,119.3 l-60.5,56.2C144.4,514.3,192.7,542.2,247.4,553.3z"/>
            <path class="st0"
                  d="M44.8,248.3l-42-8.5C15,180.6,44.7,126.9,88.6,84.6c44-42.4,99.1-70.3,159.3-80.6l4.1,23.8l22.3,97.5 c-11.5,1.6-22.9,4.3-33.9,8.1L217,55.5c-36.7,12.2-70.3,32.4-98.5,59.6C80.8,151.5,55.3,197.5,44.8,248.3z"/>
       </svg>
        <svg id="middle-maze"
             x="0px" y="0px"
             viewBox="0 0 600 600"
             style="enable-background:new 0 0 600 600;"
             xml:space="preserve">

                                   <path class="st0"
                                         d="M554,353.4l42,8.5c-11.9,57.6-40.4,110.1-82.5,151.9c-42.1,41.8-95,70.2-153,82.1l-8.7-41.7 c49.8-10.2,95.2-34.6,131.3-70.5S543.8,402.8,554,353.4z"/>
            <path class="st0"
                  d="M321.7,126.1l5.6-42.2c53.9,7.1,102.2,33.2,137.2,73.3l31.5-24.5c-4.1-4.7-8.4-9.3-12.9-13.8 C446,82,399.2,57.4,347.9,47.7l8-41.8c59.8,11.3,114.3,40,157.5,82.9c43.3,43,72.1,97,83.4,156.4l-29.5,5.5l-51.9,13.1 c2.1,12.1,3.1,24.4,3.1,36.8c0,74.7-37.9,143.5-101.3,183.9l-23.2-35.8c51.1-32.6,81.6-88,81.6-148.2c0-19.9-3.3-39.5-9.9-58.1 l35.4-12.3l42.7-16.4c-6-16.5-13.6-32.3-22.9-47.3l-59.6,35.9c0-0.1,0-0.2-0.1-0.4l-11.5,6.9C421.8,163.4,375.1,133.1,321.7,126.1z"/>
            <path class="st0"
                  d="M183.2,114.1l22.4,36.3c-29.5,17.9-52.9,43.7-67.8,74.6l-38.7-18.3C117.6,168.3,146.7,136.2,183.2,114.1z"/>
            <path class="st0"
                  d="M374,506c-24.3,8.8-49.8,13.3-75.8,13.3c-44.2,0-86.8-12.9-123.3-37.4l15.6-23l15.8-25.1l11.2-18.4 c-36.6-25.7-59.5-68-59.5-114c0-77,63.2-139.6,140.8-139.6c77.6,0,140.8,62.6,140.8,139.6c0,71.1-53.7,130.7-124.8,138.7l-4.8-42.3 c49.4-5.6,86.7-47,86.7-96.5c0-53.5-43.9-97.1-97.9-97.1c-54,0-97.9,43.6-97.9,97.1c0,41.2,26.3,78,65.5,91.7l-4.9,13.9l-0.1,0.4 l-19.9,60.3c18.1,6,37.2,9.1,56.6,9.1c21,0,41.5-3.6,61.1-10.7L374,506z"/>
            <path class="st0"
                  d="M246.4,554.3l-8.6,41.7C120.1,572.1,27.7,481.5,2.4,365l41.9-9c7.2,33.2,20.8,64,39.5,91l26.5-24.2l3.1-3 c-23.2-35.3-35.7-76.6-35.7-119.3c0-16.6,1.9-33.2,5.6-49.3l41.8,9.6c-3,12.9-4.5,26.3-4.5,39.7c0,44.4,16.7,86.7,47,119.3 l-60.5,56.2C143.4,515.3,191.7,543.2,246.4,554.3z"/>
            <path class="st0"
                  d="M43.8,249.3l-42-8.5C14,181.6,43.7,127.9,87.6,85.6c44-42.4,99.1-70.3,159.3-80.6l4.1,23.8l22.3,97.5 c-11.5,1.6-22.9,4.3-33.9,8.1L216,56.5c-36.7,12.2-70.3,32.4-98.5,59.6C79.8,152.5,54.3,198.5,43.8,249.3z"/>
                               </svg>
        <svg id="bottom-maze"
             x="0px" y="0px"
             viewBox="0 0 600 600"
             style="enable-background:new 0 0 600 600;"
             xml:space="preserve">

                                   <path class="st0"
                                         d="M555,349.4l42,8.5c-11.9,57.6-40.4,110.1-82.5,151.9c-42.1,41.8-95,70.2-153,82.1l-8.7-41.7 c49.8-10.2,95.2-34.6,131.3-70.5S544.8,398.8,555,349.4z"/>
            <path class="st0"
                  d="M322.7,122.1l5.6-42.2c53.9,7.1,102.2,33.2,137.2,73.3l31.5-24.5c-4.1-4.7-8.4-9.3-12.9-13.8 C447,78,400.2,53.4,348.9,43.7l8-41.8c59.8,11.3,114.3,40,157.5,82.9c43.3,43,72.1,97,83.4,156.4l-29.5,5.5l-51.9,13.1 c2.1,12.1,3.1,24.4,3.1,36.8c0,74.7-37.9,143.5-101.3,183.9l-23.2-35.8c51.1-32.6,81.6-88,81.6-148.2c0-19.9-3.3-39.5-9.9-58.1 l35.4-12.3l42.7-16.4c-6-16.5-13.6-32.3-22.9-47.3l-59.6,35.9c0-0.1,0-0.2-0.1-0.4l-11.5,6.9C422.8,159.4,376.1,129.1,322.7,122.1z"/>
            <path class="st0"
                  d="M184.2,110.1l22.4,36.3c-29.5,17.9-52.9,43.7-67.8,74.6l-38.7-18.3C118.6,164.3,147.7,132.2,184.2,110.1z"/>
            <path class="st0"
                  d="M375,502c-24.3,8.8-49.8,13.3-75.8,13.3c-44.2,0-86.8-12.9-123.3-37.4l15.6-23l15.8-25.1l11.2-18.4 c-36.6-25.7-59.5-68-59.5-114c0-77,63.2-139.6,140.8-139.6c77.6,0,140.8,62.6,140.8,139.6c0,71.1-53.7,130.7-124.8,138.7l-4.8-42.3 c49.4-5.6,86.7-47,86.7-96.5c0-53.5-43.9-97.1-97.9-97.1c-54,0-97.9,43.6-97.9,97.1c0,41.2,26.3,78,65.5,91.7l-4.9,13.9l-0.1,0.4 l-19.9,60.3c18.1,6,37.2,9.1,56.6,9.1c21,0,41.5-3.6,61.1-10.7L375,502z"/>
            <path class="st0"
                  d="M247.4,550.3l-8.6,41.7C121.1,568.1,28.7,477.5,3.4,361l41.9-9c7.2,33.2,20.8,64,39.5,91l26.5-24.2l3.1-3 c-23.2-35.3-35.7-76.6-35.7-119.3c0-16.6,1.9-33.2,5.6-49.3l41.8,9.6c-3,12.9-4.5,26.3-4.5,39.7c0,44.4,16.7,86.7,47,119.3 l-60.5,56.2C144.4,511.3,192.7,539.2,247.4,550.3z"/>
            <path class="st0"
                  d="M44.8,245.3l-42-8.5C15,177.6,44.7,123.9,88.6,81.6c44-42.4,99.1-70.3,159.3-80.6l4.1,23.8l22.3,97.5 c-11.5,1.6-22.9,4.3-33.9,8.1L217,52.5c-36.7,12.2-70.3,32.4-98.5,59.6C80.8,148.5,55.3,194.5,44.8,245.3z"/>
                               </svg>
        <a class="button"></a>
        <a class="button"></a>
        <a class="button"></a>
        <a class="button"></a>
    </div>
</section>

<!--- Technology Services Team Subscribe --->
<section class="technology-service-team">

    <div class="hidden-xs">
        <svg id="vr-hud" class="hidden-sm" xmlns="http://www.w3.org/2000/svg" width="1440" height="852.5"
             viewBox="0 0 1440 852.5">
            <circle id="Ellipse_2_copy_3" data-name="Ellipse 2 copy 3" class="cls-1" cx="569.578" cy="287.545" r="26.516"/>
            <circle id="Ellipse_2_copy_8" data-name="Ellipse 2 copy 8" class="cls-1" cx="569.36" cy="287.315" r="16.079"/>
            <circle id="Ellipse_2_copy_7" data-name="Ellipse 2 copy 7" class="cls-1" cx="569.36" cy="584.81" r="12.015"/>
            <circle id="Ellipse_2_copy_6" data-name="Ellipse 2 copy 6" class="cls-1" cx="569.36" cy="584.8" r="19.86"/>
            <circle id="Ellipse_2_copy_2" data-name="Ellipse 2 copy 2" class="cls-1" cx="569.578" cy="584.575" r="26.516"/>
            <path id="Ellipse_2_copy_5" data-name="Ellipse 2 copy 5" class="cls-2"
                  d="M875.618,1452.49a12.3,12.3,0,1,1,0-17.39A12.3,12.3,0,0,1,875.618,1452.49ZM260.549,1342.94v44.82"
                  transform="translate(0 -859)"/>
            <path class="cls-2" d="M276.855,1342.94v44.82m-30.573-30.56h46.879m-46.879,16.3h46.879"
                  transform="translate(0 -859)"/>
            <path class="cls-2" d="M403.226,1432.29l12.23-13.65v13.65l12.229-13.65v13.65" transform="translate(0 -859)"/>
            <path id="Shape_13_copy" data-name="Shape 13 copy" class="cls-2"
                  d="M427.685,1432.29l12.23-13.65v13.65l12.229-13.65v13.65" transform="translate(0 -859)"/>
            <path id="Shape_13_copy_2" data-name="Shape 13 copy 2" class="cls-2"
                  d="M452.144,1432.29l12.23-13.65v13.65l12.229-13.65v13.65" transform="translate(0 -859)"/>
            <path id="Shape_13_copy_3" data-name="Shape 13 copy 3" class="cls-2"
                  d="M478.642,1432.29l12.229-13.65v13.65l12.23-13.65v13.65" transform="translate(0 -859)"/>
            <path id="Shape_13_copy_4" data-name="Shape 13 copy 4" class="cls-2"
                  d="M503.1,1432.29l12.229-13.65v13.65l12.229-13.65v13.65" transform="translate(0 -859)"/>
            <path id="Shape_13_copy_5" data-name="Shape 13 copy 5" class="cls-2"
                  d="M906.673,1171.46l12.229-13.65v13.65l12.23-13.65v13.65" transform="translate(0 -859)"/>
            <path id="Shape_13_copy_5-2" data-name="Shape 13 copy 5" class="cls-2"
                  d="M931.132,1171.46l12.229-13.65v13.65l12.23-13.65v13.65" transform="translate(0 -859)"/>
            <path id="Shape_13_copy_5-3" data-name="Shape 13 copy 5" class="cls-2"
                  d="M955.591,1171.46l12.229-13.65v13.65l12.23-13.65v13.65" transform="translate(0 -859)"/>
            <path id="Shape_13_copy_5-4" data-name="Shape 13 copy 5" class="cls-2"
                  d="M982.088,1171.46l12.23-13.65v13.65l12.232-13.65v13.65" transform="translate(0 -859)"/>
            <path id="Shape_13_copy_5-5" data-name="Shape 13 copy 5" class="cls-2"
                  d="M1006.55,1171.46l12.23-13.65v13.65l12.23-13.65v13.65" transform="translate(0 -859)"/>
            <path class="cls-2" d="M1132.92,1192.15h-53l-5.53,6.18M1055,1220c-5.5,6.14-9.73,10.86-9.73,10.86"
                  transform="translate(0 -859)"/>
            <circle class="cls-1" cx="1063.645" cy="351.485" r="14.265"/>
            <circle id="Ellipse_2_copy" data-name="Ellipse 2 copy" class="cls-1" cx="866.704" cy="584.575" r="26.516"/>
            <path id="Ellipse_2_copy_4" data-name="Ellipse 2 copy 4" class="cls-2"
                  d="M880.967,1457.84a19.864,19.864,0,1,1,0-28.09A19.88,19.88,0,0,1,880.967,1457.84Z"
                  transform="translate(0 -859)"/>
            <path id="Ellipse_2_copy_9" data-name="Ellipse 2 copy 9" class="cls-2"
                  d="M878.288,1132.9a16.087,16.087,0,1,1-22.751,0A16.085,16.085,0,0,1,878.288,1132.9Z"
                  transform="translate(0 -859)"/>
            <circle class="cls-1" cx="867.625" cy="286.62" r="26.5"/>
            <path id="Ellipse_1_copy_4" data-name="Ellipse 1 copy 4" class="cls-2"
                  d="M885.888,1476.8a245.941,245.941,0,0,1-107.82,58.16" transform="translate(0 -859)"/>
            <path id="Ellipse_1_copy_2" data-name="Ellipse 1 copy 2" class="cls-2"
                  d="M423.207,1119.74a344.267,344.267,0,0,1,51.287-65.93c133.653-134.547,351.1-135.3,485.684-1.68a345.159,345.159,0,0,1,40.542,48.32m18.35,361a343.95,343.95,0,0,1-57.208,76.23c-133.652,134.55-351.1,135.3-485.683,1.68a343.4,343.4,0,0,1-56.755-74.1"
                  transform="translate(0 -859)"/>
            <path class="cls-2" d="M443.991,1228.82v130.42" transform="translate(0 -859)"/>
            <path class="cls-2" d="M342.079,1442.78H531.636" transform="translate(0 -859)"/>
            <path class="cls-2" d="M531.636,1145.28H342.079" transform="translate(0 -859)"/>
            <path class="cls-2"
                  d="M427.685,1163.62H413.418m14.267,8.15H409.341m18.344,8.15H407.3m20.382,8.15h-22.42m22.42,8.15h-26.5m26.5,8.15H397.112m30.573,8.15H395.074m32.611,8.15H388.959m38.726,8.15h-42.8m42.8,8.16H382.844m44.841,8.15H380.806"
                  transform="translate(0 -859)"/>
            <circle class="cls-1" cx="241.203" cy="436.06" r="3.047"/>
            <circle id="Ellipse_4_copy" data-name="Ellipse 4 copy" class="cls-1" cx="298.265" cy="436.06" r="3.047"/>
            <circle id="Ellipse_4_copy_2" data-name="Ellipse 4 copy 2" class="cls-1" cx="353.297" cy="436.06" r="3.047"/>
            <path class="cls-2"
                  d="M590.045,1128.52a210.032,210.032,0,0,1,257.784-.34m38.015,38.24a209.892,209.892,0,0,1-.21,255.5m-39.764,39.47a210.055,210.055,0,0,1-254.95-1.17m-38.648-38.83a209.885,209.885,0,0,1-.393-254.2"
                  transform="translate(0 -859)"/>
            <path class="cls-2" d="M904.635,1442.78h191.6" transform="translate(0 -859)"/>
            <path class="cls-2" d="M906.673,1143.24H1096.23" transform="translate(0 -859)"/>
            <path class="cls-2" d="M943.361,1135.09h65.229l34.65-34.64" transform="translate(0 -859)"/>
            <path class="cls-2" d="M994.318,1228.82v52.5m0,29.13v46.75" transform="translate(0 -859)"/>
            <path class="cls-2" d="M994.32,1281.8a14.265,14.265,0,1,1-14.273,14.26A14.263,14.263,0,0,1,994.32,1281.8Z"
                  transform="translate(0 -859)"/>
            <path id="Shape_5_copy" data-name="Shape 5 copy" class="cls-2" d="M1035.08,1322.56h207.9"
                  transform="translate(0 -859)"/>
            <path id="Shape_6_copy" data-name="Shape 6 copy" class="cls-2"
                  d="M1128.84,1406.1h65.23c5.98,0,12.22-6.98,12.22-12.22v-71.32" transform="translate(0 -859)"/>
            <path class="cls-2" d="M1035.08,1263.47h207.9" transform="translate(0 -859)"/>
            <path class="cls-2" d="M1128.84,1179.92h65.23c5.98,0,12.22,6.99,12.22,12.23v71.32"
                  transform="translate(0 -859)"/>
            <path id="Shape_5_copy_2" data-name="Shape 5 copy 2" class="cls-2" d="M403.226,1322.56h-207.9"
                  transform="translate(0 -859)"/>
            <path id="Shape_6_copy_2" data-name="Shape 6 copy 2" class="cls-2"
                  d="M309.467,1406.1H244.243c-5.982,0-12.229-6.98-12.229-12.22v-71.32" transform="translate(0 -859)"/>
            <path id="Shape_5_copy_2-2" data-name="Shape 5 copy 2" class="cls-2" d="M403.226,1263.47h-207.9"
                  transform="translate(0 -859)"/>
            <path id="Shape_6_copy_2-2" data-name="Shape 6 copy 2" class="cls-2"
                  d="M309.467,1179.92H244.243c-5.982,0-12.229,6.99-12.229,12.23v71.32" transform="translate(0 -859)"/>
            <path id="Polygon_2" data-name="Polygon 2" class="cls-2" d="M1287.7,1312.73l-16.46-18.7,16.46-18.7"
                  transform="translate(0 -859)"/>
            <path id="Polygon_2_copy" data-name="Polygon 2 copy" class="cls-2" d="M1312.16,1312.73l-16.46-18.7,16.46-18.7"
                  transform="translate(0 -859)"/>
            <path id="Polygon_2_copy_2" data-name="Polygon 2 copy 2" class="cls-2"
                  d="M1334.58,1312.73l-16.46-18.7,16.46-18.7" transform="translate(0 -859)"/>
            <path id="Polygon_2_copy_3" data-name="Polygon 2 copy 3" class="cls-2"
                  d="M150.8,1312.73l16.468-18.7-16.468-18.7" transform="translate(0 -859)"/>
            <path id="Polygon_2_copy_3-2" data-name="Polygon 2 copy 3" class="cls-2"
                  d="M126.337,1312.73l16.468-18.7-16.468-18.7" transform="translate(0 -859)"/>
            <path id="Polygon_2_copy_3-3" data-name="Polygon 2 copy 3" class="cls-2"
                  d="M103.917,1312.73l16.467-18.7-16.467-18.7" transform="translate(0 -859)"/>
            <path id="Shape_7_copy_8" data-name="Shape 7 copy 8" class="cls-2" d="M473.9,1075.13l48.534,43.57"
                  transform="translate(0 -859)"/>
            <path id="Shape_7_copy_7" data-name="Shape 7 copy 7" class="cls-2" d="M498.27,1050.85l43.722,48.39"
                  transform="translate(0 -859)"/>
            <path id="Shape_7_copy_6" data-name="Shape 7 copy 6" class="cls-2" d="M525.3,1029.05l38.378,52.72"
                  transform="translate(0 -859)"/>
            <path id="Shape_7_copy_5" data-name="Shape 7 copy 5" class="cls-2" d="M554.532,1010.19l32.6,56.47"
                  transform="translate(0 -859)"/>
            <path id="Shape_7_copy_4" data-name="Shape 7 copy 4" class="cls-2" d="M585.323,994.568l26.506,59.582"
                  transform="translate(0 -859)"/>
            <path id="Shape_7_copy_3" data-name="Shape 7 copy 3" class="cls-2" d="M617.742,982.138l20.09,62.032"
                  transform="translate(0 -859)"/>
            <path id="Shape_7_copy_2" data-name="Shape 7 copy 2" class="cls-2" d="M650.252,973.345L663.9,1037.11"
                  transform="translate(0 -859)"/>
            <path id="Shape_7_copy" data-name="Shape 7 copy" class="cls-2" d="M684.537,967.732l6.859,64.848"
                  transform="translate(0 -859)"/>
            <path class="cls-2" d="M719.155,965.961v65.209" transform="translate(0 -859)"/>
            <path id="Ellipse_1_copy_3" data-name="Ellipse 1 copy 3" class="cls-3"
                  d="M785.735,1191.46a122.7,122.7,0,0,1,25.325,21.91m-76.735,201.99a124.05,124.05,0,0,1-34.2-.54"
                  transform="translate(0 -859)"/>
            <circle class="cls-1" cx="719.172" cy="435.045" r="122.297"/>
            <rect id="Rectangle_3_copy_8" data-name="Rectangle 3 copy 8" class="cls-4" x="719.5" width="2" height="852.5"/>
            <ellipse class="cls-5" cx="720.25" cy="434.75" rx="78.25" ry="78.25"/>
            <rect id="Rectangle_3_copy_6" data-name="Rectangle 3 copy 6" class="cls-4" y="433" width="1441" height="2"/>
        </svg>
        <svg id="lens-front"
                    x="0px" y="0px"
                    viewBox="0 0 603 596"
                    style="enable-background:new 0 0 603 596;"
                    xml:space="preserve">
           <use xlink:href="#lens-front"></use>
       </svg>

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12 technology-column">
                    <div class="content-block odd-content-block technology active">
                        <h2>TECHNOLOGY ///</h2>
                        <p>Using deep reinforcement learning, our AI traders learn and generate trading strategies to
                            advance your investment goals.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 service-column">
                    <div class="content-block our-service">
                        <h2>/// OUR SERVICE</h2>
                        <p>InfoPlay applies proprietary biologically-inspired artificial intelligence algorithms to
                            large-scale data analytics.</p>
                    </div>
                </div>

                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-6 col-sm-6 col-xs-12 team-column">
                    <div class="content-block odd-content-block our-team">

                        <h2>OUR TEAM ///</h2>
                        <div class="team-member">
                            <h3><a href="https://www.linkedin.com/in/daniel-bateman-6a154221">
                                    <svg>
                                        <use xlink:href="#icon-linkedin2"></use>
                                    </svg>
                                </a>Daniel Bateman
                            </h3>
                            <p>President</p>
                        </div>

                        <div class="team-member">
                            <h3><a href="https://www.linkedin.com/in/william-h-guss">
                                    <svg>
                                        <use xlink:href="#icon-linkedin2"></use>
                                    </svg>
                                </a>William Guss
                            </h3>
                            <p>CTO</p>
                        </div>


                        <ul class="list-unstyled list-inline footer-menu-left">
                            <li><a href="">We’re hiring AI Engineers!</a></li>
                            <li><a href="">Join Us!</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 subscribe-column">
                    <div class="content-block subscribe-copyright">
                        <div class="subscribe-form-container">
                            <label>Sign up for updates</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="email address">
                                <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">SUBSCRIBE</button>
                        </span>
                            </div>
                        </div>

                        <ul class="list-unstyled list-inline text-uppercase footer-menu-right">
                            <li><a href="" data-toggle="modal" data-target="#terms-conditions">Terms & Conditions</a></li>
                            <li><a href="" data-toggle="modal" data-target="#privacy-policy">Privacy Policy</a></li>
                        </ul>

                        <p class="text-uppercase copyright-text">© 2017-2018 InfoPlay Inc. All Rights Reserved.</p>
                    </div>
                </div>


                <div class="active-container-icon hidden-sm"></div>


            </div>



        </div>
    </div>


    <div class="visible-xs">
        <div id="content-carousel" class="carousel slide content-carousel" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#content-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#content-carousel" data-slide-to="1"></li>
                <li data-target="#content-carousel" data-slide-to="2"></li>
                <li data-target="#content-carousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <div class="content-block">
                        <div class="content-icon" style="background-image: url('assets/images/tech.png'); "></div>
                        <h2>TECHNOLOGY ///</h2>
                        <p>Using deep reinforcement learning, our AI traders learn and generate trading strategies to
                            advance your investment goals.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="content-block">
                        <div class="content-icon visible-xs" style="background-image: url('assets/images/service.png'); "></div>
                        <h2>/// OUR SERVICE</h2>
                        <p>InfoPlay applies proprietary biologically-inspired artificial intelligence algorithms to
                            large-scale data analytics.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="content-block">
                        <div class="content-icon visible-xs" style="background-image: url('assets/images/team.png'); "></div>

                        <h2>OUR TEAM ///</h2>
                        <div class="team-member">
                            <h3><a href="https://www.linkedin.com/in/daniel-bateman-6a154221">
                                    <svg>
                                        <use xlink:href="#icon-linkedin2"></use>
                                    </svg>
                                </a>Daniel Bateman
                            </h3>
                            <p>President</p>
                        </div>

                        <div class="team-member">
                            <h3><a href="https://www.linkedin.com/in/william-h-guss">
                                    <svg>
                                        <use xlink:href="#icon-linkedin2"></use>
                                    </svg>
                                </a>William Guss
                            </h3>
                            <p>CTO</p>
                        </div>


                        <ul class="list-unstyled list-inline footer-menu-left">
                            <li><a href="">We’re hiring AI Engineers!</a></li>
                            <li><a href="">Join Us!</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="content-block">
                        <div class="content-icon visible-xs" style="background-image: url('assets/images/info.png'); "></div>
                        <div class="subscribe-form-container">
                            <label>Sign up for updates</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="email address">
                                <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">SUBSCRIBE</button>
                        </span>
                            </div>
                        </div>

                        <ul class="list-unstyled list-inline text-uppercase footer-menu-right">
                            <li><a href="" data-toggle="modal" data-target="#terms-conditions">Terms & Conditions</a></li>
                            <li><a href="" data-toggle="modal" data-target="#privacy-policy">Privacy Policy</a></li>
                        </ul>

                        <p class="text-uppercase copyright-text">© 2018 InfoPlay. All rights reserved.</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#content-carousel" data-slide="prev">
                <svg class="icon icon-chevron-small-left"><use xlink:href="#icon-chevron-left"></use></svg>
            </a>
            <a class="right carousel-control" href="#content-carousel" data-slide="next">
                <svg class="icon icon-chevron-small-left"><use xlink:href="#icon-chevron-left"></use></svg>
            </a>
        </div>
    </div>


</section>

<!-- Modals -->
<div id="join-us-modal" class="modal fade join-us-modal modal-fullscreen" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <svg>
                <use xlink:href="#icon-close-outline"></use>
            </svg>
        </button>

        <div class="container">
            <div class="content-block">
                <div class="row">
                    <div class="col-md-4">
                        <h1>We are seeking software engineers with experience scaling machine learning systems in industry, particularly finance. We are also seeking quantitative finance professionals (quants) and software developers with blockchain/cryptocurrency experience.</h1>
                        <p>Drop your resume at <a href="" class="text-white">daniel@infoplay.ai</a></p>
                    </div>
                    <div class="col-md-8">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="resume">Resume:</label>
                                <input type="file" class="form-control" id="resume">
                            </div>

                            <button type="submit" class="btn">SUBMIT</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div class='modal fade modal-fullscreen' id='main-menu' role='dialog'>


    <div class='modal-dialog text-center'>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <svg>
                <use xlink:href="#icon-close-outline"></use>
            </svg>
        </button>
        <ul class='list-unstyled  main-menu'>
            <li><a href='#'>Home</a></li>
            <li><a href='#'>Services</a></li>
            <li><a href='#'>Meet the Team</a></li>
            <li><a href='#'>Careers</a></li>
            <li><a href='#'>Contact Us</a></li>
            <li><a data-toggle="modal" data-target="#join-us-modal">Join Us</a></li>
        </ul>
    </div>
</div>

<div class="modal fade modal-fullscreen" id="terms-conditions" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <svg>
                <use xlink:href="#icon-close-outline"></use>
            </svg>
        </button>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Terms & Conditions</h1>

                   <h2>Introduction</h2>
                    <p>These Website Standard Terms and Conditions written on this webpage shall manage your use of this
                        website. These Terms will be applied fully and affect to your use of this Website. By using this
                        Website, you agreed to accept all terms and conditions written in here. You must not use this
                        Website if you disagree with any of these Website Standard Terms and Conditions.</p>
                    <p>Minors or people below 18 years old are not allowed to use this Website.</p>
                    <h2>Intellectual Property Rights</h2>

                    <p>Other than the content you own, under these Terms, InfoPlay and/or its licensors own all the
                        intellectual property rights and materials contained in this Website.</p>
                    <p>You are granted limited license only for purposes of viewing the material contained on this
                        Website.</p>

                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade modal-fullscreen" id="privacy-policy" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <svg>
                <use xlink:href="#icon-close-outline"></use>
            </svg>
        </button>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Privacy Policy</h1>

                    <h2>Introduction</h2>
                    <p>These Website Standard Terms and Conditions written on this webpage shall manage your use of this
                        website. These Terms will be applied fully and affect to your use of this Website. By using this
                        Website, you agreed to accept all terms and conditions written in here. You must not use this
                        Website if you disagree with any of these Website Standard Terms and Conditions.</p>
                    <p>Minors or people below 18 years old are not allowed to use this Website.</p>
                    <h2>Intellectual Property Rights</h2>

                    <p>Other than the content you own, under these Terms, InfoPlay and/or its licensors own all the
                        intellectual property rights and materials contained in this Website.</p>
                    <p>You are granted limited license only for purposes of viewing the material contained on this
                        Website.</p>

                </div>
            </div>
        </div>
    </div>

</div>


<div class="modal fade modal-fullscreen orientation-modal text-center" id="orientation-modal" role="dialog">
    <div class="modal-dialog">


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Switch back to potrait mode for better experience. </h1>

                </div>
            </div>
        </div>
    </div>

</div>



