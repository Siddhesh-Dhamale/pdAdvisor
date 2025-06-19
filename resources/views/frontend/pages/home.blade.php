<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    {{view('frontend.layouts.css')}}
    <link rel="stylesheet" href="frontend/css/home.css">

</head>

<body>
    <div class="main">
        {{view('frontend.layouts.header')}}

        <div class="page-wrapper">
            <section class="hero">
                <div class="swiper hero-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide position-relative">
                            <img class="w-100" src="frontend/img/home/updated-banner-new.png" alt="">
                            <div class="HeroContent text-start lh-1">
                                <p class="m-0 p-0 fs-4 pb-0 underlinedHeading"><span class="brdr-bottom-hero">Green Transformation Playbook:</span></p>
                                <h1 class="m-0 p-0">From Vision to Execution in 12 Months</h1>
                                <a class="btn btn-danger rounded-lg px-4" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <img class="w-100" src="frontend/img/home/updated-banner-new.png" alt="">
                            <div class="HeroContent text-start">
                                <p class="m-0 p-0 fs-4 pb-0 underlinedHeading"><span class="brdr-bottom-hero">Green Transformation Playbook:</span></p>
                                <h1 class="m-0 p-0">From Vision to Execution in 12 Months</h1>
                                <a class="btn btn-danger rounded-lg px-4" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <img class="w-100" src="frontend/img/home/updated-banner-new.png" alt="">
                            <div class="HeroContent text-start">
                                <p class="m-0 p-0 fs-4 pb-0 underlinedHeading"><span class="brdr-bottom-hero">Green Transformation Playbook:</span></p>
                                <h1 class="m-0 p-0">From Vision to Execution in 12 Months</h1>
                                <a class="btn btn-danger rounded-lg px-4" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <img class="w-100" src="frontend/img/home/updated-banner-new.png" alt="">
                            <div class="HeroContent text-start">
                                <p class="m-0 p-0 fs-4 pb-0 underlinedHeading"><span class="brdr-bottom-hero">Green Transformation Playbook:</span></p>
                                <h1 class="m-0 p-0">From Vision to Execution in 12 Months</h1>
                                <a class="btn btn-danger rounded-lg px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ICON NAVIGATION -->
                <div class="container text-center icons-section">
                    <div class="row justify-content-center">
                        <div class="col-3 icon-trigger" data-slide="0">
                            <!-- <img src="frontend/img/home/Group 12.svg" alt=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 595.28 595.28">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #7c7c7c;
                                        }
                                    </style>
                                </defs>
                                <path class="cls-1" d="M253.15,302.67c7.61-9.5,14.56-19.31,22.67-28.03,10.01-10.75,21-20.59,31.57-30.81.36-.35.77-.64,1.16-.94,4.11-3.17,8.23-3.1,10.95.19,2.77,3.35,2.06,7.35-1.86,10.77-4.79,4.19-9.69,8.27-14.27,12.67-20.02,19.21-37.63,40.28-49.66,65.55-5.01,10.52-8.73,21.45-10.31,33.05-.08.62-.25,1.22-.39,1.83-1.03,4.22-4.37,6.69-8.11,6-3.88-.71-6.26-3.95-5.76-8.28,1.51-13,5.08-25.54,11.13-37.05,3.8-7.23,3.98-12.52-.19-20.09-15.45-28.09-8.94-59.07,9.13-81.52,9.59-11.9,23.05-16.98,37.55-19.87,9.77-1.94,19.58-3.72,29.3-5.91,9.9-2.24,18.66-6.81,26.13-13.82,4.56-4.27,10.64-3.01,12.14,2.76,7.82,30.15,11.58,60.59,3.82,91.32-9.36,37.08-35.47,53.63-69.95,55.07-4.81.2-7.99-2.61-8.12-6.84-.13-4.32,2.71-7.08,7.62-7.35,13.7-.75,26.7-3.67,37.66-12.54,12.44-10.07,18.04-23.91,20.68-39.12,3.77-21.71,1.74-43.26-2.5-64.69-.04-.22-.27-.41-.25-.38-6.53,2.74-12.81,6.21-19.53,8.01-11.41,3.07-23.02,5.54-34.68,7.46-28.99,4.76-40.81,26.88-43.24,51.31-.99,9.88,1.25,19.35,5.65,28.27.53,1.08,1.17,2.12,1.64,2.96Z" />
                                <path class="cls-1" d="M295.46,426.79c5.32,6.63,10.25,12.56,14.9,18.71,1.27,1.68,2.3,3.97,2.4,6.03.15,2.93-1.69,5.22-4.59,6.16-3.16,1.03-5.93.18-8.04-2.42-4.25-5.23-8.47-10.48-12.69-15.73-4.15-5.15-8.34-10.26-12.43-15.46-3.5-4.45-3.11-8.04,1.29-11.62,10.07-8.18,20.18-16.31,30.31-24.41,4.04-3.24,8.2-3.12,10.93.16,2.84,3.41,2.06,7.53-2.15,10.98-5.01,4.1-10.07,8.15-15.76,12.75,3.12,0,5.51.18,7.86-.03,60.77-5.37,110.61-49.74,123.03-109.49,12.97-62.41-20.34-127.13-78.79-153.11-1.02-.46-2.07-.86-3.07-1.36-4.13-2.06-5.68-5.8-3.96-9.55,1.68-3.69,5.6-5.11,9.8-3.36,14.62,6.09,28.07,14.18,39.87,24.73,37.61,33.63,55.71,75.77,52.62,126.16-4.08,66.72-53.8,123.49-119.42,137.26-8.74,1.83-17.77,2.26-26.67,3.31-1.56.18-3.13.18-5.41.3Z" />
                                <path class="cls-1" d="M295.77,122.68c-5.35-6.67-10.5-12.92-15.46-19.32-2.62-3.38-2.07-7.58.97-10.02,3.13-2.5,7.03-2.06,10.01,1.15.25.27.49.57.72.86,8.22,10.2,16.47,20.37,24.63,30.61,3.33,4.17,2.88,8.02-1.26,11.38-10.17,8.25-20.36,16.48-30.6,24.65-4,3.2-8.23,2.95-10.91-.42-2.63-3.32-1.85-7.47,2.13-10.73,5.11-4.18,10.28-8.29,15.27-13.34-5.32.5-10.69.69-15.96,1.54-60.2,9.7-105.66,54.97-115.45,114.83-9.88,60.37,22.95,121.28,78.79,146.18,1.14.51,2.3.98,3.39,1.58,3.68,2.03,5.05,6.04,3.31,9.54-1.66,3.36-5.62,5.07-9.21,3.2-9.26-4.83-18.89-9.23-27.38-15.22-37.32-26.33-58.7-62.53-63.86-107.88-9.08-79.78,47.97-154.15,127.07-166.06,7.71-1.16,15.52-1.66,23.78-2.53Z" />
                            </svg>
                            <p>Sustainability</p>
                        </div>
                        <div class="col-3 icon-trigger" data-slide="1">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 595.28 595.28">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #7c7c7c;
                                        }
                                    </style>
                                </defs>
                                <path class="cls-1" d="M149.51,370.83c0-1.47,0-2.57,0-3.66,0-12.77-.01-25.55,0-38.32.01-9.44,5.63-15.03,15.07-15.05,7.36-.02,14.72-.01,22.08,0,9.67.01,15.14,5.47,15.17,15.22.04,12.67,0,25.34,0,38.01,0,1.11,0,2.21,0,3.55h22.51c.06-1.22.17-2.49.17-3.77,0-38.53.02-77.05-.01-115.58,0-4.35.83-8.31,4-11.52,2.98-3.02,6.66-4.22,10.82-4.21,7.36.01,14.72-.01,22.08,0,9.79.02,15.41,5.62,15.42,15.42.02,38.53,0,77.05,0,115.58,0,1.3,0,2.61,0,4.09h22.69c0-1.28,0-2.47,0-3.66,0-26.26,0-52.53,0-78.79,0-10.51,5.35-15.88,15.81-15.9,7.05-.01,14.1-.03,21.16,0,9.59.05,15.26,5.72,15.27,15.28.02,26.47,0,52.93,0,79.4,0,1.19,0,2.38,0,3.72h22.69v-4c0-49.46,0-98.92,0-148.38,0-7.5,3.75-12.72,10.3-14.46.88-.23,1.81-.38,2.71-.39,8.69-.03,17.38-.14,26.06.02,7.03.13,12.67,5.88,13.08,12.96.07,1.22.03,2.45.03,3.68,0,48.85,0,97.69,0,146.54v4.18c2.71,0,5.32-.04,7.93,0,3.32.06,5.3,1.85,5.24,4.67-.06,2.65-2.04,4.4-5.14,4.54-.82.03-1.64,0-2.45,0-96.18,0-192.35,0-288.53,0-1.02,0-2.05.06-3.06-.05-2.64-.28-4.43-2.21-4.4-4.64.03-2.45,1.84-4.37,4.5-4.49,2.75-.12,5.5-.03,8.77-.03ZM417.28,370.72c.07-.74.16-1.22.16-1.71,0-50.38.01-100.76,0-151.13,0-3.59-1.71-5.26-5.27-5.28-7.36-.05-14.72-.02-22.08-.01-5.22,0-6.47,1.26-6.47,6.5,0,49.46,0,98.92,0,148.38,0,1.07.11,2.14.17,3.26h33.5ZM267.33,370.63c.07-1.06.17-1.96.17-2.86,0-38.93.01-77.86,0-116.79,0-4.88-1.51-6.3-6.51-6.32-6.85-.02-13.69-.01-20.54,0-5.47,0-6.85,1.41-6.85,6.94,0,38.62,0,77.25,0,115.87,0,1,.09,1.99.14,3.16h33.59ZM342.39,370.6c.07-.79.14-1.2.14-1.6,0-27.28.02-54.55,0-81.83,0-4.05-1.74-5.69-5.89-5.72-7.05-.04-14.1-.02-21.15-.01-5.56,0-6.86,1.29-6.86,6.87,0,26.36,0,52.71,0,79.07,0,1.07.14,2.14.22,3.22h33.54ZM192.27,370.72c.11-.64.24-1.03.24-1.42.01-13.79.05-27.58,0-41.37-.01-3.36-1.72-4.94-5.23-4.97-7.46-.05-14.92-.03-22.37-.02-4.74.01-6.2,1.48-6.21,6.23-.01,12.87,0,25.74,0,38.61,0,.97.08,1.94.13,2.93h33.45Z" />
                                <path class="cls-1" d="M272.77,175.77c12.19,9.03,24.23,17.96,36.26,26.88,9.18-7.4,18.76-8.48,29.29-2.85,16.52-18.19,33.11-36.45,50.17-55.24-6.92.94-13.06,1.8-19.2,2.59-3.65.47-5.85-.87-6.3-3.68-.44-2.73,1.39-4.82,4.98-5.35,10.41-1.52,20.82-2.98,31.25-4.4,3.66-.5,6.25,1.99,5.76,5.65-1.41,10.52-2.91,21.03-4.47,31.54-.5,3.38-2.58,5.16-5.2,4.81-2.93-.39-4.32-2.78-3.81-6.49.68-4.96,1.35-9.91,2.01-14.87.04-.28-.05-.58-.15-1.51-16.27,17.9-32.24,35.46-48.3,53.13,3.92,5.91,5.82,12.17,4.42,19.2-1.08,5.4-3.6,9.95-7.67,13.63-8.18,7.4-20.24,8.35-29.53,2.38-10.16-6.53-13.26-17.21-8.91-31.28-11.96-8.88-24-17.81-36.19-26.86-4.69,3.74-9.83,6.7-15.89,6.24-4.17-.31-8.32-1.59-12.34-2.88-1.65-.53-2.55-.82-3.91.55-12.49,12.65-25.05,25.25-37.65,37.8-1.32,1.31-1.41,2.23-.53,3.89,4.97,9.4,4.41,18.62-2.13,26.97-6.31,8.06-14.94,10.96-24.87,8.55-10.22-2.48-16.47-9.3-18.23-19.63-1.63-9.55,1.65-17.63,9.41-23.47,7.76-5.83,16.3-6.47,25.17-2.53.93.41,1.81.94,2.41,1.25,13.86-13.73,27.63-27.37,41.56-41.17-3.6-5.82-5.02-12.24-3.36-19.15,1.26-5.22,3.98-9.58,8.09-13.06,8.23-6.98,20.33-7.63,29.35-1.57,9.83,6.6,12.89,17.52,8.48,30.93ZM340.81,220.63c-.01-8.35-6.86-15.22-15.2-15.26-8.29-.03-15.25,6.84-15.35,15.16-.09,8.39,6.97,15.46,15.4,15.4,8.35-.06,15.16-6.94,15.15-15.3ZM250.57,180.25c8.41,0,15.25-6.74,15.32-15.11.06-8.3-6.78-15.23-15.14-15.34-8.46-.11-15.44,6.82-15.41,15.32.03,8.39,6.81,15.13,15.24,15.13ZM175.69,255.73c8.43-.01,15.21-6.75,15.24-15.15.03-8.37-6.74-15.18-15.16-15.24-8.59-.06-15.37,6.7-15.33,15.3.04,8.42,6.78,15.1,15.24,15.09Z" />
                            </svg>
                            <p>Digital Strategy</p>
                        </div>
                        <div class="col-3 icon-trigger" data-slide="2">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 595.28 595.28">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #7c7c7c;
                                        }
                                    </style>
                                </defs>
                                <path class="cls-1" d="M366.87,242.84c-8.89-.95-10.99-2.17-11.09-6.17-.1-4.16,2.08-5.49,11.09-6.51,0-1.37,0-2.81,0-4.26,0-20.58-.06-41.16.02-61.73.06-15.58,9.12-27,23.55-29.81,2.18-.43,4.46-.45,6.7-.45,19.83-.03,39.66-.05,59.49.02,2.3,0,3.77-.46,5.11-2.63,3.76-6.09,10.93-8.62,17.57-6.66,6.73,1.99,11.36,8.04,11.46,14.97.1,6.93-4.41,13.17-11.04,15.29-6.8,2.17-14.03-.28-17.96-6.45-1.24-1.94-2.48-2.61-4.74-2.6-20.33.09-40.66.02-60.99.07-9.64.02-16.88,6.59-16.99,16.19-.25,22.2-.09,44.4-.09,66.6,0,.47.15.95.3,1.81,1.26,0,2.47,0,3.68,0,24.57,0,49.14-.02,73.71.04,2.29,0,3.76-.44,5.1-2.61,3.78-6.09,10.91-8.57,17.58-6.58,6.77,2.03,11.35,8.04,11.43,14.98.08,7.08-4.55,13.29-11.44,15.35-6.64,1.98-13.55-.67-17.72-6.51-.85-1.19-2.54-2.55-3.85-2.55-25.69-.15-51.38-.1-77.07-.09-.36,0-.72.11-1.52.23-.08,1.25-.22,2.55-.22,3.85-.01,20.58-.03,41.16,0,61.73.02,12.39,6.52,18.77,19.01,18.77,19.58,0,39.16-.03,58.74.04,2.29,0,3.76-.45,5.11-2.61,3.87-6.17,11.16-8.6,17.97-6.42,6.58,2.1,11.1,8.4,10.99,15.33-.11,6.9-4.81,13.03-11.49,14.96-6.63,1.93-13.83-.64-17.56-6.73-1.35-2.2-2.86-2.6-5.13-2.59-19.7.06-39.41.05-59.11.03-18.47-.02-30.49-11.87-30.58-30.33-.1-20.45-.02-40.91-.02-61.36,0-1.48,0-2.96,0-4.61Z" />
                                <path class="cls-1" d="M341.78,327.03c0,4.37,0,8.73,0,13.1,0,3.23-1.42,5.42-4.48,6.6-4.41,1.7-9.79,2.47-12.89,5.53-2.98,2.93-2.96,8.67-5.39,12.45-4.13,6.42-3.61,12-.1,18.52,4.16,7.71,3.7,7.96-2.47,14.13-5.03,5.03-10.15,9.97-15.04,15.11-2.9,3.05-6.08,4.07-9.66,1.82-7.64-4.79-15.14-5.99-22.91-.31-1.36.99-3.16,1.68-4.84,1.89-5.23.67-7.19,4.13-8.79,8.63-4.55,12.8-3.48,11.17-16.42,11.24-6.36.03-12.72-.06-19.08.03-3.31.04-5.42-1.42-6.59-4.45-1.66-4.3-2.35-9.53-5.3-12.6-2.8-2.91-8.39-2.93-12.01-5.33-6.88-4.55-13-3.85-19.93-.05-6.72,3.69-7.4,3.15-12.91-2.36-5.29-5.29-10.52-10.65-15.89-15.86-2.79-2.71-3.72-5.68-1.59-9.02,4.99-7.84,4.53-14.92.69-23.72-3.47-7.95-7.46-12.81-15.69-15.03-5.93-1.61-6.46-3.07-6.46-9.24,0-7.86.1-15.72-.04-23.57-.07-3.93,1.49-6.72,5.25-7.55,9.14-2.01,15.38-6.74,16.81-16.49.02-.12.09-.24.17-.33,5.44-7.09,3.97-13.91-.13-21.14-3.1-5.47-2.49-6.69,1.91-11.1,5.55-5.56,11.17-11.05,16.64-16.7,2.71-2.8,5.57-3.4,9.09-1.76,4.74,2.21,9.57,4.22,14.33,6.39,4.15,1.9,5.59,4.89,4.14,8.28-1.51,3.51-4.82,4.48-9.16,2.62-2.98-1.27-5.99-2.49-8.87-3.95-1.91-.97-3.23-1.04-4.84.72-3.27,3.59-6.91,6.85-10.2,10.43-.68.74-.98,2.46-.63,3.43,1.24,3.38,3.25,6.52,4.18,9.97.61,2.27.43,5.12-.39,7.35-2.8,7.56-5.89,15.02-9.22,22.36-.94,2.06-2.75,4.12-4.7,5.24-2.98,1.72-6.4,2.73-9.7,3.85-1.91.65-2.77,1.59-2.69,3.75.17,4.73-.1,9.49.16,14.21.07,1.21,1.27,3.16,2.26,3.39,9.94,2.27,15.87,7.85,17.76,18.26.81,4.49,3.69,8.67,5.97,12.8,1.58,2.87,1.95,5.45.55,8.48-1.76,3.81-3.21,7.75-4.8,11.64,4.19,4.26,8.34,8.58,12.65,12.71.52.5,2.09.28,2.99-.07,3.24-1.28,6.46-2.65,9.58-4.19,2.75-1.35,5.11-.83,7.8.37,7.25,3.23,14.72,5.95,21.94,9.26,2.15.99,3.74,3.22,5.57,4.89.08.07.09.23.14.34,1.53,3.81,2.05,9.24,4.86,10.99,3.19,1.98,8.42.67,12.77.77,1.25.03,2.51-.11,3.74.03,2.06.24,3.16-.53,3.82-2.55,1.04-3.19,2.48-6.25,3.56-9.43.98-2.9,3.03-4.21,5.78-5.27,7.41-2.85,14.75-5.89,22-9.12,2.58-1.15,4.89-1.69,7.45-.32.44.23.92.38,1.38.56,3.55,1.43,7.42,4.46,10.56,3.83,3.18-.64,5.68-4.85,8.41-7.57q5.4-5.37,2.33-12.3c-.6-1.37-1.09-2.8-1.82-4.1-1.76-3.16-1.19-5.94.34-9.16,3.2-6.72,6.1-13.61,8.57-20.62,1.2-3.4,2.83-5.6,6.25-6.69,2.84-.9,5.52-2.33,8.38-3.16,2.41-.7,2.97-2.04,2.88-4.36-.17-4.36-.17-8.73,0-13.09.09-2.33-.5-3.76-2.9-4.37-1.68-.43-3.31-1.12-4.89-1.85-3.29-1.53-4.62-4.56-3.46-7.67,1.15-3.08,4.22-4.62,7.61-3.48,3.89,1.31,7.7,2.87,11.52,4.38,2.92,1.15,4.09,3.44,4.08,6.48-.02,4.37,0,8.73,0,13.1Z" />
                                <path class="cls-1" d="M334.77,196.19c-1.19,2.84-2.11,5.41-3.34,7.83-1.16,2.28-1.53,4.39.08,6.56.07.1.15.21.18.33,1.92,6.88,5.2,12.24,13.01,13.93,1.51.33,3.15,3.79,3.32,5.92.45,5.82.14,11.71.16,17.57.01,3.44-1.58,5.95-4.86,6.66-5.86,1.27-8.45,4.96-10.71,10.34-2.05,4.89-2.28,8.78.39,13.13,2.24,3.66,1.36,6.76-1.72,9.64-3.91,3.66-7.66,7.5-11.38,11.36-2.48,2.57-5.39,3.51-8.39,1.57-5.18-3.33-9.78-2.4-15.21-.12-4.59,1.92-7.21,4.31-8.62,8.99-1.57,5.23-3.1,5.99-8.46,6-5.36.01-10.72-.05-16.08.02-3.44.04-5.96-1.38-6.73-4.71-1.36-5.9-5.03-8.69-10.6-10.92-4.78-1.92-8.41-2.02-12.8.34-4.58,2.45-6.23,1.9-9.92-1.76-3.72-3.69-7.36-7.46-11.14-11.07-2.69-2.57-3.62-5.52-1.67-8.72,2.97-4.89,2.56-9.21.31-14.52-2.09-4.94-4.62-8.08-9.75-9.32-3.94-.95-5.65-3.68-5.56-7.74.11-5.36.1-10.72,0-16.08-.07-3.89,1.54-6.69,5.33-7.5,5.61-1.21,8.04-4.78,10.16-9.89,2.03-4.9,2.64-8.94-.22-13.49-2.26-3.59-1.36-6.77,1.74-9.65,3.92-3.65,7.66-7.5,11.39-11.35,2.49-2.58,5.4-3.44,8.41-1.53,5.18,3.29,9.76,2.38,15.22.13,4.65-1.92,7.18-4.39,8.61-9.02,1.61-5.24,3.07-5.97,8.46-5.98,5.36,0,10.72.06,16.08-.02,3.46-.06,5.96,1.4,6.73,4.7,1.37,5.9,4.99,8.73,10.59,10.92,4.76,1.86,8.4,2.1,12.8-.33,4.47-2.47,6.27-1.87,9.92,1.76,3.8,3.78,7.65,7.51,11.33,11.41,1.22,1.29,1.96,3.03,2.97,4.63ZM277.11,303.89c.66-1.63,1.39-2.97,1.75-4.4,1.15-4.62,3.99-7.05,8.67-8.1,3.35-.75,6.74-2.11,9.62-3.97,4.32-2.79,8.27-2.83,12.55-.28,1.14.68,3.11,1.72,3.7,1.27,2.56-1.94,5.04-4.15,6.91-6.72.63-.86-.31-3.29-1.1-4.66-2.36-4.1-2.28-7.8.33-11.86,1.79-2.79,3.33-6,3.94-9.22,1.05-5.54,4.1-8.52,9.36-9.79,1.12-.27,2.9-1.09,2.97-1.8.32-3.2.57-6.53-.07-9.63-.23-1.13-2.91-2.03-4.62-2.52-4.03-1.14-6.12-3.64-7.23-7.67-1.05-3.8-2.51-7.62-4.52-11-2.31-3.89-2.54-7.34-.29-11.19.8-1.36,2.09-3.6,1.57-4.36-1.78-2.64-4.08-5.03-6.6-7-.77-.6-3.06.15-4.31.89-4.48,2.64-8.6,2.53-12.88-.5-1.79-1.27-3.97-2.39-6.11-2.7-7.69-1.12-11.72-5.75-13.42-12.94-.04-.18-.34-.31-.69-.62-1.43,0-3.08.21-4.66-.04-4.24-.68-6.74.77-7.62,5.16-.82,4.08-3.57,6.07-7.65,7.17-4.04,1.08-7.96,2.91-11.66,4.91-3.29,1.78-6.17,1.94-9.53.31-5.43-2.62-5.33-2.29-9.93,1.83-2.71,2.44-3.22,4.61-1.29,7.61,2.57,3.98,2.28,7.77-.35,11.82-1.8,2.78-3.28,6.01-3.91,9.23-1.05,5.34-3.93,8.34-9.04,9.65-1.26.32-3.28,1.1-3.39,1.88-.42,3.06-.64,6.29-.02,9.28.24,1.18,2.76,2.24,4.42,2.7,4.49,1.23,6.68,4.05,7.85,8.49,1,3.8,2.67,7.53,4.63,10.96,1.95,3.41,2.16,6.45.34,9.85-.87,1.62-2.44,4.06-1.85,5.04,1.61,2.7,4,5.06,6.49,7.04.76.6,2.94-.27,4.32-.83,3.22-1.31,6.14-3.04,9.91-1.21,4.9,2.39,10.13,4.08,15.05,6.44,1.85.89,4.28,2.57,4.63,4.27,1.4,6.77,5.52,8.29,11.55,7.23.6-.11,1.23-.01,2.18-.01Z" />
                                <path class="cls-1" d="M178.42,323.04c.13-11.91,6-25.33,17.6-36.22,3.51-3.29,7.33-3.5,9.83-.65,2.37,2.71,1.71,6.19-1.65,9.46-13.27,12.95-17.35,28.5-11.11,45.83,6.26,17.39,19.57,26.66,37.94,28.02,22.28,1.64,42.97-16.93,44.23-39.26.06-1.12.03-2.25.17-3.36.49-3.8,3.05-6.05,6.5-5.79,3.25.25,5.43,2.67,5.42,6.4-.05,14.24-5.1,26.56-14.77,36.92-15.24,16.32-39.17,21.6-59.78,13.35-20.86-8.35-34.39-28.29-34.38-54.69Z" />
                                <path class="cls-1" d="M271.82,200.34c21.7.04,39.26,17.59,39.23,39.22-.03,21.6-17.69,39.17-39.33,39.15-21.67-.02-39.19-17.58-39.17-39.25.02-21.68,17.56-39.15,39.27-39.12ZM271.61,212.37c-14.98.06-27.05,12.15-27.06,27.11,0,15.1,12.26,27.27,27.38,27.18,14.95-.09,27.09-12.24,27.1-27.13.01-15.04-12.29-27.22-27.43-27.15Z" />
                            </svg>
                            <p>Organizational Agility</p>
                        </div>
                        <div class="col-3 icon-trigger" data-slide="3">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 595.28 595.28">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #7c7c7c;
                                        }
                                    </style>
                                </defs>
                                <path class="cls-1" d="M286.99,405.96c0-20.18,0-39.99,0-59.8,0-1.39-.03-2.78.01-4.17.16-5.38,3.47-9.11,8.83-9.21,9.84-.2,19.7-.19,29.54-.02,5.68.1,9,3.83,9.02,9.72.04,19.69.02,39.39.02,59.08,0,1.37,0,2.75,0,4.37h5.69c.06-1.25.17-2.58.17-3.92.01-19.69,0-39.39.01-59.08,0-7.61,1.8-9.99,9.17-12.14,8.33-2.43,16.65-4.87,25-7.24,7.94-2.25,13.33,1.79,13.34,10.01.03,22.82,0,45.64,0,68.46,0,1.25,0,2.5,0,3.95h5.71v-4.18c0-26.18.08-52.36-.07-78.54-.03-5.63,1.96-9.36,7.04-11.96,8.55-4.38,16.87-9.18,25.31-13.78,8.32-4.53,15.27-.48,15.29,9.01.05,31.63.02,63.25.02,94.88,0,1.47,0,2.94,0,4.59h5.8c0-1.53,0-2.89,0-4.25,0-38.81.06-77.62-.08-116.42-.02-4.86,1.58-8.31,5.23-11.41,8.73-7.44,17.25-15.12,25.79-22.77,3.31-2.97,6.89-4.27,11.11-2.28,4.04,1.91,5.4,5.31,5.39,9.65-.05,47.73-.03,95.46-.03,143.18,0,1.36,0,2.72,0,4.5,2.4,0,4.45-.02,6.5,0,2.62.03,4.27,1.41,4.37,3.96.11,2.58-1.55,4.01-4.07,4.31-1.03.12-2.08.05-3.13.05-101.26.04-202.52.05-303.79.18-3.91,0-6.15-1.16-7.66-4.88-3.56-8.79-7.39-17.47-11.38-26.07-1.46-3.14-1.34-5.78.04-8.87,8.75-19.61,15.51-39.88,19.02-61.12.94-5.67,1.48-11.4,2.28-17.67-2.88,0-5.16.05-7.44-.01-2.69-.07-4.58-1.38-4.58-4.16,0-2.76,1.82-4.11,4.56-4.13,2.41-.02,4.82,0,7.55,0,0-3.43.18-6.54-.1-9.6-.09-1-1.23-2.12-2.17-2.79-5.46-3.91-10.96-7.76-16.55-11.49-2.17-1.45-3.06-3.24-3.04-5.8.07-8.11,0-16.22.04-24.33.03-4.44,1.2-5.6,5.56-5.65,4.98-.05,9.96-.04,14.95,0,4.65.03,5.79,1.14,5.84,5.72.05,4.37.01,8.75.01,13.36h9.99c0-4.38-.01-8.62,0-12.86.02-5.27.96-6.2,6.34-6.22,4.29-.02,8.57-.01,12.86,0,5.61.02,6.57,1.01,6.57,6.77,0,4.04,0,8.08,0,12.34h9.84c0-4.65-.03-9.13,0-13.62.04-4.1,1.32-5.43,5.39-5.47,5.21-.06,10.43-.07,15.64,0,3.66.05,5.05,1.4,5.09,5.08.08,8.46.19,16.92-.11,25.36-.06,1.76-1.4,3.96-2.83,5.09-4.71,3.74-9.63,7.24-14.68,10.51-2.69,1.74-4.15,3.73-4.05,6.96.07,2.05-.18,4.12-.31,6.63,2.59,0,4.88-.03,7.17,0,2.7.04,4.56,1.28,4.57,4.1.01,2.85-1.93,4.05-4.56,4.17-2.18.09-4.37.02-7.25.02.62,5.72,1.02,11.09,1.82,16.4,3.3,21.95,10.89,42.52,20.67,62.32,1.59,3.23,1.68,5.87.08,9.11-3.52,7.13-6.67,14.45-10.12,22.03h23.7ZM184.49,374.92h79.53c-11.8-25.21-20.08-51.02-21.42-78.79-12.21,0-23.9.04-35.59-.03-2.12-.01-2.45,1.1-2.58,2.79-1.85,24.59-8.71,47.92-17.86,70.67-.68,1.68-1.31,3.37-2.08,5.35ZM485.52,406.06v-150.34c-1.51,1.24-2.41,1.92-3.26,2.67-8.15,7.21-16.25,14.48-24.48,21.6-1.82,1.57-2.61,3.13-2.6,5.58.08,39.01.05,78.02.06,117.04,0,1.11.11,2.23.18,3.46h30.1ZM432.49,303.59c-1.54.74-2.48,1.13-3.36,1.61-8.12,4.44-16.18,8.98-24.37,13.28-2.3,1.2-2.97,2.64-2.96,5.14.09,26.28.05,52.56.06,78.83,0,1.13.1,2.25.17,3.55h30.47v-102.42ZM379.11,406.02v-74.95c-1.61.38-2.83.62-4.02.96-7.66,2.22-15.28,4.62-22.99,6.63-2.82.73-3.55,2-3.53,4.78.12,19.69.06,39.38.07,59.06,0,1.12.12,2.24.2,3.51h30.28ZM295.62,341.23v64.7h30.16v-64.7h-30.16ZM184.79,383.7c.1.67.07,1.15.23,1.53,2.79,6.47,5.53,12.96,8.52,19.33.41.88,2.09,1.66,3.18,1.66,18.27.07,36.55-.03,54.83.01,1.97,0,2.83-.74,3.58-2.43,2.6-5.92,5.37-11.77,8.04-17.65.35-.77.51-1.62.77-2.45h-79.14ZM183.12,236.63c0,6.15.09,11.93-.05,17.7-.05,2.2.58,3.61,2.49,4.84,4.75,3.08,9.28,6.52,14.05,9.57,1.54.98,3.57,1.62,5.4,1.66,7.4.18,14.81.1,22.22.07,6.36-.03,13.19,1.3,18.95-.58,5.89-1.93,10.73-7.05,16.02-10.78.47-.33,1.01-.61,1.4-1.02.38-.39.86-.93.87-1.4.06-6.65.04-13.31.04-20.02h-9.42c0,4.67.03,9.16,0,13.64-.03,4.08-1.31,5.42-5.39,5.48-4.86.07-9.72.03-14.58.02-5.55-.02-6.52-.98-6.53-6.41,0-4.23,0-8.47,0-12.71h-9.1c0,4.68.05,9.16-.01,13.65-.05,4.01-1.44,5.41-5.47,5.47-4.86.07-9.72.03-14.58.01-5.63-.02-6.58-.99-6.6-6.77-.01-4.11,0-8.22,0-12.41h-9.68ZM242.95,279.09h-37.67v8.39h37.21c.16-2.92.3-5.54.46-8.39Z" />
                                <path class="cls-1" d="M488.67,201.42c-5.51,1.19-10.59,2.23-15.63,3.41-2.76.64-4.9.12-5.84-2.74-.83-2.53.68-4.57,3.98-5.34,8.56-2,17.13-3.94,25.72-5.82,3.28-.72,4.99.4,5.79,3.82,2.04,8.67,3.98,17.36,5.91,26.05.59,2.63-.25,4.75-2.99,5.37-2.91.67-4.56-.91-5.19-3.74-1.19-5.39-2.44-10.76-3.86-17.01-1.32,1.83-2.22,3.08-3.12,4.33-20.6,28.84-44.9,53.86-75.03,72.88-28.64,18.07-59.84,29.18-93.4,33.2-14.22,1.7-28.63,1.86-42.95,2.71-.58.03-1.16.02-1.74-.01-2.81-.17-4.79-1.43-4.66-4.44.12-2.82,2.05-3.86,4.76-3.9,8.34-.13,16.69-.09,25.01-.59,41.03-2.43,79.12-14,113.46-36.98,27.82-18.62,50.28-42.56,69.28-69.93.12-.17.16-.4.5-1.27Z" />
                            </svg>
                            <p>Strategic Growth</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container ">
                <div class="rotating-scroll magnetic-wrapper float-end p-3">
                    <a href="" class="go-down-btn magnetic-btn" title="Scroll down">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="120" height="120" viewBox="0 0 100 100" aria-hidden="true">

                            <!-- Arrow Polygon -->
                            <polygon fill="#878787" points="55.334,46 49.333,58 43.333,46" />

                            <!-- Circular Path for Text -->
                            <path id="textPath" fill="none" d="M89.322,50.197c0,22.09-17.91,40-40,40c-22.089,0-40-17.91-40-40 
                                c0-22.089,17.911-40,40-40C71.412,10.197,89.322,28.108,89.322,50.197z" />

                            <!-- Rotating Text Around Path -->
                            <text class="scrollText" font-size="8" letter-spacing="2" fill="#000" textLength="350">
                                <textPath href="#textPath" startOffset="-1%">
                                    &nbsp; • SCROLL DOWN • SCROLL DOWN • SCROLL DOWN • SCROLL DOWN •
                                </textPath>
                            </text>

                        </svg>
                    </a>
                </div>
            </section>


            <section class="container py-5">
                <div class="swiper industrySwiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="row align-items-center justify-content-evenly">
                                <div class="col-6">
                                    <h1 class="fw-bold"><span class="brdr-bottom">Industry Expertise That</span> Drives Results</h1>
                                    <p class="py-3 QASubcaption">From finance to technology to the public sector, we bring deep industry knowledge and a practical approach to each engagement.</p>
                                    <div class="question">
                                        <p>Which industry are you in?</p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <button class="btn rounded-pill text-danger border-secondary px-4 QAbutton">Retail</button>
                                            <button class="btn rounded-pill text-danger border-secondary px-4 QAbutton">Private Equity</button>
                                            <button class="btn rounded-pill text-danger border-secondary px-4 QAbutton">Technology</button>
                                            <button class="btn rounded-pill text-danger border-secondary px-4 QAbutton">Oil & Gas</button>
                                            <button class="btn rounded-pill text-danger border-secondary px-4 QAbutton">Healthcare & Life Sciences</button>
                                            <button class="btn rounded-pill text-danger border-secondary px-4 QAbutton">Chemicals</button>
                                            <button class="btn rounded-pill text-danger border-secondary px-4 QAbutton">Consumer Products</button>
                                            <button class="btn rounded-pill text-danger border-secondary px-4 QAbutton">Mining</button>
                                        </div>

                                        <!-- <p class="QASubcaption pt-5">View all...</p> -->
                                        <div class="button-effect pt-5">
                                            <a class="effect effect-3 " href="#" title="View all...">View all...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 d-flex justify-content-center">
                                    <img class="w-75" src="frontend/img/home/Group 32.png" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="row align-items-center justify-content-evenly">
                                <div class="col-6">
                                    <h1 class="fw-bold"><span class="brdr-bottom">Industry Expertise That</span> Drives Results</h1>
                                    <p class="py-3 QASubcaption">Choose your business need for tailored services and insights.</p>
                                    <div class="question">
                                        <p>What’s your top business priority right now?</p>
                                        <div class="d-flex flex-wrap gap-2">

                                            <button class="btn rounded-pill text-danger border-danger px-4 QAbutton">Data Analytics</button>
                                            <button class="btn rounded-pill text-danger border-danger px-4 QAbutton">Change Management</button>
                                            <button class="btn rounded-pill text-danger border-danger px-4 QAbutton">Cost Reduction</button>
                                            <button class="btn rounded-pill text-danger border-danger px-4 QAbutton">Customer Experience</button>
                                            <button class="btn rounded-pill text-danger border-danger px-4 QAbutton">Digital Strategy</button>
                                            <button class="btn rounded-pill text-danger border-danger px-4 QAbutton">Innovation</button>
                                            <button class="btn rounded-pill text-danger border-danger px-4 QAbutton">Market Expansion</button>
                                            <button class="btn rounded-pill text-danger border-danger px-4 QAbutton">Operations</button>
                                            <button class="btn rounded-pill text-danger border-danger px-4 QAbutton">Organization</button>
                                            <button class="btn rounded-pill text-danger border-danger px-4 QAbutton">Revenue Growth</button>
                                        </div>
                                        <div class="button-effect pt-5">
                                            <a class="effect effect-3 " href="#" title="Learn More">View all...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 d-flex justify-content-center">
                                    <img class="w-75" src="frontend/img/home/Q11.png" alt="">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>



            <!-- <section class="infiniteScroller pt-5">
                <div class="marquee-row pb-5">
                    <div class="marquee-block marquee1">
                        <ul class="marquee-item-list">
                            <li>Business Transformation</li>
                            <li>Innovation Strategy & Delivery</li>
                            <li>Business Resilience</li>
                            <li>Financial & Business Modelling</li>
                            <li>Financial Management</li>
                        </ul>
                    </div>
                </div>
            </section> -->

            <section class="py-5" id="stats-section">

                <div class="text-center">
                    <h1 class="fw-bold">
                        Tailored business solutions that adapt to<br>
                        <span class="brdr-bottom"> your unique systems and goals.</span>
                    </h1>
                </div>
                <div class="stats">
                    <div>
                        <div class="stat-item" data-target="10">0+</div>
                        <div class="stat-label fw-semibold">Year experience</div>
                    </div>
                    <div>
                        <div class="stat-item" data-target="2000">0+</div>
                        <div class="stat-label fw-semibold">Projects done</div>
                    </div>
                    <div>
                        <div class="stat-item" data-target="100">0+</div>
                        <div class="stat-label fw-semibold">Industries Served</div>
                    </div>
                </div>


            </section>


            <section class="businessSection container pt-2 pb-5">
                <div class="row justify-content-between align-items-start pt-5">
                    <div class="col-5">
                        <h1 class="fw-bold">
                            <span class="brdr-bottom"> Breakthrough </span> <br> Results. <br>Bold Moves.
                        </h1>
                        <p class="QASubcaption">See how we’ve helped forward-thinking organizations unlock growth, adapt to disruption, and create lasting value.</p>

                        <!-- <p class="QASubcaption pt-5">Read all...</p> -->
                        <div class="button-effect pt-5">
                            <a class="effect effect-3 " href="#" title="Read all...">Read all...</a>
                        </div>
                    </div>
                    <div class="col-6 BusinessScrollContainer">
                        <div class="row pb-4">
                            <div class="col-5">
                                <div class="d-flex align-items-center gap-4">
                                    <div><img class="" src="frontend/img/home/profile-circle.svg" alt="" style="width: 100px; height:100px;"></div>
                                    <div class="name">
                                        <!--<p class="m-0 small">Retail</p>-->
                                        <p class="fw-bold">Retail</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7">
                                <div>
                                    <span class="small badge rounded-pill text-bg-secondary px-3 py-2">Solutions by Us</span>
                                    <span class="small px-3">January 29, 2020</span>
                                </div>
                                <p class="fw-medium pt-3">RetailCo. revitalizes performance with customer-centric shift</p>
                                <p class="QASubcaption small">We applied our proprietary value-mapping methodology to align leadership, redefine KPIs, and instil a culture of data-informed decisions.</p>
                            </div>
                        </div>

                        <div class="row pb-4">
                            <div class="col-5">
                                <div class="d-flex align-items-center gap-4">
                                    <div><img class="" src="frontend/img/home/profile-circle.svg" alt="" style="width: 100px; height:100px;"></div>
                                    <div class="name">
                                        <!--<p class="m-0 small"></p>-->
                                        <p class="fw-bold">Technology</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7">
                                <div>
                                    <span class="small badge rounded-pill text-bg-secondary px-3 py-2">Solutions by Us</span>
                                    <span class="small px-3">January 29, 2020</span>
                                </div>
                                <p class="fw-medium pt-3">Smart Supply Chains: Data-Driven, Sustainable, Ready</p>
                                <p class="QASubcaption small">Through our unique value-mapping framework, we brought alignment across leadership, transformed performance metrics, and championed data-backed decisions.</p>
                            </div>
                        </div>

                        <!--<div class="row pb-4">-->
                        <!--    <div class="col-5">-->
                        <!--        <div class="d-flex align-items-center gap-4">-->
                        <!--            <div><img class="" src="frontend/img/home/profile-circle.svg" alt="" style="width: 100px; height:100px;"></div>-->
                        <!--            <div class="name">-->
                        <!--                <p class="m-0 small">Business Name</p>-->
                        <!--                <p class="fw-bold">Name</p>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="col-7">-->
                        <!--        <div>-->
                        <!--            <span class="small badge rounded-pill text-bg-secondary px-3">Business</span>-->
                        <!--            <span class="small px-3">January 29, 2020</span>-->
                        <!--        </div>-->
                        <!--        <p class="fw-medium pt-3">Strategic Value Framework</p>-->
                        <!--        <p class="QASubcaption small">We applied our proprietary value-mapping methodology to align leadership, redefine KPIs, and instil a culture of data-informed decisions.</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </section>
            <section class="circleContainer position-relative d-flex justify-content-center bg-white pt-5">

                <div class="circle2">
                    <div class="circle">
                        <div class="logo"><i class="fa-solid fa-plus text-dark"></i></div>
                        <div class="text">
                            <p class="">
                                Turning Businesses . Into Winners . </p>
                        </div>
                    </div>
                </div>
                <div class="cta-banner">
                    <div class="cta-content">
                        <h2 class="fw-bold"><span class="brdr-bottom">Guiding high-impact organizations to scale</span><br> with vision and purpose</h2>
                        <a class="btn btn-danger rounded-lg px-4" href="#">Let’s Make It Happen</a>
                    </div>
                </div>
            </section>


            <section class="container py-5">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <h1 class="fw-bold"> <span class="brdr-bottom">Our Latest</span> <br>Insights</h1>
                        <p class="text-muted mt-3 QASubcaption">Expert perspectives, sharp analysis, and strategic foresight for those shaping the future</p>
                        <a href="#" class="btn btn-danger mt-3 px-4">Read More</a>
                    </div>

                    <!-- Right Content: Swiper Carousel -->
                    <div class="col-lg-8">
                        <div class="swiper insightsSwiper">
                            <div class="swiper-wrapper">
                                <!-- Card 1 -->
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <img src="frontend/img/home/insight1.png" class="card-img-to" alt="Insight 1">
                                        <div class="card-body">
                                            <small class="text-muted">Category Name | Date</small>
                                            <h5 class="card-title mt-2">Driving Growth Through Intelligent Automation</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 2 -->
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <img src="frontend/img/home/insight2.png" class="card-img-to" alt="Insight 2">
                                        <div class="card-body">
                                            <small class="text-muted">Category Name | Date</small>
                                            <h5 class="card-title mt-2">Building the Digital Backbone: What Every Leader Must Know</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 1 -->
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <img src="frontend/img/home/insight1.png" class="card-img-to" alt="Insight 1">
                                        <div class="card-body">
                                            <small class="text-muted">Category Name | Date</small>
                                            <h5 class="card-title mt-2">Driving Growth Through Intelligent Automation</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 2 -->
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <img src="frontend/img/home/insight2.png" class="card-img-to" alt="Insight 2">
                                        <div class="card-body">
                                            <small class="text-muted">Category Name | Date</small>
                                            <h5 class="card-title mt-2">Building the Digital Backbone: What Every Leader Must Know</h5>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add more slides as needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> -->



        </div>
    </div>
    <!-- rotating circle script  -->
    <script>
        const text = document.querySelector(".text p");
        const str = text.textContent;
        text.innerHTML = str
            .split("")
            .map((char, i) => `<span style="transform: rotate(${i * 10.3}deg)" >${char}</span>`)
            .join("");
    </script>
    {{ view('frontend.layouts.scripts') }}
    {{view('frontend.layouts.footer')}}

</body>

</html>