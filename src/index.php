<?php include_once 'partials/header.php' ?>

<!-- Основной контент -->
<main>
  <section id="hero">
    <div class="container">
      <div class="hero">
        <div class="row align-items-center">
          <div class="col-10 col-lg-6">
            <div class="hero__content">
              <h1 class="hero__title section__title">
                Digital агентство
                <span class="hero__title hero__title--important">полного цикла</span>
              </h1>

              <p class="hero__description section__description">
                Мы оказываем весь спектр услуг в digital: решим вашу задачу, <br>
                будь это создание сайта, дизайн или ведение соцсетей. <br>
                Поможем разработать фирменный стиль и лого, настроим рекламу, предложим креативы для ваших рекламных кампаний. <br>
                Выполним одну конкретную задачу или сразу несколько.
              </p>

              <button href="#callback" class="hero__button button button-cta">Объединить усилия</button>

              <img src="img/page/main/hero/background.png" alt="" class="hero__background">
            </div>
            <!-- /.hero__content -->
          </div>
          <!-- /.col-6 -->

          <div class="col-5 mx-auto me-5 me-xl-0">
            <div class="hero__motion">
              <video class="hero__video" poster="video/hero_poster.jpg" autoplay muted loop playisline>
                <source src="video/hero.mp4" type="video/mp4">
              </video>
            </div>
            <!-- /.hero__motion -->
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->

        <div class="hero__social">
          <a class="hero__link social-link mb-4" href="">
            <svg class="social-link__icon social-link__icon--vk" width="55" height="54" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M36.5414 21.8244C36.6812 21.3488 36.5414 21 35.8807 21H33.6919C33.135 21 32.8805 21.3017 32.7407 21.6331C32.7407 21.6331 31.6279 24.4143 30.0509 26.2175C29.5419 26.7423 29.3093 26.908 29.0319 26.908C28.8931 26.908 28.6915 26.7423 28.6915 26.2666V21.8244C28.6915 21.2537 28.5308 21 28.0667 21H24.6273C24.28 21 24.0704 21.2639 24.0704 21.5155C24.0704 22.0556 24.8589 22.1804 24.9397 23.7024V27.0041C24.9397 27.7273 24.813 27.8592 24.5335 27.8592C23.7919 27.8592 21.9874 25.0679 20.9165 21.8725C20.7079 21.2516 20.4973 21.001 19.9384 21.001H17.7506C17.1248 21.001 17 21.3028 17 21.6342C17 22.2295 17.7416 25.1753 20.4544 29.0713C22.2629 31.7317 24.809 33.1739 27.1285 33.1739C28.5189 33.1739 28.6905 32.8538 28.6905 32.3014V30.2905C28.6905 29.6502 28.8233 29.5213 29.2634 29.5213C29.5868 29.5213 30.1437 29.6891 31.4422 30.9707C32.9254 32.4907 33.1709 33.1729 34.0043 33.1729H36.1921C36.8169 33.1729 37.1293 32.8527 36.9497 32.2206C36.753 31.5916 36.0444 30.6761 35.1042 29.5929C34.5932 28.9751 33.8296 28.3103 33.5971 27.9779C33.2727 27.5493 33.3665 27.3601 33.5971 26.9796C33.5981 26.9806 36.264 23.1326 36.5414 21.8244Z" fill="white" />
              <mask id="path-2-inside-1" fill="white">
                <path d="M27 52.65C27 53.3956 27.6049 54.0035 28.3495 53.9663C33.5746 53.7048 38.6221 51.9299 42.8702 48.8435C47.4831 45.492 50.9166 40.7662 52.6785 35.3435C54.4405 29.9207 54.4405 24.0793 52.6785 18.6565C50.9166 13.2338 47.4831 8.508 42.8702 5.15654C38.2573 1.80508 32.7018 1.75585e-07 27 0C21.2982 -1.75585e-07 15.7427 1.80508 11.1298 5.15654C6.51691 8.508 3.08344 13.2338 1.32147 18.6565C-0.301157 23.6505 -0.429473 28.9994 0.936526 34.0495C1.1312 34.7693 1.89631 35.1567 2.6054 34.9263C3.31449 34.6959 3.69867 33.935 3.50799 33.2142C2.31581 28.7075 2.44292 23.9425 3.88933 19.4909C5.4751 14.6104 8.56522 10.3572 12.7168 7.34089C16.8684 4.32458 21.8683 2.7 27 2.7C32.1317 2.7 37.1316 4.32458 41.2832 7.34089C45.4348 10.3572 48.5249 14.6104 50.1107 19.4909C51.6964 24.3714 51.6964 29.6286 50.1107 34.5091C48.5249 39.3896 45.4348 43.6428 41.2832 46.6591C37.4964 49.4104 33.0039 51.0037 28.3494 51.2625C27.6049 51.3039 27 51.9044 27 52.65Z" />
              </mask>
              <path d="M27 52.65C27 53.3956 27.6049 54.0035 28.3495 53.9663C33.5746 53.7048 38.6221 51.9299 42.8702 48.8435C47.4831 45.492 50.9166 40.7662 52.6785 35.3435C54.4405 29.9207 54.4405 24.0793 52.6785 18.6565C50.9166 13.2338 47.4831 8.508 42.8702 5.15654C38.2573 1.80508 32.7018 1.75585e-07 27 0C21.2982 -1.75585e-07 15.7427 1.80508 11.1298 5.15654C6.51691 8.508 3.08344 13.2338 1.32147 18.6565C-0.301157 23.6505 -0.429473 28.9994 0.936526 34.0495C1.1312 34.7693 1.89631 35.1567 2.6054 34.9263C3.31449 34.6959 3.69867 33.935 3.50799 33.2142C2.31581 28.7075 2.44292 23.9425 3.88933 19.4909C5.4751 14.6104 8.56522 10.3572 12.7168 7.34089C16.8684 4.32458 21.8683 2.7 27 2.7C32.1317 2.7 37.1316 4.32458 41.2832 7.34089C45.4348 10.3572 48.5249 14.6104 50.1107 19.4909C51.6964 24.3714 51.6964 29.6286 50.1107 34.5091C48.5249 39.3896 45.4348 43.6428 41.2832 46.6591C37.4964 49.4104 33.0039 51.0037 28.3494 51.2625C27.6049 51.3039 27 51.9044 27 52.65Z" fill="white" stroke-width="8" mask="url(#path-2-inside-1)" />
            </svg>
          </a>

          <a class="hero__link social-link mb-4" href="">
            <svg class="social-link__icon social-link__icon--instagram" width="54" height="54" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="path-1-inside-2" fill="white">
                <path d="M11.5634 6.51494C11.1147 5.91949 10.2658 5.79801 9.6935 6.2759C5.67792 9.62919 2.715 14.0844 1.17977 19.1059C-0.487285 24.5586 -0.385338 30.3991 1.471 35.7903C3.32734 41.1815 6.84276 45.8466 11.5134 49.117C16.1841 52.3875 21.7702 54.0953 27.4712 53.9958C33.1722 53.8963 38.6953 51.9946 43.249 48.5631C47.8027 45.1316 51.1532 40.3467 52.8202 34.894C54.4873 29.4413 54.3853 23.6008 52.529 18.2096C50.8195 13.2447 47.7029 8.89565 43.5727 5.68454C42.9841 5.22691 42.1399 5.37795 41.7122 5.98869C41.2846 6.59944 41.4357 7.43833 42.0218 7.89922C45.6861 10.7809 48.4522 14.663 49.9761 19.0886C51.6468 23.9407 51.7386 29.1971 50.2382 34.1046C48.7379 39.012 45.7224 43.3185 41.6241 46.4068C37.5258 49.4951 32.555 51.2067 27.4241 51.2962C22.2932 51.3858 17.2657 49.8487 13.0621 46.9053C8.85849 43.9619 5.6946 39.7633 4.0239 34.9112C2.3532 30.0592 2.26144 24.8027 3.7618 19.8953C5.13029 15.4191 7.75928 11.443 11.3208 8.43511C11.8904 7.95404 12.0121 7.11039 11.5634 6.51494Z" />
              </mask>
              <path d="M1.17977 19.1059L5.00499 20.2754L1.17977 19.1059ZM52.529 18.2096L48.7469 19.5119L52.529 18.2096ZM49.9761 19.0886L53.7582 17.7864L49.9761 19.0886ZM3.7618 19.8953L7.58701 21.0648L7.58701 21.0648L3.7618 19.8953ZM11.3208 8.43511L13.9017 11.4911L13.9017 11.4911L11.3208 8.43511ZM42.0218 7.89922L39.5491 11.0434L42.0218 7.89922ZM43.5727 5.68454L41.1175 8.84241L41.1175 8.84241L43.5727 5.68454ZM9.6935 6.2759L12.2574 9.34616L9.6935 6.2759ZM7.12961 3.20565C2.5191 7.05575 -0.882773 12.171 -2.64545 17.9364L5.00499 20.2754C6.31277 15.9978 8.83675 12.2026 12.2574 9.34616L7.12961 3.20565ZM-2.64545 17.9364C-4.55947 24.1969 -4.44243 30.9027 -2.31107 37.0926L5.25307 34.488C3.67175 29.8955 3.58491 24.9203 5.00499 20.2754L-2.64545 17.9364ZM-2.31107 37.0926C-0.179724 43.2824 3.85651 48.6387 9.21913 52.3937L13.8077 45.8404C9.82902 43.0545 6.8344 39.0805 5.25307 34.488L-2.31107 37.0926ZM9.21913 52.3937C14.5818 56.1486 20.9955 58.1095 27.541 57.9952L27.4014 49.9964C22.545 50.0812 17.7865 48.6264 13.8077 45.8404L9.21913 52.3937ZM27.541 57.9952C34.0866 57.881 40.428 55.6975 45.6563 51.7576L40.8417 45.3686C36.9627 48.2916 32.2578 49.9117 27.4014 49.9964L27.541 57.9952ZM45.6563 51.7576C50.8846 47.8178 54.7314 42.324 56.6454 36.0635L48.995 33.7245C47.5749 38.3694 44.7208 42.4455 40.8417 45.3686L45.6563 51.7576ZM56.6454 36.0635C58.5595 29.803 58.4424 23.0972 56.3111 16.9073L48.7469 19.5119C50.3283 24.1044 50.4151 29.0796 48.995 33.7245L56.6454 36.0635ZM56.3111 16.9073C54.3483 11.2069 50.77 6.21353 46.0279 2.52667L41.1175 8.84241C44.6358 11.5778 47.2907 15.2826 48.7469 19.5119L56.3111 16.9073ZM39.5491 11.0434C42.6102 13.4507 44.921 16.6938 46.194 20.3909L53.7582 17.7864C51.9834 12.6322 48.762 8.11115 44.4944 4.75504L39.5491 11.0434ZM46.194 20.3909C47.5897 24.4443 47.6664 28.8355 46.413 32.9351L54.0634 35.2741C55.8107 29.5588 55.7039 23.4371 53.7582 17.7864L46.194 20.3909ZM46.413 32.9351C45.1596 37.0347 42.6405 40.6323 39.2168 43.2122L44.0314 49.6013C48.8043 46.0047 52.3161 40.9893 54.0634 35.2741L46.413 32.9351ZM39.2168 43.2122C35.7931 45.7922 31.6406 47.222 27.3543 47.2968L27.4939 55.2956C33.4694 55.1913 39.2584 53.198 44.0314 49.6013L39.2168 43.2122ZM27.3543 47.2968C23.068 47.3717 18.8681 46.0876 15.3564 43.6287L10.7678 50.1819C15.6633 53.6098 21.5184 55.3999 27.4939 55.2956L27.3543 47.2968ZM15.3564 43.6287C11.8447 41.1698 9.20167 37.6624 7.80597 33.609L0.241826 36.2135C2.18754 41.8643 5.87223 46.754 10.7678 50.1819L15.3564 43.6287ZM7.80597 33.609C6.41028 29.5556 6.33364 25.1644 7.58701 21.0648L-0.0634241 18.7258C-1.81075 24.4411 -1.70389 30.5627 0.241826 36.2135L7.80597 33.609ZM7.58701 21.0648C8.73024 17.3255 10.9265 14.0038 13.9017 11.4911L8.73989 5.37914C4.59208 8.88214 1.53035 13.5128 -0.0634241 18.7258L7.58701 21.0648ZM13.9017 11.4911C15.9842 9.73231 16.5684 6.51013 14.758 4.10768L8.3689 8.9222C7.45593 7.71065 7.79662 6.17577 8.73989 5.37914L13.9017 11.4911ZM38.4356 3.69439C36.7102 6.15857 37.4065 9.3584 39.5491 11.0434L44.4944 4.75504C45.4649 5.51825 45.859 7.04031 44.9888 8.283L38.4356 3.69439ZM46.0279 2.52667C43.529 0.583886 40.0985 1.31962 38.4356 3.69439L44.9888 8.283C44.1813 9.43627 42.4391 9.86993 41.1175 8.84241L46.0279 2.52667ZM12.2574 9.34616C10.9724 10.4192 9.21619 10.0466 8.3689 8.9222L14.758 4.10768C13.0133 1.79239 9.55912 1.17683 7.12961 3.20565L12.2574 9.34616Z" fill="white" mask="url(#path-1-inside-2)" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M27 17C24.284 17 23.944 17.012 22.8773 17.06C21.8107 17.108 21.0853 17.2773 20.4493 17.5253C19.7853 17.7823 19.1822 18.1752 18.6787 18.6787C18.1752 19.1822 17.7823 19.7853 17.5253 20.4493C17.2773 21.0853 17.1093 21.812 17.06 22.8773C17.0107 23.9427 17 24.284 17 27C17 29.716 17.012 30.056 17.06 31.1227C17.108 32.1893 17.2773 32.9147 17.5253 33.5507C17.7823 34.2147 18.1752 34.8178 18.6787 35.3213C19.1822 35.8249 19.7853 36.2177 20.4493 36.4747C21.0853 36.7227 21.812 36.8907 22.8773 36.94C23.9427 36.9893 24.284 37 27 37C29.716 37 30.056 36.988 31.1227 36.94C32.1893 36.892 32.9147 36.7227 33.5507 36.4747C34.2147 36.2177 34.8178 35.8249 35.3213 35.3213C35.8249 34.8178 36.2177 34.2147 36.4747 33.5507C36.7227 32.9147 36.8907 32.188 36.94 31.1227C36.9893 30.0573 37 29.716 37 27C37 24.284 36.988 23.944 36.94 22.8773C36.892 21.8107 36.7227 21.0853 36.4747 20.4493C36.2177 19.7853 35.8249 19.1822 35.3213 18.6787C34.8178 18.1752 34.2147 17.7823 33.5507 17.5253C32.9147 17.2773 32.188 17.1093 31.1227 17.06C30.0573 17.0107 29.716 17 27 17ZM26.9997 21.8653C25.9841 21.8653 24.9914 22.1665 24.147 22.7307C23.3026 23.2949 22.6445 24.0968 22.2558 25.035C21.8672 25.9733 21.7655 27.0057 21.9637 28.0017C22.1618 28.9977 22.6508 29.9127 23.3689 30.6308C24.087 31.3488 25.0019 31.8379 25.9979 32.036C26.994 32.2341 28.0264 32.1324 28.9646 31.7438C29.9028 31.3552 30.7048 30.6971 31.269 29.8527C31.8332 29.0083 32.1343 28.0155 32.1343 27C32.1343 25.6382 31.5933 24.3322 30.6304 23.3692C29.6675 22.4063 28.3615 21.8653 26.9997 21.8653ZM26.9997 30.3333C26.3404 30.3333 25.6959 30.1378 25.1478 29.7716C24.5996 29.4053 24.1723 28.8847 23.9201 28.2756C23.6678 27.6665 23.6018 26.9963 23.7304 26.3497C23.859 25.7031 24.1765 25.1091 24.6426 24.643C25.1088 24.1768 25.7027 23.8593 26.3494 23.7307C26.996 23.6021 27.6662 23.6681 28.2753 23.9204C28.8843 24.1727 29.4049 24.5999 29.7712 25.1481C30.1375 25.6963 30.333 26.3407 30.333 27C30.333 27.884 29.9818 28.7319 29.3567 29.357C28.7316 29.9821 27.8837 30.3333 26.9997 30.3333ZM33.5375 21.6613C33.5375 22.3241 33.0003 22.8613 32.3375 22.8613C31.6748 22.8613 31.1375 22.3241 31.1375 21.6613C31.1375 20.9986 31.6748 20.4613 32.3375 20.4613C33.0003 20.4613 33.5375 20.9986 33.5375 21.6613Z" fill="white" />
            </svg>
          </a>

          <a class="hero__link social-link" href="">
            <svg class="social-link__icon social-link__icon--facebook" width="54" height="54" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="path-1-inside-3" fill="white">
                <path d="M52.65 27C53.3956 27 54.0035 26.3951 53.9663 25.6504C53.6869 20.0659 51.679 14.693 48.2036 10.2845C44.4489 5.52174 39.2002 2.16179 33.303 0.746012C27.4059 -0.669766 21.2038 -0.0589163 15.6962 2.48013C10.1886 5.01918 5.69615 9.33856 2.94283 14.7423C0.189504 20.146 -0.664369 26.3193 0.518797 32.2674C1.70196 38.2156 4.85326 43.5922 9.4649 47.531C14.0765 51.4697 19.8799 53.7411 25.94 53.9792C31.5494 54.1996 37.0763 52.6659 41.7585 49.6094C42.3829 49.2019 42.5149 48.3545 42.0767 47.7513C41.6384 47.1481 40.796 47.0179 40.1694 47.422C35.9797 50.1239 31.0493 51.4778 26.046 51.2813C20.592 51.067 15.3689 49.0227 11.2184 45.4779C7.06793 41.933 4.23177 37.0941 3.16692 31.7407C2.10207 26.3873 2.87055 20.8314 5.34854 15.968C7.82653 11.1047 11.8697 7.21727 16.8266 4.93212C21.7834 2.64698 27.3653 2.09721 32.6727 3.37141C37.9802 4.64561 42.704 7.66957 46.0832 11.956C49.1831 15.8882 50.9858 20.6728 51.2625 25.6506C51.3039 26.395 51.9044 27 52.65 27Z" />
              </mask>
              <path d="M52.65 27C53.3956 27 54.0035 26.3951 53.9663 25.6504C53.6869 20.0659 51.679 14.693 48.2036 10.2845C44.4489 5.52174 39.2002 2.16179 33.303 0.746012C27.4059 -0.669766 21.2038 -0.0589163 15.6962 2.48013C10.1886 5.01918 5.69615 9.33856 2.94283 14.7423C0.189504 20.146 -0.664369 26.3193 0.518797 32.2674C1.70196 38.2156 4.85326 43.5922 9.4649 47.531C14.0765 51.4697 19.8799 53.7411 25.94 53.9792C31.5494 54.1996 37.0763 52.6659 41.7585 49.6094C42.3829 49.2019 42.5149 48.3545 42.0767 47.7513C41.6384 47.1481 40.796 47.0179 40.1694 47.422C35.9797 50.1239 31.0493 51.4778 26.046 51.2813C20.592 51.067 15.3689 49.0227 11.2184 45.4779C7.06793 41.933 4.23177 37.0941 3.16692 31.7407C2.10207 26.3873 2.87055 20.8314 5.34854 15.968C7.82653 11.1047 11.8697 7.21727 16.8266 4.93212C21.7834 2.64698 27.3653 2.09721 32.6727 3.37141C37.9802 4.64561 42.704 7.66957 46.0832 11.956C49.1831 15.8882 50.9858 20.6728 51.2625 25.6506C51.3039 26.395 51.9044 27 52.65 27Z" stroke="white" stroke-width="8" mask="url(#path-1-inside-3)" />
              <path d="M28.4849 37V27.8774H30.5L31.2575 24.3214H28.4849V22.0548C28.4849 21.0255 28.7608 20.3215 30.1815 20.3215H32V17.1402C31.1206 17.0437 30.2367 16.997 29.3524 17.0002C26.7395 17.0002 24.9517 18.6575 24.9517 21.7001V24.3214H22V27.8774H24.9517V37H28.4849Z" fill="white" />
            </svg>
          </a>
        </div>
        <!-- /.hero__social -->
      </div>
      <!-- /.hero -->
    </div>
    <!-- /.container -->
  </section>

  <section id="project">
    <div class="project">
      <div class="swiper-container project__slider project-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide project__slide">
            <img class="project__logo" src="img/page/main/projects/aculla.svg" alt="">
          </div>
          <!-- /.swiper-slide project__slide -->

          <div class="swiper-slide project__slide">
            <img class="project__logo" src="img/page/main/projects/golfstream.svg" alt="">
          </div>
          <!-- /.swiper-slide project__slide -->

          <div class="swiper-slide project__slide">
            <img class="project__logo" src="img/page/main/projects/little-big.svg" alt="">
          </div>
          <!-- /.swiper-slide project__slide -->

          <div class="swiper-slide project__slide">
            <img class="project__logo" src="img/page/main/projects/tatarka.svg" alt="">
          </div>
          <!-- /.swiper-slide project__slide -->

          <div class="swiper-slide project__slide">
            <img class="project__logo" src="img/page/main/projects/pavlovo.svg" alt="">
          </div>
          <!-- /.swiper-slide project__slide -->

          <div class="swiper-slide project__slide">
            <img class="project__logo" src="img/page/main/projects/DETECTIT.svg" alt="">
          </div>
          <!-- /.swiper-slide project__slide -->

          <div class="swiper-slide project__slide">
            <img class="project__logo" src="img/page/main/projects/onion.svg" alt="">
          </div>
          <!-- /.swiper-slide project__slide -->

          <div class="swiper-slide project__slide">
            <img class="project__logo" src="img/page/main/projects/hookhelp.svg" alt="">
          </div>
          <!-- /.swiper-slide project__slide -->

          <div class="swiper-slide project__slide">
            <img class="project__logo" src="img/page/main/projects/veniki.svg" alt="">
          </div>
          <!-- /.swiper-slide project__slide -->

          <div class="swiper-slide project__slide">
            <img class="project__logo" src="img/page/main/projects/fasgrad.svg" alt="">
          </div>
          <!-- /.swiper-slide project__slide -->
        </div>
        <!-- /.swiper-wrapper -->
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /.project -->
  </section>

  <section id="service" class="section">
    <div class="container">
      <div class="section__heading">
        <h2 class="section__title">Услуги</h2>
        <span class="section__title-background">Услуги</span>
      </div>
      <!-- /.section__heading -->

      <div class="service">
        <div class="row">
          <div class="col-6 col-lg-4" data-aos="fade-up">
            <div class="service__card service-card">
              <div class="service-card__wrapper service-card__wrapper--gradient">
                <h3 class="service-card__title">Веб-разработка</h3>
                <p class="service-card__description">Разрабатываем сайты для любых задач и делаем их удобными для пользователя. </p>
                <div class="service-card__more">
                  подробнее
                  <svg class="service-card__arrow ms-3" width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="9.52507" y="12.4446" width="17.5994" height="4.14088" rx="2.07044" transform="rotate(-45 9.52507 12.4446)" fill="black" />
                    <rect width="17.5994" height="4.14088" rx="2.07044" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 15.3727 12.4446)" fill="black" />
                  </svg>
                </div>
                <!-- /.service-card__more -->
              </div>
              <!-- /.service-card__wrapper -->

              <div class="service-card__content">
                <p class="service-card__description mb-4">
                  Создадим сайт с нуля или поможем перестроить ваш текущий сайт. Мы делаем лендинги, сайты-визитки, интернет-магазины, корпоративные сайты или другой нужный вам сайт.
                </p>

                <div class="service-card__price">
                  <span class="service-card__label pt-1">Стоимость</span>
                  <div class="service-card__cost ms-3">от 15 000$</div>
                </div>
              </div>
              <!-- /.service-card__content -->

              <img src="img/page/main/service/web.png" alt="" class="service-card__icon">
            </div>
            <!-- /.service__card service-card -->
          </div>
          <!-- /.col-6 col-lg-4 -->

          <div class="col-6 col-lg-4" data-aos="fade-up">
            <div class="service__card service-card">
              <div class="service-card__wrapper service-card__wrapper--red">
                <h3 class="service-card__title">SMM</h3>
                <p class="service-card__description">Поможем наладить процесс коммуникации в социальных сетях, превратим аккаунт компании в эффективный и заметный бизнес-инструмент. </p>
                <div class="service-card__more">
                  подробнее
                  <svg class="service-card__arrow ms-3" width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="9.52507" y="12.4446" width="17.5994" height="4.14088" rx="2.07044" transform="rotate(-45 9.52507 12.4446)" fill="black" />
                    <rect width="17.5994" height="4.14088" rx="2.07044" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 15.3727 12.4446)" fill="black" />
                  </svg>
                </div>
                <!-- /.service-card__more -->
              </div>
              <!-- /.service-card__wrapper -->

              <div class="service-card__content">
                <p class="service-card__description mb-4">
                  Создадим социальные сети с нуля, реорганизуем имеющиеся, скорректируем стратегию ведения, подберем визуал и грамотно оформим ваш профиль.
                </p>
                <div class="service-card__price">
                  <span class="service-card__label pt-1">Стоимость</span>
                  <div class="service-card__cost ms-3">от 15 000$</div>
                </div>
              </div>
              <!-- /.service-card__content -->

              <img src="img/page/main/service/smm.png" alt="" class="service-card__icon">
            </div>
            <!-- /.service__card service-card -->
          </div>
          <!-- /.col-6 col-lg-4 -->

          <div class="col-6 col-lg-4" data-aos="fade-up">
            <div class="service__card service-card">
              <div class="service-card__wrapper service-card__wrapper--purple">
                <h3 class="service-card__title">Дизайн</h3>
                <p class="service-card__description">Развиваем ваш стиль, создаем выгодные формы для ваших продуктов.
                <div class="service-card__more">
                  подробнее
                  <svg class="service-card__arrow ms-3" width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="9.52507" y="12.4446" width="17.5994" height="4.14088" rx="2.07044" transform="rotate(-45 9.52507 12.4446)" fill="black" />
                    <rect width="17.5994" height="4.14088" rx="2.07044" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 15.3727 12.4446)" fill="black" />
                  </svg>
                </div>
                <!-- /.service-card__more -->
              </div>
              <!-- /.service-card__wrapper -->

              <div class="service-card__content">
                <p class="service-card__description mb-4">
                  Не только разработаем дизайн мерча, но и его изготовим его. В собственной типографии напечатаем любой вид полиграфической продукции.
                </p>

                <div class="service-card__price">
                  <span class="service-card__label pt-1">Стоимость</span>
                  <div class="service-card__cost ms-3">от 15 000$</div>
                </div>
              </div>
              <!-- /.service-card__content -->

              <img src="img/page/main/service/design.png" alt="" class="service-card__icon">
            </div>
            <!-- /.service__card service-card -->
          </div>
          <!-- /.col-6 col-lg-4 -->

          <div class="col-6 col-lg-4" data-aos="fade-up">
            <div class="service__card service-card">
              <div class="service-card__wrapper service-card__wrapper--red">
                <h3 class="service-card__title">Брендинг</h3>
                <p class="service-card__description">Создаем фирменный стиль, отражающий ваш бренд. Разработаем логотип с нуля или поможем переосмыслить ваш текущий.
                <div class="service-card__more">
                  подробнее
                  <svg class="service-card__arrow ms-3" width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="9.52507" y="12.4446" width="17.5994" height="4.14088" rx="2.07044" transform="rotate(-45 9.52507 12.4446)" fill="black" />
                    <rect width="17.5994" height="4.14088" rx="2.07044" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 15.3727 12.4446)" fill="black" />
                  </svg>
                </div>
                <!-- /.service-card__more -->
              </div>
              <!-- /.service-card__wrapper -->

              <div class="service-card__content">
                <p class="service-card__description mb-4">
                  Не только разработаем дизайн мерча, но и его изготовим его. В собственной типографии напечатаем любой вид полиграфической продукции.
                </p>

                <div class="service-card__price">
                  <span class="service-card__label pt-1">Стоимость</span>
                  <div class="service-card__cost ms-3">от 15 000$</div>
                </div>
              </div>
              <!-- /.service-card__content -->

              <img src="img/page/main/service/brand.png" alt="" class="service-card__icon">
            </div>
            <!-- /.service__card service-card -->
          </div>
          <!-- /.col-6 col-lg-4 -->

          <div class="col-6 col-lg-4" data-aos="fade-up">
            <div class="service__card service-card">
              <div class="service-card__wrapper service-card__wrapper--purple">
                <h3 class="service-card__title">Интернет-реклама</h3>
                <p class="service-card__description">Настроим таргетированную и контекстную рекламу.
                <div class="service-card__more">
                  подробнее
                  <svg class="service-card__arrow ms-3" width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="9.52507" y="12.4446" width="17.5994" height="4.14088" rx="2.07044" transform="rotate(-45 9.52507 12.4446)" fill="black" />
                    <rect width="17.5994" height="4.14088" rx="2.07044" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 15.3727 12.4446)" fill="black" />
                  </svg>
                </div>
                <!-- /.service-card__more -->
              </div>
              <!-- /.service-card__wrapper -->

              <div class="service-card__content">
                <p class="service-card__description mb-4">
                  Не только разработаем дизайн мерча, но и его изготовим его. В собственной типографии напечатаем любой вид полиграфической продукции.
                </p>

                <div class="service-card__price">
                  <span class="service-card__label pt-1">Стоимость</span>
                  <div class="service-card__cost ms-3">от 15 000$</div>
                </div>
              </div>
              <!-- /.service-card__content -->

              <img src="img/page/main/service/facebook.png" alt="" class="service-card__icon">
            </div>
            <!-- /.service__card service-card -->
          </div>
          <!-- /.col-6 col-lg-4 -->

          <div class="col-6 col-lg-4" data-aos="fade-up">
            <div class="service__card service-card">
              <div class="service-card__wrapper service-card__wrapper--gradient">
                <h3 class="service-card__title">Продакшн</h3>
                <p class="service-card__description">Запишем звук, снимем и смонтируем видео, сделаем фото.
                <div class="service-card__more">
                  подробнее
                  <svg class="service-card__arrow ms-3" width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="9.52507" y="12.4446" width="17.5994" height="4.14088" rx="2.07044" transform="rotate(-45 9.52507 12.4446)" fill="black" />
                    <rect width="17.5994" height="4.14088" rx="2.07044" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 15.3727 12.4446)" fill="black" />
                  </svg>
                </div>
                <!-- /.service-card__more -->
              </div>
              <!-- /.service-card__wrapper -->

              <div class="service-card__content">
                <p class="service-card__description mb-4">
                  Не только разработаем дизайн мерча, но и его изготовим его. В собственной типографии напечатаем любой вид полиграфической продукции.
                </p>

                <div class="service-card__price">
                  <span class="service-card__label pt-1">Стоимость</span>
                  <div class="service-card__cost ms-3">от 15 000$</div>
                </div>
              </div>
              <!-- /.service-card__content -->

              <img src="img/page/main/service/production.png" alt="" class="service-card__icon">
            </div>
            <!-- /.service__card service-card -->
          </div>
          <!-- /.col-6 col-lg-4 -->

          <div class="col-6 col-lg-4" data-aos="fade-up">
            <div class="service__card service-card">
              <div class="service-card__wrapper service-card__wrapper--gradient">
                <h3 class="service-card__title">Мерч и упаковка</h3>
                <p class="service-card__description">Не только разработаем дизайн мерча, но и его изготовим его. В собственной типографии напечатаем любой вид полиграфической продукции.
                <div class="service-card__more">
                  подробнее
                  <svg class="service-card__arrow ms-3" width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="9.52507" y="12.4446" width="17.5994" height="4.14088" rx="2.07044" transform="rotate(-45 9.52507 12.4446)" fill="black" />
                    <rect width="17.5994" height="4.14088" rx="2.07044" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 15.3727 12.4446)" fill="black" />
                  </svg>
                </div>
                <!-- /.service-card__more -->
              </div>
              <!-- /.service-card__wrapper -->

              <div class="service-card__content">
                <p class="service-card__description mb-4">
                  Не только разработаем дизайн мерча, но и его изготовим его. В собственной типографии напечатаем любой вид полиграфической продукции.
                </p>

                <div class="service-card__price">
                  <span class="service-card__label pt-1">Стоимость</span>
                  <div class="service-card__cost ms-3">от 15 000$</div>
                </div>
              </div>
              <!-- /.service-card__content -->

              <img src="img/page/main/service/merch.png" alt="" class="service-card__icon">
            </div>
            <!-- /.service__card service-card -->
          </div>
          <!-- /.col-6 col-lg-4 -->

          <div class="col-6 col-lg-4" data-aos="fade-up">
            <div class="service__card service-card">
              <div class="service-card__wrapper service-card__wrapper--gradient">
                <h3 class="service-card__title">Motion-design</h3>
                <p class="service-card__description">Раскроем вашу идею в движении: создадим анимацию для вашего ролика или логотипа.
                <div class="service-card__more">
                  подробнее
                  <svg class="service-card__arrow ms-3" width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="9.52507" y="12.4446" width="17.5994" height="4.14088" rx="2.07044" transform="rotate(-45 9.52507 12.4446)" fill="black" />
                    <rect width="17.5994" height="4.14088" rx="2.07044" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 15.3727 12.4446)" fill="black" />
                  </svg>
                </div>
                <!-- /.service-card__more -->
              </div>
              <!-- /.service-card__wrapper -->

              <div class="service-card__content">
                <p class="service-card__description mb-4">
                  Не только разработаем дизайн мерча, но и его изготовим его. В собственной типографии напечатаем любой вид полиграфической продукции.
                </p>

                <div class="service-card__price">
                  <span class="service-card__label pt-1">Стоимость</span>
                  <div class="service-card__cost ms-3">от 15 000$</div>
                </div>
              </div>
              <!-- /.service-card__content -->

              <img src="img/page/main/service/motion.png" alt="" class="service-card__icon">
            </div>
            <!-- /.service__card service-card -->
          </div>
          <!-- /.col-6 col-lg-4 -->

          <div class="col-6 col-lg-4" data-aos="fade-up">
            <div class="service__card service-card">
              <div class="service-card__wrapper service-card__wrapper--gradient">
                <h3 class="service-card__title">Консалтинг</h3>
                <p class="service-card__description">Влад не написал. Получается 3,14dor
                <div class="service-card__more">
                  подробнее
                  <svg class="service-card__arrow ms-3" width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="9.52507" y="12.4446" width="17.5994" height="4.14088" rx="2.07044" transform="rotate(-45 9.52507 12.4446)" fill="black" />
                    <rect width="17.5994" height="4.14088" rx="2.07044" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 15.3727 12.4446)" fill="black" />
                  </svg>
                </div>
                <!-- /.service-card__more -->
              </div>
              <!-- /.service-card__wrapper -->

              <div class="service-card__content">
                <p class="service-card__description mb-4">
                  Не только разработаем дизайн мерча, но и его изготовим его. В собственной типографии напечатаем любой вид полиграфической продукции.
                </p>

                <div class="service-card__price">
                  <span class="service-card__label pt-1">Стоимость</span>
                  <div class="service-card__cost ms-3">от 15 000$</div>
                </div>
              </div>
              <!-- /.service-card__content -->

              <img src="img/page/main/service/consulting.png" alt="" class="service-card__icon">
            </div>
            <!-- /.service__card service-card -->
          </div>
          <!-- /.col-6 col-lg-4 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.service -->
    </div>
    <!-- /.container -->
  </section>

  <section id="portfolio" class="section">
    <div class="container">
      <div class="section__heading">
        <h2 class="section__title mb-3">Кейсы</h2>
        <span class="section__title-background">Кейсы</span>
      </div>
      <!-- /.section__heading -->

      <p class="section__description">
        Здесь вы можете посмотреть, что мы уже сделали.
      </p>


      <div class="portfolio">
        <div class="portfolio__categories portfolio-categories">
          <div class="portfolio-categories__item portfolio__color--pink"">
            Веб-разработка
          </div>
          <!-- /.portfolio-categories__item -->

          <div class="portfolio-categories__item portfolio__color--red">
            SMM
          </div>
          <!-- /.portfolio-categories__item -->

          <div class="portfolio-categories__item portfolio__color--purple">
            Дизайн
          </div>
          <!-- /.portfolio-categories__item -->

          <div class="portfolio-categories__item portfolio__color--red">
            Брендинг
          </div>
          <!-- /.portfolio-categories__item -->

          <div class="portfolio-categories__item portfolio__color--purple">
            Интернет-реклама
          </div>
          <!-- /.portfolio-categories__item -->

          <div class="portfolio-categories__item portfolio__color--pink">
            Продакшн
          </div>
          <!-- /.portfolio-categories__item -->

          <div class="portfolio-categories__item portfolio__color--red">
            Мерч и упаковка
          </div>
          <!-- /.portfolio-categories__item -->

          <div class="portfolio-categories__item portfolio__color--orange">
            Motion-design
          </div>
          <!-- /.portfolio-categories__item -->

          <div class="portfolio-categories__item portfolio__color--purple">
            Консалтинг
          </div>
          <!-- /.portfolio-categories__item -->
        </div>
        <!-- /.portfolio__categories -->

        <div class=" portfolio__grid portfolio-grid">
            <div class="portfolio-grid__item portfolio-grid__item--1" data-aos="zoom-in">
              <img class="portfolio-grid__image" src="img/projects/pavlovo.jpg" alt="">

              <div class="portfolio-grid__categories">
                <div class="portfolio-grid__tag portfolio__color--purple">
                  Дизайн
                </div>
                <!-- /.portfolio-grid__tag -->

                <div class="portfolio-grid__tag portfolio__color--red">
                  Мерч и упаковка
                </div>
                <!-- /.portfolio-grid__tag -->

                <div class="portfolio-grid__tag portfolio__color--pink">
                  Веб-разработка
                </div>
                <!-- /.portfolio-grid__tag -->


                <div class="portfolio-grid__tag portfolio__color--red">
                  Брендинг
                </div>
                <!-- /.portfolio-grid__tag -->
              </div>
              <!-- /.portfolio-grid__categories -->
            </div>
            <!-- /.portfolio-grid__item -->

            <div class="portfolio-grid__item portfolio-grid__item--2" data-aos="zoom-in">
              <img class="portfolio-grid__image" src="img/projects/tatarka.jpg" alt="">
            </div>
            <!-- /.portfolio-grid__item -->

            <div class="portfolio-grid__item portfolio-grid__item--3" data-aos="zoom-in">
              <img class="portfolio-grid__image" src="img/projects/hookhelp.jpg" alt="">
            </div>
            <!-- /.portfolio-grid__item -->

            <div class="portfolio-grid__item portfolio-grid__item--4" data-aos="zoom-in">
              <img class="portfolio-grid__image" src="img/projects/aqulla.jpg" alt="">
            </div>
            <!-- /.portfolio-grid__item -->

            <div class="portfolio-grid__item portfolio-grid__item--5" data-aos="zoom-in">
              <img class="portfolio-grid__image" src="img/projects/fasgrad.jpg" alt="">
            </div>
            <!-- /.portfolio-grid__item -->

            <div class="portfolio-grid__item portfolio-grid__item--6" data-aos="zoom-in">
              <img class="portfolio-grid__image" src="img/projects/veniki.jpg" alt="">
            </div>
            <!-- /.portfolio-grid__item -->

            <div class="portfolio-grid__item portfolio-grid__item--7" data-aos="zoom-in">
              <img class="portfolio-grid__image" src="img/projects/travel.jpg" alt="">
            </div>
            <!-- /.portfolio-grid__item -->
          </div>
          <!-- /.portfolio__grid -->
        </div>
        <!-- /.portfolio -->
      </div>
      <!-- /.container -->
  </section>

  <section id="feedback" class="section">
    <div class="container">
      <div class="section__heading section__heading--center">
        <h2 class="section__title mb-4">Отзывы</h2>
        <span class="section__title-background">Отзывы</span>
      </div>

      <p class="section__description section__description--center">
        А здесь можно послушать, как мы это сделали.
      </p>

      <div class="feedback">
        <img src="img/page/main/feedback/rock.png" alt="" class="feedback__rock">

        <div class="feedback__phone feedback-phone">
          <img src="img/page/main/feedback/background.png" alt="" class="feedback-phone__background">
          <img src="img/page/main/feedback/phone.svg" alt="" class="feedback-phone__foreground">
          <img src="img/page/main/feedback/hands.png" alt="" class="feedback-phone__hands">

          <div class="feedback-phone__container swiper-container feedback__slider feedback-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="feedback__item feedback-item">
                  <div class="feedback-item__info">
                    <img src="img/page/main/feedback/avatar.png" alt="" class="feedback-item__photo me-2">
                    <div class="feedback-item__author">
                      <span class="feedback-item__name mb-1">Иван Иванов</span>
                      <span class="feedback-item__role">Плющенный</span>
                    </div>
                    <!-- /.feedback-item__author -->
                  </div>
                  <!-- /.feedback-item__info -->

                  <div class="feedback-item__content">
                    <video class="feedback-item__video" muted loop>
                      <source src="video/vertical.mp4" type="video/mp4">
                    </video>
                  </div>
                  <!-- /.feedback-item__content -->
                </div>
                <!-- /.feedback__item -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="feedback__item feedback-item">
                  <div class="feedback-item__info">
                    <img src="img/page/main/feedback/avatar.png" alt="" class="feedback-item__photo me-2">
                    <div class="feedback-item__author">
                      <span class="feedback-item__name mb-1">Иван Иванов</span>
                      <span class="feedback-item__role">Плющенный</span>
                    </div>
                    <!-- /.feedback-item__author -->
                  </div>
                  <!-- /.feedback-item__info -->

                  <div class="feedback-item__content">
                    <video class="feedback-item__video" loop>
                      <source src="video/horizontal.mp4" type="video/mp4">
                    </video>
                  </div>
                  <!-- /.feedback-item__content -->
                </div>
                <!-- /.feedback__item -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.feedback-phone__container -->

          <div class="feedback__prev swiper-button-prev feedback-slider__prev"></div>
          <div class="feedback__next swiper-button-next feedback-slider__next"></div>
        </div>
        <!-- /.feedback -->
      </div>
      <!-- /.section__heading -->
    </div>
    <!-- /.container -->
  </section>

  <section id="team" class="section">
    <div class="container">
      <div class="section__heading section__heading--center">
        <h2 class="section__title">Команда</h2>
        <span class="section__title-background">Команда</span>
      </div>
      <!-- /.section__heading -->

      <div class="team">
        <div class="row team__margin">
          <div class="col-6 col-lg-3">
            <div class="team__card team-card">
              <div class="team-card__photo">
                <img src="img/page/main/team/people/1.jpg" alt="" class="team-card__image">
                <img src="img/page/main/team/layers/1.svg" alt="" class="team-card__layer">
              </div>
              <!-- /.team-card__photo -->

              <div class="team-card__name mb-2">Грузинский Владислав</div>
              <div class="team-card__role mb-3">CEO</div>
              <a href="https://www.instagram.com/gruzinskii_vlad" class="team-card__link" target="_blank">
                <svg class="team-card__icon me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 1.80133C12.6667 1.80133 12.9867 1.812 14.0413 1.86C15.016 1.904 15.5453 2.068 15.8973 2.204C16.329 2.37016 16.7209 2.62499 17.048 2.95203C17.375 3.27906 17.6298 3.67105 17.796 4.10267C17.9293 4.45467 18.096 4.984 18.14 5.95867C18.188 7.01333 18.1987 7.32933 18.1987 10C18.1987 12.6707 18.188 12.9867 18.14 14.0413C18.096 15.016 17.932 15.5453 17.796 15.8973C17.6298 16.329 17.375 16.7209 17.048 17.048C16.7209 17.375 16.329 17.6298 15.8973 17.796C15.5453 17.9293 15.016 18.096 14.0413 18.14C12.9867 18.188 12.6707 18.1987 10 18.1987C7.32934 18.1987 7.01334 18.188 5.95867 18.14C4.984 18.096 4.45467 17.932 4.10267 17.796C3.67105 17.6298 3.27907 17.375 2.95203 17.048C2.62499 16.7209 2.37016 16.329 2.204 15.8973C2.07067 15.5453 1.904 15.016 1.86 14.0413C1.812 12.9867 1.80133 12.6707 1.80133 10C1.80133 7.32933 1.812 7.01333 1.86 5.95867C1.904 4.984 2.068 4.45467 2.204 4.10267C2.37016 3.67105 2.62499 3.27906 2.95203 2.95203C3.27907 2.62499 3.67105 2.37016 4.10267 2.204C4.45467 2.07067 4.984 1.904 5.95867 1.86C7.01334 1.812 7.32934 1.80133 10 1.80133ZM10 0C7.284 0 6.944 0.0119996 5.87734 0.0599996C4.81067 0.108 4.08533 0.277334 3.44933 0.525334C2.78526 0.782326 2.18217 1.17515 1.67866 1.67866C1.17515 2.18217 0.782327 2.78526 0.525334 3.44933C0.277334 4.08533 0.109333 4.812 0.0599996 5.87733C0.0106663 6.94267 0 7.284 0 10C0 12.716 0.0119996 13.056 0.0599996 14.1227C0.108 15.1893 0.277334 15.9147 0.525334 16.5507C0.782327 17.2147 1.17515 17.8178 1.67866 18.3213C2.18217 18.8249 2.78526 19.2177 3.44933 19.4747C4.08533 19.7227 4.812 19.8907 5.87734 19.94C6.94267 19.9893 7.284 20 10 20C12.716 20 13.056 19.988 14.1227 19.94C15.1893 19.892 15.9147 19.7227 16.5507 19.4747C17.2147 19.2177 17.8178 18.8249 18.3213 18.3213C18.8249 17.8178 19.2177 17.2147 19.4747 16.5507C19.7227 15.9147 19.8907 15.188 19.94 14.1227C19.9893 13.0573 20 12.716 20 10C20 7.284 19.988 6.944 19.94 5.87733C19.892 4.81067 19.7227 4.08533 19.4747 3.44933C19.2177 2.78526 18.8249 2.18217 18.3213 1.67866C17.8178 1.17515 17.2147 0.782326 16.5507 0.525334C15.9147 0.277334 15.188 0.109333 14.1227 0.0599996C13.0573 0.0106663 12.716 0 10 0Z" fill="#EFEFEF" />
                  <path d="M9.99966 4.86536C8.98412 4.86536 7.99138 5.1665 7.14699 5.7307C6.3026 6.29491 5.64448 7.09683 5.25585 8.03507C4.86721 8.97331 4.76553 10.0057 4.96365 11.0017C5.16178 11.9978 5.6508 12.9127 6.3689 13.6308C7.087 14.3489 8.00191 14.8379 8.99793 15.036C9.99396 15.2341 11.0264 15.1325 11.9646 14.7438C12.9028 14.3552 13.7048 13.6971 14.269 12.8527C14.8332 12.0083 15.1343 11.0156 15.1343 10C15.1343 8.63822 14.5933 7.3322 13.6304 6.36926C12.6675 5.40633 11.3615 4.86536 9.99966 4.86536ZM9.99966 13.3334C9.34039 13.3334 8.69592 13.1379 8.14776 12.7716C7.59959 12.4053 7.17235 11.8847 6.92006 11.2756C6.66777 10.6665 6.60176 9.99632 6.73037 9.34972C6.85899 8.70312 7.17646 8.10917 7.64263 7.643C8.10881 7.17682 8.70275 6.85935 9.34936 6.73074C9.99596 6.60212 10.6662 6.66813 11.2753 6.92042C11.8844 7.17272 12.405 7.59996 12.7712 8.14812C13.1375 8.69628 13.333 9.34075 13.333 10C13.333 10.8841 12.9818 11.7319 12.3567 12.357C11.7316 12.9822 10.8837 13.3334 9.99966 13.3334Z" fill="#EFEFEF" />
                  <path d="M15.3376 5.8613C16.0003 5.8613 16.5376 5.32404 16.5376 4.6613C16.5376 3.99856 16.0003 3.4613 15.3376 3.4613C14.6748 3.4613 14.1376 3.99856 14.1376 4.6613C14.1376 5.32404 14.6748 5.8613 15.3376 5.8613Z" fill="#EFEFEF" />
                </svg>
                @gruzinskii_vlad
              </a>
            </div>
            <!-- /.team__card team-card -->
          </div>
          <!-- /.col-6 col-lg-3 -->

          <div class="col-6 col-lg-3">
            <div class="team__card team-card">
              <div class="team-card__photo">
                <img src="img/page/main/team/people/2.jpg" alt="" class="team-card__image">
                <img src="img/page/main/team/layers/2.svg" alt="" class="team-card__layer">
              </div>
              <!-- /.team-card__photo -->

              <div class="team-card__name mb-2">Хмелев Роман</div>
              <div class="team-card__role mb-3">Web-дизайнер</div>
              <a href="https://www.instagram.com/khmelrom" class="team-card__link" target="_blank">
                <svg class="team-card__icon me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 1.80133C12.6667 1.80133 12.9867 1.812 14.0413 1.86C15.016 1.904 15.5453 2.068 15.8973 2.204C16.329 2.37016 16.7209 2.62499 17.048 2.95203C17.375 3.27906 17.6298 3.67105 17.796 4.10267C17.9293 4.45467 18.096 4.984 18.14 5.95867C18.188 7.01333 18.1987 7.32933 18.1987 10C18.1987 12.6707 18.188 12.9867 18.14 14.0413C18.096 15.016 17.932 15.5453 17.796 15.8973C17.6298 16.329 17.375 16.7209 17.048 17.048C16.7209 17.375 16.329 17.6298 15.8973 17.796C15.5453 17.9293 15.016 18.096 14.0413 18.14C12.9867 18.188 12.6707 18.1987 10 18.1987C7.32934 18.1987 7.01334 18.188 5.95867 18.14C4.984 18.096 4.45467 17.932 4.10267 17.796C3.67105 17.6298 3.27907 17.375 2.95203 17.048C2.62499 16.7209 2.37016 16.329 2.204 15.8973C2.07067 15.5453 1.904 15.016 1.86 14.0413C1.812 12.9867 1.80133 12.6707 1.80133 10C1.80133 7.32933 1.812 7.01333 1.86 5.95867C1.904 4.984 2.068 4.45467 2.204 4.10267C2.37016 3.67105 2.62499 3.27906 2.95203 2.95203C3.27907 2.62499 3.67105 2.37016 4.10267 2.204C4.45467 2.07067 4.984 1.904 5.95867 1.86C7.01334 1.812 7.32934 1.80133 10 1.80133ZM10 0C7.284 0 6.944 0.0119996 5.87734 0.0599996C4.81067 0.108 4.08533 0.277334 3.44933 0.525334C2.78526 0.782326 2.18217 1.17515 1.67866 1.67866C1.17515 2.18217 0.782327 2.78526 0.525334 3.44933C0.277334 4.08533 0.109333 4.812 0.0599996 5.87733C0.0106663 6.94267 0 7.284 0 10C0 12.716 0.0119996 13.056 0.0599996 14.1227C0.108 15.1893 0.277334 15.9147 0.525334 16.5507C0.782327 17.2147 1.17515 17.8178 1.67866 18.3213C2.18217 18.8249 2.78526 19.2177 3.44933 19.4747C4.08533 19.7227 4.812 19.8907 5.87734 19.94C6.94267 19.9893 7.284 20 10 20C12.716 20 13.056 19.988 14.1227 19.94C15.1893 19.892 15.9147 19.7227 16.5507 19.4747C17.2147 19.2177 17.8178 18.8249 18.3213 18.3213C18.8249 17.8178 19.2177 17.2147 19.4747 16.5507C19.7227 15.9147 19.8907 15.188 19.94 14.1227C19.9893 13.0573 20 12.716 20 10C20 7.284 19.988 6.944 19.94 5.87733C19.892 4.81067 19.7227 4.08533 19.4747 3.44933C19.2177 2.78526 18.8249 2.18217 18.3213 1.67866C17.8178 1.17515 17.2147 0.782326 16.5507 0.525334C15.9147 0.277334 15.188 0.109333 14.1227 0.0599996C13.0573 0.0106663 12.716 0 10 0Z" fill="#EFEFEF" />
                  <path d="M9.99966 4.86536C8.98412 4.86536 7.99138 5.1665 7.14699 5.7307C6.3026 6.29491 5.64448 7.09683 5.25585 8.03507C4.86721 8.97331 4.76553 10.0057 4.96365 11.0017C5.16178 11.9978 5.6508 12.9127 6.3689 13.6308C7.087 14.3489 8.00191 14.8379 8.99793 15.036C9.99396 15.2341 11.0264 15.1325 11.9646 14.7438C12.9028 14.3552 13.7048 13.6971 14.269 12.8527C14.8332 12.0083 15.1343 11.0156 15.1343 10C15.1343 8.63822 14.5933 7.3322 13.6304 6.36926C12.6675 5.40633 11.3615 4.86536 9.99966 4.86536ZM9.99966 13.3334C9.34039 13.3334 8.69592 13.1379 8.14776 12.7716C7.59959 12.4053 7.17235 11.8847 6.92006 11.2756C6.66777 10.6665 6.60176 9.99632 6.73037 9.34972C6.85899 8.70312 7.17646 8.10917 7.64263 7.643C8.10881 7.17682 8.70275 6.85935 9.34936 6.73074C9.99596 6.60212 10.6662 6.66813 11.2753 6.92042C11.8844 7.17272 12.405 7.59996 12.7712 8.14812C13.1375 8.69628 13.333 9.34075 13.333 10C13.333 10.8841 12.9818 11.7319 12.3567 12.357C11.7316 12.9822 10.8837 13.3334 9.99966 13.3334Z" fill="#EFEFEF" />
                  <path d="M15.3376 5.8613C16.0003 5.8613 16.5376 5.32404 16.5376 4.6613C16.5376 3.99856 16.0003 3.4613 15.3376 3.4613C14.6748 3.4613 14.1376 3.99856 14.1376 4.6613C14.1376 5.32404 14.6748 5.8613 15.3376 5.8613Z" fill="#EFEFEF" />
                </svg>
                @khmelrom
              </a>
            </div>
            <!-- /.team__card team-card -->
          </div>
          <!-- /.col-6 col-lg-3 -->

          <div class="col-6 col-lg-3">
            <div class="team__card team-card">
              <div class="team-card__photo">
                <img src="img/page/main/team/people/3.jpg" alt="" class="team-card__image">
                <img src="img/page/main/team/layers/3.svg" alt="" class="team-card__layer">
              </div>
              <!-- /.team-card__photo -->

              <div class="team-card__name mb-2">Саблин Никита</div>
              <div class="team-card__role mb-3">Motion-дизайнер</div>
              <a href="https://www.instagram.com/sbln.n" class="team-card__link" target="_blank">
                <svg class="team-card__icon me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 1.80133C12.6667 1.80133 12.9867 1.812 14.0413 1.86C15.016 1.904 15.5453 2.068 15.8973 2.204C16.329 2.37016 16.7209 2.62499 17.048 2.95203C17.375 3.27906 17.6298 3.67105 17.796 4.10267C17.9293 4.45467 18.096 4.984 18.14 5.95867C18.188 7.01333 18.1987 7.32933 18.1987 10C18.1987 12.6707 18.188 12.9867 18.14 14.0413C18.096 15.016 17.932 15.5453 17.796 15.8973C17.6298 16.329 17.375 16.7209 17.048 17.048C16.7209 17.375 16.329 17.6298 15.8973 17.796C15.5453 17.9293 15.016 18.096 14.0413 18.14C12.9867 18.188 12.6707 18.1987 10 18.1987C7.32934 18.1987 7.01334 18.188 5.95867 18.14C4.984 18.096 4.45467 17.932 4.10267 17.796C3.67105 17.6298 3.27907 17.375 2.95203 17.048C2.62499 16.7209 2.37016 16.329 2.204 15.8973C2.07067 15.5453 1.904 15.016 1.86 14.0413C1.812 12.9867 1.80133 12.6707 1.80133 10C1.80133 7.32933 1.812 7.01333 1.86 5.95867C1.904 4.984 2.068 4.45467 2.204 4.10267C2.37016 3.67105 2.62499 3.27906 2.95203 2.95203C3.27907 2.62499 3.67105 2.37016 4.10267 2.204C4.45467 2.07067 4.984 1.904 5.95867 1.86C7.01334 1.812 7.32934 1.80133 10 1.80133ZM10 0C7.284 0 6.944 0.0119996 5.87734 0.0599996C4.81067 0.108 4.08533 0.277334 3.44933 0.525334C2.78526 0.782326 2.18217 1.17515 1.67866 1.67866C1.17515 2.18217 0.782327 2.78526 0.525334 3.44933C0.277334 4.08533 0.109333 4.812 0.0599996 5.87733C0.0106663 6.94267 0 7.284 0 10C0 12.716 0.0119996 13.056 0.0599996 14.1227C0.108 15.1893 0.277334 15.9147 0.525334 16.5507C0.782327 17.2147 1.17515 17.8178 1.67866 18.3213C2.18217 18.8249 2.78526 19.2177 3.44933 19.4747C4.08533 19.7227 4.812 19.8907 5.87734 19.94C6.94267 19.9893 7.284 20 10 20C12.716 20 13.056 19.988 14.1227 19.94C15.1893 19.892 15.9147 19.7227 16.5507 19.4747C17.2147 19.2177 17.8178 18.8249 18.3213 18.3213C18.8249 17.8178 19.2177 17.2147 19.4747 16.5507C19.7227 15.9147 19.8907 15.188 19.94 14.1227C19.9893 13.0573 20 12.716 20 10C20 7.284 19.988 6.944 19.94 5.87733C19.892 4.81067 19.7227 4.08533 19.4747 3.44933C19.2177 2.78526 18.8249 2.18217 18.3213 1.67866C17.8178 1.17515 17.2147 0.782326 16.5507 0.525334C15.9147 0.277334 15.188 0.109333 14.1227 0.0599996C13.0573 0.0106663 12.716 0 10 0Z" fill="#EFEFEF" />
                  <path d="M9.99966 4.86536C8.98412 4.86536 7.99138 5.1665 7.14699 5.7307C6.3026 6.29491 5.64448 7.09683 5.25585 8.03507C4.86721 8.97331 4.76553 10.0057 4.96365 11.0017C5.16178 11.9978 5.6508 12.9127 6.3689 13.6308C7.087 14.3489 8.00191 14.8379 8.99793 15.036C9.99396 15.2341 11.0264 15.1325 11.9646 14.7438C12.9028 14.3552 13.7048 13.6971 14.269 12.8527C14.8332 12.0083 15.1343 11.0156 15.1343 10C15.1343 8.63822 14.5933 7.3322 13.6304 6.36926C12.6675 5.40633 11.3615 4.86536 9.99966 4.86536ZM9.99966 13.3334C9.34039 13.3334 8.69592 13.1379 8.14776 12.7716C7.59959 12.4053 7.17235 11.8847 6.92006 11.2756C6.66777 10.6665 6.60176 9.99632 6.73037 9.34972C6.85899 8.70312 7.17646 8.10917 7.64263 7.643C8.10881 7.17682 8.70275 6.85935 9.34936 6.73074C9.99596 6.60212 10.6662 6.66813 11.2753 6.92042C11.8844 7.17272 12.405 7.59996 12.7712 8.14812C13.1375 8.69628 13.333 9.34075 13.333 10C13.333 10.8841 12.9818 11.7319 12.3567 12.357C11.7316 12.9822 10.8837 13.3334 9.99966 13.3334Z" fill="#EFEFEF" />
                  <path d="M15.3376 5.8613C16.0003 5.8613 16.5376 5.32404 16.5376 4.6613C16.5376 3.99856 16.0003 3.4613 15.3376 3.4613C14.6748 3.4613 14.1376 3.99856 14.1376 4.6613C14.1376 5.32404 14.6748 5.8613 15.3376 5.8613Z" fill="#EFEFEF" />
                </svg>
                @sbln.n
              </a>
            </div>
            <!-- /.team__card team-card -->
          </div>
          <!-- /.col-6 col-lg-3 -->

          <div class="col-6 col-lg-3">
            <div class="team__card team-card">
              <div class="team-card__photo">
                <img src="img/page/main/team/people/4.jpg" alt="" class="team-card__image">
                <img src="img/page/main/team/layers/4.svg" alt="" class="team-card__layer">
              </div>
              <!-- /.team-card__photo -->

              <div class="team-card__name mb-2">Елизавета Смирнова</div>
              <div class="team-card__role mb-3">Руководитель</div>
              <a href="https://www.instagram.com/elizavettasmirnova" class="team-card__link" target="_blank">
                <svg class="team-card__icon me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 1.80133C12.6667 1.80133 12.9867 1.812 14.0413 1.86C15.016 1.904 15.5453 2.068 15.8973 2.204C16.329 2.37016 16.7209 2.62499 17.048 2.95203C17.375 3.27906 17.6298 3.67105 17.796 4.10267C17.9293 4.45467 18.096 4.984 18.14 5.95867C18.188 7.01333 18.1987 7.32933 18.1987 10C18.1987 12.6707 18.188 12.9867 18.14 14.0413C18.096 15.016 17.932 15.5453 17.796 15.8973C17.6298 16.329 17.375 16.7209 17.048 17.048C16.7209 17.375 16.329 17.6298 15.8973 17.796C15.5453 17.9293 15.016 18.096 14.0413 18.14C12.9867 18.188 12.6707 18.1987 10 18.1987C7.32934 18.1987 7.01334 18.188 5.95867 18.14C4.984 18.096 4.45467 17.932 4.10267 17.796C3.67105 17.6298 3.27907 17.375 2.95203 17.048C2.62499 16.7209 2.37016 16.329 2.204 15.8973C2.07067 15.5453 1.904 15.016 1.86 14.0413C1.812 12.9867 1.80133 12.6707 1.80133 10C1.80133 7.32933 1.812 7.01333 1.86 5.95867C1.904 4.984 2.068 4.45467 2.204 4.10267C2.37016 3.67105 2.62499 3.27906 2.95203 2.95203C3.27907 2.62499 3.67105 2.37016 4.10267 2.204C4.45467 2.07067 4.984 1.904 5.95867 1.86C7.01334 1.812 7.32934 1.80133 10 1.80133ZM10 0C7.284 0 6.944 0.0119996 5.87734 0.0599996C4.81067 0.108 4.08533 0.277334 3.44933 0.525334C2.78526 0.782326 2.18217 1.17515 1.67866 1.67866C1.17515 2.18217 0.782327 2.78526 0.525334 3.44933C0.277334 4.08533 0.109333 4.812 0.0599996 5.87733C0.0106663 6.94267 0 7.284 0 10C0 12.716 0.0119996 13.056 0.0599996 14.1227C0.108 15.1893 0.277334 15.9147 0.525334 16.5507C0.782327 17.2147 1.17515 17.8178 1.67866 18.3213C2.18217 18.8249 2.78526 19.2177 3.44933 19.4747C4.08533 19.7227 4.812 19.8907 5.87734 19.94C6.94267 19.9893 7.284 20 10 20C12.716 20 13.056 19.988 14.1227 19.94C15.1893 19.892 15.9147 19.7227 16.5507 19.4747C17.2147 19.2177 17.8178 18.8249 18.3213 18.3213C18.8249 17.8178 19.2177 17.2147 19.4747 16.5507C19.7227 15.9147 19.8907 15.188 19.94 14.1227C19.9893 13.0573 20 12.716 20 10C20 7.284 19.988 6.944 19.94 5.87733C19.892 4.81067 19.7227 4.08533 19.4747 3.44933C19.2177 2.78526 18.8249 2.18217 18.3213 1.67866C17.8178 1.17515 17.2147 0.782326 16.5507 0.525334C15.9147 0.277334 15.188 0.109333 14.1227 0.0599996C13.0573 0.0106663 12.716 0 10 0Z" fill="#EFEFEF" />
                  <path d="M9.99966 4.86536C8.98412 4.86536 7.99138 5.1665 7.14699 5.7307C6.3026 6.29491 5.64448 7.09683 5.25585 8.03507C4.86721 8.97331 4.76553 10.0057 4.96365 11.0017C5.16178 11.9978 5.6508 12.9127 6.3689 13.6308C7.087 14.3489 8.00191 14.8379 8.99793 15.036C9.99396 15.2341 11.0264 15.1325 11.9646 14.7438C12.9028 14.3552 13.7048 13.6971 14.269 12.8527C14.8332 12.0083 15.1343 11.0156 15.1343 10C15.1343 8.63822 14.5933 7.3322 13.6304 6.36926C12.6675 5.40633 11.3615 4.86536 9.99966 4.86536ZM9.99966 13.3334C9.34039 13.3334 8.69592 13.1379 8.14776 12.7716C7.59959 12.4053 7.17235 11.8847 6.92006 11.2756C6.66777 10.6665 6.60176 9.99632 6.73037 9.34972C6.85899 8.70312 7.17646 8.10917 7.64263 7.643C8.10881 7.17682 8.70275 6.85935 9.34936 6.73074C9.99596 6.60212 10.6662 6.66813 11.2753 6.92042C11.8844 7.17272 12.405 7.59996 12.7712 8.14812C13.1375 8.69628 13.333 9.34075 13.333 10C13.333 10.8841 12.9818 11.7319 12.3567 12.357C11.7316 12.9822 10.8837 13.3334 9.99966 13.3334Z" fill="#EFEFEF" />
                  <path d="M15.3376 5.8613C16.0003 5.8613 16.5376 5.32404 16.5376 4.6613C16.5376 3.99856 16.0003 3.4613 15.3376 3.4613C14.6748 3.4613 14.1376 3.99856 14.1376 4.6613C14.1376 5.32404 14.6748 5.8613 15.3376 5.8613Z" fill="#EFEFEF" />
                </svg>
                @elizavettasmirnova
              </a>
            </div>
            <!-- /.team__card team-card -->
          </div>
          <!-- /.col-6 col-lg-3 -->
        </div>
        <!-- /.row -->

        <img src="img/page/main/team/background.png" alt="" class="team__background">

        <div class="row">
          <div class="col-6 col-lg-3">
            <div class="team__card team-card">
              <div class="team-card__photo">
                <img src="img/page/main/team/people/5.jpg" alt="" class="team-card__image">
                <img src="img/page/main/team/layers/5.svg" alt="" class="team-card__layer">
              </div>
              <!-- /.team-card__photo -->

              <div class="team-card__name mb-2">Дмитриев Дмитрий</div>
              <div class="team-card__role mb-3">Технический продюссер</div>
              <a href="https://www.instagram.com/dddmka" class="team-card__link" target="_blank">
                <svg class="team-card__icon me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 1.80133C12.6667 1.80133 12.9867 1.812 14.0413 1.86C15.016 1.904 15.5453 2.068 15.8973 2.204C16.329 2.37016 16.7209 2.62499 17.048 2.95203C17.375 3.27906 17.6298 3.67105 17.796 4.10267C17.9293 4.45467 18.096 4.984 18.14 5.95867C18.188 7.01333 18.1987 7.32933 18.1987 10C18.1987 12.6707 18.188 12.9867 18.14 14.0413C18.096 15.016 17.932 15.5453 17.796 15.8973C17.6298 16.329 17.375 16.7209 17.048 17.048C16.7209 17.375 16.329 17.6298 15.8973 17.796C15.5453 17.9293 15.016 18.096 14.0413 18.14C12.9867 18.188 12.6707 18.1987 10 18.1987C7.32934 18.1987 7.01334 18.188 5.95867 18.14C4.984 18.096 4.45467 17.932 4.10267 17.796C3.67105 17.6298 3.27907 17.375 2.95203 17.048C2.62499 16.7209 2.37016 16.329 2.204 15.8973C2.07067 15.5453 1.904 15.016 1.86 14.0413C1.812 12.9867 1.80133 12.6707 1.80133 10C1.80133 7.32933 1.812 7.01333 1.86 5.95867C1.904 4.984 2.068 4.45467 2.204 4.10267C2.37016 3.67105 2.62499 3.27906 2.95203 2.95203C3.27907 2.62499 3.67105 2.37016 4.10267 2.204C4.45467 2.07067 4.984 1.904 5.95867 1.86C7.01334 1.812 7.32934 1.80133 10 1.80133ZM10 0C7.284 0 6.944 0.0119996 5.87734 0.0599996C4.81067 0.108 4.08533 0.277334 3.44933 0.525334C2.78526 0.782326 2.18217 1.17515 1.67866 1.67866C1.17515 2.18217 0.782327 2.78526 0.525334 3.44933C0.277334 4.08533 0.109333 4.812 0.0599996 5.87733C0.0106663 6.94267 0 7.284 0 10C0 12.716 0.0119996 13.056 0.0599996 14.1227C0.108 15.1893 0.277334 15.9147 0.525334 16.5507C0.782327 17.2147 1.17515 17.8178 1.67866 18.3213C2.18217 18.8249 2.78526 19.2177 3.44933 19.4747C4.08533 19.7227 4.812 19.8907 5.87734 19.94C6.94267 19.9893 7.284 20 10 20C12.716 20 13.056 19.988 14.1227 19.94C15.1893 19.892 15.9147 19.7227 16.5507 19.4747C17.2147 19.2177 17.8178 18.8249 18.3213 18.3213C18.8249 17.8178 19.2177 17.2147 19.4747 16.5507C19.7227 15.9147 19.8907 15.188 19.94 14.1227C19.9893 13.0573 20 12.716 20 10C20 7.284 19.988 6.944 19.94 5.87733C19.892 4.81067 19.7227 4.08533 19.4747 3.44933C19.2177 2.78526 18.8249 2.18217 18.3213 1.67866C17.8178 1.17515 17.2147 0.782326 16.5507 0.525334C15.9147 0.277334 15.188 0.109333 14.1227 0.0599996C13.0573 0.0106663 12.716 0 10 0Z" fill="#EFEFEF" />
                  <path d="M9.99966 4.86536C8.98412 4.86536 7.99138 5.1665 7.14699 5.7307C6.3026 6.29491 5.64448 7.09683 5.25585 8.03507C4.86721 8.97331 4.76553 10.0057 4.96365 11.0017C5.16178 11.9978 5.6508 12.9127 6.3689 13.6308C7.087 14.3489 8.00191 14.8379 8.99793 15.036C9.99396 15.2341 11.0264 15.1325 11.9646 14.7438C12.9028 14.3552 13.7048 13.6971 14.269 12.8527C14.8332 12.0083 15.1343 11.0156 15.1343 10C15.1343 8.63822 14.5933 7.3322 13.6304 6.36926C12.6675 5.40633 11.3615 4.86536 9.99966 4.86536ZM9.99966 13.3334C9.34039 13.3334 8.69592 13.1379 8.14776 12.7716C7.59959 12.4053 7.17235 11.8847 6.92006 11.2756C6.66777 10.6665 6.60176 9.99632 6.73037 9.34972C6.85899 8.70312 7.17646 8.10917 7.64263 7.643C8.10881 7.17682 8.70275 6.85935 9.34936 6.73074C9.99596 6.60212 10.6662 6.66813 11.2753 6.92042C11.8844 7.17272 12.405 7.59996 12.7712 8.14812C13.1375 8.69628 13.333 9.34075 13.333 10C13.333 10.8841 12.9818 11.7319 12.3567 12.357C11.7316 12.9822 10.8837 13.3334 9.99966 13.3334Z" fill="#EFEFEF" />
                  <path d="M15.3376 5.8613C16.0003 5.8613 16.5376 5.32404 16.5376 4.6613C16.5376 3.99856 16.0003 3.4613 15.3376 3.4613C14.6748 3.4613 14.1376 3.99856 14.1376 4.6613C14.1376 5.32404 14.6748 5.8613 15.3376 5.8613Z" fill="#EFEFEF" />
                </svg>
                @dddmka
              </a>
            </div>
            <!-- /.team__card team-card -->
          </div>
          <!-- /.col-6 col-lg-3 -->

          <div class="col-6 col-lg-3">
            <div class="team__card team-card">
              <div class="team-card__photo">
                <img src="img/page/main/team/people/6.jpg" alt="" class="team-card__image">
                <img src="img/page/main/team/layers/6.svg" alt="" class="team-card__layer">
              </div>
              <!-- /.team-card__photo -->

              <div class="team-card__name mb-2">Артемьева Анастасия</div>
              <div class="team-card__role mb-3">SMM-специалист</div>
              <a href="https://www.instagram.com/anastasiaartnn" class="team-card__link" target="_blank">
                <svg class="team-card__icon me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 1.80133C12.6667 1.80133 12.9867 1.812 14.0413 1.86C15.016 1.904 15.5453 2.068 15.8973 2.204C16.329 2.37016 16.7209 2.62499 17.048 2.95203C17.375 3.27906 17.6298 3.67105 17.796 4.10267C17.9293 4.45467 18.096 4.984 18.14 5.95867C18.188 7.01333 18.1987 7.32933 18.1987 10C18.1987 12.6707 18.188 12.9867 18.14 14.0413C18.096 15.016 17.932 15.5453 17.796 15.8973C17.6298 16.329 17.375 16.7209 17.048 17.048C16.7209 17.375 16.329 17.6298 15.8973 17.796C15.5453 17.9293 15.016 18.096 14.0413 18.14C12.9867 18.188 12.6707 18.1987 10 18.1987C7.32934 18.1987 7.01334 18.188 5.95867 18.14C4.984 18.096 4.45467 17.932 4.10267 17.796C3.67105 17.6298 3.27907 17.375 2.95203 17.048C2.62499 16.7209 2.37016 16.329 2.204 15.8973C2.07067 15.5453 1.904 15.016 1.86 14.0413C1.812 12.9867 1.80133 12.6707 1.80133 10C1.80133 7.32933 1.812 7.01333 1.86 5.95867C1.904 4.984 2.068 4.45467 2.204 4.10267C2.37016 3.67105 2.62499 3.27906 2.95203 2.95203C3.27907 2.62499 3.67105 2.37016 4.10267 2.204C4.45467 2.07067 4.984 1.904 5.95867 1.86C7.01334 1.812 7.32934 1.80133 10 1.80133ZM10 0C7.284 0 6.944 0.0119996 5.87734 0.0599996C4.81067 0.108 4.08533 0.277334 3.44933 0.525334C2.78526 0.782326 2.18217 1.17515 1.67866 1.67866C1.17515 2.18217 0.782327 2.78526 0.525334 3.44933C0.277334 4.08533 0.109333 4.812 0.0599996 5.87733C0.0106663 6.94267 0 7.284 0 10C0 12.716 0.0119996 13.056 0.0599996 14.1227C0.108 15.1893 0.277334 15.9147 0.525334 16.5507C0.782327 17.2147 1.17515 17.8178 1.67866 18.3213C2.18217 18.8249 2.78526 19.2177 3.44933 19.4747C4.08533 19.7227 4.812 19.8907 5.87734 19.94C6.94267 19.9893 7.284 20 10 20C12.716 20 13.056 19.988 14.1227 19.94C15.1893 19.892 15.9147 19.7227 16.5507 19.4747C17.2147 19.2177 17.8178 18.8249 18.3213 18.3213C18.8249 17.8178 19.2177 17.2147 19.4747 16.5507C19.7227 15.9147 19.8907 15.188 19.94 14.1227C19.9893 13.0573 20 12.716 20 10C20 7.284 19.988 6.944 19.94 5.87733C19.892 4.81067 19.7227 4.08533 19.4747 3.44933C19.2177 2.78526 18.8249 2.18217 18.3213 1.67866C17.8178 1.17515 17.2147 0.782326 16.5507 0.525334C15.9147 0.277334 15.188 0.109333 14.1227 0.0599996C13.0573 0.0106663 12.716 0 10 0Z" fill="#EFEFEF" />
                  <path d="M9.99966 4.86536C8.98412 4.86536 7.99138 5.1665 7.14699 5.7307C6.3026 6.29491 5.64448 7.09683 5.25585 8.03507C4.86721 8.97331 4.76553 10.0057 4.96365 11.0017C5.16178 11.9978 5.6508 12.9127 6.3689 13.6308C7.087 14.3489 8.00191 14.8379 8.99793 15.036C9.99396 15.2341 11.0264 15.1325 11.9646 14.7438C12.9028 14.3552 13.7048 13.6971 14.269 12.8527C14.8332 12.0083 15.1343 11.0156 15.1343 10C15.1343 8.63822 14.5933 7.3322 13.6304 6.36926C12.6675 5.40633 11.3615 4.86536 9.99966 4.86536ZM9.99966 13.3334C9.34039 13.3334 8.69592 13.1379 8.14776 12.7716C7.59959 12.4053 7.17235 11.8847 6.92006 11.2756C6.66777 10.6665 6.60176 9.99632 6.73037 9.34972C6.85899 8.70312 7.17646 8.10917 7.64263 7.643C8.10881 7.17682 8.70275 6.85935 9.34936 6.73074C9.99596 6.60212 10.6662 6.66813 11.2753 6.92042C11.8844 7.17272 12.405 7.59996 12.7712 8.14812C13.1375 8.69628 13.333 9.34075 13.333 10C13.333 10.8841 12.9818 11.7319 12.3567 12.357C11.7316 12.9822 10.8837 13.3334 9.99966 13.3334Z" fill="#EFEFEF" />
                  <path d="M15.3376 5.8613C16.0003 5.8613 16.5376 5.32404 16.5376 4.6613C16.5376 3.99856 16.0003 3.4613 15.3376 3.4613C14.6748 3.4613 14.1376 3.99856 14.1376 4.6613C14.1376 5.32404 14.6748 5.8613 15.3376 5.8613Z" fill="#EFEFEF" />
                </svg>
                @anastasiaartnn
              </a>
            </div>
            <!-- /.team__card team-card -->
          </div>
          <!-- /.col-6 col-lg-3 -->

          <div class="col-6 col-lg-3">
            <div class="team__card team-card">
              <div class="team-card__photo">
                <img src="img/page/main/team/people/7.jpg" alt="" class="team-card__image">
                <img src="img/page/main/team/layers/7.svg" alt="" class="team-card__layer">
              </div>
              <!-- /.team-card__photo -->

              <div class="team-card__name mb-2">Тулин Кирилл</div>
              <div class="team-card__role mb-3">Дизайнер</div>
              <a href="https://www.instagram.com/yellowcleaner" class="team-card__link" target="_blank">
                <svg class="team-card__icon me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 1.80133C12.6667 1.80133 12.9867 1.812 14.0413 1.86C15.016 1.904 15.5453 2.068 15.8973 2.204C16.329 2.37016 16.7209 2.62499 17.048 2.95203C17.375 3.27906 17.6298 3.67105 17.796 4.10267C17.9293 4.45467 18.096 4.984 18.14 5.95867C18.188 7.01333 18.1987 7.32933 18.1987 10C18.1987 12.6707 18.188 12.9867 18.14 14.0413C18.096 15.016 17.932 15.5453 17.796 15.8973C17.6298 16.329 17.375 16.7209 17.048 17.048C16.7209 17.375 16.329 17.6298 15.8973 17.796C15.5453 17.9293 15.016 18.096 14.0413 18.14C12.9867 18.188 12.6707 18.1987 10 18.1987C7.32934 18.1987 7.01334 18.188 5.95867 18.14C4.984 18.096 4.45467 17.932 4.10267 17.796C3.67105 17.6298 3.27907 17.375 2.95203 17.048C2.62499 16.7209 2.37016 16.329 2.204 15.8973C2.07067 15.5453 1.904 15.016 1.86 14.0413C1.812 12.9867 1.80133 12.6707 1.80133 10C1.80133 7.32933 1.812 7.01333 1.86 5.95867C1.904 4.984 2.068 4.45467 2.204 4.10267C2.37016 3.67105 2.62499 3.27906 2.95203 2.95203C3.27907 2.62499 3.67105 2.37016 4.10267 2.204C4.45467 2.07067 4.984 1.904 5.95867 1.86C7.01334 1.812 7.32934 1.80133 10 1.80133ZM10 0C7.284 0 6.944 0.0119996 5.87734 0.0599996C4.81067 0.108 4.08533 0.277334 3.44933 0.525334C2.78526 0.782326 2.18217 1.17515 1.67866 1.67866C1.17515 2.18217 0.782327 2.78526 0.525334 3.44933C0.277334 4.08533 0.109333 4.812 0.0599996 5.87733C0.0106663 6.94267 0 7.284 0 10C0 12.716 0.0119996 13.056 0.0599996 14.1227C0.108 15.1893 0.277334 15.9147 0.525334 16.5507C0.782327 17.2147 1.17515 17.8178 1.67866 18.3213C2.18217 18.8249 2.78526 19.2177 3.44933 19.4747C4.08533 19.7227 4.812 19.8907 5.87734 19.94C6.94267 19.9893 7.284 20 10 20C12.716 20 13.056 19.988 14.1227 19.94C15.1893 19.892 15.9147 19.7227 16.5507 19.4747C17.2147 19.2177 17.8178 18.8249 18.3213 18.3213C18.8249 17.8178 19.2177 17.2147 19.4747 16.5507C19.7227 15.9147 19.8907 15.188 19.94 14.1227C19.9893 13.0573 20 12.716 20 10C20 7.284 19.988 6.944 19.94 5.87733C19.892 4.81067 19.7227 4.08533 19.4747 3.44933C19.2177 2.78526 18.8249 2.18217 18.3213 1.67866C17.8178 1.17515 17.2147 0.782326 16.5507 0.525334C15.9147 0.277334 15.188 0.109333 14.1227 0.0599996C13.0573 0.0106663 12.716 0 10 0Z" fill="#EFEFEF" />
                  <path d="M9.99966 4.86536C8.98412 4.86536 7.99138 5.1665 7.14699 5.7307C6.3026 6.29491 5.64448 7.09683 5.25585 8.03507C4.86721 8.97331 4.76553 10.0057 4.96365 11.0017C5.16178 11.9978 5.6508 12.9127 6.3689 13.6308C7.087 14.3489 8.00191 14.8379 8.99793 15.036C9.99396 15.2341 11.0264 15.1325 11.9646 14.7438C12.9028 14.3552 13.7048 13.6971 14.269 12.8527C14.8332 12.0083 15.1343 11.0156 15.1343 10C15.1343 8.63822 14.5933 7.3322 13.6304 6.36926C12.6675 5.40633 11.3615 4.86536 9.99966 4.86536ZM9.99966 13.3334C9.34039 13.3334 8.69592 13.1379 8.14776 12.7716C7.59959 12.4053 7.17235 11.8847 6.92006 11.2756C6.66777 10.6665 6.60176 9.99632 6.73037 9.34972C6.85899 8.70312 7.17646 8.10917 7.64263 7.643C8.10881 7.17682 8.70275 6.85935 9.34936 6.73074C9.99596 6.60212 10.6662 6.66813 11.2753 6.92042C11.8844 7.17272 12.405 7.59996 12.7712 8.14812C13.1375 8.69628 13.333 9.34075 13.333 10C13.333 10.8841 12.9818 11.7319 12.3567 12.357C11.7316 12.9822 10.8837 13.3334 9.99966 13.3334Z" fill="#EFEFEF" />
                  <path d="M15.3376 5.8613C16.0003 5.8613 16.5376 5.32404 16.5376 4.6613C16.5376 3.99856 16.0003 3.4613 15.3376 3.4613C14.6748 3.4613 14.1376 3.99856 14.1376 4.6613C14.1376 5.32404 14.6748 5.8613 15.3376 5.8613Z" fill="#EFEFEF" />
                </svg>
                @yellowcleaner
              </a>
            </div>
            <!-- /.team__card team-card -->
          </div>
          <!-- /.col-6 col-lg-3 -->

          <div class="col-6 col-lg-3">
            <div class="team__card team-card">
              <div class="team-card__photo">
                <img src="img/page/main/team/people/8.jpg" alt="" class="team-card__image">
                <img src="img/page/main/team/layers/8.svg" alt="" class="team-card__layer">
              </div>
              <!-- /.team-card__photo -->

              <div class="team-card__name mb-2">Косырев Кирилл</div>
              <div class="team-card__role mb-3">Старший дизайнер</div>
              <a href="https://www.instagram.com/koufff/" class="team-card__link" target="_blank">
                <svg class="team-card__icon me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 1.80133C12.6667 1.80133 12.9867 1.812 14.0413 1.86C15.016 1.904 15.5453 2.068 15.8973 2.204C16.329 2.37016 16.7209 2.62499 17.048 2.95203C17.375 3.27906 17.6298 3.67105 17.796 4.10267C17.9293 4.45467 18.096 4.984 18.14 5.95867C18.188 7.01333 18.1987 7.32933 18.1987 10C18.1987 12.6707 18.188 12.9867 18.14 14.0413C18.096 15.016 17.932 15.5453 17.796 15.8973C17.6298 16.329 17.375 16.7209 17.048 17.048C16.7209 17.375 16.329 17.6298 15.8973 17.796C15.5453 17.9293 15.016 18.096 14.0413 18.14C12.9867 18.188 12.6707 18.1987 10 18.1987C7.32934 18.1987 7.01334 18.188 5.95867 18.14C4.984 18.096 4.45467 17.932 4.10267 17.796C3.67105 17.6298 3.27907 17.375 2.95203 17.048C2.62499 16.7209 2.37016 16.329 2.204 15.8973C2.07067 15.5453 1.904 15.016 1.86 14.0413C1.812 12.9867 1.80133 12.6707 1.80133 10C1.80133 7.32933 1.812 7.01333 1.86 5.95867C1.904 4.984 2.068 4.45467 2.204 4.10267C2.37016 3.67105 2.62499 3.27906 2.95203 2.95203C3.27907 2.62499 3.67105 2.37016 4.10267 2.204C4.45467 2.07067 4.984 1.904 5.95867 1.86C7.01334 1.812 7.32934 1.80133 10 1.80133ZM10 0C7.284 0 6.944 0.0119996 5.87734 0.0599996C4.81067 0.108 4.08533 0.277334 3.44933 0.525334C2.78526 0.782326 2.18217 1.17515 1.67866 1.67866C1.17515 2.18217 0.782327 2.78526 0.525334 3.44933C0.277334 4.08533 0.109333 4.812 0.0599996 5.87733C0.0106663 6.94267 0 7.284 0 10C0 12.716 0.0119996 13.056 0.0599996 14.1227C0.108 15.1893 0.277334 15.9147 0.525334 16.5507C0.782327 17.2147 1.17515 17.8178 1.67866 18.3213C2.18217 18.8249 2.78526 19.2177 3.44933 19.4747C4.08533 19.7227 4.812 19.8907 5.87734 19.94C6.94267 19.9893 7.284 20 10 20C12.716 20 13.056 19.988 14.1227 19.94C15.1893 19.892 15.9147 19.7227 16.5507 19.4747C17.2147 19.2177 17.8178 18.8249 18.3213 18.3213C18.8249 17.8178 19.2177 17.2147 19.4747 16.5507C19.7227 15.9147 19.8907 15.188 19.94 14.1227C19.9893 13.0573 20 12.716 20 10C20 7.284 19.988 6.944 19.94 5.87733C19.892 4.81067 19.7227 4.08533 19.4747 3.44933C19.2177 2.78526 18.8249 2.18217 18.3213 1.67866C17.8178 1.17515 17.2147 0.782326 16.5507 0.525334C15.9147 0.277334 15.188 0.109333 14.1227 0.0599996C13.0573 0.0106663 12.716 0 10 0Z" fill="#EFEFEF" />
                  <path d="M9.99966 4.86536C8.98412 4.86536 7.99138 5.1665 7.14699 5.7307C6.3026 6.29491 5.64448 7.09683 5.25585 8.03507C4.86721 8.97331 4.76553 10.0057 4.96365 11.0017C5.16178 11.9978 5.6508 12.9127 6.3689 13.6308C7.087 14.3489 8.00191 14.8379 8.99793 15.036C9.99396 15.2341 11.0264 15.1325 11.9646 14.7438C12.9028 14.3552 13.7048 13.6971 14.269 12.8527C14.8332 12.0083 15.1343 11.0156 15.1343 10C15.1343 8.63822 14.5933 7.3322 13.6304 6.36926C12.6675 5.40633 11.3615 4.86536 9.99966 4.86536ZM9.99966 13.3334C9.34039 13.3334 8.69592 13.1379 8.14776 12.7716C7.59959 12.4053 7.17235 11.8847 6.92006 11.2756C6.66777 10.6665 6.60176 9.99632 6.73037 9.34972C6.85899 8.70312 7.17646 8.10917 7.64263 7.643C8.10881 7.17682 8.70275 6.85935 9.34936 6.73074C9.99596 6.60212 10.6662 6.66813 11.2753 6.92042C11.8844 7.17272 12.405 7.59996 12.7712 8.14812C13.1375 8.69628 13.333 9.34075 13.333 10C13.333 10.8841 12.9818 11.7319 12.3567 12.357C11.7316 12.9822 10.8837 13.3334 9.99966 13.3334Z" fill="#EFEFEF" />
                  <path d="M15.3376 5.8613C16.0003 5.8613 16.5376 5.32404 16.5376 4.6613C16.5376 3.99856 16.0003 3.4613 15.3376 3.4613C14.6748 3.4613 14.1376 3.99856 14.1376 4.6613C14.1376 5.32404 14.6748 5.8613 15.3376 5.8613Z" fill="#EFEFEF" />
                </svg>
                @koufff
              </a>
            </div>
            <!-- /.team__card team-card -->
          </div>
          <!-- /.col-6 col-lg-3 -->
        </div>
        <!-- /.row -->

        <div class="team__join team-join">
          <div class="team-join__wrapper">
            <h2 class="team-join__title me-5">Хочешь стать частью команды?</h2>

            <div class="team-join__action team-join__copy">
              <svg class="team-join__icon me-3" width="63" height="55" viewBox="0 0 63 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M59.7401 22.7898H56.5959V19.6456C56.5959 18.8117 56.2647 18.0119 55.675 17.4223C55.0853 16.8326 54.2856 16.5014 53.4517 16.5014C52.6178 16.5014 51.8181 16.8326 51.2284 17.4223C50.6387 18.0119 50.3075 18.8117 50.3075 19.6456V22.7898H47.1633C46.3294 22.7898 45.5296 23.1211 44.94 23.7107C44.3503 24.3004 44.019 25.1001 44.019 25.934C44.019 26.7679 44.3503 27.5677 44.94 28.1573C45.5296 28.747 46.3294 29.0782 47.1633 29.0782H50.3075V32.2224C50.3075 33.0563 50.6387 33.8561 51.2284 34.4457C51.8181 35.0354 52.6178 35.3667 53.4517 35.3667C54.2856 35.3667 55.0853 35.0354 55.675 34.4457C56.2647 33.8561 56.5959 33.0563 56.5959 32.2224V29.0782H59.7401C60.574 29.0782 61.3738 28.747 61.9634 28.1573C62.5531 27.5677 62.8844 26.7679 62.8844 25.934C62.8844 25.1001 62.5531 24.3004 61.9634 23.7107C61.3738 23.1211 60.574 22.7898 59.7401 22.7898Z" fill="white" />
                <path d="M35.5297 28.1979C37.2073 26.7456 38.553 24.9495 39.4753 22.9314C39.8977 22.007 40.2268 21.0459 40.4594 20.0625C40.9162 18.1313 39.266 16.5014 37.2815 16.5014C35.793 16.5014 34.6236 17.7319 34.204 19.16C33.7627 20.6619 32.9505 22.0444 31.8236 23.1713C30.0547 24.9402 27.6554 25.934 25.1537 25.934C23.2881 25.934 21.4644 25.3808 19.9132 24.3443C18.362 23.3079 17.153 21.8347 16.4391 20.1111C15.7252 18.3875 15.5384 16.4909 15.9023 14.6611C16.2663 12.8314 17.1647 11.1506 18.4838 9.83147C19.803 8.51229 21.4838 7.61392 23.3135 7.24995C25.1433 6.88599 27.0399 7.07279 28.7635 7.78673C29.1943 7.9652 29.6096 8.17461 30.0062 8.41257C31.638 9.39147 34.0969 9.28598 35.023 7.62367C35.7611 6.29883 35.5508 4.61209 34.3186 3.72798C31.6644 1.82356 28.4629 0.780273 25.1537 0.780273C20.9842 0.780273 16.9855 2.4366 14.0373 5.38487C11.089 8.33315 9.43265 12.3319 9.43265 16.5014C9.43263 18.7203 9.90995 20.9132 10.8322 22.9314C11.7545 24.9495 13.1001 26.7456 14.7778 28.1979C10.3764 30.1909 6.64205 33.4095 4.02139 37.4687C1.40073 41.5279 0.00462783 46.2561 0 51.0878C0 51.9216 0.331265 52.7214 0.92092 53.3111C1.51058 53.9007 2.31032 54.232 3.14422 54.232C3.97812 54.232 4.77786 53.9007 5.36752 53.3111C5.95717 52.7214 6.28844 51.9216 6.28844 51.0878C6.28844 46.0844 8.27602 41.2859 11.814 37.748C15.3519 34.21 20.1504 32.2224 25.1537 32.2224C30.1571 32.2224 34.9556 34.21 38.4935 37.748C42.0315 41.2859 44.019 46.0844 44.019 51.0878C44.019 51.9216 44.3503 52.7214 44.94 53.3111C45.5296 53.9007 46.3294 54.232 47.1633 54.232C47.9972 54.232 48.7969 53.9007 49.3866 53.3111C49.9762 52.7214 50.3075 51.9216 50.3075 51.0878C50.3029 46.2561 48.9067 41.5279 46.2861 37.4687C43.6654 33.4095 39.9311 30.1909 35.5297 28.1979Z" fill="white" />
              </svg>

              <div class="team-join__text">
                <div class="team-join__subtitle mb-1">Пиши сюда</div>
                <span class="team-join__link">hr@threaddigital.ru</span>
                <div class="team-join__tooltip tooltip">Скопировано!</div>
              </div>
              <!-- /.team-join__wrapper -->

              <a href="mailto:hr@threaddigital.ru" class="stretched-link"></a>
            </div>
          </div>
          <!-- /.team-join__wrapper -->
        </div>
        <!-- /.team__join -->
      </div>
      <!-- /.team -->
    </div>
    <!-- /.container -->
  </section>

  <section id="callback" class="section">
    <div class="container">
      <div class="section__heading section__heading--center">
        <h2 class="section__title mb-4">
          Получите <span class="section__title section__title--important">бесплатный аудит</span>
          <br>
          вашей бизнес-задачи
        </h2>
      </div>
      <!-- /.section__heading -->

      <div class="callback">
        <form action="" class="form form-callback">
          <div class="row mb-5">
            <div class="col-4">
              <label class="input">
                <span class="input__label input__label--required">Ваше имя</span>
                <input data-required class="input__field" type="text" name="" placeholder="Андрей Евгеньевич">
              </label>
            </div>
            <!-- /.col-4 -->

            <div class="col-4">
              <label class="input">
                <span class="input__label input__label--required">Телефон</span>
                <input data-required class="input__field" type="tel" name="" placeholder="8-(900)-222-22-22">
              </label>
            </div>
            <!-- /.col-4 -->

            <div class="col-4">
              <label class="input">
                <span class="input__label input__label--required">Ваш E-mail</span>
                <input data-required class="input__field" type="email" name="" placeholder="bikov-ag@mail.ru">
              </label>
            </div>
            <!-- /.col-4 -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-6">
              <label class="input">
                <span class="input__label">Ваш вопрос</span>
                <textarea class="input__field input__field--area" type="text" name="" placeholder="Хочу красивый лендос"></textarea>
              </label>
            </div>

            <div class="col-6">
              <div class="form__action">
                <label class="checkbox mb-4">
                  <input type="checkbox">
                  <span class="checkbox__mark me-2"></span>
                  <span class="checkbox__label">Согласен с <a href="policy.html" class="checkbox__policy">политикой обработки данных</a></span>
                </label>

                <label class="checkbox mb-4">
                  <input type="checkbox">
                  <span class="checkbox__mark me-2"></span>
                  <span class="checkbox__label">Перезвонить</span>
                </label>

                <button disabled class="form-callback__button form__button button button-primary">Отправить</button>
              </div>
              <!-- /.form__action -->
            </div>
            <!-- /.col-5 -->
          </div>
          <!-- /.row -->
        </form>
      </div>
      <!-- /.callback -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include_once 'partials/footer.php' ?>