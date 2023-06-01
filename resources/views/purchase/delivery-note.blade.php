@extends('layouts.main')
@section('content')

<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Delivery Note</h3>
                 
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                   <div class="bookmark">
                    <ul>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfat" >Upload Template</button>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="download"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                     
                      <div class="modal fade" id="exampleModalfat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Add The Template</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="mb-3">
                                <label class="col-form-label d-flex flex-row" for="recipient-name">Name:</label>
                                <input class="form-control" type="text" >
                              </div>

                              <div class="mb-3">
                                <label class="col-form-label d-flex flex-row" for="recipient-name">Upload Template:</label>
                                <input class="form-control" type="file" >
                              </div>

                              <!-- <div class="mb-3">
                                <label class="col-form-label" for="message-text">Comments:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                              </div> -->
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="button">Upload</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Delivery Note Template Designs</h5>
                  </div>
                  <div class="card-body">
                    <div class="row gallery my-gallery" id="aniimated-thumbnials" itemscope="">
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/01.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  1</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/02.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  2</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/03.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/03.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  3</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/04.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/04.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  4</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/05.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/05.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  5</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/06.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/06.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  6</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/07.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/07.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  7</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/08.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/08.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  8</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/09.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/09.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  9</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/010.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/010.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  10</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/011.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/011.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  11</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/012.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/012.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  12</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/013.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/013.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  13</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/014.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/014.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  14</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/015.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/015.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  15</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/016.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/016.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  16</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/01.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  17</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/02.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  18</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/03.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/03.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  19</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/04.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/04.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  20</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/05.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/05.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  21</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/010.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/010.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  22</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/011.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/011.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  23</figcaption>
                      </figure>
                      <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/012.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/012.jpg" itemprop="thumbnail" alt="Image description"></a>
                        <figcaption itemprop="caption description">Image caption  24</figcaption>
                      </figure>
                    </div>
                    <!-- Root element of PhotoSwipe. Must have class pswp.-->
                    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                      <!--
                      Background of PhotoSwipe.
                      It's a separate element, as animating opacity is faster than rgba().
                      -->
                      <div class="pswp__bg"></div>
                      <!-- Slides wrapper with overflow:hidden.-->
                      <div class="pswp__scroll-wrap">
                        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
                        <!-- don't modify these 3 pswp__item elements, data is added later on.-->
                        <div class="pswp__container">
                          <div class="pswp__item"></div>
                          <div class="pswp__item"></div>
                          <div class="pswp__item"></div>
                        </div>
                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                        <div class="pswp__ui pswp__ui--hidden">
                          <div class="pswp__top-bar">
                            <!-- Controls are self-explanatory. Order can be changed.-->
                            <div class="pswp__counter"></div>
                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                            <button class="pswp__button pswp__button--share" title="Share"></button>
                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                            <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
                            <!-- element will get class pswp__preloader--active when preloader is running-->
                            <div class="pswp__preloader">
                              <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                  <div class="pswp__preloader__donut"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                          </div>
                          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                          <div class="pswp__caption">
                            <div class="pswp__caption__center"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

        @stop