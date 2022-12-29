              <!--begin::Form-->
              <form class="my-auto pb-5" action="/check" method="post">
                <!--begin::Step 1-->
                <div class="current" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-15">
                      <!--begin::Title-->
                      <h2 class="fw-bold d-flex align-items-center text-dark">
                        Biodata Diri
                      </h2>
                      <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row">
                      <!--begin::Row-->
                      <div class="row">
                        <div class="col-md-12 fv-row">
                          <!--begin::Label-->
                          <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Nama Lengkap</span>
                          </label>
                          <!--end::Label-->
                          <input type="text" class="form-control form-control-solid mb-2" name="name" id="name"
                            autocomplete="off" />
                          <div class="invalid-feedback" id="name-feedback"></div>
                        </div>

                        <div class="col-md-12 fv-row">
                          <!--begin::Label-->
                          <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Umur</span>
                          </label>
                          <!--end::Label-->
                          <input type="number" class="form-control form-control-solid mb-2" name="age" id="age"
                            autocomplete="off" />
                          <div class="invalid-feedback" id="age-feedback"></div>
                        </div>
                        <!-- end::col -->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Input group-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div class="" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-15">
                      <!--begin::Title-->
                      <h2 class="fw-bold text-dark">Diagnosa Penyakit</h2>
                      <!--end::Title-->
                      <!--begin::Notice-->
                      <div class="text-muted fw-semibold fs-6">
                        Jawab pertanyaan sesuai dengan yang anda alami
                      </div>
                      <!--end::Notice-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <main>
                      <div class="container py-4">
                        <h3>Jawab pertanyaan sesuai dengan kondisi Anda</h3>
                        <p>
                          <b>1. Apakah usia kehamilan Anda 7 bulan / lebih?</b>
                        </p>
                        <label class="radio-inline" style="padding-left: 15px">
                          <input type="radio" name="G1" value="yes"/>Ya
                        </label>
                        <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                          <input type="radio" name="G1" value="no" />Tidak </label> <p><b>2. Apakah anda mengalami mual-mual?</b>
                          </p>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G2" value="yes"/>Ya
                          </label>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G2" value="no"/>Tidak
                          </label>
                          <p><b>3. Apakah anda mengalami muntah?</b></p>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G3" value="yes"/>Ya
                          </label>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G3" value="no"/>Tidak
                          </label>
                          <p><b>4. Apakah anda mengalami kejang-kejang?</b></p>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G4" value="yes"/>Ya
                          </label>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G4" value="no"/>Tidak
                          </label>
                          <p><b>5. Apakah Proteinuria anda > 3g/liter?</b></p>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G5" value="yes"/>Ya
                          </label>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G5" value="no"/>Tidak
                          </label>
                          <p>
                            <b>6. Apakah tekanan darah anda ≥ 160/110 mmHg?</b>
                          </p>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G6" value="yes"/>Ya
                          </label>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G6" value="no"/>Tidak
                          </label>
                          <p><b>7. Apakah anda merasa pusing?</b></p>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G7" value="yes"/>Ya
                          </label>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G7" value="no"/>Tidak
                          </label>
                          <p><b>8. Apakah anda merasa nyeri pada ulu hati?</b></p>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G8" value="yes"/>Ya
                          </label>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G8" value="no"/>Tidak
                          </label>
                          <p>
                            <b>9. Apakah anda merasa nyeri pada perut bagian
                              bawah?</b>
                          </p>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G9" value="yes"/>Ya
                          </label>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G9" value="no"/>Tidak
                          </label>
                          <p>
                            <b>10. Apakah anda merasa nyeri pada perut di salah
                              satu sisi?</b>
                          </p>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G10" value="yes"/>Ya
                          </label>
                          <label class="radio-inline" style="padding-left: 15px; padding-bottom: 10px">
                            <input type="radio" name="G10" value="no"/>Tidak
                          </label>
                      </div>
                    </main>
                    <!--end::Input group-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div class="" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-12">
                      <!--begin::Title-->
                      <h2 class="fw-bold text-dark">Diagnosa Penyakit</h2>
                      <!--end::Title-->
                      <!--begin::Notice-->
                      <div class="text-muted fw-semibold fs-6">
                        Jawab pertanyaan sesuai dengan yang anda alami
                      </div>
                      <!--end::Notice-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <main>
                      <div class="container py-4">
                        <h3>Jawab pertanyaan sesuai dengan kondisi Anda</h3>
                        <p><b>11. Apakah anda merasa nyeri secara tiba-tiba?</b></p>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G11" value="yes" />Ya
                        </label>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G11" value="no" />Tidak
                        </label>
                        <p><b>12. Apakah mengalami pendarahan dari jalan lahir?</b></p>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G12" value="yes"  />Ya
                        </label>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G12" value="no" />Tidak
                        </label>
                        <p><b>13. Apakah pendarahan dari jalan lahir berwarna kehitaman?</b></p>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G13" value="yes" />Ya
                        </label>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G13" value="no" />Tidak
                        </label>
                        <p><b>14. Apakah janin anda meninggal?</b></p>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G14" value="yes" />Ya
                        </label>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G14" value="no" />Tidak
                        </label>
                        <p><b>15. Apakah anda mengalami Syok?</b></p>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G15" value="yes" />Ya
                        </label>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G15" value="no" />Tidak
                        </label>
                        <p><b>16. Apakah bentuk dinding rahim anda pada cek USG normal?</b></p>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G16" value="yes" />Ya
                        </label>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G16" value="no" />Tidak
                        </label>
                        <p><b>17. Apakah anda tampak pucat?</b></p>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G17" value="yes" />Ya
                        </label>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G17" value="no" />Tidak
                        </label>
                        <p><b>18. Apakah air kencing anda berwarna kemerahan?</b></p>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G18" value="yes" />Ya
                        </label>
                        <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                          <input type="radio" name="G18" value="no" />Tidak
                        </label>
                        <p><b>19. Apakah tekanan darah anda turun hingga < 60/90 mmHg?</b> </60> </p> <label
                              class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                              <input type="radio" name="G19" value="yes" />Ya
                              </label>
                              <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                                <input type="radio" name="G19" value="no" />Tidak
                              </label>
                              <p><b>20. Apakah denyut nadi anda terasa cepat?</b></p>
                              <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                                <input type="radio" name="G20" value="yes" />Ya
                              </label>
                              <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                                <input type="radio" name="G20" value="no" />Tidak
                              </label>
                    </main>
                    <!--end::Input group-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <div class="" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-15">
                      <!--begin::Title-->
                      <h2 class="fw-bold text-dark">Diagnosa Penyakit</h2>
                      <!--end::Title-->
                      <!--begin::Notice-->
                      <div class="text-muted fw-semibold fs-6">
                        Jawab pertanyaan sesuai dengan yang anda alami
                      </div>
                      <!--end::Notice-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <main>
                      <p><b>21. Apakah anda mengalami kontraksi dari rahim?</b></p>
                      <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                        <input type="radio" name="G21" value="yes" />Ya
                      </label>
                      <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                        <input type="radio" name="G21" value="no" />Tidak
                      </label>
                      <p><b>22. Apakah jumlah pendarahan anda sedikit?</b></p>
                      <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                        <input type="radio" name="G22" value="yes" />Ya
                      </label>
                      <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                        <input type="radio" name="G22" value="no" />Tidak
                      </label>
                      <p><b>23. Apakah produksi urin anda sedikit?</b></p>
                      <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                        <input type="radio" name="G23" value="yes" />Ya
                      </label>
                      <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                        <input type="radio" name="G23" value="no" />Tidak
                      </label>
                      <p><b>24. Apakah kontraksi dari rahim anda hilang?</b></p>
                      <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                        <input type="radio" name="G24" value="yes" />Ya
                      </label>
                      <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                        <input type="radio" name="G24" value="no" />Tidak
                      </label>
                      <p><b>25. Apakah kesadaran anda terasa menurun?</b></p>
                      <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                        <input type="radio" name="G25" value="yes">Ya
                      </label>
                      <label class="radio-inline" style="padding-left:15px; padding-bottom: 10px;">
                        <input type="radio" name="g25" value="no">Tidak
                      </label>
                      <p></p>
                    </main>
                    <!--end::Input group-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 4-->
                <!--begin::Actions-->
                <div class="d-flex flex-stack pt-15">
                  <div class="mr-2">
                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                      <span class="svg-icon svg-icon-4 me-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
                          <path
                            d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                            fill="currentColor" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->Previous
                    </button>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-lg btn-danger" data-kt-stepper-action="submit">
                      <span class="indicator-label">Deteksi Penyakit</span>
                    </button>
                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                      Continue
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                      <span class="svg-icon svg-icon-4 ms-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)"
                            fill="currentColor" />
                          <path
                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                            fill="currentColor" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </button>
                  </div>
                </div>
                <!--end::Actions-->
              </form>
              <!--end::Form-->