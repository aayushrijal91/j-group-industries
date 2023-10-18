<header>
    <nav>
        <div class="container py-5">
            <div class="flex flex-wrap justify-center lg:justify-between items-center gap-y-7">
                <div class="w-7/2 lg:w-fit px-5 md:px-0"><a href="./"><?= renderImg('logo.png', 'logo') ?></a></div>

                <div class="w-full md:w-1/2 lg:w-fit hidden lg:flex items-center justify-center px-5 gap-x-2">
                    <a href="<?= $facebook ?>">
                        <svg width="33" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.2235 17.3964C31.223 14.4098 30.3954 11.4857 28.8384 8.97056C27.2815 6.45537 25.0605 4.45434 22.4384 3.20437C19.8163 1.95439 16.9029 1.50781 14.043 1.91749C11.1832 2.32717 8.49673 3.57596 6.30164 5.51601C4.10656 7.45607 2.49479 10.0062 1.65716 12.8644C0.819521 15.7226 0.791091 18.7692 1.57523 21.6436C2.35937 24.5181 3.92325 27.0999 6.08172 29.0834C8.24019 31.0669 10.9029 32.3691 13.7545 32.8358V21.9137H9.92109V17.3964H13.7565V13.9528C13.7565 10.0357 16.0127 7.87209 19.4628 7.87209C20.5959 7.88835 21.7263 7.99021 22.845 8.17685V12.0237H20.9379C20.6132 11.9794 20.283 12.0112 19.9718 12.1167C19.6606 12.2222 19.3763 12.3987 19.1399 12.6332C18.9035 12.8677 18.7211 13.1541 18.6061 13.4714C18.4912 13.7886 18.4466 14.1285 18.4758 14.466V17.3964H22.6668L21.9965 21.9137H18.4758V32.8358C22.0298 32.2543 25.2665 30.3797 27.6034 27.5493C29.9403 24.7189 31.224 21.1187 31.2235 17.3964Z" fill="#A78949" />
                        </svg>
                    </a>
                    <a href="<?= $instagram ?>">
                        <svg width="39" height="37" viewBox="0 0 39 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7928 5.54679C24.2069 5.54679 24.7296 5.56235 26.4733 5.63719C27.5218 5.64926 28.5602 5.83045 29.5436 6.17288C30.2567 6.43172 30.9043 6.82823 31.4448 7.33689C31.9852 7.84554 32.4065 8.45507 32.6815 9.12624C33.0453 10.0517 33.2379 11.0291 33.2507 12.0159C33.3294 13.657 33.3467 14.149 33.3467 18.3034C33.3467 22.4578 33.3302 22.9498 33.2507 24.591C33.2379 25.5777 33.0453 26.5551 32.6815 27.4806C32.4065 28.1518 31.9852 28.7613 31.4448 29.27C30.9043 29.7786 30.2567 30.1751 29.5436 30.434C28.5602 30.7764 27.5218 30.9576 26.4733 30.9697C24.7304 31.0438 24.2076 31.0601 19.7928 31.0601C15.378 31.0601 14.8552 31.0445 13.1123 30.9697C12.0639 30.9576 11.0254 30.7764 10.042 30.434C9.32892 30.1751 8.6813 29.7786 8.14085 29.27C7.6004 28.7613 7.17911 28.1518 6.90409 27.4806C6.54026 26.5551 6.34775 25.5777 6.33492 24.591C6.25619 22.9498 6.23887 22.4578 6.23887 18.3034C6.23887 14.149 6.25541 13.657 6.33492 12.0159C6.34775 11.0291 6.54026 10.0517 6.90409 9.12624C7.17911 8.45507 7.6004 7.84554 8.14085 7.33689C8.6813 6.82823 9.32892 6.43172 10.042 6.17288C11.0254 5.83045 12.0639 5.64926 13.1123 5.63719C14.856 5.56309 15.3787 5.54679 19.7928 5.54679ZM19.7928 2.7431C15.3055 2.7431 14.7403 2.76089 12.9769 2.83646C11.6047 2.86215 10.2472 3.10666 8.96194 3.55961C7.85941 3.95058 6.86079 4.56325 6.03577 5.35489C5.19389 6.13167 4.54237 7.07207 4.12671 8.11042C3.64545 9.32006 3.38565 10.5978 3.35836 11.8892C3.27964 13.5474 3.26074 14.0794 3.26074 18.3027C3.26074 22.526 3.27964 23.058 3.35993 24.7177C3.38723 26.0091 3.64703 27.2868 4.12828 28.4964C4.54348 29.5346 5.19446 30.475 6.03577 31.252C6.86124 32.0438 7.86042 32.6565 8.96352 33.0472C10.2488 33.5002 11.6063 33.7447 12.9784 33.7704C14.7419 33.8445 15.3047 33.8638 19.7944 33.8638C24.284 33.8638 24.8469 33.846 26.6103 33.7704C27.9824 33.7447 29.34 33.5002 30.6252 33.0472C31.7231 32.6467 32.7201 32.035 33.5524 31.2511C34.3847 30.4672 35.034 29.5285 35.4589 28.495C35.9402 27.2853 36.1999 26.0076 36.2272 24.7162C36.306 23.058 36.3249 22.526 36.3249 18.3027C36.3249 14.0794 36.306 13.5474 36.2257 11.8877C36.1984 10.5963 35.9386 9.31858 35.4573 8.10894C35.0421 7.07073 34.3911 6.13033 33.5498 5.35341C32.7244 4.56159 31.7252 3.9489 30.6221 3.55813C29.3368 3.10518 27.9793 2.86067 26.6072 2.83498C24.8453 2.76089 24.2801 2.7431 19.7928 2.7431Z" fill="#A78949" />
                            <path d="M19.7928 10.3125C18.1137 10.3125 16.4724 10.7811 15.0763 11.6591C13.6802 12.537 12.592 13.7849 11.9495 15.245C11.3069 16.705 11.1388 18.3116 11.4664 19.8615C11.7939 21.4115 12.6025 22.8352 13.7898 23.9526C14.9771 25.0701 16.4898 25.8311 18.1366 26.1394C19.7834 26.4477 21.4904 26.2894 23.0417 25.6847C24.5929 25.0799 25.9188 24.0558 26.8517 22.7418C27.7845 21.4278 28.2824 19.883 28.2824 18.3027C28.2824 16.1835 27.388 14.1512 25.7959 12.6528C24.2038 11.1543 22.0444 10.3125 19.7928 10.3125ZM19.7928 23.4892C18.7029 23.4892 17.6375 23.185 16.7313 22.6151C15.825 22.0452 15.1187 21.2352 14.7016 20.2875C14.2845 19.3398 14.1754 18.2969 14.388 17.2908C14.6007 16.2848 15.1255 15.3606 15.8962 14.6353C16.6669 13.9099 17.6488 13.4159 18.7178 13.2158C19.7867 13.0157 20.8947 13.1184 21.9017 13.511C22.9086 13.9035 23.7693 14.5683 24.3748 15.4212C24.9803 16.2741 25.3035 17.2769 25.3035 18.3027C25.3035 19.6782 24.7229 20.9975 23.6895 21.9701C22.656 22.9428 21.2544 23.4892 19.7928 23.4892Z" fill="#A78949" />
                            <path d="M28.6179 11.864C29.7135 11.864 30.6017 11.028 30.6017 9.99682C30.6017 8.96562 29.7135 8.12967 28.6179 8.12967C27.5222 8.12967 26.634 8.96562 26.634 9.99682C26.634 11.028 27.5222 11.864 28.6179 11.864Z" fill="#A78949" />
                        </svg>
                    </a>
                </div>

                <div class="w-full lg:w-fit flex flex-wrap justify-center items-center xl:-mx-2">
                    <div class="w-fit px-1 lg:hidden">
                        <a href="<?= $facebook ?>">
                            <svg width="33" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M31.2235 17.3964C31.223 14.4098 30.3954 11.4857 28.8384 8.97056C27.2815 6.45537 25.0605 4.45434 22.4384 3.20437C19.8163 1.95439 16.9029 1.50781 14.043 1.91749C11.1832 2.32717 8.49673 3.57596 6.30164 5.51601C4.10656 7.45607 2.49479 10.0062 1.65716 12.8644C0.819521 15.7226 0.791091 18.7692 1.57523 21.6436C2.35937 24.5181 3.92325 27.0999 6.08172 29.0834C8.24019 31.0669 10.9029 32.3691 13.7545 32.8358V21.9137H9.92109V17.3964H13.7565V13.9528C13.7565 10.0357 16.0127 7.87209 19.4628 7.87209C20.5959 7.88835 21.7263 7.99021 22.845 8.17685V12.0237H20.9379C20.6132 11.9794 20.283 12.0112 19.9718 12.1167C19.6606 12.2222 19.3763 12.3987 19.1399 12.6332C18.9035 12.8677 18.7211 13.1541 18.6061 13.4714C18.4912 13.7886 18.4466 14.1285 18.4758 14.466V17.3964H22.6668L21.9965 21.9137H18.4758V32.8358C22.0298 32.2543 25.2665 30.3797 27.6034 27.5493C29.9403 24.7189 31.224 21.1187 31.2235 17.3964Z" fill="#A78949" />
                            </svg>
                        </a>
                    </div>

                    <div class="w-fit px-1 lg:hidden">
                        <a href="<?= $instagram ?>">
                            <svg width="39" height="37" viewBox="0 0 39 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.7928 5.54679C24.2069 5.54679 24.7296 5.56235 26.4733 5.63719C27.5218 5.64926 28.5602 5.83045 29.5436 6.17288C30.2567 6.43172 30.9043 6.82823 31.4448 7.33689C31.9852 7.84554 32.4065 8.45507 32.6815 9.12624C33.0453 10.0517 33.2379 11.0291 33.2507 12.0159C33.3294 13.657 33.3467 14.149 33.3467 18.3034C33.3467 22.4578 33.3302 22.9498 33.2507 24.591C33.2379 25.5777 33.0453 26.5551 32.6815 27.4806C32.4065 28.1518 31.9852 28.7613 31.4448 29.27C30.9043 29.7786 30.2567 30.1751 29.5436 30.434C28.5602 30.7764 27.5218 30.9576 26.4733 30.9697C24.7304 31.0438 24.2076 31.0601 19.7928 31.0601C15.378 31.0601 14.8552 31.0445 13.1123 30.9697C12.0639 30.9576 11.0254 30.7764 10.042 30.434C9.32892 30.1751 8.6813 29.7786 8.14085 29.27C7.6004 28.7613 7.17911 28.1518 6.90409 27.4806C6.54026 26.5551 6.34775 25.5777 6.33492 24.591C6.25619 22.9498 6.23887 22.4578 6.23887 18.3034C6.23887 14.149 6.25541 13.657 6.33492 12.0159C6.34775 11.0291 6.54026 10.0517 6.90409 9.12624C7.17911 8.45507 7.6004 7.84554 8.14085 7.33689C8.6813 6.82823 9.32892 6.43172 10.042 6.17288C11.0254 5.83045 12.0639 5.64926 13.1123 5.63719C14.856 5.56309 15.3787 5.54679 19.7928 5.54679ZM19.7928 2.7431C15.3055 2.7431 14.7403 2.76089 12.9769 2.83646C11.6047 2.86215 10.2472 3.10666 8.96194 3.55961C7.85941 3.95058 6.86079 4.56325 6.03577 5.35489C5.19389 6.13167 4.54237 7.07207 4.12671 8.11042C3.64545 9.32006 3.38565 10.5978 3.35836 11.8892C3.27964 13.5474 3.26074 14.0794 3.26074 18.3027C3.26074 22.526 3.27964 23.058 3.35993 24.7177C3.38723 26.0091 3.64703 27.2868 4.12828 28.4964C4.54348 29.5346 5.19446 30.475 6.03577 31.252C6.86124 32.0438 7.86042 32.6565 8.96352 33.0472C10.2488 33.5002 11.6063 33.7447 12.9784 33.7704C14.7419 33.8445 15.3047 33.8638 19.7944 33.8638C24.284 33.8638 24.8469 33.846 26.6103 33.7704C27.9824 33.7447 29.34 33.5002 30.6252 33.0472C31.7231 32.6467 32.7201 32.035 33.5524 31.2511C34.3847 30.4672 35.034 29.5285 35.4589 28.495C35.9402 27.2853 36.1999 26.0076 36.2272 24.7162C36.306 23.058 36.3249 22.526 36.3249 18.3027C36.3249 14.0794 36.306 13.5474 36.2257 11.8877C36.1984 10.5963 35.9386 9.31858 35.4573 8.10894C35.0421 7.07073 34.3911 6.13033 33.5498 5.35341C32.7244 4.56159 31.7252 3.9489 30.6221 3.55813C29.3368 3.10518 27.9793 2.86067 26.6072 2.83498C24.8453 2.76089 24.2801 2.7431 19.7928 2.7431Z" fill="#A78949" />
                                <path d="M19.7928 10.3125C18.1137 10.3125 16.4724 10.7811 15.0763 11.6591C13.6802 12.537 12.592 13.7849 11.9495 15.245C11.3069 16.705 11.1388 18.3116 11.4664 19.8615C11.7939 21.4115 12.6025 22.8352 13.7898 23.9526C14.9771 25.0701 16.4898 25.8311 18.1366 26.1394C19.7834 26.4477 21.4904 26.2894 23.0417 25.6847C24.5929 25.0799 25.9188 24.0558 26.8517 22.7418C27.7845 21.4278 28.2824 19.883 28.2824 18.3027C28.2824 16.1835 27.388 14.1512 25.7959 12.6528C24.2038 11.1543 22.0444 10.3125 19.7928 10.3125ZM19.7928 23.4892C18.7029 23.4892 17.6375 23.185 16.7313 22.6151C15.825 22.0452 15.1187 21.2352 14.7016 20.2875C14.2845 19.3398 14.1754 18.2969 14.388 17.2908C14.6007 16.2848 15.1255 15.3606 15.8962 14.6353C16.6669 13.9099 17.6488 13.4159 18.7178 13.2158C19.7867 13.0157 20.8947 13.1184 21.9017 13.511C22.9086 13.9035 23.7693 14.5683 24.3748 15.4212C24.9803 16.2741 25.3035 17.2769 25.3035 18.3027C25.3035 19.6782 24.7229 20.9975 23.6895 21.9701C22.656 22.9428 21.2544 23.4892 19.7928 23.4892Z" fill="#A78949" />
                                <path d="M28.6179 11.864C29.7135 11.864 30.6017 11.028 30.6017 9.99682C30.6017 8.96562 29.7135 8.12967 28.6179 8.12967C27.5222 8.12967 26.634 8.96562 26.634 9.99682C26.634 11.028 27.5222 11.864 28.6179 11.864Z" fill="#A78949" />
                            </svg>
                        </a>
                    </div>

                    <div class="w-fit px-1 md:px-2">
                        <a href="tel:<?= $phone_number ?>" class="bg-white text-primary rounded-full h-[58px] text-lg md:text-2xl font-extrabold flex items-center justify-center gap-x-2 px-6">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.793 17.0586L15.7798 15.2758C15.3628 15.0893 14.8958 15.0461 14.4517 15.153C14.0076 15.2599 13.6114 15.5108 13.3249 15.8666L12.1684 17.3127C10.2723 16.096 8.65819 14.4879 7.43438 12.5964L8.88042 11.4399C9.23588 11.1535 9.48659 10.7575 9.59347 10.3137C9.70034 9.86993 9.65737 9.40325 9.47125 8.98644L7.70172 4.96291C7.50288 4.51489 7.15135 4.15206 6.70984 3.93915C6.26833 3.72624 5.76554 3.67709 5.29115 3.80046L1.8939 4.6867C1.40103 4.81423 0.972531 5.11908 0.690451 5.54288C0.40837 5.96668 0.292537 6.47965 0.365132 6.98354C0.997974 11.3775 3.03693 15.4483 6.17678 18.5865C9.31662 21.7248 13.3884 23.7617 17.7827 24.3923C18.2863 24.4636 18.7985 24.3467 19.2214 24.0642C19.6443 23.7816 19.9483 23.3531 20.0751 22.8605L20.9614 19.4633C21.0846 18.989 21.0347 18.4863 20.8205 18.0455C20.6064 17.6048 20.242 17.2548 19.793 17.0586Z" fill="#A78949" />
                                <path d="M18.0691 0.779858C17.0738 0.778047 16.0942 1.02814 15.2216 1.50686C14.349 1.98557 13.6117 2.67733 13.0784 3.51771C12.5451 4.3581 12.2332 5.31977 12.1717 6.31316C12.1102 7.30656 12.301 8.29937 12.7265 9.19914L12.1608 12.5964L15.5581 12.0307C16.3594 12.4091 17.2356 12.6024 18.1218 12.5962C19.008 12.5901 19.8814 12.3847 20.6774 11.9952C21.4735 11.6058 22.1717 11.0422 22.7204 10.3463C23.2691 9.65042 23.6542 8.84001 23.8473 7.97509C24.0403 7.11017 24.0363 6.2129 23.8356 5.34974C23.6348 4.48658 23.2425 3.67963 22.6876 2.98866C22.1327 2.29768 21.4295 1.74039 20.63 1.35804C19.8305 0.975691 18.9553 0.778086 18.0691 0.779858Z" fill="#A78949" />
                            </svg>

                            <?= $phone_number ?>
                        </a>
                    </div>

                    <div class="w-fit px-1 md:px-2">
                        <a href="mailto:<?= $admin_email ?>" class="bg-white rounded-full flex justify-center items-center h-[58px] w-[58px]">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_12_658)">
                                    <path d="M15.4876 18.3803C14.9916 18.651 14.4355 18.7928 13.8704 18.7928C13.3053 18.7928 12.7493 18.651 12.2533 18.3803L0.366943 11.8958V21.0429C0.366943 22.2368 0.841211 23.3818 1.68541 24.226C2.52962 25.0702 3.6746 25.5445 4.86848 25.5445H22.8746C24.0685 25.5445 25.2135 25.0702 26.0577 24.226C26.9019 23.3818 27.3762 22.2368 27.3762 21.0429V11.8958L15.4876 18.3803Z" fill="#A78949" />
                                    <path d="M13.8716 15.416C13.6836 15.4159 13.4987 15.3687 13.3336 15.2787L0.954394 8.5264C0.776709 8.4297 0.628372 8.2869 0.524993 8.11302C0.421615 7.93914 0.367016 7.7406 0.366943 7.53831C0.366943 6.34443 0.841211 5.19945 1.68541 4.35524C2.52962 3.51104 3.6746 3.03677 4.86848 3.03677H22.8746C24.0685 3.03677 25.2135 3.51104 26.0577 4.35524C26.9019 5.19945 27.3762 6.34443 27.3762 7.53831C27.3763 7.74038 27.3221 7.93876 27.2191 8.11262C27.1161 8.28648 26.9682 8.42941 26.791 8.5264L14.4117 15.2787C14.246 15.369 14.0603 15.4163 13.8716 15.416Z" fill="#A78949" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_12_658">
                                        <rect width="27.0092" height="27.0092" fill="white" transform="translate(0.366943 0.786011)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="banner pt-6 xl:pt-0">
        <div class="flex flex-wrap items-center pb-40 gap-y-11 xl:gap-y-5">
            <div class="w-full xl:w-1/2 flex xl:justify-end px-3 2xl:px-0">
                <article class="w-full 2xl:w-3/4">
                    <h1 class="text-[45px] md:text-6xl lg:text-[85px] text-center xl:text-start font-helvetica-condensed font-semibold uppercase leading-none text-primary">Commercial and Residential <span class="text-white">Hazardous Material Removal</span></h1>
                    <p class="text-white text-sm md:text-2xl text-center xl:text-start font-medium py-8"><b>Fully Licensed and Qualified</b> with all NSW regulations and safety requirements</p>
                    <div class="flex flex-wrap items-center gap-x-6 justify-center">
                        <div class="w-1/5 md:w-fit"><?= renderImg('lendlease.png', 'logo') ?></div>
                        <div class="w-1/5 md:w-fit"><?= renderImg('lipman.png', 'logo') ?></div>
                        <div class="w-1/5 md:w-fit"><?= renderImg('tbi-taylor.png', 'logo') ?></div>
                        <div class="w-1/5 md:w-fit"><?= renderImg('cpb.png', 'logo') ?></div>
                        <div class="w-1/5 md:w-fit"><?= renderImg('safework.png', 'logo') ?></div>
                    </div>
                </article>
            </div>
            <div class="w-full xl:w-1/2"><?= renderImg('banner.jpg', 'lib', 'w-full rounded-tl-[100px] md:rounded-tl-none md:rounded-tr-[100px] md:rounded-bl-[250px]') ?></div>
        </div>
    </div>
</header>

<div class="container mt-[-190px] xl:mt-[-114px]">
    <section class="form rounded-[12px] bg-[#282828] py-10 px-4 relative">
        <div class="flex flex-wrap justify-between items-center gap-y-8">
            <div class="w-full xl:w-5/12 md:px-6">
                <h2 class="text-[40px] md:text-[70px] text-white font-helvetica-condensed font-semibold uppercase leading-none text-center xl:text-start">Your trusted Hazardous Removal Experts</h2>
                <p class="text-white flex items-center gap-x-3 font-semibold pt-3 justify-center xl:justify-start">Consistent 5 star ratings
                    <span>
                        <svg width="77" height="13" viewBox="0 0 77 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5215 4.96648C12.5215 4.96727 12.5208 4.96788 12.52 4.96777L10.0883 4.61469C9.39537 4.51408 8.79632 4.07898 8.48633 3.45118L7.39749 1.24598C7.3516 1.16734 7.28591 1.1021 7.20695 1.05675C7.128 1.01141 7.03854 0.987549 6.94749 0.987549C6.85644 0.987549 6.76698 1.01141 6.68802 1.05675C6.60907 1.1021 6.54337 1.16734 6.49749 1.24598C5.50846 3.25407 3.59269 4.64634 1.37749 4.96798C1.28514 4.98139 1.19838 5.02038 1.12704 5.08053C1.05569 5.14069 1.00261 5.21961 0.973787 5.30836C0.944965 5.39712 0.941556 5.49217 0.963947 5.58276C0.986338 5.67335 1.03363 5.75587 1.10049 5.82098C2.70358 7.38528 3.43588 9.63949 3.05649 11.847C3.04066 11.939 3.05092 12.0336 3.0861 12.1201C3.12128 12.2066 3.17997 12.2815 3.25553 12.3363C3.33109 12.3912 3.4205 12.4238 3.51363 12.4304C3.60676 12.4371 3.6999 12.4175 3.78249 12.374C5.76419 11.3303 8.13401 11.3287 10.1165 12.371C10.1879 12.4089 10.2676 12.4285 10.3485 12.428C10.4213 12.4281 10.4934 12.4124 10.5595 12.3818C10.6256 12.3512 10.6843 12.3065 10.7313 12.2509C10.7784 12.1953 10.8127 12.13 10.8319 12.0597C10.8511 11.9894 10.8547 11.9158 10.8425 11.844C10.4631 9.63649 11.1954 7.38228 12.7985 5.81798C12.8653 5.75287 12.9126 5.67035 12.935 5.57976C12.9574 5.48917 12.954 5.39412 12.9252 5.30536C12.8964 5.21661 12.8433 5.13769 12.7719 5.07753C12.701 5.0177 12.6148 4.97881 12.523 4.9652C12.5222 4.96508 12.5215 4.96569 12.5215 4.96648Z" fill="#FFC100" />
                            <path d="M28.5215 4.96648C28.5215 4.96727 28.5208 4.96788 28.52 4.96777L26.0883 4.61469C25.3954 4.51408 24.7963 4.07898 24.4863 3.45118L23.3975 1.24598C23.3516 1.16734 23.2859 1.1021 23.207 1.05675C23.128 1.01141 23.0385 0.987549 22.9475 0.987549C22.8564 0.987549 22.767 1.01141 22.688 1.05675C22.6091 1.1021 22.5434 1.16734 22.4975 1.24598C21.5085 3.25407 19.5927 4.64634 17.3775 4.96798C17.2851 4.98139 17.1984 5.02038 17.127 5.08053C17.0557 5.14069 17.0026 5.21961 16.9738 5.30836C16.945 5.39712 16.9416 5.49217 16.9639 5.58276C16.9863 5.67335 17.0336 5.75587 17.1005 5.82098C18.7036 7.38528 19.4359 9.63949 19.0565 11.847C19.0407 11.939 19.0509 12.0336 19.0861 12.1201C19.1213 12.2066 19.18 12.2815 19.2555 12.3363C19.3311 12.3912 19.4205 12.4238 19.5136 12.4304C19.6068 12.4371 19.6999 12.4175 19.7825 12.374C21.7642 11.3303 24.134 11.3287 26.1165 12.371C26.1879 12.4089 26.2676 12.4285 26.3485 12.428C26.4213 12.4281 26.4934 12.4124 26.5595 12.3818C26.6256 12.3512 26.6843 12.3065 26.7313 12.2509C26.7784 12.1953 26.8127 12.13 26.8319 12.0597C26.8511 11.9894 26.8547 11.9158 26.8425 11.844C26.4631 9.63649 27.1954 7.38228 28.7985 5.81798C28.8653 5.75287 28.9126 5.67035 28.935 5.57976C28.9574 5.48917 28.954 5.39412 28.9252 5.30536C28.8964 5.21661 28.8433 5.13769 28.7719 5.07753C28.701 5.0177 28.6148 4.97881 28.523 4.9652C28.5222 4.96508 28.5215 4.96569 28.5215 4.96648Z" fill="#FFC100" />
                            <path d="M44.5215 4.96648C44.5215 4.96727 44.5208 4.96788 44.52 4.96777L42.0883 4.61469C41.3954 4.51408 40.7963 4.07898 40.4863 3.45118L39.3975 1.24598C39.3516 1.16734 39.2859 1.1021 39.207 1.05675C39.128 1.01141 39.0385 0.987549 38.9475 0.987549C38.8564 0.987549 38.767 1.01141 38.688 1.05675C38.6091 1.1021 38.5434 1.16734 38.4975 1.24598C37.5085 3.25407 35.5927 4.64634 33.3775 4.96798C33.2851 4.98139 33.1984 5.02038 33.127 5.08053C33.0557 5.14069 33.0026 5.21961 32.9738 5.30836C32.945 5.39712 32.9416 5.49217 32.9639 5.58276C32.9863 5.67335 33.0336 5.75587 33.1005 5.82098C34.7036 7.38528 35.4359 9.63949 35.0565 11.847C35.0407 11.939 35.0509 12.0336 35.0861 12.1201C35.1213 12.2066 35.18 12.2815 35.2555 12.3363C35.3311 12.3912 35.4205 12.4238 35.5136 12.4304C35.6068 12.4371 35.6999 12.4175 35.7825 12.374C37.7642 11.3303 40.134 11.3287 42.1165 12.371C42.1879 12.4089 42.2676 12.4285 42.3485 12.428C42.4213 12.4281 42.4934 12.4124 42.5595 12.3818C42.6256 12.3512 42.6843 12.3065 42.7313 12.2509C42.7784 12.1953 42.8127 12.13 42.8319 12.0597C42.8511 11.9894 42.8547 11.9158 42.8425 11.844C42.4631 9.63649 43.1954 7.38228 44.7985 5.81798C44.8653 5.75287 44.9126 5.67035 44.935 5.57976C44.9574 5.48917 44.954 5.39412 44.9252 5.30536C44.8964 5.21661 44.8433 5.13769 44.7719 5.07753C44.701 5.0177 44.6148 4.97881 44.523 4.9652C44.5222 4.96508 44.5215 4.96569 44.5215 4.96648Z" fill="#FFC100" />
                            <path d="M60.5215 4.96648C60.5215 4.96727 60.5208 4.96788 60.52 4.96777L58.0883 4.61469C57.3954 4.51408 56.7963 4.07898 56.4863 3.45118L55.3975 1.24598C55.3516 1.16734 55.2859 1.1021 55.207 1.05675C55.128 1.01141 55.0385 0.987549 54.9475 0.987549C54.8564 0.987549 54.767 1.01141 54.688 1.05675C54.6091 1.1021 54.5434 1.16734 54.4975 1.24598C53.5085 3.25407 51.5927 4.64634 49.3775 4.96798C49.2851 4.98139 49.1984 5.02038 49.127 5.08053C49.0557 5.14069 49.0026 5.21961 48.9738 5.30836C48.945 5.39712 48.9416 5.49217 48.9639 5.58276C48.9863 5.67335 49.0336 5.75587 49.1005 5.82098C50.7036 7.38528 51.4359 9.63949 51.0565 11.847C51.0407 11.939 51.0509 12.0336 51.0861 12.1201C51.1213 12.2066 51.18 12.2815 51.2555 12.3363C51.3311 12.3912 51.4205 12.4238 51.5136 12.4304C51.6068 12.4371 51.6999 12.4175 51.7825 12.374C53.7642 11.3303 56.134 11.3287 58.1165 12.371C58.1879 12.4089 58.2676 12.4285 58.3485 12.428C58.4213 12.4281 58.4934 12.4124 58.5595 12.3818C58.6256 12.3512 58.6843 12.3065 58.7313 12.2509C58.7784 12.1953 58.8127 12.13 58.8319 12.0597C58.8511 11.9894 58.8547 11.9158 58.8425 11.844C58.4631 9.63649 59.1954 7.38228 60.7985 5.81798C60.8653 5.75287 60.9126 5.67035 60.935 5.57976C60.9574 5.48917 60.954 5.39412 60.9252 5.30536C60.8964 5.21661 60.8433 5.13769 60.7719 5.07753C60.701 5.0177 60.6148 4.97881 60.523 4.9652C60.5222 4.96508 60.5215 4.96569 60.5215 4.96648Z" fill="#FFC100" />
                            <path d="M76.5215 4.96648C76.5215 4.96727 76.5208 4.96788 76.52 4.96777L74.0883 4.61469C73.3954 4.51408 72.7963 4.07898 72.4863 3.45118L71.3975 1.24598C71.3516 1.16734 71.2859 1.1021 71.207 1.05675C71.128 1.01141 71.0385 0.987549 70.9475 0.987549C70.8564 0.987549 70.767 1.01141 70.688 1.05675C70.6091 1.1021 70.5434 1.16734 70.4975 1.24598C69.5085 3.25407 67.5927 4.64634 65.3775 4.96798C65.2851 4.98139 65.1984 5.02038 65.127 5.08053C65.0557 5.14069 65.0026 5.21961 64.9738 5.30836C64.945 5.39712 64.9416 5.49217 64.9639 5.58276C64.9863 5.67335 65.0336 5.75587 65.1005 5.82098C66.7036 7.38528 67.4359 9.63949 67.0565 11.847C67.0407 11.939 67.0509 12.0336 67.0861 12.1201C67.1213 12.2066 67.18 12.2815 67.2555 12.3363C67.3311 12.3912 67.4205 12.4238 67.5136 12.4304C67.6068 12.4371 67.6999 12.4175 67.7825 12.374C69.7642 11.3303 72.134 11.3287 74.1165 12.371C74.1879 12.4089 74.2676 12.4285 74.3485 12.428C74.4213 12.4281 74.4934 12.4124 74.5595 12.3818C74.6256 12.3512 74.6843 12.3065 74.7313 12.2509C74.7784 12.1953 74.8127 12.13 74.8319 12.0597C74.8511 11.9894 74.8547 11.9158 74.8425 11.844C74.4631 9.63649 75.1954 7.38228 76.7985 5.81798C76.8653 5.75287 76.9126 5.67035 76.935 5.57976C76.9574 5.48917 76.954 5.39412 76.9252 5.30536C76.8964 5.21661 76.8433 5.13769 76.7719 5.07753C76.701 5.0177 76.6148 4.97881 76.523 4.9652C76.5222 4.96508 76.5215 4.96569 76.5215 4.96648Z" fill="#FFC100" />
                        </svg>
                    </span>
                    across the board
                </p>
            </div>

            <div class="w-full xl:w-7/12 md:px-6">
                <form action="" class="">
                    <div class="flex flex-wrap gap-y-4">
                        <div class="w-full md:w-1/2 md:px-1">
                            <label for="fname">First name</label>
                            <input type="text" id="fname" class="form-control" placeholder="Eg: John">
                        </div>
                        <div class="w-full md:w-1/2 md:px-1">
                            <label for="lname">Last name</label>
                            <input type="text" id="lname" class="form-control" placeholder="Eg: Doe">
                        </div>
                        <div class="w-full md:w-1/3 md:px-1">
                            <label for="contactNumber">Contact Number</label>
                            <input type="text" id="contactNumber" class="form-control" placeholder="Eg: 0400 000 000">
                        </div>
                        <div class="w-full md:w-1/3 md:px-1">
                            <label for="emailAddress">Email Address</label>
                            <input type="text" id="emailAddress" class="form-control" placeholder="Eg: example@email.com">
                        </div>
                        <div class="w-full md:w-1/3 md:px-1">
                            <label for="location">Location</label>
                            <input type="text" id="location" class="form-control" placeholder="Eg: Parramatta">
                        </div>
                        <div class="w-full md:px-1">
                            <button type="submit" class="bg-primary text-white w-full h-[47px] md:h-[57px] font-bold font-raleway text-lg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?= renderImg('anchor.png', 'lib', 'absolute start-0 bottom-[-29px] lg:bottom-[-40px] xl:bottom-[-66px] z-50 hidden md:block') ?>
        <?= renderImg('anchor-sm.png', 'lib', 'absolute w-full start-0 bottom-[-74px] z-50 md:hidden') ?>
    </section>

    <section class="services">
        <div class="flex flex-wrap gap-y-3 justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3 md:px-1.5">
                <article class="min-h-[608px] h-full rounded-[12px] overflow-hidden relative">
                    <?= renderImg('servicing-nsw.jpg', 'lib', 'h-full object-cover object-center') ?>
                    <div class="overlay absolute w-full bottom-0">
                        <?= renderImg('slope.png', 'lib') ?>
                        <article class="bg-primary text-center p-5 md:py-6 text-white">
                            <h4 class="font-helvetica-condensed font-semibold uppercase text-2xl md:text-4xl">Servicing NSW WIDe</h4>
                            <p class="text-lg">Over 20 Years Experience</p>
                        </article>
                    </div>
                </article>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 md:px-1.5">
                <article class="min-h-[608px] h-full rounded-[12px] overflow-hidden relative">
                    <?= renderImg('free-onsite.jpg', 'lib', 'h-full object-cover object-center') ?>
                    <div class="overlay absolute w-full bottom-0">
                        <?= renderImg('slope.png', 'lib') ?>
                        <article class="bg-primary text-center p-5 md:py-6 text-white">
                            <h4 class="font-helvetica-condensed font-semibold uppercase text-2xl md:text-4xl">Free Onsite Quote</h4>
                            <p class="text-lg">We come to you NSW Wide</p>
                        </article>
                    </div>
                </article>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 md:px-1.5">
                <article class="min-h-[608px] h-full rounded-[12px] overflow-hidden relative">
                    <?= renderImg('emergency-response.jpg', 'lib', 'h-full object-cover object-center') ?>
                    <div class="overlay absolute w-full bottom-0">
                        <?= renderImg('slope.png', 'lib') ?>
                        <article class="bg-primary text-center p-5 md:py-6 text-white">
                            <h4 class="font-helvetica-condensed font-semibold uppercase text-2xl md:text-4xl">24/7 Emergency Response</h4>
                            <p class="text-lg">Always Here for Asbestos Emergencies</p>
                        </article>
                    </div>
                </article>
            </div>
        </div>
    </section>
</div>

<section class="map bg-secondary rounded-[23px] md:rounded-[42px] mt-16 md:mt-24">
    <div class="container py-14 md:py-24">
        <h2 class="text-center text-[40px] md:text-[70px] lg:text-[80px] xl:text-[96px] text-white font-helvetica-condensed uppercase font-semibold leading-none">the trusted first choice in Hazardous material removal</h2>

        <div class="flex flex-wrap pt-9 lg:pt-20 gap-y-3 justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                <article class="serviceCard">
                    <div class="rounded-[12px] md:rounded-[20px] overflow-hidden h-[341px] bg-grey">
                        <?= renderImg('asbestos-removal.jpg', 'lib', 'object-cover object-center w-full h-full') ?>
                    </div>
                    <article class="mx-[18px] mt-[-56px] text-center flex flex-col items-center justify-center text-white relative rounded-[20px] bg-primary h-[72px] md:h-[112px]">
                        <p class="text-lg md:text-[27px] font-helvetica-condensed font-semibold">Asbestos Removal</p>
                        <a href="#" class="font-raleway font-semibold text-sm md:text-base">Book Today</a>
                    </article>
                </article>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                <article class="serviceCard">
                    <div class="rounded-[12px] md:rounded-[20px] overflow-hidden h-[341px] bg-grey">
                        <?= renderImg('mould-remediation.jpg', 'lib', 'object-cover object-center w-full h-full') ?>
                    </div>
                    <article class="mx-[18px] mt-[-56px] text-center flex flex-col items-center justify-center text-white relative rounded-[20px] bg-primary h-[72px] md:h-[112px]">
                        <p class="text-lg md:text-[27px] font-helvetica-condensed font-semibold">Mould Remediation</p>
                        <a href="#" class="font-raleway font-semibold text-sm md:text-base">Book Today</a>
                    </article>
                </article>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                <article class="serviceCard">
                    <div class="rounded-[12px] md:rounded-[20px] overflow-hidden h-[341px] bg-grey">
                        <?= renderImg('hazardous-material.jpg', 'lib', 'object-cover object-center w-full h-full') ?>
                    </div>
                    <article class="mx-[18px] mt-[-56px] text-center flex flex-col items-center justify-center text-white relative rounded-[20px] bg-primary h-[72px] md:h-[112px]">
                        <p class="text-lg md:text-[27px] font-helvetica-condensed font-semibold">Hazardous Material Removal</p>
                        <a href="#" class="font-raleway font-semibold text-sm md:text-base">Book Today</a>
                    </article>
                </article>
            </div>
        </div>
    </div>

    <iframe class="h-[820px] w-full rounded-[23px] md:rounded-[42px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13259.581913302782!2d150.99845597151742!3d-33.8150102940093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a318e167af4f%3A0x5017d681632c600!2sParramatta%20NSW%202150!5e0!3m2!1sen!2sau!4v1697534805129!5m2!1sen!2sau" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="py-12 md:py-24 about">
    <div class="flex flex-wrap gap-y-12">
        <div class="w-full lg:w-1/2 order-2 lg:order-1">
            <?= renderImg('about-1.jpg', 'lib', 'rounded-tr-[100px] w-full') ?>
        </div>
        <div class="w-full lg:w-1/2 px-6 md:px-20 lg:px-6 xl:px-20 order-1 lg:order-2">
            <article class="2xl:w-10/12 pt-10">
                <h2 class="text-tertiary font-helvetica-condensed uppercase text-5xl md:text-7xl font-semibold">What is asbestos?</h2>
                <p class="font-helvetica-condensed text-primary uppercase text-base md:text-[27px] font-semibold py-5 md:py-6">All Removal is complaint with safework nsw</p>
                <article class="font-raleway text-quaternary leading-7 md:leading-8 pb-5 text-base">
                    <p class="pb-5">
                        Asbestos is a name given to a group of fibrous silicate materials that occur naturally in the environment. It is a very flexible and strong product with excellent insulation properties and became really widely used in Australia and particularly in the building industry from as early as the 1800s. Asbestos is dangerous because when disturbed, the material forms a dust of tiny fibres which can very easily be breathed in.
                    </p>
                    <p>
                        The fibres can split down and reduce in size until they are small enough to travel deep into the body and pierce the lining of the lungs. Once embedded, the fibres are there for the rest of a person’s life and related diseases include lung cancer and asbestosis. Asbestos in Australia was phased out gradually during the 1980s and new materials are absolutely not allowed to contain any asbestos fibres. Australian industry is banned from the import, manufacture, supply, store, transport, sell, use, reuse, install or replace asbestos-containing materials.
                    </p>
                </article>

                <article class="accordion bg-light p-4 md:px-7">
                    <div class="question flex justify-between items-center cursor-pointer text-lg font-helvetica-condensed font-semibold">
                        <p class="uppercase text-primary">What does asbestos look like?</p>
                        <a href="javascript:void(0)" class="downarrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="16" viewBox="0 0 26 16" fill="none">
                                <path d="M2.28345 1.99268L13.4365 13.1458L24.5896 1.99268" stroke="#A78949" stroke-width="4" />
                            </svg>
                        </a>
                    </div>
                    <article class="answer font-raleway text-quaternary pt-3">
                        <p>
                            The fibres can split down and reduce in size until they are small enough to travel deep into the body and pierce the lining of the lungs. Once embedded, the fibres are there for the rest of a person’s life and related diseases include lung cancer and asbestosis. Asbestos in Australia was phased out gradually during the 1980s and new materials are absolutely not allowed to contain any asbestos fibres. Australian industry is banned from the import, manufacture, supply, store, transport, sell, use, reuse, install or replace asbestos-containing materials.
                        </p>
                    </article>
                </article>
            </article>
        </div>
    </div>

    <div class="flex flex-wrap gap-y-12 pt-24">
        <div class="w-full lg:w-1/2 px-6 md:px-20 lg:px-6 xl:px-20 flex justify-end">
            <article class="2xl:w-10/12 md:pt-10">
                <h2 class="text-tertiary font-helvetica-condensed uppercase text-5xl md:text-7xl font-semibold">Mould Remediation</h2>
                <p class="font-helvetica-condensed text-primary uppercase ttext-base md:ext-[27px] font-semibold py-5 md:py-6">What does mould look like?</p>
                <article class="font-raleway text-quaternary leading-8 pb-5">
                    <p class="pb-5">
                        Mould can be black, grey-brown, grey-green or white in colour. It can appear as clusters of small black spots or can look white and thread-like. Common places where mould can develop include bathrooms, wallpaper, tiles, carpets and ceilings. It is also possible that mould can grow within insulation materials and wooden structures.
                    </p>
                    <p>
                        Signs that you might have a moisture problem include water stains or discolouration on walls, floors or ceilings in your house. Surface abnormalities like peeling or bubbling paint or wallpaper may also indicate dampness. You may also smell a ‘musty’ odour which is a pretty good sign that mould is present.
                    </p>
                </article>

                <article class="accordion bg-light p-4 md:px-7">
                    <div class="question flex justify-between items-center cursor-pointer text-lg font-helvetica-condensed font-semibold">
                        <p class="uppercase text-primary">THE MYTHS ABOUT REMOVING MOULD</p>
                        <a href="javascript:void(0)" class="downarrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="16" viewBox="0 0 26 16" fill="none">
                                <path d="M2.28345 1.99268L13.4365 13.1458L24.5896 1.99268" stroke="#A78949" stroke-width="4" />
                            </svg>
                        </a>
                    </div>
                    <article class="answer font-raleway text-quaternary pt-3">
                        <p>
                            The fibres can split down and reduce in size until they are small enough to travel deep into the body and pierce the lining of the lungs. Once embedded, the fibres are there for the rest of a person’s life and related diseases include lung cancer and asbestosis. Asbestos in Australia was phased out gradually during the 1980s and new materials are absolutely not allowed to contain any asbestos fibres. Australian industry is banned from the import, manufacture, supply, store, transport, sell, use, reuse, install or replace asbestos-containing materials.
                        </p>
                    </article>
                </article>

                <article class="accordion bg-light p-4 md:px-7 mt-3">
                    <div class="question flex justify-between items-center cursor-pointer text-lg font-helvetica-condensed font-semibold">
                        <p class="uppercase text-primary">WHAT IS MOULD?</p>
                        <a href="javascript:void(0)" class="downarrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="16" viewBox="0 0 26 16" fill="none">
                                <path d="M2.28345 1.99268L13.4365 13.1458L24.5896 1.99268" stroke="#A78949" stroke-width="4" />
                            </svg>
                        </a>
                    </div>
                    <article class="answer font-raleway text-quaternary pt-3">
                        <p>
                            The fibres can split down and reduce in size until they are small enough to travel deep into the body and pierce the lining of the lungs. Once embedded, the fibres are there for the rest of a person’s life and related diseases include lung cancer and asbestosis. Asbestos in Australia was phased out gradually during the 1980s and new materials are absolutely not allowed to contain any asbestos fibres. Australian industry is banned from the import, manufacture, supply, store, transport, sell, use, reuse, install or replace asbestos-containing materials.
                        </p>
                    </article>
                </article>
                <article class="accordion bg-light p-4 md:px-7 mt-3">
                    <div class="question flex justify-between items-center cursor-pointer text-lg font-helvetica-condensed font-semibold">
                        <p class="uppercase text-primary">WHAT DOES MOULD LOOK LIKE?</p>
                        <a href="javascript:void(0)" class="downarrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="16" viewBox="0 0 26 16" fill="none">
                                <path d="M2.28345 1.99268L13.4365 13.1458L24.5896 1.99268" stroke="#A78949" stroke-width="4" />
                            </svg>
                        </a>
                    </div>
                    <article class="answer font-raleway text-quaternary pt-3">
                        <p>
                            The fibres can split down and reduce in size until they are small enough to travel deep into the body and pierce the lining of the lungs. Once embedded, the fibres are there for the rest of a person’s life and related diseases include lung cancer and asbestosis. Asbestos in Australia was phased out gradually during the 1980s and new materials are absolutely not allowed to contain any asbestos fibres. Australian industry is banned from the import, manufacture, supply, store, transport, sell, use, reuse, install or replace asbestos-containing materials.
                        </p>
                    </article>
                </article>
            </article>
        </div>
        <div class="w-full lg:w-1/2">
            <?= renderImg('about-2.jpg', 'lib', 'rounded-tr-[100px] lg:rounded-tr-none lg:rounded-tl-[100px] w-full') ?>
        </div>
    </div>

    <div class="flex flex-wrap pt-24 gap-y-12">
        <div class="w-full lg:w-1/2 order-2 lg:order-1">
            <?= renderImg('about-3.jpg', 'lib', 'rounded-tr-[100px] w-full') ?>
        </div>
        <div class="w-full lg:w-1/2 px-6 md:px-20 lg:px-6 xl:px-20 order-1 lg:order-2">
            <article class="2xl:w-10/12 md:pt-5">
                <h2 class="text-tertiary font-helvetica-condensed uppercase text-5xl md:text-7xl font-semibold">Hazardous Material Removal</h2>
                <article class="font-raleway text-quaternary leading-8 pt-5">
                    <p class="pb-5">
                        For over two decades, J Group Industries has been at the forefront of hazardous material removal in Sydney, setting the gold standard for safe, efficient, and environmentally responsible solutions. Since its establishment in 2000, the company has been dedicated to preserving the well-being of the community and the environment through expert removal and disposal of hazardous substances.
                    </p>
                    <p>
                        Operating with a commitment to excellence and a passion for public health, J Group Industries has emerged as a trusted name in the industry. With a team of highly trained professionals, the company employs cutting-edge techniques and state-of-the-art equipment to tackle a wide array of hazardous materials, ranging from asbestos and lead to chemical waste and biohazards.
                    </p>
                    <p>
                        What sets J Group Industries apart is not just its technical proficiency, but also its unwavering emphasis on safety. Adhering to the strictest regulations and guidelines, the company meticulously plans and executes each removal project to ensure the safety of its personnel, the local community, and the environment. Rigorous risk assessments, stringent containment measures, and meticulous decontamination procedures are all integral components of their approach.
                    </p>
                </article>
            </article>
        </div>
    </div>
</section>

<section class="testimonials rounded-t-[42px] bg-dark">
    <div id="gallery_slider" class="py-16 md:py-24">
        <article class="mx-1"><?= renderImg('gallery-1.jpg', 'lib', 'w-full rounded-[20px]') ?></article>
        <article class="mx-1"><?= renderImg('gallery-2.jpg', 'lib', 'w-full rounded-[20px]') ?></article>
        <article class="mx-1"><?= renderImg('gallery-3.jpg', 'lib', 'w-full rounded-[20px]') ?></article>
        <article class="mx-1"><?= renderImg('gallery-4.jpg', 'lib', 'w-full rounded-[20px]') ?></article>
        <article class="mx-1"><?= renderImg('gallery-5.jpg', 'lib', 'w-full rounded-[20px]') ?></article>
    </div>

    <?php $testimonials = array(
        array(
            'username' => 'Kenneth Kc',
            'published_at' => '2 weeks ago',
            'comment' => '<p>Great work by J Group Industries and the team.Very reliable and Honest.</p>
            <p>Asbestos Job was completed on time and ahead of schedule. Highly recommended.Keep up the great work! Thanks again.</p>'
        ),
        array(
            'username' => 'Vince Loren',
            'published_at' => 'a year ago',
            'comment' => '<p>J Group Industries is very professional, very honest with the clients and the workers, every project is made sure the work is polished and clean and the most important thing is everyone’s safety. Highly Recommended 10stars ⭐️⭐️⭐️⭐️⭐️⭐️⭐️⭐️⭐️⭐️ Keep up the great work!</p>'
        ),
        array(
            'username' => 'George Abikhalil',
            'published_at' => 'a year ago',
            'comment' => '<p>As a builder finding good trades is very hard. Anthony and his team at J group provided the professional service we required. All work was carried out in a safe and professional manner. Highly recommend J Group as a service and will definitely be using J Group, Anthony and his team on our next project.</p>'
        ),
        array(
            'username' => 'George Abikhalil',
            'published_at' => 'a year ago',
            'comment' => '<p>As a builder finding good trades is very hard. Anthony and his team at J group provided the professional service we required. All work was carried out in a safe and professional manner. Highly recommend J Group as a service and will definitely be using J Group, Anthony and his team on our next project.</p>'
        ),
    ); ?>

    <div class="container">
        <div id="testimonial_slider" class="pb-14">
            <?php foreach ($testimonials as $testimonial) : ?>
                <article class="text-center rounded-[20px] mx-2">
                    <svg width="39" height="35" viewBox="0 0 39 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.17 34.7051H2.50338C1.62898 34.7051 0.920044 33.9809 0.920044 33.086V16.8956C0.920044 8.72916 3.91277 3.32339 9.8147 0.827609C10.6226 0.487674 11.548 0.878998 11.8836 1.70513C12.2175 2.53205 11.8333 3.47833 11.0254 3.82065C6.73694 5.63338 4.47249 9.38848 4.13233 15.2765H15.17C16.0444 15.2765 16.7534 16.0014 16.7534 16.8956V33.086C16.7534 33.9809 16.0444 34.7051 15.17 34.7051Z" fill="white" />
                        <path d="M37.3367 34.7051H24.67C23.7956 34.7051 23.0867 33.9809 23.0867 33.086V16.8956C23.0867 8.72916 26.0794 3.32339 31.9814 0.827609C32.787 0.487674 33.7147 0.878998 34.0502 1.70512C34.3842 2.53203 34 3.47831 33.1921 3.82063C28.9036 5.63338 26.6392 9.38848 26.299 15.2765H37.3367C38.2111 15.2765 38.92 16.0014 38.92 16.8956V33.086C38.92 33.9809 38.2111 34.7051 37.3367 34.7051Z" fill="white" />
                    </svg>

                    <h3 class="text-white text-[30px] font-helvetica-condensed uppercase font-semibold pt-10"><?= $testimonial['username'] ?></h3>
                    <p class="font-raleway text-grey"><?= $testimonial['published_at'] ?></p>
                    <article class="font-raleway text-grey py-10 md:pb-24 grow">
                        <?= $testimonial['comment'] ?>
                    </article>
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="144" height="22" viewBox="0 0 144 22" fill="none">
                            <path d="M22.563 7.84716L15.8951 6.87899L12.9115 0.836396C12.825 0.688266 12.7013 0.565373 12.5526 0.479963C12.4039 0.394554 12.2354 0.349609 12.0639 0.349609C11.8924 0.349609 11.7238 0.394554 11.5751 0.479963C11.4264 0.565373 11.3027 0.688266 11.2162 0.836396L8.24015 6.87899L1.5722 7.84716C1.39825 7.87242 1.23484 7.94586 1.10046 8.05916C0.966076 8.17247 0.866084 8.32112 0.811794 8.4883C0.757504 8.65548 0.751084 8.83452 0.793259 9.00516C0.835434 9.1758 0.924522 9.33123 1.05044 9.45387L5.87623 14.1629L4.73477 20.8044C4.70496 20.9778 4.72429 21.156 4.79055 21.3189C4.85681 21.4818 4.96737 21.6229 5.10969 21.7262C5.25202 21.8295 5.42043 21.8909 5.59585 21.9035C5.77127 21.916 5.9467 21.8791 6.10226 21.7971L12.0676 18.6553L18.033 21.7915C18.1675 21.8629 18.3177 21.8998 18.47 21.8988C18.6072 21.8991 18.7429 21.8694 18.8674 21.8118C18.992 21.7542 19.1025 21.67 19.1911 21.5653C19.2798 21.4605 19.3444 21.3376 19.3806 21.2052C19.4167 21.0728 19.4235 20.9341 19.4005 20.7988L18.259 14.1572L23.0848 9.44822C23.2107 9.32558 23.2998 9.17015 23.342 8.99951C23.3842 8.82887 23.3777 8.64983 23.3235 8.48265C23.2692 8.31547 23.1692 8.16682 23.0348 8.05351C22.9004 7.94021 22.737 7.86677 22.563 7.84151V7.84716Z" fill="#FBD300" />
                            <path d="M52.7006 7.84716L46.0327 6.87899L43.0491 0.836396C42.9626 0.688266 42.8389 0.565373 42.6902 0.479963C42.5414 0.394554 42.3729 0.349609 42.2014 0.349609C42.0299 0.349609 41.8614 0.394554 41.7127 0.479963C41.564 0.565373 41.4402 0.688266 41.3538 0.836396L38.3777 6.87899L31.7098 7.84716C31.5358 7.87242 31.3724 7.94586 31.238 8.05916C31.1036 8.17247 31.0037 8.32112 30.9494 8.4883C30.8951 8.65548 30.8887 8.83452 30.9308 9.00516C30.973 9.1758 31.0621 9.33123 31.188 9.45387L36.0138 14.1629L34.8723 20.8044C34.8425 20.9778 34.8619 21.156 34.9281 21.3189C34.9944 21.4818 35.1049 21.6229 35.2473 21.7262C35.3896 21.8295 35.558 21.8909 35.7334 21.9035C35.9088 21.916 36.0843 21.8791 36.2398 21.7971L42.2052 18.6553L48.1706 21.7915C48.3051 21.8629 48.4552 21.8998 48.6076 21.8988C48.7448 21.8991 48.8805 21.8694 49.005 21.8118C49.1296 21.7542 49.2401 21.67 49.3287 21.5653C49.4173 21.4605 49.482 21.3376 49.5182 21.2052C49.5543 21.0728 49.5611 20.9341 49.5381 20.7988L48.3966 14.1572L53.2224 9.44822C53.3483 9.32558 53.4374 9.17015 53.4796 8.99951C53.5217 8.82887 53.5153 8.64983 53.461 8.48265C53.4067 8.31547 53.3067 8.16682 53.1724 8.05351C53.038 7.94021 52.8746 7.86677 52.7006 7.84151V7.84716Z" fill="#FBD300" />
                            <path d="M82.8383 7.84716L76.1704 6.87899L73.1867 0.836396C73.1003 0.688266 72.9766 0.565373 72.8279 0.479963C72.6791 0.394554 72.5106 0.349609 72.3391 0.349609C72.1676 0.349609 71.9991 0.394554 71.8504 0.479963C71.7017 0.565373 71.5779 0.688266 71.4915 0.836396L68.5154 6.87899L61.8475 7.84716C61.6735 7.87242 61.5101 7.94586 61.3757 8.05916C61.2413 8.17247 61.1414 8.32112 61.0871 8.4883C61.0328 8.65548 61.0264 8.83452 61.0685 9.00516C61.1107 9.1758 61.1998 9.33123 61.3257 9.45387L66.1515 14.1629L65.01 20.8044C64.9802 20.9778 64.9996 21.156 65.0658 21.3189C65.1321 21.4818 65.2426 21.6229 65.385 21.7262C65.5273 21.8295 65.6957 21.8909 65.8711 21.9035C66.0465 21.916 66.222 21.8791 66.3775 21.7971L72.3429 18.6553L78.3083 21.7915C78.4428 21.8629 78.5929 21.8998 78.7453 21.8988C78.8825 21.8991 79.0182 21.8694 79.1427 21.8118C79.2673 21.7542 79.3778 21.67 79.4664 21.5653C79.555 21.4605 79.6197 21.3376 79.6559 21.2052C79.692 21.0728 79.6988 20.9341 79.6758 20.7988L78.5343 14.1572L83.3601 9.44822C83.486 9.32558 83.5751 9.17015 83.6173 8.99951C83.6594 8.82887 83.653 8.64983 83.5987 8.48265C83.5444 8.31547 83.4444 8.16682 83.3101 8.05351C83.1757 7.94021 83.0123 7.86677 82.8383 7.84151V7.84716Z" fill="#FBD300" />
                            <path d="M112.976 7.84716L106.308 6.87899L103.324 0.836396C103.238 0.688266 103.114 0.565373 102.965 0.479963C102.817 0.394554 102.648 0.349609 102.477 0.349609C102.305 0.349609 102.137 0.394554 101.988 0.479963C101.839 0.565373 101.716 0.688266 101.629 0.836396L98.653 6.87899L91.985 7.84716C91.8111 7.87242 91.6477 7.94586 91.5133 8.05916C91.3789 8.17247 91.2789 8.32112 91.2246 8.4883C91.1703 8.65548 91.1639 8.83452 91.2061 9.00516C91.2483 9.1758 91.3374 9.33123 91.4633 9.45387L96.2891 14.1629L95.1476 20.8044C95.1178 20.9778 95.1371 21.156 95.2034 21.3189C95.2697 21.4818 95.3802 21.6229 95.5225 21.7262C95.6649 21.8295 95.8333 21.8909 96.0087 21.9035C96.1841 21.916 96.3595 21.8791 96.5151 21.7971L102.48 18.6553L108.446 21.7915C108.58 21.8629 108.731 21.8998 108.883 21.8988C109.02 21.8991 109.156 21.8694 109.28 21.8118C109.405 21.7542 109.515 21.67 109.604 21.5653C109.693 21.4605 109.757 21.3376 109.793 21.2052C109.83 21.0728 109.836 20.9341 109.813 20.7988L108.672 14.1572L113.498 9.44822C113.624 9.32558 113.713 9.17015 113.755 8.99951C113.797 8.82887 113.791 8.64983 113.736 8.48265C113.682 8.31547 113.582 8.16682 113.448 8.05351C113.313 7.94021 113.15 7.86677 112.976 7.84151V7.84716Z" fill="#FBD300" />
                            <path d="M143.113 7.84716L136.446 6.87899L133.462 0.836396C133.375 0.688266 133.252 0.565373 133.103 0.479963C132.954 0.394554 132.786 0.349609 132.614 0.349609C132.443 0.349609 132.274 0.394554 132.126 0.479963C131.977 0.565373 131.853 0.688266 131.767 0.836396L128.791 6.87899L122.123 7.84716C121.949 7.87242 121.785 7.94586 121.651 8.05916C121.516 8.17247 121.416 8.32112 121.362 8.4883C121.308 8.65548 121.301 8.83452 121.344 9.00516C121.386 9.1758 121.475 9.33123 121.601 9.45387L126.427 14.1629L125.285 20.8044C125.255 20.9778 125.275 21.156 125.341 21.3189C125.407 21.4818 125.518 21.6229 125.66 21.7262C125.802 21.8295 125.971 21.8909 126.146 21.9035C126.322 21.916 126.497 21.8791 126.653 21.7971L132.618 18.6553L138.583 21.7915C138.718 21.8629 138.868 21.8998 139.02 21.8988C139.158 21.8991 139.293 21.8694 139.418 21.8118C139.542 21.7542 139.653 21.67 139.742 21.5653C139.83 21.4605 139.895 21.3376 139.931 21.2052C139.967 21.0728 139.974 20.9341 139.951 20.7988L138.809 14.1572L143.635 9.44822C143.761 9.32558 143.85 9.17015 143.892 8.99951C143.935 8.82887 143.928 8.64983 143.874 8.48265C143.82 8.31547 143.72 8.16682 143.585 8.05351C143.451 7.94021 143.287 7.86677 143.113 7.84151V7.84716Z" fill="#FBD300" />
                        </svg>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="testimonial-nav pb-24">
            <div class="content">
                <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only">
                </div>
                </span>
            </div>
        </div>
    </div>
</section>