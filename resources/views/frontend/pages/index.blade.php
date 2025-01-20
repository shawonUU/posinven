  @extends('frontend.layouts.app')

  @section('content')
    <section id="sp-section-3">
      <div class="row">
        <div id="sp-title" class="col-lg-12 ">
          <div class="sp-column "></div>
        </div>
      </div>
    </section>
    <section id="sp-main-body">
      <div class="row">
        <main id="sp-component" class="col-lg-12 ">
          <div class="sp-column ">
            <div id="system-message-container" aria-live="polite"></div>
            <div id="sp-page-builder" class="sp-page-builder  page-1 " x-data="easystoreProductList">
              <div class="page-content builder-container" x-data="easystoreProductDetails">
                <section id="section-id-ed04e584-5215-4cbd-9128-616cf2e4fae0" class="sppb-section">
                  <div class="sppb-row-container">
                    <div class="sppb-row">
                      <div class="sppb-row-column  " id="column-wrap-id-9cde0cbb-1380-4112-94c6-172672e4abae">
                        <div id="column-id-9cde0cbb-1380-4112-94c6-172672e4abae" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-2bde82d8-1dce-486a-b427-29c13df8f172" class="sppb-addon-wrapper  addon-root-heading">
                              <div id="sppb-addon-2bde82d8-1dce-486a-b427-29c13df8f172" class="clearfix  ">
                                <div class="sppb-addon sppb-addon-header">
                                  <h5 class="sppb-addon-title">We provide professional IT services</h5>
                                </div>
                              </div>
                            </div>
                            <div id="sppb-addon-wrapper-d0bdad54-ca7f-4882-b5cf-751de07d3d51" class="sppb-addon-wrapper  addon-root-text-block">
                              <div id="sppb-addon-d0bdad54-ca7f-4882-b5cf-751de07d3d51" class="clearfix  ">
                                <div class="sppb-addon sppb-addon-text-block ">
                                  <h1 class="sppb-addon-title">Delivering tech solutions for your startups</h1>
                                  <div class="sppb-addon-content">
                                    <p>We transform businesses of most major sectors with powerful and adaptable digital solutions that satisfy the needs of today.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="sppb-addon-wrapper-223bba43-e10b-4c63-9d48-c6e65f816f47" class="sppb-addon-wrapper  addon-root-button-group">
                              <div id="sppb-addon-223bba43-e10b-4c63-9d48-c6e65f816f47" class="clearfix  ">
                                <div class="sppb-addon sppb-addon-button-group">
                                  <div class="sppb-addon-content">
                                    <a href="{{asset('frontend')}}/contact.html" id="btn-223bba43-e10b-4c63-9d48-c6e65f816f470" class="sppb-btn  sppb-btn-primary sppb-btn-rounded sppb-btn-flat">Work With Us</a>
                                    <a href="{{asset('frontend')}}/pages/service/service.html" id="btn-223bba43-e10b-4c63-9d48-c6e65f816f471" class="sppb-btn  sppb-btn-custom sppb-btn-rounded sppb-btn-flat">View Services</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="sppb-addon-wrapper-3d456526-4ca9-4e91-9eff-ea5ea553f02f" class="sppb-addon-wrapper  sppb-hidden-xl  sppb-hidden-lg  addon-root-empty-space">
                              <div id="sppb-addon-3d456526-4ca9-4e91-9eff-ea5ea553f02f" class="clearfix  ">
                                <div class="sppb-empty-space  clearfix"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-af4f602e-2d2d-4d68-84d9-7e7971d6aa42">
                        <div id="column-id-af4f602e-2d2d-4d68-84d9-7e7971d6aa42" class="sppb-column ">
                          <div class="sppb-column-addons"></div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-a9e89541-1537-45d6-8479-929b301267bb">
                        <div id="column-id-a9e89541-1537-45d6-8479-929b301267bb" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-1d80446f-029a-4e8c-a05c-237cd3b242cf" class="sppb-addon-wrapper  addon-root-image">
                              <div id="sppb-addon-1d80446f-029a-4e8c-a05c-237cd3b242cf" class="clearfix  sppb-wow fadeInUp  " data-sppb-wow-duration="700ms">
                                <div class="sppb-addon sppb-addon-single-image  full-width-image sppb-addon-image-shape">
                                  <div class="sppb-addon-content">
                                    <div class="sppb-addon-single-image-container">
                                      <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/hero/hero-thumb1.png" alt="Image" title="" width="1052" height="1180" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section id="section-id-b4dbfad9-148c-42ca-baf3-0bc68a54a1c4" class="sppb-section">
                  <div class="sppb-row-container">
                    <div class="sppb-row">
                      <div class="sppb-row-column  " id="column-wrap-id-cb96764d-fdab-4601-80da-e78051837e76">
                        <div id="column-id-cb96764d-fdab-4601-80da-e78051837e76" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-775d90d1-600d-4444-a57e-49467145a63a" class="sppb-addon-wrapper ">
                              <div id="sppb-addon-775d90d1-600d-4444-a57e-49467145a63a" class="sppb-div-addon " data-sppb-wow-duration="300ms">
                                <div id="sppb-addon-wrapper-6983ce83-2852-4c5f-b85e-e806081420eb" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-6983ce83-2852-4c5f-b85e-e806081420eb" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  optech-iconbox-icon2 sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/iconbox/icon1.svg" alt="Image" title="" width="49" height="49" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-4900c24d-46c8-475b-a59e-44fab6734074" class="sppb-addon-wrapper  addon-root-text-block">
                                  <div id="sppb-addon-4900c24d-46c8-475b-a59e-44fab6734074" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-text-block ">
                                      <h5 class="sppb-addon-title">Highly Expert Team</h5>
                                      <div class="sppb-addon-content">
                                        <p>We provide the most responsive and functional IT design</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-e589d76c-94a4-4e79-a7cd-1b85dd596110">
                        <div id="column-id-e589d76c-94a4-4e79-a7cd-1b85dd596110" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-e9d1bd78-52f3-4b45-8212-2bb8f0ca08aa" class="sppb-addon-wrapper ">
                              <div id="sppb-addon-e9d1bd78-52f3-4b45-8212-2bb8f0ca08aa" class="sppb-div-addon " data-sppb-wow-duration="300ms">
                                <div id="sppb-addon-wrapper-086608fe-ad04-4af3-ab26-c91c165cd2cf" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-086608fe-ad04-4af3-ab26-c91c165cd2cf" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  optech-iconbox-icon2 sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/iconbox/icon2.svg" alt="Image" title="" width="49" height="49" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-39fc2700-9db3-4cac-82ad-bfa35578902b" class="sppb-addon-wrapper  addon-root-text-block">
                                  <div id="sppb-addon-39fc2700-9db3-4cac-82ad-bfa35578902b" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-text-block ">
                                      <h5 class="sppb-addon-title">24/7 Customer Service</h5>
                                      <div class="sppb-addon-content">
                                        <p>We provide the most responsive and functional IT design</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-156e95a0-c013-43cc-b674-e8eef1a780dc">
                        <div id="column-id-156e95a0-c013-43cc-b674-e8eef1a780dc" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-7d8a0c82-abef-4fe2-8481-73e4daaf4b01" class="sppb-addon-wrapper ">
                              <div id="sppb-addon-7d8a0c82-abef-4fe2-8481-73e4daaf4b01" class="sppb-div-addon " data-sppb-wow-duration="300ms">
                                <div id="sppb-addon-wrapper-7b8adbc0-acf9-4456-b336-5af0b875bbb0" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-7b8adbc0-acf9-4456-b336-5af0b875bbb0" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  optech-iconbox-icon2 sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/iconbox/icon3.svg" alt="Image" title="" width="48" height="48" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-cbc2454a-7b2a-4832-a13b-88349ba41dac" class="sppb-addon-wrapper  addon-root-text-block">
                                  <div id="sppb-addon-cbc2454a-7b2a-4832-a13b-88349ba41dac" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-text-block ">
                                      <h5 class="sppb-addon-title">Competitive Pricing</h5>
                                      <div class="sppb-addon-content">
                                        <p>We provide the most responsive and functional IT design</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section id="section-id-9c411a65-eef5-4614-a79b-12e9bd809531" class="sppb-section">
                  <div class="sppb-row-container">
                    <div class="sppb-row">
                      <div class="sppb-row-column  " id="column-wrap-id-1f7347fc-0299-4fd9-9781-d035f02cd56e">
                        <div id="column-id-1f7347fc-0299-4fd9-9781-d035f02cd56e" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-787142ff-62a8-417e-aeda-c0d609e86e33" class="sppb-addon-wrapper  addon-root-divider">
                              <div id="sppb-addon-787142ff-62a8-417e-aeda-c0d609e86e33" class="clearfix  ">
                                <div class="sppb-addon-divider-wrap divider-position">
                                  <div class="sppb-divider sppb-divider-border " role="none"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section id="section-id-5dfc5238-8fd5-484a-bb20-3af5a4fc7c59" class="sppb-section sppb-section-content-bottom">
                  <div class="sppb-row-container">
                    <div class="sppb-row sppb-align-bottom">
                      <div class="sppb-row-column  " id="column-wrap-id-1e4cf02c-03f6-4002-b7ef-dba9cae43fb9">
                        <div id="column-id-1e4cf02c-03f6-4002-b7ef-dba9cae43fb9" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-2c427382-41c7-4a57-b20a-71662ba64589" class="sppb-addon-wrapper ">
                              <div id="sppb-addon-2c427382-41c7-4a57-b20a-71662ba64589" class="sppb-div-addon  sppb-wow fadeInUp sppb-positioned-addon " data-sppb-wow-duration="700ms" data-rowid="5dfc5238-8fd5-484a-bb20-3af5a4fc7c59" data-colid="1e4cf02c-03f6-4002-b7ef-dba9cae43fb9">
                                <div id="sppb-addon-wrapper-b3759a9e-953f-4f1a-842d-ff5eb3e87026" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-b3759a9e-953f-4f1a-842d-ff5eb3e87026" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  optech-shape1 sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/shape/shape1.svg" alt="Image" title="" width="133" height="200" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-7ec61b33-6bf7-45fc-bab8-02d39ec7ae51" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-7ec61b33-6bf7-45fc-bab8-02d39ec7ae51" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  optech-shape2 sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/shape/shape2.svg" alt="Image" title="" width="104" height="107" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-894ea2f3-0795-4a5c-8b10-c17e6b76625f" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-894ea2f3-0795-4a5c-8b10-c17e6b76625f" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  full-width-image sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/v1/thumb1.png" alt="Image" title="" width="940" height="960" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-6d9d45e0-d710-40c8-b658-bd464a77fd9d" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-6d9d45e0-d710-40c8-b658-bd464a77fd9d" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  optech-thumb-position sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/v1/thumb2.png" alt="Image" title="" width="640" height="720" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="sppb-addon-wrapper-7efdde2a-961f-489e-84c4-7d35c649934d" class="sppb-addon-wrapper  sppb-hidden-xl  addon-root-empty-space">
                              <div id="sppb-addon-7efdde2a-961f-489e-84c4-7d35c649934d" class="clearfix  ">
                                <div class="sppb-empty-space  clearfix"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-5d1160e6-db9a-478c-9d16-af8198cfa340">
                        <div id="column-id-5d1160e6-db9a-478c-9d16-af8198cfa340" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-f82353d7-f8d1-4d68-9345-cf6be5a1fe0b" class="sppb-addon-wrapper ">
                              <div id="sppb-addon-f82353d7-f8d1-4d68-9345-cf6be5a1fe0b" class="sppb-div-addon " data-sppb-wow-duration="300ms">
                                <div id="sppb-addon-wrapper-96989589-c079-4732-a306-46b3d151e76c" class="sppb-addon-wrapper  addon-root-text-block">
                                  <div id="sppb-addon-96989589-c079-4732-a306-46b3d151e76c" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-text-block ">
                                      <h2 class="sppb-addon-title">More than 25+ years we provide IT solutions</h2>
                                      <div class="sppb-addon-content">
                                        <h5 class="mb-4">During this time, we’ve built a reputation for excellent clients satisfaction as evidenced by our</h5>
                                        <p>Each demo built with Teba will look different. You can customize almost anything in the appearance of your website with only a few clicks. Each demo built with Teba will look different.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-47d443ab-ed6c-436b-9231-8b7228eb3bc3" class="sppb-addon-wrapper  addon-root-button">
                                  <div id="sppb-addon-47d443ab-ed6c-436b-9231-8b7228eb3bc3" class="clearfix  ">
                                    <div class="sppb-button-wrapper">
                                      <a href="{{asset('frontend')}}/pages/about-us.html" id="btn-47d443ab-ed6c-436b-9231-8b7228eb3bc3" class="sppb-btn  sppb-btn-primary sppb-btn-rounded">More About Us</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <div id="section-id-09b4f898-d000-4347-bd3f-9189557df729" class="sppb-section">
                  <div class="sppb-container-inner">
                    <div class="sppb-row">
                      <div class="sppb-row-column  " id="column-wrap-id-22e67635-b253-4bae-8435-7ee7181885aa">
                        <div id="column-id-22e67635-b253-4bae-8435-7ee7181885aa" class="sppb-column  ">
                          <div class="sppb-column-addons"></div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-e2102264-9ad9-4652-973f-70c2913f1290">
                        <div id="column-id-e2102264-9ad9-4652-973f-70c2913f1290" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-eed4bcac-7fc4-4f83-b1d5-462f47789e1a" class="sppb-addon-wrapper  addon-root-text-block">
                              <div id="sppb-addon-eed4bcac-7fc4-4f83-b1d5-462f47789e1a" class="clearfix  ">
                                <div class="sppb-addon sppb-addon-text-block ">
                                  <h2 class="sppb-addon-title">Our awesome services to give you success</h2>
                                  <div class="sppb-addon-content">
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-36104ce8-c41d-4543-bbc4-952dc84de199">
                        <div id="column-id-36104ce8-c41d-4543-bbc4-952dc84de199" class="sppb-column ">
                          <div class="sppb-column-addons"></div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-d0b6eaa4-a922-4dfb-a0c4-19b35147b612">
                        <div id="column-id-d0b6eaa4-a922-4dfb-a0c4-19b35147b612" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-5a69b8d6-f9db-4167-a9ec-6967683f7bf8" class="sppb-addon-wrapper  addon-root-image-carousel">
                              <div id="sppb-addon-5a69b8d6-f9db-4167-a9ec-6967683f7bf8" class="clearfix  sppb-wow fadeInUp  " data-sppb-wow-duration="700ms">
                                <div class="sppb-addon sppb-carousel-extended item-slide sppb-image-carousel-layout2" data-left-arrow="fa-long-arrow-left" data-right-arrow="fa-long-arrow-right" data-arrow="0" data-dots="1" data-image-layout="layout2" data-autoplay="0" data-speed="2500" data-interval="4500" data-margin-xl="30" data-margin-lg="30" data-margin-md="30" data-margin-sm="30" data-margin-xs="30" data-height-xl="500" data-height-lg="500" data-height-md="500" data-height-sm="400" data-height-xs="300" data-item-number-xl="7" data-item-number-lg="4" data-item-number-md="3" data-item-number-sm="2" data-item-number-xs="1">
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon4.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">Data Tracking <br> Security </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon5.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">IT Management <br> Service </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon6.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">UI/UX & Branding <br> Identity </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon7.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">Web & Mobile App <br> Development </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon8.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">Digital Marketing <br> Services </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon4.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">Data Tracking <br> Security </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon5.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">IT Management <br> Service </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon6.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">UI/UX & Branding <br> Identity </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon7.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">Web & Mobile App <br> Development </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon8.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">Digital Marketing <br> Services </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon4.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">Data Tracking <br> Security </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon5.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">IT Management <br> Service </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-carousel-extended-item">
                                    <img src="{{asset('frontend')}}/images/iconbox/icon6.svg" alt="">
                                    <div class="sppb-carousel-extended-content-wrap">
                                      <div class="sppb-carousel-extended-heading">UI/UX & Branding <br> Identity </div>
                                      <div class="sppb-carousel-extended-subheading">Developing a comprehensive IT strategy that aligns.</div>
                                      <div class="sppb-carousel-extended-description">
                                        <a class="optech-icon-btn" href="{{asset('frontend')}}/pages/service/service-details.html">
                                          <i class="icon-show ri-arrow-right-line"></i>
                                          <span>Learn More</span>
                                          <i class="icon-hide ri-arrow-right-line"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <section id="section-id-2c3a6926-36ff-4633-af19-31e709b6e634" class="sppb-section sppb-section-content-center">
                  <div class="sppb-row-container">
                    <div class="sppb-row sppb-align-center">
                      <div class="sppb-row-column   sppb-order-md-2 sppb-order-sm-2 sppb-order-xs-2" id="column-wrap-id-d074f28b-fe56-4e36-8489-34ca220aa496">
                        <div id="column-id-d074f28b-fe56-4e36-8489-34ca220aa496" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-a796c685-690f-43c8-882e-26b00ba20c09" class="sppb-addon-wrapper ">
                              <div id="sppb-addon-a796c685-690f-43c8-882e-26b00ba20c09" class="sppb-div-addon " data-sppb-wow-duration="300ms">
                                <div id="sppb-addon-wrapper-996b9649-7d34-4e32-8349-dc9ba7dd8910" class="sppb-addon-wrapper  addon-root-text-block">
                                  <div id="sppb-addon-996b9649-7d34-4e32-8349-dc9ba7dd8910" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-text-block ">
                                      <h2 class="sppb-addon-title">Increasing business success with technology</h2>
                                      <div class="sppb-addon-content">
                                        <p>Each demo built with Teba will look different. You can customize almost anything in the appearance of your website with only a few clicks. Each demo built with Teba will look different.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-0aee8744-9677-41b6-8553-c335813f8b3a" class="sppb-addon-wrapper  addon-root-progress-bar">
                                  <div id="sppb-addon-0aee8744-9677-41b6-8553-c335813f8b3a" class="clearfix  ">
                                    <div class="sppb-addon ">
                                      <div class="sppb-progress-label clearfix">IT Solution & Management <span>86%</span>
                                      </div>
                                      <div class="sppb-progress">
                                        <div class="sppb-progress-bar custom " role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" data-width="86%"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-558573fd-fc53-4af4-9ebf-6df9d0bddfe3" class="sppb-addon-wrapper  addon-root-progress-bar">
                                  <div id="sppb-addon-558573fd-fc53-4af4-9ebf-6df9d0bddfe3" class="clearfix  ">
                                    <div class="sppb-addon ">
                                      <div class="sppb-progress-label clearfix">Website & App Development <span>72%</span>
                                      </div>
                                      <div class="sppb-progress">
                                        <div class="sppb-progress-bar custom " role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" data-width="72%"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-0e08c5b1-290e-4030-ace0-f2b4f7a65611" class="sppb-addon-wrapper  addon-root-progress-bar">
                                  <div id="sppb-addon-0e08c5b1-290e-4030-ace0-f2b4f7a65611" class="clearfix  ">
                                    <div class="sppb-addon ">
                                      <div class="sppb-progress-label clearfix">SEO & Digital Marketing <span>83%</span>
                                      </div>
                                      <div class="sppb-progress">
                                        <div class="sppb-progress-bar custom " role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" data-width="83%"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column   sppb-order-md-1 sppb-order-sm-1 sppb-order-xs-1" id="column-wrap-id-d2486224-ee0c-4da7-9fa8-d49f65397eed">
                        <div id="column-id-d2486224-ee0c-4da7-9fa8-d49f65397eed" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-9a4677ce-6809-4112-bdb7-30e8734794f6" class="sppb-addon-wrapper ">
                              <div id="sppb-addon-9a4677ce-6809-4112-bdb7-30e8734794f6" class="sppb-div-addon  sppb-wow fadeInUp sppb-positioned-addon " data-sppb-wow-duration="700ms" data-rowid="2c3a6926-36ff-4633-af19-31e709b6e634" data-colid="d2486224-ee0c-4da7-9fa8-d49f65397eed">
                                <div id="sppb-addon-wrapper-41996c7a-6e2d-4ed4-b5f4-d04bf7631d84" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-41996c7a-6e2d-4ed4-b5f4-d04bf7631d84" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  optech-shape3 sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/shape/shape3.svg" alt="Image" title="" width="133" height="200" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-d09983a4-fab8-4e5d-96b2-6036ee1cb825" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-d09983a4-fab8-4e5d-96b2-6036ee1cb825" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  optech-shape4 sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/shape/shape4.svg" alt="Image" title="" width="104" height="107" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-5c55c096-e248-47d9-b3e2-93eb638ad493" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-5c55c096-e248-47d9-b3e2-93eb638ad493" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  full-width-image sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/v1/thumb3.png" alt="Image" title="" width="940" height="960" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-3156d6ea-bf14-4618-b3de-bc2a9a7a37bf" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-3156d6ea-bf14-4618-b3de-bc2a9a7a37bf" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  optech-thumb-position2 sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/v1/thumb4.png" alt="Image" title="" width="700" height="720" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="sppb-addon-wrapper-44d635e5-4f0c-4c38-9bcf-6e4750742c4e" class="sppb-addon-wrapper  sppb-hidden-xl  sppb-hidden-lg  addon-root-empty-space">
                              <div id="sppb-addon-44d635e5-4f0c-4c38-9bcf-6e4750742c4e" class="clearfix  ">
                                <div class="sppb-empty-space  clearfix"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section id="section-id-b78248bd-010e-4cd3-b423-c90f489c7f85" class="sppb-section">
                  <div class="sppb-row-container">
                    <div class="sppb-row">
                      <div class="sppb-row-column  " id="column-wrap-id-0e4bb838-b11d-40bc-9b41-c837f862df80">
                        <div id="column-id-0e4bb838-b11d-40bc-9b41-c837f862df80" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-912063cf-4cc9-4b18-bab0-83eed365a638" class="sppb-addon-wrapper  addon-root-text-block">
                              <div id="sppb-addon-912063cf-4cc9-4b18-bab0-83eed365a638" class="clearfix  ">
                                <div class="sppb-addon sppb-addon-text-block ">
                                  <h2 class="sppb-addon-title">Explore our recent projects</h2>
                                  <div class="sppb-addon-content">
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-ed728ef0-5300-4a55-9b0c-b40c9eedac7c">
                        <div id="column-id-ed728ef0-5300-4a55-9b0c-b40c9eedac7c" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-572db028-184f-407b-ad3d-afb03271b786" class="sppb-addon-wrapper ">
                              <div id="sppb-addon-572db028-184f-407b-ad3d-afb03271b786" class="sppb-div-addon optech-portfolio-thumb sppb-wow fadeInUp sppb-positioned-addon " data-sppb-wow-duration="700ms" data-col-zindex="1" data-rowid="b78248bd-010e-4cd3-b423-c90f489c7f85" data-colid="ed728ef0-5300-4a55-9b0c-b40c9eedac7c">
                                <div id="sppb-addon-wrapper-177f3197-b904-494a-93af-5b10e32b69aa" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-177f3197-b904-494a-93af-5b10e32b69aa" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  full-width-image sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/p1/p1.png" alt="Image" title="" width="832" height="840" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-f74899b2-40e9-447b-9e48-604cb201e713" class="sppb-addon-wrapper  addon-root-button">
                                  <div id="sppb-addon-f74899b2-40e9-447b-9e48-604cb201e713" class="clearfix  ">
                                    <div class="sppb-button-wrapper">
                                      <a href="{{asset('frontend')}}/portfolio/single-portfolio.html" id="btn-f74899b2-40e9-447b-9e48-604cb201e713" class="sppb-btn  optech-portfolio-btn sppb-btn-custom sppb-btn-rounded">
                                        <span class="p-btn-wraper">
                                          <i class="ri-arrow-right-up-line"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-0f7d7425-7fdc-4a96-8685-b223074333f2" class="sppb-addon-wrapper ">
                                  <div id="sppb-addon-0f7d7425-7fdc-4a96-8685-b223074333f2" class="sppb-div-addon optech-portfolio-data sppb-positioned-addon " data-sppb-wow-duration="300ms" data-col-zindex="2" data-rowid="b78248bd-010e-4cd3-b423-c90f489c7f85" data-colid="ed728ef0-5300-4a55-9b0c-b40c9eedac7c">
                                    <div id="sppb-addon-wrapper-266b1f5f-a386-42fd-bd22-11e34407db0f" class="sppb-addon-wrapper  addon-root-heading">
                                      <div id="sppb-addon-266b1f5f-a386-42fd-bd22-11e34407db0f" class="clearfix  ">
                                        <div class="sppb-addon sppb-addon-header">
                                          <a href="{{asset('frontend')}}/portfolio/single-portfolio.html">
                                            <h4 class="sppb-addon-title">Digital Product Design</h4>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="sppb-addon-wrapper-bab376ee-b8eb-450b-a073-9656fd0ef62d" class="sppb-addon-wrapper  addon-root-text-block">
                                      <div id="sppb-addon-bab376ee-b8eb-450b-a073-9656fd0ef62d" class="clearfix  ">
                                        <div class="sppb-addon sppb-addon-text-block ">
                                          <div class="sppb-addon-content">
                                            <p>Design, Graphics</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-115d8cf1-32b6-4da3-89c6-d111049dd418">
                        <div id="column-id-115d8cf1-32b6-4da3-89c6-d111049dd418" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-7bf74959-c4c0-4629-bfac-b0d752b96df5" class="sppb-addon-wrapper ">
                              <div id="sppb-addon-7bf74959-c4c0-4629-bfac-b0d752b96df5" class="sppb-div-addon optech-portfolio-thumb sppb-wow fadeInUp sppb-positioned-addon " data-sppb-wow-duration="700ms" data-sppb-wow-delay="200ms" data-col-zindex="1" data-rowid="b78248bd-010e-4cd3-b423-c90f489c7f85" data-colid="115d8cf1-32b6-4da3-89c6-d111049dd418">
                                <div id="sppb-addon-wrapper-b5753030-dca9-4201-80c0-fd19f6da710a" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-b5753030-dca9-4201-80c0-fd19f6da710a" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  full-width-image sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/p1/p2.png" alt="Image" title="" width="832" height="840" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-da76bc2c-20da-47e0-916d-39841651cae4" class="sppb-addon-wrapper  addon-root-button">
                                  <div id="sppb-addon-da76bc2c-20da-47e0-916d-39841651cae4" class="clearfix  ">
                                    <div class="sppb-button-wrapper">
                                      <a href="{{asset('frontend')}}/portfolio/single-portfolio.html" id="btn-da76bc2c-20da-47e0-916d-39841651cae4" class="sppb-btn  optech-portfolio-btn sppb-btn-custom sppb-btn-rounded">
                                        <span class="p-btn-wraper">
                                          <i class="ri-arrow-right-up-line"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-fe6546fd-6b01-4b28-8aa7-01281170c6aa" class="sppb-addon-wrapper ">
                                  <div id="sppb-addon-fe6546fd-6b01-4b28-8aa7-01281170c6aa" class="sppb-div-addon optech-portfolio-data sppb-positioned-addon " data-sppb-wow-duration="300ms" data-col-zindex="2" data-rowid="b78248bd-010e-4cd3-b423-c90f489c7f85" data-colid="115d8cf1-32b6-4da3-89c6-d111049dd418">
                                    <div id="sppb-addon-wrapper-f8130776-3c13-4de8-aaa3-9ac8154f78b7" class="sppb-addon-wrapper  addon-root-heading">
                                      <div id="sppb-addon-f8130776-3c13-4de8-aaa3-9ac8154f78b7" class="clearfix  ">
                                        <div class="sppb-addon sppb-addon-header">
                                          <a href="{{asset('frontend')}}/portfolio/single-portfolio.html">
                                            <h4 class="sppb-addon-title">Cyber Security Analysis</h4>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="sppb-addon-wrapper-fa7c63f8-0d4a-48fd-8db5-03b256397c95" class="sppb-addon-wrapper  addon-root-text-block">
                                      <div id="sppb-addon-fa7c63f8-0d4a-48fd-8db5-03b256397c95" class="clearfix  ">
                                        <div class="sppb-addon sppb-addon-text-block ">
                                          <div class="sppb-addon-content">
                                            <p>Design, Graphics</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-6c116cd7-8ff8-4e52-9473-1beb2fc7d1ca">
                        <div id="column-id-6c116cd7-8ff8-4e52-9473-1beb2fc7d1ca" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-ff762b6a-ff1c-4133-80a5-19638304d91c" class="sppb-addon-wrapper ">
                              <div id="sppb-addon-ff762b6a-ff1c-4133-80a5-19638304d91c" class="sppb-div-addon optech-portfolio-thumb sppb-wow fadeInUp sppb-positioned-addon " data-sppb-wow-duration="700ms" data-sppb-wow-delay="400ms" data-col-zindex="1" data-rowid="b78248bd-010e-4cd3-b423-c90f489c7f85" data-colid="6c116cd7-8ff8-4e52-9473-1beb2fc7d1ca">
                                <div id="sppb-addon-wrapper-af9f6aad-e6b7-40bb-b711-47decde5c069" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-af9f6aad-e6b7-40bb-b711-47decde5c069" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  full-width-image sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/p1/p3.png" alt="Image" title="" width="832" height="840" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-0ac37d2d-9a3b-4d54-a883-9c5d14e935af" class="sppb-addon-wrapper  addon-root-button">
                                  <div id="sppb-addon-0ac37d2d-9a3b-4d54-a883-9c5d14e935af" class="clearfix  ">
                                    <div class="sppb-button-wrapper">
                                      <a href="{{asset('frontend')}}/portfolio/single-portfolio.html" id="btn-0ac37d2d-9a3b-4d54-a883-9c5d14e935af" class="sppb-btn  optech-portfolio-btn sppb-btn-custom sppb-btn-rounded">
                                        <span class="p-btn-wraper">
                                          <i class="ri-arrow-right-up-line"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-f76f6776-b0b3-4d30-849e-284b6ded8b47" class="sppb-addon-wrapper ">
                                  <div id="sppb-addon-f76f6776-b0b3-4d30-849e-284b6ded8b47" class="sppb-div-addon optech-portfolio-data sppb-positioned-addon " data-sppb-wow-duration="300ms" data-col-zindex="2" data-rowid="b78248bd-010e-4cd3-b423-c90f489c7f85" data-colid="6c116cd7-8ff8-4e52-9473-1beb2fc7d1ca">
                                    <div id="sppb-addon-wrapper-5c65aa03-3e0e-406f-b7fc-31083fac91d2" class="sppb-addon-wrapper  addon-root-heading">
                                      <div id="sppb-addon-5c65aa03-3e0e-406f-b7fc-31083fac91d2" class="clearfix  ">
                                        <div class="sppb-addon sppb-addon-header">
                                          <a href="{{asset('frontend')}}/portfolio/single-portfolio.html">
                                            <h4 class="sppb-addon-title">Health App Development</h4>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="sppb-addon-wrapper-6f2c1e8a-98ff-42f9-89ee-cab46ba811e5" class="sppb-addon-wrapper  addon-root-text-block">
                                      <div id="sppb-addon-6f2c1e8a-98ff-42f9-89ee-cab46ba811e5" class="clearfix  ">
                                        <div class="sppb-addon sppb-addon-text-block ">
                                          <div class="sppb-addon-content">
                                            <p>Design, Graphics</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-0ba5ee22-4ebd-44b1-a5be-fbecb4e31e33">
                        <div id="column-id-0ba5ee22-4ebd-44b1-a5be-fbecb4e31e33" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-e4c729b3-4c95-4353-9c29-ce4cdcb6801e" class="sppb-addon-wrapper ">
                              <div id="sppb-addon-e4c729b3-4c95-4353-9c29-ce4cdcb6801e" class="sppb-div-addon optech-portfolio-thumb sppb-wow fadeInUp sppb-positioned-addon " data-sppb-wow-duration="700ms" data-col-zindex="1" data-rowid="b78248bd-010e-4cd3-b423-c90f489c7f85" data-colid="0ba5ee22-4ebd-44b1-a5be-fbecb4e31e33">
                                <div id="sppb-addon-wrapper-b98f028c-e9d3-4a60-a471-aa8e73294160" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-b98f028c-e9d3-4a60-a471-aa8e73294160" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  full-width-image sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/p1/p4.png" alt="Image" title="" width="832" height="840" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-4d6ff1ff-fea1-4841-b25b-8961e05ec4a5" class="sppb-addon-wrapper  addon-root-button">
                                  <div id="sppb-addon-4d6ff1ff-fea1-4841-b25b-8961e05ec4a5" class="clearfix  ">
                                    <div class="sppb-button-wrapper">
                                      <a href="{{asset('frontend')}}/portfolio/single-portfolio.html" id="btn-4d6ff1ff-fea1-4841-b25b-8961e05ec4a5" class="sppb-btn  optech-portfolio-btn sppb-btn-custom sppb-btn-rounded">
                                        <span class="p-btn-wraper">
                                          <i class="ri-arrow-right-up-line"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-6fa3f5a0-bb5c-4fe3-821c-433c160290e0" class="sppb-addon-wrapper ">
                                  <div id="sppb-addon-6fa3f5a0-bb5c-4fe3-821c-433c160290e0" class="sppb-div-addon optech-portfolio-data sppb-positioned-addon " data-sppb-wow-duration="300ms" data-col-zindex="2" data-rowid="b78248bd-010e-4cd3-b423-c90f489c7f85" data-colid="0ba5ee22-4ebd-44b1-a5be-fbecb4e31e33">
                                    <div id="sppb-addon-wrapper-4149b887-9047-45f1-aa41-d8a90be434b3" class="sppb-addon-wrapper  addon-root-heading">
                                      <div id="sppb-addon-4149b887-9047-45f1-aa41-d8a90be434b3" class="clearfix  ">
                                        <div class="sppb-addon sppb-addon-header">
                                          <a href="{{asset('frontend')}}/portfolio/single-portfolio.html">
                                            <h4 class="sppb-addon-title">Marketing Agency Website</h4>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="sppb-addon-wrapper-d1707b45-598d-4f21-a27e-64d43d0cac24" class="sppb-addon-wrapper  addon-root-text-block">
                                      <div id="sppb-addon-d1707b45-598d-4f21-a27e-64d43d0cac24" class="clearfix  ">
                                        <div class="sppb-addon sppb-addon-text-block ">
                                          <div class="sppb-addon-content">
                                            <p>Design, Graphics</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-02fb666a-a492-47de-afe8-2d0a0f07d41c">
                        <div id="column-id-02fb666a-a492-47de-afe8-2d0a0f07d41c" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-1ecb348b-006f-4237-944d-227dcbc1aff7" class="sppb-addon-wrapper ">
                              <div id="sppb-addon-1ecb348b-006f-4237-944d-227dcbc1aff7" class="sppb-div-addon optech-portfolio-thumb sppb-wow fadeInUp sppb-positioned-addon " data-sppb-wow-duration="700ms" data-sppb-wow-delay="200ms" data-col-zindex="1" data-rowid="b78248bd-010e-4cd3-b423-c90f489c7f85" data-colid="02fb666a-a492-47de-afe8-2d0a0f07d41c">
                                <div id="sppb-addon-wrapper-be19d882-7c7e-44bc-8acc-584e9383eed2" class="sppb-addon-wrapper  addon-root-image">
                                  <div id="sppb-addon-be19d882-7c7e-44bc-8acc-584e9383eed2" class="clearfix  ">
                                    <div class="sppb-addon sppb-addon-single-image  full-width-image sppb-addon-image-shape">
                                      <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                          <img class="sppb-img-responsive " src="{{asset('frontend')}}/images/p1/p5.png" alt="Image" title="" width="1712" height="840" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-3d378121-365d-4619-87bd-36b68db30b19" class="sppb-addon-wrapper  addon-root-button">
                                  <div id="sppb-addon-3d378121-365d-4619-87bd-36b68db30b19" class="clearfix  ">
                                    <div class="sppb-button-wrapper">
                                      <a href="{{asset('frontend')}}/portfolio/single-portfolio.html" id="btn-3d378121-365d-4619-87bd-36b68db30b19" class="sppb-btn  optech-portfolio-btn sppb-btn-custom sppb-btn-rounded">
                                        <span class="p-btn-wraper">
                                          <i class="ri-arrow-right-up-line"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div id="sppb-addon-wrapper-f2f7291e-2af4-4ab5-ac40-98219a242bd7" class="sppb-addon-wrapper ">
                                  <div id="sppb-addon-f2f7291e-2af4-4ab5-ac40-98219a242bd7" class="sppb-div-addon optech-portfolio-data sppb-positioned-addon " data-sppb-wow-duration="300ms" data-col-zindex="2" data-rowid="b78248bd-010e-4cd3-b423-c90f489c7f85" data-colid="02fb666a-a492-47de-afe8-2d0a0f07d41c">
                                    <div id="sppb-addon-wrapper-88dbac3b-38e8-46d9-9a13-cc502c394a66" class="sppb-addon-wrapper  addon-root-heading">
                                      <div id="sppb-addon-88dbac3b-38e8-46d9-9a13-cc502c394a66" class="clearfix  ">
                                        <div class="sppb-addon sppb-addon-header">
                                          <a href="{{asset('frontend')}}/portfolio/single-portfolio.html">
                                            <h4 class="sppb-addon-title">Project for Marketing</h4>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="sppb-addon-wrapper-70481ab3-aa01-41de-bf10-ba7d7430aab4" class="sppb-addon-wrapper  addon-root-text-block">
                                      <div id="sppb-addon-70481ab3-aa01-41de-bf10-ba7d7430aab4" class="clearfix  ">
                                        <div class="sppb-addon sppb-addon-text-block ">
                                          <div class="sppb-addon-content">
                                            <p>Design, Graphics</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-54bd8cb7-69fa-49c9-9034-bcd082c8b08e">
                        <div id="column-id-54bd8cb7-69fa-49c9-9034-bcd082c8b08e" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-9e99566f-f42a-4085-89e7-59501da2fd7d" class="sppb-addon-wrapper  addon-root-button">
                              <div id="sppb-addon-9e99566f-f42a-4085-89e7-59501da2fd7d" class="clearfix  ">
                                <div class="sppb-button-wrapper">
                                  <a href="{{asset('frontend')}}/portfolio/portfolio-grid.html" id="btn-9e99566f-f42a-4085-89e7-59501da2fd7d" class="sppb-btn  sppb-btn-primary sppb-btn-rounded">View Our All Works</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section id="section-id-94bd22a7-b308-42df-a240-6100ffc4f9db" class="sppb-section">
                  <div class="sppb-row-container">
                    <div class="sppb-row">
                      <div class="sppb-row-column  " id="column-wrap-id-146c2c30-8e85-480c-8cdf-ad74a7a9c56b">
                        <div id="column-id-146c2c30-8e85-480c-8cdf-ad74a7a9c56b" class="sppb-column ">
                          <div class="sppb-column-addons"></div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-afb4f4e8-8cbe-4c01-96da-73ed076bcbde">
                        <div id="column-id-afb4f4e8-8cbe-4c01-96da-73ed076bcbde" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-a8b3cdd9-1079-454b-8269-959dd56588d6" class="sppb-addon-wrapper  addon-root-text-block">
                              <div id="sppb-addon-a8b3cdd9-1079-454b-8269-959dd56588d6" class="clearfix  ">
                                <div class="sppb-addon sppb-addon-text-block ">
                                  <h2 class="sppb-addon-title">Our expert team is always ready to help you</h2>
                                  <div class="sppb-addon-content">
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-0dfaf26d-6ad5-4f73-94db-5e0401d5564c">
                        <div id="column-id-0dfaf26d-6ad5-4f73-94db-5e0401d5564c" class="sppb-column  ">
                          <div class="sppb-column-addons"></div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-609c472a-fe10-491e-901f-e5dacea30a5b">
                        <div id="column-id-609c472a-fe10-491e-901f-e5dacea30a5b" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-b3eaf866-4a16-479d-96d0-1da1a2dbf876" class="sppb-addon-wrapper  addon-root-person">
                              <div id="sppb-addon-b3eaf866-4a16-479d-96d0-1da1a2dbf876" class="clearfix  sppb-wow fadeInUp  " data-sppb-wow-duration="700ms">
                                <div class="sppb-addon sppb-addon-person optech-team-wrap person-content-position-bottom-left">
                                  <div class="sppb-addon-content">
                                    <div class="sppb-person-image ">
                                      <img class="sppb-img-responsive" style="display: inline-block;" src="{{asset('frontend')}}/images/team/team1.png" alt="Marvin McKinney" width="612" height="660" loading="lazy">
                                      <div class="person-content-show-on-hover">
                                        <div class="person-content-hover-content-wrap">
                                          <div class="sppb-person-social-icons">
                                            <ul class="sppb-person-social">
                                              <li>
                                                <a target="_blank" rel="noopener noreferrer" href="#" aria-label="Twitter">
                                                  <i class="fab fa-twitter" aria-hidden="true" title="Twitter"></i>
                                                </a>
                                              </li>
                                              <li>
                                                <a target="_blank" rel="noopener noreferrer" href="#" aria-label="LinkedIn">
                                                  <i class="fab fa-linkedin-in" aria-hidden="true" title="LinkedIn"></i>
                                                </a>
                                              </li>
                                              <li>
                                                <a target="_blank" rel="noopener noreferrer" href="#" aria-label="Instagram">
                                                  <i class="fab fa-instagram" aria-hidden="true" title="Instagram"></i>
                                                </a>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sppb-person-information">
                                      <a href="{{asset('frontend')}}/pages/team/team-details.html">
                                        <span class="sppb-person-name">Marvin McKinney</span>
                                      </a>
                                      <span class="sppb-person-designation">CEO & Founder</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-384bd70b-beba-46d0-847c-0982b32ee3ef">
                        <div id="column-id-384bd70b-beba-46d0-847c-0982b32ee3ef" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-b35489f0-14da-4daf-9ede-90a87b886d1d" class="sppb-addon-wrapper  addon-root-person">
                              <div id="sppb-addon-b35489f0-14da-4daf-9ede-90a87b886d1d" class="clearfix  sppb-wow fadeInUp  " data-sppb-wow-duration="700ms" data-sppb-wow-delay="200ms">
                                <div class="sppb-addon sppb-addon-person optech-team-wrap person-content-position-bottom-left">
                                  <div class="sppb-addon-content">
                                    <div class="sppb-person-image ">
                                      <img class="sppb-img-responsive" style="display: inline-block;" src="{{asset('frontend')}}/images/team/team2.png" alt="Sophia Rodriguez" width="612" height="660" loading="lazy">
                                      <div class="person-content-show-on-hover">
                                        <div class="person-content-hover-content-wrap">
                                          <div class="sppb-person-social-icons">
                                            <ul class="sppb-person-social">
                                              <li>
                                                <a target="_blank" rel="noopener noreferrer" href="#" aria-label="Twitter">
                                                  <i class="fab fa-twitter" aria-hidden="true" title="Twitter"></i>
                                                </a>
                                              </li>
                                              <li>
                                                <a target="_blank" rel="noopener noreferrer" href="#" aria-label="LinkedIn">
                                                  <i class="fab fa-linkedin-in" aria-hidden="true" title="LinkedIn"></i>
                                                </a>
                                              </li>
                                              <li>
                                                <a target="_blank" rel="noopener noreferrer" href="#" aria-label="Instagram">
                                                  <i class="fab fa-instagram" aria-hidden="true" title="Instagram"></i>
                                                </a>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sppb-person-information">
                                      <a href="{{asset('frontend')}}/pages/team/team-details.html">
                                        <span class="sppb-person-name">Sophia Rodriguez</span>
                                      </a>
                                      <span class="sppb-person-designation">Creative Director</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-433c3b5e-4ac2-4551-990f-b397eed5415c">
                        <div id="column-id-433c3b5e-4ac2-4551-990f-b397eed5415c" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-c9c2ddba-9c3a-467f-a8ae-ebcddc146ba0" class="sppb-addon-wrapper  addon-root-person">
                              <div id="sppb-addon-c9c2ddba-9c3a-467f-a8ae-ebcddc146ba0" class="clearfix  sppb-wow fadeInUp  " data-sppb-wow-duration="700ms" data-sppb-wow-delay="400ms">
                                <div class="sppb-addon sppb-addon-person optech-team-wrap person-content-position-bottom-left">
                                  <div class="sppb-addon-content">
                                    <div class="sppb-person-image ">
                                      <img class="sppb-img-responsive" style="display: inline-block;" src="{{asset('frontend')}}/images/team/team3.png" alt="Marvin McKinney" width="612" height="660" loading="lazy">
                                      <div class="person-content-show-on-hover">
                                        <div class="person-content-hover-content-wrap">
                                          <div class="sppb-person-social-icons">
                                            <ul class="sppb-person-social">
                                              <li>
                                                <a target="_blank" rel="noopener noreferrer" href="#" aria-label="Twitter">
                                                  <i class="fab fa-twitter" aria-hidden="true" title="Twitter"></i>
                                                </a>
                                              </li>
                                              <li>
                                                <a target="_blank" rel="noopener noreferrer" href="#" aria-label="LinkedIn">
                                                  <i class="fab fa-linkedin-in" aria-hidden="true" title="LinkedIn"></i>
                                                </a>
                                              </li>
                                              <li>
                                                <a target="_blank" rel="noopener noreferrer" href="#" aria-label="Instagram">
                                                  <i class="fab fa-instagram" aria-hidden="true" title="Instagram"></i>
                                                </a>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sppb-person-information">
                                      <a href="{{asset('frontend')}}/pages/team/team-details.html">
                                        <span class="sppb-person-name">Marvin McKinney</span>
                                      </a>
                                      <span class="sppb-person-designation">Lead Developer</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-d28bf929-9000-4e9e-b35f-949ca7219fbd">
                        <div id="column-id-d28bf929-9000-4e9e-b35f-949ca7219fbd" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-7dd2bfb6-ee3f-48a1-b852-b6cfdff877a1" class="sppb-addon-wrapper  addon-root-person">
                              <div id="sppb-addon-7dd2bfb6-ee3f-48a1-b852-b6cfdff877a1" class="clearfix  sppb-wow fadeInUp  " data-sppb-wow-duration="700ms" data-sppb-wow-delay="600ms">
                                <div class="sppb-addon sppb-addon-person optech-team-wrap person-content-position-bottom-left">
                                  <div class="sppb-addon-content">
                                    <div class="sppb-person-image ">
                                      <img class="sppb-img-responsive" style="display: inline-block;" src="{{asset('frontend')}}/images/team/team4.png" alt="Alexander Cameron" width="612" height="660" loading="lazy">
                                      <div class="person-content-show-on-hover">
                                        <div class="person-content-hover-content-wrap">
                                          <div class="sppb-person-social-icons">
                                            <ul class="sppb-person-social">
                                              <li>
                                                <a target="_blank" rel="noopener noreferrer" href="#" aria-label="Twitter">
                                                  <i class="fab fa-twitter" aria-hidden="true" title="Twitter"></i>
                                                </a>
                                              </li>
                                              <li>
                                                <a target="_blank" rel="noopener noreferrer" href="#" aria-label="LinkedIn">
                                                  <i class="fab fa-linkedin-in" aria-hidden="true" title="LinkedIn"></i>
                                                </a>
                                              </li>
                                              <li>
                                                <a target="_blank" rel="noopener noreferrer" href="#" aria-label="Instagram">
                                                  <i class="fab fa-instagram" aria-hidden="true" title="Instagram"></i>
                                                </a>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sppb-person-information">
                                      <a href="{{asset('frontend')}}/pages/team/team-details.html">
                                        <span class="sppb-person-name">Alexander Cameron</span>
                                      </a>
                                      <span class="sppb-person-designation">Product Designer</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section id="section-id-f99ee938-bd7e-4750-be04-e5d7bbadf4ff" class="sppb-section">
                  <div class="sppb-row-container">
                    <div class="sppb-row">
                      <div class="sppb-row-column  " id="column-wrap-id-e7027bc7-6ba4-4e42-9e47-b50cf8f9fe42">
                        <div id="column-id-e7027bc7-6ba4-4e42-9e47-b50cf8f9fe42" class="sppb-column ">
                          <div class="sppb-column-addons"></div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-04ddfe3a-80a0-4a1a-b648-9ee3cdd21939">
                        <div id="column-id-04ddfe3a-80a0-4a1a-b648-9ee3cdd21939" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-f4e8d44c-38a0-4681-b52e-135e3289c58d" class="sppb-addon-wrapper  addon-root-text-block">
                              <div id="sppb-addon-f4e8d44c-38a0-4681-b52e-135e3289c58d" class="clearfix  ">
                                <div class="sppb-addon sppb-addon-text-block ">
                                  <h2 class="sppb-addon-title">Don’t take our word, see what our customers say</h2>
                                  <div class="sppb-addon-content">
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-33160f02-f8bf-4ecf-a1de-60082c790a64">
                        <div id="column-id-33160f02-f8bf-4ecf-a1de-60082c790a64" class="sppb-column ">
                          <div class="sppb-column-addons"></div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-4a38c0bb-7538-47c0-b93f-91d307542155">
                        <div id="column-id-4a38c0bb-7538-47c0-b93f-91d307542155" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-aaa2b8fe-7c85-440c-9d11-a13502e32d43" class="sppb-addon-wrapper  addon-root-raw-html">
                              <div id="sppb-addon-aaa2b8fe-7c85-440c-9d11-a13502e32d43" class="clearfix  sppb-wow fadeInUp  " data-sppb-wow-duration="700ms">
                                <div class="sppb-addon sppb-addon-raw-html ">
                                  <div class="sppb-addon-content">
                                    <div class="optech-2column-slider">
                                      <div class="optech-t-box">
                                        <div class="optech-t-quote">
                                          <img src="{{asset('frontend')}}/images/v1/quote.svg" alt="">
                                        </div>
                                        <div class="optech-t-data">
                                          <p>“ Working with several word press themes and templates the last years, I only can say this is best in every level. I use it for my company and the reviews that I have already are all excellent. Not only the design but the code quality ”</p>
                                          <div class="optech-t-rating">
                                            <ul>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                            </ul>
                                          </div>
                                          <div class="optech-t-author">
                                            <h5>Brooklyn Simmons</h5>
                                            <span>Lead Developer</span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="optech-t-box">
                                        <div class="optech-t-quote">
                                          <img src="{{asset('frontend')}}/images/v1/quote.svg" alt="">
                                        </div>
                                        <div class="optech-t-data">
                                          <p>“ Working with several word press themes and templates the last years, I only can say this is best in every level. I use it for my company and the reviews that I have already are all excellent. Not only the design but the code quality ”</p>
                                          <div class="optech-t-rating">
                                            <ul>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                            </ul>
                                          </div>
                                          <div class="optech-t-author">
                                            <h5>Alexander Cameron</h5>
                                            <span>Lead Developer</span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="optech-t-box">
                                        <div class="optech-t-quote">
                                          <img src="{{asset('frontend')}}/images/v1/quote.svg" alt="">
                                        </div>
                                        <div class="optech-t-data">
                                          <p>“ Working with several word press themes and templates the last years, I only can say this is best in every level. I use it for my company and the reviews that I have already are all excellent. Not only the design but the code quality ”</p>
                                          <div class="optech-t-rating">
                                            <ul>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                              <li>
                                                <img src="{{asset('frontend')}}/images/v1/rating.svg" alt="">
                                              </li>
                                            </ul>
                                          </div>
                                          <div class="optech-t-author">
                                            <h5>Brooklyn Simmons</h5>
                                            <span>Lead Developer</span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section id="section-id-e82929df-8c40-421d-a1aa-09efb40f7013" class="sppb-section">
                  <div class="sppb-row-container">
                    <div class="sppb-row">
                      <div class="sppb-row-column  " id="column-wrap-id-73e623fd-3eca-4457-9ff2-f9fd52a3b02c">
                        <div id="column-id-73e623fd-3eca-4457-9ff2-f9fd52a3b02c" class="sppb-column ">
                          <div class="sppb-column-addons">
                            <div id="section-id-46fbfbc5-76b1-47de-bf94-61fb28659c92" class="sppb-section sppb-section-content-center">
                              <div class="sppb-container-inner">
                                <div class="sppb-row sppb-nested-row sppb-align-center">
                                  <div class="sppb-row-column  " id="column-wrap-id-60fb66c8-a89d-4c0d-9bcb-87005f64f18c">
                                    <div id="column-id-60fb66c8-a89d-4c0d-9bcb-87005f64f18c" class="sppb-column  ">
                                      <div class="sppb-column-addons">
                                        <div id="sppb-addon-wrapper-2209838e-2728-4a42-b95a-d20ff743f5b1" class="sppb-addon-wrapper  addon-root-text-block">
                                          <div id="sppb-addon-2209838e-2728-4a42-b95a-d20ff743f5b1" class="clearfix  ">
                                            <div class="sppb-addon sppb-addon-text-block ">
                                              <h2 class="sppb-addon-title">Recent blog & articles about technology</h2>
                                              <div class="sppb-addon-content">
                                                <p></p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div id="sppb-addon-wrapper-3a151fca-f96b-45a2-a2b5-90ae65b4628d" class="sppb-addon-wrapper  sppb-hidden-xl  sppb-hidden-lg  sppb-hidden-md  addon-root-empty-space">
                                          <div id="sppb-addon-3a151fca-f96b-45a2-a2b5-90ae65b4628d" class="clearfix  ">
                                            <div class="sppb-empty-space  clearfix"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="sppb-row-column  " id="column-wrap-id-3c821917-590b-4d95-83cd-541f871569f5">
                                    <div id="column-id-3c821917-590b-4d95-83cd-541f871569f5" class="sppb-column  ">
                                      <div class="sppb-column-addons">
                                        <div id="sppb-addon-wrapper-7b02ec6e-242a-49e7-93a3-ab45b4433558" class="sppb-addon-wrapper  addon-root-button">
                                          <div id="sppb-addon-7b02ec6e-242a-49e7-93a3-ab45b4433558" class="clearfix  ">
                                            <div class="sppb-button-wrapper">
                                              <a href="{{asset('frontend')}}/pages/blog/blog.html" id="btn-7b02ec6e-242a-49e7-93a3-ab45b4433558" class="sppb-btn  sppb-btn-primary sppb-btn-rounded">View All Posts</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="sppb-addon-wrapper-a14a2aec-09fc-40fc-9efd-646831253ce7" class="sppb-addon-wrapper  addon-root-articles">
                              <div id="sppb-addon-a14a2aec-09fc-40fc-9efd-646831253ce7" class="clearfix  sppb-wow fadeInUp  " data-sppb-wow-duration="700ms">
                                <div class="sppb-addon sppb-addon-articles blog-grid">
                                  <div class="sppb-addon-content">
                                    <div class="sppb-row">
                                      <div class="sppb-addon-article-layout sppb-col-xs-12 sppb-col-sm-6 sppb-col-md-6 sppb-col-lg-4 sppb-col-12">
                                        <div class="sppb-addon-article sppb-addon-article-layout-content ">
                                          <a class="sppb-article-img-wrap" href="{{asset('frontend')}}/pages/blog/blog-grid/planning-your-online-business-goals-with-a-specialist.html" itemprop="url">
                                            <img class="sppb-img-responsive" src="{{asset('frontend')}}/images/blog/blog6.png#joomlaImage://local-images/blog/blog6.png?width=832&height=680" alt="Planning your online business goals with a specialist" itemprop="thumbnailUrl" loading="lazy">
                                          </a>
                                          <div class="sppb-article-info-wrap" role="article">
                                            <h3>
                                              <a href="{{asset('frontend')}}/pages/blog/blog-grid/planning-your-online-business-goals-with-a-specialist.html" itemprop="url">Planning your online business goals with a specialist</a>
                                            </h3>
                                            <div class="sppb-article-meta">
                                              <time datetime="2024-12-02T17:50:18+00:00" class="sppb-meta-date sppb-meta-date-unmodified">02 December 2024</time>
                                              <span class="sppb-meta-category">
                                                <a href="{{asset('frontend')}}/pages/blog/blog-grid.html" itemprop="genre">Business</a>
                                              </span>
                                            </div>
                                            <a class="sppb-readmore" href="{{asset('frontend')}}/pages/blog/blog-grid/planning-your-online-business-goals-with-a-specialist.html" aria-label="Read more about: Planning your online busi..." itemprop="url">Learn More</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="sppb-addon-article-layout sppb-col-xs-12 sppb-col-sm-6 sppb-col-md-6 sppb-col-lg-4 sppb-col-12">
                                        <div class="sppb-addon-article sppb-addon-article-layout-content ">
                                          <a class="sppb-article-img-wrap" href="{{asset('frontend')}}/pages/blog/blog-grid/boost-your-startup-business-with-our-digital-agency.html" itemprop="url">
                                            <img class="sppb-img-responsive" src="{{asset('frontend')}}/images/blog/blog7.png#joomlaImage://local-images/blog/blog7.png?width=832&height=680" alt="Boost your startup business with our digital agency" itemprop="thumbnailUrl" loading="lazy">
                                          </a>
                                          <div class="sppb-article-info-wrap" role="article">
                                            <h3>
                                              <a href="{{asset('frontend')}}/pages/blog/blog-grid/boost-your-startup-business-with-our-digital-agency.html" itemprop="url">Boost your startup business with our digital agency</a>
                                            </h3>
                                            <div class="sppb-article-meta">
                                              <time datetime="2024-12-02T17:50:18+00:00" class="sppb-meta-date sppb-meta-date-unmodified">02 December 2024</time>
                                              <span class="sppb-meta-category">undefined<a href="{{asset('frontend')}}/pages/blog/blog-grid.html" itemprop="genre">Business</a>
                                              </span>
                                            </div>
                                            <a class="sppb-readmore" href="{{asset('frontend')}}/pages/blog/blog-grid/boost-your-startup-business-with-our-digital-agency.html" aria-label="Read more about: Boost your startup busine..." itemprop="url">Learn More</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="sppb-addon-article-layout sppb-col-xs-12 sppb-col-sm-6 sppb-col-md-6 sppb-col-lg-4 sppb-col-12">
                                        <div class="sppb-addon-article sppb-addon-article-layout-content ">
                                          <a class="sppb-article-img-wrap" href="{{asset('frontend')}}/pages/blog/blog-grid/proactive-customer-experience-in-the-business.html" itemprop="url">
                                            <img class="sppb-img-responsive" src="{{asset('frontend')}}/images/blog/blog8.png#joomlaImage://local-images/blog/blog8.png?width=832&height=680" alt="Proactive customer experience in the business" itemprop="thumbnailUrl" loading="lazy">
                                          </a>
                                          <div class="sppb-article-info-wrap" role="article">
                                            <h3>undefined<a href="{{asset('frontend')}}/pages/blog/blog-grid/proactive-customer-experience-in-the-business.html" itemprop="url">Proactive customer experience in the business</a>
                                            </h3>
                                            <div class="sppb-article-meta">undefined<time datetime="2024-12-02T17:50:18+00:00" class="sppb-meta-date sppb-meta-date-unmodified">02 December 2024</time>undefined<span class="sppb-meta-category">undefined<a href="{{asset('frontend')}}/pages/blog/blog-grid.html" itemprop="genre">Business</a>undefined</span>
                                            </div>
                                            <a class="sppb-readmore" href="{{asset('frontend')}}/pages/blog/blog-grid/proactive-customer-experience-in-the-business.html" aria-label="Read more about: Proactive customer experi..." itemprop="url">Learn More</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section id="section-id-9f113c39-a243-40e6-8663-9a2a81b5eeba" class="sppb-section">
                  <div class="sppb-row-container">
                    <div class="sppb-row">
                      <div class="sppb-row-column  " id="column-wrap-id-310f0edd-a05c-44d4-8ca7-79895a031f69">
                        <div id="column-id-310f0edd-a05c-44d4-8ca7-79895a031f69" class="sppb-column ">
                          <div class="sppb-column-addons"></div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-571e1305-7c68-4465-8fe5-d3a26bd2316b">
                        <div id="column-id-571e1305-7c68-4465-8fe5-d3a26bd2316b" class="sppb-column  ">
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-wrapper-05bc2e57-2940-464f-8045-9138c04f33e6" class="sppb-addon-wrapper  addon-root-text-block">
                              <div id="sppb-addon-05bc2e57-2940-464f-8045-9138c04f33e6" class="clearfix  ">
                                <div class="sppb-addon sppb-addon-text-block ">
                                  <h2 class="sppb-addon-title">Let’s work together</h2>
                                  <div class="sppb-addon-content">
                                    <p>Each demo built with Teba will look different. You can customize anything appearance of your website with only a few clicks</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="sppb-addon-wrapper-78d21b32-4dc9-4969-b881-f433226b2b3f" class="sppb-addon-wrapper  addon-root-button">
                              <div id="sppb-addon-78d21b32-4dc9-4969-b881-f433226b2b3f" class="clearfix  sppb-wow fadeInUp  " data-sppb-wow-duration="700ms">
                                <div class="sppb-button-wrapper">
                                  <a href="{{asset('frontend')}}/contact.html" id="btn-78d21b32-4dc9-4969-b881-f433226b2b3f" class="sppb-btn  sppb-btn-primary sppb-btn-rounded">Let’s Start a Project</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-row-column  " id="column-wrap-id-26f2c276-dc20-458e-803e-b63364228179">
                        <div id="column-id-26f2c276-dc20-458e-803e-b63364228179" class="sppb-column ">
                          <div class="sppb-column-addons"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </main>
      </div>
    </section>
  @endsection