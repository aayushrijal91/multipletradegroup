<header>
    <nav class="container">
        <div class="flex flex-wrap justify-center md:justify-between items-center gap-y-5">
            <div class="w-fit flex flex-wrap justify-center items-center gap-x-16">
                <div class="w-fit bg-white p-7 rounded-b-[75px]">
                    <a href="./" class="">
                        <?= renderImg('logo.png', 'logo') ?>
                    </a>
                </div>
                <div class="w-fit hidden lg:block">
                    <p class="text-xl text-white capitalize"><b>Highly Trained Team</b> of Professionals</p>
                </div>
            </div>

            <div class="w-fit flex flex-wrap items-center gap-x-3">
                <div class="w-fit">
                    <a href="#form" class="h-[60px] bg-dark text-white font-bold text-lg rounded-full flex items-center px-7">Book Today</a>
                </div>
                <div class="w-fit">
                    <a href="tel:<?= $phone_number ?>" class="h-[60px] bg-white text-primary font-bold text-lg rounded-full flex items-center px-5 xl:px-12"><?= $phone_number ?></a>
                </div>
                <div class="w-fit flex flex-wrap">
                    <a href="#" target="_blank">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.775C15 2.775 15.36 2.78625 16.5457 2.84025C17.2593 2.84867 17.9662 2.97984 18.6352 3.228C19.1237 3.40832 19.5656 3.69588 19.9282 4.0695C20.3019 4.43218 20.5894 4.87402 20.7697 5.3625C21.0179 6.0316 21.1491 6.73841 21.1575 7.452C21.2115 8.64 21.225 9 21.225 12C21.225 15 21.2137 15.36 21.1597 16.5457C21.1513 17.2593 21.0202 17.9662 20.772 18.6352C20.5847 19.1202 20.2981 19.5606 19.9305 19.9282C19.5629 20.2958 19.1225 20.5825 18.6375 20.7697C17.9684 21.0179 17.2616 21.1491 16.548 21.1575C15.3622 21.2115 15.006 21.2227 12.0022 21.2227C8.9985 21.2227 8.64225 21.2115 7.4565 21.1575C6.74291 21.1491 6.0361 21.0179 5.367 20.7697C4.87852 20.5894 4.43668 20.3019 4.074 19.9282C3.70038 19.5656 3.41282 19.1237 3.2325 18.6352C2.98434 17.9662 2.85317 17.2593 2.84475 16.5457C2.7885 15.36 2.775 15.0037 2.775 12C2.775 8.99625 2.78625 8.64 2.84025 7.45425C2.84867 6.74066 2.97984 6.03385 3.228 5.36475C3.40898 4.87606 3.69731 4.4342 4.07175 4.07175C4.43443 3.69813 4.87627 3.41057 5.36475 3.23025C6.03385 2.98209 6.74066 2.85092 7.45425 2.8425C8.64 2.7885 9 2.775 12 2.775ZM12 0.75C8.9445 0.75 8.56125 0.76275 7.362 0.8175C6.42842 0.83728 5.5049 1.01478 4.6305 1.3425C3.88032 1.62483 3.20059 2.06707 2.6385 2.6385C2.06626 3.20037 1.62324 3.88012 1.34025 4.6305C1.01253 5.5049 0.83503 6.42842 0.81525 7.362C0.76275 8.56125 0.75 8.9445 0.75 12C0.75 15.0555 0.76275 15.4387 0.8175 16.638C0.83728 17.5716 1.01478 18.4951 1.3425 19.3695C1.62549 20.1199 2.06851 20.7996 2.64075 21.3615C3.20262 21.9337 3.88237 22.3768 4.63275 22.6597C5.50715 22.9875 6.43067 23.165 7.36425 23.1847C8.56425 23.2395 8.94675 23.2522 12.0022 23.2522C15.0577 23.2522 15.441 23.2395 16.6402 23.1847C17.5738 23.165 18.4974 22.9875 19.3717 22.6597C20.1188 22.3702 20.7972 21.928 21.3638 21.3615C21.9303 20.795 22.3724 20.1165 22.662 19.3695C22.9897 18.4951 23.1672 17.5716 23.187 16.638C23.2417 15.438 23.2545 15.0555 23.2545 12C23.2545 8.9445 23.2417 8.56125 23.187 7.362C23.1672 6.42842 22.9897 5.5049 22.662 4.6305C22.379 3.88012 21.936 3.20037 21.3637 2.6385C20.8019 2.06626 20.1221 1.62324 19.3717 1.34025C18.4974 1.01253 17.5738 0.83503 16.6402 0.81525C15.4387 0.76275 15.0555 0.75 12 0.75Z" fill="white" />
                            <path d="M12 6.22498C10.8578 6.22498 9.74125 6.56367 8.79156 7.19824C7.84187 7.8328 7.10167 8.73474 6.66457 9.78998C6.22748 10.8452 6.11311 12.0064 6.33594 13.1266C6.55877 14.2469 7.10879 15.2759 7.91644 16.0835C8.72408 16.8912 9.75309 17.4412 10.8733 17.664C11.9936 17.8868 13.1547 17.7725 14.21 17.3354C15.2652 16.8983 16.1671 16.1581 16.8017 15.2084C17.4363 14.2587 17.775 13.1422 17.775 12C17.775 10.4684 17.1665 8.99946 16.0835 7.91643C15.0005 6.83341 13.5316 6.22498 12 6.22498ZM12 15.75C11.2583 15.75 10.5333 15.53 9.91659 15.118C9.29991 14.7059 8.81926 14.1203 8.53543 13.435C8.2516 12.7498 8.17734 11.9958 8.32203 11.2684C8.46673 10.541 8.82388 9.87277 9.34833 9.34833C9.87277 8.82388 10.541 8.46672 11.2684 8.32203C11.9958 8.17734 12.7498 8.2516 13.435 8.53543C14.1203 8.81926 14.7059 9.2999 15.118 9.91659C15.53 10.5333 15.75 11.2583 15.75 12C15.75 12.9945 15.3549 13.9484 14.6516 14.6516C13.9484 15.3549 12.9945 15.75 12 15.75Z" fill="white" />
                            <path d="M18.0053 7.34478C18.7509 7.34478 19.3553 6.74036 19.3553 5.99478C19.3553 5.24919 18.7509 4.64478 18.0053 4.64478C17.2597 4.64478 16.6553 5.24919 16.6553 5.99478C16.6553 6.74036 17.2597 7.34478 18.0053 7.34478Z" fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="banner container my-16 md:mb-40">
        <div class="flex flex-wrap gap-y-12 items-center justify-between">
            <div class="w-full lg:w-1/2">
                <div class="xl:w-11/12">
                    <p class="flex flex-row justify-center lg:justify-start gap-x-1 items-center text-white font-medium md:font-bold text-sm md:text-base">Consistent 5 star ratings
                        <span><svg width="76" height="12" viewBox="0 0 76 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5721 3.98043L8.03214 3.46643L6.44814 0.258434C6.40226 0.179792 6.33657 0.114549 6.25761 0.0692047C6.17865 0.0238608 6.08919 0 5.99815 0C5.9071 0 5.81764 0.0238608 5.73868 0.0692047C5.65972 0.114549 5.59403 0.179792 5.54814 0.258434L3.96814 3.46643L0.428145 3.98043C0.335795 3.99384 0.249041 4.03283 0.177698 4.09299C0.106354 4.15314 0.0532684 4.23206 0.0244461 4.32081C-0.00437615 4.40957 -0.0077847 4.50462 0.0146061 4.59521C0.0369969 4.68581 0.0842934 4.76832 0.151145 4.83343L2.71315 7.33343L2.10715 10.8594C2.09132 10.9515 2.10158 11.0461 2.13676 11.1326C2.17194 11.219 2.23063 11.2939 2.30619 11.3488C2.38175 11.4036 2.47116 11.4362 2.56429 11.4429C2.65742 11.4495 2.75056 11.43 2.83314 11.3864L6.00014 9.71843L9.16714 11.3834C9.23856 11.4214 9.31828 11.4409 9.39915 11.4404C9.47201 11.4406 9.54403 11.4248 9.61016 11.3942C9.67629 11.3637 9.73494 11.319 9.78199 11.2633C9.82905 11.2077 9.86338 11.1425 9.88258 11.0722C9.90178 11.0019 9.90539 10.9283 9.89314 10.8564L9.28714 7.33043L11.8491 4.83043C11.916 4.76532 11.9633 4.68281 11.9857 4.59221C12.0081 4.50162 12.0047 4.40657 11.9758 4.31781C11.947 4.22906 11.8939 4.15014 11.8226 4.08999C11.7512 4.02983 11.6645 3.99084 11.5721 3.97743V3.98043Z" fill="#FFC100" />
                                <path d="M27.5721 3.98043L24.0321 3.46643L22.4481 0.258434C22.4023 0.179792 22.3366 0.114549 22.2576 0.0692047C22.1787 0.0238608 22.0892 0 21.9981 0C21.9071 0 21.8176 0.0238608 21.7387 0.0692047C21.6597 0.114549 21.594 0.179792 21.5481 0.258434L19.9681 3.46643L16.4281 3.98043C16.3358 3.99384 16.249 4.03283 16.1777 4.09299C16.1064 4.15314 16.0533 4.23206 16.0244 4.32081C15.9956 4.40957 15.9922 4.50462 16.0146 4.59521C16.037 4.68581 16.0843 4.76832 16.1511 4.83343L18.7131 7.33343L18.1071 10.8594C18.0913 10.9515 18.1016 11.0461 18.1368 11.1326C18.1719 11.219 18.2306 11.2939 18.3062 11.3488C18.3818 11.4036 18.4712 11.4362 18.5643 11.4429C18.6574 11.4495 18.7506 11.43 18.8331 11.3864L22.0001 9.71843L25.1671 11.3834C25.2386 11.4214 25.3183 11.4409 25.3991 11.4404C25.472 11.4406 25.544 11.4248 25.6102 11.3942C25.6763 11.3637 25.7349 11.319 25.782 11.2633C25.8291 11.2077 25.8634 11.1425 25.8826 11.0722C25.9018 11.0019 25.9054 10.9283 25.8931 10.8564L25.2871 7.33043L27.8491 4.83043C27.916 4.76532 27.9633 4.68281 27.9857 4.59221C28.0081 4.50162 28.0047 4.40657 27.9758 4.31781C27.947 4.22906 27.8939 4.15014 27.8226 4.08999C27.7512 4.02983 27.6645 3.99084 27.5721 3.97743V3.98043Z" fill="#FFC100" />
                                <path d="M43.5721 3.98043L40.0321 3.46643L38.4481 0.258434C38.4023 0.179792 38.3366 0.114549 38.2576 0.0692047C38.1787 0.0238608 38.0892 0 37.9981 0C37.9071 0 37.8176 0.0238608 37.7387 0.0692047C37.6597 0.114549 37.594 0.179792 37.5481 0.258434L35.9681 3.46643L32.4281 3.98043C32.3358 3.99384 32.249 4.03283 32.1777 4.09299C32.1064 4.15314 32.0533 4.23206 32.0244 4.32081C31.9956 4.40957 31.9922 4.50462 32.0146 4.59521C32.037 4.68581 32.0843 4.76832 32.1511 4.83343L34.7131 7.33343L34.1071 10.8594C34.0913 10.9515 34.1016 11.0461 34.1368 11.1326C34.1719 11.219 34.2306 11.2939 34.3062 11.3488C34.3818 11.4036 34.4712 11.4362 34.5643 11.4429C34.6574 11.4495 34.7506 11.43 34.8331 11.3864L38.0001 9.71843L41.1671 11.3834C41.2386 11.4214 41.3183 11.4409 41.3991 11.4404C41.472 11.4406 41.544 11.4248 41.6102 11.3942C41.6763 11.3637 41.7349 11.319 41.782 11.2633C41.8291 11.2077 41.8634 11.1425 41.8826 11.0722C41.9018 11.0019 41.9054 10.9283 41.8931 10.8564L41.2871 7.33043L43.8491 4.83043C43.916 4.76532 43.9633 4.68281 43.9857 4.59221C44.0081 4.50162 44.0047 4.40657 43.9758 4.31781C43.947 4.22906 43.8939 4.15014 43.8226 4.08999C43.7512 4.02983 43.6645 3.99084 43.5721 3.97743V3.98043Z" fill="#FFC100" />
                                <path d="M59.5721 3.98043L56.0321 3.46643L54.4481 0.258434C54.4023 0.179792 54.3366 0.114549 54.2576 0.0692047C54.1787 0.0238608 54.0892 0 53.9981 0C53.9071 0 53.8176 0.0238608 53.7387 0.0692047C53.6597 0.114549 53.594 0.179792 53.5481 0.258434L51.9681 3.46643L48.4281 3.98043C48.3358 3.99384 48.249 4.03283 48.1777 4.09299C48.1064 4.15314 48.0533 4.23206 48.0244 4.32081C47.9956 4.40957 47.9922 4.50462 48.0146 4.59521C48.037 4.68581 48.0843 4.76832 48.1511 4.83343L50.7131 7.33343L50.1071 10.8594C50.0913 10.9515 50.1016 11.0461 50.1368 11.1326C50.1719 11.219 50.2306 11.2939 50.3062 11.3488C50.3818 11.4036 50.4712 11.4362 50.5643 11.4429C50.6574 11.4495 50.7506 11.43 50.8331 11.3864L54.0001 9.71843L57.1671 11.3834C57.2386 11.4214 57.3183 11.4409 57.3991 11.4404C57.472 11.4406 57.544 11.4248 57.6102 11.3942C57.6763 11.3637 57.7349 11.319 57.782 11.2633C57.8291 11.2077 57.8634 11.1425 57.8826 11.0722C57.9018 11.0019 57.9054 10.9283 57.8931 10.8564L57.2871 7.33043L59.8491 4.83043C59.916 4.76532 59.9633 4.68281 59.9857 4.59221C60.0081 4.50162 60.0047 4.40657 59.9758 4.31781C59.947 4.22906 59.8939 4.15014 59.8226 4.08999C59.7512 4.02983 59.6645 3.99084 59.5721 3.97743V3.98043Z" fill="#FFC100" />
                                <path d="M75.5721 3.98043L72.0321 3.46643L70.4481 0.258434C70.4023 0.179792 70.3366 0.114549 70.2576 0.0692047C70.1787 0.0238608 70.0892 0 69.9981 0C69.9071 0 69.8176 0.0238608 69.7387 0.0692047C69.6597 0.114549 69.594 0.179792 69.5481 0.258434L67.9681 3.46643L64.4281 3.98043C64.3358 3.99384 64.249 4.03283 64.1777 4.09299C64.1064 4.15314 64.0533 4.23206 64.0244 4.32081C63.9956 4.40957 63.9922 4.50462 64.0146 4.59521C64.037 4.68581 64.0843 4.76832 64.1511 4.83343L66.7131 7.33343L66.1071 10.8594C66.0913 10.9515 66.1016 11.0461 66.1368 11.1326C66.1719 11.219 66.2306 11.2939 66.3062 11.3488C66.3818 11.4036 66.4712 11.4362 66.5643 11.4429C66.6574 11.4495 66.7506 11.43 66.8331 11.3864L70.0001 9.71843L73.1671 11.3834C73.2386 11.4214 73.3183 11.4409 73.3991 11.4404C73.472 11.4406 73.544 11.4248 73.6102 11.3942C73.6763 11.3637 73.7349 11.319 73.782 11.2633C73.8291 11.2077 73.8634 11.1425 73.8826 11.0722C73.9018 11.0019 73.9054 10.9283 73.8931 10.8564L73.2871 7.33043L75.8491 4.83043C75.916 4.76532 75.9633 4.68281 75.9857 4.59221C76.0081 4.50162 76.0047 4.40657 75.9758 4.31781C75.947 4.22906 75.8939 4.15014 75.8226 4.08999C75.7512 4.02983 75.6645 3.99084 75.5721 3.97743V3.98043Z" fill="#FFC100" />
                            </svg>
                        </span>
                        across the board
                    </p>

                    <h1 class="capitalize text-dark text-45 md:text-65 leading-none font-articulat-heavy text-center lg:text-start pt-5"><span class="text-white">Leading Roofing Experts With</span> Over 30 Years combined experience</h1>

                    <p class="text-sm md:text-base text-center lg:text-start text-white pt-5">Years of experience and countless satisfied customers. Proud to be Sydney's most trusted roofing company</p>

                    <div class="flex justify-center lg:justify-start">
                        <a href="#form" class="rounded-full bg-white px-10 md:px-16 text-primary text-lg font-bold inline-flex justify-center items-center h-[60px] mt-6">Book Today</a>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                <div id="bannerSlider">
                    <div>
                        <div class="h-[480px] relative mx-1.5 rounded-t-xl overflow-hidden flex items-end">
                            <?= renderImg('bannerImg-1.jpg', 'lib', 'absolute w-full h-full object-cover') ?>
                            <div class="relative w-full">
                                <div class="relative flex flex-col items-center">
                                    <svg class="absolute top-[-35px]" width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="41" cy="41" r="38.5" fill="white" stroke="#0DA0FF" stroke-width="5" />
                                        <g clip-path="url(#clip0_304_12)">
                                            <path d="M41 26.9375C37.2717 26.9417 33.6973 28.4247 31.061 31.061C28.4247 33.6973 26.9417 37.2717 26.9375 41C26.9375 41.2486 27.0363 41.4871 27.2121 41.6629C27.3879 41.8387 27.6264 41.9375 27.875 41.9375C28.1236 41.9375 28.3621 41.8387 28.5379 41.6629C28.7137 41.4871 28.8125 41.2486 28.8125 41C28.8117 38.2441 29.7446 35.5692 31.4591 33.4116C33.1737 31.254 35.5687 29.741 38.2535 29.1193C40.9383 28.4976 43.7546 28.8039 46.243 29.9882C48.7315 31.1726 50.7452 33.1652 51.9558 35.6409C53.1664 38.1167 53.5024 40.9296 52.9091 43.6208C52.3158 46.3121 50.8282 48.7229 48.6888 50.4602C46.5495 52.1974 43.8846 53.1586 41.1289 53.1869C38.3731 53.2152 35.6891 52.3089 33.5145 50.6159L35.6942 48.5938C35.7566 48.5358 35.802 48.462 35.8256 48.3802C35.8492 48.2985 35.8501 48.2118 35.8282 48.1295C35.8063 48.0473 35.7623 47.9726 35.7012 47.9134C35.64 47.8542 35.5639 47.8128 35.4809 47.7936L28.4497 46.1684C28.3744 46.151 28.296 46.1525 28.2215 46.1727C28.1469 46.1929 28.0785 46.2312 28.0223 46.2842C27.9661 46.3373 27.9239 46.4034 27.8995 46.4766C27.875 46.5499 27.869 46.6281 27.882 46.7042L29.0867 53.7355C29.101 53.8187 29.1375 53.8965 29.1924 53.9607C29.2473 54.0249 29.3184 54.0731 29.3984 54.1002C29.4467 54.1167 29.4974 54.1251 29.5484 54.125C29.6668 54.1248 29.7807 54.0801 29.8677 53.9998L32.1266 51.9041C33.873 53.3263 35.9354 54.3082 38.1404 54.7673C40.3454 55.2264 42.6283 55.1491 44.7972 54.542C46.9661 53.9349 48.9574 52.8157 50.6037 51.2786C52.2499 49.7416 53.5028 47.8316 54.2571 45.7094C55.0114 43.5872 55.2449 41.3149 54.9379 39.0836C54.631 36.8524 53.7926 34.7275 52.4934 32.8878C51.1941 31.0481 49.472 29.5473 47.4719 28.5119C45.4718 27.4764 43.2522 26.9364 41 26.9375Z" fill="#0DA0FF" />
                                            <path d="M42.627 43.2898L47.2311 47.8939L47.8939 47.2311L43.2899 42.627C43.1072 42.8832 42.8832 43.1072 42.627 43.2898Z" fill="#0DA0FF" />
                                            <path d="M45.4934 35.1809L41.4795 39.1948C41.1666 39.1016 40.8333 39.1016 40.5205 39.1948L35.569 34.2434C35.3922 34.0727 35.1554 33.9782 34.9096 33.9803C34.6638 33.9824 34.4287 34.081 34.2548 34.2549C34.081 34.4287 33.9824 34.6638 33.9803 34.9096C33.9782 35.1554 34.0726 35.3922 34.2434 35.5691L39.1948 40.5205C39.1163 40.7993 39.1033 41.0925 39.1571 41.3771C39.2108 41.6617 39.3298 41.93 39.5046 42.1609C39.6795 42.3918 39.9054 42.5791 40.1648 42.7081C40.4242 42.837 40.7099 42.9041 40.9995 42.9041C41.2892 42.9041 41.5749 42.837 41.8342 42.7081C42.0936 42.5791 42.3196 42.3918 42.4944 42.1609C42.6692 41.93 42.7882 41.6617 42.8419 41.3771C42.8957 41.0925 42.8828 40.7993 42.8042 40.5205L46.8181 36.5066C46.9889 36.3297 47.0834 36.0929 47.0812 35.8471C47.0791 35.6013 46.9805 35.3662 46.8067 35.1924C46.6329 35.0185 46.3977 34.9199 46.1519 34.9178C45.9061 34.9157 45.6693 35.0102 45.4925 35.1809H45.4934Z" fill="#0DA0FF" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_304_12">
                                                <rect width="30" height="30" fill="white" transform="translate(26 26)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>

                                <?= renderImg('triangle.png', 'lib', 'w-full') ?>
                                <div class="bg-[#0da0ff] p-5 text-center">
                                    <p class="text-2xl text-white font-extrabold leading-none">Emergency<br />Availability 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="h-[480px] relative mx-1.5 rounded-t-xl overflow-hidden flex items-end">
                            <?= renderImg('bannerImg-2.jpg', 'lib', 'absolute w-full h-full object-cover') ?>
                            <div class="relative w-full">
                                <div class="relative flex flex-col items-center">
                                    <svg class="absolute top-[-35px]" width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="41" cy="41" r="38.5" fill="white" stroke="#0DA0FF" stroke-width="5" />
                                        <g clip-path="url(#clip0_304_14)">
                                            <path d="M43.75 52.25V48.5H25V50.375C25 53.4819 27.5181 56 30.625 56H44.7925C44.1475 54.8919 43.75 53.6225 43.75 52.25Z" fill="#0DA0FF" />
                                            <path d="M32.5 26V35.375V44.75H47.5C47.5 44.75 47.5 47.0806 47.5 52.25C47.5 54.3219 49.1781 56 51.25 56C53.3219 56 55 54.3219 55 52.25V26H32.5ZM51.25 41H36.25V37.25H51.25V41ZM51.25 33.5H36.25V29.75H51.25V33.5Z" fill="#0DA0FF" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_304_14">
                                                <rect width="30" height="30" fill="white" transform="translate(25 26)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>

                                <?= renderImg('triangle.png', 'lib', 'w-full') ?>
                                <div class="bg-[#0da0ff] p-5 text-center">
                                    <p class="text-2xl text-white font-extrabold leading-none">Free Onsite Quotes &amp; Assessments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg class="w-full h-full" viewBox="0 0 1920 163" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect width="1920" height="163" fill="url(#pattern0)" />
        <defs>
            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_304_13" transform="scale(0.000520833 0.00613497)" />
            </pattern>
            <image id="image0_304_13" width="1920" height="163" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAACjCAYAAABrPQPQAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE7mlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgOS4xLWMwMDEgNzkuMTQ2Mjg5OSwgMjAyMy8wNi8yNS0yMDowMTo1NSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDI0LjcgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMy0xMS0yNFQxNTowNDo1MSsxMTowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTEtMjRUMTU6MDU6MDkrMTE6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjMtMTEtMjRUMTU6MDU6MDkrMTE6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmVlZGI2OTc3LWY4MmEtNjY0NC04OTEzLWExZDQ4OWYyN2MzYiIgeG1wTU06RG9jdW1lbnRJRD0i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" />
        </defs>
    </svg>
</header>

<section class="bg-white pt-8 pb-28">
    <div class="container">
        <div class="flex flex-wrap gap-y-4">
            <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                <div class="h-[584px] relative mx-1.5 rounded-t-xl overflow-hidden flex items-end">
                    <?= renderImg('cta1.jpg', 'lib', 'absolute w-full h-full object-cover') ?>
                    <div class="relative w-full">
                        <div class="relative flex flex-col items-center">
                            <svg class="absolute top-[-35px]" width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="41" cy="41" r="38.5" fill="white" stroke="#0DA0FF" stroke-width="5" />
                                <g clip-path="url(#clip0_304_14)">
                                    <path d="M43.75 52.25V48.5H25V50.375C25 53.4819 27.5181 56 30.625 56H44.7925C44.1475 54.8919 43.75 53.6225 43.75 52.25Z" fill="#0DA0FF" />
                                    <path d="M32.5 26V35.375V44.75H47.5C47.5 44.75 47.5 47.0806 47.5 52.25C47.5 54.3219 49.1781 56 51.25 56C53.3219 56 55 54.3219 55 52.25V26H32.5ZM51.25 41H36.25V37.25H51.25V41ZM51.25 33.5H36.25V29.75H51.25V33.5Z" fill="#0DA0FF" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_304_14">
                                        <rect width="30" height="30" fill="white" transform="translate(25 26)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <?= renderImg('triangle.png', 'lib', 'w-full') ?>
                        <div class="bg-[#0da0ff] py-5 px-10 text-center min-h-[91px] flex justify-center items-center">
                            <p class="text-2xl text-white font-extrabold leading-none capitalize">No Hidden Cost</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                <div class="h-[584px] relative mx-1.5 rounded-t-xl overflow-hidden flex items-end">
                    <?= renderImg('cta2.jpg', 'lib', 'absolute w-full h-full object-cover') ?>
                    <div class="relative w-full">
                        <div class="relative flex flex-col items-center">
                            <svg class="absolute top-[-35px]" width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="41" cy="41" r="38.5" fill="white" stroke="#0DA0FF" stroke-width="5" />
                                <path d="M30.8249 35.2377C30.9127 35.3256 31.0319 35.375 31.1563 35.375H33.3064L37.2209 39.29L39.4531 37.3855L35.375 33.3074V31.1563C35.375 31.032 35.3256 30.9128 35.2377 30.8249L31.9564 27.5436C31.8685 27.4557 31.7493 27.4064 31.625 27.4064C31.5007 27.4064 31.3815 27.4557 31.2936 27.5436L27.5436 31.2936C27.4557 31.3815 27.4064 31.5007 27.4064 31.625C27.4064 31.7493 27.4557 31.8685 27.5436 31.9564L30.8249 35.2377Z" fill="#0DA0FF" />
                                <path d="M53.3525 48.0313L45.6978 41.3085L41.4922 46.2303L48.0313 53.3502C48.0739 53.3971 48.1156 53.4439 48.1625 53.4908C48.8689 54.197 49.8269 54.5937 50.8257 54.5937C51.8246 54.5937 52.7825 54.197 53.4889 53.4908C53.5358 53.4439 53.5775 53.3971 53.6202 53.3502C54.29 52.6093 54.638 51.6328 54.5879 50.6353C54.5377 49.6378 54.0933 48.7011 53.3525 48.0313Z" fill="#0DA0FF" />
                                <path d="M54.8783 36.4967L47.4688 29.0881C46.3723 28.0168 44.9002 27.4169 43.3672 27.4169C41.8342 27.4169 40.3621 28.0168 39.2656 29.0881C39.2218 29.1317 39.1869 29.1835 39.1632 29.2406C39.1394 29.2977 39.1272 29.3589 39.1272 29.4207C39.1272 29.4825 39.1394 29.5437 39.1632 29.6008C39.1869 29.6579 39.2218 29.7097 39.2656 29.7533L44.1406 34.6283L28.2336 48.1841C27.7599 48.5861 27.4652 49.1598 27.4143 49.7791C27.3634 50.3983 27.5605 51.0124 27.9622 51.4864C28.0039 51.5366 28.048 51.5839 28.093 51.627L30.3711 53.9052C30.8106 54.3447 31.4068 54.5916 32.0284 54.5916C32.65 54.5916 33.2461 54.3447 33.6856 53.9052C33.7325 53.8583 33.7737 53.8114 33.8145 53.7645L47.3923 37.8828L50.4186 40.9095C50.5061 40.9972 50.6247 41.0466 50.7486 41.047C50.8724 41.0475 50.9914 40.9989 51.0795 40.9119L54.8764 37.1619C54.9655 37.0741 55.0161 36.9546 55.017 36.8295C55.0172 36.7676 55.005 36.7063 54.9812 36.6492C54.9573 36.592 54.9224 36.5402 54.8783 36.4967Z" fill="#0DA0FF" />
                            </svg>
                        </div>

                        <?= renderImg('triangle.png', 'lib', 'w-full') ?>
                        <div class="bg-[#0da0ff] py-5 px-10 text-center min-h-[91px] flex justify-center items-center">
                            <p class="text-2xl text-white font-extrabold leading-none capitalize">We will fix it the<br /> first time</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                <div class="h-[584px] relative mx-1.5 rounded-t-xl overflow-hidden flex items-end">
                    <?= renderImg('cta3.jpg', 'lib', 'absolute w-full h-full object-cover') ?>
                    <div class="relative w-full">
                        <div class="relative flex flex-col items-center">
                            <svg class="absolute top-[-35px]" width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="41" cy="41" r="38.5" fill="white" stroke="#0DA0FF" stroke-width="5" />
                                <g clip-path="url(#clip0_304_17)">
                                    <path d="M54.75 30.5537C51.0431 30.5537 45.5756 29.5493 41.3469 26.73C41.2442 26.6614 41.1235 26.6249 41 26.6249C40.8765 26.6249 40.7558 26.6614 40.6531 26.73C36.4244 29.5493 30.9569 30.5537 27.25 30.5537C27.0842 30.5537 26.9253 30.6196 26.8081 30.7368C26.6908 30.854 26.625 31.013 26.625 31.1787C26.625 42.5068 31.9069 51.5331 40.7538 55.3243C40.8316 55.3577 40.9153 55.3749 41 55.3749C41.0847 55.3749 41.1684 55.3577 41.2462 55.3243C50.0931 51.5331 55.375 42.5068 55.375 31.1787C55.375 31.013 55.3092 30.854 55.1919 30.7368C55.0747 30.6196 54.9158 30.5537 54.75 30.5537ZM40.375 28.375V40.375H29.2362C28.3743 37.5948 27.9178 34.7048 27.8806 31.7943C32.2589 31.6699 36.5435 30.4973 40.375 28.375ZM41.625 53.7631V41.625H52.3325C50.4875 46.9147 46.6437 51.2712 41.625 53.7606V53.7631Z" fill="#0DA0FF" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_304_17">
                                        <rect width="30" height="30" fill="white" transform="translate(26 26)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <?= renderImg('triangle.png', 'lib', 'w-full') ?>
                        <div class="bg-[#0da0ff] py-5 px-10 text-center min-h-[91px] flex justify-center items-center">
                            <p class="text-2xl text-white font-extrabold leading-none capitalize">30 Year warranty on all<br /> first time</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trusted pt-16 md:pt-32 lg:py-60">
    <div class="container">
        <div class="flex flex-wrap items-center justify-between">
            <div class="w-full lg:w-1/2">
                <div class="xl:w-11/12">
                    <p class="flex flex-row justify-center md:justify-start gap-x-1 items-center text-white font-medium md:font-bold text-sm md:text-base">Consistent 5 star ratings
                        <span><svg width="76" height="12" viewBox="0 0 76 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5721 3.98043L8.03214 3.46643L6.44814 0.258434C6.40226 0.179792 6.33657 0.114549 6.25761 0.0692047C6.17865 0.0238608 6.08919 0 5.99815 0C5.9071 0 5.81764 0.0238608 5.73868 0.0692047C5.65972 0.114549 5.59403 0.179792 5.54814 0.258434L3.96814 3.46643L0.428145 3.98043C0.335795 3.99384 0.249041 4.03283 0.177698 4.09299C0.106354 4.15314 0.0532684 4.23206 0.0244461 4.32081C-0.00437615 4.40957 -0.0077847 4.50462 0.0146061 4.59521C0.0369969 4.68581 0.0842934 4.76832 0.151145 4.83343L2.71315 7.33343L2.10715 10.8594C2.09132 10.9515 2.10158 11.0461 2.13676 11.1326C2.17194 11.219 2.23063 11.2939 2.30619 11.3488C2.38175 11.4036 2.47116 11.4362 2.56429 11.4429C2.65742 11.4495 2.75056 11.43 2.83314 11.3864L6.00014 9.71843L9.16714 11.3834C9.23856 11.4214 9.31828 11.4409 9.39915 11.4404C9.47201 11.4406 9.54403 11.4248 9.61016 11.3942C9.67629 11.3637 9.73494 11.319 9.78199 11.2633C9.82905 11.2077 9.86338 11.1425 9.88258 11.0722C9.90178 11.0019 9.90539 10.9283 9.89314 10.8564L9.28714 7.33043L11.8491 4.83043C11.916 4.76532 11.9633 4.68281 11.9857 4.59221C12.0081 4.50162 12.0047 4.40657 11.9758 4.31781C11.947 4.22906 11.8939 4.15014 11.8226 4.08999C11.7512 4.02983 11.6645 3.99084 11.5721 3.97743V3.98043Z" fill="#FFC100" />
                                <path d="M27.5721 3.98043L24.0321 3.46643L22.4481 0.258434C22.4023 0.179792 22.3366 0.114549 22.2576 0.0692047C22.1787 0.0238608 22.0892 0 21.9981 0C21.9071 0 21.8176 0.0238608 21.7387 0.0692047C21.6597 0.114549 21.594 0.179792 21.5481 0.258434L19.9681 3.46643L16.4281 3.98043C16.3358 3.99384 16.249 4.03283 16.1777 4.09299C16.1064 4.15314 16.0533 4.23206 16.0244 4.32081C15.9956 4.40957 15.9922 4.50462 16.0146 4.59521C16.037 4.68581 16.0843 4.76832 16.1511 4.83343L18.7131 7.33343L18.1071 10.8594C18.0913 10.9515 18.1016 11.0461 18.1368 11.1326C18.1719 11.219 18.2306 11.2939 18.3062 11.3488C18.3818 11.4036 18.4712 11.4362 18.5643 11.4429C18.6574 11.4495 18.7506 11.43 18.8331 11.3864L22.0001 9.71843L25.1671 11.3834C25.2386 11.4214 25.3183 11.4409 25.3991 11.4404C25.472 11.4406 25.544 11.4248 25.6102 11.3942C25.6763 11.3637 25.7349 11.319 25.782 11.2633C25.8291 11.2077 25.8634 11.1425 25.8826 11.0722C25.9018 11.0019 25.9054 10.9283 25.8931 10.8564L25.2871 7.33043L27.8491 4.83043C27.916 4.76532 27.9633 4.68281 27.9857 4.59221C28.0081 4.50162 28.0047 4.40657 27.9758 4.31781C27.947 4.22906 27.8939 4.15014 27.8226 4.08999C27.7512 4.02983 27.6645 3.99084 27.5721 3.97743V3.98043Z" fill="#FFC100" />
                                <path d="M43.5721 3.98043L40.0321 3.46643L38.4481 0.258434C38.4023 0.179792 38.3366 0.114549 38.2576 0.0692047C38.1787 0.0238608 38.0892 0 37.9981 0C37.9071 0 37.8176 0.0238608 37.7387 0.0692047C37.6597 0.114549 37.594 0.179792 37.5481 0.258434L35.9681 3.46643L32.4281 3.98043C32.3358 3.99384 32.249 4.03283 32.1777 4.09299C32.1064 4.15314 32.0533 4.23206 32.0244 4.32081C31.9956 4.40957 31.9922 4.50462 32.0146 4.59521C32.037 4.68581 32.0843 4.76832 32.1511 4.83343L34.7131 7.33343L34.1071 10.8594C34.0913 10.9515 34.1016 11.0461 34.1368 11.1326C34.1719 11.219 34.2306 11.2939 34.3062 11.3488C34.3818 11.4036 34.4712 11.4362 34.5643 11.4429C34.6574 11.4495 34.7506 11.43 34.8331 11.3864L38.0001 9.71843L41.1671 11.3834C41.2386 11.4214 41.3183 11.4409 41.3991 11.4404C41.472 11.4406 41.544 11.4248 41.6102 11.3942C41.6763 11.3637 41.7349 11.319 41.782 11.2633C41.8291 11.2077 41.8634 11.1425 41.8826 11.0722C41.9018 11.0019 41.9054 10.9283 41.8931 10.8564L41.2871 7.33043L43.8491 4.83043C43.916 4.76532 43.9633 4.68281 43.9857 4.59221C44.0081 4.50162 44.0047 4.40657 43.9758 4.31781C43.947 4.22906 43.8939 4.15014 43.8226 4.08999C43.7512 4.02983 43.6645 3.99084 43.5721 3.97743V3.98043Z" fill="#FFC100" />
                                <path d="M59.5721 3.98043L56.0321 3.46643L54.4481 0.258434C54.4023 0.179792 54.3366 0.114549 54.2576 0.0692047C54.1787 0.0238608 54.0892 0 53.9981 0C53.9071 0 53.8176 0.0238608 53.7387 0.0692047C53.6597 0.114549 53.594 0.179792 53.5481 0.258434L51.9681 3.46643L48.4281 3.98043C48.3358 3.99384 48.249 4.03283 48.1777 4.09299C48.1064 4.15314 48.0533 4.23206 48.0244 4.32081C47.9956 4.40957 47.9922 4.50462 48.0146 4.59521C48.037 4.68581 48.0843 4.76832 48.1511 4.83343L50.7131 7.33343L50.1071 10.8594C50.0913 10.9515 50.1016 11.0461 50.1368 11.1326C50.1719 11.219 50.2306 11.2939 50.3062 11.3488C50.3818 11.4036 50.4712 11.4362 50.5643 11.4429C50.6574 11.4495 50.7506 11.43 50.8331 11.3864L54.0001 9.71843L57.1671 11.3834C57.2386 11.4214 57.3183 11.4409 57.3991 11.4404C57.472 11.4406 57.544 11.4248 57.6102 11.3942C57.6763 11.3637 57.7349 11.319 57.782 11.2633C57.8291 11.2077 57.8634 11.1425 57.8826 11.0722C57.9018 11.0019 57.9054 10.9283 57.8931 10.8564L57.2871 7.33043L59.8491 4.83043C59.916 4.76532 59.9633 4.68281 59.9857 4.59221C60.0081 4.50162 60.0047 4.40657 59.9758 4.31781C59.947 4.22906 59.8939 4.15014 59.8226 4.08999C59.7512 4.02983 59.6645 3.99084 59.5721 3.97743V3.98043Z" fill="#FFC100" />
                                <path d="M75.5721 3.98043L72.0321 3.46643L70.4481 0.258434C70.4023 0.179792 70.3366 0.114549 70.2576 0.0692047C70.1787 0.0238608 70.0892 0 69.9981 0C69.9071 0 69.8176 0.0238608 69.7387 0.0692047C69.6597 0.114549 69.594 0.179792 69.5481 0.258434L67.9681 3.46643L64.4281 3.98043C64.3358 3.99384 64.249 4.03283 64.1777 4.09299C64.1064 4.15314 64.0533 4.23206 64.0244 4.32081C63.9956 4.40957 63.9922 4.50462 64.0146 4.59521C64.037 4.68581 64.0843 4.76832 64.1511 4.83343L66.7131 7.33343L66.1071 10.8594C66.0913 10.9515 66.1016 11.0461 66.1368 11.1326C66.1719 11.219 66.2306 11.2939 66.3062 11.3488C66.3818 11.4036 66.4712 11.4362 66.5643 11.4429C66.6574 11.4495 66.7506 11.43 66.8331 11.3864L70.0001 9.71843L73.1671 11.3834C73.2386 11.4214 73.3183 11.4409 73.3991 11.4404C73.472 11.4406 73.544 11.4248 73.6102 11.3942C73.6763 11.3637 73.7349 11.319 73.782 11.2633C73.8291 11.2077 73.8634 11.1425 73.8826 11.0722C73.9018 11.0019 73.9054 10.9283 73.8931 10.8564L73.2871 7.33043L75.8491 4.83043C75.916 4.76532 75.9633 4.68281 75.9857 4.59221C76.0081 4.50162 76.0047 4.40657 75.9758 4.31781C75.947 4.22906 75.8939 4.15014 75.8226 4.08999C75.7512 4.02983 75.6645 3.99084 75.5721 3.97743V3.98043Z" fill="#FFC100" />
                            </svg>
                        </span>
                        across the board
                    </p>

                    <h2 class="capitalize text-dark text-45 md:text-65 text-center md:text-start leading-none font-articulat-heavy pt-5"><span class="text-white">We're Proud To Be One Of</span> Sydney's Most Trusted Roofing Companies</h2>

                    <p class="text-white text-sm md:text-base text-center md:text-start pt-5">Years of experience and countless satisfied customers. Proud to be Sydney's most trusted roofing company</p>

                    <div class="flex justify-center md:justify-start">
                        <a href="tel:<?= $phone_number ?>" class="rounded-full bg-white px-12 text-primary text-lg font-bold inline-flex justify-center items-center h-[60px] mt-6"><?= $phone_number ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= renderImg('trusted.png', 'lib', "w-full md:hidden") ?>
    <?= renderImg('trusted.png', 'background', "w-full hidden md:block lg:hidden") ?>
</section>

<section class="bg-[#202020] py-5">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center gap-y-">
            <div class="hidden lg:block w-1/2">
                <p class="text-white capitalize text-2xl font-bold">We Only work with trusted brands</p>
            </div>
            <div class="w-full lg:w-1/2">
                <div id="brandSlider">
                    <div><?= renderImg('brand1.png', 'logo') ?></div>
                    <div><?= renderImg('brand2.png', 'logo') ?></div>
                    <div><?= renderImg('brand3.png', 'logo') ?></div>
                    <div><?= renderImg('brand4.png', 'logo') ?></div>
                    <div><?= renderImg('brand5.png', 'logo') ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#2B2B2B] pb-5">
    <div class="container py-16 md:py-20 text-white text-center">
        <h2 class="capitalize font-bold text-45 md:text-65 leading-none">Quality and customer satisfaction first</h2>
        <p class="py-5 font-thin">Our team of experts are passionate about roofing, and we're dedicated to making a difference one roof at a time.</p>

        <div class="flex flex-wrap justify-center gap-x-3">
            <div class="w-fit">
                <a href="tel:<?= $phone_number ?>" class="rounded-full bg-primary px-5 text-white text-lg font-bold inline-flex justify-center items-center gap-x-3 h-[60px]">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.722 9.74549L10.9232 8.50361C10.6464 8.38114 10.3369 8.35341 10.0427 8.4247C9.74847 8.49599 9.48599 8.66233 9.29592 8.89794L8.45103 9.95515C7.08186 9.08413 5.92058 7.92318 5.04919 6.55425L6.10552 5.71028C6.34195 5.52043 6.509 5.25774 6.58064 4.96311C6.65228 4.66847 6.62451 4.35841 6.50164 4.0812L5.25885 1.28251C5.12682 0.985251 4.89355 0.744514 4.6006 0.603185C4.30764 0.461857 3.97402 0.429117 3.65918 0.510797L1.29314 1.12549C0.966723 1.21076 0.68291 1.41278 0.495464 1.69329C0.308018 1.9738 0.229958 2.3133 0.276069 2.64751C0.714228 5.69619 2.12817 8.52092 4.30619 10.6987C6.4842 12.8765 9.30908 14.2902 12.3579 14.7282C12.4205 14.737 12.4837 14.7415 12.547 14.7416C12.8516 14.7414 13.1476 14.6402 13.3886 14.4539C13.6296 14.2677 13.8021 14.0067 13.879 13.712L14.4928 11.3451C14.5757 11.0304 14.5436 10.6964 14.4023 10.4032C14.261 10.11 14.0198 9.8768 13.722 9.74549Z" fill="white" />
                    </svg>

                    <?= $phone_number ?>
                </a>
            </div>
            <div class="w-fit">
                <a href="#form" class="rounded-full bg-white px-8 text-primary text-lg font-extrabold inline-flex justify-center items-center h-[60px]">Book Now</a>
            </div>
        </div>
    </div>

    <div id="servicesSlider">
        <?php $services = ["New Roof", "Re Roofing", "Tiled Roof Repairs", "Roof Maintenance", "Roof Leaks", "Roof Leaks Detects", "Gutter Repair", "Gutter Replacement", "Gutter Installation", "Sky Light Repair", "Skylight Replacement", "Metal Roof Repair", "Commercial Roofing"]; ?>

        <?php foreach ($services as $key => $service) : ?>
            <div>
                <div class="h-[470px] rounded-xl overflow-hidden relative mx-1.5">
                    <?= renderImg('service' . $key . '.jpg', 'lib', 'w-full h-full object-cover z-1') ?>
                    <div class="h-full absolute top-0 w-full p-10 flex items-end z-10 bg-black/40">
                        <div class="w-full flex items-center text-center justify-center border-2 border-white text-white rounded-full h-[48px] md:h-[60px] text-base md:text-2xl pointer-events-none"><?= $service ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="form bg-white pt-5" id="form">
    <div class="container">
        <div class="bg-white border border-[#e8e8e8] rounded-[40px] py-14 md:pt-20 md:px-7 lg:px-14">
            <h2 class="capitalize font-articulat-heavy text-4xl md:text-65 text-center leading-none text-dark"><span class="text-primary">We Can beat</span> Any written quote<span class="font-articulat">*</span></h2>

            <p class="text-center text-grey pt-4">
                Looking for a roofing company that puts quality and customer satisfaction first? Look no further than MTG Roofing. Our team of experts are passionate about roofing, and we're dedicated to making a difference one roof at a time.
            </p>

            <form action="./src/form" id="form" class="flex flex-wrap gap-y-5 mt-10 md:mt-14" enctype="multipart/form-data">
                <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse" />

                <div class="w-full md:w-1/2 px-2">
                    <div class="form-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                            <g clip-path="url(#clip0_33_64)">
                                <path d="M14.2843 7.36108V11.4444C14.2843 11.9085 14.0999 12.3537 13.7717 12.6819C13.4435 13.01 12.9984 13.1944 12.5343 13.1944H3.20096C2.73683 13.1944 2.29171 13.01 1.96352 12.6819C1.63533 12.3537 1.45096 11.9085 1.45096 11.4444V7.36108" stroke="#212121" stroke-opacity="0.48" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.2843 5.02767V4.44434C14.2843 3.98021 14.0999 3.53509 13.7717 3.2069C13.4435 2.87871 12.9984 2.69434 12.5343 2.69434H3.20096C2.73683 2.69434 2.29171 2.87871 1.96352 3.2069C1.63533 3.53509 1.45096 3.98021 1.45096 4.44434V5.02767L7.86762 8.52767L14.2843 5.02767Z" stroke="#212121" stroke-opacity="0.48" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_33_64">
                                    <rect width="14" height="14" fill="white" transform="translate(0.867615 0.944336)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <input type="text" class="form-control" name="name" placeholder="Name" required />
                    </div>
                </div>

                <div class="w-full md:w-1/2 px-2">
                    <div class="form-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                            <g clip-path="url(#clip0_33_64)">
                                <path d="M14.2843 7.36108V11.4444C14.2843 11.9085 14.0999 12.3537 13.7717 12.6819C13.4435 13.01 12.9984 13.1944 12.5343 13.1944H3.20096C2.73683 13.1944 2.29171 13.01 1.96352 12.6819C1.63533 12.3537 1.45096 11.9085 1.45096 11.4444V7.36108" stroke="#212121" stroke-opacity="0.48" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.2843 5.02767V4.44434C14.2843 3.98021 14.0999 3.53509 13.7717 3.2069C13.4435 2.87871 12.9984 2.69434 12.5343 2.69434H3.20096C2.73683 2.69434 2.29171 2.87871 1.96352 3.2069C1.63533 3.53509 1.45096 3.98021 1.45096 4.44434V5.02767L7.86762 8.52767L14.2843 5.02767Z" stroke="#212121" stroke-opacity="0.48" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_33_64">
                                    <rect width="14" height="14" fill="white" transform="translate(0.867615 0.944336)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <input type="email" class="form-control" name="emailaddress" placeholder="Email" required />
                    </div>
                </div>

                <div class="w-full md:w-1/2 px-2">
                    <div class="form-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                            <g clip-path="url(#clip0_33_64)">
                                <path d="M14.2843 7.36108V11.4444C14.2843 11.9085 14.0999 12.3537 13.7717 12.6819C13.4435 13.01 12.9984 13.1944 12.5343 13.1944H3.20096C2.73683 13.1944 2.29171 13.01 1.96352 12.6819C1.63533 12.3537 1.45096 11.9085 1.45096 11.4444V7.36108" stroke="#212121" stroke-opacity="0.48" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.2843 5.02767V4.44434C14.2843 3.98021 14.0999 3.53509 13.7717 3.2069C13.4435 2.87871 12.9984 2.69434 12.5343 2.69434H3.20096C2.73683 2.69434 2.29171 2.87871 1.96352 3.2069C1.63533 3.53509 1.45096 3.98021 1.45096 4.44434V5.02767L7.86762 8.52767L14.2843 5.02767Z" stroke="#212121" stroke-opacity="0.48" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_33_64">
                                    <rect width="14" height="14" fill="white" transform="translate(0.867615 0.944336)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <input type="tel" class="form-control" id="contactNumber" name="phonenumber" placeholder="Phone" required />
                    </div>
                    <p class="text-sm text-red-500 pt-2 ps-5 hidden" id="phoneError">Invalid Phone Number</p>
                </div>

                <div class="w-full md:w-1/2 px-2">
                    <div class="form-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14.7069 3.13447L12.8106 5.0308L10.5286 2.7488L12.4249 0.85247C11.986 0.723084 11.5276 0.67197 11.0709 0.70147C10.2282 0.771446 9.43755 1.13814 8.83975 1.73631C8.24195 2.33447 7.87574 3.12532 7.80628 3.96814C7.77663 4.42471 7.82763 4.88293 7.95695 5.3218L1.21428 10.9441C1.11142 11.0299 1.02755 11.1362 0.968033 11.2562C0.908516 11.3762 0.874652 11.5073 0.8686 11.6411C0.862547 11.7749 0.884439 11.9085 0.93288 12.0334C0.98132 12.1583 1.05525 12.2717 1.14995 12.3665L3.19295 14.4095C3.28768 14.5042 3.40111 14.5781 3.52599 14.6265C3.65088 14.675 3.78448 14.6969 3.9183 14.6908C4.05211 14.6848 4.1832 14.6509 4.3032 14.5914C4.4232 14.5319 4.52949 14.448 4.61528 14.3451L10.2393 7.60247C10.6782 7.73179 11.1364 7.78279 11.5929 7.75314C12.4355 7.6833 13.2259 7.31693 13.8237 6.71916C14.4216 6.1214 14.788 5.33098 14.8579 4.48847C14.8874 4.03177 14.8363 3.57345 14.7069 3.13447Z" stroke="#212121" stroke-opacity="0.48" stroke-width="0.8" stroke-miterlimit="10" stroke-linecap="square" />
                        </svg>
                        <select class="form-control" name="service" required>
                            <option selected disabled>Service</option>
                            <?php foreach ($services as $service) : ?>
                                <option><?= $service ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="w-full px-2">
                    <div class="form-group">
                        <textarea class="form-control" rows="6" name="message" placeholder="Message"></textarea>
                    </div>
                </div>

                <div class="w-full md:w-1/3 px-2">
                    <div class="form-group">
                        <label for="fileUpload" class="h-[62px] w-full flex justify-center gap-x-2 items-center text-black/30">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_33_51)">
                                    <path d="M9.69756 6.23053L6.63889 9.29053C6.4734 9.45585 6.34211 9.65216 6.25253 9.86824C6.16296 10.0843 6.11686 10.3159 6.11686 10.5499C6.11686 10.7838 6.16296 11.0154 6.25253 11.2315C6.34211 11.4476 6.4734 11.6439 6.63889 11.8092C6.8042 11.9747 7.00051 12.106 7.2166 12.1956C7.43268 12.2851 7.66431 12.3312 7.89822 12.3312C8.13214 12.3312 8.36376 12.2851 8.57984 12.1956C8.79593 12.106 8.99224 11.9747 9.15756 11.8092L13.2909 7.67586C13.9588 7.00755 14.334 6.10137 14.334 5.15653C14.334 4.21169 13.9588 3.30551 13.2909 2.6372C12.9601 2.30617 12.5674 2.04357 12.1351 1.8644C11.7028 1.68524 11.2395 1.59302 10.7716 1.59302C10.3036 1.59302 9.84026 1.68524 9.40798 1.8644C8.9757 2.04357 8.58296 2.30617 8.25222 2.6372L3.75889 7.13053C2.75668 8.13295 2.19366 9.49238 2.19366 10.9099C2.19366 12.3273 2.75668 13.6868 3.75889 14.6892C4.7613 15.6914 6.12074 16.2544 7.53822 16.2544C8.9557 16.2544 10.3151 15.6914 11.3176 14.6892L15.4509 10.5559" stroke="#ABABAB" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_33_51">
                                        <rect width="16" height="16" fill="white" transform="translate(0.825562 0.921143)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <p id="file-label">Attach</p>
                        </label>
                        <input type="file" name="uploadedFile" class="form-control" id="fileUpload">
                    </div>
                </div>

                <div class="w-full md:w-2/3 px-2">
                    <button type="submit" class="h-[62px] text-white bg-primary w-full rounded-[16px]">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="bg-white py-20 md:py-32">
    <div class="container">
        <h2 class="capitalize font-articulat-heavy text-45 md:text-65 text-center leading-none text-black"><span class="text-primary">With years of experience</span> and countless satisfied customers</h2>
        <p class="text-grey text-center text-sm md:text-base leading-loose pt-8">We're proud to be one of Sydney's most trusted roofing companies. Whether you need a repair, a replacement, or just some expert advice, we're here to help. Contact us today to learn more about what we can do for you.</p>

        <div class="flex flex-wrap gap-y-4 mt-20">
            <div class="testimonialSlider w-full lg:w-1/2 xl:w-1/3 px-2 flex flex-wrap gap-y-4">
                <div class="border border-light rounded-lg p-6">
                    <div class="description text-sm md:text-base">
                        <div class="text-dark-teal">
                            <p>“ I am a Strata manager who has been using the MTG team for the last 6 months. They have always been punctual, reasonably priced ”</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-5 mt-5">
                        <div class="customer-image h-[58px] w-[58px] rounded-full overflow-hidden bg-light">
                            <?= renderImg('service1.jpg', 'lib', 'h-full w-full object-cover') ?>
                        </div>
                        <div>
                            <p class="text-primary font-extrabold text-base md:text-xl">James Albert</p>
                            <p class="text-light-teal text-sm md:text-base">Customer</p>
                        </div>
                    </div>
                </div>

                <div class="border border-light rounded-lg p-6">
                    <div class="description text-sm md:text-base">
                        <p class="text-lg font-bold text-secondary">“Great experience”</p>
                        <div class="text-dark-teal">
                            <p>I had a great experience working with Multiple Trade Group. Their team was very professional and knowledgeable, and they did an excellent job installing my new roof.</p>
                            <p>They were very communicative throughout the process, and they made sure to keep me updated on their progress. I would definitely recommend Multiple Trade Group to anyone looking for a reliable and trustworthy roofing company.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-5 mt-5">
                        <div class="customer-image h-[58px] w-[58px] rounded-full overflow-hidden bg-light">
                            <?= renderImg('service1.jpg', 'lib', 'h-full w-full object-cover') ?>
                        </div>
                        <div>
                            <p class="text-primary font-extrabold text-base md:text-xl">Anthony Daaboul</p>
                            <p class="text-light-teal text-sm md:text-base">Customer</p>
                        </div>
                    </div>
                </div>

                <div class="border border-light rounded-lg p-6">
                    <div class="description text-sm md:text-base">
                        <div class="text-dark-teal">
                            <p>They arrived on time, figured out what had caused the leaks, and fixed everything promptly. Efficient and trustworthy.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-5 mt-5">
                        <div class="customer-image h-[58px] w-[58px] rounded-full overflow-hidden bg-light">
                            <?= renderImg('service1.jpg', 'lib', 'h-full w-full object-cover') ?>
                        </div>
                        <div>
                            <p class="text-primary font-extrabold text-base md:text-xl">Elizabeth Wilson</p>
                            <p class="text-light-teal text-sm md:text-base">Customer</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonialSlider w-full lg:w-1/2 xl:w-1/3 px-2 flex flex-wrap gap-y-4">
                <div class="border border-light rounded-lg p-6">
                    <div class="description text-sm md:text-base">
                        <div class="text-dark-teal">
                            <p>The guys at Multi Trade Group have gone above and beyond to resolve my roof leaking, GIO wanted an arm and a leg to remidiate the faults which caused a roof leak</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-5 mt-5">
                        <div class="customer-image h-[58px] w-[58px] rounded-full overflow-hidden bg-light">
                            <?= renderImg('service1.jpg', 'lib', 'h-full w-full object-cover') ?>
                        </div>
                        <div>
                            <p class="text-primary font-extrabold text-base md:text-xl">Danny</p>
                            <p class="text-light-teal text-sm md:text-base">Customer</p>
                        </div>
                    </div>
                </div>

                <div class="border border-light rounded-lg p-6">
                    <div class="description text-sm md:text-base">
                        <p class="text-lg font-bold text-secondary">“Excellent Job”</p>
                        <div class="text-dark-teal">
                            <p>“Multiple Trade Group did an excellent job on my roof. They were very professional and knowledgeable, and their team worked quickly and efficiently. I was very impressed with their attention to detail and commitment to quality. I would definitely recommend them to anyone looking for a reliable and trustworthy roofing company.”</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-5 mt-5">
                        <div class="customer-image h-[58px] w-[58px] rounded-full overflow-hidden bg-light">
                            <?= renderImg('service1.jpg', 'lib', 'h-full w-full object-cover') ?>
                        </div>
                        <div>
                            <p class="text-primary font-extrabold text-base md:text-xl">Massimo Mascolo</p>
                            <p class="text-light-teal text-sm md:text-base">Customer</p>
                        </div>
                    </div>
                </div>

                <div class="border border-light rounded-lg p-6">
                    <div class="description text-sm md:text-base">
                        <p class="text-lg font-bold text-secondary">“Amazing Service!”</p>
                        <div class="text-dark-teal">
                            <p>“dolor neque tempor odio, id pellentesque leo purus vel ante.</p>
                            <p>Nam ligula leo, faucibus vel ligula ullamcorper, tempus egestas felis.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-5 mt-5">
                        <div class="customer-image h-[58px] w-[58px] rounded-full overflow-hidden bg-light">
                            <?= renderImg('service1.jpg', 'lib', 'h-full w-full object-cover') ?>
                        </div>
                        <div>
                            <p class="text-primary font-extrabold text-base md:text-xl">Tom Green</p>
                            <p class="text-light-teal text-sm md:text-base">Customer</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonialSlider w-full lg:w-1/2 xl:w-1/3 px-2 flex flex-wrap gap-y-4">
                <div class="border border-light rounded-lg p-6">
                    <div class="description text-sm md:text-base">
                        <div class="text-dark-teal">
                            <p>I had a roof leak that 3 other roofers could not diagnose. Multiple trade group rectified this issue on the first attempt. Professional</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-5 mt-5">
                        <div class="customer-image h-[58px] w-[58px] rounded-full overflow-hidden bg-light">
                            <?= renderImg('service1.jpg', 'lib', 'h-full w-full object-cover') ?>
                        </div>
                        <div>
                            <p class="text-primary font-extrabold text-base md:text-xl">Anthony</p>
                            <p class="text-light-teal text-sm md:text-base">Customer</p>
                        </div>
                    </div>
                </div>

                <div class="border border-light rounded-lg p-6">
                    <div class="description text-sm md:text-base">
                        <p class="text-lg font-bold text-secondary">“Amazing Service!”</p>
                        <div class="text-dark-teal">
                            <p>I contacted two other roofing companies prior to contacting Multiple Trade Group which didn’t even turn up. Multiple Trade Group were highly experienced, very professional and resolved our roof leaks on their first attempt. I would
                                definitely be recommending Multiple Trade Group to all my family and friends.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-5 mt-5">
                        <div class="customer-image h-[58px] w-[58px] rounded-full overflow-hidden bg-light">
                            <?= renderImg('service1.jpg', 'lib', 'h-full w-full object-cover') ?>
                        </div>
                        <div>
                            <p class="text-primary font-extrabold text-base md:text-xl">Tom Green</p>
                            <p class="text-light-teal text-sm md:text-base">Customer</p>
                        </div>
                    </div>
                </div>

                <div class="border border-light rounded-lg p-6">
                    <div class="description text-sm md:text-base">
                        <div class="text-dark-teal">
                            <p> Thank you for taking the time to fix our roof. For the last couple of years I've been looking for someone to help us with it. </p>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-5 mt-5">
                        <div class="customer-image h-[58px] w-[58px] rounded-full overflow-hidden bg-light">
                            <?= renderImg('service1.jpg', 'lib', 'h-full w-full object-cover') ?>
                        </div>
                        <div>
                            <p class="text-primary font-extrabold text-base md:text-xl">Tracy</p>
                            <p class="text-light-teal text-sm md:text-base">Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container pb-16 md:pb-28">
    <section class="assessment rounded-[40px] md:rounded-[70px] bg-dark-grey overflow-hidden flex flex-wrap">
        <div class="w-full lg:w-1/2 flex justify-center lg:justify-end items-center py-10">
            <div class="w-11/12 xl:w-10/12">
                <h2 class="capitalize font-articulat-heavy text-45 md:text-65 leading-none text-white text-center lg:text-start"><span class="text-primary">Free Onsite quotes</span> & assessments</h2>
                <p class="text-white capitalize text-xl text-center lg:text-start font-bold py-5 md:py-6">Our frequently asked questions</p>

                <div class="flex flex-col gap-y-5 accordion">
                    <div class="accordion-card active rounded-2xl bg-tertiary p-5 text-white">
                        <div class="flex flex-row justify-between question">
                            <div class="w-fit grow">
                                <p class="font-bold">Why do i need a licensed roofer?</p>
                            </div>
                            <div class="arrow w-[29px] h-[29px] bg-primary rounded-full flex justify-center items-center">
                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.12689 2.00781L6.47269 7.35352L11.8184 2.00781" stroke="white" stroke-width="3" />
                                </svg>
                            </div>
                        </div>
                        <div class="answer description text-sm pt-4">
                            <p>Having a licensed roofer is important because it ensures that the job is done professionally and meets all the necessary standards and regulations. It gives you peace of mind knowing that your roof is in capable hands.</p>
                        </div>
                    </div>

                    <div class="accordion-card rounded-2xl bg-tertiary p-5 text-white">
                        <div class="flex flex-row justify-between question">
                            <div class="w-fit grow">
                                <p class="font-bold">How often should I get a roof inspection done?</p>
                            </div>
                            <div class="w-fit">
                                <div class="arrow w-[29px] h-[29px] bg-primary rounded-full flex justify-center items-center">
                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.12689 2.00781L6.47269 7.35352L11.8184 2.00781" stroke="white" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="answer description text-sm pt-4">
                            <p>Having a licensed roofer is important because it ensures that the job is done professionally and meets all the necessary standards and regulations. It gives you peace of mind knowing that your roof is in capable hands.</p>
                        </div>
                    </div>

                    <div class="accordion-card rounded-2xl bg-tertiary p-5 text-white">
                        <div class="flex flex-row justify-between question">
                            <div class="w-fit grow">
                                <p class="font-bold">Difference between a roof repair and a roof replacement?</p>
                            </div>
                            <div class="w-fit">
                                <div class="arrow w-[29px] h-[29px] bg-primary rounded-full flex justify-center items-center">
                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.12689 2.00781L6.47269 7.35352L11.8184 2.00781" stroke="white" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="answer description text-sm pt-4">
                            <p>Having a licensed roofer is important because it ensures that the job is done professionally and meets all the necessary standards and regulations. It gives you peace of mind knowing that your roof is in capable hands.</p>
                        </div>
                    </div>

                    <div class="accordion-card rounded-2xl bg-tertiary p-5 text-white">
                        <div class="flex flex-row justify-between question">
                            <div class="w-fit grow">
                                <p class="font-bold">Do I get a warranty on a new roof?</p>
                            </div>
                            <div>
                                <div class="arrow w-[29px] h-[29px] bg-primary rounded-full flex justify-center items-center">
                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.12689 2.00781L6.47269 7.35352L11.8184 2.00781" stroke="white" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="answer description text-sm pt-4">
                            <p>Having a licensed roofer is important because it ensures that the job is done professionally and meets all the necessary standards and regulations. It gives you peace of mind knowing that your roof is in capable hands.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/2 relative">
            <svg class="absolute w-full top-[-2px] md:hidden" xmlns="http://www.w3.org/2000/svg" height="97" viewBox="0 0 383 99" fill="none">
                <path d="M195 96.5L0 0H383L195 96.5Z" fill="#2B2B2B" />
            </svg>
            <svg class="absolute top-0 left-0 h-full hidden lg:block" width="173" viewBox="0 0 173 790" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M172.5 450.5L0 841V0.5L172.5 450.5Z" fill="#2B2B2B" />
            </svg>
            <?= renderImg('assessment.jpg', 'lib', 'h-full w-full object-cover') ?>
        </div>
    </section>
</div>