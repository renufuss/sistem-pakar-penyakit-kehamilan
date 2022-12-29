<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
  <!--begin::Head-->
  <head>
    <title>
      Sistem Pakar Penyakit Kehamilan
    </title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/custom/pic/favicon.ico" />
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"
    />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link
      href="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="<?= base_url(); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body data-kt-name="metronic" id="kt_body" class="app-blank app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
      if (document.documentElement) {
        const defaultThemeMode = "system";
        const name = document.body.getAttribute("data-kt-name");
        let themeMode = localStorage.getItem(
          "kt_" + (name !== null ? name + "_" : "") + "theme_mode_value"
        );
        if (themeMode === null) {
          if (defaultThemeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)")
              .matches
              ? "dark"
              : "light";
          } else {
            themeMode = defaultThemeMode;
          }
        }
        document.documentElement.setAttribute("data-theme", themeMode);
      }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
      <!--begin::Authentication - Multi-steps-->
      <div
        class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep"
        id="kt_create_account_stepper"
      >
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
          <div
            class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center"
            style="background-image: url(assets/custom/pic/bg.png)"
          >
            <!--begin::Header-->
            <div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
              <!--begin::Logo-->
              <a href="<?= base_url(); ?>">
                <img
                  alt="Logo"
                  src="<?= base_url(); ?>/assets/custom/pic/heart.png"
                  class="h-70px"
                />
              </a>
              <!--end::Logo-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="d-flex flex-row-fluid justify-content-center p-10">
              <!--begin::Nav-->
              <div class="stepper-nav">
                <!--begin::Step 1-->
                <div class="stepper-item current" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon rounded-3">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">1</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title fs-2">Data Diri</h3>
                      <div class="stepper-desc fw-normal">
                        Masukkan Data Diri Anda
                      </div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Line-->
                  <div class="stepper-line h-40px"></div>
                  <!--end::Line-->
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon rounded-3">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">2</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title fs-2">Diagnosa</h3>
                      <div class="stepper-desc fw-normal">Diagnosa 1 - 10</div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Line-->
                  <div class="stepper-line h-40px"></div>
                  <!--end::Line-->
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">3</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title fs-2">Diagnosa</h3>
                      <div class="stepper-desc fw-normal">Diagnosa 11 - 20</div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Line-->
                  <div class="stepper-line h-40px"></div>
                  <!--end::Line-->
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">4</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Diagnosa</h3>
                      <div class="stepper-desc fw-normal">
                        Diagnosa 21 - 25
                      </div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 4-->
              </div>
              <!--end::Nav-->
            </div>
            <!--end::Body-->
          </div>
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
          <!--begin::Content-->
          <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
                <?php include('form.php'); ?>
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::Authentication - Multi-steps-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url(); ?>/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="<?= base_url(); ?>/assets/js/custom/utilities/modals/create-account.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>
